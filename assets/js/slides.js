let slideIndex = 0;
const images = [
    "/assets/img/guitar_trim.png",
    "/assets/img/rbe_trim.png"
];

function increaseSideIndex() {
    slideIndex++;
    if (slideIndex >= images.length) {slideIndex = 0}
    setSlideIndex(slideIndex)
}

function decreaseSideIndex() {
    slideIndex--;
    if (slideIndex < 0) {slideIndex = images.length - 1}
    setSlideIndex(slideIndex)
}

function setSlideIndex(idx) {
    document.getElementById("slides").src = images[idx];
}
