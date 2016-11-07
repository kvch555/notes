<?php
/****
燕十八 公益PHP讲堂

论  坛: http://www.zixue.it
微  博: http://weibo.com/Yshiba
YY频道: 88354001
****/


/*
imagefill的用法
*/


// 画布
$im = imagecreatetruecolor(800,600);


// 颜料
$gray = imagecolorallocate($im,200,200,200);
$blue = imagecolorallocate($im,0,0,255);
$red = imagecolorallocate($im,255,0,0);


// 填充
imagefill($im,200,200,$gray);

imageellipse($im,400,300,300,300,$blue);


// 再次填充
imagefill($im,400,300,$red);


// 输出
header('content-type: image/jpeg;');
imagejpeg($im);

//销毁
imagedestroy($im);







