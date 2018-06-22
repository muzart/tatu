-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Июн 20 2018 г., 08:17
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
  `start_date` varchar(200) NOT NULL,
  `tittle` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `end_date` varchar(200) NOT NULL,
  `status` enum('active','inactive') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `announcements`
--

INSERT INTO `announcements` (`id`, `start_date`, `tittle`, `body`, `end_date`, `status`) VALUES
(1, '10.02.2018', 'Yangilik', 'doifjdofij', '10.03.2018', 'active');

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
-- Структура таблицы `auth_assignment`
--

CREATE TABLE `auth_assignment` (
  `item_name` varchar(64) NOT NULL,
  `user_id` varchar(64) NOT NULL,
  `created_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `auth_assignment`
--

INSERT INTO `auth_assignment` (`item_name`, `user_id`, `created_at`) VALUES
('admin', '2', 1525402405),
('create-dekanat', '1', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `auth_item`
--

CREATE TABLE `auth_item` (
  `name` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text,
  `rule_name` varchar(64) DEFAULT NULL,
  `data` text,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `auth_item`
--

INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES
('/chat/send-chat/*', 2, NULL, NULL, NULL, 1527075373, 1527075373),
('/dekanat/*', 2, NULL, NULL, NULL, 1525397479, 1525397479),
('/dekanat/default/*', 2, NULL, NULL, NULL, 1527771055, 1527771055),
('/dekanat/default/index', 2, NULL, NULL, NULL, 1527771055, 1527771055),
('/dekanat/groups/*', 2, NULL, NULL, NULL, 1527771055, 1527771055),
('/dekanat/groups/create', 2, NULL, NULL, NULL, 1527771055, 1527771055),
('/dekanat/groups/delete', 2, NULL, NULL, NULL, 1527771055, 1527771055),
('/dekanat/groups/index', 2, NULL, NULL, NULL, 1527771055, 1527771055),
('/dekanat/groups/update', 2, NULL, NULL, NULL, 1527771055, 1527771055),
('/dekanat/groups/view', 2, NULL, NULL, NULL, 1527771055, 1527771055),
('/dekanat/student/*', 2, NULL, NULL, NULL, 1527771056, 1527771056),
('/dekanat/student/create', 2, NULL, NULL, NULL, 1527771056, 1527771056),
('/dekanat/student/delete', 2, NULL, NULL, NULL, 1527771056, 1527771056),
('/dekanat/student/index', 2, NULL, NULL, NULL, 1527771055, 1527771055),
('/dekanat/student/update', 2, NULL, NULL, NULL, 1527771056, 1527771056),
('/dekanat/student/view', 2, NULL, NULL, NULL, 1527771055, 1527771055),
('/dekanat/term/*', 2, NULL, NULL, NULL, 1527771056, 1527771056),
('/dekanat/term/create', 2, NULL, NULL, NULL, 1527771056, 1527771056),
('/dekanat/term/delete', 2, NULL, NULL, NULL, 1527771056, 1527771056),
('/dekanat/term/index', 2, NULL, NULL, NULL, 1527771056, 1527771056),
('/dekanat/term/update', 2, NULL, NULL, NULL, 1527771056, 1527771056),
('/dekanat/term/view', 2, NULL, NULL, NULL, 1527771056, 1527771056),
('/department/*', 2, NULL, NULL, NULL, 1525402691, 1525402691),
('/department/default/*', 2, NULL, NULL, NULL, 1527771060, 1527771060),
('/department/default/index', 2, NULL, NULL, NULL, 1527771060, 1527771060),
('/department/materials/*', 2, NULL, NULL, NULL, 1527771060, 1527771060),
('/department/materials/create', 2, NULL, NULL, NULL, 1527771060, 1527771060),
('/department/materials/delete', 2, NULL, NULL, NULL, 1527771060, 1527771060),
('/department/materials/index', 2, NULL, NULL, NULL, 1527771060, 1527771060),
('/department/materials/update', 2, NULL, NULL, NULL, 1527771060, 1527771060),
('/department/materials/view', 2, NULL, NULL, NULL, 1527771060, 1527771060),
('/department/subject/*', 2, NULL, NULL, NULL, 1527771061, 1527771061),
('/department/subject/create', 2, NULL, NULL, NULL, 1527771061, 1527771061),
('/department/subject/delete', 2, NULL, NULL, NULL, 1527771061, 1527771061),
('/department/subject/index', 2, NULL, NULL, NULL, 1527771060, 1527771060),
('/department/subject/update', 2, NULL, NULL, NULL, 1527771061, 1527771061),
('/department/subject/view', 2, NULL, NULL, NULL, 1527771060, 1527771060),
('/department/teacher/*', 2, NULL, NULL, NULL, 1527771061, 1527771061),
('/department/teacher/create', 2, NULL, NULL, NULL, 1527771061, 1527771061),
('/department/teacher/delete', 2, NULL, NULL, NULL, 1527771061, 1527771061),
('/department/teacher/index', 2, NULL, NULL, NULL, 1527771061, 1527771061),
('/department/teacher/update', 2, NULL, NULL, NULL, 1527771061, 1527771061),
('/department/teacher/view', 2, NULL, NULL, NULL, 1527771061, 1527771061),
('/dormitory/*', 2, NULL, NULL, NULL, 1527771061, 1527771061),
('/dormitory/default/*', 2, NULL, NULL, NULL, 1527771061, 1527771061),
('/dormitory/default/index', 2, NULL, NULL, NULL, 1527771061, 1527771061),
('/gii/*', 2, NULL, NULL, NULL, 1525412129, 1525412129),
('/http://basic.uz/chat/send-chat', 2, NULL, NULL, NULL, 1527075695, 1527075695),
('/student/*', 2, NULL, NULL, NULL, 1527771055, 1527771055),
('/student/default/*', 2, NULL, NULL, NULL, 1527771055, 1527771055),
('/student/default/index', 2, NULL, NULL, NULL, 1527771054, 1527771054),
('/subject/*', 2, NULL, NULL, NULL, 1527771060, 1527771060),
('/subject/default/*', 2, NULL, NULL, NULL, 1527771059, 1527771059),
('/subject/default/index', 2, NULL, NULL, NULL, 1527771059, 1527771059),
('/subject/materials/*', 2, NULL, NULL, NULL, 1527771060, 1527771060),
('/subject/materials/create', 2, NULL, NULL, NULL, 1527771059, 1527771059),
('/subject/materials/delete', 2, NULL, NULL, NULL, 1527771059, 1527771059),
('/subject/materials/index', 2, NULL, NULL, NULL, 1527771059, 1527771059),
('/subject/materials/update', 2, NULL, NULL, NULL, 1527771059, 1527771059),
('/subject/materials/view', 2, NULL, NULL, NULL, 1527771059, 1527771059),
('/subject/subject/*', 2, NULL, NULL, NULL, 1527771060, 1527771060),
('/subject/subject/create', 2, NULL, NULL, NULL, 1527771060, 1527771060),
('/subject/subject/delete', 2, NULL, NULL, NULL, 1527771060, 1527771060),
('/subject/subject/index', 2, NULL, NULL, NULL, 1527771060, 1527771060),
('/subject/subject/update', 2, NULL, NULL, NULL, 1527771060, 1527771060),
('/subject/subject/view', 2, NULL, NULL, NULL, 1527771060, 1527771060),
('/teacher/*', 2, NULL, NULL, NULL, 1527771059, 1527771059),
('/teacher/default/*', 2, NULL, NULL, NULL, 1527771059, 1527771059),
('/teacher/default/index', 2, NULL, NULL, NULL, 1527771059, 1527771059),
('/university/*', 2, NULL, NULL, NULL, 1527771059, 1527771059),
('/university/building/*', 2, NULL, NULL, NULL, 1527771057, 1527771057),
('/university/building/create', 2, NULL, NULL, NULL, 1527771056, 1527771056),
('/university/building/delete', 2, NULL, NULL, NULL, 1527771057, 1527771057),
('/university/building/index', 2, NULL, NULL, NULL, 1527771056, 1527771056),
('/university/building/update', 2, NULL, NULL, NULL, 1527771057, 1527771057),
('/university/building/view', 2, NULL, NULL, NULL, 1527771056, 1527771056),
('/university/default/*', 2, NULL, NULL, NULL, 1527771057, 1527771057),
('/university/default/index', 2, NULL, NULL, NULL, 1527771057, 1527771057),
('/university/department/*', 2, NULL, NULL, NULL, 1527771057, 1527771057),
('/university/department/create', 2, NULL, NULL, NULL, 1527771057, 1527771057),
('/university/department/delete', 2, NULL, NULL, NULL, 1527771057, 1527771057),
('/university/department/index', 2, NULL, NULL, NULL, 1527771057, 1527771057),
('/university/department/update', 2, NULL, NULL, NULL, 1527771057, 1527771057),
('/university/department/view', 2, NULL, NULL, NULL, 1527771057, 1527771057),
('/university/direction/*', 2, NULL, NULL, NULL, 1527771058, 1527771058),
('/university/direction/create', 2, NULL, NULL, NULL, 1527771057, 1527771057),
('/university/direction/delete', 2, NULL, NULL, NULL, 1527771058, 1527771058),
('/university/direction/index', 2, NULL, NULL, NULL, 1527771057, 1527771057),
('/university/direction/update', 2, NULL, NULL, NULL, 1527771058, 1527771058),
('/university/direction/view', 2, NULL, NULL, NULL, 1527771057, 1527771057),
('/university/faculty/*', 2, NULL, NULL, NULL, 1527771058, 1527771058),
('/university/faculty/create', 2, NULL, NULL, NULL, 1527771058, 1527771058),
('/university/faculty/delete', 2, NULL, NULL, NULL, 1527771058, 1527771058),
('/university/faculty/index', 2, NULL, NULL, NULL, 1527771058, 1527771058),
('/university/faculty/update', 2, NULL, NULL, NULL, 1527771058, 1527771058),
('/university/faculty/view', 2, NULL, NULL, NULL, 1527771058, 1527771058),
('/university/room/*', 2, NULL, NULL, NULL, 1527771059, 1527771059),
('/university/room/create', 2, NULL, NULL, NULL, 1527771058, 1527771058),
('/university/room/delete', 2, NULL, NULL, NULL, 1527771059, 1527771059),
('/university/room/index', 2, NULL, NULL, NULL, 1527771058, 1527771058),
('/university/room/update', 2, NULL, NULL, NULL, 1527771059, 1527771059),
('/university/room/view', 2, NULL, NULL, NULL, 1527771058, 1527771058),
('admin', 1, 'admin can perform all of them.', NULL, NULL, NULL, NULL),
('create-dekanat', 1, 'it allows to create dekanat. ', NULL, NULL, NULL, NULL),
('create-department', 1, 'it allows to crea.te department', NULL, NULL, NULL, NULL),
('create-subject', 1, 'it allows to create subject.', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `auth_item_child`
--

CREATE TABLE `auth_item_child` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `auth_item_child`
--

INSERT INTO `auth_item_child` (`parent`, `child`) VALUES
('admin', '/chat/send-chat/*'),
('admin', '/dekanat/*'),
('admin', '/dekanat/default/*'),
('admin', '/dekanat/default/index'),
('admin', '/dekanat/groups/*'),
('admin', '/dekanat/groups/create'),
('admin', '/dekanat/groups/delete'),
('admin', '/dekanat/groups/index'),
('admin', '/dekanat/groups/update'),
('admin', '/dekanat/groups/view'),
('admin', '/dekanat/student/*'),
('admin', '/dekanat/student/create'),
('admin', '/dekanat/student/delete'),
('admin', '/dekanat/student/index'),
('admin', '/dekanat/student/update'),
('admin', '/dekanat/student/view'),
('admin', '/dekanat/term/*'),
('admin', '/dekanat/term/create'),
('admin', '/dekanat/term/delete'),
('admin', '/dekanat/term/index'),
('admin', '/dekanat/term/update'),
('admin', '/dekanat/term/view'),
('admin', '/department/*'),
('admin', '/department/default/*'),
('admin', '/department/default/index'),
('admin', '/department/materials/*'),
('admin', '/department/materials/create'),
('admin', '/department/materials/delete'),
('admin', '/department/materials/index'),
('admin', '/department/materials/update'),
('admin', '/department/materials/view'),
('admin', '/department/subject/*'),
('admin', '/department/subject/create'),
('admin', '/department/subject/delete'),
('admin', '/department/subject/index'),
('admin', '/department/subject/update'),
('admin', '/department/subject/view'),
('admin', '/department/teacher/*'),
('admin', '/department/teacher/create'),
('admin', '/department/teacher/delete'),
('admin', '/department/teacher/index'),
('admin', '/department/teacher/update'),
('admin', '/department/teacher/view'),
('admin', '/dormitory/*'),
('admin', '/dormitory/default/*'),
('admin', '/dormitory/default/index'),
('admin', '/gii/*'),
('admin', '/http://basic.uz/chat/send-chat'),
('admin', '/student/*'),
('admin', '/student/default/*'),
('admin', '/student/default/index'),
('admin', '/subject/*'),
('admin', '/subject/default/*'),
('admin', '/subject/default/index'),
('admin', '/subject/materials/*'),
('admin', '/subject/materials/create'),
('admin', '/subject/materials/delete'),
('admin', '/subject/materials/index'),
('admin', '/subject/materials/update'),
('admin', '/subject/materials/view'),
('admin', '/subject/subject/*'),
('admin', '/subject/subject/create'),
('admin', '/subject/subject/delete'),
('admin', '/subject/subject/index'),
('admin', '/subject/subject/update'),
('admin', '/subject/subject/view'),
('admin', '/teacher/*'),
('admin', '/teacher/default/*'),
('admin', '/teacher/default/index'),
('admin', '/university/*'),
('admin', '/university/building/*'),
('admin', '/university/building/create'),
('admin', '/university/building/delete'),
('admin', '/university/building/index'),
('admin', '/university/building/update'),
('admin', '/university/building/view'),
('admin', '/university/default/*'),
('admin', '/university/default/index'),
('admin', '/university/department/*'),
('admin', '/university/department/create'),
('admin', '/university/department/delete'),
('admin', '/university/department/index'),
('admin', '/university/department/update'),
('admin', '/university/department/view'),
('admin', '/university/direction/*'),
('admin', '/university/direction/create'),
('admin', '/university/direction/delete'),
('admin', '/university/direction/index'),
('admin', '/university/direction/update'),
('admin', '/university/direction/view'),
('admin', '/university/faculty/*'),
('admin', '/university/faculty/create'),
('admin', '/university/faculty/delete'),
('admin', '/university/faculty/index'),
('admin', '/university/faculty/update'),
('admin', '/university/faculty/view'),
('admin', '/university/room/*'),
('admin', '/university/room/create'),
('admin', '/university/room/delete'),
('admin', '/university/room/index'),
('admin', '/university/room/update'),
('admin', '/university/room/view'),
('admin', 'create-dekanat'),
('admin', 'create-department'),
('admin', 'create-subject');

-- --------------------------------------------------------

--
-- Структура таблицы `auth_rule`
--

CREATE TABLE `auth_rule` (
  `name` varchar(64) NOT NULL,
  `data` text,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
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
-- Структура таблицы `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `userId` int(11) DEFAULT NULL,
  `message` text,
  `updateDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `chat`
--

INSERT INTO `chat` (`id`, `userId`, `message`, `updateDate`) VALUES
(21, 2, 'dffdf', '2018-05-23 12:24:28'),
(22, 2, 'dffdf', '2018-05-23 12:24:29'),
(23, 2, 'dffdf', '2018-05-23 12:24:29'),
(24, 2, 'sdsdsd', '2018-05-23 12:24:35'),
(25, 2, 'sdsdsd', '2018-05-23 12:24:35'),
(26, 2, 'sdsdsd', '2018-05-23 12:24:36'),
(27, 2, 'koko', '2018-05-23 12:25:29'),
(28, 2, 'uiuiui', '2018-05-23 12:25:42'),
(29, 2, 'arslon', '2018-05-23 12:26:17'),
(30, 2, 'arslon', '2018-05-23 12:26:18'),
(31, 2, 'fefefe', '2018-05-23 12:28:07'),
(32, 2, 'odjfodjfdoijfdf', '2018-05-23 12:28:16'),
(33, 2, 'odjfodjfdoijfdf', '2018-05-23 12:28:17'),
(34, 2, 'uuue', '2018-05-23 12:28:23'),
(35, 2, 'ooo', '2018-05-23 12:36:48');

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
(1, '5330600', 'Kompyuter injiniring');

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
(1, '914-45', 1, 1, 3, 1);

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
(7, 3, 'laboratory', 'Bir ish qilish ikki', '2');

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
  `user_id` int(11) NOT NULL,
  `group_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `student`
--

INSERT INTO `student` (`id`, `reyting_no`, `direction_id`, `surname`, `name`, `patronymic`, `birthday`, `birthplace`, `education`, `workplace`, `father_name`, `father_workplace`, `father_phone`, `mother_name`, `mother_workplace`, `mother_phone`, `family_status`, `passport_serie`, `passport_number`, `passport_given`, `parents_address`, `address`, `living_type`, `created`, `updated`, `nationality`, `photo`, `user_id`, `group_id`) VALUES
(6, '454', 1, 'dfjdk', 'kjkj', 'kjkj', 'jkjkj', 'kjkj', 'kjkjkj', 'lklk', 'ljlk', 'jkjkj', 'kjkjkj', 'kjkj', 'kjkjkj', 'kjkjk', 'kjkjk', 'kjk', 'jkjkj', 'kjkjkj', 'j', 'kokok', 'Uy', NULL, NULL, 'kjkkj', 'kjkj_dfjdk.jpg', 0, 1),
(7, '654', 1, 'ojoijoij', 'ouhiu', 'oijoi', 'oijoi', 'oijoi', 'oijoij', 'pok', 'ojoij', 'oijo', 'ij', 'oij', 'oi', 'joi', 'oij', 'oij', 'oijoij', 'oijoi', 'j', 'ijoi', 'Uy', NULL, NULL, 'joij', 'ouhiu_ojoijoij.jpg', 0, 1),
(8, '98946465', 1, 'Jabborov', 'Jabbor', 'Jabborovich', '1970', 'Bogot', 'oliy', 'jhjkhkjhkjh', 'fgfghkhkjh', 'kjhkjhk', 'jh', 'kjh', 'kjh', 'k', 'norma', 'aa', '9876543', 'IIB', 'jh', 'odjfoijgdfojg', 'Uy', NULL, NULL, 'ozbek', 'jabbor_jabborov.jpg', 0, 1);

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
  `independent_hour` int(11) DEFAULT NULL COMMENT 'Мустақил соат'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `subject`
--

INSERT INTO `subject` (`id`, `direction_id`, `semester_id`, `name`, `lecturer_id`, `practice_id`, `lab1_id`, `lab2_id`, `department_id`, `lecture_hour`, `practice_hour`, `lab_hour`, `independent_hour`) VALUES
(1, 1, 1, 'Web ilovalarni ishlab chiqish', 3, 1, 1, 1, 1, 68, 34, 34, 60),
(2, 1, 1, 'linux', 4, 4, 3, 4, 1, 23, 32, 546, 956),
(3, 1, 1, 'fizika', 3, 3, 3, 3, 1, 20, 20, 20, 20);

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
(3, 'Arslon Saidov Davron og`li', 1, 1, 'arslon_saidov_davron_og`li.jpg', 'direktror', 'asosiy', '1996.09.19', 'iuewf', 'iug', 'iug', 'iu', 'gi', 'ug', 'iug', 'iu', 'gi', 'ug', 'uig', '12.21'),
(4, 'ofhgo', 1, 1, 'ofhgo.png', 'huh', 'ichki', 'o', 'ho', 'ih', 'oi', 'ho', 'ih', 'oih', 'o', 'ih', 'oih', 'o', 'ih', '51');

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
(1, '2017/18 Kuzgi', 'autumn');

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
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'asjdjkasdnasldmaklsdna', '12345', 'asdasdlksadaskl', 'qwerty@ui.op', 10, 0, 0),
(2, 'arslon', '2m1a8iVU6LmQLx7TYajOFQqYueEsUxT7', '$2y$13$Oq/TLelf2nU3pjglnEjLI.xRTHvfHDVC/8nC4bLEewoOuGYtovnA2', NULL, 'arslonsaidov300@gmail.com', 10, 1525338226, 1525338226);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`id`);

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
-- Индексы таблицы `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD PRIMARY KEY (`item_name`,`user_id`);

--
-- Индексы таблицы `auth_item`
--
ALTER TABLE `auth_item`
  ADD PRIMARY KEY (`name`),
  ADD KEY `rule_name` (`rule_name`),
  ADD KEY `type` (`type`);

--
-- Индексы таблицы `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD PRIMARY KEY (`parent`,`child`),
  ADD KEY `child` (`child`);

