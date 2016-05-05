<?php
/****
燕十八 公益PHP讲堂

论  坛: http://www.zixue.it
微  博: http://weibo.com/Yshiba
YY频道: 88354001
****/


/***
====笔记部分====

递归
1: 不求理解,先会写

2: 再去理解
***/


/*
题目:
写一个sum($n)
求1->N的和
*/

/*
function sum($n) {
    for($sum=0,$i=1;$i<=$n;$i++) {
        $sum += $i;
    }

    return $sum;
}

echo sum(100),'<br />';
*/

/*
function sum($n) {
    return array_sum((range(1,$n)));
}

echo sum(100),'<br />';
*/



/***
老师让我计算1到100的和,我不会.
但是我偏我会. [无赖法写递归函数]

问: sum(100) == ?
答: sum(99) + 100;

问: sum(99) == ?
答: sum(98) + 99;

....
....


问: sum(2) == ?
答: sum(1) + 2;


问:sum(1) == ?
答: 真会,!


sum(100)->

sum(99) + 100 
sum(98) + 99 + 100;
sum(97) +98 +99 +100;
...
...
...
sum(1) + 2 + 3....+ 100;

= 1 + 2 + 3 .... + 100;
***/



function sum($n) {
    if($n>1) {
        return sum($n-1) + $n;
    } else {
        return 1;
    }
}



echo sum(100);




/*
用无赖法打印出级联目录来?
*/

