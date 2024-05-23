-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2024-05-22 10:33:59
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
-- 資料表結構 `category`
--

CREATE TABLE `category` (
  `id` int(3) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'DC'),
(2, 'Marvel');

-- --------------------------------------------------------

--
-- 資料表結構 `product`
--

CREATE TABLE `product` (
  `id` int(5) UNSIGNED NOT NULL,
  `category_id` int(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` int(6) UNSIGNED NOT NULL,
  `img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `product`
--

INSERT INTO `product` (`id`, `category_id`, `category`, `name`, `price`, `img`) VALUES
(1, 2, '', 'Spider-Man', 500, 'spiderman.jpg'),
(2, 1, '', 'Superman', 1000, 'superman.png'),
(3, 1, '', 'Wonder Woman', 3000, 'wonderwoman.webp'),
(4, 1, '', 'Iron Man', 10000, 'ironman.png'),
(5, 1, '', 'Batman', 10000, 'batman.webp'),
(6, 2, '', 'Black Widow', 1100, 'blackwidow.jpg'),
(7, 1, '', 'Flash', 800, 'flash.jpg'),
(8, 2, '', 'Captain America', 900, 'captain-america.png'),
(9, 1, '', 'Shazam', 400, 'shazam.jpg'),
(10, 2, '', 'Thor', 3000, 'thor.jpg');

-- --------------------------------------------------------

--
-- 資料表結構 `users`
--

CREATE TABLE `users` (
  `id` int(6) UNSIGNED NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `account` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `valid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `users`
--

INSERT INTO `users` (`id`, `name`, `account`, `password`, `phone`, `email`, `created_at`, `valid`) VALUES
(1, 'cat', 'shiba', '', '0955555555', 'cat@test.com', '2024-05-16 05:47:54', 1),
(2, 'Shibainu', 'shibainu', '', '0958932289', 'shibainu@test.com', '2024-05-16 05:49:33', 1),
(3, 'Shibainu', 'shibainu', '', '0911111111', 'shibainu@test.com', '2024-05-16 05:50:14', 1),
(4, 'Poodle', 'poodle', '', '0958932289', 'poodle@test.com', '2024-05-16 05:51:29', 1),
(5, 'dog', 'sam', '', '0958932289', 'dog@test.com', '2024-05-16 06:05:04', 1),
(6, 'Mike', 'mike', '', '0909161717', 'Mike@test.com', '2024-05-16 06:05:04', 1),
(7, 'Jay', 'jay', '', '0977522351', 'Jay@test.com', '2024-05-16 06:05:04', 1),
(8, 'Shiba', 'shiba', '', '0958932289', 'shiba@test.com', '2024-05-17 03:13:50', 1),
(9, 'popopo', 'popopo', 'qwer', NULL, NULL, '2024-05-17 09:21:28', 1),
(10, 'Jackson', 'jackson', 'e10adc3949ba59abbe56e057f20f883e', NULL, NULL, '2024-05-17 09:23:44', 1),
(11, 'Amy', 'amy4654', '827ccb0eea8a706c4c34a16891f84e7b', NULL, NULL, '2024-05-20 04:46:32', 1),
(12, 'Bob', 'bob888', '827ccb0eea8a706c4c34a16891f84e7b', NULL, NULL, '2024-05-20 04:46:46', 1),
(13, 'Peter', 'peter9487', '827ccb0eea8a706c4c34a16891f84e7b', NULL, NULL, '2024-05-20 04:47:07', 1),
(14, 'Ray', 'ray78444', '827ccb0eea8a706c4c34a16891f84e7b', NULL, NULL, '2024-05-20 04:47:22', 1),
(15, 'Ben', 'ben998544', '827ccb0eea8a706c4c34a16891f84e7b', NULL, NULL, '2024-05-20 04:47:37', 1),
(16, 'Tom', 'tom9986', '827ccb0eea8a706c4c34a16891f84e7b', NULL, NULL, '2024-05-20 08:10:54', 1),
(21, 'ooo', 'oooo65', '827ccb0eea8a706c4c34a16891f84e7b', NULL, NULL, '2024-05-20 08:29:35', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `user_like`
--

CREATE TABLE `user_like` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(4) UNSIGNED NOT NULL,
  `user_id` int(6) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `user_like`
--

INSERT INTO `user_like` (`id`, `product_id`, `user_id`) VALUES
(1, 10, 2),
(2, 6, 8),
(3, 7, 1),
(4, 7, 3),
(5, 3, 6),
(6, 2, 5),
(7, 4, 4),
(8, 6, 7),
(9, 1, 9),
(10, 4, 8),
(11, 3, 8);

-- --------------------------------------------------------

--
-- 資料表結構 `user_order`
--

CREATE TABLE `user_order` (
  `id` int(6) UNSIGNED NOT NULL,
  `product_id` int(4) UNSIGNED NOT NULL,
  `amount` int(3) NOT NULL,
  `user_id` int(6) NOT NULL,
  `order_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `user_order`
--

INSERT INTO `user_order` (`id`, `product_id`, `amount`, `user_id`, `order_date`) VALUES
(1, 7, 1, 7, '2024-05-16'),
(2, 8, 2, 1, '2024-05-17'),
(3, 2, 2, 11, '2024-05-17'),
(4, 9, 2, 3, '2024-05-18'),
(5, 6, 4, 6, '2024-05-18'),
(6, 8, 2, 1, '2024-05-17'),
(7, 2, 4, 12, '2024-05-16'),
(8, 2, 2, 11, '2024-05-17'),
(9, 8, 1, 8, '2024-05-19'),
(10, 2, 2, 11, '2024-05-18'),
(11, 3, 3, 2, '2024-05-18'),
(12, 8, 1, 8, '2024-05-17'),
(13, 7, 1, 7, '2024-05-16'),
(14, 6, 4, 6, '2024-05-16'),
(15, 7, 1, 7, '2024-05-17'),
(16, 8, 2, 1, '2024-05-18'),
(17, 9, 4, 6, '2024-05-22'),
(18, 9, 5, 11, '2024-05-22');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `user_like`
--
ALTER TABLE `user_like`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `user_order`
--
ALTER TABLE `user_order`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `category`
--
ALTER TABLE `category`
  MODIFY `id` int(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `product`
--
ALTER TABLE `product`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `users`
--
ALTER TABLE `users`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `user_like`
--
ALTER TABLE `user_like`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `user_order`
--
ALTER TABLE `user_order`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
