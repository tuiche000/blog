-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2017 年 07 月 31 日 09:20
-- 服务器版本: 5.5.53
-- PHP 版本: 5.4.45

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `sex`, `phone`, `email`, `face`, `level`, `date`) VALUES
(1, 'admin', 'admin', '女', '13917050556', '845042291@qq.com', '', 1, '2017-07-24'),
(2, 'tuiche000', 'cao15216707627', '男', '15216707627', 'tuiche000@163.com', '', 0, '2017-07-27'),
(3, 'tuiche001', '123456', '', '', '', '', 0, '2017-07-28'),
(4, 'tuiche002', '123456', '', '', '', '', 0, '2017-07-28'),
(5, 'tuiche003', '123456', '', '', '', '', 0, '2017-07-28'),
(6, 'tuiche004', '123', '', '', '', '', 0, '2017-07-28'),
(7, 'tuiche005', '123', '', '', '', '', 0, '2017-07-28'),
(8, 'tuiche006', '123', '', '', '', '', 0, '2017-07-28'),
(9, 'tuiche007', '123', '', '', '', '', 0, '2017-07-28'),
(10, 'tuiche008', '123', '', '', '', '', 0, '2017-07-28'),
(11, 'tuiche009', '123', '', '', '', '', 0, '2017-07-28');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
