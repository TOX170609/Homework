<?php
require 'MyAuth.php';
$login = md5(trim($_POST['login']));
$password = md5(trim($_POST['password']));
$auth = new MyAuth("$login","$password");
$auth -> Db_connect();
//$hostname = 'localhost';
//$username = 'Anton';
//$password = 'Fact2021';
//$bdname = 'my-site';
//$db_connect = mysqli_connect($hostname, $username, $password, $bdname);
//mysqli_set_charset($db_connect, 'utf8');
//$select = mysqli_query($db_connect, "SELECT * FROM `authorization`");
//$arr_select = mysqli_fetch_all($select, MYSQLI_ASSOC);
//
//$login = md5(trim($_POST['login'] ));
//$password = md5(trim($_POST['password']));
//foreach ($arr_select as $value) {
//    if ($value['login'] == $login) {
//        if ($value['password'] == $password) {
//            header("Location: feedback.php");
//        } else {
//            echo "<font class='warning'> Неправильно, введите логин или пароль, попробуйте еще раз! </font>";
//            break;
//        }
//    }
//}

//    echo "<pre>";
//    echo $value['login'] . "<br>";
//    echo $value['password']. "<br>";
//print_r($arr_select);
//echo "</pre>";

//Старая версия

//if (count($_POST) > 0) {
//    $login = md5(trim($_POST['login']));
//    $password = md5(trim($_POST['password']));
//    if ($login == '' || $password == '') {
//        echo "<font class='warning1'> Пожалуйста, напишите данные</font>";
//    } elseif ($login == 'dd93247a247c559e1050296f0ec86a23' & $password == '202cb962ac59075b964b07152d234b70') {
//        header("Location: feedback.php");
//    } else {
//        echo "<font class='warning'> Неправильно, введите логин или пароль, попробуйте еще раз! </font>";
//    }
//} else {
//    echo "<font class='warning1'>Введите данные!</font>";
//}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Authorization</title>
    <link rel="stylesheet" href="styles_menu/style_auth.css">
</head>
<body>
<div class="logo">
    <img src="images/1.jpg">
</div>
<form method="post">
    <p class="info">
        Логин <input type="text" name="login" class="log">
    </p>

    <p class="info">
        Пароль <input type="text" name="password" class="pass">
    </p>
    <p>
        <button type="submit" class="submit">Войти</button>
    </p>
    <p>
        <button type="submit" class="submit"><a href="registration.php" style="text-decoration: none">Регистрация</a>
        </button>
    </p>
    <div class="return_auth">
        <a href="../../index.php">Вернуться</a>
    </div>
</form>
</body>
</html>