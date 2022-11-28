-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-11-2022 a las 16:29:16
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdcolegiov`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `id_administrador` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_nacimiento` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `usuario` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `clave` int(11) NOT NULL,
  `id_curso` int(11) NOT NULL,
  `sexo` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(120) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(15) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`id_administrador`, `nombre`, `apellido`, `correo`, `fecha_nacimiento`, `usuario`, `clave`, `id_curso`, `sexo`, `direccion`, `telefono`) VALUES
(6, 'admin', 'admin', 'admin77@gmail.com', '12/21/2003', 'admin', 12345, 1, 'masculino', 'santiago de los caballeros', '829-526-6655'),
(7, 'ismanol', 'bartolomeo', 'bartolomeo@gmail.com', '12/21/2003', 'ismanol12345', 12345, 1, 'masculino', 'pucamaima', '829-526-6677'),
(8, 'joshua', 'soto', 'joshua@gmail.com', '12/21/2003', 'soto123', 12345, 1, 'masculino', 'santiago', '829-526-4697'),
(10, 'Yeremy', 'Peralta Baez', 'yerethedark@gmail.com', '7/1/2004', 'yeremy', 12345, 1, 'Masculino', 'Don Pedro', '829 356 8025');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignatura`
--

CREATE TABLE `asignatura` (
  `id_asignatura` int(10) NOT NULL,
  `materia` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `asignatura`
--

INSERT INTO `asignatura` (`id_asignatura`, `materia`) VALUES
(1, 'Lengua Española'),
(2, 'Matematicas'),
(3, 'Sociales'),
(4, 'Naturales'),
(5, 'Lenguas Extranjeras Ingles'),
(6, 'Lenguas Extranjeras Frances'),
(7, 'Educacion Artistica'),
(8, 'Educacion Fisica'),
(9, 'Formacion Humana '),
(10, 'Musica');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistencia`
--

