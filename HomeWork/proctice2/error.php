<?php
/**
 * Created by PhpStorm.
 * User: Dana
 * Date: 2019/4/12
 * Time: 11:08
 */

error_reporting(0);
date_default_timezone_set("PRC");
$dt = date("Y-m-d H:i:s ");
echo $dt;
function userErrorHandle($errno, $errmsg, $filemame, $linenum, $vars)
{
	//错误发生时间
	$dt = date("Y-m-d H:i:s (T)");

	// 定义错误字符串的关联数组
	// 在这里我们只考虑
	// E_WARRING, E_NOTICE, E_USER_ERROR
	// E_USER_WARRING, E_USER_NOTICE
	$errorType = [
		E_ERROR                         => 'Error',
		E_WARNING                       => 'Warring',
		E_PARSE                         => 'Parsing Error',
		E_NOTICE                        => 'Notice',
		E_CORE_ERROR                    => 'Core Error',
		E_CORE_WARNING                  => 'Core Warning',
		E_COMPILE_ERROR                 => 'Compile Error',
		E_COMPILE_WARNING               => 'Compile Warning',
		E_USER_ERROR                    => 'User Error',
		E_USER_WARNING                  => 'User Warning',
		E_USER_NOTICE                   => 'User Notice',
		E_STRICT                        => 'Runtime Notice',
		E_RECOVERABLE_ERROR             => 'Catchable Fatal Error'
	];
	//设置要保存变量跟踪的信息类型

}