<?php
//��̨����ļ�

define('IN_T',true);
require 'source/include/init.php';

//����ģ��
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