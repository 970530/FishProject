<?php /* Smarty version Smarty-3.1.7, created on 2017-04-15 11:06:34
         compiled from "plugin\custom_logo\template\edit.lbi" */ ?>
<?php /*%%SmartyHeaderCode:239458f18e3a28ab21-99955211%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3841ef69c1744f0dff6d56b36457cdb0fd153da6' => 
    array (
      0 => 'plugin\\custom_logo\\template\\edit.lbi',
      1 => 1482648395,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '239458f18e3a28ab21-99955211',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_58f18e3a28e9a',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f18e3a28e9a')) {function content_58f18e3a28e9a($_smarty_tpl) {?> <button type="button" class="btn btn-custom-logo"  data-toggle="tooltip" <?php if ($_smarty_tpl->tpl_vars['v']->value['level_enable']==0){?>title="您当前没有该权限"<?php }else{ ?>title="为全景加入左上角自定义LOGO" onclick="openLogo()"<?php }?>>自定义LOGO</button><?php }} ?>