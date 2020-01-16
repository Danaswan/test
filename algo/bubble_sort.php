<?php
/**
 * Created by PhpStorm.
 * User: ZhouFurong
 * Date: 2020/1/10
 * Time: 14:02
 */

$array = [3, 5, 4, 2, 1, 6, 7];

/**
 * 获取多少轮
 * @param $array
 * @return int
 */
function bubble($array)
{
    $count = count($array);
    if ($count <= 1) {
        return $array;
    }

    $s = 0;
    for ($i = 0; $i < $count; $i ++) {
        $flag = false;
        for ($j = 0; $j < $count - $i - 1; $j ++) {
            $s ++;
            if ($array[$j] > $array[$j + 1]) {
                $tmp = $array[$j];
                $array[$j] = $array[$j + 1];
                $array[$j + 1] = $tmp;
                $flag = true;
            }
        }
        if (!$flag) break;
    }
    return $s;
}

//bubble($array);
/**
 * @desc 两个相邻的数据，进行比较 ，如果不满足条件就让他们进行互换，每一次冒泡操作至少有一位找到对应的位置
 * @param $array
 * @return mixed
 */
function bubbleSort($array)
{
    $length = count($array);
    if ($length <= 1) {
        return $array;
    }

    // N 个 数字 即 N 个大循环
    for ($i = 0; $i < $length; $i ++) {
        // 如果整行数据都没有进行更换也就是完全有序即可提前退出冒泡循环
        $flag = false;
        for ($j = 0; $j < $length - $i - 1; $j ++) {
            if ($array[$j] > $array[$j + 1]) {
                $tmp = $array[$j];
                $array[$j] = $array[$j + 1];
                $array[$j + 1] = $tmp;
                $flag = true;
            }
        }
        if (!$flag) {
            break;
        }
    }
    return $array;
}

var_dump(bubbleSort($array));