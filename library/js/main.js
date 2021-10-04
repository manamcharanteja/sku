

$('body').css('display', 'none').fadeIn(100);

$(window).on("load",function(){
$(".loader").fadeOut();
});

 $(document).ready(function () {
            $('.carousel').carousel({
                interval: 3000
            });

            $('.carousel').carousel('cycle');
        });


$(document).ready(function () {

    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.scrollup').fadeIn();
        } else {
            $('.scrollup').fadeOut();
        }
    });

    $('.scrollup').click(function () {
        $("html, body").animate({
            scrollTop: 0
        }, 600);
        return false;
    });

});

// $('#example2').typeIt({

     

//      speed: 100,

//      breakLines: false,

//      autoStart: false,

//      loop:false,

//      cursor:false,

   

// }); 


// $('.news_ticker').easyTicker({
//         direction: 'up',
//         easing: 'easeInOutBack',
//         speed: 'slow',
//         interval: 2000,
//         height: 'auto',
//         visible: 1,
//         mousePause: 0,
//         controls: {
//             up: '.up',
//             down: '.down',
//             toggle: '.toggle',
//             stopText: 'Stop !!!'
//         }
//     });

$('.slider .main-slider').owlCarousel({
    animateOut: 'fadeOut',
    animateIn: 'fadeIn',
    items: 1,
    loop: true,
    autoHeight: true,
    smartSpeed: 800,
    margin: 0,
    autoplay: true,
    autoplayTimeout: 4000,
    autoplayHoverPause: true,
    activeClass: 'active',
    nav: true,
    dots: true,
    navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
    responsive: {
        0: {
            items: 1,
        },
        600: {
            items: 1,
        },
        1000: {
            items: 1,
        }
    }
});
$('.slider .main-slider1').owlCarousel({
    animateOut: 'fadeOut',
    animateIn: 'fadeIn',
    items: 1,
    loop: true,
    autoHeight: true,
    smartSpeed: 800,
    margin: 0,
    autoplay: true,
    autoplayTimeout: 4000,
    autoplayHoverPause: true,
    activeClass: 'active',
    nav: true,
    dots: true,
    navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
    responsive: {
        0: {
            items: 1,
        },
        600: {
            items: 1,
        },
        1000: {
            items: 1,
        }
    }
});



$('.slider .fame-slider').owlCarousel({
    animateOut: 'fadeOut',
    animateIn: 'fadeIn',
    items: 1,
    loop: true,
    autoHeight: true,
    smartSpeed: 800,
    margin: 0,
    autoplay: true,
    autoplayTimeout: 4000,
    autoplayHoverPause: true,
    activeClass: 'active',
    nav: true,
    dots: true,
    navText: true,
    navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
    responsive: {
        0: {
            items: 1,
        },
        600: {
            items: 1,
        },
        1000: {
            items: 1,
        }
    }
});

$('.testimonials .testi-slider').owlCarousel({
    items: 3,
    loop: true,
    autoHeight: true,
    smartSpeed: 800,
    margin: 20,
    autoplay: true,
    autoplayTimeout: 4000,
    autoplayHoverPause: true,
    activeClass: 'active',
    nav: true,
    dots: false,
    navText: false,
    responsive: {
        0: {
            items: 1,
        },
        600: {
            items: 1,
        },
        1000: {
            items: 2,
        }
    }
});

 var owl = $('#feedback');
        owl.owlCarousel({
            items: 2,
            loop: true,
            autoHeight: true,
            smartSpeed: 800,
            margin: 10,
            autoplay: true,
            autoplayTimeout: 1500,
            autoplayHoverPause: true,
            activeClass: 'active',
            nav: true,
            dots: true,
            navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
            responsive: {
                0: {
                    items: 1,
                },
                600: {
                    items: 2,
                },
                1000: {
                    items: 2,
                }
            }
        });

$('.faculty .faculty-slider').owlCarousel({
    items: 6,
    loop: true,
    autoHeight: true,
    smartSpeed: 800,
    margin: 0,
    autoplay: true,
    autoplayTimeout: 4000,
    autoplayHoverPause: true,
    activeClass: 'active',
    nav: true,
    dots: true,
    navText: false,
    responsive: {
        0: {
            items: 1,
        },
        600: {
            items: 1,
        },
        1000: {
            items: 6,
        }
    }
});

