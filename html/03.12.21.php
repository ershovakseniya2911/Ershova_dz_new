<?php
require "header.php"
?>
<div>
    <h3>
        1) Создайте форму, состоящую из текстового поля, многострочного поля, группы выключателей,
        группы переключателей. Выведите на экран значения, которые ввел/выбрал пользователь.
    </h3>
</div>


<?php
print_r($_POST);
mail("kseniya_pavlova94@rambler.ru", $_POST['login'], $_POST ['text'], "ershovakseniya29@gmail");
?>
<?php
$name = sha1('admin');
$pass = sha1('kseniya2911');
?>
<body>

<form method="post">
    <p>
        <label>Мои комментарии</label> <br>
        <textarea name="comments" rows="3"></textarea>
    </p>
    <p>
        <input type="text" name="name">
    </p>
    <p>
        <input type="radio" name="browser" value="ie"> клик
    </p>
    <p>
        <input type="checkbox" value="Клик">нажми
    </p>
    <button type="submit"> все я справился</button>
</form>
</body>

<div>
    <h3>
        2) Создать страницу для ввода имени пользователя (login) и пароля (password). Если пользователь
        вводит правильную пару (login/password), то сервер выдает страницу с сообщением, что доступ к
        секретным страницам открыт. Login предлагается выбирать из списка.
    </h3>
</div>


<form method="post">
    <p>
        <label>Логин</label>
        <select name="login" id="login">
            <option value="admin">Admin</option>
            <option value="user">User</option>
            <option value="moderator">Moderator</option>
    </select>
    <p>
        <label>Пароль</label>
        <input type="password" name="password">
    </p>
    <p>
        <input type="submit">
    </p>
    <?php
    if ($_POST['login'] == 'admin' && $_POST['password'] == 'admin') {
        echo 'Доступ к секретным страницам открыт';
    }
   else echo 'Вы ввели неверные даные';
?>
</form>

<div>
    <h3>
        3) Создайте форму генерации ссылки с параметром:

        - Создайте форму и в ней добавьте поле со списком выбора – Лаб1, Лаб2, Лаб3, Лаб4

       - При нажатии на кнопку должно быть сформирована ссылка следующего вида:
         phpcourse.php?l=3 , где 3 – это номер выбранной лабораторной работы.
    </h3>
</div>

<form method="post">
    <p>
        <label>Список лабораторных</label>
        <select name="lab">
            <option value="1">Lab1</option>
            <option value="2">Lab2</option>
            <option value="3">Lab3</option>
            <option value="4">Lab4</option>
        </select>

    <p>
       <a href="phpcourse.php" phpcourse.php?l = <?echo $_POST ['user']; ?></a>
    </p>

    <p>
        <input type="submit">
    </p>
</form>

<!--<form method="post">
    <div>
        <h3>
            4) Отправить логины и комментарии на почту (значения должны сохраняться вместо тестового документа на
            электронный адрес).

            *Так как мы отправляем e-mail на локальном сервере, то письма будут сохраняться в папку
            \OpenServer\userdata\temp\email
        </h3>
    </div>

    <p>
        <input type="text" name="login">Login
    </p>
    <p><b>Введите ваш комментарий:</b></p>
    <p>
        <textarea rows="10" cols="45" name="text"></textarea>
    </p>
    <p>
        <input type="submit">
    </p>
</form>


<div>
    <h3>
        5) Создайте форму авторизации. Зашифруйте пароли и отправьте их на сервер.
    </h3>
</div>
<?php
if(isset($_POST['submit'])):
$user_login = sha1($_POST['login']);
$user_pass = sha1($_POST['password']);
echo ($name == $user_login && $pass == $user_pass) ?
    '<p>Доступ открыт</p>' : '<p>Неверная пара логин-пароль</p>';

else:
?>
<form method="post" action="<?=$_SERVER['PHP_SELF']?>">
   <label for="login">Имя пользователя:</label>
    <input type="text" name="login" id="login"><br>
    <label for="password">Пароль:</label>
    <input type="password" name="password" id="password"><br>
    <input type="submit" name="submit" value="Проверить">
    <p>
        <input type="submit">
    </p>
   </form>
<?php
endif;
?>


<?php
require "footer.php"
?>
