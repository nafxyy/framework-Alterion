-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2023 at 12:47 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alterion`
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
-- Table structure for table `kategoris`
--

CREATE TABLE `kategoris` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_kategori` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `deskripsi_kategori` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategoris`
--

INSERT INTO `kategoris` (`id`, `id_kategori`, `nama`, `deskripsi_kategori`, `created_at`, `updated_at`) VALUES
(1, '5217', 'Hoodie', 'Quas molestias soluta sequi atque optio non eos quia. Id aperiam minus qui. Neque qui laudantium dolorum dolore aut eligendi. Aliquid odit velit neque minus earum praesentium reprehenderit.', '2023-11-01 15:50:39', '2023-11-01 15:50:39'),
(2, '6794', 'Topi', 'Culpa aut alias sit reprehenderit consectetur. Necessitatibus velit possimus vel aut ducimus quos aspernatur. Eos quia distinctio est provident ut eos quas. Exercitationem eligendi dicta voluptatibus qui.', '2023-11-01 15:50:39', '2023-11-01 15:50:39'),
(3, '5032', 'Baju', 'Totam et commodi sequi natus. Hic asperiores cum quae ut ab eveniet. Sit explicabo facere tempore modi non.', '2023-11-01 15:50:39', '2023-11-01 15:50:39'),
(4, '9249', 'Topi', 'Saepe architecto non laudantium maiores culpa ut. Voluptatem cupiditate quia animi et quis dolor odit voluptatum. Aut et dolores et in perspiciatis. Omnis voluptas voluptatem eum sunt.', '2023-11-01 15:50:39', '2023-11-01 15:50:39'),
(5, '9538', 'Baju', 'Aspernatur iure veritatis iure aut suscipit. Maxime voluptas ea saepe neque similique. Aut hic consectetur aut explicabo. Sit recusandae quisquam tempora unde omnis adipisci quis.', '2023-11-01 15:50:39', '2023-11-01 15:50:39'),
(6, '7012', 'Topi', 'Qui iure possimus iste exercitationem. Architecto sit unde aut et sed harum ullam. Dicta libero quo voluptas non eligendi vel unde nemo. Nisi quia sed hic.', '2023-11-01 15:50:39', '2023-11-01 15:50:39'),
(7, '5328', 'Celana', 'Officiis expedita quis minima ut. In sit rerum eligendi voluptatem accusamus cupiditate. Nisi sed vel ut et ipsam molestiae eius facere.', '2023-11-01 15:50:39', '2023-11-01 15:50:39'),
(8, '3937', 'Topi', 'Cumque quo omnis delectus asperiores deleniti. Ipsum vero eaque eius non animi. Recusandae aut aliquid aut facere.', '2023-11-01 15:50:39', '2023-11-01 15:50:39'),
(9, '6047', 'Baju', 'Sit iusto assumenda alias sed ullam fuga veritatis. Et facilis et sed sint qui nihil officia animi. Quasi aliquam quas aut consequatur.', '2023-11-01 15:50:39', '2023-11-01 15:50:39'),
(10, '2137', 'Baju', 'Et non nostrum molestiae voluptatem ratione distinctio fugiat. Nihil ut voluptatibus vero repudiandae qui at omnis quaerat. Ipsa qui neque nam beatae voluptatem in cupiditate ullam. Saepe ut maiores veniam autem itaque fuga modi rerum.', '2023-11-01 15:50:39', '2023-11-01 15:50:39'),
(11, '1065', 'Baju', 'Sunt similique provident et soluta inventore. Atque rerum vitae sapiente et est. Consequuntur dolorem aut nisi delectus aut doloremque aut. Et molestias id porro totam praesentium earum.', '2023-11-14 23:28:42', '2023-11-14 23:28:42'),
(12, '2605', 'Topi', 'Inventore minus non eaque praesentium. Quos quam rerum dolorem distinctio. Quaerat asperiores necessitatibus consectetur quo cum exercitationem molestias enim.', '2023-11-14 23:28:42', '2023-11-14 23:28:42'),
(13, '2180', 'Celana', 'Quia quod et quam alias. Consequatur totam corporis consequatur. Ut et iste et rerum cupiditate vero et exercitationem. Accusamus rem iure aliquid quia ad. Totam sed impedit tenetur molestias et non voluptatum.', '2023-11-14 23:28:42', '2023-11-14 23:28:42'),
(14, '3526', 'Hoodie', 'A voluptatem et omnis magnam. Nihil dolor praesentium et rerum quis. Error suscipit quasi voluptatem qui impedit consequatur vitae ut. Consequatur nam beatae sed blanditiis.', '2023-11-14 23:28:42', '2023-11-14 23:28:42'),
(15, '1544', 'Celana', 'Nihil soluta sunt voluptatem nulla porro aut autem. Incidunt animi qui provident dignissimos ipsa totam. Nisi voluptatem quisquam nemo dolore. Aliquam sed fugiat necessitatibus nostrum sed corporis omnis.', '2023-11-14 23:28:42', '2023-11-14 23:28:42'),
(16, '8974', 'Baju', 'Fugit reprehenderit dolores occaecati exercitationem laborum. Nam ut repudiandae vero nihil reiciendis deserunt consequatur. Quod architecto dolorem delectus quaerat recusandae qui non doloribus.', '2023-11-14 23:28:42', '2023-11-14 23:28:42'),
(17, '2208', 'Celana', 'Est non voluptas voluptates beatae et consequatur. Aspernatur facere odit iure dolor sit quis vel. Est sunt modi dolor alias dicta accusantium fuga.', '2023-11-14 23:28:42', '2023-11-14 23:28:42'),
(18, '8279', 'Baju', 'Esse suscipit ipsum consequuntur provident sapiente incidunt nostrum. Ullam iusto quod et labore qui. Dicta veniam illum sint quasi et est occaecati eos.', '2023-11-14 23:28:42', '2023-11-14 23:28:42'),
(19, '8823', 'Hoodie', 'Omnis qui nam illum quia deserunt. Velit et repellendus voluptatum quasi.', '2023-11-14 23:28:42', '2023-11-14 23:28:42'),
(20, '1923', 'Baju', 'Fuga accusamus quidem magni ullam dolorem. Id fugiat voluptas ipsum sint est. Et accusamus eligendi temporibus quaerat sint quam. Quasi nulla rem amet enim harum dolorem qui.', '2023-11-14 23:28:42', '2023-11-14 23:28:42');

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
(5, '2023_10_17_153711_create_kategoris_table', 1),
(6, '2023_10_18_151917_create_produks_table', 1);

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
-- Table structure for table `produks`
--

CREATE TABLE `produks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_produk` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `stok` varchar(255) NOT NULL,
  `ukuran` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `kategori_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `produks`
