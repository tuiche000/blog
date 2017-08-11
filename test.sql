-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2017 �?08 �?11 �?09:49
-- 服务器版本: 5.5.53
-- PHP 版本: 5.6.27

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `test`
--

-- --------------------------------------------------------

--
-- 表的结构 `chat`
--

CREATE TABLE IF NOT EXISTS `chat` (
  `chat_id` tinyint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT 'AUTO_INCREMENT',
  `chat_toUser` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT '收件人',
  `chat_fromUser` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT '发件人',
  `chat_content` varchar(200) CHARACTER SET utf8 NOT NULL COMMENT '发送内容',
  `chat_date` datetime NOT NULL COMMENT '发送时间',
  PRIMARY KEY (`chat_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- 转存表中的数据 `chat`
--

INSERT INTO `chat` (`chat_id`, `chat_toUser`, `chat_fromUser`, `chat_content`, `chat_date`) VALUES
(1, 'tuiche000', 'admin', '你是MM还是GG', '2017-08-03 16:24:13'),
(2, 'admin', 'tuiche000', '请问你是管理员吗', '2017-08-04 09:50:14'),
(3, 'admin', 'tuiche000', '能否交个朋友', '2017-08-04 10:04:20'),
(4, 'admin', 'tuiche001', '真的是管理员大大吗', '2017-08-04 10:05:49'),
(5, 'admin', '推车', '你好，我是推车', '2017-08-04 10:10:45'),
(6, 'admin', '推车', '你好啊，我想认识你', '2017-08-04 17:53:27'),
(7, 'admin', 'tuiche001', 'hello', '2017-08-08 10:27:54');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'AUTO_INCREMENT',
  `username` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `sex` char(1) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `face` varchar(50) NOT NULL,
  `level` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '//会员等级',
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `sex`, `phone`, `email`, `face`, `level`, `date`) VALUES
(1, 'admin', 'cao15216707627', '男', '13917050556', '845042291@qq.com', '', 1, '2017-07-24'),
(2, 'tuiche000', 'cao15216707627', '女', '15216707627', 'tuiche000@163.com', '', 0, '2017-07-27'),
(3, 'tuiche001', '123456', '', '', '', '', 0, '2017-07-28'),
(4, 'tuiche002', '123456', '', '', '', '', 0, '2017-07-28'),
(5, 'tuiche003', '123456', '', '', '', '', 0, '2017-07-28'),
(6, 'tuiche004', '123', '', '', '', '', 0, '2017-07-28'),
(7, 'tuiche005', '123', '', '', '', '', 0, '2017-07-28'),
(8, 'tuiche006', '123', '', '', '', '', 0, '2017-07-28'),
(9, 'tuiche007', '123', '', '', '', '', 0, '2017-07-28');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
