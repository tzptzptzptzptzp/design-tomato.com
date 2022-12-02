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
