<?php
/****
燕十八 公益PHP讲堂

论  坛: http://www.zixue.it
微  博: http://weibo.com/Yshiba
YY频道: 88354001
****/


/***
====笔记部分====

普通验证码

==> 变形为

扭曲验证码

***/



class image {
    public static function code() {
 
        $str = 'abcdefghijkmnpqrstuvwxyzABCDEFGHIJKMNPQRSTUVWXYZ23456789';
        $code = substr(str_shuffle($str),0,4);

        // 2块画布
        $src = imagecreatetruecolor(60,25);
        $dst = imagecreatetruecolor(60,25);

        // 灰色背景
        $sgray = imagecolorallocate($src,200,200,200);
        $dgray = imagecolorallocate($src,200,200,200);

        // 蓝色
        $sblue = imagecolorallocate($src,0,0,255);

        imagefill($src,0,0,$sgray);
        imagefill($dst,0,0,$dgray);


        // 写字
        imagestring($src,5,5,4,$code,$sblue);

        for($i=0;$i<60;$i++) {
            // 根据正弦曲线计算上下波动的posY
            
            $offset = 4; // 最大波动几个像素
            $round = 2; // 扭2个周期,即4PI
            $posY = round(sin($i * $round * 2 * M_PI / 60 ) * $offset); // 根据正弦曲线,计算偏移量

            imagecopy($dst,$src,$i,$posY,$i,0,1,25);
        }

        header('content-type: image/jpeg');
        imagejpeg($dst);

    }

}



image::code();
