const btnHamburger = document.querySelector('#btnHamburger');
const header = document.querySelector('.site-header');
const overlay = document.querySelector('.overlay');

btnHamburger.addEventListener('click', function() {
    console.log('clicked hamburger');
    if(header.classList.contains('open')) { //close hamburger menu
        header.classList.remove('open');
        overlay.classList.remove('fade-in');
        overlay.classList.add('fade-out');
    } 
    else { // open hamburger menu
        header.classList.add('open');
        overlay.classList.remove('fade-out');
        overlay.classList.add('fade-in');
    }
});