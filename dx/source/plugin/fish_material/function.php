<?php
if(!defined("IN_DISCUZ")) {
	exit("Access Defined!");
}

//格式化空格，将字符串，拼接为数组形式，传入字符串，返回数组
function mcpLoadArray($array)
{
	$return = array();
	$array = explode("\n",str_replace("\r","",$array));
	foreach ($array as $v){
		$t = explode("=",$v);
		$t[0] = trim($t[0]);
		$return[$t[0]] = $t[1];
	}
	return $return;
}

//生成随机数，传入生成位数，返回生成值
function randomCode($COUNT=24)
{
	$STR = "1234567890qwertyuioplkjhgfdsazxcvbnmMNBVCXZASDFGHJKLPOIUYTREWQ";
	for($a = 0;$a < $COUNT;$a++) {
		$code .= $STR[rand(1,62)];
	}
	return $code;
}

//检测用户积分是否足够
function checkUserCredit($total)
{
	global $_G,$tradeCreditType;
	$query = DB::fetch_first("SELECT * FROM `".DB::table("common_member_count")."` WHERE `uid` = '".$_G["uid"]."'");
	return $query['extcredits'.$tradeCreditType] < $total ? false: $query['extcredits'.$tradeCreditType];
}

//插入一条收入记录
function createNewInvoice($orderid,$total,$uid,$type=false)
{
	$string = $type?'ROYALTY':'INCOME';
	$array = array(
		"uid" 		=> $uid,
		"type" 		=> $string,
		"orderid" 	=> $orderid,
		"total" 	=> $total,
		"time" 		=> time(),
	);
	DB::insert("plugin_fish_income_log");
	return true;
}

//加入到收藏夹
function addToFavourite($resourceid)
{
	global $_G;
	$resource = getResourceInfoByID($resourceid);
	$array = array(
		"uid"		 => $_G['uid'],
		"resourceid" => $resourceid,
		"title" 	 => $resource["R"]["title"],
		"time"		 => time(),
	);
	$insertid 	= DB::insert("plugin_fish_favourite",$array,true);
	$favourite 	= $resource["D"]["favourite"]+1;
	DB::update("plugin_fish_resource_detail",array("favourite" => $favourite),array("resourceid" => $resourceid));
	return $insertid;
}

//移除收藏夹
function removeToFavourite($insertid) 
{
	$fav = DB::fetch_first("SELECT * FROM `".DB::table("plugin_fish_favourite")."` WHERE `fid` = '".$insertid."'");
	$resource = getResourceInfoByID($fav['resourceid']);
	$favourite 	= $resource["D"]["favourite"]-1;
	DB::update("plugin_fish_resource_detail",array("favourite" => $favourite),array("resourceid" => $fav['resourceid']));
	DB::delete("plugin_fish_favourite",array("fid" => $insertid));
	return true;
}

//根据素材ID获取素材信息
function getResourceInfoByID($resourceid)
{
	$resource['R'] = DB::fetch_first("SELECT * FROM `".DB::table("plugin_fish_resource")."` WHERE `resourceid` = '".$resourceid."'");
	$resource['D'] = DB::fetch_first("SELECT * FROM `".DB::table("plugin_fish_resource_detail")."` WHERE `resourceid` = '".$resourceid."'");
	return $resource;
}

//增加反馈信息函数
function addFeedBack($resourceid,$comment)
{
	global $_G;
	$resource = getResourceInfoByID($resourceid);
	$array = array(
		"title" 		=> $resource['R']['title'],
		"resourceid" 	=> $resourceid,
		"uid" 			=> $_G['uid'],
		"comment" 		=> $comment,
		"username" 		=> $_G['username'],
		"time" 			=> time(),
		"status" 		=> 0,
	);
	DB::insert("plugin_fish_feedback",$array);
	return true;
}

//设置反馈信息已处理
function setFeedBack($feed) 
{
	DB::update("plugin_fish_feedback",array("status" => 1,),array("fid" => $feed));
	return true;
}
?>