-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2023 at 12:04 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `heriworkproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`code`, `name`, `created_at`, `updated_at`) VALUES
('AF', 'Afghanistan', NULL, NULL),
('AX', 'Åland Islands', NULL, NULL),
('AL', 'Albania', NULL, NULL),
('DZ', 'Algeria', NULL, NULL),
('AS', 'American Samoa', NULL, NULL),
('AD', 'Andorra', NULL, NULL),
('AO', 'Angola', NULL, NULL),
('AI', 'Anguilla', NULL, NULL),
('AQ', 'Antarctica', NULL, NULL),
('AG', 'Antigua and Barbuda', NULL, NULL),
('AR', 'Argentina', NULL, NULL),
('AM', 'Armenia', NULL, NULL),
('AW', 'Aruba', NULL, NULL),
('AU', 'Australia', NULL, NULL),
('AT', 'Austria', NULL, NULL),
('AZ', 'Azerbaijan', NULL, NULL),
('BS', 'Bahamas', NULL, NULL),
('BH', 'Bahrain', NULL, NULL),
('BD', 'Bangladesh', NULL, NULL),
('BB', 'Barbados', NULL, NULL),
('BY', 'Belarus', NULL, NULL),
('BE', 'Belgium', NULL, NULL),
('BZ', 'Belize', NULL, NULL),
('BJ', 'Benin', NULL, NULL),
('BM', 'Bermuda', NULL, NULL),
('BT', 'Bhutan', NULL, NULL),
('BO', 'Bolivia, Plurinational State of', NULL, NULL),
('BQ', 'Bonaire, Sint Eustatius and Saba', NULL, NULL),
('BA', 'Bosnia and Herzegovina', NULL, NULL),
('BW', 'Botswana', NULL, NULL),
('BV', 'Bouvet Island', NULL, NULL),
('BR', 'Brazil', NULL, NULL),
('IO', 'British Indian Ocean Territory', NULL, NULL),
('BN', 'Brunei Darussalam', NULL, NULL),
('BG', 'Bulgaria', NULL, NULL),
('BF', 'Burkina Faso', NULL, NULL),
('BI', 'Burundi', NULL, NULL),
('KH', 'Cambodia', NULL, NULL),
('CM', 'Cameroon', NULL, NULL),
('CA', 'Canada', NULL, NULL),
('CV', 'Cape Verde', NULL, NULL),
('KY', 'Cayman Islands', NULL, NULL),
('CF', 'Central African Republic', NULL, NULL),
('TD', 'Chad', NULL, NULL),
('CL', 'Chile', NULL, NULL),
('CN', 'China', NULL, NULL),
('CX', 'Christmas Island', NULL, NULL),
('CC', 'Cocos (Keeling) Islands', NULL, NULL),
('CO', 'Colombia', NULL, NULL),
('KM', 'Comoros', NULL, NULL),
('CG', 'Congo', NULL, NULL),
('CD', 'Congo, the Democratic Republic of the', NULL, NULL),
('CK', 'Cook Islands', NULL, NULL),
('CR', 'Costa Rica', NULL, NULL),
('CI', 'Côte d\'Ivoire', NULL, NULL),
('HR', 'Croatia', NULL, NULL),
('CU', 'Cuba', NULL, NULL),
('CW', 'Curaçao', NULL, NULL),
('CY', 'Cyprus', NULL, NULL),
('CZ', 'Czech Republic', NULL, NULL),
('DK', 'Denmark', NULL, NULL),
('DJ', 'Djibouti', NULL, NULL),
('DM', 'Dominica', NULL, NULL),
('DO', 'Dominican Republic', NULL, NULL),
('EC', 'Ecuador', NULL, NULL),
('EG', 'Egypt', NULL, NULL),
('SV', 'El Salvador', NULL, NULL),
('GQ', 'Equatorial Guinea', NULL, NULL),
('ER', 'Eritrea', NULL, NULL),
('EE', 'Estonia', NULL, NULL),
('ET', 'Ethiopia', NULL, NULL),
('FK', 'Falkland Islands (Malvinas)', NULL, NULL),
('FO', 'Faroe Islands', NULL, NULL),
('FJ', 'Fiji', NULL, NULL),
('FI', 'Finland', NULL, NULL),
('FR', 'France', NULL, NULL),
('GF', 'French Guiana', NULL, NULL),
('PF', 'French Polynesia', NULL, NULL),
('TF', 'French Southern Territories', NULL, NULL),
('GA', 'Gabon', NULL, NULL),
('GM', 'Gambia', NULL, NULL),
('GE', 'Georgia', NULL, NULL),
('DE', 'Germany', NULL, NULL),
('GH', 'Ghana', NULL, NULL),
('GI', 'Gibraltar', NULL, NULL),
('GR', 'Greece', NULL, NULL),
('GL', 'Greenland', NULL, NULL),
('GD', 'Grenada', NULL, NULL),
('GP', 'Guadeloupe', NULL, NULL),
('GU', 'Guam', NULL, NULL),
('GT', 'Guatemala', NULL, NULL),
('GG', 'Guernsey', NULL, NULL),
('GN', 'Guinea', NULL, NULL),
('GW', 'Guinea-Bissau', NULL, NULL),
('GY', 'Guyana', NULL, NULL),
('HT', 'Haiti', NULL, NULL),
('HM', 'Heard Island and McDonald Mcdonald Islands', NULL, NULL),
('VA', 'Holy See (Vatican City State)', NULL, NULL),
('HN', 'Honduras', NULL, NULL),
('HK', 'Hong Kong', NULL, NULL),
('HU', 'Hungary', NULL, NULL),
('IS', 'Iceland', NULL, NULL),
('IN', 'India', NULL, NULL),
('ID', 'Indonesia', NULL, NULL),
('IR', 'Iran, Islamic Republic of', NULL, NULL),
('IQ', 'Iraq', NULL, NULL),
('IE', 'Ireland', NULL, NULL),
('IM', 'Isle of Man', NULL, NULL),
('IL', 'Israel', NULL, NULL),
('IT', 'Italy', NULL, NULL),
('JM', 'Jamaica', NULL, NULL),
('JP', 'Japan', NULL, NULL),
('JE', 'Jersey', NULL, NULL),
('JO', 'Jordan', NULL, NULL),
('KZ', 'Kazakhstan', NULL, NULL),
('KE', 'Kenya', NULL, NULL),
('KI', 'Kiribati', NULL, NULL),
('KP', 'Korea, Democratic People\'s Republic of', NULL, NULL),
('KR', 'Korea, Republic of', NULL, NULL),
('KW', 'Kuwait', NULL, NULL),
('KG', 'Kyrgyzstan', NULL, NULL),
('LA', 'Lao People\'s Democratic Republic', NULL, NULL),
('LV', 'Latvia', NULL, NULL),
('LB', 'Lebanon', NULL, NULL),
('LS', 'Lesotho', NULL, NULL),
('LR', 'Liberia', NULL, NULL),
('LY', 'Libya', NULL, NULL),
('LI', 'Liechtenstein', NULL, NULL),
('LT', 'Lithuania', NULL, NULL),
('LU', 'Luxembourg', NULL, NULL),
('MO', 'Macao', NULL, NULL),
('MK', 'Macedonia, the Former Yugoslav Republic of', NULL, NULL),
('MG', 'Madagascar', NULL, NULL),
('MW', 'Malawi', NULL, NULL),
('MY', 'Malaysia', NULL, NULL),
('MV', 'Maldives', NULL, NULL),
('ML', 'Mali', NULL, NULL),
('MT', 'Malta', NULL, NULL),
('MH', 'Marshall Islands', NULL, NULL),
('MQ', 'Martinique', NULL, NULL),
('MR', 'Mauritania', NULL, NULL),
('MU', 'Mauritius', NULL, NULL),
('YT', 'Mayotte', NULL, NULL),
('MX', 'Mexico', NULL, NULL),
('FM', 'Micronesia, Federated States of', NULL, NULL),
('MD', 'Moldova, Republic of', NULL, NULL),
('MC', 'Monaco', NULL, NULL),
('MN', 'Mongolia', NULL, NULL),
('ME', 'Montenegro', NULL, NULL),
('MS', 'Montserrat', NULL, NULL),
('MA', 'Morocco', NULL, NULL),
('MZ', 'Mozambique', NULL, NULL),
('MM', 'Myanmar', NULL, NULL),
('NA', 'Namibia', NULL, NULL),
('NR', 'Nauru', NULL, NULL),
('NP', 'Nepal', NULL, NULL),
('NL', 'Netherlands', NULL, NULL),
('NC', 'New Caledonia', NULL, NULL),
('NZ', 'New Zealand', NULL, NULL),
('NI', 'Nicaragua', NULL, NULL),
('NE', 'Niger', NULL, NULL),
('NG', 'Nigeria', NULL, NULL),
('NU', 'Niue', NULL, NULL),
('NF', 'Norfolk Island', NULL, NULL),
('MP', 'Northern Mariana Islands', NULL, NULL),
('NO', 'Norway', NULL, NULL),
('OM', 'Oman', NULL, NULL),
('PK', 'Pakistan', NULL, NULL),
('PW', 'Palau', NULL, NULL),
('PS', 'Palestine, State of', NULL, NULL),
('PA', 'Panama', NULL, NULL),
('PG', 'Papua New Guinea', NULL, NULL),
('PY', 'Paraguay', NULL, NULL),
('PE', 'Peru', NULL, NULL),
('PH', 'Philippines', NULL, NULL),
('PN', 'Pitcairn', NULL, NULL),
('PL', 'Poland', NULL, NULL),
('PT', 'Portugal', NULL, NULL),
('PR', 'Puerto Rico', NULL, NULL),
('QA', 'Qatar', NULL, NULL),
('RE', 'Réunion', NULL, NULL),
('RO', 'Romania', NULL, NULL),
('RU', 'Russian Federation', NULL, NULL),
('RW', 'Rwanda', NULL, NULL),
('BL', 'Saint Barthélemy', NULL, NULL),
('SH', 'Saint Helena, Ascension and Tristan da Cunha', NULL, NULL),
('KN', 'Saint Kitts and Nevis', NULL, NULL),
('LC', 'Saint Lucia', NULL, NULL),
('MF', 'Saint Martin (French part)', NULL, NULL),
('PM', 'Saint Pierre and Miquelon', NULL, NULL),
('VC', 'Saint Vincent and the Grenadines', NULL, NULL),
('WS', 'Samoa', NULL, NULL),
('SM', 'San Marino', NULL, NULL),
('ST', 'Sao Tome and Principe', NULL, NULL),
('SA', 'Saudi Arabia', NULL, NULL),
('SN', 'Senegal', NULL, NULL),
('RS', 'Serbia', NULL, NULL),
('SC', 'Seychelles', NULL, NULL),
('SL', 'Sierra Leone', NULL, NULL),
('SG', 'Singapore', NULL, NULL),
('SX', 'Sint Maarten (Dutch part)', NULL, NULL),
('SK', 'Slovakia', NULL, NULL),
('SI', 'Slovenia', NULL, NULL),
('SB', 'Solomon Islands', NULL, NULL),
('SO', 'Somalia', NULL, NULL),
('ZA', 'South Africa', NULL, NULL),
('GS', 'South Georgia and the South Sandwich Islands', NULL, NULL),
('SS', 'South Sudan', NULL, NULL),
('ES', 'Spain', NULL, NULL),
('LK', 'Sri Lanka', NULL, NULL),
('SD', 'Sudan', NULL, NULL),
('SR', 'Suriname', NULL, NULL),
('SJ', 'Svalbard and Jan Mayen', NULL, NULL),
('SZ', 'Swaziland', NULL, NULL),
('SE', 'Sweden', NULL, NULL),
('CH', 'Switzerland', NULL, NULL),
('SY', 'Syrian Arab Republic', NULL, NULL),
('TW', 'Taiwan', NULL, NULL),
('TJ', 'Tajikistan', NULL, NULL),
('TZ', 'Tanzania, United Republic of', NULL, NULL),
('TH', 'Thailand', NULL, NULL),
('TL', 'Timor-Leste', NULL, NULL),
('TG', 'Togo', NULL, NULL),
('TK', 'Tokelau', NULL, NULL),
('TO', 'Tonga', NULL, NULL),
('TT', 'Trinidad and Tobago', NULL, NULL),
('TN', 'Tunisia', NULL, NULL),
('TR', 'Turkey', NULL, NULL),
('TM', 'Turkmenistan', NULL, NULL),
('TC', 'Turks and Caicos Islands', NULL, NULL),
('TV', 'Tuvalu', NULL, NULL),
('UG', 'Uganda', NULL, NULL),
('UA', 'Ukraine', NULL, NULL),
('AE', 'United Arab Emirates', NULL, NULL),
('GB', 'United Kingdom', NULL, NULL),
('US', 'United States', NULL, NULL),
('UM', 'United States Minor Outlying Islands', NULL, NULL),
('UY', 'Uruguay', NULL, NULL),
('UZ', 'Uzbekistan', NULL, NULL),
('VU', 'Vanuatu', NULL, NULL),
('VE', 'Venezuela, Bolivarian Republic of', NULL, NULL),
('VN', 'Viet Nam', NULL, NULL),
('VG', 'Virgin Islands, British', NULL, NULL),
('VI', 'Virgin Islands, U.S.', NULL, NULL),
('WF', 'Wallis and Futuna', NULL, NULL),
('EH', 'Western Sahara', NULL, NULL),
('YE', 'Yemen', NULL, NULL),
('ZM', 'Zambia', NULL, NULL),
('ZW', 'Zimbabwe', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employers`
--

