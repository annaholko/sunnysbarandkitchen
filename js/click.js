window.onscroll = function() {scrollFunction()};
function scrollFunction() {
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        document.getElementById("but1").style.display = "block"; 
    } else {
        document.getElementById("but1").style.display = "none";
    }
}

var toTop = document.getElementById("but1");
  
  toTop.addEventListener("click", function(){
  scrollToTop(5000);
});

// When the user clicks on the button, scroll to the top of the document
function scrollToTop(scrollDuration) {
    var scrollStep = -window.scrollY / (scrollDuration / 200),
        scrollInterval = setInterval(function(){
        if ( window.scrollY != 0 ) {
            window.scrollBy( 0, scrollStep );
        }
        else clearInterval(scrollInterval); 
    }, 15);
}
