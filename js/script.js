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
            navbarOffset = $('.navbar').offset().top,
            pageHeight = $(window).height(),
            distance      = (elementOffset - scrollTop);
            navbarDistanceToTop = navbarOffset - scrollTop
            if(distance < pageHeight){
                $(".js-scroll").addClass("scrolled");
                // $(".js-scroll").css("background-color", "red")
                console.log(distance)
            }
            if(scrollTop > pageHeight){
                $(".navbar").addClass("fixed")
                $("#about").css("padding-top","120px")
            }else{
                $(".navbar").removeClass("fixed");
                $("#about").css("padding-top","0px");
            }
    })
})