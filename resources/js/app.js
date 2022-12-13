require('./bootstrap');

import Alpine from 'alpinejs';
import { reduce } from 'lodash';

window.Alpine = Alpine;

Alpine.start();

const backToTop = document.querySelector('#backToTop');

backToTop.addEventListener('click', (e) => {
    e.preventDefault();
    window.scroll({
        top: 0,
        left: 0,
        behavior: 'smooth'
    });
})