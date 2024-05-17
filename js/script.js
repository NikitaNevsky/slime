$(document).ready(function(){
    $(".positive__slider .owl-carousel").owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        dots: true,
        items: 1
    });

    $(".doctors__list .owl-carousel").owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        dots: true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            }
        }
    });

    $(".icon-menu").click(function() {
        $(".menu").addClass('show');
        $("body").addClass('no-scroll');
    });

    $(".menu__info--close").click(function() {
        $(".menu").removeClass('show');
        $("body").removeClass('no-scroll');
    });

    $(".menu-overlay").click(function() {
        $(".menu").removeClass('show');
        $("body").removeClass('no-scroll');
    });
});