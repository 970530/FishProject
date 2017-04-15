<?php /* Smarty version Smarty-3.1.7, created on 2017-04-15 09:30:46
         compiled from "plugin\showvrglass\template\resource.lbi" */ ?>
<?php /*%%SmartyHeaderCode:1045858f177c67a45e5-06108664%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d4e491b08c72171ac81dc65f5eec6eb92a06dec' => 
    array (
      0 => 'plugin\\showvrglass\\template\\resource.lbi',
      1 => 1482648395,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1045858f177c67a45e5-06108664',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_58f177c67a45e',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f177c67a45e')) {function content_58f177c67a45e($_smarty_tpl) {?><script>
$(function(){
	plugins_init_function.push(showvrglass_init);
})
function showvrglass_init(data,settings){
	settings['skin_settings.webvr'] = data.hidevrglasses_flag==1 ? false : true;
}
function showWebvrBtn(){
    $('.btn_vrmode').show();
}
</script><?php }} ?>