CREATE TABLE `employers` (
  `employer_auto_id` bigint(20) UNSIGNED NOT NULL,
  `employer_first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `employer_last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `employer_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `employer_gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `is_email_verified` tinyint(1) NOT NULL DEFAULT 0,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employers`
--

INSERT INTO `employers` (`employer_auto_id`, `employer_first_name`, `employer_last_name`, `password`, `employer_phone`, `personal_email`, `employer_gender`, `status`, `is_email_verified`, `email_verified_at`, `created_at`, `updated_at`) VALUES
(1, 'Faith', 'Muiruri', '$2y$10$cJffmcGPctfKCTM2SA/i/Ov29LB05Z48DaepT4.mdvHWFEveyOFOy', '0712219685', 'faith.muiruri@strathmore.edu', 'option1', 1, 1, NULL, '2023-04-08 17:21:33', '2023-04-08 17:25:35'),
(2, 'Kirsten', 'Weiss', '$2y$10$c5iRl/m78gbaXgLKZT9lAuS.Pvb2J3WO8qJk6.fm3TuvYEmJ0hAPS', '+1 (997) 376-5736', 'muirurinjeri4@gmail.com', 'option1', 1, 1, NULL, '2023-04-10 03:55:54', '2023-04-10 03:56:23');

-- --------------------------------------------------------

--
-- Table structure for table `expressionforms`
--

CREATE TABLE `expressionforms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `school_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `internship_jobs`
--

CREATE TABLE `internship_jobs` (
  `ijob_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ijob_category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ijob_skills` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `intern_skills` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ijob_task` int(11) NOT NULL DEFAULT 0,
  `ijob_task_run` int(11) NOT NULL DEFAULT 0,
  `ijob_budget_currency` tinyint(1) NOT NULL DEFAULT 0,
  `ijob_budget_amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_03_20_083906_create_contacts_table', 1),
(7, '2023_03_20_125245_create_schools_table', 1),
(8, '2023_03_20_125426_create_countries_table', 1),
(11, '2023_03_21_065807_create_expressionforms_table', 1),
(15, '2023_03_20_200751_create_skills_table', 3),
(30, '2023_03_21_221441_create_partners_table', 5),
(31, '2023_03_29_090114_create_customers_table', 6),
(32, '2023_03_30_141114_create_internship_job_table', 7),
(33, '2023_03_30_141114_create_internship_jobs_table', 8),
(35, '2023_03_31_094309_create_password_resets_table', 10),
(114, '2023_04_03_122845_create_student_verify_table', 50),
(115, '2023_03_20_155442_create_students_table', 51),
(116, '2023_03_20_092242_create_employers_table', 52),
(117, '2023_03_31_102201_create_users_verify_table', 53),
(119, '2023_03_30_183216_create_internship_jobs_table', 54);

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `partner_auto_id` bigint(20) UNSIGNED NOT NULL,
  `partner_first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `partner_last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `partner_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `partner_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `partner_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_size` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brief_desc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `web_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hear_us` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `add_note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`partner_auto_id`, `partner_first_name`, `partner_last_name`, `partner_email`, `partner_phone`, `partner_type`, `company_name`, `company_type`, `company_size`, `role`, `country`, `company_address`, `brief_desc`, `contact`, `web_link`, `hear_us`, `add_note`, `created_at`, `updated_at`) VALUES
