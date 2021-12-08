<?php
require "header.php"
?>
<main>
    <h3>
       1) Создать функцию, которая сравнивает два числа и возвращает наибольшее.
    </h3>
</main>
<?php
function more_element($el_1, $el_2) {
    if ($el_1 >= $el_2) {
        return "$el_1";
    }
    if ($el_1 <= $el_2) {
        return "$el_2";
    }
}
$result = more_element(5, 10);
echo $result;

?>

<div>
    <h3>
       2) Создать функцию, которая принимает длину двух катетов и возвращает
        значение гипотенузы прямоугольного треугольника.
    </h3>
</div>
<?php
function gipotenuza ($katet1, $katet2){
    $gipotenuza = sqrt($katet1**2 + $katet2**2);
    return $gipotenuza;
}
$result = gipotenuza(5, 10);
echo $result;
?>

<div>
    <h3>
       3) Создать функцию, которая принимает одно число (10). В функции
        создать цикл, который будет увеличивать число в 10 раз и выводить
        его на экран. Когда число будет больше 1 000 000, на экране должно
        появляться сообщение, что вы достигли предела.
    </h3>
</div>
<?php
function million ($a){
    while ($a < 1000000){
        $a = $a *10;
        echo $a . '<br>';
    }
    echo "<br> Вы достигли предела";
}
$result= million(20);
echo $result;
?>
<div>
<h3>
    4) Создать функцию, в которой объявляется массив c случайными элементами.
</h3>
</div>
<?php

function randarr( $N, $min = 0, $max = 100) {
return array_map(
function() use( $min, $max) {
return rand( $min, $max);
},
array_pad( [], $N, 0)
);
}
print_r( randarr(5));
print_r( randarr(5, 22, 24));
print_r( randarr(5, 0, 1E9));
?>

<div>
    <h3>
        5) Создать функцию, которая принимает массив и возвращает
        среднеарифметическое значение массива.
    </h3>
</div>
<?php
function sredarifmet ($a , $b){
    $arr = array($a, $b);
    $arr= array_sum($arr)/count($arr);
    return $arr;
}
$result = sredarifmet(5, 10);
echo $result;
?>

    <?php
    require "footer.php"
    ?>