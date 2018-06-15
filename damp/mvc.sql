-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 15 2018 г., 12:02
-- Версия сервера: 5.6.34-log
-- Версия PHP: 5.6.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `mvc`
--

-- --------------------------------------------------------

--
-- Структура таблицы `articles`
--

CREATE TABLE `articles` (
  `id` int(11) UNSIGNED NOT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `login_id` int(11) NOT NULL,
  `login` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `img` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`id`, `date`, `login_id`, `login`, `title`, `content`, `img`) VALUES
(207, '2018-03-21', 0, '', '5555555555555555555555555555555555555', '66666666666666666666666666666', 'file-1522036466.jpg'),
(570, '2018-03-23', 0, 'admin', '', '', 'file-1522036466.jpg'),
(571, '2018-03-23', 0, 'admin', '', '', 'file-1522036466.jpg'),
(572, '2018-03-23', 0, 'aaaa', '', '', 'file-1522036466.jpg'),
(573, '2018-03-24', 0, 'aaaa', '', '', 'file-1522036466.jpg'),
(654, ' 2018-03-26 ', 0, ' ss ', ' qqqqq ', ' qqqq ', ' file-1522041399.jpg '),
(655, ' 2018-03-26 ', 0, ' ss ', '  ', '  ', 'file-1522041449.jpg'),
(656, ' 2018-03-26 ', 0, ' ss ', '  ', ' ник ', 'file-1522041787.jpg'),
(657, NULL, 0, '', 'ZXZxZXXZ', NULL, ''),
(658, NULL, 0, '', 'ZXZxZXXZ', NULL, ''),
(659, NULL, 0, 'admin', 'qwer', 'qwer', ''),
(660, NULL, 0, 'admin', 'qwer', 'qwer', ''),
(661, NULL, 0, 'admin', '', '', ''),
(662, NULL, 0, 'admin', 'qwerasdf', 'addsadasdasdasdasdasdasdas', ''),
(663, NULL, 0, 'admin', 'zzzzzzzzzzzzzzzzzzzzzz', 'zczczxczxzxzx', 'file-1522363037.png'),
(664, NULL, 20, 'admin', 'qwqe', 'qweqweqwe', ''),
(665, NULL, 20, 'admin', '', '', ''),
(666, NULL, 23, 'ss', 'test', 'test', 'file-1522364051.png'),
(667, NULL, 23, 'ss', '11111111111', '222222222222222', 'file-1522364148.png'),
(668, NULL, 23, 'ss', 'test', 'тестовый пост для проверки ', 'file-1522364677.jpg'),
(669, NULL, 23, 'ss', '', '', ''),
(670, NULL, 23, 'ss', '', '', ''),
(671, NULL, 23, 'ss', '', '', ''),
(672, NULL, 23, 'ss', '', '', ''),
(673, NULL, 23, 'ss', '', '', ''),
(674, NULL, 23, 'ss', '', '', ''),
(675, NULL, 23, 'ss', '', '', ''),
(676, NULL, 23, 'ss', '', '', ''),
(677, NULL, 23, 'ss', '', '', ''),
(678, NULL, 23, 'ss', '', '', ''),
(679, NULL, 23, 'ss', '', '', ''),
(680, NULL, 23, 'ss', '', '', ''),
(681, NULL, 23, 'ss', '', '', ''),
(682, NULL, 25, 'www', 'test', '', ''),
(683, NULL, 25, 'www', 'test', '', ''),
(684, NULL, 25, 'www', 'test#2', 'тестовая запись с изображением', 'file-1522421780.jpg'),
(685, NULL, 23, 'ss', '111111111111111111111111', '1111111111111111111111111111111111', 'file-1522431773.jpg'),
(686, NULL, 25, 'www', '', '', 'file-1522616809.jpg'),
(687, NULL, 25, 'www', 'проверка', 'проверка ретиректа\r\n', 'file-1522617535.png'),
(688, NULL, 25, 'www', '', '', 'file-1522617619.png'),
(689, NULL, 25, 'www', '', '', 'file-1522617636.png'),
(690, NULL, 25, 'www', '', '', ''),
(691, NULL, 25, 'www', '', '', 'file-1522618380.png'),
(692, NULL, 25, 'www', '', '', 'file-1522619411.png'),
(693, NULL, 25, 'www', '', '', 'file-1522619652.png');

-- --------------------------------------------------------

--
-- Структура таблицы `friends`
--

CREATE TABLE `friends` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `friend_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `friends`
--

INSERT INTO `friends` (`id`, `user_id`, `friend_id`) VALUES
(115, 25, 24),
(116, 25, 24),
(117, 25, 23),
(118, 25, 23),
(119, 25, 0),
(120, 20, 0),
(121, 31, 0),
(122, 31, 0),
(123, 31, 19);

-- --------------------------------------------------------

--
-- Структура таблицы `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `from_user` int(11) NOT NULL,
  `to_user` int(11) NOT NULL,
  `message` text NOT NULL,
  `flag` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `messages`
--

