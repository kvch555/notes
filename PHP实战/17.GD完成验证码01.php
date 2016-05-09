<?php
/****
燕十八 公益PHP讲堂

论  坛: http://www.zixue.it
微  博: http://weibo.com/Yshiba
YY频道: 88354001
****/


/***
====笔记部分====
验证码!

验证码不就是有字母的图片

造图片
写字(不会) ---> imagestring
***/



// 1 造画布
$im = imagecreatetruecolor(50,25);

// 不填充,同学们看看默认画布是什么底色? 答:黑色


// 2 造颜料准备写字
$red = imagecolorallocate($im,255,0,0);

/*
3 写字
imagestring — 水平地画一行字符串

说明
bool imagestring ( resource $image , int $font , int $x , int $y , string $s , int $col )
参数分别代表: 画布资源,字体大小(1-5中选择), 字符最左上角的x坐标,y坐标 ,要写的字符串,颜色
*/

$str = substr(str_shuffle('ABCDEFGHIJKMNPQRSTUVWXYZabcdefghijkmnpqrstuvwxyz23456789'),0,4);


imagestring($im,5,8,5,$str,$red);

header('content-type: image/png');
imagepng($im);