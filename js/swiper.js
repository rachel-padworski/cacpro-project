// Swiper

// imports Swiper JS
import Swiper from 'swiper';
// imports Swiper styles
import 'swiper/swiper-bundle.css';
// core version + navigation, pagination modules:
import SwiperCore, { Navigation, Pagination } from 'swiper/core';

// configures Swiper to use modules
SwiperCore.use([Navigation, Pagination]);


const swiper = new Swiper('.swiper-container', {
    // speed: 400,
    // spaceBetween: 100,
   
    // pagination: {
    //   el: '.swiper-pagination',
    // },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
  });

// const swiper = document.querySelector('.swiper-container').swiper;
// swiper.slideNext()
// end Swiper