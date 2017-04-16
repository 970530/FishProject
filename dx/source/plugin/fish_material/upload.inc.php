<?php
require_once "core.php";
$url = "home.php?mod=spacecp&ac=plugin&id=fish_material:upload&";
if($_POST['submit']) {
	//对用户数据进行处理,进行为空和合法性判断
	$total = $_POST['total'];
	if(!is_numeric($total)) {
		showmessage('请输入正确的数字');
	}
	if(!$_POST['title'] || !$_POST['tags'] ||
	   !$_POST['categoryPri'] || !$_POST['categorySub'] || 
	   !$_POST['categoryTietu'] || !$_POST['categoryStyle'] ||
	   !$_POST['categoryVersion'] || !$_POST['categoryLights'] || !$_POST['bio']
	   || !$_POST['attachement']
	) {
		//showmessage('您填写的信息不完整');
	}
	
	//构建数组
	$array = array(
		"title"				=> $_POST['title'],
		"cover" 			=> $_GET["auctionaid_url1"],
		"editorid" 			=> $_G['uid'],
		"editorusername" 	=> $_G['username'],
		"categoryPri" 		=> $categoryPri[$_POST['categoryPri']],
		"price" 			=> intval($_POST['total']),
		"categorySub" 		=> $_POST['categorySub'],
		"categoryStyle" 	=> $_POST['categoryStyle'],
		"categoryTietu" 	=> $_POST['categoryTietu'],
		"categoryVersion" 	=> $_POST['categoryVersion'],
		"categoryLights" 	=> $_POST['categoryLights'],
		"tag"				=> $_POST['tags'],
		"time" 				=> time(),
		"status" 			=> 0,
		"top"				=> 0,
		"hide"				=> 0,
		"count"				=> 0,
	);
	
	//构建数组
	$array2 = array(
		"viewimg1" => $_POST['auctionaid_url1'],
		"viewimg2" => $_POST['auctionaid_url2'],
		"viewimg3" => $_POST['auctionaid_url3'],
		"viewimg4" => $_POST['auctionaid_url4'],
		"viewimg5" => $_POST['auctionaid_url5'],
		"info" => $_POST['bio'],
		"filename" => $_POST['attachement'],
	);
	
	DB::insert("plugin_fish_resource",$array);
	DB::insert("plugin_fish_resource_detail",$array2);
	
	showmessage("您的素材已提交，请耐心等待审核",$url.'action=viewpost');
}
if($_GET["action"] == 'viewpost') {
	$resource = DB::fetch_all("SELECT * FROM `".DB::table("plugin_fish_resource")."` WHERE `editorid` = '".$_G['uid']."'");
} else if($_GET["action"] == 'buy') {
	$buy = DB::fetch_all("SELECT * FROM `".DB::table("plugin_fish_buy")."` WHERE `uid` = '".$_G['uid']."'");
} else if($_GET['action'] == 'incomelog') {
	$incomelog = DB::fetch_all("SELECT * FROM `".DB::table("plugin_fish_income_log")."` WHERE `uid` = '".$_G['uid']."'");
} else if($_GET["action"] == 'favourite') {
	$fav = DB::fetch_all("SELECT * FROM `".DB::table("plugin_fish_favourite")."` WHERE `uid` = '".$_G['uid']."'");
} else if($_GET["action"] == 'delfav') {
	removeToFavourite($_GET["fid"]);
	showmessage("收藏夹删除成功",USERADMINCP);
}
?>