-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-06-2026 a las 05:15:15
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
-- Estructura de tabla para la tabla `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE `carrito` (
  `id` int(11) NOT NULL,
  `usuario_id` int(11) DEFAULT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito_detalle`
--

CREATE TABLE `carrito_detalle` (
  `id` int(11) NOT NULL,
  `carrito_id` int(11) DEFAULT NULL,
  `producto_variacion_id` int(11) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id`, `nombre`) VALUES
(1, 'Hombre'),
(2, 'Mujer'),
(3, 'Niños'),
(4, 'Pisa Huevos'),
(5, 'Outlet');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `color`
--

CREATE TABLE `color` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `hex` varchar(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `color`
--

INSERT INTO `color` (`id`, `nombre`, `hex`) VALUES
(1, 'Negro', NULL),
(2, 'Blanco', NULL),
(3, 'Rojo', NULL),
(4, 'Azul', NULL),
(5, 'Café', NULL),
(6, 'Negro', '#000000'),
(7, 'Blanco', '#FFFFFF'),
(8, 'Azul', '#1D4ED8'),
(9, 'Rojo', '#DC2626'),
(10, 'Gris', '#6B7280'),
(11, 'Marrón', '#8B4513'),
(12, 'Beige', '#F5F5DC'),
(13, 'Rosado', '#EC4899'),
(14, 'Naranja', '#F97316'),
(15, 'Morado', '#7C3AED'),
(16, 'Verde oliva', '#556B2F'),
(17, 'Verde claro', '#22C55E'),
(18, 'Azul claro', '#38BDF8'),
(19, 'Gris claro', '#D1D5DB'),
(20, 'Dorado', '#D4AF37'),
(21, 'Plateado', '#C0C0C0'),
(22, 'Vino tinto', '#7F1D1D'),
(23, 'Camel', '#C19A6B'),
(24, 'Nude', '#E5C1A7'),
(25, 'Terracota', '#E2725B'),
(26, 'Chocolate', '#5C4033');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2026_03_18_191428_update_users_table', 2),
(5, '2026_03_18_191724_add_rol_to_users_table', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modelo`
--

CREATE TABLE `modelo` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `categoria_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `modelo`
--

INSERT INTO `modelo` (`id`, `nombre`, `categoria_id`) VALUES
(1, 'RUN LINE', 1),
(2, 'AVERLAY', 1),
(3, 'BOLICHERO', 1),
(4, 'COOL', 1),
(5, 'FOR STYLE', 1),
(6, 'SPORT DUAL LINE', 1),
(7, 'URBAN FLOW', 1),
(20, 'RUN LINE NEGRO BLANCO', 2),
(21, 'RUN LINE NEGRO ROSADO', 2),
(22, 'RUN LINE GRIS LILA', 2),
(23, 'SPORT DUAL LINE NEGRO FUCSIA', 2),
(24, 'SPORT DUAL LINE GRIS ROSADO', 2),
(25, 'SPORT DUAL LINE NEGRO GRIS', 2),
(26, 'AVERLAY BLANCO', 2),
(27, 'BOLICHERO BLANCO', 2),
(28, 'DUAL LINE NEGRO ESCARCHADO', 2),
(29, 'FOR STYLE BLANCO', 2),
(30, 'FOR STYLE NEGRO', 2),
(31, 'URBAN FLOW VAINILLA', 2),
(32, 'URBAN FLOW BLANCO', 2),
(42, 'CAPELLADA HOMBRE', 5),
(43, 'CAPELLADA MUJER', 5),
(44, 'CAPELLADA UNISEX', 5),
(45, 'CORAZONES', 3),
(46, 'KURUMI', 3),
(47, 'PRINCESA', 3),
(48, 'ZOOTOPIA', 3),
(49, 'MANDALA', 4),
(50, 'MAFALDA', 4),
(51, 'PALMERAS', 4),
(52, 'PLANETAS', 4),
(53, 'MICKEY MOUSE', 4),
(54, 'MINI MOUSE', 4),
(55, 'SPIDER-MAN', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id` int(11) NOT NULL,
  `modelo_id` int(11) DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `estado` enum('activo','inactivo') DEFAULT 'activo'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `modelo_id`, `descripcion`, `estado`) VALUES
