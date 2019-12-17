-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 17 2019 г., 23:14
-- Версия сервера: 10.3.13-MariaDB-log
-- Версия PHP: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `user`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `mail`, `password`) VALUES
(1, 'Vasya666', 'vasya@mail.ru', '$2y$10$48Qvg1Ap5o59..Uwl3LL/.r//m1wVQvkMjpZt59ta55pzH./NjPiC'),
(2, 'asya66666', 'asya@mail.ru', '$2y$10$0lHlx7qN9Zr3ZMZoGunQouNWGVot2Y971lHToYaIMwppOwu0O7V6u'),
(3, 'asdsadsa', 'sadsa@mail.ru', '$2y$10$0IUAhviYmsdwwhoIAAqdleMCsFejhclUOix3USQJvzKDRBb.OrNqC'),
(4, 'asdasdasdasdsadasd', 'ascasdasdasdas@mail.ru', '$2y$10$/7qsATfmCZNSSPvIExeK7OhiV33GMaIyPYVZiLdFbb1a14KpHQhvy'),
(5, 'asdasdsadasdsadsadsad', 'asdsadsadasd@mail.ru', '$2y$10$AsoXgrgiRJBigMwSE/9eNeof7Y6nrI8RJAZ2WNVXSp/6Jmx/gNwTa'),
(6, 'asdasdasfsafSFAasfASFasfaFSasfaSFASF', 'safFaSFaSFaS@maSDil.wqatr', '$2y$10$xxjTYKEThKXSO9rvUehH5.EIYVX3x.YO6k5kSi8SfdIGVQn.sIGrq');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
