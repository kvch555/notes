生活中的常识: 记账.
账:就是数据/信息,
记账-->就是储存数据/信息

生活中,账一般记在哪儿呢?
比如:账本上, 门上,墙上.日历上.

问上:10/12,老孙头借豆种50斤


无论记在哪儿: 记录的都是信息, 变化的只是信息的载体.

随着现代社会数据的急剧增多,我们用更高效的记录信息的方式.

![](./image/img01.png)  

来一个班级学生档案
姓名,年龄,家乡         
![](./image/img02.png)   
60个学生,就需要60个纸片, 而且这60个纸片,上面字有重复的. 姓名/年龄/家乡
信息有冗余,想个办法更让信息更有条理.
<table>
	<tr>
		<th>姓名</th>
		<th>年龄</th>
		<th>家乡</th>
	</tr>
	<tr>
		<td>张三</td>
		<td>22</td>
		<td>怀柔</td>
	</tr>
	<tr>
		<td>李四</td>
		<td>24</td>
		<td>密云</td>
	</tr>
</table> 
好处:再多一个学生的话,只需要添加一行数据, 姓名/年龄/家乡不用重写了.  
班级要考试,考试成绩,也要记录起来
<table>
	<tr>
		<th>姓名</th>
		<th>科目</th>
		<th>成绩</th>
	</tr>
	<tr>
		<td>张三</td>
		<td>语文</td>
		<td>68</td>
	</tr>
	<tr>
		<td>李四</td>
		<td>思想品德</td>
		<td>23</td>
	</tr>
</table> 
现在这一个班级里, 有档案表/成绩表/违纪表/就业登记表.......  
这些表,都是用来管理公益1期班的信息用的.  

因此,这些表,放在一个档案袋里-------档案袋是 数据库  

公益1期有档案袋(库1), 公益2期有档案袋(库2) -----> 交给王大婶子来管理  
王大婶管理着 许多库, 我们想要数据时,找王大婶.  
王大婶子 -->数据库服务器  
![](./image/img04.png)  
一台服务器下有多个库,一个库下有1到多张表, 表有多行多列的数据.  
作为WEB开发程序员, 和表的操作相对多.   

#####数据库服务器是不是mysql呢?
答: 对于数据库存储数据来说,国际上有sql标准.  
如:列类型,sql语法等是有ISO标准的.  
很多软件开发商,遵守sql标准,来开发一套软件,用来储存和管理数据.  
这套软件,就可以称为数据库管理系统.  

就好比说,看网页可以用 firefox,IE,chrome,  
管理数据呢,可以用mysql, oracle,IBM DB2, sqlite, postgresql  
这些软件都能够用来管理数据.  

#####数据库大体上要遵循sql标准,但未必100%遵循.
答:不是的,各厂商的产品可能对sql标准的执行有微小差异.  
比如 mysql就没有全连接 full join, 没有sql server中的 top N这种用法  
就好像,html有w3c标准来约束,但各浏览器也有解析不兼容的地方,但是少数.  

#####为什么要先用mysql来学习?
答:  
1:mysql和linux php,apache,配合紧密,LAMP架构.  
2:mysql开源,免费.  

#####请同学们有时间也可以关注一下postgresql
答:postgresql也是一个开源数据库,而且sql标准执行方面,比mysql要严格.  
Mysql-->卖给->sun-->oracle, 版权开源方面前途未卜.  


安装Mysql,装哪一个版本?  
答:对于软件,尤其是开源软件,不要追求最新的版本.  
往往最新的版本,意味着bug多,新用户往往成了"小白鼠"  

开源软件的版本,一般会有beta版,stable版.
我们尽量选用稳定版.

目前,比较稳定的2个版本,mysql5.1, mysql5.5

连接数据库:以命令行连接为例:
注意:如果在命令提示下,出现如下提示:  
<br/>
![](./image/img05.png)
<br/>  
则说明:没有配置环境变量,导致系统找不到mysql.exe.  
解决:  
1:配置环境变量,指定mysql\bin目录  
2:每次进入到mysql\bin目录,再运行mysql  
3: 如何连接服务器
   服务器地址( 可用IP,域名) : 端口(3306)
   用户名
   密码
