/* test */

const hamburgerBody = document.querySelector('.hamburger-list');
const hamburgerIcon = document.querySelector('.nav-hamburger');

hamburgerIcon.addEventListener('click',function(){
    hamburgerBody.style.left = 50 + 'vw';
})