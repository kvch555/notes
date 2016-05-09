<?php
/****
燕十八 公益PHP讲堂

论  坛: http://www.zixue.it
微  博: http://weibo.com/Yshiba
YY频道: 88354001
****/


/***
====笔记部分====
复杂一点的验证码
***/


// 1 造画布
$im = imagecreatetruecolor(50,25);




// 2 造颜料准备写字
$red = imagecolorallocate($im,255,0,0);
// 浅色背景
$gray = imagecolorallocate($im,220,220,220);

// 随机颜色
$randcolor = imagecolorallocate($im,mt_rand(0,150),mt_rand(0,150),mt_rand(0,150));

$linecolor1 = imagecolorallocate($im,mt_rand(100,150),mt_rand(100,150),mt_rand(100,150));
$linecolor2 = imagecolorallocate($im,mt_rand(100,150),mt_rand(100,150),mt_rand(100,150));
$linecolor3 = imagecolorallocate($im,mt_rand(100,150),mt_rand(100,150),mt_rand(100,150));

// 填充背景
imagefill($im,0,0,$gray);

// 画干扰线
imageline($im,0,mt_rand(0,25),50,mt_rand(0,25),$linecolor1);
imageline($im,0,mt_rand(0,25),50,mt_rand(0,25),$linecolor2);
imageline($im,0,mt_rand(0,25),50,mt_rand(0,25),$linecolor3);

/*
3 写字
imagestring — 水平地画一行字符串

说明
bool imagestring ( resource $image , int $font , int $x , int $y , string $s , int $col )
参数分别代表: 画布资源,字体大小(1-5中选择), 字符最左上角的x坐标,y坐标 ,要写的字符串,颜色
*/

$str = substr(str_shuffle('ABCDEFGHIJKMNPQRSTUVWXYZabcdefghijkmnpqrstuvwxyz23456789'),0,4);


imagestring($im,5,8,5,$str,$randcolor);

header('content-type: image/png');
imagepng($im);




/****
验证码的字符串还想扭曲该如何做.
参考正弦曲线函数,弧度函数
同学们自己测试
****/


