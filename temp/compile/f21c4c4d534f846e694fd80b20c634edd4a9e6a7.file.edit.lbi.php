<?php /* Smarty version Smarty-3.1.7, created on 2017-04-15 11:06:34
         compiled from "plugin\praise\template\edit.lbi" */ ?>
<?php /*%%SmartyHeaderCode:2211158f18e3a31f241-89882393%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f21c4c4d534f846e694fd80b20c634edd4a9e6a7' => 
    array (
      0 => 'plugin\\praise\\template\\edit.lbi',
      1 => 1482648395,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2211158f18e3a31f241-89882393',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_58f18e3a326f4',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f18e3a326f4')) {function content_58f18e3a326f4($_smarty_tpl) {?><div class="col-md-4">
     <label class="col-md-6 control-label">隐藏点赞</label>
    <div class="col-md-6" data-toggle="tooltip" <?php if ($_smarty_tpl->tpl_vars['v']->value['level_enable']==0){?>title="您当前没有该权限"<?php }else{ ?>title="在全景页面显示点赞"<?php }?>>
        <input id="praise" name="switch_checkbox" class="form-control" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['v']->value['level_enable']==0){?>disabled<?php }?>/>
    </div>
</div>

<script>
	$(function(){
		//向main_edit.js 注册初始化方法
		plugins_init_function.push(praise_init);
		plugins_works_get_function.push(praise_get);
	})
	function praise_init(){
		$("#praise").bootstrapSwitch('state', worksmain.hidepraise_flag=='1'?true:false);
	}
	function praise_get(worksMaindata){
		worksMaindata.hidepraise_flag = $("#praise").bootstrapSwitch('state')?1:0;
	}
</script><?php }} ?>