
INSERT INTO `sp_admin_menu` (`name`, `parentid`, `app_code`, `controller`, `method`, `extparam`, `listorder`, `islog`, `display`) VALUES
('广告管理', 4, 'passport', '', '', '', 0, '1', '1'),


INSERT INTO `sp_admin_menu` (`name`, `parentid`, `app_code`, `controller`, `method`, `extparam`, `listorder`, `islog`, `display`) VALUES
('管理精灵', 90, 'webgame', 'spirit', 'listinfo', '', 0, '1', '1'),
('添加精灵', 90, 'webgame', 'spirit', 'add', '', 0, '1', '2'),
('查看精灵', 90, 'webgame', 'spirit', 'view', '', 0, '1', '3'),
('编辑精灵', 90, 'webgame', 'spirit', 'edit', '', 0, '1', '3'),
('删除精灵', 90, 'webgame', 'spirit', 'delete', '', 0, '1', '3'),








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