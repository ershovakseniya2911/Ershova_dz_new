<?php
require "header.php"
?>
<?php
print_r($_POST);
?>
    <!Doctype html>
    <html lang="en" xmlns="http://www.w3.org/1999/html">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <title>Questionnaire</title>
    </head>
<body>
<div>
    <h4>
        Создайте анкету на форме. Ответ на каждый из вопросов представьте с помощью переключателя
        («да» или «нет»). По умолчанию задайте везде значение «да».

        Напишите сценарий обработки анкеты: поставьте 1 балл, если был ответ «да» в вопросах с номерами 3,
        9, 10, 13, 14, 19 и «нет» в вопросах с номерами 1, 2, 4, 5, 6, 7, 8, 11, 12, 15, 16, 17, 18. Посчитайте сумму
        набранных баллов:

        если она оказалась более 15, то результат: «У Вас покладистый характер»;

        если сумма в интервале от 8 до 15, то результат: «Вы не лишены недостатков, но с вами можно
        ладить»;

        если сумма менее 8 баллов, то результат: «Вашим друзьям можно посочувствовать».

        Отобразите на экране имя анкетируемого, фразу-результат анкетирования.
    </h4>
</div>
<form method="post">
    <h2>Анкета "Какой у тебя характер?"</h2>
    <p>
        <label>1. Считаете ли Вы, что у многих ваших знакомых хороший характер ? </label> <br>
    </p>

<p>
    <input type="radio" name="answer" value="да"/> да
    <input type="radio" name="answer" value="нет/"> нет
</p>

    <p>
        <label>2. Раздражают ли Вас мелкие повседневные обязанности ? </label> <br>
    </p>

    <p>
        <input type="radio" name="answer" value="да"/> да
        <input type="radio" name="answer" value="нет/"> нет
    </p>

    <p>
        <label>3. Верите ли Вы, что ваши друзья преданы Вам ?  </label> <br>
    </p>

    <p>
        <input type="radio" name="answer" value="да"/> да
        <input type="radio" name="answer" value="нет/"> нет
    </p>
    <p>
        <label> 4. Неприятно ли Вам, когда незнакомый человек делает Вам замечание ?  </label> <br>
    </p>

    <p>
        <input type="radio" name="answer" value="да"/> да
        <input type="radio" name="answer" value="нет/"> нет
    </p>
    <p>
        <label> 5. Способны ли Вы ударить собаку или кошку ?  </label> <br>
    </p>

    <p>
        <input type="radio" name="answer" value="да"/> да
        <input type="radio" name="answer" value="нет/"> нет
    </p>
    <p>
        <label> 6. Часто ли Вы принимаете лекарства ?</label> <br>
    </p>

    <p>
        <input type="radio" name="answer" value="да"/> да
        <input type="radio" name="answer" value="нет/"> нет
    </p>

    <p>
        <label> 7. Часто ли Вы меняете магазин, в который ходите за продуктами ?</label> <br>
    </p>

    <p>
        <input type="radio" name="answer" value="да"/> да
        <input type="radio" name="answer" value="нет/"> нет
    </p>
    <p>
        <label> 8. Продолжаете ли Вы отстаивать свою точку зрения, поняв, что ошиблись ?  </label> <br>
    </p>

    <p>
        <input type="radio" name="answer" value="да"/> да
        <input type="radio" name="answer" value="нет/"> нет
    </p>

    <p>
        <label> 9. Тяготят ли Вас общественные обязанности ? </label> <br>
    </p>

    <p>
        <input type="radio" name="answer" value="да"/> да
        <input type="radio" name="answer" value="нет/"> нет
    </p>

    <p>
        <label> 10. Способны ли Вы ждать более 5 минут, не проявляя беспокойства ? </label> <br>
    </p>

    <p>
        <input type="radio" name="answer" value="да"/> да
        <input type="radio" name="answer" value="нет/"> нет
    </p>

    <p>
        <label> 11. Часто ли Вам приходят в голову мысли о Вашей невезучести ? </label> <br>
    </p>

    <p>
        <input type="radio" name="answer" value="да"/> да
        <input type="radio" name="answer" value="нет/"> нет
    </p>
    <p>
        <label> 12 Сохранилась ли у Вас фигура по сравнению с прошлым ? </label> <br>
    </p>

    <p>
        <input type="radio" name="answer" value="да"/> да
        <input type="radio" name="answer" value="нет/"> нет
    </p>
    <p>
        <label>  13. Можете ли Вы с улыбкой воспринимать подтрунивание друзей ? </label> <br>
    </p>

    <p>
        <input type="radio" name="answer" value="да"/> да
        <input type="radio" name="answer" value="нет/"> нет
    </p>
    <p>
        <label> 14. Нравится ли Вам семейная жизнь ? </label> <br>
    </p>

    <p>
        <input type="radio" name="answer" value="да"/> да
        <input type="radio" name="answer" value="нет/"> нет
    </p>

    <p>
        <label> 15. Злопамятны ли Вы ? </label> <br>
    </p>

    <p>
        <input type="radio" name="answer" value="да"/> да
        <input type="radio" name="answer" value="нет/"> нет
    </p>

    <p>
        <label>  16. Находите ли Вы, что стоит погода, типичная для данного времени года ?</label> <br>
    </p>

    <p>
        <input type="radio" name="answer" value="да"/> да
        <input type="radio" name="answer" value="нет/"> нет
    </p>

    <p>
        <label>  17. Случается ли Вам с утра быть в плохом настроении ? </label> <br>
    </p>

    <p>
        <input type="radio" name="answer" value="да"/> да
        <input type="radio" name="answer" value="нет/"> нет
    </p>

    <p>
        <label>  18. Раздражает ли Вас современная живопись ? </label> <br>
    </p>

    <p>
        <input type="radio" name="answer" value="да"/> да
        <input type="radio" name="answer" value="нет/"> нет
    </p>

    <p>
        <label> 19. Надоедает ли Вам присутствие чужих детей в доме более одного часа ? </label> <br>
    </p>

    <p>
        <input type="radio" name="answer" value="да"/> да
        <input type="radio" name="answer" value="нет/"> нет
    </p>
    <button type="submit"> Все я справился</button>
</form>
</body>




<?php
//if (isset($_POST['answer'])) {
   // $answer = htmlentities($_POST["answer"]);
  //  $output = "
      <html>
    <head>
    <title>Результат анкетирования</title>
    </head>
    <body>
    Ваш результат: $name<br />";
    foreach($courses as $item)
        $output.="<li>" . htmlentities($item) . "</li>";
    $output.="</ul></body></html>";
    echo $output;
}
else
{   
    echo "Введенные данные некорректны";
}
?>
?>

<?php
require "footer.php"
?>