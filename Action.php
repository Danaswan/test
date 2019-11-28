<?php
/**
 * Created by PhpStorm.
 * User: Dana
 * Date: 2019/4/2
 * Time: 19:46
 */

include_once 'Subject.php';
include_once 'Cat.php';

class Action implements Subject
{
	public $_observer = [];

	public function register(Observer $observer)
	{
		$this->_observer[] = $observer;
	}

	public function notify()
	{
		foreach ($this->_observer as $observer) {
			$observer->watch();
		}
	}
}

$action = new Action();
$action->register(new Cat());
$action->register(new Dog());
$action->register(new People());
$action->notify();
