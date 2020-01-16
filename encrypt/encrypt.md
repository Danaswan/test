### 加密
#### 作用
- 防止通讯内容被窃听
- 防止通讯内容被篡改

#### 对称加密 DES Data encryption standard
- 一种将64比特的明文加密成64比特的密文的对称算法

#### 对称密码 triple-DES 三重 DES
- 三重 DES 是为了增加 DES 的强度，将 DES 重复三次所得到的一种密码算法。三重 DES 其处理速度不高，除了特别的场景很少被使用

#### 对称密码 AES Advance Encryption Standard
- AES 是取代前任的 DES 公开的
- 加密步骤  subByte---> shiftRow---->MixColumn---->AddRoundKey    译文 字节替换---->列移动----->混合列----->与密钥进行XOR(异或)

#### 非对称密码 RSA 密码算法
- 公钥----->  密文 = 明文 E 次方 mod N   私钥-----> 明文 = 密文 D 次方 mod N
- RSA 密码 公钥与密钥不同  公钥加密的密文，只有对应私钥才能解密
- RSA 的破解，就是破解私钥中的 D ,但随着 D 长度的增大破解难度随之增大
- RSA 密码算法的缺点，算法速度慢，运算次数多，不适合加密长文本

#### 非对称密码 的中间攻击
- A -------> B          A 向 B 获取公钥
- B ------ C ----- A    B 返回公钥给 A 被 C 窃取保留 B 的公钥  并替换 B 的公钥 发给 A
- A ------ C ----- B    A 发送 加密内容 给 B C 获取并用自己的私钥解密 再把内容用 A 公钥 加密 给 B
