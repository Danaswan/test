<?php
/**
 * Created by PhpStorm.
 * User: ZhouFurong
 * Date: 2019/11/21
 * Time: 9:32
 */

class ArrayPush
{
    public static function pushArrayOne(int $times): array
    {
        $a = [];
        $b = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
        for ($i = 0; $i < $times; $i ++) {
            array_push($a, $b[$i % 10]);
        }

        return $a;
    }

    public static function pushArrayTwo(int $times): array
    {
        $a = [];
        $b = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
        for ($i = 0; $i < $times; $i ++) {
            $a[] = $b[$i % 10];
        }
        return $a;
    }
}

$what = 'what waarong witho you ';


ini_set('memory_limit', '4000M');
$timeOne = microtime(true);
$a = ArrayPush::pushArrayOne(1000000);
echo 'count pushEachOne result | '.count($a).PHP_EOL;
$timeTwo = microtime(true);
$b = ArrayPush::pushArrayTwo(1000000);
echo 'count pushEachTwo result |'.count($b).PHP_EOL;
$timeThree = microtime(true);

echo PHP_EOL;
echo 'pushEachOne | ' . ($timeTwo - $timeOne) . PHP_EOL;

echo 'pushEachTwo | ' . ($timeThree - $timeTwo) . PHP_EOL;
echo PHP_EOL;