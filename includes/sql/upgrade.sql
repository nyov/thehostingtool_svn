ALTER TABLE `%PRE%user_packs` CHANGE `id` `id` MEDIUMINT( 9 ) UNSIGNED NOT NULL AUTO_INCREMENT, CHANGE `userid` `userid` MEDIUMINT( 9 ) UNSIGNED NOT NULL;
DELETE FROM `%PRE%config` WHERE `name` = 'smtp_user' LIMIT 1;
DELETE FROM `%PRE%config` WHERE `name` = 'senabled' LIMIT 1;
ALTER TABLE `%PRE%config` ADD PRIMARY KEY(`name`);
UPDATE `%PRE%config` SET `name` = 'vname' WHERE `name` = 'version' LIMIT 1;
INSERT INTO `%PRE%config` (`name`, `value`) VALUES ('vcode', '1010204');
INSERT INTO `%PRE%config` (`name`, `value`) VALUES ('timezone', 'UTC');
ALTER TABLE `%PRE%servers` CHANGE `name` `name` VARCHAR(75) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, CHANGE `host` `host` VARCHAR(75) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, CHANGE `user` `user` VARCHAR(75) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL;
INSERT INTO `%PRE%config` (`name`, `value`) VALUES ('wwwsubdomain', 'both');
INSERT INTO `%PRE%config` (`name` ,`value`) VALUES ('smtp_port',  '25'), ('smtp_secure',  '0');