<?php /* Smarty version Smarty-3.1.7, created on 2017-04-15 09:30:46
         compiled from "plugin\comment\template\view.lbi" */ ?>
<?php /*%%SmartyHeaderCode:2522158f177c679c8e6-00333730%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '607d8b4c1800218be6ca74439dd5a8dda58821b9' => 
    array (
      0 => 'plugin\\comment\\template\\view.lbi',
      1 => 1482648395,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2522158f177c679c8e6-00333730',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_58f177c67a076',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f177c67a076')) {function content_58f177c67a076($_smarty_tpl) {?><style>
.vrshow_comment {
    position: absolute;
    bottom: 10%;
    left: 50%;
    margin-left: -200px;
    width: 400px;
    min-height: 100px;
    background-color: rgba(51, 51, 51, 0.8);
    z-index: 4300;
    color: #fff;
    border-radius: 5px;
    display: none;
}
@media screen and (max-width: 767px) {
    .vrshow_comment {
        width: 250px;
        margin-left: -125px;
    }

}
</style>
<div class="img_desc_container_min" id="comment_div">
    <img src="/static/images/skin1/vr-btn-comment.png" onClick="show_comment()">
    <div class="img_desc_min">说一说</div>
</div>

<script src="<?php echo $_smarty_tpl->tpl_vars['_lang']->value['host'];?>
plugin/comment/js/comment.js"></script><?php }} ?>