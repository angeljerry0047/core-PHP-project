-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 08, 2019 at 02:37 PM
-- Server version: 5.7.25-log
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adfcnet_adaoud_chat`
--

-- --------------------------------------------------------

--
-- Table structure for table `finance_chat`
--

CREATE TABLE `finance_chat` (
  `id` int(10) UNSIGNED NOT NULL,
  `message` text NOT NULL,
  `touser` varchar(50) NOT NULL DEFAULT '*',
  `stamp` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `finance_chat`
--

INSERT INTO `finance_chat` (`id`, `message`, `touser`, `stamp`) VALUES
(1, '', '0', ''),
(2, '', '0', ''),
(3, '', '0', ''),
(7, '', '0', ''),
(8, '', '0', ''),
(9, '', '0', ''),
(10, '', '0', ''),
(11, '', '0', ''),
(12, '', '0', ''),
(13, '', '0', ''),
(14, '', '0', ''),
(15, '', '0', ''),
(16, '', '0', ''),
(17, '', '0', ''),
(18, '', '0', ''),
(19, '', '0', ''),
(20, '', '0', ''),
(21, '', '0', ''),
(22, '', '0', ''),
(23, '123123', '*', '1278622699'),
(24, '123', '*', '1278623015'),
(25, 'test%20test%20%2C%20this%20is%20antoine', '*', '1278623677'),
(26, 'this%20is%20another%20test', '*', '1278623719'),
(27, 'hello%20alex', '*', '1278623759'),
(28, 'you%20should%20hear%20a%20ringing%20tone%20once%20you%20got%20a%20message', '*', '1278623838'),
(29, '123', '*', '1278624999'),
(30, 'time%20test', '*', '1278625112'),
(31, 'time%20test', '*', '1278618214'),
(32, '%u0647%u0630%u0647%20%u062A%u062C%u0631%u0628%u0629%20%u062A%u062C%u0631%u0628%u0629%20%u062A%u062C%u0631%u0628%u0629', '*', '1278618272'),
(33, 'this%20is%20a%20time%20change%20test', '*', '1278618463'),
(34, 'euro%20is%20hovering%20near%20highs', '*', '1278642844');

-- --------------------------------------------------------

--
-- Table structure for table `finance_users`
--

CREATE TABLE `finance_users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `ppw` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `address` varchar(250) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `stamp` varchar(50) NOT NULL,
  `expire` varchar(30) NOT NULL DEFAULT '15',
  `type` varchar(10) NOT NULL DEFAULT 'trial',
  `is_blocked` varchar(5) NOT NULL,
  `advisory` varchar(3) NOT NULL,
  `lastupdate` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `session` varchar(50) NOT NULL,
  `approve` varchar(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `finance_users`
--

INSERT INTO `finance_users` (`id`, `username`, `ppw`, `email`, `fname`, `lname`, `address`, `phone`, `stamp`, `expire`, `type`, `is_blocked`, `advisory`, `lastupdate`, `session`, `approve`) VALUES
(12, 'adavid', 'abcd1234', 'adaoud@sodetel.net.lb', 'anthony', 'david', 'aaaaa', '3333333333333', '1278418736', '15', 'trial', 'no', '', 1278583636, '', '1'),
(13, 'ddavicci', 'abcd1234', 'advisory@adfincorp.com', 'daad', 'davicci', 'aaaaaaaaa', '2222222222', '1278418512', '15', 'trial', '', '', 0, '', '1'),
(16, 'mnajjar', '720006', 'moufidnajjar@hotmail.com', 'moufid', 'najjar', 'Saida Leb Cite Nafissa', '03720008', '1279037766', '15', 'trial', '', '', 0, '', ''),
(15, 'gsuccar', 'abcd1234', 'proffad@hotmail.com', 'george', 'succar', 'aaa aaa', '121212121', '1278834649', '15', 'trial', '', '', 0, '', ''),
(14, 'wmanagement', 'abcd1234', 'ws@adfincorp.com', 'wealth', 'management', 'aaaaa', '11111', '1278535364', '15', 'trial', '', '', 0, '', ''),
(7, 'rmourani', 'abcd1234', 'info@adfincorp.com', 'robert', 'mourani', 'adfadfaf ', '12341241421', '1278324233', '15', 'trial', '', '', 1278396729, 'd9cb122h94k8g0k5hvt7db9n81', '1'),
(11, 'adaoud', 'abcd1234', 'adaoud@adfincorp.com', 'antoine', 'daoud', 'adcd efgh', '1234567', '1278414100', '15', 'client', 'no', 'yes', 1282381687, 'vjt5papv98spgrob0h5du196a1', '1'),
(9, 'anikitin', '123456', 'onixsoft@gmail.com', 'Alex', 'Nikitin', 'Kulika 29-175', '+380505214985', '1278396874', '15', 'trial', '', 'yes', 1278588733, '', '1'),
(17, 'mbazzal', 'abcd1234', 'forexstra@yahoo.com', 'mohammad', 'bazzal', 'Beirut-Lebanon', '961156654', '1279784771', '15', 'trial', '', '', 0, '', ''),
(18, 'mhaider', 'ottomanone', 'rshidhyder@hotmail.com', 'mohammed rashid haider', 'haider', 'plot 2427, mogoditshane, gaborone, Botswana', '+26771764367', '1285478023', '15', 'trial', '', '', 0, '', ''),
(19, 'ahaj madoun', '122534', 'abd.almouhemen@hotmail.com', 'abdalmouhemen', 'haj madoun', 'amman', '962777629798', '1290759278', '15', 'trial', '', '', 0, '', ''),
(20, 'vzenkova', '12345', 'v_zenkova@inbox.ru', 'Vera', 'Zenkova', 'moscow', '+79262272890', '1326362614', '15', 'trial', '', '', 0, '', ''),
(21, 'dvasu', 'adfinancial123', 'dilipdilipk123@rediffmail.com', 'Dilip', 'VAsu', 'INDIA', '+919820146770', '1354715951', '15', 'trial', '', '', 0, '', ''),
(22, 'aavdmudtnaj', 'tqchqals', 'nltnebjdpz@wjzups.com', 'avdmudtnaj', 'avdmudtnaj', 'http://www.rtngitsmfn.com/', 'tqchqals', '1360841840', '15', 'trial', '', '', 0, '', ''),
(23, 'rrzlzlvhxlj', 'nlxqrxsb', 'rirznnrrtf@paudpd.com', 'rzlzlvhxlj', 'rzlzlvhxlj', 'http://www.jcnteidzqi.com/', 'nlxqrxsb', '1360872748', '15', 'trial', '', '', 0, '', ''),
(24, 'xxpycgulqcn', 'vowinddu', 'ygrsjuwjhu@yrqyhu.com', 'xpycgulqcn', 'xpycgulqcn', 'http://www.cwiosmncom.com/', 'vowinddu', '1360964394', '15', 'trial', '', '', 0, '', ''),
(25, 'aaywiuzmkya', 'wnhfopip', 'vtwicreyxm@mkqcmk.com', 'aywiuzmkya', 'aywiuzmkya', 'http://www.mpsalbkvmi.com/', 'wnhfopip', '1361282821', '15', 'trial', '', '', 0, '', ''),
(26, 'jjqgsphmizi', 'jvxveqec', 'kahnqkytya@jrtunc.com', 'jqgsphmizi', 'jqgsphmizi', 'http://www.gmhmocsofm.com/', 'jvxveqec', '1361307788', '15', 'trial', '', '', 0, '', ''),
(27, 'uulnivqcqiv', 'mvpwmqts', 'vjporqrzgj@gldzuv.com', 'ulnivqcqiv', 'ulnivqcqiv', 'http://www.liohswrasw.com/', 'mvpwmqts', '1361332856', '15', 'trial', '', '', 0, '', ''),
(28, 'aperu', 'myway123', 'emailaijaz@rediffmail.com', 'Aijaz', 'Peru', 'Peru', '324 5599', '1369818953', '15', 'trial', '', '', 0, '', ''),
(29, 'bundagama birri', 'joseph', 'marleny_beatriz1217@hotmail.com', 'beatriz marleny', 'undagama birri', 'calle 42 b # 83-10', '3107679585', '1390489927', '15', 'trial', '', '', 0, '', ''),
(30, 'farguello villarreal', '93152048', 'farid9315@hotmail.es', 'farid', 'arguello villarreal', 'carrera 88 bis numero 40-91 sur', '3202915009', '1391126987', '15', 'trial', '', '', 0, '', ''),
(31, 'portiz doncel', 'paola18kevin18', 'pe.bles15@hotmail.com', 'paola andrea', 'ortiz doncel', 'calle 34 bis 87 i 15 sur', '3185070345', '1391190225', '15', 'trial', '', '', 0, '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `finance_chat`
--
ALTER TABLE `finance_chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `finance_users`
--
ALTER TABLE `finance_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `finance_chat`
--
ALTER TABLE `finance_chat`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `finance_users`
--
ALTER TABLE `finance_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
