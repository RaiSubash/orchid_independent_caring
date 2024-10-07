-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Oct 07, 2024 at 08:02 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `orchid_independent_caring`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `featured_image` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `title`, `description`, `featured_image`, `slug`, `status`) VALUES
(1, 'Who we are', '<p style=\"text-align:justify\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:16px\"><span style=\"color:#000000\">Orchid Independent Caring Pty Ltd is a company that was established with the sole aim of offering disability services that puts the participant as a priority in creating opportunities, promoting independence and progression in a safe and non-discriminative environment.</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:16px\"><span style=\"color:#000000\">At Orchid Independent Caring Pty Ltd we provide a range of disability services. With the range of services, we provide, we aim to make a difference in the lives of those with disability. The goal is to make each of our participant&rsquo;s lives easier, fairer and more involved by participating within their own communities.</span></span></span></p>\r\n', 'c939d-about_us.png', 'who-we-are', 1),
(3, 'Mission', '<p style=\"text-align:justify\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:16px\"><span style=\"color:black\">To support independence and empower lives by providing high quality and effective disability services, where every person we care for matters.</span></span></span></p>\r\n', '', 'mission', 1),
(4, 'Why Us', '<p><span style=\"font-size:16px\"><span style=\"font-family:Aptos,sans-serif\">Our values are centred around our staff, participants and their families or guardians.</span></span></p>\r\n\r\n<ul>\r\n	<li><span style=\"font-size:16px\"><span style=\"font-family:Aptos,sans-serif\">Respect-We respect people&rsquo;s decisions, opinions and views.</span></span></li>\r\n	<li><span style=\"font-size:16px\"><span style=\"font-family:Aptos,sans-serif\">Empowerment- We are dedicated to supporting participants in achieving their goals by promoting independence and self-determination. </span></span></li>\r\n	<li><span style=\"font-size:16px\"><span style=\"font-family:Aptos,sans-serif\">Integrity- We upload the highest ethical standards in everything we do, ensuring honesty, trust and reliability in our services.</span></span></li>\r\n	<li><span style=\"font-size:16px\"><span style=\"font-family:Aptos,sans-serif\">Collaboration- We believe in working closely with participant, families, carers and other professional to provide holistic and coordinated care. </span></span></li>\r\n	<li><span style=\"font-size:16px\"><span style=\"font-family:Aptos,sans-serif\">Transparency-We encourage open communication and create a safe space for participants and families to provide feedback, ensuring continuous improvement in our services. </span></span></li>\r\n	<li><span style=\"font-size:16px\"><span style=\"font-family:Aptos,sans-serif\">Privacy and Confidentiality-This is of utmost importance as outlined in our Privacy and Confidentiality Policy and Procedure.</span></span></li>\r\n	<li><span style=\"font-size:16px\"><span style=\"font-family:Aptos,sans-serif\">Safe and Harmonious working environment-We offer a workplace that provides support, guidance and acceptance to staff and participants.</span></span></li>\r\n	<li><span style=\"font-size:16px\"><span style=\"font-family:Aptos,sans-serif\">Passion-We have a passion to our work ethics. Every member of staff is passionate about his work and takes the participant as part of the family.</span></span></li>\r\n</ul>\r\n', '1096e-5508a-untitled-design.png', 'why-us', 1),
(5, 'Areas we cover', '<ul>\r\n	<li><span style=\"font-size:16px\"><span style=\"font-family:Aptos,sans-serif\">Western Sydney Local Health District</span></span></li>\r\n	<li><span style=\"font-size:16px\"><span style=\"font-family:Aptos,sans-serif\">Sydney Local Health District </span></span></li>\r\n	<li><span style=\"font-size:16px\"><span style=\"font-family:Aptos,sans-serif\">Eastern Local Health District </span></span></li>\r\n</ul>\r\n', '', 'area-we-cover', 1),
(6, 'Join Our Team', '<p style=\"text-align:justify\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:16px\"><span style=\"color:#000000\">At Orchid Independent caring, we believe in transforming lives &ndash; not just for those we care and support, but for our team members too. </span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:16px\"><span style=\"color:#000000\">Become part of our vibrant, fun, and compassionate organisation, making a difference that truly counts and join us on our mission is to inspire lifestyle freedom.</span></span></span></p>\r\n', '81338-452a9-untitled-design-8-.png', 'join-our-team', 1),
(7, 'Why Work With Us', '<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:16px\">As a team member the environment you work in will be supportive, encouraging and one that recognises and appreciates your uniqueness.</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:16px\">We recognise that all team members have mutual obligations to support and encourage one another in fulfilling their respective roles, as well as facilitating each other&rsquo;s personal growth and development and furthering the aims of the organisation. </span></span></span></p>\r\n', '0f57b-e6af4-untitled-design-9-.png', 'why-work-with-us', 1);

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `featured_image` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_date` date NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `description`, `featured_image`, `slug`, `created_date`, `status`) VALUES
(1, 'Empowering Journeys | Success Stories from NDIS Participants', '<p>content coming soon</p>\r\n', 'cd95b-blog1.png', 'empowering-journeys', '2024-09-30', 1),
(2, 'Practical Tips for Navigating the NDIS | Guidance for Participants and Families', '<p>content coming soon</p>\r\n', '15090-blog2.png', 'practical-tips-for-navigating-NDIS', '2024-09-30', 1),
(3, 'Empowering Journeys | Success Stories from NDIS Participants', '<p>content coming soon</p>\r\n', '8bc53-blog3.png', 'empowering-journeys', '2024-10-03', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact_number` varchar(155) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `contact_number`, `subject`, `message`) VALUES
(25, 'Subash Thulung', 'admin@gmail.com', '9802316667', 'Feedback', 'tstast astet'),
(26, 'Subash Thulung', 'subashthulung13@gmail.com', '9802316667', 'test tst', 'this is test');

