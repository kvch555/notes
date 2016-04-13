<?php
/****
燕十八 公益PHP讲堂

论  坛: http://www.zixue.it
微  博: http://weibo.com/Yshiba
YY频道: 88354001
****/


/***
====笔记部分====
批量处理文件内容
把小于10字节的文件,和含有fuck的文件删除掉

思路:
循环文件名
判断大小 filesize 如果<10,删.
如果不小于,读内容,判断是否有f**k单词,
如果有, 用unlink来删除.
***/

/*
foreach(array('a.txt','b.txt','c.txt','d.txt') as $v) {
    $file = './article/' . $v;

    // 判断大小
    if(filesize($file) < 10) {
        unlink($file);
        echo $file,'小于10字节被删了<br />';
        continue;
    }

    // 大于10字节,就判断内容
    $cont = file_get_contents($file);
    
    if(stripos($cont,'fuck') !== false) {
        unlink($file);
        echo $file,'有文明用语,被删了<br />';
    }
}
*/

/**
如果这个目录有很多文件
想把一个目录下的文件 都打印出来
a.txt
b.txt
j.exe
japan.avi
aa.bmp
**/


// 匹配文件,把txt后缀的文件找出来,返回数组
print_r(glob('./article/*.txt'));




