#msyql 预处理防止sql注入

#sql注入会显示所有数据
select * from haha where id=1 or 1;

#用mysql预处理
prepare getdo from 'select * from haha where id=?';
set @id=5;
execute getdo using @id;

#防止sql注入,只会显示id=1的数据
prepare getdo from 'select * from haha where id=?';
set @id=5 or 1;
execute getdo using @id;