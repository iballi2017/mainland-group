
$(function () {
    // alert("jquery here!");

    $(".testimonial-sliders").owlCarousel({
        margin: 20,
        loop: true,
        nav: false,
        dots: true,
        autoplay: false,
        slideTransition: 'linear',
        autoplayTimeout: 6000,
        autoplaySpeed: 6000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            }
        }
    });
});