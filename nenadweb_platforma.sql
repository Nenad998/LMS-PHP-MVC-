-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 09, 2020 at 11:41 AM
-- Server version: 10.3.23-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nenadweb_platforma`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `description` text COLLATE utf8_slovenian_ci NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_slovenian_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `price` int(11) NOT NULL DEFAULT 100
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `description`, `teacher_id`, `name`, `created_at`, `price`) VALUES
(1, 'magnetno polje', 4, 'Fizika ', '2020-06-04 01:52:34', 300),
(2, 'planine Srbije', 3, 'Geografija ', '2020-06-04 01:52:56', 250),
(3, 'sabiranje', 5, 'matematika', '2020-06-21 03:12:38', 150),
(4, 'pridevi', 4, 'srpski jezik', '2020-06-21 20:17:08', 400),
(5, 'present simple', 4, 'engleski jezik', '2020-06-21 20:25:47', 100),
(6, 'for petlja', 4, 'programiranje', '2020-06-21 20:32:35', 200),
(7, 'ovo je objektno orijentisan jezik    ', 5, 'Java', '2020-06-26 20:43:37', 250);

-- --------------------------------------------------------

--
-- Table structure for table `exercise`
--

CREATE TABLE `exercise` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_slovenian_ci NOT NULL,
  `notice` text COLLATE utf8_slovenian_ci NOT NULL,
  `content` text COLLATE utf8_slovenian_ci NOT NULL,
  `dates` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `lecture_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci;

--
-- Dumping data for table `exercise`
--

INSERT INTO `exercise` (`id`, `name`, `notice`, `content`, `dates`, `lecture_id`) VALUES
(1, 'zadatak 1', 'napomena 1', 'sadrzaj 1', '2020-07-09 00:04:37', 17),
(2, 'zadatak 2', 'napomena 2', 'sadrzaj 2', '2020-07-03 00:04:37', 2),
(3, 'zadatak 3', 'napomena 3', 'sadrzaj 3', '2020-07-03 00:04:37', 3),
(4, 'zadatak 4', 'napomena 4', 'sadrzaj 4', '2020-07-03 00:04:37', 4),
(5, 'zadatak 5', 'napomena 555', 'sadrzaj 555555', '2020-07-03 01:52:49', 18),
(6, 'zadatak DDDD', 'napomena DDDD', 'sadrzaj DDDD', '2020-07-03 03:13:22', 8),
(7, 'zadatak 222222222222', 'nova napomena', 'novi sadrzaj', '2020-08-07 07:00:00', 2),
(11, 'naziv 89', 'napomena 89', 'sadrzaj 89', '2020-07-13 07:00:00', 3),
(12, 'drugi zadatak iz fizike', 'nova napomena iz fizike    ', 'sadrrrrrrrrrrrrrrzaj    ', '2020-07-10 00:06:39', 17),
(13, 'ovo je zadatak za darka', 'ovo je zadatak za darka', 'ovo je zadatak za darka', '2020-07-03 00:04:37', 3),
(14, 'ovo je drugi zadatak za darka', 'drugi za darka', 'drugi za darka', '2020-07-03 00:04:37', 5),
(15, 'opet za darka ali treci', 'opet za darka ali treci', 'opet za darka ali treci', '2020-07-03 03:13:22', 8),
(16, 'Prvi zadatak', 'Nova napomena', 'uraditi sto boljeeee', '2020-07-29 22:00:00', 22);

-- --------------------------------------------------------

--
-- Table structure for table `lecture`
--

