// VARS
let menuBurger = document.getElementById("menu-burger");
let getNavBar = document.getElementById('nav-bar');

// MENU BURGER APPEARENCE
menuBurger.addEventListener('click', function(){
    console.log("Menu Burger clicked");
    getNavBar.classList.toggle('mobileNav');
    getNavBar.classList.toggle('desktopNav');
    getNavBar.classList.contains('mobileNav') ? menuBurger.ariaExpanded = true : menuBurger.ariaExpanded = false;
});


// ANIMATION MENUBURGER => CROSS
menuBurger.addEventListener('click', function(e) {
    e.preventDefault()
    bars.classList.toggle('open')
});

// CANCELLING MENU BURGER IF RESIZING
window.addEventListener("resize", function() {
    if (window.matchMedia("(max-width: 1024px)").matches) {
        getNavBar.classList.add("desktopNav");
        getNavBar.classList.remove("mobileNav");
    }
});

