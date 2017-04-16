<?php
require_once "core.php";

//AJAX加载页面，进行AJAX操作
if($_POST['act'] == 'LOADSUBCATEGORY') {
	$prid = $_POST['prid'];
	$loop = $categorySub[$prid];
	foreach($loop as $k => $v) {
		echo "<option value='".$v."'>".$v."</option>";
	}
	exit();
}

if($_GET['act'] == 'UPLOADATTACHMENT') {
	//对图片进行处理
	$picname = $_FILES['mypic']['name'];
	$picsize = $_FILES['mypic']['size'];
	if ($picname != "") {
		$type = strstr($picname, '.');
		if ($type != ".zip") {
			echo '请压缩后上传ZIP格式文件';
			exit;
		}
		$rand = rand(100, 999);
		$pics = date("YmdHis") . $rand . $type;
		//上传路径
		$pic_path = UPLOADATTACHEMENTPATH. $pics;
		move_uploaded_file($_FILES['mypic']['tmp_name'], $pic_path);
	}
	$size = round($picsize/1024,2);
	$arr = array(
		'name'=>$picname,
		'pic'=>$pics,
		'size'=>$size,
	);
	echo json_encode($arr);exit();
}

if($_POST['act'] == 'AJAXLOADPAGE') {
	$pri = $_POST['pri'];
	$sub = $_POST['sub'];
	$fetch_all = DB::fetch_all("SELECT * FROM `".DB::table("plugin_fish_resource")."` WHERE `categoryPri` = '".$pri."' AND `categorySub` = '".$sub."'");
	foreach($fetch_all as $k => $v) {
$string .= "<li><a href='plugin.php?id=fish_material:detail&resourceid=".$v['resourceid']."'><img style='height:156px;width:235px' src='./".$_G['setting']['attachurl']."/forum/".$v['cover']."' alt='picture'></a><div><a href='#' class='wenzi'>".$v['title']."</a></div></li>";
	}
	echo $string;
}
?>