(1, 1, NULL, 'activo'),
(2, 1, NULL, 'activo'),
(3, 1, NULL, 'activo'),
(4, 2, NULL, 'activo'),
(5, 3, NULL, 'activo'),
(6, 4, NULL, 'activo'),
(7, 5, NULL, 'activo'),
(8, 5, NULL, 'activo'),
(9, 6, NULL, 'activo'),
(10, 7, NULL, 'activo'),
(11, 7, NULL, 'activo'),
(12, 1, 'RUN LINE gris x azul', 'activo'),
(20, 20, NULL, 'activo'),
(21, 21, NULL, 'activo'),
(22, 22, NULL, 'activo'),
(23, 23, NULL, 'activo'),
(24, 24, NULL, 'activo'),
(25, 25, NULL, 'activo'),
(26, 26, NULL, 'activo'),
(27, 27, NULL, 'activo'),
(28, 28, NULL, 'activo'),
(29, 29, NULL, 'activo'),
(30, 30, NULL, 'activo'),
(31, 31, NULL, 'activo'),
(32, 32, NULL, 'activo'),
(36, 42, NULL, 'activo'),
(37, 43, NULL, 'activo'),
(38, 44, NULL, 'activo'),
(39, 45, NULL, 'activo'),
(40, 46, NULL, 'activo'),
(41, 47, NULL, 'activo'),
(42, 48, NULL, 'activo'),
(43, 49, NULL, 'activo'),
(44, 50, NULL, 'activo'),
(45, 51, NULL, 'activo'),
(46, 52, NULL, 'activo'),
(47, 53, NULL, 'activo'),
(48, 54, NULL, 'activo'),
(49, 55, NULL, 'activo');

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto_personalizacion`
--

CREATE TABLE `producto_personalizacion` (
  `id` int(11) NOT NULL,
  `producto_id` int(11) DEFAULT NULL,
  `permite_nombre` tinyint(1) DEFAULT 0,
  `permite_texto` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto_variacion`
--

