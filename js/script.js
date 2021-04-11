// imports Swiper JS
import Swiper from 'swiper';
// imports Swiper styles
import 'swiper/swiper-bundle.css';
  // core version + navigation, pagination modules:
import SwiperCore, { Navigation, Pagination } from 'swiper/core';

// configures Swiper to use modules
SwiperCore.use([Navigation, Pagination]);

const btnHamburger = document.querySelector('#btnHamburger');
const body = document.querySelector('body');
const header = document.querySelector('.site-header');
const overlay = document.querySelector('.overlay');
const fadeElems = document.querySelectorAll('.has-fade');

btnHamburger.addEventListener('click', function() {
    console.log('clicked hamburger');
    if(header.classList.contains('open')) { //close hamburger menu
        body.classList.remove('noscroll');
        header.classList.remove('open');
        fadeElems.forEach(function(element){
            element.classList.remove('fade-in');
            element.classList.add('fade-out');
        })
    } 
    else { // open hamburger menu
        body.classList.add('noscroll');
        header.classList.add('open');
        fadeElems.forEach(function(element) {
            element.classList.remove('fade-out');
            element.classList.add('fade-in');
        })
    }
});

// Swiper
const swiper = new Swiper('.swiper-container', {
    speed: 400,
    spaceBetween: 100,
  });

const swiper = document.querySelector('.swiper-container').swiper;
// end Swiper