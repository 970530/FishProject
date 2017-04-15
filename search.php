<?php
//后台入口文件
define('IN_T',true);
require 'source/include/init.php';

//请求模块
$module = isset($_REQUEST['module']) ? Common::sfilter($_REQUEST['module']) : 'search';

//未登录
if($user['pk_user_main']<=0){
   Common::base_header("Location:".$_lang['host']."passport/login?redirectUrl=/member/$module\n");
}
if(file_exists($module_file= 'module/search/'.$module.'.php')){
   require $module_file;
   $tp->assign('module',$module);
   $tp->display($_lang['moban'].'/search.tpl');
}
else{
   die('hacking attempt');
}
?>