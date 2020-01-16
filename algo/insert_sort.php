<?php
/**
 * Created by PhpStorm.
 * User: ZhouFurong
 * Date: 2020/1/11
 * Time: 10:23
 */


$array = [4, 2, 3, 5, 6, 1]; // 45,46,56,13,12
// 从未选择区拿出一个值，与被选择区进行比较，并找到合适的位置
function insert_sort($array)
{
    $count = count($array);
    if ($count <= 1) {
        return $array;
    }
    // 初始最左下标为已选择区
    for ($i = 1; $i < $count; $i ++) {
        // 假设 第1个下标值为最小值
        $min = $array[$i];
        for ($j = $i - 1; $j >= 0; $j --) {
            if ($array[$j] > $min) {
                $array[$j + 1] = $array[$j];
            } else {
                break;
            }
        }
        $array[$j + 1] = $min;
    }
    return $array;
}


function insert($array)
{
    $length = count($array);
    if ($length <= 1) {
        return $array;
    }

    for ($i = 1; $i < $length; $i ++) {
        $left = $array[$i];
        $j = $i - 1;
        for ($j; $j >= 0; $j --) {
            if($array[$j] > $left){
                $array[$j + 1] = $array[$j];
            }else{
                break;
            }
        }
        $array[$j + 1] = $left;
    }
}

var_dump(insert_sort($array));
