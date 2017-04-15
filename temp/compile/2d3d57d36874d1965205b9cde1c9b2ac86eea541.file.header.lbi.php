<?php /* Smarty version Smarty-3.1.7, created on 2017-04-15 09:01:57
         compiled from "C:/xampp/htdocs/720/template\default\library\header.lbi" */ ?>
<?php /*%%SmartyHeaderCode:3273058f17105bea995-45444757%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2d3d57d36874d1965205b9cde1c9b2ac86eea541' => 
    array (
      0 => 'C:/xampp/htdocs/720/template\\default\\library\\header.lbi',
      1 => 1482648395,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3273058f17105bea995-45444757',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    '_lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_58f17105c020a',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f17105c020a')) {function content_58f17105c020a($_smarty_tpl) {?><!DOCTYPE html>
<html lang="zh-ch">
<head>
<meta charset="UTF-8" />
<meta name="renderer" content="webkit">
<meta http-equiv="x-ua-compatible" content="IE=edge,chrome=1" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" name="viewport" />
<title><?php if ($_smarty_tpl->tpl_vars['title']->value){?><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['_lang']->value['title'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['_lang']->value['title'];?>
-<?php echo $_smarty_tpl->tpl_vars['_lang']->value['subtitle'];?>
<?php }?></title>
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['_lang']->value['desciption'];?>
" />
<link rel="stylesheet" href="/static/css/zui.min.css">
<link rel="stylesheet" href="/template/<?php echo $_smarty_tpl->tpl_vars['_lang']->value['moban'];?>
/css/zui-theme.css">
<link rel="stylesheet" href="/template/<?php echo $_smarty_tpl->tpl_vars['_lang']->value['moban'];?>
/css/redefine.css">
<script language="JavaScript" type="text/javascript" src="/static/js/jquery-1.9.1.js"></script>
<script language="JavaScript" type="text/javascript" src="/static/js/datetimepicker.js"></script>
</head>

<body>
<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['_lang']->value['moban'])."/library/nav.lbi", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>