<?php
/**
 * Created by PhpStorm.
 * User: ZhouFurong
 * Date: 2019/11/30
 * Time: 9:47
 */

// 局部变量

/*$a = 3;
function num(){
    echo $a;
}*/

/*$a = 123;
function a(){
    global $a;
    echo $a;
}*/

function t(){
    static $a = 1;
    echo $a;
    $a++;
}

for($i = 0;$i < 10; ++$i){
    t();
}

echo "\r\n";

function t_1(){
    $a = 1;
    echo $a;
    $a++;
}
for($i = 0;$i < 10; ++$i){
    t_1();
}

echo "\r\n";

$c = 1;
function c($a){
    echo $a;
}
c($c);

echo "\r\n";

// 使用 $GLOBALS 超全局数组
$a = 99;
function callA(){
    echo $GLOBALS['a'].PHP_EOL;
}

callA();

// 使用 global 关键字
$b = 11;
function callB(){
    global $b;
    echo $b;
}
callB();

?>

<script type="application/javascript">
    var a = 123;
    function myFunction(){
        console.log(a);
    }
    myFunction();
</script>

