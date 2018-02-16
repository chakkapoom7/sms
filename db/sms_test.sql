/*
Navicat MySQL Data Transfer

Source Server         : cola.haadthip.com
Source Server Version : 50505
Source Host           : cola.haadthip.com:3306
Source Database       : sms_test

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2018-02-16 16:33:12
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for tbl_sms
-- ----------------------------
DROP TABLE IF EXISTS `tbl_sms`;
CREATE TABLE `tbl_sms` (
  `sms_id` int(11) NOT NULL AUTO_INCREMENT,
  `number` varchar(100) DEFAULT NULL,
  `msg_type` varchar(100) DEFAULT NULL,
  `message` varchar(500) DEFAULT NULL,
  `group_list` varchar(100) DEFAULT NULL,
  `dyn1` varchar(50) DEFAULT NULL,
  `dyn2` varchar(50) DEFAULT NULL,
  `dyn3` varchar(50) DEFAULT NULL,
  `dyn1_replace_field` varchar(100) DEFAULT NULL,
  `dyn2_replace_field` varchar(100) DEFAULT NULL,
  `dyn3_replace_field` varchar(100) DEFAULT NULL,
  `sender` varchar(20) DEFAULT NULL,
  `quota` varchar(20) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `save_on` datetime DEFAULT NULL,
  `send_on` datetime DEFAULT NULL,
  `response` text,
  UNIQUE KEY `sms_id` (`sms_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_sms
-- ----------------------------
INSERT INTO `tbl_sms` VALUES ('1', '0876543210', 'aa', 'asdadasdasdasd', 'sssss', 'qqq', 'www', 'eee', 'QQQ', 'WWW', 'EEE', 'SMS', '100', 'n', '2018-02-15 00:00:00', '0000-00-00 00:00:00', '');
INSERT INTO `tbl_sms` VALUES ('2', '12312312312', 'phone', 'นี่คือข้อความ\r\nฟหกฟหกฟหก\r\nasdasdasdasdASDASD', 'all', 'กกกก', 'หหหหหหหหห', 'ฟฟฟฟฟฟฟฟ', 'lastname', 'lastname', 'firstname', 'SMS', '999', 'wait', '2018-02-15 16:49:03', '0000-00-00 00:00:00', '');
INSERT INTO `tbl_sms` VALUES ('3', '12312312312', 'phone', 'นี่คือข้อความ\r\nฟหกฟหกฟหก\r\nasdasdasdasdASDASD', 'all', 'กกกก', 'หหหหหหหหห', 'ฟฟฟฟฟฟฟฟ', '', '', '', 'SMS', '999', 'wait', '2018-02-15 16:49:09', '0000-00-00 00:00:00', '');

-- ----------------------------
-- Table structure for tbl_sms_user
-- ----------------------------
DROP TABLE IF EXISTS `tbl_sms_user`;
CREATE TABLE `tbl_sms_user` (
  `user_id` varchar(50) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `group` varchar(255) DEFAULT NULL,
  `system` varchar(255) DEFAULT NULL,
  `env` varchar(255) DEFAULT NULL,
  `current_usage` varchar(255) DEFAULT NULL,
  `maximum_quota` varchar(255) DEFAULT NULL,
  `valid_fr` datetime DEFAULT NULL,
  `valid_to` datetime DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  UNIQUE KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_sms_user
-- ----------------------------
INSERT INTO `tbl_sms_user` VALUES ('', null, null, null, null, null, null, '2018-01-02 15:10:35', '2018-02-13 15:10:25', null);

-- ----------------------------
-- Table structure for vw_userinfo
-- ----------------------------
DROP TABLE IF EXISTS `vw_userinfo`;
CREATE TABLE `vw_userinfo` (
  `Userid` int(11) NOT NULL AUTO_INCREMENT,
  `User_group` varchar(100) DEFAULT NULL,
  `firstname` varchar(100) DEFAULT NULL,
  `lastname` varchar(100) DEFAULT NULL,
  `phone` varchar(10) DEFAULT NULL,
  UNIQUE KEY `Userid` (`Userid`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of vw_userinfo
-- ----------------------------
INSERT INTO `vw_userinfo` VALUES ('1', 'NA', 'ชื่อจริง', 'นามสกุล', '0876543210');
INSERT INTO `vw_userinfo` VALUES ('2', 'TT', 'aaa', 'sss', '0987654321');
INSERT INTO `vw_userinfo` VALUES ('3', 'WS', 'qqq', 'www', '0654321012');
INSERT INTO `vw_userinfo` VALUES ('4', 'NEW', 'zzz', 'xxx', '0878787878');
