let fixHeader = document.getElementById("js-fix-header")!;
let startLocation = 0;
let endLocation = 0;
const active = () => {
    startLocation = scrollY;
    if ( startLocation < endLocation && (innerHeight / 2) < pageYOffset ) {
        fixHeader.classList.add("active");
    } else {
        fixHeader.classList.remove("active");
    };
    endLocation = startLocation;
};
export { active };
