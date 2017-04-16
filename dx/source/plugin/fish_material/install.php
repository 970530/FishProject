<?php

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$sql = <<< SQL
CREATE TABLE `pre_plugin_fish_buy` (
  `orderid` int(10) NOT NULL,
  `uid` int(10) NOT NULL,
  `username` char(15) NOT NULL,
  `title` char(15) NOT NULL,
  `resourceid` int(10) NOT NULL,
  `total` int(7) NOT NULL,
  `pay_total` int(7) NOT NULL,
  `time` char(10) NOT NULL,
  `msg` char(50) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE `pre_plugin_fish_feedback` (
  `fid` int(10) NOT NULL,
  `title` char(30) NOT NULL,
  `resourceid` int(10) NOT NULL,
  `comment` char(100) NOT NULL,
  `uid` int(10) NOT NULL,
  `username` char(15) NOT NULL,
  `time` char(10) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE `pre_plugin_fish_income_log` (
  `logid` int(10) NOT NULL,
  `type` char(10) NOT NULL,
  `uid` int(10) NOT NULL,
  `orderid` char(10) NOT NULL,
  `total` int(7) NOT NULL,
  `time` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



CREATE TABLE `pre_plugin_fish_resource` (
  `resourceid` int(10) NOT NULL,
  `title` char(40) NOT NULL,
  `cover` char(50) NOT NULL,
  `editorid` int(10) NOT NULL,
  `editorusername` char(15) NOT NULL,
  `price` int(7) NOT NULL,
  `categoryPri` char(10) NOT NULL,
  `categorySub` char(10) NOT NULL,
  `categoryTietu` char(10) NOT NULL,
  `categoryStyle` char(10) NOT NULL,
  `categoryVersion` char(10) NOT NULL,
  `categoryLights` char(10) NOT NULL,
  `tag` char(30) NOT NULL,
  `status` int(1) NOT NULL,
  `count` int(10) NOT NULL,
  `dcount` int(10) NOT NULL,
  `time` char(11) NOT NULL,
  `top` int(1) NOT NULL,
  `hide` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE `pre_plugin_fish_resource_detail` (
  `resourceid` int(10) NOT NULL,
  `viewimg1` char(50) NOT NULL,
  `viewimg2` char(50) NOT NULL,
  `viewimg3` char(50) NOT NULL,
  `viewimg4` char(50) NOT NULL,
  `viewimg5` char(50) NOT NULL,
  `info` char(100) NOT NULL,
  `filename` char(32) NOT NULL,
  `favourite` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


ALTER TABLE `pre_plugin_fish_buy`
  ADD PRIMARY KEY (`orderid`);


ALTER TABLE `pre_plugin_fish_feedback`
  ADD PRIMARY KEY (`fid`);


ALTER TABLE `pre_plugin_fish_income_log`
  ADD PRIMARY KEY (`logid`);


ALTER TABLE `pre_plugin_fish_resource`
  ADD PRIMARY KEY (`resourceid`);


ALTER TABLE `pre_plugin_fish_resource_detail`
  ADD PRIMARY KEY (`resourceid`);



ALTER TABLE `pre_plugin_fish_buy`
  MODIFY `orderid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10001;

ALTER TABLE `pre_plugin_fish_feedback`
  MODIFY `fid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE `pre_plugin_fish_income_log`
  MODIFY `logid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

ALTER TABLE `pre_plugin_fish_resource`
  MODIFY `resourceid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

ALTER TABLE `pre_plugin_fish_resource_detail`
  MODIFY `resourceid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
SQL;

runquery($sql);
$finish = TRUE;
?>