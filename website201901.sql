-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-04-2019 a las 17:21:57
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
-- Base de datos: `website201901`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `contacto_Id` int(11) NOT NULL,
  `email` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `nombre1` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `nombre2` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `apellido1` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `apellido2` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `ciudad` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `asunto` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `mensaje` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `fecha` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`contacto_Id`, `email`, `nombre1`, `nombre2`, `apellido1`, `apellido2`, `ciudad`, `asunto`, `mensaje`, `fecha`) VALUES
(11, 'javierquintero1216@outlook.com', 'Javier', 'Alexander', 'Quintero', 'Garcia', 'Caldas', 'Solicitud', 'mensaje de prueba', '2019-04-21 02:28:50');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil`
--

CREATE TABLE `perfil` (
  `idn` int(11) NOT NULL,
  `nombres` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `apellidos` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `perfil` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `habilidad01` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `habilidad02` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `habilidad03` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `habilidad04` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `habilidad05` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `foto` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `idequipo` varchar(10) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `perfil`
--

INSERT INTO `perfil` (`idn`, `nombres`, `apellidos`, `email`, `telefono`, `perfil`, `habilidad01`, `habilidad02`, `habilidad03`, `habilidad04`, `habilidad05`, `foto`, `idequipo`) VALUES
(1, 'Javier Alexander', 'Quintero Garcia', 'javierquintero133855@correo.itm.edu.co', '3206797257', 'Perfil Profesional:\r\nDurante mis 15 años de experiencia laborando en diferentes áreas relacionadas a los sistemas de información tales como soporte cliente interno y externo, infraestructura, implementación de soluciones y desarrollo de software he evidenciado la importancia que tienen los sistemas de informáticos en las organizaciones, esto me ha brindado un gran aprendizaje para mi vida laboral, esto me ha permitido relacionarme con diversas áreas en las organizaciones para las que he trabajad', 'SQL', 'C#', 'JavaScript', 'Angular', 'Git', '3402282_perfil.jpg', 'Equipo3'),
(2, 'Jhon Alexander', 'Henao Rojas', 'jhonhenao247661@correo.itm.edu.co', '3016948894', 'Perfil Profesional:\r\nCuento con 8 años de experiencia en el desarrollo de sistemas de información, de los cuales he tenido la fortuna de desempeñarme como analista y desarrollador, posteriormente he llegado a ocupar el cargo de coordinador de proyecto. La anterior trayectoria me ha otorgado el dominio de lenguajes de programación como lo son JavaScript, C#, SQL, Java y PHP. Además, soy conocedor de los framework Laravel, Angular y Sprint. Poseo la habilidad de comunicarme en inglés como segunda ', 'C#', 'SQL', 'JavaScript', 'Angular', 'Ingles', '1020462157_perfil.jpg', 'Equipo3'),
(3, 'Cristian Alfonso ', 'Pasos Gomez', 'cristianpasos27@gmail.com', '3135918218', 'Cuento con 6 meses de experiencia en el desarrollo de sistemas de información, en los que he utilizado diversos lenguajes de programación como javaScript, php, jsp y PlSQL con el manejo de framework Boostrap. personalmente soy una persona que se caracteriza por su responsabilidad y dedicación, cuyo atributo principal es la constancia y la buena voluntad, sociable y carismatico.', 'C#', 'PlSQL', 'PHP', 'JavaScrip', 'Java', '1017233387_perfil.jpg', 'Equipo3'),
(4, 'Luis David', 'Gómez Contreras', 'luisgomez095@gmail.com', '320111111', 'Poseo habilidades para la escucha y el trabajo en equipo, responsable, respetuoso, tolerante, humilde, honesto, servicial, y sencillo con adaptabilidad al cambio. Tengo unos conocimientos y competencias adquiridos que me permiten desenvolverme mejor en el medio, asi, considero que tengo capacidad para desempeñarme en cualquier empresa u organización. Además poseo buena comunicación, dinamismo, proactividad y creatividad, con deseo de avanzar tanto en el ámbito laboral como el intelectual', 'C#', 'SQL', 'PHP', 'Javascript', 'JSP', '1017233983_perfil.jpg', 'Equipo3'),
(5, 'Cristian Alejandro', 'Bustamante Escobar', 'thebusta49@gmail.com', '3115418531', 'Me caracterizo por ser responsable, respetuoso y hábil para transmitir las ideas. Soy una persona eficiente con capacidades para cumplir labores en grupo y en solitario, dispuesto a trabajar de forma ordenada, por tareas y bajo presión; tengo la capacidad de crear propuestas y desarrollarlas de forma efectiva e innovadora.\r\nMe gusta estar actualizado, informado y sobre todo, usar los conocimientos adquiridos cada día en pro del mejoramiento continuo personal y de quienes están a mí alrededor. Ad', 'SQL', 'Excel', 'SAP B1', 'C#', 'Liderazgo', '1020462157_perfil.jpg', 'Equipo3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfilequipo`
--