--
-- Индексы таблицы `auth_rule`
--
ALTER TABLE `auth_rule`
  ADD PRIMARY KEY (`name`);

--
-- Индексы таблицы `building`
--
ALTER TABLE `building`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `chat_ibfk_1` (`userId`);

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
-- Индексы таблицы `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `student_id_2` (`student_id`);

--
-- Индексы таблицы `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`),
  ADD KEY `building_id` (`building_id`);

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
  ADD KEY `user_id` (`user_id`),
  ADD KEY `group_id` (`group_id`);

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
  ADD KEY `department_id` (`department_id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
-- AUTO_INCREMENT для таблицы `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT для таблицы `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `direction`
--
ALTER TABLE `direction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
-- AUTO_INCREMENT для таблицы `materials`
--
ALTER TABLE `materials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
-- AUTO_INCREMENT для таблицы `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `room`
--
ALTER TABLE `room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `student_mistakes`
--
ALTER TABLE `student_mistakes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `term`
--
ALTER TABLE `term`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

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
-- Ограничения внешнего ключа таблицы `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `auth_item`
--
ALTER TABLE `auth_item`
  ADD CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `chat`
--
ALTER TABLE `chat`
  ADD CONSTRAINT `chat_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
  ADD CONSTRAINT `groups_ibfk_2` FOREIGN KEY (`direction_id`) REFERENCES `direction` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `groups_ibfk_3` FOREIGN KEY (`faculty_id`) REFERENCES `faculty` (`id`) ON UPDATE CASCADE;

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
-- Ограничения внешнего ключа таблицы `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `room`
--
ALTER TABLE `room`
  ADD CONSTRAINT `room_ibfk_1` FOREIGN KEY (`building_id`) REFERENCES `building` (`id`) ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`direction_id`) REFERENCES `direction` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `student_ibfk_3` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `student_mistakes`
--
ALTER TABLE `student_mistakes`
  ADD CONSTRAINT `student_mistakes_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `subject`
--
ALTER TABLE `subject`
  ADD CONSTRAINT `subject_ibfk_1` FOREIGN KEY (`direction_id`) REFERENCES `direction` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `subject_ibfk_2` FOREIGN KEY (`semester_id`) REFERENCES `term` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `subject_ibfk_7` FOREIGN KEY (`department_id`) REFERENCES `department` (`id`) ON UPDATE CASCADE;

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
