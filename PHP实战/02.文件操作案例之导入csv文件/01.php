<?php
/****
燕十八 公益PHP讲堂

论  坛: http://www.zixue.it
微  博: http://weibo.com/Yshiba
YY频道: 88354001
****/


/***
====笔记部分====
把excel导入数据库的方法
excel->csv->文件处理
***/
echo '<pre>';

$file = 'score.csv';
$fh = fopen($file,'rb');


/*
思路1:每次读一行,
每一行的内容再逗号拆成数组


while(!feof($fh)) {
    $row = fgets($fh);
    print_r(explode(',',$row));
}
*/

// 这个函数已经封装了csv文件相关规范.

while(!feof($fh)) {
    $row = fgetcsv($fh);
    print_r($row);
}


/***
有一堆小文件
a.txt
b.txt
c.txt

帮我检测,哪个文件有 fuck这个单词,
或者<10个字节文件
就删掉
***/


