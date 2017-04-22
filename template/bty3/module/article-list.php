<?php
//全景图片
if(!defined('IN_T')){
   die('hacking attempt');
}
$act = Common::sfilter($_REQUEST['act']);
	$tag = intval($_REQUEST['tag']);
    $size = 15; //定义每页显示10条
	$page = intval($_REQUEST['page']);
	$page = $page<1?1:$page;
	$recommon = intval($_REQUEST['recommon']);
	$uid = intval($_REQUEST['uid']);
	$time_s = Common::sfilter($_REQUEST['time_s']);
	$pname = Common::sfilter($_REQUEST['pname']);
	$res = get_project_list($tag,$page,$size);
	$pages = Common::set_page($size,$page,$res['count']);
	echo $Json->encode($list);
	foreach ($pages as $key => $value) {
		$pages[$key]['url'] = "/article-list.php?page=".$value['num'].$res['spm'];
	}
	$tp->assign("page",$page);
	$tp->assign("pages",$pages);
	$tp->assign("res",$res);
$tp->assign('nav','全景图片');
$tp->assign('act',$act);
/**
  *查询projectlist
  *@param int $uid  用户id,默认为0:查询所有的project
  *@return $res[] 返回总条数，project list
*/
function get_project_list($tag,$page,$size){
	$sql = $GLOBALS['Base']->table('worksmain')." AS p ".
	       "left join ".$GLOBALS['Base']->table('user')." as u on u.pk_user_main=p.pk_user_main WHERE 1 ";
	$res['count'] = $GLOBALS['Db']->query("SELECT COUNT(p.pk_works_main) AS num FROM".$sql,"One");
	$sql ="SELECT p.*,u.nickname FROM ".$sql." ORDER BY p.pk_works_main DESC LIMIT ".($page-1)*$size.",".$size."";
	$res['res'] = $GLOBALS['Db']->query($sql,"All");
	return $res;
}
?>