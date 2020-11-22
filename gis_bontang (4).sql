-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2020 at 09:55 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gis_bontang`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `admin_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `admin_id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'f4874fe5-5921-3ebc-b7c2-f7ec5ceb7fc2', 'Administrator', 'admin@admin.com', '$2y$10$HvLOV/6JouzjDhlz4wScNOyyuLA4EHm1x6uD3Bu2c1rsW7n8vTf6y', '2020-10-31 03:13:54', '2020-11-14 08:57:05');

-- --------------------------------------------------------

--
-- Table structure for table `agendas`
--

CREATE TABLE `agendas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `agenda_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `agenda` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `agendas`
--

INSERT INTO `agendas` (`id`, `agenda_id`, `author`, `location`, `agenda`, `active`, `created_at`, `updated_at`) VALUES
(2, '2b9d7bf2-ec8b-36d8-9e6c-164229d26698', 'Dr. Fanny Morissette I', '61931 Mann Cove\nEast Suzannestad, IA 48098-9099', 'Quo totam alias et ratione.', 1, '2020-10-26 22:57:15', '2020-10-26 22:57:15'),
(3, '69760640-c382-3557-b2e2-12fbf1dc6ab3', 'Clark Schuppe', '79931 Marques Well\nLake Emilberg, NC 35401', 'Nisi sint iste aperiam harum eum.', 1, '2020-10-26 22:57:15', '2020-10-26 22:57:15'),
(4, '5f6e1bcb-f582-3224-b8fd-0b4dd299e785', 'Daisha Beatty', '7322 Arden Trail\nWest Camrynland, NE 46891-0299', 'Consectetur dolor rerum ab aliquid odio est.', 1, '2020-10-26 22:57:15', '2020-10-26 22:57:15'),
(5, 'bd80df92-dfaf-3ef7-b630-ef0e1c397fb2', 'Coralie Hudson', '4504 Elise Street\nSouth Fernando, CA 97057-1801', 'Tempora et odio cupiditate eius quo voluptas.', 1, '2020-10-26 22:57:15', '2020-10-26 22:57:15'),
(6, 'fd2b944d-5a29-315b-ad61-9367047c3a7e', 'Armani Wuckert', '427 Christiansen Tunnel Apt. 689\nTremblayhaven, RI 61468-7221', 'Ea repellat qui pariatur reiciendis.', 1, '2020-10-26 22:57:15', '2020-10-26 22:57:15'),
(7, '070ba8de-1474-3a70-8c52-e1b48fb09f74', 'Neva Lemke', '79832 Irma Light Suite 098\nWest Aaliyahland, ID 91376-2460', 'Vel voluptatem tempore distinctio provident sequi neque in.', 1, '2020-10-26 22:57:15', '2020-10-26 22:57:15'),
(8, '2f93164a-3026-39cc-9631-691ad9a91496', 'Eulalia Gleason IV', '96237 Lexus Parkways Suite 197\nLake Maybellestad, UT 04090', 'Sunt voluptate veniam voluptates quae architecto recusandae.', 1, '2020-10-26 22:57:15', '2020-10-26 22:57:15'),
(10, 'c0316ffb-fe97-37c8-b11a-028ff4078813', 'Marty Sporer DVM', '2066 Kelton Street\nEast Tiara, CO 59072-9796', 'Aspernatur quasi non aperiam odit quia.', 1, '2020-10-26 22:57:15', '2020-10-26 22:57:15'),
(11, '5c75a30d-6eb3-3300-be74-f954abaabd38', 'Dr. Dayne Veum III', '14874 Letitia Stream\nWest Destiny, NH 04929', 'Ut omnis aut dolor temporibus.', 1, '2020-10-26 22:57:15', '2020-10-26 22:57:15'),
(12, '72322283-a691-3fa6-bff9-6df2971fa38e', 'Dr. Timothy Hyatt', '6174 Nikolaus Path Suite 128\nArelymouth, WV 83721', 'Officia consequatur sed est voluptatem temporibus voluptatem aliquam.', 1, '2020-10-26 22:57:15', '2020-10-26 22:57:15'),
(13, 'd8b99bfe-6c29-37be-b14d-22908737433e', 'Anastasia Lubowitz', '1045 Janiya Plains\nSouth Katelynn, MT 42413', 'Odio est eum qui numquam omnis dolore doloremque mollitia.', 1, '2020-10-26 22:57:15', '2020-10-26 22:57:15'),
(14, 'f1518f9c-7606-354d-9998-093e9807a837', 'Dr. Axel Nicolas', '63637 Langosh Brooks\nSouth Bradlyburgh, OK 86468', 'Dolor non aliquam ut quam voluptatem.', 1, '2020-10-26 22:57:15', '2020-10-26 22:57:15'),
(15, '014d8f2d-a98f-3657-aa0c-ad9dd3346f49', 'Reymundo Schaden', '544 Goldner Track Apt. 815\nEast Dessieshire, LA 01537-0301', 'Adipisci temporibus est facilis autem in qui.', 1, '2020-10-26 22:57:15', '2020-10-26 22:57:15'),
(16, '050b3647-b7d9-3d8f-a1e0-93ee2e9e1431', 'Pablo Lynch', '262 Laisha Radial Suite 483\nWuckerthaven, NC 06136', 'Nam rerum et molestiae sunt molestiae sit quia eveniet.', 1, '2020-10-26 22:57:15', '2020-10-26 22:57:15'),
(17, 'd2027cbe-a88e-370f-b534-56779b822d17', 'Bulah Schowalter', '474 Greenholt Stravenue Suite 679\nWest Lerafort, WV 66661', 'Labore voluptas ab deserunt ipsum.', 1, '2020-10-26 22:57:15', '2020-10-26 22:57:15'),
(18, '5a9526ad-ed99-3e37-9598-7e36a381c500', 'Jamaal Goldner', '75636 Monahan Well\nNorth Karina, NC 89916-2776', 'Dolore dolorem accusantium eligendi delectus itaque.', 1, '2020-10-26 22:57:15', '2020-10-26 22:57:15'),
(19, '65d84912-5f7d-3faa-b314-4a71dec2dc30', 'Orlo Johnston DVM', '7621 Kali Squares\nSouth Zander, TN 96024-8465', 'Fugit officia ut aliquid modi aperiam sed nesciunt.', 1, '2020-10-26 22:57:15', '2020-10-26 22:57:15'),
(20, '4f7df652-f021-3dff-8b28-ab319281bfee', 'Darrel Bailey MD', '26318 Jacobs Course Suite 759\nPort Nehaland, CO 53199-4047', 'Aut temporibus voluptatem culpa laboriosam libero voluptas velit.', 1, '2020-10-26 22:57:15', '2020-10-26 22:57:15');

-- --------------------------------------------------------

--
-- Table structure for table `areas`
--

CREATE TABLE `areas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `area_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `caption` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `areas`
--

INSERT INTO `areas` (`id`, `area_id`, `code`, `name`, `tag`, `caption`, `created_at`, `updated_at`) VALUES
(1, 'f99e8105-5cd0-371d-87f2-eb80378b9ce6', '6073', 'Watersburgh', 'kecamatan', 'Beatae dignissimos quis itaque in.', '2020-10-29 02:57:32', '2020-10-29 02:57:32'),
(2, '4d5de480-b958-3956-bb3f-16097b59eaf0', '7135', 'Faheymouth', 'kecamatan', 'Accusantium aut odio ut.', '2020-10-29 02:57:32', '2020-10-29 02:57:32'),
(3, '62d595b0-95da-3b71-8f20-e50c6ee38a00', '6551', 'Yostview', 'kecamatan', 'Necessitatibus earum magni cupiditate sed.', '2020-10-29 02:57:32', '2020-10-29 02:57:32'),
(4, '85014e03-c50c-33d0-bfb1-bbc47106c23e', '1340', 'West Ayla', 'kecamatan', 'Repellendus quisquam aut ea accusantium exercitationem reiciendis.', '2020-10-29 02:57:32', '2020-10-29 02:57:32'),
(5, 'ddfe7117-95a6-3444-bd9f-8eca966ba74c', '1630', 'Leilaside', 'kecamatan', 'Excepturi voluptas consequuntur velit dolor et distinctio consequatur.', '2020-10-29 02:57:32', '2020-11-01 01:23:14'),
(6, '9fd90c5a-4357-37fa-a349-3164357b7812', '4867', 'Sylvesterborough', 'kelurahan', 'Aut culpa velit ipsam tenetur nemo molestiae.', '2020-10-29 02:57:53', '2020-10-29 02:57:53'),
(7, '633a99ef-cb27-3a54-9a61-e0adf01234f3', '2074', 'South Elvismouth', 'kelurahan', 'Asperiores eos doloremque praesentium quo.', '2020-10-29 02:57:53', '2020-10-29 02:57:53'),
(8, 'c96f7612-39ce-31e2-9c15-7edfe70c3427', '7516', 'Orinview', 'kelurahan', 'Quia pariatur sit temporibus perspiciatis cupiditate earum dolores.', '2020-10-29 02:57:53', '2020-10-29 02:57:53'),
(9, '5ee83da1-f559-3d30-8526-1c6ff3bf2aac', '5422', 'Owenview', 'kelurahan', 'Rerum magnam beatae tempore praesentium omnis.', '2020-10-29 02:57:53', '2020-10-29 02:57:53'),
(10, '2d3684be-9e39-30a2-82de-e80e011c32ce', '8317', 'Tremaynestad', 'kelurahan', 'Porro minima in ut.', '2020-10-29 02:57:53', '2020-10-29 02:57:53'),
(11, '37ecc623-fc42-320f-89f5-7ac5336f1fb2', '4395', 'Lake Clint', 'kabupaten', 'Laboriosam amet officiis exercitationem iure praesentium dolorem nobis.', '2020-10-29 02:58:03', '2020-10-29 02:58:03'),
(12, '3c1a0c8c-da06-3a17-bfb2-b2897362a6f3', '5760', 'Gerlachland', 'kabupaten', 'Est repellendus est odio amet.', '2020-10-29 02:58:03', '2020-10-29 02:58:03'),
(13, 'da8a4356-7565-34e5-89b4-b54685b4d9e1', '6728', 'Leuschkeberg', 'kabupaten', 'Ullam ipsa quia vel excepturi eum rerum odio.', '2020-10-29 02:58:03', '2020-10-29 02:58:03'),
(14, '4ffe22f6-1e1d-3d89-bbff-3cd02fbb7caf', '1740', 'New Amelie', 'kabupaten', 'Non impedit commodi minus sunt repellat enim odit.', '2020-10-29 02:58:03', '2020-10-29 02:58:03'),
(15, 'c2d6f001-b939-366c-a704-0b757534e2c9', '4947', 'Port Heleneborough', 'kabupaten', 'Sit facilis dolorem placeat.', '2020-10-29 02:58:03', '2020-10-29 02:58:03'),
(16, 'af0f2320-4fb0-3610-8f8c-be0b2f6ab940', '6794', 'East Randy', 'provinsi', 'Nulla magni dolorem facilis qui repellendus ullam magnam.', '2020-10-29 02:58:12', '2020-10-29 02:58:12'),
(17, '498fbc7f-8883-3e90-b563-8252f39acf25', '3404', 'Lornabury', 'provinsi', 'Facere quia eligendi sit qui.', '2020-10-29 02:58:12', '2020-10-29 02:58:12'),
(18, '25ed6282-eb19-3ba9-ac8c-52c72e23dd36', '6063', 'West Kasandrastad', 'provinsi', 'Ut cupiditate eos dicta ut ea enim.', '2020-10-29 02:58:12', '2020-10-29 02:58:12'),
(19, '469ff16f-9f0d-3afe-8566-ca9875ba4720', '6943', 'Lake Merleshire', 'provinsi', 'Quasi ipsum ducimus nisi dolores sunt alias.', '2020-10-29 02:58:12', '2020-10-29 02:58:12'),
(20, '1fd83a2c-29f3-3b65-8c72-61b26a0ce339', '3909', 'Gislasonside', 'provinsi', 'Consequatur expedita ea est perspiciatis.', '2020-10-29 02:58:12', '2020-10-29 02:58:12'),
(21, '0fa65a9d4f7b4342500c1ed929c28f74', '1234', 'Sungai Keledang', 'kelurahan', NULL, '2020-11-01 00:34:25', '2020-11-01 00:34:25');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `banner_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `caption` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `forms`
--

