-- 
-- 初始化数据sql
--

-- 添加默认管理员，密码为：123456
insert u_admin (id,admin_name,passwd) values (1,'admin','14e1b600b1fd579f47433b88e8d85291');

-- 添加site_config默认值
insert u_site_config (name,value) values ('title','krpano100');

-- 增加默认用户级别
insert u_user_level (id,level_name) values (1,'注册会员');