Mysql -h localhost -uUserName -pPassWd
-h 如果不写,则默认连localhost

如果看到下面的图标  
<br/>
![](./image/img06.png)
<br/>  
则说明连接服务器成功了.


#####澄清一个概念
连接成功后,:命令行黑窗口  和  mysql服务器是什么关系?  
答: 客户端 client --> 服务端 server的关系.  

就好像 你的浏览器与--->163网站的服务器的关系一样.  

还有没有其他mysql客户端?  
答:有,navcat,mysqlfront,phpMyAdmin,SQLyogEnt  
入门最基本语句  

当连上服务器后,我们首先面对的是?  
答:是库,库有1个或多个,因此我们要想对表/行做操作的话,得先选库.  

查看一下所有的库,怎么办?
Mysql>Show databases;

#####选库语句: Use 库名  
<br/>
![](./image/img07.png)
<br/>  
#####创建一个数据库: create database 数据库名 [charset 字符集]
<br/>
![](./image/img08.png)
<br/>  
#####删除一个数据库: drop database 数据库名;
<br/>
![](./image/img09.png)
<br/>  
#####把数据库改改名?
Mysql中,表/列可以改名,database不能改名.  
phpMyAdmin似乎有这功能? 他是建新库,把所有表复制到新库,再删旧库完成的.


当选了库之后,我们面对的是表
#####查看库下面的所有表: show  tables;

先给大家提供一个简单的建表语句,供练习用
<pre>
create table stu (
snum int,
sname varchar(10)
)engine myisam charset utf8;
/// engine是指表引擎,和性能特点相关,此处先照抄.
</pre>
#####删除表: drop table stu;


#####修改表名:  
<br/>
![](./image/img10.png)  
<br/>
#####清空表数据: truncate 表名
<br/>
![](./image/img11.png)
<br/>  

#####Truncate和delete是有区别的,
<pre>
在于 truncate相当于删表再重建一张同样结构的表,操作后得到一张全新表.
而delete是从删除所有的层面来操作的.
Trucate相当于把旧的学籍表扔了重画一张,
Delete相当于用橡皮把学籍表的数据库擦掉.
如果决定全清空的下,truncate速度更快一些.
</pre>


查看表结构
答: desc tableName; //查看表结构   
<table>
	<tr>
		<td width="100">Id</td>
		<td width="100">title</td>
	</tr>
</table>  

####12: 解决字符集问题:  
默认建表一般用utf8, 而我们在windows下窗口是GBK的,
因此,需要声明字符集.
<pre>
Set names gbk;
</pre>

> 发现的1小问题   
> 语句打错以后应该退出本语句,再继续打新语句.也可以打\c,退出本语句.

#####如何破解数据库的密码:
<pre>
1:通过任务管理器或者服务管理,关掉mysqld(服务进程)
2:通过命令行+特殊参数开启mysqld
Mysqld --skip-grant-tables
3:此时,mysqld服务进程已经打开,并且,不需要权限检查.
4:mysql -uroot  无密码登陆服务器.
5: 修改权限表
  A: use mysql;
  B:update user set Password = password('11111') where User = 'root';
  C:flush privileges;

6:通过任务管理器,或服务管理,关掉mysqld服务进程.
7:再次通过服务管理,打开mysql服务.
即可用修改后的新密码登陆.
</pre>

#####增删改查基本语法学习

增: insert 
Insert 3问:   
1. 插入哪张表?   
2. 插入哪几列?  
3. 这几列分别插入什么值?  
<pre>
Insert into TableName
(列1,列2.... 列n)
Values
(值1,值2,....值n)
</pre>
> 值 与 列,按顺序,一一对应


> 特殊: insert语句 允不允许不写列名
> 答: 允许.  
> 如果没有声明列明,则默认插入所有列.  
> 因此,值应该与全部列,按顺序一一对应.  

#####例:建一张工资登记表  
<br/>
![](./image/img12.png)
<br/>  
2:插入部分列  
<br/>
![](./image/img13.png)
<br/>  
3:插入所有列  
<br/>
![](./image/img14.png)
<br/>  
> 注:文中的set names gbk;是为了告诉服务器,客户端用的GBK编码,防止乱码.  

