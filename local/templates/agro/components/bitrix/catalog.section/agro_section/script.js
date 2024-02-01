document.addEventListener("DOMContentLoaded", () => {
    let basketBtns = document.querySelectorAll('.add-basket');
    let compareBtns = document.querySelectorAll('.compare-pr');
    let delAllFromCompare = document.querySelector('.fixed-compare__close');

    getBasketItems();
    getCompareItems();

    basketBtns.forEach(btn => {
        btn.addEventListener('click', e => {
            e.preventDefault();
            let elem = e.currentTarget;
            let url = e.currentTarget.getAttribute('href');
            if(!btn.classList.contains('active-link')) {
                addToBasket(url, elem);
            }
        })
    })

    compareBtns.forEach(compare => {
        compare.addEventListener('click', e => {
            e.preventDefault();
            let elem = e.currentTarget;
            let url = e.currentTarget.getAttribute('href');
            addToCompare(url, elem);
        })
    })

    delAllFromCompare.addEventListener('click', e=> {
        e.preventDefault();
        delAllCompareItems();
    })

})

function getBasketItems() {
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
            items.forEach(item => {
                if(data.includes(+item.getAttribute('data-id'))) {
                    changeLinkStatus(item, 'В корзине', true);
                }
            })
        }

    }).catch((error) => console.log(error));
}
function getCompareItems() {
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
            document.querySelector('.fixed-compare').style.display = 'flex';
            let items = document.querySelectorAll('.compare-pr');
            items.forEach(item => {
                if(data.includes(+item.getAttribute('data-id'))) {
                    item.setAttribute('action', 'DELETE_FROM_COMPARE_LIST');
                    changeLinkStatus(item, 'Убрать из сравнения', true);
                }
            })

            let textCompare = getNoun(data.length, ['товар', 'товара', 'товаров']);
            document.querySelector('.fixed-compare__link').innerHTML = data.length + '  ' + textCompare;
        } else {
            document.querySelector('.fixed-compare').style.display = 'none';
        }
    }).catch((error) => console.log(error));
}

function addToBasket(url, elem) {
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
            changeLinkStatus(elem, 'В корзине', true);
            let countBlock = document.querySelector('.basket-block .count');
            if (!countBlock.classList.contains('active')) countBlock.classList.add('active');
            countBlock.innerHTML = +countBlock.innerHTML + 1;
        }
    }).catch((error) => console.log(error));
}

function addToCompare(url, elem) {
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
            let countCompare = parseInt(compareBlock.innerHTML) || 0;

            if(elem.getAttribute('action') == 'ADD_TO_COMPARE_LIST'){
                elem.setAttribute('action', 'DELETE_FROM_COMPARE_LIST');
                active = true;
                text = 'Убрать из сравнения';
                countCompare++;

            } else {
                elem.setAttribute('action', 'ADD_TO_COMPARE_LIST');
                active = false;
                text = 'Добавить в сравнение';
                countCompare--;
            }
            (countCompare == 0) ? compareBlock.parentElement.style.display = 'none' : compareBlock.parentElement.style.display = 'flex';
            compareBlock.innerHTML = countCompare + ' ' + getNoun(countCompare, ['товар', 'товара', 'товаров']);
            changeLinkStatus(elem, text, active);
        }
    }).catch((error) => console.log(error));
}

function delAllCompareItems() {
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
            compareItems.forEach(item => {
                changeLinkStatus(item, 'Добавить в сравнение', false);
                item.setAttribute('action', 'ADD_TO_COMPARE_LIST');
            })
        }
    }).catch((error) => console.log(error));
}
function changeLinkStatus(item, text, active) {
    item.querySelector('.tooltip-ico span').innerText = text;
    if (active) {
        item.querySelector('svg').classList.add('active');
        item.classList.add('active-link');
    } else {
        item.querySelector('svg').classList.remove('active');
        item.classList.remove('active-link');
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

