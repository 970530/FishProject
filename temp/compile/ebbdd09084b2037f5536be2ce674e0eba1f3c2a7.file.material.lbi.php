<?php /* Smarty version Smarty-3.1.7, created on 2017-04-15 09:14:05
         compiled from "C:/xampp/htdocs/vradmin/template\lib\material.lbi" */ ?>
<?php /*%%SmartyHeaderCode:653658f173dd922361-28567830%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ebbdd09084b2037f5536be2ce674e0eba1f3c2a7' => 
    array (
      0 => 'C:/xampp/htdocs/vradmin/template\\lib\\material.lbi',
      1 => 1482662019,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '653658f173dd922361-28567830',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'act' => 0,
    'up_url' => 0,
    '_lang' => 0,
    'res' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_58f173dd9743f',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f173dd9743f')) {function content_58f173dd9743f($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['act']->value=='add'){?>
	<script src=""></script>
				<table class="tableBasic" border="0" cellpadding="4" cellspacing="0"  width="100%">
					<tbody>
					<tr>
						<th>素材类别：</th>
						<td>
							<select name="type" id="type">
									<option value="-1">请选择素材类别</option>
									<option value="0">静态热点</option>
									<option value="1">动态热点</option>
									<option value="2">其它素材</option>
							</select>　
							其它素材是指用户在编辑补天补地，链接导航等地方时选择的素材
						</td>
					</tr>
					<tr>
						<th width="120"><i class="require-red">*</i>标题：</th>
						<td>
							<input class="common-text required" name="title" id="title"  type="text">
							请填写1到20个字符
						</td>
					</tr>
					<tr>
						<th width="120"><i class="require-red">*</i>上传素材：</th>
						<td>
							<div style="float: left;">
								<button id="material_input" class="btn">选择文件</button>
							</div>
							<div style="float: left;line-height: 30px;width: 200px;" id="progress_material_input">

							</div>
							<div style="float: left; margin-left: 40px ; line-height: 30px; ">
								请仔细查看以下例子：<a href="http://cdn.useevr.cn/ex/md.png" target="_blank">静态热点</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://cdn.useevr.cn/ex/spot2_gif.png" target="_blank">动态热点</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://cdn.useevr.cn/ex/dianhua.png" target="_blank">其他素材</a>
							</div>
						</td>

					</tr>
					<tr id="dyn_thumb_tr" style="display: none;">
						<th width="120"><i class="require-red">*</i>动态热点缩略图：</th>
						<td>
							<div style="float: left;">
								<button id="dyn_thumb_input" class="btn">选择文件</button>
							</div>
							<div style="float: left;line-height: 30px;width: 200px;" id="progress_dyn_thumb_input">

							</div>
							<div style="float: left; margin-left: 50px ; line-height: 30px;">
							动态热点需要额外上传一张缩略图,  示例：<a href="http://cdn.useevr.cn/ex/dyn_1.gif" target="_blank">缩略图</a>
							</div>
						</td>

					</tr>
					<tr>
						<th></th>
						<td>
						    <div id="wrong_text" class="warning" style="display:none"></div>
							<div class="clear"></div>
							<input type="button" class="btn btn-primary btn6 mr10" value="提交" id="sub_btn">
							<input class="btn btn6" onClick="history.go(-1)" value="返回" type="button">
						</td>
					</tr>
					</tbody>
				</table>
			<script language="JavaScript" type="text/javascript" src="/static/js/plupload/moxie.js"></script>
			<script language="JavaScript" type="text/javascript" src="/static/js/plupload/plupload.dev.js"></script>
			<script>
				var up_url = '<?php echo $_smarty_tpl->tpl_vars['up_url']->value;?>
';
				var key ;
				var qn_token;
				var material_up;
				var dyn_thumb_up;
				var url = '/<?php echo $_smarty_tpl->tpl_vars['_lang']->value['admin_path'];?>
/?m=material';
				
				$(function(){
					material_up = getUploader("material_input");
					$("#type").change(function(){
						if($(this).val() == 1){
							$("#dyn_thumb_tr").show();
							dyn_thumb_up = getUploader("dyn_thumb_input");
						}else{
							$("#dyn_thumb_tr").hide();
							if (dyn_thumb_up) dyn_thumb_up=null;
						}
					});
					$("#sub_btn").click(function(){
						var params = {};
						var flag1 = false , flag2 = false;

						params.type = $("#type").val();
						if (params.type<0) {
							alert("请选择素材类别");
							return false;
						}
						params.title = $.trim($("#title").val());
						if (params.title.length<1||params.title.length>20) {
							alert("请填写1到20个字符的标题");
							return false;
						}

						if (material_up.files.length==0) {
							alert("请先选择素材");
							return false;
						}
						if(dyn_thumb_up){
							if(dyn_thumb_up.files.length==0){
								alert("请先选择动态热点缩略图");
								return false;
							}
						}else{
							flag2 = true;
						}
						$("#sub_btn").val("正在提交");
						$("#sub_btn").attr("disabled","disabled");
						material_up.start();
						material_up.bind('FileUploaded',function(up,file,info){
							params.absolutelocation = up.getOption().multipart_params.key;
							flag1 = true;
						});

						if (dyn_thumb_up) {
							dyn_thumb_up.start();
							dyn_thumb_up.bind('FileUploaded',function(up,file,info){
								params.thumb_path = up.getOption().multipart_params.key;
								flag2 = true;
							});
						}
						var inter = setInterval(function(){
							if (flag1&&flag2) {
								clearInterval(inter);
								$.post(url,{
									'act':'doAdd',
									'params':JSON.stringify(params)
								},function(res){
									if (res.status==1) {
										$("#sub_btn").val("编辑成功");
										setTimeout(function(){
											window.location.href = url;
										},1000);
									}else{
										alert(res.msg);
										$("#sub_btn").removeAttr("disabled");
									}
								},'json');
							}
						},500);

					});
				})
				function set_upload_param(up, filename, ret)
				{
				    if (ret == false)
				    {
				        qn_token ={};
		            	$.ajax({
		            		url:"/get_token.php",
		            		data:{"act":"def_material"},
		    	    		async: false,
		    	    		success:function(result){
		    	    		 	result = eval("("+result+")");
	 		    	    		qn_token.prefix= result.prefix;
		    	    		 	if (result.policy) {
	 			    		 		qn_token.policy = result.policy;
	 			    		 		qn_token.OSSAccessKeyId = result.accessid;
	 			    		 		qn_token.host = result.host;
	 			    		 		qn_token.signature = result.signature;
		    	    		 	}else{
		    	    		 		qn_token.token = result.token;
		    	    		 	}

		    	    		}
		    	    	})
				    }else{
			            key = qn_token.prefix+generic_name()+filename.substr(filename.lastIndexOf("."));
			            var new_multipart_params;
			            if (qn_token.policy) {
			            	new_multipart_params = {
						        'key' : key,
						        'policy': qn_token.policy,
						        'OSSAccessKeyId': qn_token.OSSAccessKeyId,
						        'success_action_status' : '200', //让服务端返回200,不然，默认会返回204
						        'host' : qn_token.host,
						        'signature': qn_token.signature,
					    	}
			            }else{
			            	 new_multipart_params = {
					        	'key' : key,
					        	'token':qn_token.token
					    	}
			            }
					    up.setOption({
					        'url': up_url,
					        'multipart_params': new_multipart_params
					    });
					}
				}
				function generic_name() {
				　　var $chars = 'abcdefghijklmnopqrstwxyz0123456789';
				　　var maxPos = $chars.length;
				　　var pwd = '';
				　　for (i = 0; i < 3; i++) {
				　　　　pwd += $chars.charAt(Math.floor(Math.random() * maxPos));
				　　}
				　　return new Date().getTime()+pwd;
				}
				function getUploader(pk){
				 var uploader = new plupload.Uploader({
				    runtimes : 'html5,flash,silverlight,html4',
				    browse_button : pk,
				    multi_selection: false,
				    flash_swf_url: '/static/js/plupload/Moxie.swf',
				    silverlight_xap_url : '/static/js/plupload/Moxie.xap',
				    url : up_url,
				    filters: {
			            mime_types : [ //只允许上传图片
			            { title : "Img files", extensions : "jpg,gif,png" },
			            ],
			            max_file_size : '300kb', //
			            prevent_duplicates : true //不允许选取重复文件
			        },
				    init: {
				        PostInit: function() {
				        	set_upload_param(uploader, '', false);
				        },
				        FilesAdded: function(up, files) {
							var file= files[files.length-1];
							$("#progress_"+pk).append('<div class="progress" id="'+file.id+'">'+
									'<div class="progress-bar" style="width: 0%">'+
									'</div><span class="text-muted" style="font-size:11px;font-weight:normal;">点击下方提交按钮开始上传</span>'+
								'</div>');
							$("#progress_"+pk).show();
				            return false;
				        },
				        BeforeUpload: function(up, file) {
				            $("#"+pk).css('pointer-events','none');
				            set_upload_param(up, file.name, true);
				        },

				        UploadProgress: function(up, file) {
				            var d = document.getElementById(file.id);
				            d.getElementsByTagName('span')[0].innerHTML = '  ' + file.percent + "%";
				            var progBar = d.getElementsByTagName('div')[0];
				            progBar.style.width= file.percent+'%';
				            progBar.setAttribute('aria-valuenow', file.percent);
				        },

				        // FileUploaded: function(up, file, info) {
				        //     if (info.status == 200)
				        //     {
				        //     	$("#"+file.id).data("imgsrc",key);
				        //     }
				        //     else
				        //     {
				        //         alert("上传失败");
				        //     }
				        //     $("#selectfiles").css('pointer-events','');
				        // },

				        Error: function(up, err) {
				            if (err.code == -600) {
				                alert("选择的文件太大了,不能超过300kb");
				            }
				            else if (err.code == -601) {
				                 alert("只能上传jpg、gif、png格式大小的图片");
				            }
				            else if (err.code == -602) {
				                 alert("这个文件已经上传过一遍了");
				            }
				            else
				            {
				                alert("上传异常");
				            }
				        }
				    }
				 });
				 uploader.init();
				 return uploader;
			}
				
			</script>
<?php }else{ ?>
	   <h3>
	   		<a href="/<?php echo $_smarty_tpl->tpl_vars['_lang']->value['admin_path'];?>
/?m=material&act=add" class="actionBtn add" style="margin-top: -10px;">添加素材</a>
		</h3>
		<table  class="tableBasic" border="0" cellpadding="8" cellspacing="0"  width="100%" style="text-align: center;background-color: #eaeaea;">
			<tr>
				<th>名称</th>
				<th>缩略图</th>
				<th>类别</th>
				<th>操作</th>
			</tr>
			<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['res']->value['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</td>
				<td><div><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['thumb_path'];?>
" width="40px;"></div></td>
				<td>
					<?php if ($_smarty_tpl->tpl_vars['v']->value['type']==0){?>
						静态热点
					<?php }elseif($_smarty_tpl->tpl_vars['v']->value['type']==1){?>
						动态热点
					<?php }else{ ?>
						其它图标
					<?php }?>
				</td>
				<td><a class="del" style="cursor: pointer;" data-id="<?php echo $_smarty_tpl->tpl_vars['v']->value['pk_defmedia_main'];?>
" data-title="<?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
">删除</a></td>
			</tr>
			<?php } ?>
		</table>
		<div class="list-page"><?php echo $_smarty_tpl->getSubTemplate ("lib/pages.lbi", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div>
		<script>
			$(function(){
				$(".del").click(function(){						
					if (confirm("确定删除 "+$(this).data('title')+" 吗？")) {
						$.post("/<?php echo $_smarty_tpl->tpl_vars['_lang']->value['admin_path'];?>
/?m=material",{
							'act' : 'del',
							'id' : $(this).attr('data-id')
						},function(res){
							if (res.status == 1) {
								alert("删除成功");
								window.location.reload() ;
							}else{
								alert("删除失败");
							}
						},'json');
					}
				});
			})
		</script>
<?php }?><?php }} ?>