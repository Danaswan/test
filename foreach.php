<?php

include_once './arr.php';
function value($value)
{
    return $value instanceof Closure ? $value() : $value;
}

function array_get($array, $key, $default = null)
{
    $arr = new Arr();
    return $arr->get($array, $key, $default);
}

$arr = ['person'=>[
    'info'=>['name'=>'dana','age'=>24],
    'eachScore'=>['math'=>89,'chinese'=>90,'english'=>87]
]];

$info = array_get($arr,'person.info');
$name = array_get($arr,'person.eachScore');


var_dump($info);
var_dump($name);