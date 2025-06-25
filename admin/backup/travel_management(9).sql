-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2025 at 10:01 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` int(15) NOT NULL,
  `address` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_b` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `full_name`, `email`, `password`, `contact`, `address`, `status`, `created_at`, `updated_at`, `created_b`, `updated_by`) VALUES
(1, 'jamal', 'jamal@gmail.com', '356a192b7913b04c54574d18c28d46e6395428ab', 876798759, '', 1, '2025-05-31 05:22:01', '0000-00-00 00:00:00', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `airline`
--

CREATE TABLE `airline` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `airline`
--

INSERT INTO `airline` (`id`, `name`, `address`, `contact`, `status`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(2, 'Biman Bangladesh Airlines', 'Kurmitola,Dhaka', '+88-02-8901577', 1, '2025-06-03 06:25:31', '0000-00-00 00:00:00', 1, 0),
(3, 'US- Bangla Airlines', 'Baridhara, Dhaka', '+88 01777777820', 1, '2025-06-03 06:26:29', '0000-00-00 00:00:00', 1, 0),
(4, 'NOVOAIR', 'Banani,Dhaka', '+88-09638-013603', 1, '2025-06-03 06:27:34', '0000-00-00 00:00:00', 1, 0),
(5, 'Air Astra', 'Uttara,Dhaka', '+88096 137 13607', 1, '2025-06-03 06:28:14', '0000-00-00 00:00:00', 1, 0),
(6, 'Regent Airways', 'Banani,Dhaka', '+88-02-9882222', 1, '2025-06-03 06:29:04', '0000-00-00 00:00:00', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `airport`
--

CREATE TABLE `airport` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `airport`
--

INSERT INTO `airport` (`id`, `name`, `address`, `contact`, `status`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(2, 'Hazrat Shahjalal International Airport (DAC)', 'Kurmitola, Dhaka-1229, Bangladesh', '+880 9614013600', 1, '2025-06-03 06:33:36', '0000-00-00 00:00:00', 1, 0),
(3, 'Shah Amanat International Airport (CGP)', 'Patenga, Chattogram, Bangladesh', '+880 241350100', 1, '2025-06-03 06:34:32', '0000-00-00 00:00:00', 1, 0),
(4, 'Osmani International Airport (ZYL)', 'Airport Road, Sylhet 3102, Bangladesh', '+880 821714243', 1, '2025-06-03 06:36:04', '0000-00-00 00:00:00', 1, 0),
(5, 'Khan Jahan Ali Airport', 'Bagerhat District, near Khulna', '+880 2 890 1000', 1, '2025-06-03 06:42:31', '2025-06-03 07:01:07', 1, 1),
(6, 'Coxs Bazar International Airport (CXB)', 'Coxs Bazar 4700, Bangladesh', '+880 34152353', 1, '2025-06-03 06:43:44', '0000-00-00 00:00:00', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `destination`
--

CREATE TABLE `destination` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `destination`
--

INSERT INTO `destination` (`id`, `name`, `country`, `description`, `image_url`, `status`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(3, 'khulna', 'Bangladesh', 'Khulna offers a diverse range of tourist attractions, including the Sundarbans, Shait Gumbad Mosque and Sat Gumbad Mosque etc', '1750481031561996.jpg', 1, '2025-06-03 06:49:14', '2025-06-21 06:43:51', 1, 1),
(4, 'Bandarban', 'Bangladesh', ' Renowned for its stunning landscapes and rich cultural heritage\r\n\r\n', '17504810172020bandarban.jpg', 1, '2025-06-03 06:54:13', '2025-06-21 06:43:37', 1, 1),
(5, 'Sylhet', 'Bangladesh', 'A  green area known for its tea gardens and natural beauty', '17504810039844sylhet.jpg', 1, '2025-06-03 06:55:44', '2025-06-21 06:43:23', 1, 1),
(6, 'Rangamati', 'Bangladesh', 'An emerging tourist spot in Bangladesh situated among the hills of the Kasalong range of mountains in Sajek union, Baghaichhari Upazila in the Rangamati District', '1750480991876117500438292545Rangamati.jpg', 1, '2025-06-03 06:56:45', '2025-06-21 06:43:11', 1, 1),
(7, 'Coxs Bazar', 'Bangladesh', 'Known for having the longest natural sea beach in the world. It is a top tourist spot in Bangladesh where people go to enjoy the ocean and sunset.', 'uploads/destinations/1750043680_Coxs-Bazar-Sea-Beach.jpg', 0, '2025-06-03 06:58:28', '2025-06-16 05:17:37', 1, 1),
(8, 'Patuakhali ', 'Bangladesh', 'Famous for Kuakata sea beach, where one can witness both sunrise and sunset from the same spot.', '17504809739451potuakhali.jpg', 1, '2025-06-15 06:45:18', '2025-06-21 06:42:53', 1, 1),
(9, 'Cox Bazar', 'Bangladesh', 'Home to the worlds longest natural sea beach.Beyond its stunning beach, its also renowned for its unique cultural mix, fresh seafood, and vibrant tourist attractions like Himchori, Moheshkhali Island, and Buddhist temples. \r\n', '1750480933914517500438808013Coxs-Bazar-Sea-Beach.jpg', 1, '2025-06-16 05:21:23', '2025-06-21 06:42:13', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE `hotels` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `location_id` int(11) NOT NULL,
  `description` text NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `rating` decimal(2,1) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`id`, `name`, `location_id`, `description`, `image_url`, `rating`, `status`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 'The Grand Placid', 8, 'The Grand Placid Hotel offers great value in a 3-star setting. Stay smart with modern rooms, friendly service, and budget-friendly rates.', '17504800262650saint_martin.jpg', 3.0, 1, '2025-06-03 06:38:46', '2025-06-21 06:27:06', 1, 1),
(2, 'Excelsior Sylhet Hotel & Resort', 7, ' It offers a blend of natural surroundings and modern amenities, including two indoor pools, a 24-hour health club, and a restaurant serving local cuisine. The resort also features a coffee shop, a business center, and meeting rooms, making it suitable for both leisure and business travelers. ', '17504800078667sylhet2.jpg', 3.0, 1, '2025-06-03 06:42:58', '2025-06-21 06:26:47', 1, 1),
(3, 'Sea Pearl Beach Resort ', 6, 'The western side offers an incredible panoramic view of the Bay of Bengal.', '17504799892803coxbazar.jpg', 3.0, 1, '2025-06-03 06:44:07', '2025-06-21 06:26:29', 1, 1),
(4, 'Nilgiri Hill Resort', 5, 'Nilgiri is one of the best resort places in Bangladesh. Nature is at its best here, where the clouds meet the land and play all the time.', '17504799555485nilgiri.jpg', 3.0, 1, '2025-06-03 06:45:15', '2025-06-21 06:25:55', 1, 1),
(5, 'Sikder Resort & Villas', 4, 'A Luxuries Resort & Villas with Nature.', '17504800515942patuakhali.jpg', 3.0, 1, '2025-06-03 06:46:15', '2025-06-21 06:27:31', 1, 1),
(6, 'Sajek Army Resort', 9, ' A popular accommodation option in Sajek Valley, managed by the Bangladesh Army. It offers well-furnished rooms and excellent service', '17504800411665sajek-the-queen-of-clouds.jpg', 3.0, 1, '2025-06-16 09:11:12', '2025-06-21 06:27:21', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `hotel_bookings`
--

CREATE TABLE `hotel_bookings` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `check_in_date` date NOT NULL,
  `check_out_date` date NOT NULL,
  `number_of_room` int(11) NOT NULL,
  `total_amount` decimal(10,2) NOT NULL,
  `booking_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `room_id` int(11) DEFAULT NULL,
  `booking_status` int(11) DEFAULT NULL COMMENT '1 pending 2 approved 3 cancel 4 complete',
  `status` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hotel_bookings`
--

INSERT INTO `hotel_bookings` (`id`, `user_id`, `hotel_id`, `check_in_date`, `check_out_date`, `number_of_room`, `total_amount`, `booking_date`, `room_id`, `booking_status`, `status`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 2, 3, '2025-06-25', '2025-06-26', 2, 8000.00, '2025-06-21 00:05:50', 6, 1, 1, '2025-06-21 06:05:50', '0000-00-00 00:00:00', 2, 0),
(2, 3, 1, '2025-06-26', '2025-06-30', 2, 8000.00, '2025-06-21 02:33:55', 4, 1, 1, '2025-06-21 08:33:55', '0000-00-00 00:00:00', 3, 0),
(3, 4, 1, '2025-06-26', '2025-06-28', 1, 2000.00, '2025-06-20 18:00:00', 4, 2, 1, '2025-06-21 08:56:30', '0000-00-00 00:00:00', 4, 0);

-- --------------------------------------------------------

--
-- Table structure for table `hotel_room`
--

CREATE TABLE `hotel_room` (
  `id` int(11) NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `room_type` varchar(255) NOT NULL,
  `price_per_night` decimal(10,2) NOT NULL,
  `total_room` int(11) NOT NULL,
  `available_room` int(11) NOT NULL,
  `tv` int(11) NOT NULL,
  `ac` int(11) NOT NULL,
  `fridge` int(11) NOT NULL,
  `complimentary_breakfast` int(11) NOT NULL,
  `guest_number` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hotel_room`
--

INSERT INTO `hotel_room` (`id`, `hotel_id`, `room_type`, `price_per_night`, `total_room`, `available_room`, `tv`, `ac`, `fridge`, `complimentary_breakfast`, `guest_number`, `status`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 454, '', 0.00, 0, 0, 0, 0, 0, 0, 0, 0, '2025-06-01 08:41:20', '2025-06-02 09:19:12', 1, 1),
(2, 524, 'sgv', 111.00, 12, 13, 0, 0, 0, 0, 0, 0, '2025-06-01 08:42:19', '2025-06-03 06:46:36', 1, 1),
(3, 3, 'fvfd', 255.00, 12, 10, 2, 2, 1, 0, 6, 0, '2025-06-02 09:00:21', '2025-06-03 06:46:34', 1, 1),
(4, 1, 'Single Room', 1000.00, 5, 4, 0, 0, 0, 0, 0, 1, '2025-06-03 06:49:49', '0000-00-00 00:00:00', 1, 0),
(5, 2, 'Double Room', 3000.00, 5, 5, 0, 0, 0, 0, 0, 1, '2025-06-03 06:51:22', '0000-00-00 00:00:00', 1, 0),
(6, 3, 'Twin Room', 4000.00, 5, 5, 1, 1, 1, 0, 0, 1, '2025-06-03 06:52:41', '0000-00-00 00:00:00', 1, 0),
(7, 4, 'Deluxe Room', 5000.00, 5, 5, 1, 2, 1, 0, 0, 1, '2025-06-03 06:53:51', '0000-00-00 00:00:00', 1, 0),
(8, 5, 'Super Deluxe Room', 6000.00, 5, 5, 1, 2, 2, 0, 0, 1, '2025-06-03 06:54:56', '0000-00-00 00:00:00', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`id`, `name`, `status`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(4, 'Patuakhali', 1, '2025-06-03 06:55:53', '2025-06-16 08:21:07', 1, 1),
(5, 'Bandarban', 1, '2025-06-03 06:56:17', '2025-06-16 08:20:41', 1, 1),
(6, 'Cox Bazar', 1, '2025-06-03 06:56:45', '0000-00-00 00:00:00', 1, 0),
(7, 'Sylhet', 1, '2025-06-03 06:57:43', '0000-00-00 00:00:00', 1, 0),
(8, 'Khulna', 1, '2025-06-03 06:58:12', '2025-06-16 08:17:42', 1, 1),
(9, 'Rangamati', 1, '2025-06-16 08:21:39', '0000-00-00 00:00:00', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `booking_id` int(11) NOT NULL,
  `payment_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `amount` decimal(10,2) NOT NULL,
  `payment_method` varchar(255) NOT NULL,
  `payment_status` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `tour_id` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `comment` text NOT NULL,
  `review_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `route`
--

CREATE TABLE `route` (
  `id` int(11) NOT NULL,
  `route_type` varchar(255) NOT NULL,
  `to_airport` int(11) NOT NULL,
  `from_airport` int(11) NOT NULL,
  `trans_area` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `route`
--

INSERT INTO `route` (`id`, `route_type`, `to_airport`, `from_airport`, `trans_area`, `status`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 'gtr', 2, 9, 'hgbtr', 0, '2025-06-02 07:48:47', '2025-06-02 08:01:52', 1, 1),
(2, 'orgk', 245, 6325, 'fiouffgr', 0, '2025-06-02 07:59:36', '2025-06-03 06:58:26', 1, 1),
(3, 'Domestic', 1, 3, 'Chattogram', 1, '2025-06-03 07:01:04', '2025-06-03 07:06:08', 1, 1),
(4, 'Domestic', 2, 4, 'Chattogram', 1, '2025-06-03 07:02:19', '2025-06-03 07:05:59', 1, 1),
(5, 'Domestic', 5, 1, 'Habiganj', 1, '2025-06-03 07:04:27', '2025-06-03 07:05:46', 1, 1),
(6, 'Domestic', 3, 2, 'Chattogram', 1, '2025-06-03 07:06:32', '0000-00-00 00:00:00', 1, 0),
(7, 'Domestic', 1, 4, 'Khulna', 1, '2025-06-03 07:07:01', '0000-00-00 00:00:00', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `id` int(11) NOT NULL,
  `route_id` int(11) NOT NULL,
  `airline_id` int(11) NOT NULL,
  `start_time_date` int(11) NOT NULL,
  `end_time_date` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_by` datetime NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`id`, `route_id`, `airline_id`, `start_time_date`, `end_time_date`, `status`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 1, 1, 12, 1, 1, 2025, '2025-06-03 07:06:31', '0000-00-00 00:00:00', 1),
(2, 2, 2, 2, 3, 1, 2025, '2025-06-03 07:04:04', '0000-00-00 00:00:00', 1),
(3, 3, 3, 3, 4, 1, 2025, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(4, 4, 4, 5, 6, 1, 2025, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(5, 5, 5, 7, 8, 1, 2025, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `seat`
--

CREATE TABLE `seat` (
  `id` int(11) NOT NULL,
  `airline_id` int(11) NOT NULL,
  `seat_type` varchar(255) NOT NULL,
  `seat_number` int(11) NOT NULL,
  `seat_row` int(11) NOT NULL,
  `seat_column` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `seat`
--

INSERT INTO `seat` (`id`, `airline_id`, `seat_type`, `seat_number`, `seat_row`, `seat_column`, `status`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(8, 6, 'Economy Class', 2, 2, 2, 1, '2025-06-03 07:14:07', '0000-00-00 00:00:00', 1, 0),
(9, 5, 'business', 3, 3, 3, 1, '2025-06-03 07:14:18', '0000-00-00 00:00:00', 1, 0),
(10, 4, 'economy', 44, 4, 4, 1, '2025-06-03 07:14:38', '0000-00-00 00:00:00', 1, 0),
(11, 3, 'business', 55, 5, 5, 1, '2025-06-03 07:14:55', '0000-00-00 00:00:00', 1, 0),
(12, 2, 'First Class', 223, 6, 6, 1, '2025-06-03 07:15:32', '0000-00-00 00:00:00', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `seat_fare`
--

CREATE TABLE `seat_fare` (
  `id` int(11) NOT NULL,
  `schedule_id` int(11) NOT NULL,
  `seat_id` int(11) NOT NULL,
  `seat_fare` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `seat_fare`
--

INSERT INTO `seat_fare` (`id`, `schedule_id`, `seat_id`, `seat_fare`, `status`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(3, 1, 1, 1, 1, '2025-06-03 07:16:53', '0000-00-00 00:00:00', 1, 0),
(4, 2, 2, 2, 1, '2025-06-03 07:17:05', '0000-00-00 00:00:00', 1, 0),
(5, 3, 3, 3, 1, '2025-06-03 07:17:10', '0000-00-00 00:00:00', 1, 0),
(6, 4, 4, 4, 1, '2025-06-03 07:17:16', '0000-00-00 00:00:00', 1, 0),
(7, 5, 5, 5, 1, '2025-06-03 07:17:21', '0000-00-00 00:00:00', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `ticket_detail`
--

CREATE TABLE `ticket_detail` (
  `id` int(11) NOT NULL,
  `ticket_id` int(11) NOT NULL,
  `seat_id` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tour_packages`
--

CREATE TABLE `tour_packages` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `destination_id` int(11) NOT NULL,
  `duration_day` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `available_slot` int(11) NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tour_packages`
--

INSERT INTO `tour_packages` (`id`, `title`, `description`, `destination_id`, `duration_day`, `price`, `start_date`, `end_date`, `available_slot`, `image_url`, `status`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 'Sajek Valley Tour Package', 'A trip to Sajek Valley will offer you many mesmerizing tourist attractions, sky touching mountains with dense forest and the dramatic clouds will make your trip a heavenly experience.', 6, 2, 6500.00, '2025-07-03 11:12:00', '2025-07-06 12:12:00', 5, '17499666332504free-photo-of-scenic-mountain-resort-with-traditional-huts.jpeg', 1, '2025-06-03 07:13:42', '2025-06-15 07:50:33', 1, 1),
(2, 'Shundarban Tour Package', 'Famous for being the worlds largest contiguous mangrove forest ecosystem and for its unique biodiversity, including the Royal Bengal tiger.', 3, 3, 16500.00, '2025-08-03 11:15:00', '2026-07-15 11:15:00', 5, '17499662982046360_F_699804686_I3rRUswmo6hc7TAai2c8QaHIkN4LYF87.jpg', 1, '2025-06-03 07:15:21', '2025-06-15 07:44:58', 1, 1),
(3, 'SadaPathor Tour Package', 'Famous for its pristine white stones and crystal-clear waters, this location provides an idyllic setting for relaxation and exploration', 5, 2, 8000.00, '2025-06-23 11:16:00', '2026-06-06 11:16:00', 4, '17499698761840Bholaganj-SadaPathor-2.jpg', 1, '2025-06-03 07:16:46', '2025-06-15 08:44:36', 1, 1),
(4, 'Cox Bazar Tour package', 'Home to the worlds longest natural sea beach', 7, 3, 6000.00, '2025-06-22 11:17:00', '2026-06-06 11:17:00', 4, '17499700915711coxs.jpg', 1, '2025-06-03 07:17:57', '2025-06-15 08:48:11', 1, 1),
(5, 'Saint Martins Island Package ', 'The one and only coral island of Bangladesh', 7, 1, 5000.00, '2025-06-22 11:18:00', '2026-06-05 11:19:00', 0, '17499632055650st-martins-island-locally-known-600nw-1741698692.webp', 1, '2025-06-03 07:19:10', '2025-06-15 07:16:36', 1, 1),
(6, 'Nilgiri Tour Package', 'Nilgiri is a place with the combination of the tallest peak, the tribal village with a vibrant culture and colorful lifestyle of the villagers, and the spectacular natural beauty. This place gives the visitors a feel like floating in the kingdom of clouds. The Nilgiri resort is a popular resort where you can stay Overnight. Travel to Nilgiri through zigzag hilly roads amidst green and blue landscape is a lifetime experience.', 4, 2, 10500.00, '2025-06-23 11:11:00', '2026-06-30 11:11:00', 1, '174996896728211519408873nilgiri-bandarban.jpg', 1, '2025-06-15 08:27:48', '2025-06-15 08:29:27', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tour_package_booking`
--

CREATE TABLE `tour_package_booking` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `tour_id` int(11) NOT NULL,
  `booking_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `qty` decimal(10,2) NOT NULL,
  `discount` decimal(10,2) NOT NULL,
  `total_amount` decimal(10,2) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `address` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `full_name`, `email`, `password`, `contact`, `address`, `status`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 'jamal', 'jamal@gmail.com', '356a192b7913b04c54574d18c28d46e6395428ab', '12421', '', 1, '2025-06-16 06:23:49', '0000-00-00 00:00:00', 0, 0),
(2, 'SS', 'sdfv@sgvd', '7c4a8d09ca3762af61e59520943dc26494f8941b', '3254', '', 1, '2025-06-21 06:05:50', '0000-00-00 00:00:00', 1, 0),
(3, 'fhtu', 'hvj@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '125426', '', 1, '2025-06-21 08:33:55', '0000-00-00 00:00:00', 1, 0),
(4, 'sharmin', 'sharmin@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '125326', '', 1, '2025-06-21 08:56:30', '0000-00-00 00:00:00', 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `airline`
--
ALTER TABLE `airline`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `airport`
--
ALTER TABLE `airport`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destination`
--
ALTER TABLE `destination`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotel_bookings`
--
ALTER TABLE `hotel_bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotel_room`
--
ALTER TABLE `hotel_room`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `route`
--
ALTER TABLE `route`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seat`
--
ALTER TABLE `seat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seat_fare`
--
ALTER TABLE `seat_fare`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ticket_detail`
--
ALTER TABLE `ticket_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tour_packages`
--
ALTER TABLE `tour_packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tour_package_booking`
--
ALTER TABLE `tour_package_booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `airline`
--
ALTER TABLE `airline`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `airport`
--
ALTER TABLE `airport`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `destination`
--
ALTER TABLE `destination`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `hotel_bookings`
--
ALTER TABLE `hotel_bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `hotel_room`
--
ALTER TABLE `hotel_room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `route`
--
ALTER TABLE `route`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `seat`
--
ALTER TABLE `seat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `seat_fare`
--
ALTER TABLE `seat_fare`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `ticket_detail`
--
ALTER TABLE `ticket_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tour_packages`
--
ALTER TABLE `tour_packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tour_package_booking`
--
ALTER TABLE `tour_package_booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
