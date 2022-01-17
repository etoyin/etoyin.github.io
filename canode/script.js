document.addEventListener("DOMContentLoaded", function(){
  
}); 
// alert("kfkfkkf")

$(document).ready(function(){
  $("#navBar").mouseenter(function(){
    $(this).addClass("navbar-light")
    $(this).removeClass("navbar-dark")
  });

  $("#navBar").mouseleave(function(){
    $(this).removeClass("navbar-light")
    $(this).addClass("navbar-dark")
  });
  
  if($(window).scrollTop()){
    $("#navBar").addClass("lightBg")
    $("#navBar").addClass("navbar-light")
    $("#navBar").removeClass("navbar-dark")
  }
  else{
    $("#navBar").removeClass("lightBg")
    $("#navBar").removeClass("navbar-light")
    $("#navBar").addClass("navbar-dark")
  }
  $(window).scroll(function() {
    // alert("jjjj");
    if($(window).scrollTop()){
      $("#navBar").addClass("lightBg")
      $("#navBar").addClass("navbar-light")
      $("#navBar").removeClass("navbar-dark")
    }
    else{
      $("#navBar").removeClass("lightBg")
      $("#navBar").removeClass("navbar-light")
      $("#navBar").addClass("navbar-dark")
    }
  });
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