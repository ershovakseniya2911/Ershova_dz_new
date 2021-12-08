<?php
session_start();
$_SESSION['task1Answer'] = $_POST['answer'];
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
<p>Сколько будет 3+3:</p>
<form action="task3.php" method="post">
    <input type="text" name="answer">
    <input type="submit">
</form>
<a href="task3.php">Следующая задача</a>
</body>
</html>