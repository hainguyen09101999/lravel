-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 27, 2023 lúc 11:56 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `cuoiki`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmucs`
--

CREATE TABLE `danhmucs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `parent_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmucs`
--

INSERT INTO `danhmucs` (`id`, `name`, `parent_id`, `created_at`, `updated_at`) VALUES
(1, 'Áo', 0, NULL, NULL),
(2, 'Áo Polo Trơn', 1, NULL, NULL),
(3, 'Áo Polo Thiết Kế', 1, NULL, NULL),
(4, 'Áo Thun Basic', 1, NULL, NULL),
(5, 'Quần', 0, NULL, NULL),
(6, 'Quần Dài', 5, NULL, NULL),
(7, 'Quần Short', 5, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
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
-- Cấu trúc bảng cho bảng `img_products`
--

CREATE TABLE `img_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(50) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `img_products`
--

INSERT INTO `img_products` (`id`, `product_id`, `image`, `created_at`, `updated_at`) VALUES
(67, 25, '3.1.webp', '2023-10-17 20:00:43', '2023-10-17 20:00:43'),
(68, 25, '3.2.webp', '2023-10-17 20:00:43', '2023-10-17 20:00:43'),
(69, 25, '3.3.webp', '2023-10-17 20:00:43', '2023-10-17 20:00:43'),
(70, 26, '4.1.webp', '2023-10-17 20:02:55', '2023-10-17 20:02:55'),
(71, 26, '4.2.webp', '2023-10-17 20:02:56', '2023-10-17 20:02:56'),
(72, 26, '4.3.webp', '2023-10-17 20:02:56', '2023-10-17 20:02:56'),
(73, 27, '2.1.webp', '2023-10-17 20:04:27', '2023-10-17 20:04:27'),
(74, 27, '2.2.webp', '2023-10-17 20:04:27', '2023-10-17 20:04:27'),
(75, 27, '2.3.webp', '2023-10-17 20:04:27', '2023-10-17 20:04:27'),
(137, 35, 'ao-polo-nam-apm6079-vag-7-yodyvn.webp', '2023-10-19 05:53:36', '2023-10-19 05:53:36'),
(138, 35, 'ao-polo-nam-apm6079-vag-9-yodyvn.webp', '2023-10-19 05:53:36', '2023-10-19 05:53:36'),
(139, 35, 'ao-polo-nam-apm6079-vag-12-yodyvn.webp', '2023-10-19 05:53:36', '2023-10-19 05:53:36'),
(140, 36, '5.1.webp', '2023-10-19 09:47:29', '2023-10-19 09:47:29'),
(141, 36, '5.2.webp', '2023-10-19 09:47:29', '2023-10-19 09:47:29'),
(142, 36, '5.4.webp', '2023-10-19 09:47:29', '2023-10-19 09:47:29'),
(147, 38, '7.1.webp', '2023-10-19 09:52:32', '2023-10-19 09:52:32'),
(148, 38, '7.2.webp', '2023-10-19 09:52:32', '2023-10-19 09:52:32'),
(149, 38, '7.3.webp', '2023-10-19 09:52:32', '2023-10-19 09:52:32'),
(150, 39, '8.1.webp', '2023-10-19 09:54:34', '2023-10-19 09:54:34'),
(151, 39, '8.2.webp', '2023-10-19 09:54:34', '2023-10-19 09:54:34'),
(152, 39, '8.3.webp', '2023-10-19 09:54:34', '2023-10-19 09:54:34'),
(153, 40, '9.1.webp', '2023-10-19 09:56:37', '2023-10-19 09:56:37'),
(154, 40, '9.3.webp', '2023-10-19 09:56:37', '2023-10-19 09:56:37'),
(155, 40, '9.4.webp', '2023-10-19 09:56:37', '2023-10-19 09:56:37'),
(156, 41, '10.1.webp', '2023-10-19 09:59:17', '2023-10-19 09:59:17'),
(157, 41, '10.3.webp', '2023-10-19 09:59:17', '2023-10-19 09:59:17'),
(158, 41, '10.4.webp', '2023-10-19 09:59:17', '2023-10-19 09:59:17'),
(159, 37, '6.1.webp', '2023-10-19 11:28:25', '2023-10-19 11:28:25'),
(160, 37, '6.3.webp', '2023-10-19 11:28:25', '2023-10-19 11:28:25'),
(166, 44, '01-02.png', '2023-10-21 22:43:19', '2023-10-21 22:43:19'),
(167, 44, '01-03.png', '2023-10-21 22:43:19', '2023-10-21 22:43:19'),
(168, 44, '01-04.png', '2023-10-21 22:43:19', '2023-10-21 22:43:19'),
(169, 44, '01-05.png', '2023-10-21 22:43:19', '2023-10-21 22:43:19'),
(170, 45, '02-02.png', '2023-10-21 22:45:05', '2023-10-21 22:45:05'),
(171, 45, '02-03.png', '2023-10-21 22:45:05', '2023-10-21 22:45:05'),
(172, 46, '03-02.png', '2023-10-21 22:50:51', '2023-10-21 22:50:51'),
(173, 46, '03-03.png', '2023-10-21 22:50:51', '2023-10-21 22:50:51'),
(174, 46, '03-04.png', '2023-10-21 22:50:52', '2023-10-21 22:50:52'),
(175, 47, '04-02.png', '2023-10-21 22:52:28', '2023-10-21 22:52:28'),
(176, 47, '04-03.png', '2023-10-21 22:52:28', '2023-10-21 22:52:28'),
(177, 47, '04-04.png', '2023-10-21 22:52:28', '2023-10-21 22:52:28'),
(178, 48, '05-02.jpg', '2023-10-21 22:54:15', '2023-10-21 22:54:15'),
(179, 48, '05-03.png', '2023-10-21 22:54:15', '2023-10-21 22:54:15'),
(180, 48, '05-04.png', '2023-10-21 22:54:15', '2023-10-21 22:54:15'),
(181, 49, '06-02.png', '2023-10-21 23:07:32', '2023-10-21 23:07:32'),
(182, 49, '06-03.png', '2023-10-21 23:07:32', '2023-10-21 23:07:32'),
(183, 50, 'qsm5057-bee-3.webp', '2023-10-21 23:10:51', '2023-10-21 23:10:51'),
(184, 50, 'qsm5057-bee-5.webp', '2023-10-21 23:10:51', '2023-10-21 23:10:51'),
(185, 50, 'qsm5057-bee-6.webp', '2023-10-21 23:10:51', '2023-10-21 23:10:51'),
(186, 51, 'qsm5047-den-4.webp', '2023-10-21 23:12:01', '2023-10-21 23:12:01'),
(187, 51, 'qsm5047-den-5.webp', '2023-10-21 23:12:01', '2023-10-21 23:12:01'),
(188, 51, 'qsm5047-den-10-min.webp', '2023-10-21 23:12:01', '2023-10-21 23:12:01'),
(189, 52, 'quan-short-nam-nap-tui-sau-qsm6021-xam-5.webp', '2023-10-21 23:13:41', '2023-10-21 23:13:41'),
(190, 52, 'quan-short-nam-nap-tui-sau-qsm6021-xam-6.webp', '2023-10-21 23:13:41', '2023-10-21 23:13:41'),
(191, 52, 'quan-short-nam-nap-tui-sau-qsm6021-xam-7.webp', '2023-10-21 23:13:41', '2023-10-21 23:13:41'),
(192, 53, 'quan-short-nam-qsm6027-ghi-1.webp', '2023-10-21 23:14:49', '2023-10-21 23:14:49'),
(193, 53, 'quan-short-nam-qsm6027-ghi-2.webp', '2023-10-21 23:14:49', '2023-10-21 23:14:49'),
(194, 53, 'quan-short-nam-qsm6027-ghi-7.webp', '2023-10-21 23:14:49', '2023-10-21 23:14:49'),
(195, 54, '05.webp', '2023-10-25 06:35:04', '2023-10-25 06:35:04'),
(196, 54, 'product-sale.png', '2023-10-25 06:35:04', '2023-10-25 06:35:04');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(16, '2014_10_12_000000_create_users_table', 1),
(17, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(18, '2019_08_19_000000_create_failed_jobs_table', 1),
(19, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(20, '2023_10_15_182433_create_danhmucs_table', 1),
(23, '2023_10_15_190920_create_products_table', 2),
(24, '2023_10_15_191958_create_img_products_table', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
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
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `slug` varchar(100) DEFAULT NULL,
  `price` varchar(50) DEFAULT NULL,
  `price_sale` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `danhmuc_id` bigint(50) UNSIGNED DEFAULT NULL,
  `shortdescription` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `price`, `price_sale`, `image`, `danhmuc_id`, `shortdescription`, `description`, `created_at`, `updated_at`) VALUES
(25, 'Áo Polo Nam Cafe Tổ Ong Basic', 'ao-polo-nam-cafe-to-ong-basic', '299.000', '99.000', '3.1.webp', 2, '<p>Chất liệu cafe dệt tổ ong</p>\r\n\r\n<p>Th&agrave;nh phần: 100% Polyester by S&#39;cafe</p>\r\n\r\n<p>Vải cafe thấm h&uacute;t mồ h&ocirc;i, kiểm so&aacute;t khử m&ugrave;i cơ thể tốt</p>', '<p>Chất liệu cafe dệt tổ ong</p>\r\n\r\n<p>Th&agrave;nh phần: 100% Polyester by S&#39;cafe</p>\r\n\r\n<p>Vải cafe thấm h&uacute;t mồ h&ocirc;i, kiểm so&aacute;t khử m&ugrave;i cơ thể tốt</p>\r\n\r\n<p>C&oacute; khả năng chống tia UV đến 98%</p>\r\n\r\n<p>Kiểu d&aacute;ng năng động, trẻ trung&nbsp;</p>\r\n\r\n<p>Kết hợp c&ugrave;ng quần jeans, quần short, kaki,... để đi l&agrave;m, đi chơi</p>\r\n\r\n<p>YODY - Look good. Feel good</p>\r\n\r\n<p>Sản xuất tại Việt Nam</p>\r\n\r\n<p>&quot;</p>\r\n\r\n<p>&quot;</p>\r\n\r\n<p>&quot;</p>\r\n\r\n<p>&quot;</p>\r\n\r\n<p>&quot;</p>', '2023-10-17 20:00:43', '2023-10-21 06:50:33'),
(26, 'Áo Polo Nam Cafe Phối Tay', 'ao-polo-nam-cafe-phói-tay', '379.000', NULL, '4.webp', 4, '<p>Thiết kế &aacute;o polo nam mới nhất 2023, chất liệu cafe với nhiều t&iacute;nh năng nổi trội.</p>\r\n\r\n<p>Chất liệu:&nbsp;100% Polyester by S&#39;cafe</p>\r\n\r\n<p>Kiếm so&aacute;t m&ugrave;i tối ưu: nhờ th&agrave;nh phần sợi từ b&atilde; cafe c&ugrave;ng c&ocirc;ng nghệ dệt hiện đại, &aacute;o polo cafe YODY c&oacute; t&iacute;nh năng kiểm</p>', '<h2>Đặc t&iacute;nh nổi bật</h2>\r\n\r\n<h2>&nbsp;</h2>\r\n\r\n<p><img alt=\"Polo Nam Cafe Phối Tay\" src=\"https://bizweb.dktcdn.net/100/438/408/files/product-highlight-scafe-6ff4033f-443c-4c33-a418-0ebbefa0222d.jpg?v=1682132554650\" /></p>\r\n\r\n<p>Thiết kế &aacute;o polo nam mới nhất 2023, chất liệu cafe với nhiều t&iacute;nh năng nổi trội.</p>\r\n\r\n<p>Chất liệu:&nbsp;100% Polyester by S&#39;cafe</p>\r\n\r\n<p>Kiếm so&aacute;t m&ugrave;i tối ưu: nhờ th&agrave;nh phần sợi từ b&atilde; cafe c&ugrave;ng c&ocirc;ng nghệ dệt hiện đại, &aacute;o polo cafe YODY c&oacute; t&iacute;nh năng kiểm so&aacute;t m&ugrave;i v&ocirc; c&ugrave;ng hiệu quả</p>\r\n\r\n<p>Khả năng chống tia UV của polo cafe đến từ sợi vải n&ecirc;n lưu giữ t&iacute;nh năng n&agrave;y trọn đời</p>\r\n\r\n<p>Thoải m&aacute;i, mềm mại tr&ecirc;n da đồng thời thấm h&uacute;t mồ h&ocirc;i hiệu quả</p>\r\n\r\n<p>Sản phẩm nằm trong thiết kế &aacute;o polo gia đ&igrave;nh đa dạng lựa chọn cho nam, nữ, trẻ em</p>\r\n\r\n<p>Sản xuất tại Việt Nam</p>\r\n\r\n<p>YODY - Look good. Feel good</p>', '2023-10-17 20:02:55', '2023-10-17 20:02:55'),
(27, 'Áo Polo Nam Airycool Thoáng Mát Phối Bo', 'ao-polo-nam-airycool-thoang-mat-phoi-bo', '299.000', '150.000', '2.webp', 2, '<p>&Aacute;o polo nam vải Airycool cao cấp mang đến sự thoải m&aacute;i vượt trội cho người mặc</p>\r\n\r\n<p>Th&agrave;nh phần:&nbsp;85% Nylon + 15% Spandex</p>\r\n\r\n<p>Mang tới&nbsp;cảm gi&aacute;c thoải m&aacute;i, dễ chịu khi mặc</p>\r\n\r\n<p>Sợi vải&nbsp;bền chắc, co gi&atilde;n nhẹ nh&agrave;ng v&agrave; giữ form ổn định</p>', '<h2>Đặc t&iacute;nh nổi bật</h2>\r\n\r\n<h2>&nbsp;</h2>\r\n\r\n<p><img alt=\"Áo Polo Nam Airycool Thoáng Mát Phối Bo\" src=\"https://bizweb.dktcdn.net/100/438/408/files/product-highlight-airycool-574de273-fb5c-4a1b-a9e7-80fe700cd6a5.jpg?v=1681274364107\" /></p>\r\n\r\n<p>&Aacute;o polo nam vải Airycool cao cấp mang đến sự thoải m&aacute;i vượt trội cho người mặc</p>\r\n\r\n<p>Th&agrave;nh phần:&nbsp;85% Nylon + 15% Spandex</p>\r\n\r\n<p>Mang tới&nbsp;cảm gi&aacute;c thoải m&aacute;i, dễ chịu khi mặc</p>\r\n\r\n<p>Sợi vải&nbsp;bền chắc, co gi&atilde;n nhẹ nh&agrave;ng v&agrave; giữ form ổn định</p>\r\n\r\n<p>Ứng dụng c&ocirc;ng nghệ l&agrave;m m&aacute;t Freezing trong qu&aacute; tr&igrave;nh xử l&yacute; sợi đ&atilde; tạo ra sản phẩm c&oacute; khả năng l&agrave;m m&aacute;t linh hoạt n&ecirc;n trở th&agrave;nh lựa chọn ưu ti&ecirc;n trong m&ugrave;a h&egrave;</p>\r\n\r\n<p>Bảng m&agrave;u si&ecirc;u đa dạng, phối đồ linh hoạt trong mọi ho&agrave;n cảnh</p>\r\n\r\n<p>YODY - Look good. Feel good.</p>\r\n\r\n<p>Sản xuất tại Việt Nam</p>\r\n\r\n<p>&quot;</p>', '2023-10-17 20:04:27', '2023-10-19 05:48:46'),
(35, 'Áo Polo Nam Coolmax', 'ao-polo-nam-coolmax', '349.000', '200.000', 'ao-polo-nam-apm6079-vag-1-yodyvn.webp', 2, '<p>Chất liệu: 95% Polyester + 5% Spandex</p>\r\n\r\n<p>Sợi vải bao gồm nhiều r&atilde;nh dẹt gi&uacute;p tho&aacute;ng kh&iacute;, tho&aacute;t ẩm cực tốt</p>', '<h2>Đặc t&iacute;nh nổi bật</h2>\r\n\r\n<h2>&nbsp;</h2>\r\n\r\n<p><img alt=\"Áo Polo Nam Coolmax\" src=\"https://bizweb.dktcdn.net/100/438/408/files/product-highlight-coolmax.jpg?v=1681270743159\" /></p>\r\n\r\n<p>Chất liệu: 95% Polyester + 5% Spandex</p>\r\n\r\n<p>Sợi vải bao gồm nhiều r&atilde;nh dẹt gi&uacute;p tho&aacute;ng kh&iacute;, tho&aacute;t ẩm cực tốt</p>\r\n\r\n<p>&Aacute;o polo nam Coolmax&nbsp;mang lại cảm gi&aacute;c m&aacute;t mẻ, dễ chịu cho người mặc ngay cả khi vận động mạnh</p>\r\n\r\n<p>Tự tin c&ugrave;ng Thiết kế khỏe khoắn, nam t&iacute;nh&nbsp;</p>\r\n\r\n<p>Ứng dụng linh hoạt: Th&iacute;ch hợp mặc đi chơi, đi l&agrave;m, hoạt động thể thao, cafe, hẹn h&ograve; với bạn b&egrave;</p>\r\n\r\n<p>YODY - Look good. Feel good.</p>\r\n\r\n<p>Sản xuất tại Việt Nam</p>\r\n\r\n<p>&quot;</p>', '2023-10-19 05:53:36', '2023-10-21 23:15:38'),
(36, 'Áo Polo Nam Cafe Phối Nẹp Thấm Hút Mồ Hôi', 'ao-polo-nam-cafe-phoi-nep-tham-hut-mo-hoi', '299.000', '0', '5.webp', 4, '<p>&Aacute;o polo nam chất liệu: 100% Polyester by S&#39;cafe</p>\r\n\r\n<p>Bảo vệ cơ thể nhờ khả năng kiểm so&aacute;t m&ugrave;i, Chống tia UV</p>', '<h2>Đặc t&iacute;nh nổi bật</h2>\r\n\r\n<h2>&nbsp;</h2>\r\n\r\n<p><img alt=\"Áo Polo Nam Cafe Phối Nẹp Thấm Hút Mồ Hôi\" src=\"https://bizweb.dktcdn.net/100/438/408/files/product-highlight-scafe-adf8d533-2840-4e18-ac7c-4c57fc929325.jpg?v=1681270471950\" /></p>\r\n\r\n<p>&Aacute;o polo nam chất liệu: 100% Polyester by S&#39;cafe</p>\r\n\r\n<p>Bảo vệ cơ thể nhờ khả năng kiểm so&aacute;t m&ugrave;i, Chống tia UV</p>\r\n\r\n<p>Những chiếc &aacute;o polo cafe gi&uacute;p bạn tr&aacute;nh bị &aacute;m m&ugrave;i giữa m&ugrave;a h&egrave; n&oacute;ng bức khi tham gia c&aacute;c hoạt động ngo&agrave;i trời với cường độ cao hay đơn giản l&agrave; đi ăn 1 bữa tiệc nướng</p>\r\n\r\n<p>Thấm h&uacute;t tốt, nhanh kh&ocirc;</p>\r\n\r\n<p>Sản phẩm được tin d&ugrave;ng bởi h&agrave;ng triệu kh&aacute;ch h&agrave;ng to&agrave;n quốc</p>\r\n\r\n<p>YODY - Look good. Feel good.</p>\r\n\r\n<p>Sản xuất tại Việt Nam</p>\r\n\r\n<p>&quot;</p>', '2023-10-19 09:47:29', '2023-10-21 23:18:44'),
(37, 'Áo Polo Nam Coolmax Thoáng Mát Bo Cổ Phối Màu', 'ao-polo-nam-coolmax-thoang-mat-bo-co-phoi-mau', '399.000', '0', '6.webp', 4, '<p>Chất liệu: 95% Polyester + 5% Spandex</p>\r\n\r\n<p>Bề mặt sợi c&oacute; r&atilde;nh l&agrave;m tăng khả năng truyền dẫn kh&iacute; v&agrave; ẩm.</p>\r\n\r\n<p>Thấm h&uacute;t mồ h&ocirc;i tốt, h&uacute;t ẩm nhanh v&agrave; nhanh kh&ocirc; tạo sự thoải m&aacute;i.</p>', '<h2>Đặc t&iacute;nh nổi bật</h2>\r\n\r\n<h2>&nbsp;</h2>\r\n\r\n<p><img alt=\"Áo Polo Nam Coolmax Thoáng Mát Bo Cổ Phối Màu\" src=\"https://bizweb.dktcdn.net/100/438/408/files/product-highlight-coolmax-5b647760-426c-47bd-a69e-87ab4e563ee8.jpg?v=1681369257461\" /></p>\r\n\r\n<p>Chất liệu: 95% Polyester + 5% Spandex</p>\r\n\r\n<p>Bề mặt sợi c&oacute; r&atilde;nh l&agrave;m tăng khả năng truyền dẫn kh&iacute; v&agrave; ẩm.</p>\r\n\r\n<p>Thấm h&uacute;t mồ h&ocirc;i tốt, h&uacute;t ẩm nhanh v&agrave; nhanh kh&ocirc; tạo sự thoải m&aacute;i.</p>\r\n\r\n<p>Vải c&oacute; t&iacute;nh đ&agrave;n hồi co gi&atilde;n tốt, &iacute;t nh&agrave;u, tiện dụng khi vận động</p>\r\n\r\n<p>Form &aacute;o &ocirc;m vừa phải được l&agrave;m đơn giản n&ecirc;n ph&ugrave; hợp để phối kết hợp với nhiều trang phục kh&aacute;c nhau</p>\r\n\r\n<p>YODY - Look good. Feel good.</p>\r\n\r\n<p>Sản xuất tại Việt Nam</p>\r\n\r\n<p>&quot;</p>', '2023-10-19 09:49:50', '2023-10-19 11:28:25'),
(38, 'Áo Polo Nam Cafe Phối Tay Raglan Ngực In Gấu', 'ao-polo-nam-cafe-phoi-tay-raglan-nguc-in-gau', '379.000', '250.000', '7.webp', 3, '<p>Th&agrave;nh phần:100% Polyester by S&#39;cafe</p>\r\n\r\n<p>Thoải m&aacute;i vận động m&agrave; kh&ocirc;ng lo m&ugrave;i nhờ t&iacute;nh năng kiểm so&aacute;t m&ugrave;i gấp 2.26 lần vải cotton th&ocirc;ng thường</p>\r\n\r\n<p>Tốc độ h&uacute;t mồ h&ocirc;i v&agrave; nhanh kh&ocirc; gấp&nbsp;1.9 lần vải th&ocirc;ng thường&nbsp;</p>', '<h2>Đặc t&iacute;nh nổi bật</h2>\r\n\r\n<h2>&nbsp;</h2>\r\n\r\n<p>Th&agrave;nh phần:100% Polyester by S&#39;cafe</p>\r\n\r\n<p>Thoải m&aacute;i vận động m&agrave; kh&ocirc;ng lo m&ugrave;i nhờ t&iacute;nh năng kiểm so&aacute;t m&ugrave;i gấp 2.26 lần vải cotton th&ocirc;ng thường</p>\r\n\r\n<p>Tốc độ h&uacute;t mồ h&ocirc;i v&agrave; nhanh kh&ocirc; gấp&nbsp;1.9 lần vải th&ocirc;ng thường&nbsp;</p>\r\n\r\n<p>Vải bền, chắc, v&agrave; kh&ocirc;ng x&ugrave; l&ocirc;ng, độ co r&uacute;t vải đang chỉ c&oacute; 3%</p>\r\n\r\n<p>Bảo vệ bạn khỏi tia UV độc hại&nbsp;</p>\r\n\r\n<p>Form d&aacute;ng su&ocirc;ng ph&ugrave; hợp với nhiều v&oacute;c d&aacute;ng cơ thể</p>\r\n\r\n<p>Họa tiết phối&nbsp;gấu v&agrave; vai&nbsp;tỉ mỉ từng chi tiết, tạo h&igrave;nh ấn tượng, nổi bật</p>\r\n\r\n<p>Yody - Look good. Feel good.</p>\r\n\r\n<p>Sản xuất tại Việt Nam</p>', '2023-10-19 09:52:32', '2023-10-21 22:14:33'),
(39, 'Áo Polo Nam Cafe Dệt Tổ Ong Phối Bo', 'ao-polo-nam-cafe-det-to-ong-phoi-bo', '299.000', '199.000', '8.webp', 2, '<p>&Aacute;o polo nam&nbsp;vải Cafe Tổ Ong&nbsp;- thiết kế basic, m&ugrave;a đen lịch l&atilde;m, si&ecirc;u dễ mặc</p>\r\n\r\n<p>Th&agrave;nh phần:&nbsp;100% Polyester by S&#39;cafe</p>', '<h2>Đặc t&iacute;nh nổi bật</h2>\r\n\r\n<p>&Aacute;o polo nam&nbsp;vải Cafe Tổ Ong&nbsp;- thiết kế basic, m&ugrave;a đen lịch l&atilde;m, si&ecirc;u dễ mặc</p>\r\n\r\n<p>Th&agrave;nh phần:&nbsp;100% Polyester by S&#39;cafe</p>\r\n\r\n<p>Sản phẩm c&oacute; chất liệu&nbsp;Vải cafe tổ ong với nhiều ưu điểm nổi trội</p>\r\n\r\n<p>&Aacute;o sở hữu khả năng kiểm so&aacute;t m&ugrave;i hiệu quả, th&iacute;ch hợp mặc quanh năm</p>\r\n\r\n<p>Kh&ocirc; nhanh, giặt m&aacute;y thoải m&aacute;i m&agrave; kh&ocirc;ng lo bai d&atilde;o</p>\r\n\r\n<p>Đặc biệt c&oacute; khả năng chống nắng trọn đời nhờ sợi vải được l&agrave;m từ b&atilde; cafe c&ugrave;ng c&ocirc;ng nghệ cải tiến mới nhất</p>\r\n\r\n<p>YODY - Look good. Feel good.</p>\r\n\r\n<p>Sản xuất tại Việt Nam</p>', '2023-10-19 09:54:34', '2023-10-21 22:15:23'),
(40, 'Polo Nữ Cafe Dệt Tổ Ong Thêu Gấu', 'polo-nu-cafe-dẹt-tỏ-ong-theu-gáu', '299.000', '150.000', '9.webp', 4, '<p>&Aacute;o polo nữ vải cafe tổ ong&nbsp;Th&agrave;nh phần:&nbsp;100% Polyester by S&#39;cafe</p>\r\n\r\n<p>Chất liệu Cafe tổ ong ti&ecirc;n tiến mang tới khả năng chống UV cho sản phẩm</p>\r\n\r\n<p>&Aacute;o bền m&agrave;u, thấm h&uacute;t tốt v&agrave;&nbsp;nhanh kh&ocirc;</p>', '<h2>Đặc t&iacute;nh nổi bật</h2>\r\n\r\n<h2>&nbsp;</h2>\r\n\r\n<p><img alt=\"Polo Nữ Cafe Dệt Tổ Ong Nature Lover\" src=\"https://bizweb.dktcdn.net/100/438/408/files/product-highlight-cafe-to-ong-2accf754-df4f-4588-86f0-522f83231b04.jpg?v=1685088035955\" /></p>\r\n\r\n<p>&Aacute;o polo nữ vải cafe tổ ong&nbsp;Th&agrave;nh phần:&nbsp;100% Polyester by S&#39;cafe</p>\r\n\r\n<p>Chất liệu Cafe tổ ong ti&ecirc;n tiến mang tới khả năng chống UV cho sản phẩm</p>\r\n\r\n<p>&Aacute;o bền m&agrave;u, thấm h&uacute;t tốt v&agrave;&nbsp;nhanh kh&ocirc;</p>\r\n\r\n<p>Kiểm so&aacute;t m&ugrave;i hiệu quả</p>\r\n\r\n<p>N&ecirc;n giặt m&aacute;y ở chế độ nhẹ với sản phẩm c&ugrave;ng m&agrave;u ở nhiệt độ thường&nbsp;</p>\r\n\r\n<p>YODY - Look good. Feel good</p>\r\n\r\n<p>&quot;</p>', '2023-10-19 09:56:37', '2023-10-21 23:18:29'),
(41, 'Áo Polo Nữ Cafe Dệt Tổ Ong Phối Bo', 'ao-polo-nu-cafe-det-to-ong-phoi-bo', '299.000', '180.000', '10.webp', 4, '<p>&Aacute;o polo nữ vải Cafe Tổ Ong mới - M&agrave;u đen v&ocirc; c&ugrave;ng cơ bản, si&ecirc;u dễ mặc</p>\r\n\r\n<p>Th&agrave;nh phần:&nbsp;100% Polyester by S&#39;cafe</p>', '<h2>Đặc t&iacute;nh nổi bật</h2>\r\n\r\n<h2>&nbsp;</h2>\r\n\r\n<p><img alt=\"Polo Nữ Cafe Dệt Tổ Ong Nature Lover\" src=\"https://bizweb.dktcdn.net/100/438/408/files/product-highlight-cafe-to-ong-2accf754-df4f-4588-86f0-522f83231b04.jpg?v=1685088035955\" /></p>\r\n\r\n<p>&Aacute;o polo nữ vải Cafe Tổ Ong mới - M&agrave;u đen v&ocirc; c&ugrave;ng cơ bản, si&ecirc;u dễ mặc</p>\r\n\r\n<p>Th&agrave;nh phần:&nbsp;100% Polyester by S&#39;cafe</p>\r\n\r\n<p>Chất vải cafe ti&ecirc;n phong cải tiến, th&acirc;n thiện m&ocirc;i trường - độc quyền tại YODY</p>\r\n\r\n<p>&Aacute;o c&oacute; đường may tỉ mỉ, ch&uacute; trọng v&agrave;o sự chất lượng cao tr&ecirc;n nền thiết kế basic</p>\r\n\r\n<p>Si&ecirc;u thoải m&aacute;i khi mặc, c&oacute; thể&nbsp;giặt m&aacute;y,&nbsp;kh&ocirc;ng lo bai d&atilde;o</p>\r\n\r\n<p>&Aacute;o c&oacute; khả năng ngăn ngừa tia UV bảo vệ cơ thể của người mặc</p>\r\n\r\n<p>YODY - Look good. Feel good.</p>\r\n\r\n<p>Sản xuất tại Việt Nam</p>', '2023-10-19 09:59:17', '2023-10-21 22:16:21'),
(44, 'Quần Dài Nam Smart Fit Màu Đen Vải Khaki Tây', 'quan-dai-nam-smart-fit-mau-den-vai-khaki-tay', '350.000', '0', '01-01.png', 6, '<p>Quần short nam vải kaki&nbsp;c&agrave;o l&ocirc;ng</p>\r\n\r\n<p>Th&agrave;nh phần:&nbsp;&nbsp;97% Cotton + 3% Spandex</p>\r\n\r\n<p>Được thiết kế tr&ecirc;n phom d&aacute;ng ngang gối cơ bản</p>', '<ul>\r\n	<li>Chất vải Khaki T&acirc;y chống nhăn v&agrave; thấm h&uacute;t mồ h&ocirc;i tốt</li>\r\n	<li>Phom Smart Fit t&ocirc;n d&aacute;ng, hợp với hầu hết k&iacute;ch thước cơ thể</li>\r\n	<li>Thoải m&aacute;i giặt m&aacute;y, kh&ocirc;ng ra m&agrave;u v&agrave; kh&ocirc;ng mất phom quần</li>\r\n</ul>\r\n\r\n<p><img alt=\"Quần Dài Nam Smart Fit Màu Đen và thông tin chi tiết\" src=\"https://cdn.shopify.com/s/files/1/0685/2237/7522/files/polomanor_pants_details_smartfit_black_01_2_55c376ca-6797-4bf6-a56f-1efc1b40d3fb_2048x2048.jpg?v=1684467068\" /></p>', '2023-10-21 22:43:19', '2023-10-21 22:43:19'),
(45, 'Quần Dài Nam Smart Fit Màu Be Vải Khaki Tây', 'quan-dai-nam-smart-fit-mau-be-vai-khaki-tay', '380.000', '299.000', '02-01.png', 6, '<p>Quần short nam vải kaki&nbsp;c&agrave;o l&ocirc;ng</p>\r\n\r\n<p>Th&agrave;nh phần:&nbsp;&nbsp;97% Cotton + 3% Spandex</p>\r\n\r\n<p>Được thiết kế tr&ecirc;n phom d&aacute;ng ngang gối cơ bản</p>\r\n\r\n<p>Phần gấu được gấp l&ecirc;n tạo điểm nhấn</p>', '<ul>\r\n	<li>Chất vải Khaki T&acirc;y chống nhăn v&agrave; thấm h&uacute;t mồ h&ocirc;i tốt</li>\r\n	<li>Phom Smart Fit t&ocirc;n d&aacute;ng, hợp với hầu hết k&iacute;ch thước cơ thể</li>\r\n	<li>Thoải m&aacute;i giặt m&aacute;y, kh&ocirc;ng ra m&agrave;u v&agrave; kh&ocirc;ng mất phom quần</li>\r\n</ul>\r\n\r\n<p><img alt=\"Quần Dài Nam Smart Fit Màu Be và thông tin chi tiết\" src=\"https://cdn.shopify.com/s/files/1/0685/2237/7522/files/polomanor_pants_details_smartfit_beige_01_cc749dc8-0e02-4673-8fb3-dcd248636ccc_2048x2048.jpg?v=1684467416\" /></p>\r\n\r\n<p>&quot;</p>', '2023-10-21 22:45:05', '2023-10-21 23:16:32'),
(46, 'Quần Âu Nam Nano Melange Slim Fit', 'quan-au-nam-nano-melange-slim-fit', '349.000', '199.000', '03-01.png', 6, '<p>Chất liệu: vải Nano&nbsp;được dệt theo c&ocirc;ng nghệ mới</p>\r\n\r\n<p>Nano thuộc nh&oacute;m vải c&ocirc;ng nghệ mới, l&agrave; bước đột ph&aacute; trong ng&agrave;nh vải sợi thế giới.</p>\r\n\r\n<p>Vải dệt đ&ocirc;i 2 mặt l&agrave; kiểu dệt kh&aacute; phức tạp gi&uacute;p định h&igrave;nh form d&aacute;ng sản phẩm sang trọng hơn.</p>', '<p><img alt=\"Quần Âu Nam Nano Melange Slim Fit\" src=\"https://bizweb.dktcdn.net/100/438/408/files/product-highlight-nano-6f74682d-6334-4098-a372-eeac2d5b6e52.jpg?v=1681959177593\" /></p>\r\n\r\n<p>Chất liệu: vải Nano&nbsp;được dệt theo c&ocirc;ng nghệ mới</p>\r\n\r\n<p>Nano thuộc nh&oacute;m vải c&ocirc;ng nghệ mới, l&agrave; bước đột ph&aacute; trong ng&agrave;nh vải sợi thế giới.</p>\r\n\r\n<p>Vải dệt đ&ocirc;i 2 mặt l&agrave; kiểu dệt kh&aacute; phức tạp gi&uacute;p định h&igrave;nh form d&aacute;ng sản phẩm sang trọng hơn.</p>\r\n\r\n<p>Cấu tr&uacute;c dệt kh&aacute;c biệt, gi&uacute;p tạo cảm gi&aacute;c thoải m&aacute;i.</p>\r\n\r\n<p>YODY - Look good. Feel good.</p>\r\n\r\n<p>Sản xuất tại Việt Nam</p>', '2023-10-21 22:50:51', '2023-10-21 22:50:51'),
(47, 'Quần Âu Nam Nano Melange Thêu', 'quan-au-nam-nano-melange-theu', '354.000', '250.000', '04-01.png', 6, '<p>Chất liệu&nbsp;Nano</p>\r\n\r\n<p>Th&agrave;nh phần: 100% Polyester</p>\r\n\r\n<p>Vải sử dụng c&ocirc;ng nghệ Nano xoắn nhiều sợi li ti th&agrave;nh một sợi.</p>\r\n\r\n<p>Nano thuộc nh&oacute;m vải c&ocirc;ng nghệ mới,l&agrave; bước đột ph&aacute; trong ng&agrave;nh vải sợi thế giới</p>\r\n\r\n<p>Vải dệt đ&ocirc;i 2 mặt l&agrave; kiểu dệt kh&aacute; phức tạp gi&uacute;p định h&igrave;nh form d&aacute;ng sản phẩm</p>', '<h2>Đặc t&iacute;nh nổi bật</h2>\r\n\r\n<h2>&nbsp;</h2>\r\n\r\n<p>Chất liệu&nbsp;Nano</p>\r\n\r\n<p>Th&agrave;nh phần: 100% Polyester</p>\r\n\r\n<p>Vải sử dụng c&ocirc;ng nghệ Nano xoắn nhiều sợi li ti th&agrave;nh một sợi.</p>\r\n\r\n<p>Nano thuộc nh&oacute;m vải c&ocirc;ng nghệ mới,l&agrave; bước đột ph&aacute; trong ng&agrave;nh vải sợi thế giới</p>\r\n\r\n<p>Vải dệt đ&ocirc;i 2 mặt l&agrave; kiểu dệt kh&aacute; phức tạp gi&uacute;p định h&igrave;nh form d&aacute;ng sản phẩm</p>\r\n\r\n<p>Cấu tr&uacute;c dệt kh&aacute;c biệt, gi&uacute;p tạo cảm gi&aacute;c thoải m&aacute;i.</p>\r\n\r\n<p>Sản xuất tại Việt Nam</p>\r\n\r\n<p>YODY - Look good. Feel good.</p>', '2023-10-21 22:52:28', '2023-10-21 22:52:28'),
(48, 'Quần Âu Nam Classic Phối Lé', 'quan-au-nam-classic-phoi-le', '180.000', '100.000', '05-01.png', 6, '<p>Th&agrave;nh phần :&nbsp;78% polyester + 18% viscose + 4% spandex</p>\r\n\r\n<p>Tho&aacute;ng kh&iacute; v&agrave; thấm h&uacute;t tốt từ sợi phẳng, c&oacute; r&atilde;nh trong vải.</p>\r\n\r\n<p>Bề mặt b&oacute;ng mượt: do bề mặt sợi b&oacute;ng mượt hơn sợi tự nhi&ecirc;n.&nbsp;</p>', '<p>Th&agrave;nh phần :&nbsp;78% polyester + 18% viscose + 4% spandex</p>\r\n\r\n<p>Tho&aacute;ng kh&iacute; v&agrave; thấm h&uacute;t tốt từ sợi phẳng, c&oacute; r&atilde;nh trong vải.</p>\r\n\r\n<p>Bề mặt b&oacute;ng mượt: do bề mặt sợi b&oacute;ng mượt hơn sợi tự nhi&ecirc;n.&nbsp;</p>\r\n\r\n<p>Mềm mịn lu&ocirc;n tạo cảm gi&aacute;c thoải m&aacute;i cho người mặc</p>\r\n\r\n<p>Sản xuất tại Việt Nam</p>\r\n\r\n<p>YODY - Look good. Feel good.</p>', '2023-10-21 22:54:15', '2023-10-21 22:54:15'),
(49, 'Quần Short Nam Kaki Ống Đứng Lịch Lãm', 'quan-short-nam-kaki-ong-dung-lich-lam', '250.000', '0', '06-01.png', 7, '<p>Chất liệu Kaki mềm nhẹ,&nbsp;thoải m&aacute;i</p>\r\n\r\n<p>Quần short nam thiết kế cơ bản d&agrave;i ngang gối</p>\r\n\r\n<p>Cạp quần to bản c&oacute; đỉa tiện lợi</p>\r\n\r\n<p>T&uacute;i c&uacute;c&nbsp;ph&iacute;a sau c&oacute; thể đựng đồ nhỏ gọn như v&iacute;, ch&igrave;a kh&oacute;a</p>', '<p>Chất liệu Kaki mềm nhẹ,&nbsp;thoải m&aacute;i</p>\r\n\r\n<p>Quần short nam thiết kế cơ bản d&agrave;i ngang gối</p>\r\n\r\n<p>Cạp quần to bản c&oacute; đỉa tiện lợi</p>\r\n\r\n<p>T&uacute;i c&uacute;c&nbsp;ph&iacute;a sau c&oacute; thể đựng đồ nhỏ gọn như v&iacute;, ch&igrave;a kh&oacute;a</p>\r\n\r\n<p>Phom d&aacute;ng&nbsp;trẻ trung, lịch l&atilde;m tạo sự chỉn chu,&nbsp;th&iacute;ch hợp mặc ở nh&agrave; hay&nbsp;ra ngo&agrave;i cafe, hẹn h&ograve;</p>\r\n\r\n<p>Sản phẩm basic&nbsp;d&agrave;nh cho mọi ch&agrave;ng trai</p>\r\n\r\n<p>YODY - Look good. Feel good.</p>\r\n\r\n<p>Sản xuất tại Việt Nam</p>', '2023-10-21 23:07:32', '2023-10-21 23:07:32'),
(50, 'Quần Short Nam Ống Đứng Trẻ Trung', 'quan-short-nam-ong-dung-tre-trung', '260.000', '199.000', 'qsm5057-bee-3.webp', 7, '<p>Quần short nam kaki ngang gối</p>\r\n\r\n<p>Sản phẩm basic thiết yếu d&agrave;nh cho mọi ch&agrave;ng trai</p>\r\n\r\n<p>Cạp quần thiết kế bản to c&oacute; đỉa mang lại sự chỉn chu c&oacute; thể mặc ra ngo&agrave;i cafe, hẹn h&ograve;</p>', '<p>Quần short nam kaki ngang gối</p>\r\n\r\n<p>Sản phẩm basic thiết yếu d&agrave;nh cho mọi ch&agrave;ng trai</p>\r\n\r\n<p>Cạp quần thiết kế bản to c&oacute; đỉa mang lại sự chỉn chu c&oacute; thể mặc ra ngo&agrave;i cafe, hẹn h&ograve;</p>\r\n\r\n<p>T&uacute;i&nbsp;hậu c&oacute; c&uacute;c tiện lợi</p>\r\n\r\n<p>Chất vải kaki mềm nhẹ, thoải m&aacute;i, th&iacute;ch hợp với điều kiện thời tiết nhiệt đới&nbsp;</p>\r\n\r\n<p>YODY - Look good. Feel good.</p>\r\n\r\n<p>Sản xuất tại Việt Nam</p>', '2023-10-21 23:10:51', '2023-10-21 23:10:51'),
(51, 'Quần Short Nam Ống Đứng Gấu Lơ Vê', 'quan-short-nam-ong-dung-gau-lo-ve', '300.000', '150.000', 'qsm5047-den-9-min.webp', 7, '<p>Th&agrave;nh phần: 100% polyester</p>\r\n\r\n<p>Tho&aacute;ng m&aacute;t khi sử dụng</p>\r\n\r\n<p>Bề mặt vải &iacute;t nhăn,&nbsp; c&oacute; thể giặt m&aacute;i m&agrave; kh&ocirc;ng lo đến bề mặt vải</p>\r\n\r\n<p>Nhanh kh&ocirc;, m&aacute;t, nhẹ</p>', '<p>Th&agrave;nh phần: 100% polyester</p>\r\n\r\n<p>Tho&aacute;ng m&aacute;t khi sử dụng</p>\r\n\r\n<p>Bề mặt vải &iacute;t nhăn,&nbsp; c&oacute; thể giặt m&aacute;i m&agrave; kh&ocirc;ng lo đến bề mặt vải</p>\r\n\r\n<p>Nhanh kh&ocirc;, m&aacute;t, nhẹ</p>\r\n\r\n<p>Đ&agrave;n hồi, co gi&atilde;n tốt</p>\r\n\r\n<p>YODY - Look good. Feel good</p>\r\n\r\n<p>Sản xuất tại Việt Nam</p>', '2023-10-21 23:12:01', '2023-10-21 23:12:01'),
(52, 'Quần Short Nam Nắp Túi Sau', 'quan-short-nam-nap-tui-sau', '240.000', '0', 'quan-short-nam-nap-tui-sau-qsm6021-xam-2.webp', 7, '<p>Quần short nam nắp t&uacute;i sau vải kaki mềm mại, thoải m&aacute;i</p>\r\n\r\n<p>Th&agrave;nh phần:&nbsp;&nbsp;100% Polyester</p>\r\n\r\n<p>Phom d&aacute;ng&nbsp;trẻ trung, lịch l&atilde;m mang lại sự&nbsp;chỉn chu</p>', '<p>Quần short nam nắp t&uacute;i sau vải kaki mềm mại, thoải m&aacute;i</p>\r\n\r\n<p>Th&agrave;nh phần:&nbsp;&nbsp;100% Polyester</p>\r\n\r\n<p>Phom d&aacute;ng&nbsp;trẻ trung, lịch l&atilde;m mang lại sự&nbsp;chỉn chu</p>\r\n\r\n<p>T&uacute;i hậu c&oacute; c&uacute;c tiện lợi đựng đồ nhỏ gọn như v&iacute;, ch&igrave;a kh&oacute;a</p>\r\n\r\n<p>Cạp quần to bản c&oacute; đỉa đeo th&ecirc;m thắt lưng khi cần</p>\r\n\r\n<p>Sản phẩm basic thiết yếu d&agrave;nh cho mọi ch&agrave;ng trai</p>\r\n\r\n<p>Th&iacute;ch hợp mặc đi cafe, hẹn h&ograve;</p>\r\n\r\n<p>YODY - Look good. Feel good.</p>\r\n\r\n<p>Sản xuất tại Việt Nam</p>', '2023-10-21 23:13:41', '2023-10-21 23:13:41'),
(53, 'Quần Short Nam Dáng Suông Ống Đứng', 'quan-short-nam-dang-suong-ong-dung', '180.000', '99.000', 'quan-short-nam-qsm6027-ghi-5.webp', 7, '<p>Quần short nam vải kaki&nbsp;c&agrave;o l&ocirc;ng</p>\r\n\r\n<p>Th&agrave;nh phần:&nbsp;&nbsp;97% Cotton + 3% Spandex</p>\r\n\r\n<p>Được thiết kế tr&ecirc;n phom d&aacute;ng ngang gối cơ bản</p>', '<p>Quần short nam vải kaki&nbsp;c&agrave;o l&ocirc;ng</p>\r\n\r\n<p>Th&agrave;nh phần:&nbsp;&nbsp;97% Cotton + 3% Spandex</p>\r\n\r\n<p>Được thiết kế tr&ecirc;n phom d&aacute;ng ngang gối cơ bản</p>\r\n\r\n<p>Phần gấu được gấp l&ecirc;n tạo điểm nhấn</p>\r\n\r\n<p>Cạp quần bản to c&oacute; đỉa chắc chắn</p>\r\n\r\n<p>T&uacute;i 2 b&ecirc;n sườn v&agrave; t&uacute;i hậu 2 cơi c&agrave;i c&uacute;c</p>\r\n\r\n<p>Quần ph&ugrave; hợp với mọi v&oacute;c d&aacute;ng v&agrave; độ tuổi</p>\r\n\r\n<p>C&oacute; thể mặc c&ugrave;ng &aacute;o polo, &aacute;o ph&ocirc;ng, sơ mi diện trong nhiều ho&agrave;n cảnh</p>\r\n\r\n<p>YODY - Look good. Feel good.</p>\r\n\r\n<p>Sản xuất tại Việt Nam</p>', '2023-10-21 23:14:49', '2023-10-21 23:14:49'),
(54, 'nhân ái', 'nhan-ai', '40000', '0', '01.png', 7, '<p>&aacute;dasdasdas</p>', '<p>&aacute;dasdasdasdas</p>', '2023-10-25 06:35:04', '2023-10-25 06:35:04');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `cap` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `cap`) VALUES
(1, 'ABC', 'abc@gmail.com', NULL, '$2y$10$cYZLFQOJRa2mEolcuzKAV.mbo1Hvhr/T1bO8PYZSNbKyL8zZkFVtK', NULL, '2023-10-16 23:28:26', '2023-10-16 23:28:26', 1),
(3, 'Admin', 'admin@gmail.com', NULL, '$2y$10$.u3f/xc7hyPw0dXAUyBdXuHAGUIYCKQursEln.zyrZD.UUH/Dv9iG', NULL, '2023-10-17 07:03:31', '2023-10-17 07:03:31', 1),
(7, '132', 'cc@gmail.com', NULL, '$2y$10$lRSRGNKQcc8sKcCTHEPjN.nsVD/61Ypff2ywfDBpoQz5OVZ7xVDUu', NULL, '2023-10-20 01:40:39', '2023-10-20 01:40:39', 0),
(8, '321', '123@gmail.com', NULL, '$2y$10$N0YQT1aINSCRMb2F0CtK1ukZZUC6GeaAw80nSp/WjSKbf/jd649la', NULL, '2023-10-20 01:41:38', '2023-10-20 01:41:38', 0),
(9, 'AA', 'acd@gmail.com', NULL, '$2y$10$lbHIXI/ZL6BwR2lDUIrhEe2UiMM9A6yqFncEamp1iBUfPHKlQ.u9S', NULL, '2023-10-22 00:25:38', '2023-10-22 00:25:38', 0),
(10, '11524', 'zxc@gmail.com', NULL, '$2y$10$lMPlvFU2.u0mcpTeVmKS4OzXHYCTbVJs4qYQv8.5ENcYNmdY3SJiO', NULL, '2023-10-22 01:10:40', '2023-10-22 01:10:40', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `danhmucs`
--
ALTER TABLE `danhmucs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `img_products`
--
ALTER TABLE `img_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `danhmuc_id` (`danhmuc_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `danhmucs`
--
ALTER TABLE `danhmucs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `img_products`
--
ALTER TABLE `img_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=197;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `img_products`
--
ALTER TABLE `img_products`
  ADD CONSTRAINT `img_products_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`danhmuc_id`) REFERENCES `danhmucs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
