-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 08, 2019 at 02:36 PM
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
-- Database: `adfcnet_adfincorp`
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
(34, 'euro%20is%20hovering%20near%20highs', '*', '1278642844'),
(35, 'this%20is%20a%20test%20from%20Roger', '*', '1545693972'),
(36, 'this%20is%20a%20test%20from%20roger%2C%20to%20see%20if%20it%20works', '*', '1545716362'),
(37, '%u0631%u062A%u0641%u0639%u062A%20%u0623%u0633%u0639%u0627%u0631%20%u0627%u0644%u0646%u0641%u0637%20%u0627%u0644%u064A%u0648%u0645%20%u0627%u0644%u0627%u062B%u0646%u064A%u0646%20%u0648%u0633%u0637%20%u0645%u0624%u0634%u0631%u0627%u062A%20%u0639%u0644%u0649%20%u062A%u0631%u0627%u062C%u0639%20%u0625%u0645%u062F%u0627%u062F%u0627%u062A%20%u0627%u0644%u062E%u0627%u0645%20%u0627%u0644%u0623%u0645%u0631%u064A%u0643%u064A%u0629%20%u0628%u0639%u062F%20%u0645%u0648%u062C%u0629%20%u0627%u0644%u0647%u0628%u0648%u0637%20%u0627%u0644%u062A%u064A%20%u0634%u0647%u062F%u062A%u0647%u0627%20%u0623%u0633%u0639%u0627%u0631%20%u0627%u0644%u0630%u0647%u0628%20%u0627%u0644%u0623%u0633%u0648%u062F%20%u0641%u064A%20%u0627%u0644%u0622%u0648%u0646%u0629%20%u0627%u0644%u0623%u062E%u064A%u0631.', '*', '1545716477'),
(38, 'Low%20trading%20volume%20is%20expected%20today.Beware%20from%20whipsaws%2C%20%20false%20signals%20and%20money%20managers%20late%20positions%20liquidation.', '*', '1545769741'),
(39, 'testoo', '*', '1546323097'),
(40, 'belloo', '*', '1546323151'),
(41, 'COMING%20IN%202019%2C%20LIVE%20MARKET%20ANALYSIS%20THROUGH%20OUR%20PLATFORM.%0A%0A%23currencies%20%23metals%20%23grains%20%23oil%20%23gas%20%23food%20%23fiber%20%23soft%20%23indices%20%23precious%20%23fx%20%23forex%20%23futures%20%23bitcoin%20%23analysis%20%23platform%20%23commodity%20%23commodities%20%23euro%20%23pound%20%23yen%20%23swissie%20%23aussie%20%23canada%20%23cme%20%23cbot%20%23ice%20%23nymex', '*', '1546323223'),
(42, 'test%201234', '*', '1547821562'),
(43, 'This%20is%20the%20best%20test%20', '*', '1548131589'),
(44, 'work%20hard%3F', '*', '1548131617'),
(45, 'hi%20narendra', '*', '1548185883'),
(46, 'this%20is%20a%20test%20for%20advisory', '*', '1548792202');

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
(35, 'ttest', 'abc123', 'advisory@ad-fc.net', 'test', 'test', 'Mumbai', '0321654789', '1547792670', '15', 'trial', 'no', '', 0, '', '1'),
(11, 'adaoud', 'abcd1234', 'adaoud@adfincorp.com', 'antoine', 'daoud', 'adcd efgh', '1234567', '1278414100', '15', 'client', 'no', 'yes', 1549449306, 'ac1dd09f75a1d089334de40b8649f921', '1'),
(37, 'bfor', 'abcd', 'beyfor@live.com', 'bey', 'for', 'beirut', '5446785', '1548081334', '15', 'trial', '', '', 0, '', '1'),
(34, 'aconsulting', 'abcd1234', 'adfinancialconsulting@outlook.com', 'adfinancial', 'consulting', 'jounieh', '6733456', '1546292191', '15', 'trial', '', 'yes', 0, '', '1');

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `finance_users`
--
ALTER TABLE `finance_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
