<?php
// зараз ми присвоїли змінні, які будемо відправляти
$name = $_POST['name']; // це ми підключили кнопки по імені
$email = $_POST['email'];

// тепер ці змінні треба декодувати із PHP в документ
$name = htmlspecialchars($name);
$email = htmlspecialchars($email);

// цей метод декодує урли
$name = urldecode($name);
$email = urldecode($email);

// функція, яка видаляє лишні пробіли з початку і в кінці
$name = trim($name);
$email = trim($email);

//тепер безпосередньо функція відправки листа на пошту
if (mail("example@gmail.com", " From site: Example ", " Name: " . $name . " Email: " . $email, " From: " . $email)) {
    echo "<div class='pop_up'>Message send successfull</div>";
} else {
    echo "Something Error";
}

// пишемо все в рядок: на яку пошту, звідки, текст повідомлення і від кого
// подивитися повідомлення OpenServer -> userdata -> temp -> email

// функції потрібні будуть для кожного імпута і їх необхідно буде завжди проганяти
