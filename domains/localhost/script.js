// Бургер
$('.burger').on('click', function() {
    $(this).toggleClass('active');
    $('ul').toggleClass('active');
});

// Слайдер
$('.slider').slick({
    infinite: true,
    slidesToShow: 4,
    slidesToScroll: 1,
    nextArrow: '<span class="next"></span>',
    prevArrow: '<span class="prev"></span>',
    responsive: [{
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


// Скрол
// function Myscroll(a) {
//     let element = $(document).find(a);
//     $('html,body').animate({
//         scrollTop: element.offset().top
//     }, 2000);
// }
// $('ul a').on('click', function(e) {
//     e.preventDefault();
//     let link = $(this).attr('href');
//     Myscroll(link);
// });

// Посилання
$('a.logo').attr('href', 'index.php#top');
$('a.index').attr('href', "index.php#top");
$('a.aboutUs').attr('href', "index.php#aboutUs");
$('a.books').attr('href', "books.php#category");
$('a.new').attr('href', "index.php#new");
$('a.testi').attr('href', "index.php#testi");
$('a.foot').attr('href', "#footer");