<?php
/****
自学it网 高端PHP培训

论  坛: http://www.zixue.it
微  博: http://weibo.com/Yshiba
****/


set_time_limit(0);
require('./conn.php');

$rec = $_COOKIE['username'];
$sql = "select * from msg where rec = '$rec' and isread=0 limit 1";


while(true) {
    $rs = mysql_query($sql,$conn);
    $row = mysql_fetch_assoc($rs);
    if(!empty($row)) {
        $sql = "update msg set isread = 1 where mid = " . $row['mid'];
        mysql_query($sql,$conn);

        echo json_encode($row);
        exit();
    }

    sleep(1);
}