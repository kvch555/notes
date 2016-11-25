<?php
/****
自学it网 高端PHP培训

论  坛: http://www.zixue.it
微  博: http://weibo.com/Yshiba
****/


if(empty($_FILES)) {
    exit('no file');
}

if($_FILES['pic']['error'] != 0) {
    exit('fail');
}

move_uploaded_file($_FILES['pic']['tmp_name'],'upload/'.$_FILES['pic']['name']);

echo 'ok';