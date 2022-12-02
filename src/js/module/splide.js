import { Splide } from "@splidejs/splide";
import { AutoScroll } from "@splidejs/splide-extension-auto-scroll";

const splide = new Splide( ".splide", {
    perPage: 4.5,
    type: 'loop',
    focus: 'center',
    arrows: false,
    autoScroll: {
        speed: 1.5,
        pauseOnHover: false,
        pauseOnFocus: false,
    },
    breakpoints: {
        600: {
            perPage: 2,
        },
    }
});

splide.mount( { AutoScroll } );