<?php
/**
 * Created by PhpStorm.
 * User: ZhouFurong
 * Date: 2019/11/20
 * Time: 14:12
 */


function getLineFromFile($fileName)
{
    if (!$fileHandle = fopen($fileName, 'r')) {
        return;
    }

    while (false !== $line = fgets($fileHandle)) {
        yield $line;
    }
    fclose($fileHandle);
}

$lines = getLineFromFile('account_operation_analysis.sql');

foreach ($lines as $line) {
    echo $line;
}