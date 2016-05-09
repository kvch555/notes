<?php
/****
燕十八 公益PHP讲堂

论  坛: http://www.zixue.it
微  博: http://weibo.com/Yshiba
YY频道: 88354001
****/


/***
====笔记部分====
画饼图
其实就是画圆弧
***/



// 画布
$im = imagecreatetruecolor(800,600);


// 颜料
$gray = imagecolorallocate($im,200,200,200);
$blue = imagecolorallocate($im,0,0,255);
$red = imagecolorallocate($im,255,0,0);

// 填充
imagefill($im,0,0,$gray);


/*
画一段圆弧
bool imagearc ( resource $image , int $cx , int $cy , int $w , int $h , int $s , int $e , int $color )
参数为: 画布,圆心x值,圆心y值,宽,高,起始角度,结果角度,颜色
*/
imagearc($im,400,300,300,300,270,0,$blue);
imagearc($im,400,300,310,310,-90,0,$red);
// 输出
header('content-type: image/jpeg;');
imagejpeg($im);

//销毁
imagedestroy($im);



