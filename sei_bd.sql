-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-05-2018 a las 00:36:00
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
(100, '2 22 10 19', '6621405180', 'anap_mirazo.ron@hotmail.com', 'Esperanza #1094 Col. Misioneros entre Rep. de Guatemala y Callejon Campillo', 'http://www.facebook.com/SmartEnglishInstituteSEI/', 'http://www.twitter.com/puppies', 'http://www.instagram.com/sei_smart', '2018-05-15 00:54:50', 4);

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
(100, 'regular', 'Titulo Regular ', 'InformaciÃ³n del curso regular.', 'https://streamable.com/s/nkxrz/htjijg', '2018-05-15 00:53:42', 4),
(101, 'semestral', 'Titulo Semestral', 'InformaciÃ³n del curso semestral.', 'https://streamable.com/s/nkxrz/htjijg', '2018-05-15 00:53:42', 4),
(102, 'sabatino', 'Este es un titulo de', 'Esta es informaciÃ³n de prueba.', 'https://streamable.com/s/nkxrz/htjijg', '2018-05-15 00:53:42', 4),
(103, 'verano', 'Titulo Verano', 'InformaciÃ³n del curso de verano.', 'https://streamable.com/s/nkxrz/htjijg', '2018-05-15 00:53:42', 4),
(104, 'club', 'Titulo Club Conversacion', 'Esta es informaciÃ³n de prueba, con comentarios prueba para verificar la correcta \r\nfuncionalidad de las cosas.', 'https://streamable.com/s/nkxrz/htjijg', '2018-05-15 00:54:07', 4);

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
(29, 'Cuadro_de_Honor', '148840-30921-j-jonah-jameson.jpg', 'Jameson', '2018-05-14 00:41:09', 0),
(30, 'Graduados', 'descarga.jpg', 'Mr. Funk', '2018-05-14 20:38:51', 0),
(31, 'Graduados', 'OA56Z33.jpg', 'Hola', '2018-05-15 00:37:02', 0),
(32, 'Graduados', 'collage.jpg', 'asd', '2018-05-15 00:54:34', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informacion_general`
--

CREATE TABLE `informacion_general` (
  `id_ig` int(3) NOT NULL,
  `tipo_ig` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `titulo_ig` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `info_ig` varchar(2000) COLLATE utf8_spanish_ci DEFAULT NULL,
  `img_ig` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fecha_mod_ig` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `FK_id_usuario` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `informacion_general`
--

INSERT INTO `informacion_general` (`id_ig`, `tipo_ig`, `titulo_ig`, `info_ig`, `img_ig`, `fecha_mod_ig`, `FK_id_usuario`) VALUES
(1, 'quienes somos', 'Â¿QuiÃ©nes somos? xd ', 'InformaciÃ³n de SEI.', 'logo.png', '2018-05-15 00:52:59', 4),
(2, 'mision', 'MisiÃ³n', 'MisiÃ³n de SEI.', '', '2018-05-15 00:53:15', 4),
(3, 'vision', 'VisiÃ³n', 'VisiÃ³n de SEI.', '', '2018-05-15 00:53:15', 4),
(4, 'historia', 'Historia', 'Historia de SEI.', 'historia.jpg', '2018-05-15 00:49:55', 4),
(130, 'faq', 'Â¿Hay inscripciones abiertas todo el aÃ±o?', 'No, a chingar a su madre. Conforme nuestros cursos abren la convocatoria se inicia el periodo de inscripciones correspondiente.', NULL, '2018-05-15 01:26:13', 1),
(131, 'faq', 'Â¿Que precios manejan?', 'Nuestros precios varÃ­an segÃºn el tipo de curso. Puede consultar los precios en el Ã¡rea de cursos.', NULL, '2018-05-15 01:13:04', 1),
(132, 'faq', 'Â¿Que horarios manejan?', 'Nuestra instituciÃ³n es vespertina de lunes viernes, donde manejamos horarios desde las 2:00 de la tarde hasta las 8:00 de la noche, y ademÃ¡s ofrecemos cursos matutinos en sÃ¡bado de 9:00 de la maÃ±ana a 12:00 mediodÃ­a.', NULL, '2018-05-15 01:13:43', 1),
(133, 'faq', 'Â¿CuÃ¡ntas personas son por grupo?', 'Depende del nivel manejamos grupos desde 14, 16,  o un mÃ¡ximo de 20 participantes.', NULL, '2018-05-15 01:13:59', 1),
(134, 'faq', 'Â¿Aplican examen de colocaciÃ³n?', 'SÃ­, es importante para nosotros ubicar a los alumnos en el nivel adecuado para que continuÃ© con su aprendizaje en el idioma. El examen que nosotros aplicamos no tiene ningÃºn costo, y es necesario apartar una cita a nuestros telÃ©fonos tan pronto se tengan las convocatorias para el inicio de curso.', NULL, '2018-05-15 01:14:15', 1),
(135, 'faq', 'Â¿Manejan grupos de preescolar?', 'Por disposiciÃ³n de las autoridades, solamente podemos recibir niÃ±os a partir de seis aÃ±os cumplidos, acreditando esto con el acta de nacimiento.', NULL, '2018-05-15 01:14:31', 1),
(136, 'faq', 'Â¿Aplican algÃºn descuento por hermanos inscritos?', 'No, dado que somos una opciÃ³n bastante accesible para familias enteras. Nuestros costos son los mÃ¡s bajos de la ciudad.', NULL, '2018-05-15 01:14:54', 1),
(137, 'faq', 'Â¿Ofrecen asesorÃ­as individuales o cursos personalizados?', 'Cursos personalizados no. AsesorÃ­as  individuales Las manejamos con previa cita.', NULL, '2018-05-15 01:15:12', 1),
(138, 'faq', 'Â¿Imparten cursos empresariales?', 'SÃ­, siempre y cuando el grupo que estÃ© solicitando manejen aproximadamente el mismo nivel de inglÃ©s. AdemÃ¡s manejamos inglÃ©s para fines especÃ­ficos es decir, desarrollamos cursos dirigidos exclusivamente al Ã¡rea de desempeÃ±o de los solicitantes.', NULL, '2018-05-15 01:15:39', 1),
(139, 'faq', 'Â¿Se puede presentar con ustedes el examen TOEFL?', 'Oficialmente no. Por el momento solo ofrecemos cursos de preparaciÃ³n para presentar el examen, tan pronto tengamos 10 solicitantes para que se abra un grupo exclusivo con ese fin.', NULL, '2018-05-15 01:15:56', 1),
(140, 'faq', 'Â¿CuÃ¡nto tiempo considera que se necesite para que un adulto pueda llegar a ser bilingÃ¼e?', 'Nuestros cursos estÃ¡n diseÃ±ados para una duraciÃ³n de seis semestres para jÃ³venes o adultos y podemos considerar que depende mucho de los alumnos el hacer el curso de manera Ã³ptima para dominar todas las Ã¡reas de lenguaje.', NULL, '2018-05-15 01:16:17', 1);

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
(3, 'Luis', 'luis', '12345678', '', 'admin'),
(4, 'Paola Mirazo', 'paola', '12345678', '', 'estandar');

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
  MODIFY `id_foto` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `informacion_general`
--
ALTER TABLE `informacion_general`
  MODIFY `id_ig` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
