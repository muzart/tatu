-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Май 22 2019 г., 08:46
-- Версия сервера: 10.1.25-MariaDB
-- Версия PHP: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `talaba`
--

-- --------------------------------------------------------

--
-- Структура таблицы `room`
--

CREATE TABLE `room` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL COMMENT 'Номи',
  `building_id` int(11) NOT NULL COMMENT 'Бино'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `room`
--

INSERT INTO `room` (`id`, `name`, `building_id`) VALUES
(1, '325', 1),
(2, '102', 1),
(3, '103', 1),
(4, '104', 1),
(5, '105', 1),
(6, '106', 1),
(7, '107', 1),
(8, '108', 1),
(9, '109', 1),
(10, '110', 1),
(11, '111', 1),
(12, '112', 1),
(13, '113', 1),
(14, '114', 1),
(15, '115', 1),
(16, '116', 1),
(17, '117', 1),
(18, '118', 1),
(19, '01', 1),
(20, '201', 1),
(21, '202', 1),
(22, '203', 1),
(23, '204', 1),
(24, '205', 1),
(25, '206', 1),
(26, '207', 1),
(27, '208', 1),
(28, '209', 1),
(29, '210', 1),
(30, '211', 1),
(31, '212', 1),
(32, '213', 1),
(33, '214', 1),
(34, '215', 1),
(35, '215A', 1),
(36, '215B', 1),
(37, '216', 1),
(38, '217', 1),
(39, '218', 1),
(40, '301', 1),
(41, '302', 1),
(42, '303', 1),
(43, '304', 1),
(44, '305', 1),
(45, '306', 1),
(46, '307', 1),
(47, '308', 1),
(48, '309', 1),
(49, '310', 1),
(50, '311', 1),
(51, '312', 1),
(52, '313', 1),
(53, '314', 1),
(54, '315', 1),
(55, '316', 1),
(56, '317', 1),
(57, '318', 1),
(58, '319', 1),
(59, '320', 1),
(60, '321', 1),
(61, '322', 1),
(62, '323', 1),
(63, '324', 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`),
  ADD KEY `building_id` (`building_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `room`
--
ALTER TABLE `room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `room`
--
ALTER TABLE `room`
  ADD CONSTRAINT `room_ibfk_1` FOREIGN KEY (`building_id`) REFERENCES `building` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
