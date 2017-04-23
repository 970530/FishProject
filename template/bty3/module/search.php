<?php
//后台首页
if(!defined('IN_T')){
	die('hacking attempt');
}
if($_GET['search']) {
	$pkUserMainids  = array();
	$keyword = Common::sfilter($_GET['keyword']);
	//查询用户名结果
	$nickNameUserMainIds = $Db->query("select pk_user_main from ".$Base->table('user')." where nickname LIKE '%".$keyword."%'");
	//查询标签结果
	$tagUserMainIds  = $Db->query("select works_id from ".$Base->table('tag_works')." WHERE  tag_id IN (select id from ".$Base->table('tag')." where name LIKE '%".$keyword."%')");
	//整合数组
	$mergeArray     = array_merge($nickNameUserMainIds,$tagUserMainIds);
	//循环数组
	foreach($mergeArray as $key => $value) {
		$pkUserMainids[] =  isset($value["pk_user_main"]) ? $value["pk_user_main"] : $value["works_id"];
	}
	$search = $Db->query("select * from ".$Base->table('worksmain')." where name LIKE '%".$keyword."%' OR profile LIKE '%".$keyword."%' OR pk_works_main IN ('$pkUserMainids') ");
	$result 	= count($search);
	foreach($search as $key => $value) {
		$id 	= $value["pk_works_main"];
		$works 	= $Db->query("select * from ".$Base->table('tag_works')." where works_id = '".$id."'");
		$tag 	= array();
		foreach($works as $kk => $vv) {
			$wk = $Db->query("select * from ".$Base->table('tag')." where id = '".$vv['tag_id']."'");
			$tag[] = preg_replace("/(.*)".$keyword."(.*)/","$1<span style='color:red'>".$keyword."</span>$2",$wk[0]["name"]);
		}
		$search[$key]["tag"] = $tag;
		$user = $Db->query("select * from ".$Base->table('user')." where pk_user_main = '".$value['pk_user_main']."'");
		$search[$key]["username"] = $user[0]['nickname'];
		//把标题和内容变色
		$search[$key]['username'] = preg_replace("/(.*)".$keyword."(.*)/","$1<span style='color:red'>".$keyword."</span>$2",$user[0]['nickname']);
		$search[$key]['name'] = preg_replace("/(.*)".$keyword."(.*)/","$1<span style='color:red'>".$keyword."</span>$2",$search[$key]['name']);
		$search[$key]['profile'] = preg_replace("/(.*)".$keyword."(.*)/","$1<span style='color:red'>".$keyword."</span>$2",$search[$key]['profile']);

	}
	$tp->assign('search',$search);
}
$tp->assign('title','搜索');
$tp->assign('result',(int)$result);
?>