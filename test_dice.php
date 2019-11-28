<?php
/**
 * Created by PhpStorm.
 * User: ZhouFurong
 * Date: 2019/8/23
 * Time: 8:46
 */

$list = [];
for ($i = 0; $i < 100; $i ++) {
    if ($i < 50) {
        $number = 6;
        array_push($list, $number);
    } elseif ($i >= 50 && $i < 60) {
        $number = 5;
        array_push($list, $number);
    } elseif ($i >= 60 && $i < 70) {
        $number = 4;
        array_push($list, $number);
    } elseif ($i >= 70 && $i < 80) {
        $number = 3;
        array_push($list, $number);
    } elseif ($i >= 80 && $i < 90) {
        $number = 2;
        array_push($list, $number);
    } elseif ($i >= 90 && $i < 100) {
        $number = 1;
        array_push($list, $number);
    }
}

//var_dump($list);


$sum = 0;
for ($i = 0; $i < 100; $i ++) {
    $num = floor(lcg_value() * 100);
    $diceNumber = $list[$num];
    var_dump($diceNumber);
    if ($diceNumber == 6) {
        $sum = $sum + 1;
    }
}
echo "色子为6的个数";
var_dump($sum);