// Initial state
scrollPos = 0;
let getHeader = document.querySelector("#returnToHeader");
// adding scroll event
window.addEventListener('scroll', function(){
  if ((document.body.getBoundingClientRect()).top > scrollPos)
    getHeader.classList.add('displayNone');
	else
    getHeader.classList.remove('displayNone');
	// saves the new position for iteration.
	scrollPos = (document.body.getBoundingClientRect()).top;
});