<?php
// 严格模式


function increment($value)
{
    return $value + 1;
}

array_map('increment',[1,2,3]);


array_map(function ($value) {
    return $value + 1;
}, [1, 2, 3]);

$greet = function(string $name){
    echo "hello {$name}";
};

$greet('dana');

if($greet instanceof  Closure){

}

$num = 1;
$func = function() use(&$num){
   $num = $num + 1;
   echo $num;
};

$func();
echo $num;
