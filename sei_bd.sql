-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-05-2018 a las 05:06:01
-- Versión del servidor: 10.1.22-MariaDB
-- Versión de PHP: 7.1.4

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
(100, '2 22 10 19', '6621405180', 'anap_mirazo.ron@hotmail.com', 'Esperanza #1094 Col. Misioneros entre Rep. de Guatemala y Callejon Campillo', 'http://www.facebook.com/SmartEnglishInstituteSEI/', 'http://www.twitter.com/puppies', 'http://www.instagram.com/sei_smart', NULL);

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
-- Estructura de tabla para la tabla `galeria`
--

CREATE TABLE `galeria` (
  `id_foto` int(4) NOT NULL,
  `categoria_foto` varchar(20) NOT NULL,
  `nombre_foto` varchar(100) NOT NULL,
  `descripcion_foto` text,
  `fecha_mod_foto` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `FK_id_usuario` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informacion_general`
--

CREATE TABLE `informacion_general` (
  `id_ig` int(3) DEFAULT NULL,
  `tipo_ig` varchar(30) DEFAULT NULL,
  `titulo_ig` varchar(100) DEFAULT NULL,
  `info_ig` varchar(2000) DEFAULT NULL,
  `img_ig` varchar(100) DEFAULT NULL,
  `fecha_mod_ig` date DEFAULT NULL,
  `FK_id_usuario` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `informacion_general`
--

INSERT INTO `informacion_general` (`id_ig`, `tipo_ig`, `titulo_ig`, `info_ig`, `img_ig`, `fecha_mod_ig`, `FK_id_usuario`) VALUES
(100, 'quienes somos', 'Â¿QuiÃ©nes somos?', 'Somos una instituciÃ³n enfocada a capacitar en excelencia a personas de todas las edades en el desarrollo comunicativo del idioma inglÃ©s.\r\n\r\nA lo largo de 19 aÃ±os hemos obtenido muy buenos resultados, evidentes y eficaces, en el progreso de las cuatro destrezas bÃ¡sicas del idioma, formando a nuestros alumnos para que alcancen altos estÃ¡ndares en las habilidades auditivas, orales escritas, y de comprensiÃ³n de lectura.\r\n\r\nHoy en dÃ­a seguimos contando con la preferencia de nuestros alumnos y la recomendaciÃ³n de muchos de nuestros egresados. Asimismo contamos con la oportunidad de poner cada vez el inglÃ©s al alcance de mÃ¡s personas.', 'logo.png', NULL, NULL),
(101, 'mision', 'MisiÃ³n', 'Nuestra instituciÃ³n tiene como principal objetivo desarrollar las habilidades lingÃ¼Ã­sticas de nuestros alumnos proporcionÃ¡ndoles las herramientas necesarias del idioma inglÃ©s a travÃ©s de una educaciÃ³n de alta calidad para que alcancen un nivel comunicativo Ã³ptimo en todas las Ã¡reas del lenguaje.', '', NULL, NULL),
(102, 'vision', 'VisiÃ³n', 'A travÃ©s de nuestros esfuerzos y acciones pretendemos potenciar las capacidades de nuestros alumnos, donde ellos sientan el respaldo sÃ³lido que les proporcione la seguridad y confianza de un equipo de trabajo de primer nivel. AsÃ­ mismo elevar nuestros estÃ¡ndares educativos hasta alcanzar el prestigio de una instituciÃ³n consolidada, donde sean nuestros egresados bilingÃ¼es incorporados al sector productivo nuestra principal carta de recomendaciÃ³n.', '', NULL, NULL),
(103, 'historia', 'Historia', 'Smart English institute fue fundada el 4 de febrero de 1999 con la finalidad de impartir asesorÃ­as y clases grupales que faciliten el aprendizaje del idioma inglÃ©s. Desde entonces a la fecha hemos recibido niÃ±os, jÃ³venes y adultos que se han interesado en asimilar o mejorar sus capacidades en el idioma.\r\n\r\nHoy en dÃ­a, estamos ofreciendo clases presenciales en un ambiente agradable y sencillo donde los alumnos sientan la confianza y vean el avance constante de sus destrezas comunicativas. Impulsamos de forma continua las habilidades del idioma tanto orales como escritas, es decir nuestros cursos estÃ¡n diseÃ±ados para que paso a paso el alumno pueda en inglÃ©s hablar, entender lo que escucha, escribir, y leer comprendiendo la lectura.', 'historia.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(3) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `nickname` varchar(50) NOT NULL,
  `contrasena` varchar(100) DEFAULT NULL,
  `img_usuario` varchar(10) DEFAULT 'Sin imagen',
  `tipo_usuario` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre`, `nickname`, `contrasena`, `img_usuario`, `tipo_usuario`) VALUES
(2, 'Paola', 'paola', '456', '', 'estandar');

--
-- Índices para tablas volcadas
--

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
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
