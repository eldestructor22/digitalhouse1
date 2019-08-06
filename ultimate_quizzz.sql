-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 06-08-2019 a las 16:10:04
-- Versión del servidor: 5.7.26-0ubuntu0.18.10.1
-- Versión de PHP: 7.2.19-0ubuntu0.18.10.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ultimate_quizzz`
--

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
(3, '2019_07_23_183813_preguntas', 1),
(4, '2019_07_23_183852_respuestas', 1),
(5, '2019_07_23_1838653_preguntas_respuestas', 1),
(6, '2019_07_23_183903_temas', 1),
(7, '2019_07_23_184028_ranking', 1),
(8, '2019_07_23_184512_partidas', 1),
(9, '2019_07_23_184542_partida_pregunta', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `partidas`
--

CREATE TABLE `partidas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `puntaje` int(11) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `partida_pregunta`
--

CREATE TABLE `partida_pregunta` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `partida_id` bigint(20) UNSIGNED NOT NULL,
  `pregunta_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Estructura de tabla para la tabla `preguntas`
--

CREATE TABLE `preguntas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `enunciado` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tema_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `preguntas`
--

INSERT INTO `preguntas` (`id`, `enunciado`, `tema_id`, `created_at`, `updated_at`) VALUES
(6, '¿Cuando empezaron los mundiales de futbol?', '1', '2019-08-02 22:40:36', '2019-08-02 22:40:36'),
(7, '¿Cuando comenzó la segunda guerra mundial?', '2', '2019-08-02 22:43:48', '2019-08-02 22:43:48'),
(8, '¿Cual es la película mas taquillera de la historia?', '4', '2019-08-02 22:45:06', '2019-08-02 22:45:06'),
(9, '¿Donde esta la playa mas grande del mundo?', '3', '2019-08-02 22:47:11', '2019-08-02 22:47:11'),
(11, '¿Cual es el deporte nacional?', '5', '2019-08-02 22:49:52', '2019-08-02 22:49:52'),
(12, 'TEST', '2', '2019-08-05 21:49:37', '2019-08-05 21:49:37'),
(13, 'TEST', '2', '2019-08-05 21:50:27', '2019-08-05 21:50:27'),
(14, 'TEST4', '1', '2019-08-05 21:50:44', '2019-08-05 21:50:44');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntas_respuestas`
--

CREATE TABLE `preguntas_respuestas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pregunta_id` bigint(20) UNSIGNED NOT NULL,
  `respuesta_id` bigint(20) UNSIGNED NOT NULL,
  `correcto` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `preguntas_respuestas`
--

INSERT INTO `preguntas_respuestas` (`id`, `pregunta_id`, `respuesta_id`, `correcto`, `created_at`, `updated_at`) VALUES
(1, 6, 17, 1, '2019-08-02 22:40:36', '2019-08-02 22:40:36'),
(2, 6, 18, 0, '2019-08-02 22:40:36', '2019-08-02 22:40:36'),
(3, 6, 19, 0, '2019-08-02 22:40:36', '2019-08-02 22:40:36'),
(4, 6, 20, 0, '2019-08-02 22:40:36', '2019-08-02 22:40:36'),
(5, 7, 21, 1, '2019-08-02 22:43:48', '2019-08-02 22:43:48'),
(6, 7, 22, 0, '2019-08-02 22:43:48', '2019-08-02 22:43:48'),
(7, 7, 23, 0, '2019-08-02 22:43:48', '2019-08-02 22:43:48'),
(8, 7, 24, 0, '2019-08-02 22:43:48', '2019-08-02 22:43:48'),
(9, 8, 25, 1, '2019-08-02 22:45:06', '2019-08-02 22:45:06'),
(10, 8, 26, 0, '2019-08-02 22:45:06', '2019-08-02 22:45:06'),
(11, 8, 27, 0, '2019-08-02 22:45:06', '2019-08-02 22:45:06'),
(12, 8, 28, 0, '2019-08-02 22:45:06', '2019-08-02 22:45:06'),
(13, 9, 29, 1, '2019-08-02 22:47:11', '2019-08-02 22:47:11'),
(14, 9, 30, 0, '2019-08-02 22:47:11', '2019-08-02 22:47:11'),
(15, 9, 31, 0, '2019-08-02 22:47:11', '2019-08-02 22:47:11'),
(16, 9, 32, 0, '2019-08-02 22:47:11', '2019-08-02 22:47:11'),
(21, 11, 37, 1, '2019-08-02 22:49:52', '2019-08-02 22:49:52'),
(22, 11, 38, 0, '2019-08-02 22:49:52', '2019-08-02 22:49:52'),
(23, 11, 39, 0, '2019-08-02 22:49:52', '2019-08-02 22:49:52'),
(24, 11, 40, 0, '2019-08-02 22:49:52', '2019-08-02 22:49:52'),
(25, 14, 42, 1, '2019-08-05 21:50:44', '2019-08-05 21:50:44'),
(26, 14, 43, 0, '2019-08-05 21:50:44', '2019-08-05 21:50:44'),
(27, 14, 44, 0, '2019-08-05 21:50:44', '2019-08-05 21:50:44'),
(28, 14, 45, 0, '2019-08-05 21:50:44', '2019-08-05 21:50:44');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ranking`
--

