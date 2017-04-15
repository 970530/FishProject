<?php /* Smarty version Smarty-3.1.7, created on 2017-04-15 11:06:34
         compiled from "plugin\private_access\template\edit.lbi" */ ?>
<?php /*%%SmartyHeaderCode:2368158f18e3a2a60a8-93821820%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '33364770f3f715fd69588a4ae9c25630eaf91f39' => 
    array (
      0 => 'plugin\\private_access\\template\\edit.lbi',
      1 => 1482648395,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2368158f18e3a2a60a8-93821820',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_58f18e3a2a9f2',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f18e3a2a9f2')) {function content_58f18e3a2a9f2($_smarty_tpl) {?> <button type="button" class="btn btn-custom-logo"  data-toggle="tooltip" <?php if ($_smarty_tpl->tpl_vars['v']->value['level_enable']==0){?>title="您当前没有该权限"<?php }else{ ?>title="设置输入密码才能访问项目" onclick="openPrivacyWordModal()"<?php }?> >密码访问</button><?php }} ?>