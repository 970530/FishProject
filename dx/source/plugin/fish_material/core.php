<?php
if(!defined("IN_DISCUZ")) {
	exit("Access Defined");
}
//error_reporting(E_ALL);
define("ADMIN_URL","plugins&operation=config&do=".$pluginid."&identifier=fish_material&pmod=");

define("ADMIN_LINK","admin.php?action=plugins&operation=config&do=".$pluginid."&identifier=fish_material&pmod=");
define("APP_LINK","plugin.php?id=fish_material:");
define("ADMINCP_LOADFILE",DISCUZ_ROOT."source/plugin/fish_material/");
define("USERADMINCP","home.php?mod=spacecp&ac=plugin&id=fish_material:upload");
define("UPLOADATTACHEMENTPATH","./source/plugin/fish_material/data/attachement/");


require_once ADMINCP_LOADFILE."function.php";

loadcache('plugin');

$fishMaterial 		= $_G['cache']['plugin']['fish_material'];
$tradeCreditType	= $fishMaterial['tradeCreditType'];
$userGroupDiscount	= mcpLoadArray($fishMaterial['userGroupDiscount']);
$categoryPri		= mcpLoadArray($fishMaterial['categoryPri']);

$categoryTietu		= mcpLoadArray($fishMaterial['categoryTietu']);
$categoryStyle		= mcpLoadArray($fishMaterial['categoryStyle']);
$categoryVersion	= mcpLoadArray($fishMaterial['categoryVersion']);
$categoryLights		= mcpLoadArray($fishMaterial['categoryLights']);
$categorySub		= array();
$groupid			= $_G['groupid'];

$categorySubu = explode("\n",str_replace("\r","",$fishMaterial['categorySub']));
foreach($categorySubu as $key => $value) {
	$t = explode("=",$value);
	$categorySub[$t[0]][] = $t[1];
}

?>