<?php /* Smarty version Smarty-3.1.7, created on 2017-04-15 09:13:58
         compiled from "C:/xampp/htdocs/vradmin/template\lib\upgrade.lbi" */ ?>
<?php /*%%SmartyHeaderCode:622958f173d660b8a4-01718314%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b55f01e5c2f09bb8e1aa412c8e1c33c010b1407f' => 
    array (
      0 => 'C:/xampp/htdocs/vradmin/template\\lib\\upgrade.lbi',
      1 => 1482648395,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '622958f173d660b8a4-01718314',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_lang' => 0,
    'act' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_58f173d669444',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f173d669444')) {function content_58f173d669444($_smarty_tpl) {?><style>
.s1_content ol{
	line-height:180%;
}
.s_prompt{
	float:left;
	line-height:30px;
	margin-left:10px;
}
.s3_step{
	display:inline-block;
}
.s3_content{
	max-height: 500px;
	overflow-y: scroll;
	overflow-x: hidden;
}
.s3_cofirm{
	margin-top:10px;
}
</style>
<script>
	var url = '/<?php echo $_smarty_tpl->tpl_vars['_lang']->value['admin_path'];?>
/?m=upgrade';
</script>
<div class="idTabs">
  <ul class="tab">
	<li><a <?php if ($_smarty_tpl->tpl_vars['act']->value=='step_1'){?>class="selected"<?php }?>>1.检测新版本</a></li>
	<li><a <?php if ($_smarty_tpl->tpl_vars['act']->value=='step_2'){?>class="selected"<?php }?>>2.下载升级包</a></li>
	<li><a <?php if ($_smarty_tpl->tpl_vars['act']->value=='step_3'){?>class="selected"<?php }?>>3.检查目录权限</a></li>
	<li><a <?php if ($_smarty_tpl->tpl_vars['act']->value=='step_4'){?>class="selected"<?php }?>>4.更新程序</a></li>
	<li><a <?php if ($_smarty_tpl->tpl_vars['act']->value=='step_5'){?>class="selected"<?php }?>>5.更新数据库</a></li>
	<li><a <?php if ($_smarty_tpl->tpl_vars['act']->value=='step_6'){?>class="selected"<?php }?>>6.升级完成</a></li>
  </ul>
    <div class="items">
    	<?php if ($_smarty_tpl->tpl_vars['act']->value=='step_1'){?>
		<table class="tableBasic" border="0" cellpadding="8" cellspacing="0" width="100%">
		  <tr>
		  <td >
		  <span style="font-weight:bold">注意：</span><span style="color:red">如果自定义过管理后台目录，升级前请修改回/vradmin/，升级完成后再修过为自定义目录；</span>升级是不可逆的，请严格按照提示进行升级，如果有修改过程序，请务必先进行备份！
		  </td>
		  </tr>
		  <tr><td>
		    <div class="s1_content">
	    		<button class="btn" onclick="check()">检测新版本</button>
	    	</div>
	    	</td></tr>
		</table>
		<script type="text/javascript">
			function check(){
				$(".s1_content").html('<img src="/static/images/tm_loading.gif" height="30px" />');
				$.post(url,
				{
					'act':'check'
				},function(res){
					var html = "";
					if (res.status==1) {
						html+='<h2>检测到新版本：<font color="red">'+res.version+'</font>，发布时间：'+res.pubtime+' >></h2>';
						html+= '<ol><li>---------------------------------------------------------------</li>';
						var info = res.info;
						for (var i = 0; i <info.length; i++) {
							html+='<li>'+(i+1)+'.'+info[i]+'<li>'
						}
								
						html+='<li>---------------------------------------------------------------</li></ol>';
						html+='<a href="'+url+'&act=step_2" class="btn">确认升级</a>';
					}else if(res.status==0){
						html+='当前版本 <font color="red">'+res.cur_version+'</font> 已是最新版本！';
					}else{
						html+='<font color="red">'+res.message+'</font>请联系客服QQ：932625974';
					}
					$(".s1_content").html(html);
				},'json')
			}
		</script>
	    <?php }elseif($_smarty_tpl->tpl_vars['act']->value=='step_2'){?>
		    <table class="tableBasic" border="0" cellpadding="8" cellspacing="0" width="100%">
		    <tr><td>
			   <div class="s_content">
	    		<img src="/static/images/tm_loading.gif" height="30px" style="float:left">
	    		<div class="s_prompt">正在下载升级包...</div>
	    	</div>
	    	</td></tr>
		    </table>
	    	
	    	<script>
	    		$(function(){
	    			$.post(url,
	    			{
	    				'act':'download',
	    			},function(res){
	    				if(res.status==1){
	    					$(".s_prompt").html("升级包下载完毕，正在解压...");
	    					unzip(res.zip_file);
	    				}else{
	    					$(".s_prompt").html(res.msg);
	    				}
	    			},'json');
	    		})
	    		function unzip(zip_file){
	    			$.post(url,
	    			{
	    				'act':'unzip',
	    				'zip_file':zip_file
	    			},function(res){
	    				if(res.status==1){
	    					$(".s_prompt").html("解压完毕，开始校验程序文件...");
	    					setTimeout(function(){
	    						window.location.href = url+'&act=step_3'
	    					},1500)
	    				}else{
	    					$(".s_prompt").html(res.msg);
	    				}
	    			},'json')
	    		}
	    	</script>
	    	<?php }elseif($_smarty_tpl->tpl_vars['act']->value=='step_3'){?>
	    	<div class="s3_content">
		    	<table class="tableBasic" border="0" cellpadding="4" cellspacing="0" width="100%">
		    		<thead>
		    			<tr>
		    				<th>目录路径</th>
		    				<th>是否可写</th>
		    			</tr>
		    		</thead>
		    		<tbody style="text-align: center;">
		    		</tbody>
		    	</table>
	    	</div>
	    	<div class="s3_cofirm">
	    			<div class="s3_step">
	    			<!-- <button  class="btn" onclick="javascript:window.location.href='/<?php echo $_smarty_tpl->tpl_vars['_lang']->value['admin_path'];?>
/?m=upgrade&act=step_4'">确认更新程序</button> -->
	    			<button  class="btn" onclick="javascript:window.location.reload()">刷新</button>
	    			</div>
	    			<span class="s3_prompt" style="color:red">请仔细检查要更新的目录是否全部可写，请登录服务器赋予目录写入权限！</span>
	    	</div>
	    	<script>
	    		$(function(){
	    			$.post(url,{
	    				'act':'validate_dir'
	    			},function(res){
	    				var html = "";
	    				var flag = true;
	    				if(res.status==1){
	    					var list = res.list;
	    					for( var key in list){
	    						if (list[key]==0) {
	    							flag = false;
	    						}
		    					html+='<tr>'+
		    						 '<td>'+key+'</td>'+
		    						 '<td>'+(list[key]==1?"<img src='/static/images/ico/yes.gif'>":"<span style=\"color:#c40000\">否，请先修改权限</span>")+'</td>'+
		    						 '</tr>';
	    					}
	    				}else{
	    					html =res.msg;
	    				}
	    				$(".tableBasic tbody").html(html);
	    				if (flag) {
	    					$(".s3_step").html('<button class="btn" onclick="to_step_4()">确认更新程序</button>');
	    				}
	    			},"json");
	    		})
	    		function to_step_4(){
	    			window.location.href = url+"&act=step_4";
	    		}
	    	</script>
	    	<?php }elseif($_smarty_tpl->tpl_vars['act']->value=='step_4'){?>
	    	<div class="s3_content">
		    	<table class="tableBasic" border="0" cellpadding="4" cellspacing="0" width="100%">
		    		<thead>
		    			<tr>
		    				<th>文件路径</th>
		    				<th>是否被手动修改</th>
		    				<th>状态</th>
		    			</tr>
		    		</thead>
		    		<tbody style="text-align: center;">
		    		</tbody>
		    	</table>
	    	</div>
	    	<div class="s3_cofirm">
	    			<div class="s3_step"><button  class="btn" onclick="confirm()">确认更新文件</button></div>
	    			<span class="s3_prompt" style="color:red">请仔细检查要更新的文件是否被修改过，请在升级前做好备份！</span>
	    	</div>
	    	<script>
	    		var up_list = new Array();
	    		var suc_data = new Array();
	    		var fail_data = new Array();
	    		$(function(){
	    			$.post(url,
	    			{
	    				'act':'validate'
	    			},function(res){
	    				var html = "";
	    				if(res.status==1){
	    					var list = res.list;
	    					var index = 0;
	    					for( var key in list){
	    						++index;
	    						html+='<tr>'+
	    							  '<td>'+key+'</td>'+
									  '<td>'+(list[key]==1?"<span style=\"color:red\">是（请先备份）</span>":"否")+'</td>'+
									  '<td id="s3_op_'+index+'">等待</td>'+
									  '</tr>';
								var file = {};
								file.index = 's3_op_'+index;
								file.key = key;
								up_list.push(file);
							}
	    				}else{
	    					html = res.msg;
	    				}
	    				$(".tableBasic tbody").html(html);
	    			},'json');
	    		})
	    		var loading = '<img src="/static/images/s_loading.gif">';
				var success = '<img src="/static/images/ico/yes.gif">';
				var error = '<img src="/static/images/ico/no.gif">';
				var do_confirm_flag = false;
	    		function confirm(){
	    			do_confirm(0);
	    			var inter = setInterval(function(){
	    				if (do_confirm_flag) {
	    					clearInterval(inter);
		    				$('.s3_prompt').html("程序替换完成，开始重新计算hash码");
			    			refresh();
		    				if (fail_data.length>0) {
		    					$('.s3_prompt').html("<span style='color:red'>替换程序失败 "+fail_data.length+" 个，请找到服务器根目录 upgrade/package/code/ 下的文件，进行手动替换</span>");
		    				}
		    				$('.s3_step').html('<a href="'+url+'&act=step_5" class="btn">下一步</a>');
	    				}
	    			},500);
	    		}
	    		function do_confirm(i){
	    			var f = up_list[i];
	    			$("#"+f.index).html(loading);
	    			$('.s3_prompt').html("正在替换 "+f.key);
	    			$.post(url,
	    				{
	    					'act':'apply',
							'file':f.key	
	    				},function(res){
	    					if (res.status==1) {
								$("#"+f.index).html(success);
								suc_data.push(f.key);
    						}else{
    							$("#"+f.index).html(error);
    							fail_data.push(f.key);
    						}
    						++i;
			    			if(i==up_list.length){
			    				do_confirm_flag = true;
			    				return ;
			    			}
			    			do_confirm(i);
	    				},'json')
	    		}
	    		function refresh(){
	    			if (suc_data.length>0) {
						$.ajax({  
					         type : "post",  
					          url : url,  
					          data : {
					          	'act':'refresh',
								'files':JSON.stringify(suc_data),
								'rm':fail_data.length>0?0:1
					          },  
					          async : false,  
					          dataType:'json',
					          success : function(res){  
					            if (res.status==1) {
									$('.s3_prompt').html("文件更新完成，若有更新失败的文件，请手动更新！");
	    						}else{
	    							$('.s3_prompt').html(res.msg);
	    						}
					          }  
					     });
	    			}

	    		}
	    	</script>
	    	<?php }elseif($_smarty_tpl->tpl_vars['act']->value=='step_5'){?>
			<table class="tableBasic" border="0" cellpadding="8" cellspacing="0" width="100%">
		    <tr><td>
			   <div class="s_content">
	    		<img src="/static/images/tm_loading.gif" height="30px" style="float:left">
	    		<div class="s_prompt">正在检查更新数据库...</div>
	    	</div>
	    	</td></tr>
		    </table>
			<script>
	    		$(function(){
	    			$.post(url,
	    			{
	    				'act':'update_db'
	    			},function(res){
	    				$('.s_prompt').html(res.msg);
	    				setTimeout(function(){
	    						window.location.href = url+'&act=step_6'
    					},1500);
	    			},'json')
	    		})
	    	</script>
	    	<?php }elseif($_smarty_tpl->tpl_vars['act']->value=='step_6'){?>
			<table class="tableBasic" border="0" cellpadding="8" cellspacing="0" width="100%">
		    <tr><td>恭喜，升级完成！</td></tr>
		    </table>
    	<?php }?>
    </div>
</div><?php }} ?>