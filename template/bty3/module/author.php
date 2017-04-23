<?php
//后台首页
if(!defined('IN_T')){
	die('hacking attempt');
}

if($_GET["authorid"]) {
	//加载详情页面
	$tp->display($_lang['moban'].'/index/author-list.lbi');
} else {
	//加载列表页面
	$tp->display($_lang['moban'].'/index/author.lbi');
}

?>