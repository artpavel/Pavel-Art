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

    // Створення масиву
    $myP1 = new Pants('jeans1', 2, 300);
    $myP2 = new Pants('jeans2', 4, 900);
    $myP3 = new Pants('jeans3', 6, 200);

    $myS1 = new Shirt('style1', 28, 150, 10);
    $myS2 = new Shirt('style2', 32, 100, 30);
    $myS3 = new Shirt('style3', 46, 50, 15);

    $myArr = [$myP2, $myS1, $myP3, $myS3, $myP1, $myS2];

    echo '<h2>Створили масив</h2>';
    foreach ($myArr as $item) {
        $item->display() . '<br>';
        echo '<br>';
    }

    // Добавляння ціни
    echo '<h2>Новий масив, після добавлення вартості матеріалу</h2>';

    foreach ($myArr as $item) {
        if (!in_array($item->getDiscount, $myArr)) {
            $item->setCostOfMaterial($item->getCostOfMaterial() + 50);
        }
        $item->display() . '<br>';
        echo '<br>';
    }

    // Сортування масиву
    echo '<h2>Новий масив, після сортування</h2>';

    usort($myArr, function ($a, $b) {
        return ($a->calculateOfPrice() - $b->calculateOfPrice());
    });

    foreach ($myArr as $item) {
        $item->display() . '<br>';
        echo '<br>';
    }
    ?>

</body>

</html>