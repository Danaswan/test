<?php
/**
 * Created by PhpStorm.
 * User: ZhouFurong
 * Date: 2019/8/21
 * Time: 9:01
 */

class Bar
{
    public $value = 42;

    public function &getValue()
    {
        return $this->value;
    }
}

$obj = new Bar();
$myValue = &$obj->getValue();
$obj->value = 2;
$obj->value = 54;

//echo $myValue;

class Foo
{
    public $value = 42;

    public function getValue()
    {
        return $this->value;
    }
}

$obj1 = new Foo();
$value = $obj1->getValue();
//echo $value . PHP_EOL;
$obj1->value = 2;
//$value = $obj1->getValue();
//echo $value .PHP_EOL;

class A
{
    public $abc = "ABC";
}

$objA = new A();
$objA->abc = "BSC";
echo $objA->abc;