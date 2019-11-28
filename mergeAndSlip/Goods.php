<?php
/**
 * Created by PhpStorm.
 * User: ZhouFurong
 * Date: 2019/11/20
 * Time: 15:59
 */

class Goods
{
    private $price;

    public function __construct(float $price)
    {
        $this->price = $price;
    }
}

/*$addDiscount = function (float $discount = 0.8) {
    return $this->price * $discount;
};*/

function addDiscount(float $discount = 0.8){
    return $this->price * $discount;
}

//$closure = \Closure::fromCallable('addDiscount');
$good = new Goods(100);
//$count = $closure->bindTo($good);
//$count = $closure->bindTo($good, Goods::class);

$reflexion = new ReflectionFunction('addDiscount');
$closure = $reflexion->getClosure();
//var_dump($closure);


var_dump($closure(0.2));