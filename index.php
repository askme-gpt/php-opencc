<?php

use Ysp\PHPOpenCC\OpenCC;

require './vendor/autoload.php';

$SIMPLIFIED_TO_TRADITIONAL = OpenCC::convert('在这里输入要转换的内容', 'SIMPLIFIED_TO_TRADITIONAL');
var_dump($SIMPLIFIED_TO_TRADITIONAL);