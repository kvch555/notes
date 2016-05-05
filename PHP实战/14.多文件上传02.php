<?php
/****
燕十八 公益PHP讲堂

论  坛: http://www.zixue.it
微  博: http://weibo.com/Yshiba
YY频道: 88354001
****/


print_r($_FILES);

/*
注意,多文件上传时,
如果name的名称是数组格式,
如 pic[],pic[]

形成的数组与 name=a,name=b这种形式不同
注意这个问题
Array
(
    [pic] => Array
        (
            [name] => Array
                (
                    [0] => Winter.jpg
                    [1] => Water lilies.jpg
                    [2] => Blue hills.jpg
                )

            [type] => Array
                (
                    [0] => image/jpeg
                    [1] => image/jpeg
                    [2] => image/jpeg
                )

            [tmp_name] => Array
                (
                    [0] => D:\tmp\php709.tmp
                    [1] => D:\tmp\php70A.tmp
                    [2] => D:\tmp\php70B.tmp
                )

            [error] => Array
                (
                    [0] => 0
                    [1] => 0
                    [2] => 0
                )

            [size] => Array
                (
                    [0] => 105542
                    [1] => 83794
                    [2] => 28521
                )

        )

)

*/



