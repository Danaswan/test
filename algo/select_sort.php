<?php
/**
 * Created by PhpStorm.
 * User: ZhouFurong
 * Date: 2020/1/14
 * Time: 10:16
 */

$array = [4, 2, 5, 1, 3, 6];
function select_sort($array)
{
    $length = count($array);
    if ($length <= 1) {
        return $array;
    }

    // 选出一个最小值
    for ($i = 0; $i < $length; $i ++) {
        $min = $i;
        for ($j = $i; $j < $length; $j ++) {
            // 找出最小值的位置
            if ($array[$j] < $array[$min]) {
                $min = $j;
            }
        }
        if ($min != $i) {
            $tmp = $array[$i];
            // 把最小值 放到最右边
            $array[$i] = $array[$min];
            $array[$min] = $tmp;
        }
    }
    return $array;
}


function selectSort($array)
{
    $length = count($array);
    if ($length <= 1) {
        return $array;
    }

    for ($i = 0; $i < $length; $i ++) {
        // 假设最左边为最小值下标
        $min = $i;
        for($j = $i;$j < $length;$j++){
            // 找出最小值下标
            if($array[$j] < $array[$min]){
                // 替换最小值下标
                $min = $j;
            }
        }

        // 如果最小下标 不等于 假设的最小下标
        if($min != $i){
            // 最小下标值存入暂存区
            $tmp = $array[$i];
            // 把最小值放到最小下标位置
            $array[$i] = $array[$min];
            $array[$min] = $tmp;
        }
    }
}


selectSort($array);