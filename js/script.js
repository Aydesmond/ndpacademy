(function ($) {

    'use strict';



    // Sticky Menu

    $(window).scroll(function () {

        if ($('header').offset().top > 10) {

            $('.top-header').addClass('hide');

            $('.navigation').addClass('nav-bg');

        } else {

            $('.top-header').removeClass('hide');

            $('.navigation').removeClass('nav-bg');

        }

    });



    // Background-images

    $('[data-background]').each(function () {

        $(this).css({

            'background-image': 'url(' + $(this).data('background') + ')'

        });

    });



    //Hero Slider

    $('.hero-slider').slick({

        autoplay: true,

        autoplaySpeed: 7500,

        pauseOnFocus: false,

        pauseOnHover: false,

        infinite: true,

        arrows: true,

        fade: true,

        prevArrow: '<button type=\'button\' class=\'prevArrow\'><i class=\'ti-angle-left\'></i></button>',

        nextArrow: '<button type=\'button\' class=\'nextArrow\'><i class=\'ti-angle-right\'></i></button>',

        dots: true

    });

    $('.hero-slider').slickAnimation();



    // venobox popup

    $(document).ready(function(){

        $('.venobox').venobox(); 

    });

    // mixitup filter

    var containerEl = document.querySelector('[data-ref~="mixitup-container"]');

    var mixer;

    if (containerEl) {

        mixer = mixitup(containerEl, {

            selectors: {

                target: '[data-ref~="mixitup-target"]'

            }

        });

    }


    // cookie ends  

    //  Count Up

    function counter() {

        var oTop;

        if ($('.count').length !== 0) {

            oTop = $('.count').offset().top - window.innerHeight;

        }

        if ($(window).scrollTop() > oTop) {

            $('.count').each(function () {

                var $this = $(this),

                    countTo = $this.attr('data-count');

                $({

                    countNum: $this.text()

                }).animate({

                    countNum: countTo

                }, {

                    duration: 1000,

                    easing: 'swing',

                    step: function () {

                        $this.text(Math.floor(this.countNum));

                    },

                    complete: function () {

                        $this.text(this.countNum);

                    }

                });
            });
        }
    }
    $(window).on('scroll', function () {
        counter();
    });
})(jQuery);

// pop up


// $(document).ready(function() { 
//     var id = '#dialog';
//     var maskHeight = $(document).height();
//     var maskWidth = $(window).width();
//     $('#mask').css({'width':maskWidth,'height':maskHeight}); 
//     $('#mask').fadeIn(500); 
//     $('#mask').fadeTo("slow",0.9); 
//           var winH = $(window).height();
//     var winW = $(window).width();
//           $(id).css('top',  winH/2-$(id).height()/2);
//     $(id).css('left', winW/2-$(id).width()/2);
//        $(id).fadeIn(2000);  
//        $('.window .close').click(function (e) {
//     e.preventDefault();
//     $('#mask').hide();
//     $('.window').hide();
//        });  
//        $('#mask').click(function () {
//     $(this).hide();
//     $('.window').hide();
//    });  
   
//   });