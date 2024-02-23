document.addEventListener("DOMContentLoaded", () => {
    let basketBtns = document.querySelectorAll('.add-basket');
    let compareBtns = document.querySelectorAll('.compare-pr');
    let delAllFromCompare = document.querySelector('.fixed-compare__close');

    let page = '';
    if(document.querySelector('.catalog-container')){
        page = 'catalog';
    }  else if (document.querySelector('.compare')) {
        page = 'compare'
    } else if (document.querySelector('.card-info')) {
        page = 'element';
    }


    if(basketBtns)
        getBasketItems(page);{
        basketBtns.forEach(btn => {
            btn.addEventListener('click', e => {
                if(!btn.classList.contains('active-link')) {
                    e.preventDefault();
                    let elem = e.currentTarget;
                    let url = e.currentTarget.getAttribute('href');
                    addToBasket(url, elem, page);
                }
            })
        })
    }

    if(compareBtns) {
        getCompareItems(page);
        compareBtns.forEach(compare => {
            compare.addEventListener('click', e => {
                e.preventDefault();
                let elem = e.currentTarget;
                let url = e.currentTarget.getAttribute('href');
                addToCompare(url, elem, page);
            })
        })
    }

    if(delAllFromCompare) {
        delAllFromCompare.addEventListener('click', e=> {
            e.preventDefault();
            delAllCompareItems(page);
        })
    }

})

function getBasketItems(type) {
    fetch('/ajax/basket-items.php', {
            method: 'POST',
            body: new URLSearchParams({
                ajax_basket: 'Y',
            }),
            headers: {
                'X-Requested-With': 'XMLHttpRequest'
            }
        }
    ).then(res => {
        return res.json();
    }).then(data => {
        if(data.length !== 0) {
            let items = document.querySelectorAll('.add-basket');
            if(items) {
                items.forEach(item => {
                    if(data.includes(+item.getAttribute('data-id'))) {
                        changeLinkStatus(item, 'В корзине', true, type);
                        item.setAttribute('href', '/basket/');
                    }
                })
            }

            let btnBuy = document.querySelector('.link--buy');
            if(btnBuy && data.includes(+btnBuy.getAttribute('data-id'))) {
                btnBuy.setAttribute('href', '/basket/');
                btnBuy.lastChild.nodeValue = 'В КОРЗИНЕ';
            }
        }

    }).catch((error) => console.log(error));
}
function getCompareItems(type) {
    fetch('/ajax/compare-items.php', {
            method: 'POST',
            body: new URLSearchParams({
                ajax_compare: 'Y',
            }),
            headers: {
                'X-Requested-With': 'XMLHttpRequest'
            }
        }
    ).then(res => {
        return res.json();
    }).then(data => {
        if(data.length !== 0) {
            let fixedBlock = document.querySelector('.fixed-compare');
            if(fixedBlock) fixedBlock.style.display = 'flex';
            let items = document.querySelectorAll('.compare-pr');
            if(items) {
                items.forEach(item => {
                    if(data.includes(+item.getAttribute('data-id'))) {
                        item.setAttribute('action', 'DELETE_FROM_COMPARE_LIST');
                        changeLinkStatus(item, 'Убрать из сравнения', true, type);
                    }
                })
            }
            let countCompareBlock = document.querySelector('.fixed-compare__link');
            if(countCompareBlock) {
                let textCompare = getNoun(data.length, ['товар', 'товара', 'товаров']);
                countCompareBlock.innerHTML = data.length + '  ' + textCompare;
            }
        } else {
            let compareBlock = document.querySelector('.fixed-compare');
            if(compareBlock) compareBlock.style.display = 'none';
        }
    }).catch((error) => console.log(error));
}