INSERT INTO `messages` (`id`, `date`, `from_user`, `to_user`, `message`, `flag`) VALUES
(1, '0000-00-00', 23, 1, 'sadasd', 0),
(2, '0000-00-00', 23, 1, 'sadasd', 0),
(3, '0000-00-00', 23, 1, 'sadasd', 0),
(4, '0000-00-00', 23, 1, 'sadasd', 0),
(5, '0000-00-00', 23, 0, '', 0),
(6, '0000-00-00', 23, 0, '', 0),
(7, '0000-00-00', 23, 1, 'asdasdasdads', 0),
(8, '0000-00-00', 23, 0, '', 0),
(9, '0000-00-00', 23, 1, 'asdasdasdads', 0),
(10, '0000-00-00', 23, 1, 'asdasdasdads', 0),
(11, '0000-00-00', 23, 1, 'asdasdasdads', 0),
(12, '0000-00-00', 23, 1, 'asdasdasdads', 0),
(13, '0000-00-00', 23, 1, 'asdasdasdads', 0),
(14, '0000-00-00', 23, 1, 'asdasdasdads', 0),
(15, '0000-00-00', 23, 1, 'asdasdasdads', 0),
(16, '0000-00-00', 23, 1, 'asdasdasdads', 0),
(17, '0000-00-00', 23, 1, 'asdasdasdads', 0),
(18, '0000-00-00', 23, 1, 'asdasdasdads', 0),
(19, '0000-00-00', 23, 5, '', 0),
(20, '0000-00-00', 23, 5, '', 0),
(21, '0000-00-00', 23, 21, '', 0),
(22, '0000-00-00', 23, 21, '', 0),
(23, '0000-00-00', 23, 0, '', 0),
(24, '0000-00-00', 23, 0, '', 0),
(25, '0000-00-00', 23, 0, '', 0),
(26, '0000-00-00', 23, 0, '', 0),
(27, '0000-00-00', 23, 0, '', 0),
(28, '0000-00-00', 23, 0, '', 0),
(29, '0000-00-00', 23, 0, '', 0),
(30, '0000-00-00', 23, 0, '', 0),
(31, '0000-00-00', 23, 0, '', 0),
(32, '0000-00-00', 23, 0, '', 0),
(33, '0000-00-00', 23, 0, '', 0),
(34, '0000-00-00', 23, 0, '', 0),
(35, '0000-00-00', 23, 0, '', 0),
(36, '0000-00-00', 23, 0, '', 0),
(37, '0000-00-00', 23, 23, 'asdasd', 1),
(38, '0000-00-00', 23, 23, 'asdasd', 1),
(39, '0000-00-00', 23, 23, 'asdasd', 1),
(40, '0000-00-00', 23, 23, 'asdasd', 1),
(41, '0000-00-00', 23, 23, 'asdasd', 1),
(42, '0000-00-00', 23, 0, '', 0),
(43, '0000-00-00', 23, 0, '', 0),
(44, '0000-00-00', 20, 19, 'qweqweqwe', 0),
(45, '0000-00-00', 20, 20, 'qweqweqwe', 1),
(46, '0000-00-00', 20, 20, 'qweqweqwe', 1),
(47, '0000-00-00', 20, 20, 'qweqweqwe', 1),
(48, '0000-00-00', 20, 20, 'qweqweqwe', 1),
(49, '0000-00-00', 20, 20, 'qweqweqwe', 1),
(50, '0000-00-00', 20, 20, 'qweqweqwe', 1),
(51, '0000-00-00', 20, 25, '1234qwer', 1),
(52, '0000-00-00', 23, 19, '', 0),
(53, '0000-00-00', 23, 19, '', 0),
(54, '0000-00-00', 23, 19, '', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `login` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `friends` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `isAdmin` int(11) NOT NULL,
  `image` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `login`, `email`, `password`, `friends`, `isAdmin`, `image`) VALUES
(19, '', '', 'qqq', 'adqqqmin@admin.ru', '81dc9bdb52d04dc20036dbd8313ed055', '', 0, 'file-1522364294.jpg'),
(20, 'Никита', 'Золовкин', 'admin', 'admin@admin.ru', '81dc9bdb52d04dc20036dbd8313ed055', '', 1, 'file-1522699214.jpg'),
(21, '', '', 'qqqq', '1@1', '3bad6af0fa4b8b330d162e19938ee981', '', 0, 'file-1522364294.jpg'),
(22, '', '', 'aaaa', 'a@a', '74b87337454200d4d33f80c4663dc5e5', '', 0, 'file-1522364294.jpg'),
(23, '', '', 'ss', 's@s', '3691308f2a4c2f6983f2880d32e29c84', '', 0, 'file-1522422543.jpg'),
(24, '', '', 'dd', 'd@d', '1aabac6d068eef6a7bad3fdf50a05cc8', '', 0, 'file-1522364294.jpg'),
(25, 'Иван', 'Иванов', 'www', 'www@www', '4eae35f1b35977a00ebd8086c259d4c9', '19', 0, 'file-1522698344.jpg'),
(30, 'Васильевич', 'Василий', 'vasia', 'vasia@ya.ru', '81dc9bdb52d04dc20036dbd8313ed055', '', 0, ''),
(31, 'new', 'new', 'new', 'new@new', '22af645d1859cb5ca6da0c484f1f37ea', '', 0, 'file-1522699676.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `users_articles`
--

CREATE TABLE `users_articles` (
  `users_id` int(11) NOT NULL,
  `articles_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `friends`
--
ALTER TABLE `friends`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users_articles`
--
ALTER TABLE `users_articles`
  ADD PRIMARY KEY (`users_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=694;
--
-- AUTO_INCREMENT для таблицы `friends`
--
ALTER TABLE `friends`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;
--
-- AUTO_INCREMENT для таблицы `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT для таблицы `users_articles`
--
ALTER TABLE `users_articles`
  MODIFY `users_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
