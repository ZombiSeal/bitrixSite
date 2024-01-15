document.addEventListener('DOMContentLoaded', () => {
    let form = document.querySelector('.auth-form');
    document.addEventListener('click', e => {
        if(!e.target.classList.contains('ajax-sbmt')) return;
        e.preventDefault();

        let form = document.querySelector('.auth-form');
        let url = form.getAttribute('action');
        let login = document.querySelector('input[name="USER_LOGIN"]').value;
        let password = document.querySelector('input[name="USER_PASSWORD"]').value;
        let action = document.querySelector('input[name="AUTH_ACTION"]').value;

        const data = {
            'USER_LOGIN' : login,
            'USER_PASSWORD' : password,
            'AUTH_ACTION' : action
        }

        fetch(url, {
                method:'POST',
                body: new URLSearchParams(data),
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                }
            }
        ).then(res => {
            return res.text();
        }).then(data => {

            if(data == 1) {
                let errorBlock = document.querySelector('.error-auth');
                errorBlock.style.display = 'flex';
                errorBlock.innerHTML = 'Неверный логин или пароль';
            } else {
                window.location.href = '/';
            }

        }).catch((error) => console.log(error));
    })
})