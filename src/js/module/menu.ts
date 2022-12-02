let openBtn = document.querySelectorAll(".js-menu-button-open")!;
let closeBtn = document.getElementById("js-menu-button-close")!;
let menu = document.getElementById("js-menu")!;
const open = () => {
    menu.classList.add("active");
    closeBtn.classList.add("active");
    for ( let i = 0; i < openBtn.length; i++ ) {
        openBtn[i].classList.add("active");
    }
};
const close = () => {
    menu.classList.remove("active");
    closeBtn.classList.remove("active");
    for ( let i = 0; i < openBtn.length; i++ ) {
        openBtn[i].classList.remove("active");
    }
};
export { openBtn, closeBtn, open, close };