<?php
//��̨����ļ�
define('IN_T',true);
require 'source/include/init.php';

//����ģ��
$module = isset($_REQUEST['module']) ? Common::sfilter($_REQUEST['module']) : 'search';

//δ��¼
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