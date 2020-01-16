<?php
/**
 * Created by PhpStorm.
 * User: ZhouFurong
 * Date: 2020/1/16
 * Time: 14:58
 */

$public = '-----BEGIN PUBLIC KEY-----
MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDzqjXmuWMHC7X00fn9QQCwfbn3
dpvDLMpouoYtap+/wHJpj+JjUDngm88ecIV6M+ApCcq849voeFGv02kRtcUK5X9r
gQnYEROTrsV9Y3JyxUkw+OAdSJTrrjgQkr6O52MZoYAPt6MJDk7cmpSDjPhLwqdT
Z1GopmSSagi1TJXprwIDAQAB
-----END PUBLIC KEY-----';

$private = '-----BEGIN PRIVATE KEY-----
MIICdgIBADANBgkqhkiG9w0BAQEFAASCAmAwggJcAgEAAoGBAPOqNea5YwcLtfTR
+f1BALB9ufd2m8Msymi6hi1qn7/AcmmP4mNQOeCbzx5whXoz4CkJyrzj2+h4Ua/T
aRG1xQrlf2uBCdgRE5OuxX1jcnLFSTD44B1IlOuuOBCSvo7nYxmhgA+3owkOTtya
lIOM+EvCp1NnUaimZJJqCLVMlemvAgMBAAECgYBS/DU/TwQa8jIWHy00w16ovSkI
zqxd3HNTF7N65EVj2PceXJKNoFUV2frAMzJCXEiLsXoKus+6bL/lUesGzRE96qnc
qXlU50tHgC70qbmDDlEYvx6D+S+l0Y0eyCSKCiyks5nPxxD4NZvJ7/AOtrHmdklQ
SkQoINJq7RVklA+3AQJBAPxWFYCeNkMxKkAeop1hLU+51uytm/67MqgNkALk2N88
5e9tGfEAme6ISxhJwt0wx345/IVrZ49KD1AMPuvL5+cCQQD3M+VJY8J2WMqP+h0b
DgFJSSs/3VHambAzpLe9I9M5nvdRMk1NJACS+cYK5OsvIUlzCre8aXAyJHh2qAcP
oJb5AkBjBJC5gNwAL+nJcXwUT87NCzrYcyPUqLavFWteh1jG+Qmtk11rofXFkXwO
UtuBmqOd17lMzaG8q64oljWWp9QfAkEAs4mfZ5PqsmV+iN8QsIuVZ5KatMGbJ3cj
v/5L7DTOvjS0TuaHuhUBzb1Wlqb4ILy+Sa1pEJBLij9utk8HAdSSkQJAT779fuhf
pEiUfl1MniNSEocCZHd7qs+xrGDiCQTprlCmbK6SFe05Tw7x7dulAE1meLUbqNl2
7bxdip+/BW2fSw==
-----END PRIVATE KEY-----';


$content = 'acbedetghijelim334120jlfs';

$ret = openssl_public_encrypt($content, $encrypt, $public);
var_dump($ret);
var_dump($encrypt);

$ret = openssl_private_decrypt($encrypt, $decrypt, $private);
var_dump($ret);
var_dump($decrypt);