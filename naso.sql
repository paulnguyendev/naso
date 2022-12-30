-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 29, 2022 lúc 10:49 AM
-- Phiên bản máy phục vụ: 10.4.25-MariaDB
-- Phiên bản PHP: 8.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `naso`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(46, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(47, '2022_12_20_074311_create_user_table', 1),
(48, '2022_12_20_074630_create_user_group_table', 1),
(49, '2022_12_20_075017_add_group_id_to_user_table', 1),
(50, '2022_12_20_150405_add_is_default_to_user_group', 1),
(51, '2022_12_26_150001_create_taxonomy_table', 1),
(52, '2022_12_26_161122_add_thumbnail_to_taxonomy_table', 1),
(53, '2022_12_27_033251_add_sortorder_to_taxonomy_table', 2),
(54, '2022_12_27_035742_add_slug_to_taxonomy_table', 3),
(55, '2022_12_27_041333_add_seo_to_taxonomy_table', 4),
(56, '2022_12_27_063442_create_supplier_table', 5),
(57, '2022_12_27_070144_create_product_table', 6),
(58, '2022_12_27_070814_create_product_meta_table', 7),
(59, '2022_12_27_084508_add_supplier_id_to_product_table', 8),
(60, '2022_12_27_090836_create_taxonomy_relationship_table', 9),
(61, '2022_12_27_091131_add_taxonomy_type_to_taxonomy_relationship_table', 10),
(62, '2022_12_27_091555_add_percent_to_product_table', 11),
(63, '2022_12_28_081115_add_is_show_to_user_group_table', 12),
(65, '2022_12_29_043029_create_order_table', 13),
(67, '2022_12_29_061144_add_code_to_order_table', 14),
(68, '2022_12_29_062530_add_status_to_order_table', 15),
(69, '2022_12_29_071517_add_total_point_to_order_table', 16),
(70, '2022_12_29_075909_add_total_commission_to_order_table', 17),
(71, '2022_12_29_081456_create_payment_history_table', 18);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order`
--

CREATE TABLE `order` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `discount` int(11) DEFAULT NULL,
  `info_order` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`info_order`)),
  `info_shipping` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`info_shipping`)),
  `note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`payment`)),
  `products` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`products`)),
  `shipping` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`shipping`)),
  `subtotal` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `total_weight` int(11) DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_point` int(11) DEFAULT NULL,
  `total_commission` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order`
--

