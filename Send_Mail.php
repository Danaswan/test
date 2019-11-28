<?php
/**
 * Created by PhpStorm.
 * User: Dana
 * Date: 2019/4/2
 * Time: 20:32
 */

class Send_Mail implements SplObserver
{
	public function update(SplSubject $subject)
	{
		$this->sendMail($subject->email, $title, $content);
	}

	public function sendMail($email, $title, $content)
	{
		// go
	}

}