CREATE TABLE `forms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `form_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelurahan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `kabupaten` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `provinsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nomor_urut` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_lengkap` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lat` decimal(10,8) NOT NULL,
  `lng` decimal(11,8) NOT NULL,
  `usia` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pendidikan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jk` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nik` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_kk` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_kk` int(11) NOT NULL,
  `pekerjaan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `penghasilan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kepemilikan_tanah` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kepemilikan_rumah` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aset_rumah` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aset_tanah` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bantuan_perumahan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lokasi_rumah` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pondasi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kolom_balok` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `konstruksi_atap` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jendela` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ventilasi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kamar_mandi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jarak_air` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sumber_air` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sumber_listrik` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `luas_rumah` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_penghuni` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `material_atap` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kondisi_atap` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `material_dinding` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kondisi_dinding` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `material_lantai` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kondisi_lantai` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `forms`
--

INSERT INTO `forms` (`id`, `form_id`, `user_id`, `name`, `kelurahan`, `kecamatan`, `kabupaten`, `provinsi`, `foto`, `nomor_urut`, `nama_lengkap`, `lat`, `lng`, `usia`, `pendidikan`, `jk`, `alamat`, `nik`, `no_kk`, `jumlah_kk`, `pekerjaan`, `penghasilan`, `kepemilikan_tanah`, `kepemilikan_rumah`, `aset_rumah`, `aset_tanah`, `bantuan_perumahan`, `lokasi_rumah`, `pondasi`, `kolom_balok`, `konstruksi_atap`, `jendela`, `ventilasi`, `kamar_mandi`, `jarak_air`, `sumber_air`, `sumber_listrik`, `luas_rumah`, `jumlah_penghuni`, `material_atap`, `kondisi_atap`, `material_dinding`, `kondisi_dinding`, `material_lantai`, `kondisi_lantai`, `created_at`, `updated_at`) VALUES
(1, '7205111632d252bda63ec9b7723f529a', 'f7c54c63-c8d6-301e-ad20-732a45010f49', 'Ryo', 'Sylvesterborough', 'Faheymouth', 'Lake Clint', 'Lornabury', NULL, NULL, 'asdasd', '-0.45447600', '117.14389300', '1', 'SD/Sederajat', 'Laki-Laki', '1212', '123123', '111', 11, 'PNS', '< 1,2 juta', 'Milik Sendiri', 'Milik Sendiri', 'Ada', 'Ada', 'Ya, Lebih dari 5 tahun yang lalu', 'Rawan Air', 'Ada', 'Kondisi Baik', 'Kondisi Baik', 'Tidak Ada', 'Ada', 'Sendiri', 'Lebih dari 10 meter', 'PDAM', 'PLN dengan meteran', '11', '11', 'Genteng', 'Baik', 'Tembok', 'Baik', 'Marmer/Granit', 'Baik', '2020-11-11 23:05:54', '2020-11-11 23:05:54'),
(3, '7205111632d252bda63ec9b7723f529a', 'f7c54c63-c8d6-301e-ad20-732a45010f49', 'Ryo', 'Sylvesterborough', 'Faheymouth', 'Lake Clint', 'Lornabury', NULL, NULL, 'asdasd', '-0.45558100', '117.13544900', '1', 'SMP/Sederajat', 'Laki-Laki', '1212', '123123', '111', 11, 'PNS', '< 1,2 juta', 'Milik Sendiri', 'Milik Sendiri', 'Ada', 'Ada', 'Ya, Lebih dari 5 tahun yang lalu', 'Rawan Air', 'Ada', 'Kondisi Baik', 'Kondisi Baik', 'Tidak Ada', 'Ada', 'Sendiri', 'Lebih dari 10 meter', 'PDAM', 'PLN dengan meteran', '11', '11', 'Genteng', 'Baik', 'Tembok', 'Baik', 'Marmer/Granit', 'Baik', '2020-11-11 23:05:54', '2020-11-11 23:05:54'),
(4, '7205111632d252bda63ec9b7723f529aasd123', 'f7c54c63-c8d6-301e-ad20-732a45010f49', 'Ryo', 'Sylvesterborough', 'Faheymouth', 'Lake Clint', 'Lornabury', NULL, NULL, 'asdasd', '-0.45558100', '117.13544900', '1', 'SD/Sederajat', 'Laki-Laki', '1212', '123123', '111', 11, 'PNS', '< 1,2 juta', 'Milik Sendiri', 'Milik Sendiri', 'Ada', 'Ada', 'Ya, Lebih dari 5 tahun yang lalu', 'Rawan Air', 'Ada', 'Kondisi Baik', 'Kondisi Baik', 'Tidak Ada', 'Ada', 'Sendiri', 'Lebih dari 10 meter', 'PDAM', 'PLN dengan meteran', '11', '11', 'Genteng', 'Baik', 'Tembok', 'Baik', 'Marmer/Granit', 'Baik', '2020-11-11 23:05:54', '2020-11-11 23:05:54'),
(5, 'bce02f3334fe00030b076509d9955bba', 'f7c54c63-c8d6-301e-ad20-732a45010f49', 'Ryo', 'Sylvesterborough', 'Faheymouth', 'Lake Clint', 'East Randy', NULL, NULL, '123123213', '-1.25173760', '116.90311680', '1221', 'SMA/Sederajat', 'Perempuan', '1212', '1212', '121212', 1212, 'BUMN/D', '1,9 - 2,1 juta', 'Bukan Milik Sendiri', 'Bukan Milik Sendiri', 'Tidak Ada', 'Tidak Ada', 'Belum Pernah', 'KEK', 'Tidak Ada', 'Rusak Ringan', 'Rusak Ringan', 'Tidak Ada', 'Tidak Ada', 'Bersama/MCK Komunal', 'Lebih dari 10 meter', 'Air Kemasan/Isi Ulang', 'PLN tanpa meteran', '112', '1212', 'Asbes', 'Baik', 'GRC (Asbes)', 'Rusak Ringan', 'Keramik', 'Rusak Ringan', '2020-11-14 16:34:50', '2020-11-14 16:34:50');

-- --------------------------------------------------------

--
-- Table structure for table `fotos`
--

CREATE TABLE `fotos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `foto_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `form_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fotos`
--