(1, 'Jackson', 'Wolfe', 'kudixekyh@mailinator.com', '+1 (575) 255-8755', '1', NULL, NULL, NULL, NULL, 'CC', NULL, NULL, NULL, NULL, 'Google search', NULL, '2023-03-29 05:15:31', '2023-03-29 05:15:31'),
(2, 'Jenette', 'Ortiz', 'xerigen@mailinator.com', '+1 (987) 423-6479', '1', NULL, NULL, NULL, NULL, 'TK', NULL, NULL, NULL, NULL, 'newsletter', NULL, '2023-03-29 06:25:47', '2023-03-29 06:25:47'),
(3, 'Lacey', 'Lott', 'mobuvacew@mailinator.com', '(897) 489-8045', '1', 'Flynn Rosales LLC', 'Telecommunication', '201-500', 'Quidem non ut ut mag', 'DK', 'Wolfe Glenn Associates', 'Ad facilis aut nulla', NULL, 'https://www.laqavanuzixija.us', 'social media', NULL, '2023-03-31 08:55:57', '2023-03-31 08:55:57'),
(4, 'Faith', 'Muiruri', 'faith.muiruri@strathmore.edu', '0712219685', '1', 'Alvarez and Pearson Trading', 'Business Opportunity', '51-200', 'Amet aut aut rerum', 'KE', 'Reilly and Silva Plc', 'Voluptates deleniti', NULL, 'https://www.qipelohihewovyr.ws', 'Google search', NULL, '2023-04-05 03:44:40', '2023-04-05 03:44:40');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `personal_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `student_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`student_email`, `token`, `created_at`) VALUES
('muirurinjeri4@gmail.com', 'HSR75i8vmB6XbIxzRC00zmGWubnszV72mpwKIBVeB3ngqxtvbPcRXduCbui0Uoh9', '2023-04-05 05:33:42');

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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `schools`
--

