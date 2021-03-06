-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost
-- 生成日時: 2022 年 6 月 03 日 02:47
-- サーバのバージョン： 10.4.21-MariaDB
-- PHP のバージョン: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `review_base`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `like_table`
--

CREATE TABLE `like_table` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `like_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- テーブルのデータのダンプ `like_table`
--

INSERT INTO `like_table` (`id`, `user_id`, `like_id`, `created_at`) VALUES
(14, 18, 34, '2022-06-02 19:52:13'),
(15, 18, 32, '2022-06-02 19:52:39'),
(16, 18, 33, '2022-06-02 19:52:49'),
(19, 2, 35, '2022-06-02 19:56:00'),
(20, 2, 38, '2022-06-02 19:56:07'),
(35, 2, 34, '2022-06-02 20:53:08'),
(37, 2, 32, '2022-06-02 21:10:14'),
(43, 3, 34, '2022-06-02 21:49:11'),
(159, 19, 34, '2022-06-02 23:37:42'),
(165, 19, 39, '2022-06-02 23:46:57'),
(169, 17, 32, '2022-06-03 00:04:54'),
(189, 17, 33, '2022-06-03 00:25:51'),
(194, 19, 40, '2022-06-03 01:29:08'),
(197, 17, 40, '2022-06-03 01:49:44'),
(199, 17, 34, '2022-06-03 01:56:12'),
(201, 17, 37, '2022-06-03 01:58:18'),
(202, 17, 38, '2022-06-03 02:31:21'),
(203, 17, 35, '2022-06-03 02:31:31'),
(205, 17, 36, '2022-06-03 02:35:41'),
(206, 19, 33, '2022-06-03 02:39:21'),
(207, 19, 41, '2022-06-03 02:41:08'),
(208, 19, 36, '2022-06-03 02:41:28'),
(210, 19, 35, '2022-06-03 02:42:00'),
(211, 18, 41, '2022-06-03 02:42:32');

-- --------------------------------------------------------

--
-- テーブルの構造 `shops`
--

CREATE TABLE `shops` (
  `shops_id` int(11) NOT NULL,
  `reviewer_name` varchar(256) COLLATE utf8mb4_bin NOT NULL,
  `shop_name` varchar(64) COLLATE utf8mb4_bin NOT NULL,
  `tel` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `genre` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `word` text COLLATE utf8mb4_bin NOT NULL,
  `time` datetime NOT NULL,
  `img` varchar(128) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- テーブルのデータのダンプ `shops`
--

INSERT INTO `shops` (`shops_id`, `reviewer_name`, `shop_name`, `tel`, `url`, `address`, `genre`, `word`, `time`, `img`) VALUES
(2, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]', '[value-7]', '[value-8]', '2022-05-30 13:35:53', '[value-10]'),
(3, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]', '[value-7]', '[value-8]', '2022-05-30 13:35:53', '[value-10]'),
(4, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]', '[value-7]', '[value-8]', '2022-05-30 13:35:53', '[value-10]'),
(5, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]', '[value-7]', '[value-8]', '2022-05-30 13:35:53', '[value-10]'),
(6, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]', '[value-7]', '[value-8]', '2022-05-30 13:35:53', '[value-10]'),
(7, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]', '[value-7]', '[value-8]', '2022-05-30 13:35:53', '[value-10]'),
(8, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]', '[value-7]', '[value-8]', '2022-05-30 13:35:53', '[value-10]'),
(9, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]', '[value-7]', '[value-8]', '2022-05-30 13:35:53', '[value-10]'),
(10, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]', '[value-7]', '[value-8]', '2022-05-30 13:35:53', '[value-10]'),
(11, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]', '[value-7]', '[value-8]', '2022-05-30 13:35:53', '[value-10]'),
(12, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]', '[value-7]', '[value-8]', '2022-05-30 13:35:53', '[value-10]'),
(13, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]', '[value-7]', '[value-8]', '2022-05-30 13:35:53', '[value-10]'),
(14, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]', '[value-7]', '[value-8]', '2022-05-30 13:35:53', '[value-10]'),
(18, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]', '[value-7]', '[value-8]', '2022-05-30 13:35:53', '[value-10]'),
(19, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]', '[value-7]', '[value-8]', '2022-05-30 13:35:53', '[value-10]'),
(20, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]', '[value-7]', '[value-8]', '2022-05-30 13:35:53', '[value-10]'),
(21, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]', '[value-7]', '[value-8]', '2022-05-30 13:35:53', '[value-10]'),
(22, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]', '[value-7]', '[value-8]', '2022-05-30 13:35:53', '[value-10]'),
(23, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]', '[value-7]', '[value-8]', '2022-05-30 13:35:53', '[value-10]'),
(24, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]', '[value-7]', '[value-8]', '2022-05-30 13:35:53', '[value-10]'),
(25, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]', '[value-7]', '[value-8]', '2022-05-30 13:35:53', '[value-10]'),
(26, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]', '[value-7]', '[value-8]', '2022-05-30 13:35:53', '[value-10]'),
(27, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]', '[value-7]', '[value-8]', '2022-05-30 13:35:53', '[value-10]'),
(28, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]', '[value-7]', '[value-8]', '2022-05-30 13:35:53', '[value-10]'),
(29, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]', '[value-7]', '[value-8]', '2022-05-30 13:35:53', '[value-10]'),
(30, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]', '[value-7]', '[value-8]', '2022-05-30 13:35:53', '[value-10]'),
(31, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]', '[value-7]', '[value-8]', '2022-05-30 13:35:53', '[value-10]'),
(32, 'なすび', 'okonomiyaki', '999-9999-9999', 'https://www.shop-west.jp/', 'hakata', '和食', 'good', '2022-05-30 13:44:53', 'k3.jpg'),
(33, 'user1 さん', 'ラーメン博多二号', '999-9999-9999', 'https://www.shop-west.jp/', '福岡天神', '中華', 'ラーメン博多二号店', '2022-05-31 07:05:37', 'k1.jpg'),
(34, 'abema-tsu さん', 'sushi市場', '999-9999-9999', 'https:ooo', '福岡天神', '和食', '新鮮な川魚料理がうまい', '2022-05-31 09:42:59', 'j1.jpg'),
(35, 'abema-tsu さん', 'うまい店', '999-9999-9999', 'https:ooo', '福岡天神', 'フレンチ', '美味しいです', '2022-05-31 13:35:15', 'f1.jpg'),
(36, 'abema-tsu さん', 'イタリア', '999-9999-9999', 'https:ooo', '福岡天神', 'イタリアン', '美味しいです', '2022-05-31 14:58:00', 'i2.jpg'),
(37, 'abema-tsu さん', 'okonomiyaki', '999-9999-9999', 'https:ooo', '福岡', 'その他', '美味しいです', '2022-05-31 20:08:22', 'k1.jpg'),
(38, 'abema-tsu さん', '美味しい店', '999-9999-9999', 'https:ooo', 'hakata', 'フレンチ', '新鮮な川魚料理がうまい', '2022-05-31 20:09:09', 'f1.jpg'),
(39, 'abema-tsu さん', 'ただたかのお店', '999-9999-9999', 'https:ooo', '福岡天神', '韓国料理', 'very good', '2022-05-31 22:01:43', 'img1.jpg'),
(40, 'abema-tsu さん', '美味しっす', '999-9999-9999', 'https://www.shop-west.jp/', '福岡天神', '和食', '和食のお店', '2022-06-03 00:07:27', 'j2.jpg'),
(41, 'ただたか さん', '寿司天国', '999-9999-9999', 'https://www.shop-west.jp/', '福岡天神', '和食', '新鮮な川魚料理がうまい', '2022-06-03 02:40:47', 'j3.jpg');

-- --------------------------------------------------------

--
-- テーブルの構造 `shop_no`
--

CREATE TABLE `shop_no` (
  `id` int(11) NOT NULL,
  `shops_no` int(11) NOT NULL,
  `shop_name` varchar(128) COLLATE utf8mb4_bin NOT NULL,
  `genre` varchar(128) COLLATE utf8mb4_bin NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `text` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- テーブルのデータのダンプ `shop_no`
--

INSERT INTO `shop_no` (`id`, `shops_no`, `shop_name`, `genre`, `name`, `text`, `time`) VALUES
(6, 10, '', '', 'abe', '水炊きの出汁が美味しい', '2022-05-24 08:54:19'),
(7, 3, '', '', 'あべまつ', 'とっても美味しかったです', '2022-05-24 09:11:31'),
(9, 3, '', '', 'あべまつ', '美味しいお店です', '2022-05-24 09:47:15'),
(10, 3, '', '', 'あべ松啓介', 'とにかく美味しいです', '2022-05-24 09:55:12'),
(12, 6, '', '', 'あべ松啓介', '美味しい', '2022-05-24 10:20:55'),
(14, 3, '', '', 'あべ松啓介', '美味しいです', '2022-05-24 13:30:23'),
(16, 4, '', '', 'あべ松啓介', 'oisii', '2022-05-24 14:29:59'),
(17, 7, '', '', 'abe', '美味しいですよ', '2022-05-24 16:21:11'),
(18, 4, '', '', '松本潤', '今日も美味しいです', '2022-05-26 16:11:34'),
(19, 4, '', '', 'abe', '美味しいな', '2022-05-26 16:21:29'),
(20, 10, '', '', '松本潤', '３回目の利用ですがいつもクオリティー高めでgood', '2022-05-26 16:29:43'),
(21, 10, '', '', 'gurume', 'またきます！', '2022-05-26 16:34:25'),
(22, 10, '', '', '松本潤', '4回目の利用でいつもハッピーです', '2022-05-26 16:50:15'),
(23, 10, '', '', 'グルメ太郎', 'ここはおすすめです。\r\n私のセカンドハウス', '2022-05-26 16:58:19'),
(24, 4, '', '', 'gagagaga', 'ここは私のセカンドハウス', '2022-05-26 16:59:47'),
(26, 10, '', '', 'あべまつ', '私もセカンドハウス', '2022-05-26 17:04:29'),
(27, 10, '', '', '松本潤', '５回目の利用です', '2022-05-26 17:10:19'),
(31, 10, '', '', '茄子', '初めまして', '2022-05-26 17:14:57'),
(35, 10, '', '', 'NAS', '本当に感動', '2022-05-26 17:37:28'),
(36, 10, '', '', 'あべまつ', '感動の連続です', '2022-05-26 17:39:51'),
(37, 10, '', '', 'あべまつ', '感動の連続です', '2022-05-26 17:40:41'),
(38, 10, '', '', '松本潤', '感動の連続いいですね', '2022-05-26 18:07:52'),
(39, 10, '', '', '松本潤', '感動の連続いいですね', '2022-05-26 18:08:50'),
(40, 10, '', '', '松本潤', '感動の連続いいですね', '2022-05-26 18:10:05'),
(41, 10, '', '', '松本潤', '感動の連続いいですね', '2022-05-26 18:10:13'),
(42, 10, '', '', '松本潤', '感動の連続いいですね', '2022-05-26 18:12:50'),
(43, 10, '', '', '松本潤', '感動の連続いいですね', '2022-05-26 18:14:55'),
(44, 10, '', '', '松本潤', '感動の連続いいですね', '2022-05-26 18:16:54'),
(45, 10, '', '', '松本潤', '感動の連続いいですね', '2022-05-26 18:17:48'),
(48, 10, '', '', 'あべまつ', '今日は誕生日ですので利用しました', '2022-05-26 18:19:07'),
(49, 10, '', '', 'abe', '３回目の利用', '2022-05-26 18:20:29'),
(50, 10, '', '', '松本潤', 'いつもありがとうございます', '2022-05-26 18:20:53'),
(51, 10, '', '', 'はなまる', 'ここはひたすら口コミ多いですね\r\n美味しかったです', '2022-05-26 18:23:07'),
(52, 4, '', '', '松本潤', '今回３回目', '2022-05-26 18:37:26'),
(53, 1, '', '', '松本潤', '始めてきました。\r\nパンが美味しいですね。', '2022-05-26 18:40:08'),
(54, 3, '', '', '焼肉好きな人', 'キムチ最高', '2022-05-26 18:41:00'),
(55, 11, '', '', '松本潤', 'この出汁最高', '2022-05-26 18:42:07'),
(56, 12, '', '', 'あべまつ', 'ネタが新鮮', '2022-05-26 18:42:32'),
(57, 12, '', '', 'コメ好き', 'コメ美味しいと思ったら\r\n伊佐米使っていて\r\n一瞬でファンになりました。', '2022-05-26 18:45:11'),
(58, 16, '', '', '松本潤', 'いつも小うどん食べます', '2022-05-26 19:26:28'),
(59, 17, '', '', '松本潤', 'ここほんと美味しいです', '2022-05-26 20:52:39'),
(60, 17, '', '', 'あべ松啓介', '口コミで美味しいと言っていたけど\r\nその通りです', '2022-05-26 20:53:09'),
(61, 2, '', '', '松本潤', '僕の行きつけの店です', '2022-05-26 20:53:53'),
(64, 16, '', '', 'NAS', '3杯いけます', '2022-05-27 04:17:44'),
(65, 17, '', '', 'ミシマン', 'いつも利用しています。\r\nとても美味しい体験をありがとう', '2022-05-27 09:51:19'),
(69, 12, '', '', '松本潤', '美味しいでした', '2022-05-27 14:39:24'),
(70, 26, '', '', 'NAS', 'とっても美味しいです', '2022-05-30 02:48:21'),
(71, 27, '', '', 'abe', 'おすすめのお店です', '2022-05-30 08:22:44'),
(72, 27, '', '', '松本潤', 'ここは初めてでしたが、気に入りました', '2022-05-30 08:23:04'),
(73, 27, '', '', 'あべまつ', 'キムチが美味しい', '2022-05-30 08:23:13'),
(74, 27, '', '', 'NAS', 'ここの辛さがたまらない', '2022-05-30 08:23:42'),
(75, 27, '', '', 'watasi', 'いつもここにきてしまう', '2022-05-30 08:24:00'),
(76, 27, '', '', 'abe', '毎回家族で来ています', '2022-05-30 08:24:17'),
(77, 27, '', '', '松本潤', 'ランチも美味しい', '2022-05-30 08:24:32'),
(78, 27, '', '', 'ミシマん', '店員さんが親切', '2022-05-30 08:25:02'),
(79, 27, '', '', 'あべまつ', 'また来ました。いつもありがとう', '2022-05-30 08:26:09'),
(80, 27, 'コリアン天国', '韓国料理', '松本潤', '今回で２回目です', '2022-05-30 09:03:11'),
(81, 28, '潮騒', '和食', 'abe', '美味しいです', '2022-05-30 09:09:38'),
(82, 28, '潮騒', '和食', '松本潤', '美味しいです', '2022-05-30 09:09:48'),
(83, 28, '潮騒', '和食', 'watasi', '美味しいです', '2022-05-30 09:09:58'),
(84, 28, '潮騒', '和食', 'NAS', '美味しいです', '2022-05-30 09:10:08'),
(85, 28, '潮騒', '和食', '松本潤', '２回目です', '2022-05-30 09:10:19'),
(86, 28, '潮騒', '和食', '松本潤', '３回目です', '2022-05-30 09:10:28'),
(87, 28, '潮騒', '和食', 'NAS', '２回目です', '2022-05-30 09:10:43'),
(88, 28, '潮騒', '和食', 'abe', '美味しいです', '2022-05-30 09:10:59'),
(89, 4, '北京飯店博多', '中華', '松本潤', 'チャーハンが美味しい', '2022-05-30 10:01:35'),
(90, 29, 'フレンチ一筋', 'フレンチ', '松本潤', '初めての利用で\r\n大満足', '2022-05-30 10:06:19'),
(92, 32, 'okonomiyaki', '和食', 'abe', '美味しいです', '2022-05-31 08:13:40'),
(93, 33, 'ラーメン博多二号', '中華', '松本潤', 'oisii', '2022-05-31 08:26:23'),
(94, 33, 'ラーメン博多二号', '中華', 'user1', '美味しいです', '2022-05-31 08:29:50'),
(95, 33, 'ラーメン博多二号', '中華', 'watasi', '美味しいです', '2022-05-31 08:31:11'),
(96, 32, 'okonomiyaki', '和食', 'abe', '美味しいです', '2022-05-31 08:32:32'),
(97, 32, 'okonomiyaki', '和食', 'abe', '美味しいです', '2022-05-31 08:34:38'),
(98, 32, 'okonomiyaki', '和食', 'abe', '美味しいです', '2022-05-31 08:35:15'),
(99, 32, 'okonomiyaki', '和食', 'abe', '美味しいです', '2022-05-31 08:36:43'),
(100, 32, 'okonomiyaki', '和食', 'abe', '美味しいです', '2022-05-31 08:36:49'),
(101, 32, 'okonomiyaki', '和食', 'abe', '美味しいです', '2022-05-31 08:37:07'),
(102, 32, 'okonomiyaki', '和食', '松本潤', '美味しいです', '2022-05-31 08:37:22'),
(103, 32, 'okonomiyaki', '和食', 'あべまつ', '肉が美味しいです', '2022-05-31 08:39:17'),
(104, 32, 'okonomiyaki', '和食', 'user1(1)', '美味しいです', '2022-05-31 08:44:21'),
(105, 32, 'okonomiyaki', '和食', 'user1(1)', 'とっても美味しいです', '2022-05-31 08:44:40'),
(106, 34, 'sushi市場', '和食', 'abema-tsu', 'ここは美味しいです', '2022-05-31 09:43:19'),
(107, 32, 'okonomiyaki', '和食', 'abema-tsu', 'ここは行きつけのお店です\r\n\r\n', '2022-05-31 13:34:06'),
(108, 35, 'うまい店', 'フレンチ', 'abema-tsu', 'うまいです', '2022-05-31 13:35:27'),
(109, 34, 'sushi市場', '和食', 'abema-tsu', '美味しいです', '2022-05-31 14:57:10'),
(110, 34, 'sushi市場', '和食', 'abema-tsu', '美味しい', '2022-05-31 20:07:15'),
(111, 34, 'sushi市場', '和食', 'abema-tsu', 'まずい', '2022-05-31 20:07:25'),
(112, 34, 'sushi市場', '和食', 'abema-tsu', '美味しくない', '2022-05-31 20:07:39'),
(113, 38, '美味しい店', 'フレンチ', 'abema-tsu', '美味しい', '2022-05-31 20:09:31'),
(114, 39, 'ただたかのお店', '韓国料理', 'abema-tsu', 'ホテルみたいなお店です', '2022-05-31 22:02:12'),
(115, 34, 'sushi市場', '和食', 'user1', '美味しい', '2022-06-02 12:28:58'),
(116, 34, 'sushi市場', '和食', 'user1', 'とてもナイスです', '2022-06-02 12:35:09'),
(117, 34, 'sushi市場', '和食', 'ただたか', 'oisiidesu\r\n', '2022-06-02 21:22:07'),
(118, 33, 'ラーメン博多二号', '中華', 'abema-tsu', 'とても美味しいです', '2022-06-03 00:05:14'),
(119, 40, '美味しっす', '和食', 'abema-tsu', '美味しっす', '2022-06-03 00:07:43'),
(120, 40, '美味しっす', '和食', 'abema-tsu', 'とてもグッド', '2022-06-03 00:08:12'),
(121, 40, '美味しっす', '和食', 'abema-tsu', '最高においしい', '2022-06-03 00:08:21'),
(122, 40, '美味しっす', '和食', 'abema-tsu', '今日も来ました', '2022-06-03 00:08:33'),
(123, 35, 'うまい店', 'フレンチ', 'abema-tsu', '美味しいです', '2022-06-03 00:09:08'),
(124, 38, '美味しい店', 'フレンチ', 'abema-tsu', 'うまい', '2022-06-03 00:13:50'),
(125, 38, '美味しい店', 'フレンチ', 'abema-tsu', '最高です', '2022-06-03 00:14:03'),
(126, 33, 'ラーメン博多二号', '中華', 'abema-tsu', '美味しいです', '2022-06-03 00:25:28'),
(127, 34, 'sushi市場', '和食', 'abema-tsu', '美味しいです', '2022-06-03 01:56:24'),
(128, 35, 'うまい店', 'フレンチ', 'abema-tsu', 'デリシャス', '2022-06-03 02:32:04'),
(129, 36, 'イタリア', 'イタリアン', 'abema-tsu', 'ピザの美味しさはたまらない', '2022-06-03 02:35:38'),
(130, 41, '寿司天国', '和食', 'ただたか', 'とろけるトロ', '2022-06-03 02:41:07'),
(131, 41, '寿司天国', '和食', 'abema2', 'うまい\r\n', '2022-06-03 02:42:40');

-- --------------------------------------------------------

--
-- テーブルの構造 `users_table`
--

CREATE TABLE `users_table` (
  `u_id` int(11) NOT NULL,
  `username` varchar(128) COLLATE utf8mb4_bin NOT NULL,
  `password` varchar(128) COLLATE utf8mb4_bin NOT NULL,
  `is_admin` int(1) NOT NULL,
  `is_delete` int(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- テーブルのデータのダンプ `users_table`
--

INSERT INTO `users_table` (`u_id`, `username`, `password`, `is_admin`, `is_delete`, `created_at`, `updated_at`) VALUES
(2, 'user1', 'passwerd123', 1, 0, '2022-05-27 00:15:59', '2022-05-27 00:15:59'),
(3, 'user2', 'passwerd2', 1, 0, '2022-05-27 00:16:15', '2022-05-27 00:16:15'),
(4, 'user3', 'passwerd3', 1, 0, '2022-05-27 00:16:29', '2022-05-27 00:16:29'),
(5, 'user4', 'passwerd4', 1, 0, '2022-05-27 00:16:41', '2022-05-27 00:16:41'),
(6, 'user5', 'passwerd5', 1, 0, '2022-05-27 00:16:53', '2022-05-27 00:16:53'),
(8, 'user7', 'passwerd7', 1, 0, '2022-05-27 00:17:17', '2022-05-27 00:17:17'),
(9, 'user8', 'passwerd8', 1, 0, '2022-05-27 00:17:29', '2022-05-27 00:17:29'),
(10, 'user9', 'passwerd9', 1, 0, '2022-05-27 00:17:40', '2022-05-27 00:17:40'),
(11, 'abe', 'pas', 1, 1, '2022-05-27 00:45:05', '2022-05-27 00:45:05'),
(12, 'abe', 'paa', 1, 1, '2022-05-27 00:45:39', '2022-05-27 00:45:39'),
(13, 'abe', 'fa', 1, 1, '2022-05-27 00:55:40', '2022-05-27 00:55:40'),
(14, 'abe', 'gaga', 1, 1, '2022-05-27 01:05:01', '2022-05-27 01:05:01'),
(15, 'abe', '999', 1, 1, '2022-05-27 01:19:00', '2022-05-27 01:19:00'),
(16, 'user33', 'pasword33', 0, 0, '2022-05-27 15:34:04', '2022-05-27 15:34:04'),
(17, 'abema-tsu', 'pas', 0, 0, '2022-05-31 09:26:11', '2022-05-31 09:26:11'),
(18, 'abema2', 'pas', 0, 0, '2022-05-31 22:16:54', '2022-05-31 22:16:54'),
(19, 'ただたか', 'pas', 0, 0, '2022-05-31 22:18:12', '2022-05-31 22:18:12'),
(20, 'なす', 'pas', 0, 0, '2022-05-31 22:21:40', '2022-05-31 22:21:40'),
(21, 'mat', 'pas', 0, 0, '2022-05-31 22:24:00', '2022-05-31 22:24:00');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `like_table`
--
ALTER TABLE `like_table`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `shops`
--
ALTER TABLE `shops`
  ADD PRIMARY KEY (`shops_id`);

--
-- テーブルのインデックス `shop_no`
--
ALTER TABLE `shop_no`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `users_table`
--
ALTER TABLE `users_table`
  ADD PRIMARY KEY (`u_id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `like_table`
--
ALTER TABLE `like_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=212;

--
-- テーブルの AUTO_INCREMENT `shops`
--
ALTER TABLE `shops`
  MODIFY `shops_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- テーブルの AUTO_INCREMENT `shop_no`
--
ALTER TABLE `shop_no`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- テーブルの AUTO_INCREMENT `users_table`
--
ALTER TABLE `users_table`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
