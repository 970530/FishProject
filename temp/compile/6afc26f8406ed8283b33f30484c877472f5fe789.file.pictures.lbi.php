<?php /* Smarty version Smarty-3.1.7, created on 2017-04-15 10:33:31
         compiled from "C:/xampp/htdocs/template\bty2\index\pictures.lbi" */ ?>
<?php /*%%SmartyHeaderCode:40258f1867b3cd4a1-25074002%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6afc26f8406ed8283b33f30484c877472f5fe789' => 
    array (
      0 => 'C:/xampp/htdocs/template\\bty2\\index\\pictures.lbi',
      1 => 1492053961,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '40258f1867b3cd4a1-25074002',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tag' => 0,
    'picture_tags' => 0,
    'v' => 0,
    '_lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_58f1867b3fc2a',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f1867b3fc2a')) {function content_58f1867b3fc2a($_smarty_tpl) {?>
<div id="top"></div>
<div id="mainMenuBar">
	<ul>
        <li class="hongse">搜索</li>
            <!--标签列表循环-->
		<a onclick="list_by_tag(0,this)" class="active" style="cursor:pointer"><li>全部</li></a>
             <!--标签列表循环结束-->
		<a onclick="list_by_tag(-1,this)" <?php if ($_smarty_tpl->tpl_vars['tag']->value===-1){?>class="active"<?php }?> style="cursor:pointer"><li>编辑推荐</li></a>
                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['picture_tags']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
		<a onclick="list_by_tag(<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
,this)" <?php if ($_smarty_tpl->tpl_vars['tag']->value==$_smarty_tpl->tpl_vars['v']->value['id']){?>class="active"<?php }?> style="cursor:pointer"><li><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</li></a>
                <?php } ?>
			</ul>
</div>
 <div class="topnav1">
	<div class="topnav">
    <input type="button" class="cha" value="X">
		<div class="topsearch">
    		<input type="text" class="search" value="在此搜索">
            <div><a href="#">搜索</a></div>
            <ul>
            	<li>热搜：</li>
                <li><a href="#">吊灯</a></li>
                <li><a href="#">橱柜</a></li>
                <li><a href="#">沙发</a></li>
                <li><a href="#">椅子</a></li>
                <li><a href="#">门窗&nbsp>> </a></li>
            </ul>
   	    </div>
        <div class="clearfix"></div>
    </div>
</div>
<script>
	$(".topnav1").hide()
	$(".hongse").click(
		function(){
			$(".topnav1").show()
			}
	)
	$(".cha").click(
		function(){
			$(".topnav1").hide()
			}
	)
</script>


<!--卡片列表行-->
	<div id="mainlist">
		<!--卡片列表循环-->
		<ul id="pictures_content">
		</ul>	         
		<!--卡片列表循环结束-->	
     </div>
<!--卡片列表行结束-->
<script>
 	var page = 1;
 	var tag = 0 ;
	$(function(){
		list();
		$(window).scroll(function(){
		　　var scrollTop = $(this).scrollTop();
		　　var scrollHeight = $(document).height();
		　　var windowHeight = $(this).height();
		　　if(scrollTop + windowHeight == scrollHeight){
		　　　　list();
		　　}
		});
	})
	function list(){
		alert_notice("加载中...",'success','bottom',500);
		$.post('/pictures',{
			'act':'list',
			'tag':tag,
			'page':page
		},function(res){
			if (res.length==0) {
				alert_notice("没有更多了",'default','bottom');
			}else{
				var html = '';
				for(var i=0 ; i<res.length;i++){
					var p = res[i];
					html+='<li>'+
					   '<div style="margin:10px; border:none;">'+
						' <a target="_blank" href="/tour/'+p.view_uuid+'"><div class="mainlistimg"><img src="'+p.thumb_path+'" alt="'+p.name+'" width="300px" height="220px"></div></a>'+
						 '<div class="card-heading title">'+
						'	<div class="col-md-9 col-xs-8 of_hide padding0">'+
						'		<strong class="text-primary">'+p.name+'</strong> '+
						'	</div>'+
						'	<div class="col-md-3 col-xs-4 of_hide padding0" style="background:url(/template/<?php echo $_smarty_tpl->tpl_vars['_lang']->value['moban'];?>
/images/icon/yanjing.png) no-repeat;">'+
						'		<div class="pull-right text-danger">'+p.browsing_num+'</div>'+
						'	</div>'+
						' </div>'+
					 ' </div>'+
					' </li>';
				}
				page++;
				$("#pictures_content").append(html);
			}
			
		},'json');
	}
	function list_by_tag(_tag,obj){
		page=1;
		tag = _tag;
		$("#pictures_content").html("");
		list();
		$(".channel .active").removeClass("active");
		$(obj).addClass("active");
	}
</script><?php }} ?>