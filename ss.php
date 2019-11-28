<?php
/**
 * Created by PhpStorm.
 * User: Dana
 * Date: 2019/4/1
 * Time: 17:06
 */

function pickingType($pickingType)
{
	$type = 0;
	switch ($pickingType) {
		case 1:
			$type = 'single_single_quantity';
			break;
		case 2:
			$type = 'single_more_quantity';
			break;
		case 4:
			$type = 'more_quantity';
			break;
	}

	return $type;
}

$pickingType = rand(0, 9);
var_dump($pickingType);
$data = [];
if ($pickType = pickingType($pickingType)) {
	$data[$pickType] = 8;
}

