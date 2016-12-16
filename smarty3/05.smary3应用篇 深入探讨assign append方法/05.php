<?php
/****
燕十八 公益PHP讲堂

论  坛: http://www.zixue.it
微  博: http://weibo.com/Yshiba
YY频道: 88354001
****/


/***
====笔记部分====
assign的用法探讨
***/

// 引入smarty
require('../Smarty3/libs/Smarty.class.php');
$smarty = new Smarty();
$smarty->template_dir = './temp';
$smarty->compile_dir = './comp';
$smarty->config_dir = './conf';



/*
    这是smarty模板assign的源码

    如果第1个参数是数组的话, 
    效果是把此数组的每个值,赋到以相应的键为名称的标签上去


    public function assign($tpl_var, $value = null, $nocache = false)
    {
        if (is_array($tpl_var)) {
            foreach ($tpl_var as $_key => $_val) {
                if ($_key != '') {
                    $this->tpl_vars[$_key] = new Smarty_variable($_val, $nocache);
                }
            }
        } else {
            if ($tpl_var != '') {
                $this->tpl_vars[$tpl_var] = new Smarty_variable($value, $nocache);
            }
        }

        return $this;
    }

*/
$user = array('name'=>'刘备','age'=>'28');
$smarty->assign($user);
/*
等于
$smarty->assign('name','刘备');
$smarty->assign('age',''28);
*/



// 连着往某一个标签赋多个值时,我们可以用append, append是附加,追加的意思
$smarty->append('stu','李四'); // 这1步,_tpl_var['stu'][] = '李四';
$smarty->append('stu','王五'); // 这1步,_tpl_var['stu'][] = '王五';
// 也就是,把append到一个标签里变量,都一个数组里



$smarty->assign('arr',array('country'=>array('prov'=>array('city'=>'黑河'))));
$smarty->display('05.html');





/*
smarty赋值时,还能引用赋值

assignByRef('title',$title);
起到的效果是  _tpl_var['title'] = &title; 引用赋值
这个在PHP5以后,意义不大,因为PHP5默认是"写时复制"

$a = 3;
$b = $a;

其实,内存里,$a,$b 还是共用的一份变量值3,
只能当修改$b时,如$b=4;
这时,才强制$a,$b,各用各的变量值.

此处,仅供同学们了解
*/



