<?php
/**
 * Created by PhpStorm.
 * User: ZhouFurong
 * Date: 2019/12/4
 * Time: 15:30
 */

$a = "a string";

$b = &$a;

xdebug_debug_zval('a');

//unset($b);

xdebug_debug_zval('a');
xdebug_debug_zval('a');