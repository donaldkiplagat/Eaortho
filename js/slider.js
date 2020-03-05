$(document).on('ready', function() {
$('.slider').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        autoplay: true,
        autoplayTimeout: 15000,
        navText: ["<i class='fa fa-angle-left '></i>", "<i class='fa fa-angle-right'></i>"],
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    })
});
