<?php
session_start();
if (empty($_SESSION['date'])){
    $_SESSION = date('H:m:s');
}
echo 'Ты зашел в '; print_r  ($_SESSION);

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
</body>
</html>