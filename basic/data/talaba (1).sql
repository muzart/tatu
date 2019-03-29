-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Мар 21 2019 г., 10:56
-- Версия сервера: 10.1.28-MariaDB
-- Версия PHP: 7.1.11

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
-- Структура таблицы `announcements`
--

CREATE TABLE `announcements` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `start_date` varchar(200) NOT NULL,
  `tittle` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `end_date` varchar(200) NOT NULL,
  `status` enum('active','inactive') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `announcements`
--

INSERT INTO `announcements` (`id`, `user_id`, `start_date`, `tittle`, `body`, `end_date`, `status`) VALUES
(2, 14, '12.12', 'df', 'ijij', '121', 'inactive'),
(3, 14, 'oko', 'pokp', 'sss', 'o', 'inactive'),
(4, 14, 'ki', 'ki', 'ki', 'ki', 'inactive');

-- --------------------------------------------------------

--
-- Структура таблицы `announcement_student`
--

CREATE TABLE `announcement_student` (
  `id` int(11) NOT NULL,
  `announcement_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `appeals`
--

CREATE TABLE `appeals` (
  `id` int(11) NOT NULL,
  `term_id` int(11) NOT NULL,
  `student_fio` varchar(255) NOT NULL,
  `student_id` int(11) NOT NULL,
  `region` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `building`
--

CREATE TABLE `building` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `building`
--

INSERT INTO `building` (`id`, `name`) VALUES
(1, 'Asosiy bino');

-- --------------------------------------------------------

--
-- Структура таблицы `contract_amounts`
--

CREATE TABLE `contract_amounts` (
  `id` int(11) NOT NULL,
  `total_amount` int(100) NOT NULL COMMENT 'To''lanishi kerak bo''lgan umumiy summa',
  `term_id` int(10) NOT NULL COMMENT 'Semestr',
  `direction_id` int(10) NOT NULL COMMENT 'Yo''nalish',
  `deadline` varchar(100) NOT NULL COMMENT 'Ohirgi muddat'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `contract_amounts`
--

INSERT INTO `contract_amounts` (`id`, `total_amount`, `term_id`, `direction_id`, `deadline`) VALUES
(1, 8900000, 1, 1, '22.04.2019'),
(2, 1000000, 1, 2, '10.20.2020'),
(3, 12000000, 5, 1, '10.20.2020'),
(4, 13000000, 6, 2, '10.20.2020');

-- --------------------------------------------------------

--
-- Структура таблицы `contract_payments`
--

CREATE TABLE `contract_payments` (
  `id` int(11) NOT NULL,
  `student_id` int(10) NOT NULL COMMENT 'Talaba',
  `term_id` int(10) NOT NULL COMMENT 'Semestr',
  `payment_date` varchar(20) NOT NULL COMMENT 'To''langan vaqti',
  `payment_amount` int(100) NOT NULL COMMENT 'To''langan summa'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `contract_payments`
--

INSERT INTO `contract_payments` (`id`, `student_id`, `term_id`, `payment_date`, `payment_amount`) VALUES
(3, 21, 1, '03-03-2019', 1000000),
(4, 21, 5, '12-03-2019', 1000000);

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

--
-- Дамп данных таблицы `department`
--

INSERT INTO `department` (`id`, `name`, `faculty_id`, `building_id`, `room_id`) VALUES
(1, 'Dasturiy injiniring', 1, 1, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `direction`
--

CREATE TABLE `direction` (
  `id` int(11) NOT NULL,
  `code` varchar(10) NOT NULL COMMENT 'Йўналиш коди',
  `name` varchar(100) NOT NULL COMMENT 'Йўналиш номи'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `direction`
--

INSERT INTO `direction` (`id`, `code`, `name`) VALUES
(1, '5330600', 'Kompyuter injiniring'),
(2, '5330001', 'Dasturiy inginering');

-- --------------------------------------------------------

--
-- Структура таблицы `faculty`
--

CREATE TABLE `faculty` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL COMMENT 'Номи',
  `building_id` int(11) NOT NULL COMMENT 'Бино'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `faculty`
--

INSERT INTO `faculty` (`id`, `name`, `building_id`) VALUES
(1, 'Kompyuter injiniring', 1);

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

--
-- Дамп данных таблицы `groups`
--

INSERT INTO `groups` (`id`, `name`, `group_head_id`, `direction_id`, `course`, `faculty_id`) VALUES
(1, '914-46', 5, 1, 3, 1),
(2, '941-15', 5, 1, 2, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `lesson`
--

CREATE TABLE `lesson` (
  `id` int(11) NOT NULL,
  `term_id` int(11) NOT NULL,
  `lesson_type_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `day` int(11) NOT NULL,
  `pair` int(11) NOT NULL,
  `sana` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `lesson_type`
--

CREATE TABLE `lesson_type` (
  `id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `lesson_type` enum('lecture','practice','laboratory','seminar') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `marks`
--

CREATE TABLE `marks` (
  `id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `lesson_type_id` int(11) NOT NULL,
  `mark` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `materials`
--

CREATE TABLE `materials` (
  `id` int(11) NOT NULL,
  `subject_id` int(10) NOT NULL,
  `studies_kind` enum('lecture','laboratory','practice') NOT NULL,
  `topic` varchar(255) NOT NULL,
  `planned_hour` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `materials`
--

INSERT INTO `materials` (`id`, `subject_id`, `studies_kind`, `topic`, `planned_hour`) VALUES
(1, 1, 'lecture', 'Web ilovalarni yaratish faniga kirish', '2'),
(2, 1, 'practice', 'HTML oddiy teglarini o\'rganish', '2'),
(3, 2, 'laboratory', 'oiho', '12'),
(4, 3, 'laboratory', 'Bir ish qilish', '2'),
(6, 3, 'lecture', '2-maruza', '2'),
(7, 3, 'laboratory', 'Bir ish qilish ikki', '2'),
(8, 9, 'lecture', 'kldfkldkf', '45');

-- --------------------------------------------------------

--
-- Структура таблицы `material_files`
--

CREATE TABLE `material_files` (
  `id` int(11) NOT NULL,
  `material_id` int(10) NOT NULL,
  `file_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `material_files`
--

INSERT INTO `material_files` (`id`, `material_id`, `file_path`) VALUES
(1, 4, 'uploads/materials/fizika/bir_ish_qilish.jpg'),
(2, 4, 'uploads/materials/fizika/bir_ish_qilish.png'),
(3, 4, 'uploads/materials/fizika/bir_ish_qilish.png'),
(9, 6, 'uploads/materials/fizika/2-maruza_2018-01-03_at_13-03-16.png71.png'),
(10, 7, 'uploads/materials/fizika/bir_ish_qilish_ikki_2017-12-11_at_13-25-34.png75.png'),
(11, 7, 'uploads/materials/fizika/bir_ish_qilish_ikki_2017-12-11_at_13-25-41.png41.png'),
(15, 6, 'uploads/materials/fizika/2-maruza_2017-11-03_at_20-17-12.png56.png'),
(16, 3, 'uploads/materials/linux/oiho_user.sql56.sql'),
(17, 6, 'uploads/materials/fizika/2-maruza_1.png23.png');

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

--
-- Дамп данных таблицы `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m140602_111327_create_menu_table', 1531299494),
('m171123_103519_create_table_materials', 1531299495),
('m180711_092733_user_role_column', 1531299497),
('m180715_051541_protocol', 1531632598),
('m180715_054019_protocol', 1531633465);

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `months`
--

CREATE TABLE `months` (
  `id` int(11) NOT NULL,
  `id_cat` int(11) NOT NULL,
  `month` enum('Yanvar','Fevral','Mart','Aprel','May','Iyun','Iyul','Avgust','Sentyabr','Oktyabr','Noyabr','Dekabr') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `months`
--

INSERT INTO `months` (`id`, `id_cat`, `month`) VALUES
(1, 2, 'Yanvar'),
(2, 1, 'Sentyabr'),
(3, 1, 'Oktyabr'),
(4, 1, 'Noyabr'),
(5, 2, 'Dekabr'),
(6, 2, 'Fevral'),
(7, 2, 'Mart'),
(8, 3, 'Aprel'),
(9, 3, 'May');

-- --------------------------------------------------------

--
-- Структура таблицы `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `month` varchar(100) NOT NULL,
  `year` varchar(100) NOT NULL,
  `payed` varchar(100) NOT NULL,
  `student_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `protocol`
--

CREATE TABLE `protocol` (
  `id` int(11) NOT NULL,
  `participants` text,
  `department_id` int(20) DEFAULT NULL,
  `schedule` text,
  `statement` text,
  `decision` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `protocol`
--

INSERT INTO `protocol` (`id`, `participants`, `department_id`, `schedule`, `statement`, `decision`) VALUES
(2, '<p style=\"text-align: center;\">Bayonnoma&nbsp; N9&nbsp; &nbsp;&nbsp;</p>\r\n<p>22 yanvar 2018 yil&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Urganch shahri</p>\r\n<pre>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus consectetur eveniet excepturi facilis illo odit placeat quisquam ut voluptate, voluptatum. Aut debitis ducimus, excepturi hic mollitia qui quis repellendus voluptate.</pre>\r\n<pre><br /><br /></pre>', 1, '<pre>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus consectetur eveniet excepturi facilis illo odit placeat quisquam ut voluptate, voluptatum. Aut debitis ducimus, excepturi hic mollitia qui quis repellendus voluptate.</pre>\r\n<pre>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus consectetur eveniet excepturi facilis illo odit placeat quisquam ut voluptate, voluptatum. Aut debitis ducimus, excepturi hic mollitia qui quis repellendus voluptate.</pre>', '<pre>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus consectetur eveniet excepturi facilis illo odit placeat quisquam ut voluptate, voluptatum. Aut debitis ducimus, excepturi hic mollitia qui quis repellendus voluptate.</pre>\r\n<pre>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus consectetur eveniet excepturi facilis illo odit placeat quisquam ut voluptate, voluptatum. Aut debitis ducimus, excepturi hic mollitia qui quis repellendus voluptate.</pre>\r\n<pre>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus consectetur eveniet excepturi facilis illo odit placeat quisquam ut voluptate, voluptatum. Aut debitis ducimus, excepturi hic mollitia qui quis repellendus voluptate.</pre>\r\n<pre>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus consectetur eveniet excepturi facilis illo odit placeat quisquam ut voluptate, voluptatum. Aut debitis ducimus, excepturi hic mollitia qui quis repellendus voluptate.</pre>', '<pre>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus consectetur eveniet excepturi facilis illo odit placeat quisquam ut voluptate, voluptatum. Aut debitis ducimus, excepturi hic mollitia qui quis repellendus voluptate.</pre>\r\n<pre>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus consectetur eveniet excepturi facilis illo odit placeat quisquam ut voluptate, voluptatum. Aut debitis ducimus, excepturi hic mollitia qui quis repellendus voluptate.</pre>\r\n<pre>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus consectetur eveniet excepturi facilis illo odit placeat quisquam ut voluptate, voluptatum. Aut debitis ducimus, excepturi hic mollitia qui quis repellendus voluptate.</pre>');

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
(1, '325-xona', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `schedule_item`
--

CREATE TABLE `schedule_item` (
  `id` int(11) NOT NULL,
  `subject_id` int(10) NOT NULL,
  `subject_type` enum('lecture','practice','labaratory','seminar','discussion') NOT NULL COMMENT 'Dars turi',
  `teacher_id` int(10) NOT NULL COMMENT 'O''qituvchi',
  `room_id` int(10) NOT NULL COMMENT 'Xona',
  `group_id` int(10) NOT NULL COMMENT 'Guruh',
  `day` enum('1-kun','2-kun','3-kun','4-kun','5-kun','6-kun') NOT NULL COMMENT 'Hafta kuni',
  `pair` enum('1','2','3','4','5','6') NOT NULL COMMENT 'Juftlik/Toqlik',
  `term_id` int(10) NOT NULL COMMENT 'Semestr',
  `week_type` enum('full','odd','even') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `schedule_item`
--

INSERT INTO `schedule_item` (`id`, `subject_id`, `subject_type`, `teacher_id`, `room_id`, `group_id`, `day`, `pair`, `term_id`, `week_type`) VALUES
(1, 7, 'practice', 5, 1, 1, '1-kun', '1', 2, 'odd'),
(2, 8, 'lecture', 5, 1, 1, '1-kun', '4', 2, 'full'),
(4, 7, 'lecture', 5, 1, 1, '4-kun', '6', 3, 'full'),
(5, 8, 'lecture', 5, 1, 1, '1-kun', '3', 4, 'full'),
(7, 8, 'lecture', 5, 1, 2, '3-kun', '1', 2, 'full'),
(8, 8, 'lecture', 5, 1, 1, '1-kun', '5', 2, 'odd');

-- --------------------------------------------------------

--
-- Структура таблицы `sections`
--

CREATE TABLE `sections` (
  `id` int(11) NOT NULL,
  `number` varchar(100) NOT NULL,
  `floor` varchar(100) NOT NULL
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
  `photo` varchar(255) DEFAULT NULL,
  `user_id` int(10) NOT NULL,
  `group_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `student`
--

INSERT INTO `student` (`id`, `reyting_no`, `direction_id`, `surname`, `name`, `patronymic`, `birthday`, `birthplace`, `education`, `workplace`, `father_name`, `father_workplace`, `father_phone`, `mother_name`, `mother_workplace`, `mother_phone`, `family_status`, `passport_serie`, `passport_number`, `passport_given`, `parents_address`, `address`, `living_type`, `created`, `updated`, `nationality`, `photo`, `user_id`, `group_id`) VALUES
(21, 'AA4553543', 1, 'Kurbanov', 'Salim', 'Karimovich', '12.03.1997', 'Urganch', 'o\'rta maxsus', '', '', '', '', '', '', '', 'o\'rtacha', 'AA', '1245789', 'Urganch shahar IIB', '', '', 'Uy', NULL, NULL, 'o\'zbek', NULL, 14, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `student_mistakes`
--

CREATE TABLE `student_mistakes` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `date` varchar(200) NOT NULL,
  `description` varchar(255) NOT NULL
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
  `seminar` int(11) DEFAULT NULL COMMENT 'Seminar soat',
  `seminar_id` int(11) NOT NULL,
  `independent_hour` int(11) DEFAULT NULL COMMENT 'Мустақил соат',
  `s1` int(11) DEFAULT NULL,
  `s2` int(11) DEFAULT NULL,
  `s3` int(11) DEFAULT NULL,
  `s4` int(11) DEFAULT NULL,
  `s5` int(11) DEFAULT NULL,
  `s6` int(11) DEFAULT NULL,
  `s7` int(11) DEFAULT NULL,
  `s8` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `subject`
--

INSERT INTO `subject` (`id`, `direction_id`, `semester_id`, `name`, `lecturer_id`, `practice_id`, `lab1_id`, `lab2_id`, `department_id`, `lecture_hour`, `practice_hour`, `lab_hour`, `seminar`, `seminar_id`, `independent_hour`, `s1`, `s2`, `s3`, `s4`, `s5`, `s6`, `s7`, `s8`) VALUES
(7, 1, 1, 'Fizika', 5, 5, 5, 5, 1, 36, 36, 45, 45, 5, 45, NULL, NULL, NULL, NULL, NULL, 5, NULL, NULL),
(8, 1, 1, 'O\'zbekiston tarixi', 5, 5, 5, 5, 1, 26, NULL, NULL, 28, 5, 38, 1, 2, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 1, 1, 'dd', 5, 5, 5, 5, 1, 12, 12, 21, 121, 5, 21, 41, -41, 0, NULL, NULL, NULL, NULL, NULL);

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
  `deputy` varchar(64) DEFAULT NULL COMMENT 'Халқ депутатлари, республика, вилоят, шаҳар ва туман Кенгаши депутатими ёки бошқа  сайланадиган органларнинг аъзосими (тўлиқ кўрсатилиши лозим)',
  `started_work` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `teacher`
--

INSERT INTO `teacher` (`id`, `fio`, `user_id`, `department_id`, `img`, `post`, `type`, `birthday`, `birthplace`, `nationality`, `partiya`, `degree`, `ended`, `specialization`, `science_degree`, `science_title`, `foreign_langs`, `gov_awards`, `deputy`, `started_work`) VALUES
(5, 'Artikov Muzaffar', 4, 1, '', 'O\'qituvchi', 'ichki', '1989', 'Urganch', 'Uzbek', 'yoq', 'oliy', '2015', 'yoq', 'yoq', 'yoq', 'ingliz', '', '', ''),
(6, 'Xo\'jamuratov Bekmurod ', 15, 1, '', 'o\'qituvchi', 'ichki', '1991', 'Urganch', 'uzbek', 'yoq', 'oliy', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Структура таблицы `term`
--

CREATE TABLE `term` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL COMMENT 'Номи',
  `semester` enum('autumn','spring') NOT NULL COMMENT 'Семестр'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `term`
--

INSERT INTO `term` (`id`, `name`, `semester`) VALUES
(1, '2017/18 Kuzgi', 'autumn'),
(2, '2017/2018 Bahorgi', 'spring'),
(3, '2018/2019 Bahorgi', 'spring'),
(4, '2018/2019 Kuzgi', 'autumn'),
(5, '2019/2020 Bahorgi', 'spring'),
(6, '2019/2020 Kuzgi', 'autumn');

-- --------------------------------------------------------

--
-- Структура таблицы `ttj_room`
--

CREATE TABLE `ttj_room` (
  `id` int(11) NOT NULL,
  `section_id` int(100) NOT NULL,
  `number` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `ttj_students`
--

CREATE TABLE `ttj_students` (
  `id` int(11) NOT NULL,
  `term_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `inside` int(11) NOT NULL
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
  `updated_at` int(11) NOT NULL,
  `role` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `role`) VALUES
(1, 'contract', 'asjdjkasdnasldmaklsdna', '$2y$13$QT.BA0jlQwWJFCtTOGw4NeP41qLkHfEV.LSQimCew9xkfGpKplrsy', NULL, 'qwerty@ui.op', 10, 0, 0, 'contract'),
(2, 'arslon', '2m1a8iVU6LmQLx7TYajOFQqYueEsUxT7', '$2y$13$Oq/TLelf2nU3pjglnEjLI.xRTHvfHDVC/8nC4bLEewoOuGYtovnA2', NULL, 'arslonsaidov300@gmail.com', 10, 1525338226, 1525338226, 'admin'),
(3, 'newuser', 'CtegpuecQEKU0ySFqtBJ6vIa3fXWzMo9', '123456', NULL, 'arslon@gmail.com', 0, 1536653593, 1536653593, 'student'),
(4, 'teacher', 'n5AgUQ1Umi9oRNrGWU-Ry6FTNQu3aZ1e', '$2y$13$QT.BA0jlQwWJFCtTOGw4NeP41qLkHfEV.LSQimCew9xkfGpKplrsy', NULL, 'arslon1@gmail.com', 10, 1536653962, 1536653962, 'teacher'),
(5, 'student', '0eQi-YjlMkLpUFc8euqtA_Q0RqrT96vW', '$2y$13$QT.BA0jlQwWJFCtTOGw4NeP41qLkHfEV.LSQimCew9xkfGpKplrsy', NULL, 'arslon@gg', 10, 1538836235, 1538836235, 'student'),
(6, 'student1', 'JAvuwqbuLRV9vMr353uGxMHN54tR_FXH', '$2y$13$.oYwR2TKOsC7nqpLidXpa.6WBqY5z3hgzFGyLfzW45IHFTitQKJbW', NULL, 'arslon@uh.com', 10, 1551366499, 1551366499, 'student'),
(7, 'arslon', 'D76j3ejnaS5Ln5WyVm7LkD1aV8Jl7blY', '$2y$13$eYqLF2wv.Z9ZHQ5DIhyvbOZZ3RVidRBkbo8ZQlGw7Wlvt1HwBubW6', NULL, 'arslon@uh.com', 0, 1552232377, 1552232377, 'student'),
(8, 'arslon0', 'jKL7d68M76NOSZtfHLxLxoJ7Q9X5X2Ot', '$2y$13$hL69V.sVGCH1DKR1bH63iOjV9wZMJMbURF7Ol6hcEc/BAvO9Oz5NW', NULL, 'LLL', 0, 1552232517, 1552232517, 'student'),
(9, 'arslon0', 'biPz_uTJEZei11Oxp9MTtWcXP78pevrj', '$2y$13$9WP0RfnO/LbAbU1i8eSdFuWTUTvQiNuGWjxgvUAyLQw.28IVIS5oy', NULL, 'LLL', 0, 1552233256, 1552233256, 'student'),
(10, 'arslonb', 'u2eLd_ys_CoveBQVA-eZUbV_2b-PVJjJ', '$2y$13$/uycKJ0XhxGgfZo7Sy/ZMeIDwb6PjqKcxDEE2qSoPdN4r7TGL8MxO', NULL, 'jiji', 0, 1552233348, 1552233348, 'student'),
(11, 'arslon8', '2m1a8iVU6LmQLx7TYajOFQqYueEsUxT7', '$2y$13$O53SsVJr2fs29FuTxYNBtubci58TNK7NfPugPPQyfiGqjsByzeMGi', NULL, 'arslon@uh.com', 0, 1552233828, 1552233828, 'student'),
(12, 'arslon9', 'HTAaA5Q35qWQdvxV3mfVj4CElK1bo-_M', '$2y$13$leWBZJKK/kSfBd4MHl9lRONFuDXNjkYOP5kASMMYRuKZ54pylBH4W', NULL, 'jk', 10, 1552234349, 1552234349, 'student'),
(13, 'arslon1', '2tY8y0865uPlLffW_yYb0oNmAFKXRBEJ', '$2y$13$r07PmxcZr1M7sRoLLPhQs.ahJGfUtBNNAmpDFycbRQwf/SXWUkAjO', NULL, 'arslonsaidov300@gmai.com', 10, 1552302919, 1552302919, 'student'),
(14, 'salim_student', 'OzZqqoWyqjpvN3ZiB634dtwKKeOM7y2-', '$2y$13$flYyWOVgOvdqahxav124FupqdlCyF4g7/LOQUbsg5RXGHqOIhu8fy', NULL, 'salim@ubtuit.uz', 10, 1552305500, 1552305500, 'student'),
(15, 'bek_murod', 'qpqfkPJeKO1uk7IoxYx0xYhmXGB69Jdo', '$2y$13$k/MoT8KpCJefOdEZ/0HFRe6UslxjfYLzuyka7DqtTg1cmn/u7OSvS', NULL, 'bekmurod@mail.ru', 10, 1552697156, 1552697156, 'teacher');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Индексы таблицы `announcement_student`
--
ALTER TABLE `announcement_student`
  ADD PRIMARY KEY (`id`),
  ADD KEY `announcement_id` (`announcement_id`),
  ADD KEY `student_id` (`student_id`);

--
-- Индексы таблицы `appeals`
--
ALTER TABLE `appeals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `term_id` (`term_id`);

--
-- Индексы таблицы `building`
--
ALTER TABLE `building`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `contract_amounts`
--
ALTER TABLE `contract_amounts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `term_ifk` (`term_id`),
  ADD KEY `direction_id` (`direction_id`);

--
-- Индексы таблицы `contract_payments`
--
ALTER TABLE `contract_payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `term_id` (`term_id`);

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
  ADD KEY `faculty_id` (`faculty_id`),
  ADD KEY `group_head_id_2` (`group_head_id`);

--
-- Индексы таблицы `lesson`
--
ALTER TABLE `lesson`
  ADD PRIMARY KEY (`id`),
  ADD KEY `term_id` (`term_id`),
  ADD KEY `lesson_type_id` (`lesson_type_id`),
  ADD KEY `group_id` (`group_id`),
  ADD KEY `teacher_id` (`teacher_id`);

--
-- Индексы таблицы `lesson_type`
--
ALTER TABLE `lesson_type`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subject_id` (`subject_id`);

--
-- Индексы таблицы `marks`
--
ALTER TABLE `marks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `group_id` (`group_id`),
  ADD KEY `lesson_type_id` (`lesson_type_id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `subject_id` (`subject_id`);

--
-- Индексы таблицы `materials`
--
ALTER TABLE `materials`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subject_id` (`subject_id`);

--
-- Индексы таблицы `material_files`
--
ALTER TABLE `material_files`
  ADD PRIMARY KEY (`id`),
  ADD KEY `material_files_ibfk_1` (`material_id`);

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
-- Индексы таблицы `months`
--
ALTER TABLE `months`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_cat` (`id_cat`);

--
-- Индексы таблицы `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `student_id_2` (`student_id`);

--
-- Индексы таблицы `protocol`
--
ALTER TABLE `protocol`
  ADD PRIMARY KEY (`id`),
  ADD KEY `department_id` (`department_id`);

--
-- Индексы таблицы `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`),
  ADD KEY `building_id` (`building_id`);

--
-- Индексы таблицы `schedule_item`
--
ALTER TABLE `schedule_item`
  ADD PRIMARY KEY (`id`),
  ADD KEY `group_id` (`group_id`),
  ADD KEY `room_id` (`room_id`),
  ADD KEY `teacher_id` (`teacher_id`),
  ADD KEY `term_id` (`term_id`),
  ADD KEY `subject_id` (`subject_id`);

--
-- Индексы таблицы `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`);

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
  ADD UNIQUE KEY `reyting_no` (`reyting_no`),
  ADD KEY `direction_id` (`direction_id`),
  ADD KEY `student_ibfk_3` (`group_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Индексы таблицы `student_mistakes`
--
ALTER TABLE `student_mistakes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`);

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
  ADD KEY `department_id` (`department_id`),
  ADD KEY `seminar_id` (`seminar_id`);

--
-- Индексы таблицы `subject_direction`
--
ALTER TABLE `subject_direction`
  ADD KEY `term_id` (`term_id`),
  ADD KEY `direction_id` (`direction_id`),
  ADD KEY `subject_id` (`subject_id`);

--
-- Индексы таблицы `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `department_id` (`department_id`);

--
-- Индексы таблицы `term`
--
ALTER TABLE `term`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `ttj_room`
--
ALTER TABLE `ttj_room`
  ADD PRIMARY KEY (`id`),
  ADD KEY `section_id` (`section_id`);

--
-- Индексы таблицы `ttj_students`
--
ALTER TABLE `ttj_students`
  ADD PRIMARY KEY (`id`),
  ADD KEY `section_id` (`section_id`),
  ADD KEY `room_id` (`room_id`),
  ADD KEY `term_id` (`term_id`),
  ADD KEY `student_id` (`student_id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `announcements`
--
ALTER TABLE `announcements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `announcement_student`
--
ALTER TABLE `announcement_student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `appeals`
--
ALTER TABLE `appeals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `building`
--
ALTER TABLE `building`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `contract_amounts`
--
ALTER TABLE `contract_amounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `contract_payments`
--
ALTER TABLE `contract_payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `direction`
--
ALTER TABLE `direction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `lesson`
--
ALTER TABLE `lesson`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `lesson_type`
--
ALTER TABLE `lesson_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `marks`
--
ALTER TABLE `marks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `materials`
--
ALTER TABLE `materials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `material_files`
--
ALTER TABLE `material_files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT для таблицы `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `months`
--
ALTER TABLE `months`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `protocol`
--
ALTER TABLE `protocol`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `room`
--
ALTER TABLE `room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `schedule_item`
--
ALTER TABLE `schedule_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `sections`
--
ALTER TABLE `sections`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT для таблицы `student_mistakes`
--
ALTER TABLE `student_mistakes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `term`
--
ALTER TABLE `term`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `ttj_room`
--
ALTER TABLE `ttj_room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `ttj_students`
--
ALTER TABLE `ttj_students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `announcements`
--
ALTER TABLE `announcements`
  ADD CONSTRAINT `announcements_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `announcement_student`
--
ALTER TABLE `announcement_student`
  ADD CONSTRAINT `announcement_student_ibfk_1` FOREIGN KEY (`announcement_id`) REFERENCES `announcements` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `announcement_student_ibfk_2` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `appeals`
--
ALTER TABLE `appeals`
  ADD CONSTRAINT `appeals_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `appeals_ibfk_2` FOREIGN KEY (`term_id`) REFERENCES `term` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `contract_amounts`
--
ALTER TABLE `contract_amounts`
  ADD CONSTRAINT `contract_amounts_ibfk_1` FOREIGN KEY (`direction_id`) REFERENCES `direction` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `term_ifk` FOREIGN KEY (`term_id`) REFERENCES `term` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `contract_payments`
--
ALTER TABLE `contract_payments`
  ADD CONSTRAINT `contract_payments_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `contract_payments_ibfk_2` FOREIGN KEY (`term_id`) REFERENCES `term` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `department`
--
ALTER TABLE `department`
  ADD CONSTRAINT `department_ibfk_1` FOREIGN KEY (`faculty_id`) REFERENCES `faculty` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `department_ibfk_2` FOREIGN KEY (`building_id`) REFERENCES `building` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `department_ibfk_3` FOREIGN KEY (`room_id`) REFERENCES `room` (`id`) ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `faculty`
--
ALTER TABLE `faculty`
  ADD CONSTRAINT `faculty_ibfk_1` FOREIGN KEY (`building_id`) REFERENCES `building` (`id`) ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `groups`
--
ALTER TABLE `groups`
  ADD CONSTRAINT `groups_ibfk_2` FOREIGN KEY (`direction_id`) REFERENCES `direction` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `groups_ibfk_3` FOREIGN KEY (`faculty_id`) REFERENCES `faculty` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `lesson`
--
ALTER TABLE `lesson`
  ADD CONSTRAINT `lesson_ibfk_1` FOREIGN KEY (`term_id`) REFERENCES `term` (`id`),
  ADD CONSTRAINT `lesson_ibfk_2` FOREIGN KEY (`lesson_type_id`) REFERENCES `lesson_type` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `lesson_ibfk_3` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `lesson_type`
--
ALTER TABLE `lesson_type`
  ADD CONSTRAINT `lesson_type_ibfk_1` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`id`) ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `marks`
--
ALTER TABLE `marks`
  ADD CONSTRAINT `marks_ibfk_1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `marks_ibfk_2` FOREIGN KEY (`lesson_type_id`) REFERENCES `lesson_type` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `marks_ibfk_3` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `marks_ibfk_4` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `materials`
--
ALTER TABLE `materials`
  ADD CONSTRAINT `materials_ibfk_1` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`id`) ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `material_files`
--
ALTER TABLE `material_files`
  ADD CONSTRAINT `material_files_ibfk_1` FOREIGN KEY (`material_id`) REFERENCES `materials` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `menu_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `menu` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `months`
--
ALTER TABLE `months`
  ADD CONSTRAINT `months_ibfk_1` FOREIGN KEY (`id_cat`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `protocol`
--
ALTER TABLE `protocol`
  ADD CONSTRAINT `protocol_ibfk_1` FOREIGN KEY (`department_id`) REFERENCES `department` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `room`
--
ALTER TABLE `room`
  ADD CONSTRAINT `room_ibfk_1` FOREIGN KEY (`building_id`) REFERENCES `building` (`id`) ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `schedule_item`
--
ALTER TABLE `schedule_item`
  ADD CONSTRAINT `schedule_item_ibfk_1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `schedule_item_ibfk_2` FOREIGN KEY (`room_id`) REFERENCES `room` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `schedule_item_ibfk_4` FOREIGN KEY (`teacher_id`) REFERENCES `teacher` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `schedule_item_ibfk_5` FOREIGN KEY (`term_id`) REFERENCES `term` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `schedule_item_ibfk_6` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`direction_id`) REFERENCES `direction` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `student_ibfk_3` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `student_mistakes`
--
ALTER TABLE `student_mistakes`
  ADD CONSTRAINT `student_mistakes_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `subject`
--
ALTER TABLE `subject`
  ADD CONSTRAINT `subject_ibfk_1` FOREIGN KEY (`direction_id`) REFERENCES `direction` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `subject_ibfk_2` FOREIGN KEY (`semester_id`) REFERENCES `term` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `subject_ibfk_7` FOREIGN KEY (`department_id`) REFERENCES `department` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `subject_ibfk_8` FOREIGN KEY (`seminar_id`) REFERENCES `teacher` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `subject_direction`
--
ALTER TABLE `subject_direction`
  ADD CONSTRAINT `subject_direction_ibfk_1` FOREIGN KEY (`term_id`) REFERENCES `term` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `subject_direction_ibfk_2` FOREIGN KEY (`direction_id`) REFERENCES `direction` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `subject_direction_ibfk_3` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`id`) ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `teacher`
--
ALTER TABLE `teacher`
  ADD CONSTRAINT `teacher_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `teacher_ibfk_2` FOREIGN KEY (`department_id`) REFERENCES `department` (`id`) ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `ttj_room`
--
ALTER TABLE `ttj_room`
  ADD CONSTRAINT `ttj_room_ibfk_1` FOREIGN KEY (`section_id`) REFERENCES `sections` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `ttj_students`
--
ALTER TABLE `ttj_students`
  ADD CONSTRAINT `ttj_students_ibfk_1` FOREIGN KEY (`term_id`) REFERENCES `term` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ttj_students_ibfk_2` FOREIGN KEY (`room_id`) REFERENCES `ttj_room` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ttj_students_ibfk_3` FOREIGN KEY (`section_id`) REFERENCES `sections` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ttj_students_ibfk_4` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
