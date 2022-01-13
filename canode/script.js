document.addEventListener("DOMContentLoaded", function(){
  window.addEventListener('scroll', function() {
      if (window.scrollY > 50) {
        // document.getElementById('navBar').classList.add('fixed-top');
        document.getElementById('navBar').classList.add('lightBg');
        // add padding top to show content behind navbar
        // navbar_height = document.querySelector('.navbar').offsetHeight;
        // document.body.style.paddingTop = navbar_height + 'px';
      } else {
        // document.getElementById('navBar').classList.remove('fixed-top');
        document.getElementById('navBar').classList.remove('lightBg');
        // remove padding top from body
        document.body.style.paddingTop = '0';
      } 
  });
}); 
// alert("kfkfkkf")

$(document).ready(function(){
  $(".flexible").find(".p1").each(function(){
    $(this).mouseenter(function(){
      $(this).find("img").addClass("zoomImg");
      $(this).find("button").css("display", "block")
    }).mouseleave(function(){
      $(this).find("img").removeClass("zoomImg");
      $(this).find("button").css("display", "none")
    })
  })
  // let bg = ["url(images/b1.jpg)", "url(images/b2.jpg)", "url(images/b3.jpg)"];
  // let i = 0;

  // function nextBackground() {
  //   $(".home").css('background-image', bg[i = ++i % bg.length]);

  //   setTimeout(nextBackground, 5000);
  // }
  // setTimeout(nextBackground, 5000);
  // $(".home").css('background-image', bg[0]);

  //$('.slider').slider();

})