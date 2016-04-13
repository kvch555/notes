<?php
/****
燕十八 公益PHP讲堂

论  坛: http://www.zixue.it
微  博: http://weibo.com/Yshiba
YY频道: 88354001
****/


/***
====笔记部分====
文件内容的读取与写入
***/



// 要求:把a.txt的内容读出来,赋给$str变量

/*
file_get_contents()可以获取一个文件的内容或一个网络资源的内容
file_get_contents是读文件/读网络比较 比较快捷的一个函数
帮我们封装了打开/关闭等操作.

但是--小心,这个函数一次性把文件的内容全部读出来,放内存里.
因此,工作中,处理上百M的大文件,慎用此函数


注:file_get_contents 要获取的文件不存在,为报warning
*/

$file = './a.txt';
$str = file_get_contents($file);

/*
// 此函数还可以读网络资源
$url = 'http://news.163.com/photoview/00AO0001/29398.html';
echo file_get_contents($url);
*/


// 读出来的内容,能否写到另一个文件里去呢?
/*
file_put_contents() 这个函数用来把内容写入到文件
也是一个快捷函数,帮我们封装打开写入关闭的细节.

注:如果指定的文件不存在,则会自动创建
*/
file_put_contents('./b.txt',$str);





/**
最简单的小偷程序
**/

$url = 'http://view.163.com/special/reviews/unionsecede1119.html';
$html = file_get_contents($url);

if(file_put_contents('163news.html',$html)) {
    echo '偷来了';
} else {
    echo '被抓了';
}
