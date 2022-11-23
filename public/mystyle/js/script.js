const themeToggler = document.querySelector(".theme-toggler");

function search() {
    var x =
        document.getElementById("search");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}

themeToggler.addEventListener('click', () => {
    document.body.classList.toggle('dark-theme');
})