<?php
/**
 * Created by PhpStorm.
 * User: Dana
 * Date: 2019/4/2
 * Time: 20:12
 */

class Event implements Generator
{
	private $observers = [];
	public function register(Observer $observer)
	{
		$this->observers[] = $observer;
	}

	public function notice()
	{
		foreach ($this->observers as $observer) {
			$observer->update();
		}
	}
}