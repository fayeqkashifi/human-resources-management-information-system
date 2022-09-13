-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2019 at 12:09 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hrmis`
--

-- --------------------------------------------------------

--
-- Table structure for table `address_table`
--

CREATE TABLE `address_table` (
  `Address_id` int(11) NOT NULL,
  `Addr_type` varchar(255) NOT NULL,
  `Addr_Province` varchar(255) NOT NULL,
  `Addr_district` varchar(255) NOT NULL,
  `Addr_detail` varchar(255) NOT NULL,
  `create_at` datetime NOT NULL,
  `update_at` datetime NOT NULL,
  `Employee_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `address_table`
--

INSERT INTO `address_table` (`Address_id`, `Addr_type`, `Addr_Province`, `Addr_district`, `Addr_detail`, `create_at`, `update_at`, `Employee_id`) VALUES
(4, 'فعلی', 'کابل', 'پنجم', 'افشار', '2019-05-12 11:05:41', '2019-05-12 11:05:41', 12),
(5, 'اصلی', 'کابل', 'پنچم ', 'افشار', '2019-05-12 11:05:41', '2019-05-12 11:05:41', 12);

-- --------------------------------------------------------

--
-- Table structure for table `conversion_table`
--

CREATE TABLE `conversion_table` (
  `Conversion_id` int(11) NOT NULL,
  `job_title` varchar(255) DEFAULT NULL,
  `previous_job_title` varchar(255) DEFAULT NULL,
  `supervisor_name` varchar(255) DEFAULT NULL,
  `previous_supervisor_name` varchar(255) DEFAULT NULL,
  `previous_site` varchar(255) DEFAULT NULL,
  `current_site` varchar(255) DEFAULT NULL,
  `con_date` datetime DEFAULT NULL,
  `previous_emp_type` varchar(255) DEFAULT NULL,
  `current_emp_type` varchar(255) DEFAULT NULL,
  `Department_id` int(11) NOT NULL,
  `previous_Department_id` int(11) NOT NULL,
  `Position_id` int(11) NOT NULL,
  `previous_Position_id` int(11) NOT NULL,
  `Employee_id` int(11) NOT NULL,
  `create_at` datetime NOT NULL,
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `conversion_table`
--

INSERT INTO `conversion_table` (`Conversion_id`, `job_title`, `previous_job_title`, `supervisor_name`, `previous_supervisor_name`, `previous_site`, `current_site`, `con_date`, `previous_emp_type`, `current_emp_type`, `Department_id`, `previous_Department_id`, `Position_id`, `previous_Position_id`, `Employee_id`, `create_at`, `update_at`) VALUES
(4, 'مدیر اداری', 'مدیر دیتابیس', 'روح الله', 'مدیر صاحب ', 'دفتر مرکزی', 'ساحوی', '2019-05-13 00:00:00', 'مرکزی', 'مرکزی', 1, 1, 1, 1, 12, '2019-05-13 09:05:43', '2019-05-13 09:05:43');

-- --------------------------------------------------------

--
-- Table structure for table `department_table`
--

CREATE TABLE `department_table` (
  `Department_id` int(11) NOT NULL,
  `Dept_name` varchar(255) NOT NULL,
  `create_at` datetime NOT NULL,
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `department_table`
--

INSERT INTO `department_table` (`Department_id`, `Dept_name`, `create_at`, `update_at`) VALUES
(1, 'منابع بشری \r\n', '2019-05-08 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `disjoint_table`
--

CREATE TABLE `disjoint_table` (
  `dis_id` int(11) NOT NULL,
  `dis_date` datetime NOT NULL,
  `dis_reason` text NOT NULL,
  `dis_scan` varchar(255) NOT NULL,
  `create_at` datetime NOT NULL,
  `update_at` datetime NOT NULL,
  `Employee_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `employee_table`
--

CREATE TABLE `employee_table` (
  `Employee_id` int(11) NOT NULL,
  `Emp_ID` varchar(255) NOT NULL,
  `Emp_name` varchar(255) NOT NULL,
  `Emp_last_name` varchar(255) NOT NULL,
  `Emp_father_name` varchar(255) NOT NULL,
  `Emp_gender` varchar(255) NOT NULL,
  `Emp_status` varchar(255) NOT NULL,
  `Emp_photo` varchar(255) NOT NULL,
  `Emp_start_date` datetime NOT NULL,
  `Emp_Tazkira_number` varchar(255) NOT NULL,
  `Emp_education_university` varchar(255) NOT NULL,
  `Emp_education_field` varchar(255) NOT NULL,
  `Emp_education_degree` varchar(255) NOT NULL,
  `Emp_telephone` varchar(255) NOT NULL,
  `Emp_guarantor_work_place` varchar(255) NOT NULL,
  `Emp_guarantor_job` varchar(255) NOT NULL,
  `Emp_guarantor_name` varchar(255) NOT NULL,
  `Emp_guarantor_telephone` varchar(255) NOT NULL,
  `Emp_relatives_work_place` varchar(255) NOT NULL,
  `Emp_relatives_name` varchar(255) NOT NULL,
  `Emp_relatives_telephone` varchar(255) NOT NULL,
  `Emp_Blood_group` varchar(255) NOT NULL,
  `Emp_type` varchar(255) NOT NULL,
  `Emp_job_title` varchar(255) NOT NULL,
  `Emp_supervisor_name` varchar(255) NOT NULL,
  `Emp_work_place` varchar(255) NOT NULL,
  `Emp_monthly_salary` double NOT NULL,
  `create_at` datetime NOT NULL,
  `update_at` datetime NOT NULL,
  `Department_id` int(11) NOT NULL,
  `Position_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employee_table`
--

INSERT INTO `employee_table` (`Employee_id`, `Emp_ID`, `Emp_name`, `Emp_last_name`, `Emp_father_name`, `Emp_gender`, `Emp_status`, `Emp_photo`, `Emp_start_date`, `Emp_Tazkira_number`, `Emp_education_university`, `Emp_education_field`, `Emp_education_degree`, `Emp_telephone`, `Emp_guarantor_work_place`, `Emp_guarantor_job`, `Emp_guarantor_name`, `Emp_guarantor_telephone`, `Emp_relatives_work_place`, `Emp_relatives_name`, `Emp_relatives_telephone`, `Emp_Blood_group`, `Emp_type`, `Emp_job_title`, `Emp_supervisor_name`, `Emp_work_place`, `Emp_monthly_salary`, `create_at`, `update_at`, `Department_id`, `Position_id`) VALUES
(12, 'MA-0002', 'روح الله', 'احمدی', 'محمد امین ', '1', '1', './Uploads/Mujtaba_Ali_Employees/Employee_ID_MA-0002/Employee_Image_MA-0002_Date_2019-05-12_Time_1557652540.jpeg', '2019-05-22 00:00:00', '557173', 'پوهنتون پولی تخنیک کابل', 'کمپیوتر انجنیرینگ', 'Category 4', '0782336889', 'ریاست ساختمانی ', 'انجنیر برق', 'احمد جان', '0747674067', 'شرکت مجتبی علی ', 'روح الله ', '0775757929', 'AB+', 'مرکزی', 'مدیر اداری', 'روح الله', 'ساحوی', 20000, '2019-05-12 11:05:41', '2019-05-12 11:05:41', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `position_table`
--

CREATE TABLE `position_table` (
  `Position_id` int(11) NOT NULL,
  `Posi_name` varchar(255) NOT NULL,
  `create_at` datetime NOT NULL,
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `position_table`
--

INSERT INTO `position_table` (`Position_id`, `Posi_name`, `create_at`, `update_at`) VALUES
(1, 'کارمند', '2019-05-08 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `province_table`
--

CREATE TABLE `province_table` (
  `province_id` int(11) NOT NULL,
  `province_name` varchar(64) NOT NULL,
  `create_at` datetime NOT NULL,
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `province_table`
--

INSERT INTO `province_table` (`province_id`, `province_name`, `create_at`, `update_at`) VALUES
(1, 'کابل', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'هرات', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'قندهار', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'اُرُزگان', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `salary_table`
--

CREATE TABLE `salary_table` (
  `Salary_id` int(11) NOT NULL,
  `Previous_salary` int(11) NOT NULL,
  `Improve_salary` int(11) NOT NULL,
  `Tatal_salary` int(11) NOT NULL,
  `salary_date` datetime NOT NULL,
  `create_at` datetime NOT NULL,
  `update_at` datetime NOT NULL,
  `Employee_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `salary_table`
--

INSERT INTO `salary_table` (`Salary_id`, `Previous_salary`, `Improve_salary`, `Tatal_salary`, `salary_date`, `create_at`, `update_at`, `Employee_id`) VALUES
(1, 15000, 5000, 20000, '2019-05-13 00:00:00', '2019-05-13 11:05:54', '2019-05-13 11:05:54', 12);

-- --------------------------------------------------------

--
-- Table structure for table `scanfiles_table`
--

CREATE TABLE `scanfiles_table` (
  `ScanFile_id` int(11) NOT NULL,
  `file_detail` varchar(255) DEFAULT NULL,
  `file_link` varchar(255) DEFAULT NULL,
  `Employee_id` int(11) NOT NULL,
  `create_at` datetime NOT NULL,
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(64) NOT NULL,
  `name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `signature_photo` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL,
  `create_at` datetime NOT NULL,
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `name`, `last_name`, `father_name`, `photo`, `signature_photo`, `user_type`, `create_at`, `update_at`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'admin', 'admin', 'admin', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address_table`
--
ALTER TABLE `address_table`
  ADD PRIMARY KEY (`Address_id`),
  ADD KEY `Employee_Address_F_K` (`Employee_id`);

--
-- Indexes for table `conversion_table`
--
ALTER TABLE `conversion_table`
  ADD PRIMARY KEY (`Conversion_id`),
  ADD KEY `Employee_Coversion_F_K` (`Employee_id`),
  ADD KEY `Department_Coversion_F_K` (`Department_id`),
  ADD KEY `Position_Coversion_F_K` (`Position_id`);

--
-- Indexes for table `department_table`
--
ALTER TABLE `department_table`
  ADD PRIMARY KEY (`Department_id`);

--
-- Indexes for table `disjoint_table`
--
ALTER TABLE `disjoint_table`
  ADD PRIMARY KEY (`dis_id`),
  ADD KEY `Employee_Disjoint_F_K` (`Employee_id`);

--
-- Indexes for table `employee_table`
--
ALTER TABLE `employee_table`
  ADD PRIMARY KEY (`Employee_id`),
  ADD UNIQUE KEY `Emp_ID` (`Emp_ID`),
  ADD UNIQUE KEY `Emp_Tazkira_number` (`Emp_Tazkira_number`),
  ADD KEY `Department_Employee_F_K` (`Department_id`),
  ADD KEY `Position_Employee_F_K` (`Position_id`);

--
-- Indexes for table `position_table`
--
ALTER TABLE `position_table`
  ADD PRIMARY KEY (`Position_id`);

--
-- Indexes for table `province_table`
--
ALTER TABLE `province_table`
  ADD PRIMARY KEY (`province_id`),
  ADD UNIQUE KEY `province_name` (`province_name`);

--
-- Indexes for table `salary_table`
--
ALTER TABLE `salary_table`
  ADD PRIMARY KEY (`Salary_id`),
  ADD KEY `Employee_Salary_F_K` (`Employee_id`);

--
-- Indexes for table `scanfiles_table`
--
ALTER TABLE `scanfiles_table`
  ADD PRIMARY KEY (`ScanFile_id`),
  ADD KEY `Employee_Scanfiles_F_K` (`Employee_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address_table`
--
ALTER TABLE `address_table`
  MODIFY `Address_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `conversion_table`
--
ALTER TABLE `conversion_table`
  MODIFY `Conversion_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `department_table`
--
ALTER TABLE `department_table`
  MODIFY `Department_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `disjoint_table`
--
ALTER TABLE `disjoint_table`
  MODIFY `dis_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `employee_table`
--
ALTER TABLE `employee_table`
  MODIFY `Employee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `position_table`
--
ALTER TABLE `position_table`
  MODIFY `Position_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `province_table`
--
ALTER TABLE `province_table`
  MODIFY `province_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `salary_table`
--
ALTER TABLE `salary_table`
  MODIFY `Salary_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `scanfiles_table`
--
ALTER TABLE `scanfiles_table`
  MODIFY `ScanFile_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `address_table`
--
ALTER TABLE `address_table`
  ADD CONSTRAINT `Employee_Address_F_K` FOREIGN KEY (`Employee_id`) REFERENCES `employee_table` (`Employee_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `conversion_table`
--
ALTER TABLE `conversion_table`
  ADD CONSTRAINT `Department_Coversion_F_K` FOREIGN KEY (`Department_id`) REFERENCES `department_table` (`Department_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Employee_Coversion_F_K` FOREIGN KEY (`Employee_id`) REFERENCES `employee_table` (`Employee_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Position_Coversion_F_K` FOREIGN KEY (`Position_id`) REFERENCES `position_table` (`Position_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `disjoint_table`
--
ALTER TABLE `disjoint_table`
  ADD CONSTRAINT `Employee_Disjoint_F_K` FOREIGN KEY (`Employee_id`) REFERENCES `employee_table` (`Employee_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `employee_table`
--
ALTER TABLE `employee_table`
  ADD CONSTRAINT `Department_Employee_F_K` FOREIGN KEY (`Department_id`) REFERENCES `department_table` (`Department_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Position_Employee_F_K` FOREIGN KEY (`Position_id`) REFERENCES `position_table` (`Position_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `salary_table`
--
ALTER TABLE `salary_table`
  ADD CONSTRAINT `Employee_Salary_F_K` FOREIGN KEY (`Employee_id`) REFERENCES `employee_table` (`Employee_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `scanfiles_table`
--
ALTER TABLE `scanfiles_table`
  ADD CONSTRAINT `Employee_Scanfiles_F_K` FOREIGN KEY (`Employee_id`) REFERENCES `employee_table` (`Employee_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
