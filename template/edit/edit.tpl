<!DOCTYPE html>
<html lang="en" class="screen-desktop-wide device-desktop">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="renderer" content="webkit">
<meta http-equiv="x-ua-compatible" content="IE=edge,chrome=1" />
<title>{$_lang.title} - 编辑全景项目</title>
<link type="image/x-icon" rel="shortcut icon" href="">
<script language="JavaScript" type="text/javascript" src="/static/js/kr/uhweb.js"></script>
<link rel="stylesheet" href="/template/{$_lang.moban}/css/redefine.css">
<link rel="stylesheet" href="/template/{$_lang.moban}/css/navigation20141112.css">
<link rel="stylesheet" href="/template/{$_lang.moban}/css/panocss.css">
<style type="text/css">
.slider.slider-horizontal {
	width: 190px;
}
.ui-state-highlight,.ui-widget-content .ui-state-highlight,.ui-widget-header .ui-state-highlight {
	border: 2px dotted #fde428;
	color: #777620;
	height:50px;
}
.navbar{
	margin-bottom:0px;
}
.works-container{
	padding-top:20px;
}
</style>
<body>
{include file="{$_lang.moban}/library/nav.lbi"}
<div style="width:100%; height:50px; background-color:#f96712; position:fixed; z-index:9">
</div>
<div style="width:100%; height:50px; ">
</div>
{include file="edit/lib/{$module}.lbi"}
{include file="{$_lang.moban}/library/footer.lbi"}
<script language="JavaScript" type="text/javascript" src="/static/js/bootbox.js"></script> 
</body>
</html>
