<?php
/****
自学it网 高端PHP培训

论  坛: http://www.zixue.it
微  博: http://weibo.com/Yshiba
****/



$cnt = file_get_contents('./res.txt');
$cnt += 1;
file_put_contents('./res.txt',$cnt);


// 利用HTTP协议的204特性

header('HTTP/1.1 204 No Content');
