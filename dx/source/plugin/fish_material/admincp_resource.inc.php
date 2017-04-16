<?php
require_once "core.php";
include template("fish_material:resource_nav");

if($_GET['w'] == 'status') {
	DB::update("plugin_fish_resource",array('status' => $_GET['n']),array("resourceid"=>$_GET['d']));
}

if($_GET['w'] == 'hide') {
	DB::update("plugin_fish_resource",array('hide' => $_GET['n']),array("resourceid"=>$_GET['d']));
}

if($_GET['w'] == 'top') {
	DB::update("plugin_fish_resource",array('top' => $_GET['n']),array("resourceid"=>$_GET['d']));
}
if(!$_GET["act"]) {
	showtableheader();
	$resource = DB::fetch_all("SELECT * FROM `".DB::table("plugin_fish_resource")."`");
	showtablerow('','',array('编号','标题','封面','作者','售价','下载数量','时间','状态','操作'));
	foreach($resource as $k => $v) {
		$rsid = $v['resourceid'];
		if($v['status'] == 0) {
			$status = '等待审核';
			$pact = '<a href="'.ADMIN_LINK.'admincp_resource&w=status&n=1&d='.$rsid.'">审核素材</a>&nbsp;|';
		} else if($v['status'] == 1) {
			$status = '审核通过';
			$pact = '<a href="'.ADMIN_LINK.'admincp_resource&w=status&n=0&d='.$rsid.'">下架素材</a>&nbsp;|';
		}
		if($v["hide"] == 1) {
			$status .= '/隐藏';
			$pact .= '<a href="'.ADMIN_LINK.'admincp_resource&w=hide&n=0&d='.$rsid.'">展示素材</a>&nbsp;|';
		} else {
			$pact .= '<a href="'.ADMIN_LINK.'admincp_resource&w=hide&n=1&d='.$rsid.'">隐藏素材</a>&nbsp;|';
		}
		if($v["top"] == 1) {
			$status .= '/置顶';
			$pact .= '<a href="'.ADMIN_LINK.'admincp_resource&w=top&n=0&d='.$rsid.'">取消置顶</a>&nbsp;|';
		} else {
			$pact .= '<a href="'.ADMIN_LINK.'admincp_resource&w=top&n=1&d='.$rsid.'">素材置顶</a>&nbsp;|';
		}
		$cover = "<img style='height:80px;width:80px;' src='./".$_G['setting']['attachurl']."forum/".$v['cover']."'>";
		
		showtablerow('','',array($rsid,$v['title'],$cover,$v['editorusername'],$v['price'],$v['count'],date("Y-m-d H:i:s",$v['time']),$status,$pact));
	}
	showtablefooter();
} else if($_GET["act"] == 'feedBack') {
	showtableheader();
	$feedback = DB::fetch_all("SELECT * FROM `".DB::table("plugin_fish_feedback")."`");
	showtablerow('','',array('素材名称','问题','资源ID','反馈人','时间','状态'));
	foreach($feedback as $k => $v) {
		if($v["status"] == 0) {
			$status = '等待处理';
		} else if($v["status"] == 1) {
			$status = '已解决';
		}
		showtablerow('','',array($v['title'],$v['comment'],$v['resourceid'],$v['username'],date("Y-m-d H:i:s",$v['time']),$status));
	}
	showtablefooter();
}

?>