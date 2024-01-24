-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2024 at 08:10 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wdpf55_laravel_project4`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'admin', 'admin@gmail.com', NULL, '$2y$12$iVrYoP6.Vsrdl18iRDK0s.1ADCpnnU9.tBNG9uyhh5AkcoGRdZEDm', 1, NULL, '2024-01-23 06:48:00', '2024-01-23 06:48:00');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Nordic Chair', '2024-01-23 06:45:11', '2024-01-23 06:45:11'),
(2, 'Kruzo Aero Chair', '2024-01-23 06:45:11', '2024-01-23 06:45:11'),
(3, 'Ergonomic Chair', '2024-01-23 06:45:11', '2024-01-23 06:45:11'),
(4, 'Sofa', '2024-01-23 06:45:11', '2024-01-23 06:45:11'),
(5, 'Table', '2024-01-23 06:45:11', '2024-01-23 06:45:11'),
(6, 'Relaxing Chair', '2024-01-23 06:45:11', '2024-01-23 06:45:11'),
(7, 'Nordic Chair', '2024-01-23 06:48:00', '2024-01-23 06:48:00'),
(8, 'Kruzo Aero Chair', '2024-01-23 06:48:00', '2024-01-23 06:48:00'),
(9, 'Ergonomic Chair', '2024-01-23 06:48:00', '2024-01-23 06:48:00'),
(10, 'Sofa', '2024-01-23 06:48:01', '2024-01-23 06:48:01'),
(11, 'Table', '2024-01-23 06:48:01', '2024-01-23 06:48:01'),
(12, 'Relaxing Chair', '2024-01-23 06:48:01', '2024-01-23 06:48:01'),
(13, 'Tonmoy', '2024-01-23 07:01:44', '2024-01-23 07:01:44');

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_01_03_063116_create_categories_table', 1),
(6, '2024_01_03_063217_create_products_table', 1),
(7, '2024_01_09_033742_create_admins_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `image` varchar(50) DEFAULT NULL,
  `tags` varchar(200) DEFAULT NULL,
  `price` decimal(10,2) NOT NULL,
  `category_id` tinyint(4) NOT NULL,
  `availibility` tinyint(1) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `image`, `tags`, `price`, `category_id`, `availibility`, `created_at`, `updated_at`) VALUES
(1, 'Nordic Chair 1', 'product description content', '1705983475.png', '[\"Wood\", \"Board\"]', 100.00, 1, 1, '2024-01-23 06:54:37', '2024-01-23 06:54:37'),
(2, 'Nordic Chair 2', 'product description content', '1705983045.png', '[\"Wood\", \"Board\"]', 100.00, 1, 1, '2024-01-23 06:54:37', '2024-01-23 06:54:37'),
(3, 'Kruzo Aero Chair 1', 'product description content', '1705982723.jpg', '[\"Wood\", \"Board\"]', 100.00, 1, 1, '2024-01-23 06:54:37', '2024-01-23 06:54:37'),
(4, 'Kruzo Aero Chair 2', 'product description content', '1705982723.jpg', '[\"Wood\", \"Board\"]', 100.00, 2, 1, '2024-01-23 06:54:37', '2024-01-23 06:54:37'),
(5, 'Ergonomic Chair 1', 'product description content', '1705983045.png', '[\"Wood\", \"Board\"]', 100.00, 2, 1, '2024-01-23 06:54:37', '2024-01-23 06:54:37'),
(6, 'Ergonomic Chair 2', 'product description content', '1705983197.jpg', '[\"Wood\", \"Board\"]', 100.00, 2, 1, '2024-01-23 06:54:37', '2024-01-23 06:54:37'),
(7, 'White Sofa', 'product description content', '1705983475.png', '[\"Wood\", \"Board\"]', 100.00, 3, 1, '2024-01-23 06:54:37', '2024-01-23 06:54:37'),
(8, 'Black Sofa', 'product description content', '1705982723.jpg', '[\"Wood\", \"Board\"]', 100.00, 3, 1, '2024-01-23 06:54:37', '2024-01-23 06:54:37'),
(9, 'Red Table', 'product description content', '1705982723.jpg', '[\"Wood\", \"Board\"]', 100.00, 3, 1, '2024-01-23 06:54:37', '2024-01-23 06:54:37'),
(10, 'White Table', 'product description content', '1705983045.png', '[\"Wood\", \"Board\"]', 100.00, 4, 1, '2024-01-23 06:54:37', '2024-01-23 06:54:37'),
(11, 'Pink Relaxing Chair', 'product description content', '1705983197.jpg', '[\"Wood\", \"Board\"]', 100.00, 4, 1, '2024-01-23 06:54:37', '2024-01-23 06:54:37'),
(12, 'Red Relaxing Chair', 'product description content', '1705983475.png', '[\"Wood\", \"Board\"]', 100.00, 4, 1, '2024-01-23 06:54:37', '2024-01-23 06:54:37'),
(13, 'Demo', 'this is a demo product', '1705993150.png', '[\"wood\",\"board\",\"glass\"]', 33333.00, 2, 1, '2024-01-23 00:59:10', '2024-01-23 00:59:10');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(5, 'Tonmoy Rojoni', 'rojoni@gmail.com', NULL, '$2y$12$KHNnvetHWJGWJKKhNAowguKzvY.LNvke9GA9MB/i9dsBD7fSzmDE.', NULL, '2024-01-23 06:48:00', '2024-01-23 06:48:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
