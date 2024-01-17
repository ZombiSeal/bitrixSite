document.addEventListener('DOMContentLoaded', () => {
    document.addEventListener('click', e => {
        if (e.target.classList.contains('ajax-auth')) {
            e.preventDefault();
            ajaxAuth();
        }

        if (e.target.classList.contains('ajax-register')) {
            e.preventDefault();
            ajaxRegister();
        }

    })
})

function ajaxAuth() {
    let form = document.querySelector('.auth-form');
    let url = form.getAttribute('action');
    let login = document.querySelector('input[name="USER_LOGIN"]').value;
    let password = document.querySelector('input[name="USER_PASSWORD"]').value;
    let action = document.querySelector('input[name="AUTH_ACTION"]').value;

    const data = {
        'USER_LOGIN': login,
        'USER_PASSWORD': password,
        'AUTH_ACTION': action
    }

    fetch(url, {
            method: 'POST',
            body: new URLSearchParams(data),
            headers: {
                'X-Requested-With': 'XMLHttpRequest'
            }
        }
    ).then(res => {
        return res.json();
    }).then(data => {
        if (data['error']) {
            let errorBlock = document.querySelector('.error-auth');
            errorBlock.style.display = 'flex';
            errorBlock.innerHTML = 'Неверный email или пароль';
        } else {
            window.location.href = '/personal/';
        }

    }).catch((error) => console.log(error));
}

function ajaxRegister() {
    let form = document.querySelector('.tabs-content.active .register-private');
    let url = form.getAttribute('action');
    let login = form.querySelector('input[name="REGISTER[EMAIL]"]').value;
    let action = form.querySelector('input[name="register_submit_button"]').value;
    let type = document.querySelector('.tabs-content.active');


    let data = new FormData(form);
    data.set('UF_TYPE', type.getAttribute('type-id'));
    data.set('REGISTER[LOGIN]', login);
    data.set('register_submit_button', action);
    data.set('form_name', form.getAttribute('name'));

    fetch(url, {
            method: 'POST',
            body: data,
            headers: {
                'X-Requested-With': 'XMLHttpRequest'
            }
        }
    ).then(res => {
        return res.json();
    }).then(data => {
        if (data['error']) {
            let errorBlock = document.querySelector('.error-auth');
            errorBlock.style.display = 'flex';
            errorBlock.innerHTML = 'Пользователь с таким email уже существует';
        } else {
            window.location.href = '/personal/';
        }

    }).catch((error) => console.log(error));
}