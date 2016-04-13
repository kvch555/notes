<?php
/****
燕十八 公益PHP讲堂

论  坛: http://www.zixue.it
微  博: http://weibo.com/Yshiba
YY频道: 88354001
****/


/***
====笔记部分====
目录操作
opendir  打开目录
readdir 读取目录
mkdir 创建目录
rmdir 删除目录
closedir 关闭目录句柄
is_dir 判断是否为目录

***/


$path = './misc';


/*
opendir 打开目录,返回资源句柄
*/
$dh = opendir($path); // $dh是句柄


/*
echo readdir($dh),'<br />'; //?? . 
echo readdir($dh),'<br />'; //?? ..
echo readdir($dh),'<br />'; //??
echo readdir($dh),'<br />'; //??


. 
.. 是虚拟的目录,分别代表 当前目录 和 上一级目录
*/


while(($filename = readdir($dh)) !== false) {
    echo $filename;
    if(is_dir('./misc/' . $filename)) {
        echo '是目录';
    }

    echo '<br />';
}

closedir($dh);
