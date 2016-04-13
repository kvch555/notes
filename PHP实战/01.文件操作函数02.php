<?php
/****
燕十八 公益PHP讲堂

论  坛: http://www.zixue.it
微  博: http://weibo.com/Yshiba
YY频道: 88354001
****/


/***
====笔记部分====
文件操作之
fopen
fread
fwrite
fclose
***/


/*
fopen() 打开一个文件, 返回一个句柄资源
fopen($filename,mode);
第2个参数是"模式",如只读模式,如读写模式,如追加模式
返回值: 资源
*/


$file = '163news.html';
$fh = fopen($file,'r');

// 沿着上面返回的$fh这个资源通道来读文件
echo fread($fh,10),'<br />';

// 返回int(0),说明没有成功写入
// 原因: 在于第2个Mode参数,选的r,即只读打开
var_dump(fwrite($fh,'我来了!!!!!!!'));


// 关闭资源
fclose($fh);



/*
r+读写模式,并把指针指向文件头
写入成功
注意:从文件头,写入时,覆盖相等字节的字符.
$fh = fopen($file,'r+');
echo fwrite($fh,'hello')?'成功':'失败','<br />';
flose($fh);
*/



/*
w:写入模式(fread读不了)
并把文件大小截为0 (文件被清空了)
指针停于开头处


echo '<hr />';
$fh = fopen('./modew.txt','w');
fclose($fh);
echo 'OK';
*/


/*
a: 追加模式打开,
能写,并把指针停在文件的最后
*/
$fh = fopen('modea.txt','a');
echo fwrite($fh,'白云一片')?'OK modea':'fail';
fclose($fh);



