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
