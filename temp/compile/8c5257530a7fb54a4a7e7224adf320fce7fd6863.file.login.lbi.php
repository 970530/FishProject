<?php /* Smarty version Smarty-3.1.7, created on 2017-04-15 09:12:12
         compiled from "C:/xampp/htdocs/vradmin/template\lib\login.lbi" */ ?>
<?php /*%%SmartyHeaderCode:1270558f1736c9d0310-17939892%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8c5257530a7fb54a4a7e7224adf320fce7fd6863' => 
    array (
      0 => 'C:/xampp/htdocs/vradmin/template\\lib\\login.lbi',
      1 => 1482648395,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1270558f1736c9d0310-17939892',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_58f1736c9d419',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f1736c9d419')) {function content_58f1736c9d419($_smarty_tpl) {?><div id="login">
  <div class="dologo"></div>
  <form id="admin_login" action="/<?php echo $_smarty_tpl->tpl_vars['_lang']->value['admin_path'];?>
/?m=login" method="post" enctype="multipart/form-data">
   <div id="wrong_text" class="warning" style="display:none"></div>
   <ul>  
    <li class="inpLi"><b>登录账号</b><input type="text" name="admin_name" class="inpLogin"></li>
    <li class="inpLi"><b>登录密码</b><input type="password" name="passwd" class="inpLogin"></li>
    <li style="height:auto"><label><input type="checkbox" name="remember" value="1"> 7天内免登录</label></li>
    <li class="sub"><input type="button" id="sub_btn" value="确认登录" class="btn" style="width:100%;" onclick="javascript:ajaxFormSubmit('admin_login','登录');"></li> 
   </ul>
  </form>
</div>
<?php }} ?>