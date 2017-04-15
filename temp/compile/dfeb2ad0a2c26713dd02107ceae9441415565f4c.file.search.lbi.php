<?php /* Smarty version Smarty-3.1.7, created on 2017-04-15 11:43:01
         compiled from "C:/xampp/htdocs/template\bty2\search\search.lbi" */ ?>
<?php /*%%SmartyHeaderCode:393658f1870d1e6595-63689356%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dfeb2ad0a2c26713dd02107ceae9441415565f4c' => 
    array (
      0 => 'C:/xampp/htdocs/template\\bty2\\search\\search.lbi',
      1 => 1492227771,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '393658f1870d1e6595-63689356',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_58f1870d1ee29',
  'variables' => 
  array (
    'result' => 0,
    'search' => 0,
    'v' => 0,
    'vv' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f1870d1ee29')) {function content_58f1870d1ee29($_smarty_tpl) {?><script src="jquery.js"></script>
<link href="navigation20141112.css" rel="stylesheet" type="text/css">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title></title>

<style type="text/css">
	*{
		margin:0;
		padding:0;
		list-style-type:none; 
		list-style:none; 
		text-decoration:none;
	}
	.clearfix{
		clear:both;
	}
	a,img{
		border:0;
	}
	/* flexslider */
	.search{
		width:560px;
		position:absolute;
		top:100px; 
		left:50%; 
		margin-left:-280px; 
		z-index:300;
	}
	.sousuo{
		top:96px;
		right:5px; 
		position:absolute;
	}
	.search li{
		float:left;
		font-size:12px;
		color:white;
		margin-right:8px;
	}
	.search li a{
		font-size:12px;
		color:white;
	}
	.search h1{ 
		font-size:40px;
		text-align:center;
		color:white;
		margin:20px 0;
	}
	.search input{
		width:560px;
		height:36px; 
		background-color:rgba(0,0,0,0.3); 
		line-height:34px; 
		border:1px solid grey; 
		color:#A0A0A4; 
		margin-bottom:10px;
	}
	.search input:hover{ 
		background-color:rgba(0,0,0,0.5);
	}
</style>

</head>
<body style="background-color:#efefef;">
<!-- 顶部导航 begin -->
<div style=" top:274px; position:absolute; height:274px;" class="dingbu"></div>

<!-- 新导航0903 end -->
<div style="width:100%; height:70px; background-color:white; margin-top:50px;">
	<div style="width:1440px; margin:0 auto;  margin-top:17px;">
		<form method='GET'>
			<input type="text" name='keyword' style=" width:383px; border:1px solid grey; height:33px;" >
			<input type="submit" name='search' value='search' style="background:url(../template/default/images/sousuo.png) center no-repeat #19344c; width:35px; height:35px; border:none; position:relative; top:0px; left:-4px; cursor:pointer;">
			<span style="line-height:70px;">共计<?php echo $_smarty_tpl->tpl_vars['result']->value;?>
个搜索结果</span>
		</form>
    </div>
</div>
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['search']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
	<div style="width:1440px; margin:0 auto;">
		<a href='/tour/<?php echo $_smarty_tpl->tpl_vars['v']->value["view_uuid"];?>
' target='_blank'>
			<div style="margin-top:10px;">
				<div style="float:left;"><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['thumb_path'];?>
"></div>
				<div style="float:left; margin-left:15px;">
					<p style="margin-bottom:10px;"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</p>
					<p style="margin-bottom:10px; color:#aaaaaa;"><a href="#" style="color:#aaaaaa;">作者：<?php echo $_smarty_tpl->tpl_vars['v']->value['username'];?>
</a>&nbsp&nbsp&nbsp 人气：<?php echo $_smarty_tpl->tpl_vars['v']->value['browsing_num'];?>
</p>
					<p style="margin-bottom:10px; width:1100px; font-size:14px;"><?php echo $_smarty_tpl->tpl_vars['v']->value['profile'];?>
</p>
					<div>
						<?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_smarty_tpl->tpl_vars['kk'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['v']->value['tag']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value){
$_smarty_tpl->tpl_vars['vv']->_loop = true;
 $_smarty_tpl->tpl_vars['kk']->value = $_smarty_tpl->tpl_vars['vv']->key;
?>
							<span style="padding:3px 5px; background-color:#8699b0;"><?php echo $_smarty_tpl->tpl_vars['vv']->value;?>
</span>
						<?php } ?>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
		</a>
	</div>
<?php } ?>
<div style="text-align:center;margin:50px 0; font:normal 14px/24px 'MicroSoft YaHei';">
</div>
</body>
<?php }} ?>