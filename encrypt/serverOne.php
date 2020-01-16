<?php
/**
 * Created by PhpStorm.
 * User: ZhouFurong
 * Date: 2020/1/16
 * Time: 17:18
 */

$public = '-----BEGIN PUBLIC KEY-----
MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDzqjXmuWMHC7X00fn9QQCwfbn3
dpvDLMpouoYtap+/wHJpj+JjUDngm88ecIV6M+ApCcq849voeFGv02kRtcUK5X9r
gQnYEROTrsV9Y3JyxUkw+OAdSJTrrjgQkr6O52MZoYAPt6MJDk7cmpSDjPhLwqdT
Z1GopmSSagi1TJXprwIDAQAB
-----END PUBLIC KEY-----';


$param = $_GET;
$queryString = $param['q'];
$queryString = urldecode($queryString);
openssl_public_decrypt($queryString, $decrypt, $public);
parse_str($decrypt, $param);

$sign = getSign($param);
if ($sign != $param['sign']) {
    exit('connect error');
}

exit('suc');
function getSign($param)
{
    $conf = [
        'yuspance.cn' => 'etwqitouw898324ff33q4'
    ];
    if (abs($param['time'] - time()) >= 600) {
        exit('time out');
    }
    unset($param['sign']);

    ksort($param);

    $q = http_build_query($param);

    return md5($q . $conf[$param['appKey']]);
}