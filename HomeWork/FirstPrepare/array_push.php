<?php
/**
 * Created by PhpStorm.
 * User: ZhouFurong
 * Date: 2019/12/4
 * Time: 17:09
 */

function firstMethod($a, $array)
{
    $firstArray = [];
    for ($i = 0; $i < $a; $i ++) {
        foreach ($array as $value) {
            $firstArray[] = $value;
        }
    }
}

function secondMethod($a, $array)
{
    $secondArray = [];
    for ($i = 0; $i < $a; $i ++) {
        foreach ($array as $value) {
            array_push($secondArray, $value);
        }
    }
}

$array = [1, 3, 4, 5, 6, 7, 8, 9, 9, 12, 14, 15, 15, 16, 18, 23, 24, 25, 25, 45, 65, 34];
$a = $argv[1];

$timeOne = microtime(true);
firstMethod($a, $array);
$timeSecond = microtime(true);
secondMethod($a, $array);
$timeThird = microtime(true);

echo $timeOne;
echo "\r\n";
echo $timeSecond;
echo "\r\n";
echo $timeThird ;
echo "\r\n";



