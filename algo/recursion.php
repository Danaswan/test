<?php
/**
 * Created by PhpStorm.
 * User: ZhouFurong
 * Date: 2019/12/30
 * Time: 17:07
 */


function f($n)
{
    if ($n == 1) return 1;
    return f($n - 1) + 1;
}

// 改写为非递归
function UnReF($n)
{
    if ($n == 1) return 1;
    $ret = 1;
    for ($i = 2; $i <= $n; $i ++) {
        $ret += 1;
    }
    return $ret;
}


// 存在重复计算
function goStep($n)
{
    if ($n == 1) return 1;
    if ($n == 2) return 2;
    return goStep($n - 1) + goStep($n - 2);
}


// 优化
function doStep($n, &$hasSolved = [])
{
    if ($n == 1) return 1;
    if ($n == 2) return 2;

    if (isset($hasSolved[$n])) {
        return $hasSolved[$n];
    }

    $ret = doStep($n - 1, $hasSolved) + doStep($n - 2, $hasSolved);
    $hasSolved[$n] = $ret;
    return $ret;
}

var_dump(doStep(7));


