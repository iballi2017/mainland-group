
$(function () {
    // alert("jquery here!");

    $(".testimonial-sliders").owlCarousel({
        margin: 20,
        loop: true,
        nav: false,
        dots: true,
        autoplay: false,
        slideTransition: 'linear',
        // autoplayTimeout: 1000,
        autoplaySpeed: 2000,
        autoplayHoverPause: true,
        dotsContainer: '#customDots',
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            }
        }
    });

    // Custom event listener for custom dots
    $('#customDots').on('click', '.owl-dot', function () {
        $(".testimonial-sliders").trigger('to.owl.carousel', [$(this).index(), 300]);
    });

    // Custom dots logic (for example, adding numbers to dots)
    // $(".testimonial-sliders").on('changed.owl.carousel', function (event) {
    //     var dots = $('#customDots .owl-dot');
    //     dots.each(function (index) {
    //         $(this).html(index + 1); // Add numbers to dots
    //     });
    // });

    $(".play-slider-btn").on("click", function () {
        $(".testimonial-sliders").trigger('play.owl.autoplay', []);
        $('.dots-wrapper').addClass("playing");
    });
    $(".pause-slider-btn").on("click", function () {
        $(".testimonial-sliders").trigger('stop.owl.autoplay')
        $('.dots-wrapper').removeClass("playing");
    });



    

    $(".blogpost-sliders").owlCarousel({
        margin: 20,
        loop: true,
        nav: false,
        dots: true,
        autoplay: false,
        slideTransition: 'linear',
        // autoplayTimeout: 1000,
        autoplaySpeed: 2000,
        autoplayHoverPause: true,
        dotsContainer: '#customDots',
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            900: {
                items: 3
            }
        }
    });
});