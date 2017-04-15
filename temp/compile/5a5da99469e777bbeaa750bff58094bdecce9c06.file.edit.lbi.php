<?php /* Smarty version Smarty-3.1.7, created on 2017-04-15 11:06:34
         compiled from "plugin\allowed_recomm\template\edit.lbi" */ ?>
<?php /*%%SmartyHeaderCode:1061358f18e3a33a7d5-37301339%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5a5da99469e777bbeaa750bff58094bdecce9c06' => 
    array (
      0 => 'plugin\\allowed_recomm\\template\\edit.lbi',
      1 => 1482648395,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1061358f18e3a33a7d5-37301339',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_58f18e3a3424d',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f18e3a3424d')) {function content_58f18e3a3424d($_smarty_tpl) {?><div class="col-md-4">
<label  class="col-md-6 control-label">允许推荐</label>
<div class="col-md-6" data-toggle="tooltip"  <?php if ($_smarty_tpl->tpl_vars['v']->value['level_enable']==0){?>title="您当前没有该权限"<?php }else{ ?>title="是否允许管理员将你的作品推荐到首页"<?php }?>>
<input id="flag_allowed_recomm" name="switch_checkbox" class="form-control" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['v']->value['level_enable']==0){?>disabled<?php }?>/>
</div>
</div><?php }} ?>