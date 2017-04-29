<?php
//文章
if(!defined('IN_T')){
	die('hacking attempt');
}
//最新咨询
$res = get_article();
foreach($res as $k=>$v){
	$res[$k]['tags'] = rtrim(substr(strip_tags($v['content']),0,600))."...";
}

//文章详情
$aid = intval($_REQUEST['aid']);
$a = $Db->query("select * from ".$Base->table('article')." where id=$aid","Row");


$tp->assign('a',$a);
$tp->assign('article',$res);


//查询文章
function get_article(){
	$sql = "SELECT * FROM u_article ORDER BY u_article.createtime DESC LIMIT 10";
	$res = $GLOBALS['Db']->query($sql);
	return $res;
}

?>