<?php
/**
 * Created by PhpStorm.
 * User: ZhouFurong
 * Date: 2019/11/7
 * Time: 14:36
 */


$fileName = 'account_operation_analysis.sql';

$fp = fopen($fileName, 'rb');
$fileSize = 1000;
$i = 0;
$no = 1;

while (!feof($fp)) {
    $file = fread($fp, $fileSize);
    $fp2 = fopen('./split/' . $i . '-' . ($i + $fileSize) . 'tmp', 'wb');
    fwrite($fp2, $file, $fileSize);
    fclose($fp2);
    $i += $fileSize + 1;
    $no ++;
}
fclose($fp);