-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Окт 27 2017 г., 08:58
-- Версия сервера: 10.1.19-MariaDB
-- Версия PHP: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Структура таблицы `building`
--

CREATE TABLE `building` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL COMMENT 'Номи',
  `faculty_id` int(11) NOT NULL COMMENT 'Факультет',
  `building_id` int(11) NOT NULL COMMENT 'Бино',
  `room_id` int(11) NOT NULL COMMENT 'Хона'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `direction`
--

CREATE TABLE `direction` (
  `id` int(11) NOT NULL,
  `code` varchar(10) NOT NULL COMMENT 'Йўналиш коди',
  `name` varchar(100) NOT NULL COMMENT 'Йўналиш номи'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `faculty`
--

CREATE TABLE `faculty` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL COMMENT 'Номи',
  `building_id` int(11) NOT NULL COMMENT 'Бино'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `groups`
--

CREATE TABLE `groups` (
  `id` int(11) NOT NULL,
  `name` varchar(10) NOT NULL COMMENT 'Nomi',
  `group_head_id` int(11) NOT NULL COMMENT 'Guruh murabbiyi',
  `direction_id` int(11) NOT NULL COMMENT 'Йўналиш',
  `course` int(11) DEFAULT NULL COMMENT 'Курс',
  `faculty_id` int(11) NOT NULL COMMENT 'Факультет'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `lesson`
--

CREATE TABLE `lesson` (
  `id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `lesson_type` enum('lecture','practice','laboratory','seminar') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `parent` int(11) DEFAULT NULL,
  `route` varchar(255) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `data` blob
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `room`
--

CREATE TABLE `room` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL COMMENT 'Номи',
  `building_id` int(11) NOT NULL COMMENT 'Бино'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `university` varchar(64) NOT NULL COMMENT 'Университет',
  `address` varchar(64) NOT NULL COMMENT 'Манзил',
  `tel` varchar(64) NOT NULL COMMENT 'Тел',
  `logo` varchar(255) DEFAULT NULL COMMENT 'Логотип'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `reyting_no` varchar(10) NOT NULL COMMENT 'Рейтинг дафтарчаси номери',
  `direction_id` int(11) NOT NULL COMMENT 'Мутахассислик',
  `surname` varchar(24) NOT NULL COMMENT 'Фамилия',
  `name` varchar(24) NOT NULL COMMENT 'Исм',
  `patronymic` varchar(24) DEFAULT NULL COMMENT 'Шариф',
  `birthday` varchar(12) DEFAULT NULL COMMENT 'Туғилган санаси',
  `birthplace` varchar(64) DEFAULT NULL COMMENT 'Туғилган жойи',
  `education` varchar(100) DEFAULT NULL COMMENT 'Маълумоти',
  `workplace` varchar(100) DEFAULT NULL COMMENT 'Ўқишга  киргунга қадар иш жойи ',
  `father_name` varchar(64) DEFAULT NULL COMMENT 'Ота-онаси ҳақида маълумот',
  `father_workplace` varchar(100) DEFAULT NULL,
  `father_phone` varchar(20) DEFAULT NULL,
  `mother_name` varchar(64) DEFAULT NULL,
  `mother_workplace` varchar(100) DEFAULT NULL,
  `mother_phone` varchar(20) DEFAULT NULL,
  `family_status` varchar(100) DEFAULT NULL COMMENT 'Оилавий аҳволи',
  `passport_serie` varchar(3) DEFAULT NULL COMMENT 'Паспорт серияси',
  `passport_number` varchar(8) DEFAULT NULL COMMENT 'Паспорт рақами',
  `passport_given` varchar(64) DEFAULT NULL COMMENT 'ким томонидан ва қачон берилган',
  `parents_address` varchar(128) DEFAULT NULL COMMENT 'Ота-онасининг манзили, телефони',
  `address` varchar(128) DEFAULT NULL COMMENT 'Уй манзили, шу жумладан ижара уй, талабалар турар жойи, телефон',
  `living_type` enum('Uy','TTJ','Ijara') NOT NULL COMMENT 'Яшаш тури',
  `created` int(11) DEFAULT NULL COMMENT 'Яратилган вакти',
  `updated` int(11) DEFAULT NULL COMMENT 'Тахрирланган вакти',
  `nationality` varchar(16) NOT NULL COMMENT 'Миллати',
  `photo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `subject`
--

CREATE TABLE `subject` (
  `id` int(11) NOT NULL,
  `direction_id` int(11) NOT NULL COMMENT 'Йўналиш',
  `semester_id` int(11) NOT NULL COMMENT 'Семестр',
  `name` varchar(64) NOT NULL COMMENT 'Фан номи',
  `lecturer_id` int(11) NOT NULL COMMENT 'Маърузачи',
  `practice_id` int(11) NOT NULL COMMENT 'Амалиётчи',
  `lab1_id` int(11) NOT NULL COMMENT '1-Лабораториячи',
  `lab2_id` int(11) NOT NULL COMMENT '2-Лабораториячи',
  `department_id` int(11) NOT NULL COMMENT 'Кафедра',
  `lecture_hour` int(11) DEFAULT NULL COMMENT 'Маъруза соат',
  `practice_hour` int(11) DEFAULT NULL COMMENT 'Амалиёт соат',
  `lab_hour` int(11) DEFAULT NULL COMMENT 'Тажриба соат',
  `independent_hour` int(11) DEFAULT NULL COMMENT 'Мустақил соат'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `subject_direction`
--

CREATE TABLE `subject_direction` (
  `term_id` int(11) NOT NULL,
  `direction_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `teacher`
--

CREATE TABLE `teacher` (
  `id` int(11) NOT NULL,
  `fio` tinytext NOT NULL COMMENT 'ФИО',
  `user_id` int(11) NOT NULL COMMENT 'Фойдаланувчи',
  `department_id` int(11) NOT NULL COMMENT 'Кафедра',
  `img` varchar(255) DEFAULT NULL COMMENT 'Расм',
  `post` varchar(32) NOT NULL COMMENT 'Лавозим',
  `type` enum('asosiy','ichki','tashqi') NOT NULL COMMENT 'Тури',
  `birthday` varchar(16) DEFAULT NULL COMMENT 'Туғилган йили',
  `birthplace` varchar(64) DEFAULT NULL COMMENT 'Туғилган жойи',
  `nationality` varchar(20) DEFAULT NULL COMMENT ' Миллати',
  `partiya` varchar(32) DEFAULT NULL COMMENT 'Партиявийлиги',
  `degree` varchar(16) DEFAULT NULL COMMENT 'Маълумоти',
  `ended` varchar(64) DEFAULT NULL COMMENT 'Тамомлаган',
  `specialization` varchar(32) DEFAULT NULL COMMENT 'Маълумоти бўйича мутахассислиги',
  `science_degree` varchar(32) DEFAULT NULL COMMENT 'Илмий даражаси',
  `science_title` varchar(32) DEFAULT NULL COMMENT 'Илмий унвони',
  `foreign_langs` varchar(32) DEFAULT NULL COMMENT 'Кайси чет тилларини билади',
  `gov_awards` text COMMENT 'Давлат мукофотлари билан тақдирланганми (қанақа)',
  `deputy` varchar(64) DEFAULT NULL COMMENT 'Халқ депутатлари, республика, вилоят, шаҳар ва туман Кенгаши депутатими ёки бошқа  сайланадиган органларнинг аъзосими (тўлиқ кўрсатилиши лозим)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `term`
--

CREATE TABLE `term` (
  `id` int(11) NOT NULL,
  `name` int(11) NOT NULL COMMENT 'Номи',
  `semester` enum('autumn','spring') NOT NULL COMMENT 'Семестр'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'asjdjkasdnasldmaklsdna', '12345', 'asdasdlksadaskl', 'qwerty@ui.op', 10, 0, 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `building`
--
ALTER TABLE `building`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`),
  ADD KEY `faculty_id` (`faculty_id`),
  ADD KEY `building_id` (`building_id`),
  ADD KEY `room_id` (`room_id`);

--
-- Индексы таблицы `direction`
--
ALTER TABLE `direction`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`),
  ADD KEY `building_id` (`building_id`);

--
-- Индексы таблицы `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`),
  ADD KEY `group_head_id` (`group_head_id`),
  ADD KEY `specialization_id` (`direction_id`),
  ADD KEY `faculty_id` (`faculty_id`);

--
-- Индексы таблицы `lesson`
--
ALTER TABLE `lesson`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subject_id` (`subject_id`);

--
-- Индексы таблицы `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parent` (`parent`);

--
-- Индексы таблицы `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Индексы таблицы `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`),
  ADD KEY `building_id` (`building_id`);

--
-- Индексы таблицы `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `reyting_no` (`reyting_no`);

--
-- Индексы таблицы `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`),
  ADD KEY `direction_id` (`direction_id`),
  ADD KEY `semester_id` (`semester_id`),
  ADD KEY `lecturer_id` (`lecturer_id`),
  ADD KEY `practice_id` (`practice_id`),
  ADD KEY `lab1_id` (`lab1_id`),
  ADD KEY `lab2_id` (`lab2_id`),
  ADD KEY `department_id` (`department_id`);

--
-- Индексы таблицы `subject_direction`
--
ALTER TABLE `subject_direction`
  ADD KEY `term_id` (`term_id`),
  ADD KEY `direction_id` (`direction_id`),
  ADD KEY `subject_id` (`subject_id`);

--
-- Индексы таблицы `term`
--
ALTER TABLE `term`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `building`
--
ALTER TABLE `building`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `direction`
--
ALTER TABLE `direction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `lesson`
--
ALTER TABLE `lesson`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `room`
--
ALTER TABLE `room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `term`
--
ALTER TABLE `term`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `menu_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `menu` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