CREATE TABLE `lecture` (
  `id` int(11) NOT NULL,
  `name` varchar(80) COLLATE utf8_slovenian_ci NOT NULL,
  `short_description` varchar(250) COLLATE utf8_slovenian_ci NOT NULL,
  `content` text COLLATE utf8_slovenian_ci NOT NULL,
  `course_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci;

--
-- Dumping data for table `lecture`
--

INSERT INTO `lecture` (`id`, `name`, `short_description`, `content`, `course_id`) VALUES
(2, 'lekcija 2', 'ovde imate sve sto vam treba22', 'Phasellus volutpat, metus eget egestas mollis, lacus lacus blandit dui, id egestas quam mauris ut lacus. Nulla neque dolor, sagittis eget, iaculis quis, molestie non, velit. Donec mollis hendrerit risus.\r\n\r\nVestibulum rutrum, mi nec elementum vehicula, eros quam gravida nisl, id fringilla neque ante vel mi. Praesent vestibulum dapibus nibh. Praesent blandit laoreet nibh.', 2),
(3, 'lekcija 3', 'ovde imate sve sto vam treba33', 'Phasellus volutpat, metus eget egestas mollis, lacus lacus blandit dui, id egestas quam mauris ut lacus. Nulla neque dolor, sagittis eget, iaculis quis, molestie non, velit. Donec mollis hendrerit risus.\r\n\r\nVestibulum rutrum, mi nec elementum vehicula, eros quam gravida nisl, id fringilla neque ante vel mi. Praesent vestibulum dapibus nibh. Praesent blandit laoreet nibh.', 3),
(4, 'lekcija 4', 'ovde imate sve sto vam treba444', 'Phasellus volutpat, metus eget egestas mollis, lacus lacus blandit dui, id egestas quam mauris ut lacus. Nulla neque dolor, sagittis eget, iaculis quis, molestie non, velit. Donec mollis hendrerit risus.\r\n\r\nVestibulum rutrum, mi nec elementum vehicula, eros quam gravida nisl, id fringilla neque ante vel mi. Praesent vestibulum dapibus nibh. Praesent blandit laoreet nibh.', 4),
(5, 'lekcija 5', 'ovde imate sve sto vam treba55', 'Phasellus volutpat, metus eget egestas mollis, lacus lacus blandit dui, id egestas quam mauris ut lacus. Nulla neque dolor, sagittis eget, iaculis quis, molestie non, velit. Donec mollis hendrerit risus.\r\n\r\nVestibulum rutrum, mi nec elementum vehicula, eros quam gravida nisl, id fringilla neque ante vel mi. Praesent vestibulum dapibus nibh. Praesent blandit laoreet nibh.', 5),
(6, 'lekcija 6', 'ovde imate sve sto vam treba66', 'Phasellus volutpat, metus eget egestas mollis, lacus lacus blandit dui, id egestas quam mauris ut lacus. Nulla neque dolor, sagittis eget, iaculis quis, molestie non, velit. Donec mollis hendrerit risus.\r\n\r\nVestibulum rutrum, mi nec elementum vehicula, eros quam gravida nisl, id fringilla neque ante vel mi. Praesent vestibulum dapibus nibh. Praesent blandit laoreet nibh.', 7),
(8, 'uvod u nemacki', 'pocetaaak', 'Nam ipsum risus, rutrum vitae, vestibulum eu, molestie vel, lacus. Suspendisse non nisl sit amet velit hendrerit rutrum. Aenean imperdiet.\r\n\r\nEtiam rhoncus. Vestibulum ullamcorper mauris at ligula. Etiam ultricies nisi vel augue.\r\n\r\nNam ipsum risus, rutrum vitae, vestibulum eu, molestie vel, lacus. Phasellus tempus. Vestibulum purus quam, scelerisque ut, mollis sed, nonummy id, metus.\r\n\r\nDonec posuere vulputate arcu. Curabitur at lacus ac velit ornare lobortis. Fusce risus nisl, viverra et, tempor et, pretium in, sapien.', 8),
(9, 'Glagoli', 'Veoma bitan deo u ovoj oblasti', 'r since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsu', 4),
(17, 'Sila', 'Aenean imperdiet. Vestibulum eu odio.\r\n\r\n Phasellus dolor.      ', 'Morbi ac felis. Nullam sagittis. Sed a libero.\r\n\r\nIn hac habitasse platea dictumst. Mauris turpis nunc, blandit et, volutpat molestie, porta ut, ligula. Donec interdum, metus et hendrerit aliquet, dolor diam sagittis ligula, eget egestas libero turpis vel mi.\r\n\r\nProin pretium, leo ac pellentesque mollis, felis nunc ultrices eros, sed gravida augue augue mollis justo. In ac felis quis tortor malesuada pretium. Phasellus viverra nulla ut metus varius laoreet.      ', 1),
(19, 'lekcija iz geografije', 'Planine i reke Srbije', 'Nullam dictum felis eu pede mollis pretium. Suspendisse feugiat. Praesent egestas neque eu enim.\r\n\r\nAenean ut eros et nisl sagittis vestibulum. Vestibulum ullamcorper mauris at ligula. Aliquam eu nunc.\r\n\r\nNulla consequat massa quis enim. In dui magna, posuere eget, vestibulum et, tempor auctor, justo. Quisque id odio.', 2),
(21, 'Present continius', 'Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Praesent egestas tristique nibh.\r\n\r\nNulla neque dolor, sagittis eget, iaculis quis, molestie non, velit. Aenean posuere, tortor sed cursus feugiat, nunc augue blandit nunc, eu solli', 'Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Vestibulum rutrum, mi nec elementum vehicula, eros quam gravida nisl, id fringilla neque ante vel mi. Phasellus gravida semper nisi. Praesent nonummy mi in odio.\r\n\r\nFusce a quam. Sed aliquam ultrices mauris. Nunc nulla. Ut varius tincidunt libero.\r\n\r\nAenean ut eros et nisl sagittis vestibulum. Suspendisse non nisl sit amet velit hendrerit rutrum. Vivamus consectetuer hendrerit lacus. Phasellus ullamcorper ipsum rutrum nunc.\r\n\r\nVivamus consectetuer hendrerit lacus. Suspendisse non nisl sit amet velit hendrerit rutrum. Nam adipiscing. Praesent egestas neque eu enim.', 5),
(22, 'Objektno orijentisano programiranje', 'Osnovni koncepti  ', 'Polimorfizam, apstrakcija, nasledjivanje, enkapsulacija.', 7);

-- --------------------------------------------------------

--
-- Table structure for table `student_course`
--

CREATE TABLE `student_course` (
  `id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci;

--
-- Dumping data for table `student_course`
--

INSERT INTO `student_course` (`id`, `users_id`, `course_id`) VALUES
(1, 4, 1),
(2, 5, 2),
(3, 4, 3),
(4, 6, 2),
(5, 7, 8),
(6, 8, 6),
(9, 5, 3),
(10, 5, 1),
(11, 5, 8),
(12, 13, 1),
(13, 13, 2),
(14, 13, 1),
(15, 13, 3),
(16, 13, 3),
(17, 13, 1),
(18, 13, 5),
(19, 5, 11),
(20, 5, 11),
(21, 5, 11),
(22, 5, 2),
(23, 5, 3),
(24, 5, 7),
(25, 13, 1),
(26, 13, 7),
(27, 4, 1),
(28, 4, 1),
(29, 13, 6),
(30, 13, 4),
(31, 14, 1),
(32, 14, 5),
(33, 14, 7),
(34, 12, 11),
(35, 12, 3),
(36, 14, 3),
(37, 3, 1),
(38, 3, 2),
(39, 4, 6);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(70) COLLATE utf8_slovenian_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_slovenian_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_slovenian_ci NOT NULL,
  `role_id` int(11) NOT NULL DEFAULT 1,
  `money` int(11) NOT NULL DEFAULT 10000
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `role_id`, `money`) VALUES
(1, 'vule', 'milenko@gmail.com', '123', 1, 10000),
(2, 'Marta', 'marta@gmail.com', 'maki', 1, 10000),
(3, 'Pera', 'pera@gmail.com', '555', 1, 9450),
(4, 'maja', 'maja@gmail.com', '46eaa26621e4955c1675b55d446c6d03325f458b59a465f898d42924010e7286', 1, 9200),
(5, 'darko', 'darko@gmail.com', 'fe79e0ac4b7db16d59a67be682f0c2e85e24241cccbb7a6303446e7105362bcc', 1, 8300),
(6, 'milan', 'milan@gmail.com', 'efee614420c57ddd2a8e91eeef6f6b83d5356c2288155be0f273bef986e3b850', 2, 10000),
(7, 'stevan', 'stevan@gmail.com', 'dcbd07ea0c46ea5fbcb552cdd76da3bf1a65a8603fa5a23fe61dfc37aaec5f25', 2, 10000),
(8, 'nenad', 'nenadstaniskovic3@gmail.com', '6e0626a779a150c6c3d302bc3880f16c60943955350da4a3775658fa228e3028', 2, 10000),
(9, 'Marija', 'marija@gmail.com', '015ef7cb46d3c512fd27798011b106ec8a3574fd95877a65025cbe836eed75d5', 3, 10000),
(11, 'Danijela Maksimovic', 'danijela@gmail.com', 'f3e67970afc3e9fa045942b9a5ed569831014ed3ecbce74408d1ea0cd34c13a3', 1, 10000),
(12, 'Tamara Radmilovic', 'tamara@gmail.com', '548a0cae663517c2ba666ca86c2cc3e256006d94fa5725772b02c8ede803259d', 1, 9500),
(13, 'Jovana Bozic', 'jovana@gmail.com', '44b660850cb906161098c854da222febb4ef17a138c0656bb029f491beccd974', 1, 7300),
(14, 'Dejan Lukic', 'dejan@gmail.com', 'c40094e24d448a5603a752bbea63a81e0279e76177102f8628450360590aba07', 1, 9200),
(15, 'Rade Simic', 'rade@gmail.com', '53c1837144b000c1e4bd1a1aa7c4f942174618b62b29db88976bcaf7ee58d9ad', 1, 10000),
(16, 'Pera Petrovic', 'pera@gmail.com', 'ae0a456b0a5b5a05196cf4e6392e597b5a4e99545c6a5254f5ddca6ae6d016a1', 1, 10000);

