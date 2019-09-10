-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2019 at 09:41 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movietrailer`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `movietrailers`
--

CREATE TABLE `movietrailers` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `durition` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `date` varchar(1000) NOT NULL,
  `link` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movietrailers`
--

INSERT INTO `movietrailers` (`id`, `title`, `image`, `description`, `durition`, `type`, `date`, `link`, `created_at`, `updated_at`) VALUES
(1, 'Aquaman', '1567952047.jpg', 'Aquaman is a 2018 American superhero film based on the DC Comics character of the same name. Distributed by Warner Bros. Pictures, it is the sixth film in the DC Extended Universe (DCEU).', '100Min', 'Action', '20 November 2018', 'https://www.youtube.com/watch?v=9Yam5B_iasY&feature=youtu.be', '2019-09-08 19:11:33', '2019-09-08 08:14:07'),
(2, 'Inside Out', '1567953093.jpg', 'Growing up can be a bumpy road, and it\'s no exception for Riley, who is uprooted from her Midwest life when her father starts a new job in San Francisco. Like all of us, Riley is guided by her emotions - Joy (Amy Poehler), Fear (Bill Hader), Anger (Lewis Black), Disgust (Mindy Kaling) and Sadness (Phyllis Smith).', '94 Min', 'Animation, Kids & Family', 'Jun 19, 2015', 'https://youtu.be/seMwpP0yeu4', '2019-09-08 08:31:36', '2019-09-08 08:31:36'),
(3, 'Jurassic World', '1568013805.jpg', 'Located off the coast of Costa Rica, the Jurassic World luxury resort provides a habitat for an array of genetically engineered dinosaurs, including the vicious and intelligent Indominus rex. When the massive creature escapes, it sets off a chain reaction that causes the other dinos to run amok.', '2 hr 4 Min', 'adventure, action', 'une 12, 2015', 'https://youtu.be/RFinNxS5KN4', '2019-09-09 01:23:25', '2019-09-09 01:23:25'),
(4, 'Mad Max', '1568014216.jpg', 'Mad Max is a 1979 Australian dystopian action film directed by George Miller, produced by Byron Kennedy, and starring Mel Gibson as \"Mad\" Max Rockatansky, Joanne Samuel, Hugh Keays-Byrne, Steve Bisley, Tim Burns, and Roger Ward.', '100Min', 'Action, Adventure', 'Jun 19, 2015', 'https://youtu.be/hEJnMQG9ev8', '2019-09-09 01:30:16', '2019-09-09 01:30:16'),
(5, 'Avengers', '1568040881.jpeg', 'Avengers: Endgame was widely anticipated, and Disney backed the film with extensive marketing campaigns. It premiered in Los Angeles on April 22, 2019, and was theatrically released in the United States on April 26, 2019, in IMAX and 3D.', '2 hr 3 Min', 'Action, Adventure', 'April 22, 2019', 'https://youtu.be/TcMBFSGVi1c', '2019-09-09 14:54:41', '2019-09-09 08:54:41');

-- --------------------------------------------------------

--
-- Table structure for table `tvshows`
--

CREATE TABLE `tvshows` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `date` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tvshows`
--

INSERT INTO `tvshows` (`id`, `title`, `image`, `description`, `date`, `link`, `created_at`, `updated_at`) VALUES
(2, 'Master of None', '1568048493.jpg', 'Comic Aziz Ansari and writer Alan Yang are the creators of this Netflix-original comedy, which is loosely based on Ansari\'s real-life experiences. Ansari plays the role of Dev, a New York-based actor who is struggling to identify what he really wants, both personally and professionally.', '20 November 2017', 'https://youtu.be/BHODdNs8vSo', '2019-09-09 11:01:33', '2019-09-09 11:01:33'),
(3, 'Empire', '1568048638.jpg', 'DescriptionHip-hop artist and CEO of Empire Entertainment, Lucious Lyon, has always ruled unchallenged, but a medical diagnosis predicts he will be incapacitated in three years, which prompts the sharks to circle. Without further damaging his family, he must decide which of his three sons will take over. His favorite, young Hakeem, is a gifted musician but values fame over hard work.', '20 November 2017', 'https://youtu.be/lmi5QbkhQ1Q', '2019-09-09 11:03:58', '2019-09-09 11:03:58'),
(4, 'Breaking Bad', '1568048742.jpg', 'Mild-mannered high school chemistry teacher Walter White thinks his life can\'t get much worse. His salary barely makes ends meet, a situation not likely to improve once his pregnant wife gives birth, and their teenage son is battling cerebral palsy. But Walter is dumbstruck when he learns he has terminal cancer. Realizing that his illness probably will ruin his family financially', '20 November 2019', 'https://youtu.be/HhesaQXLuRY', '2019-09-09 11:05:42', '2019-09-09 11:05:42'),
(5, 'April HBO', '1568048981.png', 'April is coming, but the final season of Game of Thrones is not the only thing to look forward to this month on HBO. In addition to that much-anticipated premiere, lots of other TV shows, movies and original programming are coming to the HBO NOW streaming service in April 2019.', '20 November 2019', 'https://youtu.be/s9APLXM9Ei8', '2019-09-09 11:09:41', '2019-09-09 11:09:41'),
(6, 'The Walking Dead', '1568053393.jpg', 'Based on the comic book series written by Robert Kirkman, this gritty drama portrays life in the months and years that follow a zombie apocalypse. Led by former police officer Rick Grimes, his family and a group of other survivors find themselves constantly on the move in search of a safe and secure home.', '30 November 2016', 'https://youtu.be/w-omQBtshvk', '2019-09-09 18:23:13', '2019-09-09 12:23:13');

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

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'al amin', 'amin35-1260@diu.edu.bd', NULL, '$2y$10$gcQ.K1jxWMz/Oure9T7Jx.yzDo2rKWiPbR07wp/3XTS5i690YIQ3a', NULL, '2019-09-07 09:46:00', '2019-09-07 09:46:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movietrailers`
--
ALTER TABLE `movietrailers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tvshows`
--
ALTER TABLE `tvshows`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `movietrailers`
--
ALTER TABLE `movietrailers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tvshows`
--
ALTER TABLE `tvshows`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
