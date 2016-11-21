<?php
/****
自学it网 高端PHP培训

论  坛: http://www.zixue.it
微  博: http://weibo.com/Yshiba
****/

sleep(3);

if(empty($_FILES)) {
    exit('no file');
}

$error = $_FILES['pic']['error']==0 ? 'succ' : 'fail';

echo "<script>parent.document.getElementById('progress').innerHTML = '$error'</script>";


