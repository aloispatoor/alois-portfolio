let menuBurger = document.getElementById("menu-burger");
let getNavBar = document.getElementsByTagName('nav')[0];

menuBurger.addEventListener('click', function(){
    getNavBar.classList.toggle('mobileNav');
    getNavBar.classList.remove("desktopNav");
});

menuBurger.addEventListener('click', function(e) {
    e.preventDefault()
    bars.classList.toggle('open')
})

