<?php /* Smarty version Smarty-3.1.7, created on 2017-04-15 11:06:34
         compiled from "plugin\showviewnum\template\edit.lbi" */ ?>
<?php /*%%SmartyHeaderCode:115258f18e3a2f8140-90216815%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1a8a0b67ec638a258aa6e755a3225536dc5ddee4' => 
    array (
      0 => 'plugin\\showviewnum\\template\\edit.lbi',
      1 => 1482648395,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '115258f18e3a2f8140-90216815',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_58f18e3a303cc',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f18e3a303cc')) {function content_58f18e3a303cc($_smarty_tpl) {?> <div class="col-md-4">
     <label name="namehot"  class="col-md-6 control-label">隐藏人气</label>
    <div name="namehot"  class="col-md-6" data-toggle="tooltip" <?php if ($_smarty_tpl->tpl_vars['v']->value['level_enable']==0){?>title="您当前没有该权限"<?php }else{ ?>title="隐藏人气"<?php }?>>
        <input id="showviewnum" name="switch_checkbox" class="form-control" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['v']->value['level_enable']==0){?>disabled<?php }?>/>
    </div>
</div>
<script>
	$(function(){
		//向main_edit.js 注册初始化方法
		plugins_init_function.push(showviewnum_init);
		plugins_works_get_function.push(showviewnum_get);
	})
	function showviewnum_init(){
    	$("#showviewnum").bootstrapSwitch('state', worksmain.hideviewnum_flag=='1'?true:false);
	}
	function showviewnum_get(worksMaindata){
	    worksMaindata.hideviewnum_flag =  $("#showviewnum").bootstrapSwitch('state')?1:0;
	}
</script>
<?php }} ?>