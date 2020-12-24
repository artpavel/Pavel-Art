<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $a = 'Hello world';
    echo '<h1>' . $a . '</h1>'; // виводить в потрібному елементі
    $b = 'Its me';
    echo '<p>' . $b . '</p>';

    // постійна змінна, її не змінюють
    // також є поняття глобальної змінної global $b
    const variable = 'Its constant';
    echo variable;

    // массиви
    $arr1 = array(1, 2, 3, 4);
    echo $arr1;

    $arr2 = [5, 6, 7, 8];
    echo $arr2;

    $arr3 = array(
        'first' => 'first element',
        'second' => 'second element'
    );

    echo '<br>';
    var_dump($arr1); // показує інформацію про змінну

    echo '<br>';
    var_dump($b);

    echo '<br>';
    var_dump($arr3);

    echo '<br>';

    // Цикл for while
    for ($i = 0; $i < count($arr1); $i++) {
        echo $arr1[$i];
        echo '<br>';
    }

    echo '<br>';
    $i = 0;
    while ($i <= count($arr2)) {
        echo $arr2[$i];
        echo '<br>';
        $i++;
    }
    echo '<br>';
    echo '<br>';

    // Метод перебору масива
    foreach ($arr3 as $item) {
        echo $item;
        echo '<br>';
    }

    echo '<br>';
    echo '<br>';
    foreach ($arr3 as $key => $item) {
        echo $key . ' - ';
        echo $item;
        echo '<br>';
    }
    ?>

</body>

</html>