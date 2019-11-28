<?php
/**
 * Created by PhpStorm.
 * User: Dana
 * Date: 2019/4/2
 * Time: 19:38
 */

interface Subject
{
	public function register(Observer $observer);
	public function notify();
}