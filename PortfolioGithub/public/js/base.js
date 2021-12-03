const first_parallax = document.getElementById("first");
const second_parallax = document.getElementById("end");

window.addEventListener("scroll", function () {
    let offset = window.pageYOffset;
    first_parallax.style.backgroundPositionY = offset * 0.7 + "px";
    second_parallax.style.backgroundPositionY = offset * 0.7 + "px";
});
