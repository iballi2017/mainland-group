
$(function () {
    // alert("jquery here!");

    function Init() {
        testimonialsSlider();
        blogpostSlider();
    }

    function testimonialsSlider() {
        $(".testimonial-carousel").owlCarousel({
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
            $(".testimonial-carousel").trigger('to.owl.carousel', [$(this).index(), 300]);
        });

        // Custom dots logic (for example, adding numbers to dots)
        // $(".testimonial-carousel").on('changed.owl.carousel', function (event) {
        //     var dots = $('#customDots .owl-dot');
        //     dots.each(function (index) {
        //         $(this).html(index + 1); // Add numbers to dots
        //     });
        // });

        $(".play-slider-btn").on("click", function () {
            $(".testimonial-carousel").trigger('play.owl.autoplay', []);
            $('.dots-wrapper').addClass("playing");
        });
        $(".pause-slider-btn").on("click", function () {
            $(".testimonial-carousel").trigger('stop.owl.autoplay')
            $('.dots-wrapper').removeClass("playing");
        });
    }



    function blogpostSlider() {
        $(".blogpost-carousel").owlCarousel({
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

    }

    Init();
});