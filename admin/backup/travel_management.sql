-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2025 at 09:16 AM
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
(3, 'Sundarbans', 'Bangladesh', 'The largest mangrove forest in the world and a UNESCO World Heritage Site. It’s home to the Royal Bengal Tiger and a wide variety of wildlife.', '', 1, '2025-06-03 06:49:14', '0000-00-00 00:00:00', 1, 0),
(4, 'Mahasthangarh', 'Bangladesh', 'One of the oldest archaeological sites in Bangladesh. It contains the ruins of the ancient city of Pundranagar.\r\n\r\n', '', 1, '2025-06-03 06:54:13', '0000-00-00 00:00:00', 1, 0),
(5, 'Sylhet', 'Bangladesh', 'A  green area known for its tea gardens and natural beauty. It is also a religious site due to the shrine of Hazrat Shah Jalal .', '', 1, '2025-06-03 06:55:44', '0000-00-00 00:00:00', 1, 0),
(6, 'Sajek Valley', 'Bangladesh', 'A beautiful hill destination in Rangamati often called the Kingdom of Clouds. Surrounded by mountains and indigenous villages, it is famous for its scenic beauty.', '', 1, '2025-06-03 06:56:45', '0000-00-00 00:00:00', 1, 0),
(7, 'Coxs Bazar', 'Bangladesh', 'Known for having the longest natural sea beach in the world. It is a top tourist spot in Bangladesh where people go to enjoy the ocean and sunset.', '', 1, '2025-06-03 06:58:28', '0000-00-00 00:00:00', 1, 0);

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
(1, 'Hotel Agrabad', 101, 'Established in 1969, Hotel Agrabad is the first four-star hotel in Chattogram. It offers 101 luxurious rooms and suites, a swimming pool, and bars.', '', '3.0', 1, '2025-06-03 06:38:46', '0000-00-00 00:00:00', 1, 0),
(2, 'Mermaid Beach', 2020, 'The resort features two restaurants offering Italian and world cuisine.', '', '3.0', 1, '2025-06-03 06:42:58', '0000-00-00 00:00:00', 1, 0),
(3, 'Nascent Gardenia Luxury Suites', 2032, 'This hotel offers a range of suites and apartments equipped with air conditioning and free Wi-Fi.', '', '3.0', 1, '2025-06-03 06:44:07', '0000-00-00 00:00:00', 1, 0),
(4, 'Jatra Flagship Dhaka Lake View', 2203, 'Located approximately 9 km from the city center, this hotel offers modern amenities and is situated near Banani Lake.', '', '3.0', 1, '2025-06-03 06:45:15', '0000-00-00 00:00:00', 1, 0),
(5, 'Mermaid Beach Resort', 1320, 'Situated beside the beach near the Coxs Bazar Tekhnaf Marine Drive, Mermaid Beach Resort offers easy access to a secluded beach. The resort features two restaurants offering Italian and world cuisine.', '', '3.0', 1, '2025-06-03 06:46:15', '0000-00-00 00:00:00', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `hotel_bookings`
--

CREATE TABLE `hotel_bookings` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `check_in_date` datetime NOT NULL,
  `check_out_date` datetime NOT NULL,
  `number_of_room` int(11) NOT NULL,
  `total_amount` decimal(10,2) NOT NULL,
  `booking_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hotel_booking_detail`
--

CREATE TABLE `hotel_booking_detail` (
  `id` int(11) NOT NULL,
  `hotel_booking_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `fare` decimal(10,2) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(1, 454, '', '0.00', 0, 0, 0, 0, 0, 0, 0, 0, '2025-06-01 08:41:20', '2025-06-02 09:19:12', 1, 1),
(2, 524, 'sgv', '111.00', 12, 13, 0, 0, 0, 0, 0, 0, '2025-06-01 08:42:19', '2025-06-03 06:46:36', 1, 1),
(3, 3, 'fvfd', '255.00', 12, 10, 2, 2, 1, 0, 6, 0, '2025-06-02 09:00:21', '2025-06-03 06:46:34', 1, 1),
(4, 1, 'Single Room', '1000.00', 5, 5, 0, 0, 0, 0, 0, 1, '2025-06-03 06:49:49', '0000-00-00 00:00:00', 1, 0),
(5, 2, 'Double Room', '3000.00', 5, 5, 0, 0, 0, 0, 0, 1, '2025-06-03 06:51:22', '0000-00-00 00:00:00', 1, 0),
(6, 3, 'Twin Room', '4000.00', 5, 5, 1, 1, 1, 0, 0, 1, '2025-06-03 06:52:41', '0000-00-00 00:00:00', 1, 0),
(7, 4, 'Deluxe Room', '5000.00', 5, 5, 1, 2, 1, 0, 0, 1, '2025-06-03 06:53:51', '0000-00-00 00:00:00', 1, 0),
(8, 5, 'Super Deluxe Room', '6000.00', 5, 5, 1, 2, 2, 0, 0, 1, '2025-06-03 06:54:56', '0000-00-00 00:00:00', 1, 0);

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
(1, 'Jamal', 0, '2025-06-02 05:40:36', '2025-06-02 05:56:08', 1, 1),
(2, 'any', 0, '2025-06-02 05:53:35', '2025-06-03 06:55:12', 1, 1),
(3, 'toma', 0, '2025-06-02 09:06:55', '2025-06-02 09:07:08', 1, 1),
(4, 'Dhaka', 1, '2025-06-03 06:55:53', '0000-00-00 00:00:00', 1, 0),
(5, 'Chattogram', 1, '2025-06-03 06:56:17', '0000-00-00 00:00:00', 1, 0),
(6, 'Cox Bazar', 1, '2025-06-03 06:56:45', '0000-00-00 00:00:00', 1, 0),
(7, 'Sylhet', 1, '2025-06-03 06:57:43', '0000-00-00 00:00:00', 1, 0),
(8, 'Khulna', 1, '2025-06-03 06:58:12', '0000-00-00 00:00:00', 1, 0);

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
(1, 'Sundarbans Explorer: Journey into the Wildlife Kingdom', 'The Sundarbans Explorer package is an unforgettable experience for wildlife and nature lovers. In this 5-day tour, you will explore the mysterious mangrove forest of the Sundarbans — the largest tidal halophytic mangrove forest in the world. Enjoy boat rides through rivers and canals, spot the Royal Bengal Tiger and diverse wildlife, and learn about the local culture and lifestyle of the forest communities.', 0, 2, '5000.00', '2025-06-03 11:12:00', '2025-06-06 12:12:00', 5, '', 1, '2025-06-03 07:13:42', '2025-06-03 07:13:42', 1, 1),
(2, 'Coxs Bazar Beach Escape: Sun, Sand & Serenity', 'Enjoy a relaxing 4-day getaway to Cox’s Bazar, home to the world’s longest natural sandy sea beach. Bask under the sun, stroll along the shoreline, and explore nearby attractions like Himchari Waterfall and Inani Beach. This package includes comfortable hotel accommodation, beach activities, delicious seafood dining, and guided tours to local landmarks.', 0, 3, '10000.00', '2025-06-03 11:15:00', '2025-06-07 11:15:00', 5, '', 1, '2025-06-03 07:15:21', '2025-06-03 07:15:21', 1, 1),
(3, 'Sylhet Tea Garden & Waterfall Adventure', 'Discover the lush green tea gardens and stunning waterfalls of Sylhet in this 5-day tour. Visit places like Srimangal, Jaflong, and Madhabkunda Waterfall while enjoying scenic drives and local culture. The package includes hotel stays, guided tours, traditional meals, and transportation throughout the trip', 6, 2, '8000.00', '2025-06-03 11:16:00', '2025-06-05 11:16:00', 4, '17489345063500man.jpg', 1, '2025-06-03 07:16:46', '2025-06-03 09:08:26', 1, 1),
(4, 'Dhaka Heritage Walk: History & Culture Tour', 'Explore the vibrant history and culture of Dhaka city on this 3-day walking tour. Visit ancient sites like Lalbagh Fort, Ahsan Manzil, and the National Museum. Experience local markets, traditional cuisine, and the city’s rich cultural heritage with a knowledgeable guide.', 5, 3, '6000.00', '2025-06-03 11:17:00', '2025-06-06 11:17:00', 4, '', 1, '2025-06-03 07:17:57', '2025-06-03 08:44:40', 1, 1),
(5, 'Chittagong Hill Tracts Expedition', 'Embark on an adventurous 6-day journey through the scenic Hill Tracts region of Chittagong. Explore Bandarban and Rangamati, visit indigenous tribal villages, trek to beautiful waterfalls, and enjoy panoramic views from hilltops. The package includes lodging, guided excursions, meals, and transportation', 7, 2, '5000.00', '2025-06-03 11:18:00', '2025-06-05 11:19:00', 3, '17489346203832pexels-josh-sorenson.jpg', 1, '2025-06-03 07:19:10', '2025-06-03 09:10:20', 1, 1);

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
-- Indexes for table `hotel_booking_detail`
--
ALTER TABLE `hotel_booking_detail`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `hotel_bookings`
--
ALTER TABLE `hotel_bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hotel_booking_detail`
--
ALTER TABLE `hotel_booking_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hotel_room`
--
ALTER TABLE `hotel_room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tour_package_booking`
--
ALTER TABLE `tour_package_booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