CREATE TABLE `ranking` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `puntuacion` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuestas`
--

CREATE TABLE `respuestas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `enunciado` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `respuestas`
--

INSERT INTO `respuestas` (`id`, `enunciado`, `created_at`, `updated_at`) VALUES
(17, '1930', '2019-08-02 22:40:36', '2019-08-02 22:40:36'),
(18, '1929', '2019-08-02 22:40:36', '2019-08-02 22:40:36'),
(19, '1934', '2019-08-02 22:40:36', '2019-08-02 22:40:36'),
(20, '1926', '2019-08-02 22:40:36', '2019-08-02 22:40:36'),
(21, '1939', '2019-08-02 22:43:48', '2019-08-02 22:43:48'),
(22, '1940', '2019-08-02 22:43:48', '2019-08-02 22:43:48'),
(23, '1935', '2019-08-02 22:43:48', '2019-08-02 22:43:48'),
(24, '1945', '2019-08-02 22:43:48', '2019-08-02 22:43:48'),
(25, 'Avengers:End game', '2019-08-02 22:45:06', '2019-08-02 22:45:06'),
(26, 'Avatar', '2019-08-02 22:45:06', '2019-08-02 22:45:06'),
(27, 'Toy story 4', '2019-08-02 22:45:06', '2019-08-02 22:45:06'),
(28, 'E.T', '2019-08-02 22:45:06', '2019-08-02 22:45:06'),
(29, 'Bangladesh', '2019-08-02 22:47:11', '2019-08-02 22:47:11'),
(30, 'Rio de Janeiro', '2019-08-02 22:47:11', '2019-08-02 22:47:11'),
(31, 'Cancun', '2019-08-02 22:47:11', '2019-08-02 22:47:11'),
(32, 'Creta', '2019-08-02 22:47:11', '2019-08-02 22:47:11'),
(37, 'Pato', '2019-08-02 22:49:52', '2019-08-02 22:49:52'),
(38, 'Futbol', '2019-08-02 22:49:52', '2019-08-02 22:49:52'),
(39, 'Rugby', '2019-08-02 22:49:52', '2019-08-02 22:49:52'),
(40, 'Polo', '2019-08-02 22:49:52', '2019-08-02 22:49:52'),
(41, 'test2', '2019-08-05 21:50:27', '2019-08-05 21:50:27'),
(42, '12', '2019-08-05 21:50:44', '2019-08-05 21:50:44'),
(43, '13', '2019-08-05 21:50:44', '2019-08-05 21:50:44'),
(44, '14', '2019-08-05 21:50:44', '2019-08-05 21:50:44'),
(45, '15', '2019-08-05 21:50:44', '2019-08-05 21:50:44');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `temas`
--

CREATE TABLE `temas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tema` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
  `nombre_de_usuario` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `nombre_de_usuario`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Maru', 'maru@gmail.com', NULL, 'Maru', '$2y$10$WemAyymCtrVlhUqm7rOPD.X0yBGdFYYav8l.7TIKcmnJ9VdYIwU42', NULL, NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `partidas`
--
ALTER TABLE `partidas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `partidas_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `partida_pregunta`
--
ALTER TABLE `partida_pregunta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `partida_pregunta_partida_id_foreign` (`partida_id`),
  ADD KEY `partida_pregunta_pregunta_id_foreign` (`pregunta_id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `preguntas_respuestas`
--
ALTER TABLE `preguntas_respuestas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `preguntas_respuestas_pregunta_id_foreign` (`pregunta_id`),
  ADD KEY `preguntas_respuestas_respuesta_id_foreign` (`respuesta_id`);

--
-- Indices de la tabla `ranking`
--
ALTER TABLE `ranking`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ranking_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `respuestas`
--
ALTER TABLE `respuestas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `temas`
--
ALTER TABLE `temas`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `partidas`
--
ALTER TABLE `partidas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `partida_pregunta`
--
ALTER TABLE `partida_pregunta`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `preguntas_respuestas`
--
ALTER TABLE `preguntas_respuestas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `ranking`
--
ALTER TABLE `ranking`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `respuestas`
--
ALTER TABLE `respuestas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT de la tabla `temas`
--
ALTER TABLE `temas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `partidas`
--
ALTER TABLE `partidas`
  ADD CONSTRAINT `partidas_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `partida_pregunta`
--
ALTER TABLE `partida_pregunta`
  ADD CONSTRAINT `partida_pregunta_partida_id_foreign` FOREIGN KEY (`partida_id`) REFERENCES `partidas` (`id`),
  ADD CONSTRAINT `partida_pregunta_pregunta_id_foreign` FOREIGN KEY (`pregunta_id`) REFERENCES `preguntas` (`id`);

--
-- Filtros para la tabla `preguntas_respuestas`
--
ALTER TABLE `preguntas_respuestas`
  ADD CONSTRAINT `preguntas_respuestas_pregunta_id_foreign` FOREIGN KEY (`pregunta_id`) REFERENCES `preguntas` (`id`),
  ADD CONSTRAINT `preguntas_respuestas_respuesta_id_foreign` FOREIGN KEY (`respuesta_id`) REFERENCES `respuestas` (`id`);

--
-- Filtros para la tabla `ranking`
--
ALTER TABLE `ranking`
  ADD CONSTRAINT `ranking_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
