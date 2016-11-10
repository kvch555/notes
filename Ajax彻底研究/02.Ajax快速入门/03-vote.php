<?php
/****
自学it网 高端PHP培训

论  坛: http://www.zixue.it
微  博: http://weibo.com/Yshiba
****/

sleep(3);


if(rand(1,10) < 4) {
    echo '0';
} else {
    $cnt = file_get_contents('./res.txt');
    $cnt += 1;
    file_put_contents('./res.txt',$cnt);
    echo '1';
}



