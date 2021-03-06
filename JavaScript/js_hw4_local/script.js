
// // вибір розмріру та кольору
// $('li').on('click', function () {
//     $(this).toggleClass('active');
// });



// створення корзини
$('button').on('click', function () {
    let my_storage = localStorage.getItem('products');
    let img = $(this).parent('.product').find('img').attr('src');
    let name = $(this).parent('.product').find('h1').text();
    let price = $(this).parent('.product').find('.price span').text();
    let nprice = $(this).parent('.product').find('.new-price span').text();
    let size = $(this).parent('.product').find('.size').text();
    let liSize = $(this).parent('.product').find('.size li');
    let arrSize = [];
    for (let i = 0; i < liSize.length; i++) {
        arrSize.push($(liSize[i]).text());
    }
    let color = $(this).parent('.product').find('.color').text();
    let liColor = $(this).parent('.product').find('.color li');
    let arrColor = [];
    for (let i = 0; i < liColor.length; i++) {
        arrColor.push($(liColor[i]).text());
    }
    let id = $(this).parent('.product').find('button').attr('data-id');

    let my_product = {
        image: img,
        title: name,
        price: price,
        nprice: nprice,
        size: arrSize,
        color: arrColor,
        id: id,
        count: 1,
    }

    if (my_storage === null) {
        let my_products = {
            products: [
                my_product
            ]
        }
        let myJSON = JSON.stringify(my_products);
        localStorage.setItem('products', myJSON);
    } else {
        my_storage = JSON.parse(my_storage);
        let my_products = my_storage.products;
        let iter = 0;
        for (let i = 0; i < my_products.length; i++) {
            if (my_products[i].title == name) {
                let counts = my_products[i].count;
                counts++;
                my_products[i].count = counts;
                iter = 1;
            }
        }
        if (iter == 0) {
            my_products.push(my_product);
        }
        my_storage = JSON.stringify(my_storage);
        localStorage.setItem('products', my_storage);
    }
});

// виведення корзини
$('.get_cart').on('click', function () {
    $('.cart').remove();
    $('.total').remove();
    let my_str = localStorage.getItem('products');
    let sum = [];
    my_str1 = JSON.parse(my_str);
    if (my_str === null || my_str1.products.length == 0) {
        alert('Ваша корзина пуста')
    } else {
        let products = JSON.parse(my_str);
        products = products.products;
        for (let i = 0; i < products.length; i++) {
            let id = products[i].id;
            let image = products[i].image;
            let title = products[i].title;
            let sizes = products[i].size;
            str1 = "";
            for (let j = 0; j < sizes.length; j++) {
                str1 += '<li>' + sizes[j] + '</li>';
            }
            let colors = products[i].color;
            str2 = "";
            for (let j = 0; j < colors.length; j++) {
                str2 += '<li>' + colors[j] + '</li>';
            }
            let count = products[i].count;
            let countNumber = Number(count);
            let price = products[i].nprice;
            let priceNumber = Number(price);
            let total = countNumber * priceNumber;
            sum.push(total);
            $('.show-cart').append(`           
            <div class="cart">
            <img src="${image}" alt="">
            <h2>${title}</h2>
            <ul class="size">Розмір<li>${str1}</li></ul>
            <div><ul class="color">Колір<li>${str2}</li></ul></div>
            <div class="count">Кількість  ---> ${count}</div>
            <p class="price">Ціна за одиницю\t  --->\t ${price}</p>
            <button class="plus">+</button>  <button class="minus">-</button>          
            <button class="remove">Видалити</button>            
            <p class="sum">Вартість товару ---> ${total}  грн</p>       
            </div>`);
        }
        let allTotal = sum.reduce((acc, val) => acc + val);
        $('.show-cart').append(`<h3 class="total">Всього до оплати ---> ${allTotal}  грн</h3>`)
    }

    // добавляння кількості
    $( 'button.plus').on('click', function () {
        let my_index = $(this).parent('.cart').index();
        let products = JSON.parse(localStorage.getItem('products'));
        let my_products = products.products;
        let remove = $(this).parent('.cart').find('.count');
        let price = $(this).parent('.cart').find('.price');
        let count = my_products[my_index].count;
        count++;
        my_products[my_index].count = count;
        remove.remove();
        price.prepend(`<p class="count">Кількість  ---> ${count}</p>`)
        localStorage.setItem('products', JSON.stringify(products));
    });

    // видалення товару
    $('button.remove').on('click', function () {
        let my_index = $(this).parent('.cart').index();
        let products = JSON.parse(localStorage.getItem('products'));
        let new_products = products.products;
        new_products.splice(my_index, 1);
        $(this).parent('.cart').remove();
        $('.total').remove();
        localStorage.setItem('products', JSON.stringify(products));
    });

    // видалення кількості
    $('button.minus').on('click', function () {
        let my_index = $(this).parent('.cart').index();
        let products = JSON.parse(localStorage.getItem('products'));
        let my_products = products.products;
        let count = my_products[my_index].count;
        count--;
        my_products[my_index].count = count;
        let remove = $(this).parent('.cart').find('.count');
        let price = $(this).parent('.cart').find('.price');
        if (count <= 0) {
            alert("Невірна дія. Краще видалити товар!!!");
            my_products.splice(my_index, 1);
            $(this).parent('.cart').remove();
            $('.total').remove();
            localStorage.setItem('products', JSON.stringify(products));
        }
        remove.remove();
        price.prepend(`<p class="count">Кількість  ---> ${count}</p>`)
        localStorage.setItem('products', JSON.stringify(products));
    });
});


