document.addEventListener('DOMContentLoaded', () => {
    document.addEventListener('click', e => {
        if (e.target.classList.contains('ajax-one-click')) {
            e.preventDefault();

            const formReady = selector => new Promise(resolve => {
                const observer = new MutationObserver((mutations, obs) => {
                    if (document.querySelector(selector)) {
                        resolve(document.querySelector(selector));
                        obs.disconnect();
                    }
                });

                observer.observe(document.body, { childList: true, subtree: true });
            });


            (async () => {
                const form = await formReady('.buy-one-form');
                let buyOneClick = new BuyOneClick(form);
                console.log(form);
                form.addEventListener('submit', e => {
                    e.preventDefault();
                    buyOneClick.ajaxError();
                })
            })();
        }
    })

})
function BuyOneClick(form) {
    this.form = form;
    this.url = form.getAttribute('action');
}

BuyOneClick.prototype.ajaxError = function () {
    let data = new FormData(this.form);
    data.set('ajax_action', 'Y');
    fetch(this.url, {
            method:'POST',
            body: data,
            headers: {
                'X-Requested-With': 'XMLHttpRequest'
            }
        }
    ).then(res => {
        return res.json();
    }).then(data => {
        if(data['status'] === 'FIELD_ERROR' && data['errors'].length !== 0){
            let inputs = this.form.querySelectorAll('input');
            inputs.forEach(input => {
                if(input.getAttribute('name') in data['errors']) {
                    input.classList.add('error-online');
                    let label = input.closest('.input-text-label');
                    label.classList.add('error-online');
                }
            })
        } else if(data['status'] === 'OK') {
            window.location.href = '/personal/orders/?filter_history=Y'
        }

        console.log(data);
    }).catch((error) => console.log(error));
}
