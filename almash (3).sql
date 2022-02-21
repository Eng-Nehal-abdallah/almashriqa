-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2022 at 02:09 PM
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
  `image` varchar(255) NOT NULL,
  `id_facutly` int(11) DEFAULT NULL,
  `id_department` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `achievement`
--

INSERT INTO `achievement` (`id`, `name_ar`, `name_en`, `details_en`, `details_ar`, `pdf`, `id_doctor`, `type`, `image`, `id_facutly`, `id_department`) VALUES
(3, 'اول براءه', 'firstachieve', 'details about achievement', 'تفاصيل عن البراءه', 'download.pdf', 3, 'براءه', '/images/download.jpg', 1, 1),
(4, 'براءه', 'secondachieve', 'براءه', 'تفاصيل عن البراءه', 'download.pdf', 1, 'براءه', 'images/20220130095447.jpg', 1, 1),
(5, 'انجاز', 'thirdachieve', 'براءه', 'تفاصيل عن البراءه', 'download.pdf', NULL, 'براءه', 'images/20220130095144.jpg', 1, 1),
(7, 'name', 'name', 'details', 'التفاصيل', 'file/20220130093450.pdf', 1, NULL, 'images/20220130093450.jpg', NULL, NULL);

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
  `video` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`id`, `name_ar`, `name_en`, `details_ar`, `details_en`, `image`, `id_faculty`, `id_department`, `video`) VALUES
