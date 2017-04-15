<?php /* Smarty version Smarty-3.1.7, created on 2017-04-15 11:06:34
         compiled from "plugin\custom_right_button\template\edit.lbi" */ ?>
<?php /*%%SmartyHeaderCode:602758f18e3a2966a0-18831886%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f9b8d15956264a6d12c7d910ec4ed904a3f8af1' => 
    array (
      0 => 'plugin\\custom_right_button\\template\\edit.lbi',
      1 => 1482648395,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '602758f18e3a2966a0-18831886',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_58f18e3a29a52',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f18e3a29a52')) {function content_58f18e3a29a52($_smarty_tpl) {?><button type="button" class="btn" data-toggle="tooltip" <?php if ($_smarty_tpl->tpl_vars['v']->value['level_enable']==0){?>title="您当前没有该权限"<?php }else{ ?> title="右键菜单加入站外链接、电话号码" onclick="open_custom_right()"<?php }?>>自定义右键</button><?php }} ?>