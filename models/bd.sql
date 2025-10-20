-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-10-2025 a las 05:47:45
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `hotel_reservas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservations`
--

CREATE TABLE `reservations` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `date_reservation` date NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `special_request` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `reservations`
--

INSERT INTO `reservations` (`id`, `user_id`, `room_id`, `date_reservation`, `checkin`, `checkout`, `special_request`, `created_at`, `updated_at`, `status_id`) VALUES
(8, 18, 1, '2025-10-18', '2025-10-23', '2025-10-30', 'a', '2025-10-18 22:47:14', '2025-10-18 22:47:14', 1),
(9, 18, 1, '2025-10-18', '2025-10-23', '2025-10-30', 'a', '2025-10-18 22:48:04', '2025-10-18 22:48:04', 1),
(10, 18, 2, '2025-10-18', '2025-10-23', '2025-10-31', 'Cama adicional', '2025-10-18 22:50:02', '2025-10-18 22:50:02', 1),
(11, 19, 1, '2025-10-18', '0000-00-00', '0000-00-00', '', '2025-10-18 23:45:45', '2025-10-18 23:45:45', 1),
(12, 19, 1, '2025-10-18', '0000-00-00', '0000-00-00', '', '2025-10-18 23:45:49', '2025-10-18 23:45:49', 1),
(13, 19, 1, '2025-10-18', '0000-00-00', '0000-00-00', '', '2025-10-18 23:46:14', '2025-10-18 23:46:14', 1),
(14, 19, 1, '2025-10-18', '0000-00-00', '0000-00-00', '', '2025-10-18 23:50:37', '2025-10-18 23:50:37', 1),
(15, 19, 1, '2025-10-18', '2025-10-18', '2025-10-15', '', '2025-10-18 23:50:50', '2025-10-18 23:50:50', 1),
(16, 19, 1, '2025-10-18', '2025-10-19', '2025-10-26', '', '2025-10-18 23:50:58', '2025-10-18 23:50:58', 1),
(17, 19, 1, '2025-10-18', '2025-10-24', '2025-10-30', '', '2025-10-18 23:51:05', '2025-10-18 23:51:05', 1),
(18, 19, 1, '2025-10-18', '0000-00-00', '0000-00-00', '', '2025-10-18 23:51:33', '2025-10-18 23:51:33', 1),
(19, 19, 1, '2025-10-18', '0000-00-00', '0000-00-00', '', '2025-10-18 23:51:47', '2025-10-18 23:51:47', 1),
(20, 19, 1, '2025-10-18', '0000-00-00', '0000-00-00', '', '2025-10-18 23:52:54', '2025-10-18 23:52:54', 1),
(21, 20, 1, '2025-10-19', '2025-10-22', '2025-10-29', 'Vista al mar', '2025-10-20 00:12:12', '2025-10-20 00:12:12', 1),
(22, 20, 2, '2025-10-19', '2025-10-22', '2025-10-30', 'Vista al mar', '2025-10-20 00:31:14', '2025-10-20 00:31:14', 1),
(23, 20, 2, '2025-10-19', '2025-10-21', '2025-10-29', 'Vista al mar', '2025-10-20 00:31:54', '2025-10-20 00:31:54', 1),
(24, 20, 1, '2025-10-19', '2025-10-22', '2025-10-28', 'Hola', '2025-10-20 01:18:55', '2025-10-20 01:18:55', 1),
(25, 20, 2, '2025-10-19', '2025-10-22', '2025-10-29', 'eee', '2025-10-20 01:20:53', '2025-10-20 01:20:53', 1),
(26, 20, 2, '2025-10-19', '2025-10-29', '2025-10-30', 'a', '2025-10-20 01:25:43', '2025-10-20 01:25:43', 1),
(27, 20, 2, '2025-10-19', '2025-10-30', '2025-10-31', 'Vista al mar', '2025-10-20 01:32:26', '2025-10-20 01:32:26', 1),
(28, 20, 2, '2025-10-19', '2025-10-22', '2025-10-30', 'A', '2025-10-20 01:43:46', '2025-10-20 01:43:46', 1),
(29, 20, 2, '2025-10-19', '2025-10-22', '2025-10-30', 'Hola', '2025-10-20 01:59:36', '2025-10-20 01:59:36', 1),
(30, 20, 2, '2025-10-19', '2025-10-22', '2025-10-30', 'Aaaa', '2025-10-20 02:06:12', '2025-10-20 02:06:12', 1),
(31, 20, 2, '2025-10-19', '2025-10-22', '2025-10-31', 'sdfsfs', '2025-10-20 02:11:55', '2025-10-20 02:11:55', 1),
(32, 20, 2, '2025-10-19', '2025-10-24', '2025-10-31', 'sadadad', '2025-10-20 02:19:26', '2025-10-20 02:19:26', 1),
(33, 20, 2, '2025-10-19', '2025-10-23', '2025-10-31', 'aaa', '2025-10-20 02:22:56', '2025-10-20 02:22:56', 1),
(34, 20, 3, '2025-10-19', '2025-10-25', '2025-10-31', 'asd2q3123', '2025-10-20 02:23:25', '2025-10-20 02:23:25', 1),
(35, 20, 3, '2025-10-19', '2025-10-23', '2025-10-30', '232323', '2025-10-20 02:27:09', '2025-10-20 02:27:09', 1),
(36, 20, 2, '2025-10-19', '2025-10-31', '2025-11-07', 'sdad', '2025-10-20 02:29:22', '2025-10-20 02:29:22', 1),
(37, 20, 3, '2025-10-19', '2025-10-23', '2025-10-31', 'sadfaa22', '2025-10-20 02:36:19', '2025-10-20 02:36:19', 1),
(38, 20, 2, '2025-10-19', '2025-10-24', '2025-10-30', 'saaaaaaaaaaaa', '2025-10-20 02:37:43', '2025-10-20 02:37:43', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `status` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`, `status`) VALUES
(1, 'Administrador', 1),
(2, 'Usuario', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rooms`
--

CREATE TABLE `rooms` (
  `id` int(11) NOT NULL,
  `description` text NOT NULL,
  `status_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `rooms`
--

INSERT INTO `rooms` (`id`, `description`, `status_id`, `type_id`) VALUES
(1, 'Habitación Simple', 1, 1),
(2, 'Habitación Doble', 1, 2),
(3, 'Suite de Lujo', 1, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `status_reservations`
--

CREATE TABLE `status_reservations` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `status_reservations`
--

INSERT INTO `status_reservations` (`id`, `name`) VALUES
(1, 'Pendiente'),
(2, 'Confirmada'),
(3, 'Cancelada');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `status_room`
--

CREATE TABLE `status_room` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `status_room`
--

INSERT INTO `status_room` (`id`, `name`) VALUES
(1, 'Disponible'),
(2, 'Ocupada'),
(3, 'En mantenimiento');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `type_rooms`
--

CREATE TABLE `type_rooms` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `status` tinyint(1) DEFAULT 1,
  `max_people` int(11) DEFAULT NULL,
  `precio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `type_rooms`
--

INSERT INTO `type_rooms` (`id`, `name`, `status`, `max_people`, `precio`) VALUES
(1, 'Simple', 0, 1, 80000),
(2, 'Doble', 0, 2, 120000),
(3, 'Suite', 0, 4, 200000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `document_number` int(11) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `roles_id` int(11) NOT NULL,
  `status` tinyint(1) DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `lastname`, `password`, `phone`, `document_number`, `email`, `roles_id`, `status`, `created_at`, `updated_at`) VALUES
(16, 'Yeison', 'Duarte', '12131245/hola', 321, 1110450150, 'yeic2007@gmail.com', 2, 1, '2025-10-15 16:53:10', '2025-10-15 16:53:10'),
(17, 'Yeison', 'Julian', '$2y$10$NLt.gvP6NpXPnpZ7BeqpOOX2slswq8ITrQdENDVcl7tkDVQsem2/m', 321, 1110450150, 'yeic20072@gmail.com', 2, 1, '2025-10-15 17:00:13', '2025-10-15 17:00:13'),
(18, 'Mariana', 'Zapata', '$2y$10$9Iq2zMD04TO/leNBzepETOSQxXu6pMMxwwECNd0OymSBm2hL6sgy6', 2147483647, 1102518167, 'mariana@gmail.com', 2, 1, '2025-10-18 21:52:35', '2025-10-18 21:52:35'),
(19, 'Palacios', 'Juan', '$2y$10$nVI4LSVa.IopKOuEG81ffep7n1oSDWsCSCv2NLsXxBTdMy0zTjvIi', 321, 1102518167, 'juan@gmail.com', 2, 1, '2025-10-18 22:56:07', '2025-10-18 22:56:07'),
(20, 'Maria', 'Camila', '$2y$10$tGtjrIouedsArOGnDIpX/.9frz9jxwqYfFP2gUh8EVbUwDA3CiY1m', 321, 1110450150, 'camila@gmail.com', 2, 1, '2025-10-20 00:11:47', '2025-10-20 00:11:47');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `room_id` (`room_id`),
  ADD KEY `status_id` (`status_id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `status_id` (`status_id`),
  ADD KEY `type_id` (`type_id`);

--
-- Indices de la tabla `status_reservations`
--
ALTER TABLE `status_reservations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `status_room`
--
ALTER TABLE `status_room`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `type_rooms`
--
ALTER TABLE `type_rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `roles_id` (`roles_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `status_reservations`
--
ALTER TABLE `status_reservations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `status_room`
--
ALTER TABLE `status_room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `type_rooms`
--
ALTER TABLE `type_rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `reservations`
--
ALTER TABLE `reservations`
  ADD CONSTRAINT `reservations_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `reservations_ibfk_2` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`),
  ADD CONSTRAINT `reservations_ibfk_3` FOREIGN KEY (`status_id`) REFERENCES `status_reservations` (`id`);

--
-- Filtros para la tabla `rooms`
--
ALTER TABLE `rooms`
  ADD CONSTRAINT `rooms_ibfk_1` FOREIGN KEY (`status_id`) REFERENCES `status_room` (`id`),
  ADD CONSTRAINT `rooms_ibfk_2` FOREIGN KEY (`type_id`) REFERENCES `type_rooms` (`id`);

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`roles_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
