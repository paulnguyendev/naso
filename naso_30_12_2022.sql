-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 30, 2022 lúc 03:57 PM
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
(71, '2022_12_29_081456_create_payment_history_table', 18),
(72, '2022_12_30_043330_create_upload_table', 19),
(73, '2022_12_30_083557_add_aff_number_to_user_table', 20),
(74, '2022_12_30_135310_create_product_group_table', 21),
(75, '2022_12_30_140235_add_group_id_to_product_table', 22);

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
(26, 1000000, '{\"fullname\":\"Tr\\u00ed Nh\\u00e2n 123\",\"phone\":\"0582660723\",\"email\":\"tinidev.com@gmail.com\",\"address\":\"59\\/10 \\u0111\\u01b0\\u1eddng s\\u1ed1 2, ph\\u01b0\\u1eddng 3, Qu\\u1eadn G\\u00f2 V\\u1ea5p\"}', '{\"shipping_fee\":\"0\",\"name\":\"Duy Anh\",\"phone\":\"0932730394\",\"email\":\"nhanbt@gmail.com\",\"address\":\"test\",\"note\":\"Giao gi\\u1edd h\\u00e0nh ch\\u00ednh\"}', NULL, '{\"method_id\":\"1\",\"method_title\":\"Thu ti\\u1ec1n t\\u1eadn n\\u01a1i - COD\",\"status\":\"0\"}', '[{\"id\":\"c23c4091241232a09b7be546c3732def\",\"product_title\":\"<div class = \'supplier-name\'>Bravo [S\\u1ed1 84 Mai H\\u1eafc \\u0110\\u1ebf \\u2013 Ph\\u01b0\\u1eddng H\\u00e0 Huy T\\u1eadp \\u2013 Th\\u00e0nh Ph\\u1ed1 Vinh \\u2013 Ngh\\u1ec7 An]<\\/div> \\r\\n                <div class = \'product-name\'> <a href = \'http:\\/\\/localhost\\/naso\\/user\\/product\\/2\'>\\u00c1O S\\u01a0 MI C\\u00d4NG S\\u1ede NAM M\\u00c0U \\u0110EN \\u2013 TH\\u1edcI TRANG CAO C\\u1ea4P BRAVO<\\/a> <\\/div>\",\"price\":\"720000\",\"quantity\":\"7\",\"thumbnail\":\"http:\\/\\/localhost\\/naso\\/public\\/uploads\\/images\\/AdN0gaobw1.jpg\",\"weight\":null,\"point\":1680,\"commision\":1008000},{\"id\":\"c2c398b02b780489b85f647c87c46952\",\"product_title\":\"<div class = \'supplier-name\'>Bravo [S\\u1ed1 84 Mai H\\u1eafc \\u0110\\u1ebf \\u2013 Ph\\u01b0\\u1eddng H\\u00e0 Huy T\\u1eadp \\u2013 Th\\u00e0nh Ph\\u1ed1 Vinh \\u2013 Ngh\\u1ec7 An]<\\/div> \\r\\n                <div class = \'product-name\'> <a href = \'http:\\/\\/localhost\\/naso\\/user\\/product\\/3\'>\\u00c1O S\\u01a0 MI C\\u00d4NG S\\u1ede M\\u00c0U XANH THI\\u1ebeT K\\u1ebe TR\\u1eba TRUNG<\\/a> <\\/div>\",\"price\":\"120000\",\"quantity\":\"2\",\"thumbnail\":\"http:\\/\\/localhost\\/naso\\/public\\/uploads\\/images\\/qJwL9isHM1.png\",\"weight\":null,\"point\":480,\"commision\":48000}]', '{\"fee\":\"100000\",\"discount\":\"0\",\"message\":null,\"method_id\":\"NaN\"}', 5280000, 5280000, 0, 1, '2022-12-30 02:24:23', NULL, 'NS391898', 'cancel', 2160, 1056000),
(27, 50000, '{\"fullname\":\"Duy Anh\",\"email\":\"anhnnd.hotro@gmail.com\",\"phone\":\"0932730394\",\"province\":null,\"district\":null,\"ward\":null,\"address\":\"59\\/10 \\u0111\\u01b0\\u1eddng s\\u1ed1 2\"}', '{\"name\":\"Duy Anh\",\"email\":\"anhnnd.hotro@gmail.com\",\"phone\":\"0932730394\",\"province\":null,\"district\":null,\"ward\":null,\"address\":\"59\\/10 \\u0111\\u01b0\\u1eddng s\\u1ed1 2\"}', 'Test', '{\"method_id\":\"1\",\"method_title\":\"Thu ti\\u1ec1n t\\u1eadn n\\u01a1i - COD\",\"status\":\"0\"}', '[{\"id\":\"7645c19fb4483eb84a5bf9da540d115f\",\"product_title\":\"<div class = \'supplier-name\'>Julius [T\\u1ea7ng 1, T\\u00f2a nh\\u00e0 Packsimex, 52 \\u0110\\u00f4ng Du, Ph\\u01b0\\u1eddng B\\u1ebfn Ngh\\u00e9, Qu\\u1eadn 1, TP. HCM]<\\/div> \\r\\n                <div class = \'product-name\'> <a href = \'http:\\/\\/localhost\\/naso\\/user\\/product\\/17\'>\\u0110\\u1ed2NG H\\u1ed2 NAM JS-009MD JULIUS STAR H\\u00c0N QU\\u1ed0C D\\u00c2Y TH\\u00c9P (XANH D\\u01af\\u01a0NG)<\\/a> <\\/div>\",\"price\":\"1619000\",\"quantity\":\"4\",\"thumbnail\":\"http:\\/\\/localhost\\/naso\\/public\\/uploads\\/images\\/MSXh7ljHDZ.jpg\",\"weight\":null,\"point\":400,\"commision\":1295200}]', '{\"fee\":\"20000\",\"discount\":\"0\",\"message\":null,\"method_id\":\"NaN\"}', 6476000, 6476000, 0, 1, '2022-12-30 04:53:08', NULL, 'NS983873', 'new', 400, 1295200);

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
(5, 26, 1, NULL, NULL, 1056000, 2160, 'approve_success', '2022-12-30 02:24:23', NULL),
(6, 27, 1, NULL, NULL, 1295200, 400, 'pending', '2022-12-30 04:53:08', NULL);

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
  `percent` int(11) DEFAULT NULL,
  `product_group_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `title`, `code`, `slug`, `thumbnail`, `orgin`, `point`, `sale_price`, `regular_price`, `in_stock`, `stock`, `is_published`, `created_at`, `updated_at`, `supplier_id`, `percent`, `product_group_id`) VALUES
(2, 'ÁO SƠ MI CÔNG SỞ NAM MÀU ĐEN – THỜI TRANG CAO CẤP BRAVO', 'SM01', 'ao-so-mi-cong-so-nam-mau-den-thoi-trang-cao-cap-bravo', 'http://localhost/naso/public/uploads/images/oxLHukMCVV.png', NULL, 240, NULL, 720000, '1', 99, 1, '2022-12-30 07:44:42', NULL, 5, NULL, 2),
(3, 'ÁO SƠ MI CÔNG SỞ MÀU XANH THIẾT KẾ TRẺ TRUNG', 'SM02', 'ao-so-mi-cong-so-mau-xanh-thiet-ke-tre-trung', 'http://localhost/naso/public/uploads/images/4qHTvM5Tr7.png', NULL, 240, NULL, 120000, '1', 99, 1, '2022-12-30 07:45:06', NULL, 5, 100, 2),
(17, 'ĐỒNG HỒ NAM JS-009MD JULIUS STAR HÀN QUỐC DÂY THÉP (XANH DƯƠNG)', 'JS-009MD', 'dong-ho-nam-js-009md-julius-star-han-quoc-day-thep-xanh-duong', 'http://localhost/naso/public/uploads/images/MSXh7ljHDZ.jpg', NULL, 100, NULL, 1619000, '1', 100, 1, '2022-12-30 07:43:29', NULL, 7, NULL, NULL),
(18, 'ÁO SƠ MI NAM CỔ TÀU THANH LỊCH', 'SM03', 'ao-so-mi-nam-co-tau-thanh-lich', 'http://localhost/naso/public/uploads/images/KMb7TwbLPF.jpg', NULL, 200, NULL, 720000, '1', NULL, 1, '2022-12-30 07:48:43', NULL, 5, NULL, NULL),
(19, 'ĐỒNG HỒ NỮ JS-035B JULIUS STAR ĐÍNH KIM CƯƠNG (HỒNG)', 'JS-035B', 'dong-ho-nu-js-035b-julius-star-dinh-kim-cuong-hong', 'http://localhost/naso/public/uploads/images/7nHz0tIq2c.jpg', NULL, 1086, NULL, 3259000, '1', NULL, 1, '2022-12-30 07:50:52', NULL, 7, NULL, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_group`
--

