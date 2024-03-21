# 来源
这个包来源于：https://github.com/overtrue/php-opencc ，为啥要做同个功能的轮子呢？因为这个包不支持php8以前的版本，我有些老项目，升级比较麻烦，因此把代码稍微改了一下，以便php7.1以后的版本都能用。
如果你的php版本在php8以上，请使用 https://github.com/overtrue/php-opencc ，以便获取最新的更新，虽然我的这个包也能在php8的环境下跑，但是性能肯定没有官方的那么好，因为jit原因。

这个版本阉割了命令行功能，因为有些命令行有些单独的依赖，那些依赖也使用了php8，因此去掉了。

如果遇到不兼容的问题，直接提issue，我会尽量在24小时之内处理完毕。

# PHP OpenCC

中文简繁转换，支持词汇级别的转换、异体字转换和地区习惯用词转换（中国大陆、台湾、香港、日本新字体）。基于 [BYVoid/OpenCC](https://github.com/BYVoid/OpenCC) 数据实现。

[![Build Status](https://github.com/ysp/php-opencc/actions/workflows/test.yml/badge.svg)](https://github.com/ysp/php-opencc/actions/workflows/test.yml)
[![Latest Stable Version](https://poser.pugx.org/ysp/php-opencc/v/stable)](https://packagist.org/packages/ysp/php-opencc)
[![Total Downloads](https://poser.pugx.org/ysp/php-opencc/downloads)](https://packagist.org/packages/ysp/php-opencc)
[![License](https://poser.pugx.org/ysp/php-opencc/license)](https://packagist.org/packages/ysp/php-opencc)

## 安装

```shell
composer require ysp/php-opencc -vvv
```

## 使用

```php
use Ysp\OpenCC\OpenCC;

echo OpenCC::convert('服务器', 'SIMPLIFIED_TO_TAIWAN_WITH_PHRASE'); 
// output: 伺服器
```

### 使用策略别名

```php
use Ysp\OpenCC\OpenCC;
use Ysp\OpenCC\Strategy;

// 以下方法等价：

// 方法
echo OpenCC::s2tw('服务器');
echo OpenCC::simplifiedToTaiwan('服务器');

// 字符串
echo OpenCC::convert('服务器', 's2tw');
echo OpenCC::convert('服务器', 'S2TW');
echo OpenCC::convert('服务器', 'SIMPLIFIED_TO_TAIWAN');

// 常量
echo OpenCC::convert('服务器', Strategy::S2TW);
echo OpenCC::convert('服务器', Strategy::SIMPLIFIED_TO_TAIWAN);
```

### 转换策略

| 策略 （别名）                                   | 说明              |
|-------------------------------------------|-----------------|
| `SIMPLIFIED_TO_TRADITIONAL(S2T)`          | 简体到繁体           |
| `SIMPLIFIED_TO_HONGKONG(S2HK)`            | 简体到香港繁体         |
| `SIMPLIFIED_TO_JAPANESE(S2JP)`            | 简体到日文           |
| `SIMPLIFIED_TO_TAIWAN(S2TW)`              | 简体到台湾正体         |
| `SIMPLIFIED_TO_TAIWAN_WITH_PHRASE(2TWP)`  | 简体到台湾正体, 带词汇本地化 |
| `HONGKONG_TO_TRADITIONAL(HK2T)`           | 香港繁体到正体         |
| `HONGKONG_TO_SIMPLIFIED(HK2S)`            | 香港繁体到简体         |
| `TAIWAN_TO_SIMPLIFIED(TW2S)`              | 台湾正体到简体         |
| `TAIWAN_TO_TRADITIONAL(TW2T)`             | 台湾正体到繁体         |
| `TAIWAN_TO_SIMPLIFIED_WITH_PHRASE(TW2SP)` | 台湾正体到简体, 带词汇本地化 |
| `TRADITIONAL_TO_HONGKONG(T2HK)`           | 正体到香港繁体         |
| `TRADITIONAL_TO_SIMPLIFIED(T2S)`          | 繁体到简体           |
| `TRADITIONAL_TO_TAIWAN(T2TW)`             | 繁体到台湾正体         |
| `TRADITIONAL_TO_JAPANESE(T2JP)`           | 繁体到日文           |
| `JAPANESE_TO_TRADITIONAL(JP2T)`           | 日文到繁体           |
| `JAPANESE_TO_SIMPLIFIED(JP2S)`            | 日文到简体           |


## License

MIT
