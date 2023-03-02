-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2023 at 03:39 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `heriwork`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `apk` int(11) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `colleges`
--

-- CREATE TABLE `college` (
--   `college_auto_id` int(11) NOT NULL,
--   `college_name` varchar(30) NOT NULL
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

CREATE TABLE `organization` ( /*internships*/
  `organization_auto_id` int(11) NOT NULL,
  `organization_name` varchar(50) NOT NULL,
  `org_email_format` UNIQUE
  `organization_status` tinyint(1) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp(),
  `date_updated` timestamp NOT NULL DEFAULT current_timestamp(),
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Table structure for table `college_admins`
--
CREATE TABLE `organization_admin` (
  `org_admin_auto_id` int(11) NOT NULL,
  `admin_first_name` varchar(30) NOT NULL,
  `admin_last_name` varchar(30) NOT NULL,
  `admin_official_email` varchar(30) NOT NULL,
  `admin_email` varchar(30) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `admin_status` tinyint(1) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp(),
  `date_updated` timestamp NOT NULL DEFAULT current_timestamp(),
  `organization_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Table structure for table `colleges`
--



CREATE TABLE `internship_job` (
  `internship_job_auto_id` int(11) NOT NULL,
  `org_admin_auto_id_fk` int(11) NOT NULL, /*employer*/
  `ijob_title` varchar(11) NOT NULL,
  `ijob_job_desc` varchar(255) NOT NULL,
  `ijob_stipend` int(11) NOT NULL,
  `ijob_expected_start_date` datetime NOT NULL,
  `ijob_expected_end_date` datetime NOT NULL,
  `ijob_expected_daily_hours` datetime NOT NULL,
  `ijob_pay_status` int(11) NOT NULL,
  `ijob_status` tinyint(1) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp(),
  `date_updated` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


-- --------------------------------------------------------

--
-- Table structure for table `internship_app`
--

CREATE TABLE `internship_app` (
  `internship_app_auto_id` int(11) NOT NULL,
  `internship_app_job_id` int(11) NOT NULL,
  `internship_app_student_id` int(11) NOT NULL,
  `internship_status` tinyint(1) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `date_updated` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `internship_job`
--


-- --------------------------------------------------------

--
-- Table structure for table `organizations`
--

-- --------------------------------------------------------

--
-- Table structure for table `organization_admins`
--


-- --------------------------------------------------------

--
-- Table structure for table `student`
--
CREATE TABLE `college` (
  `college_auto_id` int(11) NOT NULL,
  `college_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE COLLEGE_ADMIN(
  details - adds students / approve...
);




-- --------------------------------------------------------
CREATE TABLE `workstudy_employer_type` (
  I will post as a corporate staff | I will post a personal contributor
  );

CREATE TABLE `workstudy_employer` (
  `emp_auto_id` int(11) NOT NULL,
  `emp_type_auto_id_fk` NOT NULL, choose if you are a corporate ama personal
  `emp_first_name` varchar(30) NOT NULL,
  `emp_last_name` varchar(30) NOT NULL,
  `emp_other_name` varchar(30) NOT NULL,
  `emp_phone_number` int(11) NOT NULL,
  `emp_org_email_address` varchar(30) NULL,
  `emp_personal_email_address` varchar(30) NULL,
  `emp_status` tinyint(1) NOT NULL,
  `emp_date_added` timestamp NOT NULL DEFAULT current_timestamp(),
  `emp_date_updated` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


CREATE TABLE `student` (
  `Student_auto_id` int(11) NOT NULL,
  `student_inst_id` int(11) NOT NULL,
  `student_assigned_id` int(11) NOT NULL,
  `student_first_name` varchar(30) NOT NULL,
  `student_last_name` varchar(30) NOT NULL,
  `student_other_name` varchar(30) NOT NULL,
  `student_phone` int(11) NOT NULL,
  `student_email` varchar(30) NOT NULL,
  `student_status` tinyint(1) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp(),
  `date_update` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `work_study_app`
--

CREATE TABLE `work_study_app` (
  `ws_app_auto_id` int(11) NOT NULL,
  `ws_app_job_id` int(11) NOT NULL,
  `ws_student_aid` int(11) NOT NULL,
  `ws_app_status` tinyint(1) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp(),
  `date_updated` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `work_study_job`
--

CREATE TABLE `work_study_job` (
  `id` int(11) NOT NULL,
  `ws_employer_id` int(11) NOT NULL,
  `ws_job_title` varchar(30) NOT NULL,
  `ws_job_desc` varchar(255) NOT NULL,
  `ws_job_pay_per_hour` int(11) NOT NULL,
  `ws_job-expected_daily_hour` int(11) NOT NULL,
  `ws_job-expected_start_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `ws_job-expected_end_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `ws_job_active_status` tinyint(1) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp(),
  `date_updated` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_auto_id`);

--
-- Indexes for table `colleges`
--
ALTER TABLE `colleges`
  ADD PRIMARY KEY (`college_auto_id`),
  ADD KEY `college_admin` (`college_admin`);

--
-- Indexes for table `college_admins`
--
ALTER TABLE `college_admins`
  ADD PRIMARY KEY (`college_admin_auto_id`);

--
-- Indexes for table `employers`
--
ALTER TABLE `employers`
  ADD PRIMARY KEY (`employer_auto_id`),
  ADD UNIQUE KEY `employer_phone` (`employer_phone`),
  ADD UNIQUE KEY `employer_email` (`employer_email`);

--
-- Indexes for table `internship_app`
--
ALTER TABLE `internship_app`
  ADD PRIMARY KEY (`internship_app_auto_id`),
  ADD UNIQUE KEY `student_id` (`internship_app_student_id`),
  ADD KEY `job_id` (`internship_app_job_id`);

--
-- Indexes for table `internship_job`
--
ALTER TABLE `internship_job`
  ADD PRIMARY KEY (`internship_job_auto_id`),
  ADD KEY `ijob_employer_id` (`ijob_employer_id`);

--
-- Indexes for table `organizations`
--
ALTER TABLE `organizations`
  ADD PRIMARY KEY (`organizations_auto_id`),
  ADD KEY `employer_id` (`employer_id`);

--
-- Indexes for table `organization_admins`
--
ALTER TABLE `organization_admins`
  ADD PRIMARY KEY (`organization_admins_auto_id`),
  ADD KEY `organization_id` (`organization_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`Student_auto_id`),
  ADD UNIQUE KEY `student_email` (`student_email`),
  ADD UNIQUE KEY `student_phone` (`student_phone`),
  ADD KEY `student_inst_id` (`student_inst_id`);

--
-- Indexes for table `work_study_app`
--
ALTER TABLE `work_study_app`
  ADD PRIMARY KEY (`ws_app_auto_id`),
  ADD KEY `job_id` (`ws_app_job_id`),
  ADD KEY `student_id` (`ws_student_aid`);

--
-- Indexes for table `work_study_job`
--
ALTER TABLE `work_study_job`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employer_id` (`ws_employer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_auto_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `organization_admins`
--
ALTER TABLE `organization_admins`
  MODIFY `organization_admins_auto_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `Student_auto_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `work_study_app`
--
ALTER TABLE `work_study_app`
  MODIFY `ws_app_auto_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `colleges`
--
ALTER TABLE `colleges`
  ADD CONSTRAINT `colleges_ibfk_1` FOREIGN KEY (`college_admin`) REFERENCES `college_admins` (`college_admin_auto_id`),
  ADD CONSTRAINT `colleges_ibfk_2` FOREIGN KEY (`college_auto_id`) REFERENCES `employers` (`employer_auto_id`);

--
-- Constraints for table `internship_app`
--
ALTER TABLE `internship_app`
  ADD CONSTRAINT `internship_app_ibfk_1` FOREIGN KEY (`internship_app_student_id`) REFERENCES `student` (`Student_auto_id`),
  ADD CONSTRAINT `internship_job_id` FOREIGN KEY (`internship_app_job_id`) REFERENCES `internship_job` (`internship_job_auto_id`);

--
-- Constraints for table `internship_job`
--
ALTER TABLE `internship_job`
  ADD CONSTRAINT `employer_id` FOREIGN KEY (`ijob_employer_id`) REFERENCES `employers` (`employer_auto_id`);

--
-- Constraints for table `organizations`
--
ALTER TABLE `organizations`
  ADD CONSTRAINT `organizations_ibfk_1` FOREIGN KEY (`employer_id`) REFERENCES `employers` (`employer_auto_id`);

--
-- Constraints for table `organization_admins`
--
ALTER TABLE `organization_admins`
  ADD CONSTRAINT `organization_admins_ibfk_1` FOREIGN KEY (`organization_id`) REFERENCES `organizations` (`organizations_auto_id`);

--
-- Constraints for table `work_study_app`
--
ALTER TABLE `work_study_app`
  ADD CONSTRAINT `student_id` FOREIGN KEY (`ws_student_aid`) REFERENCES `student` (`Student_auto_id`),
  ADD CONSTRAINT `ws_job_id` FOREIGN KEY (`ws_app_job_id`) REFERENCES `work_study_job` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
