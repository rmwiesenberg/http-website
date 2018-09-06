let slideIndex = 1;
const images = [
    "/assets/img/guitar_trim.png",
    "/assets/img/rbe_trim.png"
];

function increaseSideIndex() {
    slideIndex++;
    if (slideIndex > images.length) {slideIndex = 1}
    setSlideIndex(slideIndex)
}

function decreaseSideIndex() {
    slideIndex--;
    if (slideIndex < 0) {slideIndex = images.length}
    setSlideIndex(slideIndex)
}

function setSlideIndex(idx) {
    document.getElementById("slides").src = images[idx];
}
