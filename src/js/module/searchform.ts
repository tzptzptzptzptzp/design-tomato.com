let openBtn = document.querySelectorAll(".js-searchform-button-open")!;
let closeBtn = document.getElementById("js-searchform-button-close")!;
let search = document.getElementById("js-search")!;
const open = () => {
    search.classList.add("active");
    closeBtn.classList.add("active");
    for ( let i = 0; i < openBtn.length; i++ ) {
        openBtn[i].classList.add("active");
    }
};
const close = () => {
    search.classList.remove("active");
    closeBtn.classList.remove("active");
    for ( let i = 0; i < openBtn.length; i++ ) {
        openBtn[i].classList.remove("active");
    }
};
export { openBtn, closeBtn, open, close };