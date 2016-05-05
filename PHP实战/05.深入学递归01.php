<?php
/****
燕十八 公益PHP讲堂

论  坛: http://www.zixue.it
微  博: http://weibo.com/Yshiba
YY频道: 88354001
****/


/***
====笔记部分====
用耍赖法打印级联目录
***/


/*
谁会 递归打印级联目录?

思考:我不会打印级联目录,但是,我会打印一层目录,(这个单子可以接)
答:我会 recdir
*/


function recdir($path) {
    $dh = opendir($path);
    
    while(($row = readdir($dh)) !== false) {
        if($row == '.' || $row == '..') {
            continue;
        }

        echo $row,'<br />';
        
        // 如果$row还是目录 怎么办?              
        if(is_dir($path . '/' .$row)) {
            recdir($path . '/' .$row);
        }
    }
    
    closedir($dh);

}


recdir('./');