--

INSERT INTO `produks` (`id`, `id_produk`, `nama`, `harga`, `stok`, `ukuran`, `deskripsi`, `gambar`, `kategori_id`, `created_at`, `updated_at`) VALUES
(37, '2001', 'Hoodie Black', '100000', '2', 'XL', 'Hoodie Keren Kang', 'images/2557PdEshHFygMjjvPbobw2M3Zfl6nRzuJwcib23.jpg', 14, '2023-11-15 01:13:18', '2023-11-15 01:13:18'),
(38, '2002', 'Baggy Jeans', '75000', '1', 'M', 'Baggy Jeans Idol', 'images/9aUCqcxmtRrkjpsPvIALlDJry1sXKerEZQjpQbsK.jpg', 15, '2023-11-15 01:13:51', '2023-11-15 01:13:51'),
(39, '2003', 'Varsity', '350000', '2', 'XXL', 'Varsity Mang Oleh', 'images/ATeQxrPyKW6SmByTE5U3YwC2cikRqtvLngnuHtli.jpg', 19, '2023-11-15 01:14:24', '2023-11-15 01:14:24'),
(40, '2004', 'Bucket Head', '25000', '1', 'S', 'Ya', 'images/in6NWAIP9Yu5Se9OeXuqTNNY64Ei5adOZ5IRVHbO.jpg', 12, '2023-11-15 01:14:57', '2023-11-15 01:14:57');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'nopal', 'naf', '$2y$10$AO.fiTn7vfVtQgTgLCZjxOfY6ouNiPPr/5blLVndnNtuU6VwU0552', NULL, '2023-11-01 20:21:39', '2023-11-01 20:21:39'),
(2, 'saya', 'admin', '$2y$10$Glb6yhhUUQP7RElwBILWsOqcCd0MicsCPbPKWNQcGK8CXL0tfsHJm', NULL, '2023-11-02 02:59:55', '2023-11-02 02:59:55'),
(3, 'rafi', 'rafigans', '$2y$10$YcRJYFuWuLqzxnrw2Mi/gOgndV48fzwlm6Yp3vlgndJYdF5WGlTsu', NULL, '2023-11-13 20:53:51', '2023-11-13 20:53:51');

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
-- Indexes for table `kategoris`
--
ALTER TABLE `kategoris`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kategoris_id_kategori_unique` (`id_kategori`);

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
-- Indexes for table `produks`
--
ALTER TABLE `produks`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `produks_id_produk_unique` (`id_produk`),
  ADD KEY `produks_kategori_id_foreign` (`kategori_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategoris`
--
ALTER TABLE `kategoris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produks`
--
ALTER TABLE `produks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `produks`
--
ALTER TABLE `produks`
  ADD CONSTRAINT `produks_kategori_id_foreign` FOREIGN KEY (`kategori_id`) REFERENCES `kategoris` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
