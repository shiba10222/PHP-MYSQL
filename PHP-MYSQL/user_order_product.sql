-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2024-05-27 10:42:34
-- 伺服器版本： 10.4.32-MariaDB
-- PHP 版本： 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `my_test_db`
--

-- --------------------------------------------------------

--
-- 資料表結構 `user_order_product`
--

CREATE TABLE `user_order_product` (
  `id` int(5) UNSIGNED NOT NULL,
  `user_id` int(6) NOT NULL,
  `order_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 傾印資料表的資料 `user_order_product`
--

INSERT INTO `user_order_product` (`id`, `user_id`, `order_time`) VALUES
(1, 1, '2024-05-27 09:28:26'),
(2, 1, '2024-05-27 09:51:59'),
(3, 1, '2024-05-27 09:51:59'),
(4, 1, '2024-05-27 09:51:59'),
(5, 1, '2024-05-27 09:51:59'),
(6, 1, '2024-05-27 09:51:59'),
(7, 1, '2024-05-27 09:51:59'),
(8, 1, '2024-05-27 09:51:59'),
(9, 1, '2024-05-27 09:51:59'),
(10, 1, '2024-05-27 09:51:59'),
(11, 1, '2024-05-27 09:51:59'),
(12, 1, '2024-05-27 09:52:19'),
(13, 1, '2024-05-27 09:54:53'),
(14, 1, '2024-05-27 09:54:53'),
(15, 1, '2024-05-27 09:54:53'),
(16, 1, '2024-05-27 09:54:53'),
(17, 1, '2024-05-27 09:54:53'),
(18, 1, '2024-05-27 09:55:31'),
(19, 1, '2024-05-27 09:55:31'),
(20, 1, '2024-05-27 09:55:31'),
(21, 1, '2024-05-27 09:55:31'),
(22, 1, '2024-05-27 09:55:31');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `user_order_product`
--
ALTER TABLE `user_order_product`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `user_order_product`
--
ALTER TABLE `user_order_product`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
