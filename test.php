
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php

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


?>
<form action="" method="POST">
    name: <input type="text" name="name" value="tom" /><br />
    age:<input type="text" name="age" value="22" /><br />
    <input type="submit" value="Submit" />
</form>
</body>
</html>
<?php echo "<pre>"; var_dump(get_http_raw()); echo "</pre>";?>