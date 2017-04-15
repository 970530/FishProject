<?php /* Smarty version Smarty-3.1.7, created on 2017-04-15 11:06:34
         compiled from "plugin\showlogo\template\edit.lbi" */ ?>
<?php /*%%SmartyHeaderCode:2790758f18e3a2ec5b4-34793398%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ff686c38a7551fecc918fcddad7e6c00b21a5e6' => 
    array (
      0 => 'plugin\\showlogo\\template\\edit.lbi',
      1 => 1482648395,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2790758f18e3a2ec5b4-34793398',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_58f18e3a2f42c',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f18e3a2f42c')) {function content_58f18e3a2f42c($_smarty_tpl) {?><div class="col-md-4">
	<label name="namelogo"  class="col-md-6 control-label">隐藏LOGO</label>
	<div name="namelogo"  class="col-md-6" data-toggle="tooltip" <?php if ($_smarty_tpl->tpl_vars['v']->value['level_enable']==0){?>title="您当前没有该权限"<?php }else{ ?>title="隐藏LOGO"<?php }?>>
	    <input id="showlogo" name="switch_checkbox" class="form-control" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['v']->value['level_enable']==0){?>disabled<?php }?>/>
	</div>
</div>
<script>
	$(function(){
		//向main_edit.js 注册初始化方法
		plugins_init_function.push(showlogo_init);
		plugins_works_get_function.push(showlogo_get);
	})
	function showlogo_init(){
    	$("#showlogo").bootstrapSwitch('state', worksmain.hidelogo_flag=='1'?true:false);
	}
	function showlogo_get(worksMaindata){
	    worksMaindata.hidelogo_flag =  $("#showlogo").bootstrapSwitch('state')?1:0;
	}
</script><?php }} ?>