<?php
//首页
if(!defined('IN_T')){
	die('hacking attempt');
}

$recommend = get_index_recommend();
$tp->assign('recommend',$recommend);
$tp->assign('new_join',get_index_new_join());
$tp->assign('keting',get_index_keting());
$tp->assign('woshi',get_index_woshi());
$tp->assign('chufang',get_index_chufan());
$tp->assign('yimaojian',get_index_yimaojian());
$tp->assign('shufang',get_index_shufang());
$tp->assign('article',get_index_article());
$tp->assign('video_recommmend',get_index_video_recom());
$tp->assign('p_tags',$Db->query('SELECT * FROM '.$Base->table('tag').' WHERE type =1 ORDER BY sort ASC ' ));

//提取首页推荐图片
function get_index_recommend(){
	$sql = "select name,thumb_path,view_uuid,profile,browsing_num,praised_num ".
	       "from ".$GLOBALS['Base']->table('worksmain')." where recommend=1 order by sort asc, pk_works_main desc limit 22";
	$res = $GLOBALS['Db']->query($sql);
	return $res;
}
//查询首页最新入驻
function get_index_new_join(){
	$sql = "select name,thumb_path,view_uuid,profile,browsing_num,praised_num ".
	       "from ".$GLOBALS['Base']->table('worksmain')." where flag_publish=1 order by pk_works_main desc limit 8";
	$res = $GLOBALS['Db']->query($sql);
	return $res;
}
//查询全景视频
function get_index_video_recom(){
	$sql = 'SELECT id,vname,profile,thumb_path FROM '.$GLOBALS['Base']->table('video').' WHERE recommend =1 ORDER BY recommend DESC , id DESC limit 4';
	$res = $GLOBALS['Db']->query($sql);
	return $res;
}
//查询推荐客厅
function get_index_keting(){
	$sql = "SELECT u_worksmain.name,u_worksmain.profile,u_worksmain.thumb_path,u_worksmain.view_uuid,u_worksmain.browsing_num,u_worksmain.praised_num,u_worksmain.profile FROM u_worksmain LEFT JOIN u_tag_works ON u_worksmain.pk_works_main = u_tag_works.works_id WHERE u_tag_works.tag_id = 10 AND u_worksmain.recommend = 1 ORDER BY u_worksmain.pk_works_main DESC limit 8";
	$res = $GLOBALS['Db']->query($sql);
	return $res;
}
//查询推荐卧室
function get_index_woshi(){
	$sql = "SELECT u_worksmain.name,u_worksmain.profile,u_worksmain.thumb_path,u_worksmain.view_uuid,u_worksmain.browsing_num,u_worksmain.praised_num FROM u_worksmain LEFT JOIN u_tag_works ON u_worksmain.pk_works_main = u_tag_works.works_id WHERE u_tag_works.tag_id = 11 AND u_worksmain.recommend = 1  ORDER BY u_worksmain.pk_works_main DESC limit 8";
	$res = $GLOBALS['Db']->query($sql);
	return $res;
}
//查询推荐厨房
function get_index_chufan(){
	$sql = "SELECT u_worksmain.name,u_worksmain.profile,u_worksmain.thumb_path,u_worksmain.view_uuid,u_worksmain.browsing_num,u_worksmain.praised_num FROM u_worksmain LEFT JOIN u_tag_works ON u_worksmain.pk_works_main = u_tag_works.works_id WHERE u_tag_works.tag_id = 14 AND u_worksmain.recommend = 1  and u_worksmain.recommend = 1 ORDER BY u_worksmain.pk_works_main DESC limit 8";
	$res = $GLOBALS['Db']->query($sql);
	return $res;
}
//查询推荐衣帽间
function get_index_yimaojian(){
	$sql = "SELECT u_worksmain.name,u_worksmain.profile,u_worksmain.thumb_path,u_worksmain.view_uuid,u_worksmain.browsing_num,u_worksmain.praised_num FROM u_worksmain LEFT JOIN u_tag_works ON u_worksmain.pk_works_main = u_tag_works.works_id WHERE u_tag_works.tag_id = 13 AND u_worksmain.recommend = 1  ORDER BY u_worksmain.pk_works_main DESC limit 8";
	$res = $GLOBALS['Db']->query($sql);
	return $res;
}
//查询推荐书房
function get_index_shufang(){
	$sql = "SELECT u_worksmain.name,u_worksmain.profile,u_worksmain.thumb_path,u_worksmain.view_uuid,u_worksmain.browsing_num,u_worksmain.praised_num FROM u_worksmain LEFT JOIN u_tag_works ON u_worksmain.pk_works_main = u_tag_works.works_id WHERE u_tag_works.tag_id = 12 AND u_worksmain.recommend = 1  ORDER BY u_worksmain.pk_works_main DESC limit 8";
	$res = $GLOBALS['Db']->query($sql);
	return $res;
}

//查询文章
function get_index_article(){
	$sql = "SELECT * FROM u_article WHERE u_article.is_nav ='left_bottom' ORDER BY u_article.createtime DESC LIMIT 4";
	$res = $GLOBALS['Db']->query($sql);
	return $res;
}
?>