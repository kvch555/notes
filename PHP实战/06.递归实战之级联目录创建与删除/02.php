<?php
/****
燕十八 公益PHP讲堂

论  坛: http://www.zixue.it
微  博: http://weibo.com/Yshiba
YY频道: 88354001
****/


/***
====笔记部分====
递归删除目录
***/



function deldir($path) {
    
    // 不是目录,直接返回
    if(!is_dir($path)) {
        return NULL;
    }
    
    $dh = opendir($path);
    while(($row = readdir($dh)) !== false) {
        if($row == '.' || $row == '..') {
            continue;
        }
        // 判断是否是普通文件
        if(!is_dir($path . '/' . $row)) {
            unlink($path . '/' . $row);
        } else {
            deldir($path . '/' . $row); //递归把子目录/子文件删了.
        }
    }

    closedir($dh); 
    rmdir($path);
    
    echo '删了',$path,'<br />';
    return true;

}

echo deldir('./a')?'OK':'fail';