CREATE TABLE `product_group` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_show` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product_group`
--

INSERT INTO `product_group` (`id`, `name`, `is_show`, `created_at`, `updated_at`) VALUES
(2, 'Sản phẩm bán chạy', '1', NULL, NULL),
(3, 'Sản phẩm dễ bán', '1', NULL, NULL);

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
(2, 2, '<p>– Áo sơ mi nam thiết kế sang trọng và độc đáo cho sản phẩm</p>\r\n\r\n<p>– Kiểu dáng: slimfit trẻ trung, năng động</p>\r\n\r\n<p>– Đặc tính: thoáng mát, hút ẩm tốt, nhanh khô, sợi vải mềm mịn</p>', '<p>– Áo sơ mi nam thiết kế sang trọng và độc đáo cho sản phẩm</p>\r\n\r\n<p>– Kiểu dáng: slimfit trẻ trung, năng động</p>\r\n\r\n<p>– Đặc tính: thoáng mát, hút ẩm tốt, nhanh khô, sợi vải mềm mịn</p>\r\n\r\n<p><img alt=\"\" src=\"https://quanly.naso.vn/naso/static/uploads/ckeditor/images.thumb.85acb349-637c-40ba-9120-ee97a0632080.jpg\" /></p>\r\n\r\n<p><img alt=\"\" src=\"https://quanly.naso.vn/naso/static/uploads/ckeditor/images.thumb.15d77052-662a-47d8-b7b5-3e978955955e.jpg\" /></p>', 'http://localhost/naso/public/uploads/images/AdN0gaobw1.jpg', '2022-12-30 07:44:42', NULL),
(3, 3, '<p>– Áo sơ mi nam thiết kế sang trọng và độc đáo cho sản phẩm</p>\r\n\r\n<p>– Kiểu dáng: slimfit trẻ trung, năng động</p>\r\n\r\n<p>– Đặc tính: thoáng mát, hút ẩm tốt, nhanh khô, sợi vải mềm mịn</p>', '<p>– Áo sơ mi nam thiết kế sang trọng và độc đáo cho sản phẩm</p>\r\n\r\n<p>– Kiểu dáng: slimfit trẻ trung, năng động</p>\r\n\r\n<p>– Đặc tính: thoáng mát, hút ẩm tốt, nhanh khô, sợi vải mềm mịn</p>\r\n\r\n<p><img alt=\"\" src=\"https://quanly.naso.vn/naso/static/uploads/ckeditor/images.thumb.76f67425-fd3d-4d7e-adbf-3a0926a4cafe.jpg\" /></p>', NULL, '2022-12-30 07:45:06', NULL),
(17, 17, '<p>Đồng Hồ Nam JS-009MD Julius Star Hàn Quốc Dây Thép (Xanh dương)</p>', '<p>JULIUS thương hiệu đăng ký đầu tiên tại Seoul Hàn Quốc, công nghệ Nhật Bản với máy Nhật nhập khẩu 100%. Thiết kế bởi chuyên gia thời trang hàng đầu Hàn Quốc, tiêu chuẩn quốc tế, lắp ráp tại Trung Quốc, bảo hành toàn quốc và quốc tế, chế độ hậu mãi tốt nhất.</p>\r\n\r\n<h2><strong>THÔNG SỐ SẢN PHẨM</strong></h2>\r\n\r\n<p>- Thương hiệu: JULIUS STAR.</p>\r\n\r\n<p>- Mã sản phẩm: JS-009MD (Xanh dương).</p>\r\n\r\n<p>- Dành cho: Nam giới, yêu thích thời trang và phá cách.</p>\r\n\r\n<p>- Chất liệu dây: Dây thép không gỉ.</p>\r\n\r\n<p>- Chất liệu mặt kính: Mặt kính khoáng cao cấp trong suốt rõ nét, độ cứng cao (chống va đập tốt ở mức sinh hoạt hàng ngày).</p>\r\n\r\n<p>- Kích thước bề mặt:3,9cm (Mặt tròn).</p>\r\n\r\n<p>- Độ dày: 0,8cm.</p>\r\n\r\n<p>- Tổng độ dài đồng hồ: 22cm.</p>\r\n\r\n<p>- Độ rộng của dây: 2cm.</p>\r\n\r\n<p>- Kiểu khóa: Nút gài.</p>\r\n\r\n<p>- Chất liệu vỏ máy: Chất liệu Đồng, mạ ion vàng hồng, sử dụng công nghệ mạ IP chân không tiên tiến giúp đem lại độ sáng bóng và bền màu.</p>\r\n\r\n<p>- Máy: Quartz Nhật EPSON VX32 (được sản xuất bởi SEIKO Nhật Bản).</p>\r\n\r\n<p>- Khả năng chịu nước: Chống thấm nước 3ATM (30m) có thể đi mưa, rửa tay, rửa mặt. Tránh tiếp xúc với môi trường hóa chất như giặt đồ, tấm gội.</p>\r\n\r\n<p>- Bảo hành: 12 tháng, hậu mãi 3 năm chi phí thấp sau bảo hành. Đổi mới nếu bị vô nước hoặc lỗi do nhà sản xuất. Thay dây miễn phí 1 lần, thay pin trọn đời, mua phụ kiện giá ưu đãi khi có thẻ bảo hành.</p>\r\n\r\n<p>- Bảo Quản: Lau chùi vệ sinh sản phẩm thường xuyên bằng giấy mền khỏi mồ hôi cơ thể và hạn chế tiếp xúc hóa chất bảo vệ màu sắc sản phẩm và pin sản phẩm lâu dài.</p>\r\n\r\n<p><img alt=\"\" src=\"https://quanly.naso.vn/naso/static/uploads/ckeditor/plugin_ckeditor_upload.upload.8f36bf42b6b0d0e3.4a532d3030394d44352e6a7067.jpg\" /></p>\r\n\r\n<p><img alt=\"\" src=\"https://quanly.naso.vn/naso/static/uploads/ckeditor/plugin_ckeditor_upload.upload.b5acd4cff262033d.4a532d3030394d44362e6a7067.jpg\" /></p>\r\n\r\n<p><img alt=\"\" src=\"https://quanly.naso.vn/naso/static/uploads/ckeditor/plugin_ckeditor_upload.upload.9d76c342d29ea829.4a532d3030394d4431302e6a7067.jpg\" /></p>\r\n\r\n<p><img alt=\"\" src=\"https://quanly.naso.vn/naso/static/uploads/ckeditor/plugin_ckeditor_upload.upload.92f2b52ee71342e6.4a532d3030394d44332d322d373638783735362e6a7067.jpg\" /></p>', 'http://localhost/naso/public/uploads/images/AX9vdjPtQo.jpg,http://localhost/naso/public/uploads/images/SRt6Xxu2kc.jpg', '2022-12-30 07:43:29', NULL),
(18, 18, '<p>– Áo sơ mi nam thiết kế sang trọng và độc đáo cho sản phẩm – Kiểu dáng: slimfit trẻ trung, năng động – Đặc tính: thoáng mát, hút ẩm tốt, nhanh khô, sợi vải mềm mịn</p>', '<p>Áo sơ mi nam dài tay màu trắng thiết kế sang trọng và độc đáo cho sản phẩm. Được làm từ 100% cotton sản phẩm có độ thoáng mát vượt trội cho người mặc.</p>\r\n\r\n<p>– Kiểu dáng: slimfit trẻ trung, năng động</p>\r\n\r\n<p>– Đặc tính: thoáng mát, hút ẩm tốt, nhanh khô, sợi vải mềm mịn</p>\r\n\r\n<p>Hướng dẫn bảo quản áo sơ mi</p>\r\n\r\n<p>– Không phơi dưới ánh nắng gắt</p>\r\n\r\n<p>– Không ủi đồ ở nhiệt độ quá cao</p>\r\n\r\n<p>– Không giặt chung với đồ màu</p>\r\n\r\n<p>– Không sử dụng chất tẩy rửa mạnh</p>\r\n\r\n<p>– Không vò quá mạnh tay</p>\r\n\r\n<p><img alt=\"\" src=\"https://quanly.naso.vn/naso/static/uploads/ckeditor/images.thumb.8274552d-1cc4-4b2a-8426-c982a12b4cc8.jpg\" /></p>\r\n\r\n<p>&nbsp;</p>', 'http://localhost/naso/public/uploads/images/UeTB1pbnLZ.jpg,http://localhost/naso/public/uploads/images/ihFDVwItvU.jpg,http://localhost/naso/public/uploads/images/Ts1AZdAga5.jpg,http://localhost/naso/public/uploads/images/8CzRnlTcTl.jpg', '2022-12-30 07:48:43', NULL),
(19, 19, '<p>Đồng Hồ Nữ JS-035B Julius Star Đính Kim Cương (Hồng)</p>', '<p>JULIUS thương hiệu đăng ký đầu tiên tại Seoul Hàn Quốc, công nghệ Nhật Bản với máy Nhật nhập khẩu 100%. Thiết kế bởi chuyên gia thời trang hàng đầu Hàn Quốc, tiêu chuẩn quốc tế, lắp ráp tại Trung Quốc, bảo hành toàn quốc và quốc tế, chế độ hậu mãi tốt nhất.</p>\r\n\r\n<h2><strong>THÔNG SỐ SẢN PHẨM</strong></h2>\r\n\r\n<p>- Thương hiệu: JULIUS STAR.</p>\r\n\r\n<p>- Mã sản phẩm: JS-035B (Hồng).<br />\r\n- Sản phẩm đính kim cương tự nhiên số 12 giúp điều hòa năng lượng cho người dùng.</p>\r\n\r\n<p>- Dành cho: Nữ giới, yêu thích thời trang và phá cách.</p>\r\n\r\n<p>- Chất liệu dây: Dây thép không gỉ.</p>\r\n\r\n<p>- Chất liệu mặt kính: Mặt kính sapphire chống trầy xước.</p>\r\n\r\n<p>- Kích thước bề mặt: 2cm (Mặt tròn).</p>\r\n\r\n<p>- Độ dày: 0,6cm.</p>\r\n\r\n<p>- Tổng độ dài đồng hồ: 18,5cm.</p>\r\n\r\n<p>- (Size dây) Độ rộng của dây: 0,6cm.</p>\r\n\r\n<p>- Kiểu khóa: Khóa gài.</p>\r\n\r\n<p>- Chất liệu vỏ máy: Vỏ thép không gỉ SS304 mạ ion vàng hồng, sử dụng công nghệ mạ IP chân không tiên tiến giúp đem lại độ sáng bóng và bền màu.</p>\r\n\r\n<p>- Máy: Quartz Nhật MIYOTA 5Y30.</p>\r\n\r\n<p>- Khả năng chịu nước: Chống thấm nước 3ATM (30m) có thể đi mưa, rửa tay, rửa mặt. Tránh tiếp xúc với môi trường hóa chất như giặt đồ, tấm gội.</p>\r\n\r\n<p>- Bảo hành: 12 tháng, hậu mãi 3 năm chi phí thấp sau bảo hành. Thay dây miễn phí 1 lần, thay pin trọn đời, mua phụ kiện giá ưu đãi khi có thẻ bảo hành.</p>\r\n\r\n<p>- Bảo Quản: Lau chùi vệ sinh sản phẩm thường xuyên bằng giấy mền khỏi mồ hôi cơ thể và hạn chế tiếp xúc hóa chất bảo vệ màu sắc sản phẩm và pin sản phẩm lâu dài.</p>\r\n\r\n<p><img alt=\"\" src=\"https://quanly.naso.vn/naso/static/uploads/ckeditor/plugin_ckeditor_upload.upload.9ed2096edd941ab9.342e6a7067.jpg\" /></p>\r\n\r\n<p><img alt=\"\" src=\"https://quanly.naso.vn/naso/static/uploads/ckeditor/plugin_ckeditor_upload.upload.9a51af2b0407c9f4.612e706e67.png\" /></p>\r\n\r\n<p><img alt=\"\" src=\"https://quanly.naso.vn/naso/static/uploads/ckeditor/plugin_ckeditor_upload.upload.a75f2ebc04960833.6a732d303335625f6669782e6a7067.jpg\" /></p>\r\n\r\n<p><img alt=\"\" src=\"https://quanly.naso.vn/naso/static/uploads/ckeditor/plugin_ckeditor_upload.upload.afd530a63f0514ab.4a532d303335e5beaee4bfa1372e6a7067.jpg\" /></p>\r\n\r\n<p><img alt=\"\" src=\"https://quanly.naso.vn/naso/static/uploads/ckeditor/plugin_ckeditor_upload.upload.9e6dfa5140613fce.4a532d303335e5beaee4bfa1382e6a7067.jpg\" /></p>\r\n\r\n<p><img alt=\"\" src=\"https://quanly.naso.vn/naso/static/uploads/ckeditor/plugin_ckeditor_upload.upload.9fe5c7cea811216d.4a532d303335e5beaee4bfa1392e6a7067.jpg\" /></p>', NULL, '2022-12-30 07:50:52', NULL);

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
(5, 'Bravo', 'http://localhost/naso/public/uploads/images/hEthiIuBIS.png', '0941666637', 'Số 84 Mai Hắc Đế – Phường Hà Huy Tập – Thành Phố Vinh – Nghệ An', NULL, '2022-12-29 23:28:19', NULL),
(6, 'Finish', 'http://localhost/naso/public/uploads/images/KYn5bINAEz.png', '0862468366', 'Tầng 11, Toà nhà Việt Á, Số 9 Duy Tân, P.Dịch Vọng Hậu, Q.Cầu Giấy, TP. HN', NULL, '2022-12-29 23:28:38', NULL),
(7, 'Julius', 'http://localhost/naso/public/uploads/images/3VwxjR4E1B.png', '0961987800', 'Tầng 1, Tòa nhà Packsimex, 52 Đông Du, Phường Bến Nghé, Quận 1, TP. HCM', NULL, '2022-12-29 23:29:08', NULL);

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
(1, 'Thời trang', 'product_cat', NULL, 1, 2, NULL, '2022-12-30 07:41:39', NULL, 'http://localhost/naso/public/uploads/images/ps4FfttuM1.png', NULL, 'thoi-trang', NULL, NULL),
(24, 'Thực phẩm bổ sung', 'product_cat', NULL, 3, 4, NULL, '2022-12-30 07:41:51', NULL, 'http://localhost/naso/public/uploads/images/fKPyfoe6on.png', NULL, 'thuc-pham-bo-sung', 'Thực phẩm bổ sung', NULL),
(25, 'Nhà cửa & đời sống', 'product_cat', NULL, 5, 6, NULL, '2022-12-30 07:42:05', NULL, 'http://localhost/naso/public/uploads/images/0j77ZjNlm7.png', NULL, 'nha-cua-and-doi-song', 'Nhà cửa & đời sống', NULL),
(26, 'Làm đẹp', 'product_cat', NULL, 7, 8, NULL, '2022-12-30 07:42:18', NULL, 'http://localhost/naso/public/uploads/images/AoMUHYzoPa.png', NULL, 'lam-dep', 'Làm đẹp', NULL),
(27, 'Đồng hồ', 'product_cat', NULL, 9, 10, NULL, '2022-12-30 07:42:32', NULL, 'http://localhost/naso/public/uploads/images/75bhVxtg5r.png', NULL, 'dong-ho', 'Đồng hồ', NULL);

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
(50, 3, 1, NULL, NULL, NULL, 'main'),
(53, 2, 1, NULL, NULL, NULL, 'main'),
(56, 17, 1, NULL, NULL, NULL, 'main'),
(57, 17, 24, NULL, NULL, NULL, 'second'),
(58, 17, 25, NULL, NULL, NULL, 'second'),
(59, 18, 1, NULL, NULL, NULL, 'main'),
(60, 19, 1, NULL, NULL, NULL, 'main');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `upload`
--

