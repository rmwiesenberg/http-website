let slideIndex = 1;
const images = [
    document.location.hostname + "/assets/img/guitar_trim.png",
    document.location.hostname + "/assets/img/rbe_trim.png"
];

function increaseSideIndex() {
    slideIndex++;
    if (slideIndex > x.length) {slideIndex = 1}
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

carousel();