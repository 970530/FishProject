<?php
//后台首页
if(!defined('IN_T')){
	die('hacking attempt');
}
$uids    = '';
$list    = array();
$show    = array();
$author = $Db->query("select * from ".$Base->table('user')." ORDER BY `num` DESC");

foreach($author as $k => $v) {
	$uids .= "'".$v['pk_user_main']."',";
}
$uids = substr($uids,0,-1);
$authorProfile = $Db->query("select * from ".$Base->table('user_profile')." WHERE pk_user_main IN ($uids)");
foreach($authorProfile as $k => $v){
	$list[$v['pk_user_main']]['avatar'] = $v['avatar'];
}

$authorWorksNum = $Db->query("select * from ".$Base->table('worksmain')." WHERE pk_user_main IN ($uids)");
foreach($authorWorksNum as $k => $v){
	$list[$v['pk_user_main']]['praised_num'] += $v['praised_num'];
}
foreach($author as $k => $v) {
	$show[$v['pk_user_main']] = array(
		'num' 			=> $v['num'],
		'name'			=> $v['nickname'],
		'uid'			=> $v['pk_user_main'],
		'avatar' 		=> $list[$v['pk_user_main']]['avatar'],
		'praised_num' 	=> isset($list[$v['pk_user_main']]['praised_num']) ? $list[$v['pk_user_main']]['praised_num'] : 0,
	);
}
$tp->assign('title','作者');
$tp->assign('show',$show);
?>