-- --------------------------------------------------------

--
-- Table structure for table `getting_started`
--

CREATE TABLE `getting_started` (
  `id` int(11) NOT NULL,
  `step` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `featured_image` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `getting_started`
--

INSERT INTO `getting_started` (`id`, `step`, `title`, `featured_image`, `status`) VALUES
(1, 1, 'Get In Touch', '35a94-untitled-design-23-.png', 1),
(2, 2, 'Our friendly team will get in touch', 'becee-untitled-design-24-.png', 1),
(3, 3, 'Consultation, Assessment and Care Plan', '8115c-untitled-design-25-.png', 1),
(4, 4, 'Agreement & Consent', 'a5918-untitled-design-27-.png', 1),
(5, 5, 'Introduction to your core team', '5b768-untitled-design-26-.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `menu_master`
--

CREATE TABLE `menu_master` (
  `menu_id` int(11) NOT NULL,
  `menu_code` varchar(255) NOT NULL,
  `menu_name` varchar(255) NOT NULL,
  `menu_index` int(11) NOT NULL,
  `menu_type` enum('inner','outer') NOT NULL,
  `pre_menu_id` int(11) NOT NULL,
  `is_active` enum('Y','N') NOT NULL,
  `icon_class` varchar(255) NOT NULL,
  `route` varchar(255) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_by` int(11) NOT NULL,
  `modified_deleted_remarks` varchar(255) NOT NULL,
  `modified_by` varchar(255) NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menu_master`
--

INSERT INTO `menu_master` (`menu_id`, `menu_code`, `menu_name`, `menu_index`, `menu_type`, `pre_menu_id`, `is_active`, `icon_class`, `route`, `created_date`, `created_by`, `modified_deleted_remarks`, `modified_by`, `modified_date`) VALUES
(1, 'About', 'About', 2, 'outer', 0, 'Y', 'bx bx-briefcase-alt-2', 'javascript;', '2024-09-17 02:51:48', 4, 'position change', '4', '2024-09-17 08:36:48'),
(2, 'aboutUs', 'About Us', 1, 'outer', 1, 'Y', 'bx bx-briefcase-alt-2', 'App/aboutUs', '2024-09-17 02:49:45', 4, '', '', '0000-00-00 00:00:00'),
(3, 'testimonials', 'Testimonial', 2, 'outer', 1, 'Y', 'bx bxs-user-voice', 'App/testimonials', '2024-09-17 02:51:22', 4, '', '', '0000-00-00 00:00:00'),
(4, 'homePageSetup', 'Home', 1, 'outer', 0, 'Y', 'bx bx-map-pin', 'javascript;', '2024-09-17 02:52:46', 4, '', '', '0000-00-00 00:00:00'),
(5, 'slider', 'Slider', 1, 'outer', 4, 'Y', 'bx bxs-user-voice', 'App/slider', '2024-09-17 02:53:11', 4, '', '', '0000-00-00 00:00:00'),
(6, 'otherManagement', 'Others', 3, 'outer', 0, 'Y', 'bx bx-food-menu', 'javascript;', '2024-09-17 02:55:11', 4, 'icon change', '4', '2024-09-17 08:40:11'),
(7, 'serviceSetup', 'Services', 1, 'outer', 6, 'Y', 'bx bxs-user-voice', 'App/services', '2024-09-17 02:54:39', 4, '', '', '0000-00-00 00:00:00'),
(8, 'masterSetup', 'Master Setup', 5, 'outer', 0, 'Y', 'bx bx-box', 'javascript;', '2024-10-07 17:41:48', 4, 'position  change', '4', '2024-10-07 23:26:48'),
(9, 'siteSetting', 'Site Setting', 1, 'outer', 8, 'Y', 'bx bxs-user-voice', 'App/siteSetting/edit/1', '2024-09-17 02:57:19', 4, '', '', '0000-00-00 00:00:00'),
(10, 'blogSetup', 'Blogs', 2, 'outer', 6, 'Y', 'bx bxs-user-voice', 'App/blogs', '2024-09-17 18:54:52', 4, '', '', '0000-00-00 00:00:00'),
(11, 'whyChooseUs', 'Why Choose Us', 3, 'outer', 6, 'Y', 'bx bxs-user-voice', 'App/whyChooseUs', '2024-09-18 18:09:04', 4, '', '', '0000-00-00 00:00:00'),
(12, 'contact', 'Contact', 4, 'outer', 0, 'Y', 'bx bx-map-pin', 'javascript;', '2024-10-07 17:42:15', 4, '', '', '0000-00-00 00:00:00'),
(13, 'contactInbox', 'Contact Inbox', 1, 'outer', 12, 'Y', 'bx bx-map-pin', 'App/contactInbox', '2024-10-07 17:42:51', 4, '', '', '0000-00-00 00:00:00'),
(14, 'gettingStarted', 'Getting Started', 2, 'outer', 12, 'Y', 'bx bxs-user-voice', 'App/gettingStarted', '2024-10-07 17:43:58', 4, '', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `featured_image` varchar(255) NOT NULL,
  `detail_page_image` varchar(255) NOT NULL,
  `banner_image` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `description`, `featured_image`, `detail_page_image`, `banner_image`, `slug`, `status`) VALUES
(6, 'Community Nursing', '<p>Mental Health Support. Tracheostomy Management. Urinary Catheter Management.</p>\r\n', 'b2ed2-community_nursing.png', '62a0f-untitled-design-6-.png', '', 'community-nursing', 1),
(7, 'Community Participation', '<p>Social and Recreational Activities. Skill Development. Transport assistance.</p>\r\n', '2cbde-community_participation.png', '12470-untitled-design-7-.png', '', 'community-participation', 1),
(8, 'Personal Care', '<p>Daily living support. Meal Preparation and nutrition.</p>\r\n', 'f1545-personal_care.png', '452a9-untitled-design-8-.png', '', 'personal-care', 1),
(9, 'Disability Accomodation', '<p><span style=\"font-size:11pt\"><span style=\"font-family:Aptos,sans-serif\">Supported Independent Living,&nbsp;</span></span><span style=\"font-size:11pt\"><span style=\"font-family:Aptos,sans-serif\">Disability Accommodation </span></span></p>\r\n', '7724d-untitled-design-59-.png', 'e6af4-untitled-design-9-.png', '', 'disability-accomodation', 1);

-- --------------------------------------------------------

--
-- Table structure for table `site_setting`
--

CREATE TABLE `site_setting` (
  `site_id` int(11) NOT NULL,
  `favicon` varchar(255) NOT NULL,
  `site_logo` varchar(255) NOT NULL,
  `site_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `footer_text` varchar(255) NOT NULL,
  `map_link` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `site_setting`
--

INSERT INTO `site_setting` (`site_id`, `favicon`, `site_logo`, `site_name`, `email`, `address`, `phone_number`, `footer_text`, `map_link`) VALUES
(1, '', '870e1-logo2.png', 'Orchid Independent Caring', 'orchid.independentcaring@gmail.com', '18302 Beach Blvd, Huntington Beach, CA 92648, USA', '+1 657 329 0008', 'Copyright © Masala Waves, All Right Reserved.', 'https://maps.app.goo.gl/rmj2cBpDoGBYTJwh6');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `sub_title` varchar(255) NOT NULL,
  `featured_image` varchar(255) NOT NULL,
  `status` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `title`, `sub_title`, `featured_image`, `status`) VALUES
(1, 'Personalized support for NDIS Participants', 'Empowering individuals with disabilities to live independently and achieve their with compassionate, tailored care.', 'cbdfa-slider.png', 1),
(2, 'Personalized support for NDIS Participants', 'Empowering individuals with disabilities to live independently and achieve their with compassionate, tailored care.', '0dc72-untitled-design-58-.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `featured_image` varchar(255) NOT NULL,
  `fb_link` varchar(255) NOT NULL,
  `instagram_link` varchar(255) NOT NULL,
  `linkedin_link` varchar(255) NOT NULL,
  `status` enum('Active','Not-Active') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `name`, `designation`, `featured_image`, `fb_link`, `instagram_link`, `linkedin_link`, `status`) VALUES
(2, 'Basanta', 'Director', 'uploads/team/1717788707_team-v1-4.jpg', 'facebook-link', 'na', 'na', 'Active'),
(3, 'Subash', 'Director', 'uploads/team/1717788728_team-v1-3.jpg', 'na', 'na', 'na', 'Active'),
(4, 'Bina', 'Developer', 'uploads/team/1717788746_team-v1-6.jpg', 'na', 'na', 'na', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `message` longtext NOT NULL,
  `featured_image` varchar(255) NOT NULL,
  `status` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `designation`, `message`, `featured_image`, `status`) VALUES
(5, 'Mark R.', 'Manager', '<p>&quot;Thanks to Orchid Independent Caring, I&#39;ve been able to live independently and focus on achieving my goals. Their support has truly made a difference in my life, and I couldn&#39;t be happier with the care I receive.&quot;</p>\r\n', '2d8e3-untitled-design-60-.png', 1),
(6, 'Emily S.', 'HR', '<p style=\"text-align:justify\">&quot;The level of care and attention my daughter receives from Orchid Independent Caring is outstanding. They tailor their services to meet her unique needs, which has greatly improved her quality of life. I highly recommend them to anyone seeking reliable, compassionate support.&quot;</p>\r\n', 'ef6bd-untitled-design-61-.png', 1),
(8, 'James L.', 'Software Engineer', '<p style=\"text-align:justify\">&quot;Orchid Independent Caring has been instrumental in helping me live a more fulfilling life. Their team understands my challenges and works closely with me to provide the right support, allowing me to gain confidence and independence. They truly care about their clients.&quot;</p>\r\n', '22bd5-untitled-design-62-.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `profile_image` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `profile_image`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Orchid Migration', 'admin@orchidmigration.com.au', 'uploads/site/1717641322_unnamed (1).jpg', NULL, '$2y$12$c2ERBix/GZOo/qPZT6Yei.X0HRKGGJURLjjRYJoo/wT8GggabaL7e', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_auth`
--

CREATE TABLE `user_auth` (
  `user_id` int(11) NOT NULL,
  `full_name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `email` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `pass` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `is_active` enum('Active','In-Active') CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'Active',
  `is_locked_flag` enum('Locked','Not-Locked') CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'Not-Locked'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `user_auth`
--

INSERT INTO `user_auth` (`user_id`, `full_name`, `email`, `pass`, `is_active`, `is_locked_flag`) VALUES
(4, 'Admin', 'orchid.independentcaring@gmail.com', 'cd697da59e93b36beff6ba8f9c51463f', 'Active', 'Not-Locked');

-- --------------------------------------------------------

--
-- Table structure for table `why_choose_us`
--

CREATE TABLE `why_choose_us` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `featured_image` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `why_choose_us`
--

INSERT INTO `why_choose_us` (`id`, `title`, `description`, `featured_image`, `status`) VALUES
(1, 'Commitment', '<p style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Aptos,sans-serif\">Our commitment to respect, empowerment, integrity and collaboration ensures that every participant receives highest standard of care, tailored to their unique needs. </span></span></p>\r\n', '5508a-untitled-design.png', 1),
(2, 'Transparency', '<p><span style=\"font-size:11pt\"><span style=\"font-family:Aptos,sans-serif\">We believe in transparency and creating a safe environment to give feedback. </span></span></p>\r\n', '8300f-untitled-design-1-.png', 1),
(3, 'Relationship', '<p><span style=\"font-size:11pt\"><span style=\"font-family:Aptos,sans-serif\">We thrive on building better relationship with participant/ family and carers.</span></span></p>\r\n', 'bad51-untitled-design-2-.png', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `getting_started`
--
ALTER TABLE `getting_started`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_master`
--
ALTER TABLE `menu_master`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_setting`
--
ALTER TABLE `site_setting`
  ADD PRIMARY KEY (`site_id`) USING BTREE;

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_auth`
--
ALTER TABLE `user_auth`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `why_choose_us`
--
ALTER TABLE `why_choose_us`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `getting_started`
--
ALTER TABLE `getting_started`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `menu_master`
--
ALTER TABLE `menu_master`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `site_setting`
--
ALTER TABLE `site_setting`
  MODIFY `site_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_auth`
--
ALTER TABLE `user_auth`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `why_choose_us`
--
ALTER TABLE `why_choose_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
