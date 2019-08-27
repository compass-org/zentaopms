<?php
 die();
?>
20190809 10:03:12: /index.php?m=bug&f=create&productID=1&branch=0&extra=moduleID=0
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT account, realname, deleted, INSTR(',td,pm,qd,qa,dev,', role) AS roleOrder FROM `zt_user` WHERE 1  AND  deleted  = '0' ORDER BY `roleOrder` DESC,`account` 
  SELECT account, realname, deleted, INSTR(',td,pm,qd,qa,dev,', role) AS roleOrder FROM `zt_user` WHERE 1  AND  deleted  = '0' ORDER BY `roleOrder` DESC,`account` 
  SELECT version FROM `zt_story` WHERE id  = '0'
  SELECT version FROM `zt_story` WHERE id  = '0'
  SELECT id,title FROM `zt_bug` WHERE deleted  = '0' AND  title IN ('test01') AND  openedDate  >= '2019-08-09 10:02:12' AND  product=1 
  SELECT id,title FROM `zt_bug` WHERE deleted  = '0' AND  title IN ('test01') AND  openedDate  >= '2019-08-09 10:02:12' AND  product=1 
  INSERT INTO `zt_bug` SET `product` = '1',`module` = '4',`project` = '0',`openedBuild` = 'trunk',`assignedTo` = 'admin',`deadline` = '2019-08-09',`createFrom` = 'admin',`type` = 'codeerror',`os` = '',`browser` = '',`color` = '',`title` = 'test01',`severity` = '3',`pri` = '0',`steps` = '<p>[步骤]</p>\r\n<p>sdfsdf</p>\r\n<p>[结果]</p>\r\n<p>ggggggggggg</p>\r\n<p>[期望]</p>\r\n<p>yyyyyyyyy</p>',`story` = '0',`task` = '0',`mailto` = '',`keywords` = '',`case` = '0',`caseVersion` = '0',`result` = '0',`testtask` = '0',`openedBy` = 'admin',`openedDate` = '2019-08-09 10:03:12',`assignedDate` = '2019-08-09 10:03:12'

20190809 10:18:38: /index.php?m=bug&f=create&productID=1&branch=0&extra=moduleID=0
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT account, realname, deleted, INSTR(',td,pm,qd,qa,dev,', role) AS roleOrder FROM `zt_user` WHERE 1  AND  deleted  = '0' ORDER BY `roleOrder` DESC,`account` 
  SELECT account, realname, deleted, INSTR(',td,pm,qd,qa,dev,', role) AS roleOrder FROM `zt_user` WHERE 1  AND  deleted  = '0' ORDER BY `roleOrder` DESC,`account` 
  SELECT version FROM `zt_story` WHERE id  = '0'
  SELECT version FROM `zt_story` WHERE id  = '0'
  SELECT id,title FROM `zt_bug` WHERE deleted  = '0' AND  title IN ('test01') AND  openedDate  >= '2019-08-09 10:17:38' AND  product=1 
  SELECT id,title FROM `zt_bug` WHERE deleted  = '0' AND  title IN ('test01') AND  openedDate  >= '2019-08-09 10:17:38' AND  product=1 
  INSERT INTO `zt_bug` SET `product` = '1',`module` = '4',`project` = '0',`openedBuild` = 'trunk',`assignedTo` = 'admin',`deadline` = '2019-08-09',`createFrom` = 'admin',`type` = 'codeerror',`os` = '',`browser` = '',`color` = '',`title` = 'test01',`severity` = '3',`pri` = '0',`steps` = '<p>[步骤]</p>\r\n<p>sdfsdf</p>\r\n<p>[结果]</p>\r\n<p>ggggggggggg</p>\r\n<p>[期望]</p>\r\n<p>yyyyyyyyy</p>',`story` = '0',`task` = '0',`mailto` = '',`keywords` = '',`case` = '0',`caseVersion` = '0',`result` = '0',`testtask` = '0',`openedBy` = 'admin',`openedDate` = '2019-08-09 10:18:38',`assignedDate` = '2019-08-09 10:18:38'

