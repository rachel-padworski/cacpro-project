

const btnHamburger = document.querySelector('#btnHamburger');
const body = document.querySelector('body');
const header = document.querySelector('.site-header');
const overlay = document.querySelector('.overlay');
const menu = document.querySelector('#mobile-menu');
const fadeElems = document.querySelectorAll('.hidden');

btnHamburger.addEventListener('click', function(){
    console.log('click hamburger');
  
    if(header.classList.contains('open')){ // Close Hamburger Menu
      body.classList.remove('noscroll');
      header.classList.remove('open');    
      fadeElems.forEach(function(element){
        element.classList.remove('fade-in');
        element.classList.add('fade-out');
      });
      
    }
    else { // Open Hamburger Menu
      body.classList.add('noscroll');
      header.classList.add('open');
      fadeElems.forEach(function(element){
        element.classList.remove('fade-out');
        element.classList.add('fade-in');
      });
  
    }  
});