CREATE TABLE `upload` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `caption` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumb` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` int(11) DEFAULT NULL,
  `disk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `folder_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `folder` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `newtime` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `upload`
--

INSERT INTO `upload` (`id`, `type`, `title`, `caption`, `url`, `thumb`, `time`, `size`, `disk`, `folder_id`, `folder`, `newtime`, `created_at`, `updated_at`) VALUES
(18, 'jpg', 'o0OSYhiseb.jpg', 'o0OSYhiseb.jpg', 'http://localhost/naso/public/uploads/images/o0OSYhiseb.jpg', 'http://localhost/naso/public/uploads/images/o0OSYhiseb.jpg', '1672378854', 125716, 'public', '0', NULL, '2022-12-30 05:40:54', NULL, NULL),
(19, 'png', 'KBJ78394QW.png', 'KBJ78394QW.png', '/KBJ78394QW.png', 'http://localhost/naso/public/uploads/images/KBJ78394QW.png', '1672379044', 7091, 'public', '0', NULL, '2022-12-30 05:44:04', NULL, NULL),
(20, 'jpg', 'AdN0gaobw1.jpg', 'AdN0gaobw1.jpg', 'http://localhost/naso/public/uploads/images/AdN0gaobw1.jpg', 'http://localhost/naso/public/uploads/images/AdN0gaobw1.jpg', '1672379083', 689376, 'public', '0', NULL, '2022-12-30 05:44:43', NULL, NULL),
(21, 'png', 'qJwL9isHM1.png', 'qJwL9isHM1.png', 'http://localhost/naso/public/uploads/images/qJwL9isHM1.png', 'http://localhost/naso/public/uploads/images/qJwL9isHM1.png', '1672379104', 20067, 'public', '0', NULL, '2022-12-30 05:45:04', NULL, NULL),
(22, 'jpg', 'WVbTUlzEFU.jpg', 'WVbTUlzEFU.jpg', 'http://localhost/naso/public/uploads/images/WVbTUlzEFU.jpg', 'http://localhost/naso/public/uploads/images/WVbTUlzEFU.jpg', '1672380219', 125716, 'public', '0', NULL, '2022-12-30 06:03:39', NULL, NULL),
(23, 'png', 'hEthiIuBIS.png', 'hEthiIuBIS.png', 'http://localhost/naso/public/uploads/images/hEthiIuBIS.png', 'http://localhost/naso/public/uploads/images/hEthiIuBIS.png', '1672381686', 20279, 'public', '0', NULL, '2022-12-30 06:28:06', NULL, NULL),
(24, 'png', 'KYn5bINAEz.png', 'KYn5bINAEz.png', 'http://localhost/naso/public/uploads/images/KYn5bINAEz.png', 'http://localhost/naso/public/uploads/images/KYn5bINAEz.png', '1672381714', 39177, 'public', '0', NULL, '2022-12-30 06:28:34', NULL, NULL),
(25, 'png', '3VwxjR4E1B.png', '3VwxjR4E1B.png', 'http://localhost/naso/public/uploads/images/3VwxjR4E1B.png', 'http://localhost/naso/public/uploads/images/3VwxjR4E1B.png', '1672381746', 45019, 'public', '0', NULL, '2022-12-30 06:29:06', NULL, NULL),
(26, 'jpg', 'MSXh7ljHDZ.jpg', 'MSXh7ljHDZ.jpg', 'http://localhost/naso/public/uploads/images/MSXh7ljHDZ.jpg', 'http://localhost/naso/public/uploads/images/MSXh7ljHDZ.jpg', '1672400985', 34247, 'public', '0', NULL, '2022-12-30 11:49:45', NULL, NULL),
(27, 'jpg', 'SRt6Xxu2kc.jpg', 'SRt6Xxu2kc.jpg', 'http://localhost/naso/public/uploads/images/SRt6Xxu2kc.jpg', 'http://localhost/naso/public/uploads/images/SRt6Xxu2kc.jpg', '1672400999', 540880, 'public', '0', NULL, '2022-12-30 11:49:59', NULL, NULL),
(28, 'jpg', 'AX9vdjPtQo.jpg', 'AX9vdjPtQo.jpg', 'http://localhost/naso/public/uploads/images/AX9vdjPtQo.jpg', 'http://localhost/naso/public/uploads/images/AX9vdjPtQo.jpg', '1672401004', 413745, 'public', '0', NULL, '2022-12-30 11:50:04', NULL, NULL),
(29, 'png', 'ps4FfttuM1.png', 'ps4FfttuM1.png', 'http://localhost/naso/public/uploads/images/ps4FfttuM1.png', 'http://localhost/naso/public/uploads/images/ps4FfttuM1.png', '1672411296', 2912, 'public', '0', NULL, '2022-12-30 14:41:36', NULL, NULL),
(30, 'png', 'fKPyfoe6on.png', 'fKPyfoe6on.png', 'http://localhost/naso/public/uploads/images/fKPyfoe6on.png', 'http://localhost/naso/public/uploads/images/fKPyfoe6on.png', '1672411308', 3057, 'public', '0', NULL, '2022-12-30 14:41:48', NULL, NULL),
(31, 'png', '0j77ZjNlm7.png', '0j77ZjNlm7.png', 'http://localhost/naso/public/uploads/images/0j77ZjNlm7.png', 'http://localhost/naso/public/uploads/images/0j77ZjNlm7.png', '1672411320', 3710, 'public', '0', NULL, '2022-12-30 14:42:00', NULL, NULL),
(32, 'png', 'AoMUHYzoPa.png', 'AoMUHYzoPa.png', 'http://localhost/naso/public/uploads/images/AoMUHYzoPa.png', 'http://localhost/naso/public/uploads/images/AoMUHYzoPa.png', '1672411335', 3715, 'public', '0', NULL, '2022-12-30 14:42:15', NULL, NULL),
(33, 'png', '75bhVxtg5r.png', '75bhVxtg5r.png', 'http://localhost/naso/public/uploads/images/75bhVxtg5r.png', 'http://localhost/naso/public/uploads/images/75bhVxtg5r.png', '1672411349', 35148, 'public', '0', NULL, '2022-12-30 14:42:29', NULL, NULL),
(34, 'png', 'oxLHukMCVV.png', 'oxLHukMCVV.png', 'http://localhost/naso/public/uploads/images/oxLHukMCVV.png', 'http://localhost/naso/public/uploads/images/oxLHukMCVV.png', '1672411478', 451888, 'public', '0', NULL, '2022-12-30 14:44:38', NULL, NULL),
(35, 'png', '4qHTvM5Tr7.png', '4qHTvM5Tr7.png', 'http://localhost/naso/public/uploads/images/4qHTvM5Tr7.png', 'http://localhost/naso/public/uploads/images/4qHTvM5Tr7.png', '1672411503', 400942, 'public', '0', NULL, '2022-12-30 14:45:03', NULL, NULL),
(36, 'jpg', 'KMb7TwbLPF.jpg', 'KMb7TwbLPF.jpg', 'http://localhost/naso/public/uploads/images/KMb7TwbLPF.jpg', 'http://localhost/naso/public/uploads/images/KMb7TwbLPF.jpg', '1672411625', 79834, 'public', '0', NULL, '2022-12-30 14:47:05', NULL, NULL),
(37, 'jpg', '9JT5xrimHl.jpg', '9JT5xrimHl.jpg', 'http://localhost/naso/public/uploads/images/9JT5xrimHl.jpg', 'http://localhost/naso/public/uploads/images/9JT5xrimHl.jpg', '1672411648', 87180, 'public', '0', NULL, '2022-12-30 14:47:28', NULL, NULL),
(38, 'jpg', '8CzRnlTcTl.jpg', '8CzRnlTcTl.jpg', 'http://localhost/naso/public/uploads/images/8CzRnlTcTl.jpg', 'http://localhost/naso/public/uploads/images/8CzRnlTcTl.jpg', '1672411653', 87180, 'public', '0', NULL, '2022-12-30 14:47:33', NULL, NULL),
(39, 'jpg', 'Ts1AZdAga5.jpg', 'Ts1AZdAga5.jpg', 'http://localhost/naso/public/uploads/images/Ts1AZdAga5.jpg', 'http://localhost/naso/public/uploads/images/Ts1AZdAga5.jpg', '1672411656', 80358, 'public', '0', NULL, '2022-12-30 14:47:36', NULL, NULL),
(40, 'jpg', 'ihFDVwItvU.jpg', 'ihFDVwItvU.jpg', 'http://localhost/naso/public/uploads/images/ihFDVwItvU.jpg', 'http://localhost/naso/public/uploads/images/ihFDVwItvU.jpg', '1672411659', 75068, 'public', '0', NULL, '2022-12-30 14:47:39', NULL, NULL),
(41, 'jpg', 'UeTB1pbnLZ.jpg', 'UeTB1pbnLZ.jpg', 'http://localhost/naso/public/uploads/images/UeTB1pbnLZ.jpg', 'http://localhost/naso/public/uploads/images/UeTB1pbnLZ.jpg', '1672411660', 92257, 'public', '0', NULL, '2022-12-30 14:47:40', NULL, NULL),
(42, 'jpg', '7nHz0tIq2c.jpg', '7nHz0tIq2c.jpg', 'http://localhost/naso/public/uploads/images/7nHz0tIq2c.jpg', 'http://localhost/naso/public/uploads/images/7nHz0tIq2c.jpg', '1672411838', 31449, 'public', '0', NULL, '2022-12-30 14:50:38', NULL, NULL);

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
  `group_id` bigint(20) UNSIGNED DEFAULT NULL,
  `aff_number` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `avatar`, `password`, `email`, `birthday`, `gender`, `address`, `phone`, `code`, `token`, `secret`, `parent_id`, `role`, `status`, `created_at`, `group_id`, `aff_number`) VALUES
