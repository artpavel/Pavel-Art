let product = [];


$('button').on('click', function(){
    let str = $(this).parent('.product').html();
    product.push(str);
    let prodSet = [...new Set(product)];
    let myJSON = JSON.stringify(prodSet);
    localStorage.setItem('products', myJSON);
});

$('.get_cart').on('click', function(){
   let str = JSON.parse( localStorage.getItem('products') );
   $('.show-cart').html(str);
   let remove = $('.show-cart').find('button');
   $('<button class="remove">Видалити товар</button>').replaceAll(remove);
   $('.remove').append('<input type="number" class="count" value="1">');
   console.log(str);
});



