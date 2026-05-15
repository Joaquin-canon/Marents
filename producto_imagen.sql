-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-05-2026 a las 02:16:39
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `marents_bd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto_imagen`
--

CREATE TABLE `producto_imagen` (
  `id` int(11) NOT NULL,
  `producto_id` int(11) DEFAULT NULL,
  `url` text DEFAULT NULL,
  `orden` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `producto_imagen`
--

INSERT INTO `producto_imagen` (`id`, `producto_id`, `url`, `orden`) VALUES
(1, 1, 'Run_line_gris_azul_1_HOMBRE.jpeg', 1),
(2, 1, 'Run_line_gris_azul_2_HOMBRE.jpeg', 2),
(3, 2, 'Averlay_1_UNISEX.jpeg', 1),
(4, 2, 'Averlay_2_UNISEX.jpeg', 2),
(5, 3, 'Bolichero_1_UNISEX.jpeg', 1),
(6, 3, 'Bolichero_2_UNISEX.jpeg', 2),
(7, 4, 'COOL_negro_rojo_1_HOMBRE.jpeg', 1),
(8, 4, 'COOL_negro_rojo_2_HOMBRE.jpeg', 2),
(9, 5, 'For_style_blanco_1_UNISEX.jpeg', 1),
(10, 5, 'For_style_blanco_2_UNISEX.jpeg', 2),
(11, 5, 'For_style_blanco_1_UNISEX.jpeg', 1),
(12, 5, 'For_style_blanco_2_UNISEX.jpeg', 2),
(13, 7, 'Sport_dual_line_gris_rojo_1_HOMBRE.jpeg', 1),
(14, 7, 'Sport_dual_line_gris_rojo_2_HOMBRE.jpeg', 2),
(15, 8, 'Urban_flow_vainilla_1_UNISEX.jpeg', 1),
(16, 8, 'Urban_flow_vainilla_2_UNISEX.jpeg', 2),
(17, 9, 'Urban_flow_blanco_1_UNISEX.jpeg', 1),
(18, 9, 'Urban_flow_blanco_2_UNISEX.jpeg', 2),
(19, 12, 'Run_line_gris_azul_1_HOMBRE.jpeg', 1),
(20, 12, 'Run_line_gris_azul_2_HOMBRE.jpeg', 2),
(21, 20, 'Run_line _negro_blanco_1_UNISEX.jpeg', 1),
(22, 20, 'Run_line _negro_blanco_2_UNISEX.jpeg', 1),
(23, 21, 'Run_line_ negro_rosado_1_MUJER.jpeg', 1),
(24, 21, 'Run_line_negro_rosado_2_MUJER.jpeg', 1),
(25, 22, 'Run_line_gris_ lila_1_MUJER.jpeg', 1),
(26, 22, 'Run_line_gris_lila_2_MUJER.jpeg', 1),
(27, 23, 'Sport_dual_line_negro_fucsia_1MUJER.jpeg', 1),
(28, 23, 'Sport_dual_line_negro_fucsia_2_MUJER.jpeg', 1),
(29, 24, 'Sport_dual_line_gris_rosado_1_DAMA.jpeg', 1),
(30, 24, 'Sport_dual_line_gris_rosado_2_DAMA.jpeg', 1),
(31, 25, 'Sport_dual_line_gris_rosado_2_DAMA.jpeg', 1),
(32, 26, 'Averlay_1_ UNISEX.jpeg', 1),
(33, 26, 'Averlay_2_UNISEX.jpeg', 1),
(34, 27, 'Bolichero_1_UNISEX.jpeg', 1),
(35, 27, 'Bolichero _2_UNISEX.jpeg', 1),
(36, 28, 'Dual_line_1_MUJER.jpeg', 1),
(37, 28, 'Dual_line_2_MUJER.jpeg', 1),
(38, 29, 'For_style_blanco_1_UNISEX.jpeg', 1),
(39, 29, 'For_style_blanco_2_UNISEX.jpeg', 1),
(40, 30, 'For_style_negro_1_UNISEX.jpeg', 1),
(41, 30, 'For_style_negro_2_UNISEX.jpeg', 1),
(42, 31, 'Urban_flow_vainilla_1_UNISEX.jpeg', 1),
(43, 31, 'Urban_flow_vainilla_2_UNISEX.jpeg', 1),
(44, 32, 'Urban_flow_blanco_1 _UNISEX.jpeg', 1),
(45, 32, 'Urban_flow_blanco_2_UNISEX.jpeg', 1),
(46, 36, 'OUTLET_1_HOMBRE.jpeg', 1),
(47, 37, 'OUTLET_1_DAMA.jpeg', 1),
(48, 38, 'OUTLET_1_UNISEX.jpeg', 1),
(49, 39, 'Corazones_1_NIÑA.jpeg', 1),
(50, 39, 'Corazones_2_NIÑA.jpeg', 1),
(51, 40, 'Kurumi_1_NIÑA.jpeg', 1),
(52, 40, 'Kurumi 2 NIÑA.jpeg', 1),
(53, 41, 'Princesa_1_NIÑA.jpeg', 1),
(54, 41, 'Princesa 2 NIÑA.jpeg', 1),
(55, 42, 'Zootopia_1_NIÑO.jpeg', 1),
(56, 42, 'Zootopia_2_NIÑO.jpeg', 1),
(57, 43, 'img/productos/pisa_huevos/pisa_mandala_.jpeg', 1),
(58, 44, 'img/productos/pisa_huevos/pisa_mafalda_.jpeg', 1),
(59, 45, 'img/productos/pisa_huevos/pisa_palma_blanca.jpeg', 1),
(60, 46, 'img/productos/pisa_huevos/pisa_planeta_.jpeg', 1),
(61, 46, 'img/productos/pisa_huevos/pisa_planeta_.jpeg', 1),
(62, 47, 'img/productos/pisa_huevos/NIÑOS_MICKEY_MOUSE.jpeg', 1),
(63, 47, 'img/productos/pisa_huevos/NIÑOS_MICKEY_MOUSE.jpeg', 1),
(64, 48, 'img/productos/pisa_huevos/NIÑA_MINI.jpeg', 1),
(65, 49, 'img/productos/pisa_huevos/NIÑO_SPIDER_MAN.jpeg', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `producto_imagen`
--
ALTER TABLE `producto_imagen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `producto_id` (`producto_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `producto_imagen`
--
ALTER TABLE `producto_imagen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `producto_imagen`
--
ALTER TABLE `producto_imagen`
  ADD CONSTRAINT `producto_imagen_ibfk_1` FOREIGN KEY (`producto_id`) REFERENCES `producto` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
