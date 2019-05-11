-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2019 at 12:53 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `talaba`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE `announcements` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `tittle` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `end_date` varchar(200) NOT NULL,
  `status` enum('active','inactive') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `announcements`
--

INSERT INTO `announcements` (`id`, `user_id`, `tittle`, `body`, `end_date`, `status`) VALUES
(2, 14, 'df', 'ijij', '121', 'inactive'),
(3, 14, 'pokp', 'sss', 'o', 'inactive'),
(4, 14, 'ki', 'ki', 'ki', 'inactive'),
(5, 14, 'dfd', 'jjij', '12.12.12', 'inactive'),
(6, 14, 'jkj', 'jkjkj', '12', 'inactive'),
(7, 14, 'reference', '<h1 style=\"text-align: left;\">&nbsp; &nbsp;kdjfdkjfdf</h1>', '2019-05-10', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `announcement_student`
--

CREATE TABLE `announcement_student` (
  `id` int(11) NOT NULL,
  `announcement_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `appeals`
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
-- Table structure for table `building`
--

CREATE TABLE `building` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `building`
--

INSERT INTO `building` (`id`, `name`) VALUES
(1, 'Asosiy bino');

-- --------------------------------------------------------

--
-- Table structure for table `contract_amounts`
--

CREATE TABLE `contract_amounts` (
  `id` int(11) NOT NULL,
  `total_amount` int(100) NOT NULL COMMENT 'To''lanishi kerak bo''lgan umumiy summa',
  `term_id` int(10) NOT NULL COMMENT 'Semestr',
  `direction_id` int(10) NOT NULL COMMENT 'Yo''nalish',
  `deadline` varchar(100) NOT NULL COMMENT 'Ohirgi muddat'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contract_amounts`
--

INSERT INTO `contract_amounts` (`id`, `total_amount`, `term_id`, `direction_id`, `deadline`) VALUES
(1, 8900000, 1, 1, '22.04.2019'),
(2, 1000000, 1, 2, '10.20.2020'),
(3, 12000000, 2, 1, '10.20.2020'),
(4, 13000000, 6, 2, '10.20.2020');

-- --------------------------------------------------------

--
-- Table structure for table `contract_payments`
--

CREATE TABLE `contract_payments` (
  `id` int(11) NOT NULL,
  `student_id` int(10) NOT NULL COMMENT 'Talaba',
  `group_id` int(10) NOT NULL,
  `term_id` int(10) NOT NULL COMMENT 'Semestr',
  `payment_date` varchar(20) NOT NULL COMMENT 'To''langan vaqti',
  `payment_amount` int(100) NOT NULL COMMENT 'To''langan summa'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contract_payments`
--

INSERT INTO `contract_payments` (`id`, `student_id`, `group_id`, `term_id`, `payment_date`, `payment_amount`) VALUES
(6, 21, 1, 1, '27-03-2019', 500000),
(7, 21, 2, 1, '27-03-2019', 2000000);

-- --------------------------------------------------------

--
-- Table structure for table `current_term`
--

CREATE TABLE `current_term` (
  `id` int(11) NOT NULL,
  `current_term_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `current_term`
--

INSERT INTO `current_term` (`id`, `current_term_id`) VALUES
(1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL COMMENT 'Номи',
  `faculty_id` int(11) NOT NULL COMMENT 'Факультет',
  `building_id` int(11) NOT NULL COMMENT 'Бино',
  `room_id` int(11) NOT NULL COMMENT 'Хона'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `name`, `faculty_id`, `building_id`, `room_id`) VALUES
(1, 'Dasturiy injiniring', 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `direction`
--

CREATE TABLE `direction` (
  `id` int(11) NOT NULL,
  `code` varchar(10) NOT NULL COMMENT 'Йўналиш коди',
  `name` varchar(100) NOT NULL COMMENT 'Йўналиш номи'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `direction`
--

INSERT INTO `direction` (`id`, `code`, `name`) VALUES
(1, '5330600', 'Kompyuter injiniring'),
(2, '5330001', 'Dasturiy inginering');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` int(11) NOT NULL,
  `event_title` varchar(80) NOT NULL,
  `event_detail` varchar(255) NOT NULL,
  `event_start_date` datetime NOT NULL,
  `event_end_date` datetime NOT NULL,
  `event_type` int(11) NOT NULL,
  `event_url` varchar(255) DEFAULT NULL,
  `event_all_day` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `is_status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `event_title`, `event_detail`, `event_start_date`, `event_end_date`, `event_type`, `event_url`, `event_all_day`, `created_at`, `created_by`, `updated_at`, `updated_by`, `is_status`) VALUES
(1, 'tyty', 'tyty', '2018-12-21 01:00:00', '2018-12-21 01:00:00', 1, NULL, 0, '2018-12-21 22:44:52', 1, NULL, NULL, 0),
(2, 'namuna', 'fdkfdk', '2019-04-01 02:00:00', '2019-04-01 02:00:00', 3, NULL, 0, '2019-04-01 20:13:28', 1, '2019-04-02 15:13:42', 2, 2),
(3, 'namuna2', 'djfdk', '2019-04-01 02:00:00', '2019-04-01 02:00:00', 2, NULL, 0, '2019-04-01 20:13:46', 1, '2019-04-02 15:13:47', 2, 2),
(4, 'namuna', 'll,l', '2019-04-01 22:00:36', '2019-04-01 22:00:36', 1, ',', 2, '2019-04-02 10:00:36', 2, '0000-00-00 00:00:00', 3, 5),
(5, 'namuna', 'll,l', '2019-04-01 02:00:00', '2019-04-01 02:00:00', 1, '1', 1, '2019-04-02 10:02:54', 1, '0000-00-00 00:00:00', 1, 1),
(6, 'namuna', 'jjj', '2019-04-02 02:00:00', '2019-04-02 02:05:00', 1, NULL, 0, '2019-04-02 10:16:03', 2, '2019-04-26 20:33:55', 2, 2),
(7, 'namuna2', 'lll', '2019-04-04 02:00:00', '2019-04-04 02:00:00', 1, NULL, 0, '2019-04-02 10:16:33', 2, NULL, NULL, 0),
(8, 'mm', 'mmmm', '2019-04-02 02:00:00', '2019-04-02 02:00:00', 2, NULL, 0, '2019-04-02 10:39:30', 2, '2019-04-26 20:33:49', 2, 2),
(9, 'jjj', 'j', '2019-04-02 02:00:00', '2019-05-22 02:00:00', 1, NULL, 0, '2019-04-02 11:03:22', 2, '2019-04-02 15:12:00', 2, 2),
(10, 'kkk', 'mmm', '2019-04-02 02:00:00', '2019-04-02 02:00:00', 3, NULL, 0, '2019-04-02 12:00:57', 2, '2019-04-26 20:33:41', 2, 2),
(11, 'namuna', 'gg', '2019-04-02 10:00:00', '2019-04-03 02:10:00', 2, NULL, 0, '2019-04-02 12:09:51', 2, '2019-04-26 20:34:01', 2, 2),
(12, 'Stadion Ochililish marsosimi', 'Hamma soat 8 da yig\'ilishi kerak', '2019-04-01 03:00:00', '2019-04-01 04:00:00', 1, NULL, 0, '2019-04-02 15:14:43', 2, '2019-04-02 15:15:08', 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL COMMENT 'Номи',
  `building_id` int(11) NOT NULL COMMENT 'Бино'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `name`, `building_id`) VALUES
(1, 'Kompyuter injiniring', 1);

-- --------------------------------------------------------

--
-- Table structure for table `groups`
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
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `group_head_id`, `direction_id`, `course`, `faculty_id`) VALUES
(1, '914-46', 5, 1, 2, 1),
(2, '941-15', 5, 1, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `lesson`
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
-- Table structure for table `lesson_type`
--

CREATE TABLE `lesson_type` (
  `id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `lesson_type` enum('lecture','practice','laboratory','seminar') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `marks`
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
-- Table structure for table `materials`
--

CREATE TABLE `materials` (
  `id` int(11) NOT NULL,
  `subject_id` int(10) NOT NULL,
  `studies_kind` enum('lecture','laboratory','practice') NOT NULL,
  `topic` varchar(255) NOT NULL,
  `planned_hour` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `material_files`
--

CREATE TABLE `material_files` (
  `id` int(11) NOT NULL,
  `material_id` int(10) NOT NULL,
  `file_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
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
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m140602_111327_create_menu_table', 1531299494),
('m171123_103519_create_table_materials', 1531299495),
('m180711_092733_user_role_column', 1531299497),
('m180715_051541_protocol', 1531632598),
('m180715_054019_protocol', 1531633465);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
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
-- Table structure for table `plan_subject_teacher`
--

CREATE TABLE `plan_subject_teacher` (
  `id` int(11) NOT NULL,
  `teacher_id` int(10) NOT NULL,
  `subject_id` int(10) NOT NULL,
  `subject_type_id` int(10) NOT NULL,
  `term_id` int(10) NOT NULL,
  `potok_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `plan_subject_type`
--

CREATE TABLE `plan_subject_type` (
  `id` int(10) NOT NULL,
  `subject_id` int(10) NOT NULL,
  `subject_type_id` int(10) NOT NULL,
  `hour` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `plan_subject_type`
--

INSERT INTO `plan_subject_type` (`id`, `subject_id`, `subject_type_id`, `hour`) VALUES
(17, 38, 1, 90);

-- --------------------------------------------------------

--
-- Table structure for table `potok`
--

CREATE TABLE `potok` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `potok_group`
--

CREATE TABLE `potok_group` (
  `id` int(11) NOT NULL,
  `potok_id` int(10) NOT NULL,
  `group_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `protocol`
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
-- Dumping data for table `protocol`
--

INSERT INTO `protocol` (`id`, `participants`, `department_id`, `schedule`, `statement`, `decision`) VALUES
(2, '<h1 style=\"text-align: center;\">Bayonnoma&nbsp; N9</h1>\r\n<div style=\"text-align: left;\">2019-04-01 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;bir nasa&nbsp;</div>', 1, '<p>ggrrg re tr trt r</p>', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL COMMENT 'Номи',
  `building_id` int(11) NOT NULL COMMENT 'Бино'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `name`, `building_id`) VALUES
(1, '325-xona', 1);

-- --------------------------------------------------------

--
-- Table structure for table `schedule_item`
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
-- Dumping data for table `schedule_item`
--

INSERT INTO `schedule_item` (`id`, `subject_id`, `subject_type`, `teacher_id`, `room_id`, `group_id`, `day`, `pair`, `term_id`, `week_type`) VALUES
(1, 38, 'lecture', 5, 1, 1, '1-kun', '3', 5, 'full');

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `id` int(11) NOT NULL,
  `number` varchar(100) NOT NULL,
  `floor` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
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
-- Table structure for table `student`
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
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `reyting_no`, `direction_id`, `surname`, `name`, `patronymic`, `birthday`, `birthplace`, `education`, `workplace`, `father_name`, `father_workplace`, `father_phone`, `mother_name`, `mother_workplace`, `mother_phone`, `family_status`, `passport_serie`, `passport_number`, `passport_given`, `parents_address`, `address`, `living_type`, `created`, `updated`, `nationality`, `photo`, `user_id`, `group_id`) VALUES
(21, 'AA4553543', 1, 'Kurbanov', 'Salim', 'Karimovich', '12.03.1997', 'Urganch', 'o\'rta maxsus', '', '', '', '', '', '', '', 'o\'rtacha', 'AA', '1245789', 'Urganch shahar IIB', '', '', 'Uy', NULL, NULL, 'o\'zbek', 'salim_kurbanov.jpg', 14, 1),
(25, 'AA45535787', 1, 'Kurbanov', 'Salim', 'Karimovich', '12.03.1997', 'Urganch', 'o\'rta maxsus', '', '', '', '', '', '', '', 'o\'rtacha', 'AA', '1245786', 'Urganch shahar IIB', '', '', 'Uy', NULL, NULL, 'o\'zbek', NULL, 14, 1),
(28, 'AA45534561', 1, 'Kurbanov', 'Salim', 'Karimovich', '12.03.1997', 'Urganch', 'o\'rta maxsus', '', '', '', '', '', '', '', 'o\'rtacha', 'AA', '1245789', 'Urganch shahar IIB', '', '', 'Uy', NULL, NULL, 'o\'zbek', NULL, 14, 1),
(29, 'AA45535788', 1, 'Kurbanov', 'Salim', 'Karimovich', '12.03.1997', 'Urganch', 'o\'rta maxsus', '', '', '', '', '', '', '', 'o\'rtacha', 'AA', '1245786', 'Urganch shahar IIB', '', '', 'Uy', NULL, NULL, 'o\'zbek', NULL, 14, 2);

-- --------------------------------------------------------

--
-- Table structure for table `student_mistakes`
--

CREATE TABLE `student_mistakes` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `date` varchar(200) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `department_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `name`, `department_id`) VALUES
(38, 'Fizika', 1);

-- --------------------------------------------------------

--
-- Table structure for table `subject_direction`
--

CREATE TABLE `subject_direction` (
  `id` int(11) NOT NULL,
  `subject_id` int(10) NOT NULL,
  `direction_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subject_direction`
--

INSERT INTO `subject_direction` (`id`, `subject_id`, `direction_id`) VALUES
(13, 38, 1);

-- --------------------------------------------------------

--
-- Table structure for table `subject_term`
--

CREATE TABLE `subject_term` (
  `id` int(11) NOT NULL,
  `subject_id` int(10) NOT NULL,
  `term_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subject_term`
--

INSERT INTO `subject_term` (`id`, `subject_id`, `term_id`) VALUES
(3, 38, 1);

-- --------------------------------------------------------

--
-- Table structure for table `subject_type`
--

CREATE TABLE `subject_type` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL COMMENT 'Fan turi'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subject_type`
--

INSERT INTO `subject_type` (`id`, `name`) VALUES
(1, 'Leksiya'),
(2, 'Laboratoriya'),
(3, 'Konsultasiya'),
(4, 'Amaliyot'),
(5, 'O\'zlashtirish nazorati'),
(6, 'Magistrantga rahbarlik'),
(7, 'Kurs loyihasi'),
(8, 'Bitiruv ishiga rahbarlik');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
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
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `fio`, `user_id`, `department_id`, `img`, `post`, `type`, `birthday`, `birthplace`, `nationality`, `partiya`, `degree`, `ended`, `specialization`, `science_degree`, `science_title`, `foreign_langs`, `gov_awards`, `deputy`, `started_work`) VALUES
(5, 'Artikov Muzaffar', 4, 1, '', 'O\'qituvchi', 'ichki', '1989', 'Urganch', 'Uzbek', 'yoq', 'oliy', '2015', 'yoq', 'yoq', 'yoq', 'ingliz', '', '', ''),
(6, 'Xo\'jamuratov Bekmurod ', 15, 1, '', 'o\'qituvchi', 'ichki', '1991', 'Urganch', 'uzbek', 'yoq', 'oliy', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `term`
--

CREATE TABLE `term` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL COMMENT 'Номи',
  `semester` enum('autumn','spring') NOT NULL COMMENT 'Семестр'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `term`
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
-- Table structure for table `ttj_room`
--

CREATE TABLE `ttj_room` (
  `id` int(11) NOT NULL,
  `section_id` int(100) NOT NULL,
  `number` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ttj_students`
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
-- Table structure for table `user`
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
-- Dumping data for table `user`
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
(14, 'salim_student', 'OzZqqoWyqjpvN3ZiB634dtwKKeOM7y2-', '$2y$13$flYyWOVgOvdqahxav124FupqdlCyF4g7/LOQUbsg5RXGHqOIhu8fy', NULL, 'salim@ubtuit.uz', 10, 1552305500, 1557249219, 'student'),
(15, 'bek_murod', 'qpqfkPJeKO1uk7IoxYx0xYhmXGB69Jdo', '$2y$13$k/MoT8KpCJefOdEZ/0HFRe6UslxjfYLzuyka7DqtTg1cmn/u7OSvS', NULL, 'bekmurod@mail.ru', 10, 1552697156, 1552697156, 'teacher');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `announcement_student`
--
ALTER TABLE `announcement_student`
  ADD PRIMARY KEY (`id`),
  ADD KEY `announcement_id` (`announcement_id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `appeals`
--
ALTER TABLE `appeals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `term_id` (`term_id`);

--
-- Indexes for table `building`
--
ALTER TABLE `building`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contract_amounts`
--
ALTER TABLE `contract_amounts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `term_ifk` (`term_id`),
  ADD KEY `direction_id` (`direction_id`);

--
-- Indexes for table `contract_payments`
--
ALTER TABLE `contract_payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `term_id` (`term_id`),
  ADD KEY `group_id` (`group_id`);

--
-- Indexes for table `current_term`
--
ALTER TABLE `current_term`
  ADD PRIMARY KEY (`id`),
  ADD KEY `current_term_id` (`current_term_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`),
  ADD KEY `faculty_id` (`faculty_id`),
  ADD KEY `building_id` (`building_id`),
  ADD KEY `room_id` (`room_id`);

--
-- Indexes for table `direction`
--
ALTER TABLE `direction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`),
  ADD KEY `building_id` (`building_id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`),
  ADD KEY `group_head_id` (`group_head_id`),
  ADD KEY `specialization_id` (`direction_id`),
  ADD KEY `faculty_id` (`faculty_id`),
  ADD KEY `group_head_id_2` (`group_head_id`);

--
-- Indexes for table `lesson`
--
ALTER TABLE `lesson`
  ADD PRIMARY KEY (`id`),
  ADD KEY `term_id` (`term_id`),
  ADD KEY `lesson_type_id` (`lesson_type_id`),
  ADD KEY `group_id` (`group_id`),
  ADD KEY `teacher_id` (`teacher_id`);

--
-- Indexes for table `lesson_type`
--
ALTER TABLE `lesson_type`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subject_id` (`subject_id`);

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `group_id` (`group_id`),
  ADD KEY `lesson_type_id` (`lesson_type_id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `subject_id` (`subject_id`);

--
-- Indexes for table `materials`
--
ALTER TABLE `materials`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subject_id` (`subject_id`);

--
-- Indexes for table `material_files`
--
ALTER TABLE `material_files`
  ADD PRIMARY KEY (`id`),
  ADD KEY `material_files_ibfk_1` (`material_id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parent` (`parent`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `student_id_2` (`student_id`);

--
-- Indexes for table `plan_subject_teacher`
--
ALTER TABLE `plan_subject_teacher`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teacher_id` (`teacher_id`),
  ADD KEY `subject_id` (`subject_id`),
  ADD KEY `subject_type_id` (`subject_type_id`),
  ADD KEY `term_id` (`term_id`),
  ADD KEY `potok_id` (`potok_id`);

--
-- Indexes for table `plan_subject_type`
--
ALTER TABLE `plan_subject_type`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subject_id` (`subject_id`),
  ADD KEY `subject_type_id` (`subject_type_id`);

--
-- Indexes for table `potok`
--
ALTER TABLE `potok`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `potok_group`
--
ALTER TABLE `potok_group`
  ADD PRIMARY KEY (`id`),
  ADD KEY `potok_id` (`potok_id`),
  ADD KEY `group_id` (`group_id`);

--
-- Indexes for table `protocol`
--
ALTER TABLE `protocol`
  ADD PRIMARY KEY (`id`),
  ADD KEY `department_id` (`department_id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`),
  ADD KEY `building_id` (`building_id`);

--
-- Indexes for table `schedule_item`
--
ALTER TABLE `schedule_item`
  ADD PRIMARY KEY (`id`),
  ADD KEY `group_id` (`group_id`),
  ADD KEY `room_id` (`room_id`),
  ADD KEY `teacher_id` (`teacher_id`),
  ADD KEY `term_id` (`term_id`),
  ADD KEY `subject_id` (`subject_id`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `reyting_no` (`reyting_no`),
  ADD KEY `direction_id` (`direction_id`),
  ADD KEY `student_ibfk_3` (`group_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `student_mistakes`
--
ALTER TABLE `student_mistakes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`),
  ADD KEY `department_id` (`department_id`);

--
-- Indexes for table `subject_direction`
--
ALTER TABLE `subject_direction`
  ADD PRIMARY KEY (`id`),
  ADD KEY `direction_id` (`direction_id`),
  ADD KEY `subject_id` (`subject_id`);

--
-- Indexes for table `subject_term`
--
ALTER TABLE `subject_term`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subject_id` (`subject_id`),
  ADD KEY `term_id` (`term_id`);

--
-- Indexes for table `subject_type`
--
ALTER TABLE `subject_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `department_id` (`department_id`);

--
-- Indexes for table `term`
--
ALTER TABLE `term`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ttj_room`
--
ALTER TABLE `ttj_room`
  ADD PRIMARY KEY (`id`),
  ADD KEY `section_id` (`section_id`);

--
-- Indexes for table `ttj_students`
--
ALTER TABLE `ttj_students`
  ADD PRIMARY KEY (`id`),
  ADD KEY `section_id` (`section_id`),
  ADD KEY `room_id` (`room_id`),
  ADD KEY `term_id` (`term_id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `announcement_student`
--
ALTER TABLE `announcement_student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `appeals`
--
ALTER TABLE `appeals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `building`
--
ALTER TABLE `building`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contract_amounts`
--
ALTER TABLE `contract_amounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contract_payments`
--
ALTER TABLE `contract_payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `current_term`
--
ALTER TABLE `current_term`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `direction`
--
ALTER TABLE `direction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `lesson`
--
ALTER TABLE `lesson`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lesson_type`
--
ALTER TABLE `lesson_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `marks`
--
ALTER TABLE `marks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `materials`
--
ALTER TABLE `materials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `material_files`
--
ALTER TABLE `material_files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `plan_subject_teacher`
--
ALTER TABLE `plan_subject_teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `plan_subject_type`
--
ALTER TABLE `plan_subject_type`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `potok`
--
ALTER TABLE `potok`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `potok_group`
--
ALTER TABLE `potok_group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `protocol`
--
ALTER TABLE `protocol`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `schedule_item`
--
ALTER TABLE `schedule_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `student_mistakes`
--
ALTER TABLE `student_mistakes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `subject_direction`
--
ALTER TABLE `subject_direction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `subject_term`
--
ALTER TABLE `subject_term`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subject_type`
--
ALTER TABLE `subject_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `term`
--
ALTER TABLE `term`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ttj_room`
--
ALTER TABLE `ttj_room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ttj_students`
--
ALTER TABLE `ttj_students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `announcements`
--
ALTER TABLE `announcements`
  ADD CONSTRAINT `announcements_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `announcement_student`
--
ALTER TABLE `announcement_student`
  ADD CONSTRAINT `announcement_student_ibfk_1` FOREIGN KEY (`announcement_id`) REFERENCES `announcements` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `announcement_student_ibfk_2` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `appeals`
--
ALTER TABLE `appeals`
  ADD CONSTRAINT `appeals_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `appeals_ibfk_2` FOREIGN KEY (`term_id`) REFERENCES `term` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `contract_amounts`
--
ALTER TABLE `contract_amounts`
  ADD CONSTRAINT `contract_amounts_ibfk_1` FOREIGN KEY (`direction_id`) REFERENCES `direction` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `term_ifk` FOREIGN KEY (`term_id`) REFERENCES `term` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `contract_payments`
--
ALTER TABLE `contract_payments`
  ADD CONSTRAINT `contract_payments_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `contract_payments_ibfk_2` FOREIGN KEY (`term_id`) REFERENCES `term` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `contract_payments_ibfk_3` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `current_term`
--
ALTER TABLE `current_term`
  ADD CONSTRAINT `current_term_ibfk_1` FOREIGN KEY (`current_term_id`) REFERENCES `term` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `department`
--
ALTER TABLE `department`
  ADD CONSTRAINT `department_ibfk_1` FOREIGN KEY (`faculty_id`) REFERENCES `faculty` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `department_ibfk_2` FOREIGN KEY (`building_id`) REFERENCES `building` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `department_ibfk_3` FOREIGN KEY (`room_id`) REFERENCES `room` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `faculty`
--
ALTER TABLE `faculty`
  ADD CONSTRAINT `faculty_ibfk_1` FOREIGN KEY (`building_id`) REFERENCES `building` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `groups`
--
ALTER TABLE `groups`
  ADD CONSTRAINT `groups_ibfk_2` FOREIGN KEY (`direction_id`) REFERENCES `direction` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `groups_ibfk_3` FOREIGN KEY (`faculty_id`) REFERENCES `faculty` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `lesson`
--
ALTER TABLE `lesson`
  ADD CONSTRAINT `lesson_ibfk_1` FOREIGN KEY (`term_id`) REFERENCES `term` (`id`),
  ADD CONSTRAINT `lesson_ibfk_2` FOREIGN KEY (`lesson_type_id`) REFERENCES `lesson_type` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `lesson_ibfk_3` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `lesson_type`
--
ALTER TABLE `lesson_type`
  ADD CONSTRAINT `lesson_type_ibfk_1` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `marks`
--
ALTER TABLE `marks`
  ADD CONSTRAINT `marks_ibfk_1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `marks_ibfk_2` FOREIGN KEY (`lesson_type_id`) REFERENCES `lesson_type` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `marks_ibfk_3` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `marks_ibfk_4` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `materials`
--
ALTER TABLE `materials`
  ADD CONSTRAINT `materials_ibfk_1` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `material_files`
--
ALTER TABLE `material_files`
  ADD CONSTRAINT `material_files_ibfk_1` FOREIGN KEY (`material_id`) REFERENCES `materials` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `menu_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `menu` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `plan_subject_teacher`
--
ALTER TABLE `plan_subject_teacher`
  ADD CONSTRAINT `plan_subject_teacher_ibfk_1` FOREIGN KEY (`teacher_id`) REFERENCES `teacher` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `plan_subject_teacher_ibfk_2` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `plan_subject_teacher_ibfk_3` FOREIGN KEY (`subject_type_id`) REFERENCES `subject_type` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `plan_subject_teacher_ibfk_4` FOREIGN KEY (`term_id`) REFERENCES `term` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `plan_subject_teacher_ibfk_5` FOREIGN KEY (`potok_id`) REFERENCES `potok` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `plan_subject_type`
--
ALTER TABLE `plan_subject_type`
  ADD CONSTRAINT `plan_subject_type_ibfk_1` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `plan_subject_type_ibfk_2` FOREIGN KEY (`subject_type_id`) REFERENCES `subject_type` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `potok_group`
--
ALTER TABLE `potok_group`
  ADD CONSTRAINT `potok_group_ibfk_1` FOREIGN KEY (`potok_id`) REFERENCES `potok` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `potok_group_ibfk_2` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `protocol`
--
ALTER TABLE `protocol`
  ADD CONSTRAINT `protocol_ibfk_1` FOREIGN KEY (`department_id`) REFERENCES `department` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `room`
--
ALTER TABLE `room`
  ADD CONSTRAINT `room_ibfk_1` FOREIGN KEY (`building_id`) REFERENCES `building` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `schedule_item`
--
ALTER TABLE `schedule_item`
  ADD CONSTRAINT `schedule_item_ibfk_1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `schedule_item_ibfk_2` FOREIGN KEY (`room_id`) REFERENCES `room` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `schedule_item_ibfk_4` FOREIGN KEY (`teacher_id`) REFERENCES `teacher` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `schedule_item_ibfk_5` FOREIGN KEY (`term_id`) REFERENCES `term` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `schedule_item_ibfk_6` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`direction_id`) REFERENCES `direction` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `student_ibfk_3` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student_mistakes`
--
ALTER TABLE `student_mistakes`
  ADD CONSTRAINT `student_mistakes_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `subject`
--
ALTER TABLE `subject`
  ADD CONSTRAINT `subject_ibfk_1` FOREIGN KEY (`department_id`) REFERENCES `department` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `subject_direction`
--
ALTER TABLE `subject_direction`
  ADD CONSTRAINT `subject_direction_ibfk_1` FOREIGN KEY (`direction_id`) REFERENCES `direction` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `subject_direction_ibfk_2` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `subject_term`
--
ALTER TABLE `subject_term`
  ADD CONSTRAINT `subject_term_ibfk_1` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `subject_term_ibfk_2` FOREIGN KEY (`term_id`) REFERENCES `term` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `teacher`
--
ALTER TABLE `teacher`
  ADD CONSTRAINT `teacher_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `teacher_ibfk_2` FOREIGN KEY (`department_id`) REFERENCES `department` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `ttj_room`
--
ALTER TABLE `ttj_room`
  ADD CONSTRAINT `ttj_room_ibfk_1` FOREIGN KEY (`section_id`) REFERENCES `sections` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ttj_students`
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
