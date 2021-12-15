<?php
include_once 'header.php';
setcookie('trueLogin', md5('admin'), time() + 3600 * 24 * 5);
setcookie('truePassword', md5('kseniya2911'), time() + 3600 * 24 * 5);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../style/style.css">
    <style>
        form {
            margin: 10px;
        }
        .submit {
            margin: 20px 0;
            padding: 10px 20px;
            font-size: 16px;
        }
        .submit:hover {
            background: crimson;
            color: aqua;
        }
    </style>
    <title>Авторизация</title>
</head>
<body style="background-color: <?php
if ($_COOKIE['Auth'] == 1 ) echo $_COOKIE['backgroundColor']?>">
<main>
    <div>
        <p style="font-size:24px">
            <?php if ($_COOKIE['Auth'] == 1) {
                if (trim($_COOKIE['lastVisited'] != "" && isset($_COOKIE['lastVisited']))){
                    if ($_COOKIE['lastVisited'] == 'Факт') {
                        echo 'Пользователь admin посещал последний раз страницу Факта';
                    } else if ($_COOKIE['lastVisited'] == 'Bitrix') {
                        echo 'Пользователь admin посещал последний раз страницу Bitrix';
                    }
                } else echo 'Пользователь admin еще ничего не посещал';
            } else echo 'Авторизуйтесь, чтобы узнать последнюю посещенную пользователем страницу';
            ?>
        </p>
    </div>
    <?php
    if ($_COOKIE['Auth'] != 1) {
        echo "Данные для проверки задания. <br> Логин: admin";
        echo "<br> Пароль: kseniya2911";
    }
    if ($_POST['submit'] || ($_COOKIE['Auth'] == 1)) {
        if (($_COOKIE['Auth'] == 1) || (md5($_POST['aLogin']) == $_COOKIE['trueLogin'] && md5($_POST['aPW']) == $_COOKIE['truePassword'])) {
            setcookie('uAre', $_POST['aLogin'], time() + 3600 * 24 * 5);
            setcookie('Auth', 1, time() + 3600 * 24 * 5);
            echo "<p style='font-size:24px'>Привет, admin!</p>";
        }  else {
            echo "<p><br>Введены неверные данные, либо таких данных нет</p>";
        }
    }
    ?>
    <form method="post" action="" <?php echo ($_COOKIE['Auth'] == 1) ? 'hidden' : null?>>
        <div>
            <input type="text" name="aLogin" required="">
            <label>Username</label>
        </div>
        <div>
            <input type="password" name="aPW" required="">
            <label>Password</label>
        </div>
        <a href="">
            <input class="submit" type="submit" name="submit" value="Авторизоваться">
        </a>
    </form>
    <form action="03.12.21authorization.php" method="get">
        <select name="color">
            <option value="red">Красный</option>
            <option value="blue">Голубой</option>
            <option value="pink">Розовый</option>
            <option value="white">Белый</option>
            <option value="gray">Серый</option>
        </select>
        <input type="submit" name="submitColor" value="Выберите цвет">
        <?php
        (isset($_GET['submitColor'])) ? setcookie('backgroundColor', $_GET['color'], time() + 3600 * 24 * 5) : null;
        ?>
    </form>
    <div>
        <a href="fact.php">
            <input class="submit" type="button" name="visited" value="Факт">
        </a>
        <a href="bitrix.php">
            <input class="submit" type="button" name="visited" value="Bitrix">
        </a>
    </div>
    <div>

    </div>
</main>
<?php include_once 'footer.php'?>
</body>
</html>