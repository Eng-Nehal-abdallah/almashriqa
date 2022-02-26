-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2022 at 04:13 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `almash`
--

-- --------------------------------------------------------

--
-- Table structure for table `accept`
--

CREATE TABLE `accept` (
  `id` int(11) NOT NULL,
  `name_ar` varchar(255) DEFAULT NULL,
  `name_en` varchar(255) DEFAULT NULL,
  `details_en` text DEFAULT NULL,
  `details_ar` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accept`
--

INSERT INTO `accept` (`id`, `name_ar`, `name_en`, `details_en`, `details_ar`) VALUES
(1, 'الطلبة العراقيون : الدراسة الصباحية', 'Iraqi Students: Morning Study', 'The student must have an Iraqi Preparatory Certificate or its equivalent, supported by attestation by the Ministry of Education. To be born in 1991 onwards. The student should be full-time to study and it is not permissible to combine a government job with study (at the same time), and a government employee is required to obtain a study leave in accordance with the approved regulations. It is not permissible to combine two studies at the same time. Ministers, members of the House of Representatives, people with special degrees, and members of provincial councils are not entitled to apply for admission to the morning study.\n\nIraqi Students: Evening study The student must have an Iraqi Preparatory Certificate or its equivalent, supported by the approval of the Ministry of Education. That the student is not accepted', 'ن يكون الطالب حاصلاً على شهادة الإعدادية العراقية أو ما يعادلها معززة بتصديق من قبل وزارة التربية. أن يكون من مواليد 1991 صعوداً. أن يكون الطالب متفرغاً للدراسة ولا يجوز الجمع بين الوظيفة الحكومية والدراسة (في آن واحد)، ويشترط في الموظف الحكومي استحصال الإجازة الدراسية على وفق الضوابط المعتمدة. لا يجوز الجمع بين دراستين في الوقت نفسه. لا يحق للوزراء، وأعضاء مجلس النواب، وذوي الدرجات الخاصة، وأعضاء مجالس المحافظات التقديم للقبول في الدراسة الصباحية.\n\nالطلبة العراقيون : الدراسة المسائية أن يكون الطالب حاصلاً على شهادة الإعدادية العراقية أو ما يعادلها، معززة بتصديق من قبل وزارة التربية. أن لا يكون الطالب مقبولاً '),
(2, 'الطلبة العراقيون : الدراسة المسائية', 'Iraqi Students: Evening Study', 'The student must have an Iraqi Preparatory Certificate or its equivalent, supported by attestation by the Ministry of Education. That the student is not accepted into another study. The student must have passed the medical examination according to the conditions for each study.', 'ان يكون الطالب حاصلاً على شهادة الإعدادية العراقية أو ما يعادلها، معززة بتصديق من قبل وزارة التربية. أن لا يكون الطالب مقبولاً في دراسة أخرى. أن يكون الطالب ناجحاً في الفحص الطبي على وفق الشروط الخاصة بكل دراسة.'),
(3, 'الطلبة الوافدون', 'international students', 'International students are subject to the same regulations and instructions as students studying inside Iraq, except for the added language privilege, and the privilege for first-floor graduates. An incoming student is allowed to apply only if he has equalized his certificate in the year of application. The morning and evening studies are submitted through the electronic portal prepared for this purpose. An incoming student has the right to apply to any of the admission channels available in the morning and evening studies, as is the case with Iraqi graduate students.', 'يخضع الطلبة الوافدون للضوابط والتعليمات نفسها التي يخضع لها الطلبة الدارسون داخل العراق عدا امتياز اللغة المضافة، وامتياز خريجي الدور الأول. يسمح للطالب الوافد بالتقديم فقط في حال قيامه بمعادلة شهادته في سنة التقديم حصراً. يتم التقديم على الدراستين الصباحية والمسائية من خلال البوابة الإلكترونية المعدة لهذا الغرض. يحق للطالب الوافد التقديم على أي من قنوات القبول المتاحة في الدراسة الصباحية والمسائية أسوة بالطلبة خريجي العراق.');

-- --------------------------------------------------------

--
-- Table structure for table `achievement`
--

CREATE TABLE `achievement` (
  `id` int(11) NOT NULL,
  `name_ar` varchar(255) DEFAULT NULL,
  `name_en` varchar(255) DEFAULT NULL,
  `details_en` varchar(255) DEFAULT NULL,
  `details_ar` varchar(255) DEFAULT NULL,
  `pdf` varchar(255) DEFAULT NULL,
  `id_doctor` int(11) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `images` varchar(255) DEFAULT NULL,
  `id_facutly` int(11) DEFAULT NULL,
  `id_department` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `id_type` int(11) DEFAULT NULL,
  `id_types` int(11) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `id_leader` int(11) DEFAULT NULL,
  `id_leaderuni` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `achievement`
--

INSERT INTO `achievement` (`id`, `name_ar`, `name_en`, `details_en`, `details_ar`, `pdf`, `id_doctor`, `type`, `images`, `id_facutly`, `id_department`, `image`, `id_type`, `id_types`, `date`, `id_leader`, `id_leaderuni`) VALUES
(3, ' بحث عام في \n القانون العام ', 'Research of Law', 'details about Research of Law', 'تفاصيل عن بحث في القانون', 'download.pdf', 3, 'بحث', 'images/researchlaw1.jpg', 1, NULL, 'images/researchlaw3.jpg', 5, 4, '', 3, 3),
(4, 'التحصيل الدراسي القانوني', 'Law study', 'Details about Law study', 'تفاصيل عن التحصيل الدراسي', 'download.pdf', 3, 'التحصيل الدراسي', 'images/researchlaw3.jpg', 1, NULL, 'images/researchlaw1.jpg', 4, 5, '', 3, 3),
(5, 'كتاب عام في  القانون العام ', 'Public Law Book', 'Details about Public Law Book', 'تفاصيل عن كتاب القانون العام ', 'download.pdf', 3, 'براءه', 'images/researchlaw3.jpg', 1, NULL, 'images/researchlaw3.jpg', 3, 3, '', NULL, NULL),
(9, 'شهادة تكريم  القانون العام', 'Public Law Certified', 'Details about Public Law Certified', 'التفاصيل عن شهادة تكريم في القانون العام', 'download.pdf', 3, 'شهادة تكريم', 'images/researchlaw3.jpg', 1, NULL, 'images/researchlaw1.jpg', NULL, 1, NULL, NULL, NULL),
(10, ' بحث عام في \n القانون العام ', 'Research of Law', 'details about Research of Law', 'تفاصيل عن بحث في القانون', 'download.pdf', 636, 'بحث', 'images/researchlaw1.jpg', 1, NULL, 'images/researchlaw3.jpg', 5, 4, '', NULL, NULL),
(11, 'التحصيل الدراسي القانوني', 'Law study', 'Details about Law study', 'تفاصيل عن التحصيل الدراسي', 'download.pdf', 636, 'التحصيل الدراسي', 'images/researchlaw1.jpg', 1, NULL, 'images/researchlaw1.jpg', 4, 5, '', NULL, NULL),
(12, 'كتاب عام في  القانون العام ', 'Public Law Book', 'Details about Public Law Book', 'تفاصيل عن كتاب القانون العام ', 'download.pdf', 636, 'براءه', 'images/researchlaw3.jpg', 1, NULL, 'images/researchlaw3.jpg', 3, 3, '', NULL, NULL),
(14, 'شهادة تكريم في القانون العام', 'Public Law Certified', 'Details about Public Law Certified', 'التفاصيل عن شهادة تكريم في القانون العام', 'download.pdf', 3, 'شهادة تكريم', 'images/researchlaw3.jpg', 1, NULL, 'images/researchlaw1.jpg', NULL, 1, NULL, NULL, NULL),
(15, ' بحث عام في \n   عام الصيدلية ', 'Research of Law', 'details about Research of Law', 'تفاصيل عن بحث في القانون', 'download.pdf', 633, 'بحث', 'images/researchlaw1.jpg', 2, NULL, 'images/images.jpg', 5, 4, '', NULL, NULL),
(16, 'التحصيل الدراسي  بحث عام في \n الصيدلية ', 'Law study', 'Details about Law study', 'تفاصيل عن التحصيل الدراسي', 'download.pdf', 620, 'التحصيل الدراسي', 'images/researchlaw3.jpg', 2, NULL, 'images/images.jpg', 4, 5, '', NULL, NULL),
(17, 'كتاب عام في  القانون العام ', 'Public Law Book', 'Details about Public Law Book', 'تفاصيل عن كتاب القانون العام ', 'download.pdf', 633, 'براءه', 'images/researchlaw3.jpg', 2, NULL, 'images/images.jpg', 3, 3, '', NULL, NULL),
(18, 'شهادة تكريم  القانون العام', 'Public Law Certified', 'Details about Public Law Certified', 'التفاصيل عن شهادة تكريم في القانون العام', 'download.pdf', 620, 'شهادة تكريم', 'images/researchlaw3.jpg', 2, NULL, 'images/images.jpg', NULL, 1, NULL, NULL, NULL),
(19, ' بحث عام في \n القانون العام ', 'Research of Law', 'details about Research of Law', 'تفاصيل عن بحث في القانون', 'download.pdf', 633, 'بحث', 'images/researchlaw1.jpg', 2, NULL, 'images/images.jpg', 5, 4, '', NULL, NULL),
(20, 'التحصيل الدراسي القانوني', 'Law study', 'Details about Law study', 'تفاصيل عن التحصيل الدراسي', 'download.pdf', 620, 'التحصيل الدراسي', 'images/researchlaw1.jpg', 2, NULL, 'images/images.jpg', 4, 5, '', NULL, NULL),
(21, 'كتاب عام في  القانون العام ', 'Public Law Book', 'Details about Public Law Book', 'تفاصيل عن كتاب القانون العام ', 'download.pdf', 633, 'براءه', 'images/researchlaw3.jpg', 2, NULL, 'images/images.jpg', 3, 3, '', NULL, NULL),
(22, 'شهادة تكريم في القانون العام', 'Public Law Certified', 'Details about Public Law Certified', 'التفاصيل عن شهادة تكريم في القانون العام', 'download.pdf', 620, 'شهادة تكريم', 'images/researchlaw3.jpg', 2, NULL, 'images/images.jpg', NULL, 1, NULL, NULL, NULL),
(23, ' بحث عام في \n القانون العام ', 'Research of Law', 'details about Research of Law', 'تفاصيل عن بحث في القانون', 'download.pdf', 632, 'بحث', 'images/researchlaw1.jpg', 3, 1, 'images/images.jpg', 5, 4, '', NULL, NULL),
(24, 'التحصيل الدراسي القانوني', 'Law study', 'Details about Law study', 'تفاصيل عن التحصيل الدراسي', 'download.pdf', 632, 'التحصيل الدراسي', 'images/researchlaw3.jpg', 3, 1, 'images/images.jpg', 4, 5, '', NULL, NULL),
(25, 'كتاب عام في  القانون العام ', 'Public Law Book', 'Details about Public Law Book', 'تفاصيل عن كتاب القانون العام ', 'download.pdf', 632, 'براءه', 'images/researchlaw3.jpg', 3, 1, 'images/images.jpg', 3, 3, '', NULL, NULL),
(26, 'شهادة تكريم  القانون العام', 'Public Law Certified', 'Details about Public Law Certified', 'التفاصيل عن شهادة تكريم في القانون العام', 'download.pdf', 1, 'شهادة تكريم', 'images/researchlaw3.jpg', 3, 5, 'images/images.jpg', NULL, 1, NULL, NULL, NULL),
(27, ' بحث عام في \n القانون العام ', 'Research of Law', 'details about Research of Law', 'تفاصيل عن بحث في القانون', 'download.pdf', 1, 'بحث', 'images/researchlaw1.jpg', 3, 5, 'images/images.jpg', 5, 4, '', NULL, NULL),
(28, 'التحصيل الدراسي القانوني', 'Law study', 'Details about Law study', 'تفاصيل عن التحصيل الدراسي', 'download.pdf', 1, 'التحصيل الدراسي', 'images/researchlaw1.jpg', 3, 5, 'images/images.jpg', 4, 5, '', NULL, NULL),
(29, 'كتاب عام في  القانون العام ', 'Public Law Book', 'Details about Public Law Book', 'تفاصيل عن كتاب القانون العام ', 'download.pdf', 630, 'براءه', 'images/researchlaw3.jpg', 3, 6, 'images/images.jpg', 3, 3, '', NULL, NULL),
(30, 'شهادة تكريم في القانون العام', 'Public Law Certified', 'Details about Public Law Certified', 'التفاصيل عن شهادة تكريم في القانون العام', 'download.pdf', 630, 'شهادة تكريم', 'images/researchlaw3.jpg', 3, 6, 'images/images.jpg', NULL, 1, NULL, NULL, NULL),
(31, ' بحث عام في \n القانون العام ', 'Research of Law', 'details about Research of Law', 'تفاصيل عن بحث في القانون', 'download.pdf', 1, 'بحث', 'images/researchlaw1.jpg', 3, 5, 'images/images.jpg', 5, 4, '', NULL, NULL),
(32, 'التحصيل الدراسي القانوني', 'Law study', 'Details about Law study', 'تفاصيل عن التحصيل الدراسي', 'download.pdf', 1, 'التحصيل الدراسي', 'images/researchlaw3.jpg', 3, 5, 'images/images.jpg', 4, 5, '', NULL, NULL),
(33, 'كتاب عام في  القانون العام ', 'Public Law Book', 'Details about Public Law Book', 'تفاصيل عن كتاب القانون العام ', 'download.pdf', 1, 'براءه', 'images/researchlaw3.jpg', 38, NULL, 'images/images.jpg', 3, 3, '', NULL, NULL),
(34, 'شهادة تكريم  القانون العام', 'Public Law Certified', 'Details about Public Law Certified', 'التفاصيل عن شهادة تكريم في القانون العام', 'download.pdf', 1, 'شهادة تكريم', 'images/researchlaw3.jpg', 38, NULL, 'images/images.jpg', NULL, 1, NULL, NULL, NULL),
(35, ' بحث عام في \n القانون العام ', 'Research of Law', 'details about Research of Law', 'تفاصيل عن بحث في القانون', 'download.pdf', 636, 'بحث', 'images/researchlaw1.jpg', 38, NULL, 'images/images.jpg', 5, 4, '', NULL, NULL),
(36, 'التحصيل الدراسي القانوني', 'Law study', 'Details about Law study', 'تفاصيل عن التحصيل الدراسي', 'download.pdf', 636, 'التحصيل الدراسي', 'images/researchlaw1.jpg', 38, NULL, 'images/images.jpg', 4, 5, '', NULL, NULL),
(37, 'كتاب عام في  القانون العام ', 'Public Law Book', 'Details about Public Law Book', 'تفاصيل عن كتاب القانون العام ', 'download.pdf', 636, 'براءه', 'images/researchlaw3.jpg', 38, NULL, 'images/images.jpg', 3, 3, '', NULL, NULL),
(38, 'شهادة تكريم في القانون العام', 'Public Law Certified', 'Details about Public Law Certified', 'التفاصيل عن شهادة تكريم في القانون العام', 'download.pdf', 1, 'شهادة تكريم', 'images/researchlaw3.jpg', 38, NULL, 'images/images.jpg', NULL, 1, NULL, NULL, NULL),
(39, ' بحث عام في \n القانون العام ', 'Research of Law', 'details about Research of Law', 'تفاصيل عن بحث في القانون', 'download.pdf', 1, 'بحث', 'images/researchlaw1.jpg', 38, NULL, 'images/images.jpg', 5, 4, '', NULL, NULL),
(40, 'التحصيل الدراسي القانوني', 'Law study', 'Details about Law study', 'تفاصيل عن التحصيل الدراسي', 'download.pdf', 1, 'التحصيل الدراسي', 'images/researchlaw3.jpg', 38, NULL, 'images/images.jpg', 4, 5, '', NULL, NULL),
(41, 'كتاب عام في  القانون العام ', 'Public Law Book', 'Details about Public Law Book', 'تفاصيل عن كتاب القانون العام ', 'download.pdf', 627, 'براءه', 'images/researchlaw3.jpg', 4, 9, 'images/images (1).jpg', 3, 3, '', NULL, NULL),
(42, 'شهادة تكريم  القانون العام', 'Public Law Certified', 'Details about Public Law Certified', 'التفاصيل عن شهادة تكريم في القانون العام', 'download.pdf', 627, 'شهادة تكريم', 'images/researchlaw3.jpg', 4, 9, 'images/images (1).jpg', NULL, 1, NULL, NULL, NULL),
(43, ' بحث عام في \n القانون العام ', 'Research of Law', 'details about Research of Law', 'تفاصيل عن بحث في القانون', 'download.pdf', 627, 'بحث', 'images/researchlaw1.jpg', 4, 9, 'images/images (1).jpg', 5, 4, '', NULL, NULL),
(44, 'التحصيل الدراسي القانوني', 'Law study', 'Details about Law study', 'تفاصيل عن التحصيل الدراسي', 'download.pdf', 624, 'التحصيل الدراسي', 'images/researchlaw1.jpg', 4, 10, 'images/images (1).jpg', 4, 5, '', NULL, NULL),
(45, 'كتاب عام في  القانون العام ', 'Public Law Book', 'Details about Public Law Book', 'تفاصيل عن كتاب القانون العام ', 'download.pdf', 624, 'براءه', 'images/researchlaw3.jpg', 4, 10, 'images/images (1).jpg', 3, 3, '', NULL, NULL),
(46, 'شهادة تكريم في القانون العام', 'Public Law Certified', 'Details about Public Law Certified', 'التفاصيل عن شهادة تكريم في القانون العام', 'download.pdf', 624, 'شهادة تكريم', 'images/researchlaw3.jpg', 4, 10, 'images/images (1).jpg', NULL, 1, NULL, NULL, NULL),
(47, 'name', 'name', 'jdvnjvnxj n', 'التفاصيل', 'file/20220224083911.pdf', NULL, NULL, NULL, NULL, NULL, 'images/20220224083911.jpg', NULL, 2, NULL, 1, 1),
(48, 'ss', 'ss', 'details', 'b n cn', 'file/20220224084052.pdf', NULL, NULL, NULL, NULL, NULL, 'images/20220224084052.jpg', NULL, 1, NULL, 1, 1),
(52, 'name', 'name', 'details', 'b n cn', 'file/20220224195916.pdf', NULL, NULL, NULL, NULL, NULL, 'images/20220224195916.jpg', NULL, 2, NULL, NULL, 15);

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `id` int(11) NOT NULL,
  `name_ar` varchar(255) DEFAULT NULL,
  `name_en` varchar(255) DEFAULT NULL,
  `details_ar` varchar(255) DEFAULT NULL,
  `details_en` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `id_faculty` int(11) DEFAULT NULL,
  `id_department` int(11) DEFAULT NULL,
  `video` varchar(255) NOT NULL,
  `id_doctor` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`id`, `name_ar`, `name_en`, `details_ar`, `details_en`, `image`, `id_faculty`, `id_department`, `video`, `id_doctor`) VALUES
(1, 'نشاط اول', 'Activity', '\r\n       اختيار أ. م.د ميساء علي عبد الخالق مستشار رئيس جامعة المشرق عضواً في تأليف وتحرير كتاب (دليل الادويه 2021 ) و تمت\r\n       موافقه\r\n       معالي وزير الصحه والبيئة الدكتور هاني موسى بدر العقابي ونقيب صيادلة العراق الدكتور مصطفى الهيتي ، ويعتبر هذا\r', 'details about activitiessssssssssssssssssss', 'images/lb.png', 3, 1, '', 3),
(2, 'انجاز الثاني', 'achievement first', '\r\n       اختيار أ. م.د ميساء علي عبد الخالق مستشار رئيس جامعة المشرق عضواً في تأليف وتحرير كتاب (دليل الادويه 2021 ) و تمت\r\n       موافقه\r\n       معالي وزير الصحه والبيئة الدكتور هاني موسى بدر العقابي ونقيب صيادلة العراق الدكتور مصطفى الهيتي ، ويعتبر هذا\r', 'details about activitiessssssssssssssssssss', 'images/lb.png', 3, 5, '', 3),
(3, 'انجاز الثالث', 'achievement first', '\r\n       اختيار أ. م.د ميساء علي عبد الخالق مستشار رئيس جامعة المشرق عضواً في تأليف وتحرير كتاب (دليل الادويه 2021 ) و تمت\r\n       موافقه\r\n       معالي وزير الصحه والبيئة الدكتور هاني موسى بدر العقابي ونقيب صيادلة العراق الدكتور مصطفى الهيتي ، ويعتبر هذا\r', 'details about activitiessssssssssssssssssss', 'images/lb.png', 3, 5, '', 1),
(4, ' انجاز الرابع', 'secondachieve', '\r\n       اختيار أ. م.د ميساء علي عبد الخالق مستشار رئيس جامعة المشرق عضواً في تأليف وتحرير كتاب (دليل الادويه 2021 ) و تمت\r\n       موافقه\r\n       معالي وزير الصحه والبيئة الدكتور هاني موسى بدر العقابي ونقيب صيادلة العراق الدكتور مصطفى الهيتي ، ويعتبر هذا\r', 'details about activitiessssssssssssssssssss', 'images/lb.png', 3, 1, '', 1),
(6, 'انجاز الثالث', 'achievement first', '\r\n       اختيار أ. م.د ميساء علي عبد الخالق مستشار رئيس جامعة المشرق عضواً في تأليف وتحرير كتاب (دليل الادويه 2021 ) و تمت\r\n       موافقه\r\n       معالي وزير الصحه والبيئة الدكتور هاني موسى بدر العقابي ونقيب صيادلة العراق الدكتور مصطفى الهيتي ، ويعتبر هذا\r', 'details about activitiessssssssssssssssssss', 'images/lb.png', 3, 5, '', 3),
(8, 'انجاز الخامس', 'achievement first', '\r\n       اختيار أ. م.د ميساء علي عبد الخالق مستشار رئيس جامعة المشرق عضواً في تأليف وتحرير كتاب (دليل الادويه 2021 ) و تمت\r\n       موافقه\r\n       معالي وزير الصحه والبيئة الدكتور هاني موسى بدر العقابي ونقيب صيادلة العراق الدكتور مصطفى الهيتي ، ويعتبر هذا\r', 'details about activitiessssssssssssssssssss', 'images/lb.png', 3, 1, '', 1),
(9, 'انجاز السادس', 'achievement first', '\r\n       اختيار أ. م.د ميساء علي عبد الخالق مستشار رئيس جامعة المشرق عضواً في تأليف وتحرير كتاب (دليل الادويه 2021 ) و تمت\r\n       موافقه\r\n       معالي وزير الصحه والبيئة الدكتور هاني موسى بدر العقابي ونقيب صيادلة العراق الدكتور مصطفى الهيتي ، ويعتبر هذا\r', 'details about activitiessssssssssssssssssss', 'images/lb.png', 3, 6, '', 3),
(13, 'نشاط اول', 'Activity', '\r\n       اختيار أ. م.د ميساء علي عبد الخالق مستشار رئيس جامعة المشرق عضواً في تأليف وتحرير كتاب (دليل الادويه 2021 ) و تمت\r\n       موافقه\r\n       معالي وزير الصحه والبيئة الدكتور هاني موسى بدر العقابي ونقيب صيادلة العراق الدكتور مصطفى الهيتي ، ويعتبر هذا\r', 'details about activitiessssssssssssssssssss', 'images/lb.png', 3, 6, '', 3),
(14, 'انجاز الثاني', 'achievement first', '\r\n       اختيار أ. م.د ميساء علي عبد الخالق مستشار رئيس جامعة المشرق عضواً في تأليف وتحرير كتاب (دليل الادويه 2021 ) و تمت\r\n       موافقه\r\n       معالي وزير الصحه والبيئة الدكتور هاني موسى بدر العقابي ونقيب صيادلة العراق الدكتور مصطفى الهيتي ، ويعتبر هذا\r', 'details about activitiessssssssssssssssssss', 'images/lb.png', 3, 6, '', 3),
(15, 'انجاز الثالث', 'achievement first', '\r\n       اختيار أ. م.د ميساء علي عبد الخالق مستشار رئيس جامعة المشرق عضواً في تأليف وتحرير كتاب (دليل الادويه 2021 ) و تمت\r\n       موافقه\r\n       معالي وزير الصحه والبيئة الدكتور هاني موسى بدر العقابي ونقيب صيادلة العراق الدكتور مصطفى الهيتي ، ويعتبر هذا\r', 'details about activitiessssssssssssssssssss', 'images/lb.png', 4, 9, '', 1),
(16, ' انجاز الرابع', 'secondachieve', '\r\n       اختيار أ. م.د ميساء علي عبد الخالق مستشار رئيس جامعة المشرق عضواً في تأليف وتحرير كتاب (دليل الادويه 2021 ) و تمت\r\n       موافقه\r\n       معالي وزير الصحه والبيئة الدكتور هاني موسى بدر العقابي ونقيب صيادلة العراق الدكتور مصطفى الهيتي ، ويعتبر هذا\r', 'details about activitiessssssssssssssssssss', 'images/lb.png', 4, 10, '', 1),
(17, 'انجاز الثالث', 'achievement first', '\r\n       اختيار أ. م.د ميساء علي عبد الخالق مستشار رئيس جامعة المشرق عضواً في تأليف وتحرير كتاب (دليل الادويه 2021 ) و تمت\r\n       موافقه\r\n       معالي وزير الصحه والبيئة الدكتور هاني موسى بدر العقابي ونقيب صيادلة العراق الدكتور مصطفى الهيتي ، ويعتبر هذا\r', 'details about activitiessssssssssssssssssss', 'images/lb.png', 4, 9, '', 3),
(18, 'انجاز الخامس', 'achievement first', '\r\n       اختيار أ. م.د ميساء علي عبد الخالق مستشار رئيس جامعة المشرق عضواً في تأليف وتحرير كتاب (دليل الادويه 2021 ) و تمت\r\n       موافقه\r\n       معالي وزير الصحه والبيئة الدكتور هاني موسى بدر العقابي ونقيب صيادلة العراق الدكتور مصطفى الهيتي ، ويعتبر هذا\r', 'details about activitiessssssssssssssssssss', 'images/lb.png', 2, NULL, '', 1),
(19, 'انجاز السادس', 'achievement first', '\r\n       اختيار أ. م.د ميساء علي عبد الخالق مستشار رئيس جامعة المشرق عضواً في تأليف وتحرير كتاب (دليل الادويه 2021 ) و تمت\r\n       موافقه\r\n       معالي وزير الصحه والبيئة الدكتور هاني موسى بدر العقابي ونقيب صيادلة العراق الدكتور مصطفى الهيتي ، ويعتبر هذا\r', 'details about activitiessssssssssssssssssss', 'images/lb.png', 2, NULL, '', 3),
(20, 'نشاط اول', 'Activity', '\r\n       اختيار أ. م.د ميساء علي عبد الخالق مستشار رئيس جامعة المشرق عضواً في تأليف وتحرير كتاب (دليل الادويه 2021 ) و تمت\r\n       موافقه\r\n       معالي وزير الصحه والبيئة الدكتور هاني موسى بدر العقابي ونقيب صيادلة العراق الدكتور مصطفى الهيتي ، ويعتبر هذا\r', 'details about activitiessssssssssssssssssss', 'images/lb.png', 2, NULL, '', 3),
(21, 'انجاز الثاني', 'achievement first', '\r\n       اختيار أ. م.د ميساء علي عبد الخالق مستشار رئيس جامعة المشرق عضواً في تأليف وتحرير كتاب (دليل الادويه 2021 ) و تمت\r\n       موافقه\r\n       معالي وزير الصحه والبيئة الدكتور هاني موسى بدر العقابي ونقيب صيادلة العراق الدكتور مصطفى الهيتي ، ويعتبر هذا\r', 'details about activitiessssssssssssssssssss', 'images/lb.png', 1, NULL, '', 3),
(22, 'انجاز الثالث', 'achievement first', '\r\n       اختيار أ. م.د ميساء علي عبد الخالق مستشار رئيس جامعة المشرق عضواً في تأليف وتحرير كتاب (دليل الادويه 2021 ) و تمت\r\n       موافقه\r\n       معالي وزير الصحه والبيئة الدكتور هاني موسى بدر العقابي ونقيب صيادلة العراق الدكتور مصطفى الهيتي ، ويعتبر هذا\r', 'details about activitiessssssssssssssssssss', 'images/lb.png', 1, NULL, '', 1),
(23, ' انجاز الرابع', 'secondachieve', '\r\n       اختيار أ. م.د ميساء علي عبد الخالق مستشار رئيس جامعة المشرق عضواً في تأليف وتحرير كتاب (دليل الادويه 2021 ) و تمت\r\n       موافقه\r\n       معالي وزير الصحه والبيئة الدكتور هاني موسى بدر العقابي ونقيب صيادلة العراق الدكتور مصطفى الهيتي ، ويعتبر هذا\r', 'details about activitiessssssssssssssssssss', 'images/lb.png', 1, 1, '', 1),
(24, 'انجاز الثالث', 'achievement first', '\r\n       اختيار أ. م.د ميساء علي عبد الخالق مستشار رئيس جامعة المشرق عضواً في تأليف وتحرير كتاب (دليل الادويه 2021 ) و تمت\r\n       موافقه\r\n       معالي وزير الصحه والبيئة الدكتور هاني موسى بدر العقابي ونقيب صيادلة العراق الدكتور مصطفى الهيتي ، ويعتبر هذا\r', 'details about activitiessssssssssssssssssss', 'images/lb.png', 38, NULL, '', 3),
(25, 'انجاز الخامس', 'achievement first', '\r\n       اختيار أ. م.د ميساء علي عبد الخالق مستشار رئيس جامعة المشرق عضواً في تأليف وتحرير كتاب (دليل الادويه 2021 ) و تمت\r\n       موافقه\r\n       معالي وزير الصحه والبيئة الدكتور هاني موسى بدر العقابي ونقيب صيادلة العراق الدكتور مصطفى الهيتي ، ويعتبر هذا\r', 'details about activitiessssssssssssssssssss', 'images/lb.png', 38, NULL, '', 1),
(26, 'انجاز السادس', 'achievement first', '\r\n       اختيار أ. م.د ميساء علي عبد الخالق مستشار رئيس جامعة المشرق عضواً في تأليف وتحرير كتاب (دليل الادويه 2021 ) و تمت\r\n       موافقه\r\n       معالي وزير الصحه والبيئة الدكتور هاني موسى بدر العقابي ونقيب صيادلة العراق الدكتور مصطفى الهيتي ، ويعتبر هذا\r', 'details about activitiessssssssssssssssssss', 'images/lb.png', 38, NULL, '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `admindepart`
--

CREATE TABLE `admindepart` (
  `id` int(11) NOT NULL,
  `name_ar` varchar(255) DEFAULT NULL,
  `name_en` varchar(255) DEFAULT NULL,
  `details_en` text DEFAULT NULL,
  `details_ar` text DEFAULT NULL,
  `tablecode` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admindepart`
--

INSERT INTO `admindepart` (`id`, `name_ar`, `name_en`, `details_en`, `details_ar`, `tablecode`) VALUES
(1, 'هذا نص كبير', 'nehal', 'nehal', 'هذا نص كبير', '<table class=\"table\">\r\n     <thead>\r\n      <tr>\r\n       <th scope=\"col\">#</th>\r\n       <th scope=\"col\">First</th>\r\n       <th scope=\"col\">Last</th>\r\n       <th scope=\"col\">Handle</th>\r\n      </tr>\r\n     </thead>\r\n     <tbody>\r\n      <tr>\r\n       <th scope=\"row\">1</th>\r\n       <td>Mark</td>\r\n       <td>Otto</td>\r\n       <td>@mdo</td>\r\n      </tr>\r\n      <tr>\r\n       <th scope=\"row\">2</th>\r\n       <td>Jacob</td>\r\n       <td>Thornton</td>\r\n       <td>@fat</td>\r\n      </tr>\r\n      <tr>\r\n       <th scope=\"row\">3</th>\r\n       <td>Larry</td>\r\n       <td>the Bird</td>\r\n       <td>@twitter</td>\r\n      </tr>\r\n     </tbody>\r\n    </table>');

-- --------------------------------------------------------

--
-- Table structure for table `agreement`
--

CREATE TABLE `agreement` (
  `id` int(11) NOT NULL,
  `name_ar` varchar(255) DEFAULT NULL,
  `name_en` varchar(255) DEFAULT NULL,
  `details_ar` varchar(255) DEFAULT NULL,
  `details_en` varchar(255) DEFAULT NULL,
  `image` text DEFAULT NULL,
  `pdf` text DEFAULT NULL,
  `abstract_ar` text DEFAULT NULL,
  `abstract_en` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agreement`
--

INSERT INTO `agreement` (`id`, `name_ar`, `name_en`, `details_ar`, `details_en`, `image`, `pdf`, `abstract_ar`, `abstract_en`) VALUES
(1, 'اتفاقيه', 'agreement', 'لوريم إيبسوم دولور الجلوس amet consectetur الدهون النخبوية. ريروم aperiam voluptatibus ducimus quaerat deleniti exercitationem، voluptatem سابينتي، ناتوس يوري، في سولوتا فوغا فيرو! Suscipit ipsum الملقب لودانتيوم recusandae ديكتا ullam؟', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum aperiam voluptatibus ducimus quaerat deleniti exercitationem, voluptatem sapiente, natus iure, at soluta fuga vero! Suscipit ipsum alias laudantium recusandae dicta ullam?', 'images/leader.jpg', 'download.jpg', 'لوريم إيبسوم دولور الجلوس amet consectetur الدهون النخبوية. ريروم aperiam voluptatibus ducimus quaerat deleniti exercitationem، voluptatem سابينتي، ناتوس يوري، في سولوتا فوغا فيرو! ', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum aperiam voluptatibus ducimus quaerat deleniti exercitationem, voluptatem sapiente, natus iure, at soluta fuga vero!'),
(2, 'اتفاقيه', 'agreement', 'لوريم إيبسوم دولور الجلوس amet consectetur الدهون النخبوية. ريروم aperiam voluptatibus ducimus quaerat deleniti exercitationem، voluptatem سابينتي، ناتوس يوري، في سولوتا فوغا فيرو! Suscipit ipsum الملقب لودانتيوم recusandae ديكتا ullam؟', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum aperiam voluptatibus ducimus quaerat deleniti exercitationem, voluptatem sapiente, natus iure, at soluta fuga vero! Suscipit ipsum alias laudantium recusandae dicta ullam?', 'images/leader.jpg', 'download.jpg', 'لوريم إيبسوم دولور الجلوس amet consectetur الدهون النخبوية. ريروم aperiam voluptatibus ducimus quaerat deleniti exercitationem، voluptatem سابينتي، ناتوس يوري، في سولوتا فوغا فيرو! ', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum aperiam voluptatibus ducimus quaerat deleniti exercitationem, voluptatem sapiente, natus iure, at soluta fuga vero!');

-- --------------------------------------------------------

--
-- Table structure for table `center`
--

CREATE TABLE `center` (
  `id` int(11) NOT NULL,
  `name_ar` varchar(255) DEFAULT NULL,
  `name_en` varchar(255) DEFAULT NULL,
  `details_en` text DEFAULT NULL,
  `details_ar` text DEFAULT NULL,
  `tablecode` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `center`
--

INSERT INTO `center` (`id`, `name_ar`, `name_en`, `details_en`, `details_ar`, `tablecode`) VALUES
(1, 'مركز اللفة الانجيليزية', 'English language center', '\r\nSince its founding, the University has developed plans that ensure the service of the scientific and educational process in Iraq and constructive interaction with the labor market and civil society organizations and through a precise and correct vision of the data of the Iraqi reality based on its vision and mission, thus achieving important results, including the study of students in the university formations in the first and higher studies of its engineering, medical, administrative and applied arts programs, and the development of scientific sections in accordance with the requirements of the scientific plan and the need of the labor market. And from God, success', '\r\nوضعت الجامعة منذ تأسيسها الخطط التي تضمن خدمة المسيرة العلمية والتربوية في العراق والتفاعل البناء مع سوق العمل ومنظمات المجتمع المدني ومن خلال رؤيا دقيقة وصحيحة لمعطيات الواقع العراقي معتمدة على رؤيتها ورسالتها محققة بذلك نتائج مهمة منها دراسة الطلبة في تشكيلات الجامعة في الدراستين الاولية و العليا لبرامجها الهندسية والطبية والإدارية والفنون التطبيقية، واستحداث الاقسام العلمية وفقا لمتطلبات الخطة العلمية و حاجة سوق العمل . ومن الله التوفيق', '\n<table class=\"table\" style=\"width:100%\">\n  <tr>\n    <th>Company</th>\n    <th>Contact</th>\n    <th>Country</th>\n  </tr>\n  <tr>\n    <td>Alfreds Futterkiste</td>\n    <td>Maria Anders</td>\n    <td>Germany</td>\n  </tr>\n  <tr>\n    <td>Centro comercial Moctezuma</td>\n    <td>Francisco Chang</td>\n    <td>Mexico</td>\n  </tr>\n</table>');

-- --------------------------------------------------------

--
-- Table structure for table `compus`
--

CREATE TABLE `compus` (
  `id` int(11) NOT NULL,
  `name_ar` varchar(255) DEFAULT NULL,
  `name_en` varchar(255) DEFAULT NULL,
  `details_en` text DEFAULT NULL,
  `details_ar` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `compus`
--

INSERT INTO `compus` (`id`, `name_ar`, `name_en`, `details_en`, `details_ar`, `image`) VALUES
(1, 'حرم الجامعي', 'Lorem Altaee', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatem architecto cumque eos a tempore velit! Architecto aliquid veniam deleniti ad ut alias animi ex obcaecati enim fuga beatae excepturi, optio dolorum, hic nostrum nisi dicta a eaque expedita quis voluptas vero? Veritatis illum earum totam repellat. Nobis laboriosam ex deleniti ipsam id, maiores dolorum fugit non delectus ipsa magnam? Sunt.', 'لوريم، إيبسوم دولور الجلوس amet consectetur الدهون النخبوية. Voluptatem المهندس المعماري cumque eos فيليت مؤقتة! المهندس المعماري aliquid veniam deleniti الإعلانية ut الملقب animi ex obcaecati enim fuga beatae excepturi، optio دولوروم، هيك نوستروم نيسي ديكتا وeque expedita quis voluptas vero؟ فيريتاتس illum إيروم توم ريبلات. نوبيس laboriosam السابق deleniti ipsam معرف، maiores دولوروم fugit غير delectus ipsa magnam؟ (سونت)', 'images/leader.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `name_ar` varchar(255) DEFAULT NULL,
  `name_en` varchar(255) DEFAULT NULL,
  `details_ar` text DEFAULT NULL,
  `details_en` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `id_facutly` int(11) DEFAULT NULL,
  `color` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `name_ar`, `name_en`, `details_ar`, `details_en`, `image`, `id_facutly`, `color`) VALUES
(1, 'قسم الفيزياء الطبية', 'Department of Medical Physics', 'التفاصيل عن قسم الفيزياء الطبية ', 'details about Department of Medical Physics', 'images/Medical Physics.png', 3, ''),
(5, 'قسم المختبرات الطبية', 'Department of Medical Physics', 'تفاصيل عن قسم المختبرات الطبية', 'details about Department of Medical Physics', 'images/medecin.jpeg', 3, ''),
(6, 'قسم التخدير', 'Medical Analytics Department', 'تفاصيل عن قسم التخدير', 'Details about Medical Analytics Department', 'images/taghder.jpeg', 3, '#d53f3f'),
(9, 'قسم علوم المالية و الصرفية', 'Department of Financial and Exchange Sciences', 'تفاصيل عن قسم علوم المالية و الصرفية', 'Details about Department of Financial and Exchange Sciences', 'images/money.jpeg', 4, '#d53f3f'),
(10, 'قسم ادارة الاعمال', 'Business Administration Department', 'تفاصيل عن قسم ادارة الاعمال', 'Details about Business Administration Department', 'images/business.jpeg', 4, '#d53f3f');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(255) NOT NULL,
  `name_ar` varchar(28) CHARACTER SET utf8 DEFAULT NULL,
  `name_en` varchar(24) CHARACTER SET utf8 DEFAULT NULL,
  `university_certified_en` varchar(255) DEFAULT NULL,
  `university_certified_ar` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `facutly_certified_ar` varchar(255) DEFAULT NULL,
  `facutly_certified_en` varchar(255) DEFAULT NULL,
  `certified_en` varchar(255) DEFAULT NULL,
  `certified_ar` varchar(7) CHARACTER SET utf8 DEFAULT NULL,
  `birthday` varchar(255) DEFAULT NULL,
  `gender_en` varchar(255) DEFAULT NULL,
  `gender_ar` varchar(4) CHARACTER SET utf8 DEFAULT NULL,
  `position_ar` varchar(28) CHARACTER SET utf8 DEFAULT NULL,
  `grade_en` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `grade_ar` varchar(12) CHARACTER SET utf8 DEFAULT NULL,
  `posiotion_en` varchar(255) DEFAULT NULL,
  `email` varchar(34) CHARACTER SET utf8 DEFAULT NULL,
  `details_en` varchar(255) DEFAULT NULL,
  `notes_ar` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `country_certified_ar` varchar(32) CHARACTER SET utf8 DEFAULT NULL,
  `date_certified` varchar(19) CHARACTER SET utf8 DEFAULT NULL,
  `mag_certified_en` varchar(255) DEFAULT NULL,
  `mag_certified_ar` varchar(48) CHARACTER SET utf8 DEFAULT NULL,
  `bac_certified_en` varchar(255) DEFAULT NULL,
  `bac_certified_ar` varchar(49) CHARACTER SET utf8 DEFAULT NULL,
  `country_certified_en` varchar(255) DEFAULT NULL,
  `public_specific_ar` varchar(34) CHARACTER SET utf8 DEFAULT NULL,
  `public_specific_en` varchar(255) DEFAULT NULL,
  `private_specific_ar` varchar(39) CHARACTER SET utf8 DEFAULT NULL,
  `private_specific_en` varchar(255) DEFAULT NULL,
  `type_hirement_ar` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `type_hirement_en` varchar(255) DEFAULT NULL,
  `shift_ar` varchar(13) CHARACTER SET utf8 DEFAULT NULL,
  `date_hirement` varchar(19) CHARACTER SET utf8 DEFAULT NULL,
  `shift_en` varchar(255) DEFAULT NULL,
  `Nationality_ar` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `Nationality_en` varchar(255) DEFAULT NULL,
  `country_ar` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  `country_en` varchar(255) DEFAULT NULL,
  `comrades` varchar(7) CHARACTER SET utf8 DEFAULT NULL,
  `mother_name_ar` varchar(17) CHARACTER SET utf8 DEFAULT NULL,
  `local` varchar(8) CHARACTER SET utf8 DEFAULT NULL,
  `darcode` varchar(12) CHARACTER SET utf8 DEFAULT NULL,
  `mother_name_en` varchar(11) DEFAULT NULL,
  `id_facutly` int(11) DEFAULT NULL,
  `id_department` int(11) DEFAULT NULL,
  `notes_en` varchar(255) DEFAULT NULL,
  `details_ar` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `pdf` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `name_ar`, `name_en`, `university_certified_en`, `university_certified_ar`, `facutly_certified_ar`, `facutly_certified_en`, `certified_en`, `certified_ar`, `birthday`, `gender_en`, `gender_ar`, `position_ar`, `grade_en`, `password`, `phone`, `grade_ar`, `posiotion_en`, `email`, `details_en`, `notes_ar`, `country_certified_ar`, `date_certified`, `mag_certified_en`, `mag_certified_ar`, `bac_certified_en`, `bac_certified_ar`, `country_certified_en`, `public_specific_ar`, `public_specific_en`, `private_specific_ar`, `private_specific_en`, `type_hirement_ar`, `type_hirement_en`, `shift_ar`, `date_hirement`, `shift_en`, `Nationality_ar`, `Nationality_en`, `country_ar`, `country_en`, `comrades`, `mother_name_ar`, `local`, `darcode`, `mother_name_en`, `id_facutly`, `id_department`, `notes_en`, `details_ar`, `image`, `pdf`) VALUES
(1, 'ابتسام نايف عودة', 'ebtesam naïve 3oda', NULL, 'جامعة المستنصريه', NULL, NULL, NULL, 'ماجستير', NULL, NULL, 'انثى', 'تدريسي', NULL, NULL, '7901611481', 'مدرس مساعد', 'doctor', 'abtsam.naeif@uom.edu.iq', NULL, NULL, 'العراق', '2015-01-14 00:00:00', NULL, 'الجامعة المستنصرية', NULL, '0', NULL, 'احياء مجهرية', NULL, 'احياء مجهرية', NULL, 'عقد', NULL, 'صباحي', '2021-01-02 00:00:00', NULL, 'عراقية', NULL, 'بغداد', NULL, '4', 'فائزة ياسين', '606', '38', NULL, 3, 5, '', 'information about doctor ', 'images/profs.jpg', ''),
(3, 'اثير صلاح ابراهيم', 'athier salah ebrahim', NULL, 'جامعة الشرق الاوسط/ الاردن', NULL, NULL, NULL, 'ماجستير', NULL, NULL, 'انثى', 'تدريسي', NULL, NULL, '7705386628', 'مدرس مساعد', 'doctor', 'atheerdahi33@gmail.com', NULL, NULL, 'الاردن', '2021-06-30 00:00:00', NULL, 'جامعة الشرق الاوسط', NULL, 'جامعة النهرين', NULL, 'قانون عام', NULL, 'ماليه عامة', NULL, 'عقد', NULL, 'مسائي', '2021-10-02 00:00:00', NULL, 'عراقي', NULL, 'بغداد', NULL, '0', 'سحر حسن', '201', '0', NULL, 1, NULL, '', 'information about doctor ', 'images/profs.jpg', ''),
(619, 'احسان علي مبارك', 'Ehsan Ali Mubarak', NULL, 'جامعة النيلين ', NULL, NULL, NULL, 'دكتوراه', NULL, NULL, 'ذكر', 'دكتور', NULL, NULL, '7712797148', 'مدرس', 'doctor', 'ihsan.ali@uom.edu.iq', NULL, NULL, 'السودان', NULL, NULL, '0', NULL, '0', NULL, 'ادارة اعمال', 'Business', 'نظم معلومات اداريه', NULL, 'عقد', NULL, 'صباحي', '2021-01-04 00:00:00', NULL, 'عراقي', NULL, 'بغداد', NULL, '12', 'سعدية خضير', '842', '18', NULL, 4, 10, '', 'information about doctor ', 'images/profs.jpg', ''),
(620, 'ليث حمزة سمين', 'Laith Hamza Sumin', NULL, 'جامعة بغداد', NULL, NULL, NULL, 'دكتوراه', NULL, NULL, 'ذكر', 'دكتور', NULL, NULL, NULL, 'استاذ', 'doctor', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'صيدلة', 'Pharmacy', 'صيدلانيات', NULL, NULL, NULL, 'صباحي', '2021-04-12 00:00:00', NULL, NULL, NULL, 'بغداد', NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, '', 'information about doctor ', 'images/profs.jpg', ''),
(621, 'احلام اسماعيل ابراهيم', 'AhlamIsmail Ibrahim', NULL, 'جامعة بغداد', NULL, NULL, NULL, 'دكتوراه', NULL, NULL, 'انثى', 'دكتور', NULL, NULL, '7727705304', 'مدرس', 'doctor', 'ahlam.i.ibrahim@uom.edu.iq', NULL, NULL, 'العراق', NULL, NULL, 'جامعة بغداد', NULL, 'جامعة بغداد', NULL, 'مناعة مايكروبايلوجي', 'Microbiology Immunology', 'مناعة مايكروبايلوجي', NULL, 'عقد', NULL, 'صباحي', '2021-03-01 00:00:00', NULL, 'عراقية', NULL, 'بغداد', NULL, '5', 'سعدية احمد', '436', '23', NULL, 3, 1, '', 'information about doctor ', 'images/profs.jpg', ''),
(622, 'احلام علي حسين', 'Ahlam ali hussain', NULL, 'بغداد', NULL, NULL, NULL, 'ماجستير', NULL, NULL, 'انثى', 'دكتور', NULL, NULL, '7710748012', 'مدرس مساعد', 'doctor', 'ahlam.ali@uom.edu.iq', NULL, NULL, 'العراق', '2017-01-03 00:00:00', NULL, 'جامعة بغداد', NULL, 'جامعة بغداد', NULL, 'فيزياء', 'physics', 'علوم فلك', NULL, 'عقد', NULL, 'صباحي', '2021-01-02 00:00:00', NULL, 'عراقية', NULL, 'بغداد', NULL, '40', 'امتثال احمد', '840', '15', NULL, 3, 1, '', 'information about doctor ', 'images/profs.jpg', ''),
(623, 'احمد باسم قاسم', 'Ahmed Bassem Qassem', NULL, 'جامعة تكريت', NULL, NULL, NULL, 'دكتوراه', NULL, NULL, 'ذكر', 'دكتور', NULL, NULL, '7707967856', 'مدرس مساعد', 'doctor', 'ahmed.alshmmary@yahoo.com', NULL, NULL, 'العراق', '2019-11-18 00:00:00', NULL, 'المجلس العراقي للاختصاصات الطبية', NULL, 'جامعة تكريت', NULL, 'طب عام', 'General Medicine', 'تخدير', NULL, 'عقد', NULL, 'صباحي', '2021-09-13 00:00:00', NULL, 'عراقي', NULL, 'بغداد', NULL, '11', 'منال ناصر', '326', '18', NULL, 3, 1, '', 'information about doctor ', 'images/profs.jpg', ''),
(624, 'احمد حميد كريم', 'Ahmed Hamid Karim', NULL, 'جامعة دمشق', NULL, NULL, NULL, 'دكتوراه', NULL, NULL, 'ذكر', 'دكتور', NULL, NULL, '0', 'مدرس', 'doctor', 'ahmed.hameed@uom.edu.iq', NULL, NULL, 'سوريا', '2014-11-09 00:00:00', NULL, 'جامعة القادسية', NULL, 'جامعة بابل', NULL, 'ادارة اعمال', 'business management', 'سلوك تنظيمي', NULL, 'عقد', NULL, 'صباحي', '2021-01-04 00:00:00', NULL, 'عراقي', NULL, 'بغداد', NULL, '5', 'سليمة عبد  الوهاب', '7', '9', NULL, 4, 10, '', 'information about doctor ', 'images/profs.jpg', ''),
(625, 'احمد خالد الظالمي', 'Ahmed Khaled Al-Zalmy', NULL, 'جامعة النهرين', NULL, NULL, NULL, 'دكتوراه', NULL, NULL, 'ذكر', 'دكتور', NULL, NULL, '7706807850', 'مدرس', 'doctor', 'ahmed.khaled@uom.edu.iq', NULL, NULL, 'العراق', '2015-10-08 00:00:00', NULL, 'جامعة الكوفة', NULL, 'جامعة الكوفة', NULL, 'صيدله', 'Pharmacy', 'فلسفة /كيمياء حياتية سريرة', NULL, 'عقد', NULL, 'صباحي', '2021-01-04 00:00:00', NULL, 'عراقي', NULL, 'بغداد', NULL, '27', 'سليمة جاسم', '120', '73', NULL, 2, 5, '', 'information about doctor ', 'images/profs.jpg', ''),
(626, 'احمد عبد الرحمن محمد', 'AhmedAbdelRahman Mohamed', NULL, 'جيمس كوك استراليا', NULL, NULL, NULL, 'دكتوراه', NULL, NULL, 'ذكر', 'دكتور', NULL, NULL, '7826064207', 'مدرس', 'doctor', 'ahmed.abdulrahman@uom.edu.iq', NULL, NULL, 'استراليا', '2020-02-13 00:00:00', NULL, 'جامزكوك استراليا', NULL, 'الجامعة التكنلوجية', NULL, 'فيزياء طبية', 'Medical physics', 'فيزياء النانوتكنولوجي', NULL, 'عقد', NULL, 'صباحي', '2021-01-02 00:00:00', NULL, 'عراقي', NULL, 'الأنبار', NULL, '19', 'سندس حسن', '315', '19', NULL, 3, 1, '', 'information about doctor ', 'images/profs.jpg', ''),
(627, 'احمد نوري حسن', 'Ahmed Nouri Hassan', NULL, 'النهرين', NULL, NULL, NULL, 'ماجستير', NULL, NULL, 'ذكر', 'دكتور', NULL, NULL, '7816083354', 'مدرس مساعد', 'doctor', 'ahmed.noori@uom.edu.iq', NULL, NULL, 'العراق', NULL, NULL, 'جامعة النهرين', NULL, 'جامعة النهرين', NULL, 'اقتصاديات ادارة مصارف', 'The economics of managing banks', 'ادارة الصيرفة والتمويل', NULL, 'عقد', NULL, 'صباحي', '2021-01-04 00:00:00', NULL, 'عراقي', NULL, 'بغداد', NULL, '0', 'ساهره دحام', '0', '0', NULL, 4, 9, '', 'information about doctor ', 'images/profs.jpg', ''),
(628, 'اسراء حمادي فهد', 'Esraa Hammadi Fahd', NULL, 'جامعة النهرين ', NULL, NULL, NULL, 'ماجستير', NULL, NULL, 'انثى', 'دكتور', NULL, NULL, '7713305417', 'مدرس مساعد', 'doctor', 'israa.hammadi@uom.edu.iq', NULL, 'دوام جزئي', 'العراق', NULL, NULL, 'جامعة النهرين', NULL, 'جامعة بغداد', NULL, 'صيدلة', 'Pharmacy', 'فسلجة طبية', NULL, 'عقد', NULL, 'صباحي', '2021-01-04 00:00:00', NULL, 'عراقية', NULL, 'بغداد', NULL, '40', 'يسرى عبد الحميد', '461', '3', NULL, 2, NULL, '', 'information about doctor ', 'images/profs.jpg', ''),
(629, 'الاء حاتم ذنون', 'Alaa Hatem Thanoun', NULL, 'الجامعة المستنصرية', NULL, NULL, NULL, 'دكتوراه', NULL, NULL, 'انثى', 'دكتور', NULL, NULL, '7708950127', 'مدرس دكتور', 'doctor', 'drallaahth@gmail.com', NULL, NULL, 'العراق', '2021-01-11 00:00:00', NULL, 'جامعة المستنصرية', NULL, 'الجامعة المستنصرية', NULL, 'علوم حياة', 'Life sciences', 'علم الحيوان', NULL, 'عقد', NULL, 'صباحي', '2021-09-13 00:00:00', NULL, 'عراقية', NULL, 'بغداد', NULL, '70', 'ثورة محمود', '321', '11', NULL, 3, 5, '', 'information about doctor ', 'images/profs.jpg', ''),
(630, 'الحمزة ضياء حميد', 'Hamza Dia Hamid', NULL, 'جامعة هامدرد الهند', NULL, NULL, NULL, 'دكتوراه', NULL, NULL, 'ذكر', 'دكتور', NULL, NULL, '7737554933', 'مدرس', 'doctor', 'alhamzah.dheyaa@uom.edu.iq', NULL, NULL, 'الهند', '2017-03-08 00:00:00', NULL, 'جامعة هامدارد الهند', NULL, 'جامعة بغداد', NULL, 'كيمياء', 'chemistry', 'كيمياء', NULL, 'عقد', NULL, 'صباحي', '2021-01-24 00:00:00', NULL, 'عراقي', NULL, 'بغداد', NULL, '9', 'هيفاء نافع', '836', '17', NULL, 3, 6, '', 'information about doctor ', 'images/profs.jpg', ''),
(631, 'امل حمادة علي', 'aml hamada ali', NULL, 'بغداد', NULL, NULL, NULL, 'ماجستير', NULL, NULL, 'انثى', 'دكتور', NULL, NULL, '7703993516', 'استاذ مساعد', 'doctor', 'amel.hamada@uom.edu.iq', NULL, NULL, 'العراق', NULL, NULL, 'جامعة بغداد', NULL, 'جامعة بغداد', NULL, 'صيدلة', 'pharmacy', 'كيمياء سريرية', NULL, 'عقد', NULL, 'صباحي', '2021-01-05 00:00:00', NULL, 'عراقية', NULL, 'بغداد', NULL, '56', 'شاهه مروح', '679', '43', NULL, 2, NULL, '', 'information about doctor ', 'images/profs.jpg', ''),
(632, 'انفال جبار كطافه', 'Anfal Jabbar Katafa', NULL, 'جامعة النهرين ', NULL, NULL, NULL, 'ماجستير', NULL, NULL, 'انثى', 'دكتور', NULL, NULL, '7711960494', 'مدرس مساعد', 'doctor', 'jabbar.anfal@yahoo.com', NULL, NULL, 'العراق', '2020-11-09 00:00:00', NULL, 'جامعة النهرين - كلية الطب', NULL, 'جامعة بغداد - كلية العلوم للبنات', NULL, 'فيزياء طبية', 'Medical physics', 'فيزياء طبية', NULL, 'عقد', NULL, 'صباحي', '2021-04-25 00:00:00', NULL, 'عراقية', NULL, 'بغداد', NULL, '43', 'ميعاد عبدالرزاق', '330', '19', NULL, 3, 1, '', 'information about doctor ', 'images/profs.jpg', ''),
(633, 'اية ياسين محمود', 'Aya yassin mahmpud', NULL, 'جامعة لندن ', NULL, NULL, NULL, 'ماجستير', NULL, NULL, 'انثى', 'دكتور', NULL, NULL, '0', 'مدرس مساعد', 'doctor', 'aya.y.m@uom.edu.iq', NULL, NULL, 'بريطانيا', NULL, NULL, 'جامعة لندن', NULL, 'جامعة بغداد', NULL, 'كيمياء صيدلانيات', 'Pharmaceutical Chemistry', 'مناعة مايكروبايلوجي', NULL, 'عقد', NULL, 'صباحي', '2021-01-24 00:00:00', NULL, 'عراقية', NULL, 'بغداد', NULL, '17', 'مديحة عبد الوهاب', '649', '1', NULL, 2, NULL, '', 'information about doctor ', 'images/profs.jpg', ''),
(634, 'ايثار يحيى صالح', 'Altruism Yahya Saleh', NULL, 'جامعة ماليا', NULL, NULL, NULL, 'دكتوراه', NULL, NULL, 'ذكر', 'دكتور', NULL, NULL, '7721301020', 'مدرس', 'doctor', 'ethar988@gmail.com', NULL, NULL, 'ماليزيا', '2018-11-22 00:00:00', NULL, 'جامعة ماليا', NULL, 'جامعة التكنلوجية', NULL, 'علوم فيزياء تطبيقية/ كهرومغناطيسية', 'Applied Physics/Electromagnetism', 'المواد النانوية', NULL, 'عقد', NULL, 'صباحي', '2021-09-13 00:00:00', NULL, 'عراقي', NULL, 'بغداد', NULL, '11', 'وهيبة عطا', '618', '14', NULL, 3, 5, '', 'information about doctor ', 'images/profs.jpg', ''),
(635, 'ايمان جمال مختار', 'Iman Jamal Mukhtar', NULL, 'جامعة عمان', NULL, NULL, NULL, 'ماجستير', NULL, NULL, 'انثى', 'دكتور', NULL, NULL, '7734154653', 'مدرس مساعد', 'doctor', 'eman.gamal@uom.edu.iq', NULL, NULL, 'الاردن', NULL, NULL, 'جامعة الاسراء', NULL, 'جامعة بغداد', NULL, 'صيدلة', 'pharmacy', 'صيدلانيات', NULL, 'عقد', NULL, 'صباحي', '2021-01-09 00:00:00', NULL, 'عراقية', NULL, 'بغداد', NULL, '1', 'فاطمة عبد الجليل', '318', '56', NULL, 2, NULL, '', 'information about doctor ', 'images/profs.jpg', ''),
(636, 'nehal', 'nehal', 'university_certified', 'الجامعه الحاصل منها علي الشهاده', 'الكلية الحاصل منها علي الشهاده', 'facutly_certified', 'certified', 'الشهاده', '2022-03-10', 'female', 'انثي', 'دكتور', '12', NULL, '1060905', '12', 'doctor', 'brettyangle480@gmail.com', 'jdvnjvnxj n', 'ملاحظات', 'أرمينيا', NULL, 'university of mag_certified', 'الجامعه الحاصل منها علي المجاستير', 'university of bac_certified', 'جامعه الحاصل منها علي الدكتوراه', 'Afganistan', 'التخصص العام', 'public_specific', 'التخصص الدقيق', 'private_specific', 'نوع التعيين', 'type_hirement', 'صباحي', '2022-02-03', 'morning', 'الألبانية', 'barbudans', 'أندورا', 'Anguilla', '54', 'اسم الام', '54851', '1555', NULL, 1, NULL, 'notes', 'التفاصيل', 'images/profs.jpg', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `id` int(11) NOT NULL,
  `lecture` text DEFAULT NULL,
  `day` varchar(255) DEFAULT NULL,
  `id_faculty` int(11) DEFAULT NULL,
  `id_department` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`id`, `lecture`, `day`, `id_faculty`, `id_department`) VALUES
(2, ' <table class=\"table\">\r\n       <thead class=\"thead-dark\">\r\n        <tr>\r\n         <th scope=\"col\">dssd</th>\r\n         <th scope=\"col\">dssd</th>\r\n\r\n         <th scope=\"col\">dssd</th>\r\n         <th scope=\"col\">dssd</th>\r\n         <th scope=\"col\">dssd</th>\r\n         <th scope=\"col\">dssd</th>\r\n\r\n        </tr>\r\n       </thead>\r\n       <tbody>\r\n        <tr>\r\n         <th scope=\"row\">1</th>\r\n         <td>Mark</td>\r\n         <td>Otto</td>\r\n         <td>@mdo</td>\r\n        </tr>\r\n        <tr>\r\n         <th scope=\"row\">2</th>\r\n         <td>Jacob</td>\r\n         <td>Thornton</td>\r\n         <td>@fat</td>\r\n        </tr>\r\n        <tr>\r\n         <th scope=\"row\">3</th>\r\n         <td>Larry</td>\r\n         <td>the Bird</td>\r\n         <td>@twitter</td>\r\n        </tr>\r\n       </tbody>\r\n      </table>', 'saturday', 1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `examlab`
--

CREATE TABLE `examlab` (
  `id` int(11) NOT NULL,
  `lecture` text DEFAULT NULL,
  `day` varchar(255) DEFAULT NULL,
  `id_faculty` int(11) DEFAULT NULL,
  `id_department` int(11) DEFAULT NULL,
  `day_en` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `examlab`
--

INSERT INTO `examlab` (`id`, `lecture`, `day`, `id_faculty`, `id_department`, `day_en`) VALUES
(1, ' <table class=\"table\">\n       <thead class=\"thead-dark\">\n        <tr>\n         <th scope=\"col\">dssd</th>\n         <th scope=\"col\">dssd</th>\n\n         <th scope=\"col\">dssd</th>\n         <th scope=\"col\">dssd</th>\n         <th scope=\"col\">dssd</th>\n         <th scope=\"col\">dssd</th>\n\n        </tr>\n       </thead>\n       <tbody>\n        <tr>\n         <th scope=\"row\">1</th>\n         <td>Mark</td>\n         <td>Otto</td>\n         <td>@mdo</td>\n        </tr>\n        <tr>\n         <th scope=\"row\">2</th>\n         <td>Jacob</td>\n         <td>Thornton</td>\n         <td>@fat</td>\n        </tr>\n        <tr>\n         <th scope=\"row\">3</th>\n         <td>Larry</td>\n         <td>the Bird</td>\n         <td>@twitter</td>\n        </tr>\n       </tbody>\n      </table>', 'السبت', 1, 1, ''),
(2, ' <table class=\"table\">\n       <thead class=\"thead-dark\">\n        <tr>\n         <th scope=\"col\">dssd</th>\n         <th scope=\"col\">dssd</th>\n\n         <th scope=\"col\">dssd</th>\n         <th scope=\"col\">dssd</th>\n         <th scope=\"col\">dssd</th>\n         <th scope=\"col\">dssd</th>\n\n        </tr>\n       </thead>\n       <tbody>\n        <tr>\n         <th scope=\"row\">1</th>\n         <td>Mark</td>\n         <td>Otto</td>\n         <td>@mdo</td>\n        </tr>\n        <tr>\n         <th scope=\"row\">2</th>\n         <td>Jacob</td>\n         <td>Thornton</td>\n         <td>@fat</td>\n        </tr>\n        <tr>\n         <th scope=\"row\">3</th>\n         <td>Larry</td>\n         <td>the Bird</td>\n         <td>@twitter</td>\n        </tr>\n       </tbody>\n      </table>', 'الاحد', 3, 1, ''),
(9, 'gdzfbgn', '5', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `facutly`
--

CREATE TABLE `facutly` (
  `id` int(11) NOT NULL,
  `name_ar` varchar(255) DEFAULT NULL,
  `name_en` varchar(255) DEFAULT NULL,
  `message_ar` text DEFAULT NULL,
  `message_en` text DEFAULT NULL,
  `view_ar` text DEFAULT NULL,
  `view_en` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `goal_ar` text DEFAULT NULL,
  `goal_en` text DEFAULT NULL,
  `about_facutly_ar` text DEFAULT NULL,
  `about_facutly_en` text DEFAULT NULL,
  `message_dean_ar` text DEFAULT NULL,
  `message_dean_en` text DEFAULT NULL,
  `color` varchar(255) NOT NULL,
  `images` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `facutly`
--

INSERT INTO `facutly` (`id`, `name_ar`, `name_en`, `message_ar`, `message_en`, `view_ar`, `view_en`, `image`, `goal_ar`, `goal_en`, `about_facutly_ar`, `about_facutly_en`, `message_dean_ar`, `message_dean_en`, `color`, `images`) VALUES
(1, 'كلية القانون', 'low', ' \nيشرفني ويسرني بكل تواضع، وأيضا بكل الفخر بتاريخنا وإرثنا، أن أقبل منصب العميدً المؤقتً لجامعة جورجتاون في قطر. فبصفتي أستاذًا درّس في جورجتاون لنحو 35 عامًا، أؤكد بكل ثقة على التزامنا تجاه طلابنا وأعضاء هيئة التدريس والعاملين، وعلى تقديرنا لأفراد المجتمع والأطراف المؤثرة الذين يدعمون مهمتنا. لقد انضممت إلى جامعة جورجتاون بسبب تميزها الأكاديمي والبحثي، وقد أتيت لأشارك في بناء الحرم الجامعي في قطر عندما أتيحت لي فرصة المشاركة مع مجموعة متنوعة من الطلاب في مناخ ثري ضمن حاضنة جامعية تشمل عدة جامعات ذات تخصصات متنوعة.', 'message of Faculty of law', 'كلمة العميد\nيشرفني ويسرني بكل تواضع، وأيضا بكل الفخر بتاريخنا وإرثنا، أن أقبل منصب العميدً المؤقتً لجامعة جورجتاون في قطر. فبصفتي أستاذًا درّس في جورجتاون لنحو 35 عامًا، أؤكد بكل ثقة على التزامنا تجاه طلابنا وأعضاء هيئة التدريس والعاملين، وعلى تقديرنا لأفراد المجتمع والأطراف المؤثرة الذين يدعمون مهمتنا. لقد انضممت إلى جامعة جورجتاون بسبب تميزها الأكاديمي والبحثي، وقد أتيت لأشارك في بناء الحرم الجامعي في قطر عندما أتيحت لي فرصة المشاركة مع مجموعة متنوعة من الطلاب في مناخ ثري ضمن حاضنة جامعية تشمل عدة جامعات ذات تخصصات متنوعة.', 'view of Faculty of law', '/coll-icon/القانون.jpg', 'يشرفني ويسرني بكل تواضع، وأيضا بكل الفخر بتاريخنا وإرثنا، أن أقبل منصب العميدً المؤقتً لجامعة جورجتاون في قطر. فبصفتي أستاذًا درّس في جورجتاون لنحو 35 عامًا، أؤكد بكل ثقة على التزامنا تجاه طلابنا وأعضاء هيئة التدريس والعاملين، وعلى تقديرنا لأفراد المجتمع والأطراف المؤثرة الذين يدعمون مهمتنا. لقد انضممت إلى جامعة جورجتاون بسبب تميزها الأكاديمي والبحثي، وقد أتيت لأشارك في بناء الحرم الجامعي في قطر عندما أتيحت لي فرصة المشاركة مع مجموعة متنوعة من الطلاب في مناخ ثري ضمن حاضنة جامعية تشمل عدة جامعات ذات تخصصات متنوعة.', 'goal of Faculty of law', 'الكُلْية (جمعها كُلَى) (باللاتينية: Ren) هي عضو هام من أعضاء جسم الإنسان شبيه من حيث الشكل ببذرة الفاصوليا لونه بني مائل للحمرة،  ', '         Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae dolorem cum dolor. Tempora\r\n                        aliquam non placeat pariatur mollitia repellat? Esse obcaecati sapiente animi praesentium\r\n  ', 'كلمة العميد\nيشرفني ويسرني بكل تواضع، وأيضا بكل الفخر بتاريخنا وإرثنا، أن أقبل منصب العميدً المؤقتً لجامعة جورجتاون في قطر. فبصفتي أستاذًا درّس في جورجتاون لنحو 35 عامًا، أؤكد بكل ثقة على التزامنا تجاه طلابنا وأعضاء هيئة التدريس والعاملين، وعلى تقديرنا لأفراد المجتمع والأطراف المؤثرة الذين يدعمون مهمتنا. لقد انضممت إلى جامعة جورجتاون بسبب تميزها الأكاديمي والبحثي، وقد أتيت لأشارك في بناء الحرم الجامعي في قطر عندما أتيحت لي فرصة المشاركة مع مجموعة متنوعة من الطلاب في مناخ ثري ضمن حاضنة جامعية تشمل عدة جامعات ذات تخصصات متنوعة.', 'message of dean of Faculty of Pharmacy', '#b12020', 'images/prof.png'),
(2, 'الصيدليه', 'Pharmacy', '\nيشرفني ويسرني بكل تواضع، وأيضا بكل الفخر بتاريخنا وإرثنا، أن أقبل منصب العميدً المؤقتً لجامعة جورجتاون في قطر. فبصفتي أستاذًا درّس في جورجتاون لنحو 35 عامًا، أؤكد بكل ثقة على التزامنا تجاه طلابنا وأعضاء هيئة التدريس والعاملين، وعلى تقديرنا لأفراد المجتمع والأطراف المؤثرة الذين يدعمون مهمتنا. لقد انضممت إلى جامعة جورجتاون بسبب تميزها الأكاديمي والبحثي، وقد أتيت لأشارك في بناء الحرم الجامعي في قطر عندما أتيحت لي فرصة المشاركة مع مجموعة متنوعة من الطلاب في مناخ ثري ضمن حاضنة جامعية تشمل عدة جامعات ذات تخصصات متنوعة.', 'message of Faculty of pharmacy', 'كلمة العميد\nيشرفني ويسرني بكل تواضع، وأيضا بكل الفخر بتاريخنا وإرثنا، أن أقبل منصب العميدً المؤقتً لجامعة جورجتاون في قطر. فبصفتي أستاذًا درّس في جورجتاون لنحو 35 عامًا، أؤكد بكل ثقة على التزامنا تجاه طلابنا وأعضاء هيئة التدريس والعاملين، وعلى تقديرنا لأفراد المجتمع والأطراف المؤثرة الذين يدعمون مهمتنا. لقد انضممت إلى جامعة جورجتاون بسبب تميزها الأكاديمي والبحثي، وقد أتيت لأشارك في بناء الحرم الجامعي في قطر عندما أتيحت لي فرصة المشاركة مع مجموعة متنوعة من الطلاب في مناخ ثري ضمن حاضنة جامعية تشمل عدة جامعات ذات تخصصات متنوعة.', 'view of Faculty of pharmacy', '/coll-icon/الصيدلة.jpeg', '\nيشرفني ويسرني بكل تواضع، وأيضا بكل الفخر بتاريخنا وإرثنا، أن أقبل منصب العميدً المؤقتً لجامعة جورجتاون في قطر. فبصفتي أستاذًا درّس في جورجتاون لنحو 35 عامًا، أؤكد بكل ثقة على التزامنا تجاه طلابنا وأعضاء هيئة التدريس والعاملين، وعلى تقديرنا لأفراد المجتمع والأطراف المؤثرة الذين يدعمون مهمتنا. لقد انضممت إلى جامعة جورجتاون بسبب تميزها الأكاديمي والبحثي، وقد أتيت لأشارك في بناء الحرم الجامعي في قطر عندما أتيحت لي فرصة المشاركة مع مجموعة متنوعة من الطلاب في مناخ ثري ضمن حاضنة جامعية تشمل عدة جامعات ذات تخصصات متنوعة.', 'goal of Faculty of pharmacy', 'الكُلْية (جمعها كُلَى) (باللاتينية: Ren) هي عضو هام من أعضاء جسم الإنسان شبيه من حيث الشكل ببذرة الفاصوليا لونه بني مائل للحمرة،  ', '         Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae dolorem cum dolor. Tempora\n                        aliquam non placeat pariatur mollitia repellat? Esse obcaecati sapiente animi praesentium\n  ', 'كلمة العميد\nيشرفني ويسرني بكل تواضع، وأيضا بكل الفخر بتاريخنا وإرثنا، أن أقبل منصب العميدً المؤقتً لجامعة جورجتاون في قطر. فبصفتي أستاذًا درّس في جورجتاون لنحو 35 عامًا، أؤكد بكل ثقة على التزامنا تجاه طلابنا وأعضاء هيئة التدريس والعاملين، وعلى تقديرنا لأفراد المجتمع والأطراف المؤثرة الذين يدعمون مهمتنا. لقد انضممت إلى جامعة جورجتاون بسبب تميزها الأكاديمي والبحثي، وقد أتيت لأشارك في بناء الحرم الجامعي في قطر عندما أتيحت لي فرصة المشاركة مع مجموعة متنوعة من الطلاب في مناخ ثري ضمن حاضنة جامعية تشمل عدة جامعات ذات تخصصات متنوعة.', 'message of dean of Faculty of Pharmacy', '#b12020', 'images/prof.png'),
(3, 'كلية التقنيات الطبية والعلوم', 'medecin', '\nيشرفني ويسرني بكل تواضع، وأيضا بكل الفخر بتاريخنا وإرثنا، أن أقبل منصب العميدً المؤقتً لجامعة جورجتاون في قطر. فبصفتي أستاذًا درّس في جورجتاون لنحو 35 عامًا، أؤكد بكل ثقة على التزامنا تجاه طلابنا وأعضاء هيئة التدريس والعاملين، وعلى تقديرنا لأفراد المجتمع والأطراف المؤثرة الذين يدعمون مهمتنا. لقد انضممت إلى جامعة جورجتاون بسبب تميزها الأكاديمي والبحثي، وقد أتيت لأشارك في بناء الحرم الجامعي في قطر عندما أتيحت لي فرصة المشاركة مع مجموعة متنوعة من الطلاب في مناخ ثري ضمن حاضنة جامعية تشمل عدة جامعات ذات تخصصات متنوعة.', 'message of Faculty of science medecin', 'كلمة العميد\nيشرفني ويسرني بكل تواضع، وأيضا بكل الفخر بتاريخنا وإرثنا، أن أقبل منصب العميدً المؤقتً لجامعة جورجتاون في قطر. فبصفتي أستاذًا درّس في جورجتاون لنحو 35 عامًا، أؤكد بكل ثقة على التزامنا تجاه طلابنا وأعضاء هيئة التدريس والعاملين، وعلى تقديرنا لأفراد المجتمع والأطراف المؤثرة الذين يدعمون مهمتنا. لقد انضممت إلى جامعة جورجتاون بسبب تميزها الأكاديمي والبحثي، وقد أتيت لأشارك في بناء الحرم الجامعي في قطر عندما أتيحت لي فرصة المشاركة مع مجموعة متنوعة من الطلاب في مناخ ثري ضمن حاضنة جامعية تشمل عدة جامعات ذات تخصصات متنوعة.', 'view of Faculty of science medecin', '/coll-icon/تقنيات العلوم الطبية قسم التخدير.jpeg', '\nيشرفني ويسرني بكل تواضع، وأيضا بكل الفخر بتاريخنا وإرثنا، أن أقبل منصب العميدً المؤقتً لجامعة جورجتاون في قطر. فبصفتي أستاذًا درّس في جورجتاون لنحو 35 عامًا، أؤكد بكل ثقة على التزامنا تجاه طلابنا وأعضاء هيئة التدريس والعاملين، وعلى تقديرنا لأفراد المجتمع والأطراف المؤثرة الذين يدعمون مهمتنا. لقد انضممت إلى جامعة جورجتاون بسبب تميزها الأكاديمي والبحثي، وقد أتيت لأشارك في بناء الحرم الجامعي في قطر عندما أتيحت لي فرصة المشاركة مع مجموعة متنوعة من الطلاب في مناخ ثري ضمن حاضنة جامعية تشمل عدة جامعات ذات تخصصات متنوعة.', 'goal of Faculty of medecin and science', 'الكُلْية (جمعها كُلَى) (باللاتينية: Ren) هي عضو هام من أعضاء جسم الإنسان شبيه من حيث الشكل ببذرة الفاصوليا لونه بني مائل للحمرة،  ', '         Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae dolorem cum dolor. Tempora\n                        aliquam non placeat pariatur mollitia repellat? Esse obcaecati sapiente animi praesentium\n  ', 'كلمة العميد\nيشرفني ويسرني بكل تواضع، وأيضا بكل الفخر بتاريخنا وإرثنا، أن أقبل منصب العميدً المؤقتً لجامعة جورجتاون في قطر. فبصفتي أستاذًا درّس في جورجتاون لنحو 35 عامًا، أؤكد بكل ثقة على التزامنا تجاه طلابنا وأعضاء هيئة التدريس والعاملين، وعلى تقديرنا لأفراد المجتمع والأطراف المؤثرة الذين يدعمون مهمتنا. لقد انضممت إلى جامعة جورجتاون بسبب تميزها الأكاديمي والبحثي، وقد أتيت لأشارك في بناء الحرم الجامعي في قطر عندما أتيحت لي فرصة المشاركة مع مجموعة متنوعة من الطلاب في مناخ ثري ضمن حاضنة جامعية تشمل عدة جامعات ذات تخصصات متنوعة.', 'message of dean of medecin', '#b12020', 'images/prof.png'),
(4, 'كلية العلوم الادارية', 'management', '\nيشرفني ويسرني بكل تواضع، وأيضا بكل الفخر بتاريخنا وإرثنا، أن أقبل منصب العميدً المؤقتً لجامعة جورجتاون في قطر. فبصفتي أستاذًا درّس في جورجتاون لنحو 35 عامًا، أؤكد بكل ثقة على التزامنا تجاه طلابنا وأعضاء هيئة التدريس والعاملين، وعلى تقديرنا لأفراد المجتمع والأطراف المؤثرة الذين يدعمون مهمتنا. لقد انضممت إلى جامعة جورجتاون بسبب تميزها الأكاديمي والبحثي، وقد أتيت لأشارك في بناء الحرم الجامعي في قطر عندما أتيحت لي فرصة المشاركة مع مجموعة متنوعة من الطلاب في مناخ ثري ضمن حاضنة جامعية تشمل عدة جامعات ذات تخصصات متنوعة.', 'messageof Faculty of  management science', 'كلمة العميد\nيشرفني ويسرني بكل تواضع، وأيضا بكل الفخر بتاريخنا وإرثنا، أن أقبل منصب العميدً المؤقتً لجامعة جورجتاون في قطر. فبصفتي أستاذًا درّس في جورجتاون لنحو 35 عامًا، أؤكد بكل ثقة على التزامنا تجاه طلابنا وأعضاء هيئة التدريس والعاملين، وعلى تقديرنا لأفراد المجتمع والأطراف المؤثرة الذين يدعمون مهمتنا. لقد انضممت إلى جامعة جورجتاون بسبب تميزها الأكاديمي والبحثي، وقد أتيت لأشارك في بناء الحرم الجامعي في قطر عندما أتيحت لي فرصة المشاركة مع مجموعة متنوعة من الطلاب في مناخ ثري ضمن حاضنة جامعية تشمل عدة جامعات ذات تخصصات متنوعة.', 'view of Faculty of  management science', '/coll-icon/كلية العلوم الادارية.jpeg', '\nيشرفني ويسرني بكل تواضع، وأيضا بكل الفخر بتاريخنا وإرثنا، أن أقبل منصب العميدً المؤقتً لجامعة جورجتاون في قطر. فبصفتي أستاذًا درّس في جورجتاون لنحو 35 عامًا، أؤكد بكل ثقة على التزامنا تجاه طلابنا وأعضاء هيئة التدريس والعاملين، وعلى تقديرنا لأفراد المجتمع والأطراف المؤثرة الذين يدعمون مهمتنا. لقد انضممت إلى جامعة جورجتاون بسبب تميزها الأكاديمي والبحثي، وقد أتيت لأشارك في بناء الحرم الجامعي في قطر عندما أتيحت لي فرصة المشاركة مع مجموعة متنوعة من الطلاب في مناخ ثري ضمن حاضنة جامعية تشمل عدة جامعات ذات تخصصات متنوعة.', 'goal of Faculty of  management and scienec', 'الكُلْية (جمعها كُلَى) (باللاتينية: Ren) هي عضو هام من أعضاء جسم الإنسان شبيه من حيث الشكل ببذرة الفاصوليا لونه بني مائل للحمرة،  ', '         Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae dolorem cum dolor. Tempora\n                        aliquam non placeat pariatur mollitia repellat? Esse obcaecati sapiente animi praesentium\n  ', 'كلمة العميد\nيشرفني ويسرني بكل تواضع، وأيضا بكل الفخر بتاريخنا وإرثنا، أن أقبل منصب العميدً المؤقتً لجامعة جورجتاون في قطر. فبصفتي أستاذًا درّس في جورجتاون لنحو 35 عامًا، أؤكد بكل ثقة على التزامنا تجاه طلابنا وأعضاء هيئة التدريس والعاملين، وعلى تقديرنا لأفراد المجتمع والأطراف المؤثرة الذين يدعمون مهمتنا. لقد انضممت إلى جامعة جورجتاون بسبب تميزها الأكاديمي والبحثي، وقد أتيت لأشارك في بناء الحرم الجامعي في قطر عندما أتيحت لي فرصة المشاركة مع مجموعة متنوعة من الطلاب في مناخ ثري ضمن حاضنة جامعية تشمل عدة جامعات ذات تخصصات متنوعة.', 'message of dean of Faculty of management ', '#b12020', 'images/prof.png'),
(38, 'كلية طب اسنان ', 'Faculty of Dentistry ', '\nيشرفني ويسرني بكل تواضع، وأيضا بكل الفخر بتاريخنا وإرثنا، أن أقبل منصب العميدً المؤقتً لجامعة جورجتاون في قطر. فبصفتي أستاذًا درّس في جورجتاون لنحو 35 عامًا، أؤكد بكل ثقة على التزامنا تجاه طلابنا وأعضاء هيئة التدريس والعاملين، وعلى تقديرنا لأفراد المجتمع والأطراف المؤثرة الذين يدعمون مهمتنا. لقد انضممت إلى جامعة جورجتاون بسبب تميزها الأكاديمي والبحثي، وقد أتيت لأشارك في بناء الحرم الجامعي في قطر عندما أتيحت لي فرصة المشاركة مع مجموعة متنوعة من الطلاب في مناخ ثري ضمن حاضنة جامعية تشمل عدة جامعات ذات تخصصات متنوعة.', 'message of Faculty of Dentistry ', 'كلمة العميد\nيشرفني ويسرني بكل تواضع، وأيضا بكل الفخر بتاريخنا وإرثنا، أن أقبل منصب العميدً المؤقتً لجامعة جورجتاون في قطر. فبصفتي أستاذًا درّس في جورجتاون لنحو 35 عامًا، أؤكد بكل ثقة على التزامنا تجاه طلابنا وأعضاء هيئة التدريس والعاملين، وعلى تقديرنا لأفراد المجتمع والأطراف المؤثرة الذين يدعمون مهمتنا. لقد انضممت إلى جامعة جورجتاون بسبب تميزها الأكاديمي والبحثي، وقد أتيت لأشارك في بناء الحرم الجامعي في قطر عندما أتيحت لي فرصة المشاركة مع مجموعة متنوعة من الطلاب في مناخ ثري ضمن حاضنة جامعية تشمل عدة جامعات ذات تخصصات متنوعة.', 'view of Faculty of Dentistry ', 'images/denst.jpeg', '\nيشرفني ويسرني بكل تواضع، وأيضا بكل الفخر بتاريخنا وإرثنا، أن أقبل منصب العميدً المؤقتً لجامعة جورجتاون في قطر. فبصفتي أستاذًا درّس في جورجتاون لنحو 35 عامًا، أؤكد بكل ثقة على التزامنا تجاه طلابنا وأعضاء هيئة التدريس والعاملين، وعلى تقديرنا لأفراد المجتمع والأطراف المؤثرة الذين يدعمون مهمتنا. لقد انضممت إلى جامعة جورجتاون بسبب تميزها الأكاديمي والبحثي، وقد أتيت لأشارك في بناء الحرم الجامعي في قطر عندما أتيحت لي فرصة المشاركة مع مجموعة متنوعة من الطلاب في مناخ ثري ضمن حاضنة جامعية تشمل عدة جامعات ذات تخصصات متنوعة.', 'goal of Faculty of Dentistry \r\n', 'الكُلْية (جمعها كُلَى) (باللاتينية: Ren) هي عضو هام من أعضاء جسم الإنسان شبيه من حيث الشكل ببذرة الفاصوليا لونه بني مائل للحمرة،  ', '         Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae dolorem cum dolor. Tempora\n                        aliquam non placeat pariatur mollitia repellat? Esse obcaecati sapiente animi praesentium\n  ', 'كلمة العميد\nيشرفني ويسرني بكل تواضع، وأيضا بكل الفخر بتاريخنا وإرثنا، أن أقبل منصب العميدً المؤقتً لجامعة جورجتاون في قطر. فبصفتي أستاذًا درّس في جورجتاون لنحو 35 عامًا، أؤكد بكل ثقة على التزامنا تجاه طلابنا وأعضاء هيئة التدريس والعاملين، وعلى تقديرنا لأفراد المجتمع والأطراف المؤثرة الذين يدعمون مهمتنا. لقد انضممت إلى جامعة جورجتاون بسبب تميزها الأكاديمي والبحثي، وقد أتيت لأشارك في بناء الحرم الجامعي في قطر عندما أتيحت لي فرصة المشاركة مع مجموعة متنوعة من الطلاب في مناخ ثري ضمن حاضنة جامعية تشمل عدة جامعات ذات تخصصات متنوعة.', 'message of dean of Faculty of Dentistry ', '', 'images/prof.png');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fees`
--

CREATE TABLE `fees` (
  `id` int(11) NOT NULL,
  `tablecode` text DEFAULT NULL,
  `tablecode_ar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fees`
--

INSERT INTO `fees` (`id`, `tablecode`, `tablecode_ar`) VALUES
(2, ' <table class=\"table\">\r\n    <thead class=\"thead-dark text-center\">\r\n     <tr>\r\n      <th scope=\"col\"> الكلية / القسم </th>\r\n      <th scope=\"col\">معدل القبول الصباحي </th>\r\n      <th scope=\"col\">معدل القبول المسائي</th>\r\n      <th scope=\"col\">القسط الدراسي</th>\r\n\r\n     </tr>\r\n    </thead>\r\n    <tbody style=\"font-weight: bold;\" class=\"text-center\">\r\n     <tr>\r\n      <td>طب الاسنان</td>\r\n      <td>80</td>\r\n      <td>لا يوجد</td>\r\n      <td>8.950.000</td>\r\n\r\n     </tr>\r\n     <tr>\r\n      <td> الصيدلة</td>\r\n      <td>80</td>\r\n      <td>لا يوجد</td>\r\n      <td>7.950.000</td>\r\n     </tr>\r\n     <tr>\r\n      <td>تقنيات التخدير</td>\r\n      <td>69.5 </td>\r\n      <td>64.5</td>\r\n      <td>3.950.000</td>\r\n\r\n     </tr>\r\n     <tr>\r\n      <td>تقنيات التحليلات</td>\r\n      <td>69.5 </td>\r\n      <td>64.5</td>\r\n      <td>3.450.000</td>\r\n     </tr>\r\n     <tr>\r\n      <td>الفيزياء الطبية</td>\r\n      <td>56.5 </td>\r\n      <td>54.5</td>\r\n      <td>3.750.000</td>\r\n     </tr>\r\n     <tr>\r\n      <td> القانون</td>\r\n      <td>56.5 </td>\r\n      <td>54.5</td>\r\n      <td>2.000.000</td>\r\n     </tr>\r\n     <tr>\r\n      <td> ادارة الاعمال</td>\r\n      <td>50 </td>\r\n      <td>50</td>\r\n      <td>2.000.000</td>\r\n     </tr>\r\n     <tr>\r\n      <td> علوم المالية و المصرفية </td>\r\n      <td>50 </td>\r\n      <td>50</td>\r\n      <td>2.000.000</td>\r\n     </tr>\r\n    </tbody>\r\n   </table>', ' <table class=\"table\">        <thead class=\"thead-dark\">         <tr>          <th scope=\"col\">dssd</th>          <th scope=\"col\">dssd</th>           <th scope=\"col\">dssd</th>          <th scope=\"col\">dssd</th>          <th scope=\"col\">dssd</th>          <th scope=\"col\">dssd</th>          </tr>        </thead>        <tbody>         <tr>          <th scope=\"row\">1</th>          <td>Mark</td>          <td>Otto</td>          <td>@mdo</td>         </tr>         <tr>          <th scope=\"row\">2</th>          <td>Jacob</td>          <td>Thornton</td>          <td>@fat</td>         </tr>         <tr>          <th scope=\"row\">3</th>          <td>Larry</td>          <td>the Bird</td>          <td>@twitter</td>         </tr>        </tbody>       </table>');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `image`) VALUES
(1, 'images/20220222120534.jpg'),
(2, 'images/20220222120534.jpg'),
(3, 'images/20220222120534.jpg'),
(4, 'images/20220222120534.jpg'),
(5, 'images/20220222120534.jpg'),
(6, 'images/20220222120534.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `image` text DEFAULT NULL,
  `id_image` int(11) DEFAULT NULL,
  `id_activity` int(11) DEFAULT NULL,
  `id_achievement` int(11) DEFAULT NULL,
  `id_lab` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image`, `id_image`, `id_activity`, `id_achievement`, `id_lab`) VALUES
(1, 'images/laab.jpeg', 1, 1, 3, 1),
(2, 'images/laab.jpeg', 2, 2, 4, 2),
(4, 'images/laab.jpeg', 3, 3, 5, 3),
(5, 'images/laab.jpeg', 1, 4, 9, 4),
(6, 'images/laab.jpeg', 1, 1, 3, 1),
(7, 'images/laab.jpeg', 1, 2, 4, 2),
(8, 'images/laab.jpeg', 3, 3, 5, 3),
(9, 'images/laab.jpeg', 4, 4, 9, 4);

-- --------------------------------------------------------

--
-- Table structure for table `lab`
--

CREATE TABLE `lab` (
  `id` int(11) NOT NULL,
  `name_ar` varchar(255) DEFAULT NULL,
  `name_en` varchar(255) DEFAULT NULL,
  `details_ar` varchar(255) DEFAULT NULL,
  `details_en` varchar(255) DEFAULT NULL,
  `image` text DEFAULT NULL,
  `images` text DEFAULT NULL,
  `pdf` varchar(255) DEFAULT NULL,
  `id_faculty` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lab`
--

INSERT INTO `lab` (`id`, `name_ar`, `name_en`, `details_ar`, `details_en`, `image`, `images`, `pdf`, `id_faculty`) VALUES
(1, 'معمل 1', 'lab1', 'التفاصيل عن االمعمل', 'details_ labs', 'images/laab.jpeg', 'images/prof1.jpg', 'download.pdf', 2),
(2, 'معمل 2', 'lab2', 'التفاصيل عن االمعمل', 'details_ labs', 'images/laab.jpeg', 'images/prof1.jpg', 'download.pdf', 3),
(3, 'معمل 3', 'lab3', 'التفاصيل عن االمعمل', 'details_ labs', 'images/laab.jpeg', 'images/prof1.jpg', 'download.pdf', 2),
(4, 'معمل 4', 'lab4', 'التفاصيل عن االمعمل', 'details_ labs', 'images/laab.jpeg', 'images/prof1.jpg', 'download.pdf', 3),
(5, 'معمل 5', 'lab 5', 'التفاصيل عن االمعمل', 'details_ labs', 'images/laab.jpeg', 'images/lb.png', 'download.pdf', 2),
(6, 'معمل 6', 'lab 6', 'التفاصيل عن االمعمل', 'details_ labs', 'images/laab.jpeg', 'images/lb.png', 'download.pdf', 3),
(7, 'معمل 7', 'lab 7', 'التفاصيل عن االمعمل', 'details_ labs', 'images/laab.jpeg', 'images/lb.png', 'download.pdf', 2),
(8, 'معمل 8', 'lab 8', 'التفاصيل عن االمعمل', 'details_ labs', 'images/laab.jpeg', 'images/lb.png', 'download.pdf', 3),
(9, 'معمل 9', 'lab 9', 'التفاصيل عن االمعمل', 'details_ labs', 'images/laab.jpeg', 'images/lb.png', 'download.pdf', 2),
(10, 'معمل 10', 'lab 10', 'التفاصيل عن االمعمل', 'details_ labs', 'images/laab.jpeg', 'images/lb.png', 'download.pdf', 3),
(11, 'معمل 11', 'lab 11', 'التفاصيل عن االمعمل', 'details_ labs', 'images/laab.jpeg', 'images/lb.png', 'download.pdf', 2),
(12, 'معمل 12', 'lab 12', 'التفاصيل عن االمعمل', 'details_ labs', 'images/laab.jpeg', 'images/lb.png', 'download.pdf', 3);

-- --------------------------------------------------------

--
-- Table structure for table `leader`
--

CREATE TABLE `leader` (
  `id` int(255) NOT NULL,
  `name_ar` varchar(28) CHARACTER SET utf8 DEFAULT NULL,
  `name_en` varchar(24) CHARACTER SET utf8 DEFAULT NULL,
  `university_certified_en` varchar(255) DEFAULT NULL,
  `university_certified_ar` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `facutly_certified_ar` varchar(255) DEFAULT NULL,
  `facutly_certified_en` varchar(255) DEFAULT NULL,
  `certified_en` varchar(255) DEFAULT NULL,
  `certified_ar` varchar(7) CHARACTER SET utf8 DEFAULT NULL,
  `birthday` varchar(255) DEFAULT NULL,
  `gender_en` varchar(255) DEFAULT NULL,
  `gender_ar` varchar(4) CHARACTER SET utf8 DEFAULT NULL,
  `position_ar` varchar(28) CHARACTER SET utf8 DEFAULT NULL,
  `grade_en` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `grade_ar` varchar(12) CHARACTER SET utf8 DEFAULT NULL,
  `posiotion_en` varchar(255) DEFAULT NULL,
  `email` varchar(34) CHARACTER SET utf8 DEFAULT NULL,
  `details_en` varchar(255) DEFAULT NULL,
  `notes_ar` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `country_certified_ar` varchar(32) CHARACTER SET utf8 DEFAULT NULL,
  `date_certified` varchar(19) CHARACTER SET utf8 DEFAULT NULL,
  `mag_certified_en` varchar(255) DEFAULT NULL,
  `mag_certified_ar` varchar(48) CHARACTER SET utf8 DEFAULT NULL,
  `bac_certified_en` varchar(255) DEFAULT NULL,
  `bac_certified_ar` varchar(49) CHARACTER SET utf8 DEFAULT NULL,
  `country_certified_en` varchar(255) DEFAULT NULL,
  `public_specific_ar` varchar(34) CHARACTER SET utf8 DEFAULT NULL,
  `public_specific_en` varchar(255) DEFAULT NULL,
  `private_specific_ar` varchar(39) CHARACTER SET utf8 DEFAULT NULL,
  `private_specific_en` varchar(255) DEFAULT NULL,
  `type_hirement_ar` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `type_hirement_en` varchar(255) DEFAULT NULL,
  `shift_ar` varchar(13) CHARACTER SET utf8 DEFAULT NULL,
  `date_hirement` varchar(19) CHARACTER SET utf8 DEFAULT NULL,
  `shift_en` varchar(255) DEFAULT NULL,
  `Nationality_ar` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `Nationality_en` varchar(255) DEFAULT NULL,
  `country_ar` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  `country_en` varchar(255) DEFAULT NULL,
  `comrades` varchar(7) CHARACTER SET utf8 DEFAULT NULL,
  `mother_name_ar` varchar(17) CHARACTER SET utf8 DEFAULT NULL,
  `local` varchar(8) CHARACTER SET utf8 DEFAULT NULL,
  `darcode` varchar(12) CHARACTER SET utf8 DEFAULT NULL,
  `mother_name_en` varchar(11) DEFAULT NULL,
  `id_facutly` int(11) DEFAULT NULL,
  `id_department` int(11) DEFAULT NULL,
  `notes_en` varchar(255) DEFAULT NULL,
  `details_ar` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `leader`
--

INSERT INTO `leader` (`id`, `name_ar`, `name_en`, `university_certified_en`, `university_certified_ar`, `facutly_certified_ar`, `facutly_certified_en`, `certified_en`, `certified_ar`, `birthday`, `gender_en`, `gender_ar`, `position_ar`, `grade_en`, `password`, `phone`, `grade_ar`, `posiotion_en`, `email`, `details_en`, `notes_ar`, `country_certified_ar`, `date_certified`, `mag_certified_en`, `mag_certified_ar`, `bac_certified_en`, `bac_certified_ar`, `country_certified_en`, `public_specific_ar`, `public_specific_en`, `private_specific_ar`, `private_specific_en`, `type_hirement_ar`, `type_hirement_en`, `shift_ar`, `date_hirement`, `shift_en`, `Nationality_ar`, `Nationality_en`, `country_ar`, `country_en`, `comrades`, `mother_name_ar`, `local`, `darcode`, `mother_name_en`, `id_facutly`, `id_department`, `notes_en`, `details_ar`, `image`) VALUES
(1, 'ا.م.د/علي غني', 'D/ali ghaniem', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'رئيس الجامعة', '', NULL, NULL, NULL, 'Assistant President for Administrative Affairs', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'images/profs.jpg'),
(2, 'ا.م.د درع احمد سميط', 'd/der3 ahmed semed', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'مساعد رئيس الجامعه للشؤون ال', NULL, NULL, NULL, NULL, 'Assistant President of the University for Operational Affairs', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'images/profs.jpg'),
(3, 'ا.د سالم سليمان', 'eng/salem seleman', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'مساعد رئيس الجامعه للشؤون ال', NULL, NULL, NULL, NULL, 'Assistant President for Administrative Affairs', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'images/profs.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `leaderuni`
--

CREATE TABLE `leaderuni` (
  `id` int(255) NOT NULL,
  `name_ar` varchar(28) CHARACTER SET utf8 DEFAULT NULL,
  `name_en` varchar(24) CHARACTER SET utf8 DEFAULT NULL,
  `university_certified_en` varchar(255) DEFAULT NULL,
  `university_certified_ar` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `facutly_certified_ar` varchar(255) DEFAULT NULL,
  `facutly_certified_en` varchar(255) DEFAULT NULL,
  `certified_en` varchar(255) DEFAULT NULL,
  `certified_ar` varchar(7) CHARACTER SET utf8 DEFAULT NULL,
  `birthday` varchar(255) DEFAULT NULL,
  `gender_en` varchar(255) DEFAULT NULL,
  `gender_ar` varchar(4) CHARACTER SET utf8 DEFAULT NULL,
  `position_ar` varchar(28) CHARACTER SET utf8 DEFAULT NULL,
  `grade_en` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `grade_ar` varchar(12) CHARACTER SET utf8 DEFAULT NULL,
  `posiotion_en` varchar(255) DEFAULT NULL,
  `email` varchar(34) CHARACTER SET utf8 DEFAULT NULL,
  `details_en` varchar(255) DEFAULT NULL,
  `notes_ar` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `country_certified_ar` varchar(32) CHARACTER SET utf8 DEFAULT NULL,
  `date_certified` varchar(19) CHARACTER SET utf8 DEFAULT NULL,
  `mag_certified_en` varchar(255) DEFAULT NULL,
  `mag_certified_ar` varchar(48) CHARACTER SET utf8 DEFAULT NULL,
  `bac_certified_en` varchar(255) DEFAULT NULL,
  `bac_certified_ar` varchar(49) CHARACTER SET utf8 DEFAULT NULL,
  `country_certified_en` varchar(255) DEFAULT NULL,
  `public_specific_ar` varchar(34) CHARACTER SET utf8 DEFAULT NULL,
  `public_specific_en` varchar(255) DEFAULT NULL,
  `private_specific_ar` varchar(39) CHARACTER SET utf8 DEFAULT NULL,
  `private_specific_en` varchar(255) DEFAULT NULL,
  `type_hirement_ar` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `type_hirement_en` varchar(255) DEFAULT NULL,
  `shift_ar` varchar(13) CHARACTER SET utf8 DEFAULT NULL,
  `date_hirement` varchar(19) CHARACTER SET utf8 DEFAULT NULL,
  `shift_en` varchar(255) DEFAULT NULL,
  `Nationality_ar` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `Nationality_en` varchar(255) DEFAULT NULL,
  `country_ar` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  `country_en` varchar(255) DEFAULT NULL,
  `comrades` varchar(7) CHARACTER SET utf8 DEFAULT NULL,
  `mother_name_ar` varchar(17) CHARACTER SET utf8 DEFAULT NULL,
  `local` varchar(8) CHARACTER SET utf8 DEFAULT NULL,
  `darcode` varchar(12) CHARACTER SET utf8 DEFAULT NULL,
  `mother_name_en` varchar(11) DEFAULT NULL,
  `id_facutly` int(11) DEFAULT NULL,
  `id_department` int(11) DEFAULT NULL,
  `notes_en` varchar(255) DEFAULT NULL,
  `details_ar` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `leaderuni`
--

INSERT INTO `leaderuni` (`id`, `name_ar`, `name_en`, `university_certified_en`, `university_certified_ar`, `facutly_certified_ar`, `facutly_certified_en`, `certified_en`, `certified_ar`, `birthday`, `gender_en`, `gender_ar`, `position_ar`, `grade_en`, `password`, `phone`, `grade_ar`, `posiotion_en`, `email`, `details_en`, `notes_ar`, `country_certified_ar`, `date_certified`, `mag_certified_en`, `mag_certified_ar`, `bac_certified_en`, `bac_certified_ar`, `country_certified_en`, `public_specific_ar`, `public_specific_en`, `private_specific_ar`, `private_specific_en`, `type_hirement_ar`, `type_hirement_en`, `shift_ar`, `date_hirement`, `shift_en`, `Nationality_ar`, `Nationality_en`, `country_ar`, `country_en`, `comrades`, `mother_name_ar`, `local`, `darcode`, `mother_name_en`, `id_facutly`, `id_department`, `notes_en`, `details_ar`, `image`) VALUES
(1, 'أ.د سالم سليمان محمد', 'Dr. Salem Suleiman Moham', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '  عميد كلية العلوم الادارية', NULL, NULL, NULL, NULL, ' Dean of the Faculty of Administrative Sciences', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4, NULL, NULL, NULL, 'images/profs.jpg'),
(2, 'ا.م.د علي غني عباس', 'A.M.D. Ali Ghani Abbas', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'عميد كلية القانون', NULL, NULL, NULL, NULL, 'Dean of the Faculty of Law', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, 'images/profs.jpg'),
(3, 'ا.م.د سنان صبحي فرحان', 'A.M.D. Sinan Sobhi Farha', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'عميد كلية تقنيات والعلوم الط', NULL, NULL, NULL, NULL, 'Dean of the Faculty of Medical Technologies and Sciences', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL, NULL, 'images/profs.jpg'),
(4, 'ا.د رجاء هادي عباس', 'Dr. Raja Hadi Abbas', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'عميد كلية طب الاسنان', NULL, NULL, NULL, NULL, ' Dean of the Faculty of Dentistry', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 38, NULL, NULL, NULL, 'images/profs.jpg'),
(5, 'ا.د ليث حمزة سمين ', 'Dr. Laith Hamza Fatin ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ' عميد كلية الصيدلة', NULL, NULL, NULL, NULL, ' Dean of the Faculty of Pharmacy', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, NULL, NULL, 'images/profs.jpg'),
(6, 'أ.د سالم سليمان محمد', 'Dr. Salem Suleiman Moham', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '  معاون كلية العلوم الادارية', NULL, NULL, NULL, NULL, ' Dean of the Faculty of Administrative Sciences', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4, NULL, NULL, NULL, 'images/profs.jpg'),
(7, 'ا.م.د علي غني عباس', 'A.M.D. Ali Ghani Abbas', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'معاون كلية القانون', NULL, NULL, NULL, NULL, 'Dean of the Faculty of Law', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, 'images/profs.jpg'),
(8, 'ا.م.د سنان صبحي فرحان', 'A.M.D. Sinan Sobhi Farha', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'معاون كلية تقنيات والعلوم ال', NULL, NULL, NULL, NULL, 'Dean of the Faculty of Medical Technologies and Sciences', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL, NULL, 'images/profs.jpg'),
(9, 'ا.د رجاء هادي عباس', 'Dr. Raja Hadi Abbas', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'معاون كلية طب الاسنان', NULL, NULL, NULL, NULL, ' Dean of the Faculty of Dentistry', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 38, NULL, NULL, NULL, 'images/profs.jpg'),
(10, 'ا.د ليث حمزة سمين ', 'Dr. Laith Hamza Fatin ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ' معاون كلية الصيدلة', NULL, NULL, NULL, NULL, ' Dean of the Faculty of Pharmacy', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, NULL, NULL, 'images/profs.jpg'),
(11, 'أ.د سالم سليمان محمد', 'Dr. Salem Suleiman Moham', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '  مقرر  كلية العلوم الادارية', NULL, NULL, NULL, NULL, ' Dean of the Faculty of Administrative Sciences', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4, NULL, NULL, NULL, 'images/profs.jpg'),
(12, 'ا.م.د علي غني عباس', 'A.M.D. Ali Ghani Abbas', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'مقرر كلية القانون', NULL, NULL, NULL, NULL, 'Dean of the Faculty of Law', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, 'images/profs.jpg'),
(13, 'ا.م.د سنان صبحي فرحان', 'A.M.D. Sinan Sobhi Farha', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'مقرر كلية تقنيات والعلوم الط', NULL, NULL, NULL, NULL, 'Dean of the Faculty of Medical Technologies and Sciences', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL, NULL, 'images/profs.jpg'),
(14, 'ا.د رجاء هادي عباس', 'Dr. Raja Hadi Abbas', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'مقرر كلية طب الاسنان', NULL, NULL, NULL, NULL, ' Dean of the Faculty of Dentistry', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 38, NULL, NULL, NULL, 'images/profs.jpg'),
(15, 'ا.د ليث حمزة سمين ', 'Dr. Laith Hamza Fatin ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ' مقرر كلية الصيدلة', NULL, NULL, NULL, NULL, ' Dean of the Faculty of Pharmacy', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, NULL, NULL, 'images/profs.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `lecture`
--

CREATE TABLE `lecture` (
  `id` int(11) NOT NULL,
  `table` text DEFAULT NULL,
  `day` varchar(255) DEFAULT NULL,
  `id_facutly` int(11) NOT NULL,
  `id_department` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lecture`
--

INSERT INTO `lecture` (`id`, `table`, `day`, `id_facutly`, `id_department`) VALUES
(3, ' <table class=\"table\">\n       <thead class=\"thead-dark\">\n        <tr>\n         <th scope=\"col\">dssd</th>\n         <th scope=\"col\">dssd</th>\n\n         <th scope=\"col\">dssd</th>\n         <th scope=\"col\">dssd</th>\n         <th scope=\"col\">dssd</th>\n         <th scope=\"col\">dssd</th>\n\n        </tr>\n       </thead>\n       <tbody>\n        <tr>\n         <th scope=\"row\">1</th>\n         <td>Mark</td>\n         <td>Otto</td>\n         <td>@mdo</td>\n        </tr>\n        <tr>\n         <th scope=\"row\">2</th>\n         <td>Jacob</td>\n         <td>Thornton</td>\n         <td>@fat</td>\n        </tr>\n        <tr>\n         <th scope=\"row\">3</th>\n         <td>Larry</td>\n         <td>the Bird</td>\n         <td>@twitter</td>\n        </tr>\n       </tbody>\n      </table>', 'السبت', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `machine`
--

CREATE TABLE `machine` (
  `id` int(11) NOT NULL,
  `details_ar` text DEFAULT NULL,
  `details_en` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `machine`
--

INSERT INTO `machine` (`id`, `details_ar`, `details_en`) VALUES
(1, 'انشاء حساب شخصي ، حيث ستقوم باختيار اسم مستخدم و كلمة ومرور و تثبت رقم هاتفك الشخصي.', 'Create a personal account, where you will choose a username, word and pass and prove your personal phone number.'),
(2, 'بعد انشائك للحساب الشخصي ستقوم بتفعيل الخدمات الساندة ضمن الحساب و كما موضح في التعليمات سيرشدك النظام بعد ذلك الى مرحلة ملء البيانات الطلابية حيث ستختار الحالة التي تنطبق عليك ضمن سبعة حالات معدة مسبقا ضمن النظام.', 'After you create your personal account, you will activate the support services within the account and as described in the instructions the system will then guide you to the student data filling stage where you will choose the status that applies to you in seven pre-prepared cases within the system.'),
(3, 'في حالة احتياجك لعملية التدقيق فسيقوم النظام تلقائيا بتحويلك الى نافذة حجز موعد الكتروني في احد مراكز التدقيق في الجامعات والكليات الاهلية.', 'If you need the audit, the system will automatically transfer you to an electronic appointment booking window at an audit center at universities and community colleges.'),
(4, 'بعد زيارتك لمركز التدقيق ضمن الموعد المثبت لك سيتم مطابقة صحة بياناتك والمصادقة عليها.', 'After you visit the audit center within the fixed date, your data will be matched and authenticated.'),
(5, 'في هذه المرحلة سيعرض لك النظام لوحة تحكم الطالب حيث سيصبح بامكانك تفعيل القنوات الخاصة في حالة استيفائك لشروطها (موضحة في دليل الطالب بالتفصيل) علما ان القناة العامة للتقديم في الكليات الاهلية مفعلة لجميع الطلبة.', 'At this stage, the system will show you a student control panel where you will be able to activate private channels if you meet their conditions (explained in the student manual in detail) knowing that the public channel for applying in civil colleges is activated for all students.'),
(6, 'بامكانك في هذه المرحلة البدء بعملية التقديم الالكتروني على الاقسام و الكليات الاهلية الموجودة في النظام من خلال استمارات التقديم الالكترونية.', 'At this stage, you can start the process of electronic application to the departments and civil colleges in the system through electronic application forms.'),
(7, 'ستظهر الاستمارات التي قدمتها ضمن صفحة المعاينة لمعرفة تسلسلك من حيث كونك مرشح اصيل او مرشح احتياط ضمن الطلبة المتقدمين', 'The forms you submitted will appear on the preview page to see your sequence in terms of being an original candidate or a reserve candidate among the applicants.'),
(8, 'تبدا فترة التسجيل بعد انتهاء فترة التقديم حيث يتم تسجيل الطالب بصورة نهائية في القسم الذي ظهر قبوله فيه.', 'The registration period begins after the end of the application period, where the student is permanently registered in the section in which his admission appeared.');

-- --------------------------------------------------------

--
-- Table structure for table `magazin`
--

CREATE TABLE `magazin` (
  `id` int(11) NOT NULL,
  `tablecode` text DEFAULT NULL,
  `details_en` text DEFAULT NULL,
  `details_ar` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `magazin`
--

INSERT INTO `magazin` (`id`, `tablecode`, `details_en`, `details_ar`) VALUES
(2, '    <table class=\"table\">\r\n                    <thead>\r\n                        <tr>\r\n                            <th scope=\"col\">#</th>\r\n                            <th scope=\"col\">First</th>\r\n                            <th scope=\"col\">Last</th>\r\n                            <th scope=\"col\">Handle</th>\r\n                        </tr>\r\n                    </thead>\r\n                    <tbody>\r\n                        <tr>\r\n                            <th scope=\"row\">1</th>\r\n                            <td>Mark</td>\r\n                            <td>Otto</td>\r\n                            <td>@mdo</td>\r\n                        </tr>\r\n                        <tr>\r\n                            <th scope=\"row\">2</th>\r\n                            <td>Jacob</td>\r\n                            <td>Thornton</td>\r\n                            <td>@fat</td>\r\n                        </tr>\r\n                        <tr>\r\n                            <th scope=\"row\">3</th>\r\n                            <td>Larry</td>\r\n                            <td>the Bird</td>\r\n                            <td>@twitter</td>\r\n                        </tr>\r\n                    </tbody>\r\n                </table>', '\r\nSince its inception, the University has developed plans to ensure the service of the scientific and educational process in Iraq and constructive interaction with the labor market.\r\n    Organizations\r\n    Civil society and through a precise and correct vision of the data of the Iraqi reality based on its vision and mission, thus achieving important results\r\n    From her\r\n    Study of students in the university formations in the first and higher studies of its engineering, medical, administrative and arts programs\r\n    Applied,\r\n    And the development of scientific sections in accordance with the requirements of the scientific plan and the need of the labor market.\r\n    And from God, success', '\r\n    وضعت الجامعة منذ تأسيسها الخطط التي تضمن خدمة المسيرة العلمية والتربوية في العراق والتفاعل البناء مع سوق العمل\r\n    ومنظمات\r\n    المجتمع المدني ومن خلال رؤيا دقيقة وصحيحة لمعطيات الواقع العراقي معتمدة على رؤيتها ورسالتها محققة بذلك نتائج مهمة\r\n    منها\r\n    دراسة الطلبة في تشكيلات الجامعة في الدراستين الاولية و العليا لبرامجها الهندسية والطبية والإدارية والفنون\r\n    التطبيقية،\r\n    واستحداث الاقسام العلمية وفقا لمتطلبات الخطة العلمية و حاجة سوق العمل .\r\n    ومن الله التوفيق');

-- --------------------------------------------------------

--
-- Table structure for table `mash`
--

CREATE TABLE `mash` (
  `id` int(11) NOT NULL,
  `image` text DEFAULT NULL,
  `image1` text DEFAULT NULL,
  `image2` text DEFAULT NULL,
  `abstract_title_ar` text DEFAULT NULL,
  `abstract_small_ar` varchar(255) DEFAULT NULL,
  `abstract_details_ar` text DEFAULT NULL,
  `option1_title_ar` text DEFAULT NULL,
  `option2_title_ar` text DEFAULT NULL,
  `option3_title_ar` text DEFAULT NULL,
  `option4_title_ar` text DEFAULT NULL,
  `option1_details_ar` text DEFAULT NULL,
  `option2_details_ar` text DEFAULT NULL,
  `option3_details_ar` text DEFAULT NULL,
  `option4_details_ar` text DEFAULT NULL,
  `option5_title_ar` text DEFAULT NULL,
  `option5_details_ar` text DEFAULT NULL,
  `details_image1_ar` text DEFAULT NULL,
  `details_image2_ar` text DEFAULT NULL,
  `title_image1_ar` text DEFAULT NULL,
  `title_image2_ar` text DEFAULT NULL,
  `title_image_ar` text DEFAULT NULL,
  `vision_ar` text DEFAULT NULL,
  `abstract_title_en` text DEFAULT NULL,
  `abstract_details_en` text DEFAULT NULL,
  `option1_title_en` text DEFAULT NULL,
  `option2_title_en` text DEFAULT NULL,
  `option3_title_en` text DEFAULT NULL,
  `option4_title_en` text DEFAULT NULL,
  `option1_details_en` text DEFAULT NULL,
  `option2_details_en` text DEFAULT NULL,
  `option3_details_en` text DEFAULT NULL,
  `option4_details_en` text DEFAULT NULL,
  `option5_title_en` text DEFAULT NULL,
  `option5_details_en` text DEFAULT NULL,
  `details_image1_en` text DEFAULT NULL,
  `details_image2_en` text DEFAULT NULL,
  `title_image1_en` text DEFAULT NULL,
  `title_image2_en` text DEFAULT NULL,
  `title_image_en` text DEFAULT NULL,
  `vision_en` text DEFAULT NULL,
  `abstract_small_en` varchar(255) DEFAULT NULL,
  `small_image2_ar` varchar(255) DEFAULT NULL,
  `small_image1_ar` varchar(255) DEFAULT NULL,
  `link_image2_ar` varchar(255) NOT NULL,
  `link_image1_ar` varchar(255) NOT NULL,
  `small_image2_en` varchar(255) NOT NULL,
  `small_image1_en` varchar(255) NOT NULL,
  `about_ar` text NOT NULL,
  `about_en` text NOT NULL,
  `strategy_en` text NOT NULL,
  `strategy_ar` text NOT NULL,
  `fees_ar` text NOT NULL,
  `fees_en` text NOT NULL,
  `tablecode` text NOT NULL,
  `word_ar` text DEFAULT NULL,
  `word_En` text DEFAULT NULL,
  `room` int(11) NOT NULL,
  `students` int(11) NOT NULL,
  `leaderimage` text NOT NULL,
  `pdf` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mash`
--

INSERT INTO `mash` (`id`, `image`, `image1`, `image2`, `abstract_title_ar`, `abstract_small_ar`, `abstract_details_ar`, `option1_title_ar`, `option2_title_ar`, `option3_title_ar`, `option4_title_ar`, `option1_details_ar`, `option2_details_ar`, `option3_details_ar`, `option4_details_ar`, `option5_title_ar`, `option5_details_ar`, `details_image1_ar`, `details_image2_ar`, `title_image1_ar`, `title_image2_ar`, `title_image_ar`, `vision_ar`, `abstract_title_en`, `abstract_details_en`, `option1_title_en`, `option2_title_en`, `option3_title_en`, `option4_title_en`, `option1_details_en`, `option2_details_en`, `option3_details_en`, `option4_details_en`, `option5_title_en`, `option5_details_en`, `details_image1_en`, `details_image2_en`, `title_image1_en`, `title_image2_en`, `title_image_en`, `vision_en`, `abstract_small_en`, `small_image2_ar`, `small_image1_ar`, `link_image2_ar`, `link_image1_ar`, `small_image2_en`, `small_image1_en`, `about_ar`, `about_en`, `strategy_en`, `strategy_ar`, `fees_ar`, `fees_en`, `tablecode`, `word_ar`, `word_En`, `room`, `students`, `leaderimage`, `pdf`) VALUES
(1, 'images/imgs/header.png', 'images/20220224114935.jpg', 'images/imgs/header.png', 'المشرق', 'نص مصغر', 'من افضل الجامعات في العراق جامعه المشرق من افضل الجامعات', 'كلية طب الاسنان', 'Option', 'Option', 'Another Option', '\r\n         تسعى الكلية طب الاسنان ان تحتل المراكز والمواقع المتميزة على الصعيد العلمي والعملي من خلال تفوقها في تقديم\r\n      الخدمات\r\n      الطبية والاستشارية والعلمية والبحثية للمجتمع ومواكبة لتطورات العلمية والتقنية والبحثية في العالم في مجال طب\r\n      الاسنان على\r\n      المستوى العالمي\r\n     </p>\r\n     <p>الريادة والتميز في جودة التعليم والبحث العلمي في طب الأسنان بما يخدم المجتمع. وتتمثل رؤيتنا في التميز في نشر\r\n      الثقافة\r\n      والبحث العلمي والخدمة في مجال طب الأسنان، من خلال تحسين صحة وعافية مجتمعاتنا، وتقديم رعاية مثالية لمرضانا، وتعزيز\r\n      المعرفة للقيام بذلك.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard', 'Another Option', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard', 'تعد جامعة المشرق صرح علمي متطور تتمتع باحدث الطرق العلمية الحديثة والعملية لتمكن الطالب من اكتساب المعلومات الكافية للانخراط في سوق العمل حيث ان الجامعة هدفها الارتقاء بمستوى الطالب والجامعة الى افضل المراتب', 'رؤية الجامعة هي التركيز في القيم الجوهرية، والأغراض الجوهرية. إذ تتمثل القيم الجوهرية بجودة تعليمية عالية في المجالات المعرفية للجامعة مزودة بالإلهام، والإبداع، والمسؤولية، الاجتماعية على الصعيد الوطني والعالمي', 'المشرق اكثر من مجرد جامعة', 'رؤية الجامعة', NULL, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis in praesentium deserunt laborum delectus iure libero? Officia ducimus eum ea beatae iusto quo ut repudiandae nulla, soluta voluptates qui perspiciatis dolores rerum nostrum libero tempora deserunt recusandae odit vitae. Ea?', 'AlMashriq', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, illo laboriosam? Recusandae itaque voluptate', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galle', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galle', 'Almashriq Is Not Just Education', 'Almashriq Is Not Just Education', NULL, NULL, 'small', 'جدا نص صغير', 'نص صغير', 'download.pdf', 'download.pdf', 'small text 2', 'small text', 'مؤسسة أكاديمية اهلية ذات نفع عام. تأسست في بغداد تتألف الجامعة من خمس كليات ( طب الاسنان, الصيدلة.تقنيات العلوم الطبية . القانون . العلوم الادارية ) تسعى جامعة المشرق الى الإفادة من احدث المناهج التعليمية والتكنولوجية الحديثة وطرق التدريس الفاعلة والمختبرات المؤهلة بإحدث التقنيات وتوفير بيئة جامعية متكاملة من حيث البنى التحتية والحدائق والملاعب من اجل تقديم الأفضل لطلبتنا الأعزاء . تتواصل الجامعة بشكل دائم مع المجتمع ايماناً منها بان الهدف الاسمى للجامعة هو خدمة المجتمع من خلال خريجيها المميزيين والقيام بالبحوث العلمية الرصينة التي تعالج مشاكل مجتمعنا العراقي وتعد كلية الطب في جامعتنا الأولى والرائدة على مستوى الجامعات الاهلية , تسعى الجامعة الى تهيئة الأفضل من الأساتذة التدريسيين والى تطوير هذه الكفاءات من خلال التعامل مع بعض الجامعات العالمية الرصينة', 'A private academic institution of public benefit. Founded in Baghdad, the university scattered from five colleges (Dentistry, Pharmacy, Medical Science Techniques) and Law. To provide the best for our students. The university communicates permanently with the community, believing that the ultimate goal of the university is to serve the community through its distinguished graduates and solid scientific research that addresses the problems of our Iraqi society. While dealing with some reputable international universities', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galle  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galle', 'Lorem Ipsum هو ببساطة نص وهمي لصناعة الطباعة والتنضيد. كان Lorem Ipsum النص الوهمي القياسي في هذه الصناعة منذ القرن التاسع عشر ، عندما أخذت طابعة غير معروفة جاليLorem Ipsum هو ببساطة نص وهمي الالا لصناعة الطباعة والتنضيد. كان Lorem Ipsum النص الوهمي القياسي في هذه الصناعة منذ القرن التاسع عشر ، عندما أخذت طابعة غير معروفة جالي', '<table class=\"table\">                 <thead class=\"thead-dark text-center\">                     <tr>                         <th scope=\"col\"> الكلية / القسم </th>                         <th scope=\"col\">معدل القبول الصباحي </th>                         <th scope=\"col\">معدل القبول المسائي</th>                         <th scope=\"col\">القسط الدراسي</th>                      </tr>                 </thead>                 <tbody style=\"font-weight: bold;\" class=\"text-center\">                     <tr>                         <td>طب الاسنان</td>                         <td>80</td>                         <td>لا يوجد</td>                         <td>8.950.000</td>                      </tr>                     <tr>                         <td> الصيدلة</td>                         <td>80</td>                         <td>لا يوجد</td>                         <td>7.950.000</td>                     </tr>                     <tr>                         <td>تقنيات التخدير</td>                         <td>69.5 </td>                         <td>64.5</td>                         <td>3.950.000</td>                      </tr>                     <tr>                         <td>تقنيات التحليلات</td>                         <td>69.5 </td>                         <td>64.5</td>                         <td>3.450.000</td>                     </tr>                     <tr>                         <td>الفيزياء الطبية</td>                         <td>56.5 </td>                         <td>54.5</td>                         <td>3.750.000</td>                     </tr>                     <tr>                         <td> القانون</td>                         <td>56.5 </td>                         <td>54.5</td>                         <td>2.000.000</td>                     </tr>                     <tr>                         <td> ادارة الاعمال</td>                         <td>50 </td>                         <td>50</td>                         <td>2.000.000</td>                     </tr>                     <tr>                         <td> علوم المالية و المصرفية </td>                         <td>50 </td>                         <td>50</td>                         <td>2.000.000</td>                     </tr>                 </tbody>             </table>', '<table class=\"table\">        <thead class=\"thead-dark\">         <tr>          <th scope=\"col\">dssd</th>          <th scope=\"col\">dssd</th>           <th scope=\"col\">dssd</th>          <th scope=\"col\">dssd</th>          <th scope=\"col\">dssd</th>          <th scope=\"col\">dssd</th>          </tr>        </thead>        <tbody>         <tr>          <th scope=\"row\">1</th>          <td>Mark</td>          <td>Otto</td>          <td>@mdo</td>         </tr>         <tr>          <th scope=\"row\">2</th>          <td>Jacob</td>          <td>Thornton</td>          <td>@fat</td>         </tr>         <tr>          <th scope=\"row\">3</th>          <td>Larry</td>          <td>the Bird</td>          <td>@twitter</td>         </tr>        </tbody>       </table>', '', 'Quisquam velut sint cum eos hic dolores aperiam. Sed deserunt et. اخترع وآخرون ما يترتب على ذلك من حواجز شفطية وآخرون. Magnam nam ipsu m tenetur suscipit voluptatum nam et est corrupti.Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi quo، accusantium quas nulla dolorum aspernatur voluptates ea mollitia dolor earum reiciendis minima suscipit ratione placeat iure المفترض tempore perferendis؟ Earum blanditiis ، تمرين عدم التمكن من ممارسة التمارين الرياضية! Incidunt corrupti، ea recusandae non sapiente delectus. Culpa iusto totam افتراضات مؤقتة لممارسة الرياضة! الحد الأدنى المقدر للهوية 7Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi quo، accusantium quas nulla dolorum aspernatur voluptates ea mollitia dolor earum reiciendis minima suscipit ratione placeat iure المفترض tempore perferendis؟ Earum blanditiis ، تمرين عدم التمكن من ممارسة التمارين الرياضية! Incidunt corrupti، ea recusandae non sapiente delectus. Culpa iusto totam افتراضات مؤقتة لممارسة الرياضة! الحد الأدنى المعجل للمؤسسةLorem ipsum dolor sit amet consectetur adipisicing elit. Modi quo، accusantium quas nulla dolorum aspernatur voluptates ea mollitia dolor earum reiciendis minima suscipit ratione placeat iure المفترض tempore perferendis؟ Earum blanditiis ، تمرين عدم التمكن من ممارسة التمارين الرياضية! Incidunt corrupti، ea recusandae non sapiente delectus. Culpa iusto totam افتراضات مؤقتة لممارسة الرياضة! الحد الأدنى المعجل للمؤسسة', 'Quisquam vel ut sint cum eos hic dolores aperiam. Sed deserunt et. Inventore et et dolor consequatur itaque ut voluptate sed et. Magnam nam ipsu m tenetur suscipit voluptatum nam et est corrupti.Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi quo, accusantium quas nulla dolorum aspernatur voluptates ea mollitia dolor earum reiciendis minima suscipit ratione placeat iure assumenda tempore perferendis? Earum blanditiis, illum reprehenderit aperiam laudantium dolore odio maxime exercitationem nulla! Incidunt corrupti, ea recusandae non sapiente delectus. Culpa iusto totam assumenda tempore nostrum quis exercitationem! Minima expedita quaerat id est.7Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi quo, accusantium quas nulla dolorum aspernatur voluptates ea mollitia dolor earum reiciendis minima suscipit ratione placeat iure assumenda tempore perferendis? Earum blanditiis, illum reprehenderit aperiam laudantium dolore odio maxime exercitationem nulla! Incidunt corrupti, ea recusandae non sapiente delectus. Culpa iusto totam assumenda tempore nostrum quis exercitationem! Minima expedita quaerat id est.Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi quo, accusantium quas nulla dolorum aspernatur voluptates ea mollitia dolor earum reiciendis minima suscipit ratione placeat iure assumenda tempore perferendis? Earum blanditiis, illum reprehenderit aperiam laudantium dolore odio maxime exercitationem nulla! Incidunt corrupti, ea recusandae non sapiente delectus. Culpa iusto totam assumenda tempore nostrum quis exercitationem! Minima expedita quaerat id est.Quisquam vel ut sint cum eos hic dolores aperiam. Sed deserunt et. Inventore et et dolor consequatur itaque ut voluptate sed et. Magnam nam ipsu m tenetur suscipit voluptatum nam et est corrupti.Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi quo, accusantium quas nulla dolorum aspernatur voluptates ea mollitia dolor earum reiciendis minima suscipit ratione placeat iure assumenda tempore perferendis? Earum blanditiis, illum reprehenderit aperiam laudantium dolore odio maxime exercitationem nulla! Incidunt corrupti, ea recusandae non sapiente delectus. Culpa iusto totam assumenda tempore nostrum quis exercitationem! Minima expedita quaerat id est.7Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi quo, accusantium quas nulla dolorum aspernatur voluptates ea mollitia dolor earum reiciendis minima suscipit ratione placeat iure assumenda tempore perferendis? Earum blanditiis, illum reprehenderit aperiam laudantium dolore odio maxime exercitationem nulla! Incidunt corrupti, ea recusandae non sapiente delectus. Culpa iusto totam assumenda tempore nostrum quis exercitationem! Minima expedita quaerat id est.Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi quo, accusantium quas nulla dolorum aspernatur voluptates ea mollitia dolor earum reiciendis minima suscipit ratione placeat iure assumenda tempore perferendis? Earum blanditiis, illum reprehenderit aperiam laudantium dolore odio maxime exercitationem nulla! Incidunt corrupti, ea recusandae non sapiente delectus. Culpa iusto totam assumenda tempore nostrum quis exercitationem! Minima expedita quaerat id est.', 144, 4000, 'images/20220224121732.jpg', 'file/20220224121600.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `paper`
--

CREATE TABLE `paper` (
  `id` int(11) NOT NULL,
  `name_ar` varchar(255) DEFAULT NULL,
  `name_en` varchar(255) DEFAULT NULL,
  `tablecode` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `paper`
--

INSERT INTO `paper` (`id`, `name_ar`, `name_en`, `tablecode`) VALUES
(1, 'تقرير الخطة العلمية', 'Scientific Plan Report', ' <table class=\"table\">\r\n     <thead>\r\n      <tr>\r\n       <th scope=\"col\">#</th>\r\n       <th scope=\"col\">First</th>\r\n       <th scope=\"col\">Last</th>\r\n       <th scope=\"col\">Handle</th>\r\n      </tr>\r\n     </thead>\r\n     <tbody>\r\n      <tr>\r\n       <th scope=\"row\">1</th>\r\n       <td>Mark</td>\r\n       <td>Otto</td>\r\n       <td>@mdo</td>\r\n      </tr>\r\n      <tr>\r\n       <th scope=\"row\">2</th>\r\n       <td>Jacob</td>\r\n       <td>Thornton</td>\r\n       <td>@fat</td>\r\n      </tr>\r\n      <tr>\r\n       <th scope=\"row\">3</th>\r\n       <td>Larry</td>\r\n       <td>the Bird</td>\r\n       <td>@twitter</td>\r\n      </tr>\r\n     </tbody>\r\n    </table>'),
(2, 'خطة ورش العمل', 'Workshop plan', ' <table class=\"table\">\r\n     <thead>\r\n      <tr>\r\n       <th scope=\"col\">#</th>\r\n       <th scope=\"col\">First</th>\r\n       <th scope=\"col\">Last</th>\r\n       <th scope=\"col\">Handle</th>\r\n      </tr>\r\n     </thead>\r\n     <tbody>\r\n      <tr>\r\n       <th scope=\"row\">1</th>\r\n       <td>Mark</td>\r\n       <td>Otto</td>\r\n       <td>@mdo</td>\r\n      </tr>\r\n      <tr>\r\n       <th scope=\"row\">2</th>\r\n       <td>Jacob</td>\r\n       <td>Thornton</td>\r\n       <td>@fat</td>\r\n      </tr>\r\n      <tr>\r\n       <th scope=\"row\">3</th>\r\n       <td>Larry</td>\r\n       <td>the Bird</td>\r\n       <td>@twitter</td>\r\n      </tr>\r\n     </tbody>\r\n    </table>'),
(3, 'خطة المؤتمرات', 'Conference Plan', ' <table class=\"table\">\r\n     <thead>\r\n      <tr>\r\n       <th scope=\"col\">#</th>\r\n       <th scope=\"col\">First</th>\r\n       <th scope=\"col\">Last</th>\r\n       <th scope=\"col\">Handle</th>\r\n      </tr>\r\n     </thead>\r\n     <tbody>\r\n      <tr>\r\n       <th scope=\"row\">1</th>\r\n       <td>Mark</td>\r\n       <td>Otto</td>\r\n       <td>@mdo</td>\r\n      </tr>\r\n      <tr>\r\n       <th scope=\"row\">2</th>\r\n       <td>Jacob</td>\r\n       <td>Thornton</td>\r\n       <td>@fat</td>\r\n      </tr>\r\n      <tr>\r\n       <th scope=\"row\">3</th>\r\n       <td>Larry</td>\r\n       <td>the Bird</td>\r\n       <td>@twitter</td>\r\n      </tr>\r\n     </tbody>\r\n    </table>'),
(4, 'خطة الندوات', 'Seminar plan', ' <table class=\"table\">\r\n     <thead>\r\n      <tr>\r\n       <th scope=\"col\">#</th>\r\n       <th scope=\"col\">First</th>\r\n       <th scope=\"col\">Last</th>\r\n       <th scope=\"col\">Handle</th>\r\n      </tr>\r\n     </thead>\r\n     <tbody>\r\n      <tr>\r\n       <th scope=\"row\">1</th>\r\n       <td>Mark</td>\r\n       <td>Otto</td>\r\n       <td>@mdo</td>\r\n      </tr>\r\n      <tr>\r\n       <th scope=\"row\">2</th>\r\n       <td>Jacob</td>\r\n       <td>Thornton</td>\r\n       <td>@fat</td>\r\n      </tr>\r\n      <tr>\r\n       <th scope=\"row\">3</th>\r\n       <td>Larry</td>\r\n       <td>the Bird</td>\r\n       <td>@twitter</td>\r\n      </tr>\r\n     </tbody>\r\n    </table>');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pdf`
--

CREATE TABLE `pdf` (
  `id` int(11) NOT NULL,
  `name_ar` text DEFAULT NULL,
  `name_en` text DEFAULT NULL,
  `pdf` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `requirement`
--

CREATE TABLE `requirement` (
  `id` int(11) NOT NULL,
  `require` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `requirement`
--

INSERT INTO `requirement` (`id`, `require`) VALUES
(1, '\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Eaque quod maxime tenetur dignissimos hic iste perspiciatis non harum, quae id'),
(2, '\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Eaque quod maxime tenetur dignissimos hic iste perspiciatis non harum, quae id'),
(3, '\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Eaque quod maxime tenetur dignissimos hic iste perspiciatis non harum, quae id'),
(4, '\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Eaque quod maxime tenetur dignissimos hic iste perspiciatis non harum, quae id');

-- --------------------------------------------------------

--
-- Table structure for table `socialmedia`
--

CREATE TABLE `socialmedia` (
  `id` int(11) NOT NULL,
  `name_ar` varchar(255) DEFAULT NULL,
  `name_en` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `id_doctor` int(11) DEFAULT NULL,
  `id_type` int(11) DEFAULT NULL,
  `id_leader` int(11) DEFAULT NULL,
  `id_leaderuni` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `socialmedia`
--

INSERT INTO `socialmedia` (`id`, `name_ar`, `name_en`, `link`, `id_doctor`, `id_type`, `id_leader`, `id_leaderuni`) VALUES
(3, 'scolor', 'fax', 'https://www.facebook.com/', 3, 4, 1, 1),
(4, 'R', 'R', 'https://www.facebook.com/', 1, 1, 2, 2),
(5, 'name', 'name', 'https://www.facebook.com/', 1, 1, 3, 3),
(6, 'jabhx', 'sbxhb', 'https://www.facebook.com/', 1, 2, 1, 2),
(7, 'name', 'name', 'https://www.facebook.com/', 1, 1, 3, 4),
(8, 'name', 'name', 'https://www.facebook.com/', 1, 3, 2, 3),
(9, 'name', 'name', 'https://www.facebook.com/', NULL, NULL, NULL, NULL),
(11, 'name', 'name', 'https://www.facebook.com/', NULL, NULL, NULL, 1),
(14, 'name', 'name', 'https://www.facebook.com/', 646, NULL, NULL, NULL),
(15, 'name', 'name', 'https://www.facebook.com/', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `strategy`
--

CREATE TABLE `strategy` (
  `id` int(11) NOT NULL,
  `strategy_ar` text DEFAULT NULL,
  `strategy_en` text DEFAULT NULL,
  `pdf` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `studentfirst`
--

CREATE TABLE `studentfirst` (
  `id` int(11) NOT NULL,
  `name_ar` varchar(255) DEFAULT NULL,
  `name_en` varchar(255) DEFAULT NULL,
  `level_ar` varchar(255) DEFAULT NULL,
  `level_en` varchar(255) DEFAULT NULL,
  `grade_ar` varchar(255) DEFAULT NULL,
  `grade_en` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `id_facutly` int(11) DEFAULT NULL,
  `id_department` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentfirst`
--

INSERT INTO `studentfirst` (`id`, `name_ar`, `name_en`, `level_ar`, `level_en`, `grade_ar`, `grade_en`, `image`, `id_facutly`, `id_department`) VALUES
(1, 'نهال', 'nehal', 'الثالث', 'third', 'الثالث', 'الثاللث', 'images/20220125060401.jfif', 3, NULL),
(2, 'امال', 'amal', 'الثاني', 'second', 'الثاني', 'second', 'images/20220125060401.jfif', 3, NULL),
(3, 'نهال', 'nehal', 'الاول', 'first', 'الاول', 'first', 'images/20220125060401.jfif', 3, NULL),
(7, 'نهال', 'nehal', 'الاول', 'first', 'الاول', 'first', 'images/20220125060401.jfif', 1, NULL),
(8, 'امال', 'amal', 'الثاني', 'second', 'الثاني', 'second', 'images/20220125060401.jfif', 1, NULL),
(9, 'نهال', 'nehal', 'الاول', 'third', 'الثالث', 'third', 'images/20220125060401.jfif', 2, NULL),
(10, 'امال', 'amal', 'الثاني', 'second', 'الثاني', 'second', 'images/20220125060401.jfif', 2, NULL),
(11, 'نهال', 'nehal', 'الاول', 'first', 'الاول', 'first', 'images/20220125060401.jfif', 1, NULL),
(12, 'امال', 'amal', 'الثالث', 'third', 'الثالث', 'third', 'images/20220125060401.jfif', 2, NULL),
(15, 'aliaaa', 'aliaaaaa', 'الاول', 'الثاني', '1', '1', 'images/20220218194742.jfif', 38, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(11) NOT NULL,
  `name_ar` varchar(255) DEFAULT NULL,
  `name_en` varchar(255) DEFAULT NULL,
  `level_ar` varchar(255) DEFAULT NULL,
  `level_en` varchar(255) DEFAULT NULL,
  `pdf` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `code` text DEFAULT NULL,
  `id_facutly` int(11) DEFAULT NULL,
  `id_department` int(11) DEFAULT NULL,
  `id_doctor` int(11) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `name_ar`, `name_en`, `level_ar`, `level_en`, `pdf`, `link`, `code`, `id_facutly`, `id_department`, `id_doctor`, `type`) VALUES
(1, 'نهال', 'nehal', 'Second', 'الثانيببب', 'images/20220216231725.pdf', NULL, 'ww4436', 1, 1, NULL, 'private'),
(3, 'nehal', NULL, 'الاول', 'second', NULL, '1', 'ww4436', 2, 5, 1, 'public'),
(4, 'nehal', NULL, 'الاول', 'second', NULL, '1', 'ww4436', 4, 1, NULL, 'public'),
(5, 'nehal', NULL, 'الاول', 'second', NULL, '1', 'ww4436', 3, 5, 1, 'private'),
(6, 'nehal', NULL, 'Second', 'second', 'images/20220217125912.pdf', NULL, 'ww4436', 3, 1, 1, NULL),
(7, 'nehal', 'nehal', 'الاول', 'second', NULL, NULL, 'nehal', 1, 5, 1, 'public');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `id` int(11) NOT NULL,
  `name_ar` varchar(255) DEFAULT NULL,
  `name_en` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`id`, `name_ar`, `name_en`) VALUES
(1, 'R', 'R'),
(2, 'OR', 'OR'),
(3, 'P', 'P'),
(4, 'SCO', 'SCO'),
(5, 'GS', 'GS');

-- --------------------------------------------------------

--
-- Table structure for table `typeachievement`
--

CREATE TABLE `typeachievement` (
  `id` int(11) NOT NULL,
  `name_ar` varchar(255) DEFAULT NULL,
  `name_en` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `typeachievement`
--

INSERT INTO `typeachievement` (`id`, `name_ar`, `name_en`) VALUES
(1, 'شهادة تكريم', 'Certificate of honor'),
(2, 'براءة اختراع', 'Patent'),
(3, 'المؤلفات المنشورة', 'Published literature'),
(4, 'البحوث المنشورة', 'Published research'),
(5, 'التحصيل الدراسي', 'Educational achievement');

-- --------------------------------------------------------

--
-- Table structure for table `university`
--

CREATE TABLE `university` (
  `id` int(11) NOT NULL,
  `about_ar` text DEFAULT NULL,
  `requirement_ar` text DEFAULT NULL,
  `haram_abstract_ar` text DEFAULT NULL,
  `haram_sometext_ar` text DEFAULT NULL,
  `haram_details_ar` text DEFAULT NULL,
  `doctors_details_ar` text DEFAULT NULL,
  `leardercapital_ar` text DEFAULT NULL,
  `patent_details_ar` text DEFAULT NULL,
  `tuitionfeestable_ar` text DEFAULT NULL,
  `vision_ar` text DEFAULT NULL,
  `word_ar` text DEFAULT NULL,
  `image_leaderword` varchar(255) NOT NULL,
  `leardercapital_en` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `university`
--

INSERT INTO `university` (`id`, `about_ar`, `requirement_ar`, `haram_abstract_ar`, `haram_sometext_ar`, `haram_details_ar`, `doctors_details_ar`, `leardercapital_ar`, `patent_details_ar`, `tuitionfeestable_ar`, `vision_ar`, `word_ar`, `image_leaderword`, `leardercapital_en`) VALUES
(1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis in molestias ad. Aut qui dolor possimus eligendi, necessitatibus eum exercitationem esse debitis corporis nostrum sed libero molestiae ratione iste, molestias maxime id, ad ipsam quis quos? Tenetur, iure dolorum amet excepturi quos veniam eveniet delectus, sunt fugit vitae laboriosam autem laborum adipisci maxime hic officiis? Ducimus, quibusdam ea commodi sequi nemo excepturi exercitationem eum tempora sapiente, porro magnam id enim distinctio expedita corrupti modi at officiis ab suscipit? Qui molestias accusantium possimus minima atque vitae similique, cupiditate illum recusandae eius voluptatem sint, magnam mollitia ipsam excepturi unde, magni molestiae ipsa?\r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Vero eum quisquam, sapiente id rem neque mollitia cum quis provident aspernatur facere totam omnis inventore quibusdam delectus quaerat facilis tempora natus?\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Vero eum quisquam, sapiente id rem neque mollitia cum quis provident aspernatur facere totam omnis inventore quibusdam delectus quaerat facilis tempora natus?\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Vero eum quisquam, sapiente id rem neque mollitia cum quis provident aspernatur facere totam omnis inventore quibusdam delectus quaerat facilis tempora natus?', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam est ratione architecto esse nesciunt delectus sunt vel minus quia, eaque necessitatibus cum fugiat totam voluptates unde beatae itaque, tempore tempora!\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam est ratione architecto esse nesciunt delectus sunt vel minus quia, eaque necessitatibus cum fugiat totam voluptates unde beatae itaque, tempore tempora!\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam est ratione architecto esse nesciunt delectus sunt vel minus quia, eaque necessitatibus cum fugiat totam voluptates unde beatae itaque, tempore tempora!', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias similique totam veniam adipisci?', 'Text', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatem architecto cumque eos a tempore velit! Architecto aliquid veniam deleniti ad ut alias animi ex obcaecati enim fuga beatae excepturi, optio dolorum, hic nostrum nisi dicta a eaque expedita quis voluptas vero? Veritatis illum earum totam repellat. Nobis laboriosam ex deleniti ipsam id, maiores dolorum fugit non delectus ipsa magnam? Sunt.', '  <table class=\"table table-striped\">\r\n     <thead>\r\n      <tr>\r\n       <th scope=\"col\">#</th>\r\n       <th scope=\"col\">First</th>\r\n       <th scope=\"col\">Last</th>\r\n       <th scope=\"col\">Handle</th>\r\n      </tr>\r\n     </thead>\r\n     <tbody>\r\n      <tr>\r\n       <th scope=\"row\">1</th>\r\n       <td>Mark</td>\r\n       <td>Otto</td>\r\n       <td>@mdo</td>\r\n      </tr>\r\n      <tr>\r\n       <th scope=\"row\">2</th>\r\n       <td>Jacob</td>\r\n       <td>Thornton</td>\r\n       <td>@fat</td>\r\n      </tr>\r\n      <tr>\r\n       <th scope=\"row\">3</th>\r\n       <td>Larry</td>\r\n       <td>the Bird</td>\r\n       <td>@twitter</td>\r\n      </tr>\r\n     </tbody>\r\n    </table>', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi quo, accusantium quas nulla dolorum aspernatur voluptates ea mollitia dolor earum reiciendis minima suscipit ratione placeat iure assumenda tempore perferendis? Earum blanditiis, illum reprehenderit aperiam laudantium dolore odio maxime exercitationem nulla! Incidunt corrupti, ea recusandae non sapiente delectus. Culpa iusto totam assumenda tempore nostrum quis exercitationem! Minima expedita quaerat id est.', 'Quisquam vel ut sint cum eos hic dolores aperiam. Sed deserunt et. Inventore et et dolor consequatur itaque ut voluptate sed et. Magnam nam ipsu m tenetur suscipit voluptatum nam et est corrupti.', ' <table class=\"table\">\r\n    <thead class=\"thead-dark\">\r\n     <tr>\r\n      <th scope=\"col\">#</th>\r\n      <th scope=\"col\">First</th>\r\n      <th scope=\"col\">Last</th>\r\n      <th scope=\"col\">Handle</th>\r\n     </tr>\r\n    </thead>\r\n    <tbody>\r\n     <tr>\r\n      <th scope=\"row\">1</th>\r\n      <td>Mark</td>\r\n      <td>Otto</td>\r\n      <td>@mdo</td>\r\n     </tr>\r\n     <tr>\r\n      <th scope=\"row\">2</th>\r\n      <td>Jacob</td>\r\n      <td>Thornton</td>\r\n      <td>@fat</td>\r\n     </tr>\r\n     <tr>\r\n      <th scope=\"row\">3</th>\r\n      <td>Larry</td>\r\n      <td>the Bird</td>\r\n      <td>@twitter</td>\r\n     </tr>\r\n    </tbody>\r\n   </table>', 'Quisquam vel ut sint cum eos hic dolores aperiam. Sed deserunt et. Inventore et et dolor consequatur itaque ut voluptate sed et. Magnam nam ipsu m tenetur suscipit voluptatum nam et est corrupti.\r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Modi quo, accusantium quas nulla dolorum aspernatur voluptates ea mollitia dolor earum reiciendis minima suscipit ratione placeat iure assumenda tempore perferendis? Earum blanditiis, illum reprehenderit aperiam laudantium dolore odio maxime exercitationem nulla! Incidunt corrupti, ea recusandae non sapiente delectus. Culpa iusto totam assumenda tempore nostrum quis exercitationem! Minima expedita quaerat id est.\r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Modi quo, accusantium quas nulla dolorum aspernatur voluptates ea mollitia dolor earum reiciendis minima suscipit ratione placeat iure assumenda tempore perferendis? Earum blanditiis, illum reprehenderit aperiam laudantium dolore odio maxime exercitationem nulla! Incidunt corrupti, ea recusandae non sapiente delectus. Culpa iusto totam assumenda tempore nostrum quis exercitationem! Minima expedita quaerat id est.', 'Quisquam vel ut sint cum eos hic dolores aperiam. Sed deserunt et. Inventore et et dolor consequatur itaque ut voluptate sed et. Magnam nam ipsu m tenetur suscipit voluptatum nam et est corrupti.\n\nLorem ipsum dolor sit amet consectetur adipisicing elit. Modi quo, accusantium quas nulla dolorum aspernatur voluptates ea mollitia dolor earum reiciendis minima suscipit ratione placeat iure assumenda tempore perferendis? Earum blanditiis, illum reprehenderit aperiam laudantium dolore odio maxime exercitationem nulla! Incidunt corrupti, ea recusandae non sapiente delectus. Culpa iusto totam assumenda tempore nostrum quis exercitationem! Minima expedita quaerat id est.7\nLorem ipsum dolor sit amet consectetur adipisicing elit. Modi quo, accusantium quas nulla dolorum aspernatur voluptates ea mollitia dolor earum reiciendis minima suscipit ratione placeat iure assumenda tempore perferendis? Earum blanditiis, illum reprehenderit aperiam laudantium dolore odio maxime exercitationem nulla! Incidunt corrupti, ea recusandae non sapiente delectus. Culpa iusto totam assumenda tempore nostrum quis exercitationem! Minima expedita quaerat id est.\n\nLorem ipsum dolor sit amet consectetur adipisicing elit. Modi quo, accusantium quas nulla dolorum aspernatur voluptates ea mollitia dolor earum reiciendis minima suscipit ratione placeat iure assumenda tempore perferendis? Earum blanditiis, illum reprehenderit aperiam laudantium dolore odio maxime exercitationem nulla! Incidunt corrupti, ea recusandae non sapiente delectus. Culpa iusto totam assumenda tempore nostrum quis exercitationem! Minima expedita quaerat id est.\n\n\n\n', 'images/imgs/header.png', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usertype` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_facutly` int(11) DEFAULT NULL,
  `id_doctor` int(11) DEFAULT NULL,
  `pass` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `usertype`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `id_facutly`, `id_doctor`, `pass`) VALUES
(7, 'a', 'admin', 'ali@gmail.com', NULL, '$2y$10$t0umwGyR6Tmz3HEkewwATOtpG.yUjTenveDT4RWmboQFgxk2lh3w6', NULL, '2022-02-14 17:49:50', '2022-02-14 17:49:50', NULL, NULL, '11111111'),
(8, 'ali', 'doctor', 'ali1@gmail.com', NULL, '$2y$10$HMn7DYOXXznnypPtKShNguKlX4mTyx7BxjOFRVh4kqvKxXO3HBprW', NULL, '2022-02-14 18:29:15', '2022-02-14 18:29:15', 3, 1, '11111111'),
(9, 'ali', 'student', 'ali3@gmail.com', NULL, '$2y$10$.FRbNaSGb0fkA00Env5U8Ot6W.eGcfnAvmJ4ZQtA8DQOeMI/dMhFG', NULL, '2022-02-14 18:44:25', '2022-02-14 18:44:25', 3, NULL, '11111111'),
(10, 'ali', 'xteam', 'ali5@gmail.com', NULL, '$2y$10$y1UPZ/c/KLO.OF84z62D1O1OjgUUWT/GrIxQlNBGIiPbRi.a6Q6au', NULL, '2022-02-14 19:08:26', '2022-02-14 19:08:26', NULL, NULL, '11111111'),
(13, 'name', 'facutly', 'ali88@gmail.com', NULL, '$2y$10$YkNjOyJtpYwBpMEWddU2XuSwG96Wt3EfKnco.DivHtK6vM1XcEfEq', NULL, '2022-02-19 05:48:51', '2022-02-19 05:59:09', 1, NULL, '147852'),
(14, 'names', 'facutly', 'ali8s8@gmail.com', NULL, '$2y$10$JohIuJclW3xOK1juo0A6ieyEvAcGBzJmNFrOQO7gvHwdtwESbrFsq', NULL, '2022-02-19 05:53:20', '2022-02-19 05:53:20', 1, NULL, '123456789'),
(16, 'name', 'doctor', 'ali88add@gmail.com', NULL, '$2y$10$dLox/syB2UzZJPZt5gmwI.BQEAliFWX4jTMxlyqb5x9se9OxJ8Dpq', NULL, '2022-02-24 22:21:36', '2022-02-24 22:21:36', NULL, NULL, NULL),
(17, 'nehal11', 'doctor', 'nehal11@gmail.com', NULL, '$2y$10$sOSdVCx5RuxhEIPFHWo3ve.4mHJVjH99u/bZyUgmyV4r8I6Hwi9cW', NULL, '2022-02-24 22:55:19', '2022-02-24 22:55:19', 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id` int(11) NOT NULL,
  `video` text DEFAULT NULL,
  `id_image` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `video`, `id_image`) VALUES
(1, 'images/20220222130452.mp4', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accept`
--
ALTER TABLE `accept`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `achievement`
--
ALTER TABLE `achievement`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_department` (`id_department`),
  ADD KEY `id_facutly` (`id_facutly`),
  ADD KEY `id_doctor` (`id_doctor`),
  ADD KEY `id_type` (`id_type`),
  ADD KEY `id_types` (`id_types`),
  ADD KEY `id_leader` (`id_leader`),
  ADD KEY `id_leaderuni` (`id_leaderuni`);

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_faculty` (`id_faculty`),
  ADD KEY `id_department` (`id_department`),
  ADD KEY `id_doctor` (`id_doctor`);

--
-- Indexes for table `admindepart`
--
ALTER TABLE `admindepart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `agreement`
--
ALTER TABLE `agreement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `center`
--
ALTER TABLE `center`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `compus`
--
ALTER TABLE `compus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_facutly` (`id_facutly`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_facutly` (`id_facutly`),
  ADD KEY `id_department` (`id_department`);

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_faculty` (`id_faculty`),
  ADD KEY `id_department` (`id_department`);

--
-- Indexes for table `examlab`
--
ALTER TABLE `examlab`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_faculty` (`id_faculty`),
  ADD KEY `id_department` (`id_department`);

--
-- Indexes for table `facutly`
--
ALTER TABLE `facutly`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `fees`
--
ALTER TABLE `fees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_image` (`id_image`),
  ADD KEY `id_activity` (`id_activity`),
  ADD KEY `id_achievement` (`id_achievement`),
  ADD KEY `id_lab` (`id_lab`);

--
-- Indexes for table `lab`
--
ALTER TABLE `lab`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_faculty` (`id_faculty`);

--
-- Indexes for table `leader`
--
ALTER TABLE `leader`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_facutly` (`id_facutly`),
  ADD KEY `id_department` (`id_department`);

--
-- Indexes for table `leaderuni`
--
ALTER TABLE `leaderuni`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_facutly` (`id_facutly`),
  ADD KEY `id_department` (`id_department`);

--
-- Indexes for table `lecture`
--
ALTER TABLE `lecture`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_facutly` (`id_facutly`),
  ADD KEY `id_department` (`id_department`);

--
-- Indexes for table `machine`
--
ALTER TABLE `machine`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `magazin`
--
ALTER TABLE `magazin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mash`
--
ALTER TABLE `mash`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paper`
--
ALTER TABLE `paper`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pdf`
--
ALTER TABLE `pdf`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `requirement`
--
ALTER TABLE `requirement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socialmedia`
--
ALTER TABLE `socialmedia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_doctor` (`id_doctor`),
  ADD KEY `id_type` (`id_type`),
  ADD KEY `id_leader` (`id_leader`),
  ADD KEY `id_leader_uni` (`id_leaderuni`);

--
-- Indexes for table `strategy`
--
ALTER TABLE `strategy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentfirst`
--
ALTER TABLE `studentfirst`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_facutly` (`id_facutly`),
  ADD KEY `id_department` (`id_department`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_facutly` (`id_facutly`),
  ADD KEY `id_department` (`id_department`),
  ADD KEY `id_doctor` (`id_doctor`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `typeachievement`
--
ALTER TABLE `typeachievement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `university`
--
ALTER TABLE `university`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `id_facutly` (`id_facutly`),
  ADD KEY `id_doctor` (`id_doctor`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_image` (`id_image`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accept`
--
ALTER TABLE `accept`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `achievement`
--
ALTER TABLE `achievement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `admindepart`
--
ALTER TABLE `admindepart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `agreement`
--
ALTER TABLE `agreement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `center`
--
ALTER TABLE `center`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `compus`
--
ALTER TABLE `compus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=666;

--
-- AUTO_INCREMENT for table `exam`
--
ALTER TABLE `exam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `examlab`
--
ALTER TABLE `examlab`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `facutly`
--
ALTER TABLE `facutly`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fees`
--
ALTER TABLE `fees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `lab`
--
ALTER TABLE `lab`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `leader`
--
ALTER TABLE `leader`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `leaderuni`
--
ALTER TABLE `leaderuni`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `lecture`
--
ALTER TABLE `lecture`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `machine`
--
ALTER TABLE `machine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `magazin`
--
ALTER TABLE `magazin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mash`
--
ALTER TABLE `mash`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `paper`
--
ALTER TABLE `paper`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pdf`
--
ALTER TABLE `pdf`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `requirement`
--
ALTER TABLE `requirement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `socialmedia`
--
ALTER TABLE `socialmedia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `strategy`
--
ALTER TABLE `strategy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `studentfirst`
--
ALTER TABLE `studentfirst`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `typeachievement`
--
ALTER TABLE `typeachievement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `university`
--
ALTER TABLE `university`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `achievement`
--
ALTER TABLE `achievement`
  ADD CONSTRAINT `achievement_ibfk_1` FOREIGN KEY (`id_doctor`) REFERENCES `doctors` (`id`),
  ADD CONSTRAINT `achievement_ibfk_2` FOREIGN KEY (`id_doctor`) REFERENCES `doctors` (`id`),
  ADD CONSTRAINT `achievement_ibfk_3` FOREIGN KEY (`id_department`) REFERENCES `department` (`id`),
  ADD CONSTRAINT `achievement_ibfk_4` FOREIGN KEY (`id_facutly`) REFERENCES `facutly` (`id`),
  ADD CONSTRAINT `achievement_ibfk_5` FOREIGN KEY (`id_doctor`) REFERENCES `doctors` (`id`),
  ADD CONSTRAINT `achievement_ibfk_6` FOREIGN KEY (`id_type`) REFERENCES `achievement` (`id`),
  ADD CONSTRAINT `achievement_ibfk_7` FOREIGN KEY (`id_types`) REFERENCES `typeachievement` (`id`),
  ADD CONSTRAINT `achievement_ibfk_8` FOREIGN KEY (`id_leader`) REFERENCES `leader` (`id`),
  ADD CONSTRAINT `achievement_ibfk_9` FOREIGN KEY (`id_leaderuni`) REFERENCES `leaderuni` (`id`);

--
-- Constraints for table `activities`
--
ALTER TABLE `activities`
  ADD CONSTRAINT `activities_ibfk_1` FOREIGN KEY (`id_faculty`) REFERENCES `facutly` (`id`),
  ADD CONSTRAINT `activities_ibfk_2` FOREIGN KEY (`id_department`) REFERENCES `department` (`id`),
  ADD CONSTRAINT `activities_ibfk_3` FOREIGN KEY (`id_doctor`) REFERENCES `doctors` (`id`);

--
-- Constraints for table `department`
--
ALTER TABLE `department`
  ADD CONSTRAINT `department_ibfk_1` FOREIGN KEY (`id_facutly`) REFERENCES `facutly` (`id`);

--
-- Constraints for table `doctors`
--
ALTER TABLE `doctors`
  ADD CONSTRAINT `doctors_ibfk_1` FOREIGN KEY (`id_facutly`) REFERENCES `facutly` (`id`),
  ADD CONSTRAINT `doctors_ibfk_2` FOREIGN KEY (`id_facutly`) REFERENCES `facutly` (`id`),
  ADD CONSTRAINT `doctors_ibfk_3` FOREIGN KEY (`id_facutly`) REFERENCES `facutly` (`id`),
  ADD CONSTRAINT `doctors_ibfk_4` FOREIGN KEY (`id_department`) REFERENCES `department` (`id`);

--
-- Constraints for table `exam`
--
ALTER TABLE `exam`
  ADD CONSTRAINT `exam_ibfk_1` FOREIGN KEY (`id_faculty`) REFERENCES `facutly` (`id`),
  ADD CONSTRAINT `exam_ibfk_2` FOREIGN KEY (`id_department`) REFERENCES `department` (`id`);

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_ibfk_1` FOREIGN KEY (`id_image`) REFERENCES `image` (`id`),
  ADD CONSTRAINT `images_ibfk_2` FOREIGN KEY (`id_activity`) REFERENCES `activities` (`id`),
  ADD CONSTRAINT `images_ibfk_3` FOREIGN KEY (`id_achievement`) REFERENCES `achievement` (`id`),
  ADD CONSTRAINT `images_ibfk_4` FOREIGN KEY (`id_lab`) REFERENCES `lab` (`id`);

--
-- Constraints for table `leader`
--
ALTER TABLE `leader`
  ADD CONSTRAINT `leader_ibfk_1` FOREIGN KEY (`id_facutly`) REFERENCES `facutly` (`id`),
  ADD CONSTRAINT `leader_ibfk_2` FOREIGN KEY (`id_department`) REFERENCES `department` (`id`);

--
-- Constraints for table `leaderuni`
--
ALTER TABLE `leaderuni`
  ADD CONSTRAINT `leaderuni_ibfk_1` FOREIGN KEY (`id_facutly`) REFERENCES `facutly` (`id`),
  ADD CONSTRAINT `leaderuni_ibfk_2` FOREIGN KEY (`id_department`) REFERENCES `department` (`id`);

--
-- Constraints for table `socialmedia`
--
ALTER TABLE `socialmedia`
  ADD CONSTRAINT `socialmedia_ibfk_1` FOREIGN KEY (`id_leader`) REFERENCES `leader` (`id`),
  ADD CONSTRAINT `socialmedia_ibfk_2` FOREIGN KEY (`id_leaderuni`) REFERENCES `leaderuni` (`id`);

--
-- Constraints for table `video`
--
ALTER TABLE `video`
  ADD CONSTRAINT `video_ibfk_1` FOREIGN KEY (`id_image`) REFERENCES `image` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
