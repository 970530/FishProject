<?php
require_once "core.php";
include template("fish_material:statistics_nav");

if(!$_GET["act"]) {
	showtableheader();
	$income = DB::fetch_all("SELECT SUM(`total`) FROM `".DB::table("plugin_fish_income_log")."` WHERE `uid` = '1'");
	showtablerow('','',array('历史总收入','￥'.$income[0]['SUM(`total`)']."元"));

	showtablefooter();
} else if($_GET["act"] == 'Authorize') {
	showtableheader();
	$resource = DB::fetch_all("SELECT * FROM `".DB::table("plugin_fish_resource")."`");
	showtablerow('','',array('编号','标题','封面','作者','售价','下载数量','状态','时间'));
	foreach($resource as $k => $v) {
		showtablerow('','',array($v['sid'],$v['uid'],$v['username'],date("Y-m-d H:i:s",$v['time']),$lang[17]));
	}
	showtablefooter();
} else if($_GET["act"] == 'feedBack') {
	
}

?>