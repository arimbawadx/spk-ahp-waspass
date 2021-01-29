-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Jan 2021 pada 12.09
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk_ahp_waspass`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `ahp_alternatives`
--

CREATE TABLE `ahp_alternatives` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `alternatives_id` int(11) NOT NULL,
  `alternatives_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai_akhir` float DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `ahp_alternatives`
--

INSERT INTO `ahp_alternatives` (`id`, `alternatives_id`, `alternatives_code`, `nilai_akhir`, `created_at`, `updated_at`) VALUES
(10, 14, 'A1', 0.127275, '2021-01-29 00:37:23', '2021-01-29 01:22:08'),
(11, 15, 'A2', 0.200079, '2021-01-29 00:37:44', '2021-01-29 01:22:08'),
(12, 16, 'A3', 0.151953, '2021-01-29 00:39:02', '2021-01-29 01:22:08'),
(13, 17, 'A4', 0.103296, '2021-01-29 00:39:40', '2021-01-29 01:22:08'),
(14, 18, 'A5', 0.100108, '2021-01-29 00:40:20', '2021-01-29 01:22:08'),
(15, 19, 'A6', 0.141061, '2021-01-29 00:41:11', '2021-01-29 01:22:08'),
(16, 20, 'A7', 0.176227, '2021-01-29 00:42:11', '2021-01-29 01:22:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ahp_analisa_alternatives`
--

CREATE TABLE `ahp_analisa_alternatives` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Alt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `C1` int(11) NOT NULL,
  `C2` int(11) NOT NULL,
  `C3` int(11) NOT NULL,
  `C4` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `ahp_analisa_alternatives`
--

