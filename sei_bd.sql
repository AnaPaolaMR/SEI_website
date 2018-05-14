-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-05-2018 a las 07:49:13
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
  `id_contacto` int(3) NOT NULL,
  `telefono` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `celular` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `email_contacto` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `direccion_contacto` varchar(200) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `enlace_facebook` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `enlace_twitter` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `enlace_instagram` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `fecha_mod_contacto` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `FK_id_usuario` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`id_contacto`, `telefono`, `celular`, `email_contacto`, `direccion_contacto`, `enlace_facebook`, `enlace_twitter`, `enlace_instagram`, `fecha_mod_contacto`, `FK_id_usuario`) VALUES
(100, '2 22 10 20', '6621405180', 'anap_mirazo.ron@hotmail.com', 'Esperanza #1094 Col. Misioneros entre Rep. de Guatemala y Callejon Campillo', 'http://www.facebook.com/SmartEnglishInstituteSEI/', 'http://www.twitter.com/puppies', 'http://www.instagram.com/sei_smart', '2018-05-14 01:44:22', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

CREATE TABLE `cursos` (
  `id_curso` int(3) NOT NULL,
  `tipo_curso` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `titulo_curso` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `info_curso` varchar(1500) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `video_curso` varchar(300) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `fecha_mod_curso` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `FK_id_usuario` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cursos`
--

INSERT INTO `cursos` (`id_curso`, `tipo_curso`, `titulo_curso`, `info_curso`, `video_curso`, `fecha_mod_curso`, `FK_id_usuario`) VALUES
(100, 'regular', 'Titulo Regular ', 'Información del curso regular.', 'https://streamable.com/s/nkxrz/htjijg', '2018-05-14 01:43:59', 1),
(101, 'semestral', 'Titulo Semestral', 'Información del curso semestral.', 'https://streamable.com/s/nkxrz/htjijg', '2018-05-14 01:24:59', 1),
(102, 'sabatino', 'Este es un titulo de', 'Esta es información de prueba.', 'https://streamable.com/s/nkxrz/htjijg', '2018-05-14 01:24:59', 1),
(103, 'verano', 'Titulo Verano', 'Información del curso de verano.', 'https://streamable.com/s/nkxrz/htjijg', '2018-05-14 01:24:59', 1),
(104, 'club', 'Titulo Club Conversa', 'Esta es información de prueba, con comentarios prueba para verificar la correcta \r\nfuncionalidad de las cosas.', 'https://streamable.com/s/nkxrz/htjijg', '2018-05-14 01:43:24', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `galeria`
--

CREATE TABLE `galeria` (
  `id_foto` int(4) NOT NULL,
  `categoria_foto` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `nombre_foto` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `descripcion_foto` text CHARACTER SET utf8 COLLATE utf8_spanish_ci,
  `fecha_mod_foto` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `FK_id_usuario` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `galeria`
--

INSERT INTO `galeria` (`id_foto`, `categoria_foto`, `nombre_foto`, `descripcion_foto`, `fecha_mod_foto`, `FK_id_usuario`) VALUES
(20, 'Cuadro_de_Honor', 'dolly (2).png', 'subir y probar otra vez', '2018-05-12 23:59:41', 0),
(26, 'Eventos_Especiales', 'fondo_1.png', 'Led Zeppelin', '2018-05-14 00:29:53', 0),
(27, 'Eventos_Especiales', 'historia.jpg', 'Led Zeppelin', '2018-05-14 00:30:33', 0),
(28, 'Eventos_Especiales', '5d803c3e-e306-4384-ba0a-875790bce0b3.jpg', 'Algo Comun', '2018-05-14 00:32:20', 0),
(29, 'Cuadro_de_Honor', '148840-30921-j-jonah-jameson.jpg', 'Jameson', '2018-05-14 00:41:09', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informacion_general`
--

CREATE TABLE `informacion_general` (
  `id_ig` int(3) NOT NULL,
  `tipo_ig` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `titulo_ig` varchar(200) DEFAULT NULL,
  `info_ig` varchar(2000) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `img_ig` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `fecha_mod_ig` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `FK_id_usuario` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `informacion_general`
--

INSERT INTO `informacion_general` (`id_ig`, `tipo_ig`, `titulo_ig`, `info_ig`, `img_ig`, `fecha_mod_ig`, `FK_id_usuario`) VALUES
(1, 'quienes somos', 'Â¿QuiÃ©nes somos? ', 'Informaci??n de SEI.', 'logo.png', '2018-05-14 05:22:57', 1),
(2, 'mision', 'MisiÃ³n', 'Misi??n de SEI.', '', '2018-05-14 05:22:57', 1),
(3, 'vision', 'VisiÃ³n', 'Visi??n de SEI.', '', '2018-05-14 05:22:57', 1),
(4, 'historia', 'Historia', 'Historia de SEI.', 'historia.jpg', '2018-05-14 05:22:57', 1),
(120, 'faq', 'Â¿Hay inscripciones abiertas todo el aÃ±o?', 'No, a caga vieja.', NULL, '2018-05-14 05:45:06', 1),
(121, 'faq', 'Hola', 'xd', NULL, '2018-05-14 05:45:53', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(3) NOT NULL,
  `nombre` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `nickname` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `contrasena` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `img_usuario` varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT 'Sin imagen',
  `tipo_usuario` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre`, `nickname`, `contrasena`, `img_usuario`, `tipo_usuario`) VALUES
(1, 'Francisco Martinez', 'franco', 'franco', 'Sin imagen', 'admin'),
(2, 'Paola', 'paola', '456', '', 'estandar'),
(3, 'Luis', 'luis', '12345678', '', 'admin');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id_contacto`);

--
-- Indices de la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id_curso`);

--
-- Indices de la tabla `galeria`
--
ALTER TABLE `galeria`
  ADD PRIMARY KEY (`id_foto`);

--
-- Indices de la tabla `informacion_general`
--
ALTER TABLE `informacion_general`
  ADD PRIMARY KEY (`id_ig`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `galeria`
--
ALTER TABLE `galeria`
  MODIFY `id_foto` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `informacion_general`
--
ALTER TABLE `informacion_general`
  MODIFY `id_ig` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
