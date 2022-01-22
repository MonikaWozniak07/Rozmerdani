/* test */

// const hamburgerBody = document.querySelector(".hamburger-list");
// const hamburgerIcon = document.querySelector(".fa-bars");
// const xIcon = document.querySelector(".fa-times");

// xIcon.classList.add("none");

// hamburgerIcon.addEventListener("click", function () {
//     hamburgerBody.style.right = 0 + "vw";
//     hamburgerIcon.classList.add("none");
//     xIcon.classList.remove("none");
// });

// xIcon.addEventListener("click", function () {
//     hamburgerBody.style.right = -50 + "vw";
//     hamburgerIcon.classList.remove("none");
//     xIcon.classList.add("none");
// });

const menuToggler = document.querySelector(".menu-toggler");
const mainMenu = document.querySelector(".main");

menuToggler.addEventListener("click", () => {
    menuToggler.classList.toggle("open");
    mainMenu.classList.toggle("open");
});
