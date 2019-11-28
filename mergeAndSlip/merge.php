<?php
/**
 * Created by PhpStorm.
 * User: ZhouFurong
 * Date: 2019/11/7
 * Time: 14:36
 */

$fileList = glob('./split/*tmp');
$fileSize = 1000;

//print_r($fileList);exit;
$mergeFileName = 'merge.sql';
unlink($mergeFileName);
$fp2 = fopen($mergeFileName, 'w+');
foreach ($fileList as $k => $v) {
    $fp = fopen($v, 'rb');
    $content = fread($fp, $fileSize);
    fwrite($fp2, $content, $fileSize);
    unset($content);
    fclose($fp);
    echo $k . "\n";
}
fclose($fp2);