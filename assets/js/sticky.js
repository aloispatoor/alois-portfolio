// Déclarer les variables globales avant la fonction
let navBar = document.querySelector(".desktopNav");
// OffsetTop paramètre le nb de pixel entre la navBar et le haut de la page
let sticky = navBar.offsetTop;
// Fonction pour appeler la classe .sticky en scrollant jusqu'à toucher la navbar
function getNavSticky(){
    if (window.pageYOffset >= sticky) {
      navBar.classList.add("sticky")
    } else {
      navBar.classList.remove("sticky");
    }
}
// Appelle la fonction getNavSticky dès qu'on scrolle
window.onscroll = function() {getNavSticky()};