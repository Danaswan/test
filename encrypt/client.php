<?php
/**
 * Created by PhpStorm.
 * User: ZhouFurong
 * Date: 2020/1/16
 * Time: 15:32
 */

// 综合实践 签名

$appKey = 'yuspance.cn';
$appSecret = 'etwqitouw898324ff33q4';

$public = '-----BEGIN PUBLIC KEY-----
MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDzqjXmuWMHC7X00fn9QQCwfbn3
dpvDLMpouoYtap+/wHJpj+JjUDngm88ecIV6M+ApCcq849voeFGv02kRtcUK5X9r
gQnYEROTrsV9Y3JyxUkw+OAdSJTrrjgQkr6O52MZoYAPt6MJDk7cmpSDjPhLwqdT
Z1GopmSSagi1TJXprwIDAQAB
-----END PUBLIC KEY-----';

$url = 'http://localhost/test/encrypt/server.php?';

$param['appKey'] = $appKey;
$param['name'] = 'Dana';
$param['title'] = 'DanaSwan';
$param['time'] = time();

$sign = getsign($param, $appSecret);
$queryString = http_build_query($param);
$queryString .= '&sign=' . $sign;

openssl_public_encrypt($queryString, $encrypt, $public);
$encrypt = urlencode($encrypt);

$url .= "q=" . $encrypt;
var_dump($url);


function getSign($param, $appSecret)
{
    ksort($param);
    $q = http_build_query($param);
    $q .= $appSecret;
    return md5($q);
}
