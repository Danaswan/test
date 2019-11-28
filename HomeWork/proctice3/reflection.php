<?php
/**
 * Created by PhpStorm.
 * User: ZhouFurong
 * Date: 2019/4/20
 * Time: 11:05
 */

require './Config.php';

$config = new \practice\Config();

$reflection = new ReflectionClass($config);
//var_dump($reflection);
//var_dump($reflection->getDefaultProperties());
$comment_string = ($reflection->getMethod('parse')->getDocComment());
//var_dump($reflection->getMethods());
//var_dump($reflection->getDocComment());

//define the regular expression pattern to use for string matching
$pattern = "#(@[a-zA-Z]+\s*[a-zA-Z0-9, ()_].*)#";

//perform the regular expression on the string provided
preg_match_all($pattern, $comment_string, $matches, PREG_PATTERN_ORDER);
var_dump($matches);
