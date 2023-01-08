let particle = document.querySelectorAll<HTMLElement>("#soda span");
const init = () => {
    for (let i = 0; i < particle.length; i++) {
        let min = 20;
        let max = 25;
        let size = Math.random() * (min - max) + min;
        particle[i].style.left=Math.random()*100+"%";
        particle[i].style.width = size + "px";
        particle[i].style.height = size + "px";
        particle[i].style.animationDelay = (i * .33) + "s";
    };    
};
export { init };