CREATE TABLE `producto_variacion` (
  `id` int(11) NOT NULL,
  `producto_id` int(11) DEFAULT NULL,
  `talla_id` int(11) DEFAULT NULL,
  `color_id` int(11) DEFAULT NULL,
  `precio` decimal(10,2) DEFAULT NULL,
  `stock` int(11) DEFAULT 0,
  `costo` decimal(10,2) DEFAULT NULL,
  `tiene_descuento` tinyint(1) NOT NULL DEFAULT 0,
  `valor_descuento` decimal(10,2) DEFAULT NULL,
  `color_secundario_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `producto_variacion`
--

INSERT INTO `producto_variacion` (`id`, `producto_id`, `talla_id`, `color_id`, `precio`, `stock`, `costo`, `tiene_descuento`, `valor_descuento`, `color_secundario_id`) VALUES
(1, 1, 17, 1, 120000.00, 5, 70000.00, 0, NULL, 2),
(2, 1, 18, 1, 120000.00, 5, 70000.00, 0, NULL, 2),
(3, 1, 19, 1, 120000.00, 5, 70000.00, 0, NULL, 2),
(4, 1, 20, 1, 120000.00, 5, 70000.00, 0, NULL, 2),
(5, 1, 21, 1, 120000.00, 5, 70000.00, 0, NULL, 2),
(6, 1, 22, 1, 120000.00, 5, 70000.00, 0, NULL, 2),
(7, 1, 23, 1, 120000.00, 5, 70000.00, 0, NULL, 2),
(8, 12, 17, 10, 120000.00, 5, 70000.00, 0, NULL, 8),
(9, 12, 18, 10, 120000.00, 5, 70000.00, 0, NULL, 8),
(10, 12, 19, 10, 120000.00, 5, 70000.00, 0, NULL, 8),
(11, 12, 20, 10, 120000.00, 5, 70000.00, 0, NULL, 8),
(12, 12, 21, 10, 120000.00, 5, 70000.00, 0, NULL, 8),
(13, 12, 22, 10, 120000.00, 5, 70000.00, 0, NULL, 8),
(14, 12, 23, 10, 120000.00, 5, 70000.00, 0, NULL, 8),
(15, 1, 17, 1, 120000.00, 5, 70000.00, 0, NULL, 2),
(16, 1, 18, 1, 120000.00, 5, 70000.00, 0, NULL, 2),
(17, 1, 19, 1, 120000.00, 5, 70000.00, 0, NULL, 2),
(18, 1, 20, 1, 120000.00, 5, 70000.00, 0, NULL, 2),
(19, 1, 21, 1, 120000.00, 5, 70000.00, 0, NULL, 2),
(20, 1, 22, 1, 120000.00, 5, 70000.00, 0, NULL, 2),
(21, 1, 23, 1, 120000.00, 5, 70000.00, 0, NULL, 2),
(22, 2, 17, 1, 120000.00, 5, 70000.00, 0, NULL, 2),
(23, 2, 18, 1, 120000.00, 5, 70000.00, 0, NULL, 2),
(24, 2, 19, 1, 120000.00, 5, 70000.00, 0, NULL, 2),
(25, 2, 20, 1, 120000.00, 5, 70000.00, 0, NULL, 2),
(26, 2, 21, 1, 120000.00, 5, 70000.00, 0, NULL, 2),
(27, 2, 22, 1, 120000.00, 5, 70000.00, 0, NULL, 2),
(28, 2, 23, 1, 120000.00, 5, 70000.00, 0, NULL, 2),
(29, 3, 17, 1, 120000.00, 5, 70000.00, 0, NULL, 2),
(30, 3, 18, 1, 120000.00, 5, 70000.00, 0, NULL, 2),
(31, 3, 19, 1, 120000.00, 5, 70000.00, 0, NULL, 2),
(32, 3, 20, 1, 120000.00, 5, 70000.00, 0, NULL, 2),
(33, 3, 21, 1, 120000.00, 5, 70000.00, 0, NULL, 2),
(34, 3, 22, 1, 120000.00, 5, 70000.00, 0, NULL, 2),
(35, 3, 23, 1, 120000.00, 5, 70000.00, 0, NULL, 2),
(36, 12, 17, 1, 120000.00, 5, 70000.00, 0, NULL, 2),
(37, 12, 18, 1, 120000.00, 5, 70000.00, 0, NULL, 2),
(38, 12, 19, 1, 120000.00, 5, 70000.00, 0, NULL, 2),
(39, 12, 20, 1, 120000.00, 5, 70000.00, 0, NULL, 2),
(40, 12, 21, 1, 120000.00, 5, 70000.00, 0, NULL, 2),
(41, 12, 22, 1, 120000.00, 5, 70000.00, 0, NULL, 2),
(42, 12, 23, 1, 120000.00, 5, 70000.00, 0, NULL, 2),
(43, 4, 17, 1, 120000.00, 5, 70000.00, 0, NULL, 2),
(44, 4, 18, 1, 120000.00, 5, 70000.00, 0, NULL, 2),
(45, 4, 19, 1, 120000.00, 5, 70000.00, 0, NULL, 2),
(46, 4, 20, 1, 120000.00, 5, 70000.00, 0, NULL, 2),
(47, 4, 21, 1, 120000.00, 5, 70000.00, 0, NULL, 2),
(48, 4, 22, 1, 120000.00, 5, 70000.00, 0, NULL, 2),
(49, 4, 23, 1, 120000.00, 5, 70000.00, 0, NULL, 2),
(50, 5, 17, 1, 120000.00, 5, 70000.00, 0, NULL, 2),
(51, 5, 18, 1, 120000.00, 5, 70000.00, 0, NULL, 2),
(52, 5, 19, 1, 120000.00, 5, 70000.00, 0, NULL, 2),
(53, 5, 20, 1, 120000.00, 5, 70000.00, 0, NULL, 2),
(54, 5, 21, 1, 120000.00, 5, 70000.00, 0, NULL, 2),
(55, 5, 22, 1, 120000.00, 5, 70000.00, 0, NULL, 2),
(56, 5, 23, 1, 120000.00, 5, 70000.00, 0, NULL, 2),
(57, 6, 17, 1, 120000.00, 5, 70000.00, 0, NULL, 2),
(58, 6, 18, 1, 120000.00, 5, 70000.00, 0, NULL, 2),
(59, 6, 19, 1, 120000.00, 5, 70000.00, 0, NULL, 2),
(60, 6, 20, 1, 120000.00, 5, 70000.00, 0, NULL, 2),
(61, 6, 21, 1, 120000.00, 5, 70000.00, 0, NULL, 2),
(62, 6, 22, 1, 120000.00, 5, 70000.00, 0, NULL, 2),
(63, 6, 23, 1, 120000.00, 5, 70000.00, 0, NULL, 2),
(64, 7, 17, 1, 120000.00, 5, 70000.00, 0, NULL, 2),
(65, 7, 18, 1, 120000.00, 5, 70000.00, 0, NULL, 2),
(66, 7, 19, 1, 120000.00, 5, 70000.00, 0, NULL, 2),
(67, 7, 20, 1, 120000.00, 5, 70000.00, 0, NULL, 2),
(68, 7, 21, 1, 120000.00, 5, 70000.00, 0, NULL, 2),
(69, 7, 22, 1, 120000.00, 5, 70000.00, 0, NULL, 2),
(70, 7, 23, 1, 120000.00, 5, 70000.00, 0, NULL, 2),
(71, 8, 17, 1, 120000.00, 5, 70000.00, 0, NULL, 2),
(72, 8, 18, 1, 120000.00, 5, 70000.00, 0, NULL, 2),
(73, 8, 19, 1, 120000.00, 5, 70000.00, 0, NULL, 2),
(74, 8, 20, 1, 120000.00, 5, 70000.00, 0, NULL, 2),
(75, 8, 21, 1, 120000.00, 5, 70000.00, 0, NULL, 2),
(76, 8, 22, 1, 120000.00, 5, 70000.00, 0, NULL, 2),
(77, 8, 23, 1, 120000.00, 5, 70000.00, 0, NULL, 2),
(78, 9, 17, 1, 120000.00, 5, 70000.00, 0, NULL, 2),
(79, 9, 18, 1, 120000.00, 5, 70000.00, 0, NULL, 2),
(80, 9, 19, 1, 120000.00, 5, 70000.00, 0, NULL, 2),
(81, 9, 20, 1, 120000.00, 5, 70000.00, 0, NULL, 2),
(82, 9, 21, 1, 120000.00, 5, 70000.00, 0, NULL, 2),
(83, 9, 22, 1, 120000.00, 5, 70000.00, 0, NULL, 2),
(84, 9, 23, 1, 120000.00, 5, 70000.00, 0, NULL, 2),
(85, 10, 17, 1, 120000.00, 5, 70000.00, 0, NULL, 2),
(86, 10, 18, 1, 120000.00, 5, 70000.00, 0, NULL, 2),
(87, 10, 19, 1, 120000.00, 5, 70000.00, 0, NULL, 2),
(88, 10, 20, 1, 120000.00, 5, 70000.00, 0, NULL, 2),
(89, 10, 21, 1, 120000.00, 5, 70000.00, 0, NULL, 2),
(90, 10, 22, 1, 120000.00, 5, 70000.00, 0, NULL, 2),
(91, 10, 23, 1, 120000.00, 5, 70000.00, 0, NULL, 2),
(92, 11, 17, 1, 120000.00, 5, 70000.00, 0, NULL, 2),
(93, 11, 18, 1, 120000.00, 5, 70000.00, 0, NULL, 2),
(94, 11, 19, 1, 120000.00, 5, 70000.00, 0, NULL, 2),
(95, 11, 20, 1, 120000.00, 5, 70000.00, 0, NULL, 2),
(96, 11, 21, 1, 120000.00, 5, 70000.00, 0, NULL, 2),
(97, 11, 22, 1, 120000.00, 5, 70000.00, 0, NULL, 2),
(98, 11, 23, 1, 120000.00, 5, 70000.00, 0, NULL, 2),
(120, 20, 13, 6, 129900.00, 2, 70000.00, 0, NULL, NULL),
(121, 20, 14, 6, 129900.00, 2, 70000.00, 0, NULL, NULL),
(122, 20, 15, 6, 129900.00, 2, 70000.00, 0, NULL, NULL),
(123, 20, 16, 6, 129900.00, 2, 70000.00, 0, NULL, NULL),
(124, 20, 17, 6, 129900.00, 2, 70000.00, 0, NULL, NULL),
(125, 20, 18, 6, 129900.00, 2, 70000.00, 0, NULL, NULL),
(126, 20, 19, 6, 129900.00, 2, 70000.00, 0, NULL, NULL),
(127, 21, 13, 13, 129900.00, 2, 70000.00, 0, NULL, NULL),
(128, 21, 14, 13, 129900.00, 2, 70000.00, 0, NULL, NULL),
(129, 21, 15, 13, 129900.00, 2, 70000.00, 0, NULL, NULL),
(130, 21, 16, 13, 129900.00, 2, 70000.00, 0, NULL, NULL),
(131, 21, 17, 13, 129900.00, 2, 70000.00, 0, NULL, NULL),
(132, 21, 18, 13, 129900.00, 2, 70000.00, 0, NULL, NULL),
(133, 21, 19, 13, 129900.00, 2, 70000.00, 0, NULL, NULL),
(134, 22, 13, 15, 129900.00, 2, 70000.00, 0, NULL, NULL),
(135, 22, 14, 15, 129900.00, 2, 70000.00, 0, NULL, NULL),
(136, 22, 15, 15, 129900.00, 2, 70000.00, 0, NULL, NULL),
(137, 22, 16, 15, 129900.00, 2, 70000.00, 0, NULL, NULL),
(138, 22, 17, 15, 129900.00, 2, 70000.00, 0, NULL, NULL),
(139, 22, 18, 15, 129900.00, 2, 70000.00, 0, NULL, NULL),
(140, 22, 19, 15, 129900.00, 2, 70000.00, 0, NULL, NULL),
(141, 23, 13, 13, 129900.00, 2, 70000.00, 0, NULL, NULL),
(142, 23, 14, 13, 129900.00, 2, 70000.00, 0, NULL, NULL),
(143, 23, 15, 13, 129900.00, 2, 70000.00, 0, NULL, NULL),
(144, 23, 16, 13, 129900.00, 2, 70000.00, 0, NULL, NULL),
(145, 23, 17, 13, 129900.00, 2, 70000.00, 0, NULL, NULL),
(146, 23, 18, 13, 129900.00, 2, 70000.00, 0, NULL, NULL),
(147, 23, 19, 13, 129900.00, 2, 70000.00, 0, NULL, NULL),
(148, 24, 13, 13, 129900.00, 2, 70000.00, 0, NULL, NULL),
(149, 24, 14, 13, 129900.00, 2, 70000.00, 0, NULL, NULL),
(150, 24, 15, 13, 129900.00, 2, 70000.00, 0, NULL, NULL),
(151, 24, 16, 13, 129900.00, 2, 70000.00, 0, NULL, NULL),
(152, 24, 17, 13, 129900.00, 2, 70000.00, 0, NULL, NULL),
(153, 24, 18, 13, 129900.00, 2, 70000.00, 0, NULL, NULL),
(154, 24, 19, 13, 129900.00, 2, 70000.00, 0, NULL, NULL),
(155, 25, 13, 10, 129900.00, 2, 70000.00, 0, NULL, NULL),
(156, 25, 14, 10, 129900.00, 2, 70000.00, 0, NULL, NULL),
(157, 25, 15, 10, 129900.00, 2, 70000.00, 0, NULL, NULL),
(158, 25, 16, 10, 129900.00, 2, 70000.00, 0, NULL, NULL),
(159, 25, 17, 10, 129900.00, 2, 70000.00, 0, NULL, NULL),
(160, 25, 18, 10, 129900.00, 2, 70000.00, 0, NULL, NULL),
(161, 25, 19, 10, 129900.00, 2, 70000.00, 0, NULL, NULL),
(162, 26, 13, 7, 129900.00, 2, 70000.00, 0, NULL, NULL),
(163, 26, 14, 7, 129900.00, 2, 70000.00, 0, NULL, NULL),
(164, 26, 15, 7, 129900.00, 2, 70000.00, 0, NULL, NULL),
(165, 26, 16, 7, 129900.00, 2, 70000.00, 0, NULL, NULL),
(166, 26, 17, 7, 129900.00, 2, 70000.00, 0, NULL, NULL),
(167, 26, 18, 7, 129900.00, 2, 70000.00, 0, NULL, NULL),
(168, 26, 19, 7, 129900.00, 2, 70000.00, 0, NULL, NULL),
(169, 27, 13, 7, 129900.00, 2, 70000.00, 0, NULL, NULL),
(170, 27, 14, 7, 129900.00, 2, 70000.00, 0, NULL, NULL),
(171, 27, 15, 7, 129900.00, 2, 70000.00, 0, NULL, NULL),
(172, 27, 16, 7, 129900.00, 2, 70000.00, 0, NULL, NULL),
(173, 27, 17, 7, 129900.00, 2, 70000.00, 0, NULL, NULL),
(174, 27, 18, 7, 129900.00, 2, 70000.00, 0, NULL, NULL),
(175, 27, 19, 7, 129900.00, 2, 70000.00, 0, NULL, NULL),
(176, 28, 13, 21, 129900.00, 2, 70000.00, 0, NULL, NULL),
(177, 28, 14, 21, 129900.00, 2, 70000.00, 0, NULL, NULL),
(178, 28, 15, 21, 129900.00, 2, 70000.00, 0, NULL, NULL),
(179, 28, 16, 21, 129900.00, 2, 70000.00, 0, NULL, NULL),
(180, 28, 17, 21, 129900.00, 2, 70000.00, 0, NULL, NULL),
(181, 28, 18, 21, 129900.00, 2, 70000.00, 0, NULL, NULL),
(182, 28, 19, 21, 129900.00, 2, 70000.00, 0, NULL, NULL),
(183, 29, 13, 7, 129900.00, 2, 70000.00, 0, NULL, NULL),
(184, 29, 14, 7, 129900.00, 2, 70000.00, 0, NULL, NULL),
(185, 29, 15, 7, 129900.00, 2, 70000.00, 0, NULL, NULL),
(186, 29, 16, 7, 129900.00, 2, 70000.00, 0, NULL, NULL),
(187, 29, 17, 7, 129900.00, 2, 70000.00, 0, NULL, NULL),
(188, 29, 18, 7, 129900.00, 2, 70000.00, 0, NULL, NULL),
(189, 29, 19, 7, 129900.00, 2, 70000.00, 0, NULL, NULL),
(190, 30, 13, 6, 129900.00, 2, 70000.00, 0, NULL, NULL),
(191, 30, 14, 6, 129900.00, 2, 70000.00, 0, NULL, NULL),
(192, 30, 15, 6, 129900.00, 2, 70000.00, 0, NULL, NULL),
(193, 30, 16, 6, 129900.00, 2, 70000.00, 0, NULL, NULL),
(194, 30, 17, 6, 129900.00, 2, 70000.00, 0, NULL, NULL),
(195, 30, 18, 6, 129900.00, 2, 70000.00, 0, NULL, NULL),
(196, 30, 19, 6, 129900.00, 2, 70000.00, 0, NULL, NULL),
(197, 31, 13, 12, 129900.00, 2, 70000.00, 0, NULL, NULL),
(198, 31, 14, 12, 129900.00, 2, 70000.00, 0, NULL, NULL),
(199, 31, 15, 12, 129900.00, 2, 70000.00, 0, NULL, NULL),
(200, 31, 16, 12, 129900.00, 2, 70000.00, 0, NULL, NULL),
(201, 31, 17, 12, 129900.00, 2, 70000.00, 0, NULL, NULL),
(202, 31, 18, 12, 129900.00, 2, 70000.00, 0, NULL, NULL),
(203, 31, 19, 12, 129900.00, 2, 70000.00, 0, NULL, NULL),
(204, 32, 13, 7, 129900.00, 2, 70000.00, 0, NULL, NULL),
(205, 32, 14, 7, 129900.00, 2, 70000.00, 0, NULL, NULL),
(206, 32, 15, 7, 129900.00, 2, 70000.00, 0, NULL, NULL),
(207, 32, 16, 7, 129900.00, 2, 70000.00, 0, NULL, NULL),
(208, 32, 17, 7, 129900.00, 2, 70000.00, 0, NULL, NULL),
(209, 32, 18, 7, 129900.00, 2, 70000.00, 0, NULL, NULL),
(210, 32, 19, 7, 129900.00, 2, 70000.00, 0, NULL, NULL),
(211, 36, 18, 3, 89900.00, 1, 50000.00, 0, NULL, NULL),
(212, 36, 19, 3, 89900.00, 1, 50000.00, 0, NULL, NULL),
(213, 36, 20, 3, 89900.00, 1, 50000.00, 0, NULL, NULL),
(214, 36, 21, 3, 89900.00, 1, 50000.00, 0, NULL, NULL),
(215, 36, 22, 3, 89900.00, 1, 50000.00, 0, NULL, NULL),
(216, 36, 23, 3, 89900.00, 1, 50000.00, 0, NULL, NULL),
(217, 37, 14, 17, 89900.00, 1, 50000.00, 0, NULL, NULL),
(218, 37, 15, 17, 89900.00, 1, 50000.00, 0, NULL, NULL),
(219, 37, 16, 17, 89900.00, 1, 50000.00, 0, NULL, NULL),
(220, 37, 17, 17, 89900.00, 1, 50000.00, 0, NULL, NULL),
(221, 37, 18, 17, 89900.00, 1, 50000.00, 0, NULL, NULL),
(222, 37, 19, 17, 89900.00, 1, 50000.00, 0, NULL, NULL),
(223, 38, 14, 6, 89900.00, 1, 50000.00, 0, NULL, NULL),
(224, 38, 15, 6, 89900.00, 1, 50000.00, 0, NULL, NULL),
(225, 38, 16, 6, 89900.00, 1, 50000.00, 0, NULL, NULL),
(226, 38, 17, 6, 89900.00, 1, 50000.00, 0, NULL, NULL),
(227, 38, 18, 6, 89900.00, 1, 50000.00, 0, NULL, NULL),
(228, 38, 19, 6, 89900.00, 1, 50000.00, 0, NULL, NULL),
(229, 38, 20, 6, 89900.00, 1, 50000.00, 0, NULL, NULL),
(230, 38, 21, 6, 89900.00, 1, 50000.00, 0, NULL, NULL),
(231, 38, 22, 6, 89900.00, 1, 50000.00, 0, NULL, NULL),
(232, 38, 23, 6, 89900.00, 1, 50000.00, 0, NULL, NULL),
(233, 39, 7, 7, 119900.00, 2, 65000.00, 0, NULL, NULL),
(234, 39, 8, 7, 119900.00, 2, 65000.00, 0, NULL, NULL),
(235, 39, 9, 7, 119900.00, 2, 65000.00, 0, NULL, NULL),
(236, 39, 10, 7, 119900.00, 2, 65000.00, 0, NULL, NULL),
(237, 39, 11, 7, 119900.00, 2, 65000.00, 0, NULL, NULL),
(238, 39, 12, 7, 119900.00, 2, 65000.00, 0, NULL, NULL),
(239, 40, 7, 21, 119900.00, 2, 65000.00, 0, NULL, NULL),
(240, 40, 8, 21, 119900.00, 2, 65000.00, 0, NULL, NULL),
(241, 40, 9, 21, 119900.00, 2, 65000.00, 0, NULL, NULL),
(242, 40, 10, 21, 119900.00, 2, 65000.00, 0, NULL, NULL),
(243, 40, 11, 21, 119900.00, 2, 65000.00, 0, NULL, NULL),
(244, 41, 7, 12, 119900.00, 2, 65000.00, 0, NULL, NULL),
(245, 41, 8, 12, 119900.00, 2, 65000.00, 0, NULL, NULL),
(246, 41, 9, 12, 119900.00, 2, 65000.00, 0, NULL, NULL),
(247, 41, 10, 12, 119900.00, 2, 65000.00, 0, NULL, NULL),
(248, 41, 11, 12, 119900.00, 2, 65000.00, 0, NULL, NULL),
(249, 41, 12, 12, 119900.00, 2, 65000.00, 0, NULL, NULL),
(250, 42, 7, 12, 119900.00, 2, 65000.00, 0, NULL, NULL),
(251, 42, 8, 12, 119900.00, 2, 65000.00, 0, NULL, NULL),
(252, 42, 9, 12, 119900.00, 2, 65000.00, 0, NULL, NULL),
(253, 42, 10, 12, 119900.00, 2, 65000.00, 0, NULL, NULL),
(254, 42, 11, 12, 119900.00, 2, 65000.00, 0, NULL, NULL),
(255, 42, 12, 12, 119900.00, 2, 65000.00, 0, NULL, NULL),
(256, 43, 14, 17, 75000.00, 10, 40000.00, 0, NULL, NULL),
(257, 43, 15, 17, 75000.00, 10, 40000.00, 0, NULL, NULL),
(258, 43, 16, 17, 75000.00, 10, 40000.00, 0, NULL, NULL),
(259, 43, 17, 17, 75000.00, 10, 40000.00, 0, NULL, NULL),
(260, 43, 18, 17, 75000.00, 10, 40000.00, 0, NULL, NULL),
(261, 43, 19, 17, 75000.00, 10, 40000.00, 0, NULL, NULL),
(262, 44, 14, 7, 75000.00, 10, 40000.00, 0, NULL, NULL),
(263, 44, 15, 7, 75000.00, 10, 40000.00, 0, NULL, NULL),
(264, 44, 16, 7, 75000.00, 10, 40000.00, 0, NULL, NULL),
(265, 44, 17, 7, 75000.00, 10, 40000.00, 0, NULL, NULL),
(266, 44, 18, 7, 75000.00, 10, 40000.00, 0, NULL, NULL),
(267, 44, 19, 7, 75000.00, 10, 40000.00, 0, NULL, NULL),
(268, 45, 13, 7, 75000.00, 10, 40000.00, 0, NULL, NULL),
(269, 45, 14, 7, 75000.00, 10, 40000.00, 0, NULL, NULL),
(270, 45, 22, 7, 75000.00, 10, 40000.00, 0, NULL, NULL),
(271, 45, 23, 7, 75000.00, 10, 40000.00, 0, NULL, NULL),
(272, 46, 18, 1, 75000.00, 10, 40000.00, 0, NULL, NULL),
(273, 46, 19, 1, 75000.00, 10, 40000.00, 0, NULL, NULL),
(274, 47, 7, 1, 65000.00, 10, 35000.00, 0, NULL, NULL),
(275, 47, 8, 1, 65000.00, 10, 35000.00, 0, NULL, NULL),
(276, 47, 9, 1, 65000.00, 10, 35000.00, 0, NULL, NULL),
(277, 47, 10, 1, 65000.00, 10, 35000.00, 0, NULL, NULL),
(278, 47, 11, 1, 65000.00, 10, 35000.00, 0, NULL, NULL),
(279, 47, 12, 1, 65000.00, 10, 35000.00, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `talla`
--

CREATE TABLE `talla` (
  `id` int(11) NOT NULL,
  `numero` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `talla`
--

INSERT INTO `talla` (`id`, `numero`) VALUES
(1, 21),
(2, 22),
(3, 23),
(4, 24),
(5, 25),
(6, 26),
(7, 27),
(8, 28),
(9, 29),
(10, 30),
(11, 31),
(12, 32),
(13, 33),
(14, 34),
(15, 35),
(16, 36),
(17, 37),
(18, 38),
(19, 39),
(20, 40),
(21, 41),
(22, 42),
(23, 43);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombres` varchar(255) NOT NULL,
  `apellidos` varchar(255) NOT NULL,
  `documento` varchar(255) DEFAULT NULL,
  `celular` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `rol` enum('admin','cliente') NOT NULL DEFAULT 'cliente',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `nombres`, `apellidos`, `documento`, `celular`, `email`, `email_verified_at`, `password`, `rol`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'Principal', NULL, NULL, 'admin@marents.com', NULL, '$2y$12$/ruksAEHZXciLrlIFRHaPuHyWPhtC91rhUxF7Qi8wvipjlW491Afe', 'admin', NULL, '2026-03-19 00:19:48', '2026-03-26 00:26:42'),
