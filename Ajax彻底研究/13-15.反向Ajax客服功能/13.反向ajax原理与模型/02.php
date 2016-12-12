<?php
/****
自学it网 高端PHP培训

论  坛: http://www.zixue.it
微  博: http://weibo.com/Yshiba
****/


/*

comet 反向ajax,
又叫服务器推技术, server push
在"实时聊天","消息推送"中,比较适宜用这种技术.


服务器端:
1:不要断开连接
2:有消息时再发送

原理: HTTP/1.1 的长连接与chunk传输.
chunk有切割分块的意思.
就是说----服务器端也不知道到底要传输多少length给浏览器,
只能每次传1小块 chunk.


具体做法:
php用一个死循环,始终运行
有相关消息时,立即把内容推到浏览器上
*/

set_time_limit(0);
ob_start();


echo str_repeat(' ',4000),'<br />';
ob_flush();
flush();


require('./conn.php');

while(true) {
   
    $sql = 'select * from msg where rec = "admin" and isread=0';
    $rs = mysql_query($sql,$conn);
    
    $msg = mysql_fetch_assoc($rs);
    if(empty($msg)) {
    } else {

        echo $msg['pos'],'说',$msg['content'],'<br />';
        ob_flush(); // 强迫php把内容发给apache
        flush();    // 强迫webserver把内容发送到浏览器


        // 把msg设为已读状态
        $sql = 'update msg set isread=1 where mid=' . $msg['mid'];
        mysql_query($sql,$conn);
    }
    sleep(1);
}



