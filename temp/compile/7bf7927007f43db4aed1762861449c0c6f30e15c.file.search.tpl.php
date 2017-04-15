<?php /* Smarty version Smarty-3.1.7, created on 2017-04-15 09:55:28
         compiled from "C:/xampp/htdocs/template\default\search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3045358f17d6da85c58-60039253%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7bf7927007f43db4aed1762861449c0c6f30e15c' => 
    array (
      0 => 'C:/xampp/htdocs/template\\default\\search.tpl',
      1 => 1492221326,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3045358f17d6da85c58-60039253',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_58f17d6daacd5',
  'variables' => 
  array (
    '_lang' => 0,
    'module' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f17d6daacd5')) {function content_58f17d6daacd5($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['_lang']->value['moban'])."/library/header.lbi", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['_lang']->value['moban'])."/search/".($_smarty_tpl->tpl_vars['module']->value).".lbi", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['_lang']->value['moban'])."/library/footer.lbi", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>