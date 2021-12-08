
<?php
require "header.php"
?>
<main>
    <h3>
       1) Дана строка «fact». Привести строку к виду «Fact».
    </h3>
</main>
    <?php
    $str = "fact";
    echo str_replace('f', 'F' , $str);
    ?>
<div>
    <h3>
      2)  Дана строка, в которой содержится «фамилия, имя, отчество». Преобразовать строку к
        виду «имя, фамилия». Например, исходная строка «Ершова Ксения Игоревна»,
        результирующая «Ксения Ершова».
    </h3>
</div>
<?php
$str = "Ершова Ксения Игоревна";
$arr1= "Ершова";
$arr2= "Ксения";
$arr3 = "Игоревна";
$arr = explode(' ', $str);
$new_arr = array_reverse($arr);
$new_arr1 = array (0=>"  ");
$new_arr2 = array_replace($new_arr, $new_arr1);
print_r($new_arr2);
?>

<div>
<h3>
   3) Дана строка «Привет, мир». Найти количество символа «и» в строке
    (регистр учитывать).
</h3>
</div>
<?php
$str = "Привет, мир";
$resulte = substr_count("$str", "и");
print_r($resulte);
?>

<div>
    <h3>
       4) Дана строка ‘html css php'. Вырежьте из нее и выведите на экран слово 'html', слово 'css' и слово 'php'.
    </h3>
</div>
<?php
$str = "html css php";
$resulte1 = mb_substr( $str, 0, -8);
$resulte2 = mb_substr($str, 5, -4);
$resulte3 = mb_substr($str, 8 );
echo $resulte1 . "<br>";
echo $resulte2 . "<br>";
echo $resulte3;
?>
<div>
    <h3>
        5) Дана строка. Проверьте, что она заканчивается на '.png'. Если это так, выведите 'да', если не так - 'нет'.
    </h3>
</div>
<?php
$str1 = "qwerty.png";
if (substr($str1, -4) === '.png') {
    echo 'да';
} else {
    echo 'нет';
}
?>

<?php
require "footer.php"
?>



