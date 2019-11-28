<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/23
 * Time: 10:11
 */

class streams
{
    public function post($url,$content)
    {
        $content = http_build_query($content);
        $opts = [
            'http'=>[
                'method'=>'POST',
                'header'=>"Auth: SecretAuthToken\r\n".
                    "Content-type: application/x-www-form-urlencoded\r\n".
                    "Content-length: ".strlen($content),
                'content'=>$content
            ]
        ];
        $context = stream_context_create($opts);
        var_dump(file_get_contents($url, false, $context));


    }
}

