

const btnHamburger = document.querySelector('#btnHamburger');
const body = document.querySelector('body');
const header = document.querySelector('.site-header');
const overlay = document.querySelector('.overlay');
const menu = document.querySelector('#mobile-menu');
const fadeElems = document.querySelectorAll('.hidden');
const menuLinks = document.querySelector('#mobile-menu a');


btnHamburger.addEventListener('click', function(){
  if(header.classList.contains('open')){ // Closes Hamburger Menu
    body.classList.remove('noscroll');
    header.classList.remove('open');    
    fadeElems.forEach(function(element){
      element.classList.remove('fade-in');
      element.classList.add('fade-out');
    });
    
  }
  else { // Opens Hamburger Menu
    body.classList.add('noscroll');
    header.classList.add('open');
    fadeElems.forEach(function(element){
      element.classList.remove('fade-out');
      element.classList.add('fade-in');
    });

  }  
});

// listen for click on menu buttons
// trigger a click on the btnHamburger so the above function runs
menuLinks.addEventListener('click', function(){
  btnHamburger.click();
})