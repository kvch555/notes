<?php
/****
自学it网 高端PHP培训

论  坛: http://www.zixue.it
微  博: http://weibo.com/Yshiba
****/


/*
接收文件并合并
*/

if(!file_exists('./upload/hhr.mov')) {
    move_uploaded_file($_FILES['part']['tmp_name'],'./upload/hhr.mov');
} else {
    file_put_contents('./upload/hhr.mov',file_get_contents($_FILES['part']['tmp_name']),FILE_APPEND);
}

echo 'ok';


