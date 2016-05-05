<?php
/****
燕十八 公益PHP讲堂

论  坛: http://www.zixue.it
微  博: http://weibo.com/Yshiba
YY频道: 88354001
****/


/***
====笔记部分====
用迭代法找子孙树
***/

$area = array(
array('id'=>1,'name'=>'安徽','parent'=>0),
array('id'=>2,'name'=>'海淀','parent'=>7),
array('id'=>3,'name'=>'濉溪县','parent'=>5),
array('id'=>4,'name'=>'昌平','parent'=>7),
array('id'=>5,'name'=>'淮北','parent'=>1),
array('id'=>6,'name'=>'朝阳','parent'=>7),
array('id'=>7,'name'=>'北京','parent'=>0),
array('id'=>8,'name'=>'上地','parent'=>2)
);




function subtree($arr,$parent=0) {
    $task = array($parent); // 任务表
    $tree = array(); // 地区表

    while(!empty($task)) {
        $flag = false;
        
        foreach($arr as $k=>$v) {

            if($v['parent'] == $parent) {
                $tree[] = $v;
                array_push($task,$v['id']); // 把最新的地区id入任务栈
                $parent = $v['id'];
                unset($arr[$k]); // 把找到单元unset掉

                $flag = true; //说明找到了子栏目

            } 
        }

        if($flag == false) {
            array_pop($task);
            $parent = end($task);
        }
        
        //print_r($task);
    }

    return $tree;
}


print_r(subtree($area,0));





