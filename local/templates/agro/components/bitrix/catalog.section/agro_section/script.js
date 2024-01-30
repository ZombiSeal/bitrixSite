document.addEventListener("DOMContentLoaded", () => {
    let basketBtns = document.querySelectorAll('.basket');

    getBasketItems();
    basketBtns.forEach(btn => {
        btn.addEventListener('click', e => {
            e.preventDefault();
            let elem = e.currentTarget;
            let url = e.currentTarget.getAttribute('href');
            addToBasket(url, elem);
        })
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
        if(data.lenght !== 0) {
            let items = document.querySelectorAll('.basket');
            items.forEach(item => {
                if(data.includes(+item.getAttribute('data-id'))) {
                    changeLinkStatus(item);
                }
            })
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
            changeLinkStatus(elem);
            let countBlock = document.querySelector('.basket-block .count');
            if (!countBlock.classList.contains('active')) countBlock.classList.add('active');
            countBlock.innerHTML = +countBlock.innerHTML + 1;
        }
    }).catch((error) => console.log(error));
}

function changeLinkStatus(item) {
    item.querySelector('.tooltip-ico span').innerText = 'В корзине';
    item.querySelector('svg').classList.add('active');
    item.setAttribute('href', '#');
}
