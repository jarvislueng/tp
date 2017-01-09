/*
Navicat MySQL Data Transfer

Source Server         : test
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : course

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-01-09 09:16:19
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for course
-- ----------------------------
DROP TABLE IF EXISTS `course`;
CREATE TABLE `course` (
  `teacher_id` int(11) NOT NULL,
  `course_introduce` varchar(155) NOT NULL,
  `course_name` varchar(15) NOT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `course_id` int(11) NOT NULL,
  PRIMARY KEY (`course_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of course
-- ----------------------------

-- ----------------------------
-- Table structure for think_course
-- ----------------------------
DROP TABLE IF EXISTS `think_course`;
CREATE TABLE `think_course` (
  `id` smallint(4) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `type` smallint(6) NOT NULL,
  `decribe` varchar(255) NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=63 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of think_course
-- ----------------------------
INSERT INTO `think_course` VALUES ('60', '12qw', '231', '321', '1', 'http://tp.localhost/Public/Uploads/5872097e0f429.png');
INSERT INTO `think_course` VALUES ('61', '12', '123131231', '231', '2313', 'http://tp.localhost/Public/Uploads/58720a90af96f.png');

-- ----------------------------
-- Table structure for think_form
-- ----------------------------
DROP TABLE IF EXISTS `think_form`;
CREATE TABLE `think_form` (
  `id` smallint(4) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `create_time` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of think_form
-- ----------------------------
INSERT INTO `think_form` VALUES ('7', 'te', '2\r\n', '00:00:00');
INSERT INTO `think_form` VALUES ('2', 'sds', 'asddfasff', '00:00:00');
INSERT INTO `think_form` VALUES ('6', 'te', '1', '00:00:00');
INSERT INTO `think_form` VALUES ('8', 'dfds', 'adfdsgdsgasdgdasgad', '00:00:00');
