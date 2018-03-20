-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-03-2018 a las 05:21:19
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
-- Base de datos: `parcial1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `Nombre` varchar(50) NOT NULL,
  `Apellido` varchar(50) NOT NULL,
  `Pais` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Tipo_tarjeta` varchar(30) NOT NULL,
  `Num_tarjeta` varchar(50) NOT NULL,
  `CountryCode` varchar(10) NOT NULL,
  `CurrencyCode` varchar(20) NOT NULL,
  `Currency` varchar(20) NOT NULL,
  `Code` varchar(20) NOT NULL,
  `GMT` varchar(20) NOT NULL,
  `Usuario` varchar(50) NOT NULL,
  `Pass` varchar(50) NOT NULL,
  `CTM1` varchar(20) NOT NULL,
  `CTM2` varchar(20) NOT NULL,
  `CTM3` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`Nombre`, `Apellido`, `Pais`, `Email`, `Tipo_tarjeta`, `Num_tarjeta`, `CountryCode`, `CurrencyCode`, `Currency`, `Code`, `GMT`, `Usuario`, `Pass`, `CTM1`, `CTM2`, `CTM3`) VALUES
('Daniel', 'Sanabria', 'Kenya', 'dsanabria@gmail.com', 'VISA', '1234567', 'ke', 'KES', 'Schilling', '254', '+3', 'dsanabria', '1234', 'BTC', 'ETH', 'DASH'),
('Eileen', 'Andrade', 'Spain', 'sony765@hotmail.com', 'MASTERCARD', '12567', 'es', 'ESP', 'Peseta', '34', '+1', 'eandrade', '12345', 'BTC', 'ETH', 'LTC');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`Usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
