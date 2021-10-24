<?php
$user = $_POST['user'];
$Hello = $_COOKIE['user'];
if ($user == 'user'){
    setcookie('user', 'User', time()+3600*24*24*24);
}else setcookie('user', 'Guest', time()+3600*24*24*24);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles_menu/style_auth.css">
    <title>Document</title>
</head>
<body>
<div>
    Привет, <? echo $Hello; ?>
</div>
<form method="post">
    <input type="text" name="user">
    <input type="submit">
</form>
</body>
</html>