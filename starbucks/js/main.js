const menuBtn = document.getElementById("menuBtn");
const closeBtn = document.getElementById("closeBtn");
const mobileMenu = document.getElementById("mobileMenu");


// event name, callback function
menuBtn.addEventListener("click", function() {
    mobileMenu.classList.add("active");
});

closeBtn.addEventListener("click", function() {
    mobileMenu.classList.remove("active");
});