function addToBasket(url, elem, type) {
    fetch(url, {
            method: 'POST',
            body: new URLSearchParams({
                ajax_basket: 'Y',
                quantity: '1'
            }),
            headers: {
                'X-Requested-With': 'XMLHttpRequest'
            }
        }
    ).then(res => {
        return res.json();
    }).then(data => {
        if (data['STATUS'] === 'OK') {
            elem.setAttribute('href', '/basket/');
            changeLinkStatus(elem, 'В корзине', true, type);
            let countBlock = document.querySelector('.basket-block .count');
            if (!countBlock.classList.contains('active')) countBlock.classList.add('active');
            countBlock.innerHTML = +countBlock.innerHTML + 1;
        }
    }).catch((error) => console.log(error));
}

function addToCompare(url, elem, type) {
    fetch(url, {
            method: 'POST',
            body: new URLSearchParams({
                ajax_action: "Y",
                action: elem.getAttribute('action'),
                id: elem.getAttribute('data-id')
            }),
            headers: {
                'X-Requested-With': 'XMLHttpRequest'
            }
        }
    ).then(res => {
        return res.json();
    }).then(data => {
        if(data['STATUS'] === 'OK') {
            let active = true;
            let text = '';
            let compareBlock = document.querySelector('.fixed-compare__link');
            let countCompare = data['COUNT'];

            if(elem.getAttribute('action') == 'ADD_TO_COMPARE_LIST'){
                elem.setAttribute('action', 'DELETE_FROM_COMPARE_LIST');
                active = true;
                text = 'Убрать из сравнения';

            } else {
                elem.setAttribute('action', 'ADD_TO_COMPARE_LIST');
                active = false;
                text = 'Добавить в сравнение';
            }
            if(compareBlock) {
                (countCompare == 0) ? compareBlock.parentElement.style.display = 'none' : compareBlock.parentElement.style.display = 'flex';
                compareBlock.innerHTML = countCompare + ' ' + getNoun(countCompare, ['товар', 'товара', 'товаров']);
            }

            changeLinkStatus(elem, text, active, type);
        }
    }).catch((error) => console.log(error));
}

function delAllCompareItems(type) {
    fetch('/ajax/compare-items.php', {
            method: 'POST',
            body: new URLSearchParams({
                ajax_del_all: "Y",
            }),
            headers: {
                'X-Requested-With': 'XMLHttpRequest'
            }
        }
    ).then(res => {
        return res.json();
    }).then(data => {
        if(data['status'] === 'ok') {
            document.querySelector('.fixed-compare').style.display = 'none';
            let compareItems = document.querySelectorAll('.compare-pr[action="DELETE_FROM_COMPARE_LIST"]');
            if(compareItems) {
                compareItems.forEach(item => {
                    changeLinkStatus(item, 'Добавить в сравнение', false, type);
                    item.setAttribute('action', 'ADD_TO_COMPARE_LIST');
                })
            }
        }
    }).catch((error) => console.log(error));
}
function changeLinkStatus(item, text, active, type) {
    switch (type) {
        case 'catalog':
            item.querySelector('.tooltip-ico span').innerText = text;
            if (active) {
                item.querySelector('svg').classList.add('active');
                item.classList.add('active-link');
            } else {
                item.querySelector('svg').classList.remove('active');
                item.classList.remove('active-link');
            }
            break;
        case 'compare':
            item.classList.add('active-link', 'link--buy');
            item.firstChild.nodeValue = 'В КОРЗИНЕ';
            item.setAttribute('href', '/basket/');
            // item.querySelector('svg').classList.add('active');
            break;
        case 'element':
            item.lastChild.nodeValue = text;
            if (active) {
                item.querySelector('svg').classList.add('active');
                item.classList.add('active-link');
            } else {
                item.querySelector('svg').classList.remove('active');
                item.classList.remove('active-link');
            }
            break;
    }

}
function getNoun(number, forms) {
    let n = Math.abs(number) % 100;
    if (n >= 5 && n <= 20) return forms[2];

    n %= 10;
    if (n === 1) return forms[0];
    if (n >= 2 && n <= 4) return forms[1];

    return forms[2];
}

