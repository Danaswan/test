<?php
/**
 * Created by PhpStorm.
 * User: Dana
 * Date: 2019/3/27
 * Time: 19:26
 */

class Foo
{
	public $int = 1;
	public $bool = true;
	public $array = [1, 2 => ['test', 'string']];

	public function test($flag)
	{
		echo $flag, 'test function for Foo ' . PHP_EOL;
	}

	public static function output($str)
	{
		var_dump($str);
	}


	public static function compare_serialize_and_json($data)
	{
		self::_serialize($data);
		self::_json($data);
		self::_msgPack($data);
	}

	public static function unpack($data,$name)
	{
		$start = microtime(true);
		$serialize_str = $name($data);
		self::output($serialize_str);
		$end = microtime(true);
		$time = $end - $start;
		echo number_format($time, 10, '.', '') . ' unpack  seconds'.PHP_EOL;

	}

	public static function _serialize($data)
	{
		$start = microtime(true);
		$serialize_str = serialize($data);
		//unserialize()
		self::output(' after serialize: ' . $serialize_str . ";length: " . strlen($serialize_str));
		$end = microtime(true);
		$time = $end - $start;
		echo number_format($time, 10, '.', '') . ' pack  seconds'.PHP_EOL;
		self::unpack($serialize_str,'unserialize');
	}
	public static function _json($data)
	{
		$start = microtime(true);
		$json_str = json_encode($data);
		//json_decode()
		self::output(' after json_encode: ' . $json_str . ";length: " . strlen($json_str));
		$end = microtime(true);
		$time = $end - $start;
		echo number_format($time, 10, '.', '') . ' pack seconds'.PHP_EOL;
		self::unpack($json_str,'json_decode');
	}
	public static function _msgPack($data)
	{
		$start = microtime(true);
		$msgPack = msgpack_pack($data);
		// msgpack_unpack()
		self::output(' after msgpack: ' . $msgPack . ";length: " . strlen($msgPack));
		$end = microtime(true);
		$time = $end - $start;
		echo number_format($time, 10, '.', '') . ' pack  seconds'.PHP_EOL;
		self::unpack($msgPack,'msgpack_unpack');
	}



}

$test_data = ['www' => 'https://windows.php.net/downloads/pecl/releases/msgpack/2.0.3/', 'phppan' => 'https://blog.csdn.net/linjf520/article/details/18413901', 'com' => ['fasdfsdaf']];

echo "array \n";
Foo::compare_serialize_and_json($test_data);

