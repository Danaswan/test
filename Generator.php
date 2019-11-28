<?php
/**
 * Created by PhpStorm.
 * User: Dana
 * Date: 2019/4/2
 * Time: 20:10
 */

interface Generator
{
	public function register(Observer $observer);

	public function notice();
}