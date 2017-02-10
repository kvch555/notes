<?php 
/****
布尔教育 高端PHP培训
培  训: http://www.itbool.com
论  坛: http://www.zixue.it
****/

$arr = array(1,2,3);

//print_r($arr);

echo json_encode($arr);

$arr = array('name'=>'lucy','area'=>'bj');
echo json_encode($arr);

class Dog {
    public $leg = 4;
    public $color = 'yellow';
}

echo json_encode(new Dog());


$pythondata = '{"leg":4,"color":"yellow"}';
print_r(json_decode($pythondata , true));



$tianqi = '{"error":0,"status":"success","date":"2015-11-24","results":[{"currentCity":"北京","pm25":"41","index":[{"title":"穿衣","zs":"寒冷","tipt":"穿衣指数","des":"天气寒冷，建议着厚羽绒服、毛皮大衣加厚毛衣等隆冬服装。年老体弱者尤其要注意保暖防冻。"},{"title":"洗车","zs":"不宜","tipt":"洗车指数","des":"不宜洗车，未来24小时内有雪，如果在此期间洗车，雪水和路上的泥水可能会再次弄脏您的爱车。"},{"title":"旅游","zs":"较适宜","tipt":"旅游指数","des":"天气稍冷，风比较小，预报有降雪，但雪量不大，或许会为您的行程增加些许情调。若出游可选择雪上项目。"},{"title":"感冒","zs":"易发","tipt":"感冒指数","des":"昼夜温差很大，易发生感冒，请注意适当增减衣服，加强自我防护避免感冒。"},{"title":"运动","zs":"较不宜","tipt":"运动指数","des":"有降雪，推荐您在室内进行低强度运动；若坚持户外运动，请选择合适运动并注意保暖。"},{"title":"紫外线强度","zs":"最弱","tipt":"紫外线强度指数","des":"属弱紫外线辐射天气，无需特别防护。若长期在户外，建议涂擦SPF在8-12之间的防晒护肤品。"}],"weather_data":[{"date":"周二 11月24日 (实时：-4℃)","dayPictureUrl":"http://api.map.baidu.com/images/weather/day/xiaoxue.png","nightPictureUrl":"http://api.map.baidu.com/images/weather/night/duoyun.png","weather":"小雪转多云","wind":"微风","temperature":"-2 ~ -8℃"},{"date":"周三","dayPictureUrl":"http://api.map.baidu.com/images/weather/day/duoyun.png","nightPictureUrl":"http://api.map.baidu.com/images/weather/night/qing.png","weather":"多云转晴","wind":"北风4-5级","temperature":"-1 ~ -10℃"},{"date":"周四","dayPictureUrl":"http://api.map.baidu.com/images/weather/day/qing.png","nightPictureUrl":"http://api.map.baidu.com/images/weather/night/qing.png","weather":"晴","wind":"北风3-4级","temperature":"0 ~ -8℃"},{"date":"周五","dayPictureUrl":"http://api.map.baidu.com/images/weather/day/qing.png","nightPictureUrl":"http://api.map.baidu.com/images/weather/night/qing.png","weather":"晴","wind":"微风","temperature":"1 ~ -6℃"}]}]}';
print_r(json_decode($tianqi,true));


?>