20190809 10:28:41: /index.php?m=bug&f=create&productID=1&branch=0&extra=moduleID=0
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT account, realname, deleted, INSTR(',td,pm,qd,qa,dev,', role) AS roleOrder FROM `zt_user` WHERE 1  AND  deleted  = '0' ORDER BY `roleOrder` DESC,`account` 
  SELECT account, realname, deleted, INSTR(',td,pm,qd,qa,dev,', role) AS roleOrder FROM `zt_user` WHERE 1  AND  deleted  = '0' ORDER BY `roleOrder` DESC,`account` 
  SELECT version FROM `zt_story` WHERE id  = '0'
  SELECT version FROM `zt_story` WHERE id  = '0'
  SELECT id,title FROM `zt_bug` WHERE deleted  = '0' AND  title IN ('test01') AND  openedDate  >= '2019-08-09 10:27:41' AND  product=1 
  SELECT id,title FROM `zt_bug` WHERE deleted  = '0' AND  title IN ('test01') AND  openedDate  >= '2019-08-09 10:27:41' AND  product=1 
  INSERT INTO `zt_bug` SET `product` = '1',`module` = '4',`project` = '0',`openedBuild` = 'trunk',`assignedTo` = 'admin',`deadline` = '2019-08-09',`createFrom` = 'admin',`type` = 'codeerror',`os` = '',`browser` = '',`color` = '',`title` = 'test01',`severity` = '3',`pri` = '0',`steps` = '<p>[步骤]</p>\r\n<p>sdfsdf</p>\r\n<p>[结果]</p>\r\n<p>ggggggggggg</p>\r\n<p>[期望]</p>\r\n<p>yyyyyyyyy</p>',`story` = '0',`task` = '0',`mailto` = '',`keywords` = '',`case` = '0',`caseVersion` = '0',`result` = '0',`testtask` = '0',`openedBy` = 'admin',`openedDate` = '2019-08-09 10:28:41',`assignedDate` = '2019-08-09 10:28:41'

20190809 10:29:07: /index.php?m=bug&f=create&productID=1&branch=0&extra=moduleID=0
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT account, realname, deleted, INSTR(',td,pm,qd,qa,dev,', role) AS roleOrder FROM `zt_user` WHERE 1  AND  deleted  = '0' ORDER BY `roleOrder` DESC,`account` 
  SELECT account, realname, deleted, INSTR(',td,pm,qd,qa,dev,', role) AS roleOrder FROM `zt_user` WHERE 1  AND  deleted  = '0' ORDER BY `roleOrder` DESC,`account` 
  SELECT version FROM `zt_story` WHERE id  = '0'
  SELECT version FROM `zt_story` WHERE id  = '0'
  SELECT id,title FROM `zt_bug` WHERE deleted  = '0' AND  title IN ('发布项目到指定的服务器') AND  openedDate  >= '2019-08-09 10:28:07' AND  product=1 
  SELECT id,title FROM `zt_bug` WHERE deleted  = '0' AND  title IN ('发布项目到指定的服务器') AND  openedDate  >= '2019-08-09 10:28:07' AND  product=1 
  INSERT INTO `zt_bug` SET `product` = '1',`module` = '4',`project` = '0',`openedBuild` = 'trunk',`assignedTo` = 'admin',`deadline` = '2019-08-09',`createFrom` = 'admin',`type` = 'codeerror',`os` = '',`browser` = '',`color` = '',`title` = '发布项目到指定的服务器',`severity` = '3',`pri` = '0',`steps` = '<p>[步骤]</p>\r\n<p>[结果]</p>\r\n<p>[期望]</p>',`story` = '0',`task` = '0',`mailto` = '',`keywords` = '',`case` = '0',`caseVersion` = '0',`result` = '0',`testtask` = '0',`openedBy` = 'admin',`openedDate` = '2019-08-09 10:29:07',`assignedDate` = '2019-08-09 10:29:07'

20190809 10:35:28: /index.php?m=bug&f=create&productID=1&branch=0&extra=moduleID=0
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT account, realname, deleted, INSTR(',td,pm,qd,qa,dev,', role) AS roleOrder FROM `zt_user` WHERE 1  AND  deleted  = '0' ORDER BY `roleOrder` DESC,`account` 
  SELECT account, realname, deleted, INSTR(',td,pm,qd,qa,dev,', role) AS roleOrder FROM `zt_user` WHERE 1  AND  deleted  = '0' ORDER BY `roleOrder` DESC,`account` 
  SELECT version FROM `zt_story` WHERE id  = '0'
  SELECT version FROM `zt_story` WHERE id  = '0'
  SELECT id,title FROM `zt_bug` WHERE deleted  = '0' AND  title IN ('发布项目到指定的服务器') AND  openedDate  >= '2019-08-09 10:34:28' AND  product=1 
  SELECT id,title FROM `zt_bug` WHERE deleted  = '0' AND  title IN ('发布项目到指定的服务器') AND  openedDate  >= '2019-08-09 10:34:28' AND  product=1 
  INSERT INTO `zt_bug` SET `product` = '1',`module` = '4',`project` = '0',`openedBuild` = 'trunk',`assignedTo` = 'admin',`deadline` = '2019-08-09',`createFrom` = 'admin',`type` = 'codeerror',`os` = '',`browser` = '',`color` = '',`title` = '发布项目到指定的服务器',`severity` = '3',`pri` = '0',`steps` = '<p>[步骤]</p>\r\n<p>[结果]</p>\r\n<p>[期望]</p>',`story` = '0',`task` = '0',`mailto` = '',`keywords` = '',`case` = '0',`caseVersion` = '0',`result` = '0',`testtask` = '0',`openedBy` = 'admin',`openedDate` = '2019-08-09 10:35:28',`assignedDate` = '2019-08-09 10:35:28'

