<?php
/**
 * Created by PhpStorm.
 * User: Dana
 * Date: 2019/4/2
 * Time: 19:49
 */

include_once 'Observer.php';

class Cat implements Observer
{
	public function watch()
	{
		echo "Cat watches Tv\n";
	}
}

class Dog implements Observer
{
	public function watch()
	{
		echo "Dog watches Tv\n";
	}
}

class People implements Observer
{
	public function watch()
	{
		echo "People watches Tv\n";
	}
}

