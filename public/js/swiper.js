const slider = document.getElementById("slider");
function duplicateLogos() {
    const originalLogos = Array.from(slider.children);
    while (slider.scrollWidth < window.innerWidth * 2) {
        originalLogos.forEach(logo => {
            const clone = logo.cloneNode(true);
            slider.appendChild(clone);
        });
    }
}
duplicateLogos();

// Pause animation when a logo is hovered
document.querySelectorAll(".client img").forEach(img => {
    img.addEventListener("mouseenter", () => {
        slider.style.animationPlayState = "paused";
    });
    img.addEventListener("mouseleave", () => {
        slider.style.animationPlayState = "running";
    });
});