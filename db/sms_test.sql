/*
Navicat MySQL Data Transfer

Source Server         : cola.haadthip.com
Source Server Version : 50505
Source Host           : cola.haadthip.com:3306
Source Database       : sms_test

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2018-03-02 17:14:38
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for tbl_employee
-- ----------------------------
DROP TABLE IF EXISTS `tbl_employee`;
CREATE TABLE `tbl_employee` (
  `id` varchar(50) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_employee
-- ----------------------------
INSERT INTO `tbl_employee` VALUES ('55555', 'a');
INSERT INTO `tbl_employee` VALUES ('2', 'b');
INSERT INTO `tbl_employee` VALUES ('3', 'c');
INSERT INTO `tbl_employee` VALUES ('4', 'd');
INSERT INTO `tbl_employee` VALUES ('111', 'f');
INSERT INTO `tbl_employee` VALUES ('55555', 'a');
INSERT INTO `tbl_employee` VALUES ('2', 'b');
INSERT INTO `tbl_employee` VALUES ('3', 'c');
INSERT INTO `tbl_employee` VALUES ('4', 'd');
INSERT INTO `tbl_employee` VALUES ('111', 'f');
INSERT INTO `tbl_employee` VALUES ('55555', 'a');
INSERT INTO `tbl_employee` VALUES ('2', 'b');
INSERT INTO `tbl_employee` VALUES ('3', 'c');
INSERT INTO `tbl_employee` VALUES ('4', 'd');
INSERT INTO `tbl_employee` VALUES ('111', 'f');
INSERT INTO `tbl_employee` VALUES ('55555', 'a');
INSERT INTO `tbl_employee` VALUES ('2', 'b');
INSERT INTO `tbl_employee` VALUES ('3', 'c');
INSERT INTO `tbl_employee` VALUES ('4', 'd');
INSERT INTO `tbl_employee` VALUES ('111', 'f');
INSERT INTO `tbl_employee` VALUES ('55555', 'a');
INSERT INTO `tbl_employee` VALUES ('2', 'b');
INSERT INTO `tbl_employee` VALUES ('3', 'c');
INSERT INTO `tbl_employee` VALUES ('4', 'd');
INSERT INTO `tbl_employee` VALUES ('111', 'f');
INSERT INTO `tbl_employee` VALUES ('55555', 'a');
INSERT INTO `tbl_employee` VALUES ('2', 'b');
INSERT INTO `tbl_employee` VALUES ('3', 'c');
INSERT INTO `tbl_employee` VALUES ('4', 'd');
INSERT INTO `tbl_employee` VALUES ('111', 'f');
INSERT INTO `tbl_employee` VALUES ('55555', 'a');
INSERT INTO `tbl_employee` VALUES ('2', 'b');
INSERT INTO `tbl_employee` VALUES ('3', 'c');
INSERT INTO `tbl_employee` VALUES ('4', 'd');
INSERT INTO `tbl_employee` VALUES ('111', 'f');
INSERT INTO `tbl_employee` VALUES ('55555', 'a');
INSERT INTO `tbl_employee` VALUES ('2', 'b');
INSERT INTO `tbl_employee` VALUES ('3', 'c');
INSERT INTO `tbl_employee` VALUES ('4', 'd');
INSERT INTO `tbl_employee` VALUES ('111', 'f');
INSERT INTO `tbl_employee` VALUES ('55555', 'a');
INSERT INTO `tbl_employee` VALUES ('2', 'b');
INSERT INTO `tbl_employee` VALUES ('3', 'c');
INSERT INTO `tbl_employee` VALUES ('4', 'd');
INSERT INTO `tbl_employee` VALUES ('111', 'f');
INSERT INTO `tbl_employee` VALUES ('55555', 'a');
INSERT INTO `tbl_employee` VALUES ('2', 'b');
INSERT INTO `tbl_employee` VALUES ('3', 'c');
INSERT INTO `tbl_employee` VALUES ('4', 'd');
INSERT INTO `tbl_employee` VALUES ('111', 'f');
INSERT INTO `tbl_employee` VALUES ('55555', 'a');
INSERT INTO `tbl_employee` VALUES ('2', 'b');
INSERT INTO `tbl_employee` VALUES ('3', 'c');
INSERT INTO `tbl_employee` VALUES ('4', 'd');
INSERT INTO `tbl_employee` VALUES ('111', 'f');

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
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_sms
-- ----------------------------
INSERT INTO `tbl_sms` VALUES ('1', '0876543210', 'aa', 'asdadasdasdasd', 'sssss', 'qqq', 'www', 'eee', 'QQQ', 'WWW', 'EEE', 'SMS', '100', 'n', '2018-02-15 00:00:00', '0000-00-00 00:00:00', '');
INSERT INTO `tbl_sms` VALUES ('2', '12312312312', 'phone', 'นี่คือข้อความ\r\nฟหกฟหกฟหก\r\nasdasdasdasdASDASD', 'all', 'กกกก', 'หหหหหหหหห', 'ฟฟฟฟฟฟฟฟ', 'lastname', 'lastname', 'firstname', 'SMS', '999', 'wait', '2018-02-15 16:49:03', '0000-00-00 00:00:00', '');
INSERT INTO `tbl_sms` VALUES ('3', '12312312312', 'phone', 'นี่คือข้อความ\r\nฟหกฟหกฟหก\r\nasdasdasdasdASDASD', 'all', 'กกกก', 'หหหหหหหหห', 'ฟฟฟฟฟฟฟฟ', '', '', '', 'SMS', '999', 'wait', '2018-02-15 16:49:09', '0000-00-00 00:00:00', '');
INSERT INTO `tbl_sms` VALUES ('4', '', 'group', 'ffghfghfgh', 'all', '', '', '', '', '', '', 'SMS', '999', 'wait', '2018-02-22 09:20:41', '0000-00-00 00:00:00', '');
INSERT INTO `tbl_sms` VALUES ('5', '', 'group', 'ffghfghfgh', 'all', '', '', '', '', '', '', 'SMS', '999', 'wait', '2018-02-22 09:21:01', '0000-00-00 00:00:00', '');
INSERT INTO `tbl_sms` VALUES ('6', '', 'group', 'ffghfghfgh', 'all', '', '', '', '', '', '', 'SMS', '999', 'wait', '2018-02-22 09:21:26', '0000-00-00 00:00:00', '');
INSERT INTO `tbl_sms` VALUES ('7', '', 'group', 'ffghfghfgh', 'all', '', '', '', '', '', '', 'SMS', '999', 'wait', '2018-02-22 09:21:28', '0000-00-00 00:00:00', '');
INSERT INTO `tbl_sms` VALUES ('8', '', 'group', 'ffghfghfgh', 'all', '', '', '', '', '', '', 'SMS', '999', 'wait', '2018-02-22 09:21:32', '0000-00-00 00:00:00', '');
INSERT INTO `tbl_sms` VALUES ('9', '', 'group', 'ffghfghfgh', 'all', '', '', '', '', '', '', 'SMS', '999', 'wait', '2018-02-22 09:21:40', '0000-00-00 00:00:00', '');
INSERT INTO `tbl_sms` VALUES ('10', '', 'group', 'ffghfghfgh', 'all', '', '', '', '', '', '', 'SMS', '999', 'wait', '2018-02-22 09:21:40', '0000-00-00 00:00:00', '');
INSERT INTO `tbl_sms` VALUES ('11', '', 'group', 'ffghfghfgh', 'all', '', '', '', '', '', '', 'SMS', '999', 'wait', '2018-02-22 09:25:30', '0000-00-00 00:00:00', '');
INSERT INTO `tbl_sms` VALUES ('12', '', 'group', 'ffghfghfgh', 'all', '', '', '', '', '', '', 'SMS', '999', 'wait', '2018-02-22 09:26:26', '0000-00-00 00:00:00', '');
INSERT INTO `tbl_sms` VALUES ('13', '', 'group', 'ffghfghfgh', 'all', '', '', '', '', '', '', 'SMS', '999', 'wait', '2018-02-22 09:27:12', '0000-00-00 00:00:00', '');
INSERT INTO `tbl_sms` VALUES ('14', '', 'group', 'ffghfghfgh', 'all', '', '', '', '', '', '', 'SMS', '999', 'wait', '2018-02-22 09:28:07', '0000-00-00 00:00:00', '');
INSERT INTO `tbl_sms` VALUES ('15', '', 'group', 'ffghfghfgh', 'all', '', '', '', '', '', '', 'SMS', '999', 'wait', '2018-02-22 09:21:40', '0000-00-00 00:00:00', '');
INSERT INTO `tbl_sms` VALUES ('16', '123123123', 'phone', 'asd', 'all', '', '', '', '', '', '', 'SMS', '999', 'wait', '2018-02-26 16:35:33', '0000-00-00 00:00:00', '');
INSERT INTO `tbl_sms` VALUES ('17', '', '', '', '', '', '', '', '', '', '', '', '999', 'wait', '2018-02-27 13:22:52', '0000-00-00 00:00:00', '');

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
INSERT INTO `tbl_sms_user` VALUES ('aaaa', 'aaaa', 'na', null, null, '1', '20', '2018-01-02 15:10:35', '2018-04-01 15:10:25', 'active');
INSERT INTO `tbl_sms_user` VALUES ('bbbb', 'bbbb', 'tt', null, null, '3', '50', '2018-02-18 15:00:49', '2018-02-20 15:01:06', 'inactive');
INSERT INTO `tbl_sms_user` VALUES ('zzzzz', 'zzzzz', 'it', null, null, '30', '30', '2018-02-21 11:19:54', '2018-04-26 11:20:00', 'active');

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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of vw_userinfo
-- ----------------------------
INSERT INTO `vw_userinfo` VALUES ('1', 'NA', 'ชื่อจริง', 'นามสกุล', '0876543210');
INSERT INTO `vw_userinfo` VALUES ('2', 'TT', 'aaa', 'sss', '0987654321');
INSERT INTO `vw_userinfo` VALUES ('3', 'WS', 'qqq', 'www', '0654321012');
INSERT INTO `vw_userinfo` VALUES ('4', 'NEW', 'zzz', 'xxx', '0878787878');
INSERT INTO `vw_userinfo` VALUES ('5', 'NA', 'www', 'www', '0999999487');
INSERT INTO `vw_userinfo` VALUES ('6', 'NA', 'qazwsx', 'xswzaq', '0987654321');
