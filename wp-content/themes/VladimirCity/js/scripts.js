document.addEventListener('DOMContentLoaded', () => {
    const header = document.querySelector('.header'),
        main = document.querySelector('.main'),
        navbarToggler = document.querySelector('.navbar-toggler'),
        navbarCollapse = document.querySelector('.navbar-collapse'),
        addresses = document.querySelectorAll('.address'),
        mainHeader = document.querySelector('.main-header'),
        images = document.querySelectorAll('.main-contact__img'),
        changeCity = document.getElementById('changeCity');
    //main.style.marginTop = header.offsetHeight + 'px';
    setInterval(() => {
        //main.style.marginTop = header.offsetHeight + 'px';
    });
    navbarToggler.addEventListener('click', () => {
        navbarCollapse.style.display =
            (window.getComputedStyle(navbarCollapse).display === 'none') ?
                'block' : 'none';
    });
    if (changeCity && addresses.length) {
        addresses[0].classList.remove('d-none');
        if (images.length) {
            images[0].classList.remove('d-none');
        }
        changeCity.addEventListener('change', () => {
            addresses.forEach((address) => address.classList.add('d-none'));
            if (images.length) {
                images.forEach((image) => image.classList.add('d-none'));
            }
            if (changeCity.options[changeCity.selectedIndex].value ===
                'city-1') {
                addresses[0].classList.remove('d-none');
                if (mainHeader) {
                    mainHeader.style.backgroundImage = 'linear-gradient(0deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url(/wp-content/themes/VladimirCity/images/main001.jpg)';
                }
                if (images.length) {
                    images[0].classList.remove('d-none');
                }
            }
            if (changeCity.options[changeCity.selectedIndex].value ===
                'city-2') {
                addresses[1].classList.remove('d-none');
                if (mainHeader) {
                    mainHeader.style.backgroundImage = 'linear-gradient(0deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url(/wp-content/themes/VladimirCity/images/main002.jpg)';
                }
                if (images.length) {
                    images[1].classList.remove('d-none');
                }
            }
            if (changeCity.options[changeCity.selectedIndex].value ===
                'city-3') {
                addresses[2].classList.remove('d-none');
                if (mainHeader) {
                    mainHeader.style.backgroundImage = 'linear-gradient(0deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url(/wp-content/themes/VladimirCity/images/main003.jpg)';
                }
                if (images.length) {
                    images[2].classList.remove('d-none');
                }
            }
            if (changeCity.options[changeCity.selectedIndex].value ===
                'city-4') {
                addresses[3].classList.remove('d-none');
                if (mainHeader) {
                    mainHeader.style.backgroundImage = 'linear-gradient(0deg, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(/wp-content/themes/VladimirCity/images/main004.jpg)';
                }
                if (images.length) {
                    images[3].classList.remove('d-none');
                }
            }
            if (changeCity.options[changeCity.selectedIndex].value ===
                'city-5') {
                addresses[4].classList.remove('d-none');
                if (mainHeader) {
                    mainHeader.style.backgroundImage = 'linear-gradient(0deg, rgba(0, 0, 0, 0.35), rgba(0, 0, 0, 0.35)), url(/wp-content/themes/VladimirCity/images/main005.jpg)'
                }
                if (images.length) {
                    images[4].classList.remove('d-none');
                }
            }
            });
    }
});