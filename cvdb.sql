-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2018 at 08:41 AM
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
-- Database: `cvdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `cvs`
--

CREATE TABLE `cvs` (
  `id` int(10) UNSIGNED NOT NULL,
  `titre` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `presentation` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cvs`
--

INSERT INTO `cvs` (`id`, `titre`, `presentation`, `created_at`, `updated_at`, `deleted_at`, `user_id`, `photo`) VALUES
(2, 'Langage PHP', 'est un langage de script côté serveur conçu pour le développement Web, mais également utilisé comme langage de programmation généraliste', '2018-07-29 17:02:46', '2018-07-29 17:27:23', NULL, 1, 'image/JUBXrDs8HQKQVjilEgjwh1LtoQE4QI93DgJhm8Z4.jpeg'),
(3, 'Langage JEE', 'Java Platform, Enterprise Edition, anciennement Java 2 Platforms, Enterprise Edition, actuellement Jakarta EE, est un ensemble de spécifications qui étend Java SE avec des spécifications pour les fonctionnalités d\'entreprise telles que l\'informatique distribuée et les services Web.', '2018-07-29 17:14:12', '2018-07-29 17:14:12', NULL, 1, 'image/y4v4lXJ77hERXEWeu6iMkUPQxFhPGvdI8HHzsn0i.jpeg'),
(4, 'Style CSS', 'Cascading Style Sheets est un langage de feuille de style utilisé pour décrire la présentation d\'un document écrit dans un langage de balisage comme HTML. CSS est une technologie de base du World Wide Web, aux côtés de HTML et JavaScript.', '2018-07-29 17:17:00', '2018-07-29 17:43:29', '2018-07-29 18:43:29', 1, 'image/hbsWiMRnKmcAUzUXbp2uiOK22MxJ8WusXsx456m3.png'),
(5, 'aaa', 'aaaaaaaaaaaaaaaa', '2018-07-29 17:45:10', '2018-07-29 17:45:14', '2018-07-29 18:45:14', 1, 'image/q0shgomUMWgugfED97CdqxWGTzN5o8R1ZtChWuJr.jpeg'),
(6, 'Angular', 'Angular est une plate-forme d\'applications Web open-source open source basée sur TypeScript et dirigée par l\'équipe Angular de Google et par une communauté de particuliers et d\'entreprises. Angular est une réécriture complète de la même équipe qui a construit AngularJS', '2018-07-29 20:35:34', '2018-07-29 20:35:34', NULL, 1, 'image/kN8KyKrRvmcGdHLnmjkyCiwUGluPcZ0rahh2ugVG.jpeg'),
(7, 'Laravel', 'Laravel est un framework web PHP libre et open-source, créé par Taylor Otwell et destiné au développement d\'applications web suivant le modèle architectural model-view-controller et basé sur Symfony.', '2018-07-29 23:07:30', '2018-07-29 23:07:30', NULL, 1, 'image/D1ky0rseg6kqS1HwL4mMQBqpRjp6mDP8yCzy8RWz.jpeg'),
(11, 'test cv', 'ssssssssssssss', '2018-07-20 21:57:35', '2018-07-29 16:58:50', '2018-07-29 17:58:50', 1, 'image/sYSdnTTCdXHQnpjw17khezPYltHbgTAnRruKiX2d.png');

-- --------------------------------------------------------

--
-- Table structure for table `experiences`
--