4:插入所有的列的简单写法. 
<br/>  
![](./image/img15.png)
<br/> 

####改: Update 语句 
Update 4问  
改哪张表?  
改哪几列的值?  
分别改为什么值?  
在哪些行生效?  

语法:
<pre>
Update 表名 
Set 
列1 = 新值 1,
列2 = 新值2,
列n = 新值n.....
Where  expr
</pre>
例:  
<br/>  
![](./image/img16.png)
<br/>   
####删除: delete
Delete 2问  
从哪张表删除数据?  
要删除哪些行?  

语法:
<pre>
Delete from 表名 where  expr
</pre>

例:
<br/>  
![](./image/img17.png)
<br/>  

####查: select 
查询3问  
1:查哪张表的数据?  
2:查哪些列的数据?  
3:查哪些行的数据?  

语法:
<pre>
Select 列1, 列2, 列3,...列n
From 表名
Where expr;
</pre>
<br/>
![](./image/img18.png)
<br/>  
> 注: 如果取一张表的所有列, 可以用 * 代替所有列

<br/>
![](./image/img19.png)
<br/>  

####怎么建表?
以在A4纸上建表为例,  
<br/>
![](./image/img20.png)
<br/>   
分析:我们只要把第一行,表头建好了,这张表也就完成了.  
至于下面的001,张三,这不是表的概念,而是表中储存的数据.  

其实,建表过程,就是一个画表头的过程,  
从术语上讲,这张表有5个列,  
建表的过程,就是一个 声明字段 过程  


#####那么建表和列类型又有什么关系呢?
分析: 再看上面的表,A4纸是数据的存储空间,而A4的大小是有限的.  
请问:你准备给学号留多宽? 给姓名留多宽? 自我介绍又留多宽?  

自然的, 姓名如果留的过宽,比如20个字都能存,但是一般人的姓名,就三四字---浪费了.  
如果留的过窄,导致存不下,更有问题.  

对应的,A4纸空间有限,硬盘空间也有限,  
我们建列时,自然想的是------能够容纳放置的内容,但是又不浪费.  

> 存储同样的数据,不同的列类型,所占据的空间和效率是不一样的--这就是我们建表前要前列类型的意义.  
> 所以---重点学列类型的存储范围与占据的字节关系.

####列类型学习
mysql三大列类型  
数值型  
#####整型
<pre>
Tinyint/ smallint/ mediumint/int/ bigint(M) unsigned zerofill
</pre>
整型系列所占字节与存储范围的关系.  
定性: 占字节越多,存储范围越大.  
下图: 是具体的数字分析  
<pre>
Tinyint 1个字节 8个位  0 - 2^8-1  ,  0-255
                -2^7 ----> +2^7-1


分析:
Smallint 2个字节 , 16位  0----2^16-1 = 65535
                -2^15 ---> +2^15-1, -32768 -> 32767

一般而言,设某类型 N字节
N字节 , 8N位.
0 ----> 2^8N-1

-2^(8N-1)  ---> +2^(8N-1) -1; 

对于int型 : 占的字节越多,存储的范围也越大.
</pre>
<br/>
![](./image/img21.png)
<br/>    
整型系统的可选参数 : XXint(M)  unsigned zerofill
<pre>
例: age tinyint(4) unsigned ,或者  stunum smallint(6) zerofill;
Unsigned: 代表此列为无符号类型, 会影响到列的存储范围. (范围从0开始)
(不加unsinged, 则该列默认是有符号类型,范围从负数开始)



Zerofill: 代表0填充, 即: 如果该数字不足参数M位, 则自动补0, 补够M位.
1: 如果没有zerofill属性, 单独的参数M,没有任何意义.
2:如果设置某列为zerofill,则该列已经默认为 unsigned,无符号类型.
</pre>

#####小数型
<pre>
Float(M,D),decimal(M,D)  
M叫"精度" ---->代表"总位数",而D是"标度",代表小数位.(小数右边的位数)  


浮点数占多大的空间呢  
答：　float　能存10＾３８　，10^-38  
如果M<=24, 点4个字节,否则占8字节  

