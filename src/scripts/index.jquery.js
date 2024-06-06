
$(function () {
    // alert("jquery here!");

    function Init() {
        handleOwlCarousels();
    }


    function handleOwlCarousels() {

        function testimonialsSlider() {
            var testimonialCarousel = $(".testimonial-carousel");
            var playBtn = $(".testimonial-carousel + .dots-wrapper .play-slider-btn");
            var pauseBtn = $(".testimonial-carousel + .dots-wrapper .pause-slider-btn");
            var customDots = $('#custom-dots');
            testimonialCarousel.owlCarousel({
                margin: 20,
                loop: true,
                nav: false,
                dots: true,
                autoplay: false,
                slideTransition: 'linear',
                // autoplayTimeout: 1000,
                autoplaySpeed: 2000,
                autoplayHoverPause: true,
                dotsContainer: '#custom-dots',
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
            customDots.on('click', '.owl-dot', function () {
                testimonialCarousel.trigger('to.owl.carousel', [$(this).index(), 300]);
            });

            // Custom dots logic (for example, adding numbers to dots)
            // testimonialCarousel.on('changed.owl.carousel', function (event) {
            //     var dots = $('#customDots .owl-dot');
            //     dots.each(function (index) {
            //         $(this).html(index + 1); // Add numbers to dots
            //     });
            // });

            playBtn.on("click", function () {
                testimonialCarousel.trigger('play.owl.autoplay', []);
                $('.dots-wrapper').addClass("playing");
            });
            pauseBtn.on("click", function () {
                testimonialCarousel.trigger('stop.owl.autoplay')
                $('.dots-wrapper').removeClass("playing");
            });
        }



        function blogpostSlider() {
            var blogpostCarousel = $(".blogpost-carousel");
            var playBtn = $(".blogpost-carousel + .dots-wrapper .play-slider-btn");
            var pauseBtn = $(".blogpost-carousel + .dots-wrapper .pause-slider-btn");
            var blogpostCarouselDots = $('#blogpost-carousel-dots');
            blogpostCarousel.owlCarousel({
                margin: 20,
                loop: true,
                nav: false,
                dots: true,
                autoplay: false,
                slideTransition: 'linear',
                // autoplayTimeout: 1000,
                autoplaySpeed: 2000,
                autoplayHoverPause: true,
                dotsContainer: '#blogpost-carousel-dots',
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
            blogpostCarouselDots.on('click', '.owl-dot', function () {
                blogpostCarousel.trigger('to.owl.carousel', [$(this).index(), 300]);
            });
            playBtn.on("click", function () {
                blogpostCarousel.trigger('play.owl.autoplay', []);
                $('.blogpost-carousel + .dots-wrapper').addClass("playing");
            });
            pauseBtn.on("click", function () {
                blogpostCarousel.trigger('stop.owl.autoplay')
                $('.blogpost-carousel + .dots-wrapper').removeClass("playing");
            });

        }

        testimonialsSlider();
        blogpostSlider();

        /**Set role attribute to all 'owl-dot' buttons */
        setTimeout(() => {

            var owlDots = $(".owl-dots");
            var owlDotsList = owlDots.toArray();

            for (let i = 0; i < owlDotsList.length; i++) {
                const owl_dots = owlDotsList[i];
                const dot_list = owl_dots.children;

                function positionTag(index) {
                    if (index == 0) {
                        return "st";
                    } else if (index == 1) {
                        return "nd"
                    } else {
                        return "th";
                    }

                }

                for (let j = 0; j < dot_list.length; j++) {
                    const dot_button = dot_list[j];
                    dot_button.setAttribute("aria-label", `click to show the ${j + 1}${positionTag(j)} slide`);

                }


            }
        }, 0);
    }

    Init();
});