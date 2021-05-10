-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-09-2017 a las 00:23:20
-- Versión del servidor: 10.1.25-MariaDB
-- Versión de PHP: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tienda_online`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(10) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`) VALUES
(1, 'ACCION'),
(2, 'COMEDIA'),
(3, 'TERROR'),
(4, 'AVENTURA'),
(5, 'ANIMADA');



--
-- Estructura de tabla para la tabla `peliculas`
--

CREATE TABLE `peliculas` (
  `id` int(11) NOT NULL,
  `titulo` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `foto` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `categoria_id` int(10) NOT NULL,
  `fecha` date NOT NULL,
  `estado` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `peliculas`
--

INSERT INTO `peliculas` (`id`, `titulo`, `descripcion`, `foto`, `precio`, `categoria_id`, `fecha`, `estado`) VALUES
(1, 'GUARDIANES DE LAS GALAXIA', 'FULL ACCION', '2.jpg', '20.00', 1, '2017-09-03', 1),
(2, 'MICKEY MOUSE', 'FULL ANIMACION', '4.jpg', '25.00', 5, '2017-09-03', 1),
(3, 'BANANA', 'FULL AVENTURA', '6.jpg', '24.00', 4, '2017-09-03', 1),
(4, 'BATMAN', 'FULL ACCION', 'batman.jpg', '30.00', 1, '2017-09-03', 1),
(5, 'CAMINO HACIA EL TERROR', 'FULL TERROR', 'camino-hacia-el-terror.jpg', '35.00', 3, '2017-09-03', 1),
(6, 'DEADPOOL', 'FULL ACCION', 'deadpool.jpg', '40.00', 1, '2017-09-03', 1),
(7, 'LEGO', 'FULL ANIMADA', 'lego.jpg', '17.00', 5, '2017-09-03', 1),
(8, 'RAMBO', 'FULL ACCION', 'rambo.jpg', '35.00', 1, '2017-09-03', 1),
(9, 'RESIDENT', 'FULL ACCION', 'resident.jpg', '36.00', 1, '2017-09-03', 1),
(10, 'SIMPSON', 'FULL', 'simpsons.jpg', '31.00', 4, '2017-09-03', 1),
(11, 'TED', 'FULL COMEDIA', 'ted.jpg', '17.00', 2, '2017-09-03', 1),
(12, 'TRANSFORMERS', 'FULL ACCION', 'transformer.jpg', '40.00', 1, '2017-09-03', 1);

-- --------------------------------------------------------

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);




--
-- Indices de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  ADD PRIMARY KEY (`id`);



--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--

--
-- AUTO_INCREMENT de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
