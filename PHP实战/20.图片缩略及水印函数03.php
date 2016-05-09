<?php
/****
燕十八 公益PHP讲堂

论  坛: http://www.zixue.it
微  博: http://weibo.com/Yshiba
YY频道: 88354001
****/


/***
====笔记部分====
透明复制

bool imagecopymerge ( resource $dst_im , resource $src_im , int $dst_x , int $dst_y , int $src_x , int $src_y , int $src_w , int $src_h , int $pct )
***/


//　读取大图
$dst = imagecreatefromjpeg('home.jpg');

// 读取小图
$src = imagecreatefrompng('smallfeng.png');


imagealphablending ( $src , true);
imagealphablending ( $dst , true);


imagecopymerge($dst,$src,410,63,0,0,165,189,40);


echo imagejpeg($dst,'./ad.jpeg')?'OK':'FAIL';



