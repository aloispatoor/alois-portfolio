// Disparition de la navBar après 3 secondes


window.addEventListener("scroll", function(){
    let getTheNav = document.getElementById('desktopNav');
    if(window.pageYOffset >= getTheNav.offsetTop){
        setTimeout(function(){
            getTheNav.style.opacity = "0";
        }, 4000);  
        break;
    };
    let scrollAgain = 0;
    if((document.body.getBoundingClientRect()).top > scrollAgain){
        getTheNav.style.opacity = "1";
    }
    scrollAgain = (document.body.getBoundingClientRect()).top;
});
