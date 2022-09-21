$(document).ready(function(){
    $(".icon a").click(function(){
        $(".menu").fadeToggle(200);
       $(this).toggleClass('icon-open').toggleClass('icon-close');
    });
});
$('.menu').on('click', function(){
    $(".menu").fadeToggle(200);   
    $(".icon a").toggleClass('icon-open').toggleClass('icon-close');
    open = false;
});

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("slide-single");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }

  slides[slideIndex-1].style.display = "block";  

}

function reView(tutorial) {
    //Link of command to tutorial
    var linkcomm = 'tut-'+ tutorial +'.php';
    window.open(linkcomm,'_blank');
}

function quizAgain() {
    window.location = document.referrer;
}
