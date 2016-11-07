<?php
/****
燕十八 公益PHP讲堂

论  坛: http://www.zixue.it
微  博: http://weibo.com/Yshiba
YY频道: 88354001
****/


/***
====笔记部分====
关于日志log class的答疑

昨天发现的一个现象:
我们循环5000次,写入curr.log文件,
事实上呢,大约3000次的,已经超过1M了,
但是,还是持续的写入到curr.log里.

必须下次刷新,才会备份,重新建一个curr.log



PHP.exe开启进程 PID 111 start
5000次读取 
php.exe结束进程 PID 111 end;


PHP.exe开启进程 PID 112 start
5000次读取
php.exe结束进程 PID 112 end


PHP.exe开启进程
5000次读取
php.exe结束进程


在1次进程中, filesize的结果会被缓存(很多文件信息获取函数的结果都会被缓存,如filemtime)
因此第1次运行时,读到的size全是0(即使这个过程中文件的内容已经被修改了)

当我们再次刷新时: filesize > 1M,
curr.log --raname--> 11202345.bak
新建curr.log filesize-->0 KB

在论坛上的问题出现在哪儿呢?
答:即便curr.log->rename->11202345.bak了,
但,filesize还是缓存了,

因此,循环的5000次中,始终认为curr.log>1M,
始终备份.....
***/


for($file='./a.txt',$i=0;$i<100;$i++) {
    echo filesize($file),'<br />';
    $fh = fopen($file,'ab');
    fwrite($fh,$i."\r\n");
    fclose($fh);
}

echo 'OK';

