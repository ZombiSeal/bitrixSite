document.addEventListener("DOMContentLoaded", e=> {
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
            let countBlock = document.querySelector('.basket-block .count');
            countBlock.classList.add('active');
            countBlock.innerText = data.length;

        }
    }).catch((error) => console.log(error));
})