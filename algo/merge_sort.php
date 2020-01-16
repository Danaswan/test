<?php
/**
 * Created by PhpStorm.
 * User: ZhouFurong
 * Date: 2020/1/14
 * Time: 15:35
 */

$array = [11, 8, 3, 9, 7, 1, 2, 5];

function merge_sort($array, $n)
{
    merge_sort_c($array, 0, $n - 1);
}

function merge_sort_c($array, $p, $r)
{
    if ($p >= $r) return;
    $q = ($p + $r) / 2;

    merge_sort_c($array, $p, $q);
    merge_sort_c($array, $q + 1, $r);

// 将A[p...q]和A[q+1...r]合并为A[p...r]
    merge($array[$p,$r],$array[$p,$q],$array[$q + 1,$r]);
}

