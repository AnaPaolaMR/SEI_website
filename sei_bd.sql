-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-04-2018 a las 01:03:02
-- Versión del servidor: 10.1.26-MariaDB
-- Versión de PHP: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sei_bd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `id_contacto` int(3) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `celular` varchar(20) DEFAULT NULL,
  `email_contacto` varchar(50) DEFAULT NULL,
  `direccion_contacto` varchar(200) DEFAULT NULL,
  `enlace_facebook` varchar(100) DEFAULT NULL,
  `enlace_twitter` varchar(100) DEFAULT NULL,
  `enlace_instagram` varchar(100) DEFAULT NULL,
  `FK_id_usuario` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`id_contacto`, `telefono`, `celular`, `email_contacto`, `direccion_contacto`, `enlace_facebook`, `enlace_twitter`, `enlace_instagram`, `FK_id_usuario`) VALUES
(100, '2 19 55 24', '6621405180', 'anap_mirazo.ron@hotmail.com', 'Esperanza #1094 Col. Misioneros entre Rep. de Guatemala y Callejon Campillo', 'http://www.facebook.com/SmartEnglishInstituteSEI/', 'http://www.twitter.com/puppies', 'http://www.instagram.com/sei_smart', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

CREATE TABLE `cursos` (
  `id_curso` int(3) NOT NULL,
  `tipo_curso` varchar(20) NOT NULL,
  `titulo_curso` varchar(20) NOT NULL,
  `info_curso` varchar(1500) NOT NULL,
  `video_curso` varchar(300) NOT NULL,
  `fecha_mod_curso` date DEFAULT NULL,
  `FK_id_usuario` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cursos`
--

INSERT INTO `cursos` (`id_curso`, `tipo_curso`, `titulo_curso`, `info_curso`, `video_curso`, `fecha_mod_curso`, `FK_id_usuario`) VALUES
(100, 'regular', 'Titulo Regular', 'InformaciÃ³n del curso regular.', 'https://streamable.com/s/nkxrz/htjijg', NULL, NULL),
(101, 'semestral', 'Titulo Semestral', 'InformaciÃ³n del curso semestral.', 'https://streamable.com/s/nkxrz/htjijg', NULL, NULL),
(102, 'sabatino', 'Este es un titulo de', 'Esta es informaciÃ³n de prueba.', 'https://streamable.com/s/nkxrz/htjijg', NULL, NULL),
(103, 'verano', 'Titulo Verano', 'InformaciÃ³n del curso de verano.', 'https://streamable.com/s/nkxrz/htjijg', NULL, NULL),
(104, 'club', 'Titulo Club Conversa', 'Esta es informaciÃ³n de prueba, con comentarios prueba para verificar la correcta \r\nfuncionalidad de las cosas.', 'https://streamable.com/s/nkxrz/htjijg', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(3) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `contrasena` varchar(100) DEFAULT NULL,
  `img_usuario` varchar(10) DEFAULT 'Sin imagen',
  `tipo_usuario` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre`, `email`, `contrasena`, `img_usuario`, `tipo_usuario`) VALUES
(1, 'Usuario Prueba', 'prueba@prueba.com', '123', 'Sin imagen', 'admin');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id_curso`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
