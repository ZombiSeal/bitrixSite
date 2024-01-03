document.addEventListener('DOMContentLoaded', () => {
    let form = document.querySelector('#filter');
    let filter = new AjaxFilter(form);
    let checkboxes = document.querySelectorAll('#filter .check');
    let inputs = document.querySelectorAll('#filter input[type="text"]');
    let btnReset = document.querySelector('.reset');
    filter.getElementsCount();

    if(form) {
        form.addEventListener('submit', (e) => {
            e.preventDefault();
            filter.scrollToElements();
            filter.submit();
        })
    }

    checkboxes.forEach((check) => {
        check.addEventListener('click', (e) => {
            if(e.target.tagName == 'SPAN') return;
            filter.getElementsCount();

            let text = check.querySelector('span').getAttribute('title');
        });
    });

    inputs.forEach(input => {
        input.addEventListener('keyup', (e) => {
            e.target.value = e.target.value.replace(/[^\d]/g,'');
            filter.getElementsCount();
        });
    });

    document.addEventListener('click', (e) => {
        if(!e.target.classList.contains('sel')) return;
        filter.getElementsCount();
    })


    btnReset.addEventListener('click', (e) => {
        e.preventDefault();
        checkboxes.forEach(check => {
            let children = check.firstElementChild;
            let checkbox = check.querySelector("input[type='checkbox']");
            checkbox.checked = false;
            if(children.classList.contains('checked')) children.classList.remove('checked');
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
}

AjaxFilter.prototype.getParams = function () {
    let params = window
        .location
        .search
        .replace('?','')
        .split('&')
        .reduce(
            function(p,e){
                var a = e.split('=');
                p[ decodeURIComponent(a[0])] = decodeURIComponent(a[1]);
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
        if(pair[1].length !== 0) {
            this.url += "&" + pair[0] + "=" + pair[1];
        }
    }
    for (let key in this.params) {
        if(!this.url.includes(key) && !key.includes('arrFilter')) this.url += "&" + key + "=" + this.params[key];
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

AjaxFilter.prototype.scrollToElements = function() {
    let hiddenElem =  document.querySelector('.catalog-container');
    hiddenElem.scrollIntoView({ block: "center", behavior: "smooth" });
}

AjaxFilter.prototype.createFilterParam = function(text) {
    let divElement = document.createElement("div");
    divElement.innerHTML = text;

    let svgElement = document.createElementNS("http://www.w3.org/2000/svg", "svg");
    svgElement.setAttribute("class", "sprite-svg");

    let useElement = document.createElementNS("http://www.w3.org/2000/svg", "use");
    useElement.setAttribute("xlink:href", "./images/sprite/sprite.svg#close");

    svgElement.appendChild(useElement);
    divElement.appendChild(svgElement);

    return divElement;
}

