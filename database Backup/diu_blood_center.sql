-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2020 at 05:33 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
(7, 'hello blog 34', '    mmmmmmmmmmm', '2020-02-22', 'uploads/32038830_premium_space_brushes___volume_i_by_era_7_dbvszkz-200h.jpg'),
(8, 'BBA', 'Lorem ipsum dolor sit amet, sit ea alienum intellegat. Eruditi lobortis disputationi sit ne, duo fuisset intellegat at. Numquam scaevola dissentiunt at per, paulo impetus has ad, vidit concludaturque sea cu. Qui legimus nostrum tacimates eu, ad repudiandae consectetuer usu, vis ceteros ponderum electram ex. Ut nullam ubique mandamus eam.\r\n\r\nNo movet cetero voluptatibus eum, nibh solum iusto qui ea, te mel iudico possit. Dolor vituperata no vix. His dicta dissentias delicatissimi ad. Mollis iriure ius et. Autem tamquam labores at nec, exerci voluptua sea te. Vim idque minim scripta ad, id per augue sanctus blandit.\r\n\r\nNemore ocurreret complectitur te quo, in ullum appellantur nam, movet salutatus eu has. Dicam lucilius ea vel, an usu posse principes maiestatis. An nec sint nostrum perfecto, eu ius viris labore suscipit. Mel alii copiosae te, ei vis illum malis detraxit. Prompta appetere convenire ut nam, nobis alterum ad his, laudem regione sit te. Quo deseruisse complectitur ad. Atqui omittam convenire usu in, ne justo libris rationibus nam.\r\n\r\nPro ut tritani neglegentur instructior, malis sonet euismod vel ei, mea in mutat illum vulputate. Atomorum oportere ex sea, cetero repudiare no vix, vel id utinam interpretaris. Vocibus oportere vis et. Ne augue ubique urbanitas qui.\r\n\r\nNam at harum appetere, ius incorrupte consectetuer no. Falli delenit eam te. Cu idque iudico per, an sint saepe patrioque vel. Te homero gloriatur nam, quas vidit conclusionemque eum ea. Nam mutat soluta facilis ut, unum discere senserit ut mel.', '2020-02-22', 'uploads/653663argonwilliamme.png'),
(9, 'ভুল মানুষটাও মাঝে মাঝে চায়!  ger geh erhtrhr theher', ' fddfdf', '2020-02-15', 'uploads/336292monster_hunter_girls____01_by_koyorin_ddqwyrz-250t.png'),
(11, 'ভূল মানুষটাও মাঝে মাঝে চায়! ', ' Lorem ipsum, ', '2020-02-24', 'uploads/408053___watch_your_back____by_juliathedragoncat_ddqwi4f-250t.png'),
(12, 'new blog  ', '\r\nLorem ipsum  ', '2020-02-24', 'uploads/793245buccaneer_ami_by_jamoart_ddqxf37-300w.jpg');

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
(10, 'new ', '  dafsg ', '2020-02-28', '2020-02-15', ' dfghj ', 'uploads/202240argonwilliamme.png'),
(11, 'hello world ', ' yhui ', '2020-02-13', '2020-02-29', ' ygghi', 'uploads/3762780laffson.png'),
(12, 'srk', '  hth ', '2020-02-08', '2020-02-15', ' htfht ', 'uploads/606113arualmeow.jpg'),
(13, '12345 ', ' dgdrg ', '2020-02-14', '2020-02-28', ' dfbhfdh', 'uploads/477748_tutorial__how_to_color_eyes___sai_fale_free_by_voeza_ddge42z-250t.jpg');

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
(16, 1003, '2020-02-24 ', 'Permanent Campus'),
(17, 1004, '2020-02-24 ', 'Main Campus '),
(18, 1005, '2020-02-24 ', 'Permanent Campus'),
(19, 1006, '2020-02-24 ', 'Others'),
(20, 1007, '2020-02-24 ', 'Permanent Campus'),
(21, 1003, '2020-02-24 ', 'Others'),
(22, 1003, '2020-02-24 ', 'Permanent Campus'),
(23, 1004, '2020-02-24 ', 'Permanent Campus');

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
(1003, 'Shawon', 'AB- ', '12', 'male', ' hello ', 'admin@admin.com', ' তকব্  ', 'uploads/56487blazbaros.jpg '),
(1004, 'Farabi ', 'A+ ', '22', '', ' +88001944179099 ', 'admin@admin.com', ' fsdf ', 'uploads/437371dark-necrodevourer.jpg'),
(1005, 'luna ', 'O+ ', '22', 'male ', ' +88001944179099 ', 'hosnain15-1233@diu.edu.bd', ' dsfs', 'uploads/781185aspire_by_vanillaghosties_ddqwghf-250t.jpg '),
(1006, 'setu ', 'B- ', '12', 'others ', ' +88001944179099 ', 'md.hosnain@gmail.com', ' dfs', 'uploads/616229colors_are_the_smiles_of_nature_by_innerdepravityart_d6p7sd0-200h.jpg '),
(1007, 'Emon ', 'B- ', '22', 'male ', ' +8801944179099 ', 'gojnobi.bd@gmail.com', ' savar', 'uploads/558606carlosbragaart80.jpg '),
(1008, 'mohoian ', 'O- ', '22', '', ' +8801944179099 ', 'hosnain15-1233@diu.edu.bd', ' mirpur', 'uploads/49551387180737_627809018009546_7324250408958820352_n.jpg ');

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
(10, 'hosnain ', '22 ', 'md.hosnain@gmail.com', '+88001944179099', 'Male', 'O+ ', 'uploads/7007570laffson.png ', 'ghgdhgd'),
(11, 'farabi ', '12 ', 'fairozahmed0155@gmail.com', '+88001944179099', 'Male', 'O+ ', 'uploads/1969730_premium_space_brushes___volume_i_by_era_7_dbvszkz-200h.jpg ', 'fgfdg'),
(12, 'hello world ', '22 ', 'md.hosnain@gmail.com', '+88001944179099', 'Female', 'A+ ', 'uploads/25863430_premium_space_brushes___volume_i_by_era_7_dbvszkz-200h.jpg ', 'sfgf');

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
(1, 'hosnain ', '22 ', 'md.hosnain@gmail.com', '+88001944179099', 'Male', '3 ', ' ', 'savae,dhaka'),
(4, 'shila ', '1234 ', 'md.hosnain@gmail.com', '+88001944179099', 'Female', 'O+ ', '2 ', 'Barishal'),
(6, 'mina ', '33 ', 'hosnain15-1233@diu.edu.bd', '+88001944179099', 'Male', 'AB+ ', '1 ', 'motijheel'),
(8, 'mirana  ', '22 ', 'md.hosnain@gmail.com', '+88001944179099', 'Male', 'AB+ ', '3 ', 'monipur');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `campaign`
--
ALTER TABLE `campaign`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `donate`
--
ALTER TABLE `donate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `donor_list`
--
ALTER TABLE `donor_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1009;

--
-- AUTO_INCREMENT for table `reg_donor`
--
ALTER TABLE `reg_donor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `req_for_blood`
--
ALTER TABLE `req_for_blood`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
