document.addEventListener('DOMContentLoaded', () => {
    let form = document.querySelector('#filter');
    if(form) {
        form.addEventListener('submit', (e) => {
            e.preventDefault();
            let filter = new AjaxFilter(form);
            filter.submit();
        })
    }

})

// addEventListener('click', e => {
//     console.log('hello')
// })


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

AjaxFilter.prototype.submit = function () {

    console.log(this.params);
    let symbol = (this.params.hasOwnProperty("") && this.params[""] === undefined) ? "&" : "?";
    let filterUrl = symbol + "set_filter=Y";
    let formData = new FormData(this.form);
    for (let pair of formData.entries()) {
        if(pair[1].length !== 0) {
            filterUrl += "&" + pair[0] + "=" + pair[1];
        }
    }
    for (let key in this.params) {
        if(!filterUrl.includes(key) && !key.includes('arrFilter')) filterUrl += "&" + key + "=" + this.params[key];
    }

    fetch(filterUrl, {
        headers: {'X-Requested-With': 'XMLHttpRequest'}
    }
    ).then(res => {
        return res.text();
    }).then(data => {
        document.querySelector(".catalog-container__page").innerHTML = data
        console.log(data);
    }).catch((error) => console.log(error));
    history.pushState(null, null, filterUrl)
}
