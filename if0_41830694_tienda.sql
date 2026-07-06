-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: sql103.infinityfree.com
-- Tiempo de generación: 05-07-2026 a las 22:26:48
-- Versión del servidor: 11.4.12-MariaDB
-- Versión de PHP: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `if0_41830694_tienda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `producto` varchar(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `dni` varchar(20) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `ciudad` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`producto`, `nombre`, `email`, `dni`, `direccion`, `ciudad`) VALUES
('Logitech g733', 'Mariana Herrera', 'mariana.h@gmail.com', '35888111', 'Av. Santa Fe 1420', 'Palermo'),
('CPU Ryzen 9 7950x', 'Facundo Gómez', 'facu_gomez@gmail.com', '40123456', 'San Martín 850', 'Rosario'),
('GPU RTX 4000', 'Sofía Benítez', 'sofia.b@gmail.com', '38999000', 'Calle 12 nro 432', 'La Plata'),
('Monitor ACER 27 pulgadas', 'Lucas Peralta', 'lucas.p@gmail.com', '31555666', '9 de Julio 1050', 'Córdoba'),
('Teclado Kumara k552', 'Valentina Rossi', 'valen.rossi@gmail.com', '42111222', 'Aristóbulo del Valle 3200', 'Santa Fe');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `codigo` varchar(20) NOT NULL,
  `precio` decimal(10,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `codigo`, `precio`) VALUES
(1, 'Logitech g733', 'A001', '350000.00'),
(2, 'CPU Ryzen 9 7950x', 'C002', '650000.00'),
(3, 'Monitor ACER 27 pulgadas', 'M003', '500000.00'),
(4, 'Teclado Kumara k552', 'TO04', '100000.00'),
(5, 'GPU RTX 4090', 'G005', '3000000.00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
