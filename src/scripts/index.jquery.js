
$(function () {
    // alert("jquery here!");

    $(".testimonial-sliders").owlCarousel({
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