<?php /* Smarty version Smarty-3.1.7, created on 2017-04-15 10:29:21
         compiled from "C:/xampp/htdocs/template\bty2\library\nav.lbi" */ ?>
<?php /*%%SmartyHeaderCode:3141258f18581c2cc67-11976676%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5fc00386337947e360c39e73555f0c294f9a26be' => 
    array (
      0 => 'C:/xampp/htdocs/template\\bty2\\library\\nav.lbi',
      1 => 1491564334,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3141258f18581c2cc67-11976676',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
    '_lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_58f18581c387e',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f18581c387e')) {function content_58f18581c387e($_smarty_tpl) {?><style>
  @media screen and (max-width: 767px) {
    .mobile_nav_hide{
      display: none;
    }
  }
</style>
<header>
 <!--PC导航开始-->
<div id="newsrdzt_B01_02" >
  <div id="newsid_C01_01">
    <div class="newnav20141104">
      <div class="newnav20141104nr">
        <div class="s5" track-id="www1" id="dsy_H01_02">
          <div class="s4Box"><a href="/index" target="_self">鱼模网首页</a></div>
        </div>
        <!--
        <div class="s5" track-id="newhouse" id="dsy_H01_03">
          <div class="s4Box"><a href="#">渲染农场</a></div>
          <div class="listBox">
            <ul>
              <li><a href="#">农场介绍</a></li>
              <li><a href="#">操作指南</a></li>
              <li><a href="#">价格体系</a></li>
              <li><a href="#">案例推荐</a></li>
              <li><a href="#">常见问题</a></li>
              <li><a href="#">客 户 端</a></li>
              <li><a href="#">最新动态</a></li>
            </ul>
          </div>
        </div>	
        -->
        <div class="s6" track-id="esf" id="dsy_H01_04">
          <div class="s4Box"><a href="/pictures">全景巡游</a></div> 
          <!--
          <div class="listBox">
            <ul>
              <li><a href="/add/pic">发布全景</a></li>
              <li><a href="/pictures">全景摄影</a></li>
              <li><a href="/videos">全景视频</a></li>
              <li><a href="#">最新动态</a></li>
            </ul>
          </div>
          -->
        </div>	
         <div class="s5" track-id="www1" id="dsy_H01_02">
          <div class="s4Box"><a href="/videos" target="_self">全景视频</a></div>
        </div>
         <!--
        <div class="s6" track-id="esf" id="dsy_H01_04">
          <div class="s4Box"><a href="#">3D素材库</a></div> 
          <div class="listBox">
            <ul>
              <li><a href="#">3D模型</a></li>
              <li><a href="#">贴图素材</a></li>
              <li><a href="#">材质素材</a></li>
              <li><a href="#">最新动态</a></li>
            </ul>
          </div>
        </div>	
        <div class="s6" track-id="esf" id="dsy_H01_04">
          <div class="s4Box"><a href="#">经验分享</a></div> 
          <div class="listBox">
            <ul>
              <li><a href="#">效果图欣赏</a></li>
              <li><a href="#">平面设计经验</a></li>
              <li><a href="#">3D设计经验</a></li>
              <li><a href="#">软件使用技巧</a></li>
            </ul>
          </div>
        </div>	
        -->
        <div class="s6" track-id="esf" id="dsy_H01_04">
          <div class="s4Box"><a href="#">关于我们</a></div> 
          <!--
          <div class="listBox">
            <ul>
              <li><a href="#">关于平台</a></li>
              <li><a href="#">联系我们</a></li>
            </ul>
          </div>
          -->
        </div>
        <div class="s6" track-id="esf" id="dsy_H01_04">
          <div class="s4Box"><a href="/contact">联系我们</a></div> 
          <!--
          <div class="listBox">
            <ul>
              <li><a href="#">关于平台</a></li>
              <li><a href="#">联系我们</a></li>
            </ul>
          </div>
          -->
        </div>
      <?php if ($_smarty_tpl->tpl_vars['user']->value['pk_user_main']<1){?>
        <?php if (!$_smarty_tpl->tpl_vars['_lang']->value['close_reg']){?>
        <div id="newsy_D01_17" class="s4a" onmouseover="this.className=&#39;s4a on2014&#39;" onmouseout="this.className=&#39;s4a&#39;" style="background-image:none">
           <div class="s4Box"><a href="/passport/register">注册</a></div>
        </div>
        <?php }?>
        <div id="newsy_D01_16" class="s4a" onmouseover="this.className=&#39;s4a on2014&#39;" onmouseout="this.className=&#39;s4a&#39;" style="background-image:none">
          <div class="s4Box"><a href="/passport/">登录</a></div>
        </div>
       <?php }else{ ?>
         <div class="s4" style="width:40px; height:40px; margin:0px; padding:0px; top:5px;"><img src="<?php echo $_smarty_tpl->tpl_vars['user']->value['avatar'];?>
" height="40px" width="40px" border="0"></div>
         <div class="s4" track-id="esf" id="dsy_H01_04" style="width:120px;">
          <div class="s4Box" style="width:120px"><?php echo $_smarty_tpl->tpl_vars['user']->value['nickname'];?>
</div> 
          <div class="listBox">
            <ul>
              <li><a href="/member/profile">账户管理</a></li>
              <li style="height:1px; background-color:#999"></li>
               <li><a href="/member/project">全景管理</a></li>
               <li><a href="/member/project?act=videos">视频管理</a></li>
               <li><a href="/member/object_around">物体环视</a></li>
               <li><a href="/member/mediares">素材管理</a></li>
               <li><a href="/member/download">离线下载</a></li>
	           <li><a href="/member/logout">退　　出</a></li>
            </ul>
          </div>
        </div>
        <?php }?>
        <div style="float:right; margin-right:5px;">
          <div style="width:80px;">
            <button style="margin-top:10px" type="button" class="btn btn-primary" onclick="javascript:window.location.href='/add/pic'">
              <i class="cloud-upload"></i> 发布
			</button>
          </div>
        </div>
        <div class="clear"></div>
      </div>    
    </div>
	<script src="/static/js/newnav20141111.js"></script>
  </div>
</div>
<!--导航结束-->
</header><?php }} ?>