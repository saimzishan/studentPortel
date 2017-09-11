-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2017 at 07:36 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stu_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_08_24_102014_create_teachers_table', 1),
(4, '2017_08_24_102017_create_samester_table', 1),
(5, '2017_08_24_102356_create_students_table', 1),
(6, '2017_08_24_102519_create_subjects_table', 1),
(7, '2017_08_24_103106_create_results_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `result1`
--

CREATE TABLE `result1` (
  `id` int(11) NOT NULL,
  `stu_id` int(10) NOT NULL,
  `algorithem` int(10) NOT NULL,
  `c` int(10) NOT NULL,
  `discrete` int(10) NOT NULL,
  `foc` int(10) NOT NULL,
  `eng` int(10) NOT NULL,
  `dld` int(10) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result1`
--

INSERT INTO `result1` (`id`, `stu_id`, `algorithem`, `c`, `discrete`, `foc`, `eng`, `dld`, `created_at`, `updated_at`) VALUES
(1, 1, 78, 69, 67, 56, 70, 76, '2017-09-07 07:00:00', NULL),
(2, 3, 65, 67, 76, 56, 56, 67, '2017-09-07 07:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `result2`
--

CREATE TABLE `result2` (
  `id` int(11) NOT NULL,
  `stu_id` int(10) NOT NULL,
  `ds` int(10) NOT NULL,
  `oop` int(10) NOT NULL,
  `assembly` int(10) NOT NULL,
  `db` int(10) NOT NULL,
  `se` int(10) NOT NULL,
  `ca` int(10) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `result3`
--

CREATE TABLE `result3` (
  `id` int(11) NOT NULL,
  `stu_id` int(10) NOT NULL,
  `os` int(10) NOT NULL,
  `c_sharp` int(10) NOT NULL,
  `web` int(10) NOT NULL,
  `adb` int(10) NOT NULL,
  `networking` int(10) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `result4`
--

CREATE TABLE `result4` (
  `id` int(11) NOT NULL,
  `stu_id` int(10) NOT NULL,
  `compiler` int(10) NOT NULL,
  `ai` int(10) NOT NULL,
  `e_com` int(10) NOT NULL,
  `project` int(10) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `samester_id` int(10) UNSIGNED NOT NULL,
  `subject_id` int(10) UNSIGNED NOT NULL,
  `stu_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `samester`
--

CREATE TABLE `samester` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fee` int(10) DEFAULT '50000',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `samester`
--

INSERT INTO `samester` (`id`, `name`, `fee`, `created_at`, `updated_at`) VALUES
(1, '1st ', 50000, '2017-09-10 07:00:00', NULL),
(2, '2nd', 50000, '2017-09-05 07:00:00', NULL),
(3, '3rd', 50000, '2017-09-05 07:00:00', NULL),
(4, '4th', 52000, '2017-09-05 07:00:00', '2017-09-05 07:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `f_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nic` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cur_samister` int(10) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `f_name`, `reg_number`, `email`, `nic`, `phone`, `cur_samister`, `created_at`, `updated_at`) VALUES
(1, 'asad', 'ali', 'MSCS-0213-201', 'asad@gmail.com', '123456789', '3450666', 2, '2017-08-01 12:00:00', '2017-09-05 07:00:00'),
(3, 'saim zishan', 'saim', 'MSCS-0213-203', 'saimzishan@gmail.com', '12345678', '123456', 2, '2017-08-25 12:00:00', '2017-09-06 07:00:00'),
(4, 'Zeeshan yousaf', 'yousaf', 'MSCS-0213-204', 'waqar@gmail.com', '98765321', '123456', 1, '2017-08-26 12:00:00', '2017-08-30 07:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `stu_fee`
--

CREATE TABLE `stu_fee` (
  `id` int(11) NOT NULL,
  `stu_id` int(10) UNSIGNED NOT NULL,
  `samister_id` int(10) UNSIGNED NOT NULL,
  `month` varchar(20) NOT NULL,
  `amount` varchar(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stu_fee`
--

INSERT INTO `stu_fee` (`id`, `stu_id`, `samister_id`, `month`, `amount`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2017-09-06', '10000', '2017-09-06 07:00:00', NULL),
(2, 1, 1, '2017-10-07', '10000', '2017-09-06 07:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `credit_hour` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacher_id` int(10) UNSIGNED NOT NULL,
  `samester_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `name`, `credit_hour`, `teacher_id`, `samester_id`, `created_at`, `updated_at`) VALUES
(6, 'English', '3', 2, 1, '2017-09-05 07:00:00', '2017-09-07 07:00:00'),
(5, 'Algo', '5', 2, 1, '2017-09-05 07:00:00', '2017-09-05 07:00:00'),
(7, 'c', '4', 1, 1, '2017-09-07 07:00:00', NULL),
(8, 'Fundamental of computer ', '3', 1, 1, '2017-09-07 07:00:00', NULL),
(9, 'Dld', '4', 2, 1, '2017-09-07 07:00:00', NULL),
(10, 'Discrete Math', '4', 1, 1, '2017-09-07 07:00:00', NULL),
(11, 'DS', '6', 1, 2, '2017-09-07 07:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `f_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nic` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `f_name`, `nic`, `phone`, `email`, `created_at`, `updated_at`) VALUES
(1, 'jhon', 'doe', '1212121212', '1212121212', 'john@test.com', '2017-09-05 07:00:00', NULL),
(2, 'ali', 'shab', '1212121212', '1212121212', 'ali@test.com', '2017-09-05 07:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stu_id` int(10) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `stu_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Zeeshan yousaf', 'waqar@gmail.com', 'zeeshan', 1, NULL, '2017-09-08 07:00:00', '2017-09-08 07:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `result1`
--
ALTER TABLE `result1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`),
  ADD KEY `results_samester_id_foreign` (`samester_id`),
  ADD KEY `results_subject_id_foreign` (`subject_id`),
  ADD KEY `results_stu_id_foreign` (`stu_id`);

--
-- Indexes for table `samester`
--
ALTER TABLE `samester`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `students_email_unique` (`email`);

--
-- Indexes for table `stu_fee`
--
ALTER TABLE `stu_fee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subjects_teacher_id_foreign` (`teacher_id`),
  ADD KEY `subjects_samester_id_foreign` (`samester_id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `teachers_email_unique` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `result1`
--
ALTER TABLE `result1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `samester`
--
ALTER TABLE `samester`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `stu_fee`
--
ALTER TABLE `stu_fee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
