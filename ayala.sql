-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 02, 2024 at 08:47 AM
-- Server version: 8.1.0
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ayalaland`
--

-- --------------------------------------------------------

--
-- Table structure for table `amenities`
--

CREATE TABLE `amenities` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `amenities`
--

INSERT INTO `amenities` (`id`, `created_at`, `updated_at`, `name`) VALUES
(1, NULL, NULL, 'Audio-Visual Room'),
(2, NULL, NULL, 'Basketball Court'),
(3, NULL, NULL, 'Boardroom'),
(4, NULL, NULL, 'Business Lounge'),
(5, NULL, NULL, 'Changing Room with Sauna and Hot Tub'),
(6, NULL, NULL, 'Club House'),
(7, NULL, NULL, 'Concierge Desk'),
(8, NULL, NULL, 'Drop Off Area'),
(9, NULL, NULL, 'Fitness Center'),
(10, NULL, NULL, 'Function Rooms'),
(11, NULL, NULL, 'Game Room'),
(12, NULL, NULL, 'Grand Lobby'),
(13, NULL, NULL, 'Indoor Lap Pool'),
(14, NULL, NULL, 'Jog Trail'),
(15, NULL, NULL, 'Kiddie Pool'),
(16, NULL, NULL, 'Kids Outdoor Play Area'),
(17, NULL, NULL, 'Lobby Lounge'),
(18, NULL, NULL, 'Mail Room'),
(19, NULL, NULL, 'Meeting Rooms'),
(20, NULL, NULL, 'Move Studio (Dance Studio)'),
(21, NULL, NULL, 'Outdoor Children\'s Play Area'),
(22, NULL, NULL, 'Pocket Gardens'),
(23, NULL, NULL, 'Pool Deck and Lounge'),
(24, NULL, NULL, 'Pre-function Areas'),
(25, NULL, NULL, 'Prefunction Room'),
(26, NULL, NULL, 'Private Drop-off Area'),
(27, NULL, NULL, 'Private Theater'),
(28, NULL, NULL, 'Reception Center'),
(29, NULL, NULL, 'Recital Studio'),
(30, NULL, NULL, 'Residential Administration Office'),
(31, NULL, NULL, 'Residents Lounge'),
(32, NULL, NULL, 'Retail Spaces'),
(33, NULL, NULL, 'Sound Stage'),
(34, NULL, NULL, 'Tee on Third (Golf Simulation Room)'),
(35, NULL, NULL, 'The Playhouse'),
(36, NULL, NULL, 'The Studio (Music Room)'),
(37, NULL, NULL, 'Wine Room'),
(38, NULL, NULL, 'Play Area'),
(39, NULL, NULL, 'Lap Pool'),
(40, NULL, NULL, 'Entertainment Room'),
(41, NULL, NULL, 'Children\'s Playground'),
(42, NULL, NULL, 'Sky Lounge'),
(43, NULL, NULL, 'Adult Pool'),
(44, NULL, NULL, 'Wi-Fi Lounge'),
(45, NULL, NULL, 'Barbeque Pit'),
(46, NULL, NULL, 'Landscaped Gardens'),
(47, NULL, NULL, 'Gazebo');

-- --------------------------------------------------------

--
-- Table structure for table `auth`
--

CREATE TABLE `auth` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `auth`
--

INSERT INTO `auth` (`id`, `created_at`, `updated_at`, `fullname`, `email`, `password`, `user_type`) VALUES
(4, '2024-02-26 21:07:59', '2024-02-26 21:07:59', 'Johan Mark', 'jm@gmail.com', '$2y$10$JwR2ExjeruDraVnqRxOf8ezFusKVRcmlEkFH7AyYScS4HQ1iluz4y', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `page` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `created_at`, `updated_at`, `page`, `image_path`, `title`, `description`) VALUES
(1, NULL, NULL, 'Residences', 'ayala/MGEAerialCommunityShot_optimized.jpg', 'Residences', 'We provide diverse residential properties catering to a broad market segment located all over the Philippines, aiming to raise and redefine the quality of life for more Filipinos.\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `careers`
--

CREATE TABLE `careers` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `img1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img3` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stmt1` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `stmt1_2` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `img4` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stmt2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img5` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `h1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `h1_stmt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `h2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `h2_stmt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `h3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `h3_stmt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `h4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `h4_stmt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `h5` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `h5_stmt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img6` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `careers`
--

INSERT INTO `careers` (`id`, `created_at`, `updated_at`, `img1`, `img2`, `img3`, `title1`, `stmt1`, `stmt1_2`, `img4`, `title2`, `stmt2`, `img5`, `h1`, `h1_stmt`, `h2`, `h2_stmt`, `h3`, `h3_stmt`, `h4`, `h4_stmt`, `h5`, `h5_stmt`, `img6`) VALUES
(1, NULL, '2024-03-14 01:05:53', 'ayala/DSC2549-e1581518825446.jpg', 'ayala/DSC2759.jpg', 'ayala/60-1.jpg', 'Empowering our people', 'Ayala Land is ceaseless in its efforts in creating leaders and agents of change to support the company’s vision of building sustainable communities for more people. We provide a suitable environment for learning and development and strategically sets up its people for excellence.', 'Upholding the highest standards of people development, we ensure that all our employees receive the best training opportunities while enjoying individually customized programs that respond to their career requirements.', 'ayala/DSC2735.jpg', 'Pioneering standard and practices that reflect our values', 'As a responsible corporate citizen, we act with integrity, foresight, and prudence.', 'ayala/DSC2655.jpg', 'Leadership', 'We allow people to make decisions within their limits of authority and to be accountable for their actions.', 'Integrity', 'We do the right thing.', 'Vision', 'We build with the future in mind.', 'Excellence', 'We give our best in all that we do.', 'Malasakit (Compassion)', 'We care enough to go the extra mile.', 'ayala/IMG_7104-e1585239810327.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `estates`
--

CREATE TABLE `estates` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `ft_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ft_img1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ft_img2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ft_img3` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ft_sub1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ft_con1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ft_sub2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ft_con2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ft_sub3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ft_con3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `spanA` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titleA` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `con1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `con1_a` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `con1_b` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `con1_c` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `con2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img3` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `con3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img4` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `con4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img5` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub5` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `con5` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `spanB` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titleB` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subB` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `conB` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub6` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `con6` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img6` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img7` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub7` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `con7` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub8` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `con8` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img8` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `estates`
--

