<?php
/****
燕十八 公益PHP讲堂

论  坛: http://www.zixue.it
微  博: http://weibo.com/Yshiba
YY频道: 88354001
****/


/***
====笔记部分====
smarty 的应用场景
看如下代码,是刚学习PHP时,常见的写作方式:
即:
php代码连接数据库
php取出数据
php和html混杂输出
***/


?>


<?php
/*
// 模拟取数据库
$conn = mysql_connect();
$sql = select * from ....
*/

$title = '两会召开';
$content = '好会议,好房子,好奶粉';

?>



<?php
// 在比较大的团队中,分工比较细,如下的html代码,是由专门的前端来做的
// PHP人员把html代码加上php代码,形成的动态网页.

// 有一天,需要修改html代码,html代码和PHP混杂在一起,前端不会修改了
// 让PHP程序员来修改,他又不太懂Html代码

// 修改起来就不方便
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
<title><?php echo $title;?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<script type="text/javascript">

</script>

<style type="text/css">
</style>
</head>
    <body>
        <?php echo "<p>",$content,"</p>";?>
    </body>
</html>

