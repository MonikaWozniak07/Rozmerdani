const menuToggler = document.querySelector(".menu-toggler");
const mainMenu = document.querySelector(".main");

menuToggler.addEventListener("click", () => {
    menuToggler.classList.toggle("open");
    mainMenu.classList.toggle("open");
});
