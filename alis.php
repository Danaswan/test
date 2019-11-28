<?php
/**
 * Created by PhpStorm.
 * User: Dana
 * Date: 2019/4/11
 * Time: 9:44
 */

class Alis
{
	public function person($name,$type)
	{
		switch ($type) {
			case 1:
				$typeName = 'dog';
				break;
			case 2:
				$typeName = 'cat';
		}

		return $this->$typeName($name);
	}

	public function dog($name)
	{
		return "this dog is nice ,his name is $name";
	}

	public function cat($name)
	{
		return "this cat is nice ,his name is $name";
	}
}

$obj = new Alis();

var_dump($obj->person('xiaohao',1));
var_dump($obj->person('sisis',2));
