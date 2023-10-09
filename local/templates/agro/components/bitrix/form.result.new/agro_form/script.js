addEventListener('DOMContentLoaded', () => {
    let element = document.querySelector('.phone');
    element.addEventListener("click", (e) => {
        let maskOptions = {
            mask: '+375(00)000-00-00',
            lazy: false
        }
        let mask = new IMask(element, maskOptions);
    })

    element.addEventListener('blur', (e) => {
        let str = e.target.value.toString();
        let result = str.match(/^\+375\((29|33|44|17)\)\d{3}-\d{2}-\d{2}$/);
        if (result === null) e.target.classList.add("error");
    })

    let submitBtn = document.querySelector('.required--sbmt');
    let inputLenght = 2
    submitBtn.addEventListener('click', () => {
        let inputs = document.querySelectorAll('.required--input');

        inputs.forEach(input => {
            if (input.getAttribute('data-length')) {
                inputLenght = input.getAttribute('data-length') - 1;
            }

            let label = input.previousElementSibling;

            if (input.value.length <= inputLenght) {
                label.style.color = 'red';
            } else if (input.classList.contains('phone')
                && input.value.match(/^\+375\((29|33|44|17)\)\d{3}-\d{2}-\d{2}$/) === null) {
                label.style.color = 'red';
            } else {
                label.style.color = 'black';
            }

        })
    })

});
