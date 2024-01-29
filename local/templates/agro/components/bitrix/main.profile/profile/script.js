document.addEventListener('DOMContentLoaded', () => {
    let email = document.querySelector('input[name="EMAIL"]');
    let login = document.querySelector('input[name="LOGIN"]');
    let phone = document.querySelector('input[name="PERSONAL_PHONE"]') ||  document.querySelector('input[name="WORK_PHONE"]');

    email.addEventListener('keyup', e => {
        login.value = e.target.value;
    })

    phone.addEventListener("click", (e) => {
        let maskOptions = {
            mask: '+375(00)000-00-00',
            lazy: false
        }
        let mask = new IMask(phone, maskOptions);
    })
})