ALTER TABLE  `studio_webgame`.`sw_spirit` ADD  `attribute` VARCHAR( 15 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL AFTER  `sort` ;
ALTER TABLE  `studio_webgame`.`sw_category` CHANGE  `template`  `template_page` VARCHAR( 20 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ;
ALTER TABLE  `studio_webgame`.`sw_category` ADD  `template_big` VARCHAR( 20 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL AFTER  `template_page` ;
ALTER TABLE  `studio_webgame`.`sw_category` ADD  `template_list` VARCHAR( 20 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL AFTER  `template_big` ;
ALTER TABLE  `studio_webgame`.`sw_category` ADD  `template_show` VARCHAR( 20 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL AFTER  `template_list` ;





INSERT INTO `sp_admin_menu` (`name`, `parentid`, `app_code`, `controller`, `method`, `extparam`, `listorder`, `islog`, `display`) VALUES
('广告管理', 4, 'passport', '', '', '', 0, '1', '1'),


INSERT INTO `sp_admin_menu` (`name`, `parentid`, `app_code`, `controller`, `method`, `extparam`, `listorder`, `islog`, `display`) VALUES
('管理目的地', 298, 'travel', 'travelto', 'listinfo', '', 0, '1', '1'),
('添加目的地', 298, 'travel', 'travelto', 'add', '', 0, '1', '2'),
('查看目的地', 298, 'travel', 'travelto', 'view', '', 0, '1', '3'),
('编辑目的地', 298, 'travel', 'travelto', 'edit', '', 0, '1', '3'),
('删除目的地', 298, 'travel', 'travelto', 'delete', '', 0, '1', '3'),
('管理景观', 298, 'travel', 'landscape', 'listinfo', '', 0, '1', '1'),
('添加景观', 298, 'travel', 'landscape', 'add', '', 0, '1', '2'),
('查看景观', 298, 'travel', 'landscape', 'view', '', 0, '1', '3'),
('编辑景观', 298, 'travel', 'landscape', 'edit', '', 0, '1', '3'),
('删除景观', 298, 'travel', 'landscape', 'delete', '', 0, '1', '3'),
('管理景点', 298, 'travel', 'viewpoint', 'listinfo', '', 0, '1', '1'),
('添加景点', 298, 'travel', 'viewpoint', 'add', '', 0, '1', '2'),
('查看景点', 298, 'travel', 'viewpoint', 'view', '', 0, '1', '3'),
('编辑景点', 298, 'travel', 'viewpoint', 'edit', '', 0, '1', '3'),
('删除景点', 298, 'travel', 'viewpoint', 'delete', '', 0, '1', '3'),
('管理全景图', 298, 'travel', 'pview', 'listinfo', '', 0, '1', '1'),
('添加全景图', 298, 'travel', 'pview', 'add', '', 0, '1', '2'),
('查看全景图', 298, 'travel', 'pview', 'view', '', 0, '1', '3'),
('编辑全景图', 298, 'travel', 'pview', 'edit', '', 0, '1', '3'),
('删除全景图', 298, 'travel', 'pview', 'delete', '', 0, '1', '3'),
('管理专题', 298, 'travel', 'pview', 'listinfo', '', 0, '1', '1'),
('添加专题', 298, 'travel', 'pview', 'add', '', 0, '1', '2'),
('查看专题', 298, 'travel', 'pview', 'view', '', 0, '1', '3'),
('编辑专题', 298, 'travel', 'pview', 'edit', '', 0, '1', '3'),
('删除专题', 298, 'travel', 'pview', 'delete', '', 0, '1', '3'),
('管理国家省份', 298, 'travel', 'country', 'listinfo', '', 0, '1', '1'),
('添加国家省份', 298, 'travel', 'country', 'add', '', 0, '1', '2'),
('查看国家省份', 298, 'travel', 'country', 'view', '', 0, '1', '3'),
('编辑国家省份', 298, 'travel', 'country', 'edit', '', 0, '1', '3'),
('删除国家省份', 298, 'travel', 'country', 'delete', '', 0, '1', '3'),


INSERT INTO `sp_admin_menu` (`name`, `parentid`, `app_code`, `controller`, `method`, `extparam`, `listorder`, `islog`, `display`) VALUES
('青少年', 0, 'juvenile', '', '', '', 8, '0', '1');

INSERT INTO `sp_admin_menu` (`name`, `parentid`, `app_code`, `controller`, `method`, `extparam`, `listorder`, `islog`, `display`) VALUES
('内容管理', 261, 'juvenile', '', '', '', 3, '1', '1');

INSERT INTO `sp_admin_menu` (`name`, `parentid`, `app_code`, `controller`, `method`, `extparam`, `listorder`, `islog`, `display`) VALUES
('添加栏目', 262, 'juvenile', 'category', 'add', '', 0, '1', '2'),
('删除栏目', 262, 'juvenile', 'category', 'delete', '', 0, '1', '3'),
('编辑栏目', 262, 'juvenile', 'category', 'edit', '', 0, '1', '3'),
('管理栏目', 262, 'juvenile', 'category', 'listinfo', '', 0, '1', '1'),
('查看栏目', 262, 'juvenile', 'category', 'view', '', 0, '1', '3'),
('添加内容', 262, 'juvenile', 'content', 'add', '', 0, '1', '2'),
('管理内容', 262, 'juvenile', 'content', 'catquick', '', 0, '1', '1'),
('删除内容', 262, 'juvenile', 'content', 'delete', '', 0, '1', '3'),
('编辑内容', 262, 'juvenile', 'content', 'edit', '', 0, '1', '3'),
('内容列表', 262, 'juvenile', 'content', 'listinfo', '', 0, '1', '3'),
('查看内容', 262, 'juvenile', 'content', 'view', '', 0, '1', '3');





grant all privileges on `nova`.`t_account` to 'plat_duser'@'192.168.0.116' identified by "duserplat";

INSERT INTO `sw_new` (`catid`, `title`, `thumb`, `keywords`, `description`, `listorder`, `status`, `islink`, `username`, `copyfrom`, `position`, `content`, `template`, `inputtime`, `updatetime`, `fbak`, `seo_title`) 
SELECT 9, `title`, `thumb`, `keywords`, `description`, `listorder`, `status`, `islink`, `username`, `copyfrom`, `position`, `content`, `template`, `inputtime`, `updatetime`, `fbak`, `seo_title`
FROM `sw_new` WHERE `catid` = 7;

INSERT INTO `sw_new` (`catid`, `title`, `thumb`, `keywords`, `description`, `listorder`, `status`, `islink`, `username`, `copyfrom`, `position`, `content`, `template`, `inputtime`, `updatetime`, `fbak`, `seo_title`) 
SELECT 10, `title`, `thumb`, `keywords`, `description`, `listorder`, `status`, `islink`, `username`, `copyfrom`, `position`, `content`, `template`, `inputtime`, `updatetime`, `fbak`, `seo_title`
FROM `sw_new` WHERE `catid` = 7;

INSERT INTO `sw_new` (`catid`, `title`, `thumb`, `keywords`, `description`, `listorder`, `status`, `islink`, `username`, `copyfrom`, `position`, `content`, `template`, `inputtime`, `updatetime`, `fbak`, `seo_title`) 
SELECT 11, `title`, `thumb`, `keywords`, `description`, `listorder`, `status`, `islink`, `username`, `copyfrom`, `position`, `content`, `template`, `inputtime`, `updatetime`, `fbak`, `seo_title`
FROM `sw_new` WHERE `catid` = 7;

INSERT INTO `sw_new` (`catid`, `title`, `thumb`, `keywords`, `description`, `listorder`, `status`, `islink`, `username`, `copyfrom`, `position`, `content`, `template`, `inputtime`, `updatetime`, `fbak`, `seo_title`) 
SELECT 12, `title`, `thumb`, `keywords`, `description`, `listorder`, `status`, `islink`, `username`, `copyfrom`, `position`, `content`, `template`, `inputtime`, `updatetime`, `fbak`, `seo_title`
FROM `sw_new` WHERE `catid` = 7;

INSERT INTO `sw_new` (`catid`, `title`, `thumb`, `keywords`, `description`, `listorder`, `status`, `islink`, `username`, `copyfrom`, `position`, `content`, `template`, `inputtime`, `updatetime`, `fbak`, `seo_title`) 
SELECT 13, `title`, `thumb`, `keywords`, `description`, `listorder`, `status`, `islink`, `username`, `copyfrom`, `position`, `content`, `template`, `inputtime`, `updatetime`, `fbak`, `seo_title`
FROM `sw_new` WHERE `catid` = 7;

INSERT INTO `sw_new` (`catid`, `title`, `thumb`, `keywords`, `description`, `listorder`, `status`, `islink`, `username`, `copyfrom`, `position`, `content`, `template`, `inputtime`, `updatetime`, `fbak`, `seo_title`) 
SELECT 14, `title`, `thumb`, `keywords`, `description`, `listorder`, `status`, `islink`, `username`, `copyfrom`, `position`, `content`, `template`, `inputtime`, `updatetime`, `fbak`, `seo_title`
FROM `sw_new` WHERE `catid` = 7;

INSERT INTO `sw_new` (`catid`, `title`, `thumb`, `keywords`, `description`, `listorder`, `status`, `islink`, `username`, `copyfrom`, `position`, `content`, `template`, `inputtime`, `updatetime`, `fbak`, `seo_title`) 
SELECT 15, `title`, `thumb`, `keywords`, `description`, `listorder`, `status`, `islink`, `username`, `copyfrom`, `position`, `content`, `template`, `inputtime`, `updatetime`, `fbak`, `seo_title`
FROM `sw_new` WHERE `catid` = 7;

INSERT INTO `sw_new` (`catid`, `title`, `thumb`, `keywords`, `description`, `listorder`, `status`, `islink`, `username`, `copyfrom`, `position`, `content`, `template`, `inputtime`, `updatetime`, `fbak`, `seo_title`) 
SELECT 16, `title`, `thumb`, `keywords`, `description`, `listorder`, `status`, `islink`, `username`, `copyfrom`, `position`, `content`, `template`, `inputtime`, `updatetime`, `fbak`, `seo_title`
FROM `sw_new` WHERE `catid` = 7;

INSERT INTO `sw_new` (`catid`, `title`, `thumb`, `keywords`, `description`, `listorder`, `status`, `islink`, `username`, `copyfrom`, `position`, `content`, `template`, `inputtime`, `updatetime`, `fbak`, `seo_title`) 
SELECT 17, `title`, `thumb`, `keywords`, `description`, `listorder`, `status`, `islink`, `username`, `copyfrom`, `position`, `content`, `template`, `inputtime`, `updatetime`, `fbak`, `seo_title`
FROM `sw_new` WHERE `catid` = 7;

UPDATE `sw_new` SET `url` = CONCAT('http://nova.nova.com:91/index.php/webgame/nova/show?id=', `catid`, '_', `id`) WHERE `catid` IN (9, 10, 11, 12, 13, 14, 15, 16, 17);
UPDATE `sw_new` AS `n`, `sw_category` AS `c` SET `title` = CONCAT('诺瓦-', `c`.`catname`, '-', `n`.`title`) WHERE `n`.`catid` IN (9, 10, 11, 12, 13, 14, 15, 16, 17) AND `n`.`catid` = `c`.`id`;


INSERT INTO `studio_ucserver`.`su_members` (`username`, `password`, `email`, `regip`, `regdate`, `salt`, `lastlogintime` )
SELECT `account_id`, '733b4cf68a9548e15d435308c26fd1e3', `email`, `reg_ip`, `regist_date`, '06af44', `last_login_date` FROM `userdb`.`ums_account`;

INSERT INTO `studio_passport`.`sp_member` (`userid`, `username`, `ucserver_id`, `password`, `email`, `regip`, `regdate`, `encrypt`, `lastlogintime` )
SELECT `username`, `username`,`id`, 'd5d54aacf7d0c781149fc3ecafa0f53f', `email`, `regip`, `regdate`, 'hTdw8h', `lastlogintime` FROM `studio_ucserver`.`su_members`;

INSERT INTO `studio_passport`.`sp_aid_cre` (`aid`) SELECT `aid` FROM `nova`.`aid_cre`

INSERT INTO `studio_passport`.`sp_aid_crebak` (`id`, `aid`, `aid_status`, `email`) 
SELECT `id`, `aid`, `aid_status`, `email`  FROM `studio_passport`.`sp_aid_cre` WHERE `aid_status` = 0 LIMIT 2000;


TRUNCATE `studio_webgame`.`sw_member_webgame`;
TRUNCATE `studio_webgame`.`sw_record`;
TRUNCATE `studio_pay`.`sp_member_pay`;
TRUNCATE `studio_pay`.`sp_account_unusual`;
TRUNCATE `studio_pay`.`sp_account`;
TRUNCATE `studio_pay`.`sp_pay`;
TRUNCATE `studio_ucserver`.`su_memberfields`;
TRUNCATE `studio_ucserver`.`su_members`;
TRUNCATE `studio_passport`.`sp_member`;

UPDATE `studio_passport`.`sp_aid_cre` SET `aid_status` = 0;
