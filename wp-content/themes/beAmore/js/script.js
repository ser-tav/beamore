jQuery(document).ready(function ($) {
    $('.navbar-toggler').click(function () {
        $(this).toggleClass("change");
        if ($(this).hasClass("change")){
            $('body').css('overflow', 'hidden')
        }else{
            $('body').css('overflow-y', 'scroll')
        }
    });

    $('.registr_btn').on('click',function () {
        $('#registr_modal').modal('show');
    });

    $('.broadcast_program_slider,.front_speakers_slider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        dots: false,
        arrows: true,
        centerMode: false,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 3500,
        pauseOnFocus: true,
        responsive: [
            {
                breakpoint: 1025,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 5,
                    dots: true,
                    arrows: false,
                }
            },
            {
                breakpoint: 769,
                settings: {
                    slidesToShow: 2,
                    arrows: false,
                    dots: true,
                }
            },
            {
                breakpoint: 460,
                settings: {
                    slidesToShow: 1,
                    arrows: false,
                    dots: true,
                }
            }
        ]
    });

    $('.our_clients_slider, .functional_slider, .introduction_slider,.why_now_slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        arrows: false,
        centerMode: false,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 3500,
        pauseOnFocus: true,
    });
});
