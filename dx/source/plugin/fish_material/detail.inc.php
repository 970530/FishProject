<?php
require_once "core.php";

if(!$_GET["resourceid"]) {
	showmessage("参数错误");
}
$resourceid = $_GET['resourceid'];
$return = getResourceInfoByID($resourceid);
$resource 	= $return["R"];
$resourced 	= $return["D"];
if(!$resource || !$resourced) {
	showmessage("您查找的资源不存在");
}
if($_POST["report"]) {
	if(!$_POST['resourceid']) {
		showmessage("资源编号错误或不存在");
	}
	addFeedBack($_POST["resourceid"],$_POST["comment"]);
	showmessage("素材报错反馈成功",APP_LINK."detail&resourceid=".$resourceid);
}


include template("fish_material:header");
include template("fish_material:detail");
include template("fish_material:footer");
?>