<?php
/****
燕十八 公益PHP讲堂

论  坛: http://www.zixue.it
微  博: http://weibo.com/Yshiba
YY频道: 88354001
****/


/***
====笔记部分====
cookie来做浏览历史
***/

$uri = $_SERVER['REQUEST_URI'];


/*
把uri放在cookie里

setcookie('history',array($uri));

这是错误写法,因为cookie只能存储字符串,数字,不能存储数组,资源这样的多维数据

因此$uri要放在数组里,但数组要转化成字符串
*/


if(!isset($_COOKIE['history'])) { // 第1次
    $his[] = $uri;
} else {  // 已经是第N次访问了
    $his = explode('|',$_COOKIE['history']);
    array_unshift($his,$uri);
    $his = array_unique($his);

    if(count($his) > 10) {
        array_pop($his);
    }

}


setcookie('history',implode('|',$his));



$id = isset($_GET['id'])?$_GET['id']:0;

?>

<p>
    <a href="07.php?id=<?php echo $id-1; ?>">上一页</a> <br />
</p>

<p>
    <a href="07.php?id=<?php echo $id+1; ?>">下一页</a> <br />
</p>



<ul>
    <li>浏览历史</li>
    <?php foreach($his as $v) { ?>
    <li><?php echo $v; ?></li>
    <?php } ?>
</ul>


