jQuery(document).ready(function($){
    $(".homepage-slider-area").owlCarousel({
        items:1,
        loop:true,
        nav:false,
        dots:true,
        
        autoplay:false,
        autoplay:true,
        animateOut: 'fadeOut',
    });
    $(".team-slider").owlCarousel({
        items:5,
        loop:true,
        nav:false,
        dots:false,
        autoplay:true
    });
    $(".testimonial-slider").owlCarousel({
        items:1,
        loop:true,
        nav:false,
        dots:true,
        autoplay:true
    });


    $(".sticker").sticky({topSpacing:0});


    setTimeout(function () {
        $(".de").addClass("remove animated fadeOutLeft");
    }, 2000
    );
    setTimeout(function () {
        $(".login").addClass("animated shake");
    }, 
    );
    setTimeout(function () {
        $(".successMessage").addClass("animated shake remove");
    }, 2000
    );


    





});



