<?php
/**
 * Created by PhpStorm.
 * User: ZhouFurong
 * Date: 2019/4/16
 * Time: 16:27
 */

class RedisOperate extends Redis
{
	protected static $instance = null;

	public static function getInstance()
	{
		if (null === self::$instance) {
			self::$instance = new self();
			$host = '127.0.0.1';
			$port = '6379';
			self::$instance->connect($host,$port);
		}
		return self::$instance;
	}
}