INSERT INTO `ahp_analisa_alternatives` (`id`, `Alt`, `C1`, `C2`, `C3`, `C4`, `created_at`, `updated_at`) VALUES
(1, 'A1', 2, 3, 2, 0.60, '2021-01-29 01:22:08', '2021-01-29 01:22:08'),
(2, 'A2', 5, 5, 3, 0.90, '2021-01-29 01:22:08', '2021-01-29 01:22:08'),
(3, 'A3', 5, 4, 2, 0.80, '2021-01-29 01:22:08', '2021-01-29 01:22:08'),
(4, 'A4', 3, 5, 1, 0.70, '2021-01-29 01:22:08', '2021-01-29 01:22:08'),
(5, 'A5', 4, 3, 1, 0.70, '2021-01-29 01:22:08', '2021-01-29 01:22:08'),
(6, 'A6', 3, 3, 2, 0.80, '2021-01-29 01:22:08', '2021-01-29 01:22:08'),
(7, 'A7', 4, 5, 3, 0.50, '2021-01-29 01:22:08', '2021-01-29 01:22:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ahp_analisa_criterias`
--

CREATE TABLE `ahp_analisa_criterias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_criterias` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `intensitas_values` float NOT NULL,
  `second_criterias` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `ahp_analisa_criterias`
--

INSERT INTO `ahp_analisa_criterias` (`id`, `first_criterias`, `intensitas_values`, `second_criterias`, `created_at`, `updated_at`) VALUES
(1, 'C1', 1, 'C1', '2021-01-28 07:14:13', '2021-01-28 07:14:13'),
(2, 'C2', 1, 'C1', '2021-01-28 07:14:13', '2021-01-28 07:14:13'),
(3, 'C3', 5, 'C1', '2021-01-28 07:14:13', '2021-01-28 07:14:13'),
(4, 'C4', 3, 'C1', '2021-01-28 07:14:13', '2021-01-28 07:14:13'),
(5, 'C1', 1, 'C2', '2021-01-28 07:14:13', '2021-01-28 07:14:13'),
(6, 'C2', 1, 'C2', '2021-01-28 07:14:13', '2021-01-28 07:14:13'),
(7, 'C3', 5, 'C2', '2021-01-28 07:14:13', '2021-01-28 07:14:13'),
(8, 'C4', 3, 'C2', '2021-01-28 07:14:13', '2021-01-28 07:14:13'),
(9, 'C1', 0.2, 'C3', '2021-01-28 07:14:13', '2021-01-28 07:14:13'),
(10, 'C2', 0.2, 'C3', '2021-01-28 07:14:13', '2021-01-28 07:14:13'),
(11, 'C3', 1, 'C3', '2021-01-28 07:14:13', '2021-01-28 07:14:13'),
(12, 'C4', 0.333333, 'C3', '2021-01-28 07:14:13', '2021-01-28 07:14:13'),
(13, 'C1', 0.333333, 'C4', '2021-01-28 07:14:13', '2021-01-28 07:14:13'),
(14, 'C2', 0.333333, 'C4', '2021-01-28 07:14:13', '2021-01-28 07:14:13'),
(15, 'C3', 3, 'C4', '2021-01-28 07:14:13', '2021-01-28 07:14:13'),
(16, 'C4', 1, 'C4', '2021-01-28 07:14:13', '2021-01-28 07:14:13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ahp_criterias`
--

CREATE TABLE `ahp_criterias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `criterias_id` int(11) NOT NULL,
  `code_criterias` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bobot` float DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `ahp_criterias`
--

INSERT INTO `ahp_criterias` (`id`, `criterias_id`, `code_criterias`, `bobot`, `created_at`, `updated_at`) VALUES
(7, 15, 'C1', 0.0967033, '2021-01-26 20:42:07', '2021-01-28 07:14:13'),
(8, 16, 'C2', 0.0967033, '2021-01-26 20:42:17', '2021-01-28 07:14:13'),
(9, 17, 'C3', 0.554945, '2021-01-26 20:43:34', '2021-01-28 07:14:13'),
(10, 18, 'C4', 0.251648, '2021-01-26 20:43:49', '2021-01-28 07:14:13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `alternatives`
--

CREATE TABLE `alternatives` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `alternative_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alternative_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `alternatives`
--

INSERT INTO `alternatives` (`id`, `alternative_code`, `alternative_name`, `created_at`, `updated_at`) VALUES
(14, 'A1', 'I Made Yoga Arimbawa', '2021-01-29 00:37:23', '2021-01-29 00:37:23'),
(15, 'A2', 'Komang Dodi Mahendra', '2021-01-29 00:37:44', '2021-01-29 00:37:44'),
(16, 'A3', 'I Gede Anhdika Parmana', '2021-01-29 00:39:02', '2021-01-29 00:39:02'),
(17, 'A4', 'Ni Made Wulan Indrayani', '2021-01-29 00:39:40', '2021-01-29 00:39:40'),
(18, 'A5', 'Pande Putu Sukma Awantari', '2021-01-29 00:40:20', '2021-01-29 00:40:20'),
(19, 'A6', 'Ni Nyoman Manik Sari Puspayanti', '2021-01-29 00:41:11', '2021-01-29 00:41:11'),
(20, 'A7', 'Devi Valentino Waas', '2021-01-29 00:42:11', '2021-01-29 00:42:11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `criterias`
--

CREATE TABLE `criterias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `criteria_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `criteria_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `criterias`
--

INSERT INTO `criterias` (`id`, `criteria_code`, `criteria_name`, `created_at`, `updated_at`) VALUES
(15, 'C1', 'Pekerjaan', '2021-01-26 20:42:07', '2021-01-26 20:42:07'),
(16, 'C2', 'Penghasilan', '2021-01-26 20:42:17', '2021-01-26 20:42:17'),
(17, 'C3', 'Jumlah Tanggungan', '2021-01-26 20:43:34', '2021-01-26 20:43:34'),
(18, 'C4', 'Kondisi Rumah', '2021-01-26 20:43:49', '2021-01-26 20:43:49');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2020_12_27_120046_create_criterias_table', 1),
(2, '2020_12_27_120418_create_alternatives_table', 1),
(3, '2021_01_24_081408_create_ahp_criterias_table', 1),
(4, '2021_01_24_081700_create_ahp_alternatives_table', 1),
(5, '2021_01_28_121125_create_ahp_analisa_criterias_table', 2),
(6, '2021_01_29_043407_create_ahp_analisa_alternatives_table', 3);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `ahp_alternatives`
--
ALTER TABLE `ahp_alternatives`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ahp_analisa_alternatives`
--
ALTER TABLE `ahp_analisa_alternatives`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ahp_analisa_criterias`
--
ALTER TABLE `ahp_analisa_criterias`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ahp_criterias`
--
ALTER TABLE `ahp_criterias`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `alternatives`
--
ALTER TABLE `alternatives`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `criterias`
--
ALTER TABLE `criterias`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `ahp_alternatives`
--
ALTER TABLE `ahp_alternatives`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `ahp_analisa_alternatives`
--
ALTER TABLE `ahp_analisa_alternatives`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `ahp_analisa_criterias`
--
ALTER TABLE `ahp_analisa_criterias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `ahp_criterias`
--
ALTER TABLE `ahp_criterias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `alternatives`
--
ALTER TABLE `alternatives`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `criterias`
--
ALTER TABLE `criterias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
