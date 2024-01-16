document.addEventListener('DOMContentLoaded', () => {
    let form = document.querySelector('.auth-form');
    document.addEventListener('click', e => {
        if(!e.target.classList.contains('ajax-auth')) return;
        e.preventDefault();
        ajaxAuth();
    })
})

function ajaxAuth () {
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
        return res.json();
    }).then(data => {
        if(data['error']) {
            let errorBlock = document.querySelector('.error-auth');
            errorBlock.style.display = 'flex';
            errorBlock.innerHTML = 'Неверный email или пароль';
        } else {
            window.location.href = '/';
        }

    }).catch((error) => console.log(error));
}