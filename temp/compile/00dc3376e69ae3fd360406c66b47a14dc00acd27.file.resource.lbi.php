<?php /* Smarty version Smarty-3.1.7, created on 2017-04-15 09:30:46
         compiled from "plugin\footmarker\template\resource.lbi" */ ?>
<?php /*%%SmartyHeaderCode:3172058f177c67b0166-62130982%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '00dc3376e69ae3fd360406c66b47a14dc00acd27' => 
    array (
      0 => 'plugin\\footmarker\\template\\resource.lbi',
      1 => 1482648395,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3172058f177c67b0166-62130982',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_58f177c67b016',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f177c67b016')) {function content_58f177c67b016($_smarty_tpl) {?>
<script>
	$(function(){
		plugins_init_function.push(footmarker_init);
	})
	function footmarker_init(data){
		 if (data.footmark=='0') {
            $('#footmarkDiv').hide();
        }
	}
	function hideShareAndFootmarkBtn(){
	    //$("#shareDiv").hide();
	    $("#footmarkDiv").hide();
	}
	function showFootMark(){
	    var krpano = document.getElementById('krpanoSWFObject');
	    var sceneName = krpano.get('xml.scene');
	    var viewuuid = (sceneName.split('_'))[1].toUpperCase();
	    var locationData = $('body').data(viewuuid);
	    if(locationData){
	        _U.mapMarkModal().openModal(locationData,true);
	    }else{
	        $.zui.messager.show('没有足迹', {placement: 'center', type: 'warning', time: '3000', icon: 'warning-sign'});
	    }
	}
</script>
<?php }} ?>