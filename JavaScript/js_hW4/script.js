let product = [];


$('button').on('click', function () {
    if (localStorage.getItem('products') != null) {
        product = JSON.parse(localStorage.getItem('products'));
    }
    let str = $(this).parent('.product').html();
    product.push(str);
    let prodSet = [...new Set(product)];
    let myJSON = JSON.stringify(prodSet);
    localStorage.setItem('products', myJSON);
});

$('.get_cart').on('click', function () {
    let str = JSON.parse(localStorage.getItem('products'));
    for(let i=0;i<str.length;i++){
        $('.show-cart').append('<div class="product">'+str[i]+'</div>')
    }
    let remove = $('.show-cart').find('button');
    $('<button class="remove">Видалити товар</button>').replaceAll(remove);
    $('.show-cart .product').append('<input type="number" class="count" value="1">');
    console.log(str);
});
