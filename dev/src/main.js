import 'jarallax/dist/jarallax.min.css';
import "@fancyapps/ui/dist/fancybox/fancybox.css";
import './scss/main.scss';
//!

import { jarallax } from "jarallax";
import { Fancybox } from "@fancyapps/ui/dist/fancybox/";

import { AutoCalc } from "./js/AutoCalc.js";
import { Menu } from './js/Menu.js';
import { RunningLine } from './js/RunningLine.js';
import { BackdropList } from './js/BackdropList.js';
import { Modal } from './js/Modal.js';
import { cookies } from "./js/Cookies.js";
import { imask } from "./js/imask.js";
import { fileBtn } from "./js/FileBtn.js";
//import { CustomFieldSelect } from "./js/CustomFieldSelect.js";
//import { Spoiler } from './js/Spoiler.js';
import { ScrollToTop } from './js/ScrollToTop.js';
import { MXSwiper } from './js/MXSwiper.js';

// FOR CONTACTS FORM 7
//import "./js/redirect-to-thanks-page.js";

new AutoCalc();
//new CustomFieldSelect();
new Menu({
	btn: '.burger-btn',
	menu: '.header-menu',
	activeClass: 'open-header-menu',
})

new Menu({
	btn: '.phone-btn',
	menu: '.header-contacts-box',
	activeClass: 'open-contacts-box',
})


new BackdropList();

new Modal();

jarallax(document.querySelectorAll('.jarallax'), {
	speed: 0.2,
});

cookies();
imask();

Fancybox.bind("[data-fancybox]");

new RunningLine();
new ScrollToTop();

//new Spoiler();

new MXSwiper();


window.addEventListener('scroll', function () {
	const header = document.querySelector('.header');

	if (window.scrollY > 50) {
		header.classList.add('scrolled');
	} else {
		header.classList.remove('scrolled');
		const valueUnits = header.offsetHeight;
		console.log(valueUnits);
		document.querySelector(':root').style.setProperty(`--header-height`, valueUnits + 'px');
	}
});

fileBtn();