用来表示数据中的小数,除了float---浮点.  
还有一种叫定点decimal,定点是把整数部分, 和小数部分,分开存储的.  
比float精确,他的长度是变化的.  

空间上的区别:  
Float(M,D), M<=24, 4个字节, 24 <M <=53, 8个字节
Decimal () ,变长字节.

区别: decimal比float精度更高, 适合存储货币等要求精确的数字,
</pre>
见下例:  
<br/>
![](./image/img22.png)
<br/>   
#####字符串型 
Char(M)  
Varchar(M)  
Text 文本类型  

#####日期时间类型
Date 日期  
Time 时间  
Datetime 时间时间类型  
Year 年类型  



#####Mysql 字符串类型
Char 定长类型  
Char(M)  , M 代表宽度, 0<=M<=255之间  
例:Char(10)  ,则能输入10个字符.  

Varchar 变长类型  
Varchar(M), M代表宽度, 0<=M<=65535(以ascii字符为例,utf822000左右)  

类型  
<br/>
![](./image/img23.png)
<br/>   
0000000000  
00\0\0\0\0\0 (char型,如果不够M个字符,内部用空格补齐,取出时再把右侧空格删掉)    
注:这意味着,如果右侧本身有空格,将会丢失.  

Varchar(10)  
[2]张三  
[3]二麻子  
[4]司马相如  

Char(8)  
00000000  
'Hello   '  
'hello '  
Char(M)如何占据M个字符宽度?  
答: 如果实际存储内容不足M个,则后面加空格补齐.  
取出来的时候, 再把后面的空格去掉.(所以,如果内容最后有空格,将会被清除).  


速度上: 定长速度快些  

注意: char(M),varchar(M)限制的是字符,不是字节.  
即 char(2) charset utf8, 能存2个utf8字符. 比如'中国'char与varchar型的选择原则:  
1:空间利用效率, 四字成语表, char(4),   
个人简介,微博140字, varchar(140)  
2:速度  
用户名: char  


Char 与 varchar相关实验   
<br/>
![](./image/img24.png)
<br/>    

Text : 文本类型,可以存比较大的文本段,搜索速度稍慢.  
<pre>
因此,如果不是特别大的内容,建议用char,varchar来代替.  
Text 不用加默认值 (加了也没用).  
</pre>

Blob,是二进制类型,用来存储图像,音频等二进制信息. 
<pre>
意义: 2进制,0-255都有可能出现.   
Blob在于防止因为字符集的问题,导致信息丢失.   
比如:一张图片中有0xFF字节, 这个在ascii字符集认为非法,在入库的时候,被过滤了.  
</pre>

日期时间类型 
<pre>
Year 年(1字节)    95/1995,  [1901-2155],  
在insert时,可以简写年的后2位,但是不推荐这样.  
[00-69] +2000  
[70-99] + 1900,     
即: 填2位,表示 1970 - 2069  
</pre>

Date 日期  1998-12-31
<pre>
范围: 1000/01/01 ,9999/12/31
</pre>  

Time 时间  13:56:23
<pre>
范围: -838:59:59 -->838:59:59
</pre>

datetime 时期时间  1998-12-31 13:56:23
<pre>
范围: 1000/01//01 00:00:00  ---> 9999:12:31 23:59:59
</pre>

timestamp
<pre>
时间戳: 
是1970-01-01 00:00:00 到当前的秒数. 
一般存注册时间,商品发布时间等,并不是用datetime存储,而是用时间戳.
因为datetime虽然直观,但计算不便.
</pre>


建表案例,某高端白领私密社交网站

