import gsap from 'gsap';
import modalsForm from '../libs/modules/modals-form.js';

document.addEventListener('DOMContentLoaded', function(e) {

    gsap.config({
        nullTargetWarn: false
    });

    modalsForm.init();

});
