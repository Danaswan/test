<?php
/**
 * Created by PhpStorm.
 * User: ZhouFurong
 * Date: 2020/1/16
 * Time: 10:37
 */

$content = 'Dana was born in 2019-12-01';

$key = uniqid();
$method = 'IDEA-CFB';
$iv = '87654321';
$enContent = openssl_encrypt($content,$method,$key,OPENSSL_RAW_DATA ,$iv);
var_dump($enContent);

$deContent = openssl_decrypt($enContent,$method,$key,OPENSSL_RAW_DATA,$iv);
var_dump($deContent);