<?php
/**
 * Created by PhpStorm.
 * User: Dana
 * Date: 2019/4/2
 * Time: 20:19
 */

class User implements SplSubject
{
	// 注册观察者
	public $observers = [];

	// 动作类型
	CONST OBSERVER_TYPE_REGISTER = 1; //register
	CONST OBSERVER_TYPE_EDIT = 2; // edit

	/**
	 * @param SplObserver $observer
	 * @param $type
	 */
	public function attach(SplObserver $observer, $type)
	{
		$this->observers[$type][] = $observer;
	}


	public function detach(SplObserver $observer, $type)
	{
		if ($idx = array_search($observer, $this->observers[$type], true)) {
			unset($this->observers[$type][$idx]);
		}
	}

	public function notify($type)
	{
		if (!empty($this->observers[$type])){
			foreach ($this->observers[$type] as $observer) {
				$observer->update($this);
			}
		}
	}

	public function addUser()
	{
		// go sql
		$res = true;

		$this->notify(self::OBSERVER_TYPE_REGISTER);
		return $res;
	}

	public function editUser()
	{
		// go sql
		$res = true;
		$this->notify(self::OBSERVER_TYPE_EDIT);
	}
}