INSERT INTO `fotos` (`id`, `foto_id`, `form_id`, `tag`, `foto`, `created_at`, `updated_at`) VALUES
(1, '426a4a64ea73a03fefe82b9695445813', '7205111632d252bda63ec9b7723f529a', 'foto_ktp', '1605164754_268317_larangan-berbisik-ketika-sedang-bertiga.jpg', '2020-11-11 23:05:54', '2020-11-11 23:05:54'),
(2, '7ef784cc918ef7de9e34a182e13e2db8', '7205111632d252bda63ec9b7723f529a', 'foto_kk', '1605164754_304650_larangan-berbisik-ketika-sedang-bertiga.jpg', '2020-11-11 23:05:54', '2020-11-11 23:05:54'),
(3, '3c8dcad50e77d372e8efb4b310bc83d0', '7205111632d252bda63ec9b7723f529a', 'pondasi', '1605164754_821649_larangan-berbisik-ketika-sedang-bertiga.jpg', '2020-11-11 23:05:54', '2020-11-11 23:05:54'),
(4, '81252d11a77de3af383fe0145f17ce5e', '7205111632d252bda63ec9b7723f529a', 'kolom_balok', '1605164754_733879_larangan-berbisik-ketika-sedang-bertiga.jpg', '2020-11-11 23:05:54', '2020-11-11 23:05:54'),
(5, 'cdd6c72a79796cf1ae4ecfc3c27d7032', '7205111632d252bda63ec9b7723f529a', 'konstruksi_atap', '1605164754_649171_larangan-berbisik-ketika-sedang-bertiga.jpg', '2020-11-11 23:05:54', '2020-11-11 23:05:54'),
(6, '441e9dddc5eaf54a7176b06fcf807668', '7205111632d252bda63ec9b7723f529a', 'jendela', '1605164754_165923_larangan-berbisik-ketika-sedang-bertiga.jpg', '2020-11-11 23:05:54', '2020-11-11 23:05:54'),
(7, 'cc830ccac64d879ee4717d38ca2c2d29', '7205111632d252bda63ec9b7723f529a', 'ventilasi', '1605164754_323996_larangan-berbisik-ketika-sedang-bertiga.jpg', '2020-11-11 23:05:54', '2020-11-11 23:05:54'),
(8, '73163b48330576138fa3a439db3a768a', '7205111632d252bda63ec9b7723f529a', 'kamar_mandi', '1605164754_295075_larangan-berbisik-ketika-sedang-bertiga.jpg', '2020-11-11 23:05:54', '2020-11-11 23:05:54'),
(9, 'f200de4846e6a2baed6c1a4354bf4a97', '7205111632d252bda63ec9b7723f529a', 'jarak_air', '1605164754_554365_larangan-berbisik-ketika-sedang-bertiga.jpg', '2020-11-11 23:05:54', '2020-11-11 23:05:54'),
(10, 'd42535627c20f654f8c5fa03f2826ee4', '7205111632d252bda63ec9b7723f529a', 'sumber_air', '1605164754_224038_larangan-berbisik-ketika-sedang-bertiga.jpg', '2020-11-11 23:05:54', '2020-11-11 23:05:54'),
(11, 'dcb3dcb3eac2b93268cc6920b15c7e4e', '7205111632d252bda63ec9b7723f529a', 'sumber_listrik', '1605164754_975045_larangan-berbisik-ketika-sedang-bertiga.jpg', '2020-11-11 23:05:54', '2020-11-11 23:05:54'),
(12, 'c2377d2a0b19693f0d3d9a11d2d33f4d', '7205111632d252bda63ec9b7723f529a', 'material_atap', '1605164754_117936_larangan-berbisik-ketika-sedang-bertiga.jpg', '2020-11-11 23:05:54', '2020-11-11 23:05:54'),
(13, '2b6ed0030301254e07c7cb773a328c66', '7205111632d252bda63ec9b7723f529a', 'kondisi_atap', '1605164754_253494_larangan-berbisik-ketika-sedang-bertiga.jpg', '2020-11-11 23:05:54', '2020-11-11 23:05:54'),
(14, '597a11444cae315a2c16c84436c360fe', '7205111632d252bda63ec9b7723f529a', 'material_dinding', '1605164754_186040_larangan-berbisik-ketika-sedang-bertiga.jpg', '2020-11-11 23:05:54', '2020-11-11 23:05:54'),
(15, '482dfe6e064bdf64b0ea0c7f04e5e15b', '7205111632d252bda63ec9b7723f529a', 'kondisi_dinding', '1605164754_733217_larangan-berbisik-ketika-sedang-bertiga.jpg', '2020-11-11 23:05:54', '2020-11-11 23:05:54'),
(16, 'a438cb5e3bb9831947f392eaabcaa6e0', '7205111632d252bda63ec9b7723f529a', 'material_lantai', '1605164754_436184_larangan-berbisik-ketika-sedang-bertiga.jpg', '2020-11-11 23:05:54', '2020-11-11 23:05:54'),
(17, '8913134f6ae67c679357a1ce61279a7d', '7205111632d252bda63ec9b7723f529a', 'kondisi_lantai', '1605164754_186725_larangan-berbisik-ketika-sedang-bertiga.jpg', '2020-11-11 23:05:54', '2020-11-11 23:05:54'),
(18, '426a4a64ea73a03fefe82b969544123a', '7205111632d252bda63ec9b7723f529a', 'foto_ktp', '1605164754_268317_larangan-berbisik-ketika-sedang-bertiga.jpg', '2020-11-11 23:05:54', '2020-11-11 23:05:54'),
(19, 'd97a1ec2ce2ee8ce964b09aa1410c8c2', 'bce02f3334fe00030b076509d9955bba', 'foto_ktp', '1605400490_954575_rengoku_by_muztnafi_dduntaq.png', '2020-11-14 16:34:50', '2020-11-14 16:34:50'),
(20, '96e654e3dfe0280649a626a8707e5f0e', 'bce02f3334fe00030b076509d9955bba', 'foto_kk', '1605400490_453934_rengoku_by_muztnafi_dduntaq.png', '2020-11-14 16:34:51', '2020-11-14 16:34:51'),
(21, '87e6fffe137015468de0e563a9093993', 'bce02f3334fe00030b076509d9955bba', 'pondasi', '1605400491_139665_tomioka_giyuu_by_muztnafi_ddwmwym.png', '2020-11-14 16:34:51', '2020-11-14 16:34:51'),
(22, '01bcc632409d5da387b162f6ae0cc6cd', 'bce02f3334fe00030b076509d9955bba', 'kolom_balok', '1605400491_575682_rengoku_by_muztnafi_dduntaq.png', '2020-11-14 16:34:51', '2020-11-14 16:34:51'),
(23, 'fb9ab68cf73bc610633983b8b302d323', 'bce02f3334fe00030b076509d9955bba', 'konstruksi_atap', '1605400491_681141_rengoku_by_muztnafi_dduntaq.png', '2020-11-14 16:34:52', '2020-11-14 16:34:52'),
(24, '17f9af64c2bb21aec7651945709d7e13', 'bce02f3334fe00030b076509d9955bba', 'jendela', '1605400492_259117_nwdn_file_temp_1604585897701.jpg', '2020-11-14 16:34:53', '2020-11-14 16:34:53'),
(25, 'd9f778cc91ce295f607f16a1a5ce22d9', 'bce02f3334fe00030b076509d9955bba', 'ventilasi', '1605400493_375133_nwdn_file_temp_1604585897701.jpg', '2020-11-14 16:34:53', '2020-11-14 16:34:53'),
(26, '166bcf7825cf9075b1e937dcdfad9cea', 'bce02f3334fe00030b076509d9955bba', 'kamar_mandi', '1605400493_488741_nwdn_file_temp_1604585897701.jpg', '2020-11-14 16:34:54', '2020-11-14 16:34:54'),
(27, '3fe00c68ac08f5e1656a5d9d8035a8e3', 'bce02f3334fe00030b076509d9955bba', 'jarak_air', '1605400494_582367_nwdn_file_temp_1604585897701.jpg', '2020-11-14 16:34:55', '2020-11-14 16:34:55'),
(28, '26d3c895654034711655db3d72a46314', 'bce02f3334fe00030b076509d9955bba', 'sumber_air', '1605400495_979016_nwdn_file_temp_1604585897701.jpg', '2020-11-14 16:34:56', '2020-11-14 16:34:56'),
(29, '9994840767fa2d5b4b5e6c9c8abca65d', 'bce02f3334fe00030b076509d9955bba', 'sumber_listrik', '1605400496_380909_nwdn_file_temp_1604585897701.jpg', '2020-11-14 16:34:57', '2020-11-14 16:34:57'),
(30, '39e5197d60f98ac88d47e63b9aa2e0a0', 'bce02f3334fe00030b076509d9955bba', 'material_atap', '1605400497_591260_nwdn_file_temp_1604585897701.jpg', '2020-11-14 16:34:58', '2020-11-14 16:34:58'),
(31, '5260b8d3a6b7689ac8ce4e44004845b9', 'bce02f3334fe00030b076509d9955bba', 'kondisi_atap', '1605400498_398825_nwdn_file_temp_1604585897701.jpg', '2020-11-14 16:34:59', '2020-11-14 16:34:59'),
(32, 'c3d2ac7ac93c6a241fca6883bcdd6e11', 'bce02f3334fe00030b076509d9955bba', 'material_dinding', '1605400499_374906_nwdn_file_temp_1604585897701.jpg', '2020-11-14 16:35:00', '2020-11-14 16:35:00'),
(33, 'f50a135be572f451359eba34503a5a2f', 'bce02f3334fe00030b076509d9955bba', 'kondisi_dinding', '1605400500_157353_nwdn_file_temp_1604585897701.jpg', '2020-11-14 16:35:01', '2020-11-14 16:35:01'),
(34, '80591d4a70bed2e13c3b32723a2ffd40', 'bce02f3334fe00030b076509d9955bba', 'material_lantai', '1605400501_165927_nwdn_file_temp_1604585897701.jpg', '2020-11-14 16:35:02', '2020-11-14 16:35:02'),
(35, '6abc3d98cfb7a404762a776325560212', 'bce02f3334fe00030b076509d9955bba', 'kondisi_lantai', '1605400502_863234_nwdn_file_temp_1604585897701.jpg', '2020-11-14 16:35:03', '2020-11-14 16:35:03');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gallery_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `caption` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `guest_books`
--

CREATE TABLE `guest_books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `guest_book_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `messages` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `maps`
--

CREATE TABLE `maps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `map_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `caption` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `maps`
--

