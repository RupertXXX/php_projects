-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 26 2021 г., 00:43
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
-- База данных: `gr_91`
--

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `id` int NOT NULL,
  `id_author` int NOT NULL,
  `id_theme` int NOT NULL,
  `date` date NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `id_author`, `id_theme`, `date`, `title`, `text`) VALUES
(1, 2, 2, '2000-12-11', 'TITLE', 'TEXT'),
(2, 2, 2, '2007-02-11', 'TITLE2', 'TEXTff'),
(4, 2, 2, '2000-12-11', 'TITLE', 'TEXT'),
(5, 2, 2, '2000-12-11', 'TITLE', 'TEXT'),
(6, 2, 2, '2000-12-11', 'TITLE', 'TEXT'),
(7, 2, 2, '2000-12-11', 'TITLE', 'TEXT'),
(8, 2, 2, '2000-12-11', 'TITLE', 'TEXT'),
(9, 3, 3, '2020-01-01', 'title', 'text'),
(10, 3, 3, '2018-01-01', 'title', 'text'),
(11, 4, 3, '2018-01-01', 'title', 'text'),
(12, 5, 3, '2020-01-01', 'title', 'texddddt'),
(13, 19, 3, '2020-01-01', 'title', 'texddddt'),
(14, 19, 3, '2020-01-01', 'title', 'texddddt'),
(15, 19, 3, '2020-01-01', 'title', 'texddddt'),
(16, 19, 3, '2020-01-01', 'title', 'texddddt'),
(17, 19, 3, '2020-01-01', 'title', 'texddddt'),
(18, 19, 3, '2020-01-01', 'title', 'texddddt'),
(19, 19, 3, '2020-01-01', 'title', 'texddddt'),
(20, 19, 3, '2020-01-01', 'title', 'texddddt'),
(21, 19, 3, '2020-01-01', 'title', 'texddddt'),
(22, 19, 3, '2020-01-01', 'title', 'texddddt'),
(23, 19, 3, '2020-01-01', 'title', 'texddddt'),
(24, 19, 3, '2020-01-01', 'title', 'texddddt'),
(25, 19, 3, '2020-01-01', 'title', 'texddddt'),
(26, 19, 3, '2020-01-01', 'title', 'texddddt'),
(27, 19, 3, '2020-01-01', 'title', 'texddddt'),
(28, 19, 3, '2020-01-01', 'title', 'texddddt'),
(29, 19, 3, '2020-01-01', 'title', 'texddddt'),
(30, 19, 3, '2020-01-01', 'title', 'texddddt'),
(31, 19, 3, '2020-01-01', 'title', 'texddddt'),
(32, 19, 3, '2020-01-01', 'title', 'texddddt'),
(33, 19, 3, '2020-01-01', 'title', 'texddddt'),
(34, 19, 3, '2020-01-01', 'title', 'texddddt'),
(35, 19, 3, '2020-01-01', 'title', 'texddddt'),
(36, 19, 3, '2020-01-01', 'title', 'texddddt'),
(37, 19, 3, '2020-00-01', 'title', 'texddddt'),
(38, 19, 3, '2020-03-01', 'title', 'texfafsefsefesfddddt');

-- --------------------------------------------------------

--
-- Структура таблицы `file`
--

