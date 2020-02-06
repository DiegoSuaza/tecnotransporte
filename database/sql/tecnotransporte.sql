-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-02-2020 a las 17:01:33
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tecnotransporte`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `companies`
--

CREATE TABLE `companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `companies`
--

INSERT INTO `companies` (`id`, `name`, `email`, `logo`, `created_at`, `updated_at`) VALUES
(1, 'compañia 1', 'compania1@hotmail.com', 'logo_5e3ba2631f0c2_compania.png', NULL, NULL),
(2, 'compañia 2', 'compania2@gmail.com', 'logo_5e3ba2631f0c2_compania.png', NULL, NULL),
(3, 'compañia 3', 'compania3@gmail.com', 'logo_5e3ba2631f0c2_compania.png', NULL, NULL),
(5, 'compañia 5', 'compania5@gmail.com', 'logo_5e3ba2631f0c2_compania.png', NULL, NULL),
(8, 'compañia 6', 'compania6@gmail.com', 'logo_5e3ba2631f0c2_compania.png', NULL, NULL),
(9, 'compañia 7', 'compania7@gmail.com', 'logo_5e3ba2631f0c2_compania.png', NULL, NULL),
(10, 'compañia 8', 'compania8@gmail.com', 'logo_5e3ba2631f0c2_compania.png', NULL, NULL),
(11, 'compañia 9', 'compania9@gmail.com', 'logo_5e3ba2631f0c2_compania.png', NULL, NULL),
(12, 'compañia 10', 'compania10@gmail.com', 'logo_5e3ba2631f0c2_compania.png', NULL, NULL),
(13, 'compañia 11', 'compania11@gmail.com', 'logo_5e3ba2631f0c2_compania.png', NULL, NULL),
(14, 'compañia 12', 'compania12@gmail.com', 'logo_5e3ba2631f0c2_compania.png', '2020-02-06 10:21:39', '2020-02-06 10:21:39'),
(15, 'compañia 13 actualizado', 'compania13@gmail.com', 'logo_5e3bac523192d_compania.png', '2020-02-06 10:22:43', '2020-02-06 11:04:02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_companies` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` bigint(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `employees`
--

INSERT INTO `employees` (`id`, `name`, `last_name`, `id_companies`, `email`, `phone`, `created_at`, `updated_at`) VALUES
(2, 'Diego Andres', 'Suaza Garcia', 1, 'diegosuaza4@gmail.com', 3208280241, '2020-02-06 18:30:10', '2020-02-06 18:45:08'),
(4, 'camila', 'alvarez', 2, 'camilaal@gmail.com', 3115073421, NULL, NULL),
(5, 'juan ', 'cardona', 3, 'cardoj@gmail.com', 3837334, NULL, NULL),
(12, 'sara', 'alvarez', 5, 'saraz@gmail.com', 3115073221, NULL, NULL),
(13, 'nicolas ', 'arango', 8, 'nicoar@gmail.com', 3267334, NULL, NULL),
(14, 'cristian', 'garrido', 9, 'garrido_c@gmail.com', 3204073221, NULL, NULL),
(15, 'felipe ', 'arango', 10, 'pipe2@gmail.com', 3887334, NULL, NULL),
(16, 'cristina', 'suarez', 11, 'crisz@gmail.com', 3209876544, NULL, NULL),
(17, 'santigo ', 'garcia', 12, 'santi33@gmail.com', 3266634, NULL, NULL),
(18, 'milena', 'garcia', 13, 'mile@gmail.com', 3115070021, NULL, NULL),
(19, 'wilmar ', 'beltran', 14, 'belw@gmail.com', 3267399, NULL, NULL),
(20, 'paula ', 'nuñez', 15, 'paunu@gmail.com', 3123134566, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2020_02_05_195818_create_companies_table', 2),
(4, '2020_02_05_200311_create_employees_table', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
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
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@admin.com', NULL, '$2y$10$NnxL7Y8.8YM0ZyO5Q5zD0e9KqQnrCOjdYNoBJitrcFOecYCL27ZC.', NULL, '2020-02-06 00:39:24', '2020-02-06 00:39:24');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `companies_email_unique` (`email`);

--
-- Indices de la tabla `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `employees_email_unique` (`email`),
  ADD KEY `employees_id_companies_foreign` (`id_companies`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `employees_id_companies_foreign` FOREIGN KEY (`id_companies`) REFERENCES `companies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
