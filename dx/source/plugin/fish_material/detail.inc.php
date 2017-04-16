<?php
require_once "core.php";

if(!$_GET["resourceid"]) {
	showmessage("²ÎÊý´íÎó");
}
$resourceid = $_GET['resourceid'];
$return = getResourceInfoByID($resourceid);
$resource 	= $return["R"];
$resourced 	= $return["D"];
include template("fish_material:header");
include template("fish_material:detail");
include template("fish_material:footer");
?>