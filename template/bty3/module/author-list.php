<?php
//后台首页
if(!defined('IN_T')){
	die('hacking attempt');
}
$uid = Common::sfilter($_GET['uid']);

$userinfo 	= $Db->query("select * from ".$Base->table('user')." where `pk_user_main` = '".$uid."'");
$worksmain 	= $Db->query("select * from ".$Base->table('worksmain')." where `pk_user_main` = '".$uid."'");
$user_profile 	= $Db->query("select * from ".$Base->table('user_profile')." where `pk_user_main` = '".$uid."'");
$browsing_num 	= $Db->query("select sum(`browsing_num`) from ".$Base->table('worksmain')." where `pk_user_main` = '".$uid."'");
$praised_num 	= $Db->query("select sum(`praised_num`) from ".$Base->table('worksmain')." where `pk_user_main` = '".$uid."'");
$total 		= count($worksmain);

$tp->assign('title','搜索');
$tp->assign('userinfo',$userinfo);
$tp->assign('browsing_num',$browsing_num[0]['sum(`browsing_num`)']);
$tp->assign('praised_num',$praised_num[0]['sum(`praised_num`)']);
$tp->assign('total',$total);
$tp->assign('worksmain',$worksmain);
$tp->assign('user_profile',$user_profile);
?>