CREATE TABLE `perfilequipo` (
  `idequipo` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `perfil` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `habilidad01` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `habilidad02` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `habilidad03` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `habilidad04` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `habilidad05` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `foto` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `perfilequipo`
--

INSERT INTO `perfilequipo` (`idequipo`, `nombre`, `email`, `telefono`, `perfil`, `habilidad01`, `habilidad02`, `habilidad03`, `habilidad04`, `habilidad05`, `foto`) VALUES
('PPI620303', 'PHP Estudents', 'cristianpasos27@gmail.com', '3135918218', 'El equipo se caracteriza por ser conformado por una muy alta calidad de personas con un enfoque muy centralizado en lo que se desea y lo que se quiere lograr teniendo presente que para lograr estos objetivos uno de los principales pasos es el estudio. Laboralmente se puede decir que cuenta con unos conocimientos muy amplios capaces de poner frente a diversas situaciones que puedan llegar.', 'SQL', 'C#', 'Java', 'Angular', 'Java', 'PPI620303_Perfil.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `email` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(120) COLLATE utf8_spanish_ci NOT NULL,
  `nombre1` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `nombre2` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `apellido1` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `apellido2` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`email`, `password`, `nombre1`, `nombre2`, `apellido1`, `apellido2`) VALUES
('javierquintero133855@correo.itm.edu.co', '123', 'Javier', 'Alexander', 'Quintero', 'Garcia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `email` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(120) COLLATE utf8_spanish_ci NOT NULL,
  `nombre1` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `nombre2` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `apellido1` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `apellido2` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `rol` int(11) NOT NULL DEFAULT '1',
  `fecha_registro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `estado` int(11) NOT NULL DEFAULT '1',
  `acceso` int(11) NOT NULL DEFAULT '0',
  `fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`email`, `password`, `nombre1`, `nombre2`, `apellido1`, `apellido2`, `rol`, `fecha_registro`, `estado`, `acceso`, `fecha`) VALUES
('', '', '', '', '', '', 1, '2019-04-20 23:55:14', 0, 1, '2019-04-20 23:55:14'),
('javier.quintero@inmel.com.co', '1234', 'Javier', 'Alexander', 'Quintero', 'Garcias', 1, '2019-04-07 02:32:19', 0, 1, '2019-04-07 02:32:19'),
('javierquintero1216@outlook.com', '1234', 'Javier', 'Alexander', 'Quintero', 'Garcia', 1, '2019-04-05 00:00:00', 1, 0, '2019-04-05 00:00:00'),
('javierquintero133855@correo.itm.edu.co', '1234', 'Javier', 'Alexander', 'Quintero', 'Garcia', 1, '2019-04-06 23:50:26', 0, 1, '2019-04-06 23:50:26'),
('luisgomez095@gmail.com', '1234', 'Luis', '', 'Gomez', '', 1, '2019-04-06 23:58:54', 0, 1, '2019-04-06 23:58:54');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`contacto_Id`);

--
-- Indices de la tabla `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`idn`);

--
-- Indices de la tabla `perfilequipo`
--
ALTER TABLE `perfilequipo`
  ADD PRIMARY KEY (`idequipo`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `contacto_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
