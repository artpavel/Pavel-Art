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
    // Умови, причому if-ifelse також працює
    // $a = 3;
    // if ($a == 1) {
    //     echo $a;
    // } elseif ($a == 2) {
    //     echo $a;
    // } else {
    //     echo $a;
    // }

    // echo 'Функції';
    // echo '<br>';
    // echo '<br>';

    // функції

    // $a = Hello('Hello with return');
    // echo $a;


    $honda = new Car("Honda", "Red", "3000$");
    print_r($honda);

    ?>

    <p> <?php echo $honda->name ?> </p>




</body>

</html>