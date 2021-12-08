<?php
if (!isset($_COOKIE['login'])){
    $a =0;
}
else {
    $a = $_COOKIE['login'] +1;
}
setcookie('login', $a, time()+360*24*7);
?>
<!Doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel='stylesheet' href='<php echo $style; ?/>' type='text/css' media='all'>

    <title>Mypage</title>
</head>
<body>
<p>Hello<?
print_r($_COOKIE);
echo "<br>";
echo 'Вы посетили наш сайт' . "$a";
?></p>
</body>
