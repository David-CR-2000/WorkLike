// Seleccionar elementos del DOM
const hamburger = document.querySelector('.hamburger');
const navLinks = document.querySelector('.nav-links');

// Añadir evento al hacer clic en el menú hamburguesa
hamburger.addEventListener('click', () => {
    navLinks.classList.toggle('active');
});