-- --------------------------------------------------------

--
-- Table structure for table `users_work`
--

CREATE TABLE `users_work` (
  `id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `exercises_id` int(11) NOT NULL,
  `content` text COLLATE utf8_slovenian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci;

--
-- Dumping data for table `users_work`
--

INSERT INTO `users_work` (`id`, `users_id`, `exercises_id`, `content`) VALUES
(1, 5, 11, 'sadrzaaaj'),
(2, 4, 7, 'neki sadrzaaaaaaaaaaaaj'),
(3, 4, 1, 'neki zadatak'),
(4, 6, 2, 'ovo je moj domaciiiiiiiii'),
(5, 7, 6, 'ovo je novi neki domacii'),
(6, 4, 1, 'Array'),
(7, 4, 11, 'majin sadrzaj'),
(8, 5, 13, 'darkovo PRVO resenje'),
(9, 5, 14, 'ovo je DRUGI zadatak za darka iz eng'),
(10, 5, 15, 'ovo je TRECI zadatak za darka iz nemackog'),
(11, 4, 3, 'odgovor nekii'),
(12, 13, 1, 'Llll'),
(13, 5, 13, 'aaaaaaa'),
(14, 12, 13, 'Cao ovo je moj uradjen zadatak'),
(15, 3, 1, 'Ovo je urajden zadatak.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exercise`
--
ALTER TABLE `exercise`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lecture`
--
ALTER TABLE `lecture`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_course`
--
ALTER TABLE `student_course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_work`
--
ALTER TABLE `users_work`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `exercise`
--
ALTER TABLE `exercise`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `lecture`
--
ALTER TABLE `lecture`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `student_course`
--
ALTER TABLE `student_course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users_work`
--
ALTER TABLE `users_work`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
