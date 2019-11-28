<?php
/**
 * Created by PhpStorm.
 * User: ZhouFurong
 * Date: 2019/11/19
 * Time: 17:39
 */



static $count = 0;
function insert($val)
{
    $count = 0;
    $array = [
        2, 3, 4, 7, 12, 16, 17, 26
    ];
    $length = count($array);
    if ($count == $length) {
        $sum = 0;
        for ($i = 0; $i < $length; $i ++) {
            $sum = $sum + $array[$i];
        }
        $array[0] = $sum;
        $count = 1;
    }
    $array[$count] = $val;
    ++ $count;
}