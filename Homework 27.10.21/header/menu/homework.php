<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles_menu/style_auth.css">
    <title>Homework_add</title>
</head>
<body>
<div class="flex_menu1">
    <div class="exercises">
        <?php
        //1. Создать массив произвольной длины. Вывести его на экран. Каждый четный элемент массива умножить на 10.
        // Вывести полученный массив на экран.
        echo "Задача №1 решенная через foreach  <br>";
        $arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
        foreach ($arr as $key => $value) {
            if (($value % 2) == 0) {
                echo $value * 10 . "<br>";
            } else echo $value . "<br>";
        }
        //        echo "Задача №1 решенная через for  <br>";
        //        $arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
        //        for ($i = 1; $i <= 10; $i++) {
        //            if (($i % 2) == 0) {
        //                echo $i * 10 . "<br>";
        //            } else echo $i . "<br>";
        //        }
        //        ?>
    </div>
    <div class="exercises">
        <?php
        //2. Создать массив, заполненный случайными числами. Массив состоит из n элементов.
        // С 0 по n/2 элемент массива обернуть в курсив, элементы с n/2 по n обернуть жирным.
        echo "Задача №2 решенная через foreach  <br>";
        $arr2 = [];
        for ($i = 1; $i < 10; $i++) {
            array_push($arr2, mt_rand(1, 10));
        };
        foreach ($arr2 as $value) {
            if (($value % 2) == 0) {
                echo "<i>$value</i><br>";
            } else echo "<b>$value</b><br>";
        }
        //        echo "Задача №2 решенная через for  <br>";

        // Регина как ее решить через цикл for?

        //        $arr2 = [];
        //        for ($i = 1; $i < 10; $i++) {
        //            array_push($arr2, mt_rand(1, 10));
        //        };
        //        $count = sizeof($arr2);
        //                for ($i = 1; $i <= 10; $i++) {
        //                    if (($i % 2) == 0) {
        //                        echo "<i>$i</i><br>";
        //                    } else echo "<b>$i</b><br>";
        //                }
        ?>
    </div>
    <div class="exercises">
        <?php
        //3. Создать массив произвольной длины. Посчитать количество.
        echo "Задача №3 решенная через foreach <br>";
        $arr3 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14];
        foreach ($arr3 as $key => $value) {
        }
        echo 'Всего чисел: ' . ($key + 1);
        //        Через функцию count
        //        echo "В массиве " . count($arr3) . " элементов";
        ?>
    </div>
    <div class="exercises">
        <?php
        //4. Создать массив, заполненный случайными числами. Вывести элементы числового массива, которые больше, чем
        // элементы, стоящие перед ними. Например, дан массив [3, 9, 8, 4, 5, 1]. Следует вывести числа 9 и 5, так как
        // перед ними стоят соответственно числа 3 и 4, которые меньше их.
        echo "Задача №4 решенная через for  <br>";
        $arr4 = [3, 9, 8, 4, 5, 16, 10, 6, 11, 61, 56];
        $n = sizeof($arr4);
        for ($i = 1; $i < $n - 1; $i++) {
            if ($arr4[$i] > $arr4[$i - 1])
                echo "Этим элементoм стало число " . $arr4[$i] . "<br>";
        }
        ?>
    </div>
    <div class="exercises">
        <?php
        //5. Дан массив, содержащий положительные и отрицательные числа. Заменить все элементы массива на
        // противоположные по знаку. Например, задан массив [1, -5, 0, 3, -4]. После преобразования должно получиться
        // [-1, 5, 0, -3, 4].
        echo "Задача №5 решенная через foreach, был массив [1, -5, 0, 3, -4] <br>";
        $arr5 = [1, -5, 0, 3, -4];
        foreach ($arr5 as $value) {
            if ($value < 0) {
                echo $value * (-1);
            } elseif ($value > 0) {
                echo $value * (-1);
            } else echo $value;
        }
        ?>
    </div>
</div>
<div class="flex_menu1">
    <div class="exercises">
        <?php
        //1. Сделайте функцию, которая возвращает параметром число от 1 до 7, а возвращает день недели на русском языке.
        echo "Задача №1 на тему функции <br>";
        $number_of_a_day = 1;
        function return_days_of_the_week($number_of_a_day)
        {
            switch ($number_of_a_day) {
                case 0:
                    echo "нет такого дня";
                    break;
                case 1:
                    echo "Сегодня понедельник!";
                    break;
                case 2:
                    echo "Сегодня вторник!";
                    break;
                case 3:
                    echo "Сегодня среда!";
                    break;
                case 4:
                    echo "Сегодня четверг!";
                    break;
                case 5:
                    echo "Сегодня пятница!";
                    break;
                case 6:
                    echo "Сегодня суббота!";
                    break;
                case 7:
                    echo "Сегодня воскресенье!";
                    break;
            }
        }

        echo "<font color='blue'>";
        return_days_of_the_week($number_of_a_day);
        echo "</font>";
        ?>
    </div>
    <div class="exercises">
        <?php
        //2.Создать функцию, которая принимает массив произвольной длины  и возвращает количество положительных чисел
        // в массиве.
        echo "Задача №2 на тему функции <br>";
        $arr6 = [];
        function plus($arr6)
        {
            for ($i = 1; $i <= 10; $i++) {
                array_push($arr6, mt_rand(-3, 3));
            };
            foreach ($arr6 as $key => $value) {
                if ($value > 0) {
                    var_dump($value);
                }
            }
        }

        plus($arr6);
        ?>
    </div>
    <div class="exercises">
        <?php
        //3.Создать функцию, которая принимает строку с текстом. Вернуть массив, содержащий количество гласных и
        // согласных букв.
        echo "Задача №3 текст - Добрый день, Регина. <br> Не знаю как решить через массив <br>";
        $text = "Добрый день, Регина";
        function letters($text)

        {
            $Count1 = preg_match_all('/[аеёиоуыэюя]/iu', $text);
            echo "<font size='5px'>В тексте " . $Count1 . " гласных букв</font><br>";
            $Count2 = preg_match_all('/[бвгджзклмнпрстфхцщшч]/iu', $text);
            echo "<font size='5px'>В тексте " . $Count2 . " согласных букв</font>";
        }

        letters($text);
        ?>
    </div>
    <div class="exercises">
        <?php
        //4.Создать функцию, которая принимает строку. Данная функцию должна формировать новую строку и ее возвращать.
        // Строка убирает все знаки пробела, точки, запятые и т.п. Например, входная строка "Привет, пользователь!
        // Как твои дела?" преобразуется в строчку "ПриветпользовательКактвоидела?"
        echo "Задача №4 на тему функции <br>";
        $str = "Привет, пользователь! Как твои дела?";

        function replace($str)
        {
            echo str_replace('Привет, пользователь! Как твои дела?', 'ПриветпользовательКактвоидела?', $str);
        }

        replace($str);
        ?>
    </div>
    <div class="exercises">
        <?php
        //5. Создать функцию, которая принимает строку и возвращает количество заглавных букв в строке.
        echo "Задача №5:  Привет, ПользоВатЕль! Как Твои Дела? <br>";
        $str1 = "Привет, ПользоВатЕль! Как Твои Дела?";
        function high($str1)
        {
            $Count3 = preg_match_all('/[АБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯ]/u', $str1);
            echo "<font size='5px'>В тексте " . $Count3 . " заглавных букв</font><br>";
        }

        high($str1);
        ?>
    </div>
</div>
</body>
</html>
