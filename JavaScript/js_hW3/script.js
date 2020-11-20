// Tabs
$('.tab:first').addClass('active');
$('.content').not(":first").hide();
$('span').not(":first").hide();

$('.tab').on('click', function () {
   let index = $(this).index();
   let content = $('.content');
   let span = $('span');
   $('span').hide();
   $('.tab').removeClass('active');
   $(this).addClass('active');
   $(content).hide();
   $(content[index]).show();
   $(span[index]).show();
});


// Slider
$('.slider-for').slick({
   slidesToShow: 1,
   slidesToScroll: 1,
   arrows: true,
   nextArrow: '<span class="next"></span>',
   prevArrow: '<span class="prev"></span>',
   fade: true,
   asNavFor: '.slider-nav'
 });
 $('.slider-nav').slick({
   slidesToShow: 2,
   slidesToScroll: 1,
   asNavFor: '.slider-for',
   focusOnSelect: true,
   arrows: false
 });