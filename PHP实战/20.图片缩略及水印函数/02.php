<?php
/****
燕十八 公益PHP讲堂

论  坛: http://www.zixue.it
微  博: http://weibo.com/Yshiba
YY频道: 88354001
****/


/***
====笔记部分====
问:复制的图片能否小一点呢?
复制的图片能否带点透明效果呢?

答:能
imagecopyresampled
imagecopymerge
***/


/*
bool imagecopyresampled ( resource $dst_image , resource $src_image , int $dst_x , int $dst_y , int $src_x , int $src_y , int $dst_w , int $dst_h , int $src_w , int $src_h )

复制图片并允许调整大小(可以做缩略图)
*/


$ow = 330;  // 原图宽度
$oh = 379;  // 原图高度


$nw = (int)$ow/2; // 缩略宽度
$nh = (int)$oh/2; // 缩略高度


// 创建缩略图画面
$dst = imagecreatetruecolor($nw,$nh);

// 读取原始图
$src = imagecreatefrompng('./feng.png');

// 复制完毕
imagecopyresampled($dst,$src,0,0,0,0,$nw,$nh,$ow,$oh);


// 输出
imagepng($dst,'./smallfeng.png');

imagedestroy($dst);