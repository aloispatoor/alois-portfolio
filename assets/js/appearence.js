// Initial state
let scrolling = 1000;
let getDiv = document.querySelectorAll(".selected-div");
// adding scroll event
window.addEventListener('scroll', function(){
    for (let i = 0; i < getDiv.length; i++){
        getDiv[i].classList.add('reveal-invisible');
        if ((document.body.getBoundingClientRect()).height < scrolling){
            getDiv[i].classList.add('reveal-visible');
            getDiv[i].classList.remove('reveal-invisible');
        }
    }

	// saves the new position for iteration.
	scrolling = (document.body.getBoundingClientRect()).height;
});