CREATE TABLE `asistencia` (
  `id_asistencia` int(11) NOT NULL,
  `id_estudiante` int(11) NOT NULL,
  `id_curso` int(11) NOT NULL,
  `lunes` varchar(2) COLLATE utf8_spanish2_ci NOT NULL,
  `martes` varchar(2) COLLATE utf8_spanish2_ci NOT NULL,
  `miercoles` varchar(2) COLLATE utf8_spanish2_ci NOT NULL,
  `jueves` varchar(2) COLLATE utf8_spanish2_ci NOT NULL,
  `viernes` varchar(2) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `asistencia`
--

INSERT INTO `asistencia` (`id_asistencia`, `id_estudiante`, `id_curso`, `lunes`, `martes`, `miercoles`, `jueves`, `viernes`) VALUES
(4, 1, 1, 'A', 'A', 'T', 'A', 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calificaciones`
--

CREATE TABLE `calificaciones` (
  `id_calificaciones` int(11) NOT NULL,
  `notas_uno` int(3) NOT NULL,
  `notas_dos` int(3) NOT NULL,
  `notas_tres` int(3) NOT NULL,
  `notas_cuatro` int(3) NOT NULL,
  `promedio` int(3) NOT NULL,
  `id_asignatura` int(11) NOT NULL,
  `id_estudiante` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `calificaciones`
--

INSERT INTO `calificaciones` (`id_calificaciones`, `notas_uno`, `notas_dos`, `notas_tres`, `notas_cuatro`, `promedio`, `id_asignatura`, `id_estudiante`) VALUES
(2, 60, 60, 60, 60, 60, 1, 1),
(3, 70, 70, 70, 70, 70, 2, 1),
(4, 80, 85, 70, 80, 80, 3, 1),
(5, 90, 95, 94, 93, 94, 4, 1),
(6, 80, 83, 79, 89, 90, 5, 1),
(9, 70, 85, 70, 93, 80, 6, 1),
(16, 60, 85, 60, 93, 80, 7, 1),
(17, 89, 98, 85, 98, 93, 9, 1),
(18, 60, 60, 60, 60, 60, 10, 1),
(26, 70, 85, 70, 93, 80, 8, 1),
(27, 80, 85, 90, 70, 80, 1, 2),
(28, 80, 85, 90, 70, 80, 2, 2),
(30, 90, 60, 70, 50, 0, 1, 4),
(31, 80, 75, 77, 50, 0, 2, 4),
(32, 80, 80, 80, 80, 0, 3, 4),
(33, 60, 70, 60, 80, 0, 4, 4),
(34, 100, 95, 100, 96, 0, 5, 4),
(35, 70, 78, 77, 80, 0, 6, 4),
(36, 65, 67, 74, 89, 0, 7, 4),
(37, 96, 69, 94, 74, 0, 8, 4),
(38, 0, 0, 0, 0, 0, 9, 4),
(39, 0, 0, 0, 0, 0, 10, 4),
(41, 0, 0, 0, 0, 0, 1, 5),
(42, 0, 0, 0, 0, 0, 2, 5),
(43, 100, 100, 100, 100, 0, 3, 5),
(44, 0, 0, 0, 0, 0, 4, 5),
(45, 0, 0, 0, 0, 0, 5, 5),
(46, 0, 0, 0, 0, 0, 6, 5),
(47, 0, 0, 0, 0, 0, 7, 5),
(48, 0, 0, 0, 0, 0, 8, 5),
(49, 0, 0, 0, 0, 0, 9, 5),
(50, 0, 0, 0, 0, 0, 10, 5),
(52, 0, 0, 0, 0, 0, 1, 6),
(53, 0, 0, 0, 0, 0, 2, 6),
(54, 0, 0, 0, 0, 0, 3, 6),
(55, 0, 0, 0, 0, 0, 4, 6),
(56, 0, 0, 0, 0, 0, 5, 6),
(57, 0, 0, 0, 0, 0, 6, 6),
(58, 0, 0, 0, 0, 0, 7, 6),
(59, 0, 0, 0, 0, 0, 8, 6),
(60, 0, 0, 0, 0, 0, 9, 6),
(61, 0, 0, 0, 0, 0, 10, 6),
(62, 0, 0, 0, 0, 0, 3, 2),
(63, 0, 0, 0, 0, 0, 4, 2),
(64, 0, 0, 0, 0, 0, 5, 2),
(65, 0, 0, 0, 0, 0, 6, 2),
(66, 0, 0, 0, 0, 0, 7, 2),
(67, 0, 0, 0, 0, 0, 8, 2),
(68, 0, 0, 0, 0, 0, 9, 2),
(69, 0, 0, 0, 0, 0, 10, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso`
--

CREATE TABLE `curso` (
  `id_curso` int(11) NOT NULL,
  `nombre_curso` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `id_profesor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `curso`
--

INSERT INTO `curso` (`id_curso`, `nombre_curso`, `id_profesor`) VALUES
(1, 'primero', 1),
(2, 'segundo', 2),
(3, 'Tercero', 3),
(4, 'Cuarto', 4),
(5, 'Quinto', 5),
(6, 'Sexto', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

CREATE TABLE `estudiante` (
  `id_estudiante` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `f_nacimiento` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `sexo` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(12) COLLATE utf8_spanish_ci NOT NULL,
  `usuario_estudiante` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `clave` int(30) NOT NULL,
  `id_curso` int(11) NOT NULL,
  `numlista` int(3) NOT NULL,
  `correo` varchar(120) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `estudiante`
--

INSERT INTO `estudiante` (`id_estudiante`, `nombre`, `apellido`, `f_nacimiento`, `sexo`, `direccion`, `telefono`, `usuario_estudiante`, `clave`, `id_curso`, `numlista`, `correo`) VALUES
(1, 'Yeremy', 'Peralta BÃ¡ez', '1/7/2004', 'Masculino', 'Don Pedro', '829-356-8050', 'yeremaya', 12345, 1, 1, 'yeremaya@gmail.com'),
(2, 'Miguel', 'Garcia', '23/01/2004', 'masculino', 'Valverde Mao', '829-479-5438', 'Minato77', 123456, 1, 6, 'minato777@gmail.com'),
(4, 'Joshua', 'Soto', '23/6/2003', 'Masculino', 'Sabana Iglesia', '849 229 5643', 'soto', 123123, 1, 2, 'joshua@gmail.com'),
(5, 'Carl', 'Jhonson', '5/2/2000', 'Masculino', 'Vice City', '849 256 4545', 'cj', 11111111, 1, 3, 'cj@gmail.com'),
(6, 'Isabela', 'Gomez', '15/10/2006', 'Femenino', 'Las Charcas', 'bebitafiufiu', 'isabel', 2147483647, 1, 4, 'isa@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horario`
--

CREATE TABLE `horario` (
  `Lunes` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `Martes` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `Miercoles` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `Jueves` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `Viernes` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `id_curso` int(11) NOT NULL,
  `horario` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `id_horario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `horario`
--

INSERT INTO `horario` (`Lunes`, `Martes`, `Miercoles`, `Jueves`, `Viernes`, `id_curso`, `horario`, `id_horario`) VALUES
('Lengua EspaÃ±ola', 'Lengua EspaÃ±ola', 'Sociales', 'Musica', 'Educacion Fisica', 1, '07:00 am', 1),
('Matematica', 'Matematica', 'Naturales', 'Sociales', 'Educacion Fisica', 1, '08:00 am', 2),
('Sociales', 'Sociales', 'Lenguas Extranjeras Ingles', 'Lenguas Extranjeras Frances', 'Sociales', 1, '09:00 am', 3),
('Recreo', 'Recreo', 'Recreo', 'Recreo', 'Recreo', 1, '10:00 am', 4),
('Naturales', 'Naturales', 'Matematicas', 'Educacion Artistica', 'Musica', 1, '10:30 am', 6),
('Lenguas Extranjeras Ingles', 'Lenguas Extranjeras Ingles', 'Lengua EspaÃ±ola', 'Lengua EspaÃ±ola', 'Formacion Humana ', 1, '11:30 am', 7),
('Salida', 'Salida', 'Salida', 'Salida', 'Salida', 1, '12:30 am', 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesor`
--

CREATE TABLE `profesor` (
  `id_profesor` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(12) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `id_asignatura` int(10) NOT NULL,
  `usuario_profesor` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `clave` int(30) NOT NULL,
  `id_curso` int(11) NOT NULL,
  `f_nacimiento` varchar(12) COLLATE utf8_spanish_ci NOT NULL,
  `sexo` varchar(15) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `profesor`
--

INSERT INTO `profesor` (`id_profesor`, `nombre`, `apellido`, `direccion`, `telefono`, `correo`, `id_asignatura`, `usuario_profesor`, `clave`, `id_curso`, `f_nacimiento`, `sexo`) VALUES
(4, 'Jose Luis', 'Alonzo', 'Santiago de los caballeros', '829-478-8562', 'profesoralonzo@gmail.com', 5, 'jolmav', 123, 1, '7/12/1980', 'masculino'),
(16, 'Marco', 'Polo', 'El Guano', '809 243 5353', 'nose@gmail.com', 4, 'pepito', 12345, 1, '12/20/1990', 'masculino'),
(24, 'Kratos', 'Kelving', 'El Gurabo', '849 242 5453', 'godofwar@gmail.com', 3, 'kratos', 123456, 1, '1/3/1960', 'Masculino'),
(25, 'Fransisco', 'Bonapagt', 'Bonao', '829 252 4647', 'francais@gmail.com', 6, 'fransisco', 123456789, 1, '11/12/2000', 'Masculino'),
(26, 'Will', 'Smtih', 'Samana', '849 242 9675', 'willsmith@gmail.com', 10, 'willyrex', 1234567890, 1, '22/4/1960', 'Masculino'),
(27, 'Nancy', 'Alvarez Gonzales', 'Licey al medio', '829 942 4545', 'masterlenguaje@gmail.com', 1, 'nancyta', 12, 1, '4/24/1999', 'Femenino'),
(28, 'Carlos Daniel', 'Landeta', 'Samana', '849 903 0496', 'cdaniel@gmail.com', 7, 'cdani', 111, 1, '27/6/1960', 'masculino'),
(29, 'Alexandrov', 'Grigorovich', 'Janico', '849 921 4549', 'axelgri@gmail.com', 2, 'axel', 222, 1, '6/9/1980', 'Masculino'),
(30, 'Forrest', 'Gump', 'Tamboril', '849 264 0935', 'velocista@gmail.com', 8, 'forrest', 44444, 1, '7/8/1955', 'Masculino'),
(31, 'Noelia', 'Enrique ', 'Moca', '849 036 6452', 'noely@gmail.com', 1, 'noely', 2147483647, 2, '30/7/2000', 'Femenino');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id_administrador`),
  ADD KEY `id_curso` (`id_curso`);

--
-- Indices de la tabla `asignatura`
--
ALTER TABLE `asignatura`
  ADD PRIMARY KEY (`id_asignatura`);

--
-- Indices de la tabla `asistencia`
--
ALTER TABLE `asistencia`
  ADD PRIMARY KEY (`id_asistencia`),
  ADD UNIQUE KEY `id_curso_2` (`id_curso`),
  ADD UNIQUE KEY `id_curso_4` (`id_curso`),
  ADD KEY `id_estudiante` (`id_estudiante`,`id_curso`),
  ADD KEY `id_curso` (`id_curso`),
  ADD KEY `id_curso_3` (`id_curso`),
  ADD KEY `id_estudiante_2` (`id_estudiante`);

--
-- Indices de la tabla `calificaciones`
--
ALTER TABLE `calificaciones`
  ADD PRIMARY KEY (`id_calificaciones`),
  ADD KEY `id_asignatura` (`id_asignatura`),
  ADD KEY `id_profesor` (`id_estudiante`);

--
-- Indices de la tabla `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`id_curso`),
  ADD KEY `id_profesor` (`id_profesor`);

--
-- Indices de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD PRIMARY KEY (`id_estudiante`),
  ADD KEY `id_curso` (`id_curso`);

--
-- Indices de la tabla `horario`
--
ALTER TABLE `horario`
  ADD PRIMARY KEY (`id_horario`),
  ADD KEY `id_curso` (`id_curso`);

--
-- Indices de la tabla `profesor`
--
ALTER TABLE `profesor`
  ADD PRIMARY KEY (`id_profesor`),
  ADD KEY `id_asignatura` (`id_asignatura`),
  ADD KEY `id_curso` (`id_curso`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `id_administrador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `asignatura`
--
ALTER TABLE `asignatura`
  MODIFY `id_asignatura` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `asistencia`
--
ALTER TABLE `asistencia`
  MODIFY `id_asistencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `calificaciones`
--
ALTER TABLE `calificaciones`
  MODIFY `id_calificaciones` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT de la tabla `curso`
--
ALTER TABLE `curso`
  MODIFY `id_curso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  MODIFY `id_estudiante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `horario`
--
ALTER TABLE `horario`
  MODIFY `id_horario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `profesor`
--
ALTER TABLE `profesor`
  MODIFY `id_profesor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD CONSTRAINT `administrador_ibfk_1` FOREIGN KEY (`id_curso`) REFERENCES `curso` (`id_curso`);

--
-- Filtros para la tabla `asistencia`
--
ALTER TABLE `asistencia`
  ADD CONSTRAINT `asistencia_ibfk_1` FOREIGN KEY (`id_estudiante`) REFERENCES `estudiante` (`id_estudiante`) ON DELETE CASCADE,
  ADD CONSTRAINT `asistencia_ibfk_2` FOREIGN KEY (`id_curso`) REFERENCES `curso` (`id_curso`);

--
-- Filtros para la tabla `calificaciones`
--
ALTER TABLE `calificaciones`
  ADD CONSTRAINT `calificaciones_ibfk_2` FOREIGN KEY (`id_estudiante`) REFERENCES `estudiante` (`id_estudiante`) ON DELETE CASCADE,
  ADD CONSTRAINT `calificaciones_ibfk_3` FOREIGN KEY (`id_asignatura`) REFERENCES `asignatura` (`id_asignatura`);

--
-- Filtros para la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD CONSTRAINT `estudiante_ibfk_1` FOREIGN KEY (`id_curso`) REFERENCES `curso` (`id_curso`);

--
-- Filtros para la tabla `horario`
--
ALTER TABLE `horario`
  ADD CONSTRAINT `horario_ibfk_1` FOREIGN KEY (`id_curso`) REFERENCES `curso` (`id_curso`);

--
-- Filtros para la tabla `profesor`
--
ALTER TABLE `profesor`
  ADD CONSTRAINT `profesor_ibfk_2` FOREIGN KEY (`id_asignatura`) REFERENCES `asignatura` (`id_asignatura`),
  ADD CONSTRAINT `profesor_ibfk_3` FOREIGN KEY (`id_curso`) REFERENCES `curso` (`id_profesor`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
