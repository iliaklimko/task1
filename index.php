<?php
$nums = ['five' => 5, 'two' => 2, 'seven' => 7, 'three' => 3, 'eight' => 8,
    'four' => 4, 'nine' => 9, 'eleven' => 11, 'seventy five' => 75, 'twelve' => 12]; // Первое задание

sort($nums);

var_dump ($nums);

echo "</br>";

echo(end($nums)) . "</br>";

echo $nums[7] . "</br>";

echo (count($nums)) . "</br>";

var_dump($nums[7]);

 echo "</p>";

$nums = [6, 2, 4 ,6, 3, 1]; // Второе задание

if($nums[2] > $nums[3]) {
    echo 'Второй элемент массива равен: ' . $nums[2] . "</br>";
}

if($nums[2] < $nums[3]) {
    echo 'Третий элемент массива равен: ' . $nums[3] . "</br>";
}

if($nums[5] = 10) {
    echo 'Все верно' . "</br>";
}
else {
    echo 'Неверно' . "</br>";
}

if($nums[1] >= $nums[4]) {
    echo 'Сумма 5-ого и 2-ого элемента: ' . ($nums[5] + $nums[2]) . "</br>";
}
if($nums[1] < $nums[4]) {
    echo 'Сумма 3-ого и 1-ого элемента: ' . ($nums[3] + $nums[1]) . "</br>";
}

$nums = 8;

switch ($nums) {
    case '1' :
        echo 'Январь';
    case '2' :
        echo 'Феврадь';
        break;
    case '3' :
        echo 'Март';
        break;
    case '4' :
        echo 'Апрель';
        break;
    case '5' :
        echo 'Май';
        break;
    case '6' :
        echo 'Июнь';
        break;
    case '7' :
        echo 'Июль';
        break;
    case '8' :
        echo 'Август';
        break;
    case '9' :
        echo 'Сентябрь';
        break;
    case '10' :
        echo 'Октябрь';
        break;
    case '11' :
        echo 'Ноябрь';
        break;
    case '12' :
        echo 'Декабрь';
}

echo "</p>";
