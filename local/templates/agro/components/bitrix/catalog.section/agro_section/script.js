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
        let items = document.querySelectorAll('.basket');
        console.log(items);
        items.forEach(item => {
            console.log(data);
            console.log(item);
            if(data.includes(+item.getAttribute('data-id'))) {
                item.querySelector('.tooltip-ico span').innerText = 'В корзине';
                item.querySelector('svg').classList.add('active');
            }
        })
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
            elem.querySelector('.tooltip-ico span').innerText = 'В корзине';
            elem.querySelector('svg').classList.add('active');
        }
        console.log(data);
    }).catch((error) => console.log(error));
}