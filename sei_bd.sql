-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-05-2018 a las 06:55:26
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
  `direccion_contacto` varchar(1000) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
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
  `info_curso` varchar(5000) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `video_curso` varchar(300) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `fecha_mod_curso` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `FK_id_usuario` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cursos`
--

INSERT INTO `cursos` (`id_curso`, `tipo_curso`, `titulo_curso`, `info_curso`, `video_curso`, `fecha_mod_curso`, `FK_id_usuario`) VALUES
(100, 'regular', 'Curso regular', '<ul><li style=\"line-height: 1.5;\">Este curso estÃ¡ diseÃ±ado para niÃ±os de primaria.</li><li style=\"line-height: 1.5;\"><span style=\"font-size: 1rem;\">Son bienvenidos todos los pequeÃ±os de seis aÃ±os cumplidos en adelante.</span></li><li style=\"line-height: 1.5;\"><span style=\"font-size: 1rem;\">El curso consiste una hora diaria de lunes a viernes respetando el calendario de la SecretarÃ­a que comprende de septiembre a junio.</span></li><li style=\"line-height: 1.5;\"><span style=\"font-size: 1rem;\">Impartimos nuestras clases en grupos pequeÃ±os, y generalmente manejamos horarios que van desde las 2:00 de la tarde hasta las 5:00.</span></li><li style=\"line-height: 1.5;\"><span style=\"font-size: 1rem;\">Como objetivo buscamos para los niÃ±os la manera en que su aprendizaje sea divertido a travÃ©s de dibujos, canciones y prÃ¡cticas constantes en el aula.</span></li><li style=\"line-height: 1.5;\"><span style=\"font-size: 1rem;\">Las inscripciones para estos grupos son a partir de la tercer semana de agosto en un horario de 4:00 de la tarde a 8:00 de la noche como nuestro horario de oficina.</span></li></ul><p style=\"line-height: 1.5;\">Los costos para el ciclo escolar 2018-2019 son:</p><ul><li style=\"line-height: 1.5;\"><span style=\"font-size: 1rem;\">InscripciÃ³n por todo el ciclo escolar: $300.00.</span></li><li style=\"line-height: 1.5;\"><span style=\"font-size: 1rem;\">Colegiatura semanal: $80.00.</span></li><li style=\"line-height: 1.5;\"><span style=\"font-size: 1rem;\">Y una cuota de materi</span>al mensual:&nbsp; $35.00.</li></ul>', 'https://streamable.com/s/nkxrz/htjijg', '2018-05-16 04:09:18', 1),
(101, 'semestral', 'Curso semestral', '<ul><li>Curso para jÃ³venes y adultos.</li><li>Ã‰ste curso estÃ¡ diseÃ±ado de forma semestral basado en el curso de Interchange de Cambridge,Â  el cual consta de siete niveles continuos pasando por principiante bÃ¡sico, intermedio y avanzado.</li><li>Trabajamos en grupos reducidos una hora diaria de lunes a jueves.</li><li>Los alumnos son ubicados dependiendo del nivel de inglÃ©s que manejan.</li></ul><p>Para ubicarÂ  en el nivel adecuado es necesario que los alumnos presenten un examen de colocaciÃ³n, el cual no tiene ningÃºn costo y el Ãºnico requisito es que debe apartar cita y presentarse con puntualidad a la misma.</p><p>Los costos del curso son los siguientes:</p><ul><li>El costo de inscripciÃ³n para el semestre es de $200 pesos.</li><li>La colegiatura semanal es de $80 pesos.</li><li>AdemÃ¡s, se deberÃ¡ de cubrir una cuota mensual de $35 pesos por concepto de materiales.</li></ul>', 'https://streamable.com/s/nkxrz/htjijg', '2018-05-16 04:03:32', 1),
(102, 'sabatino', 'Curso sabatino', '<ul><li>Curso para jÃ³venes y adultos.</li><li>Ã‰ste curso estÃ¡ diseÃ±ado de forma semestral basado en el curso de Interchange de Cambridge,Â  el cual consta de siete niveles continuos pasando por principiante bÃ¡sico, intermedio y avanzado.</li><li>Trabajamos en grupos reducidos 3 horas cada sÃ¡bado en un horario de 9:00 AM a 12:00 PM.</li><li>Los alumnos son ubicados dependiendo del nivel de inglÃ©s que manejan.</li></ul><p>Para ubicarÂ  en el nivel adecuado es necesario que los alumnos presenten un examen de colocaciÃ³n, el cual no tiene ningÃºn costo y el Ãºnico requisito es que debe apartar cita y presentarse con puntualidad a la misma.</p><p>Los costos del curso son los siguientes:</p><ul><li>El costo de inscripciÃ³n para el semestre es de $200 pesos.</li><li>La colegiatura semanal es de $80 pesos.</li><li>AdemÃ¡s, se deberÃ¡ de cubrir una cuota mensual de $35 pesos por concepto de materiales.</li></ul>', 'https://streamable.com/s/nkxrz/htjijg', '2018-05-16 04:03:32', 1),
(103, 'verano', 'Curso verano', '<ul><li>Este curso estÃ¡ diseÃ±ado para jÃ³venes de secundaria, preparatoria, universitarios y adultos.</li><li>Exclusivamente para alumnos de nivel principiante bÃ¡sico.</li></ul><p>Manejamos dos horarios:</p><ul><li>Matutino de 9:00 AM a 11:00 AM.</li><li>Vespertino de 5:00 PM a 7:00 PM.</li></ul><ul><li>Â El costo de inscripciÃ³n es de $200 pesos y la cuota semanal es de $160, siendo asÃ­ un total de $1000 pesos por todo el curso.</li><li>El curso abarca cinco semanas de dos horas diarias de lunes a viernes.</li><li>AdemÃ¡s, este curso puede ser cubierto en una sola exhibiciÃ³n por $900 pesos.</li></ul><p>El curso intensivo de verano 2018 inicia el prÃ³ximo lunes 11 de junio y finaliza el viernes 13 de julio.</p>', 'https://streamable.com/s/nkxrz/htjijg', '2018-05-16 04:03:32', 1),
(104, 'club', 'Club conversaciÃ³n', '<ul><li>El club de conversaciÃ³n ha sido establecido y orientado para todos aquellos alumnos que han superado el nivel \"Intermedio BÃ¡sico\", o superior a este.</li><li>El&nbsp; propÃ³sito de este club es que los alumnos se reÃºnan con el afÃ¡n de practicar el idioma dirigidos por un asesor.</li><li>Se promueven diversas dinÃ¡micas comunicativas y se abordan temas de interÃ©s para los miembros del club.</li><li>La sesiÃ³n del club consta de dos horas a la semana los viernes, y, los alumnos atienden el club a lo largo del semestre.</li></ul><p><b><span style=\"font-size: 18px;\">Â¿Como me inscribo?</span></b></p><p>El proceso inscripciÃ³n para el club es muy sencillo. Solo debe:</p><ul><li>Haber acreditado el nivel cuatro aquÃ­ en nuestro instituto.</li><li>O, haber presentado el examen de colocaciÃ³n si es alumno externo.</li></ul><p>A mayor horas de prÃ¡ctica mejor resultado, por ello, la recomendaciÃ³n siempre es la asistencia regular a este club.&nbsp;</p><p>A todo el alumno que le interese, sin importar la edad la&nbsp; edad le damos la mas cordial bienvenida.</p>', 'https://streamable.com/s/nkxrz/htjijg', '2018-05-16 04:12:48', 1);

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
(32, 'Graduados', 'collage.jpg', 'asd', '2018-05-15 00:54:34', 0),
(33, '', '13781746_1245830872107585_4861671815656594694_n.jpg', 'kuiqsylber', '2018-05-16 00:47:25', 0),
(34, 'Graduados', 'bob-esponja-halloween-600x415.jpg', 'Hola xd', '2018-05-16 01:10:17', 0),
(35, 'Graduados', 'DiseÃ±o.jpeg', 'Hola xd', '2018-05-16 01:10:17', 0),
(36, '', '148840-30921-j-jonah-jameson.jpg', 'asd', '2018-05-16 01:11:17', 0),
(37, '', '12311139_720576214746328_6218022037273396533_n.jpg', 'asd', '2018-05-16 01:11:17', 0),
(38, '', '13015320_1024036137679265_1073109751700867841_n.jpg', 'asd', '2018-05-16 01:11:17', 0),
(39, 'Eventos_Especiales', '148840-30921-j-jonah-jameson.jpg', 'asda', '2018-05-16 01:12:15', 0),
(40, 'Eventos_Especiales', '12311139_720576214746328_6218022037273396533_n.jpg', 'asda', '2018-05-16 01:12:15', 0),
(41, 'Eventos_Especiales', '13015320_1024036137679265_1073109751700867841_n.jpg', 'asda', '2018-05-16 01:12:15', 0),
(42, 'Otros', 'DSC02084.JPG', 'asdasd', '2018-05-16 01:13:05', 0),
(43, 'Otros', 'DSC02116.JPG', 'asdasd', '2018-05-16 01:13:05', 0),
(44, '', 'DSC02125.JPG', 'asd', '2018-05-16 01:13:34', 0),
(45, 'Cuadro_de_Honor', 'DSC02087.JPG', 'asdasd', '2018-05-16 02:31:24', 0);

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
  MODIFY `id_foto` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT de la tabla `informacion_general`
--
ALTER TABLE `informacion_general`
  MODIFY `id_ig` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
