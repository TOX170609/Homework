<?php
$count = (isset($_COOKIE['count'])) ? $_COOKIE['count'] : '0';
$count++;
setcookie('count', $count, time()+3600*24*24, '/');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../styles_menu/style_auth.css">
    <title>Document</title>
</head>
<body>
<div>
    Вы посетили наш сайт, <? echo $count; ?> раз!
</div>
</body>
</html>