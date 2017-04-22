<?php
//后台入口文件

define('IN_T',true);
require 'source/include/init.php';

//请求模块
$module = isset($_REQUEST['module']) ? Common::sfilter($_REQUEST['module']) : 'author';

if(file_exists($module_file= 'module/author/'.$module.'.php')){
   require $module_file;
   $tp->assign('module',$module);
   $tp->display($_lang['moban'].'/author.tpl');
}
else{
   die('hacking attempt');
}
?>