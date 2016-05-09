<?php
/****
燕十八 公益PHP讲堂

论  坛: http://www.zixue.it
微  博: http://weibo.com/Yshiba
YY频道: 88354001
****/



/**
如何知道图片的大小和类型


因为在缩略图,不知道大小,我们无法确定比例
不知道类型,我们无法确认调用的函数,如 imagecreatefrompng/jpeg...

之前的学习 我们是人为的读出图片的宽和高
又通过后缀知道了类型,
相当于宽高,类型是已知的


我们既然准备写一个图片处理类,要处理的图片是各种大小,各种类型都可能的,
如何知道大小及功能???


引出一个重要函数  getimagesize()
**/


$arr = getimagesize('./feng.png');
//print_r($arr);
echo '你是',image_type_to_mime_type($arr[2]),'类型';


$arr = getimagesize('./home.jpg');
echo '你是',image_type_to_mime_type($arr[2]),'类型';
print_r($arr);


$arr = getimagesize('./01.php');
var_dump($arr);


/*
Array
(
    [0] => 330  宽
    [1] => 379  高
    [2] => 3    图片类型(根据这个参数,知道该调用imagecreatefrompng/jpeg/gif)
    [3] => width="330" height="379"
    [bits] => 8
    [mime] => image/png
)


*/