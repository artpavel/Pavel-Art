$('.burger').on('click', function () {
    $(this).toggleClass('active');
    $('ul').toggleClass('active');
});


$('.slider').slick({
    infinite: true,
    slidesToShow: 4,
    slidesToScroll: 1,
    nextArrow: '<span class="next"></span>',
    prevArrow: '<span class="prev"></span>',
    responsive: [
        {
            breakpoint: 900,
            settings: {
                slidesToShow: 3,
            }
        },
        {
            breakpoint: 700,
            settings: {
                slidesToShow: 2,
            }
        },
        {
            breakpoint: 500,
            settings: {
                slidesToShow: 1,
            }
        }
    ]
});