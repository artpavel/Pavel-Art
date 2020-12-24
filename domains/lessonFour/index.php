<!-- Це ми підключили на PHP-файл -->
<?php
include 'class.php'
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $a = array('first' => 'element', 'second' => 'block', 'third' => 'position');
    $b = array('first' => 'apple', 'vegetable' => 'element', 'third' => 'watermelon');
    $c = array_combine($a, $b); // комбінує масиви. Перше - це ключі, а другий - значення

    $d = array_diff_key($a, $b); // шукає тільки різні ключі і виводить їх

    $e = array_diff($a, $b); // порівнює значення і виводить ті, які різні. Виводить із першого масиву

    $f = array_pop($a); // видаляє останній елемент

    array_push($a, $f, 'orange', 'banana'); // додає елемент в кінець масиву

    $g = array_search('block', $a); // пошук в масиві по значенню і виводить його ключ (індекс)

    $h = array_reverse($a); // перевертає масив

    $i = array_search('block', $h); // шукає з кінця

    // Сортування масивів
    asort($a); // сортує по значенню. Зберігає ключі 
    // sort($a); // сортує по ключам, додає їм базове значення


    // Як можна рухатися по масиву без циклів
    $current = current($b); // виводить перший елемент масиву
    $cur = next($b); // наступний
    $cur1 = prev($b); // попередній
    $cur2 = end($b); // останній елемент масива
    $cur3 = reset($b); // перший елемент масива

    // Сума масиву
    $myArr = [24, 44, 50, 3];
    $sum = array_sum($myArr);




    print_r($c);
    echo '<br>';
    print_r($d);
    echo '<br>';
    print_r($e);
    echo '<br>';
    print_r($a);
    echo '<br>';
    print_r($g);
    echo '<br>';
    print_r($a);
    echo '<br>';
    print_r($current);
    echo '<br>';
    print_r($cur);
    echo '<br>';
    print_r($cur1);
    echo '<br>';
    print_r($sum);


    // Абстрактний клас
    echo '<br>';
    $myRec = new Rectangle(5, 10);
    $myRec->PrintInfo();
    echo '<br>';
    $mySquare = new Square(5);
    $mySquare->PrintInfo();






    ?>






</body>

</html>