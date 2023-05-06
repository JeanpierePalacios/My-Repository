/*----- SLIDER -----*/


/*----- SLIDER SPONSORS LOGOS -----*/
$(document).ready(function(){
    $('.slider-logos').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: false,
        dots: false,
        pauseOnHover:false,
        responsive: [{
            breakpoint: 800,
            setting: {
                slidesToShow: 2,
                slidesToScroll: 1
            }
        }, {
            breakpoint: 520,
            setting: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }]
    });
});