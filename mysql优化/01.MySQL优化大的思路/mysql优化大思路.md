Q: 为什么别人问你MySQL优化的知识 总是没有底气.  
A: 因为你只是回答一些大而化之的调优原则,   
比如:”建立合理索引”(什么样的索引合理?)  
“分表分库”(用什么策略分表分库?)  
“主从分离”(用什么中间件?)  
并没有从细化到定量的层面去分析.  
如qps提高了%N? 有没有减少文件排序?语句的扫描行数减少了多少?  

没有大量的数据供测试,一般在学习环境中,只是手工添加几百上万条数据,  
数据量小,看不出语句之间的明确区别.  

Q: 如何提高MySQL的性能?  
A: 需要优化,则说明效率不够理想.   
因此我们首先要做的,不是优化,而是---诊断.   
治病的前提,是诊病,找出瓶颈所在. CPU,内存,IO? 峰值,单条语句?   

准备环境  
1、安装确保以下系统相关库文件  
<pre>
gcc gcc-c++ autoconf automake zlib* libxml* ncurses-devel libmcrypt* libtool*(libtool-ltdl-devel*)
# yum –y install gcc gcc-c++ autoconf automake zlib* libxml* ncurses-devel libmcrypt* libtool* cmake\
</pre>
2、    建立mysql安装目录及数据存放目录
<pre>
# mkdir  /usr/local/mysql
# mkdir  -p /data/mysql
</pre>
3、    创建用户和用户组
<pre>
# groupadd mysql
# useradd -g mysql mysql
</pre>
4、    赋予数据存放目录权限
<pre>
# chown mysql.mysql –R /data/mysql
</pre>


二、安装MySQL 5.5.35  
1、    获取解压mysql-5.5.35.tar.gz  
在mysql.com官网或国内镜像下载源码  
<pre>
# wget http://mirrors.sohu.com/mysql/MySQL-5.5/mysql-5.5.35.tar.gz
# tar zxvf mysql-5.5.35.tar.gz
# cd mysql-5.5.35
</pre>
2、    编译mysql-5.5.35
<pre>
# cmake -DCMAKE_INSTALL_PREFIX=/usr/local/mysql \
-DMYSQL_UNIX_ADDR=/tmp/mysqld.sock \
-DDEFAULT_CHARSET=utf8 \
-DDEFAULT_COLLATION=utf8_general_ci \
-DWITH_EXTRA_CHARSETS:STRING=utf8,gbk \
-DWITH_MYISAM_STORAGE_ENGINE=1 \
-DWITH_INNOBASE_STORAGE_ENGINE=1 \
-DWITH_MEMORY_STORAGE_ENGINE=1 \
-DWITH_READLINE=1 \
-DENABLED_LOCAL_INFILE=1 \
-DMYSQL_DATADIR=/data/mysql \
-DMYSQL_USER=mysql \
-DMYSQL_TCP_PORT=3306
# make
# make install
</pre>
3、    复制配置文件
<pre>
# cp support-files/my-medium.cnf /etc/my.cnf
</pre>
4、    初始化数据库
执行前需赋给scripts/mysql_install_db文件执行权限
<pre>
# chmod 755 scripts/mysql_install_db
# scripts/mysql_install_db --user=mysql --basedir=/usr/local/mysql/ \
--datadir=/data/mysql/
注：basedir：mysql安装路径   datadir：数据库文件储存路径
</pre>
5、    设置mysqld的开机启动
<pre>
# cp support-files/mysql.server /etc/init.d/mysql
# chmod 755 /etc/init.d/mysql
# chkconfig mysql on
</pre>
6、    为MySQL配置环境变量
将mysql的bin目录加到PATH中，有利于以后管理和维护，在/etc/profile中加入myslq/bin，同时增加两个别名方便操作：
<pre>
# export PATH=/usr/local/mysql/bin:$PATH
# alias mysql_start="mysqld_safe &"
# alias mysql_stop="mysqladmin –u root -p shutdown"
</pre>
7、    启动mysql服务
<pre>
# /etc/init.d/mysql start
</pre>
启动完成之后用ps -ef |grep mysql 命令查看是否启动
8、    登陆mysql
<pre>
#mysql -uroot -p
</pre>

提示 在自行编译mysql,并连接本地机时,常出现找不到mysqld.sock的错误. 
<pre>
[root@lfqb data]# mysql -uroot
ERROR 2002 (HY000): Can't connect to local MySQL server through socket '/tmp/mysqld.sock' (2)
</pre>
![](/image/img01.png)
错误原因: mysql客户端默认去找 /tmp/mysqld.sock 做连接,而mysqld.sock有可能不在此处.  
比如在 /var/lib/mysql/mysql.sock  
解决:   
1: mysql -S /sock/path 指定真实的路径 
<pre>  
mysql -S /var/lib/mysql/mysql.sock  
</pre>

2: 在/tmp下做一个链接,链接到真实sock文件. 
<pre> 
#  ln /var/lib/mysql/mysql.sock /tmp/mysqld.sock
</pre>
![](/image/img02.png)

3: sock文件在linux环境中连接本地机才能使用,速度比用本机IP要快.
 <pre>你也可以强行指定用IP来连接.</pre>


