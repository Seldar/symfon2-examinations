/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : symfony2

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2016-07-21 17:42:30
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `employees`
-- ----------------------------
DROP TABLE IF EXISTS `employees`;
CREATE TABLE `employees` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `transport` enum('Car','Bus','Bike','Train') DEFAULT NULL,
  `distance` decimal(10,0) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of employees
-- ----------------------------
INSERT INTO `employees` VALUES ('1', 'Paul', 'Car', '60');
INSERT INTO `employees` VALUES ('2', 'Martin', 'Bus', '8');
INSERT INTO `employees` VALUES ('3', 'Jeroen', 'Bike', '9');
INSERT INTO `employees` VALUES ('4', 'Tineke', 'Bike', '4');
INSERT INTO `employees` VALUES ('5', 'Arnout', 'Train', '23');
INSERT INTO `employees` VALUES ('6', 'Sander', 'Bike', '11');
