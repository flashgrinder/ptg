import gsap from 'gsap';
import modalsForm from '../libs/modules/modals-form.js';
import burgerMenu from '../libs/modules/burger-menu.js';

document.addEventListener('DOMContentLoaded', function(e) {

    gsap.config({
        nullTargetWarn: false
    });

    modalsForm.init();
    burgerMenu.init();
});
