<?php
/****
燕十八 公益PHP讲堂

论  坛: http://www.zixue.it
微  博: http://weibo.com/Yshiba
YY频道: 88354001
****/


/***
====笔记部分====
写个函数模仿tree命令
***/

/*
├─

*/

function recdir($path,$lev=1) {
    $dh = opendir($path);
    
    while(($row = readdir($dh)) !== false) {
        if($row == '.' || $row == '..') {
            continue;
        }

        echo '├',str_repeat('─',$lev),$row,'<br />';
        
        // 如果$row还是目录 怎么办?              
        if(is_dir($path . '/' .$row)) {
            recdir($path . '/' .$row,$lev+1);
        }
    }
    
    closedir($dh);

}


recdir('./',1);



/***
作业:
级联创建目录
按日期创建目录



array(

1=>array('安徽',0),
2=>array('北京',0),
3=>array('淮北',1),
4=>array('濉溪县',3)
)

array('淮北',1)
其中 淮北是地名, 1是其父地区.

利用递归,把地区的上下级关系 层次的打印出来!!!!

----无限级分类

***/



