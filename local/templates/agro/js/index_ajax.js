document.addEventListener('DOMContentLoaded', () => {
    let indexTabs = document.querySelectorAll('.catalog-tabs__li');
    if(indexTabs) {
        indexTabs.forEach(tab => {
            tab.addEventListener('click', e=> {
                indexTabs.forEach(elem => {
                    if(elem.classList.contains('active')) elem.classList.remove('active')
                })
                e.currentTarget.classList.add('active');
                let catalog = document.querySelector('.catalog-container');
                catalog.classList.add('blur');

                fetch(window.location.href, {
                        method: "POST",
                        body: new URLSearchParams({property: e.currentTarget.getAttribute('data-tab')}),
                        headers: {'X-Requested-With': 'XMLHttpRequest'}
                    }
                ).then(res => {
                    return res.text();
                }).then(data => {
                    catalog.classList.remove('blur');
                    catalog.innerHTML = data
                }).catch((error) => console.log(error));
            })
        })
    }
})
