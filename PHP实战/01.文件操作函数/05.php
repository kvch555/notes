<?php
/****
燕十八 公益PHP讲堂

论  坛: http://www.zixue.it
微  博: http://weibo.com/Yshiba
YY频道: 88354001
****/


/***
====笔记部分====
判断文件是否存在
获取文件的创建时间/修改时间
***/

$file = 'custom.txt';
if(file_exists($file)) {
    echo $file,'存在<br />';
    echo '上次修改时间是',date('Y-m-d H:i:s',filemtime($file));
} else {
    echo '不存在 ';
}




