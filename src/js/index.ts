import * as loader from "./module/loader"
addEventListener("load", loader.loaded);
import * as header from "./module/header"
addEventListener("scroll", header.active);
import * as menu from "./module/menu"
for ( let i = 0; i < menu.openBtn.length ; i++ ) {
    menu.openBtn[i].addEventListener("click", menu.open);
};
menu.closeBtn.addEventListener("click", menu.close);
import * as search from "./module/searchform"
for ( let i = 0; i < search.openBtn.length ; i++ ) {
    search.openBtn[i].addEventListener("click", search.open);
};
search.closeBtn.addEventListener("click", search.close);
/*----------  ----------*/
let container = document.querySelectorAll<HTMLElement>(".js-nb-container")!;
let switcher = document.querySelectorAll(".js-nb-switcher")!;
let tab = document.querySelectorAll(".js-nb-tab")!;
(function () {
    container[0].style.height = tab[0].clientHeight + "px";
}());
for (let i = 0; i < switcher.length; i++) {
    switcher[i].addEventListener( "click", function()  {
        let selected = document.querySelectorAll(".select");
        for (let i = 0; i < selected.length; i++) {
            selected[i].classList.remove("select");
        }
        switcher[i].classList.add("select");
        tab[i].classList.add("select");
    });
}
