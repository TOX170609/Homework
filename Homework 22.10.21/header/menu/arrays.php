<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles_menu/style_array.css">
    <title>Arrays</title>
</head>
<body>
<div class="array_0">
    <div style="color: black">ЗАДАЧА С УРОКА</div>
    <?
    $arr = array(
        'Ivanovs' => array('Ivan', 'Kate', 'Tom'),
        'Petrovs' => array('Bob', 'Ann', 'Tanya'),
        'Smith' => array('Kate', 'Same'),
    );
    $array_keys = (array_keys($arr));
    $i = 0;
    foreach ($arr as $value) {
        echo "В семье " . $array_keys[$i] . " находится " . count($value) . " членов семей" . "<br>";
        $i++;
    }
    $string = serialize($arr);
    echo 'В массиве  ' . substr_count($string, 'Ivan', 15) . '  имя Ivan'. "<br>";
    echo 'В массиве  ' . substr_count($string, 'Kate') . '  имя Kate' . "<br>";
    echo 'В массиве  ' . substr_count($string, 'Tom') . '  имя Tom' . "<br>";


    ?>
</div>
<div class="array_1">
    <div style="color: black">ЗАДАЧА № 1</div>
    <?php
    $array_1 = [];
    for ($i = 1; $i < 10; $i++) {
        array_push($array_1, mt_rand(1, 10));
    };
    foreach ($array_1 as $value) {
        if (($value % 2) == 0) {
            echo "<font color='blue'>";
            echo $value . "<br/>";
            echo "</font >";
        } else
            echo $value . "<br/>";
    }
    ?>
</div>
<div class="array_2">
    <div style="color: black">ЗАДАЧА № 2</div>
    <?php
    $arr2 = array(
        '1' => array('Arrays', 'god', 'film'),
        '2' => array('city', 'Are', 'no'),
        '3' => array('A-Evil', 'go'),
    );
    $a = "A";
    foreach ($arr2 as $key) {
        foreach ($key as $letter)
            if (substr($letter, 0, 1) == $a) {
                echo "<b>" . $letter . "<br>";
            }
    }
    ?>
</div>
<div class="array_3">
    <div style="color: black">ЗАДАЧА № 3</div>
    <?php
    $arr3 = array(
        'Первый массив' => array(1, 2, 3, 4, 5),
        'Второй массив' => array(4, 5, 6, 7, 8, 9),
        'Третий массив' => array(9, 10, 11, 12),
    );
    echo "В массиве arr3 " . (count($arr3[1]) + count($arr3[2]) + count($arr3[3])) . "  элементов" . "<br>";
    $array_keys = (array_keys($arr3));
    $i = 0;
    foreach ($arr3 as $value) {
        echo "В измерении   " . $array_keys[$i] . " находится " . count($value) . " элементов" . "<br>";
        $i++;
    }

    ?>
</div>
</body>
</html>