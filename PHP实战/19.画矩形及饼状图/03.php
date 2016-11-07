<?php
/****
燕十八 公益PHP讲堂

论  坛: http://www.zixue.it
微  博: http://weibo.com/Yshiba
YY频道: 88354001
****/


/***
====笔记部分====
画复杂图形,并填充

矩形
椭圆
圆弧(统计时的饼状图,要用到)
***/



// 画布
$im = imagecreatetruecolor(800,600);


// 颜料
$gray = imagecolorallocate($im,200,200,200);
$blue = imagecolorallocate($im,0,0,255);
$red = imagecolorallocate($im,255,0,0);

// 填充
imagefill($im,0,0,$gray);



// 画一个矩形
/*
bool imagerectangle ( resource $image , int $x1 , int $y1 , int $x2 , int $y2 , int $col )
参数: 画布资源, 左上角x坐标,左上y坐标,右下x坐标,右下y坐标,颜色
*/


imagerectangle($im,200,150,600,450,$blue);



// 画椭圆
/*
bool imageellipse ( resource $image , int $cx , int $cy , int $w , int $h , int $color )
参数:画布资源,圆心x坐标,圆心y坐标,宽,高,颜色
*/
imageellipse ( $im , 400 , 300 , 400 , 300 , $red );
imageellipse ( $im , 400 , 300 , 300 , 300 , $red );
imageellipse ( $im , 400 , 300 , 200 , 300 , $red );
imageellipse ( $im , 400 , 300 , 100 , 300 , $red );

// 输出
header('content-type: image/jpeg;');
imagejpeg($im);

//销毁
imagedestroy($im);



