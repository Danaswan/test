<?php
/**
 * Created by PhpStorm.
 * User: ZhouFurong
 * Date: 2019/4/16
 * Time: 16:37
 */

require './class/RedisOperate.php';

$redis = new RedisOperate();
$redis::getInstance()->set('test','sisiis');
var_dump($redis::getInstance()->get('test'));
die;




$package = [
	['id'=>1,'order_id'=>1,'quantity'=>3],
	['id'=>2,'order_id'=>1,'quantity'=>5],
	['id'=>3,'order_id'=>2,'quantity'=>1],
	['id'=>4,'order_id'=>3,'quantity'=>2],
	['id'=>5,'order_id'=>4,'quantity'=>3],
	['id'=>6,'order_id'=>5,'quantity'=>1],
	['id'=>6,'order_id'=>5,'quantity'=>3],
];

$key = 'package_data';

foreach ($package as $k =>$item){
	switch ($item){
		case 'quantity':
			$redis->hIncrBy($key,'quantity',$item['quantity']);
			break;
		case 'order_id':
			$redis->hSetNx($key,'order_id',$item['order_id']);
			break;
		case 'id':
			$redis->hSetNx($key,'id',$item['id']);
			break;
	}
}

var_dump($redis->hGetAll($key));