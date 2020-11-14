// <<< Зміна кольору
let changeTextColor = document.getElementById('change_color');

changeTextColor.addEventListener('click', () => {
   document.querySelector('p').style.color = 'blue';   
});

// <<< Зміна назви
let changeTitle = document.querySelector('#change_title');

changeTitle.addEventListener('click', () => {
  document.querySelector('h1').innerHTML = 'Павло Артинюк';
});

// <<< Порахувати кількість слів
let getWordsCount = document.getElementById('words_counter');

getWordsCount.addEventListener('click', () => {
let str = document.querySelector('.first').textContent.match(/(\w+)/g).length;
let a = document.querySelector('.counter');
a.style.color = 'red';
a.innerHTML += str + ' слів';
});

// <<< Вивести текст в alert
let alertText = document.querySelector('#get_text');

alertText.addEventListener('click', () => {
   alert(document.querySelector('.second').textContent);   
   document.querySelector('.second').innerHTML = ' ';   
});