定长与变长分离
常用与不常用列分离
<br/>
![](./image/img25.png)
<br/>
![](./image/img26.png)
<br/>
这张表不够好,可以优化  
分析:这张表除了username/intro列之外,每一列都是定长的.  
我们不妨让其所有列,都定长,可以极大提高查询速度.  
<br/>
![](./image/img27.png)
<br/>
Username char(10) 是会造成空间的浪费,但是提高的速度,值.  
Intro char(1500) 却浪费的太多了,另一方面,人的简介,一旦注册完,改的频率也并不高.  
我们可以把 intro列单独拿出来,另放一张表里.
<br/>
![](./image/img28.png)
<br/>  
在开发中,会员的信息优化往往是 把频繁用到的信息,优先考虑效率,存储到一张表中.  
不常用的信息和比较占据空间的信息,优先考虑空间占用,存储到辅表中.  
建表语法  
<pre>
所谓建表就是一个声明列的过程.
create table 表名 (
列名1 列类型1  列1参数,
列名2 列类型2 列2参数,
....
...
列名n 列类型n 列n参数
)engine myisam/innodb/bdb charset utf8/gbk/latin1...
</pre>


####修改表的语法
一张表,创建完毕,有了N列.  
之后还有可能要增加或删除或修改列   

Alter table 表名 add 列名称 列类型 列参数;  [加的列在表的最后]
例: alter table m1 add birth date not null default '0000-00-00';
Alter table 表名 add 列名称 列类型 列参数 after 某列 [把新列加在某列后]
例: alter table m1 add gender char(1) not null default '' after username;

Alter table 表名 add 列名称 列类型 列参数 first [把新列加在最前面]
例: alter table m1 add pid int not null default 0 first;


删除列:
Alter table 表名  drop 列名


修改列类型:
<pre>
Alter table 表名 modify 列名 新类型  新参数
例:alter table m1 modify gender char(4) not null default '';
</pre>

修改列名及列类型
<pre>
Alter table 表名 change 旧列名 新列名 新类型 新参数
例:alter table m1 change id uid int unsigned;
</pre>

> 作业: 让我们建一个电子商城, 如何来设计商品表.  
> 再把商城表的字段,一个个删掉,再一个个加上.  
> 并穿插改列操作.  

#####??如果列类型改变了,导致数据存不下怎么办?
比如,int 改成smallint列.   如果不匹配,数据将会丢失,或者在mysql的strict_mode下,修改不了.

#####为什么建表时,加not null default '' / default 0
答:不想让表中出现null值.

#####为什么不想要的null的值
答:
不好比较,null是一种类型,比较时,只能用专门的is null 和 is not null来比较.  
碰到运算符,一律返回null
效率不高,影响提高索引效果.  

因此,我们往往,在建表时 not null default ''/0  

####Select 5种子句详解
#####1:where子句  条件查询
<pre>
查出一张表的所有行,所有列
Select * from tableName;

查出一张表的所有行,部分列.
Select id,name,salary from tableName

查出一张表的所有列,部分行(id >=2 的行)
Select * from tableName where id >=2;
</pre>

#####模糊查询:
<pre>
案例:想查找"诺基亚"开头的所有商品
Like->像

% --> 通配任意字符
'_' --> 单个字符
</pre>
#####查询模型(重要)
列就是变量,在每一行上,列的值都在变化.  
Where条件是表达式,在哪一行上表达式为真,  
哪一行就取出来  
比如下面的条件, shop_price在不同的行,有不同的值.  
在哪一行时,shop_price>5000如果为真,则这行取出来.  
<br/>
![](./image/img29.png)
<br/>  
查询结果集--在结构上可以当成表看
<pre>
select count(*) from 表名, 查询的就是绝对的行数,哪怕某一行所有字段全为NULL,也计算在内.
而select couht(列名) from 表名,
查询的是该列不为null的所有行的行数.

用count(*),count(1),谁好呢?
其实,对于myisam引擎的表,没有区别的.
这种引擎内部有一计数器在维护着行数.
Innodb的表,用count(*)直接读行数,效率很低,因为innodb真的要去数一遍.
</pre>

#####Group
<br/>
![](./image/img30.png)
<br/>  
![](./image/img31.png)
<br/>  
> 思考:  
> 全班同学排队,  
> 校长对老师说: 统计班级同学的姓名和平均年龄[返回1行]  
> 语义上的疑问: 平均年龄好算,只有一个结果,但是,把谁的姓名和平均年龄放在一块返回呢?  
> 语义上就解释不通,但是mysql中却偏偏可以取姓名,而且是把队伍的第一位同学的姓名返回.  
> 这是mysql的一个特点,出于可移植性和规范性,不推荐这么写.  
> 严格的讲,以group by  a,b,c 为列,则select的列,只能在a,b,c里选择,语义上才没有矛盾.  

