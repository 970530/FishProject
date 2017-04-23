<?php
//后台首页
if(!defined('IN_T')){
	die('hacking attempt');
}
if($_GET['search']) {
	$keyword = Common::sfilter($_GET['keyword']);
	$search = $Db->query("select * from ".$Base->table('worksmain')." where name LIKE '%".$keyword."%' OR profile LIKE '%".$keyword."%' ");
	$result = count($search);
	foreach($search as $key => $value) {
		$id 	= $value["pk_works_main"];
		$works 	= $Db->query("select * from ".$Base->table('tag_works')." where works_id = '".$id."'");
		$tag 	= array();
		foreach($works as $kk => $vv) {
			$wk = $Db->query("select * from ".$Base->table('tag')." where id = '".$vv['tag_id']."'");
			$tag[] = $wk[0]["name"];
		}
		$search[$key]["tag"] = $tag;
		$user = $Db->query("select * from ".$Base->table('user')." where pk_user_main = '".$value['pk_user_main']."'");
		$search[$key]["username"] = $user[0]['nickname'];
		//把标题和内容变色
		$search[$key]['name'] = preg_replace("/(.*)".$keyword."(.*)/","$1<span style='color:red'>".$keyword."</span>$2",$search[$key]['name']);
		$search[$key]['profile'] = preg_replace("/(.*)".$keyword."(.*)/","$1<span style='color:red'>".$keyword."</span>$2",$search[$key]['profile']);

	}
	$tp->assign('search',$search);
	
}
isset($result) ? $result : $result=0;
$tp->assign('title','搜索');
$tp->assign('result',$result);
?>