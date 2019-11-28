<?php
//server.php

set_time_limit(0);
$ip = '127.0.0.1';
$port = 1999;
// 创建一个Socket
$sock = socket_create(AF_INET,SOCK_STREAM,SOL_TCP);
// 绑定Socket地址和端口
$ret = socket_bind($sock,$ip,$port);
// 开始监听链接
$ret = socket_listen($sock,4);

$count = 0; //最多接受几次请求后就退出
do {
    // 另一个Socket来处理通信
    if (($msgsock = socket_accept($sock)) >= 0) {
        // 发到客户端
        $msg ="server: HELLO CLIENTS!\n";
        if (socket_write($msgsock, $msg, strlen($msg))) {
            echo "发送成功!\n";
        }
        // 获得客户端的输入
        $buf = socket_read($msgsock,8192);

        $talkback = "接受成功！内容为:$buf\n";
        echo $talkback;

        if(++$count >= 5){
            break;
        };
    }
    // 关闭sockets
    socket_close($msgsock);
} while (true);
socket_close($sock);
echo "TCP 连接关闭OK\n";

