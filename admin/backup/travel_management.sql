CREATE TABLE `users` (
  `id` int,
  `full_name` varchar(100),
  `email` varchar(100) UNIQUE,
  `password` varchar(255),
  `contact` varchar(15),
  `address` varchar(255),
  `status` int,
  `created_at` datetime,
  `updated_at` datetime,
  `created_by` int,
  `updated_by` int
);

CREATE TABLE `admin` (
  `id` int,
  `full_name` varchar(100),
  `email` varchar(100) UNIQUE,
  `password` varchar(255),
  `contact` varchar(15),
  `address` varchar(255),
  `status` int,
  `created_at` datetime,
  `updated_at` datetime,
  `created_by` int,
  `updated_by` int
);

CREATE TABLE `airlines_type` (
  `id` int,
  `name` varchar(255),
  `address` varchar(255),
  `contact_no` varchar(255),
  `status` int,
  `created_at` datetime,
  `updated_at` datetime,
  `created_by` int,
  `updated_by` int
);

CREATE TABLE `route` (
  `id` int,
  `route_type` varchar(100),
  `to_airport` int,
  `from_airport` int,
  `trans_area` varchar(255),
  `status` int,
  `created_at` datetime,
  `updated_at` datetime,
  `created_by` int,
  `updated_by` int
);

CREATE TABLE `airport` (
  `id` int,
  `name` varchar(255),
  `address` varchar(255),
  `contact` vatchar(255),
  `status` int,
  `created_at` datetime,
  `updated_at` datetime,
  `created_by` int,
  `updated_by` int
);

CREATE TABLE `schedule` (
  `id` int,
  `route_id` int,
  `airlines_id` int,
  `start_time_date` int,
  `end_time_date` int,
  `status` int,
  `created_at` datetime,
  `updated_at` datetime,
  `created_by` int,
  `updated_by` int
);

CREATE TABLE `seat` (
  `id` int,
  `airline_id` int,
  `seat_type` varchar(255),
  `seat_number` int,
  `seat_row` int,
  `seat_column` int,
  `status` int,
  `created_at` datetime,
  `updated_at` datetime,
  `created_by` int,
  `updated_by` int
);

CREATE TABLE `seat_fare`(
  `id` int
  'schedule_id' int,
  `seat_id` int,
  `seat_fare` int,
  `status` int,
  `created_at` datetime,
  `updated_at` datetime,
  `created_by` int,
  `updated_by` int
)

CREATE TABLE `destinations` (
  `destination_id` int,
  `name` varchar(100),
  `country` varchar(100),
  `description` text,
  `image_url` varchar(255),
  `status` int,
  `created_at` datetime,
  `updated_at` datetime,
  `created_by` int,
  `updated_by` int
);

CREATE TABLE `tours_package` (
  `id` int,
  `title` varchar(255),
  `description` text,
  `destination` varchar(100),
  `duration_days` int,
  `price` decimal(10,2),
  `start_date` datetime,
  `end_date` datetime,
  `available_slots` int,
  `image_url` varchar(255),
  `status` int,
  `created_at` datetime,
  `updated_at` datetime,
  `created_by` int,
  `updated_by` int
);

CREATE TABLE `tours_package_destination` (
  `id` int,
  `tours_package_id` int,
  `destination_id` int,
  `status` int,
  `created_at` datetime,
  `updated_at` datetime,
  `created_by` int,
  `updated_by` int
);

CREATE TABLE `tour_package_booking` (
  `id` int,
  `user_id` int,
  `tour_id` int,
  `booking_date` timestamp,
  `qty` decimal(10,2),
  `discount` decimal(10,2),
  `total_amount` decimal(10,2),
  `status` int,
  `created_at` datetime,
  `updated_at` datetime,
  `created_by` int,
  `updated_by` int
);

CREATE TABLE `hotel` (
  `id` int,
  `name` varchar(150),
  `location_id` int,
  `description` TEXT,
  `image_url` varchar(255),
  `rating` decimal(2,1),
  `status` int,
  `created_at` datetime,
  `updated_at` datetime,
  `created_by` int,
  `updated_by` int
);
CREATE TABLE `location`(
  `id` int,
  `name` varchar(100),
)

CREATE TABLE `hotel_rooms` (
  `id` int,
  `hotel_id` int,
  `room_type` varchar(50),
  `price_per_night` decimal(10,2),
  `total_rooms` int,
  `available_rooms` int,
  `tv` int,
  `ac` int,
  `fridge` int,
  `complimentary_breakfast` int,
  `guest_number` int,
  `available_rooms` int,
  `status` int,
  `created_at` datetime,
  `updated_at` datetime,
  `created_by` int,
  `updated_by` int
);

CREATE TABLE `hotel_booking` (
  `id` int,
  `user_id` int,
  `hotel_id` int,
  `check_in_date` datetime,
  `check_out_date` datetime,
  `number_of_rooms` int,
  `total_amount` decimal(10,2),
  `booking_date` timestamp,
  `status` int,
  `created_at` datetime,
  `updated_at` datetime,
  `created_by` int,
  `updated_by` int
);

CREATE TABLE `hotel_booking_details` (
  `id` int,
  `hotel_booking_id` int,
  `room_id` int,
  `fare` decimal(10,2),
  `status` int,
  `created_at` datetime,
  `updated_at` datetime,
  `created_by` int,
  `updated_by` int
);


CREATE TABLE `payments` (
  `payment_id` int,
  `booking_id` int,
  `payment_date` timestamp,
  `amount` decimal(10,2),
  `payment_method` enum,
  `payment_status` enum,
  `status` int,
  `created_at` datetime,
  `updated_at` datetime,
  `created_by` int,
  `updated_by` int
);

CREATE TABLE `ticket_detail` (
  `user_id` int,
  `ticket_id` int,
  `seat_id` int,
  `price` int,
  `status` int,
  `created_at` datetime,
  `updated_at` datetime,
  `created_by` int,
  `updated_by` int
);

CREATE TABLE `reviews` (
  `review_id` int,
  `user_id` int,
  `tour_id` int,
  `rating` int,
  `comment` text,
  `review_date` timestamp,
  `status` int,
  `created_at` datetime,
  `updated_at` datetime,
  `created_by` int,
  `updated_by` int
);
