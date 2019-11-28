<?php
/**
 * Created by PhpStorm.
 * User: ZhouFurong
 * Date: 2019/11/20
 * Time: 16:26
 */

class Good
{
    static $num = 10;
}

$sell = static function(){
    return 'current good num '. --static::$num ;
};

$sold = \Closure::bind($sell,null,Good::class);
var_dump($sold());
var_dump($sold());