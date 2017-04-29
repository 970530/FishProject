<?php
/*
 * Krpano100 ucenter配置文件
 * ============================================================================
 * 技术支持：2015-2099 成都世纪川翔科技有限公司
 * 官网地址: http://www.krpano100.com
 * ----------------------------------------------------------------------------
 * $Author: liyuanzhang 932625974#qq.com $
 * $Id: config_ucenter_default.php 28028 2016-02-19Z liyuanzhang $
*/
if(!defined('IN_T'))
{
 die('hacking attempt');
}

define('UC_CONNECT', 'mysql');
define('UC_DBHOST', 'localhost');
define('UC_DBUSER', 'root');
define('UC_DBPW', '');
define('UC_DBNAME', 'ultrax');
define('UC_DBCHARSET', 'utf8');
define('UC_DBTABLEPRE', '`ultrax`.pre_ucenter_');
define('UC_DBCONNECT', '0');
define('UC_KEY', '123123123');
define('UC_API', 'http://localhost/dx/uc_server');
define('UC_CHARSET', 'utf-8');
define('UC_IP', '');
define('UC_APPID', '3');
define('UC_PPP', '20');


//定义错误码常量
define('SUCCESS', 1);  //执行成功
define('ERROR_CHECK_FAILURE', 1001);   //签名验证错误
define('ERROR_METHOD_NO_EXISTS', 1003);   //方法不存在
define('ERROR_USER_NO', 1006);   //用户不存在
define('ERROR_NO_LOGIN',1007);   //用户未登录
define('ERROR_OTHER', 1099);  //其他错误
?>