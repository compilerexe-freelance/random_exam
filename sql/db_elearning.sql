-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 18, 2016 at 05:58 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_elearning`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_answer`
--

CREATE TABLE `tb_answer` (
  `Q_ID` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `Choice1` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `Choice2` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `Choice3` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `Choice4` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `TrueAns` varchar(1) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_answer`
--

INSERT INTO `tb_answer` (`Q_ID`, `Choice1`, `Choice2`, `Choice3`, `Choice4`, `TrueAns`) VALUES
('01', 'a.rootkit', 'b.spyware', 'c.worm', 'd.trojan', 'd'),
('02', 'a.คลิ๊กแบนเนอร์โฆษณา', 'b.แฝงตัวมาทางอีเมลล์แล้วอ้างว่าเป็นโปรแกรมป้องกันไวรัส', 'c.ติดจากแฟลชไดฟ์', 'd.มาจากการเข้าเว็บไซต์ที่ผิดกฏหมาย', 'b'),
('03', 'a.แฮ็กเกอร์สามารถเข้ามาขโมยข้อมูลต่างๆได้', 'b.คอมพิวเตอร์ดับ', 'c.มีป๊อปอัพหรือแบนเนอร์ขึ้นมาถี่ๆ', 'd.เครื่องคอมพิวเตอร์รีสตาร์ทเอง', 'a'),
('04', 'a.ทดสอบการรักษาความปลอดภัยของระบบ', 'b.แฮ็กข้อมูล', 'c.ดาวน์โหลดซอฟแวร์ผิดกฏหมาย', 'd.แพร่กระจายไวรัส', 'a'),
('05', 'a.ผ่านระบบอีเมลล์ โดยจะมาจากไฟล์ที่แนบหรือข้อความ', 'b.ผ่านแผ่น CD,DVD', 'c.ผ่านระบบเครือข่ายอินเทอร์เน็ต', 'd.ผ่านโปรแกรมสนทนาบนเว็บ', 'b'),
('06', 'a.007', 'b.Trojan', 'c.Ads ware', 'd.Black Hacker', 'c'),
('07', 'a.ดูหนัง,ฟังเพลง', 'b.พิมพ์รายงาน', 'c.โหลดซอฟแวร์ฟรี', 'd.เข้าเว็บไซต์ที่ผิดกฏหมาย', 'a'),
('08', 'a.ไม่กดเข้าป๊อปอัพ หรือโฆษณาที่โผล่มาตามเว็บไซต์', 'b.โหลดซอฟแวร์ผิดกฏหมายมาใช้', 'c.โหลดซอฟแวร์ฟรี', 'd.เข้าเว็บไซต์ที่ผิดกฏหมาย', 'a'),
('09', 'a.ซ่อนตัวไม่ให้ Anti-Virus ทั่วไปตรวจพบ', 'b.ซ่อนไฟล์ โฟลเดอร์ และค่ารีจิสตี้', 'c.สามารถทำงานได้ในทุกๆชั้นของระบบปฏิบัติการ', 'd.ทำให้คอมพิวเตอร์รีสตาร์ทเอง', 'd'),
('10', 'a.สร้างซอฟแวร์ผิดกฏหมาย', 'b.ตัดสัญญาณอินเทอร์เน็ต', 'c.ซ่อน Trojan และ Backdoor ไม่ให้ Anti-Virus ทั่วไปตรวจพบ', 'd.สร้างหลุมดำเพื่อดูดไฟล์ต่างๆ', 'c');

-- --------------------------------------------------------

--
-- Table structure for table `tb_comment`
--

CREATE TABLE `tb_comment` (
  `C_ID` int(8) NOT NULL,
  `Username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Detail` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_comment`
--

INSERT INTO `tb_comment` (`C_ID`, `Username`, `Detail`) VALUES
(17, 'mol', 'good'),
(15, 'mom1', '9 คะแนน'),
(16, 'vimol008', 'very good');

-- --------------------------------------------------------

--
-- Table structure for table `tb_history`
--

CREATE TABLE `tb_history` (
  `id` int(11) NOT NULL,
  `select_ans` varchar(1) NOT NULL,
  `ans` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_history`
--

INSERT INTO `tb_history` (`id`, `select_ans`, `ans`) VALUES
(1, 'a', 'd'),
(2, 'a', 'b'),
(3, 'a', 'a'),
(4, 'a', 'a'),
(5, 'a', 'b'),
(6, 'a', 'c'),
(7, 'a', 'a'),
(8, 'a', 'a'),
(9, 'a', 'd'),
(10, 'a', 'c');

-- --------------------------------------------------------

--
-- Table structure for table `tb_member`
--

CREATE TABLE `tb_member` (
  `Username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Gender` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Mtype` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Pic` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_member`
--

INSERT INTO `tb_member` (`Username`, `Password`, `Name`, `Email`, `Gender`, `Mtype`, `Pic`) VALUES
('3333', '1234', 'eeee', 'eee@hotmail.com', 'Female', 'Old', '16-05-14_3.jpg'),
('love555', '1234', 'love', 'love@hotmail.com', 'Female', 'New', '16-05-14_2.jpg'),
('mol', '12345', 'mol', 'mol@hotmail.com', 'Female', 'Old', '16-05-14_1.jpg'),
('mol008', '123456', 'vimol  Sriponthong', 'mol@hotmail.com', 'Female', 'New', '16-05-14.jpg'),
('sriponthong', '123456', 'muay', 'vm2016@hotmail.com', 'Female', 'New', '16-04-27.jpg'),
('login', '008550', 'mol555', 'mol555@hotmail.com', 'Female', 'New', '16-04-27_1.jpg'),
('999', '008550', 'nany', 'nany12@hotmail.com', 'Female', 'New', '16-04-27_2.jpg'),
('mom1', '008550', 'mom', 'mom1@hotmail.com', 'Female', 'Old', '16-04-27_3.jpg'),
('vimol008', '550008', 'Vimol  Sriponthong', 'vmmol@hotmail.com', 'Female', 'Old', '16-05-13.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_questionnair`
--

CREATE TABLE `tb_questionnair` (
  `Q_ID` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `Question` varchar(300) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_questionnair`
--

INSERT INTO `tb_questionnair` (`Q_ID`, `Question`) VALUES
('01', 'ไวรัสหรือมัลแวร์ประเภทใดที่ได้ชื่อ จากสงครามกรีก ทรอย?'),
('02', 'ม้าโทรจัน สามารถเข้ามาทำลายซอฟแวร์ป้องกันไวรัสและไฟล์วอลได้อย่างไร?'),
('03', 'ถ้าเครื่องคอมพิวเตอร์ติดมัลแวร์ Backdoor แล้ว จะเกิดผลเสียอย่างไร?'),
('04', 'White Hacker หรือ Admin นำ Back Door ไปใช้ทำอะไร?'),
('05', 'หนอนคอมพิวเตอร์ ไม่สามารถเข้ามายังเครื่องคอมพิวเตอร์ได้โดยวิธีใด?'),
('06', 'Spy ware มีอีกหนึ่งชื่อที่เรียกว่าอะไร?'),
('07', 'จะสามารถสังเกตเครื่องคอมพิวเตอร์ที่ติด Spy Ware จากกิจกรรมอะไร?'),
('08', 'จะป้องกัน Spy ware ติดเครื่องพิวเตอร์ได้อย่างไร?'),
('09', 'ข้อใด ไม่ใช่ คุณสมบัติของ Rootkit?'),
('10', 'Hacker สามารถนำ Rootkit มาทำอะไร?');

-- --------------------------------------------------------

--
-- Table structure for table `tb_score`
--

CREATE TABLE `tb_score` (
  `Username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `PrevScore` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `CurrentScore` varchar(2) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_score`
--

INSERT INTO `tb_score` (`Username`, `PrevScore`, `CurrentScore`) VALUES
('mol', '6', '0'),
('muay15', '4', '7'),
('555', '8', '0'),
('mom1', '9', '9'),
('vimol008', '10', '5'),
('3333', '3', '4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_answer`
--
ALTER TABLE `tb_answer`
  ADD PRIMARY KEY (`Q_ID`);

--
-- Indexes for table `tb_comment`
--
ALTER TABLE `tb_comment`
  ADD PRIMARY KEY (`C_ID`);

--
-- Indexes for table `tb_history`
--
ALTER TABLE `tb_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_member`
--
ALTER TABLE `tb_member`
  ADD PRIMARY KEY (`Username`);

--
-- Indexes for table `tb_questionnair`
--
ALTER TABLE `tb_questionnair`
  ADD PRIMARY KEY (`Q_ID`(2));

--
-- Indexes for table `tb_score`
--
ALTER TABLE `tb_score`
  ADD PRIMARY KEY (`Username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_comment`
--
ALTER TABLE `tb_comment`
  MODIFY `C_ID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `tb_history`
--
ALTER TABLE `tb_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
