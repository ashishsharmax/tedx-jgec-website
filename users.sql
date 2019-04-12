-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2018 at 11:26 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registered_users`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `no` int(11) NOT NULL,
  `name` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `gender` varchar(55) NOT NULL,
  `school` varchar(100) NOT NULL,
  `age` int(120) NOT NULL,
  `q1` varchar(250) NOT NULL,
  `q2` varchar(250) NOT NULL,
  `q3` varchar(250) NOT NULL,
  `q4` varchar(250) NOT NULL,
  `q5` varchar(250) NOT NULL,
  `shirt` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`no`, `name`, `email`, `gender`, `school`, `age`, `q1`, `q2`, `q3`, `q4`, `q5`, `shirt`) VALUES
(2, 'ASHISH', 'asd@asd.com', '', 'JGEC', 15, 'q1', 'q2', '', 'q4', 'q5', '0'),
(3, 'ASHISH', 'asd@asd.com', '', 'JGEC', 15, 'q1', 'q2', '', 'q4', 'q5', '0'),
(4, 'ASHISH', 'asd@asd.com', '', 'JGEC', 15, 'q1', 'q2', '', 'q4', 'q5', '0'),
(5, 'ASHISH', 'ashisharma.sharma1234@gmail.com', 'male', 'JGEC', 22, 'q1', 'q2', 'q3', 'q4', 'q5', '0'),
(6, 'Lorem', 'ksnfsldn@gmail.com', 'male', 'KGEC', 23, 'ncjsdvnjlnlnlk', 'alsndclfsnldvnlksndlk', 'sdlnvlsndvlnlk', 'asdasd', 'asdasd', '0'),
(7, 'Lorem', 'ksnfsldn@gmail.com', 'male', 'KGEC', 23, 'ncjsdvnjlnlnlk', 'alsndclfsnldvnlksndlk', 'sdlnvlsndvlnlk', 'asdasd', 'asdasd', '0'),
(8, 'asda', 'asd@sad.com', 'male', 'asdasd', 56, 'asdasd', 'asdasd', 'asd', 'ads', 'ads', '0'),
(9, 'asda', 'asd@sad.com', 'male', 'asdasd', 56, 'asdasd', 'asdasd', 'asd', 'ads', 'ads', '0'),
(10, 'gurtej', 'sdbfb@jj.com', 'male', 'JGEC', 26, 'dhfsudhfhsidhfsidhfoishdfihsidhfioshdifhshdfish', 'ihfsdsdf kfasbgdfusidf jsbdfsbdujfb sdbfsbdfusb skjbdfkbsdfb ksjdbfsbkdfbksb', 'bsdkfbskdbfjkbsjkdbfkjsbdfkjbkbjbkjbkjbjkb', 'fbgbfg', 'bgfg', '0'),
(11, 'Lorem jjj', 'nv@gmail.com', 'male', 'sdffdjn', 89, 'lnlsjdnfblj', 'nsldnflbnl', 'nbsjldbflb', 'xfv', 'dvvf', 'XL'),
(12, 'Guredasd', 'ashisharma.sharma1234@gmail.com', 'male', 'JGEC', 45, 'bskhcdbhksbvdckhsvbkhvb', 'SJLKSBDCJKSBVKHJSBJKBJ', 'BNCJSLBDCJLB', 'ASDAS', 'ASD', 'M'),
(13, 'sdasd', 'asdas@gmail.com', 'male', 'asdasd', 256, 'asdasda', 'sdasda', 'asdasd', 'asdasd', 'asdasd', 'S'),
(14, 'ASHISH', '', 'male', 'asdsa', 20, 'asd', 'London', 'Uk', 'asd', 'Uk', 'XL'),
(15, 'ASHISH', '', 'male', 'asdsa', 20, 'asd', 'London', 'Uk', 'asd', 'Uk', 'XL'),
(16, 'ASHISH', '', 'male', 'asdsa', 20, 'asd', 'London', 'Uk', 'asd', 'Uk', 'XL'),
(17, 'ASHISH', '', 'male', 'asdsa', 20, 'asd', 'London', 'Uk', 'asd', 'Uk', 'XL'),
(18, 'ASHISH', '', 'male', 'asdsa', 20, 'asd', 'London', 'Uk', 'asd', 'Uk', 'XL'),
(19, 'ASHISH KUMAR SHARMA', 'ashisharma.sharma1234@gmail.com', 'male', 'JALPAIGURI GOVERNMENT ENGINEERING COLLEGE', 20, 'ASDAS', 'Mysore', 'Mysore', 'ADSD', 'Mysore', 'S');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
