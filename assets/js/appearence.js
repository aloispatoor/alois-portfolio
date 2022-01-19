const getDiv = document.querySelector(".selected-div")
let myScrollFunc = function () {
    let y = window.scrollY;
    if (y >= 5000) {
        getDiv.classList.add("release-visible")
        getDiv.classList.remove("release-invisible")
    } else {
        getDiv.classList.remove("release-visible")
        getDiv.classList.add("release-invisible")
    }
};

window.addEventListener("scroll", myScrollFunc);
