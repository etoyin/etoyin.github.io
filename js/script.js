$(document).ready(function(){
    $(".button").mouseover(function(){
        // $(".arrow").html("&#8595;");
        $(".arrow").html("&#8595;");
        // alert("kkkkk")
    })
    $(".button").mouseout(function(){
        // $(".arrow").html("&#8595;");
        $(".arrow").html("&#8594;");
        // alert("kkkkk")
    })
    $(".button").on('click', function(){
        // windows.location("#about");
        window.location.href = "#about"
        // alert("ijijiji")
    })
    $(window).on('scroll', function(){
        let scrollTop     = $(window).scrollTop(),
            elementOffset = $('#appear-div').offset().top,
            navbarOffset = $('.navbar_and_line').offset().top,
            pageHeight = $(window).height(),
            distance      = (elementOffset - scrollTop);
            navbarDistanceToTop = navbarOffset - scrollTop
            if(distance < pageHeight){
                $(".js-scroll").addClass("scrolled");
                // $(".js-scroll").css("background-color", "red")
                console.log(distance)
            }
            if(scrollTop > pageHeight){
                $(".navbar_and_line").addClass("fixed")
                $("#about").css("padding-top","120px")
            }else{
                $(".navbar_and_line").removeClass("fixed");
                $("#about").css("padding-top","0px");
            }
    })
})