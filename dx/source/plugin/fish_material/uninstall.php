<?php

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$sql = <<< SQL
DROP TABLE IF EXISTS `pre_plugin_fish_buy`;
DROP TABLE IF EXISTS `pre_plugin_fish_feedback`;
DROP TABLE IF EXISTS `pre_plugin_fish_income_log`;
DROP TABLE IF EXISTS `pre_plugin_fish_resource`;
DROP TABLE IF EXISTS `pre_plugin_fish_resource_detail`;

SQL;

runquery($sql);
$finish = TRUE;
?>