(1, 'نشاط اول', 'Activity', 'تفاصيل عن الانجازااااااااااااااااااااااااااااااااااااااااااااات', 'details about activitiessssssssssssssssssss', 'images/imgs/header.png', 3, 1, ''),
(2, 'انجاز الثاني', 'achievement first', 'تفاصيل عن الانجازااااااااااااااااااااااااااااااااااااات', 'activity details', 'images/imgs/header.png', 1, 5, ''),
(3, 'انجاز الثالث', 'achievement first', 'تفاصيل عن الانجازااااااااااااااااااااااااااااااااااااات', 'activity details', 'images/imgs/header.png', 2, 1, ''),
(4, 'انجاز الرابغ', 'achievement first', 'تفاصيل عن الانجازااااااااااااااااااااااااااااااااااااات', 'activity details', 'images/imgs/header.png', 3, NULL, ''),
(6, 'انجاز الثالث', 'achievement first', 'تفاصيل عن الانجازااااااااااااااااااااااااااااااااااااات', 'activity details', 'images/imgs/header.png', 2, NULL, ''),
(8, 'انجاز الخامس', 'achievement first', 'تفاصيل عن الانجازااااااااااااااااااااااااااااااااااااات', 'activity details', 'images/imgs/header.png', 4, NULL, ''),
(9, 'انجاز السادس', 'achievement first', 'تفاصيل عن الانجازااااااااااااااااااااااااااااااااااااات', 'activity details', 'images/imgs/header.png', 4, NULL, ''),
(10, 'name', 'name', 'التفاصيل', 'jdvnjvnxj n', 'images/20220130121055.jfif', 1, 5, 'file/20220130121055.mp4');

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
(1, 'قسم الفيزياء الطبية', NULL, 'التفاصيل كلها هنا ', NULL, 'images/download.jpg', 3, ''),
(5, 'قسم القانون', 'law', 'hbjhbn ghybn hghj ', 'jhuhggvbvhg', 'images/download.jpg', 1, ''),
(6, 'قسم الصيدليه', 'قسم الصيدليه', 'hbjhbn ghybn hghj', 'jhuhggvbvhg', 'images/download.jpg', 2, '#d53f3f');

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
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `name_ar`, `name_en`, `university_certified_en`, `university_certified_ar`, `facutly_certified_ar`, `facutly_certified_en`, `certified_en`, `certified_ar`, `birthday`, `gender_en`, `gender_ar`, `position_ar`, `grade_en`, `password`, `phone`, `grade_ar`, `posiotion_en`, `email`, `details_en`, `notes_ar`, `country_certified_ar`, `date_certified`, `mag_certified_en`, `mag_certified_ar`, `bac_certified_en`, `bac_certified_ar`, `country_certified_en`, `public_specific_ar`, `public_specific_en`, `private_specific_ar`, `private_specific_en`, `type_hirement_ar`, `type_hirement_en`, `shift_ar`, `date_hirement`, `shift_en`, `Nationality_ar`, `Nationality_en`, `country_ar`, `country_en`, `comrades`, `mother_name_ar`, `local`, `darcode`, `mother_name_en`, `id_facutly`, `id_department`, `notes_en`, `details_ar`, `image`) VALUES
(1, 'ابتسام نايف عودة', 'ebtesam naïve 3oda', NULL, 'جامعة المستنصريه', NULL, NULL, NULL, 'ماجستير', NULL, NULL, 'انثى', 'تدريسي', NULL, NULL, '7901611481', 'مدرس مساعد', NULL, 'abtsam.naeif@uom.edu.iq', NULL, NULL, 'العراق', '2015-01-14 00:00:00', NULL, 'الجامعة المستنصرية', NULL, '0', NULL, 'احياء مجهرية', NULL, 'احياء مجهرية', NULL, 'عقد', NULL, 'صباحي', '2021-01-02 00:00:00', NULL, 'عراقية', NULL, 'بغداد', NULL, '4', 'فائزة ياسين', '606', '38', NULL, 3, 1, '', 'information about doctor ', '\\images\\prof.png'),
(2, 'ابراهيم سلمان رشيد', 'ibrahim solimsan rashees', NULL, 'جامعة الاسكندريه / مصر', NULL, NULL, NULL, 'ماجستير', NULL, NULL, 'ذكر', 'امين مجلس الكلية', NULL, NULL, '7808161951', 'مدرس مساعد', NULL, 'ibrahim.salman@uom.edu.iq', NULL, NULL, 'مصر', NULL, NULL, 'جامعة الاسكندرية', NULL, 'الجامعة العراقية', NULL, 'قانون خاص ', NULL, 'مدني', NULL, 'عقد', NULL, 'مسائي', '2021-01-02 00:00:00', NULL, 'عراقي', NULL, 'بغداد', NULL, '121', 'لطيفة ذيب', '0', '811', NULL, 3, 1, '', 'information about doctor ', '\\images\\prof.png'),
(3, 'اثير صلاح ابراهيم', 'athier salah ebrahim', NULL, 'جامعة الشرق الاوسط/ الاردن', NULL, NULL, NULL, 'ماجستير', NULL, NULL, 'انثى', 'تدريسي', NULL, NULL, '7705386628', 'مدرس مساعد', NULL, 'atheerdahi33@gmail.com', NULL, NULL, 'الاردن', '2021-06-30 00:00:00', NULL, 'جامعة الشرق الاوسط', NULL, 'جامعة النهرين', NULL, 'قانون عام', NULL, 'ماليه عامة', NULL, 'عقد', NULL, 'مسائي', '2021-10-02 00:00:00', NULL, 'عراقي', NULL, 'بغداد', NULL, '0', 'سحر حسن', '201', '0', NULL, NULL, NULL, '', 'information about doctor ', '\\images\\prof.png'),
(4, 'احسان علي مبارك', NULL, NULL, 'جامعة النيلين ', NULL, NULL, NULL, 'دكتوراه', NULL, NULL, 'ذكر', 'رئيس قسم', NULL, NULL, '7712797148', 'مدرس', NULL, 'ihsan.ali@uom.edu.iq', NULL, NULL, 'السودان', NULL, NULL, '0', NULL, '0', NULL, 'ادارة اعمال', NULL, 'نظم معلومات اداريه', NULL, 'عقد', NULL, 'صباحي', '2021-01-04 00:00:00', NULL, 'عراقي', NULL, 'بغداد', NULL, '12', 'سعدية خضير', '842', '18', NULL, 2, NULL, '', 'information about doctor ', '\\images\\prof.png'),
(5, 'ليث حمزة سمين', NULL, NULL, 'جامعة بغداد', NULL, NULL, NULL, 'دكتوراه', NULL, NULL, 'ذكر', 'عميد كلية', NULL, NULL, NULL, 'استاذ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'صيدلة', NULL, 'صيدلانيات', NULL, NULL, NULL, 'صباحي', '2021-04-12 00:00:00', NULL, NULL, NULL, 'بغداد', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 'information about doctor ', 'imagesprof.png'),
(6, 'احلام اسماعيل ابراهيم', NULL, NULL, 'جامعة بغداد', NULL, NULL, NULL, 'دكتوراه', NULL, NULL, 'انثى', 'تدريسي', NULL, NULL, '7727705304', 'مدرس', NULL, 'ahlam.i.ibrahim@uom.edu.iq', NULL, NULL, 'العراق', NULL, NULL, 'جامعة بغداد', NULL, 'جامعة بغداد', NULL, 'مناعة مايكروبايلوجي', NULL, 'مناعة مايكروبايلوجي', NULL, 'عقد', NULL, 'صباحي', '2021-03-01 00:00:00', NULL, 'عراقية', NULL, 'بغداد', NULL, '5', 'سعدية احمد', '436', '23', NULL, NULL, NULL, '', 'information about doctor ', '\\images\\prof.png'),
(7, 'احلام علي حسين', NULL, NULL, 'بغداد', NULL, NULL, NULL, 'ماجستير', NULL, NULL, 'انثى', 'تدريسي', NULL, NULL, '7710748012', 'مدرس مساعد', NULL, 'ahlam.ali@uom.edu.iq', NULL, NULL, 'العراق', '2017-01-03 00:00:00', NULL, 'جامعة بغداد', NULL, 'جامعة بغداد', NULL, 'فيزياء', NULL, 'علوم فلك', NULL, 'عقد', NULL, 'صباحي', '2021-01-02 00:00:00', NULL, 'عراقية', NULL, 'بغداد', NULL, '40', 'امتثال احمد', '840', '15', NULL, NULL, NULL, '', 'information about doctor ', 'imagesprof.png'),
(8, 'احمد باسم قاسم', NULL, NULL, 'جامعة تكريت', NULL, NULL, NULL, 'دكتوراه', NULL, NULL, 'ذكر', 'تدريسي', NULL, NULL, '7707967856', 'مدرس مساعد', NULL, 'ahmed.alshmmary@yahoo.com', NULL, NULL, 'العراق', '2019-11-18 00:00:00', NULL, 'المجلس العراقي للاختصاصات الطبية', NULL, 'جامعة تكريت', NULL, 'طب عام', NULL, 'تخدير', NULL, 'عقد', NULL, 'صباحي', '2021-09-13 00:00:00', NULL, 'عراقي', NULL, 'بغداد', NULL, '11', 'منال ناصر', '326', '18', NULL, NULL, NULL, '', 'information about doctor ', 'imagesprof.png'),
(9, 'احمد حميد كريم', NULL, NULL, 'جامعة دمشق', NULL, NULL, NULL, 'دكتوراه', NULL, NULL, 'ذكر', 'معاون عميد', NULL, NULL, '0', 'مدرس', NULL, 'ahmed.hameed@uom.edu.iq', NULL, NULL, 'سوريا', '2014-11-09 00:00:00', NULL, 'جامعة القادسية', NULL, 'جامعة بابل', NULL, 'ادارة اعمال', NULL, 'سلوك تنظيمي', NULL, 'عقد', NULL, 'صباحي', '2021-01-04 00:00:00', NULL, 'عراقي', NULL, 'بغداد', NULL, '5', 'سليمة عبد  الوهاب', '7', '9', NULL, NULL, NULL, '', 'information about doctor ', 'imagesprof.png'),
(10, 'احمد خالد الظالمي', NULL, NULL, 'جامعة النهرين', NULL, NULL, NULL, 'دكتوراه', NULL, NULL, 'ذكر', 'معاون عميد', NULL, NULL, '7706807850', 'مدرس', NULL, 'ahmed.khaled@uom.edu.iq', NULL, NULL, 'العراق', '2015-10-08 00:00:00', NULL, 'جامعة الكوفة', NULL, 'جامعة الكوفة', NULL, 'صيدله', NULL, 'فلسفة /كيمياء حياتية سريرة', NULL, 'عقد', NULL, 'صباحي', '2021-01-04 00:00:00', NULL, 'عراقي', NULL, 'بغداد', NULL, '27', 'سليمة جاسم', '120', '73', NULL, NULL, NULL, '', 'information about doctor ', 'imagesprof.png'),
(11, 'احمد عبد الرحمن محمد', NULL, NULL, 'جيمس كوك استراليا', NULL, NULL, NULL, 'دكتوراه', NULL, NULL, 'ذكر', 'رئيس قسم', NULL, NULL, '7826064207', 'مدرس', NULL, 'ahmed.abdulrahman@uom.edu.iq', NULL, NULL, 'استراليا', '2020-02-13 00:00:00', NULL, 'جامزكوك استراليا', NULL, 'الجامعة التكنلوجية', NULL, 'فيزياء طبية', NULL, 'فيزياء النانوتكنولوجي', NULL, 'عقد', NULL, 'صباحي', '2021-01-02 00:00:00', NULL, 'عراقي', NULL, 'الأنبار', NULL, '19', 'سندس حسن', '315', '19', NULL, NULL, NULL, '', 'information about doctor ', 'imagesprof.png'),
(12, 'احمد نوري حسن', NULL, NULL, 'النهرين', NULL, NULL, NULL, 'ماجستير', NULL, NULL, 'ذكر', 'مقرر قسم', NULL, NULL, '7816083354', 'مدرس مساعد', NULL, 'ahmed.noori@uom.edu.iq', NULL, NULL, 'العراق', NULL, NULL, 'جامعة النهرين', NULL, 'جامعة النهرين', NULL, 'اقتصاديات ادارة مصارف', NULL, 'ادارة الصيرفة والتمويل', NULL, 'عقد', NULL, 'صباحي', '2021-01-04 00:00:00', NULL, 'عراقي', NULL, 'بغداد', NULL, '0', 'ساهره دحام', '0', '0', NULL, NULL, NULL, '', 'information about doctor ', 'imagesprof.png'),
(13, 'اسراء حمادي فهد', NULL, NULL, 'جامعة النهرين ', NULL, NULL, NULL, 'ماجستير', NULL, NULL, 'انثى', 'تدريسي', NULL, NULL, '7713305417', 'مدرس مساعد', NULL, 'israa.hammadi@uom.edu.iq', NULL, 'دوام جزئي', 'العراق', NULL, NULL, 'جامعة النهرين', NULL, 'جامعة بغداد', NULL, 'صيدلة', NULL, 'فسلجة طبية', NULL, 'عقد', NULL, 'صباحي', '2021-01-04 00:00:00', NULL, 'عراقية', NULL, 'بغداد', NULL, '40', 'يسرى عبد الحميد', '461', '3', NULL, NULL, NULL, '', 'information about doctor ', 'imagesprof.png'),
(14, 'الاء حاتم ذنون', NULL, NULL, 'الجامعة المستنصرية', NULL, NULL, NULL, 'دكتوراه', NULL, NULL, 'انثى', 'تدريسي', NULL, NULL, '7708950127', 'مدرس دكتور', NULL, 'drallaahth@gmail.com', NULL, NULL, 'العراق', '2021-01-11 00:00:00', NULL, 'جامعة المستنصرية', NULL, 'الجامعة المستنصرية', NULL, 'علوم حياة', NULL, 'علم الحيوان', NULL, 'عقد', NULL, 'صباحي', '2021-09-13 00:00:00', NULL, 'عراقية', NULL, 'بغداد', NULL, '70', 'ثورة محمود', '321', '11', NULL, NULL, NULL, '', 'information about doctor ', 'imagesprof.png'),
(15, 'الحمزة ضياء حميد', NULL, NULL, 'جامعة هامدرد الهند', NULL, NULL, NULL, 'دكتوراه', NULL, NULL, 'ذكر', 'تدريسي', NULL, NULL, '7737554933', 'مدرس', NULL, 'alhamzah.dheyaa@uom.edu.iq', NULL, NULL, 'الهند', '2017-03-08 00:00:00', NULL, 'جامعة هامدارد الهند', NULL, 'جامعة بغداد', NULL, 'كيمياء', NULL, 'كيمياء', NULL, 'عقد', NULL, 'صباحي', '2021-01-24 00:00:00', NULL, 'عراقي', NULL, 'بغداد', NULL, '9', 'هيفاء نافع', '836', '17', NULL, NULL, NULL, '', 'information about doctor ', 'imagesprof.png'),
(16, 'امل حمادة علي', NULL, NULL, 'بغداد', NULL, NULL, NULL, 'ماجستير', NULL, NULL, 'انثى', 'تدريسي', NULL, NULL, '7703993516', 'استاذ مساعد', NULL, 'amel.hamada@uom.edu.iq', NULL, NULL, 'العراق', NULL, NULL, 'جامعة بغداد', NULL, 'جامعة بغداد', NULL, 'صيدلة', NULL, 'كيمياء سريرية', NULL, 'عقد', NULL, 'صباحي', '2021-01-05 00:00:00', NULL, 'عراقية', NULL, 'بغداد', NULL, '56', 'شاهه مروح', '679', '43', NULL, NULL, NULL, '', 'information about doctor ', 'imagesprof.png'),
(17, 'انفال جبار كطافه', NULL, NULL, 'جامعة النهرين ', NULL, NULL, NULL, 'ماجستير', NULL, NULL, 'انثى', 'تدريسي', NULL, NULL, '7711960494', 'مدرس مساعد', NULL, 'jabbar.anfal@yahoo.com', NULL, NULL, 'العراق', '2020-11-09 00:00:00', NULL, 'جامعة النهرين - كلية الطب', NULL, 'جامعة بغداد - كلية العلوم للبنات', NULL, 'فيزياء طبية', NULL, 'فيزياء طبية', NULL, 'عقد', NULL, 'صباحي', '2021-04-25 00:00:00', NULL, 'عراقية', NULL, 'بغداد', NULL, '43', 'ميعاد عبدالرزاق', '330', '19', NULL, NULL, NULL, '', 'information about doctor ', 'imagesprof.png'),
(18, 'اية ياسين محمود', NULL, NULL, 'جامعة لندن ', NULL, NULL, NULL, 'ماجستير', NULL, NULL, 'انثى', 'تدريسي', NULL, NULL, '0', 'مدرس مساعد', NULL, 'aya.y.m@uom.edu.iq', NULL, NULL, 'بريطانيا', NULL, NULL, 'جامعة لندن', NULL, 'جامعة بغداد', NULL, 'كيمياء صيدلانيات', NULL, 'مناعة مايكروبايلوجي', NULL, 'عقد', NULL, 'صباحي', '2021-01-24 00:00:00', NULL, 'عراقية', NULL, 'بغداد', NULL, '17', 'مديحة عبد الوهاب', '649', '1', NULL, NULL, NULL, '', 'information about doctor ', 'imagesprof.png'),
(19, 'ايثار يحيى صالح', NULL, NULL, 'جامعة ماليا', NULL, NULL, NULL, 'دكتوراه', NULL, NULL, 'ذكر', 'مقرر قسم الفيزياء الطبية ', NULL, NULL, '7721301020', 'مدرس', NULL, 'ethar988@gmail.com', NULL, NULL, 'ماليزيا', '2018-11-22 00:00:00', NULL, 'جامعة ماليا', NULL, 'جامعة التكنلوجية', NULL, 'علوم فيزياء تطبيقية/ كهرومغناطيسية', NULL, 'المواد النانوية', NULL, 'عقد', NULL, 'صباحي', '2021-09-13 00:00:00', NULL, 'عراقي', NULL, 'بغداد', NULL, '11', 'وهيبة عطا', '618', '14', NULL, NULL, NULL, '', 'information about doctor ', 'imagesprof.png'),
(20, 'ايمان جمال مختار', NULL, NULL, 'جامعة عمان', NULL, NULL, NULL, 'ماجستير', NULL, NULL, 'انثى', 'مقرر مجلس', NULL, NULL, '7734154653', 'مدرس مساعد', NULL, 'eman.gamal@uom.edu.iq', NULL, NULL, 'الاردن', NULL, NULL, 'جامعة الاسراء', NULL, 'جامعة بغداد', NULL, 'صيدلة', NULL, 'صيدلانيات', NULL, 'عقد', NULL, 'صباحي', '2021-01-09 00:00:00', NULL, 'عراقية', NULL, 'بغداد', NULL, '1', 'فاطمة عبد الجليل', '318', '56', NULL, NULL, NULL, '', 'information about doctor ', 'imagesprof.png'),
(21, 'ايمان مبدر نايف', NULL, NULL, 'جامعة بابل', NULL, NULL, NULL, 'دكتوراه', NULL, NULL, 'انثى', 'تدريسي', NULL, NULL, '0', 'مدرس', NULL, 'iman.mubdir@uom.edu.iq', NULL, NULL, 'العراق', '2019-02-28 00:00:00', NULL, 'جامعة بابل', NULL, '0', NULL, 'احياء مجهرية', NULL, 'احياء مجهرية', NULL, 'عقد', NULL, 'صباحي', '2021-01-27 00:00:00', NULL, 'عراقية', NULL, 'بابل', NULL, '0', 'صديقة عبد العزيز', '0', '0', NULL, NULL, NULL, '', 'information about doctor ', 'imagesprof.png'),
(22, 'ايهاب سلام حسين', NULL, NULL, 'جامعة النهرين', NULL, NULL, NULL, 'دكتوراه', NULL, NULL, 'ذكر', 'امين مجلس الكلية', NULL, NULL, '7702981660', 'مدرس مساعد', NULL, 'ehab.s.hussein@uom.edu.iq', NULL, NULL, 'العراق', NULL, NULL, 'جامعة النهرين', NULL, 'جامعة بغداد', NULL, 'صيدلة', NULL, 'ادوية', NULL, 'عقد', NULL, 'صباحي', '2021-02-01 00:00:00', NULL, 'عراقية', NULL, 'بغداد', NULL, '7', 'الهام سعدي', '120', '6', NULL, NULL, NULL, '', 'information about doctor ', 'imagesprof.png'),
(23, 'ايهاب محمد علي', NULL, NULL, 'جامعة تكريت', NULL, NULL, NULL, 'ماجستير', NULL, NULL, 'ذكر', 'تدريسي', NULL, NULL, '0', 'مدرس مساعد', NULL, '0', NULL, NULL, 'العراق', '2018-12-30 00:00:00', NULL, 'جامعة تكريت', NULL, '0', NULL, 'علوم كيمياء', NULL, 'علوم كيمياء', NULL, 'عقد', NULL, 'صباحي', '2021-01-19 00:00:00', NULL, 'عراقي', NULL, 'بغداد', NULL, '19', 'حمدية محمد', '310', '48\\1', NULL, NULL, NULL, '', 'information about doctor ', 'imagesprof.png'),
(24, 'بان بدر حسن', NULL, NULL, 'جامعة بغداد', NULL, NULL, NULL, 'دكتوراه', NULL, NULL, 'انثى', 'تدريسي', NULL, NULL, '7714284544', 'مدرس', NULL, 'ban.badr@uom.edu.iq', NULL, NULL, 'العراق', '2018-04-30 00:00:00', NULL, 'جامعة النهرين', NULL, 'جامعة بغداد', NULL, 'القانون الخاص', NULL, 'احوال شخصية', NULL, 'عقد', NULL, 'مسائي', '2021-01-02 00:00:00', NULL, 'عراقية', NULL, 'بغداد', NULL, '29', 'ايمان حسين', '887', '4', NULL, NULL, NULL, '', 'information about doctor ', 'imagesprof.png'),
(25, 'بان ناهل شكر', NULL, NULL, 'جامعة بغداد', NULL, NULL, NULL, 'ماجستير', NULL, NULL, 'انثى', 'تدريسي', NULL, NULL, '7711851689', 'مدرس مساعد', NULL, 'moringa84@yahoo.com', NULL, NULL, 'العراق', '2015-02-12 00:00:00', NULL, 'جامعة بغداد', NULL, 'المستنصرية', NULL, 'طب اسنان', NULL, 'صناعة اسنان', NULL, 'عقد', NULL, 'صباحي', '2021-10-04 00:00:00', NULL, 'عراقية', NULL, 'بغداد', NULL, '70', 'حوراء اسماعيل', '651', '10', NULL, NULL, NULL, '', 'information about doctor ', 'imagesprof.png'),
(26, 'بهاء برهان الدين احمد توفيق', NULL, NULL, 'جامعة يانكي كوبالا', NULL, NULL, NULL, 'ماجستير', NULL, NULL, 'ذكر', 'تدريسي', NULL, NULL, '7714243555', 'مدرس مساعد', NULL, 'bahaa.burhan91@gmail.com', NULL, NULL, 'بلاروسيا', '2021-02-22 00:00:00', NULL, 'جامعة كرودنوا الحكومية', NULL, 'المستنصرية', NULL, 'كيمياء', NULL, 'كيمياء حياتية', NULL, 'عقد', NULL, 'صباحي', '2021-09-13 00:00:00', NULL, 'عراقي', NULL, 'بغداد', NULL, '21', 'خنساء نافع', '702', '31', NULL, NULL, NULL, '', 'information about doctor ', 'imagesprof.png'),
(27, 'تبارك محمد عواد', NULL, NULL, 'جامعة بغداد', NULL, NULL, NULL, 'ماجستير', NULL, NULL, 'انثى', 'تدريسي', NULL, NULL, '0', 'مدرس مساعد', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'الفيزياء العام', NULL, 'فيزياء المواد', NULL, NULL, NULL, NULL, '2021-10-04 00:00:00', NULL, NULL, NULL, 'بغداد', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 'information about doctor ', 'imagesprof.png'),
(28, 'تقى صائب عيسى', NULL, NULL, 'جامعة بغداد', NULL, NULL, NULL, 'ماجستير', NULL, NULL, 'انثى', 'تدريسي', NULL, NULL, '7730048275', 'مدرس مساعد', NULL, 'tuqaI95@gmail.com', NULL, NULL, 'العراق', '2021-08-12 00:00:00', NULL, 'جامعة بغداد', NULL, 'جامعة بغداد', NULL, 'طب بيطري', NULL, 'علم السموم والادوية', NULL, 'عقد', NULL, 'صباحي', '2021-10-20 00:00:00', NULL, 'عراقية', NULL, 'بغداد', NULL, '24', 'ايات عبد الرحمن', '637', '68', NULL, NULL, NULL, '', 'information about doctor ', 'imagesprof.png'),
(29, 'تهاني عبد العزيز جعفر عباس', NULL, NULL, 'جامعة هيروت واط ادنبره بريطانيا', NULL, NULL, NULL, 'دكتوراه', NULL, NULL, 'انثى', 'رئيس جامعة', NULL, NULL, '7800964334', 'استاذ', NULL, 'tahani.alsandook@gmail.com', NULL, NULL, 'بريطانيا', '1982-11-28 00:00:00', NULL, 'جامعة بغداد', NULL, 'جامعة بغداد', NULL, 'طب اسنان', NULL, 'ادوية', NULL, 'عقد', NULL, 'صباحي', '2021-06-15 00:00:00', NULL, 'عراقية', NULL, 'بغداد', NULL, '54', 'نجاة رشيد', '105', '0', NULL, NULL, NULL, '', 'information about doctor ', 'imagesprof.png'),
(30, 'ثناء جعفر محمد', NULL, NULL, 'جامعة نيوكاسل', NULL, NULL, NULL, 'دكتوراه', NULL, NULL, 'انثى', 'تدريسي', NULL, NULL, '0', 'استاذ مساعد', NULL, 'thanaa.jaafar@uom.edu.iq', NULL, NULL, 'بريطانيا', '1982-03-14 00:00:00', NULL, '0', NULL, '0', NULL, 'كيمياء', NULL, 'كيمياء', NULL, 'عقد', NULL, 'صباحي', '2021-06-15 00:00:00', NULL, 'عراقية', NULL, 'بغداد', NULL, '64', 'فاطمة محمد', '505', '5', NULL, NULL, NULL, '', 'information about doctor ', 'imagesprof.png'),
(31, 'جعفر ستار شياع', NULL, NULL, 'جامعة النهرين', NULL, NULL, NULL, 'دكتوراه', NULL, NULL, 'ذكر', 'تدريسي', NULL, NULL, '7708874327', 'مدرس', NULL, 'd.jaafer.s.shia@uom.edu.iq', NULL, NULL, 'العراق', NULL, NULL, 'جامعة بغداد', NULL, 'جامعة بغداد', NULL, 'فلسفة / صيدلة', NULL, 'الكيمياء الصيدلانية', NULL, 'عقد', NULL, 'صباحي', '2021-08-01 00:00:00', NULL, 'عراقي', NULL, 'بغداد', NULL, '63', 'حسنه ابراهيم', '606', '3', NULL, NULL, NULL, '', 'information about doctor ', 'imagesprof.png'),
(32, 'حامد كريم ساجت', NULL, NULL, 'الكلية الملكية البريطانية', NULL, NULL, NULL, 'دكتوراه', NULL, NULL, 'ذكر', 'تدريسي', NULL, NULL, '7800504241', 'استاذ', NULL, 'dr.hamid.k@uom.edu.iq', NULL, NULL, 'بريطانيا', '0001-01-01', NULL, 'الكلية الملكية البريطانية', NULL, 'جامعة بغداد', NULL, 'طب', NULL, 'طب عام', NULL, 'عقد', NULL, 'صباحي', '2021-03-25 00:00:00', NULL, 'عراقي', NULL, 'بغداد', NULL, '37', 'صالحة فياض سهيل', '640', '162', NULL, NULL, NULL, '', 'information about doctor ', 'imagesprof.png'),
(33, 'حسن سعيد جاسم', NULL, NULL, 'جامعة ويلز', NULL, NULL, NULL, 'دكتوراه', NULL, NULL, 'ذكر', 'تدريسي', NULL, NULL, '0', 'استاذ مساعد', NULL, '0', NULL, NULL, 'برطانيا', '2004-05-22 00:00:00', NULL, 'جامعة بغداد - كلية العلوم', NULL, 'جامعة بغداد', NULL, 'علم الحيوان', NULL, 'تصنيف حشرات', NULL, 'عقد', NULL, 'صباحي', '2020-01-01 00:00:00', NULL, 'عراقي', NULL, 'بغداد', NULL, '0', 'سناء احمد', '0', '0', NULL, NULL, NULL, '', 'information about doctor ', 'imagesprof.png'),
(34, 'حسن سعيد رضا', NULL, NULL, 'جامعة النهرين', NULL, NULL, NULL, 'ماجستير', NULL, NULL, 'ذكر', 'تدريسي', NULL, NULL, '7702868947', 'مدرس مساعد', NULL, 'hssr510@gmail.com', NULL, 'دوام جزئي', 'العراق', '2016-12-29 00:00:00', NULL, 'جامعة النهرين', NULL, 'جامعة النهرين', NULL, 'قانون عام', NULL, 'قانون دولي انساني', NULL, 'عقد', NULL, 'مسائي', '2021-10-02 00:00:00', NULL, 'عراقي', NULL, 'بغداد', NULL, '2', 'سعدية جواد', '436', '4', NULL, NULL, NULL, '', 'information about doctor ', 'imagesprof.png'),
(35, 'حسين محمد عزيز', NULL, NULL, 'جامعة مستنصرية', NULL, NULL, NULL, 'ماجستير', NULL, NULL, 'ذكر', 'تدريسي', NULL, NULL, '7812692901', 'مدرس مساعد', NULL, '0', NULL, NULL, 'العراق', '2020-11-22 00:00:00', NULL, 'الجامعة المستنصرية', NULL, 'جامعة بغداد', NULL, 'علوم في الامراض', NULL, 'علوم في الامراض', NULL, 'عقد', NULL, 'صباحي', '2021-03-04 00:00:00', NULL, 'عراقي', NULL, 'بغداد', NULL, '7', 'جنان عودة', 'الصالحية', 'شقة 9', NULL, NULL, NULL, '', 'information about doctor ', 'imagesprof.png'),
(36, 'حمزة عبد الرحمن سلمان', NULL, NULL, 'الهند/بهارتيداسان', NULL, NULL, NULL, 'دكتوراه', NULL, NULL, 'ذكر', 'تدريسي', NULL, NULL, '773291448', 'مدرس', NULL, 'hamzah.abdulrahman@uom.edu.iq', NULL, NULL, 'العراق', '2018-10-31 00:00:00', NULL, 'الهند', NULL, 'جامعة بغداد', NULL, 'علوم الحياة', NULL, 'احياء مجهرية', NULL, 'عقد', NULL, 'صباحي', '2021-01-02 00:00:00', NULL, 'عراقي', NULL, 'بغداد', NULL, '34', 'رمزية عبد الباقي', '324', '12', NULL, NULL, NULL, '', 'information about doctor ', 'imagesprof.png'),
(37, 'حوراء قاسم غانم', NULL, NULL, 'الجامعة الاسلامية في لبنان', NULL, NULL, NULL, 'دكتوراه', NULL, NULL, 'انثى', 'ممثلا للتدريسيين في المجلس', NULL, NULL, '0', 'مدرس', NULL, 'hawraa.qasim@uom.edu.iq', NULL, NULL, 'لبنان', '2020-07-10 00:00:00', NULL, 'جامعة النهرين', NULL, 'جامعة النهرين', NULL, 'القانون العام', NULL, 'جنائي دولي', NULL, 'عقد', NULL, 'صباحي', '2021-01-02 00:00:00', NULL, 'عراقية', NULL, 'بغداد', NULL, '27', 'عليه فرحان', '409', '33', NULL, NULL, NULL, '', 'information about doctor ', 'imagesprof.png'),
(38, 'حيدر حسين عبد الجبار', NULL, NULL, 'بغداد', NULL, NULL, NULL, 'ماجستير', NULL, NULL, 'ذكر', 'تدريسي', NULL, NULL, '7713853436', 'مدرس مساعد', NULL, 'hayder.hussein@uom.edu.iq', NULL, NULL, 'ليبيا', '2019-02-10 00:00:00', NULL, 'جامعة بغداد', NULL, 'جامعة قاريونس ليبيا', NULL, 'صيدلة', NULL, 'صيدلانيات', NULL, 'عقد', NULL, 'صباحي', '2021-01-04 00:00:00', NULL, 'عراقي', NULL, 'بغداد', NULL, '88', 'مروج سعدون', '834', '4', NULL, NULL, NULL, '', 'information about doctor ', 'imagesprof.png'),
(39, 'حيدر منير صالح', NULL, NULL, 'المجلس العراقي للاختصاصات الطبية', NULL, NULL, NULL, 'دكتوراه', NULL, NULL, 'ذكر', 'تدريسي', NULL, NULL, '7901720619', 'مدرس', NULL, 'ghinah09@gmail.com', NULL, NULL, 'المجلس العراقي للاختصاصات الطبية', '2017-05-28 00:00:00', NULL, 'المجلس العراقي للاختصاصات الطبية', NULL, 'جامعة بغداد', NULL, 'طب اسنان', NULL, 'جراحة الوجه والفكين', NULL, 'عقد', NULL, 'صباحي', '2021-07-13 00:00:00', NULL, 'عراقي', NULL, 'بغداد', NULL, '67', '0', '0', '22', NULL, NULL, NULL, '', 'information about doctor ', 'imagesprof.png'),
(40, 'خلود صالح حمد ', NULL, NULL, 'جامعة بغداد', NULL, NULL, NULL, 'دكتوراه', NULL, NULL, 'انثى', 'تدريسي', NULL, NULL, '0', 'مدرس ', NULL, '0', NULL, NULL, 'العراق', '2004-10-09 00:00:00', NULL, 'جامعة بغداد', NULL, 'جامعة بغداد', NULL, 'دكتوراه تخدير', NULL, 'تخدير', NULL, 'عقد', NULL, 'صباحي', '2021-01-02 00:00:00', NULL, 'عراقية', NULL, 'بغداد', NULL, '11', 'لميعة واكع', '639', '2', NULL, NULL, NULL, '', 'information about doctor ', 'imagesprof.png'),
(41, 'دنيا احمد عولا', NULL, NULL, 'جامعة التن باش', NULL, NULL, NULL, 'ماجستير', NULL, NULL, 'انثى', 'تدريسي', NULL, NULL, '770070521', 'مدرس مساعد', NULL, '0', NULL, NULL, 'تركيا', '2020-09-30 00:00:00', NULL, 'جامعة التين باس تركيا', NULL, 'تركيا', NULL, 'هندسة', NULL, 'هندسة حاسبات', NULL, 'عقد', NULL, 'صباحي', '2021-01-02 00:00:00', NULL, 'عراقية', NULL, 'بغداد', NULL, '0', 'امينة عبد الله', '877', '10', NULL, NULL, NULL, '', 'information about doctor ', 'imagesprof.png'),
(42, 'ذكرى محمد حاجم', NULL, NULL, 'جامعة بغداد', NULL, NULL, NULL, 'دكتوراه', NULL, NULL, 'انثى', 'تدريسي', NULL, NULL, '7901306859', 'استاذ مساعد', NULL, 'thekrahachem@yahoo.com', NULL, NULL, 'العراق', '2002-05-07 00:00:00', NULL, 'جامعة بغداد', NULL, 'جامعة بغداد', NULL, 'طب اسنان', NULL, 'صناعة اسنان', NULL, 'عقد', NULL, 'صباحي', '2021-10-02 00:00:00', NULL, 'عراقية', NULL, 'بغداد', NULL, '39', 'شمسة حسن', '316', '15', NULL, NULL, NULL, '', 'information about doctor ', 'imagesprof.png'),
(43, 'راشد خليل طاهر', NULL, NULL, 'الولايات المتحدة الامريكة', NULL, NULL, NULL, 'دكتوراه', NULL, NULL, 'ذكر', 'تدريسي', NULL, NULL, '7810725880', 'استاذ', NULL, 'rashidalhadithy@gmail.com', NULL, NULL, 'المملكة المتحدة', '1989-02-15 00:00:00', NULL, 'الولايات المتحدة الامريكة', NULL, 'الجامعة المستنصرية', NULL, 'فيزياء', NULL, 'الفيزياء ليزر واستخدامات في الطب', NULL, 'عقد', NULL, 'صباحي', '2021-08-07 00:00:00', NULL, 'عراقي', NULL, 'بغداد', NULL, '5', 'سارة ظاهر', '653', '13', NULL, NULL, NULL, '', 'information about doctor ', 'imagesprof.png'),
(44, 'رجاء هادي عباس درويش', NULL, NULL, 'جامعة بغداد', NULL, NULL, NULL, 'دكتوراه', NULL, NULL, 'انثى', 'عميد كلية', NULL, NULL, '7705338115', 'استاذ', NULL, 'Raja.hadi@uom.edu.iq', NULL, NULL, 'العراق', '2005-09-01 00:00:00', NULL, 'جامعة بغداد', NULL, 'جامعة بغداد', NULL, 'طب اسنان', NULL, 'طب وجراحة الاسنان', NULL, 'عقد', NULL, 'صباحي', '2021-01-02 00:00:00', NULL, 'عراقية', NULL, 'بغداد', NULL, '23', 'حياة مجيد صادق', '613', '23', NULL, NULL, NULL, '', 'information about doctor ', 'imagesprof.png'),
(45, 'رسل مدحت عبد الله', NULL, NULL, 'جامعة نهرين', NULL, NULL, NULL, 'ماجستير', NULL, NULL, 'انثى', 'تدريسي', NULL, NULL, '7712774858', 'مدرس مساعد', NULL, 'rusulmadhat94@gmail.com', NULL, NULL, 'جامعة النهرين', '2021-08-24 00:00:00', NULL, 'جامعة النهرين', NULL, 'جامعة بغداد', NULL, 'تقنيات احيائية', NULL, 'تقانة احيائية', NULL, 'عقد', NULL, 'صباحي', '2021-08-07 00:00:00', NULL, 'عراقية', NULL, 'بغداد', NULL, '14', 'شروق شاكر', '635', '1/20', NULL, NULL, NULL, '', 'information about doctor ', 'imagesprof.png'),
(46, 'رفاه خميس محل', NULL, NULL, 'الاسراء - عمان', NULL, NULL, NULL, 'ماجستير', NULL, NULL, 'انثى', 'تدريسي', NULL, NULL, '7733518708', 'مدرس مساعد', NULL, 'Dr.rafahkh@gmail.com', NULL, NULL, 'الاردن', '2015-12-19 00:00:00', NULL, 'جامعة الاسراء', NULL, 'الجامعة السورية الدولية الخاصة للعلوم والتكنلوجيا', NULL, 'صيدلة', NULL, 'صيدلانيات', NULL, 'عقد', NULL, 'صباحي', '2021-10-02 00:00:00', NULL, 'عراقية', NULL, 'بغداد', NULL, '11', 'مائدة نعيم', '211', '31', NULL, NULL, NULL, '', 'information about doctor ', 'imagesprof.png'),
(47, 'رؤى محمد يعكوب', NULL, NULL, 'جامعة بغداد', NULL, NULL, NULL, 'ماجستير', NULL, NULL, 'انثى', 'تدريسي', NULL, NULL, '7722818386', 'مدرس مساعد', NULL, 'ruaamy1992@gmail.com', NULL, NULL, 'العراق', '2019-03-17 00:00:00', NULL, 'جامعة بغداد', NULL, 'كلية المنصور', NULL, 'قانون عام', NULL, 'قانون جنائي', NULL, 'عقد', NULL, 'صباحي', '2021-10-02 00:00:00', NULL, 'عراقية', NULL, 'بغداد', NULL, '1', 'وفاء احمد', '837', '58', NULL, NULL, NULL, '', 'information about doctor ', 'imagesprof.png'),
(48, 'ريكان احمد صميط', NULL, NULL, 'جامعة بغداد', NULL, NULL, NULL, 'ماجستير', NULL, NULL, 'ذكر', 'تدريسي', NULL, NULL, '7733654610', 'مدرس مساعد', NULL, 'rekan_ahmed83@gmail.com', NULL, NULL, 'العراق', '2011-11-30 00:00:00', NULL, 'جامعة بغداد', NULL, 'جامعة بغداد', NULL, 'اعلام', NULL, 'اعلام', NULL, 'عقد', NULL, 'صباحي', '2021-01-02 00:00:00', NULL, 'عراقي', NULL, 'بغداد', NULL, '0', 'عيدة طعان', '0', '0', NULL, NULL, NULL, '', 'information about doctor ', 'imagesprof.png'),
(49, 'زهراء فارس عبد الله', NULL, NULL, 'جامعة النهرين', NULL, NULL, NULL, 'ماجستير', NULL, NULL, 'انثى', 'تدريسي', NULL, NULL, '7710029071', 'مدرس مساعد', NULL, 'zoza.fares94@gmail.com', NULL, NULL, 'العراق', '2020-05-05 00:00:00', NULL, 'جامعة النهرين', NULL, 'كلية المأمون', NULL, 'احياء مجهرية', NULL, 'فايروسات', NULL, 'عقد', NULL, 'صباحي', '2021-09-20 00:00:00', NULL, 'عراقية', NULL, 'بغداد', NULL, '46', 'غادة حازم', '330', '7', NULL, NULL, NULL, '', 'information about doctor ', 'imagesprof.png'),
(50, 'زهراء ماجد عبد النور', NULL, NULL, 'نهرين', NULL, NULL, NULL, 'ماجستير', NULL, NULL, 'انثى', 'تدريسي', NULL, NULL, '7709766516', 'مدرس مساعد', NULL, 'zahraaalabadi135@yahoo.com', NULL, NULL, 'العراق', '2019-07-10 00:00:00', NULL, 'جامعة النهرين', NULL, 'جامعة النهرين', NULL, 'علوم كيمياء /لاعضوية عامة', NULL, 'علوم كيمياء /لاعضوية عامة', NULL, 'عقد', NULL, 'صباحي', '2021-01-02 00:00:00', NULL, 'عراقية', NULL, 'بغداد', NULL, '3', 'فائدة اسيود', '817', '184', NULL, NULL, NULL, '', 'information about doctor ', 'imagesprof.png'),
(51, 'سارة حامد شحاذه', NULL, NULL, 'الجامعة التكنلوجية', NULL, NULL, NULL, 'دكتوراه', NULL, NULL, 'انثى', 'تدريسي', NULL, NULL, '0', 'مدرس', NULL, 'no', NULL, NULL, 'العراق', '2020-03-15 00:00:00', NULL, 'الجامعة التكنلوية', NULL, 'الجامعة التكنلوجية', NULL, 'فلسفة', NULL, 'تقانات المواد الطبية', NULL, 'عقد', NULL, 'صباحي', '2021-01-03 00:00:00', NULL, 'عراقية', NULL, 'بغداد', NULL, '78', 'انتصار مكطوف', '641', '20', NULL, NULL, NULL, '', 'information about doctor ', 'imagesprof.png'),
(52, 'سارة نضال جاسم', NULL, NULL, 'النهرين', NULL, NULL, NULL, 'ماجستير', NULL, NULL, 'انثى', 'تدريسي', NULL, NULL, '7700671049', 'مدرس مساعد', NULL, 'sara.nathal@uom.edu.iq', NULL, NULL, 'العراق', '2016-02-24 00:00:00', NULL, 'جامعة النهرين', NULL, 'الجامعة المستنصرية', NULL, 'علم الاجنة', NULL, 'اجنة تطبيقية', NULL, 'عقد', NULL, 'صباحي', '2021-01-02 00:00:00', NULL, 'عراقية', NULL, 'بغداد', NULL, '0', 'سهى غازي', '828', '45', NULL, NULL, NULL, '', 'information about doctor ', 'imagesprof.png'),
(53, 'سرمد ضياء حسين', NULL, NULL, 'التن باش/ تركيا', NULL, NULL, NULL, 'ماجستير', NULL, NULL, 'ذكر', 'تدريسي', NULL, NULL, '7726735178', 'مدرس مساعد', NULL, 'sarmad.dhyaa@uom.edu.iq', NULL, NULL, 'تركيا', '2021-01-17 00:00:00', NULL, 'تركيا', NULL, 'كلية الاسراء الجامعة', NULL, 'هندسة كهرباء - حاسوب', NULL, 'هندسة حاسبات', NULL, 'عقد', NULL, 'صباحي', '2021-01-02 00:00:00', NULL, 'عراقي', NULL, 'بغداد', NULL, '9', 'احلام محمد', '309', '15', NULL, NULL, NULL, '', 'information about doctor ', 'imagesprof.png'),
(54, 'سرى مهدي منشد', NULL, NULL, 'الجامعة المستنصريه', NULL, NULL, NULL, 'ماجستير', NULL, NULL, 'انثى', 'تدريسي', NULL, NULL, '7828640135', 'مدرس مساعد', NULL, 'sura_mehdi2011@yahoo.com', NULL, NULL, 'العراق', '2021-08-01 00:00:00', NULL, 'المستنصرية', NULL, 'المستنصرية', NULL, 'علوم الحياة', NULL, 'احياء مجهرية', NULL, 'عقد', NULL, 'صباحي', '2021-09-13 00:00:00', NULL, 'عراقية', NULL, 'بغداد', NULL, '34', 'انفال ضياء الدين', '309', '1/3', NULL, NULL, NULL, '', 'information about doctor ', 'imagesprof.png'),
(55, 'سعد عبد الواحد خليل', NULL, NULL, 'جامعة تامبوف ', NULL, NULL, NULL, 'ماجستير', NULL, NULL, 'ذكر', 'تدريسي', NULL, NULL, '7510995902', 'مدرس مساعد', NULL, 'saad.alwahid@uom.edu.iq', NULL, NULL, 'روسيا', NULL, NULL, 'جامعة تامبيوف التقنية روسيا', NULL, 'جامعة تامبيوف التقنية روسيا', NULL, 'ادارة عامة', NULL, 'ادارة تسويق', NULL, 'عقد', NULL, 'صباحي + مسائي', '2021-01-04 00:00:00', NULL, 'عراقي', NULL, 'بغداد', NULL, '89', 'جميلة مولود', '665', '19', NULL, NULL, NULL, '', 'information about doctor ', 'imagesprof.png'),
(56, 'سلمان علي احمد', NULL, NULL, 'ايدنبيرغ بريطانيا', NULL, NULL, NULL, 'دكتوراه', NULL, NULL, 'ذكر', 'تدريسي', NULL, NULL, '7904916409', 'مدرس ', NULL, 'salman.ali@uom.edu.iq', NULL, NULL, 'بريطانيا', '1987-11-28 00:00:00', NULL, 'جامعة ليدز بريطانيا', NULL, 'جامعة بغداد', NULL, 'علوم كيمياء', NULL, 'علوم كيمياء', NULL, 'عقد', NULL, 'صباحي', '2021-01-02 00:00:00', NULL, 'عراقي', NULL, 'بغداد', NULL, '74', 'رشيدة حسين', '881', '14', NULL, NULL, NULL, '', 'information about doctor ', 'imagesprof.png'),
(57, 'سناريا ثامر ناصر', NULL, NULL, 'جامعة بغداد', NULL, NULL, NULL, 'دكتوراه', NULL, NULL, 'انثى', 'تدريسي', NULL, NULL, '7901364272', 'مدرس', NULL, 'sanariath78@yahoo.com', NULL, NULL, 'العراق', '2021-06-13 00:00:00', NULL, 'جامعة المستنصرية', NULL, 'جامعة بغداد', NULL, 'صيدلة', NULL, 'صيدلانيات', NULL, 'عقد', NULL, 'صباحي', '2021-10-02 00:00:00', NULL, 'عراقية', NULL, 'بغداد', NULL, '28', 'ناهدة عبد الكريم', '622', '34', NULL, NULL, NULL, '', 'information about doctor ', 'imagesprof.png'),
(58, 'سنان صبحي فرحان مصطفى', NULL, NULL, 'جامعة بغداد', NULL, NULL, NULL, 'دكتوراه', NULL, NULL, 'ذكر', 'عميد كلية', NULL, NULL, '7711424735', 'استاذ مساعد', NULL, 'sinan.subhi@uom.edu.iq', NULL, NULL, 'العراق', '2011-07-20 00:00:00', NULL, 'جامعة بغداد', NULL, 'جامعة بغداد', NULL, 'طب وجراحة عام', NULL, 'تشريح', NULL, 'عقد', NULL, 'صباحي', '2021-01-02 00:00:00', NULL, 'عراقي', NULL, 'بغداد', NULL, '15', 'وداد فليح', '316', '29', NULL, NULL, NULL, '', 'information about doctor ', 'imagesprof.png'),
(59, 'سها حازم صالح ', NULL, NULL, 'جامعة بغداد', NULL, NULL, NULL, 'ماجستير', NULL, NULL, 'انثى', 'ممثلا للتدريسيين في المجلس', NULL, NULL, '0', 'مدرس مساعد', NULL, '0', NULL, NULL, 'العراق', NULL, NULL, 'جامعة بغداد', NULL, '0', NULL, 'لغة انكليزية', NULL, 'رواية', NULL, 'عقد', NULL, 'صباحي', '2021-01-21 00:00:00', NULL, 'عراقية', NULL, 'بغداد', NULL, '14', 'سعاد شاكر', '823', '44', NULL, NULL, NULL, '', 'information about doctor ', 'imagesprof.png'),
(60, 'شهد خالد عبد الله', NULL, NULL, 'جامعة بغداد ', NULL, NULL, NULL, 'ماجستير', NULL, NULL, 'انثى', 'تدريسي', NULL, NULL, '7705361753', 'مدرس مساعد', NULL, 'shahad.khalid@uom.edu.iq', NULL, NULL, 'العراق', '2020-03-02 00:00:00', NULL, 'جامعة بغداد', NULL, 'جامعة بغداد', NULL, 'علوم حياة', NULL, 'تطبيقات ليزر', NULL, 'عقد', NULL, 'صباحي', '2021-01-02 00:00:00', NULL, 'عراقية', NULL, 'بغداد', NULL, '26', 'مها شاكر', '639', '17', NULL, NULL, NULL, '', 'information about doctor ', 'imagesprof.png'),
(61, 'صادق جعفر كاظم عبدالله', NULL, NULL, 'الجامعة المستنصرية', NULL, NULL, NULL, 'دكتوراه', NULL, NULL, 'ذكر', 'تدريسي', NULL, NULL, '7801874355', 'استاذ مساعد', NULL, 'sadiqjaafarkadim@gmail.com', NULL, NULL, 'العراق', '2018-08-12 00:00:00', NULL, 'جامعة بغداد', NULL, 'جامعة بغداد', NULL, 'فيزياء طبية', NULL, 'فلسفه في الفيزياء', NULL, 'عقد', NULL, 'صباحي', '2021-01-02 00:00:00', NULL, 'عراقي', NULL, 'بغداد', NULL, '49', 'ملكية جعفر', '440', '20', NULL, NULL, NULL, '', 'information about doctor ', 'imagesprof.png'),
(62, 'صبيحة قاسم هاشم عباس الموسوي', NULL, NULL, 'الجامعة المستنصرية', NULL, NULL, NULL, 'دكتوراه', NULL, NULL, 'انثى', 'تدريسي', NULL, NULL, '0', 'استاذ', NULL, 'sabiha.kasim@uom.edu.iq', NULL, NULL, 'العراق', NULL, NULL, 'جامعة بغداد', NULL, 'الجامعة المستنصرية', NULL, 'ادارة اعمال', NULL, 'ادارة مالية', NULL, 'عقد', NULL, 'صباحي', '2021-01-04 00:00:00', NULL, 'عراقية', NULL, 'بغداد', NULL, '0', 'صبرية سلمان', '0', '113', NULL, NULL, NULL, '', 'information about doctor ', 'imagesprof.png'),
(63, 'صفا عبد الناصر فاضل', NULL, NULL, 'جامعة النهرين', NULL, NULL, NULL, 'ماجستير', NULL, NULL, 'انثى', 'تدريسي', NULL, NULL, '7726762377', 'مدرس مساعد', NULL, 'safa.an.fadhel@uom.edu.iq', NULL, NULL, 'العراق', '2019-10-22 00:00:00', NULL, 'جامعة النهرين', NULL, 'جامعة بغداد', NULL, 'علوم', NULL, 'تشريح', NULL, 'عقد', NULL, 'صباحي', '2021-02-02 00:00:00', NULL, 'عراقية', NULL, 'بغداد', NULL, '23', 'تاييد فاضل', '401', '14', NULL, NULL, NULL, '', 'information about doctor ', 'imagesprof.png'),
(64, 'صفاء دهام نايف', NULL, NULL, NULL, NULL, NULL, NULL, 'ماجستير', NULL, NULL, 'ذكر', 'تدريسي', NULL, NULL, '7714459714', 'مدرس مساعد', NULL, 'safaa.aliarnan@gmail.com', NULL, NULL, 'الهند', '2019-02-18 00:00:00', NULL, 'جامعة بونا الهند', NULL, 'الجامعة التقنية الوسطى', NULL, 'محاسبة', NULL, 'محاسبة', NULL, 'عقد', NULL, 'صباحي', '2021-01-04 00:00:00', NULL, 'عراقي', NULL, 'بغداد', NULL, '56', 'نيمونه نواف', '638', '94', NULL, NULL, NULL, '', 'information about doctor ', 'imagesprof.png'),
(65, 'طالب عبد صالح ناصر', NULL, NULL, 'جامعة بغداد', NULL, NULL, NULL, 'دكتوراه', NULL, NULL, 'ذكر', 'عميد كلية', NULL, NULL, '7813423417', 'استاذ مساعد', NULL, '0', NULL, NULL, 'العراق', NULL, NULL, 'الجامعة المستنصرية', NULL, 'جامعة بغداد', NULL, 'اقتصاد', NULL, 'اقتصاد كلي', NULL, 'عقد', NULL, 'صباحي', '2021-01-04 00:00:00', NULL, 'عراقي', NULL, 'بغداد', NULL, '38', 'حبسه حسن', '630', '14', NULL, NULL, NULL, '', 'information about doctor ', 'imagesprof.png'),
(66, 'عامر متعب حسين', NULL, NULL, 'جامعة بغداد', NULL, NULL, NULL, 'دكتوراه', NULL, NULL, 'ذكر', 'تدريسي', NULL, NULL, '7717371129', 'استاذ', NULL, 'amer.muttib@uom.edu.iq', NULL, NULL, 'العراق', '2003-09-19 00:00:00', NULL, 'جامعة بغداد', NULL, 'جامعة بغداد', NULL, 'طب بيطري', NULL, 'انسجة طب بيطري', NULL, 'عقد', NULL, 'مسائي', '2021-01-02 00:00:00', NULL, 'عراقي', NULL, 'بغداد', NULL, '49', 'مكية برهان', '39', '22', NULL, NULL, NULL, '', 'information about doctor ', 'imagesprof.png'),
(67, 'عامر موسى علي', NULL, NULL, 'جامعة النهرين', NULL, NULL, NULL, 'دكتوراه', NULL, NULL, 'ذكر', 'مقررا لمجلس الكلية ', NULL, NULL, '7901143107', 'مدرس', NULL, '0', NULL, NULL, 'العراق', '2020-10-18 00:00:00', NULL, '0', NULL, '0', NULL, 'كيمياء حياتية', NULL, 'كيمياء حياتية', NULL, 'عقد', NULL, 'صباحي', '0021/01/22', NULL, 'عراقي', NULL, 'بغداد', NULL, '98', 'رابحة علي', '820', '5', NULL, NULL, NULL, '', 'information about doctor ', 'imagesprof.png'),
(68, 'عباس محمد حسين', NULL, NULL, 'جامعة النيلين في السودان', NULL, NULL, NULL, 'دكتوراه', NULL, NULL, 'ذكر', 'رئيس قسم', NULL, NULL, '7721789814', 'مدرس', NULL, 'abbas.mohammed@uom.edu.iq', NULL, NULL, 'السودان', NULL, NULL, 'جامعة بغداد', NULL, 'جامعة بغداد', NULL, 'ادارة اعمال', NULL, 'ادارة الموارد البشرية', NULL, 'عقد', NULL, 'صباحي', '2021-01-04 00:00:00', NULL, 'عراقي', NULL, 'بغداد', NULL, '0', 'حمدة جميل', '0', '0', NULL, NULL, NULL, '', 'information about doctor ', 'imagesprof.png'),
(69, 'عبد الجبار عبد القادر مخلص', NULL, NULL, 'جامعة برمنكهام', NULL, NULL, NULL, 'دكتوراه', NULL, NULL, 'ذكر', 'تدريسي', NULL, NULL, '772323556', 'استاذ', NULL, 'abdualjabbar223@gmail.com', NULL, NULL, 'جامعة برمنكهام', '1975-03-08 00:00:00', NULL, 'جامعة بغداد', NULL, 'جامعة بغداد', NULL, 'كيمياء', NULL, 'كيمياء الكاربوهيدريد', NULL, 'عقد', NULL, 'صباحي', '2021-07-03 00:00:00', NULL, 'عراقي', NULL, 'بغداد', NULL, '76', 'فضيلة زنيل', '433', '10', NULL, NULL, NULL, '', 'information about doctor ', 'imagesprof.png'),
(70, 'عبد الستار جبار طه', NULL, NULL, 'روسيا', NULL, NULL, NULL, 'دكتوراه', NULL, NULL, 'ذكر', 'تدريسي', NULL, NULL, '0', 'استاذ', NULL, 'abdulsattar.jabbar@uom.edu.iq', NULL, NULL, 'روسيا', '2009-05-09 00:00:00', NULL, 'جامعة بغداد', NULL, 'جامعة بغداد', NULL, 'بايلوجي', NULL, 'بايلوجي', NULL, 'عقد', NULL, 'صباحي', '2021-01-02 00:00:00', NULL, 'عراقي', NULL, 'بغداد', NULL, '1', 'وليدة عبد الله', '655', '8', NULL, NULL, NULL, '', 'information about doctor ', 'imagesprof.png'),
(71, 'عبد السلام محمد خلف', NULL, NULL, 'جامعة الجزيرة في السودان ', NULL, NULL, NULL, 'ماجستير', NULL, NULL, 'ذكر', 'تدريسي', NULL, NULL, '7805616297', 'مدرس مساعد', NULL, 'abdulsalam.mohammed@uom.edu.iq', NULL, NULL, 'السودان', '2019-02-06 00:00:00', NULL, 'جامعة الجزيرة  / كلية الدراسات العليا في السودان', NULL, 'الجامعة العراقية', NULL, 'لغة عربية ', NULL, 'لغة عربيه', NULL, 'عقد', NULL, 'مسائي', '2021-01-02 00:00:00', NULL, 'عراقي', NULL, 'بغداد', NULL, '43', 'شكمه فياض', '893', '17', NULL, NULL, NULL, '', 'information about doctor ', 'imagesprof.png'),
(72, 'عبد القادر شاكر محمود', NULL, NULL, 'جامعة الاسكندريه / مصر', NULL, NULL, NULL, 'ماجستير', NULL, NULL, 'ذكر', 'تدريسي', NULL, NULL, '7701830615', 'مدرس مساعد', NULL, 'abdulqader.shakir@uom.edu.iq', NULL, NULL, 'مصر', NULL, NULL, 'جامعة الاسكندرية', NULL, 'جامعة تكريت', NULL, 'القانون العام', NULL, 'القانون الاداري', NULL, 'عقد', NULL, 'صباحي', '2021-01-02 00:00:00', NULL, 'عراقي', NULL, 'صلاح الدين', NULL, '2', 'انتصار حسين', '13', '41', NULL, NULL, NULL, '', 'information about doctor ', 'imagesprof.png'),
(73, 'عبد الكريم جاسم كاظم', NULL, NULL, 'جامعة بغداد', NULL, NULL, NULL, 'ماجستير', NULL, NULL, 'ذكر', 'تدريسي', NULL, NULL, '0', 'استاذ', NULL, '0', NULL, NULL, 'العراق', '1989-02-19 00:00:00', NULL, 'جامعة بغداد', NULL, 'جامعة بغداد', NULL, 'طب اسنان', NULL, 'معالجة الاسنان', NULL, 'عقد', NULL, 'صباحي', '2021-08-07 00:00:00', NULL, 'عراقي', NULL, 'بغداد', NULL, '39', 'فخرية محمد علي', '611', '51', NULL, NULL, NULL, '', 'information about doctor ', 'imagesprof.png'),
(74, 'عبد الله عباس عبد الله', NULL, NULL, 'جامعة النهرين', NULL, NULL, NULL, 'دكتوراه', NULL, NULL, 'ذكر', 'رئيس قسم', NULL, NULL, '7709426955', 'مدرس', NULL, 'abdullah.abbas@uom.edu.iq', NULL, NULL, 'العراق', '2020-02-16 00:00:00', NULL, 'جامعة بغداد', NULL, '0', NULL, 'احياء مجهرية', NULL, 'احياء مجهرية', NULL, 'عقد', NULL, 'صباحي', '2021-01-02 00:00:00', NULL, 'عراقي', NULL, 'بغداد', NULL, '40', 'سوسن عدنان', '897', '5', NULL, NULL, NULL, '', 'information about doctor ', 'imagesprof.png'),
(75, 'عبد المجيد ظافر مجيد', NULL, NULL, 'نيوكاستل', NULL, NULL, NULL, 'دكتوراه', NULL, NULL, 'ذكر', 'مقرر لقسم التخدير', NULL, NULL, '7809368071', 'مدرس', NULL, 'abdulmajeed.dhafer@uom.edu.iq', NULL, NULL, 'بريطانيا', '2919-08-16 00:00:00', NULL, 'جامعة النهرين', NULL, 'جامعة بغداد', NULL, 'علوم تقنيات الاحيائية ', NULL, 'علوم الاحياء الجزئي والتقانة الاحيائية ', NULL, 'عقد', NULL, 'صباحي', '2021-01-02 00:00:00', NULL, 'عراقي', NULL, 'بغداد', NULL, '20', 'ليلوة محمود', '609', '22', NULL, NULL, NULL, '', 'information about doctor ', 'imagesprof.png'),
(76, 'عبدالرحمن محمود الجميلي', NULL, NULL, 'جامعة كيل - المملكة المتحدة', NULL, NULL, NULL, 'دكتوراه', NULL, NULL, 'ذكر', 'تدريسي', NULL, NULL, '791862839', 'مدرس', NULL, '0', NULL, NULL, 'المملكة المتحدة', '1979-02-14 00:00:00', NULL, 'المملكة المتحدة', NULL, 'جامعة بغداد - كلية التربيه', NULL, 'فيزياء', NULL, 'فيزياء ميزر', NULL, 'عقد', NULL, 'صباحي', '2020-01-01 00:00:00', NULL, 'عراقي', NULL, 'بغداد', NULL, '0', '0', '0', '0', NULL, NULL, NULL, '', 'information about doctor ', 'imagesprof.png'),
(77, 'عثمان مروان عبد', NULL, NULL, 'جامعة الزعيم الازهري في السودان', NULL, NULL, NULL, 'دكتوراه', NULL, NULL, 'ذكر', 'معاون عميد', NULL, NULL, '0', 'مدرس', NULL, 'othman.marwan@baghdadcollge.edu.iq', NULL, NULL, 'العراق', NULL, NULL, 'جامعة النيلين في السودان', NULL, 'جامعة كربلاء', NULL, 'قانون عام', NULL, 'قانون جنائي', NULL, 'عقد', NULL, 'صباحي', '2021-04-01 00:00:00', NULL, 'عراقي', NULL, 'بغداد', NULL, '53', '0', '636', '6', NULL, NULL, NULL, '', 'information about doctor ', 'imagesprof.png'),
(78, 'عدنان صالح محمد', NULL, NULL, 'اكاديمية العلوم المجهرية / بودابست من هناكريا', NULL, NULL, NULL, 'دكتوراه', NULL, NULL, 'ذكر', 'تدريسي', NULL, NULL, '0', 'استاذ', NULL, 'adnan.salih@uom.edu.iq', NULL, NULL, 'هنكاريا', '1990-06-13 00:00:00', NULL, '0', NULL, '0', NULL, 'فيزياء ليزر', NULL, 'فيزياء طبية', NULL, 'عقد', NULL, 'صباحي', '2021-01-02 00:00:00', NULL, 'عراقي', NULL, 'بغداد', NULL, '1', 'مريم حمد', '778', '1', NULL, NULL, NULL, '', 'information about doctor ', 'imagesprof.png'),
(79, 'علاء فاضل خلف', NULL, NULL, 'جامعة الاسكندريه / مصر', NULL, NULL, NULL, 'ماجستير', NULL, NULL, 'ذكر', 'مقررا لمجلس الكلية ', NULL, NULL, '7700718698', 'مدرس مساعد', NULL, 'alaa.fadhil@uom.edu.iq', NULL, NULL, 'مصر', '2017-12-03 00:00:00', NULL, 'جامعة الاسكندرية', NULL, 'جامعة بغداد', NULL, 'قانون', NULL, 'قانون مدني', NULL, 'عقد', NULL, 'مسائي', '2021-01-02 00:00:00', NULL, 'عراقي', NULL, 'بغداد', NULL, '25', 'امل طاهر', '865', '40', NULL, NULL, NULL, '', 'information about doctor ', 'imagesprof.png'),
(80, 'علي عبد الغني عودة', NULL, NULL, 'جامعة البصرة', NULL, NULL, NULL, 'دكتوراه', NULL, NULL, 'ذكر', 'تدريسي', NULL, NULL, '7807765655', 'استاذ', NULL, 'dr.alialiath@gmail.com', NULL, NULL, 'العراق', '2000-02-24 00:00:00', NULL, 'جامعة ويلز', NULL, 'جامعة البصرة', NULL, 'محاسبة', NULL, 'كلفة وادراية', NULL, 'عقد', NULL, 'صباحي', '2021-10-02 00:00:00', NULL, 'عراقي', NULL, 'البصرة', NULL, '2', 'حسيبة حميد', '606', '33', NULL, NULL, NULL, '', 'information about doctor ', 'imagesprof.png'),
(81, 'علي غني عباس', NULL, NULL, 'جامعة تكريت', NULL, NULL, NULL, 'دكتوراه', NULL, NULL, 'ذكر', 'عميد كلية', NULL, NULL, '7715214113', 'استاذ مساعد', NULL, 'ali.gheni.a@uom.edu.iq', NULL, NULL, 'العراق', '2012-11-04 00:00:00', NULL, 'جامعة النهرين', NULL, 'جامعة النهرين', NULL, 'قانون عام', NULL, 'مالية عامة', NULL, 'عقد', NULL, 'صباحي', '2021-09-13 00:00:00', NULL, 'عراقية', NULL, 'بغداد', NULL, '17', 'وزيرة ناصر', 'الصالحية', 'ط ش3ش ع', NULL, NULL, NULL, '', 'information about doctor ', 'imagesprof.png'),
(82, 'عماد مطلوب دللي', NULL, NULL, 'جامعة ليدز', NULL, NULL, NULL, 'دكتوراه', NULL, NULL, 'ذكر', 'تدريسي', NULL, NULL, '7801366963', 'استاذ', NULL, 'imad.matloub50@yahoo.com', NULL, NULL, 'انكلترا', '1980-11-05 00:00:00', NULL, 'جامعة استون', NULL, 'جامعة الموصل', NULL, 'علوم', NULL, 'كيمياء انسجة بشرية', NULL, 'عقد', NULL, 'صباحي', '2021-09-14 00:00:00', NULL, 'عراقي', NULL, 'بغداد', NULL, '23', 'بدرية علي', '608', '1/5', NULL, NULL, NULL, '', 'information about doctor ', 'imagesprof.png'),
(83, 'عمر فارض فوزي', NULL, NULL, 'جامعة بغداد', NULL, NULL, NULL, 'ماجستير', NULL, NULL, 'ذكر', 'تدريسي', NULL, NULL, '7808895808', 'مدرس مساعد', NULL, 'omer.fawiz85@gmail.com', NULL, NULL, 'العراق', '2012-10-10 00:00:00', NULL, 'جامعة بغداد', NULL, 'جامعة بغداد', NULL, 'طب اسنان', NULL, 'طب الفم', NULL, 'ملاك', NULL, 'صباحي', '2021-10-02 00:00:00', NULL, 'عراقي', NULL, 'بغداد', NULL, '12', 'سها رمزي', '25', '4', NULL, NULL, NULL, '', 'information about doctor ', 'imagesprof.png'),
(84, 'عمر هشام فاضل', NULL, NULL, 'جامعة بغداد', NULL, NULL, NULL, 'ماجستير', NULL, NULL, 'ذكر', 'مقرر  قسم التحليلات المرضية ', NULL, NULL, '7812021322', 'مدرس مساعد', NULL, 'omar.husham@uom.edu.iq', NULL, NULL, 'العراق', '2019-03-14 00:00:00', NULL, 'جامعة بغداد', NULL, 'جامعة بغداد', NULL, 'هندسة كيميائية احيائية', NULL, 'هندسة احيائية', NULL, 'عقد', NULL, 'مسائي', '2021-01-02 00:00:00', NULL, 'عراقي', NULL, 'بغداد', NULL, '34', 'فاطمة خزعل', '923', '126', NULL, NULL, NULL, '', 'information about doctor ', 'imagesprof.png'),
(85, 'غفران حمودي عبد', NULL, NULL, 'جامعة نهرين', NULL, NULL, NULL, 'ماجستير', NULL, NULL, 'انثى', 'تدريسي', NULL, NULL, '0', 'مدرس مساعد', NULL, '0', NULL, NULL, 'العراق', '2016-05-11 00:00:00', NULL, 'جامعة النهرين', NULL, '0', NULL, 'طب وجراحة بيطريه', NULL, 'علوم احياء مجهرية', NULL, 'عقد', NULL, 'مسائي', '2021-01-26 00:00:00', NULL, 'عراقية', NULL, 'بغداد', NULL, '2', 'وليدة عبد الرزاق', '843', '20', NULL, NULL, NULL, '', 'information about doctor ', 'imagesprof.png'),
(86, 'فاطمة عادل علي', NULL, NULL, 'جامعة النهرين ', NULL, NULL, NULL, 'ماجستير', NULL, NULL, 'انثى', 'مقرر مجلس', NULL, NULL, '0', 'مدرس مساعد', NULL, 'fatima.adil@uom.edu.iq', NULL, NULL, 'العراق', NULL, NULL, 'جامعة النهرين', NULL, 'جامعة النهرين', NULL, 'اقتصاديات واعمال', NULL, 'ادارة الاستثمار والموارد', NULL, 'عقد', NULL, 'صباحي', '2021-01-04 00:00:00', NULL, 'عراقية', NULL, 'بغداد', NULL, '15', 'ماجدة حسين', '815', '19', NULL, NULL, NULL, '', 'information about doctor ', 'imagesprof.png'),
(87, 'فراس عبد الودود عبد العزيز', NULL, NULL, 'الجامعة المستنصرية', NULL, NULL, NULL, 'دكتوراه', NULL, NULL, 'ذكر', 'تدريسي', NULL, NULL, '7702522990', 'مدرس', NULL, '0', NULL, NULL, 'العراق', '2012-12-27 00:00:00', NULL, 'الجامعة المستنصرية', NULL, 'الجامعة المستنصرية', NULL, 'كهربائية القلب', NULL, 'كهربائية القلب', NULL, 'عقد', NULL, 'مسائي', '2021-02-06 00:00:00', NULL, 'عراقي', NULL, 'بغداد', NULL, '7', 'بديعة محمد', '445', '9', NULL, NULL, NULL, '', 'information about doctor ', 'imagesprof.png'),
(88, 'فلاح حمد فاضل', NULL, NULL, 'اوكرانيا', NULL, NULL, NULL, 'ماجستير', NULL, NULL, 'ذكر', 'تدريسي', NULL, NULL, '7817175219', 'مدرس مساعد', NULL, 'falah.hamad@uom.edu.iq', NULL, NULL, 'اوكرانيا', '2020-02-06 00:00:00', NULL, 'فلاديميرال اوكرانيا', NULL, 'جامعة الانبار', NULL, 'اقتصاد', NULL, 'اقتصاد دولي', NULL, 'عقد', NULL, 'مسائي', '2021-01-04 00:00:00', NULL, 'عراقي', NULL, 'الأنبار', NULL, '56', 'عمشة حمادي', '303', '23', NULL, NULL, NULL, '', 'information about doctor ', 'imagesprof.png'),
(89, 'كرم يحيى نوح', NULL, NULL, 'كركوك', NULL, NULL, NULL, 'ماجستير', NULL, NULL, 'انثى', 'تدريسي', NULL, NULL, '7730092030', 'مدرس مساعد', NULL, 'karamyahya292@gmail.com', NULL, NULL, 'العراق', '2020-05-17 00:00:00', NULL, 'جامعة كركوك', NULL, 'جامعة كركوك', NULL, 'كيمياء', NULL, 'كيمياء حياتية', NULL, 'عقد', NULL, 'صباحي', '2021-10-02 00:00:00', NULL, 'عراقية', NULL, 'بغداد', NULL, '68', 'هيفاء عبد الوهاب', '893', '28', NULL, NULL, NULL, '', 'information about doctor ', 'imagesprof.png'),
(90, 'كفاية عبود محمد', NULL, NULL, 'جامعة التكنولوجيا ', NULL, NULL, NULL, 'دكتوراه', NULL, NULL, 'انثى', 'تدريسي', NULL, NULL, '7711024661', 'استاذ مساعد', NULL, 'h.h.najm@uom.edu.iq', NULL, NULL, 'العراق', '2001-12-04 00:00:00', NULL, 'الجامعة التكنولوجية', NULL, 'الجامعة التكنولوجيا', NULL, 'الهندسة الصناعية', NULL, 'تصميم وتطبيق', NULL, 'ملاك', NULL, 'صباحي', '2020-01-01 00:00:00', NULL, 'عراقية', NULL, 'بغداد', NULL, '8', 'منار السنا صادق', '12', '7', NULL, NULL, NULL, '', 'information about doctor ', 'imagesprof.png'),
(91, 'كمال هادي ناجي كاطع', NULL, NULL, 'بريطانيا ', NULL, NULL, NULL, 'ماجستير', NULL, NULL, 'ذكر', 'تدريسي', NULL, NULL, '0', 'مدرس', NULL, 'kamalhadi@uom.edu.iq', NULL, NULL, 'بريطانيا', '1982-02-09 00:00:00', NULL, 'سترتكلايد بريطانيا', NULL, '0', NULL, 'ااحصاء', NULL, 'احصاء رياضي', NULL, 'عقد', NULL, 'مسائي', '2021-01-04 00:00:00', NULL, 'عراقي', NULL, 'بغداد', NULL, '4', 'حميده احمد', '602', '7', NULL, NULL, NULL, '', 'information about doctor ', 'imagesprof.png'),
(92, 'لمى محمود عيدان', NULL, NULL, 'النهرين', NULL, NULL, NULL, 'ماجستير', NULL, NULL, 'انثى', 'تدريسي', NULL, NULL, '781045224', 'مدرس مساعد', NULL, 'luma.mahmood@uom.edu.iq', NULL, NULL, 'العراق', NULL, NULL, 'جامعة النهرين', NULL, 'كلية بغداد لللصيدلة', NULL, 'صيدلة', NULL, 'ادوية', NULL, 'عقد', NULL, 'صباحي', '2021-01-05 00:00:00', NULL, 'عراقية', NULL, 'بغداد', NULL, '15', 'زينب رضا', '614', '29', NULL, NULL, NULL, '', 'information about doctor ', 'imagesprof.png'),
(93, 'ليان حازم سعيد', NULL, NULL, 'الحكمة في لبنان', NULL, NULL, NULL, 'ماجستير', NULL, NULL, 'انثى', 'تدريسي', NULL, NULL, '7713979087', 'مدرس مساعد', NULL, 'lyan.hazlm@uom.edu.iq', NULL, NULL, 'لبنان', '2018-03-21 00:00:00', NULL, 'جامعة الحكمة في لبنان', NULL, 'كلية المنصور الجامعة', NULL, 'قانون عام', NULL, 'قانون اداري', NULL, 'عقد', NULL, 'صباحي', '2021-01-02 00:00:00', NULL, 'عراقية', NULL, 'بغداد', NULL, '26', 'لهيب جاسم', '635', '23', NULL, NULL, NULL, '', 'information about doctor ', 'imagesprof.png'),
(94, 'ليث محمود كريم خضير', NULL, NULL, 'جامعة كاردف ويلز البريطانية', NULL, NULL, NULL, 'دكتوراه', NULL, NULL, 'ذكر', 'تدريسي', NULL, NULL, '7702567886', 'استاذ', NULL, 'laeth.mahood@uom.edu.iq', NULL, NULL, 'بريطانيا', '2007-06-06 00:00:00', NULL, '0', NULL, 'الجامعة المستنصرية', NULL, 'فيزياء طبية', NULL, 'فيزياء طبيه', NULL, 'عقد', NULL, 'صباحي', '2021-01-02 00:00:00', NULL, 'عراقي', NULL, 'بغداد', NULL, '25', 'رشيدة فهد فدعوس', '213', '3', NULL, NULL, NULL, '', 'information about doctor ', 'imagesprof.png'),
(95, 'لينا محمد جعفر', NULL, NULL, 'بغداد', NULL, NULL, NULL, 'ماجستير', NULL, NULL, 'انثى', 'تدريسي', NULL, NULL, '7827313334', 'مدرس مساعد', NULL, 'lina.m.jaafar@uom.edu.iq', NULL, NULL, 'العراق', NULL, NULL, 'جامعة بغداد', NULL, 'الجامعة التكنلوجية', NULL, 'هندسة', NULL, 'هندسة وراثية والتقنيات الاحيائية', NULL, 'عقد', NULL, 'صباحي', '2021-01-03 00:00:00', NULL, 'عراقية', NULL, 'بغداد', NULL, '12', 'لمياء عبد الامير', '215', '16', NULL, NULL, NULL, '', 'information about doctor ', 'imagesprof.png'),
(96, 'مالك دحام متعب', NULL, NULL, 'جامعة النهرين', NULL, NULL, NULL, 'دكتوراه', NULL, NULL, 'ذكر', 'تدريسي', NULL, NULL, '0', 'استاذ مساعد', NULL, 'malik.dahham@uom.edu.iq', NULL, NULL, 'العراق', '2010-12-03 00:00:00', NULL, 'جامعة بغداد', NULL, 'جامعة بغداد', NULL, 'علوم سياسية ', NULL, 'علوم سياسية', NULL, 'عقد', NULL, 'مسائي', '2021-01-02 00:00:00', NULL, 'عراقي', NULL, 'بغداد', NULL, '21', 'حدوده احمد', '617', '6', NULL, NULL, NULL, '', 'information about doctor ', 'imagesprof.png'),
(97, 'مثنى كمال علي', NULL, NULL, 'جامعة بغداد', NULL, NULL, NULL, 'ماجستير', NULL, NULL, 'ذكر', 'مقررا لمجلس الكلية ', NULL, NULL, '7702742021', 'مدرس مساعد', NULL, 'muthanna.kamal@uom.edu.iq', NULL, NULL, 'العراق', '2008-08-09 00:00:00', NULL, 'جامعة بغداد', NULL, 'جامعة بغداد', NULL, 'طب الاسنان', NULL, 'امراض الفم', NULL, 'عقد', NULL, 'صباحي', '2021-01-03 00:00:00', NULL, 'عراقي', NULL, 'بغداد', NULL, '36', 'حمديه طه', '326', '40', NULL, NULL, NULL, '', 'information about doctor ', 'imagesprof.png'),
(98, 'محمد درع احمد', NULL, NULL, 'جامعة الشرق الاوسط الاردنيه', NULL, NULL, NULL, 'ماجستير', NULL, NULL, 'ذكر', 'مقرر قسم', NULL, NULL, '782376212', 'مدرس مساعد', NULL, 'mohammad.d.ahmed@uom.edu.iq', NULL, NULL, 'الاردن', '2017-02-07 00:00:00', NULL, 'جامعة الشرق الاوسط الاردن', NULL, 'كلية المنصور الاهلية', NULL, 'ادارة اعمال', NULL, 'ادارة موارد بشرية', NULL, 'عقد', NULL, 'مسائي ', '2021-01-04 00:00:00', NULL, 'عراقي', NULL, 'بغداد', NULL, '28', 'غازية جدعان', '628', '17', NULL, NULL, NULL, '', 'information about doctor ', 'imagesprof.png');
INSERT INTO `doctors` (`id`, `name_ar`, `name_en`, `university_certified_en`, `university_certified_ar`, `facutly_certified_ar`, `facutly_certified_en`, `certified_en`, `certified_ar`, `birthday`, `gender_en`, `gender_ar`, `position_ar`, `grade_en`, `password`, `phone`, `grade_ar`, `posiotion_en`, `email`, `details_en`, `notes_ar`, `country_certified_ar`, `date_certified`, `mag_certified_en`, `mag_certified_ar`, `bac_certified_en`, `bac_certified_ar`, `country_certified_en`, `public_specific_ar`, `public_specific_en`, `private_specific_ar`, `private_specific_en`, `type_hirement_ar`, `type_hirement_en`, `shift_ar`, `date_hirement`, `shift_en`, `Nationality_ar`, `Nationality_en`, `country_ar`, `country_en`, `comrades`, `mother_name_ar`, `local`, `darcode`, `mother_name_en`, `id_facutly`, `id_department`, `notes_en`, `details_ar`, `image`) VALUES
(99, 'محمد عبد الخالق كاظم شبيب', NULL, NULL, 'جامعة بغداد', NULL, NULL, NULL, 'ماجستير', NULL, NULL, 'ذكر', 'تدريسي', NULL, NULL, '7702618155', 'مدرس مساعد', NULL, 'mohamed.abdakalek@uom.edu.iq', NULL, NULL, 'العراق', '2008-04-15 00:00:00', NULL, 'جامعة بغداد', NULL, 'جامعة بغداد', NULL, 'طب وجراحة الاسنان', NULL, 'اشعة الفم', NULL, 'عقد', NULL, 'صباحي', '2021-01-02 00:00:00', NULL, 'عراقي', NULL, 'بغداد', NULL, '7', 'حمديه فاضل', '712', '3\\1', NULL, NULL, NULL, '', 'information about doctor ', 'imagesprof.png'),
(100, 'محمد عبد الرحمن حسين', NULL, NULL, NULL, NULL, NULL, NULL, 'ماجستير', NULL, NULL, 'ذكر', 'تدريسي', NULL, NULL, '7512640826', 'مدرس مساعد', NULL, 'mohammed.a.h@uom.edu.iq', NULL, NULL, 'السودان', NULL, NULL, 'جامعة النيلين في السودان', NULL, 'الجامعة العراقية', NULL, 'اللغة العربية', NULL, 'علم اللغة', NULL, 'عقد', NULL, 'صباحي', '2021-01-04 00:00:00', NULL, 'عراقي', NULL, 'بغداد', NULL, '25', 'انتصار محمد', '60', '61', NULL, NULL, NULL, '', 'information about doctor ', 'imagesprof.png'),
(101, 'محمد عبد الستار عبد الجبار', NULL, NULL, 'مانجستر', NULL, NULL, NULL, 'دكتوراه', NULL, NULL, 'ذكر', 'تدريسي', NULL, NULL, '70918124', 'استاذ', NULL, 'mshaickly', NULL, NULL, 'مانجستر', '1974-01-01 00:00:00', NULL, 'مانجستر', NULL, 'جامعة بغداد', NULL, 'فيزياء', NULL, 'فيزياء حيويه اشعاعيه', NULL, 'عقد', NULL, 'صباحي', '2021-09-01 00:00:00', NULL, 'عراقي', NULL, 'بغداد', NULL, '2', 'منيرة عبدالكريم', '653', '6', NULL, NULL, NULL, '', 'information about doctor ', 'imagesprof.png'),
(102, 'مروان سعد ابراهيم', NULL, NULL, 'المستنصرية', NULL, NULL, NULL, 'ماجستير', NULL, NULL, 'ذكر', 'تدريسي', NULL, NULL, '772548655', 'مدرس مساعد', NULL, 'h.h.najm@uom.edu.iq', NULL, NULL, 'العراق', '2012-10-04 00:00:00', NULL, 'جامعة بغداد', NULL, 'الجامعة المستنصرية', NULL, 'صيدلة', NULL, 'سريرية', NULL, 'ملاك', NULL, 'صباحي', '2020-10-02 00:00:00', NULL, 'عراقي', NULL, 'بغداد', NULL, '5', 'منى مجيد', '4', '12', NULL, NULL, NULL, '', 'information about doctor ', 'imagesprof.png'),
(103, 'مروة سامي كزار', NULL, NULL, 'بغداد', NULL, NULL, NULL, 'ماجستير', NULL, NULL, 'انثى', 'تدريسي', NULL, NULL, '7807823604', 'مدرس مساعد', NULL, 'marwah.s.kzar@uom.edu.iq', NULL, NULL, 'العراق', '2012-02-29 00:00:00', NULL, 'جامعة بغداد', NULL, 'جامعة بغداد', NULL, 'طب بيطري', NULL, 'الامراض', NULL, 'عقد', NULL, 'صباحي', '2021-01-04 00:00:00', NULL, 'عراقية', NULL, 'بغداد', NULL, '87', 'سميرة حسين', '648', '2-1-1900', NULL, NULL, NULL, '', 'information about doctor ', 'imagesprof.png'),
(104, 'مروة محمود اسماعيل', NULL, NULL, 'جامعة الجنان - لبنان', NULL, NULL, NULL, 'ماجستير', NULL, NULL, 'انثى', 'تدريسي', NULL, NULL, '0', 'مدرس مساعد', NULL, '0', NULL, NULL, 'لبنان', NULL, NULL, 'جامعة الجنان في لبنان', NULL, 'كلية المأمون الجامعة', NULL, 'ادارة اعمال', NULL, 'تسويق الكتروني', NULL, 'عقد', NULL, 'صباحي + مسائي', '2021-01-02 00:00:00', NULL, 'عراقية', NULL, 'بغداد', NULL, '25', 'نضال صبري', '827', '14', NULL, NULL, NULL, '', 'information about doctor ', 'imagesprof.png'),
(105, 'مصطفى احمد داود سلمان', NULL, NULL, 'جامعة ديالى', NULL, NULL, NULL, 'ماجستير', NULL, NULL, 'ذكر', 'تدريسي', NULL, NULL, '7716060616', 'مدرس مساعد', NULL, 'mostafa1993151@gmail.com', NULL, NULL, 'العراق', '2018-04-26 00:00:00', NULL, 'جامعة ديالى', NULL, 'جامعة ديالى', NULL, 'احياء مجهرية', NULL, 'فايروسات', NULL, 'عقد', NULL, 'صباحي', '2021-10-02 00:00:00', NULL, 'عراقي', NULL, 'بغداد', NULL, 'العبارة', 'سحر احمد', 'بعقوبة', 'قرية السواعد', NULL, NULL, NULL, '', 'information about doctor ', 'imagesprof.png'),
(106, 'مصلح حسن احمد', NULL, NULL, '0', NULL, NULL, NULL, 'دكتوراه', NULL, NULL, 'ذكر', 'تدريسي', NULL, NULL, '0', 'استاذ', NULL, 'musleh.h.a@uom.edu.iq', NULL, NULL, 'العراق', NULL, NULL, '0', NULL, '0', NULL, 'قانون عام', NULL, 'قانون دولي عام', NULL, 'عقد', NULL, 'صباحي', '2021-03-01 00:00:00', NULL, 'عراقي', NULL, 'بغداد', NULL, '53', 'سعده ابراهيم', '636', '6', NULL, NULL, NULL, '', 'information about doctor ', 'imagesprof.png'),
(107, 'مهند احمد مزهر', NULL, NULL, NULL, NULL, NULL, NULL, 'ماجستير', NULL, NULL, 'ذكر', 'تدريسي', NULL, NULL, '7704772855', 'مدرس مساعد', NULL, 'mohanad.ahmed@uom.edu.iq', NULL, NULL, 'تركيا', NULL, NULL, 'جامعة النهرين', NULL, 'جامعة بغداد', NULL, 'هندسة', NULL, 'هندسة حاسبات', NULL, 'عقد', NULL, 'صباحي', '2021-01-02 00:00:00', NULL, 'عراقية', NULL, 'بغداد', NULL, '88', 'منى ياسين', '438', '4', NULL, NULL, NULL, '', 'information about doctor ', 'imagesprof.png'),
(108, 'مياسة مثنى خالد', NULL, NULL, 'جامعة بغداد', NULL, NULL, NULL, 'ماجستير', NULL, NULL, 'انثى', 'تدريسي', NULL, NULL, '7731182332', 'مدرس مساعد', NULL, 'maeassa.muthna@uom.edu.iq', NULL, NULL, 'العراق', '2019-01-31 00:00:00', NULL, 'جامعة النهرين', NULL, 'جامعة النهرين', NULL, 'هندسة وراثية', NULL, 'هندسة الوراثية والتقنيات الاحيائية', NULL, 'عقد', NULL, 'صباحي', '2021-01-02 00:00:00', NULL, 'عراقية', NULL, 'بغداد', NULL, '0', 'ميادة محمد', '840', '11', NULL, NULL, NULL, '', 'information about doctor ', 'imagesprof.png'),
(109, 'ميساء علي عبد الخالق الشكرجي', NULL, NULL, 'جامعة النهرين', NULL, NULL, NULL, 'دكتوراه', NULL, NULL, 'انثى', 'تدريسي', NULL, NULL, '7739088781', 'استاذ مساعد', NULL, 'maysaa_ali2a@yahoo.com', NULL, NULL, 'العراق', '2015-12-01 00:00:00', NULL, 'جامعة النهرين', NULL, 'الجامعة المستنصرية', NULL, 'فلسفة', NULL, 'علم الادوية', NULL, 'ملاك', NULL, 'صباحي', '2021-02-09 00:00:00', NULL, 'عراقية', NULL, 'بغداد', NULL, '0', 'انعام عبد العزيز', '27', '22', NULL, NULL, NULL, '', 'information about doctor ', 'imagesprof.png'),
(110, 'نافع عزيز عويد', NULL, NULL, 'جامعة لندن ', NULL, NULL, NULL, 'ماجستير', NULL, NULL, 'ذكر', 'تدريسي', NULL, NULL, '7902510146', 'استاذ مساعد', NULL, 'nafi.alani@yahoo.com', NULL, NULL, 'بريطانيا', '1983-12-10 00:00:00', NULL, 'جامعة لندن', NULL, 'جامعة بغداد', NULL, 'طب عام', NULL, 'صحة البيئة والمجتمع', NULL, 'عقد', NULL, 'مسائي', '2021-09-18 00:00:00', NULL, 'عراقي', NULL, 'بغداد', NULL, '46', 'مدنية توفيق', '832', '17', NULL, NULL, NULL, '', 'information about doctor ', 'imagesprof.png'),
(111, 'نور الهدى منذر احمد', NULL, NULL, 'جامعة بغداد', NULL, NULL, NULL, 'ماجستير', NULL, NULL, 'انثى', 'تدريسي', NULL, NULL, '7809436340', 'مدرس مساعد', NULL, 'alhuda.noor1818@gmail.com', NULL, NULL, 'العراق', '2019-12-21 00:00:00', NULL, 'جامعة بغداد', NULL, 'جامعة بغداد', NULL, 'علوم - احياء مجهرية', NULL, 'احياء مجهرية', NULL, 'عقد', NULL, 'صباحي', '2021-09-13 00:00:00', NULL, 'عراقية', NULL, 'ديالى', NULL, 'الغربية', 'سعاد عباس', 'الخالص', 'الغربية', NULL, NULL, NULL, '', 'information about doctor ', 'imagesprof.png'),
(112, 'هالة حسن مطشر', NULL, NULL, 'جامعة بغداد', NULL, NULL, NULL, 'دكتوراه', NULL, NULL, 'انثى', 'تدريسي', NULL, NULL, '7706257821', 'مدرس', NULL, 'halabotany_198795@yahoo.com', NULL, NULL, 'العراق', '2019-09-23 00:00:00', NULL, 'جامعة المستنصرية', NULL, 'جامعة بغداد', NULL, 'علوم عقاقير', NULL, 'علوم عقاقير', NULL, 'عقد', NULL, 'صباحي', '2021-10-02 00:00:00', NULL, 'عراقية', NULL, 'بغداد', NULL, '20', 'مريم عبود', '602', '12', NULL, NULL, NULL, '', 'information about doctor ', 'imagesprof.png'),
(113, 'هاله كمال محسن', NULL, NULL, 'جامعة النهرين', NULL, NULL, NULL, 'دكتوراه', NULL, NULL, 'انثى', 'تدريسي', NULL, NULL, '7709707874', 'مدرس', NULL, 'halah.kamal@uom.edu.iq', NULL, NULL, 'العراق', '2021-01-10 00:00:00', NULL, 'جامعة بغداد', NULL, 'جامعة بغداد', NULL, 'تقنيات احيائية', NULL, 'تقنيات احيائية', NULL, 'عقد', NULL, 'صباحي', '2021-01-02 00:00:00', NULL, 'عراقية', NULL, 'بغداد', NULL, '37', 'امل خضير علي', '923', '15', NULL, NULL, NULL, '', 'information about doctor ', 'imagesprof.png'),
(114, 'هبة احمد غني', NULL, NULL, 'جامعة بغداد', NULL, NULL, NULL, 'دكتوراه', NULL, NULL, 'انثى', 'تدريسي', NULL, NULL, '7734154653', 'مدرس مساعد', NULL, 'hiba.a.g@uom.edu.iq', NULL, NULL, 'العراق', NULL, NULL, 'جامعة بغداد', NULL, 'جامعة بغداد', NULL, 'علوم كيمياء', NULL, 'كيمياء الاعضوية عامة', NULL, 'عقد', NULL, 'صباحي', '2021-03-03 00:00:00', NULL, 'عراقية', NULL, 'بغداد', NULL, '82', 'سهام توفيق', '615', '7', NULL, NULL, NULL, '', 'information about doctor ', 'imagesprof.png'),
(115, 'هبه عبد الكريم سلمان', NULL, NULL, 'جامعة بغداد', NULL, NULL, NULL, 'ماجستير', NULL, NULL, 'انثى', 'تدريسي', NULL, NULL, '7901511378', 'مدرس مساعد', NULL, 'hiba.abdul-k.s@uom.edu.iq', NULL, NULL, 'العراق', '2010-04-06 00:00:00', NULL, 'جامعة بغداد', NULL, 'جامعة بغداد', NULL, 'طب اسنان', NULL, 'معالجة اسنان', NULL, 'عقد', NULL, 'صباحي', '2021-03-03 00:00:00', NULL, 'عراقية', NULL, 'بغداد', NULL, '4', 'ابتهال محمد', '715', '18', NULL, NULL, NULL, '', 'information about doctor ', 'imagesprof.png'),
(116, 'هند صهيب صديق', NULL, NULL, 'نهرين', NULL, NULL, NULL, 'ماجستير', NULL, NULL, 'ذكر', 'تدريسي', NULL, NULL, '7704535340', 'مدرس مساعد', NULL, 'hind.suheb@uom.edu.iq', NULL, 'دوام جزئي', 'العراق', '2019-10-22 00:00:00', NULL, 'جامعة النهرين', NULL, 'جامعة النهرين', NULL, 'علوم كيمياء /لاعضوية عامة', NULL, 'علوم كيمياء/لاعضوية', NULL, 'عقد', NULL, 'مسائي', '2021-01-02 00:00:00', NULL, 'عراقية', NULL, 'بغداد', NULL, '22', 'اسراء عبد الله', '616', '21', NULL, NULL, NULL, '', 'information about doctor ', 'imagesprof.png'),
(117, 'ورود باسم نور', NULL, NULL, 'جامعة بغداد', NULL, NULL, NULL, 'دكتوراه', NULL, NULL, 'انثى', 'امين مجلس الكلية', NULL, NULL, '7818055699', 'مدرس', NULL, 'wurood.basim@uom.edu.iq', NULL, NULL, 'العراق', '2019-03-25 00:00:00', NULL, 'جامعة بغداد', NULL, 'جامعة بغداد', NULL, 'احصاء', NULL, 'احصاء رياضي والمعوليه', NULL, 'عقد', NULL, 'مسائي', '2021-01-04 00:00:00', NULL, 'عراقية', NULL, 'بغداد', NULL, '1304', 'سميرة طالب', '877', '3\\18', NULL, NULL, NULL, '', 'information about doctor ', 'imagesprof.png'),
(118, ' ياسر محمد علي ', NULL, NULL, 'جامعة سرني ', NULL, NULL, NULL, 'دكتوراه', NULL, NULL, 'ذكر', 'تدريسي', NULL, NULL, '0', 'مدرس', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'طب بيطري ', NULL, 'ادوية', NULL, NULL, NULL, 'صباحي', '2021-03-01 00:00:00', NULL, NULL, NULL, 'بغداد', NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, '', 'information about doctor ', 'imagesprof.png'),
(119, 'احمد عصام مهدي  ', NULL, NULL, '0', NULL, NULL, NULL, 'ماجستير', NULL, NULL, 'ذكر', 'تدريسي', NULL, NULL, NULL, 'مدرس مساعد', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'تكنولوجيا المعلومات', NULL, 'تكنولوجيا المعلومات', NULL, NULL, NULL, '0', '2021-10-25 00:00:00', NULL, NULL, NULL, 'بغداد', NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, '', 'information about doctor ', 'imagesprof.png'),
(120, 'فرح علي داود ', NULL, NULL, '0', NULL, NULL, NULL, 'ماجستير', NULL, NULL, NULL, 'تدريسي', NULL, NULL, NULL, 'مدرس مساعد', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'كيمياء ', NULL, 'كيمياء تحليلية', NULL, NULL, NULL, '0', '2021-01-16 00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 'information about doctor ', 'imagesprof.png'),
(121, 'محمد عبدالحميد يونس ', NULL, NULL, '0', NULL, NULL, NULL, 'دكتوراه', NULL, NULL, NULL, 'تدريسي', NULL, NULL, NULL, 'استاذ مساعد', NULL, NULL, NULL, 'دوام جزئي', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'الفسلجة الطبية ', NULL, 'الفسلجة الطبية ', NULL, NULL, NULL, NULL, '2021-11-07 00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 'information about doctor ', 'imagesprof.png'),
(122, 'محمد جواد محمد علي ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'تدريسي', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'دوام جزئي', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'طب', NULL, NULL, NULL, NULL, '2021-11-01 00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 'information about doctor ', 'imagesprof.png'),
(123, 'اثير طه محمد  احمد', NULL, NULL, NULL, NULL, NULL, NULL, 'دكتوراه', NULL, NULL, NULL, 'تدريسي', NULL, NULL, NULL, 'استاذ مساعد ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'قانون', NULL, 'قانون عام', NULL, NULL, NULL, '0', '2021-12-01 00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 'information about doctor ', 'imagesprof.png'),
(125, 'name', 'name', 'university_certified', 'الجامعه الحاصل منها علي الشهاده', 'الكلية الحاصل منها علي الشهاده', 'facutly_certified', 'certified', 'الشهاده', '2022-01-21', NULL, NULL, NULL, '12', NULL, NULL, '12', NULL, 'brettyangle480@gmail.com', 'jdvnjvnxj n', 'ملاحظات', 'Bangladesh', '2021-12-09', 'university of mag_certified', 'الجامعه الحاصل منها علي المجاستير', 'university of bac_certified', 'جامعه الحاصل منها علي الدكتوراه', NULL, 'التخصص العام', 'public_specific', 'التخصص الدقيق', 'private_specific', 'نوع التعيين', 'type_hirement', 'صباحي', NULL, 'night', 'الألبانية', NULL, NULL, 'Albania', '54', 'اسم الام', '54851', '1555', 'mother_name', 1, 5, 'notes', 'التفاصيل', NULL),
(127, 'name', 'name', 'university_certified', 'الجامعه الحاصل منها علي الشهاده', 'الكلية الحاصل منها علي الشهاده', 'facutly_certified', 'certified', 'الشهاده', '2022-01-28', 'male', 'ذكر', 'المنصب الحالي', '12', NULL, NULL, '12', 'position', 'brettyangle480@gmail.com', 'jdvnjvnxj n', 'ملاحظات', 'أورجواي', '2022-01-19', 'university of mag_certified', 'الجامعه الحاصل منها علي المجاستير', 'university of bac_certified', 'جامعه الحاصل منها علي الدكتوراه', 'Bahamas', 'التخصص العام', 'public_specific', 'التخصص الدقيق', 'private_specific', 'نوع التعيين', 'type_hirement', '0', NULL, 'morning', 'جزائري', 'afghan', NULL, 'Albania', '54', 'اسم الام', '54851', '1555', 'mother_name', 1, 6, 'notes', 'التفاصيل', 'images/20220127110630.jfif'),
(130, 'ابتسام نايف عودة', 'ebtesam naïve 3oda', 'university_certified', 'جامعة المستنصريه', 'الكلية الحاصل منها علي الشهاده', 'facutly_certified', 'certified', 'ماجستير', '2022-01-21', NULL, NULL, 'تدريسي', '12', NULL, '7901611481', 'مدرس مساعد', NULL, 'abtsam.naeif@uom.edu.iq', 'jdvnjvnxj n', NULL, '0', NULL, 'university of mag_certified', 'الجامعة المستنصرية', 'university of bac_certified', '0', 'Afganistan', 'احياء مجهرية', 'public_specific', 'احياء مجهرية', 'private_specific', 'عقد', 'type_hirement', NULL, NULL, NULL, NULL, NULL, '0', '0', '4', 'فائزة ياسين', '606', '38', 'mother_name', NULL, NULL, 'notes', 'information about doctor', 'images/20220127141001.jfif');

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
  `color` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `facutly`
--

INSERT INTO `facutly` (`id`, `name_ar`, `name_en`, `message_ar`, `message_en`, `view_ar`, `view_en`, `image`, `goal_ar`, `goal_en`, `about_facutly_ar`, `about_facutly_en`, `message_dean_ar`, `message_dean_en`, `color`) VALUES
(1, 'كلية القانون', 'low', 'الرساله', 'message', 'رويه', NULL, 'images/20220125074752.jpg', 'الهدف', NULL, 'كليه القانون من اعظم الكليات في الجامعه', 'about faculty', 'رساله', NULL, '#b12020'),
(2, 'الصيدليه', NULL, 'رساله', NULL, 'الرويه', NULL, 'images/download.jpg', 'الهدف', NULL, 'كليه الصيدليه من اعرق الكليات في الجامعات', NULL, 'رساله العميد', NULL, 'green'),
(3, 'كلية التقنيات الطبية والعلوم', NULL, 'الرساله', NULL, 'الرؤيه', NULL, 'images/download.jpg', 'الهدف', NULL, 'كلية التقنيات الطبية والعلوم من افضل الكليات في الجامعات', NULL, 'رساله العميد', NULL, 'blue'),
(4, 'كلية العلوم الادارية', NULL, 'الرساله', NULL, 'الرؤيه', NULL, 'images/download.jpg', 'الهدف', NULL, 'كلية كلية العلوم الادارية من افضل الكليات في الجامعات', NULL, 'رساله العميد', NULL, 'yellow');

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
  `small_image1_en` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mash`
--

INSERT INTO `mash` (`id`, `image`, `image1`, `image2`, `abstract_title_ar`, `abstract_small_ar`, `abstract_details_ar`, `option1_title_ar`, `option2_title_ar`, `option3_title_ar`, `option4_title_ar`, `option1_details_ar`, `option2_details_ar`, `option3_details_ar`, `option4_details_ar`, `option5_title_ar`, `option5_details_ar`, `details_image1_ar`, `details_image2_ar`, `title_image1_ar`, `title_image2_ar`, `title_image_ar`, `vision_ar`, `abstract_title_en`, `abstract_details_en`, `option1_title_en`, `option2_title_en`, `option3_title_en`, `option4_title_en`, `option1_details_en`, `option2_details_en`, `option3_details_en`, `option4_details_en`, `option5_title_en`, `option5_details_en`, `details_image1_en`, `details_image2_en`, `title_image1_en`, `title_image2_en`, `title_image_en`, `vision_en`, `abstract_small_en`, `small_image2_ar`, `small_image1_ar`, `link_image2_ar`, `link_image1_ar`, `small_image2_en`, `small_image1_en`) VALUES
(1, 'images/imgs/header.png', 'images/20220125060401.jfif', 'images/imgs/header.png', 'المشرق', 'نص مصغر', 'من افضل الجامعات في العراق جامعه المشرق من افضل الجامعات', 'Option', 'Option', 'Option', 'Another Option', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard', 'Another Option', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard', 'الكلياااااااااااااااااااااااااااااااات من اعظم الجامعه ف العراق', 'الكليه من اعظم الكليات', 'Almashriq Is Not Just Education\r\n', 'المشرق لا تعليم', NULL, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis in praesentium deserunt laborum delectus iure libero? Officia ducimus eum ea beatae iusto quo ut repudiandae nulla, soluta voluptates qui perspiciatis dolores rerum nostrum libero tempora deserunt recusandae odit vitae. Ea?', 'AlMashriq', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, illo laboriosam? Recusandae itaque voluptate', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galle', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galle', 'Almashriq Is Not Just Education', 'Almashriq Is Not Just Education', NULL, NULL, 'small', 'جدا نص صغير', 'نص صغير', 'download.pdf', 'download.pdf', 'small text 2', 'small text');

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
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `id_doctor` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `socialmedia`
--

INSERT INTO `socialmedia` (`id`, `name_ar`, `name_en`, `link`, `id_doctor`) VALUES
(1, 'فيس بوك', 'facebook', NULL, 1),
(3, 'color', 'fax', 'https://www.facebook.com/', 1);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `code` int(11) NOT NULL,
  `name_ar` varchar(255) DEFAULT NULL,
  `name_en` varchar(255) DEFAULT NULL,
  `level_ar` varchar(255) DEFAULT NULL,
  `level_en` varchar(255) DEFAULT NULL,
  `pdf` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `image_leaderword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `university`
--

INSERT INTO `university` (`id`, `about_ar`, `requirement_ar`, `haram_abstract_ar`, `haram_sometext_ar`, `haram_details_ar`, `doctors_details_ar`, `leardercapital_ar`, `patent_details_ar`, `tuitionfeestable_ar`, `vision_ar`, `word_ar`, `image_leaderword`) VALUES
(1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis in molestias ad. Aut qui dolor possimus eligendi, necessitatibus eum exercitationem esse debitis corporis nostrum sed libero molestiae ratione iste, molestias maxime id, ad ipsam quis quos? Tenetur, iure dolorum amet excepturi quos veniam eveniet delectus, sunt fugit vitae laboriosam autem laborum adipisci maxime hic officiis? Ducimus, quibusdam ea commodi sequi nemo excepturi exercitationem eum tempora sapiente, porro magnam id enim distinctio expedita corrupti modi at officiis ab suscipit? Qui molestias accusantium possimus minima atque vitae similique, cupiditate illum recusandae eius voluptatem sint, magnam mollitia ipsam excepturi unde, magni molestiae ipsa?\r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Vero eum quisquam, sapiente id rem neque mollitia cum quis provident aspernatur facere totam omnis inventore quibusdam delectus quaerat facilis tempora natus?\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Vero eum quisquam, sapiente id rem neque mollitia cum quis provident aspernatur facere totam omnis inventore quibusdam delectus quaerat facilis tempora natus?\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Vero eum quisquam, sapiente id rem neque mollitia cum quis provident aspernatur facere totam omnis inventore quibusdam delectus quaerat facilis tempora natus?', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam est ratione architecto esse nesciunt delectus sunt vel minus quia, eaque necessitatibus cum fugiat totam voluptates unde beatae itaque, tempore tempora!\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam est ratione architecto esse nesciunt delectus sunt vel minus quia, eaque necessitatibus cum fugiat totam voluptates unde beatae itaque, tempore tempora!\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam est ratione architecto esse nesciunt delectus sunt vel minus quia, eaque necessitatibus cum fugiat totam voluptates unde beatae itaque, tempore tempora!', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias similique totam veniam adipisci?', 'Text', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatem architecto cumque eos a tempore velit! Architecto aliquid veniam deleniti ad ut alias animi ex obcaecati enim fuga beatae excepturi, optio dolorum, hic nostrum nisi dicta a eaque expedita quis voluptas vero? Veritatis illum earum totam repellat. Nobis laboriosam ex deleniti ipsam id, maiores dolorum fugit non delectus ipsa magnam? Sunt.', '  <table class=\"table table-striped\">\r\n     <thead>\r\n      <tr>\r\n       <th scope=\"col\">#</th>\r\n       <th scope=\"col\">First</th>\r\n       <th scope=\"col\">Last</th>\r\n       <th scope=\"col\">Handle</th>\r\n      </tr>\r\n     </thead>\r\n     <tbody>\r\n      <tr>\r\n       <th scope=\"row\">1</th>\r\n       <td>Mark</td>\r\n       <td>Otto</td>\r\n       <td>@mdo</td>\r\n      </tr>\r\n      <tr>\r\n       <th scope=\"row\">2</th>\r\n       <td>Jacob</td>\r\n       <td>Thornton</td>\r\n       <td>@fat</td>\r\n      </tr>\r\n      <tr>\r\n       <th scope=\"row\">3</th>\r\n       <td>Larry</td>\r\n       <td>the Bird</td>\r\n       <td>@twitter</td>\r\n      </tr>\r\n     </tbody>\r\n    </table>', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi quo, accusantium quas nulla dolorum aspernatur voluptates ea mollitia dolor earum reiciendis minima suscipit ratione placeat iure assumenda tempore perferendis? Earum blanditiis, illum reprehenderit aperiam laudantium dolore odio maxime exercitationem nulla! Incidunt corrupti, ea recusandae non sapiente delectus. Culpa iusto totam assumenda tempore nostrum quis exercitationem! Minima expedita quaerat id est.', 'Quisquam vel ut sint cum eos hic dolores aperiam. Sed deserunt et. Inventore et et dolor consequatur itaque ut voluptate sed et. Magnam nam ipsu m tenetur suscipit voluptatum nam et est corrupti.', ' <table class=\"table\">\r\n    <thead class=\"thead-dark\">\r\n     <tr>\r\n      <th scope=\"col\">#</th>\r\n      <th scope=\"col\">First</th>\r\n      <th scope=\"col\">Last</th>\r\n      <th scope=\"col\">Handle</th>\r\n     </tr>\r\n    </thead>\r\n    <tbody>\r\n     <tr>\r\n      <th scope=\"row\">1</th>\r\n      <td>Mark</td>\r\n      <td>Otto</td>\r\n      <td>@mdo</td>\r\n     </tr>\r\n     <tr>\r\n      <th scope=\"row\">2</th>\r\n      <td>Jacob</td>\r\n      <td>Thornton</td>\r\n      <td>@fat</td>\r\n     </tr>\r\n     <tr>\r\n      <th scope=\"row\">3</th>\r\n      <td>Larry</td>\r\n      <td>the Bird</td>\r\n      <td>@twitter</td>\r\n     </tr>\r\n    </tbody>\r\n   </table>', 'Quisquam vel ut sint cum eos hic dolores aperiam. Sed deserunt et. Inventore et et dolor consequatur itaque ut voluptate sed et. Magnam nam ipsu m tenetur suscipit voluptatum nam et est corrupti.\r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Modi quo, accusantium quas nulla dolorum aspernatur voluptates ea mollitia dolor earum reiciendis minima suscipit ratione placeat iure assumenda tempore perferendis? Earum blanditiis, illum reprehenderit aperiam laudantium dolore odio maxime exercitationem nulla! Incidunt corrupti, ea recusandae non sapiente delectus. Culpa iusto totam assumenda tempore nostrum quis exercitationem! Minima expedita quaerat id est.\r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Modi quo, accusantium quas nulla dolorum aspernatur voluptates ea mollitia dolor earum reiciendis minima suscipit ratione placeat iure assumenda tempore perferendis? Earum blanditiis, illum reprehenderit aperiam laudantium dolore odio maxime exercitationem nulla! Incidunt corrupti, ea recusandae non sapiente delectus. Culpa iusto totam assumenda tempore nostrum quis exercitationem! Minima expedita quaerat id est.', 'Quisquam vel ut sint cum eos hic dolores aperiam. Sed deserunt et. Inventore et et dolor consequatur itaque ut voluptate sed et. Magnam nam ipsu m tenetur suscipit voluptatum nam et est corrupti.\r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Modi quo, accusantium quas nulla dolorum aspernatur voluptates ea mollitia dolor earum reiciendis minima suscipit ratione placeat iure assumenda tempore perferendis? Earum blanditiis, illum reprehenderit aperiam laudantium dolore odio maxime exercitationem nulla! Incidunt corrupti, ea recusandae non sapiente delectus. Culpa iusto totam assumenda tempore nostrum quis exercitationem! Minima expedita quaerat id est.7\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Modi quo, accusantium quas nulla dolorum aspernatur voluptates ea mollitia dolor earum reiciendis minima suscipit ratione placeat iure assumenda tempore perferendis? Earum blanditiis, illum reprehenderit aperiam laudantium dolore odio maxime exercitationem nulla! Incidunt corrupti, ea recusandae non sapiente delectus. Culpa iusto totam assumenda tempore nostrum quis exercitationem! Minima expedita quaerat id est.\r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Modi quo, accusantium quas nulla dolorum aspernatur voluptates ea mollitia dolor earum reiciendis minima suscipit ratione placeat iure assumenda tempore perferendis? Earum blanditiis, illum reprehenderit aperiam laudantium dolore odio maxime exercitationem nulla! Incidunt corrupti, ea recusandae non sapiente delectus. Culpa iusto totam assumenda tempore nostrum quis exercitationem! Minima expedita quaerat id est.\r\n\r\n\r\n\r\n', 'images/imgs/header.png');

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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `usertype`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ali', 'admin', 'ali@gmail.com', '2022-01-12 12:17:19', '$2y$10$mpDiiFxhXLRqeD2mHXwtXO8EkXb9VEnbISki6L5vuvsGKSdIlSTHW', NULL, '2022-01-09 13:13:02', '2022-01-09 13:13:02'),
(2, 'ali1', 'admin', 'ali1@gmail.com', NULL, '$2y$10$Hvcz68Nilu.J.T8Vr6mTg.Giap85cOkU8hh2hnHRimJ2GVPZFbh1S', NULL, '2022-01-09 13:15:22', '2022-01-09 13:15:22'),
(3, 'nehal', NULL, 'brettyangle480@gmail.com', NULL, '$2y$10$Hvcz68Nilu.J.T8Vr6mTg.Giap85cOkU8hh2hnHRimJ2GVPZFbh1S', NULL, '2022-01-12 20:19:31', '2022-01-12 20:19:31'),
(4, 'nehal', NULL, 'brettyangle@gmail.com', NULL, '$2y$10$1B5IhOh3Ggx2mc64emBjaOQ7cYUMgm9LdooDdhQeYwQEdJ2CsW8FO', NULL, '2022-01-23 14:44:22', '2022-01-23 14:44:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `achievement`
--
ALTER TABLE `achievement`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_department` (`id_department`),
  ADD KEY `id_facutly` (`id_facutly`),
  ADD KEY `id_doctor` (`id_doctor`);

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_faculty` (`id_faculty`),
  ADD KEY `id_department` (`id_department`);

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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
  ADD KEY `id_doctor` (`id_doctor`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`code`);

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
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `achievement`
--
ALTER TABLE `achievement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;

--
-- AUTO_INCREMENT for table `facutly`
--
ALTER TABLE `facutly`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `code` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `university`
--
ALTER TABLE `university`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
  ADD CONSTRAINT `achievement_ibfk_5` FOREIGN KEY (`id_doctor`) REFERENCES `doctors` (`id`);

--
-- Constraints for table `activities`
--
ALTER TABLE `activities`
  ADD CONSTRAINT `activities_ibfk_1` FOREIGN KEY (`id_faculty`) REFERENCES `facutly` (`id`),
  ADD CONSTRAINT `activities_ibfk_2` FOREIGN KEY (`id_department`) REFERENCES `department` (`id`);

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
  ADD CONSTRAINT `doctors_ibfk_2` FOREIGN KEY (`id_department`) REFERENCES `department` (`id`);

--
-- Constraints for table `socialmedia`
--
ALTER TABLE `socialmedia`
  ADD CONSTRAINT `socialmedia_ibfk_1` FOREIGN KEY (`id_doctor`) REFERENCES `doctors` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