CREATE TABLE `experiences` (
  `id` int(10) UNSIGNED NOT NULL,
  `titre` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `date_debut` date DEFAULT NULL,
  `date_fin` date DEFAULT NULL,
  `cv_id` int(10) UNSIGNED NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `experiences`
--

INSERT INTO `experiences` (`id`, `titre`, `body`, `created_at`, `updated_at`, `date_debut`, `date_fin`, `cv_id`, `deleted_at`) VALUES
(8, 'Laravel 5.4', 'Laravel 5.4 details', '2018-07-27 17:04:20', '2018-07-27 17:33:22', '2018-08-03', '2018-07-24', 2, '2018-07-27 18:33:22'),
(9, NULL, NULL, '2018-07-29 14:25:17', '2018-07-30 08:31:00', NULL, NULL, 2, '2018-07-30 09:31:00'),
(10, 'hh', 'hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh', '2018-07-29 16:37:20', '2018-07-29 16:37:20', '2018-07-28', '2018-07-20', 2, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `formations`
--

CREATE TABLE `formations` (
  `id` int(10) UNSIGNED NOT NULL,
  `titre` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `presentation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `cv_id` int(10) UNSIGNED NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `formations`
--

INSERT INTO `formations` (`id`, `titre`, `presentation`, `created_at`, `updated_at`, `cv_id`, `deleted_at`) VALUES
(2, 'Formation Angular', 'cours acceleré', '2018-07-27 17:03:38', '2018-07-27 17:30:42', 2, '2018-07-27 18:30:42'),
(3, 'formation Angular', 'formation Angular details', '2018-07-27 17:11:34', '2018-07-27 17:11:34', 2, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_06_22_173208_create_cvs_table', 1),
(4, '2018_06_23_104008_add_column_deleted_at_cvs', 1),
(5, '2018_06_23_143641_add_column_user_id', 1),
(6, '2018_06_24_153442_add_colum_photo_cvs', 1),
(7, '2018_06_24_193044_add_column_isadmin', 1),
(8, '2018_07_04_102107_create_experiences_table', 1),
(9, '2018_07_04_134015_add_body_column_to_experience', 1),
(10, '2018_07_04_134932_add_dates_to_experience', 1),
(11, '2018_07_06_090202_create_table_formation', 1),
(12, '2018_07_06_100334_add_cv_id_to_exp', 1),
(13, '2018_07_16_080312_add_column_cv_formations', 2),
(14, '2018_07_20_230124_add_column_cvid_to_exp', 2),
(15, '2018_07_27_182846_add_column_delete_at', 3),
(16, '2018_07_27_183130_add_column_delete_at_exp', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` varchar(255) NOT NULL,
  `id_user` int(11) NOT NULL,
  `temp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `id_user`, `temp`) VALUES
('c4ca4238a0b923820dcc509a6f75849b', 1, 'c4ca4238a0b923820dcc509a6f75849b'),
('c81e728d9d4c2f636f067f89cc14862c', 2, 'c81e728d9d4c2f636f067f89cc14862c');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `is_admin`) VALUES
(1, 'Ouhamza lhouceine', 'admin@demo.com', '$2y$10$yqgNtmfGoSw1AhCnn3.5muhmSUS5Z6aDDF.cA9/ImYLnlwmCPkKCy', 'uf0niy7SGUnLFn4maBflXQweNrjPS9TZNY6xr0bZnCz1zrJyjmCVM00XVoZU', '2018-07-20 21:56:46', '2018-07-20 21:56:46', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cvs`
--
ALTER TABLE `cvs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cvs_user_id_foreign` (`user_id`);

--
-- Indexes for table `experiences`
--
ALTER TABLE `experiences`
  ADD PRIMARY KEY (`id`),
  ADD KEY `experiences_cv_id_foreign` (`cv_id`);

--
-- Indexes for table `formations`
--
ALTER TABLE `formations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `formations_cv_id_foreign` (`cv_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cvs`
--
ALTER TABLE `cvs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `experiences`
--
ALTER TABLE `experiences`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `formations`
--
ALTER TABLE `formations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cvs`
--
ALTER TABLE `cvs`
  ADD CONSTRAINT `cvs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `experiences`
--
ALTER TABLE `experiences`
  ADD CONSTRAINT `experiences_cv_id_foreign` FOREIGN KEY (`cv_id`) REFERENCES `cvs` (`id`);

--
-- Constraints for table `formations`
--
ALTER TABLE `formations`
  ADD CONSTRAINT `formations_cv_id_foreign` FOREIGN KEY (`cv_id`) REFERENCES `cvs` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
