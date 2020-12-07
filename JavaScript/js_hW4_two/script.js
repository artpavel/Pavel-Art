$('button').on('click', function () {
   let my_storage = localStorage.getItem('products');
   let img = $(this).parent('.product').find('img').attr('src');
   let name = $(this).parent('.product').find('h1').text();
   let price = $(this).parent('.product').find('.price').text();
   let nprice = $(this).parent('.product').find('.new-price').text();
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

   let my_product = {
      image: img,
      title: name,
      price: price,
      nprice: nprice,
      size: arrSize,
      color: arrColor,
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


$('.get_cart').on('click', function () {
   let my_str = localStorage.getItem('products');
  
   let products = JSON.parse(my_str);
   console.log(products);
   let new_str = ''
   // for (let i = 0; i < products.length; i++) {
   //    new_str += products[i] + ';';
   // }
   // console.log(new_str);

   // localStorage.setItem('products', new_str);

   // $('.show-cart').html(new_str);


});