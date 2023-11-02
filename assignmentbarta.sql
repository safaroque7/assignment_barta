-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2023 at 08:19 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assignmentbarta`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'S A', 'Faroque', 'faroque.computer@gmail.com', NULL, '$2y$10$P217.nZmoYAN64Mmr.QBe.8LxJSfijjp17XBQDcJznONg/fo8TyV2', NULL, NULL, NULL),
(2, 'Saiful', 'Alam', 'webnewsdesign@gmail.com', NULL, '$2y$10$3y6.285jx.xnrncEgDXnnOF6OPikHI4fT47p1cru0vd9eMzK5I0T2', NULL, NULL, NULL),
(5, 'Fatiha', 'Khatun', 'fatiha@gmail.com', NULL, '$2y$10$eZGpR8Kf.jb9myT25bKFZ.5l6ecQQEXOA07OqohfaBzE8ugdQdX9u', NULL, NULL, NULL),
(7, 'Nusaibah', 'Khatun', 'nk@gmail.com', NULL, '$2y$10$tcrJyG3sxRiVGhfpgwY79eRxko1UNyb/kQDJ5z/2rKWUqyo4d5cme', NULL, NULL, NULL),
(9, 'Kamal', 'Uddin', 'kamal@gmail.com', NULL, '$2y$10$mo4/1Kc8rvua9cjJ2mftKeakj3qiGU83iiq6Lq6wXj6bx.5RjwKeK', NULL, NULL, NULL),
(10, 'Jamal', 'Uddin', 'jamal@gmail.com', NULL, '$2y$10$uNaMti5gnEE/q2Sv.IBai.DJWwZEv6Xdpl6yf4z6V/6zli9NU0zl2', NULL, NULL, NULL),
(13, 'Jamal', 'Uddin', '2023jamal@gmail.com', NULL, '$2y$10$LnszcWScgd.lYgVHnBqObO87trE.VVWVeeaHK2xs1Tf5cs6dGVg5e', NULL, NULL, NULL),
(14, 'Linkon', 'Miyan', 'likon@gmail.com', NULL, '$2y$10$Y/G5F/7pIBcaW3M..DaYlOcKfZLFITY27nhYcvSf6iK5qWQmB8SAW', NULL, NULL, NULL),
(16, 'Linkon', 'Miyan', '2023likon@gmail.com', NULL, '$2y$10$pSENulkvV8vO3YXBAndlNum.Pmkw5jCpaQgcjH3IWmZ85akZuf6Am', NULL, NULL, NULL),
(18, 'Linkon', 'Miyan', '23likon@gmail.com', NULL, '$2y$10$Gm9vCwE4O84GcnkUZES5ZuG7RyamMB6/MiYhz29rots8hwSNDhquW', NULL, NULL, NULL),
(19, 'Monju', 'Mia', 'monju@gmail.com', NULL, '$2y$10$gW96FWIuYc4y6BVhe/kMnOcxLiu4sCFFupa8MkMydIfMw59f42.gC', NULL, NULL, NULL),
(20, 'Monju', 'Mia', '120monju@gmail.com', NULL, '$2y$10$Qy0fuKDYRcOd7nIrcT8b3eM7W2lV0BUMOtPVZ9axW853bRk1R2tfC', NULL, NULL, NULL),
(22, 'Monju', 'Mia', '1120monju@gmail.com', NULL, '$2y$10$quJZ88XExnZnlC2jLt9KB.Utt9losDiZUeZ9zI3ohvWtcjVE/AP5S', NULL, NULL, NULL),
(24, 'Abdul', 'Kader', 'ak@gmail.com', NULL, '$2y$10$hfnDbn/oofQOBTjuU3C8Su0LKwy9bMctPMaF9vbXl6yIE5zd3oXru', NULL, NULL, NULL),
(26, 'Billah', 'Hossain', 'billah@gmail.com', NULL, '$2y$10$9R1xahdpVTUyiXvQIN8xG.1zVNDSTg9Foz1oOOvjyA6FH5ID3rpSa', NULL, NULL, NULL),
(27, 'MD.', 'Kamrul', 'mdk@gmail.com', NULL, '$2y$10$GT50ahZR3FNgNPiz/fG75uGgwlNrQGs.I7c8qCveYVQLH8OuYIvc.', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
