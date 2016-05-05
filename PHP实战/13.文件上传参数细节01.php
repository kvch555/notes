<?php
/****
燕十八 公益PHP讲堂

论  坛: http://www.zixue.it
微  博: http://weibo.com/Yshiba
YY频道: 88354001
****/

/*
文件上传的参数详解

$_FILES
Array
(
    [pic] => Array
        (
            [name] => Winter.jpg  // 文件原名
            [type] => image/jpeg  // 文件类型
            [tmp_name] => D:\tmp\php6A2.tmp  // 临时文件路径
            [error] => 0                     // 错误代码 ,0 代表无错
            [size] => 105542                 // 文件的大小,以Byte为单位
        )

)


如果上传出错了,错误代码可能有哪些?
 
其值为 1，上传的文件超过了 php.ini 中 upload_max_filesize 选项限制的值。 

其值为 2，上传文件的大小超过了 HTML 表单中 MAX_FILE_SIZE 选项指定的值。 

其值为 3，文件只有部分被上传。 

其值为 4，没有文件被上传。 

其值为 6，找不到临时文件夹。PHP 4.3.10 和 PHP 5.0.3 引进。 

其值为 7，文件写入失败。PHP 5.1.0 引进。 

*/

