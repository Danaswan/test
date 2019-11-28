<?php
/**
 * Created by PhpStorm.
 * User: ZhouFurong
 * Date: 2019/4/16
 * Time: 11:39
 */

class picking
{
	public function test($quantity,$pickingType)
	{
		$data = $this->pickingTypeQuantity($pickingType, $quantity);
		$data['quantity'] = $quantity;
		return $data;
	}


	public function pickingTypeQuantity($pickingType, $quantity)
	{
		switch ($pickingType) {
			case 1:
				$data['single_single_quantity'] = $quantity;
				$data['single_more_quantity'] = 0;
				$data['more_quantity'] = 0;
				break;
			case 2:
				$data['single_single_quantity'] = 0;
				$data['single_more_quantity'] = $quantity;
				$data['more_quantity'] = 0;
				break;
			case 4:
				$data['single_single_quantity'] = 0;
				$data['single_more_quantity'] = 0;
				$data['more_quantity'] = $quantity;
				break;
			default:
				$data['single_single_quantity'] = 0;
				$data['single_more_quantity'] = 0;
				$data['more_quantity'] = 0;
		}
		return $data;
	}

}

$obj = new picking();

var_dump($obj->test(1,0));

