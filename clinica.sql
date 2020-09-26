-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-09-2020 a las 21:02:30
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `clinica`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medical_appointments`
--

CREATE TABLE `medical_appointments` (
  `id` int(11) NOT NULL,
  `date` varchar(10) NOT NULL,
  `document_patient` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `medical_appointments`
--

INSERT INTO `medical_appointments` (`id`, `date`, `document_patient`) VALUES
(1, '2020-10-03', 1003405061),
(3, '2020-12-31', 1003405061),
(4, '2021-01-13', 2147483647),
(6, '2020-09-09', 2147483647),
(7, '2020-10-05', 1003405061),
(9, '2021-01-16', 2147483647),
(11, '2020-09-25', 1003405061),
(12, '2020-10-09', 1003405061);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `patients`
--

CREATE TABLE `patients` (
  `document` int(15) NOT NULL,
  `name` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `birthdate` varchar(10) NOT NULL,
  `city` varchar(40) NOT NULL,
  `neighborhood` varchar(40) NOT NULL,
  `number_phone` varchar(10) NOT NULL,
  `Created_the` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `patients`
--

INSERT INTO `patients` (`document`, `name`, `lastname`, `birthdate`, `city`, `neighborhood`, `number_phone`, `Created_the`) VALUES
(0, '', '', '', '', '', '', '0000-00-00'),
(523645, 'Guia-Hoteles', 'Mendoza', '2020-09-08', 'Medellin', 'Boston', '3115834708', '2020-09-26'),
(7896541, 'Guia-Hotelesdasd', 'adasdasdasd', '2020-09-10', 'asddsg', 'sdgsdgsdg', '314521654', '2020-09-26'),
(9632258, 'asfasfs', 'sfsafafsasfasf', '2020-09-01', 'afasfaf', 'afasfasfaf', '13', '2020-09-26'),
(1003405061, 'Jhon', 'Mendoza', '1993-03-21', 'Medellin', 'Boston', '3115834708', '2020-09-25'),
(2147483647, 'juan', 'djalskfjlaksf', '2020-06-10', 'Medellin', 'centro', '3115837454', '2020-09-25');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `medical_appointments`
--
ALTER TABLE `medical_appointments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `document_patient` (`document_patient`);

--
-- Indices de la tabla `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`document`),
  ADD KEY `document` (`document`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `medical_appointments`
--
ALTER TABLE `medical_appointments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `medical_appointments`
--
ALTER TABLE `medical_appointments`
  ADD CONSTRAINT `medical_appointments_ibfk_1` FOREIGN KEY (`document_patient`) REFERENCES `patients` (`document`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
