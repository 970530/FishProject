<?php /* Smarty version Smarty-3.1.7, created on 2017-04-15 11:06:34
         compiled from "plugin\project_download\template\edit.lbi" */ ?>
<?php /*%%SmartyHeaderCode:2487058f18e3a2b1c38-85179092%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '857275fd3ac4d5756f5f2c162b6d2cb456749938' => 
    array (
      0 => 'plugin\\project_download\\template\\edit.lbi',
      1 => 1482648395,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2487058f18e3a2b1c38-85179092',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_58f18e3a2b5ab',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f18e3a2b5ab')) {function content_58f18e3a2b5ab($_smarty_tpl) {?> <button type="button" class="btn btn-custom-logo"  data-toggle="tooltip" <?php if ($_smarty_tpl->tpl_vars['v']->value['level_enable']==0){?>title="您当前没有该权限"<?php }else{ ?>title="下载项目到本地浏览" onclick="openProjectDownModal()"<?php }?> >离线下载</button><?php }} ?>