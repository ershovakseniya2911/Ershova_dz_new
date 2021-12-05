<?php
require "header.php"
?>

<?php
print_r($_POST);
mail("kseniya_pavlova94@rambler.ru", $_POST['login'], $_POST ['password'], "ershovakseniya29@gmail");

?>

<?php
$name = sha1('admin');
$pass = sha1('kseniya2911');
$pass1 = sha1('kseniya2911');
$email = sha1('kseniya_pavlova94@rambler.ru')
?>
<!Doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>get_post</title>
</head>
<?php

if(isset($_POST['submit'])):
$user_login = sha1($_POST['login']);
$user_pass = sha1($_POST['password']);
echo ($name == $user_login && $pass == $user_pass) ?
    ' <p <a href="hello.php" target="_blan">Рады вас приветствовать!</a></p>' : '<p>Неверная пара логин-пароль</p>';

else:
?>
<form method="post" action="<?=$_SERVER['PHP_SELF']?>">
    <h3>Авторизация</h3>
    <label for="login">Имя пользователя:</label>
    <input type="text" name="login" id="login"><br>
    <label for="password">Пароль:</label>
    <input type="password" name="password" id="password"><br>
    <input type="submit" name="submit" value="Вход">
</form>
<?php
endif;
?>


<form id='forma' action="<?=$_SERVER['PHP_SELF']?>">
<h3>Форма регистрации</h3>
<p>Заполните поля для регистрации на сайте</p> 
<p>Имя<br /><input type='text' name='login' ></p> 
<p>Пароль<br /><input type='password' name='password' ></p> 
<p>Повторите пароль<br /><input type='password' name='password2'></p> 
<p>Email<br /><input type='text' name='email'></p> 
<p><input type='submit' value='OK' name='submit' ></p> 
</form>


<?php
if(isset($_POST['submit'])):
    $user_login = sha1($_POST['login']);
    $user_pass = sha1($_POST['password']);
    $user_pass1 = sha1($_POST['password']);
    $user_email = sha1($_POST['email']);
    echo ($name == $user_login && $pass == $user_pass && $user_pass1 && $user_email) ?
        ' <p <a href="index.php" target="_blan">Добро пожаловать!</p>' : '<p>Данные введены не верно, пожалуйста повторите</p>';
else:
    ?>
<?php
endif;
?>