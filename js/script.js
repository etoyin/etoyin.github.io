let portfolio = [
    {
        "name": "voiceout.png",
        "title": "Voice Out Site",
        "description": "A site about the voiceout of the used and oppressed being heard!",
        "type": "Full Stack",
        "url": "https://voiceout.netlify.app/"
    },
    {
        "name": "codApp.png",
        "title": "Membership Management Site",
        "description": "Membership Management Site",
        "type": "Full Stack",
        "url": "http://rccgcodmyc.herokuapp.com/"
    },
    {
        "name": "restaurant.png",
        "title": "Restaurant Site",
        "description": "Just One Page restaurant Site, will be completed upon request......",
        "type": "Front-End",
        "url": "https://codepen.io/etoyin/full/PEbyeo"
    },
    {
        "name": "gjusticess.png",
        "title": "GJustice Site",
        "description": "Worked with a startup to convert design into code",
        "type": "Front-End",
        "url": "#"
    },
    {
        "name": "ipolicy.png",
        "title": "iPolicyMart Page",
        "description": "Worked with a startup to convert design into code",
        "type": "Front-End",
        "url": "#"
    }
]




$(document).ready(function(){
    for(let i=0; i<portfolio.length; i++){
        $(".portfolio-boxes").append(`
            <div class="card-box" style="background-image:url('images/${portfolio[i].name}');" data-link="https://....">
            </div>
        `)
    }    
    
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
            elementOffset, //= $('.appear-div').offset().top,
            navbarOffset = $('.navbar_and_line').offset().top,
            pageHeight = $(window).height(),
            distance;
            navbarDistanceToTop = navbarOffset - scrollTop;

            $('.appear-div').each(function(i, each){
                elementOffset = $(this).offset().top;
                distance = (elementOffset - scrollTop);
                if(distance < pageHeight){
                    $(this).find(".js-scroll").addClass("scrolled");
                }
            })
            // if(distance < pageHeight){
            //     $(".js-scroll").addClass("scrolled");
            //     // $(".js-scroll").css("background-color", "red")
            //     console.log(distance)
            // }
            if(scrollTop > pageHeight){
                $(".navbar_and_line").addClass("fixed")
                $("#about").css("padding-top","120px")
            }else{
                $(".navbar_and_line").removeClass("fixed");
                $("#about").css("padding-top","0px");
            }
    })
})