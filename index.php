<?php

//Ex1
echo "Ex1 <br>";

function cube_number($number){

    return $number ** 3;
}
echo cube_number(3);

echo "<hr>";

//Ex2
echo "Ex2 <br>";

function sum_number($first_number, $aecond_number){
      return $first_number + $aecond_number;
}
echo sum_number(3, 3);

echo "<hr>";

//Ex3  
echo "Ex3 <br>"; 

function daysOfWeek($day){
    switch ($day) {

        case 1:
            echo "monday";
            break;
        case 2:
            echo "Tuesday";
            break;
        case 3:
            echo "wedn.";
            break;
        case 4:
            echo "thurs";
            break;
        case 5:
            echo "fri";
            break;
        case 6:
            echo "sat.";
            break;
        case 7:
            echo "sun.";
            break;
    }
}
daysOfWeek(7);
echo "<hr>";

//Ex4
echo "Ex4 <br>";

function isNegative($char){
 return ($char < 0) ? "TRUE" : "FALSE";
}

echo isNegative(-1);

echo "<hr>";

//Ex5
echo "Ex5 <br>";

function getDigitSum($char){
    $sum = 0;
    $char .= "";
    for ($i = 0;; $i++) {
        if (empty($char[$i])) break;
        $sum = $sum + $char[$i];
    }
    return $sum;
}
echo getDigitSum(55);

echo "<hr>";

echo "Ex6 <br>";
//Ex6
function showTotalYear(){
    for ($i = 1; $i <= 2020; $i++) {
        if (getDigitSum($i) == 13) {
            echo $i . "</br>";
        };
    }
    return $i;
}
showTotalYear();

echo "<hr>";

//Ex7
echo "Ex7 <br>";

function isEven($char){
 return ($char % 2 == 0) ? "True" : "False";
}
echo isEven(2);

//Ex8
echo "Ex8 <br>";

echo "<hr>";

function translator($string){
    $russian = array(
        'А', 'Б', 'В', 'Г', 'Д', 'Е', 'Ё', 'Ж', 'З', 'И', 'Й', 'К', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 'У', 'Ф', 'Х',
        'Ц', 'Ч', 'Ш', 'Щ', 'Ъ', 'Ы', 'Ь', 'Э', 'Ю', 'Я', 'а', 'б', 'в', 'г', 'д', 'е', 'ё', 'ж', 'з', 'и', 'й', 'к', 'л', 'м', 'н', 'о',
        'п', 'р', 'с', 'т', 'у', 'ф', 'х', 'ц', 'ч', 'ш', 'щ', 'ъ', 'ы', 'ь', 'э', 'ю', 'я'
    );
    $translated = array(
        'A', 'B', 'V', 'G', 'D', 'E', 'E', 'Gh', 'Z', 'I', 'Y', 'K', 'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'F',
        'H', 'C', 'Ch', 'Sh', 'Sch', 'Y', 'Y', 'Y', 'E', 'Yu', 'Ya', 'a', 'b', 'v', 'g', 'd', 'e', 'e', 'gh', 'z', 'i', 'y', 'k', 'l', 'm',
        'n', 'o', 'p', 'r', 's', 't', 'u', 'f', 'h', 'c', 'ch', 'sh', 'sch', 'y', 'y', 'y', 'e', 'yu', 'ya'
    );

    return str_replace($russian, $translated, $string);
}

echo translator("спасибо");

echo "<hr>";

//Ex9
//Ex10
echo "Ex10 <br>";

function showArray($array, $i = 0){
    if (!empty($array[$i])) {
        echo $array[$i];
        $i++;
        showArray($array, $i);
    }
}
showArray([1, 2, 3, 5]);

echo "<hr>";

//Ex11
echo "Ex11 <br>";

function isNumberless($char){

    $char .= "";
    $count = strlen($char);
    $sum = 0;
    for ($i = 0; $i < $count; $i++) {
        $sum += $char[$i];
    }
    if ($sum > 9) {
        return isNumberless($sum);
    } else {
        return $sum;
    }
}

echo isNumberless(77);

echo "<hr>";

// Ex 12
echo "Ex12 <br>";

function car_speed($distance, $time){
    $speed = ($distance / $time);
    $speed2 = $speed * (3600 / 1000);
    $speed3 = $speed2 / 3.6;

    return "your average speed is
{$speed2} km/hr <br> {$speed3} m/s.";
}

echo car_speed(2000, 3600);

echo "<hr>";
//Ex 13
echo "Ex13 <br>";

function doesExist($mystring, $search){
    $pos = strpos($mystring, $search);
    if ($pos === false) {
        echo "The string'$search'was not found in the string '$mystring'";
    } else {
        echo "The string '$search' was found in the string '$mystring'";
    }
}
doesExist("mary", "ar");

echo "<hr>";
//Ex 17
echo "Ex17 <br>";

function sumOFones($num){
    $noOfOnes = 0;
    for ($i = 0; $i < 100; $i++) {

        $str  = $i;
        $str .= "";
        $multiplier = substr_count($str, $num);
        $noOfOnes += $multiplier;
    }
    return $noOfOnes;
}
echo sumOFones(1);
//}
//Ex 18
