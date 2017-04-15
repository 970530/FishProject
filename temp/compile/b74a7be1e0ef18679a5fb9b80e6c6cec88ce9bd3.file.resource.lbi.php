<?php /* Smarty version Smarty-3.1.7, created on 2017-04-15 09:30:46
         compiled from "plugin\showuser\template\resource.lbi" */ ?>
<?php /*%%SmartyHeaderCode:2457658f177c67e6c73-01433728%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b74a7be1e0ef18679a5fb9b80e6c6cec88ce9bd3' => 
    array (
      0 => 'plugin\\showuser\\template\\resource.lbi',
      1 => 1482648395,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2457658f177c67e6c73-01433728',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_58f177c67e6c7',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f177c67e6c7')) {function content_58f177c67e6c7($_smarty_tpl) {?><script>
$(function(){
	plugins_init_function.push(showuser_init);
})
function showuser_init(data){
	if(data.hideuser_flag=='1'){
        $("#authorDiv").hide();
    }else{
    	$("#authorDiv").show();
    }
}
</script><?php }} ?>