CREATE TABLE `file` (
  `id` int NOT NULL,
  `id_comment` int NOT NULL,
  `url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `file`
--

INSERT INTO `file` (`id`, `id_comment`, `url`) VALUES
(1, 2, 'https://google.com'),
(2, 1, 'https://google.com'),
(3, 4, 'https://google.com'),
(4, 5, 'https://google.com'),
(5, 6, 'https://google.com'),
(6, 1, 'https://google.com'),
(7, 2, 'https://google.com'),
(8, 14, 'http://vk.com'),
(9, 15, 'http://vsdk.com'),
(10, 16, 'http://vfefeek.com'),
(11, 1, 'http://vsddddk.com');

-- --------------------------------------------------------

--
-- Структура таблицы `group`
--

CREATE TABLE `group` (
  `id_group` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `group`
--

INSERT INTO `group` (`id_group`, `name`) VALUES
(7, 'authors'),
(4, 'BLA'),
(5, 'Kappa'),
(3, 'Kippa'),
(2, 'LUL'),
(6, 'PogChamp'),
(1, 'the_best');

-- --------------------------------------------------------

--
-- Структура таблицы `permission`
--

CREATE TABLE `permission` (
  `id` int NOT NULL,
  `id_themes` int NOT NULL,
  `id_users` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `permission`
--

INSERT INTO `permission` (`id`, `id_themes`, `id_users`) VALUES
(2, 2, 3),
(3, 2, 3),
(4, 2, 3),
(5, 2, 3),
(6, 2, 3),
(7, 29, 17),
(8, 30, 17),
(9, 31, 12),
(10, 31, 13),
(11, 31, 15),
(12, 31, 19),
(13, 32, 12),
(14, 32, 13),
(15, 32, 15),
(16, 32, 19),
(17, 33, 12),
(18, 33, 13),
(19, 33, 15),
(20, 33, 19),
(21, 34, 7),
(22, 34, 13),
(23, 34, 17),
(24, 35, 7),
(25, 35, 13),
(26, 35, 17);

-- --------------------------------------------------------

--
-- Структура таблицы `themes`
--

CREATE TABLE `themes` (
  `id` int NOT NULL,
  `id_author` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `is_active` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `themes`
--

INSERT INTO `themes` (`id`, `id_author`, `name`, `date`, `is_active`) VALUES
(2, 2, 'LUL', '2002-07-25', b'1'),
(3, 2, 'LUL', '2002-07-25', b'1'),
(5, 2, 'LUL', '2002-07-25', b'1'),
(7, 2, 'LUL', '2002-07-25', b'1'),
(8, 6, 'BLA_BLA', '2002-07-24', b'1'),
(9, 4, 'BLA', '2002-07-12', b'1'),
(10, 3, 'Kappa', '2002-07-11', b'1'),
(12, 2, 'LUL', '2002-07-25', b'1'),
(13, 6, 'BLA_BLA', '2002-07-24', b'1'),
(14, 4, 'BLA', '2002-07-12', b'1'),
(15, 3, 'Kappa', '2002-07-11', b'1'),
(16, 5, 'PogChamp', '2002-07-01', b'1'),
(17, 19, 'this is it', '2000-12-13', b'1'),
(18, 2, 'LUL new', '2012-02-13', b'1'),
(19, 2, 'LUL NOOOO', '2012-02-13', b'0'),
(20, 2, 'LUL new2', '2012-03-13', b'1'),
(21, 2, 'LUL new3', '2012-04-13', b'1'),
(22, 2, 'LUL new', '2012-02-13', b'1'),
(23, 2, 'LUL new4', '2013-02-13', b'1'),
(24, 2, 'LUL new5', '2014-02-13', b'1'),
(25, 2, 'LUL new6', '2015-02-13', b'1'),
(26, 2, 'LUL new7', '2016-02-13', b'1'),
(27, 2, 'LUL ne8', '2017-02-13', b'1'),
(28, 1, 'vin', '2021-03-25', b'1'),
(29, 1, 'Победно', '2021-03-26', b'1'),
(30, 1, 'Победно', '2021-03-26', b'1'),
(31, 1, 'vinnable', '2021-03-26', b'1'),
(32, 1, 'vinnable', '2021-03-26', b'1'),
(33, 1, 'vinnable', '2021-03-26', b'1'),
(34, 1, 'new_theme_OMG', '2021-03-26', b'1'),
(35, 1, 'new_theme_OMG', '2021-03-26', b'1');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `login` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_group` int NOT NULL,
  `is_active` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `id_group`, `is_active`) VALUES
(1, 'login', '12342514', 2, b'1'),
(2, 'login_1', '12345678', 1, b'1'),
(3, 'login_2', '12345678', 1, b'1'),
(4, 'login_3', '12345678', 1, b'1'),
(5, 'login_4', '12345678', 1, b'1'),
(6, 'login_5', '12345678', 1, b'1'),
(7, 'login_8', '12342514', 2, b'1'),
(8, 'login_9', '12342514', 4, b'1'),
(9, 'login_10', '12342514', 1, b'1'),
(10, 'login_11', '12342514', 3, b'1'),
(11, 'login_12', '12342514', 3, b'1'),
(12, 'login_13', '12342514', 2, b'1'),
(13, 'login_14', '12342514', 2, b'1'),
(14, 'login_15', '12342514', 2, b'0'),
(15, 'login_16', '12342514', 2, b'0'),
(16, 'Анна', '154211', 5, b'1'),
(17, 'Андрей', '154211', 2, b'0'),
(18, 'LUL', '123456', 7, b'1'),
(19, 'Иванов И.И.', '132822', 2, b'1'),
(21, 'TEST', '222', 1, b'1'),
(22, 'Rupert', 'c4ca4238a0b923820dcc509a6f75849b', 1, b'1');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_author` (`id_author`),
  ADD KEY `id_theme` (`id_theme`);

--
-- Индексы таблицы `file`
--
ALTER TABLE `file`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_comment` (`id_comment`);

--
-- Индексы таблицы `group`
--
ALTER TABLE `group`
  ADD PRIMARY KEY (`id_group`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Индексы таблицы `permission`
--
ALTER TABLE `permission`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_themes` (`id_themes`),
  ADD KEY `id_users` (`id_users`);

--
-- Индексы таблицы `themes`
--
ALTER TABLE `themes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_author` (`id_author`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`),
  ADD KEY `id_group` (`id_group`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT для таблицы `file`
--
ALTER TABLE `file`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `group`
--
ALTER TABLE `group`
  MODIFY `id_group` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `permission`
--
ALTER TABLE `permission`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT для таблицы `themes`
--
ALTER TABLE `themes`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`id_author`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`id_theme`) REFERENCES `themes` (`id`);

--
-- Ограничения внешнего ключа таблицы `file`
--
ALTER TABLE `file`
  ADD CONSTRAINT `file_ibfk_1` FOREIGN KEY (`id_comment`) REFERENCES `comments` (`id`);

--
-- Ограничения внешнего ключа таблицы `permission`
--
ALTER TABLE `permission`
  ADD CONSTRAINT `permission_ibfk_1` FOREIGN KEY (`id_themes`) REFERENCES `themes` (`id`),
  ADD CONSTRAINT `permission_ibfk_2` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`);

--
-- Ограничения внешнего ключа таблицы `themes`
--
ALTER TABLE `themes`
  ADD CONSTRAINT `themes_ibfk_1` FOREIGN KEY (`id_author`) REFERENCES `users` (`id`);

--
-- Ограничения внешнего ключа таблицы `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`id_group`) REFERENCES `group` (`id_group`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
