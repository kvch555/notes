<?php
/****
燕十八 公益PHP讲堂

论  坛: http://www.zixue.it
微  博: http://weibo.com/Yshiba
YY频道: 88354001
****/


/***
====笔记部分====
用文件操作函数,来批量处理客户名单
***/


$file = './custom.txt';


/**
第一种办法,简便快捷暴力的办法
file_get_contents获取内容
再用\r\n切成数组

注意: 各操作系统下,换行符并不一致
win: \r\n
*nix: \n
mac: \r

$cont = file_get_contents($file);
//下面这个用\n区分,通用性并不好
print_r(explode("\n",$cont));
**/


/** 
第二种,打开,一点点的读,每次读一行
fgets() 每次读一行
**/

// 模式里面可以加b,表示以2进制来处理 ,不受编码的干扰

/*
$fh = fopen($file,'rb');
echo fgets($fh),'<br />'; //zhangsan
echo fgets($fh),'<br />'; // lisi
echo fgets($fh),'<br />'; // wangwu
*/


// 文件的指针一直再往后移动,
// feof ,end of file的意思
// 专门用来判断指针是否已经走到结尾
/*
$fh = fopen($file,'rb');
while(!feof($fh)) {
    echo fgets($fh),'<br />';
}

*/



// 第三种,也是比较暴力的办法
/*
file函数,直接读取文件内容,并按行拆成数组,
返回该数组

和file_get_contents的相同之处:
一次性读入,大文件慎用!
*/
$arr = file($file);
print_r($arr);





