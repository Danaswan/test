<?php
/**
 * Created by PhpStorm.
 * User: ZhouFurong
 * Date: 2019/8/16
 * Time: 17:01
 */

/**
 *@function 对象总是通过引用传递，这表明无需从一个方法中返回一个对象来观察它的变化
 *@Class Class Parcel
 */
class Parcel{}

$box1 = new Parcel();
$box1->destinationCoutry = 'Denmark';

$box2 = $box1;
$box2->destinationCoutry = 'Brazil';

echo 'Parcels need to ship to: ' .$box1->destinationCoutry.' and ' .$box2->destinationCoutry;

if($box1 == $box2) echo 'equivalent';
if($box1 === $box2) echo 'exact same object';

