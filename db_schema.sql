-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 11, 2011 at 07:25 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `navms06`
--

-- --------------------------------------------------------

--
-- Table structure for table `careerdetails`
--

CREATE TABLE IF NOT EXISTS `careerdetails` (
  `id` int(4) NOT NULL,
  `cwin` varchar(20) NOT NULL,
  `prevemployers` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `careerdetails`
--

INSERT INTO `careerdetails` (`id`, `cwin`, `prevemployers`) VALUES
(14, '', ''),
(7, '', ''),
(7, '', ''),
(7, '', ''),
(7, '', ''),
(7, '', ''),
(15, '', ''),
(16, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `contactinfo`
--

CREATE TABLE IF NOT EXISTS `contactinfo` (
  `id` int(4) NOT NULL,
  `email` varchar(25) NOT NULL,
  `mobno` varchar(12) NOT NULL,
  `afc` varchar(200) NOT NULL,
  `native` varchar(20) NOT NULL,
  `clocation` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactinfo`
--

INSERT INTO `contactinfo` (`id`, `email`, `mobno`, `afc`, `native`, `clocation`) VALUES
(1, 'sathishtop@gmail.com', '9790829924', 'aaaaaaaaaaaaaaaa', '', ''),
(16, 'sathishtop@gmail.com', '9799999999', 'aaaaaaaaaaaaaaaaaaaaaaaaaaa', '', ''),
(15, 'sathish_top@yahoo.co.in', '9790829924', 'test addresss', '', ''),
(14, 'sathish_top@yahoo.co.in', '9790829924', 'test addresss', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `edudetails`
--

CREATE TABLE IF NOT EXISTS `edudetails` (
  `id` int(4) NOT NULL,
  `highersec` varchar(20) NOT NULL,
  `ug` varchar(25) NOT NULL,
  `pg` varchar(25) NOT NULL,
  `others` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `edudetails`
--

INSERT INTO `edudetails` (`id`, `highersec`, `ug`, `pg`, `others`) VALUES
(14, '12', 'BE', 'cseeeeeeebe', ''),
(15, '', 'dsadsdbeCSE', '', ''),
(16, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `notificationdetails`
--

CREATE TABLE IF NOT EXISTS `notificationdetails` (
  `id` int(4) NOT NULL,
  `willing` int(1) NOT NULL,
  `notiftype` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notificationdetails`
--

INSERT INTO `notificationdetails` (`id`, `willing`, `notiftype`) VALUES
(14, 0, ''),
(15, 0, ''),
(16, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `profileinfo`
--

CREATE TABLE IF NOT EXISTS `profileinfo` (
  `id` int(4) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `sex` varchar(8) NOT NULL,
  `clocation` varchar(20) NOT NULL,
  `pphoto` varchar(20) NOT NULL,
  `interests` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profileinfo`
--

INSERT INTO `profileinfo` (`id`, `fname`, `dob`, `sex`, `clocation`, `pphoto`, `interests`) VALUES
(14, 'fname', '0000-00-00', '', '', '', ''),
(15, 'fname', '0000-00-00', '', '', '', ''),
(16, 'fname', '0000-00-00', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `refererinfo`
--

CREATE TABLE IF NOT EXISTS `refererinfo` (
  `id` int(4) NOT NULL,
  `refid` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `refererinfo`
--

INSERT INTO `refererinfo` (`id`, `refid`) VALUES
(7, '0'),
(7, 'sathish1'),
(7, 'sathish1'),
(7, 'sathish1'),
(7, 'sathish1'),
(7, 'sathish1'),
(14, 'sathish'),
(15, 'sathish'),
(16, 'sathish');

-- --------------------------------------------------------

--
-- Table structure for table `shoutbox`
--

CREATE TABLE IF NOT EXISTS `shoutbox` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user` varchar(25) NOT NULL DEFAULT 'anonimous',
  `message` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `shoutbox`
--

INSERT INTO `shoutbox` (`id`, `date`, `user`, `message`) VALUES
(11, '2010-12-28 17:55:46', 'hiiii', 'hi'),
(10, '2010-12-28 17:55:41', 'hi', 'hi'),
(9, '2010-12-28 17:49:00', 'hi', 'hi'),
(8, '2010-12-28 17:47:26', 'test', 'test'),
(7, '2010-12-28 17:40:46', 'hi', 'hi'),
(12, '2010-12-28 17:55:51', 'hiiii', 'hi'),
(13, '2010-12-28 17:55:55', 'hiiii', 'hi'),
(14, '2010-12-28 17:55:56', 'hiiii', 'hi'),
(15, '2010-12-28 17:57:06', 'tttttt', 'hi'),
(16, '2010-12-28 17:58:41', 'guest', 'hi'),
(17, '2010-12-28 18:00:16', 'fname', 'hi alll'),
(18, '2010-12-28 18:00:31', 'fname', 'hi alll'),
(19, '2010-12-28 19:59:19', 'guest', 'hi'),
(20, '2010-12-28 19:59:22', 'guest', 'hibye'),
(21, '2011-01-03 11:06:18', 'guest', 'hi');

-- --------------------------------------------------------

--
-- Table structure for table `userlogininfo`
--

CREATE TABLE IF NOT EXISTS `userlogininfo` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `uname` varchar(20) NOT NULL,
  `passkey` varchar(50) NOT NULL,
  `mail` int(1) NOT NULL,
  `referer` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `userlogininfo`
--

INSERT INTO `userlogininfo` (`id`, `uname`, `passkey`, `mail`, `referer`) VALUES
(1, 'sathish', 'test', 1, 1),
(16, 'sathish123', '41510d1d0b41bb9d81c07eb7bc658d0a', 1, 1),
(14, 'sathishtest', 'c660b65a1cb75742d88dc8fbbd698a53', 1, 1);
