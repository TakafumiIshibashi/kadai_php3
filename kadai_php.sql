-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost
-- 生成日時: 2021 年 6 月 07 日 19:59
-- サーバのバージョン： 10.4.19-MariaDB
-- PHP のバージョン: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `gsacf_L05_15`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `kadai_php`
--

CREATE TABLE `kadai_php` (
  `id` int(12) NOT NULL,
  `name1` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` int(4) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `icon` blob NOT NULL,
  `is_admin` int(1) NOT NULL,
  `is_deleted` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `kadai_php`
--

INSERT INTO `kadai_php` (`id`, `name1`, `level`, `created_at`, `updated_at`, `icon`, `is_admin`, `is_deleted`) VALUES
(1, '石橋', 1, '2021-06-03 12:01:59', '2021-06-03 12:01:59', '', 0, 0),
(2, '吉田', 1, '2021-06-03 12:05:27', '2021-06-03 12:05:27', '', 0, 0),
(3, '山田', 1, '2021-06-03 15:55:42', '2021-06-03 15:55:42', '', 0, 0),
(4, '岡田', 1, '2021-06-03 17:28:49', '2021-06-03 17:28:49', '', 0, 0),
(5, '岡田', 1, '2021-06-03 17:36:22', '2021-06-03 17:36:22', '', 0, 0),
(6, '岡田', 1, '2021-06-03 17:45:11', '2021-06-03 17:45:11', '', 0, 1),
(7, '岡田', 1, '2021-06-03 18:02:15', '2021-06-03 18:02:15', 0x4e554c4c, 0, 1),
(8, '中西', 1, '2021-06-03 18:09:32', '2021-06-03 18:09:32', 0x4e554c4c, 0, 0),
(9, '大木', 1, '2021-06-03 23:02:48', '2021-06-03 23:02:48', 0x4e554c4c, 0, 0),
(10, '増田', 1, '2021-06-03 23:50:21', '2021-06-03 23:50:21', 0x4e554c4c, 0, 0),
(11, '横山', 1, '2021-06-04 01:25:30', '2021-06-04 01:25:30', 0x4e554c4c, 0, 0),
(12, '福岡', 1, '2021-06-04 02:25:47', '2021-06-04 02:25:47', 0x4e554c4c, 0, 0),
(13, '佐賀', 1, '2021-06-04 13:09:20', '2021-06-04 13:09:20', 0x4e554c4c, 0, 0),
(14, '沖縄', 1, '2021-06-04 14:14:46', '2021-06-04 14:14:46', 0x4e554c4c, 0, 0),
(15, '鷲崎', 1, '2021-06-08 00:59:11', '2021-06-08 00:59:11', 0x4e554c4c, 0, 1),
(16, 'ゴーヤ', 1, '2021-06-08 02:06:37', '2021-06-08 02:06:37', 0x4e554c4c, 0, 1),
(17, '岡田', 1, '2021-06-08 02:25:20', '2021-06-08 02:25:20', 0x4e554c4c, 0, 1),
(18, 'きゅうり', 1, '2021-06-08 02:45:11', '2021-06-08 02:45:11', 0x4e554c4c, 0, 1);

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `kadai_php`
--
ALTER TABLE `kadai_php`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `kadai_php`
--
ALTER TABLE `kadai_php`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
