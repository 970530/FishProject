<?php /* Smarty version Smarty-3.1.7, created on 2017-04-15 09:30:46
         compiled from "plugin\custom_user\template\resource.lbi" */ ?>
<?php /*%%SmartyHeaderCode:2830858f177c67cf573-41917255%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f0765f13dc5d95be23dcdff18eac846db9db4b2' => 
    array (
      0 => 'plugin\\custom_user\\template\\resource.lbi',
      1 => 1482648395,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2830858f177c67cf573-41917255',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_58f177c67cf57',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f177c67cf57')) {function content_58f177c67cf57($_smarty_tpl) {?><script>
$(function(){
	$("#authorDiv").show();
	plugins_init_function.push(custom_user_init);
})
function custom_user_init(data){
	var logoObj = data.custom_logo;
	if(logoObj && logoObj.user){
        $("#user_nickName").text(logoObj.user);
    }
}
</script>

<?php }} ?>