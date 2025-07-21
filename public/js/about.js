// Header

const header = document.querySelector("header");
window.addEventListener ("scroll", function() {
    header.classList.toggle ("sticky", window.scrollY > 100);
});

const mobileMenu = document.getElementById('mobile-menu');
const navList = document.querySelector('.navlist');

mobileMenu.addEventListener('click', () => {
    navList.classList.toggle('active');
});
