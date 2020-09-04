-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-09-2020 a las 09:28:08
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `blog`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `post`
--

CREATE TABLE `post` (
  `id_post` int(99) NOT NULL,
  `titulo` varchar(99) COLLATE latin1_spanish_ci NOT NULL DEFAULT 'sin titulo',
  `contenido` text COLLATE latin1_spanish_ci NOT NULL,
  `imagen_destacada` varchar(99) COLLATE latin1_spanish_ci DEFAULT NULL,
  `temas` varchar(99) COLLATE latin1_spanish_ci DEFAULT NULL,
  `fecha_publicación` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `post`
--

INSERT INTO `post` (`id_post`, `titulo`, `contenido`, `imagen_destacada`, `temas`, `fecha_publicación`) VALUES
(4, 'Emmet', 'Emmet (formerly Zen Coding[1]) is a set of plug-ins for text editors that allow for high-speed coding and editing in HTML, XML, XSL, and other structured code formats via content assist. The project was started by Vadim Makeev in 2008[2] and continues to be actively developed by Sergey Chikuyonok and Emmet users. Since 2015 Mikael Geletsyan[3] is responsible for UX at Emmet. The tools have been incorporated into several popular text editors, as well as some plug-ins developed by the Emmet team and others implemented independently. However, Emmet is primarily independent from any text editor, as the engine works directly with text rather than with any particular software.[4]\r\n\r\n', 'emmet.jpg', 'Utilidades', '2020-08-28 07:56:22'),
(5, 'GIT', 'Es un software de control de versiones diseñado por Linus Torvalds, pensando en la eficiencia y la confiabilidad del mantenimiento', 'git.jpg', 'Entorno desarrollo', '2020-09-01 08:57:18');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id_post`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `post`
--
ALTER TABLE `post`
  MODIFY `id_post` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
