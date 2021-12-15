<?php
if(date("H") > 20.01 && date("H") < 07.59){
    $style = 'style-night.css';
}else{
    $style = 'style.css';
}
?>
<!Doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, shrink-to-fit=no"">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel='stylesheet' href='<php echo $style; ?/>' type='text/css' media='all'>

    <title>Mypage</title>
</head>
<body style="background-color: <?php
if ($_COOKIE['Auth'] == 1 ) echo $_COOKIE['backgroundColor']?>">
</html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../style/style.css">
    <title>Title</title>
</head>
<body>
<body>
<header class="header">
    <div class="container">
        <div class="row header__info">
            <img class="header__logo" src="../image/decoclay_mgn.png" alt="Упс...проблемка">
            <a class="table-link" href="table.php" target="_blank">Сегмент таблицы Менделеева|</a>
            <a class="massiv-link" href="26.11.21dz.php" target="_blan">Массивы|</a>
            <a class="string-link" href="29.11.21.php" target="_blan">Строки|</a>
            <a class="function-link" href="01.12.21.php" target="_blan">Функции|</a>
            <a class="get_post-link" href="03.12.21.php" target="_blan">GET/POST|</a>
            <a class="anketa-link" href="03.12.21questionnaire.php" target="_blan">Анкета|</a>
            <a class="authorization-link" href="03.12.21authorization.php" target="_blan">Авторизация|</a>
            <a class="logout" href="logout.php" target="_blan">Выйти|</a>

        </div>
    </div>
</header>

<main class="main">
    <div class="container">
        <section class="row">
            <div class="foto">
                <img src="../image/foto.jpg" alt="Упс...проблемка">
            </div>
            <div class="info">
                <div class="name">
                    <h1 class="name">Ершова Ксения</h1>
                </div>
                <div class="info-gr">
                    <div class="aboutme">
                        <?php
                          $aboutmeinfostring = '<span>Место работы: ОАО "ММК-МЕТИЗ" Хобби: декорирование кружек и ложек из полимерной глины, основатель бренда творческой мастерской "DECOCLAY_MGN"</span>';
                          $aboutmeinfoArray = explode('.', $aboutmeinfostring);
                          $aboutmeinfoArray[0] = "<span style='color: fuchsia'>$aboutmeinfoArray[0]</span>";
                          $aboutme = implode('.' , $aboutmeinfoArray);
                          echo $aboutme;
                        ?>
                    </div>
                    <div class="feedback">
                        <div class="feedback">
                            <?php
                            $feedbackstring = '<p> Преподаватель Регина все объясняет вежливо, доступно, не просто поток теории,
                            а сразу отработка на практике, что очень нравится,
                            так материал усваивается в разы быстрее. Отвечает на все вопросы, которые возникли в ходе урока,
                            ждет и помогает, каждому студенту, если возникает каккая-либо проблема с выполнением задания.
                            Темп очень устраивает, для меня ,как новичка, очень удобно. Хотелось бы, чтобы продолжалось обучение в таком же темпе.
                            Сложности для меня состоят в том, что многие слова не знаю их значений, и по
                            возможности давать устные определения тому или иному слову.
                            В целом , первым занятием удовлетворена.</p>';
                            $feedbackArray = explode(' ', $feedbackstring);
                            foreach ($feedbackArray as $item => $element) {
                                ($item % 2 === 0) ? $feedbackArray[$item] = "<span style='color:red'>$element</span>>" : $feedbackArray[$item] = "<span style='color:#520404'>$element</span>";
                            }
                            $feedback = implode(' ', $feedbackArray);
                            echo $feedback;
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="cup">
            <div class="cup__wrapper">

                <div class="cup__item">
                    <div class="cup__img">
                        <img src="../image/stich.jpeg" alt="Упс...проблемка">
                    </div>
                    <div class="cup__title">
                      Стич

                    </div>
                </div>

                <div class="cup__item">
                    <div class="cup__img">
                        <img src="../image/serdce.jpeg" alt="Упс...проблемка">
                    </div>
                    <div class="cup__title">
                        С любовью
                    </div>
                </div>

                <div class="cup__item">
                    <div class="cup__img">
                        <img src="../image/pryanya.jpeg" alt="Упс...проблемка">
                    </div>
                    <div class="cup__title">
                        Девочка с пряней
                    </div>
                </div>

                <div class="cup__item">
                    <div class="cup__img">
                        <img src="../image/novogodnya.jpeg" alt="Упс...проблемка">
                    </div>
                    <div class="cup__title">
                        Новогодняя девочка
                    </div>
                </div>

            </div>

        </section>
    </div>

    <section class="cup2">
        <div class="cup2__wrapper">

            <div class="cup2__item">
                <div class="cup2__img">
                    <img src="../image/stich.jpeg" alt="Упс...проблемка">
                </div>
                <div class="cup2__title">
                    Декорирование кружки - Стич
                </div>
            </div>

            <div class="cup2__item">
                <div class="cup2__img">
                    <img src="../image/serdce.jpeg" alt="Упс...проблемка">
                </div>
                <div class="cup2__title">
                    Декорирование кружки - Связано с любовью
                </div>
            </div>

            <div class="cup2__item">
                <div class="cup2__img">
                    <img src="../image/pryanya.jpeg" alt="Упс...проблемка">
                </div>
                <div class="cup2__title">
                    Декорирование кружки - Девочка с пряней
                </div>
            </div>

            <div class="cup2__item">
                <div class="cup__img">
                    <img src="../image/novogodnya.jpeg" alt="Упс...проблемка">
                </div>
                <div class="cup2__title">
                    Декорирование кружки - Новогодняя девочка
                </div>
            </div>

        </div>

    </section>
    </div>

    <div class="calculation">
        <?php
        $totalStringWords = $feedback.$aboutme;
        function countWords($string) {
            $totalWords = str_word_count($string);
            echo "<p>Слов на странице: $totalWords</p>";
        }
        function countVowels($string){
            $totalVowels = preg_match_all('/[аеёиоуыэюяaeiou]/iu', $string);
            echo "<p>Глассных букв на странице: $totalVowels</p>";
        }
        function daysFromBirthday($bday) {
            $date = explode('-', $bday);
            $current_date = explode('-', date('d-m -Y'));
            $diff = ($current_date[0] -$date[0])+($current_date[1]-$date[1])*30.43+($current_date[2]-$date[2])*365.25;
            $diff = (int)$diff;
            $dateandtime = date('D, d-M-Y H:i');
            echo "<p>Мне $diff дней</p>";
            echo "<p>Сейчас:$dateandtime</p>";
        }
        countVowels($totalStringWords);
        countWords($totalStringWords);
        daysFromBirthday('29-11-1994');

        ?>
    </div>


</main>

<footer>
    <div class="footer">
        <p class="footer-content-right">Свяжитесь с нами</p>
        <div class="footer-content-right">
            <a href="https://vk.com/id85687042"><img src="../image/logoVK.jpg" class="icon-style" alt="VK icon">Вконтакте</a>
            <a href="https://www.instagram.com/decoclay_mgn/"><img src="../image/logoINST.png" class="icon-style" alt="INST icon">INSTAGRAM</a>
            <a href="https://github.com/ershovakseniya2911?tab=repositories"><img src="../image/github.jpg" class="icon-style" alt="GitHub icon">GitHub</a>
        </div>

    </div>

</footer>


</body>
</html>