document.querySelector(".toggle-button").addEventListener("click", (e) => {
    document.querySelector(".nav-items").classList.toggle("active");
    document.querySelector(".toggle-button").classList.toggle("active");
});

document.querySelector(".lang-dropdown").addEventListener("click", () => {
    document.querySelector(".lang-wrapper ul").classList.toggle("active");
});

window.addEventListener("resize", function () {
    getLanguage();
});

window.addEventListener("load", () => {
    getLanguage();
});

const getLanguage = () => {
    let win = this;
    const lang = document.documentElement.lang;
    if (win.innerWidth < 768) {
        document.querySelector(".lang-text").innerText = lang.toUpperCase();
    } else {
        if (lang === "id") {
            document.querySelector(".lang-text").innerText = "Indonesia (ID)";
        } else if (lang == "en") {
            document.querySelector(".lang-text").innerText = "English (EN)";
        }
    }
};

document.querySelector(".close-lang").addEventListener("click", () => {
    document.querySelector(".lang-wrapper ul").classList.toggle("active");
});

const slider = document.querySelector(".service-items");
let isDown = false;
let startX;
let scrollLeft;

slider.addEventListener("mousedown", (e) => {
    isDown = true;

    startX = e.pageX - slider.offsetLeft;
    scrollLeft = slider.scrollLeft;
});
slider.addEventListener("mouseleave", () => {
    isDown = false;
});
slider.addEventListener("mouseup", () => {
    isDown = false;
});
slider.addEventListener("mousemove", (e) => {
    if (!isDown) return;
    e.preventDefault();
    const x = e.pageX - slider.offsetLeft;
    const walk = (x - startX) * 3;
    slider.scrollLeft = scrollLeft - walk;
    console.log(walk);
});
