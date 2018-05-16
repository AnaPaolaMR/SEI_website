-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-05-2018 a las 06:49:18
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
(1, 'quienes somos', 'Â¿QuiÃ©nes somos? ', '<p>Somos una instituciÃ³n enfocada a capacitar en excelencia a personas de todas las edades en el desarrolloÂ  comunicativo del idioma inglÃ©s.</p><p>A lo largo de 19 aÃ±os hemos obtenido muy buenos resultados, evidentes y eficaces, en el progreso de las cuatro destrezas bÃ¡sicas del idioma, formando a nuestros alumnos para que alcancen altos estÃ¡ndares en las habilidades auditivas, orales escritas, y de comprensiÃ³n de lectura.</p><p>Hoy en dÃ­a seguimos contando con la preferencia de nuestros alumnos y la recomendaciÃ³n de muchos de nuestros egresados. Asimismo contamos con la oportunidad de poner cada vez el inglÃ©s al alcance de mÃ¡s personas.<br></p>', 'logo.png', '2018-05-16 03:30:26', 1),
(2, 'mision', 'MisiÃ³n', '<p>Nuestra instituciÃ³n tiene como principal objetivo desarrollar las habilidades lingÃ¼Ã­sticas de nuestros alumnos proporcionÃ¡ndoles las herramientas necesarias del idioma InglÃ©s a travÃ©s de una educaciÃ³n de alta calidad para que alcancen un nivel comunicativo Ã³ptimo en todas las Ã¡reas del lenguaje.</p>', '', '2018-05-16 03:30:26', 1),
(3, 'vision', 'VisiÃ³n', '<font color=\"#222222\" face=\"sans-serif\"><span style=\"font-size: 14px;\">A travÃ©s de nuestros esfuerzos y acciones pretendemos potenciar las capacidades de nuestros alumnos, donde ellos sientan el respaldo sÃ³lido que les proporcione la seguridad y confianza de un equipo de trabajo de primer nivel. AsÃ­ mismo elevar nuestros estÃ¡ndares educativos hasta alcanzar el prestigio de una instituciÃ³n consolidada, donde sean nuestros egresados bilingÃ¼es incorporados al sector productivo nuestra principal carta de recomendaciÃ³n.</span></font>', '', '2018-05-16 03:31:23', 1),
(4, 'historia', 'Historia', '<p><font color=\"#222222\" face=\"sans-serif\"><span style=\"font-size: 14px;\">Smart English institute fue fundada el 4 de febrero de 1999 con la finalidad de impartir asesorÃ­as y clases grupales que faciliten el aprendizaje del idioma inglÃ©s. Desde entonces a la fecha hemos recibido&nbsp; niÃ±os, jÃ³venes y adultos&nbsp; que se han interesado en asimilar o mejorar sus capacidades en el idioma.&nbsp;</span></font></p><p><font color=\"#222222\" face=\"sans-serif\"><span style=\"font-size: 14px;\">Hoy en dÃ­a, estamos ofreciendo clases presenciales en un ambiente agradable y sencillo donde los alumnos sientan la confianza y vean el avance constante de sus destrezas comunicativas. Impulsamos&nbsp; de forma continua las habilidades del idioma tanto orales como escritas, es decir nuestros cursos estÃ¡n diseÃ±ados para que paso a paso el alumno pueda en inglÃ©s hablar, entender lo que escucha, escribir, y leer comprendiendo la lectura.</span></font></p><p><font color=\"#222222\" face=\"sans-serif\"><span style=\"font-size: 14px;\"><br></span></font></p>', 'historia.jpg', '2018-05-16 03:32:00', 1),
(130, 'faq', 'Â¿Hay inscripciones abiertas todo el aÃ±o?', 'No. Conforme nuestros cursos abren la convocatoria se inicia el periodo de inscripciones correspondiente.', NULL, '2018-05-16 04:48:50', 1),
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

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `informacion_general`
--
ALTER TABLE `informacion_general`
  ADD PRIMARY KEY (`id_ig`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `informacion_general`
--
ALTER TABLE `informacion_general`
  MODIFY `id_ig` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