INSERT INTO `estates` (`id`, `created_at`, `updated_at`, `ft_title`, `ft_img1`, `ft_img2`, `ft_img3`, `ft_sub1`, `ft_con1`, `ft_sub2`, `ft_con2`, `ft_sub3`, `ft_con3`, `spanA`, `titleA`, `sub1`, `con1`, `con1_a`, `con1_b`, `con1_c`, `img2`, `sub2`, `con2`, `img3`, `sub3`, `con3`, `img4`, `sub4`, `con4`, `img5`, `sub5`, `con5`, `spanB`, `titleB`, `subB`, `conB`, `sub6`, `con6`, `img6`, `img7`, `sub7`, `con7`, `sub8`, `con8`, `img8`) VALUES
(1, NULL, NULL, 'Creating value for the community', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `img_property` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `created_at`, `updated_at`, `img_property`, `url`) VALUES
(8, '2024-03-20 18:34:24', '2024-03-20 18:34:24', 'The Courtyards at Vermosa', 'ayala/CCS Main Logo.jpg'),
(10, '2024-03-24 17:30:05', '2024-03-24 17:30:05', 'Le Pont Residences', 'ayala/le-pont-residences-slide1.jpg'),
(11, '2024-03-25 16:09:08', '2024-03-25 16:09:08', 'Le Pont Residences', 'ayala/7.jpg'),
(12, '2024-03-25 19:41:26', '2024-03-25 19:41:26', 'Le Pont Residences', 'ayala/20230525_195100.jpg'),
(13, '2024-03-25 21:17:11', '2024-03-25 21:17:11', 'Le Pont Residences', 'ayala/CCS Logo.jpg'),
(16, '2024-04-01 23:38:30', '2024-04-01 23:38:30', 'Sync', NULL),
(17, '2024-04-02 00:44:01', '2024-04-02 00:44:01', 'Gateway Regency Studios', 'ayala/mantawi-residences-slide1.jpg'),
(18, '2024-04-02 00:45:05', '2024-04-02 00:45:05', 'The Courtyards at Vermosa', 'ayala/tv.png');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `logo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `h1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `carousel1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `carousel1_desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `carousel1_img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `carousel2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `carousel2_desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `carousel2_img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `carousel3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `carousel3_desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `carousel3_img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `carousel4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `carousel4_desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `carousel4_img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stmt1` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `bg_img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `h3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stmt2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quote` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stmt3` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `img2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img3` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `stmt4` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `stmt4_1` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `span1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title5` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stmt5` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `stmt5_1` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `stmt5_2` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `img4` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img4_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img4_stmnt` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `view` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `view_link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fb` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `twtr` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `linked` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ig` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `created_at`, `updated_at`, `logo`, `h1`, `carousel1`, `carousel1_desc`, `carousel1_img`, `carousel2`, `carousel2_desc`, `carousel2_img`, `carousel3`, `carousel3_desc`, `carousel3_img`, `carousel4`, `carousel4_desc`, `carousel4_img`, `img1`, `title1`, `stmt1`, `bg_img`, `h3`, `title2`, `stmt2`, `quote`, `name`, `position`, `title3`, `stmt3`, `img2`, `img3`, `stmt4`, `stmt4_1`, `span1`, `title4`, `title5`, `stmt5`, `stmt5_1`, `stmt5_2`, `img4`, `img4_title`, `img4_stmnt`, `view`, `view_link`, `logo2`, `address`, `fb`, `twtr`, `linked`, `ig`) VALUES
(1, NULL, '2024-03-14 00:51:13', 'ayala/ALI-high-res-logo-PNG-retina-01.png', 'Enhancing Land Enriching Lives', 'Makati', 'REALIZING POTENTIAL', 'ayala/Ayala-Triangle-Gardens_Day-2.webp', 'Vermosa', 'ACTIVE LIVING', 'ayala/MG_0634-1-e1583407361787.webp', 'Nuvali', 'DIVERSITY OF SPACES', 'ayala/nuvali-wakeboard-02-e1583460985498.webp', 'Vertis North', 'ENERGIZING CITIES', 'ayala/HeroImage31_optimized-1.webp', 'ayala/nuvali-family-001.webp', 'Creating quality products and services for the Filipino community', 'As a trusted real estate developer in the Philippines, Ayala Land has one goal in mind: To enhance land and enrich lives for more people.', 'ayala/Image-10-1.webp', 'ANNUAL REPORT', 'Transforming spaces to foster growth for communities and businesses', 'Ayala Land thoughtfully builds estates and projects that enable families and local enterprises to flourish while improving the living standards for Filipinos.', 'Our diversified portfolio has served us in good stead, especially during this pandemic, enabling us to cushion the impact of cyclicality and risks within each business line.', 'Fernando Zobel de Ayala', 'CHAIRMAN', 'A legacy of trailblazing developments', 'Ayala Land, Inc. is the largest property developer in the Philippines, designing large-scale, mixed-use estates that have grown into thriving economic centers. We create master-planned, sustainable developments in urban and rural areas, unlocking the maximum use of land for the benefit of communities, investors, and shareholders.', 'ayala/Tower-One-in-QA-campaign-e1583323254104.webp', 'ayala/photo.webp', 'Ayala Land offers a balanced and complementary mix of residential developments, shopping centers, offices, hotels and resorts, and strategic investments.', 'We pioneer standards in sustainable development, creating a blueprint by which every Ayala Land development is designed. Our commitment to pushing for sustainable real estate developments in the Philippines allows us to deliver quality products and services and provide long-term value for all of our stakeholders.', 'RESIDENCES', 'Building your ideal home', 'Matching various lifestyles', 'We carefully select land in key growth areas to provide lasting value for communities. We tailor each development according to the site’s natural ecosystem and terrain to ensure eco-efficient and long-term use. Thoughtfully masterplanned, each project leverages on the area’s location to address the needs of the surrounding community.', 'We use our experience as real estate developers in the Philippines to identify high-potential locations that can contribute to economic growth, allowing us to continually enhance land use and enrich lives.', 'We deliver quality homes through our five brands: Ayala Land Premier, Alveo, Avida, Amaia, and BellaVita.', 'ayala/Alviera-Photo-principle-flatten.webp', 'Ayala Land Premier', 'Innovatively designed and exceptionally engineered, Ayala Land Premier offers luxury homes for discerning homeowners seeking a distinct living experience.', 'VIEW RESIDENCES', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `legacy`
--

CREATE TABLE `legacy` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `video` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stmt1` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `stmt2` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `h2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `legacy`
--

INSERT INTO `legacy` (`id`, `created_at`, `updated_at`, `video`, `title1`, `stmt1`, `stmt2`, `h2`) VALUES
(1, NULL, '2024-03-14 00:55:04', 'VrjEWvmRY5o', 'A pioneer in integrated mixed-use developments', 'Ayala Land, Inc. was the real estate division of Ayala Corporation until it fully branched out on its own in 1988. Its beginnings are anchored on the development of Makati. Having seen the potential in a large, uncharted land known as Hacienda Makati. The company then created a unique masterplan for the area, which has now evolved into the leading financial and central business district in the Philippines.', 'Ayala Land became publicly listed through an offering of its primary and secondary shares on the Makati and Manila Stock Exchanges in July of 1991. The company also offers services in property management and construction while its core businesses are rooted in strategic landbank management, residential development retail shopping centers, offices, and hotels & resorts.', 'Get a glimpse of our history by watching the Ayala Land corporate video on this page.');

-- --------------------------------------------------------

--
-- Table structure for table `makati`
--

CREATE TABLE `makati` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `h1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `p1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `h2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ph1` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `ph2` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `ph3` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `loc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `con` varchar(900) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `con1` varchar(900) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `con2` varchar(900) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `con3` varchar(900) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `con4` varchar(900) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub5` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `con5` varchar(900) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub6` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `con6` varchar(900) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub7` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `con7` varchar(900) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `img1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img3` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img4` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img5` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img6` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img7` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `makati`
--

INSERT INTO `makati` (`id`, `created_at`, `updated_at`, `h1`, `p1`, `h2`, `ph1`, `ph2`, `ph3`, `loc`, `title`, `con`, `sub1`, `con1`, `sub2`, `con2`, `sub3`, `con3`, `sub4`, `con4`, `sub5`, `con5`, `sub6`, `con6`, `sub7`, `con7`, `img1`, `img2`, `img3`, `img4`, `img5`, `img6`, `img7`) VALUES
(1, NULL, NULL, 'Ayala Land Properties in Makati | Ayala Land', 'Experience the very best of city living with Ayala condo in Makati. Browse through our Ayala Land Makati condos, where inspired living begins.', 'Featured Residences in Makati City', 'ayala/Parkford-Suites.webp', 'ayala/199-4.png', 'ayala/Avida-Towers-Makati-Southpoint.webp', 'Ayala Land Properties in Makati | Ayala Land', 'The Most Coveted Condos in Makati', 'Over decades, Ayala Land has developed and transformed Makati City into the contemporary urban playground it is today. It is a dynamic living and working community, with rewarding lifestyle experiences and residential developments that set the standard in sustainable living. Makati’s vibrant life embraces young professionals and families with exciting opportunities and unique moments.', 'An Address Like No Other', 'Makati condominiums are built near the center of business and numerous ultimate lifestyle destinations. Live inspired in a Makati condo with everything the city has to offer – be it for leisure, business, culture, fitness, or entertainment.', 'World-Class Amenities', 'Every residential unit in an Ayala Land condo in Makati is designed to embody comfort and radiate luxury. Spacious and built for elegance, your home becomes the perfect place to press pause and unwind. Amenities such as swimming pools, gym facilities, around the clock security, and pocket parks are more than enough to fulfill your needs.', '', '', '', '', '', '', '', '', '', '', 'ayala/Circuit-Makati-View-4.jpg', 'ayala/tower-one-makati-site-resilience.jpg', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2024_02_21_003255_create_navigation_table', 2),
(8, '2024_02_21_004246_create_navigation_table', 3),
(9, '2024_02_21_062222_create_feedback_table', 3),
(10, '2024_02_23_033344_create_header_table', 4),
(13, '2024_02_27_023544_create_auth_table', 5),
(16, '2024_02_28_012200_create_home_table', 6),
(17, '2024_03_01_022351_create_legacy_table', 7),
(18, '2024_03_05_055903_create_careers_table', 8),
(19, '2024_03_06_064801_create_premier_table', 9),
(20, '2024_03_08_025143_create_makati_table', 10),
(21, '2024_03_11_013943_create_residences_table', 11),
(22, '2024_03_12_004649_create_residences_table', 12),
(23, '2024_03_12_010409_create_residences_table', 13),
(24, '2024_03_12_022845_create_banner_table', 14),
(25, '2024_03_12_023038_create_banner_table', 15),
(26, '2024_03_12_025920_create_residences_table', 16),
(27, '2024_03_12_044524_create_residences_table', 17),
(28, '2024_03_13_031050_create_reshead_table', 18),
(29, '2024_03_14_053407_create_makaticentral_table', 19),
(30, '2024_03_14_064448_create_estates_table', 20),
(31, '2024_03_15_061242_create_properties_table', 21),
(32, '2024_03_15_080940_create_amenities_table', 22),
(33, '2024_03_15_083727_create_propam_table', 23),
(34, '2024_03_18_001312_create_gallery_table', 24),
(35, '2024_03_18_002151_create_establishment_table', 25),
(36, '2024_03_18_002505_create_nearby_table', 26),
(37, '2024_03_18_033850_create_size_table', 27),
(38, '2024_03_18_034058_create_prosize_table', 28);

-- --------------------------------------------------------

--
-- Table structure for table `nearby`
--

CREATE TABLE `nearby` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `property` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `establishment` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nearby`
--

INSERT INTO `nearby` (`id`, `created_at`, `updated_at`, `property`, `establishment`, `type`) VALUES
(6, '2024-03-18 23:08:09', '2024-03-18 23:08:09', 'The Courtyards at Vermosa', 'Mindoro State University', 'Schools'),
(25, '2024-04-01 17:09:00', '2024-04-01 17:09:00', 'Le Pont Residences', 'Robinsons Galleria', 'Malls/Shopping Centers'),
(26, '2024-04-01 17:09:13', '2024-04-01 17:09:13', 'Le Pont Residences', 'SM Megamall', 'Malls/Shopping Centers'),
(28, '2024-04-01 18:09:56', '2024-04-01 18:09:56', 'Gateway Regency Studios', 'Robinsons Cybergate Towers 1 2 & 3', 'Commercial Areas'),
(29, '2024-04-01 18:10:10', '2024-04-01 18:10:10', 'Gateway Regency Studios', 'Robinsons Cybergate Plaza', 'Commercial Areas'),
(30, '2024-04-01 18:10:22', '2024-04-01 18:10:22', 'Gateway Regency Studios', 'Ortigas Central Business District', 'Commercial Areas'),
(31, '2024-04-01 18:10:35', '2024-04-01 18:10:35', 'Gateway Regency Studios', 'Bonifacio Global City', 'Commercial Areas'),
(32, '2024-04-01 18:10:50', '2024-04-01 18:10:50', 'Gateway Regency Studios', 'Makati City', 'Commercial Areas'),
(33, '2024-04-01 18:11:28', '2024-04-01 18:11:28', 'Gateway Regency Studios', 'Forum Robinsons Mall', 'Malls/Shopping Centers'),
(34, '2024-04-01 18:11:40', '2024-04-01 18:11:40', 'Gateway Regency Studios', 'Shangri-La Plaza', 'Malls/Shopping Centers'),
(35, '2024-04-01 18:11:53', '2024-04-01 18:11:53', 'Gateway Regency Studios', 'SM Megamall', 'Malls/Shopping Centers'),
(36, '2024-04-01 18:12:06', '2024-04-01 18:12:06', 'Gateway Regency Studios', 'Greenfield District', 'Malls/Shopping Centers'),
(37, '2024-04-01 18:12:20', '2024-04-01 18:12:20', 'Gateway Regency Studios', 'Kapitolyo', 'Malls/Shopping Centers'),
(38, '2024-04-01 18:12:31', '2024-04-01 18:12:31', 'Gateway Regency Studios', 'Rockwell', 'Malls/Shopping Centers'),
(39, '2024-04-01 18:12:52', '2024-04-01 18:12:52', 'Gateway Regency Studios', 'MRT 3 Boni Station', 'Transportation Hubs'),
(40, '2024-04-01 18:13:07', '2024-04-01 18:13:07', 'Gateway Regency Studios', 'Pioneer Bus Stop', 'Transportation Hubs'),
(41, '2024-04-01 18:13:20', '2024-04-01 18:13:20', 'Gateway Regency Studios', 'PUV Terminal (Along Pioneer St.)', 'Transportation Hubs'),
(42, '2024-04-01 18:13:47', '2024-04-01 18:13:47', 'Gateway Regency Studios', 'La Salle Greenhills', 'Schools'),
(43, '2024-04-01 18:14:03', '2024-04-01 18:14:03', 'Gateway Regency Studios', 'Lourdes School Of Mandaluyong', 'Schools'),
(44, '2024-04-01 18:14:21', '2024-04-01 18:14:21', 'Gateway Regency Studios', 'University Of Asia And The Pacific', 'Schools'),
(45, '2024-04-01 18:14:38', '2024-04-01 18:14:38', 'Gateway Regency Studios', 'Ateneo Graduate School Of Business', 'Schools'),
(46, '2024-04-01 18:14:45', '2024-04-01 18:14:45', 'Gateway Regency Studios', 'Makati City', 'Schools'),
(47, '2024-04-01 23:38:30', '2024-04-01 23:38:30', 'Sync', NULL, NULL);

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
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `premier`
--

CREATE TABLE `premier` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `h1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `p1` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `h2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ph1` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `ph2` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `ph3` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `span` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `h3` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `p3a` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `p3b` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ph4` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `loc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `con1` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `con2` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `con3` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `con4` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `con5` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `img1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img3` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img4` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `premier`
--

INSERT INTO `premier` (`id`, `created_at`, `updated_at`, `h1`, `p1`, `h2`, `ph1`, `ph2`, `ph3`, `span`, `h3`, `p3a`, `p3b`, `ph4`, `loc`, `title`, `con1`, `sub1`, `con2`, `sub2`, `con3`, `sub3`, `con4`, `sub4`, `con5`, `img1`, `img2`, `img3`, `img4`) VALUES
(1, NULL, '2024-03-22 00:26:49', 'Ayala Land Premier', 'Creating new lifestyles in distinguished locations that are expertly crafted and designed to nurture current residents and future generations. These are homes you truly deserve.', 'Featured Ayala Land Premier Residences', 'ayala/20230525_195100.jpg', 'ayala/DuskExterior-Arbor-Lanes-Hires_optimized-e1582677335991.jpg', 'ayala/0823UPDATEDClubhousePoolandHallway-HighResNew_optimized-e1582677352179.jpg', 'AYALA LAND PREMIER', 'What is Ayala Land Premier?', 'Over the years, Ayala Land has transformed the landscape of luxury addresses in the Philippines. Ayala Land Premier is a testament to Ayala Land’s heritage in creating first-class residential developments that evoke the true essence of high-quality living. From high-rise condominiums to leisure communities and exclusive estates, Ayala Land Premier projects guarantee prestige, prime locations, and the aspirational lifestyle.', 'At Ayala Land Premier, we create new lifestyles in coveted locations, expertly developed to nurture current residents and enhance the lives of future generations. Live a life inspired by new horizons and luxury living at any of these Ayala Land Premier condominiums and estates.', 'ayala/ALP.jpg', 'Bonifacio Global City', 'Bonifacio Global City (BGC) -Taguig', 'Ayala Land’s first triumph in Taguig was turning the old Fort Bonifacio Base into a shining example of urban living, now known as Bonifacio Global City – one of Metro Manila’s key commercial and business districts. But while Bonifacio Global City’s booming business center may dominate its skyline, it’s more than fastest-emerging lifestyle hub in the metro, BGC features clean architecture, high-end shopping options, and a vibrant luxurious vigor. Our goal is to replicate BGC’s success at another development in Taguig City: Arca South. Arca South is set to be the newest enclave where sustainable and environmentally conscious development complements the wonders or metro living. With impressive highlights and surprises, make Taguig City the backyard of your dreams today with a luxury condominium at Ayala Land Premier in BGC and Arca South.', 'Gardencourt Residences', 'A five-tower Ayala Land Premier condo development in Arca South where one can bask in the serenity of lush greenery, sprawling parks, and verdant open spaces. After a long day at work, you can relax in the gardens and live a lifestyle entwined with nature while having the conveniences of city living just outside your front door. As Ayala Land revolutionizes urban living with units that provide refreshing ventilation and even distribution of natural light, you’ll wake up to bright mornings and live out a condo experience like no other.', 'West Gallery Place', 'The latest Ayala Land Premier project to grace High Street South’s esteemed selection of high-end residential towers. As the pioneer of sustainable development in the country, this Ayala Land Premier condo is filled with both the necessities of modern living and the comforts of nature. An address of classic sensibility and refinement, you’ll live out the epitome of contemporary urban living with its curated timeless spaces and proximity to a complete spectrum of refined lifestyle experiences. Reveal new dimensions of stylish, sustainable city living at West Gallery Place.', 'Arbor Lanes', 'An idyllic retreat right in the heart of an emerging city. With gardens, pools, and shared open spaces growing alongside spacious units and retail stores, Arbor Lanes is where everyday pursuits are inspired by leisure settings bathed in life and natural energy. Its progressive vision of urban development surrounded by lush landscaping gives you a preview of what true, sustainable urban development is meant to be.', '', '', '', '', 'ayala/DuskExterior-Arbor-Lanes-Hires_optimized-e1582677335991.jpg', ''),
(2, NULL, '2024-03-08 00:23:29', '', '', '', '', '', '', '', '', '', '', '', 'Makati', 'Makati', 'Makati City is where Ayala Land first began our mission to transform the meaning of urban living. Over the decades, our condominiums and luxury residential developments have taken the lifestyles of Makati residents to new heights. Privacy, comfort, and elegance – these are the key points that went into the creation of Ayala Land Premier projects in Makati. Best described as a dream home in the sky, every Ayala Land Premier in Makati condo exudes stylish modernity and warmth that welcomes you after a long day. Experience elevated living by owning your piece of the marvelous Makati skyline.', 'Park Central Towers', 'A prime residential enclave at Roxas Triangle                                 where luxury and convenience converge at the                                 heart of Makati. With its elegant high glass                                 ratio facade encompassing 68 storeys, the                                 high-end two-tower residence is set to unveil                                 the radiance of vast skyline views and exemplify                                 contemporary living. At the podium level, you’ll                                 have a wealthy selection of retail, dining, and                                 service establishments for a variety of delights                                 and modern conveniences. Be part of the graceful                                 unfolding of a coveted Makati address.', 'Garden Towers', 'Relish in the sublime experience of living naturally at the heart of Ayala Center. Beginning with seamless connectivity to Palm Promenade, Glorietta’s landscaped open spaces, Garden Towers welcomes you into a stunning green lobby and embraces you with lush greenery and exclusive sky gardens on select floors. You’ll bask in the seamless convergence of city and nature in the place you call home. With its underground and aboveground connection to Ayala Center, everything a busy lifestyle requires is within reach.', 'Two Roxas Triangle', 'The second tower of the Roxas Triangle                                         Towers. Built on an exclusive site with                                         elegant architecture and first-rate                                         amenities, this development is a                                         manifestation of Ayala Land’s lifetime                                         commitment to high-quality service and                                         maintenance. The first tower, One Roxas                                         Triangle, currently remains to be the                                         city’s preferred luxury address. Both                                         towers exemplify the Ayala Land Premier                                         brand of prestige, choice location, and                                         high-quality living.', '', '', 'ayala/Park-Central-Towers.jpg', '', 'ayala/two-roxas-triangle-makati.jpg', ''),
(5, '2024-03-08 00:03:11', '2024-03-08 00:03:11', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'QUEZON CITY AND PASIG', 'QUEZON CITY AND PASIG', 'With pervasive city landscapes all around, urban living can be a drab and greenery has become a luxury for the dwellers of the metro. Developed by Ayala Land and Eton Properties, Parklinks brings the best of luxurious cosmopolitan living to Quezon City and Pasig. Envisioned to be Metro Manila’s greenest urban development, Parklinks embraces three central themes: Life, Light, and Space. As Ayala Land’s most ambitious project in Metro Manila to date, Parklinks will feature Ayala Land Premier condos set to redefine quality, sustainable living for your family in an environment that lets you enjoy the best of the metro.', 'Parklinks North Tower', 'The first luxury residential tower by Ayala Land Premier in a vast verdant estate. Rising to the sky at 55 floors high, it will offer panoramic east and west skyline views to its residents. This development is notable not only for its intuitive planning and superior craftsmanship, but also for its minimal impact on the environment and the opportunities it presents for healthy, sustainable living. With its direct retail connection to Parklinks Mall and the River Esplanade, you’ll enjoy a dynamic life of utmost ease and comfort.', '', '', '', '', '', '', 'ayala/Parklinks-North-Tower.001.jpeg', '', '', ''),
(6, '2024-03-08 00:34:09', '2024-03-08 00:34:09', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'CAVITE', 'CAVITE', 'Anyone longing for the sweet escape of suburban living may find the possibility a distant dream. But the reality is a lot closer than you think if you let yourself indulge in the luxurious relaxation of living in Cavite. You not only get the fresh breezes and cooler climes you crave, you also get to enjoy exclusive clubs and prestigious Ayala Land Premier estates in the area. With these developments, Ayala Land gives families the opportunity to live in dynamic, thriving communities with ample green spaces and accessibility to city comforts.', 'The Courtyards Vermosa', 'Ayala Land Premier welcomes you to The Courtyards, a rare haven where vivid skies and a timeless air breathe life to a community nestled in a private sanctuary. The Courtyards celebrates the tranquility of suburban living and the convenience of urban life, where you can enjoy the confluence of work, leisure, and nature in an exclusive suburban address. Vermosa is also the first Ayala Land development of its kind to highlight active lifestyles that complement stylish living amenities. Vermosa is home to a sports complex, an Olympic-sized pool, bike trails, and other features that reflect Ayala Land’s commitment to providing holistic lifestyles for families and aspiring individuals.', 'Ayala Westgrove Heights', 'At the heart of the flourishing Calabarzon region, Ayala Westgrove Heights is the premier estate for those who want to be sheltered from the flurry of city living while still being a short drive away from life’s daily necessities. Living here strikes a chord in everyone as it’s easy to fall in love with its scenic landscaped roads, green spaces, and peaceful serenity. Careful planning from Ayala Land has gone into sculpting this residence so that living in Ayala Westgrove Heights will bring you and your family’s dreams to light.', '', '', '', '', '', 'ayala/Ayala-Westgrove-Heights-Banner-image.jpg', '', ''),
(7, '2024-03-08 00:37:13', '2024-03-10 16:10:21', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'LAGUNA', 'LAGUNA', 'The south of the metro has always been loved for its laidback environment and sweet escape from the urban jungle. Beyond weekend getaways, many families have taken up residence in one of the Ayala Land Premier projects in Nuvali. As part of Ayala Land’s commitment to building developments where people and nature thrive, Nuvali unlocks the potential for communities in Laguna with a three-fold vision: harmony, diversity, and sustainability. With Nuvali’s beautiful landscapes, exciting shopping center, and residential communities with lush, verdant spaces – it’s the perfect location for recreation and leisure for the entire family. Enjoy a heightened sense of privacy and unity with nature while being an arm’s reach away from life’s conveniences at these Ayala Land Premier developments in Nuvali.', 'Andacillo', 'The first residential address in Nuvali Heights. Set amidst the rolling hillside, this exclusive community is embraced by undulating landscapes and magnificent outdoor views. In keeping with Ayala Land’s mission to enhance land and enrich the lives of Filipinos, Andacillo will serve as the perfect backdrop for cultivating deeper relationships with family and friends.', 'Cerilo', 'Where green spaces are interwoven with homes so you live a luxurious lifestyle in harmony with nature. With sustainability at the core of this development, about 80% of the lots in Cerilo are right next to verdant areas, creating shared green corridors in between homes for the community to delight in. You can relish in the great outdoors and enjoy the urban conveniences offered by the soon-to-rise two-hectare retail space adjacent to Cerilo.', 'Ayala Greenfield Estates', 'A mere 20-minute drive away from Alabang, Ayala Greenfield Estates is a sprawling neighborhood that provides residents with a luxurious haven where they can seek refuge after a long day. Set amidst the grandness of nature, the estate is home to endemic and migratory birds, with flora that provides a stunning backdrop to precious family moments. The estate also offers cool mountain breezes and marvelous panoramic views of Mount Makiling, Tagaytay Ridge, Laguna de Bay, and the Metro Manila cityscape to comfort the body, mind, and soul. This subdivision promises to keep your quality life at a premium, made possible through upscale amenities and the way it works around nature rather than suppressing it.', '', '', '', 'ayala/AyalaLandPremierCerilo_optimized.jpg', '', ''),
(8, '2024-03-10 16:12:14', '2024-03-10 16:12:14', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'PAMPANGA', 'PAMPANGA', 'In the past few years, Pampanga has been the new metropolitan hotspot to look out for. Alongside the augmentation of the Clark airport, the development of Alviera has poised Pampanga as a fast-growing economic hub alternate to Metro Manila. Alviera, a 1,800-hectare estate by Ayala Land and Leonio Land, features a diverse mix of commercial districts, industrial parks, leisure facilities, and Ayala Land Premier projects. It will become Pampanga’s anchor of economic development and coveted residential address where families can strike the perfect balance between urban and nature.', 'Park Estates Alviera', 'Ayala Land Premier’s first exclusive residential project in Alviera. Set to be the luxury real estate developer’s most intimate neighborhood yet, the estate paints the picture of a complete community: residences to complement various lifestyles, vibrant commercial centers, multiple areas for recreation, leisure, and fitness, and renowned institutions. An estate forged by ALI’s commitment to enriching the lives of Filipino families, the Alviera Country Club will offer the perfect venue for family bonding moments amidst the estate’s sprawling landscapes.', '', '', '', '', '', '', 'ayala/Park-Estate-Alviera.jpg', '', '', ''),
(9, '2024-03-10 16:13:38', '2024-03-10 16:13:38', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'BATAAN', 'BATAAN', 'Anvaya Cove is the first venture of Ayala Land Premier in leisure development. Deliberate and careful planning has gone into this premier residential resort project that brings together the scenic wonders of the Bataan’s mountainous terrain and the majesty of the nearby Subic Bay. It combines the charm of a mountain retreat and the thrill of a seaside resort to be the ultimate family haven. You can choose your own refuge in its unique “mountains meet the sea” topography, where you can create unforgettable memories amidst the wonders of a stunning landscape.', 'Anvaya Cove Residences', 'Spanning over 320 hectares, each resident community in Anvaya Cove’s neighborhoods presents a distinctive living experience for every family where you can revel in the beauty of nature. Whether you want the luxurious convenience of an Ayala Land Premier condominium or the vast spaces of a multi-dwelling unit, there are various residences to suit your lifestyle needs. Each home seamlessly blends into nature, offering you the escape you need from the world’s whirlwind. Come home to Anvaya Cove Residences, come home to the beauty and serenity of nature.', '', '', '', '', '', '', 'ayala/anvaya-cove.jpg', '', '', ''),
(10, '2024-03-10 16:17:21', '2024-03-10 16:17:21', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'CEBU', 'CEBU', 'As one of the country’s fastest-growing provinces with respect to business and tourism, Cebu has all the amenities and comforts of the modern world. Ayala Land saw the multitude of possibilities in Cebu City, opening up prime residential, commercial, and business spaces to offer the finest of cosmopolitan living within a vibrant locale. Today, Cebu City flourishes with the existence of two unique Ayala Land districts: Cebu Business Park and Cebu I.T. Park. Ayala Land Premier in Cebu has also ventured into the Queen City of the South to contribute to its growing potential, setting up a fine selection of luxury developments for aspiring individuals and growing families alike.', '1016 Residences', 'A high-end Ayala Land Premier condominium that promises to deliver a distinctive and exclusive living experience. Only a short walk away from Ayala Center Cebu, the city’s premier retail and entertainment hub, this residential address has direct access to an endless array of options for business, leisure, shopping, and recreation. You can also take advantage of the scenic views of the mountains and the sea right from the comforts of your home.', 'Amara', 'A luxurious seaside residential community with a century-old lighthouse on one of its lush, rolling hills. You and your family will enjoy a rustic, seaside ambiance with all the Ayala Land Premier features and sustainable amenities to ensure comfortable luxury living.', 'The Alcoves', 'Carrying the Ayala Land Premier brand, this condo embodies the luxury of an ideal live, work, play lifestyle. With generously spaced units, a wide array of recreational amenities, and close proximity to high-end malls, the two-tower residential address is a gathering of life’s finest details. You’ll live life with a manifold of choices in a highly pedestrian mixed-use hub.', '', '', 'ayala/1016-Amenity-Deck-1024x576.jpg', '', 'ayala/Alcoves-ALP.jpg', ''),
(11, '2024-03-10 16:18:51', '2024-03-10 16:18:51', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'DAVAO', 'DAVAO', 'With more companies eyeing presence in different cities around the country, Davao City has experienced a tremendous peak in growth. Ayala Land has led the charge in transforming new landscapes in Davao, harnessing its potential to become a southern powerhouse. Azuela Cove is a master-planned community by Ayala Land Premier Davao featuring a complete mix of enhanced lifestyle options set against the serene backdrop of the Davao gulf. With commercial lots, offices, and residential towers, residents enjoy resort-inspired luxury living and fresh new sights in a seaside address.', 'The Residences Azuela Cove', 'Ayala Land Premier’s flagship condominium project in Davao. This two-tower development is situated right by the glittering sea, providing residents with awe- inspiring views year-round in a coveted waterside address. With its lush landscaping, warm modern architecture, and proximity to life’s essentials, you’ll enjoy a luxurious and relaxing lifestyle with your family and members of the community.', '', '', '', '', '', '', 'ayala/20151531_AZUELA_COVE_DAY.png', '', '', ''),
(12, '2024-03-10 16:19:43', '2024-03-10 16:21:39', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'BACOLOD', 'BACOLOD', 'The idyllic island of Negros Occidental is filled with beautiful vast plantations, heritage homes, and warm smiles from locals. Ayala Land continues to reinforce its growing presence in the Visayas region with residential neighborhoods and mixed-use developments with sprawling landscaped areas and outdoor convergence points where families and communities can bond. Reward yourself with the luxury of premier living at the newest residential estate by Ayala Land Premier in Bacolod. Set to be the most esteemed residential address in Negros, Ayala Land Premier offers nothing but first-class amenities, facilities, and the lush lifestyle you deserve in a safe and secured community.', 'The Enclaves', 'Centrally located in Talisay City, just a short drive away from Bacolod to the south and the historic Silay to its north, The Enclaves at North Point gives you access to many of Negros’ premier lifestyle destinations. Within the private Ayala Land Premier project, you’ll find the perfect escape from the city and strike the ultimate balance between work and play. You and your family will live a life as sweet and luxurious as the famous sugarcane of the province.', '', '', '', '', '', '', 'ayala/The-Enclaves-street-view-of-a-typical-courtyard.jpg', '', '', ''),
(13, '2024-03-10 16:22:59', '2024-03-10 16:22:59', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'CAGAYAN DE ORO', 'CAGAYAN DE ORO', 'Both action-packed and serene, Cagayan de Oro is the ideal place to live a calm and tranquil life amidst a rising metropolitan city. Apart from the crisp country air and the beautiful terrain of the province, you get to enjoy the convenience of cosmopolitan living. Set to promote inclusive growth in Cagayan de Oro, Ayala Land ushers in new urban development amidst natural landscapes and inviting coastal views. With Ayala Land’s presence and track record in building sustainable mixed-use estates, the city is met with new business opportunities and exciting lifestyle options that create shared value for more Filipinos.', 'Alegria Hills', 'Perched on a highland plateau, Algeria Hills is the first residential offering of Ayala Land Premier in Mindanao. The exclusive neighborhood is an oasis with masterfully designed houses, unparalleled scenery, and close proximity to desirable destinations. Its location on a vast hillside provides you with 360-degree views of the Macajalar Bay and the glistening cityscape of Cagayan de Oro City. It’s the epitome of sustainable, luxurious home living while thriving in the beauty of nature.', '', '', '', '', '', '', 'ayala/allegria-hills-alp-pool.jpg', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `propam`
--

CREATE TABLE `propam` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `property` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amenities` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `propam`
--

INSERT INTO `propam` (`id`, `created_at`, `updated_at`, `property`, `amenities`) VALUES
(6, '2024-03-18 23:08:09', '2024-03-21 23:07:05', 'The Courtyards at Vermosa', 'Residents Lounge, Tee on Third (Golf Simulation Room), The Playhouse, The Studio (Music Room)'),
(7, '2024-03-24 17:22:44', '2024-04-01 17:07:34', 'Le Pont Residences', 'Fitness Center, Function Rooms, Game Room, Jog Trail, Kiddie Pool, Meeting Rooms, Pool Deck and Lounge, Private Theater, Play Area'),
(9, '2024-04-01 17:37:50', '2024-04-01 18:00:03', 'Gateway Regency Studios', 'Adult Pool, Barbeque Pit, Basketball Court, Children\'s Playground, Entertainment Room, Fitness Center, Function Rooms, Game Room, Gazebo, Jog Trail, Kiddie Pool, Landscaped Gardens, Lap Pool, Play Area, Sky Lounge, Wi-Fi Lounge'),
(10, '2024-04-01 23:38:30', '2024-04-01 23:38:30', 'Sync', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(10,2) NOT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`id`, `created_at`, `updated_at`, `name`, `category`, `type`, `location`, `price`, `size`, `description`, `video`, `display_img`) VALUES
(17, '2024-03-18 23:08:09', '2024-03-22 00:29:48', 'The Courtyards at Vermosa', 'Pre-Selling', '', 'Vermosa', 95412.00, 'Studio, 3BR, 3BR Premier, Lot Only', 'The Courtyards is situated at Vermosa, a 700-hectare large scale,\r\nmaster-planned, mixed-use, sustainable development by Ayala\r\nLand in Dasmarinas, Cavite. Extending growth and dynamism in\r\nthe South, a thriving estate spurring active and living wellness\r\nwith distinct recreation and lifestyle destinations, interconnected\r\nverdant parks, and outdoor retail spaces. The Courtyards opens\r\na private sanctuary celebrating a magnified experience of living\r\nwith an abundance of possibilities and conveniences.', 'hS5CfP8n_js', 'ayala/1617325521798-453877-zdu9l2htyki.jpg'),
(18, '2024-03-24 17:22:44', '2024-03-25 22:24:53', 'Le Pont Residences', 'Pre-Selling', '', 'Pasig City', 34000.00, '1BR, 2BR, 3BR, Pent House', 'Connecting Pasig and Quezon City, the property promises to ‘bridge you to your best life.’', '', 'ayala/CCS Logo.jpg'),
(20, '2024-04-01 17:37:50', '2024-04-01 17:37:50', 'Gateway Regency Studios', 'Pre-Selling', '', 'Pioneer, Mandaluyong', 22000.00, 'Studio', 'Gateway Regency Studios is part of Robinsons Gateway Residences Complex. It is strategically located along Pioneer St, a comfortable distance to Makati, Bonifacio Global City (BGC), Ortigas and Mandaluyong, where most corporate headquarters and big businesses are located. Gateway Regency STUDIOS unique location also gets you close to dozens of commercial hubs that offer something for every lifestyle.', '', NULL),
(21, '2024-04-01 23:38:30', '2024-04-01 23:38:30', 'Sync', 'Pre-Selling', 'Residential', 'C5 Road Brgy. Bagong Ilog Pasig', 18000.00, 'Studio, 1BR', 'Strategically located near BGC, Ortigas, Kapitolyo. Even the emerging Brigetowne township. Easily access these dynamic areas for work and leisure with SYNC\'s central location. With an address that\'s in sync with everything you need, it\'s a few minutes away from the city\'s most dynamic business districts, largest malls, best hospitals, popular hangout spots, exclusive schools, and more.', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `prosize`
--

CREATE TABLE `prosize` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `property` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reshead`
--

CREATE TABLE `reshead` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `residential` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `metro` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `luzon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `visayas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mindanao` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reshead`
--

INSERT INTO `reshead` (`id`, `created_at`, `updated_at`, `residential`, `metro`, `luzon`, `visayas`, `mindanao`) VALUES
(1, NULL, NULL, 'Ayala Land Premier', 'Makati City', 'Laguna', 'Bacolod', 'Cagayan De Oro'),
(2, NULL, NULL, 'Alveo', 'Manila City', 'Evo City', 'Cebu', ''),
(3, NULL, NULL, 'Avida', 'Mandaluyong City', 'Batangas', '', ''),
(4, NULL, NULL, 'Amaia', 'Muntinlupa City', 'Pampanga', '', ''),
(5, NULL, NULL, 'Bella Vita', 'Parañaque City', '', '', ''),
(6, NULL, NULL, '', 'Pasig City', '', '', ''),
(7, NULL, NULL, '', 'Quezon City', '', '', ''),
(8, NULL, NULL, '', 'Taguig City', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `residences`
--

CREATE TABLE `residences` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `ft_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ft_img1` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ft_img2` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ft_img3` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ft_img4` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ft_img5` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `spanA` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `titleA` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `conA` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `img1` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `loc1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `con1` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `img2` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `loc2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `con2` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `img3` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `loc3` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub3` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `con3` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `img4` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `loc4` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub4` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `con4` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `spanB` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `titleB` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `conB` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `img5` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `con5` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `img6` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub6` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `con6` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `con` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `img7` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub7` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `con7` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `img8` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `con8` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `img9` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub9` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `con9` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `residences`
--

INSERT INTO `residences` (`id`, `created_at`, `updated_at`, `ft_title`, `ft_img1`, `ft_img2`, `ft_img3`, `ft_img4`, `ft_img5`, `spanA`, `titleA`, `conA`, `img1`, `loc1`, `sub1`, `con1`, `img2`, `loc2`, `sub2`, `con2`, `img3`, `loc3`, `sub3`, `con3`, `img4`, `loc4`, `sub4`, `con4`, `spanB`, `titleB`, `conB`, `img5`, `con5`, `img6`, `sub6`, `con6`, `sub`, `con`, `img7`, `sub7`, `con7`, `img8`, `con8`, `img9`, `sub9`, `con9`) VALUES
(1, NULL, '2024-03-14 01:12:51', 'Our Residential Brands', 'ayala/Santierra-Inner-Road-e1582178512590.jpg', 'ayala/Retail-Eye-Courtyard.jpg', 'ayala/Amenity_pool_2.jpg', 'ayala/Amaia-Vermosa-001-e1581525410697.jpg', 'ayala/DUP-EXT-NEW.jpg', 'FEATURED RESIDENCES', 'Redefining the meaning of home', 'We aim to redefine what it means to have a comfortable modern home by providing Filipinos the best in class residential properties in the country. We provide homes that build a sense of community, surrounded by modern conveniences. Our residential property brands offer your family a selection of future homes designed for a broad market segment. These choices include many types of properties, each one suited to fulfill different aspirations and lifestyles.', 'ayala/AyalaLandPremierCerilo_optimized.jpg', 'AYALA LAND PREMIER', 'Cerilo', 'Ayala Land Premier offers a distinct living experience in Nuvali, Laguna with Cerilo bringing lifestyles in harmony with nature.', 'ayala/prop01-112019-696x704-1.jpg', 'ALVEO', 'Parkford Suites', 'Located at the heart of the Makati CBD, Alveo\'s Parkford Suites provides residents with easy access to the workplace, as well as the city\'s community convergence spots.', 'ayala/avida-southpoint-makati.jpg', 'AVIDA', 'Avida Makati Southpoint', 'A strategic location lets you live actively and comfortably right in the heart of Makati.', 'ayala/amaia-batangas.jpg', 'AMAIA', 'Amaia Scapes Batangas', 'Enjoy a balanced lifestyle in a well-designed family home in Batangas that is conveniently located near educational institutions.', 'ABOUT OUR RESIDENCES', 'A home in a well-planned community', 'Ayala Land designs homes in integrated, masterplanned communities to reflect the way you aspire to live. We consider the character of a neighborhood and create homes surrounded by spaces for work and leisure for you to enjoy with your loved ones. Whether situated near key commercial hubs or in regional growth centers, you will always find yourself connected to a larger community.', 'ayala/slide3.jpg', 'Our developments are built to provide the optimal amount of living space designed with timeless aesthetics. We strive to contribute to the Philippine real estate sector fully committed to delivering quality products and services and homes that are distinctly for you.', 'ayala/28-2-e1581527536558.jpg', 'Masterplanned developments', 'Masterfully planned developments offer modern conveniences. Shopping centers and malls are located nearby or built into the design of the community for easy accessibility. We allocate open spaces meant for parks and gardens. We also design space for amenities that promote active lifestyles, such as gyms and swimming pools. Transport and pedestrian systems allow for seamless travel to and from our developments.', 'Homes for every lifestyle', 'We build homes in urban and suburban communities that consider the lifestyles of modern Filipinos. Young urban professionals, married couples, and growing families all have an Ayala Land property to come home to.', 'ayala/gallery1.jpg', 'Where all you need is within reach', 'We consider ease of travel and accessibility when we design and build our residences. We situate our large-scale condo developments near commercial hubs and harmonize their designs with the surrounding environment. We make sure they connect well with existing nearby road systems.', 'ayala/Makatiwalkway2_optimized-1-e1582630148409.jpg', 'Bus stops and similar transportation terminals are also seamlessly integrated into the masterplan to facilitate faster travel times to various destinations. Wide sidewalks and walkways create pedestrian convenience; they also promote an active and environment-friendly lifestyle.', 'ayala/familycopy.png', 'Live inspired', 'We incorporate key sustainability principles in the design of our developments in both urban and suburban settings. Our master-planned neighborhoods have parks and play areas ready to welcome all kinds of outdoor activities. Relax and recharge in open green spaces we’ve planted with tropical plants and native tree species. These living spaces form part of the place you can call home.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `amenities`
--
ALTER TABLE `amenities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth`
--
ALTER TABLE `auth`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `careers`
--
ALTER TABLE `careers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `estates`
--
ALTER TABLE `estates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `legacy`
--
ALTER TABLE `legacy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `makati`
--
ALTER TABLE `makati`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nearby`
--
ALTER TABLE `nearby`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `premier`
--
ALTER TABLE `premier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `propam`
--
ALTER TABLE `propam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prosize`
--
ALTER TABLE `prosize`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reshead`
--
ALTER TABLE `reshead`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `residences`
--
ALTER TABLE `residences`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `amenities`
--
ALTER TABLE `amenities`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `auth`
--
ALTER TABLE `auth`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `careers`
--
ALTER TABLE `careers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `estates`
--
ALTER TABLE `estates`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `legacy`
--
ALTER TABLE `legacy`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `makati`
--
ALTER TABLE `makati`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `nearby`
--
ALTER TABLE `nearby`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `premier`
--
ALTER TABLE `premier`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `propam`
--
ALTER TABLE `propam`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `prosize`
--
ALTER TABLE `prosize`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reshead`
--
ALTER TABLE `reshead`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `residences`
--
ALTER TABLE `residences`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
