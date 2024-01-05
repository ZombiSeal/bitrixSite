document.addEventListener('DOMContentLoaded', () => {
    let form = document.querySelector('#filter');
    let filter = new AjaxFilter(form);
    let checkboxes = document.querySelectorAll('#filter .check');
    let inputs = document.querySelectorAll('#filter input[type="text"]');
    let btnReset = document.querySelector('.reset');
    let filterParamsBlock = document.querySelector('.filter-param__active');
    let params = filterParamsBlock.querySelectorAll('div');

    filter.getElementsCount();

    //отправка формы
    if (form) {
        form.addEventListener('submit', (e) => {
            e.preventDefault();
            filter.scrollToElements();
            filter.submit();
        })
    }

    //выбор checkbox
    checkboxes.forEach((check) => {
        check.addEventListener('click', (e) => {
            if (e.target.tagName == 'SPAN') return;
            e.preventDefault();

            filter.checkboxParams(check);
            filter.getElementsCount();
        });
    });

    //изменение значение input[type='text']
    inputs.forEach(input => {
        input.addEventListener('keyup', (e) => {
            e.target.value = e.target.value.replace(/[^\d]/g, '');

            filter.inputParams(e.target);
            filter.getElementsCount();
        });
    });

    //выбор из списка select
    document.addEventListener('click', (e) => {
        if (!e.target.classList.contains('sel')) return;

        filter.selectParams(e.target);
        filter.getElementsCount();
    })

    params.forEach(param => {
        param.addEventListener("click", (e) => {
            console.log(e.currentTarget);
        })
    })

    //сброс фильтра
    btnReset.addEventListener('click', (e) => {
        e.preventDefault();
        checkboxes.forEach(check => {
            let children = check.firstElementChild;
            let checkbox = check.querySelector("input[type='checkbox']");
            checkbox.checked = false;
            if (children.classList.contains('checked')) children.classList.remove('checked');
        })
        inputs.forEach(input => {
            input.value = "";
        });
        filter.getElementsCount();
    })
})

function AjaxFilter(form) {
    this.url = window.location.href;
    this.params = this.getParams();
    this.form = form;
    this.filterParams = document.querySelector('.filter-param__active');
    this.inputRange = [];
    this.oldId = document.querySelector('select.select option:checked').id;
    this.isExistFlag = false;
}

AjaxFilter.prototype.getParams = function () {
    let params = window
        .location
        .search
        .replace('?', '')
        .split('&')
        .reduce(
            function (p, e) {
                var a = e.split('=');
                p[decodeURIComponent(a[0])] = decodeURIComponent(a[1]);
                return p;
            },
            {}
        );

    return params;
}

AjaxFilter.prototype.generateUrl = function () {
    let symbol = (this.params.hasOwnProperty("") && this.params[""] === undefined) ? "&" : "?";
    this.url = symbol + "set_filter=Y";
    let formData = new FormData(this.form);
    console.log(formData);
    for (let pair of formData.entries()) {
        if (pair[1].length !== 0) {
            this.url += "&" + pair[0] + "=" + pair[1];
        }
    }
    for (let key in this.params) {
        if (!this.url.includes(key) && !key.includes('arrFilter')) this.url += "&" + key + "=" + this.params[key];
    }
}

AjaxFilter.prototype.getElementsCount = function () {
    this.generateUrl();
    fetch(this.url, {
            headers: {'X-Requested-With': 'XMLHttpRequest'}
        }
    ).then(res => {
        return res.text();
    }).then(data => {
        let dataContainer = document.createElement('div');
        dataContainer.innerHTML = data;
        let elements = dataContainer.querySelectorAll(".catalog-item");
        document.querySelector('.num_el').innerHTML = "(" + elements.length + ")";
    }).catch((error) => console.log(error));
}

AjaxFilter.prototype.submit = function () {

    this.generateUrl();
    let catalog = document.querySelector('.catalog-container');
    catalog.classList.add('blur');

    fetch(this.url, {
            headers: {'X-Requested-With': 'XMLHttpRequest'}
        }
    ).then(res => {
        return res.text();
    }).then(data => {
        catalog.classList.remove('blur');
        document.querySelector(".catalog-container__page").innerHTML = data
    }).catch((error) => console.log(error));
    history.pushState(null, null, this.url);
}

AjaxFilter.prototype.scrollToElements = function () {
    let hiddenElem = document.querySelector('.catalog-container');
    hiddenElem.scrollIntoView({block: "center", behavior: "smooth"});
}

AjaxFilter.prototype.createFilterParam = function (id, text) {
    let divElement = document.createElement("div");
    divElement.setAttribute('input-id', id);
    let textElement = document.createElement("p");
    textElement.innerHTML = text;
    divElement.appendChild(textElement);


    let svgElement = document.createElementNS("http://www.w3.org/2000/svg", "svg");
    svgElement.setAttribute("class", "sprite-svg");

    let useElement = document.createElementNS("http://www.w3.org/2000/svg", "use");
    useElement.setAttribute("xlink:href", "/local/templates/agro/images/sprite/sprite.svg#close");

    svgElement.appendChild(useElement);
    divElement.appendChild(svgElement);

    return divElement;
}

AjaxFilter.prototype.checkboxParams = function (check) {
    let text = check.querySelector('span').getAttribute('title');
    let id = check.querySelector('input[type="checkbox"]').getAttribute('name');

    let isExists = this.filterParams.querySelector('div[input-id=' + id + ']') ?? null;

    if (isExists) {
        this.filterParams.querySelector('div[input-id=' + id + ']').remove()
    } else {
        this.filterParams.appendChild(this.createFilterParam(id, text))
    }
}

AjaxFilter.prototype.inputParams = function (input) {
    let parent = input.parentElement;
    let id = input.id;
    id = id.replace(/_(MIN|MAX)$/, "");
    let match = id.match(/_(MIN|MAX)$/);
    let minOrMax = match ? match[1] : null;
    let text = input.value;
    let isExists = this.filterParams.querySelector('div[input-id=' + id + ']') ?? null;

    (minOrMax === 'MIN') ? this.inputRange[0] = text : this.inputRange[1] = text;

    this.inputRange = Array.from(parent.children).map(child => child.value);
    this.inputRange = this.inputRange.filter(item => item.trim() !== "");


    if (this.inputRange.length === 1) text = this.inputRange[0];
    if (this.inputRange.length === 2) text = this.inputRange[0] + ' - ' + this.inputRange[1];

    if (isExists) {
        if (text === "") {
            this.filterParams.querySelector('div[input-id=' + id + ']').remove();
        } else {
            this.filterParams.querySelector('div[input-id=' + id + '] p').innerText = text;
        }
    } else {
        this.filterParams.appendChild(this.createFilterParam(id, text))
    }

}

AjaxFilter.prototype.selectParams = function (select) {
    let text = select.innerText.trim();
    let id = document.querySelector('select.select option:checked').id;

    let isExists = this.filterParams.querySelector('div[input-id=' + id + ']') ?? null;

    if (text == "Выбрать") {
        this.filterParams.querySelector('div[input-id=' + this.oldId + ']').remove();
        this.isExistFlag = false;
    } else {
        if ((!isExists)) {
            if (this.isExistFlag) {
                this.filterParams.querySelector('div[input-id=' + this.oldId + '] p').innerText = text;
                this.filterParams.querySelector('div[input-id=' + this.oldId + ']').setAttribute('input-id', id);
            } else {
                this.filterParams.appendChild(this.createFilterParam(id, text));
                this.isExistFlag = true;
            }
        }
    }

    this.oldId = id;
}