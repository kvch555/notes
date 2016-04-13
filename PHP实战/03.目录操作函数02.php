<?php
/****
燕十八 公益PHP讲堂

论  坛: http://www.zixue.it
微  博: http://weibo.com/Yshiba
YY频道: 88354001
****/




// 创建和删除目录
/*
这个例子中,第一次创建目录成功,第二次失败
因为 目录已经存在了

foreach(array('a','b','c','d') as $v) {
    $path = './misc/' . $v;
    if(mkdir($path)) {
        echo $path,'创建成功';
    } else {
        echo $path,'创建失败';
    }

    echo '<br />';
}
*/ 


// 先判断一下比较稳妥,如下
/*
foreach(array('a','b','c','d') as $v) {
    $path = './misc/' . $v;
    
    if(file_exists($path) && is_dir($path)) {
        echo $path,'已经存在<br />';
        continue;
    }

    if(mkdir($path)) {
        echo $path,'创建成功';
    } else {
        echo $path,'创建失败';
    } 


    echo '<br />';
}
*/


foreach(array('a','c','e') as $v) {
    $path = './misc/' . $v;

    if(file_exists($path) && is_dir($path)) {
        if(rmdir($path)) {
            echo $path,'删除成功<br />';
        } else {
            echo $path,'删除失败<br />';
        }
        
    } else {
        echo $path,'目录不存在<br />';
    }
}


/*
注意  rmdir只能删非空目录.
思考: 如果一个目录非空,该如何删除?



第2:
一个目录下有众多子目录/子目录 ,及/子文件
如何把目录下所有的子目录/子目录
子文件层次打印出来

比如
./a
    ./mp3/hongkong/七里香.mp3
    ./movie/十月围城.mkv
    b.txt
如果打印出目录下的层次结构(即 子孙内容全打印出来)

作业:自己写一个函数,仿tree命令
*/

