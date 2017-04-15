<?php /* Smarty version Smarty-3.1.7, created on 2017-04-15 09:30:46
         compiled from "plugin\showlogo\template\resource.lbi" */ ?>
<?php /*%%SmartyHeaderCode:870558f177c67b3ff5-42026895%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6e663afac247e53f1e7e076d31013df561c607f5' => 
    array (
      0 => 'plugin\\showlogo\\template\\resource.lbi',
      1 => 1482648395,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '870558f177c67b3ff5-42026895',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_58f177c67b7e7',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f177c67b7e7')) {function content_58f177c67b7e7($_smarty_tpl) {?><script>
$(function(){
	plugins_init_function.push(showlogo_init);
})
function showlogo_init(data){
	if(data.hidelogo_flag=='1'){
        $("#logoImg").hide();
    }else{
    	$("#logoImg").show();
    }
}
</script><?php }} ?>