-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2025 at 04:45 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mental_health`
--

-- --------------------------------------------------------

--
-- Table structure for table `aktivitas`
--

CREATE TABLE `aktivitas` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `aktivitas`
--

INSERT INTO `aktivitas` (`id`, `judul`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, 'Tambah Gejala', 'Admin menambahkan gejala baru: Sakit Lidah', '2025-06-27 00:53:42', '2025-06-27 00:53:42'),
(2, 'Tambah Gejala', 'Admin menambahkan gejala baru: Perasaan terisolasi atau terasingkan', '2025-06-27 00:56:59', '2025-06-27 00:56:59');

-- --------------------------------------------------------

--
-- Table structure for table `aturans`
--

CREATE TABLE `aturans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_gejala` bigint(20) UNSIGNED NOT NULL,
  `id_penyakit` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aturans`
--

INSERT INTO `aturans` (`id`, `id_gejala`, `id_penyakit`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2025-06-26 11:24:06', '2025-06-26 11:24:06'),
(2, 2, 1, '2025-06-26 11:24:06', '2025-06-26 11:24:06'),
(3, 3, 2, '2025-06-26 11:24:06', '2025-06-26 11:24:06'),
(4, 4, 2, '2025-06-26 11:24:06', '2025-06-26 11:24:06'),
(5, 5, 2, '2025-06-26 11:24:06', '2025-06-26 11:24:06'),
(6, 6, 3, '2025-06-26 11:24:06', '2025-06-26 11:24:06'),
(7, 7, 3, '2025-06-26 11:24:06', '2025-06-26 11:24:06'),
(8, 8, 4, '2025-06-26 11:24:06', '2025-06-26 11:24:06'),
(9, 9, 4, '2025-06-26 11:24:06', '2025-06-26 11:24:06'),
(10, 10, 1, '2025-06-26 11:24:06', '2025-06-26 11:24:06'),
(11, 11, 5, '2025-06-26 11:24:06', '2025-06-26 11:24:06'),
(12, 12, 6, '2025-06-26 11:24:06', '2025-06-26 11:24:06'),
(13, 13, 7, '2025-06-26 11:24:06', '2025-06-26 11:24:06'),
(14, 14, 8, '2025-06-26 11:24:06', '2025-06-26 11:24:06'),
(15, 15, 9, '2025-06-26 11:24:06', '2025-06-26 11:24:06'),
(16, 16, 10, '2025-06-26 11:24:06', '2025-06-26 11:24:06');

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
-- Table structure for table `gejalas`
--

CREATE TABLE `gejalas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_gejala` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gejalas`
--

INSERT INTO `gejalas` (`id`, `nama_gejala`, `created_at`, `updated_at`) VALUES
(1, 'Perasaan sedih yang dalam', '2025-06-26 11:23:08', '2025-06-27 00:57:09'),
(2, 'Kehilangan minat terhadap kegiatan sehari-hari', '2025-06-26 11:23:08', '2025-06-26 11:23:08'),
(3, 'Kecemasan berlebihan', '2025-06-26 11:23:08', '2025-06-26 11:23:08'),
(4, 'Serangan panik', '2025-06-26 11:23:08', '2025-06-26 11:23:08'),
(5, 'Mudah merasa lelah', '2025-06-26 11:23:08', '2025-06-26 11:23:08'),
(6, 'Perasaan cemas yang berlebihan', '2025-06-26 11:23:08', '2025-06-26 11:23:08'),
(7, 'Perubahan suasana hati yang cepat', '2025-06-26 11:23:08', '2025-06-26 11:23:08'),
(8, 'Halusinasi', '2025-06-26 11:23:08', '2025-06-26 11:23:08'),
(9, 'Delusi atau pikiran yang tidak realistis', '2025-06-26 11:23:08', '2025-06-26 11:23:08'),
(10, 'Kesulitan tidur atau tidur berlebihan', '2025-06-26 11:23:08', '2025-06-26 11:23:08'),
(11, 'Kesulitan berkonsentrasi', '2025-06-26 11:23:08', '2025-06-26 11:23:08'),
(12, 'Kecemasan pasca-trauma', '2025-06-26 11:23:08', '2025-06-26 11:23:08'),
(13, 'Obsesi dengan kebersihan atau keteraturan', '2025-06-26 11:23:08', '2025-06-26 11:23:08'),
(14, 'Menghindari makan atau pola makan yang sangat terbatas', '2025-06-26 11:23:08', '2025-06-26 11:23:08'),
(15, 'Muntah setelah makan berlebihan', '2025-06-26 11:23:08', '2025-06-26 11:23:08'),
(16, 'Pikiran berulang yang mengganggu', '2025-06-26 11:23:08', '2025-06-26 11:23:08'),
(17, 'Fluktuasi suasana hati yang ekstrem', '2025-06-26 11:23:08', '2025-06-26 11:23:08'),
(20, 'Perasaan terisolasi atau terasingkan', '2025-06-27 00:56:59', '2025-06-27 00:56:59');

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2025_06_26_104830_create_penyakits_table', 1),
(6, '2025_06_26_104841_create_gejalas_table', 1);

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
-- Table structure for table `penyakits`
--

CREATE TABLE `penyakits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_penyakit` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `solusi` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `penyakits`
--

INSERT INTO `penyakits` (`id`, `nama_penyakit`, `deskripsi`, `solusi`, `created_at`, `updated_at`) VALUES
(1, 'Depresi', 'Gangguan mental yang menyebabkan perasaan sedih dan kehilangan minat terhadap aktivitas sehari-hari.', 'Pengobatan melibatkan terapi perilaku kognitif dan penggunaan obat-obatan antidepresan. Aktivitas fisik dan dukungan sosial juga sangat membantu.', '2025-06-26 11:23:34', '2025-06-26 11:23:34'),
(2, 'Gangguan Kecemasan', 'Gangguan yang ditandai dengan kecemasan berlebihan atau rasa takut yang tidak sesuai dengan kenyataan.', 'Terapi perilaku kognitif, teknik relaksasi, dan obat-obatan ansiolitik dapat membantu mengatasi gangguan kecemasan.', '2025-06-26 11:23:34', '2025-06-26 11:23:34'),
(3, 'Gangguan Bipolar', 'Gangguan yang menyebabkan perubahan drastis dalam suasana hati, termasuk periode mania dan depresi.', 'Pengobatan dengan obat penstabil suasana hati dan terapi psikologis dapat membantu mengelola gejala.', '2025-06-26 11:23:34', '2025-06-26 11:23:34'),
(4, 'Skizofrenia', 'Gangguan mental yang menyebabkan gangguan dalam pemikiran, persepsi, dan perilaku. Sering kali disertai dengan halusinasi dan delusi.', 'Obat antipsikotik dan terapi dukungan dapat membantu mengelola gejala skizofrenia.', '2025-06-26 11:23:34', '2025-06-26 11:23:34'),
(5, 'Gangguan Stres Pasca-Trauma (PTSD)', 'Gangguan mental yang terjadi setelah seseorang mengalami peristiwa traumatik, menyebabkan flashback dan kecemasan berlebihan.', 'Terapi berbicara, terapi kognitif, dan obat-obatan dapat membantu mengatasi PTSD.', '2025-06-26 11:23:34', '2025-06-26 11:23:34'),
(6, 'Obsessive-Compulsive Disorder (OCD)', 'Gangguan yang ditandai dengan pikiran berulang (obsesi) dan tindakan yang diulang-ulang (kompulsi).', 'Terapi perilaku kognitif dan obat antidepresan dapat membantu mengelola gejala OCD.', '2025-06-26 11:23:34', '2025-06-26 11:23:34'),
(7, 'Anoreksia Nervosa', 'Gangguan makan yang melibatkan ketakutan berlebihan terhadap kenaikan berat badan dan pola makan yang sangat terbatas.', 'Terapi perilaku dan dukungan medis dapat membantu individu dengan anoreksia untuk mencapai pola makan yang lebih sehat.', '2025-06-26 11:23:34', '2025-06-26 11:23:34'),
(8, 'Bulimia Nervosa', 'Gangguan makan yang melibatkan makan berlebihan diikuti dengan tindakan untuk mencegah kenaikan berat badan, seperti muntah atau penggunaan pencahar.', 'Kombinasi terapi perilaku dan dukungan medis dapat membantu mengatasi bulimia nervosa.', '2025-06-26 11:23:34', '2025-06-26 11:23:34'),
(9, 'Siklotimia', 'Gangguan mood yang melibatkan fluktuasi suasana hati yang lebih ringan daripada gangguan bipolar.', 'Terapi perilaku kognitif dan pengelolaan stres dapat membantu penderita siklotimia.', '2025-06-26 11:23:34', '2025-06-26 11:23:34'),
(10, 'Autisme Spektrum Disorder', 'Gangguan perkembangan yang mempengaruhi interaksi sosial, komunikasi, dan perilaku. Terkadang disertai dengan pola perilaku terbatas dan repetitif.', 'Terapi perilaku, intervensi sosial, dan dukungan pendidikan dapat membantu mengelola gejala autisme.', '2025-06-26 11:23:34', '2025-06-26 11:23:34');

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
  `name` varchar(255) NOT NULL,
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

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'Admin', 'mahasiswacreative@gmail.com', NULL, '$2y$10$zGgQpMIKVlyC0NvNDZmsHetH24drHxy8mJ6i4lxTR8fNyX.UsF5wS', NULL, '2025-06-26 08:59:49', '2025-06-26 08:59:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aktivitas`
--
ALTER TABLE `aktivitas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aturans`
--
ALTER TABLE `aturans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `gejalas`
--
ALTER TABLE `gejalas`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `penyakits`
--
ALTER TABLE `penyakits`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `aktivitas`
--
ALTER TABLE `aktivitas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `aturans`
--
ALTER TABLE `aturans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gejalas`
--
ALTER TABLE `gejalas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `penyakits`
--
ALTER TABLE `penyakits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
