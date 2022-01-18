let menuBurger = document.getElementById("menu-burger");
// console.log("test");
menuBurger.addEventListener("click", function(){
    let dropdown = document.getElementById("mobileNav");
    dropdown.classList.toggle("displayNone");
});


link.addEventListener('click', function(e) {
    e.preventDefault()
    bars.classList.toggle('open')
})