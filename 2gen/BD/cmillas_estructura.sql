-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 28-07-2018 a las 22:12:53
-- Versión del servidor: 5.7.22
-- Versión de PHP: 7.1.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cmillas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `business`
--

CREATE TABLE `business` (
  `business_id` int(11) NOT NULL,
  `business_name` varchar(24) NOT NULL,
  `sector` varchar(24) NOT NULL,
  `segment` varchar(24) NOT NULL COMMENT 'Teléfono o E-mail',
  `sub_segment` varchar(24) NOT NULL,
  `business_location` varchar(24) NOT NULL,
  `business_zipcode` int(5) NOT NULL,
  `branches_number` int(4) NOT NULL,
  `ops_abroad` varchar(10) NOT NULL,
  `customer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `business_balance`
--

CREATE TABLE `business_balance` (
  `business_id` int(11) NOT NULL,
  `b_balance` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(24) NOT NULL,
  `customer_last_name` varchar(35) NOT NULL,
  `customer_username` varchar(59) NOT NULL,
  `customer_password` varchar(60) NOT NULL,
  `customer_birth` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `customer_locaton` varchar(24) NOT NULL,
  `customer_email` char(60) NOT NULL,
  `customer_phone` char(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `customer_balance`
--

CREATE TABLE `customer_balance` (
  `customer_id` int(11) NOT NULL,
  `c_balance` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `local_plant`
--

CREATE TABLE `local_plant` (
  `local_plant_id` int(11) NOT NULL,
  `local_sow_id` int(11) NOT NULL,
  `business_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `pot_taken_id` int(11) NOT NULL,
  `status` varchar(11) NOT NULL,
  `code` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `local_sow`
--

CREATE TABLE `local_sow` (
  `local_sow_id` int(11) NOT NULL,
  `business_name` varchar(24) DEFAULT NULL,
  `monetary_value` int(6) DEFAULT NULL,
  `percent_value` int(2) DEFAULT NULL,
  `type` varchar(24) NOT NULL,
  `origin` varchar(24) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `quantity_start` int(9) DEFAULT NULL,
  `quantity_left` int(9) DEFAULT NULL,
  `publication_start` datetime DEFAULT NULL,
  `publication_end` datetime DEFAULT NULL,
  `valid_start` datetime DEFAULT NULL,
  `valid_end` datetime DEFAULT NULL,
  `business_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pot_offer`
--

CREATE TABLE `pot_offer` (
  `pot_offer_id` int(11) NOT NULL,
  `pot_pub_ini` datetime NOT NULL,
  `pot_pub_fin` datetime NOT NULL COMMENT 'En días',
  `pot_val_ini` datetime NOT NULL,
  `pot_val_fin` datetime NOT NULL,
  `lifetime` int(3) NOT NULL COMMENT 'in days',
  `business_id` int(11) NOT NULL,
  `quantity` int(9) NOT NULL,
  `value` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pot_taken`
--

CREATE TABLE `pot_taken` (
  `pot_taken_id` int(11) NOT NULL,
  `pot_offer_id` int(11) NOT NULL,
  `business_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `pot_val_ini` datetime NOT NULL,
  `pot_val_fin` datetime NOT NULL,
  `lifetime` int(3) DEFAULT NULL COMMENT 'in days',
  `status` varchar(11) NOT NULL,
  `value` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `business`
--
ALTER TABLE `business`
  ADD PRIMARY KEY (`business_id`);

--
-- Indices de la tabla `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indices de la tabla `local_plant`
--
ALTER TABLE `local_plant`
  ADD PRIMARY KEY (`local_plant_id`);

--
-- Indices de la tabla `local_sow`
--
ALTER TABLE `local_sow`
  ADD PRIMARY KEY (`local_sow_id`),
  ADD KEY `business_id` (`business_id`);

--
-- Indices de la tabla `pot_offer`
--
ALTER TABLE `pot_offer`
  ADD PRIMARY KEY (`pot_offer_id`);

--
-- Indices de la tabla `pot_taken`
--
ALTER TABLE `pot_taken`
  ADD PRIMARY KEY (`pot_taken_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `business`
--
ALTER TABLE `business`
  MODIFY `business_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `local_plant`
--
ALTER TABLE `local_plant`
  MODIFY `local_plant_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `local_sow`
--
ALTER TABLE `local_sow`
  MODIFY `local_sow_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pot_offer`
--
ALTER TABLE `pot_offer`
  MODIFY `pot_offer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pot_taken`
--
ALTER TABLE `pot_taken`
  MODIFY `pot_taken_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `local_sow`
--
ALTER TABLE `local_sow`
  ADD CONSTRAINT `local_sow_ibfk_1` FOREIGN KEY (`business_id`) REFERENCES `business` (`business_id`),
  ADD CONSTRAINT `local_sow_ibfk_2` FOREIGN KEY (`business_id`) REFERENCES `business` (`business_id`),
  ADD CONSTRAINT `local_sow_ibfk_3` FOREIGN KEY (`business_id`) REFERENCES `business` (`business_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
