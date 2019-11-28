<?php
/**
 * Created by PhpStorm.
 * User: ZhouFurong
 * Date: 2019/6/25
 * Time: 17:34
 */


//client.php

error_reporting(E_ALL);
set_time_limit(0);
$port = 1999;
$ip = "127.0.0.1";

// 创建Socket
$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
// 绑定Socket地址和端口
$result = socket_connect($socket, $ip, $port);
if ($result >= 0) echo "TCP 连接OK\n";

$in = "client: HELLO SERVER!\r\n";
if(socket_write($socket, $in, strlen($in))) {
    echo "发送成功！\n";
}
$out = '';
while($out = socket_read($socket, 8192)) {
    echo "接受成功！内容为:",$out;
}

socket_close($socket);
echo "TCP 连接关闭OK\n";

