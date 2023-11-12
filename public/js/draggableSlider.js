const slider = document.querySelector(".slides");
let isDown = false;
let startX;
let scrollLeft;
slider.addEventListener("mousedown", (e) => {
    isDown = true;
    slider.classList.add("active");
    slider.style.cursor = "-webkit-grabbing";
    startX = e.pageX - slider.offsetLeft;
    scrollLeft = slider.scrollLeft;
});
slider.addEventListener("mouseleave", () => {
    isDown = false;
    slider.classList.remove("active");
    slider.style.cursor = "pointer";
});
slider.addEventListener("mouseup", () => {
    isDown = false;
    slider.classList.remove("active");
    slider.style.cursor = "pointer";
});

slider.addEventListener("mousemove", (e) => {
    if (!isDown) return;
    e.preventDefault();
    const x = e.pageX - slider.offsetLeft;
    const walk = (x - startX) * 5;
    slider.scrollLeft = scrollLeft - walk;
});
