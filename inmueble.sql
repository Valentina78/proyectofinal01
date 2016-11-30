-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-11-2016 a las 22:43:36
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `inmueble`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `accion`
--

CREATE TABLE `accion` (
  `id` int(11) NOT NULL,
  `accion` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `accion`
--

INSERT INTO `accion` (`id`, `accion`) VALUES
(1, 'Vender'),
(2, 'Alquilar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `clave` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `anuncio`
--

CREATE TABLE `anuncio` (
  `id` int(11) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `precio` double(13,2) NOT NULL,
  `accion` varchar(50) NOT NULL,
  `descripcion` text NOT NULL,
  `latlng` varchar(100) NOT NULL,
  `usuario` int(11) NOT NULL,
  `img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `anuncio`
--

INSERT INTO `anuncio` (`id`, `titulo`, `direccion`, `tipo`, `precio`, `accion`, `descripcion`, `latlng`, `usuario`, `img`) VALUES
(23, 'casa', 'santo domingo', 'Casa', 52000.00, 'Vender', '2 plantas', '18.4860575, -69.9312117', 2, ''),
(24, 'apartamento', 'santiago', 'Casa', 52369.00, 'Vender', 'penthouse', '18.4860575, -69.9312117', 2, ''),
(25, 'villa', 'san pedro', 'Casa', 586321.00, 'Vender', '2000 m', '18.4860575, -69.9312117', 2, ''),
(26, 'casa', 'santiago', 'Casa', 8452263.00, 'Alquilar', '3 plantas', '18.49582544922654, -69.9360182185547', 2, ''),
(27, 'finca', 'romana', 'Casa', 1458963258.00, 'Alquilar', '50000 m2', '18.495011474729413, -69.93395828203126', 2, ''),
(28, 'apartamento', 'san juan', 'Apartamento', 41526.00, 'Alquilar', '4ta planta', '18.4860575, -69.9312117', 2, ''),
(29, 'villa', 'romana', 'Casa', 485632.00, 'Vender', 'piscina', '18.494360292346695, -69.92039703325196', 2, ''),
(30, 'finca', 'puerto plata', 'Casa', 45856.00, 'Vender', 'grande', '18.4860575, -69.9312117', 2, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fotos`
--

CREATE TABLE `fotos` (
  `idFoto` int(11) NOT NULL,
  `idAnuncio` int(11) NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `fotos`
--

INSERT INTO `fotos` (`idFoto`, `idAnuncio`, `foto`) VALUES
(1, 21, 'application/fotos/583c81dda21e7.jpg'),
(2, 22, 'fotos/583c89dc49007.jpg'),
(3, 23, 'fotos/583c98b177a2e.jpg'),
(4, 24, 'fotos/583c98da6f1a0.jpg'),
(5, 25, 'fotos/583c990665d7a.jpg'),
(6, 26, 'fotos/583c994e611ff.jpg'),
(7, 27, 'fotos/583c997639b45.jpg'),
(8, 28, 'fotos/583c99bb4a39b.jpg'),
(9, 29, 'fotos/583c99ecbcc43.jpg'),
(10, 30, 'fotos/583c9a9db9876.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo`
--

CREATE TABLE `tipo` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo`
--

INSERT INTO `tipo` (`id`, `nombre`) VALUES
(1, 'Casa'),
(2, 'Apartamento');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `clave` varchar(100) NOT NULL,
  `cedula` varchar(50) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `fax` varchar(15) NOT NULL,
  `celular` varchar(15) NOT NULL,
  `info_adic` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `apellido`, `correo`, `clave`, `cedula`, `telefono`, `fax`, `celular`, `info_adic`) VALUES
(9, 'Alex ', 'Dino', '20152871@itla.edu.do', '63771e3e7738ed3048c3', '8532065', '56163216', '656516', '6513216', 'fvghjkl'),
(10, 'rosa', 'aracena', 'admin', '202cb962ac59075b964b', '86532', '65432', '6532', '865', 'ghjk');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `accion`
--
ALTER TABLE `accion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `anuncio`
--
ALTER TABLE `anuncio`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `fotos`
--
ALTER TABLE `fotos`
  ADD PRIMARY KEY (`idFoto`);

--
-- Indices de la tabla `tipo`
--
ALTER TABLE `tipo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `accion`
--
ALTER TABLE `accion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `anuncio`
--
ALTER TABLE `anuncio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT de la tabla `fotos`
--
ALTER TABLE `fotos`
  MODIFY `idFoto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `tipo`
--
ALTER TABLE `tipo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
