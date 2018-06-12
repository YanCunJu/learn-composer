<?php
use Gregwar\Captcha\CaptchaBuilder;

require 'vendor/autoload.php';

// 生成验证码
$builder = new CaptchaBuilder;
$builder->build();

// 显示验证码
header('Content-type: image/jpeg');
$builder->output();