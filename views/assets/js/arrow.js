// Initial state
scrollPos = 0;
let getHeader = document.getElementById("returnToHeader");
// adding scroll event
window.addEventListener('scroll', function(){
  if ((document.body.getBoundingClientRect()).top > scrollPos){
    getHeader.style.right = "-50px";
  }else{
    getHeader.style.right = "10px";
  }
	// saves the new position for iteration.
	scrollPos = (document.body.getBoundingClientRect()).top;
});