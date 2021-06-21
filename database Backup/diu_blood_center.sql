-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2020 at 04:15 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `diu_blood_center`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `date` date NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `description`, `date`, `image`) VALUES
(13, 'We arrange blood donation programe ', ' We collect blood mainly from four sources.\r\n\r\n1.Blood donation program :\r\n\r\nWe arrange blood donation program at colleges, university, many institutes & many other places.\r\n\r\nWe motivate all people for voluntary blood donation. A person can easily donate 1 unit (300-350 ml) of blood after 4 months of last donation.\r\n\r\nConditions of blood donation :\r\n\r\nÂ¤ Age â€“ 18 to 57.\r\n\r\nÂ¤ Weight â€“ Male 100 pounds & Female 95 pounds\r\n\r\nÂ¤ Blood pressure â€“ Normal (100-140/60-90 mmHg)\r\n\r\nÂ¤ Female not undergo with pregnancy & menstruation.\r\n\r\nAdvantage :\r\n\r\nA person who donate blood in Medicine Club gets a â€œDonor Cardâ€. When require, that person can collect same amount of blood from us by showing the card.\r\n\r\n2.Fixed donor :\r\n\r\nThere are fixed blood donors of Medicine Club who donate blood regularly to us. We preserve their address & contact no. In emergency blood requirement we contact with them. They also get the advantage of Donor Cardâ€ .We have also fixed donors for Thessalonian patients.\r\n\r\n3.Medical College Students :\r\n\r\nMedical College hostel is the most dependable source of blood. All students donate blood regularly. We preserve data of blood group, contact no. & room no. of all students of all batches. ', '2020-02-24', 'uploads/67632612.jpg'),
(14, 'Blood distribution ', 'We distribute blood to the patients by following ways-\r\n\r\n1.Exchange :\r\n\r\nThe main condition of blood distribution is exchange. We give 1 unit of blood to the patient & patient also give us 1 unit of blood.\r\n\r\n2.Free :\r\n\r\nIn some cases we distribute blood without any condition. Patient who does have any donor for exchange but his/her condition is serious, then we distribute them blood without any condition.\r\n\r\n3.Thalassaemia patients :\r\n\r\nThalassaemia patients get blood from us without any condition. For thalassaemia patients, we have specific â€œthalassaemia patient formâ€.\r\n\r\nAbdul Malek Ukil Medical College unit\r\nBrahmanbaria Medical College Unit\r\nCentral Medical College unit\r\nComilla Medical College unit\r\nCoxâ€™s Bazaar Medical College unit\r\nDelta Medical College unit\r\nDhaka Medical College unit\r\nFaridpur Medical College unit\r\nGonoshasthaya Samaj Vittik Medical College unit\r\nKustia Medical College unit\r\nM Abdur Rahim Medical College unit\r\nMainamoti Medical College Unit\r\nMugda Medical College Medicine Club (Proposed)\r\nMymensingh Medical College unit\r\nPabna Medical College unit\r\nPatuakhali Medical College unit\r\nPresident Abdul Hamid Medical College unit\r\nRajshahi Medical College Unit\r\nRangpur Medical College unit\r\nShaheed Syed Nazrul Islam Medical College unit\r\nShaheed Tajuddin Ahmad Medical College unit\r\nSheikh Hasina Medical College Unit\r\nSher-E-Bangla Medical College unit\r\nSylhet Osmani Medical College unit\r\nUNIVERSAL MEDICAL COLLEGE (PROPOSED UNIT)\r\nUS-BANGLA MEDICAL COLLEGE UNIT\r\nUNIVERSAL MEDICAL COLLEGE (PROPOSED UNIT)\r\n ', '2020-02-28', 'uploads/717542290320103496-Copy.jpg'),
(15, 'Blood Donation Going on ', 'We distribute blood to the patients by following ways-\r\n\r\n1.Exchange :\r\n\r\nThe main condition of blood distribution is exchange. We give 1 unit of blood to the patient & patient also give us 1 unit of blood.\r\n\r\n2.Free :\r\n\r\nIn some cases we distribute blood without any condition. Patient who does have any donor for exchange but his/her condition is serious, then we distribute them blood without any condition.\r\n\r\n3.Thalassaemia patients :\r\n\r\nThalassaemia patients get blood from us without any condition. For thalassaemia patients, we have specific â€œthalassaemia patient formâ€.\r\n\r\nAbdul Malek Ukil Medical College unit\r\nBrahmanbaria Medical College Unit\r\nCentral Medical College unit\r\nComilla Medical College unit\r\nCoxâ€™s Bazaar Medical College unit\r\nDelta Medical College unit\r\nDhaka Medical College unit\r\nFaridpur Medical College unit\r\nGonoshasthaya Samaj Vittik Medical College unit\r\nKustia Medical College unit\r\nM Abdur Rahim Medical College unit\r\nMainamoti Medical College Unit\r\nMugda Medical College Medicine Club (Proposed)\r\nMymensingh Medical College unit\r\nPabna Medical College unit\r\nPatuakhali Medical College unit\r\nPresident Abdul Hamid Medical College unit\r\nRajshahi Medical College Unit\r\nRangpur Medical College unit\r\nShaheed Syed Nazrul Islam Medical College unit\r\nShaheed Tajuddin Ahmad Medical College unit\r\nSheikh Hasina Medical College Unit\r\nSher-E-Bangla Medical College unit\r\nSylhet Osmani Medical College unit\r\nUNIVERSAL MEDICAL COLLEGE (PROPOSED UNIT)\r\nUS-BANGLA MEDICAL COLLEGE UNIT\r\nUNIVERSAL MEDICAL COLLEGE (PROPOSED UNIT)\r\n ', '2020-02-28', 'uploads/583820process_3.jpg'),
(16, 'Give Blood Safe Life ', 'We distribute blood to the patients by following ways-\r\n\r\n1.Exchange :\r\n\r\nThe main condition of blood distribution is exchange. We give 1 unit of blood to the patient & patient also give us 1 unit of blood.\r\n\r\n2.Free :\r\n\r\nIn some cases we distribute blood without any condition. Patient who does have any donor for exchange but his/her condition is serious, then we distribute them blood without any condition.\r\n\r\n3.Thalassaemia patients :\r\n\r\nThalassaemia patients get blood from us without any condition. For thalassaemia patients, we have specific â€œthalassaemia patient formâ€.\r\n\r\nAbdul Malek Ukil Medical College unit\r\nBrahmanbaria Medical College Unit\r\nCentral Medical College unit\r\nComilla Medical College unit\r\nCoxâ€™s Bazaar Medical College unit\r\nDelta Medical College unit\r\nDhaka Medical College unit\r\nFaridpur Medical College unit\r\nGonoshasthaya Samaj Vittik Medical College unit\r\nKustia Medical College unit\r\nM Abdur Rahim Medical College unit\r\nMainamoti Medical College Unit\r\nMugda Medical College Medicine Club (Proposed)\r\nMymensingh Medical College unit\r\nPabna Medical College unit\r\nPatuakhali Medical College unit\r\nPresident Abdul Hamid Medical College unit\r\nRajshahi Medical College Unit\r\nRangpur Medical College unit\r\nShaheed Syed Nazrul Islam Medical College unit\r\nShaheed Tajuddin Ahmad Medical College unit\r\nSheikh Hasina Medical College Unit\r\nSher-E-Bangla Medical College unit\r\nSylhet Osmani Medical College unit\r\nUNIVERSAL MEDICAL COLLEGE (PROPOSED UNIT)\r\nUS-BANGLA MEDICAL COLLEGE UNIT\r\nUNIVERSAL MEDICAL COLLEGE (PROPOSED UNIT)\r\n ', '2020-02-28', 'uploads/776943header-bg.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `campaign`
--

CREATE TABLE `campaign` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `details` text NOT NULL,
  `start_time` date NOT NULL,
  `end_time` date NOT NULL,
  `location` varchar(100) NOT NULL,
  `image` varchar(333) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `campaign`
--

INSERT INTO `campaign` (`id`, `name`, `details`, `start_time`, `end_time`, `location`, `image`) VALUES
(14, 'Anti-Drug Campaign and Blood Donation ', '  Daffodil International University (DIU) and Police Blood Bank of Dhaka Metropolitan Police (DMP) jointly organized a day long program titled â€œAnti-Drug Campaign and Blood Donation Programâ€ including Rally, Seminar, Blood Donation Camp, Cultural Program held on 25th September 2012 at DIU auditorium. ', '2020-01-30', '2020-02-06', ' DIU auditorium, Daffodil International University ', 'uploads/640436qwq.jpg'),
(15, 'Blood donation campaign held at DIU ', '  Daffodil International University (DIU) and Police Blood Bank of Dhaka Metropolitan Police (DMP) jointly organized a day long program titled â€œAnti-Drug Campaign and Blood Donation Programâ€ including Rally, Seminar, Blood Donation Camp, Cultural Program held on 25th September 2012 at DIU auditorium.\r\n Daffodil International University (DIU) and Police Blood Bank of Dhaka Metropolitan Police (DMP) jointly organized a day long program titled â€œAnti-Drug Campaign and Blood Donation Programâ€ including Rally, Seminar, Blood Donation Camp, Cultural Program held on 25th September 2012 at DIU auditorium. ', '2020-02-22', '2020-02-13', ' DIU auditorium, Daffodil International University ', 'uploads/34859612121.jpg'),
(16, 'Blood donation on Dhaka ', ' Daffodil International University (DIU) and Police Blood Bank of Dhaka Metropolitan Police (DMP) jointly organized a day long program titled â€œAnti-Drug Campaign and Blood Donation Programâ€ including Rally, Seminar, Blood Donation Camp, Cultural Program held on 25th September 2012 at DIU auditorium.\r\n Daffodil International University (DIU) and Police Blood Bank of Dhaka Metropolitan Police (DMP) jointly organized a day long program titled â€œAnti-Drug Campaign and Blood Donation Programâ€ including Rally, Seminar, Blood Donation Camp, Cultural Program held on 25th September 2012 at DIU auditorium. ', '2020-02-14', '2020-12-08', ' DIU auditorium, Daffodil International University', 'uploads/868094event_1.jpg'),
(17, 'Blood donation on Uttara ', '   Daffodil International University (DIU) and Police Blood Bank of Dhaka Metropolitan Police (DMP) jointly organized a day long program titled â€œAnti-Drug Campaign and Blood Donation Programâ€ including Rally, Seminar, Blood Donation Camp, Cultural Program held on 25th September 2012 at DIU auditorium.\r\n Daffodil International University (DIU) and Police Blood Bank of Dhaka Metropolitan Police (DMP) jointly organized a day long program titled â€œAnti-Drug Campaign and Blood Donation Programâ€ including Rally, Seminar, Blood Donation Camp, Cultural Program held on 25th September 2012 at DIU auditorium. ', '2020-02-13', '2020-02-29', ' DIU auditorium, Daffodil International University  ', 'uploads/254735process_2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `donate`
--

CREATE TABLE `donate` (
  `id` int(11) NOT NULL,
  `user_id` int(50) NOT NULL,
  `date` varchar(33) NOT NULL,
  `venue` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donate`
--

INSERT INTO `donate` (`id`, `user_id`, `date`, `venue`) VALUES
(17, 1004, '2020-02-24 ', 'Main Campus '),
(18, 1005, '2020-02-24 ', 'Permanent Campus'),
(19, 1006, '2020-02-24 ', 'Others'),
(20, 1007, '2020-02-24 ', 'Permanent Campus'),
(32, 1003, '2020-02-24 ', 'Permanent Campus'),
(36, 1014, '2020-08-07 ', 'Permanent Campus'),
(38, 1013, '2020-08-07 ', 'Permanent Campus'),
(40, 1012, '2020-08-07 ', 'Permanent Campus');

-- --------------------------------------------------------

--
-- Table structure for table `donor_list`
--

CREATE TABLE `donor_list` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `blood_group` varchar(33) NOT NULL,
  `age` varchar(44) NOT NULL,
  `gender` varchar(22) NOT NULL,
  `phone` varchar(22) NOT NULL,
  `email` varchar(222) NOT NULL,
  `address` text NOT NULL,
  `image` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donor_list`
--

INSERT INTO `donor_list` (`id`, `name`, `blood_group`, `age`, `gender`, `phone`, `email`, `address`, `image`) VALUES
(1010, 'Shahriar Shawon ', 'O+ ', '23', 'male ', ' 01774339279 ', 'shawonrog@gmail.com', ' Dhaka,Bangladesh', 'uploads/417807images0.jpg '),
(1011, 'Shahriar Sifat ', 'O+ ', '22', 'male ', ' 01874339279 ', 'rog@gmail.com', ' Savar,Dhaka,Bangladesh', 'uploads/92288014775_Karting-360-Poslovni-portreti-_Foto-Jaka-IvanC48DiC48D_Foto-Jaka-IvanC48DiC48D_17102018-360x360.jpg '),
(1012, 'Shumrose Shetu ', 'A+ ', '22', '', ' 01974339279 ', 'shetu@gmail.com', ' Savar,Dhaka,Bangladesh ', 'uploads/772591shetu.jpg '),
(1013, 'Fariha Luna ', 'O- ', '21', 'female ', ' 01374339279 ', 'luna@gmail.com', 'Dhaka,Bangladesh', 'uploads/370384luna.jpg '),
(1014, 'Emon Ahmmad ', 'O- ', '23', 'male ', ' 01574339279 ', 'emon@gmail.com', 'Ashulia,Dhaka,Bangladesh', 'uploads/657015emon.jpg '),
(1015, 'Shawon ', 'O+ ', '23', 'male ', ' 01788441420 ', 'shawon@gmail.com', 'YKSG,Dhaka,Bangladesh', 'uploads/871317shawon.jpg '),
(1016, 'Farabi ', 'B+ ', '22', 'male ', ' 01940638707 ', 'farabi@gmail.com', 'YKSG,Dhaka,Bangladesh', 'uploads/607826farabi.jpg ');

-- --------------------------------------------------------

--
-- Table structure for table `reg_donor`
--

CREATE TABLE `reg_donor` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `age` varchar(33) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(33) NOT NULL,
  `gender` varchar(33) NOT NULL,
  `blood_group` varchar(33) NOT NULL,
  `image` varchar(222) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reg_donor`
--

INSERT INTO `reg_donor` (`id`, `name`, `age`, `email`, `phone`, `gender`, `blood_group`, `image`, `address`) VALUES
(11, 'farabi ', '12 ', 'fairozahmed0155@gmail.com', '+88001944179099', 'Male', 'O+ ', 'uploads/1969730_premium_space_brushes___volume_i_by_era_7_dbvszkz-200h.jpg ', 'fgfdg'),
(19, 'Shahriar Shawon ', '23 ', 'shawonrog@gmail.com', '01774339279', 'Male', 'O+ ', 'uploads/737499shawon.jpg ', ' Dhaka,Bangladesh'),
(20, 'Shetu ', '22 ', 'shetu@gmail.com', '01940638707', 'Female', 'O- ', 'uploads/590648shetu.jpg ', ' Dhaka,Bangladesh'),
(21, 'Luna ', '22 ', 'luna@gmail.com', '01374339279', 'Female', 'B+ ', 'uploads/196917luna.jpg ', ' Dhaka,Bangladesh'),
(22, 'Jhon Doe ', '22 ', 'Jhon@gmail.com', '02374339279', 'Male', 'AB+ ', 'uploads/121008Andrew-Rush-360x360.jpg ', ' Dhaka,Bangladesh'),
(23, 'Kimi No Wa ', '22 ', 'Kimi@gmail.com', '01374389279', 'Male', 'A- ', 'uploads/686137image.jpeg ', ' Dhaka,Bangladesh'),
(24, 'Test 28 ', '25 ', 'admin@geekshopbd.com', '01774339279', 'Male', 'O+ ', 'uploads/463436930px-Desktop.jpg ', 'awawdawdawdwaawdawd');

-- --------------------------------------------------------

--
-- Table structure for table `req_for_blood`
--

CREATE TABLE `req_for_blood` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `age` varchar(22) NOT NULL,
  `email` varchar(44) NOT NULL,
  `phone` varchar(22) NOT NULL,
  `gender` varchar(22) NOT NULL,
  `blood_group` varchar(22) NOT NULL,
  `blood_bag` varchar(22) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `req_for_blood`
--

INSERT INTO `req_for_blood` (`id`, `name`, `age`, `email`, `phone`, `gender`, `blood_group`, `blood_bag`, `address`) VALUES
(12, 'Rafiq ', '23 ', 'shawonexa@gmail.com', '01774339279', 'Male', 'O+ ', '2 ', 'Motijhil,Dhaka'),
(13, 'Rahim', '32 ', 'xzy@gmail.com', '01774339277', 'Male', 'A+ ', '3 ', 'Uttara,Dhaka'),
(14, 'Sifat ', '42 ', 'xzy@gmail.com', '01774339277', 'Male', 'AB+ ', '4 ', 'Farmgate,Dhaka'),
(15, 'Tasmia Rahman ', '35 ', 'xzy@gmail.com', '01778339277', 'Female', 'O+ ', '3 ', 'Farmgate,Dhaka'),
(16, 'Tasmia Tania ', '25 ', 'xzy@gmail.com', '01778339277', 'Female', 'O+ ', '3 ', 'Farmgate,Dhaka'),
(17, 'Tanjin Tania ', '19 ', 'xzy@gmail.com', '01778339277', 'Female', 'B+ ', '1 ', 'Farmgate,Dhaka'),
(18, 'Tisha Ahmmad ', '24 ', 'xzy@gmail.com', '01778339277', 'Female', 'AB+ ', '2 ', 'Farmgate,Dhaka'),
(19, 'Tisha Rafia ', '28 ', 'xzy@gmail.com', '01778339277', 'Female', 'B+ ', '1 ', 'Townhall,Dhaka');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `campaign`
--
ALTER TABLE `campaign`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donate`
--
ALTER TABLE `donate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donor_list`
--
ALTER TABLE `donor_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reg_donor`
--
ALTER TABLE `reg_donor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `req_for_blood`
--
ALTER TABLE `req_for_blood`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `campaign`
--
ALTER TABLE `campaign`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `donate`
--
ALTER TABLE `donate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `donor_list`
--
ALTER TABLE `donor_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1017;

--
-- AUTO_INCREMENT for table `reg_donor`
--
ALTER TABLE `reg_donor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `req_for_blood`
--
ALTER TABLE `req_for_blood`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
