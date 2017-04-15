<?php /* Smarty version Smarty-3.1.7, created on 2017-04-15 09:30:46
         compiled from "plugin\showviewnum\template\resource.lbi" */ ?>
<?php /*%%SmartyHeaderCode:3033458f177c67f27f8-64155519%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '60b832fcf0b374974a012b8fbdd6ec97686f9085' => 
    array (
      0 => 'plugin\\showviewnum\\template\\resource.lbi',
      1 => 1475906307,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3033458f177c67f27f8-64155519',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_58f177c67f27f',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f177c67f27f')) {function content_58f177c67f27f($_smarty_tpl) {?><script>
$(function(){
	plugins_init_function.push(showviewnum_init);
})
function showviewnum_init(data){
	if(data.hideviewnum_flag=='1'){
        $("#viewnumDiv").hide();
    }
    
  
}
</script><?php }} ?>