CREATE TABLE `schools` (
  `school_auto_id` bigint(20) UNSIGNED NOT NULL,
  `school_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `schools`
--

INSERT INTO `schools` (`school_auto_id`, `school_name`, `created_at`, `updated_at`) VALUES
(1, 'Strathmore University', NULL, NULL),
(7, 'University of Nairobi', NULL, NULL),
(8, 'Moi University', NULL, NULL),
(9, 'Mount Kenya University', NULL, NULL),
(10, 'Daystar University', NULL, NULL),
(11, 'Zetech University', NULL, NULL),
(12, 'Murang\'a University', NULL, NULL),
(13, 'Jomo Kenyatta University', NULL, NULL),
(14, 'Pwani University', NULL, NULL),
(15, 'Meru University', NULL, NULL),
(16, 'Masinde Muliro University', NULL, NULL),
(17, 'Maseno', NULL, NULL),
(18, 'African Nazarine university', NULL, NULL),
(19, 'Catholic of Eastern Africa  University', NULL, NULL),
(20, 'Kenya Methodist University', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ijob_skills` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ijob_category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `ijob_skills`, `ijob_category`, `created_at`, `updated_at`) VALUES
(1, 'proofreeding', 'Research work', NULL, NULL),
(2, 'UI/UX', 'Software development', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `student_auto_id` bigint(20) UNSIGNED NOT NULL,
  `student_first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `school_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `institution_id` int(11) DEFAULT NULL,
  `student_email_verified` tinyint(1) NOT NULL DEFAULT 0,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_auto_id`, `student_first_name`, `student_last_name`, `student_email`, `student_phone`, `student_gender`, `school_name`, `country`, `institution_id`, `student_email_verified`, `password`, `student_status`, `created_at`, `updated_at`) VALUES
(2, 'Emerson', 'Harding', 'faith.muiruri@strathmore.edu', '+1 (325) 403-8263', 'Female', '1', 'AL', NULL, 1, '$2y$10$whZGDKCPA9CmatDsp4r3HuY6cuEnrRRNSq3kiVzqDBeLqvfTwDjMm', 1, '2023-04-10 03:46:15', '2023-04-10 03:46:43');

-- --------------------------------------------------------

--
-- Table structure for table `student_verify`
--

CREATE TABLE `student_verify` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users_verify`
--

CREATE TABLE `users_verify` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employers`
--
ALTER TABLE `employers`
  ADD PRIMARY KEY (`employer_auto_id`);

--
-- Indexes for table `expressionforms`
--
ALTER TABLE `expressionforms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`partner_auto_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_personal_email_index` (`personal_email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`student_email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `schools`
--
ALTER TABLE `schools`
  ADD PRIMARY KEY (`school_auto_id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_auto_id`),
  ADD UNIQUE KEY `students_student_email_unique` (`student_email`);

--
-- Indexes for table `student_verify`
--
ALTER TABLE `student_verify`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `users_verify`
--
ALTER TABLE `users_verify`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employers`
--
ALTER TABLE `employers`
  MODIFY `employer_auto_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `expressionforms`
--
ALTER TABLE `expressionforms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `partner_auto_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `schools`
--
ALTER TABLE `schools`
  MODIFY `school_auto_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `student_auto_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student_verify`
--
ALTER TABLE `student_verify`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users_verify`
--
ALTER TABLE `users_verify`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
