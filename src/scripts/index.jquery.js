
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

            console.warn("owlDotsList: ", owlDotsList);
            for (let i = 0; i < owlDotsList.length; i++) {
                const owl_dots = owlDotsList[i];
                const dot_list = owl_dots.children();
                var positionTag = testPosition();

                function testPosition() {
                    if (dot_list.length == 1) {
                        return "st";
                    } else if (dot_list.length == 2) {
                        return "nd"
                    } else {
                        return "th";
                    }

                }

                for (let j = 0; j < dot_list.length; j++) {
                    const element = dot_list[j];

                    console.log({
                        parent: owl_dots,
                        children: element
                    })

                }


            }

            // var dotList = owlDots.children();
            // console.warn(dotList);

            // for (let index = 0; index < dotList.length; index++) {
            //     const dot = dotList[index];
            //     var positionTag = testPosition();

            //     function testPosition() {
            //         if (dotList.length == 1) {
            //             return "st";
            //         } else if (dotList.length == 2) {
            //             return "nd"
            //         } else {
            //             return "th";
            //         }

            //     }

            //     $(".owl-dot").attr("aria-label", `click to see the ${index + 1}${positionTag} slide`);

            //     console.log("dot: ", dot)
            //     console.log("dot.length: ", dot.length);

            // }



            // $(".owl-dot").attr("role", "button");
            // // $(".owl-dot").attr("aria-label", "click to see another slide");
            // var parent = $(".owl-dot").parent();
            // var dots = parent.children();

            // for (let index = 0; index < dots.length; index++) {
            //     var positionTag = testPosition();

            //     function testPosition() {
            //         if (dots.length == 1) {
            //             return "st";
            //         } else if (dots.length == 2) {
            //             return "nd"
            //         } else {
            //             return "th";
            //         }

            //     }
            //     const element = dots[index];
            //     console.log((element, index))
            //     $(".owl-dot").attr("aria-label", `click to see the ${index + 1}${positionTag} slide`);

            // }


            // console.log("dots: ", dots)
            // console.log("$('.owl-dot'): ", $(".owl-dot"))
        }, 0);
    }

    Init();
});