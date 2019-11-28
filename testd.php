<?php
/**
 * Created by PhpStorm.
 * User: ZhouFurong
 * Date: 2019/4/16
 * Time: 15:23
 */

$package = [
	['id'=>1,'order_id'=>1,'quantity'=>3],
	['id'=>2,'order_id'=>1,'quantity'=>5],
	['id'=>3,'order_id'=>2,'quantity'=>1],
	['id'=>4,'order_id'=>3,'quantity'=>2],
	['id'=>5,'order_id'=>4,'quantity'=>3],
	['id'=>6,'order_id'=>5,'quantity'=>1],
	['id'=>6,'order_id'=>5,'quantity'=>3],
];

$redis = new Redis();
$redis->connect('127.0.0.1',6379);

