-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2020 at 09:59 AM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `seva`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctorsignup`
--

CREATE TABLE `doctorsignup` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `addr` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `photo` varchar(1000) NOT NULL,
  `id` varchar(255) NOT NULL,
  `ph` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctorsignup`
--

INSERT INTO `doctorsignup` (`name`, `email`, `addr`, `pass`, `photo`, `id`, `ph`) VALUES
('Dinesh Sha A B', 'dakshin.gp.2017.cse@rajalakshmi.edu.in', '23249834', 'dinesh', 'aged-2181887_1920.jpg', 'E5 6B 82 21', '4534535'),
('Dinesh Sha A B', 'dineshshababu@gmail.com', 'j;ejkjfl;e', 'dinesh@1', 'download (2).jpg', 'iofeoujeifol3r3', '4u590845');

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `id` varchar(255) NOT NULL,
  `hname` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `ambulance` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `addr` varchar(255) NOT NULL,
  `map` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`id`, `hname`, `type`, `district`, `state`, `phone`, `ambulance`, `photo`, `addr`, `map`) VALUES
('1', 'Govt. District Head Quarters Hospital', 'normal', 'Kanchipuram', 'Tamilnadu', '8797977748', 'yes', 'stethoscope-2617701_1920.jpg', 'Railway Road kanchipuram near post office', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d3890.1969397344355!2d79.70787026482051!3d12.830546890948519!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d12.8284863!2d79.70994069999999!4m5!1s0x3a52c258f34318e7%3A0xf28edf2f508c52f8!2sGovt.%20District%20Head%20Quarters%20Hospital%2C%20Hospital%20Road%2C%20Ennaikaran%2C%20Kanchipuram%2C%20Tamil%20Nadu%20631501!3m2!1d12.8329933!2d79.71027749999999!5e0!3m2!1sen!2sin!4v1579619475153!5m2!1sen!2sin\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\"></iframe>'),
('2', 'Tamil Nadu Government Multi Super Speciality Hospital', 'multispecality', 'Chennai', 'Tamilnadu', '8797977748', 'yes', 'stethoscope-2617701_1920.jpg', ' Omandurar Government Estate Opposite to The Hindu Office, Anna Salai, Chennai, Tamil Nadu 600002', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d497832.8442914227!2d79.70952745586717!3d12.887191492922408!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d12.8284863!2d79.70994069999999!4m5!1s0x3a52661cdfe287e3%3A0x91c026621c68ec07!2sTamil%20Nadu%20Government%20Multi%20Super%20Speciality%20Hospital%2C%20Omandurar%20Government%20Estate%20Opposite%20to%20The%20Hindu%20Office%2C%20Anna%20Salai%2C%20Chennai%2C%20Tamil%20Nadu%20600002!3m2!1d13.0701638!2d80.2745838!5e0!3m2!1sen!2sin!4v1579622153513!5m2!1sen!2sin\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\"></iframe>'),
('3', 'Rajiv Gandhi Government General Hospital', 'multispecality', 'Chennai', 'Tamilnadu', '8797977748', 'yes', 'stethoscope-2617701_1920.jpg', 'Poonamallee High Rd, Park Town, Chennai, Tamil Nadu 600003', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d497734.0308820809!2d79.7122608656643!3d12.936803508928152!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d12.8221016!2d79.70633099999999!4m5!1s0x3a5266a6fb222c35%3A0xcb1aaa6e58460fe4!2sRajiv%20Gandhi%20Government%20General%20Hospital%2C%20Poonamallee%20High%20Rd%2C%20Park%20Town%2C%20Chennai%2C%20Tamil%20Nadu%20600003!3m2!1d13.0812682!2d80.2766453!5e0!3m2!1sen!2sin!4v1579624466705!5m2!1sen!2sin\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\"></iframe>'),
('4', 'Government Rajaji Hospital in Madurai', 'multispecality', 'Madurai', 'Tamilnadu', '8797977748', 'yes', 'stethoscope-2617701_1920.jpg', 'Alwarpuram, Madurai, Tamil Nadu 625009', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d2002243.089876539!2d77.74908394331784!3d11.434303754451895!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d12.8221016!2d79.70633099999999!4m5!1s0x3b00c596ea20822d%3A0x7bd4cb7ea902ca0b!2sGovernment%20Rajaji%20Hospital%20in%20Madurai%2C%20Alwarpuram%2C%20Madurai%2C%20Tamil%20Nadu%20625009!3m2!1d9.9280709!2d78.1294632!5e0!3m2!1sen!2sin!4v1579624690852!5m2!1sen!2sin\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\"></iframe>'),
('5', 'Victoria Hospital', 'multispecality', 'Bengaluru', 'Karnataka', '07358016498', 'yes', 'stethoscope-2617701_1920.jpg', 'Hospital in Bengaluru, Karnataka', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d1991532.6100853197!2d77.51611535488212!3d12.861860581030596!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d12.8221016!2d79.70633099999999!4m5!1s0x3bae15e2d61081e7%3A0x6e7d0833b6fa721e!2sVictoria%20Hospital%2C%20Fort%20Rd%2C%20near%20City%20Market%2C%20Bengaluru%2C%20Karnataka%20560002!3m2!1d12.9635669!2d77.57380739999999!5e0!3m2!1sen!2sin!4v1579625342076!5m2!1sen!2sin\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\"></iframe>');

-- --------------------------------------------------------

--
-- Table structure for table `mobile`
--

CREATE TABLE `mobile` (
  `refid` varchar(255) NOT NULL DEFAULT '',
  `pn` varchar(255) NOT NULL,
  `age` int(3) NOT NULL,
  `mc` varchar(255) NOT NULL,
  `addr` varchar(255) NOT NULL,
  `ph` int(10) NOT NULL,
  `pho` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mobile`
--

INSERT INTO `mobile` (`refid`, `pn`, `age`, `mc`, `addr`, `ph`, `pho`) VALUES
('dineshshababu@gmail.com', 'seenu', 5, 'scrateche', 'psk street', 543, 'Hydrangeas.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `presdetails`
--

CREATE TABLE `presdetails` (
  `id` varchar(255) NOT NULL,
  `dname` varchar(255) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `age` int(3) NOT NULL,
  `mc` varchar(255) NOT NULL,
  `mp` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `count` int(11) NOT NULL,
  `date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `presdetails`
--

INSERT INTO `presdetails` (`id`, `dname`, `pname`, `age`, `mc`, `mp`, `phone`, `count`, `date`) VALUES
('iofeoujeifol3r3', 'Dinesh', 'DAKSHIN G P', 20, 'fever', 'aspirin', '9080396486', 1, '21.01.2020'),
('iofeoujeifol3r3', 'Dinesh', '', 0, '', '', '', 2, '21.01.2020');

-- --------------------------------------------------------

--
-- Table structure for table `schemes`
--

CREATE TABLE `schemes` (
  `sid` varchar(255) NOT NULL,
  `sname` varchar(255) DEFAULT NULL,
  `climit` varchar(10) DEFAULT 'ALL',
  `regfee` varchar(10) NOT NULL DEFAULT 'NIL',
  `lage` varchar(10) DEFAULT NULL,
  `hage` varchar(10) NOT NULL DEFAULT 'ALL',
  `noofperson` varchar(10) NOT NULL DEFAULT 'ALL',
  `caste` varchar(255) NOT NULL DEFAULT 'ALL',
  `states` varchar(255) NOT NULL DEFAULT 'ALL',
  `gender` varchar(255) NOT NULL DEFAULT 'ALL',
  `description` varchar(1500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schemes`
--

INSERT INTO `schemes` (`sid`, `sname`, `climit`, `regfee`, `lage`, `hage`, `noofperson`, `caste`, `states`, `gender`, `description`) VALUES
('101', 'The Rashtriya Kishor Swasthya Karyakram', 'ALL', 'NIL', '18', '90', '4', 'ALL', 'ALL', 'ALL', 'The key principle of this programme is adolescent participation and leadership, Equity and inclusion, Gender Equity and strategic partnerships with other sectors and stakeholders. The programme enables all adolescents in India to realize their full potential by making informed and responsible decisions related to their health and well-being and by accessing the services and support they need to do so.'),
('102', ' Janani Shishu Suraksha Karyakaram', 'ALL', 'NIL', '18', '90', '1', 'ALL', 'ALL', 'female', ' The government of India has launched Janani Shishu Suraksha Karyakaram to motivate those who still choose to deliver at their homes to opt for institutional deliveries. It is an initiative with a hope that states would come forward and ensure that benefits under JSSK would reach every needy pregnant woman coming to government institutional facility.'),
('103', ' National AIDS Control Organisation', 'ALL', 'NIL', '18', '90', '1', 'ALL', 'ALL', 'ALL', '   National AIDS Control Organisation was set up so that every person living with HIV has access to quality care and is treated with dignity. By fostering close collaboration with NGOs, womenâ€™s self-help groups, faith-based organizations, positive peopleâ€™s networks, and communities, NACO hopes to improve access and accountability of the services. It stands committed to building an enabling environment wherein those infected and affected by HIV play a central role in all responses to the epidemic â€“ at state, district and grassroots level.'),
('104', '  Revised National TB Control Programme ', 'ALL', 'NIL', '18', '90', '1', 'ALL', 'ALL', 'ALL', '  Revised National TB Control Programme is a state-run tuberculosis control initiative of Government of India with a vision of achieving a TB free India. The program provides, various free of cost, quality tuberculosis diagnosis and treatment services across the country through the government health system.'),
('105', ' National Leprosy Eradication Programme', 'ALL', 'NIL', '18', '90', '1', 'ALL', 'ALL', 'ALL', ' National Leprosy Eradication Programme was initiated by the government for Early detection through active surveillance by the trained health workers and to provide Appropriate medical rehabilitation and leprosy ulcer care services.'),
('106', ' Mission Indradhanush ', 'ALL', 'NIL', '0', '10', '1', 'ALL', 'ALL', 'ALL', '  The Government of India has launched Mission Indradhanush with the aim of improving coverage of immunization in the country. It aims to achieve at least 90 percent immunization coverage by December 2018 which will cover unvaccinated and partially vaccinated children in rural and urban areas of India.'),
('107', 'Hospitalisation benefits for general medical treatment and surgical treatment (The ailments covered under this scheme are listed in Annexure C in the official website of this scheme.)', 'upto 1 lak', 'NIL', '0', '90', '5', 'ALL', 'Tamilnadu', 'ALL', 'This scheme is one of the major initiatives taken by the Tamil Nadu Government to protect the livelihood of underprivileged people. In 2012, this scheme was awarded the â€˜e-India Jury Awardâ€™ for best Practices in Health Insurance with IT enabled solutions.'),
('108', 'Arogya Karnataka', 'ALL', 'NIL', '0', '90', '5', 'ALL', 'Karnataka', 'ALL', 'The objective of the scheme is to extend â€˜Universal Health Coverageâ€™ to all residents in Karnataka State. Under this new scheme, primary health care, specified secondary and tertiary health care benefits will be provided.\r\n\r\nThe current ongoing health schemes like Vajpayee Arogyashree, Yeshaswini Scheme, Rajiv Arogya Bhagya Scheme, RashtriyaSwasthayaBimaYojana (RSBY) including RSBY for senior citizens, RashtriyaBalaSwasthayaKaryakram (RBSK), MukhyamantriSantwana Harish Scheme, Indira Suraksha Yojane, Cochlear Implant Scheme etc. will all be converged under this new Arogya Karnataka Scheme..'),
('109', 'Karunya Health Scheme', 'upto 3 lak', 'NIL', '0', '90', '5', 'ALL', 'Kerala', 'ALL', 'The Karunya Health Scheme by the Government of Kerala functions similar to that of a critical illness cover. People suffering from major chronic illnesses can avail treatment benefits under this cover. Some of the acute ailments covered under this policy include the following:\r\n\r\nCancer\r\nHemophilia\r\nKidney diseases\r\nHeart diseases\r\nPalliative Care\r\nFor the above mentioned health ailments, the government offers treatment benefits up to Rs.2 lakh. For certain cases of extreme illnesses, the treatment benefits can be increased to Rs.3 lakh.');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mob` varchar(15) NOT NULL,
  `state` varchar(255) NOT NULL,
  `dist` varchar(255) NOT NULL,
  `famcount` int(3) NOT NULL,
  `marital` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `addarno` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`name`, `email`, `mob`, `state`, `dist`, `famcount`, `marital`, `pass`, `address`, `addarno`) VALUES
('DINESH SHA', 'dineshshababu@gmail.com', '9080396486', 'Tamilnadu', 'chennai', 4, 'yes', 'dinesh@1', 'railway road Kancheepuram\r\nKanchipuram', '2384789237894');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctorsignup`
--
ALTER TABLE `doctorsignup`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mobile`
--
ALTER TABLE `mobile`
  ADD PRIMARY KEY (`refid`);

--
-- Indexes for table `presdetails`
--
ALTER TABLE `presdetails`
  ADD PRIMARY KEY (`count`);

--
-- Indexes for table `schemes`
--
ALTER TABLE `schemes`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `mob` (`mob`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `presdetails`
--
ALTER TABLE `presdetails`
  MODIFY `count` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