INSERT INTO `maps` (`id`, `map_id`, `content`, `title`, `caption`, `created_at`, `updated_at`) VALUES
(1, '28d90d0c4c81c211d4a1e8f1a626b1e5', '{\"type\":\"FeatureCollection\",\"features\":[]}', NULL, NULL, '2020-11-14 02:45:37', '2020-11-14 05:18:06');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_10_20_061533_create_news_table', 1),
(5, '2020_10_23_142851_create_banners_table', 1),
(6, '2020_10_23_144025_create_profiles_table', 1),
(7, '2020_10_23_144034_create_visions_table', 1),
(8, '2020_10_23_144041_create_agendas_table', 1),
(9, '2020_10_23_144049_create_videos_table', 1),
(10, '2020_10_23_144058_create_galleries_table', 1),
(11, '2020_10_23_144105_create_contacts_table', 1),
(12, '2020_10_23_174346_create_admins_table', 1),
(13, '2020_10_24_124315_create_kelurahans_table', 1),
(14, '2020_10_24_124321_create_kecamatans_table', 1),
(15, '2020_10_24_124330_create_kabupatens_table', 1),
(16, '2020_10_24_124338_create_provinsis_table', 1),
(17, '2020_10_24_125113_create_options_table', 1),
(18, '2020_10_24_125316_create_fotos_table', 1),
(19, '2020_10_24_125339_create_forms_table', 1),
(20, '2020_10_27_130622_create_guest_books_table', 1),
(22, '2020_10_28_193223_create_areas_table', 2),
(23, '2020_11_02_135323_create_static_contents_table', 3),
(24, '2020_11_12_025817_create_maps_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `news_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `view` int(11) NOT NULL DEFAULT 0,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `news_id`, `author`, `title`, `content`, `tag`, `image`, `view`, `active`, `created_at`, `updated_at`) VALUES
(1, 'f983ca11fc5147195cbd346986aae6b6', NULL, 'Pasar Harjodaksino Solo Kembali Dibuka, Sejumlah Pengunjung tidak Pakai Masker', 'Pasar Harjodaksino, Jalan Yos Sudarso, Kelurahan Danukusuman, Serengan, Kota Solo, mulai beroperasi kembali, Senin (2/11) pagi. Pasar yang akrab disebut Pasar Gemblegan itu mulai dipenuhi pedagang, baik kios maupun los, serta ratusan pedagang oprokan di Jalan Dewi Sartika.\r\n\r\nSebagaimana diberitakan sebelumnya, pasar sembako dan kebutuhan rumah tangga lainnya tersebut ditutup sejak pekan lalu, akibat sejumlah pedagang dan karyawan terpapar corona. Bahkan salah satu pedagang yang sebelumnya sakit, meninggal dan hasil swab dinyatakan positif.\r\n\r\nPantauan merdeka.com, ratusan pedagang kembali memenuhi pasar. Jual beli dilakukan para pedagang dan pembeli.\r\n\r\n\"Alhamdulilah pasar Gemblegan sudah dibuka lagi. Saya berharap tak ada kasus lagi, itu pasti kami yang rugi. Kami juga berharap pedagang lain tertib mematuhi protokol kesehatan, biar aman,\" ujar Isminah, salah satu pedagang beras dan sembako kepada merdeka.com.\r\n\r\nPara pedagang, lanjut dia, menyayangkan kasus seperti ini muncul lagi. Karena para pelanggan takut dan tidak kembali. Menurut dia, yang pertama kasus dulu langganan belum banyak yang balik. Ia berharap kondisi normal, dan pasar kembali ramai.\r\n\r\n\"Bakul-bakul (pembeli langganan/kulakan) saya banyak yang tidak kembali pas kasus pertama dulu. Semoga kondisinya cepat normal dan ramai lagi,\" katanya.\r\n\r\nLurah Pasar Harjodaksino, Listianto membenarkan, hari ini mulai pukul 00.00 WIB penutupan Pasar Harjodaksino akibat Covid-19 berakhir.\r\n\r\n\"Ini sudah kita buka lagi, pedagang bisa kembali berjualan,\" katanya.\r\n\r\nPada hari pertama pasar dibuka, baru 60 persen pedagang yang berjualan. \"Sebagian kios dan los masih tutup karena mereka tidak tahu kalau hari ini (Senin) pasar sudah dibuka lagi,\" kata dia.\r\n\r\nSebelum pasar dibuka, kata dia, pada Minggu kemarin dilakukan penyemprotan disinfektan. Kemudian pada pukul 12.00 WIB pedagang diberikan kesempatan memasukkan barang dagangannya ke dalam pasar.\r\n\r\n\"Yang masih tutup rata-rata mereka pedagang luar kota yang tidak ikut grup WhatsApp Pasar Harjodaksino,\" pungkas dia.\r\n\r\nSementara itu pantauan di Jalan Dewi Sartika, sejumlah pengunjung nampak tidak mengenakan masker atau membawa masker namun tidak tepat penggunaannya. Namun sayang tidak ada petugas keamanan maupun petugas pasar yang mengingatkan mereka.\r\n\r\n\"Tadi lupa enggak bawa mas, buru-buru soalnya, biasanya juga bawa dan pakai,\" kilah Sarju, warga Sukoharjo yang sedang berbelanja sayur.', 'POLITIK', '1604299320_126920_pasar-harjodaksino-solo-kembali-dibuka-sejumlah-pengunjung-tidak-pakai-masker.jpeg', 3, 1, '2020-11-01 22:42:00', '2020-11-04 05:56:44'),
(2, 'dd066a1a19568273da0dea98f1e8e96f', NULL, 'Jaksa: Irjen Napoleon Minta Naik Rp7 M \'buat yang Nempatin Saya, Petinggi Kita Nih\'', 'Jaksa Penuntut Umum (JPU) membacakan dakwaan terhadap mantan Kadiv Hubinter Irjen Napoleon Bonaparte, terdakwa kasus penghapusan status red notice Djoko Tjandra. Dalam kesempatan itu dibeberkan bagaimana pembagian uang antara Irjen Napoleon dengan terdakwa lainnya, Brigjen Prasetijo Utomo.\r\n\r\nBerawal saat April tahun 2020, Djoko Tjandra yang berada di Kuala Lumpur, Malaysia, menghubungi Tommy Sumardi melalui telepon dengan maksud meminta bantuan agar dapat masuk ke Indonesia secara sah untuk mengajukan Peninjauan Kembali (PK) atas kasus korupsi Bank Bali. Tommy diminta menanyakan status Red Notice di Interpol.\r\n\r\n\"Joko Soegiarto Tjandra bersedia memberikan uang sebesar Rp 10 miliar melalui Tommy Sumardi untuk diberikan kepada pihak-pihak yang turut mengurus kepentingan Joko Soegiarto Tjandra masuk ke Indonesia, terutama kepada pejabat di NCB INTERPOL Indonesia pada Divisi Hubungan Internasional Polri,\" tutur jaksa di Pengadilan Negeri Jakarta Pusat, Senin (2/11).\r\n\r\nMenurut Jaksa, Tommy Sumardi meminta bantuan kepada Brigjen Prasetijo Utomo di kantornya yakni Biro Koordinasi dan Pengawasan Penyidik Pegawai Negeri Sipil Bareskrim Polri. Prasetijo kemudian mengenalkannya kepada Irjen Napoleon Bonaparte selaku Kadiv Hubinter Bareskrim Polri.\r\n\r\n\"Tommy Sumardi dengan membawa paper bag warna gelap (merah tua) tiba di gedung TNCC Mabes Polri dan menuju ruang Kadiv Hubinter bertemu dengan Terdakwa Irjen Napoleon Bonaparte di ruang Kadiv Hubinter pada lantai 11 gedung TNCC Mabes Polri,\" jelas jaksa.\r\n\r\nPada 16 April 2020, Tommy Sumardi menanyakan kepada Irjen Napoleon tentang status red notice Djoko Tjandra dan dijanjikan akan dilakukan pengecekan. Tommy Sumardi juga menyerahkan paper bag warna gelap kepada Irjen Napoleon Bonaparte.\r\n\r\nEsok harinya, Tommy Sumardi bersama Brigjen Prasetijo Utomo menemui Irjen Napoleon Bonaparte di ruangan Kadiv Hubinter Polri. Dalam pertemuan itu, Irjen Napoleon menyampaikan bahwa red notice Djoko Tjandra bisa dibuka.\r\n\r\n\"Red Notice Joko Soegiarto Tjandra bisa dibuka, karena Lyon yang buka, bukan saya. Saya bisa buka, asal ada uangnya. Kemudian Tommy Sumardi menanyakan berapa nominal uangnya dan oleh terdakwa Irjen Napoleon Bonaparte dijawab \'3 lah ji\' atau Rp 3 milliar. Setelah itu Tommy Sumardi meninggalkan ruangan Kadiv Hubinter\" kata Jaksa.\r\n\r\nPada 27 April 2020, Djoko Tjandra meminta sekretarisnya yakni Nurmawan Fransisca untuk menyerahkan uang sebesar USD 100 ribu melalui Nurdin kepada Tommy Sumardi. Setelah itu, Tommy Sumardi bersama Brigjen Prasetijo Utomo menuju kantor Div Hubinter untuk menyerahkan uang kepada Terdakwa Irjen Napoleon Bonaparte.\r\n\r\n\"Saat di perjalanan, di dalam mobil, Brigjen Prasetijo Utomo melihat uang yang dibawa oleh Tommy Sumardi, kemudian mengatakan \'banyak banget ini ji buat beliau? Buat gw mana?\' dan saat itu uang dibelah dua oleh Brigjen Prasetijo Utomo dengan mengatakan \'ini buat gw, nah ini buat beliau\' sambil menunjukkan uang yang sudah dibagi dua. Kemudian dijawab oleh Tommy Sumardi \'ya udah lo aja yang nyerahin semuanya\',\" beber jaksa.\r\n\r\nSetiba di ruangan Kadihubinter, Brigjen Prasetijo menyerahkan sisa uang yang ada sebanyak USD 50 ribu. Namun Irjen Napoleon Bonaparte tidak mau menerima uang dengan nominal tersebut dan menaikkan menjadi Rp 7 miliar.\r\n\r\n\"Dengan mengatakan \'ini apaan nih segini, enggak mau saya. Naik ji jadi 7 ji, soalnya kan buat depan juga bukan buat saya sendiri. Yang nempatin saya kan beliau dan berkata \'petinggi kita ini\',\" ujar jaksa.', 'POLITIK', '1604299776_781403_jaksa-irjen-napoleon-minta-naik-rp7-m-buat-yang-nempatin-saya-petinggi-kita-nih.jpg', 0, 1, '2020-11-01 22:49:36', '2020-11-01 22:49:36'),
(3, 'b0765a2c94ac75dc0e421a7e5e2c05b5', NULL, 'Nasib Muslim Prancis di Tengah Kuatnya Sekularisme', 'Di usianya yang ke-42 Mehdy Belabbas adalah sosok yang sesuai dengan janji Prancis untuk menjunjung tinggi cita-cita republik. Dia adalah putra seorang pekerja konstruksi keturunan Aljazair. Dia adalah anak pertama di keluarganya yang lulus dari sekolah di Prancis dan menjabat sebagai wakil wali kota di kota tempat dia tumbuh dewasa.\r\n\r\nDalam dua pekan terakhir ini Bellabas merenungkan satu hal: \"Saya berpikir bagaimana seandainya saya harus pergi dari Prancis.\"\r\n\r\nRenungan Belabbas dipicu oleh serangkaian kabar penuh kebencian, debat publik, terlebih diutarakan oleh para menteri di bawah kepemimpinan Presiden Emmanuel Macron sebagai respons atas pembunuhan seorang guru sejarah oleh remaja muslim ekstrem 18 tahun di Paris dan diikuti serangan di Nice Kamis lalu.\r\n\r\nAparat Prancis mengumumkan mereka berjanji hendak menindak tegas apa yang disebut Menteri Dalam Negeri Gerald Darmanin sebagai \"musuh dalam selimut\" dengan menutup sebuah masjid, melarang sejumlah organisasi muslim yang dianggap ekstremis dan bahkan hendak melarang produk-produk buatan etnis muslim di toko-toko.', 'LUAR NEGERI', '1604300353_554980_nasib-muslim-prancis-di-tengah-kuatnya-sekularisme-hot-issue.jpg', 1, 1, '2020-11-01 22:59:13', '2020-11-03 04:59:56'),
(4, '245957f9517316ca3111c4ff2dca1988', NULL, 'Jokowi: Mengaitkan Agama dengan Tindakan Terorisme Adalah Kesalahan Besar', 'Presiden Joko Widodo (Jokowi) mengecam peristiwa kekerasan yang terjadi di Prancis dan pernyataan Presiden Prancis Emmanuel Macron yang melukai umat Islam. Dia menilai salah besar bila agama dikaitkan dengan terorisme.\r\n\r\n\"Mengaitkan agama dengan tindakan terorisme adalah sebuah kesalahan besar, terorisme adalah terorisme,\" kata Jokowi lewat virtual di Istana Merdeka, Jakarta, Sabtu (31/10).\r\n\r\nMenurutnya, terorisme dan agama harus dipisahkan. Keduanya adalah hal yang berbeda.\r\n\r\n\"Teroris adalah teroris, terorisme tidak ada hubungannya dengan agama apapun,\" tegasnya.\r\n\r\nMantan Wali Kota Solo tersebut mengajak warga seluruh dunia mengedepankan persatuan. Jokowi ingin keadaan dunia lebih baik.\r\n\r\n\"Indonesia mengajak dunia mengedepankan persatuan dan toleransi beragama untuk membangun dunia yang lebih baik,\" pungkasnya.', 'HOT', '1604300440_329408_jokowi-mengaitkan-agama-dengan-tindakan-terorisme-adalah-kesalahan-besar.jpeg', 1, 1, '2020-11-01 23:00:40', '2020-11-02 08:09:10'),
(5, '126b2305504c7d854ee9769f1777066e', NULL, '4 Cara Mengatasi Nyeri Akibat Infeksi Saluran Kemih yang Bisa Membahayakan Ibu Hamil', 'Infeksi Saluran Kemih merupakan gangguan kesehatan yang rentan dialami baik dalam kondisi hamil atau tidak. Masalah kesehatan ini juga disebut sempat dialami oleh artis Irish Bella.\r\n\r\nPada ibu hamil, munculnya penyakit infeksi saluran kemih ini bisa lebih berbahaya. Pasalnya letak janin seorang ibu hamil berada di atas kandung kemih. Oleh karena itu, ketika terjadi masalah di kandung kemih makan muncul juga bahaya pada janin.\r\n\r\nPada dasarnya, infeksi saluran kemih bisa terjadi ketika bakteri muncul di jalur uretra. Ketika mengalami masalah ini, kencing yang keluar biasanya terasa lebih panas dan munculnya rasa nyeri yang tak tertahankan.\r\n\r\nUntuk mengatasi masalah ini, dokter bisa menyarankan untuk mengonsumsi sejumlah obat. Namun masalah ini juga dapat ditangani secara alami. Dilansir dari idiva, berikut sejumlah cara alami hilangkan nyeri akibat infeksi saluran kemih.', 'TIPS', '1604300554_610288_4-cara-mengatasi-nyeri-akibat-infeksi-saluran-kemih-yang-bisa-membahayakan-ibu-hamil-rev-1.jpg', 0, 1, '2020-11-01 23:02:34', '2020-11-01 23:03:12'),
(6, 'e53f3a9b7b8c37028fedd5829cbe6b53', NULL, 'Anggota TNI Dipukuli, Komentar Jenderal yang Jadi Ketua Rombongan Moge Jadi Sorotan', 'Beredar video viral di media sosial. Video tersebut memperlihatkan dua orang anggota TNI tengah dikeroyok oleh beberapa pengendara Motor Gede (Moge) Harley Davidson di Bukti Tinggi, Sumatera Barat.\r\n\r\nSaat ini, Kepolisian Resort (Polres) Kota Bukittinggi telah menetapkan empat pengendara rombongan Motor Gede (Moge) Harley Davidson asal Bandung, Jawa Barat sebagai tersangka pengeroyokan terhadap dua anggota TNI.\r\n\r\nKeempat tersangka itu diketahui berinisial MS (49), B (18), RHS (48) dan NJAD (26). Pihak kepolisian pun hingga kini masih melakukan pemeriksaan terhadap anggota Moge lainnya.\r\n\r\nRombongan Moge tersebut dipimpin oleh mantan Panglima Komando Cadangan Strategis Angkatan Darat Letnan Jenderal TNI Purnawirawan Djamari Chaniago. Ketika ditanyai tentang insiden yang tersebut, Djamari pun memberikan komentarnya.\r\n\r\nTetapi, komentar dari Djamari tersebut ternyata malah disoroti oleh para netizen. Lantas apa komentar Djamari? Berikut ulasan lengkapnya.', 'HOT', '1604300652_915727_anggota-tni-dipukuli-komentar-jenderal-yang-jadi-ketua-rombongan-moge-jadi-sorotan.png', 1, 1, '2020-11-01 23:04:12', '2020-11-03 04:57:50'),
(7, 'eb6e1df486861e7703076bdb901bc666', NULL, 'Dirusak Saat Demo, Empat Halte TransJakarta Akan Dibangun Berkonsep Kekinian', 'Direktur Utama PT Transportasi Jakarta Sardjono Jhony Tjitrokusumo berencana merombak empat halte TransJakarta dengan desain atau konsep kekinian.\r\n\r\nHalte-halte yang dirombak itu sebagian besar merupakan halte yang mengalami kerusakan berat akibat aksi penolakan UU Cipta Kerja pada 8 Oktober lalu.\r\n\r\n\"Nantinya pelanggan tidak hanya terlayani mobilitasnya dari sisi kebutuhan transportasi tetapi juga bisa menjadikan transportasi sebagai bagian dari gaya hidup dalam melaksanakan kegiatan sehari-hari,\" ujar Jhony di Jakarta, Minggu (1/11). Seperti dilansir Antara.\r\n\r\nJhony mengatakan empat halte yang akan dirombak yakni Halte Sarinah, Bundaran HI, Tosari dan Dukuh Atas 1.\r\n\r\nHalte dengan konsep kekinian itu nantinya terdiri atas dua lantai. Lantai dasar akan menjadi tempat berlangsungnya kegiatan transportasi seperti biasanya, yakni proses penaikan dan penurunan pelanggan hingga ruang tunggu pelanggan.\r\n\r\nDi lantai atas, rencananya ada berbagai kegiatan untuk pemenuhan segala kebutuhan pelanggan seperti restoran dan kedai kopi.\r\n\r\nDengan konsep ini diharapkan pelanggan bisa merasakan pengalaman yang menyenangkan dan berbeda saat menggunakan layanan TransJakarta.\r\n\r\n\"Direncanakan halte dengan konsep baru ini ditargetkan sudah bisa dinikmati pada Quartal 3 (tiga) tahun 2021 mendatang,\" ujar Jhony.\r\n\r\nTransJakarta terus mengimbau masyarakat untuk tetap di rumah saja apabila tidak ada keperluan yang mendesak. Namun jika meninggalkan rumah karena terpaksa, tetap selalu terapkan 3M, yakni memakai masker, mencuci tangan dan menjaga jarak.', 'BERITA', '1604300820_750653_dirusak-saat-demo-empat-halte-transjakarta-akan-dibangun-berkonsep-kekinian.jpg', 1, 1, '2020-11-01 23:07:00', '2020-11-02 08:07:34'),
(8, 'b0beca19494326cd2e732baedc515d04', NULL, 'Prancis dan Nilai-Nilai Sekularisme yang Dipertanyakan', 'Lebih dari sepekan setelah guru sejarah Samuel Paty dibunuh, banyak kalangan membela nilai-nilai sekularisme Prancis. Namun sebagian lain menyebut keyakinan sekuler itu bisa menjadi minyak yang dituang di bara api perpecahan dan memicu ekstremisme.\r\n\r\nPada Januari 2015, jutaan warga Prancis turun ke jalanan Paris untuk mengecam serangan teroris ke kantor reaksi majalah satir Charlie Hebdo yang memuat kartun Nabi Muhammad. Bangsa yang marah itu membela habis-habisan kebebasan berekspresi dan nilai-nilai sekularisme Prancis.\r\n\r\nLima tahun kemudian setelah serangan teroris serupa, tampaknya ada semacam deja vu. Kali ini yang berdemo turun ke jalan lebih sedikit tapi kengeriannya masih sama: seorang guru sejarah bernama Samuel Paty dipenggal di dekat sekolah tempat dia mengajar karena memperlihatkan kartun Nabi Muhammad di kelasnya dengan alasan kebebasan berpendapat.\r\n\r\nDilansir dari laman Deutsche Welle Sabtu lalu, kartun bernada penghinaan yang menjadi pemicu serangan ke Charlie Hebdo dan penikaman dua orang di Paris bulan lalu, kembali menguji sampai sejauh mana batasan nilai-nilai sekularisme Prancis atau yang disebut laicite. Bagi sebagian kalangan pandangan sekularisme semacam itu justru kian meruncingkan ketegangan dan stigmatisasi terhadap muslim Prancis yang merupakan komunitas Islam terbesar di Eropa.\r\n\r\nKini Presiden Emmanuel Macron dan para pembantunya berjanji akan menggempur total Islam radikal. Tapi banyak kalangan melihat langkah itu justru memperburuk keadaan. Alih-alih memberi ruang bagi bertemunya berbagai keyakinan di negeri itu, sekularisme yang dituangkan dalam undang-undang 1905 yang memisahkan peran gereja dan negara--kini menjadi sorotan.\r\n\r\n\"Ada tradisi politik yang bermasalah dengan Islam,\" kata Farhad Khosrokhavar, pakar sosiologi dan Islam radikal. \"Dan tradisi politik ini, laicite, adalah masalah.\"', 'HOT', '1604300908_355555_prancis-dan-nilai-nilai-sekularisme-yang-dipertanyakan-hot-issue.png', 0, 1, '2020-11-01 23:08:28', '2020-11-01 23:08:28'),
(9, '8a86dbae3630c561a3ad0dd83c279829', NULL, 'Waspada, Begal Incar Pesepeda', 'Kondisi pandemi membawa dampak positif bagi masyarakat Indonesia untuk hidup sehat. Salah satu caranya dengan rajin berolahraga.\r\n\r\nBersepeda menjadi salah satu olahraga yang sedang digandrungi saat ini. Dibandingkan sebelum pandemi, kini aktivitas masyarakat bersepeda khususnya di Jakarta meningkat berkali lipat.\r\n\r\n\"Animo masyarakat persebaran luar biasa tinggi di Jalan Sudirman-Thamrin itu diukur oleh teman-teman di Dinas Perhubungan lompatannya tinggi sekali sampai 10 kali lipat,\" kata Gubernur DKI Jakarta, Anies Baswedan, beberapa waktu lalu.\r\n\r\nSebagai bentuk dukungan, Anies kemudian menyediakan sejumlah fasilitas pendukung untuk pesepeda di Jakarta. Seperti menginstruksikan gedung-gedung memiliki tempat parkir dan jalur khusus sepeda.\r\n\r\nHal positif ini, kata Anies, harus dipertahankan bahkan bila nanti pandemi sudah berakhir. Sebab dengan bersepeda, warga membantu mengurangi polisi udara dan ketergantungan pada kendaraan pribadi seperti mobil dan motor.\r\n\r\n\"Kami sedang memikirkan untuk menerapkan kebijakan itu pasca pandemi, sehingga masyarakat bisa meneruskan kebiasaan bersepeda ini, karena bagaimanapun sepeda adalah moda transportasi yang sehat bebas polusi aman dan bila itu jadi kebiasaan bersama akan baik untuk kota ini,\" janji Anies.\r\n\r\nApalagi sampai data Oktober ini, data pengguna sepeda di Jakarta terus naik tajam.\r\n\r\n\"Volume lalu lintas sepeda rata-rata volume sepeda per hari mengalami peningkatan sebesar 211,70 persen dibandingkan saat pemberlakuan PSBB II,\" ucap Kadishub DKI, Syafrin Liputo.', 'HOT', '1604300971_390646_waspada-begal-incar-pesepeda-hot-issue.jpg', 0, 1, '2020-11-01 23:09:31', '2020-11-01 23:09:31');

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `option_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`id`, `option_id`, `tag`, `name`, `active`, `created_at`, `updated_at`) VALUES
(6, 'b4eb3130-0ff3-3421-8b60-e67e1004216e', 'pendidikan', 'Tidak Punya Ijazah', 1, '2020-10-29 03:21:09', '2020-11-14 07:39:02'),
(7, '1cf1e8b6-0dff-3478-9c1f-d84ad79fa4a2', 'pendidikan', 'SD/Sederajat', 1, '2020-10-29 03:21:27', '2020-10-29 03:21:27'),
(8, '3a76078c-7db4-3fd9-8ebe-27d1d64ea7a2', 'pendidikan', 'SMP/Sederajat', 1, '2020-10-29 03:21:37', '2020-10-29 03:21:37'),
(9, '747252ec-f879-3cd2-8179-f3a93f12002a', 'pendidikan', 'SMA/Sederajat', 1, '2020-10-29 03:21:43', '2020-10-29 03:21:43'),
(10, 'c9e14937-1e6c-34c2-81dd-38f362f67b8d', 'pendidikan', 'D1/D2/D3', 1, '2020-10-29 03:21:57', '2020-10-29 03:21:57'),
(11, '24b26547-0326-310e-b8e9-c25c1e6f0fef', 'pendidikan', 'D4/S1', 1, '2020-10-29 03:22:04', '2020-10-29 03:22:04'),
(12, '964dc23f-2fa0-3dc3-ad29-dcadeb1c5bcc', 'pekerjaan', 'PNS', 1, '2020-10-29 04:10:05', '2020-10-29 04:10:05'),
(13, 'ad8757c1-9270-3ae1-8ee8-61f8c753a4cd', 'pekerjaan', 'TNI/POLRI', 1, '2020-10-29 04:10:13', '2020-10-29 04:10:13'),
(14, '379b0ae0-ac52-3869-84a0-90f36129aec3', 'pekerjaan', 'BUMN/D', 1, '2020-10-29 04:10:24', '2020-10-29 04:10:24'),
(15, '647e2fd8-0fd6-3d04-bd60-53c14544fdd6', 'penghasilan', '< 1,2 juta', 1, '2020-10-29 04:10:41', '2020-10-29 04:10:41'),
(16, '95c96bad-4da6-32b9-8fc0-4c190a816740', 'penghasilan', '1,9 - 2,1 juta', 1, '2020-10-29 04:11:00', '2020-10-29 04:11:00'),
(17, 'fe7f3539-9baf-3aac-aa86-ab80d621f1ef', 'kepemilikan_tanah', 'Milik Sendiri', 1, '2020-10-29 04:11:27', '2020-10-29 04:11:27'),
(18, 'aba4cf73-14da-33c2-9492-a616685e9152', 'kepemilikan_tanah', 'Bukan Milik Sendiri', 1, '2020-10-29 04:11:37', '2020-10-29 04:11:37'),
(19, '822dbac5-1bc6-3dcc-a2f9-c72c723a901b', 'kepemilikan_tanah', 'Tanah Negara', 1, '2020-10-29 04:11:46', '2020-10-29 04:11:46'),
(20, '9d051a3b-0fd4-3ebe-9564-69c8a69c8ae4', 'kepemilikan_rumah', 'Milik Sendiri', 1, '2020-10-29 04:12:04', '2020-10-29 04:12:04'),
(21, '0ec7ac4a-eb59-3e1f-beed-b4462d3cffa7', 'kepemilikan_rumah', 'Kontrak/Sewa', 1, '2020-10-29 04:12:20', '2020-10-29 04:12:20'),
(22, '74c1cc95-d226-3e7a-adb3-54d37cd370db', 'kepemilikan_rumah', 'Bukan Milik Sendiri', 1, '2020-10-29 04:12:30', '2020-10-29 04:12:30'),
(23, '4e331574-98aa-3a23-802c-86c491bed895', 'aset_rumah', 'Ada', 1, '2020-10-29 04:12:49', '2020-10-29 04:12:49'),
(24, 'a0ee49ea-2210-39cb-b656-9afb7970479d', 'aset_rumah', 'Tidak Ada', 1, '2020-10-29 04:12:54', '2020-10-29 04:12:54'),
(25, '9285ff42-2d02-3ddf-aca8-b5f9d769f068', 'aset_tanah', 'Ada', 1, '2020-10-29 04:13:01', '2020-10-29 04:13:01'),
(26, 'd9f0ea09-c8bf-3932-8f68-46724fe966b6', 'aset_tanah', 'Tidak Ada', 1, '2020-10-29 04:13:42', '2020-10-29 04:13:42'),
(27, 'a72cb0fd-f318-33d8-8b5c-8b87435ce6f2', 'bantuan_perumahan', 'Ya, Lebih dari 5 tahun yang lalu', 1, '2020-10-29 04:14:53', '2020-10-31 16:40:31'),
(28, '3cf31cbd-433c-3b24-b24c-32c68e8f79cc', 'bantuan_perumahan', 'Ya, Kurang dari 5 tahun yang lalu', 1, '2020-10-29 04:15:00', '2020-10-29 04:15:00'),
(29, 'e8f750ea-4bc9-3c2b-85ff-d3c75cebb2f7', 'bantuan_perumahan', 'Belum Pernah', 1, '2020-10-29 04:15:11', '2020-10-29 04:15:11'),
(30, 'c0742bcb-5133-33d6-924d-a5fa7098c804', 'lokasi_rumah', 'Rawan Air', 1, '2020-10-29 04:15:56', '2020-10-29 04:15:56'),
(31, 'ff9f3fcf-9158-38a1-ba88-79524ccef023', 'lokasi_rumah', 'KEK', 1, '2020-10-29 04:16:05', '2020-10-29 04:16:05'),
(32, '821b574e-1e5c-34dc-a259-368435a9b3e0', 'lokasi_rumah', 'Perbatasan', 1, '2020-10-29 04:16:10', '2020-10-29 04:16:10'),
(33, '31ef7e4c-80d6-3b92-a745-01585bec24d2', 'pondasi', 'Ada', 1, '2020-10-29 04:16:30', '2020-10-29 04:16:30'),
(34, '89f0d3a5-2342-31e0-a45d-342913013285', 'pondasi', 'Tidak Ada', 1, '2020-10-29 04:16:35', '2020-10-29 04:16:35'),
(35, '59e623e6-8336-3355-95d7-9db5e2426158', 'kolom_balok', 'Kondisi Baik', 1, '2020-10-29 04:17:02', '2020-10-29 04:17:02'),
(36, '4792e2b6-c53b-3f21-9939-16648b6bed63', 'kolom_balok', 'Rusak Ringan', 1, '2020-10-29 04:17:08', '2020-10-29 04:17:08'),
(37, '0950794f-418a-3be5-9d2e-f050b6fe4c14', 'konstruksi_atap', 'Kondisi Baik', 1, '2020-10-29 04:17:40', '2020-10-29 04:17:40'),
(38, 'c3239185-35f0-316d-a260-89206ecb101e', 'konstruksi_atap', 'Rusak Ringan', 1, '2020-10-29 04:17:47', '2020-10-29 04:17:47'),
(39, '08b0fb75-3427-3439-ae68-81c9b90d1323', 'jendela', 'Ada', 1, '2020-10-29 04:18:14', '2020-10-29 04:18:14'),
(40, 'b381f222-13b0-32a2-a99a-2be5d947c48b', 'jendela', 'Tidak Ada', 1, '2020-10-29 04:18:18', '2020-10-29 04:18:18'),
(41, '5f014da1-bd49-371d-9e15-561d4556077b', 'ventilasi', 'Ada', 1, '2020-10-29 04:18:28', '2020-10-29 04:18:28'),
(42, '294e6c3d-67a5-31d5-91aa-b167ab54834d', 'ventilasi', 'Tidak Ada', 1, '2020-10-29 04:18:33', '2020-10-29 04:18:33'),
(43, '290c3192-3822-3e25-a6be-00b7b170dbf5', 'kamar_mandi', 'Sendiri', 1, '2020-10-29 04:19:09', '2020-10-29 04:19:09'),
(44, '848973e9-387e-3bba-a716-da188361cb29', 'kamar_mandi', 'Bersama/MCK Komunal', 1, '2020-10-29 04:19:26', '2020-10-29 04:19:26'),
(45, '1b75d99c-0788-3692-8498-f12d71317dcd', 'kamar_mandi', 'Tidak Ada', 1, '2020-10-29 04:19:36', '2020-10-29 04:19:36'),
(46, '9398d2b7-50ba-3c1d-b504-55325dd63bfc', 'jarak_air', 'Lebih dari 10 meter', 1, '2020-10-29 04:20:13', '2020-10-29 04:20:13'),
(47, 'bce658d1-9bd4-363a-a9cf-d4a535179bb2', 'jarak_air', 'Kurang dari 10 meter', 1, '2020-10-29 04:20:19', '2020-10-29 04:20:19'),
(48, 'c6f0863e-39a8-3860-892f-ea4786cd47e4', 'sumber_air', 'PDAM', 1, '2020-10-29 04:20:39', '2020-10-29 04:20:39'),
(49, '3c789235-e3b3-3ed9-91f7-0f254591c357', 'sumber_air', 'Air Kemasan/Isi Ulang', 1, '2020-10-29 04:20:52', '2020-10-29 04:20:52'),
(50, 'a75af35d-e437-32f7-9b38-80477225e540', 'sumber_listrik', 'PLN dengan meteran', 1, '2020-10-29 04:21:22', '2020-10-29 04:21:22'),
(51, '12fdbf46-2e04-3f57-a80a-2bc40c991d67', 'sumber_listrik', 'PLN tanpa meteran', 1, '2020-10-29 04:21:28', '2020-10-29 04:21:28'),
(52, '28c69778-8722-33b9-8c61-4f14eba5dc65', 'material_atap', 'Genteng', 1, '2020-10-29 04:21:50', '2020-10-29 04:21:50'),
(53, 'f2046fc2-ed5b-3f27-86ba-f12ed7319d85', 'material_atap', 'Asbes', 1, '2020-10-29 04:21:54', '2020-10-29 04:21:54'),
(54, '53880679-6433-3935-9d23-e8a356f5042f', 'kondisi_atap', 'Baik', 1, '2020-10-29 04:22:14', '2020-10-29 04:22:14'),
(55, '2a43437a-8f24-3982-bf3c-4dd3b26b13cb', 'kondisi_atap', 'Rusak Ringan', 1, '2020-10-29 04:22:19', '2020-10-29 04:22:19'),
(56, '2e668acc-1582-3131-9201-9cc41be39234', 'material_dinding', 'Tembok', 1, '2020-10-29 04:22:39', '2020-10-29 04:22:39'),
(57, '403fa673-b1a4-3d68-b5c9-fcd7b9a0d446', 'material_dinding', 'GRC (Asbes)', 1, '2020-10-29 04:22:52', '2020-10-29 04:22:52'),
(58, '2780d86f-d0c2-39df-9b2e-4b1353bef8e1', 'kondisi_dinding', 'Baik', 1, '2020-10-29 04:23:09', '2020-10-29 04:23:09'),
(59, 'a905b7e0-33e2-362b-8aa4-a53c57af0e5a', 'kondisi_dinding', 'Rusak Ringan', 1, '2020-10-29 04:23:14', '2020-10-29 04:23:14'),
(60, '84aa69c1-4d6b-3a7c-af8c-4b67fd39e385', 'material_lantai', 'Marmer/Granit', 1, '2020-10-29 04:23:39', '2020-10-29 04:23:39'),
(61, '529b3eac-c638-327f-ad4c-b5e475e730d3', 'material_lantai', 'Keramik', 1, '2020-10-29 04:23:47', '2020-10-29 04:23:47'),
(62, '65ddb717-a81a-3e49-baac-61743cf675b6', 'kondisi_lantai', 'Baik', 1, '2020-10-29 04:24:22', '2020-10-29 04:24:22'),
(63, '432dcfd4-c73f-31e2-b1cf-cd888ab1b503', 'kondisi_lantai', 'Rusak Ringan', 1, '2020-10-29 04:24:27', '2020-10-29 04:24:27'),
(64, '9e40089c-99ec-3d23-a755-e214be039185', 'jk', 'Laki-Laki', 1, '2020-10-29 04:33:50', '2020-10-29 04:33:50'),
(65, '13b04bbc-c67e-30eb-bb38-60b96267be71', 'jk', 'Perempuan', 1, '2020-10-29 04:33:54', '2020-10-29 04:33:54');

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
-- Table structure for table `static_contents`
--

CREATE TABLE `static_contents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `static_content_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `static_contents`
--

INSERT INTO `static_contents` (`id`, `static_content_id`, `tag`, `title`, `content`, `created_at`, `updated_at`) VALUES
(1, '75f00d95-84a8-32cd-8dee-a77d561c4289', 'profil', 'Profil', 'Dolorem error eos consequuntur quo dignissimos quam et tempora vel esse magni aut accusantium quis facere nesciunt impedit voluptatem asperiores voluptatibus qui sint consequatur corporis sit qui illum eaque est quos ut et eum officia saepe repellat dicta dolorum voluptate et delectus deleniti blanditiis rerum voluptatum est tempora tenetur neque recusandae reiciendis fuga culpa incidunt autem eaque cumque sint molestiae excepturi et beatae accusamus quia occaecati a perspiciatis architecto quia quia et vero assumenda itaque doloremque harum nobis amet aliquam consequatur nihil voluptatem sed doloribus culpa nulla fugit ut vel ex harum ut corrupti qui odio dolorum autem id tempore odit dolor autem labore sed fugit est rem sed facilis dignissimos modi vel qui accusamus dolore sapiente alias corrupti placeat incidunt aperiam voluptatibus asperiores culpa molestiae omnis laudantium accusamus temporibus qui corporis minus velit nisi dignissimos ab iste quae optio illo est nam velit atque ut architecto incidunt deserunt laboriosam et in nobis omnis temporibus.', '2020-11-02 05:57:38', '2020-11-02 05:57:38'),
(2, '9c691922-73e2-3065-8ace-eb7242db6eb8', 'visi', 'Visi & Misi', 'Sint saepe non dolorem quidem facere quaerat non quae autem sunt quis voluptatem laborum praesentium eum modi repellendus expedita repellendus quos quis ullam magnam cum exercitationem commodi suscipit consequatur quidem nihil vero libero qui ipsum nostrum eaque in reiciendis autem consectetur quam non temporibus ut in minima similique fugiat quasi ea vero repellendus vero quia labore hic dolorum aut autem incidunt ut magni est voluptatibus nobis ut cum fuga voluptatem itaque neque minima ut ea perferendis rerum repellendus eaque fugiat rem voluptas quia qui aspernatur similique alias qui voluptates et amet fugit minus aut doloremque beatae qui eaque aperiam fugiat non eum est placeat voluptatum dignissimos omnis modi et maiores maxime animi fuga ad et veritatis vero quia et ut eum minus est odio voluptate voluptatem saepe praesentium et perferendis beatae adipisci pariatur quos excepturi perferendis velit quia eligendi eos sit explicabo minima minus pariatur omnis provident veniam occaecati deserunt id omnis quos tempora quod soluta accusantium hic harum velit et veniam aut beatae quas commodi ipsa quis sed eum quia aut et alias illum sit sint.', '2020-11-02 05:58:06', '2020-11-02 05:58:06');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_id`, `name`, `email`, `active`, `password`, `created_at`, `updated_at`) VALUES
(1, 'f7c54c63-c8d6-301e-ad20-732a45010f49', 'Ryo', 'ryo@gmail.com', 1, '$2y$10$Jpx6LpSIuxmoAPRwx5HEyuoO.nYerFi4J8Fyhde/73vsVmt56Bt52', '2020-10-28 23:20:22', '2020-10-28 23:20:22'),
(6, '8ba7d1ebd6a218c7068a01e0b8273807', 'Kebab', 'julian.aryo1989@gmail.com', 0, '$2y$10$EWlYx3oOXt6ewAeqYJ9dk.0XMVTvncplsm7DxwGlgvsIej9J/Jt.6', '2020-11-14 08:29:20', '2020-11-14 08:30:15');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `video_id` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `caption` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `video_id`, `title`, `caption`, `link`, `created_at`, `updated_at`) VALUES
(1, 'a30506a9-2fc8-3cb0-9bdc-075eff157e32', 'Sembako Untuk Mereka Yang Tidak Pernah Menyerah Di Tengah Pandemic Virus Corona Covid 19', 'Bismilllah\r\n\r\nAssalamualaikum Warohmatulohi wabarokatuh\r\nIn sya Allah program tebar manfaat ini akan berlanjut...masih banyak saudara kita yang membutuhkan uluran tangan kita, semoga di penggalangan berikutnya semakin banyak yang ikut berpartisipasi berdonasi\r\n\r\nYuk siapkan amunisi sedekah terbaik kalian \r\nBarakallahu fikum', 'https://www.youtube.com/watch?v=kb-iO8w95nI', '2020-10-27 04:38:16', '2020-11-04 05:24:42'),
(2, 'e00d21ff-bef0-3cdf-b77b-8864eb67ae0d', 'Tujuh Kali Operasi, Potong Usus Berkali-kali. Fatul Ingin Cepat Sembuh Dan Bermain Kembali', 'Bismillah,\r\n\r\nAlhamdulillah Aladzi biini Mathihi thatimus Shalihat, atas ijin Allah Subnahu wa ta\"ala Tim squad Lillah Gerai Sunnah Al-Hhafidz dipertemukan dengan keluarga luar biasa.\r\njadi keluarga muhammad Fatul fadilah ini adalah target GDC (galang dana cepat ) kami yang ke empat, ananda fatul harus keluar masuk rumah sakit karena sakit yang dialami nya semenjak usia 1,5 tahun.\r\ndiagnosa awal dari ananda fatul pada saat usia 1,5 tahun adalah hernia,kemudian di tindak operasi, berlanjut diusia 4,5 tahun fatul didiagnosa infeksi saluran kencing dan ambeien sehingga harus kembali dioperasi, tidak sampai di situ pada usia 5 tahun ananda fatul didiagnosa lagi menderita sakit Hirschprung (gangguan pada usus besar) sehingga pada usia 6 tahun ananda fatul dioperasi kolostomi, setelah itu ada tindak operasi pemotongan usus sebanyak 2 kali baru di operasi lagi untuk penutupan kolostomi, total operasi untuk ananda fatul dari usia 1,5 tahun sampai 7 tahun lebih sebanyak 7 kali operasi.\r\ndiagnosa terakhir ananda fatul mengidap tumor di dekat area paru-paru dan hati nya, sehingga akan segera dilakukan biopsi .\r\n\r\nPenggalangan donasi ini bertujuan untuk meringankan cobaan dari saudara kita, karena usaha sehari hari yang dilakukan ayahanda dan ibunda berjualan lumpia sudah tidak bisa dilakukan kembali mengingat sakit yang diderita ananda fatul sangat memerlukan perhatian khusus, meskipun biaya pengobatan di cover BPJS namun sehari hari membeli pampers susu dan memenuhi kebutuhan keluarga pihak keluarga sudah tidak memiliki pemasukan lagi, terlebih 4 dokter yang sudah mengatakan bahwa ananda fatul ini takkan bertahan, namun atas ijin Allah sampai saat ini kita masih bisa melihat nya untuk terus berjuang sembuh.\r\n\r\nhay orang orang baik yuk bantu saudara/i kita  dengan menyisihkan rezeki kalian bisa melalui :\r\n\r\nRekening BNI 0258896262 (a.n pika januaria)\r\natau untuk informasi lengkap tentang penggalangan ini kalian bisa hubungi nomer HP & WA 085250434105 (ummu hafidz Owner & Founder Gerai Sunnah Al-Hafidz)\r\n\r\nBuat kalian yang mau gabung jadi Sahabat Fillah selain berdonasi kalian juga bisa, \r\nDukung program kami dengan bantu like, comment, subscribe dan share sebanyak-banyaknya, juga jangan lupa tekan tombol notifikasi untuk video-video kami selanjutnya,\r\nkarena dengan demikian kalian sudah mendukung program kami untuk terus berbagi.\r\n\r\nSalam Ukhuwah Dari Kami Pejuang Lillah\r\nBarakallahu fiikum', 'https://www.youtube.com/watch?v=PNHBqBQMldo', '2020-10-27 04:38:16', '2020-11-04 05:25:27'),
(3, '688634fc-b7c7-3f35-9a37-531beb702dbd', 'Mengumpulkan Barang Bekas Demi Menafkahi Keluarga - Pejuang Nafkah', 'Bismillah,\r\n\r\nAlhamdulillah Aladzi biini Mathihi thatimus Shalihat, atas ijin Allah Subnahu wa ta\"ala telah kami sampaikan kembali amanah para sahabat fillah kepada Kakek Masdar seorang pejuang Nafkah yang berprofesi sebagai pengumpul barang barang bekas yang sudah di jalani selama puluhan tahun untuk membiayai keluarga nya. \r\n\r\nKakek berusia 80 tahun ini memiliki semangat juang yang patut di jadikan motivasi ya sahabat fillah, diusia yang sudah tidak muda lagi beliau pantang untuk meminta minta, bahkan beliau membesarkan anak anak nya yang sudah ditinggalkan sang istri meninggal sudah puluhan tahun lama nya ,namun tetap semangat menjaga amanah amanah yang Allah ta\"ala berikan,Barakallahu Fikum.\r\n\r\nAlhamdulillah  tuntas sudah disalurkan untuk donasi dalam Program Amal Sedekah Jariyah Gerai Sunnah Al-Hafidz tahap empat ini.\r\n\r\nJadi buat temen temen sahabat Fillah yang mau datang langsung untuk menyisihkan rezekinya untuk sang kakek bisa langsung saja, ke alamat beliau di jalan Slamet Riyadi gang 4 RT 31 (koreksi ya bukan RT 12 ) karena sedikit banyak yang kita berikan untuk orang lain in sya Allah akan bermanfaat bagi orang yang benar benar membutuhkannya.\r\n\r\nBuat kalian yang mau gabung jadi Sahabat Fillah selain dengan  berdonasi kalian juga bisa, \r\ndukung program kami dengan bantu like, comment, subscribe dan share sebanyak-banyaknya, juga jangan lupa tekan tombol notifikasi untuk video-video kami selanjutnya,\r\nkarena dengan demikian kalian sudah mendukung program kami untuk terus berbagi\r\n\r\nProgram Amal Ini berlangsung rutin setiap bulan nya penggalangan dana berupa uang tunai,sembako dan barang sangat layak pakai jika kalian yang ingin menyisihkan sebagian rezeki /berdonasi bisa hubungi kami langsung:\r\n\r\nUmmu Hafidz (Penanggung Jawab & Founder Gerai Sunnah Al-Hafidz)\r\nHP/WA. 085250434105 (informasi untuk berdonasi)\r\n\r\nSalam Ukhuwah Dari Kami Pejuang Lillah\r\nBarakallahu fiikum', 'https://www.youtube.com/watch?v=mtHT9w5A-pI', '2020-10-27 04:38:16', '2020-11-04 05:26:08'),
(4, 'dd52b91c-4dd9-3aac-bbc8-bbbb3a56bad7', 'Hari Spesial Buat Nenek Asnah', 'Bismillah,\r\n\r\nAlhamdulillah Aladzi biini Mathihi thatimus Shalihat, atas ijin Allah Subnahu wa ta\"ala tuntas sudah kami salurkan donasi untuk target pertama nenek asnah & kakek Jailani dalam Bazar Amal \r\nSedekah Jariyah Gerai Sunnah Al-Hafidz tahap empat, dengan memberikan kejutan kejutan kecil untuk beliau, memberikan sesuatu yang berbeda dengan harapan memberikan semangat baru untuk beliau karena ini juga  salah satu pengalaman pertama beliau diajak jalan jalan belanja untuk kebutuhan nya sendiri biasanya beliau hanya menemani saja (keluarga nya).\r\n\r\nAda satu yang menarik sembari diperjalanan, beliau mengungkapkan bahwa dari kecil sudah gemar menyulam, ini sebenarnya kejutan untuk kami relawan karena pada saat survey target, beliau tidak mengungkapkan hal tersebut sehingga uang tunai yang kami berikan melalui donasi para Sahabat Fillah bisa dipergunakan sang nenek untuk modal usaha kecil nya, in sya Allah jalinan ukhuwah ini akan berlanjut, kami akan membantu beliau mengembangkan bakat nya baik pada saat produksi maupun kepemasaran nanti in sya Allah.\r\n\r\nBuat kalian yang mau gabung jadi Sahabat Fillah selain berdonasi kalian juga bisa, \r\nDukung program kami dengan bantu like, comment, subscribe dan share sebanyak-banyaknya, juga jangan lupa tekan tombol notifikasi untuk video-video kami selanjutnya,\r\nkarena dengan demikian kalian sudah mendukung program kami untuk terus berbagi\r\n\r\nProgram Amal Ini berlangsung rutin setiap bulan nya\r\npenggalangan dana berupa uang tunai,sembako dan barang sangat layak pakai\r\njika kalian yang ingin menyisihkan sebagian rezeki /berdonasi bisa hubungi kami langsung:\r\nUmmu Hafidz (Penanggung Jawab & Founder Gerai Sunnah Al-Hafidz)\r\nHP/WA. 085250434105\r\n\r\nSalam Ukhuwah Dari Kami Pejuang Lillah\r\nBarakallahu fiikum', 'https://www.youtube.com/watch?v=oZZuIDSSkt4', '2020-10-27 04:38:16', '2020-11-04 05:27:04');

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
-- Indexes for table `agendas`
--
ALTER TABLE `agendas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `forms`
--
ALTER TABLE `forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fotos`
--
ALTER TABLE `fotos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guest_books`
--
ALTER TABLE `guest_books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `maps`
--
ALTER TABLE `maps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `static_contents`
--
ALTER TABLE `static_contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `agendas`
--
ALTER TABLE `agendas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `areas`
--
ALTER TABLE `areas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `forms`
--
ALTER TABLE `forms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `fotos`
--
ALTER TABLE `fotos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `guest_books`
--
ALTER TABLE `guest_books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `maps`
--
ALTER TABLE `maps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `static_contents`
--
ALTER TABLE `static_contents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
