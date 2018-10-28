/*
Navicat MySQL Data Transfer

Source Server         : weizheng
Source Server Version : 50547
Source Host           : localhost:3306
Source Database       : fruit_crush

Target Server Type    : MYSQL
Target Server Version : 50547
File Encoding         : 65001

Date: 2017-09-19 14:41:37
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for about
-- ----------------------------
DROP TABLE IF EXISTS `about`;
CREATE TABLE `about` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `img_url` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of about
-- ----------------------------
INSERT INTO `about` VALUES ('1', 'images/team-1.jpg');
INSERT INTO `about` VALUES ('2', 'images/team-2.jpg');
INSERT INTO `about` VALUES ('3', 'images/team-3.jpg');
INSERT INTO `about` VALUES ('4', 'images/team-4.jpg');

-- ----------------------------
-- Table structure for blog_list
-- ----------------------------
DROP TABLE IF EXISTS `blog_list`;
CREATE TABLE `blog_list` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `img_url` varchar(100) DEFAULT NULL,
  `blog_title` varchar(100) DEFAULT NULL,
  `blog_content` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of blog_list
-- ----------------------------
INSERT INTO `blog_list` VALUES ('1', 'images/b1.jpg', '我们只生产全世界最优质水果的果汁', '为什么我们只生产全世界最优质的水果的果汁，因为我们想让全世界的人喝道最安全，最放心，最优质的果汁，为了这个目标，我们需要不懈的努力才能够达到。为什么我们只生产全世界最优质的水果的果汁，因为我们想让全世界的人喝道最安全，最放心，最优质的果汁，为了这个目标，我们需要不懈的努力才能够达到。为什么我们只生产全世界最优质的水果的果汁，因为我们想让全世界的人喝道最安全，最放心，最优质的果汁，为了这个目标，我们需要不懈的努力才能够达到。', '2017-08-09');
INSERT INTO `blog_list` VALUES ('2', 'images/b2.jpg', '我们只生产全世界最优质水果的果汁', '为什么我们只生产全世界最优质的水果的果汁，因为我们想让全世界的人喝道最安全，最放心，最优质的果汁，为了这个目标，我们需要不懈的努力才能够达到。为什么我们只生产全世界最优质的水果的果汁，因为我们想让全世界的人喝道最安全，最放心，最优质的果汁，为了这个目标，我们需要不懈的努力才能够达到。为什么我们只生产全世界最优质的水果的果汁，因为我们想让全世界的人喝道最安全，最放心，最优质的果汁，为了这个目标，我们需要不懈的努力才能够达到。', '2017-08-09');
INSERT INTO `blog_list` VALUES ('3', 'images/b3.jpg', '我们只生产全世界最优质水果的果汁', '为什么我们只生产全世界最优质的水果的果汁，因为我们想让全世界的人喝道最安全，最放心，最优质的果汁，为了这个目标，我们需要不懈的努力才能够达到。为什么我们只生产全世界最优质的水果的果汁，因为我们想让全世界的人喝道最安全，最放心，最优质的果汁，为了这个目标，我们需要不懈的努力才能够达到。为什么我们只生产全世界最优质的水果的果汁，因为我们想让全世界的人喝道最安全，最放心，最优质的果汁，为了这个目标，我们需要不懈的努力才能够达到。', '2017-08-10');
INSERT INTO `blog_list` VALUES ('4', 'images/b4.jpg', '我们只生产全世界最优质水果的果汁', '为什么我们只生产全世界最优质的水果的果汁，因为我们想让全世界的人喝道最安全，最放心，最优质的果汁，为了这个目标，我们需要不懈的努力才能够达到。为什么我们只生产全世界最优质的水果的果汁，因为我们想让全世界的人喝道最安全，最放心，最优质的果汁，为了这个目标，我们需要不懈的努力才能够达到。为什么我们只生产全世界最优质的水果的果汁，因为我们想让全世界的人喝道最安全，最放心，最优质的果汁，为了这个目标，我们需要不懈的努力才能够达到。', '2017-08-08');
INSERT INTO `blog_list` VALUES ('5', 'images/b5.jpg', '我们只生产全世界最优质水果的果汁', '为什么我们只生产全世界最优质的水果的果汁，因为我们想让全世界的人喝道最安全，最放心，最优质的果汁，为了这个目标，我们需要不懈的努力才能够达到。为什么我们只生产全世界最优质的水果的果汁，因为我们想让全世界的人喝道最安全，最放心，最优质的果汁，为了这个目标，我们需要不懈的努力才能够达到。为什么我们只生产全世界最优质的水果的果汁，因为我们想让全世界的人喝道最安全，最放心，最优质的果汁，为了这个目标，我们需要不懈的努力才能够达到。', '2017-08-11');
INSERT INTO `blog_list` VALUES ('6', 'images/b6.jpg', '我们只生产全世界最优质水果的果汁', '为什么我们只生产全世界最优质的水果的果汁，因为我们想让全世界的人喝道最安全，最放心，最优质的果汁，为了这个目标，我们需要不懈的努力才能够达到。为什么我们只生产全世界最优质的水果的果汁，因为我们想让全世界的人喝道最安全，最放心，最优质的果汁，为了这个目标，我们需要不懈的努力才能够达到。为什么我们只生产全世界最优质的水果的果汁，因为我们想让全世界的人喝道最安全，最放心，最优质的果汁，为了这个目标，我们需要不懈的努力才能够达到。', '2017-08-18');
INSERT INTO `blog_list` VALUES ('7', 'images/b7.jpg', '我们只生产全世界最优质水果的果汁', '为什么我们只生产全世界最优质的水果的果汁，因为我们想让全世界的人喝道最安全，最放心，最优质的果汁，为了这个目标，我们需要不懈的努力才能够达到。为什么我们只生产全世界最优质的水果的果汁，因为我们想让全世界的人喝道最安全，最放心，最优质的果汁，为了这个目标，我们需要不懈的努力才能够达到。为什么我们只生产全世界最优质的水果的果汁，因为我们想让全世界的人喝道最安全，最放心，最优质的果汁，为了这个目标，我们需要不懈的努力才能够达到。', '2017-08-23');
INSERT INTO `blog_list` VALUES ('8', 'images/b8.jpg', '我们只生产全世界最优质水果的果汁', '为什么我们只生产全世界最优质的水果的果汁，因为我们想让全世界的人喝道最安全，最放心，最优质的果汁，为了这个目标，我们需要不懈的努力才能够达到。为什么我们只生产全世界最优质的水果的果汁，因为我们想让全世界的人喝道最安全，最放心，最优质的果汁，为了这个目标，我们需要不懈的努力才能够达到。为什么我们只生产全世界最优质的水果的果汁，因为我们想让全世界的人喝道最安全，最放心，最优质的果汁，为了这个目标，我们需要不懈的努力才能够达到。', '2017-08-28');
INSERT INTO `blog_list` VALUES ('9', 'images/b1.jpg', '我们只生产全世界最优质水果的果汁', '为什么我们只生产全世界最优质的水果的果汁，因为我们想让全世界的人喝道最安全，最放心，最优质的果汁，为了这个目标，我们需要不懈的努力才能够达到。为什么我们只生产全世界最优质的水果的果汁，因为我们想让全世界的人喝道最安全，最放心，最优质的果汁，为了这个目标，我们需要不懈的努力才能够达到。为什么我们只生产全世界最优质的水果的果汁，因为我们想让全世界的人喝道最安全，最放心，最优质的果汁，为了这个目标，我们需要不懈的努力才能够达到。', '2017-08-23');

-- ----------------------------
-- Table structure for comment
-- ----------------------------
DROP TABLE IF EXISTS `comment`;
CREATE TABLE `comment` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `comment` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of comment
-- ----------------------------
INSERT INTO `comment` VALUES ('18', '我爱你~', '08月14日');
INSERT INTO `comment` VALUES ('17', '果汁外卖网', '08月11日');

-- ----------------------------
-- Table structure for contact
-- ----------------------------
DROP TABLE IF EXISTS `contact`;
CREATE TABLE `contact` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of contact
-- ----------------------------
INSERT INTO `contact` VALUES ('1', 'weizheng', '837385967@qq.com', '阿瓦达');
INSERT INTO `contact` VALUES ('2', 'houke', '456456@ada.com', '大阿达瓦单位');
INSERT INTO `contact` VALUES ('3', 'wdz', '2222@163.com', '222222222222222');

-- ----------------------------
-- Table structure for feature_list
-- ----------------------------
DROP TABLE IF EXISTS `feature_list`;
CREATE TABLE `feature_list` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `feature_title` varchar(255) DEFAULT NULL,
  `feature_content` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of feature_list
-- ----------------------------
INSERT INTO `feature_list` VALUES ('1', '我们只生产全世界最优质水果的果汁', '为什么我们只生产全世界最优质的水果的果汁，因为我们想让全世界的人喝道最安全，最放心，最优质的果汁，为了这个目标，我们需要不懈的努力才能够达到。');

-- ----------------------------
-- Table structure for gallery_list
-- ----------------------------
DROP TABLE IF EXISTS `gallery_list`;
CREATE TABLE `gallery_list` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `img_url` varchar(100) DEFAULT NULL,
  `gallery_introduce` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of gallery_list
-- ----------------------------
INSERT INTO `gallery_list` VALUES ('1', 'images/b1.jpg', '黑网站，我们更专业！！！！！');
INSERT INTO `gallery_list` VALUES ('2', 'images/b2.jpg', '为什么我们只生产全世界最优质的水果的果汁，因为我们想让全世界的人喝道最安全，最放心，最优质的果汁。');
INSERT INTO `gallery_list` VALUES ('3', 'images/b3.jpg', '为什么我们只生产全世界最优质的水果的果汁，因为我们想让全世界的人喝道最安全，最放心，最优质的果汁。');
INSERT INTO `gallery_list` VALUES ('4', 'images/b4.jpg', '为什么我们只生产全世界最优质的水果的果汁，因为我们想让全世界的人喝道最安全，最放心，最优质的果汁。');
INSERT INTO `gallery_list` VALUES ('5', 'images/b5.jpg', '为什么我们只生产全世界最优质的水果的果汁，因为我们想让全世界的人喝道最安全，最放心，最优质的果汁。');
INSERT INTO `gallery_list` VALUES ('6', 'images/b6.jpg', '为什么我们只生产全世界最优质的水果的果汁，因为我们想让全世界的人喝道最安全，最放心，最优质的果汁。');
INSERT INTO `gallery_list` VALUES ('7', 'images/b7.jpg', '为什么我们只生产全世界最优质的水果的果汁，因为我们想让全世界的人喝道最安全，最放心，最优质的果汁。');
INSERT INTO `gallery_list` VALUES ('8', 'images/b8.jpg', '为什么我们只生产全世界最优质的水果的果汁，因为我们想让全世界的人喝道最安全，最放心，最优质的果汁。');
INSERT INTO `gallery_list` VALUES ('9', 'images/b1.jpg', '为什么我们只生产全世界最优质的水果的果汁，因为我们想让全世界的人喝道最安全，最放心，最优质的果汁。');

-- ----------------------------
-- Table structure for services_list
-- ----------------------------
DROP TABLE IF EXISTS `services_list`;
CREATE TABLE `services_list` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `servies_title` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of services_list
-- ----------------------------
INSERT INTO `services_list` VALUES ('1', '果汁外卖网的广告 喝果汁就上果汁外卖网');
INSERT INTO `services_list` VALUES ('2', '果汁外卖网的广告 喝果汁就上果汁外卖网');
INSERT INTO `services_list` VALUES ('3', '果汁外卖网的广告 喝果汁就上果汁外卖网');
INSERT INTO `services_list` VALUES ('4', '果汁外卖网的广告 喝果汁就上果汁外卖网');
INSERT INTO `services_list` VALUES ('5', '果汁外卖网的广告 喝果汁就上果汁外卖网');
INSERT INTO `services_list` VALUES ('6', '果汁外卖网的广告 喝果汁就上果汁外卖网');
INSERT INTO `services_list` VALUES ('7', '果汁外卖网为您提供各种优质服务，包括派送，果汁制作流程录像，选用水果产地介绍，优惠价格等等；除了这些服务，我们还为您准备了一份礼物，那就是包含全世界各地优质水果的水果大礼包一份，希望您能继续支持我们，您的支持就是我们的动力！');
