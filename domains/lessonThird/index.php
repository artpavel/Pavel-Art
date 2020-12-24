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

    $honda = new Car("Honda", "Red", "3000$");
    print_r($honda);

    echo '<br>';

    $honda->setName("New name");
    $name = $honda->getName();
    print_r($honda);
    echo '<br>';
    print_r($name);

    echo '<br>';
    $honda->setPrice(4500);
    print_r($honda);
    echo '<br>';
    echo '<br>';
    echo "Новий клас, наслідування";
    echo '<br>';

    $Maseratti = new SportCar("Maseratti", "Yellow", 100000, 500);
    print_r($Maseratti);

    $myArr = [new Car("Honda", "Red", "3000$"), new SportCar("Maseratti", "Yellow", 100000, 500)];
    var_dump($myArr);
    echo '<br>';

    $name = $myArr[1]->getName();
    echo $name;





    ?>






</body>

</html>