#####having

#####Order by 
<pre>
当最终结果集出来后,可以进行排序.
排序的语法:
Order by 结果集中的列名 desc/asc

例:order by shop_price desc ,按价格降序排列
Order by add_time asc ,按发布时间升序排列.

多字段排序也很容易
Order by 列1 desc/asc , 列2 desc/asc  , 列3 desc,asc
</pre>

#####Limit 在语句的最后, 起到限制条目的作用
<pre>
Limit [offset,] N
Offset: 偏移量,----跳过几行
N: 取出条目
Offset,如果不写,则相当于  limit 0,N
</pre>


> 思考: 取出每个栏目下的最新的商品???  
> 20分钟,1个select语句实现, 

良好的理解模型  
<pre>
Where 表达式  ,把表达式放在行中,看表达式是否为真
列: 理解成变量,可以运算
取出结果: 可以理解成一张临时表
子查询  
Where型子查询: 指把内层查询的结果作为外层查询的比较条件.
典型题:查询最大商品,最贵商品

Where型子查询  
如果 where 列=(内层sql),则内层sql返回的必是单行单列,单个值
如果 where 列 in (内层sql), 则内层sql只返回单列,可以多行.

From 型子查询: 把内层的查询结果当成临时表,供外层sql再次查询
典型题:查询每个栏目下的最新/最贵商品
Exists子查询 : 把外层的查询结果,拿到内层,看内层的查询是否成立.
典型题: 查询有商品的栏目
</pre>

集合(set)的知识
高中时学过的集合

集合的特点: 无序性,下面两个集合是等价的
<br/>  
![](./image/img32.png)
<br/>  
集合的特点:唯一性  
下面这个集合是一个错误的集合,没有满足唯一性.  
<br/>  
![](./image/img33.png)
<br/>  
集合的运算: 求并集,求交集,笛卡尔积(相乘)  
笛卡尔积,即集合的元素,做两两的组合.
<br/>  
![](./image/img34.png)
<br/> 
集合A*B = 什么?   
<br/>  
![](./image/img35.png)
<br/>   
一道数学题:  
集合A 有 M个元素  
集合B, 有N个元素  
A*B = C   
C 有多少个元素? 答: M*N行  
表与集合的关系  

一张表就是一个集合  
每一行就是一个元素  

疑问:集合不能重复,但我有可能两行数据完全一样  
答:mysql内部每一行,还有一个rowid.  


两表做全相乘  
从行的角度来看: 就是2表每一行,两两组合.  
从列的角度来看: 结果集中的列,是两表的列名的相加.  
<br/>  
![](./image/img36.png)
<br/> 
<br/>  
![](./image/img37.png)
<br/>   
作全相乘时,也可以有针对性的取出某几列.  
左连接的语法:  
<pre>
假设A表在左,不动,B表在A表的右边滑动.  
A表与B表通过一个关系来筛选B表的行.  
语法:
A left join B on 条件  条件为真,则B表对应的行,取出  

A left join B on 条件   
这一块,形成的也是一个结果集,可以看成一张表 设为C
既如此,可以对C表作查询,自然where,group ,having ,order by ,limit 照常使用

问:C表的可以查询的列有哪些列?
答: A B的列都可以查
</pre>






/*
左连接 右连接,内连接的区别在哪儿?

*/


同学见面会:
<br/>  
![](./image/img38.png)
<br/> 
<br/>  
![](./image/img39.png)
<br/>    

这种情况就是  男生  left join 女生.  

主持人说:所有女生请上舞台,有配偶的带着, 没有的,写个NULL补齐.  
Select 女生 left join 男生 on 条件  


左右连接是可以互换的  
A left join B, 就等价于 B right join A  

注意：既然左右连接可以互换，尽量用左连接，出于移植时兼容性方面的考虑．  

内连接的特点  
主持人说：　所有有配偶的男生／女生，走到舞台上来  
这种情况下：　屌丝和宝钗都出局  