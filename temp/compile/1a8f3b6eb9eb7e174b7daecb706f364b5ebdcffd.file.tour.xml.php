<?php /* Smarty version Smarty-3.1.7, created on 2017-04-15 09:30:46
         compiled from "C:/xampp/htdocs/tour\tour.xml" */ ?>
<?php /*%%SmartyHeaderCode:1842458f177c6eefaa0-65636187%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1a8f3b6eb9eb7e174b7daecb706f364b5ebdcffd' => 
    array (
      0 => 'C:/xampp/htdocs/tour\\tour.xml',
      1 => 1482648395,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1842458f177c6eefaa0-65636187',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_lang' => 0,
    'cdn_host' => 0,
    'plugins' => 0,
    'v' => 0,
    'k' => 0,
    'startscene' => 0,
    'scenesRes' => 0,
    'prefix' => 0,
    'hotspot' => 0,
    'v1' => 0,
    'index' => 0,
    'v2' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_58f177c700f13',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f177c700f13')) {function content_58f177c700f13($_smarty_tpl) {?><krpano version="1.19" title="<?php echo $_smarty_tpl->tpl_vars['_lang']->value['title'];?>
" debugmode="false">
<!-- xml公用包含文件，设置皮肤，初始化场景，定义公用方法等 -->

<security>
    <crossdomainxml url="<?php echo $_smarty_tpl->tpl_vars['cdn_host']->value;?>
crossdomain.xml"/>
    <allowdomain domain="*"/>
</security>

 
<include url="%SWFPATH%/skin/vtourskin.xml?v=1.0" />
<include url="%SWFPATH%/autorotate.xml" />
<include url="%SWFPATH%/object.xml" />
<contextmenu fullscreen="false" versioninfo="false">
        <item name="logo" caption="<?php echo $_smarty_tpl->tpl_vars['_lang']->value['title'];?>
" separator="true" onclick="openurl('<?php echo $_smarty_tpl->tpl_vars['_lang']->value['host'];?>
')" devices="flash|webgl"/>
</contextmenu>
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['plugins']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
<?php if ($_smarty_tpl->tpl_vars['v']->value['enable']==1&&$_smarty_tpl->tpl_vars['v']->value['xml']){?>
<include url="%SWFPATH%/../plugin/<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
/xml/<?php echo $_smarty_tpl->tpl_vars['v']->value['xml'];?>
" />
<?php }?>
<?php } ?>

 <action name="startup" autorun="onstart">
 	 <?php if (!empty($_smarty_tpl->tpl_vars['startscene']->value)){?>
        set(startscene,'<?php echo $_smarty_tpl->tpl_vars['startscene']->value;?>
');
	<?php }?>
 	if(startscene === null OR !scene[get(startscene)],
        copy(startscene,scene[0].name); );
         if(device.fullscreensupport == true,js(showFullscreenBtn()););
        if(device.mobile OR device.tablet,js(hideShareAndFootmarkBtn()););
         loadscene(get(startscene), null, MERGE);
        if(startactions !== null, startactions() );
 </action>
	 <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['scenesRes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
  	 <scene name="scene_<?php echo $_smarty_tpl->tpl_vars['v']->value['viewuuid'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['v']->value['sceneTitle'];?>
" <?php if ($_smarty_tpl->tpl_vars['v']->value['album']){?>album="<?php echo $_smarty_tpl->tpl_vars['v']->value['album'];?>
"<?php }?>   onstart="activatespot(90)" thumburl="<?php echo $_smarty_tpl->tpl_vars['v']->value['imgPath'];?>
?<?php echo time();?>
" lat="" lng="" heading="">
   
		 <view hlookat="0" vlookat="0" fovtype="MFOV" fov="90" fovmin="5" fovmax="120" vlookatmin="-90" vlookatmax="90" limitview="lookat"/>
		<preview url="<?php echo $_smarty_tpl->tpl_vars['prefix']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['v']->value['viewuuid'];?>
/preview.jpg" />
		<image>
			<cube url="<?php echo $_smarty_tpl->tpl_vars['prefix']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['v']->value['viewuuid'];?>
/pano_%s.jpg" />
			<cube url="<?php echo $_smarty_tpl->tpl_vars['prefix']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['v']->value['viewuuid'];?>
/mobile/pano_%s.jpg" devices="mobile" />
		</image>	
		
	</scene>   
	<?php } ?>

<?php if ($_smarty_tpl->tpl_vars['hotspot']->value!=''){?>    
	<?php $_smarty_tpl->tpl_vars["index"] = new Smarty_variable("0", null, 0);?>
	<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['hotspot']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?> 
		<?php if ($_smarty_tpl->tpl_vars['v']->value['image']!=''){?> 
			<?php  $_smarty_tpl->tpl_vars['v1'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v1']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['v']->value['image']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v1']->key => $_smarty_tpl->tpl_vars['v1']->value){
$_smarty_tpl->tpl_vars['v1']->_loop = true;
?> 
				<gallery name="<?php echo $_smarty_tpl->tpl_vars['v1']->value['galleryName'];?>
" >
					<?php  $_smarty_tpl->tpl_vars['v2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v2']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['v1']->value['imgs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v2']->key => $_smarty_tpl->tpl_vars['v2']->value){
$_smarty_tpl->tpl_vars['v2']->_loop = true;
?> 
				    	<img name="img_<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
" url="<?php echo $_smarty_tpl->tpl_vars['v2']->value['src'];?>
" />
				  		<?php $_smarty_tpl->tpl_vars['index'] = new Smarty_variable($_smarty_tpl->tpl_vars['index']->value+1, null, 0);?>
				    <?php } ?>
				  </gallery>
		  	<?php } ?>
		 <?php }?>
	<?php } ?>
<?php }?>		   
	
	
	
</krpano><?php }} ?>