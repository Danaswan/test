<?php
/**
 * Created by PhpStorm.
 * User: ZhouFurong
 * Date: 2019/4/17
 * Time: 17:09
 */

$_data = [];
$_data['order_amount_CNY'] = 38.124;
$_data['channel_cost_CNY'] = 36.1549;
$_data['receipt_fee'] = bcmul($_data['order_amount_CNY'] - $_data['channel_cost_CNY'],
	0.006, 4);

//var_dump($_data);
echo (json_encode($_SERVER,true));