<?php
/****
燕十八 公益PHP讲堂

论  坛: http://www.zixue.it
微  博: http://weibo.com/Yshiba
YY频道: 88354001
****/


/***
多文件上传
***/


/*
计算并创建目录
*/
function mk_dir() {
    $dir = date('md/i',time());
    if(is_dir('./' . $dir)) {
        return $dir;
    } else {
        mkdir('./' . $dir,0777,true);
        return $dir;
    }
}


function getExt($file) {
    $tmp = explode('.',$file);
    return end($tmp);
}


function randName() {
    $str = 'abcdefghijkmnpqrstuvwxzy23456789';
    return substr(str_shuffle($str),0,6);
}


//print_r($_FILES);



foreach($_FILES as $k=>$v) {
    // 拼接文件路径
    $path = './' . mk_dir() . '/' . randName() . '.' . getExt($v['name']);

    if($v['error'] != 0) {
        echo $k,'上传失败';
        echo '错误代码是',$v['error'],'<br />';
        continue;
    }

    // 移动
    if(move_uploaded_file($v['tmp_name'],$path)) {
        echo $k,'上传成功,<br />';
    } else {
        echo 'FAIL';
    }
}






