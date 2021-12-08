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
<?php
$Test[1] ="Считаете ли Вы, что у многих ваших знакомых хороший характер ?";
$Test[2] = "Раздражают ли Вас мелкие повседневные обязанности ?";
$Test[3] = "Верите ли Вы, что ваши друзья преданы Вам ?";
$Test[4] = "Неприятно ли Вам, когда незнакомый человек делает Вам замечание ?";
$Test[5] = "Способны ли Вы ударить собаку или кошку ? ";
$Test[6] = "Часто ли Вы принимаете лекарства ?";
$Test[7] = "Часто ли Вы меняете магазин, в который ходите за продуктами ?";
$Test[8] = "Продолжаете ли Вы отстаивать свою точку зрения, поняв, что ошиблись ?";
$Test[9] = "Тяготят ли Вас общественные обязанности ?";
$Test[10] = "Способны ли Вы ждать более 5 минут, не проявляя беспокойства ?";
$Test[11] = "Часто ли Вам приходят в голову мысли о Вашей невезучести? ";
$Test[12] = "Сохранилась ли у Вас фигура по сравнению с прошлым ?";
$Test[13] = "Можете ли Вы с улыбкой воспринимать подтрунивание друзей ?";
$Test[14] = " Нравится ли Вам семейная жизнь ?";
$Test[15] = "Злопамятны ли Вы ?";
$Test[16] = "Находите ли Вы, что стоит погода, типичная для данного времени года ?";
$Test[17] = "Случается ли Вам с утра быть в плохом настроении ?";
$Test[18] = "Раздражает ли Вас современная живопись ?";
$Test[19] = "Надоедает ли Вам присутствие чужих детей в доме более одного часа ?";

 ?>
 <div class="cod">


<form method="post">
    <h2>Анкета "Какой у тебя характер?"</h2>
    <p><label>1.<? echo $Test[1]?>

   <label> <input type="radio" name="q1" value="0"checked>да </label>
   <label> <input type="radio" name="q1" value="1">нет </label></p>

 <p><label>2.<? echo $Test[2]?>

   <label> <input type="radio" name="q2" value="0"checked>да </label>
   <label> <input type="radio" name="q2" value="1">нет </label></p>


    <p><label>3.<? echo $Test[3]?>

   <label> <input type="radio" name="q3" value="0"checked>да </label>
   <label> <input type="radio" name="q3" value="1">нет </label></p>

 <p><label>4.<? echo $Test[4]?>

   <label> <input type="radio" name="q4" value="0"checked>да </label>
   <label> <input type="radio" name="q4" value="1">нет </label></p>

 <p><label>5.<? echo $Test[5]?>

   <label> <input type="radio" name="q5" value="0"checked>да </label>
   <label> <input type="radio" name="q5" value="1">нет </label></p>

 <p><label>6.<? echo $Test[6]?>

   <label> <input type="radio" name="q6" value="0"checked>да </label>
   <label> <input type="radio" name="q6" value="1">нет </label></p>

 <p><label>7.<? echo $Test[7]?>

   <label> <input type="radio" name="q7" value="0"checked>да </label>
   <label> <input type="radio" name="q7" value="1">нет </label></p>

 <p><label>8.<? echo $Test[8]?>

   <label> <input type="radio" name="q8" value="0"checked>да </label>
   <label> <input type="radio" name="q8" value="1">нет </label></p>

<p><label>9.<? echo $Test[9]?>

   <label> <input type="radio" name="q9" value="0"checked>да </label>
   <label> <input type="radio" name="q9" value="1">нет </label></p>

<p><label>10.<? echo $Test[10]?>

   <label> <input type="radio" name="q10" value="0"checked>да </label>
   <label> <input type="radio" name="q10" value="1">нет </label></p>

   <p><label>11.<? echo $Test[11]?>

   <label> <input type="radio" name="q11" value="0"checked>да </label>
   <label> <input type="radio" name="q11" value="1">нет </label></p>

    <p><label>12.<? echo $Test[12]?>

   <label> <input type="radio" name="q12" value="0"checked>да </label>
   <label> <input type="radio" name="q12" value="1">нет </label></p>

    <p><label>13.<? echo $Test[13]?>

   <label> <input type="radio" name="q13" value="0"checked>да </label>
   <label> <input type="radio" name="q13" value="1">нет </label></p>

    <p><label>14.<? echo $Test[14]?>

   <label> <input type="radio" name="q14" value="0"checked>да </label>
   <label> <input type="radio" name="q14" value="1">нет </label></p>

    <p><label>15.<? echo $Test[15]?>

   <label> <input type="radio" name="q15" value="0"checked>да </label>
   <label> <input type="radio" name="q15" value="1">нет </label></p>

    <p><label>16.<? echo $Test[16]?>

   <label> <input type="radio" name="q16" value="0"checked>да </label>
   <label> <input type="radio" name="q16" value="1">нет </label></p>

    <p><label>17.<? echo $Test[17]?>

   <label> <input type="radio" name="q17" value="0"checked>да </label>
   <label> <input type="radio" name="q17" value="1">нет </label></p>

    <p><label>18.<? echo $Test[18]?>

   <label> <input type="radio" name="q18" value="0"checked>да </label>
   <label> <input type="radio" name="q18" value="1">нет </label></p>


    <p><label>19.<? echo $Test[19]?>

   <label> <input type="radio" name="q19" value="0"checked>да </label>
   <label> <input type="radio" name="q19" value="1">нет </label></p>
    <p> <button type="submit" name="ConfirmButton"> Все я справился</button></p>
    <?php
    function TestScore($a){
        if ($a>15){
            echo "У вас покладистый характер";
        } elseif (8<=$a and $a<=15){
            echo "Вы не лишены недостатков, но с вами можно ладить";
        } echo "Вашим друзьям можно посочувствовать";
    }
    $score = array_sum($_POST);
    if (isset($_POST['ConfirmButton'])){
        echo TestScore($score);
    }
?>
</form>
</body>

</div>


<?php
require "footer.php"
?>