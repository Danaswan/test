<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/23
 * Time: 10:19
 */

function get_http_raw()
{
    $raw = '';
    // 请求行
    $raw .= $_SERVER['REQUEST_METHOD'] . ' '. $_SERVER['REQUEST_URI'] . "\r\n";
    //请求header
    foreach ($_SERVER as $key => $value) {
        if (substr($key, 0, 5) === 'HTTP_') {
           $key = substr($key, 5 );
           $key = str_replace('_', '-', $key);
           $raw .= $key . ':' . $value . "\r\n";
        }
    }
    // 空行
    $raw .= "\r\n";
    // 请求body
    $raw .= file_get_contents('php://input');
    return $raw;
}

var_dump(get_http_raw());





