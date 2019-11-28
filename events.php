<?php
/**
 * Created by PhpStorm.
 * User: Dana
 * Date: 2019/4/2
 * Time: 20:15
 */

class events implements Observer
{
	public function update($event_info = null)
	{
		echo "events one go ";
	}
}