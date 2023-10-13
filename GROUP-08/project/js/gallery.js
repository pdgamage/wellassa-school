// scripts.js (JavaScript code for lightbox functionality)
const galleryItems = document.querySelectorAll(".gallery-item img");
const lightbox = document.getElementById("lightbox");

galleryItems.forEach((item) => {
    item.addEventListener("click", (event) => {
        lightbox.querySelector("img").src = event.target.src;
        lightbox.classList.add("active");
    });
});

lightbox.addEventListener("click", (event) => {
    if (event.target === lightbox) {
        lightbox.classList.remove("active");
    }
});