(1, 'Duy Anh 123', 'anhnnd123', NULL, '4c09e741d5ffd6e5d7163ee6540b8b5f', 'anhnnd.hotro@gmail.com', NULL, NULL, NULL, NULL, 'NS349153', 'S6Pp5NVMiFMX8fEmuJhIT0mxZqDYvV1B7q8EF2Ha', NULL, '', 'user', 'active', '2022-12-27 10:14:58', NULL, 6),
(2, 'Duy Anh', 'admin', NULL, 'e10adc3949ba59abbe56e057f20f883e', 'anhnnd.hotro@gmail.com', NULL, NULL, NULL, NULL, 'NS349153', 'S6Pp5NVMiFMX8fEmuJhIT0mxZqDYvV1B7q8EF2Ha', NULL, '', 'admin', 'active', '2022-12-27 10:14:58', NULL, NULL),
(3, 'Paul Nguyễn', 'paulnguyen', NULL, 'e10adc3949ba59abbe56e057f20f883e', 'paulnguyen.moondigi@gmail.com', NULL, NULL, NULL, NULL, 'NS564539', 'lRKLISGLinjiWnP9JHSsDz65wx68pYZKxWF48CU3', NULL, '', 'user', 'active', '2022-12-29 07:41:07', NULL, NULL);

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
  ADD KEY `product_supplier_id_foreign` (`supplier_id`),
  ADD KEY `product_product_group_id_foreign` (`product_group_id`);

--
-- Chỉ mục cho bảng `product_group`
--
ALTER TABLE `product_group`
  ADD PRIMARY KEY (`id`);

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
-- Chỉ mục cho bảng `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT cho bảng `order`
--
ALTER TABLE `order`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `payment_history`
--
ALTER TABLE `payment_history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `product_group`
--
ALTER TABLE `product_group`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `product_meta`
--
ALTER TABLE `product_meta`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `taxonomy`
--
ALTER TABLE `taxonomy`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `taxonomy_relationship`
--
ALTER TABLE `taxonomy_relationship`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT cho bảng `upload`
--
ALTER TABLE `upload`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

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
  ADD CONSTRAINT `product_product_group_id_foreign` FOREIGN KEY (`product_group_id`) REFERENCES `product_group` (`id`) ON DELETE CASCADE,
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
