<?php
//首页
if(!defined('IN_T')){
	die('hacking attempt');
}
$res = get_index_article();
foreach($res as $k=>$v){
	$res[$k]['tags'] = rtrim(substr(strip_tags($v['content']),0,600))."...";

	$preg="/([^\"'>]+.(jpg|JPG|jpeg|JPEG|gif|GIF|png|PNG))/i";
	preg_match_all($preg,$v['content'],$match);
	$res[$k]['img']= $match[0][0];
}
$recommend = get_index_recommend();
$tp->assign('recommend',$recommend);
$tp->assign('new_join',get_index_new_join());
$tp->assign('fuctitious', get_index_fictitious('1'));//虚拟场景
$tp->assign('fuctitious_k', get_index_fictitious('10'));//10.客厅设计
$tp->assign('fuctitious_w', get_index_fictitious('11'));//11.卧室设计
$tp->assign('fuctitious_y', get_index_fictitious('13'));//13.衣帽间设计
$tp->assign('fuctitious_s', get_index_fictitious('12'));//12.书房设计
$tp->assign('fuctitious_c', get_index_fictitious('14'));//14.厨房设计
$tp->assign('article',$res);
//$tp->assign('keting',get_index_keting());
//$tp->assign('woshi',get_index_woshi());
//$tp->assign('chufang',get_index_chufan());
//$tp->assign('yimaojian',get_index_yimaojian());
//$tp->assign('shufang',get_index_shufang());
//$tp->assign('article',get_index_article());
//$tp->assign('video_recommmend',get_index_video_recom());
//$tp->assign('p_tags',$Db->query('SELECT * FROM '.$Base->table('tag').' WHERE type =1 ORDER BY sort ASC ' ));

//提取首页推荐图片
function get_index_recommend(){
	$sql = "select w.name,w.thumb_path,w.view_uuid,w.profile,w.browsing_num,w.praised_num,u.nickname,u.pk_user_main,p.avatar ".
	       "from (".$GLOBALS['Base']->table('worksmain')." w left join ".$GLOBALS['Base']->table('user')." u on w.pk_user_main=u.pk_user_main) left join ".$GLOBALS['Base']->table('user_profile')." p on u.pk_user_main= p.pk_user_main where w.recommend=1 order by w.sort asc, w.pk_works_main desc limit 6";
	$res = $GLOBALS['Db']->query($sql);
	return $res;
}
//查询首页最新作品
function get_index_new_join(){
	$sql = "select w.name,w.thumb_path,w.view_uuid,w.profile,w.browsing_num,w.praised_num,u.nickname,u.pk_user_main,p.avatar ".
		"from (".$GLOBALS['Base']->table('worksmain')." w left join ".$GLOBALS['Base']->table('user')." u on w.pk_user_main=u.pk_user_main) left join ".$GLOBALS['Base']->table('user_profile')." p on u.pk_user_main= p.pk_user_main order by w.create_time desc, w.pk_works_main desc limit 6";
	$res = $GLOBALS['Db']->query($sql);
	return $res;
}

//全景效果图推荐
//tag:  1 虚拟场景  10.客厅设计 11.卧室设计 12.书房设计 13.衣帽间设计 14.厨房设计 15自然风光
function get_index_fictitious($tag='1'){
	$sql = "SELECT pk_works_main FROM ".$GLOBALS['Base']->table('tag_works')." LEFT JOIN ".$GLOBALS['Base']->table('worksmain')." ON works_id=pk_works_main WHERE tag_id=".$tag;
	$res = $GLOBALS['Db']->query($sql);
	foreach($res as $k=>$v){
		$pkid[]=$v['pk_works_main'];
	}
	$pkids= implode(',',$pkid);
	$sqls = "select w.name,w.thumb_path,w.view_uuid,w.profile,w.pk_user_main,w.browsing_num,w.praised_num,a.nickname,r.avatar from (".$GLOBALS['Base']->table('tag_works')." t left join ".$GLOBALS['Base']->table('worksmain')." w on works_id=w.pk_works_main) left join (".$GLOBALS['Base']->table('user')." a left join ".$GLOBALS['Base']->table('user_profile')." r on a.pk_user_main=r.pk_user_main) on w.pk_user_main= a.pk_user_main WHERE w.recommend=1 AND t.tag_id=1 AND w.pk_works_main IN(".$pkids.") ORDER BY w.sort ASC, w.pk_works_main DESC LIMIT 6";
	$end = $GLOBALS['Db']->query($sqls);
	return $end;
}




//查询全景视频
function get_index_video_recom(){
	$sql = 'SELECT id,vname,profile,thumb_path FROM '.$GLOBALS['Base']->table('video').' WHERE recommend =1 ORDER BY recommend DESC , id DESC limit 4';
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