INSERT INTO `order` (`id`, `discount`, `info_order`, `info_shipping`, `note`, `payment`, `products`, `shipping`, `subtotal`, `total`, `total_weight`, `user_id`, `created_at`, `updated_at`, `code`, `status`, `total_point`, `total_commission`) VALUES
(21, 0, '{\"fullname\":\"Duy Anh\",\"email\":null,\"phone\":\"0932730394\",\"province\":null,\"district\":null,\"ward\":null,\"address\":null}', '{\"name\":\"Duy Anh\",\"email\":null,\"phone\":\"0932730394\",\"province\":null,\"district\":null,\"ward\":null,\"address\":null}', NULL, '{\"method_id\":\"1\",\"method_title\":\"Thu ti\\u1ec1n t\\u1eadn n\\u01a1i - COD\",\"status\":\"0\"}', '[{\"id\":\"f2da8b509f583fa05c1ce13e9daa2c2b\",\"product_title\":\"<div class = \'supplier-name\'>Bravo [S\\u1ed1 84 Mai H\\u1eafc \\u0110\\u1ebf \\u2013 Ph\\u01b0\\u1eddng H\\u00e0 Huy T\\u1eadp \\u2013 Th\\u00e0nh Ph\\u1ed1 Vinh \\u2013 Ngh\\u1ec7 An]<\\/div> \\r\\n                <div class = \'product-name\'> <a href = \'http:\\/\\/localhost\\/naso\\/user\\/product\\/2\'>\\u00c1O S\\u01a0 MI C\\u00d4NG S\\u1ede NAM M\\u00c0U \\u0110EN \\u2013 TH\\u1edcI TRANG CAO C\\u1ea4P BRAVO<\\/a> <\\/div>\",\"price\":\"720000\",\"quantity\":\"2\",\"thumbnail\":\"\\/7.jpg\",\"weight\":null,\"point\":480,\"commision\":288000}]', '{\"fee\":\"0\",\"discount\":\"0\",\"message\":null,\"method_id\":\"NaN\"}', 1440000, 1440000, 0, 1, '2022-12-29 01:04:11', NULL, 'NS939274', 'complete', 480, 288000),
(22, 0, '{\"fullname\":\"Duy Anh\",\"email\":null,\"phone\":\"0932730394\",\"province\":null,\"district\":null,\"ward\":null,\"address\":\"test\"}', '{\"name\":\"Duy Anh\",\"email\":null,\"phone\":\"0932730394\",\"province\":null,\"district\":null,\"ward\":null,\"address\":\"test\"}', NULL, '{\"method_id\":\"1\",\"method_title\":\"Thu ti\\u1ec1n t\\u1eadn n\\u01a1i - COD\",\"status\":\"0\"}', '[{\"id\":\"f2da8b509f583fa05c1ce13e9daa2c2b\",\"product_title\":\"<div class = \'supplier-name\'>Bravo [S\\u1ed1 84 Mai H\\u1eafc \\u0110\\u1ebf \\u2013 Ph\\u01b0\\u1eddng H\\u00e0 Huy T\\u1eadp \\u2013 Th\\u00e0nh Ph\\u1ed1 Vinh \\u2013 Ngh\\u1ec7 An]<\\/div> \\r\\n                <div class = \'product-name\'> <a href = \'http:\\/\\/localhost\\/naso\\/user\\/product\\/2\'>\\u00c1O S\\u01a0 MI C\\u00d4NG S\\u1ede NAM M\\u00c0U \\u0110EN \\u2013 TH\\u1edcI TRANG CAO C\\u1ea4P BRAVO<\\/a> <\\/div>\",\"price\":\"720000\",\"quantity\":\"4\",\"thumbnail\":\"\\/7.jpg\",\"weight\":null,\"point\":960,\"commision\":576000}]', '{\"fee\":\"0\",\"discount\":\"0\",\"message\":null,\"method_id\":\"NaN\"}', 2880000, 2880000, 0, 1, '2022-12-29 01:25:39', NULL, 'NS481420', 'new', 960, 576000),
(23, 0, '{\"fullname\":\"Duy Anh\",\"email\":null,\"phone\":\"0932730394\",\"province\":null,\"district\":null,\"ward\":null,\"address\":null}', '{\"name\":\"Duy Anh\",\"email\":null,\"phone\":\"0932730394\",\"province\":null,\"district\":null,\"ward\":null,\"address\":null}', NULL, '{\"method_id\":\"1\",\"method_title\":\"Thu ti\\u1ec1n t\\u1eadn n\\u01a1i - COD\",\"status\":\"0\"}', '[{\"id\":\"f2da8b509f583fa05c1ce13e9daa2c2b\",\"product_title\":\"<div class = \'supplier-name\'>Bravo [S\\u1ed1 84 Mai H\\u1eafc \\u0110\\u1ebf \\u2013 Ph\\u01b0\\u1eddng H\\u00e0 Huy T\\u1eadp \\u2013 Th\\u00e0nh Ph\\u1ed1 Vinh \\u2013 Ngh\\u1ec7 An]<\\/div> \\r\\n                <div class = \'product-name\'> <a href = \'http:\\/\\/localhost\\/naso\\/user\\/product\\/2\'>\\u00c1O S\\u01a0 MI C\\u00d4NG S\\u1ede NAM M\\u00c0U \\u0110EN \\u2013 TH\\u1edcI TRANG CAO C\\u1ea4P BRAVO<\\/a> <\\/div>\",\"price\":\"720000\",\"quantity\":\"5\",\"thumbnail\":\"\\/7.jpg\",\"weight\":null,\"point\":1200,\"commision\":720000},{\"id\":\"f634c2a7f227eaa5cde2d7081dc285f9\",\"product_title\":\"<div class = \'supplier-name\'>Bravo [S\\u1ed1 84 Mai H\\u1eafc \\u0110\\u1ebf \\u2013 Ph\\u01b0\\u1eddng H\\u00e0 Huy T\\u1eadp \\u2013 Th\\u00e0nh Ph\\u1ed1 Vinh \\u2013 Ngh\\u1ec7 An]<\\/div> \\r\\n                <div class = \'product-name\'> <a href = \'http:\\/\\/localhost\\/naso\\/user\\/product\\/3\'>\\u00c1O S\\u01a0 MI C\\u00d4NG S\\u1ede M\\u00c0U XANH THI\\u1ebeT K\\u1ebe TR\\u1eba TRUNG<\\/a> <\\/div>\",\"price\":\"5000000\",\"quantity\":\"4\",\"thumbnail\":\"\\/6.jpg\",\"weight\":null,\"point\":960,\"commision\":4000000}]', '{\"fee\":\"0\",\"discount\":\"0\",\"message\":null,\"method_id\":\"NaN\"}', 23600000, 23600000, 0, 1, '2022-12-29 01:42:28', NULL, 'NS762648', 'new', 2160, 4720000),
(24, 0, '{\"fullname\":\"Paul\",\"email\":\"paulnguyen@gmail.com\",\"phone\":\"0582660723\",\"province\":null,\"district\":null,\"ward\":null,\"address\":\"59\\/10 \\u0111\\u01b0\\u1eddng s\\u1ed1 2, ph\\u01b0\\u1eddng 3, Qu\\u1eadn G\\u00f2 V\\u1ea5p\"}', '{\"name\":\"Paul\",\"email\":\"paulnguyen@gmail.com\",\"phone\":\"0582660723\",\"province\":null,\"district\":null,\"ward\":null,\"address\":\"59\\/10 \\u0111\\u01b0\\u1eddng s\\u1ed1 2, ph\\u01b0\\u1eddng 3, Qu\\u1eadn G\\u00f2 V\\u1ea5p\"}', 'test', '{\"method_id\":\"1\",\"method_title\":\"Thu ti\\u1ec1n t\\u1eadn n\\u01a1i - COD\",\"status\":\"1\"}', '[{\"id\":\"f2da8b509f583fa05c1ce13e9daa2c2b\",\"product_title\":\"<div class = \'supplier-name\'>Bravo [S\\u1ed1 84 Mai H\\u1eafc \\u0110\\u1ebf \\u2013 Ph\\u01b0\\u1eddng H\\u00e0 Huy T\\u1eadp \\u2013 Th\\u00e0nh Ph\\u1ed1 Vinh \\u2013 Ngh\\u1ec7 An]<\\/div> \\r\\n                <div class = \'product-name\'> <a href = \'http:\\/\\/localhost\\/naso\\/user\\/product\\/2\'>\\u00c1O S\\u01a0 MI C\\u00d4NG S\\u1ede NAM M\\u00c0U \\u0110EN \\u2013 TH\\u1edcI TRANG CAO C\\u1ea4P BRAVO<\\/a> <\\/div>\",\"price\":\"720000\",\"quantity\":\"1\",\"thumbnail\":\"\\/7.jpg\",\"weight\":null,\"point\":240,\"commision\":144000}]', '{\"fee\":\"0\",\"discount\":\"0\",\"message\":null,\"method_id\":\"NaN\"}', 720000, 720000, 0, 3, '2022-12-29 02:00:30', NULL, 'NS285156', 'complete', 240, 144000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `payment_history`
--

CREATE TABLE `payment_history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `approved_by` bigint(20) UNSIGNED DEFAULT NULL,
  `note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_commission` int(11) DEFAULT NULL,
  `total_point` int(11) DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `payment_history`
--

INSERT INTO `payment_history` (`id`, `order_id`, `user_id`, `approved_by`, `note`, `total_commission`, `total_point`, `status`, `created_at`, `updated_at`) VALUES
(1, 22, 1, NULL, NULL, 576000, 960, 'approve_success', '2022-12-29 01:25:39', NULL),
(2, 23, 1, NULL, NULL, 4720000, 2160, 'pending', '2022-12-29 01:42:28', NULL),
(3, 24, 3, NULL, NULL, 144000, 240, 'approve_success', '2022-12-29 02:00:30', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orgin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `point` int(11) DEFAULT NULL,
  `sale_price` int(11) DEFAULT NULL,
  `regular_price` int(11) DEFAULT NULL,
  `in_stock` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `is_published` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `supplier_id` bigint(20) UNSIGNED DEFAULT NULL,
  `percent` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `title`, `code`, `slug`, `thumbnail`, `orgin`, `point`, `sale_price`, `regular_price`, `in_stock`, `stock`, `is_published`, `created_at`, `updated_at`, `supplier_id`, `percent`) VALUES
(2, 'ÁO SƠ MI CÔNG SỞ NAM MÀU ĐEN – THỜI TRANG CAO CẤP BRAVO', 'SM01', 'ao-so-mi-cong-so-nam-mau-den-thoi-trang-cao-cap-bravo', '/7.jpg', NULL, 240, NULL, 720000, '1', 99, 1, '2022-12-28 01:07:52', NULL, 5, NULL),
(3, 'ÁO SƠ MI CÔNG SỞ MÀU XANH THIẾT KẾ TRẺ TRUNG', 'SM02', 'ao-so-mi-cong-so-mau-xanh-thiet-ke-tre-trung', '/6.jpg', NULL, 240, NULL, 5000000, '1', 99, 1, '2022-12-28 00:38:48', NULL, 5, 100);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_meta`
--

CREATE TABLE `product_meta` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gallery` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product_meta`
--

INSERT INTO `product_meta` (`id`, `product_id`, `description`, `content`, `gallery`, `created_at`, `updated_at`) VALUES
(2, 2, '<p>– Áo sơ mi nam thiết kế sang trọng và độc đáo cho sản phẩm</p>\r\n\r\n<p>– Kiểu dáng: slimfit trẻ trung, năng động</p>\r\n\r\n<p>– Đặc tính: thoáng mát, hút ẩm tốt, nhanh khô, sợi vải mềm mịn</p>', '<p>– Áo sơ mi nam thiết kế sang trọng và độc đáo cho sản phẩm</p>\r\n\r\n<p>– Kiểu dáng: slimfit trẻ trung, năng động</p>\r\n\r\n<p>– Đặc tính: thoáng mát, hút ẩm tốt, nhanh khô, sợi vải mềm mịn</p>\r\n\r\n<p><img alt=\"\" src=\"https://quanly.naso.vn/naso/static/uploads/ckeditor/images.thumb.85acb349-637c-40ba-9120-ee97a0632080.jpg\" /></p>\r\n\r\n<p><img alt=\"\" src=\"https://quanly.naso.vn/naso/static/uploads/ckeditor/images.thumb.15d77052-662a-47d8-b7b5-3e978955955e.jpg\" /></p>', '/6.jpg,/1.jpg,/2.jpg', '2022-12-28 01:07:52', NULL),
(3, 3, '<p>– Áo sơ mi nam thiết kế sang trọng và độc đáo cho sản phẩm</p>\r\n\r\n<p>– Kiểu dáng: slimfit trẻ trung, năng động</p>\r\n\r\n<p>– Đặc tính: thoáng mát, hút ẩm tốt, nhanh khô, sợi vải mềm mịn</p>', '<p>– Áo sơ mi nam thiết kế sang trọng và độc đáo cho sản phẩm</p>\r\n\r\n<p>– Kiểu dáng: slimfit trẻ trung, năng động</p>\r\n\r\n<p>– Đặc tính: thoáng mát, hút ẩm tốt, nhanh khô, sợi vải mềm mịn</p>\r\n\r\n<p><img alt=\"\" src=\"https://quanly.naso.vn/naso/static/uploads/ckeditor/images.thumb.76f67425-fd3d-4d7e-adbf-3a0926a4cafe.jpg\" /></p>', '/6.jpg,/1.jpg,/2.jpg', '2022-12-28 00:38:48', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `supplier`
--

CREATE TABLE `supplier` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `supplier`
--

INSERT INTO `supplier` (`id`, `name`, `thumbnail`, `phone`, `address`, `email`, `created_at`, `updated_at`) VALUES
(5, 'Bravo', '/vinhomes-logosvg.png', '0941666637', 'Số 84 Mai Hắc Đế – Phường Hà Huy Tập – Thành Phố Vinh – Nghệ An', NULL, '2022-12-28 00:29:21', NULL),
(6, 'Finish', '/logo-aqua-city-novaland.png', '0862468366', 'Tầng 11, Toà nhà Việt Á, Số 9 Duy Tân, P.Dịch Vọng Hậu, Q.Cầu Giấy, TP. HN', NULL, '2022-12-28 00:31:15', NULL),
(7, 'Julius', '/novaland-group-logo-brandlogosnet.png', '0961987800', 'Tầng 1, Tòa nhà Packsimex, 52 Đông Du, Phường Bến Nghé, Quận 1, TP. HCM', NULL, '2022-12-28 00:31:50', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taxonomy`
--

CREATE TABLE `taxonomy` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `taxonomy` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `_lft` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `_rgt` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sort_order` int(11) DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keyword` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `h1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `taxonomy`
--

INSERT INTO `taxonomy` (`id`, `name`, `taxonomy`, `description`, `_lft`, `_rgt`, `parent_id`, `created_at`, `updated_at`, `thumbnail`, `sort_order`, `slug`, `meta_keyword`, `h1`) VALUES
(1, 'store', 'product_cat', NULL, 1, 18, NULL, '2022-12-26 21:41:09', NULL, '/logo-obn-land.png', NULL, 'store', NULL, NULL),
(2, 'notebooks', 'product_cat', NULL, 2, 7, 1, NULL, NULL, NULL, NULL, 'notebooks', NULL, NULL),
(3, 'apple', 'product_cat', NULL, 3, 4, 2, NULL, NULL, NULL, NULL, 'apple', NULL, NULL),
(4, 'lenovo', 'product_cat', NULL, 5, 6, 2, NULL, NULL, NULL, NULL, 'lenovo', NULL, NULL),
(5, 'mobile', 'product_cat', NULL, 8, 17, 1, NULL, NULL, NULL, NULL, 'mobile', NULL, NULL),
(6, 'nokia', 'product_cat', NULL, 9, 10, 5, NULL, NULL, NULL, NULL, 'nokia', NULL, NULL),
(7, 'samsung', 'product_cat', NULL, 11, 14, 5, NULL, NULL, NULL, NULL, 'samsung', NULL, NULL),
(8, 'galaxy', 'product_cat', NULL, 12, 13, 7, NULL, NULL, NULL, NULL, 'galaxy', NULL, NULL),
(9, 'sony', 'product_cat', NULL, 15, 16, 5, NULL, NULL, NULL, NULL, 'sony', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taxonomy_relationship`
--

CREATE TABLE `taxonomy_relationship` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `taxonomy_id` bigint(20) UNSIGNED DEFAULT NULL,
  `sort_order` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `taxonomy_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `taxonomy_relationship`
--

INSERT INTO `taxonomy_relationship` (`id`, `product_id`, `taxonomy_id`, `sort_order`, `created_at`, `updated_at`, `taxonomy_type`) VALUES
(4, 3, 4, NULL, NULL, NULL, 'main'),
(5, 3, 2, NULL, NULL, NULL, 'second'),
(6, 3, 4, NULL, NULL, NULL, 'second'),
(10, 2, 3, NULL, NULL, NULL, 'main'),
(11, 2, 2, NULL, NULL, NULL, 'second'),
(12, 2, 3, NULL, NULL, NULL, 'second');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthday` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `secret` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `group_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `avatar`, `password`, `email`, `birthday`, `gender`, `address`, `phone`, `code`, `token`, `secret`, `parent_id`, `role`, `status`, `created_at`, `group_id`) VALUES
(1, 'Duy Anh', 'anhnnd', NULL, 'e10adc3949ba59abbe56e057f20f883e', 'anhnnd.hotro@gmail.com', NULL, NULL, NULL, NULL, 'NS349153', 'S6Pp5NVMiFMX8fEmuJhIT0mxZqDYvV1B7q8EF2Ha', NULL, '', 'user', 'active', '2022-12-27 10:14:58', NULL),
(2, 'Duy Anh', 'admin', NULL, 'e10adc3949ba59abbe56e057f20f883e', 'anhnnd.hotro@gmail.com', NULL, NULL, NULL, NULL, 'NS349153', 'S6Pp5NVMiFMX8fEmuJhIT0mxZqDYvV1B7q8EF2Ha', NULL, '', 'admin', 'active', '2022-12-27 10:14:58', NULL),
(3, 'Paul Nguyễn', 'paulnguyen', NULL, 'e10adc3949ba59abbe56e057f20f883e', 'paulnguyen.moondigi@gmail.com', NULL, NULL, NULL, NULL, 'NS564539', 'lRKLISGLinjiWnP9JHSsDz65wx68pYZKxWF48CU3', NULL, '', 'user', 'active', '2022-12-29 07:41:07', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_group`
--

CREATE TABLE `user_group` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_default` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discount` int(11) DEFAULT NULL,
  `sales` int(11) DEFAULT NULL,
  `monthly_income` int(11) DEFAULT NULL,
  `group_commission` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_show` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user_group`
--

INSERT INTO `user_group` (`id`, `name`, `is_default`, `discount`, `sales`, `monthly_income`, `group_commission`, `created_at`, `updated_at`, `is_show`) VALUES
(1, 'CTV', '1', 20, 3000000, NULL, 0, '2022-12-28 08:00:12', NULL, '1'),
(2, 'Đại lý', '0', 28, 5000000, NULL, 0, '2022-12-28 08:00:12', NULL, '1');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_user_id_foreign` (`user_id`);

--
-- Chỉ mục cho bảng `payment_history`
--
ALTER TABLE `payment_history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `payment_history_order_id_foreign` (`order_id`),
  ADD KEY `payment_history_user_id_foreign` (`user_id`),
  ADD KEY `payment_history_approved_by_foreign` (`approved_by`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_supplier_id_foreign` (`supplier_id`);

--
-- Chỉ mục cho bảng `product_meta`
--
ALTER TABLE `product_meta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_meta_product_id_foreign` (`product_id`);

--
-- Chỉ mục cho bảng `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `taxonomy`
--
ALTER TABLE `taxonomy`
  ADD PRIMARY KEY (`id`),
  ADD KEY `taxonomy__lft__rgt_parent_id_index` (`_lft`,`_rgt`,`parent_id`);

--
-- Chỉ mục cho bảng `taxonomy_relationship`
--
ALTER TABLE `taxonomy_relationship`
  ADD PRIMARY KEY (`id`),
  ADD KEY `taxonomy_relationship_product_id_foreign` (`product_id`),
  ADD KEY `taxonomy_relationship_taxonomy_id_foreign` (`taxonomy_id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_group_id_foreign` (`group_id`);

--
-- Chỉ mục cho bảng `user_group`
--
ALTER TABLE `user_group`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT cho bảng `order`
--
ALTER TABLE `order`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `payment_history`
--
ALTER TABLE `payment_history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `product_meta`
--
ALTER TABLE `product_meta`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `taxonomy`
--
ALTER TABLE `taxonomy`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `taxonomy_relationship`
--
ALTER TABLE `taxonomy_relationship`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `user_group`
--
ALTER TABLE `user_group`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `payment_history`
--
ALTER TABLE `payment_history`
  ADD CONSTRAINT `payment_history_approved_by_foreign` FOREIGN KEY (`approved_by`) REFERENCES `user` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `payment_history_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `order` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `payment_history_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_supplier_id_foreign` FOREIGN KEY (`supplier_id`) REFERENCES `supplier` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `product_meta`
--
ALTER TABLE `product_meta`
  ADD CONSTRAINT `product_meta_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `taxonomy_relationship`
--
ALTER TABLE `taxonomy_relationship`
  ADD CONSTRAINT `taxonomy_relationship_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `taxonomy_relationship_taxonomy_id_foreign` FOREIGN KEY (`taxonomy_id`) REFERENCES `taxonomy` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `user_group` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
