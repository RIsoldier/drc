-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2016 at 01:51 AM
-- Server version: 5.7.11
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `l5`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(10) UNSIGNED NOT NULL,
  `language_id` int(10) UNSIGNED NOT NULL,
  `position` int(11) DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `user_id_edited` int(10) UNSIGNED DEFAULT NULL,
  `article_category_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `introduction` text COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `source` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `picture` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `language_id`, `position`, `user_id`, `user_id_edited`, `article_category_id`, `title`, `slug`, `introduction`, `content`, `source`, `picture`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, 1, NULL, 1, NULL, 5, 'Endorsement Letter from Franklin Massari, M.D., F.A.C.S.', 'endorsement-letter-from-franklin-massari-m-d-f-a-c-s', '<p>Head and neck surgery is a complex specialty. Some would say facial surgery is the most complex work a surgeon can engage in, at least as it relates to the number of nerves, muscles and vessels that must be considered. As such, let me recommend that a board certified otolaryngologist who is also board certified as a facial plastic surgeon, is the best choice for you if you’re considering facial rejuvenation.</p>', '<p><font face="Arial">To Whom it may concern,</font></p><p><span style="font-family: Arial; line-height: 1.42857;">If you are reading this letter, you must be thinking about facial rejuvenation. You probably have many questions. And quite possibly a few fears. It’s only natural. That’s why I’m writing this letter.</span><br></p><p><font face="Arial">To tell you about Dr. Andrew Coundouriotis from my perspective as a physician and head and neck surgeon. I practiced for 32 years and brought Dr. Coundouriotis to town in 1993 to be a part of and eventually to take over my practice.</font></p><p><font face="Arial">Head and neck surgery is a complex specialty. Some would say facial surgery is the most complex work a surgeon can engage in, at least as it relates to the number of nerves, muscles and vessels that must be considered. As such, let me recommend that a board certified otolaryngologist who is also board certified as a facial plastic surgeon, is the best choice for you if you’re considering facial rejuvenation.</font></p><p><font face="Arial">Dr. Coundouriotis is in select company with regard to his qualifications. He received his training at Duke University, is certified by the American Board of Otolaryngology and by the American Board of Facial Plastic and Reconstructive Surgery. He is also a Fellow of The American College of Surgeons.</font></p><p><font face="Arial">As a surgeon myself, I understand the commitment to excellence it takes to reach those levels. Consider the extensive training, programs and certifications Dr. Coundouriotis has completed in order to become board certified as a facial plastic surgeon:</font></p><p><font face="Arial">Board certification by the American Board of Facial Plastic and Reconstructive surgery requires that a doctor:</font></p><p><font face="Arial">Completes an approved residency after medical school in one of two surgical specialties focusing on facial plastic surgery (otolaryngology – head and neck surgery or plastic and reconstructive surgery) Is certified by two boards, having earned prior certification in one of those specialties through the American Board of Medical Specialties or the Royal College of Physicians and Surgeons in Canada, and ABFPRS certification Successfully completes a two-day examination Completes at least two-years of clinical experience.</font></p><p><font face="Arial">Undergoes peer review, including operative reports of a minimum of 100 facial plastic surgery cases.</font></p><p><font face="Arial">Even more impressive, only 30 Fellowships in Facial Plastic and Reconstructive Surgery are awarded each year in this country. Fellowships are very competitive and only the most accomplished surgeons are admitted. This fellowship allows a surgeon to spend one year of intensive one-on-one work with a premier plastic surgeon. Only 61 surgeons in Florida are certified by the American Board of Facial Plastic & Reconstructive Surgery and only one in St. Petersburg, </font></p><p><font face="Arial">Dr. Coundouriotis, is among that elite group.</font></p><p><font face="Arial">In the years since he joined my practice, Dr. Coundouriotis has performed countless head and neck surgeries and has earned not only my respect, but also, the respect of the medical community. I think you can see why I recruited Dr. Coundouriotis into my practice and why I was so comfortable turning over my life’s work to him upon my retirement. In fact, I so trusted his surgical skills and judgment that I chose him to perform a facial rejuvenation procedure on my wife with excellent results. I encourage you to get to know him. And to trust your face to his most capable hands."</font></p><p><font face="Arial">Sincerely,</font></p><p><span style="font-family: Arial; line-height: 1.42857;">Franklin Massari, M.D., F.A.C.S.</span><br></p>', 'http://health.usnews.com/doctors/franklin-massari-739821', 'blog-image.jpg', '2016-05-20 23:01:22', '2016-05-20 23:13:11', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `articles_language_id_foreign` (`language_id`),
  ADD KEY `articles_user_id_foreign` (`user_id`),
  ADD KEY `articles_user_id_edited_foreign` (`user_id_edited`),
  ADD KEY `articles_article_category_id_foreign` (`article_category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_article_category_id_foreign` FOREIGN KEY (`article_category_id`) REFERENCES `article_categories` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `articles_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`),
  ADD CONSTRAINT `articles_user_id_edited_foreign` FOREIGN KEY (`user_id_edited`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `articles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
