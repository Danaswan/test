<?php
/**
 * Created by PhpStorm.
 * User: ZhouFurong
 * Date: 2019/11/20
 * Time: 15:36
 */

class Foo
{
    public function bar()
    {
        return  function () {
            if(false === $flag = $this instanceof Closure){
                return $flag;
            }
            return 12;
        };
    }

}

/*$foo = new Foo();
$obj = $foo->bar();
var_dump($obj());*/


