-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 30 2021 г., 15:47
-- Версия сервера: 8.0.19
-- Версия PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `rent`
--

-- --------------------------------------------------------

--
-- Структура таблицы `rent`
--

CREATE TABLE `rent` (
  `id` int NOT NULL,
  `name` varchar(127) NOT NULL,
  `phone` varchar(32) NOT NULL,
  `text` text NOT NULL,
  `type` int NOT NULL,
  `adress` varchar(270) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `cost` int NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `big_text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `rent`
--

INSERT INTO `rent` (`id`, `name`, `phone`, `text`, `type`, `adress`, `cost`, `email`, `big_text`, `date`) VALUES
(2, 'First', '8-800-555-35-35', 'This is the best room ever', 2, 'Street Pushkina house Kalotushkina', 100000, 'test@gmail.com', 'WAZAAAAAp', '2021-03-30 02:12:00'),
(3, 'Second', '8 800 555 35 35', 'java script', 2, 'Улица Пушкина, дом Калатушкина', 12, 'nicolaissssm@gmail.com', 'wasap', '2021-03-30 02:15:10'),
(4, 'Test', 'test', 'test', 2, '', 12, '', '', '2021-03-30 02:15:40'),
(5, 'Test', 'test', 'test', 2, 'test', 1, 'test@gmail.com', 'TEST', '2021-03-30 02:16:26'),
(6, 'Test', 'test', 'test', 2, 'test', 1, 'test@gmail.com', 'TEST', '2021-03-30 02:16:28'),
(7, 'Test', 'test', 'test', 2, 'test', 1, 'test@gmail.com', 'TEST', '2021-03-30 02:16:30'),
(8, 'Test', 'test', 'test', 2, 'test', 1, 'test@gmail.com', 'TEST', '2021-03-30 02:16:31'),
(9, 'Test', 'test', 'test', 2, 'test', 1, 'test@gmail.com', 'TEST', '2021-03-30 02:16:32'),
(10, 'Test', 'test', 'test', 2, 'test', 1, 'test@gmail.com', 'TEST', '2021-03-30 02:16:32'),
(11, 'Test', 'test', 'test', 2, 'test', 1, 'test@gmail.com', 'TEST', '2021-03-30 02:16:33'),
(12, 'Test', 'test', 'test', 2, 'test', 1, 'test@gmail.com', 'TEST', '2021-03-30 02:16:34'),
(13, 'Test', 'test', 'test', 2, 'test', 1, 'test@gmail.com', 'TEST', '2021-03-30 02:16:35'),
(14, 'Test', 'test', 'test', 2, 'test', 1, 'test@gmail.com', 'TEST', '2021-03-30 02:16:36'),
(15, 'Test', 'test', 'test', 2, 'test', 1, 'test@gmail.com', 'TEST', '2021-03-30 02:16:37'),
(16, 'Test', 'test', 'test', 2, 'test', 1, 'test@gmail.com', 'TEST', '2021-03-30 02:16:37'),
(17, 'Test', 'test', 'test', 2, 'test', 1, 'test@gmail.com', 'TEST', '2021-03-30 02:16:39'),
(18, 'Test', 'test', 'test', 2, 'test', 1, 'test@gmail.com', 'TEST', '2021-03-30 02:16:40'),
(19, 'Test', 'test', 'test', 2, 'test', 1, 'test@gmail.com', 'TEST', '2021-03-30 02:16:41'),
(20, 'Test', 'test', 'test', 2, 'test', 1, 'test@gmail.com', 'TEST', '2021-03-30 02:16:41'),
(21, 'Test', 'test', 'test', 2, 'test', 1, 'test@gmail.com', 'TEST', '2021-03-30 02:16:42'),
(22, 'Test', 'test', 'test', 2, 'test', 1, 'test@gmail.com', 'TEST', '2021-03-30 02:16:43'),
(23, 'Test', 'test', 'test', 2, 'test', 1, 'test@gmail.com', 'TEST', '2021-03-30 02:16:44'),
(24, 'Test', 'test', 'test', 2, 'test', 1, 'test@gmail.com', 'TEST', '2021-03-30 02:16:45'),
(25, 'Test', 'test', 'test', 2, 'test', 1, 'test@gmail.com', 'TEST', '2021-03-30 02:16:46'),
(26, 'Test', 'test', 'test', 2, 'test', 1, 'test@gmail.com', 'TEST', '2021-03-30 02:16:47'),
(27, 'Test', 'test', 'test', 2, 'test', 1, 'test@gmail.com', 'TEST', '2021-03-30 02:16:48'),
(28, 'Test', 'test', 'test', 2, 'test', 1, 'test@gmail.com', 'TEST', '2021-03-30 02:16:49'),
(29, 'Test', 'test', 'test', 2, 'test', 1, 'test@gmail.com', 'TEST', '2021-03-30 02:16:50'),
(30, 'Test', 'test', 'test', 2, 'test', 1, 'test@gmail.com', 'TEST', '2021-03-30 02:16:51'),
(31, 'Test', 'test', 'test', 2, 'test', 1, 'test@gmail.com', 'TEST', '2021-03-30 02:16:52'),
(32, 'Test', 'test', 'test', 2, 'test', 1, 'test@gmail.com', 'TEST', '2021-03-30 02:16:53'),
(33, 'Test', 'test', 'test', 2, 'test', 1, 'test@gmail.com', 'TEST', '2021-03-30 02:16:54'),
(34, 'Test', 'test', 'test', 2, 'test', 1, 'test@gmail.com', 'TEST', '2021-03-30 02:16:55'),
(35, 'Test', 'test', 'test', 2, 'test', 1, 'test@gmail.com', 'TEST', '2021-03-30 02:16:56'),
(36, 'Test', 'test', 'test', 2, 'test', 1, 'test@gmail.com', 'TEST', '2021-03-30 02:16:57'),
(37, 'Test', 'test', 'test', 2, 'test', 1, 'test@gmail.com', 'TEST', '2021-03-30 02:16:57'),
(38, 'Test', 'test', 'test', 2, 'test', 1, 'test@gmail.com', 'TEST', '2021-03-30 02:16:58'),
(39, 'Test', 'test', 'test', 2, 'test', 1, 'test@gmail.com', 'TEST', '2021-03-30 02:16:59'),
(40, 'Test', 'test', 'test', 2, 'test', 1, 'test@gmail.com', 'TEST', '2021-03-30 02:17:00'),
(41, 'Test', 'test', 'test', 2, 'test', 1, 'test@gmail.com', 'TEST', '2021-03-30 02:17:01'),
(42, 'End of test', 'End of test', 'End of test', 2, 'End of test', 0, 'End_of_test@gmail.com', 'End of test', '2021-03-30 02:17:32'),
(43, 'Nikolai', '8 800 555 35 35', 'java script', 2, 'Улица Пушкина, дом Калатушкина', 12, '1212', '12', '2021-03-30 02:20:43'),
(46, '12', '12', '12', 2, '', 12, '', '', '2021-03-30 02:29:58'),
(47, 'Nikolai', '8 800 555 35 35', 'java script', 2, 'Улица Пушкина, дом Калатушкина', 12, 'nicolaissssm@gmail.com', '12 12', '2021-03-30 02:32:57'),
(48, 'Nikolai', '8 800 555 35 35', 'java script', 2, 'Улица Пушкина, дом Калатушкина', 12, 'nicolaissssm@gmail.com', '12 12', '2021-03-30 02:34:14'),
(49, 'Nikolai', '8 800 555 35 35', 'java script', 2, 'Улица Пушкина, дом Калатушкина', 12, 'nicolaissssm@gmail.com', '12 12', '2021-03-30 02:34:33'),
(50, 'Nikolai', '8 800 555 35 35', 'java script', 1, 'Улица Пушкина, дом Калатушкина', 1221, 'dimakubb@gmail.com', '12 21', '2021-03-30 02:41:28'),
(51, 'house', '8 800 555 35 35', 'java script', 3, 'Улица Пушкина, дом Калатушкина', 1222, 'nicolaissssm@gmail.com', '12 12 21', '2021-03-30 14:19:31'),
(52, 'Nikolai', '8 800 555 35 35', 'java script', 1, '', 12, '', '', '2021-03-30 14:51:54'),
(53, 'Nikolai', '8 800 555 35 35', 'java script', 1, '', 1, '', '', '2021-03-30 14:58:00'),
(54, 'Nikolai', '8 800 555 35 35', 'java script', 1, 'Улица Пушкина, дом Калатушкина', 1, '', '', '2021-03-30 14:59:22'),
(55, 'Nikolai', '8 800 555 35 35', 'java script', 1, 'Улица Пушкина, дом Калатушкина', 1, '', '', '2021-03-30 14:59:54'),
(56, 'Nikolai', '8 800 555 35 35', 'java script', 1, 'Улица Пушкина, дом Калатушкина', 2, '', '', '2021-03-30 15:00:16'),
(57, 'Nikolai', '8 800 555 35 35', 'java script', 3, '', 12, '', '', '2021-03-30 15:40:58'),
(58, 'Nikolai', '8 800 555 35 35', 'java script', 3, 'Улица Пушкина, дом Калатушкина', 1221, 'dimakubb@gmail.com', '11 5 12 rerer 1', '2021-03-30 15:41:39'),
(59, 'Nikolai', '8 800 555 35 35', 'java script', 1, '', 12, '', '', '2021-03-30 15:45:33');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `rent`
--
ALTER TABLE `rent`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `rent`
--
ALTER TABLE `rent`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
