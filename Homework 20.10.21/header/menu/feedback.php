<?php
$out = $_POST['out'];
$site = $_COOKIE['out'];
if ($out == 'fact') {
    header('Location: https://fact.digital');
    setcookie('out', 'fact', time() + 3600 * 24 * 24);
} elseif ($out == 'bitrix') {
    header('Location: https://www.1c-bitrix.ru//');
    setcookie('out', 'bitrix', time() + 3600 * 24 * 24);
}
$to = "example@mail.ru";
$comment = trim($_POST['comment']);
$comment = htmlspecialchars($_POST['comment']);
$comment = urldecode($_POST['comment']);
if (count($_POST) > 0) {
    if ($comment == '') {
        echo "<font class='warning'> Пожалуйста, напишите комментарий!</font>";
    } else {
        mail($to . ' от меня', "Homework", $comment);
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>feedback</title>
    <link rel="stylesheet" href="styles_menu/style_auth.css">
</head>
<div class="flex_menu">
    <form method="post">
        <select name="out" id="" class="flex_menu">
            <option value='fact'>Fact</option>
            <option value='bitrix'>Bitrix</option>

        </select>
        <input type="submit">
    </form>
    <div class="top">
        В последний раз Вы были, <? echo "<font color='red'>$site</font>" ?>

    </div>
</div>
<body>
<div class="congr"> Поздравляем тебя путник!!! <br> Оставь пожалуйста небольшой комментарий!</div>
<div>
    <img src="images/3.jpg" style="width: 450px">
</div>
<form method="post">
    <textarea cols="58" rows="5" placeholder="Введите текст" name="comment" required="required"></textarea>
    <p>
        <button type="submit" class="send">Отправить</button>
    </p>
    <div class="return">
        <a href="authorization.php">Вернуться</a>
    </div>
</body>
</html>