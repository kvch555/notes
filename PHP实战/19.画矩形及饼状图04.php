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
画圆弧并填充
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
画一段圆弧并填充
bool imagefilledarc ( resource $image , int $cx , int $cy , int $w , int $h , int $s , int $e , int $color , int $style )

参数为: 画布,圆心x值,圆心y值,宽,高,起始角度,结果角度,颜色,填充方式

1 IMG_ARC_CHORD 直线连圆弧2端
0 IMG_ARC_PIE   弧线连圆弧2端
4 IMG_ARC_EDGED 指明用直线将起始和结束点与中心点相连，
2 IMG_ARC_NOFILL 不填充轮廓(默认是填充的)

*/

imagefilledarc($im,400,300,300,300,270,0,$blue,1+2+4);


imagefilledarc($im,0,400,310,310,0,45,$blue,0+4);
imagefilledarc($im,0,400,300,300,0,45,$red,0+4);
// 输出
header('content-type: image/jpeg;');
imagejpeg($im);

//销毁
imagedestroy($im);