(2, 'joaquin', 'cañon', '1012443507', '3053970242', 'danielcf97@hotmail.com', NULL, '$2y$12$GBUWK/ybsfjDBDEh3qF3ueEOqc19F/gvrNrY84nm89b7vT12Y028W', 'cliente', NULL, '2026-03-25 23:27:07', '2026-03-25 23:27:07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_expiration_index` (`expiration`);

--
-- Indices de la tabla `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_locks_expiration_index` (`expiration`);

--
-- Indices de la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario_id` (`usuario_id`);

--
-- Indices de la tabla `carrito_detalle`
--
ALTER TABLE `carrito_detalle`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carrito_id` (`carrito_id`),
  ADD KEY `producto_variacion_id` (`producto_variacion_id`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indices de la tabla `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `modelo`
--
ALTER TABLE `modelo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categoria_id` (`categoria_id`);

--
-- Indices de la tabla `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `modelo_id` (`modelo_id`);

--
-- Indices de la tabla `producto_imagen`
--
ALTER TABLE `producto_imagen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `producto_id` (`producto_id`);

--
-- Indices de la tabla `producto_personalizacion`
--
ALTER TABLE `producto_personalizacion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `producto_id` (`producto_id`);

--
-- Indices de la tabla `producto_variacion`
--
ALTER TABLE `producto_variacion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `producto_id` (`producto_id`),
  ADD KEY `talla_id` (`talla_id`),
  ADD KEY `color_id` (`color_id`),
  ADD KEY `fk_color_secundario` (`color_secundario_id`);

--
-- Indices de la tabla `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indices de la tabla `talla`
--
ALTER TABLE `talla`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `numero` (`numero`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carrito`
--
ALTER TABLE `carrito`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `carrito_detalle`
--
ALTER TABLE `carrito_detalle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `color`
--
ALTER TABLE `color`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `modelo`
--
ALTER TABLE `modelo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT de la tabla `producto_imagen`
--
ALTER TABLE `producto_imagen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT de la tabla `producto_personalizacion`
--
ALTER TABLE `producto_personalizacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `producto_variacion`
--
ALTER TABLE `producto_variacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=280;

--
-- AUTO_INCREMENT de la tabla `talla`
--
ALTER TABLE `talla`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD CONSTRAINT `carrito_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`);

--
-- Filtros para la tabla `carrito_detalle`
--
ALTER TABLE `carrito_detalle`
  ADD CONSTRAINT `carrito_detalle_ibfk_1` FOREIGN KEY (`carrito_id`) REFERENCES `carrito` (`id`),
  ADD CONSTRAINT `carrito_detalle_ibfk_2` FOREIGN KEY (`producto_variacion_id`) REFERENCES `producto_variacion` (`id`);

--
-- Filtros para la tabla `modelo`
--
ALTER TABLE `modelo`
  ADD CONSTRAINT `modelo_ibfk_1` FOREIGN KEY (`categoria_id`) REFERENCES `categoria` (`id`);

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`modelo_id`) REFERENCES `modelo` (`id`);

--
-- Filtros para la tabla `producto_imagen`
--
ALTER TABLE `producto_imagen`
  ADD CONSTRAINT `producto_imagen_ibfk_1` FOREIGN KEY (`producto_id`) REFERENCES `producto` (`id`);

--
-- Filtros para la tabla `producto_personalizacion`
--
ALTER TABLE `producto_personalizacion`
  ADD CONSTRAINT `producto_personalizacion_ibfk_1` FOREIGN KEY (`producto_id`) REFERENCES `producto` (`id`);

--
-- Filtros para la tabla `producto_variacion`
--
ALTER TABLE `producto_variacion`
  ADD CONSTRAINT `fk_color_secundario` FOREIGN KEY (`color_secundario_id`) REFERENCES `color` (`id`),
  ADD CONSTRAINT `producto_variacion_ibfk_1` FOREIGN KEY (`producto_id`) REFERENCES `producto` (`id`),
  ADD CONSTRAINT `producto_variacion_ibfk_2` FOREIGN KEY (`talla_id`) REFERENCES `talla` (`id`),
  ADD CONSTRAINT `producto_variacion_ibfk_3` FOREIGN KEY (`color_id`) REFERENCES `color` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
