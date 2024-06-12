-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-08-2020 a las 04:22:14
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
-- Base de datos: `camas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargos`
--

CREATE TABLE `cargos` (
  `id` int(11) NOT NULL,
  `cargo` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cargos`
--

INSERT INTO `cargos` (`id`, `cargo`) VALUES
(1, 'GERENTE'),
(2, 'VENTAS'),
(3, 'CAJERA'),
(4, 'GERENTE'),
(5, 'PUBLICISTA'),
(6, 'MERCADOTECNIA'),
(7, 'SECRETARIA'),
(8, 'CHOFER'),
(9, 'ALMACENISTA'),
(10, 'PROMOTOR'),
(11, 'SEO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ccamas`
--

CREATE TABLE `ccamas` (
  `id` int(10) NOT NULL,
  `hosp` varchar(100) DEFAULT NULL,
  `fecha` varchar(50) DEFAULT NULL,
  `nroingresos` int(10) DEFAULT NULL,
  `nrocamasdisp` int(10) DEFAULT NULL,
  `nrocamasocup` int(10) DEFAULT NULL,
  `totegre` int(10) DEFAULT NULL,
  `nroalta` int(10) DEFAULT NULL,
  `nrofallecido` int(10) DEFAULT NULL,
  `transferencia` int(10) DEFAULT NULL,
  `obs` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ccamas`
--

INSERT INTO `ccamas` (`id`, `hosp`, `fecha`, `nroingresos`, `nrocamasdisp`, `nrocamasocup`, `totegre`, `nroalta`, `nrofallecido`, `transferencia`, `obs`) VALUES
(1, 'HOSPITAL PATACAMAYA', '19-08-2020 10:29pm', 0, 0, 0, 0, 0, 0, 0, 'Sin/Obs'),
(2, 'HOSPITAL ESCOMA', '20-08-2020 9:02am', 0, 2, 0, 0, 0, 0, 0, 'Sin/Obs'),
(3, 'HOSPITAL CARANAVI', '20-08-2020 11:28am', 0, 8, 2, 0, 0, 1, 0, 'AISLAMIENTO EN EL HOTEL ELIS  15 CAMAS :  9 CAMAS OCUPADAS  6 CAMAS DISPONIBLES  '),
(4, 'HOSPITAL PATACAMAYA', '20-08-2020 12:29pm', 0, 2, 0, 0, 0, 0, 0, 'Sin/Obs'),
(5, 'HOSP GENERAL DE LOS YUNGAS COROICO', '20-08-2020 12:56pm', 0, 0, 5, 0, 0, 0, 0, 'Sin/Obs'),
(6, 'HOSPITAL DE ACHACACHI', '20-08-2020 1:15pm', 0, 21, 0, 0, 0, 0, 0, 'En espera de inauguración. Pacientes niegan la existencia del COVI 19. '),
(7, 'HOSPITAL MUNICIPAL VIACHA', '20-08-2020 2:00pm', 1, 3, 5, 0, 0, 1, 0, 'Sin/Obs'),
(8, 'HOSPITAL CHULUMANI', '20-08-2020 2:06pm', 1, 3, 1, 0, 0, 0, 0, 'Sin/Obs'),
(9, 'HOSPITAL MUNICIPAL LA MERCED', '20-08-2020 2:09pm', 1, 30, 1, 0, 0, 0, 0, 'Sin/Obs'),
(10, 'HOSPITAL MUNICIPAL LOS PINOS', '20-08-2020 2:19pm', 0, 39, 0, 0, 0, 0, 0, 'Hospital cerrado por coordinación para atención covid'),
(11, 'HOSPITAL CARANAVI', '21-08-2020 11:54am', 0, 8, 2, 0, 0, 0, 0, 'AISLAMIENTO EN EL HOTEL ELIS  15 CAMAS :  8 CAMAS OCUPADAS  5 CAMAS DISPONIBLES  1  DE ALTAS'),
(12, 'HOSPITAL MUNICIPAL LOS PINOS', '21-08-2020 12:36pm', 0, 39, 0, 0, 0, 0, 0, 'Sin/Obs'),
(13, 'HOSPITAL ESCOMA', '21-08-2020 12:53pm', 0, 2, 0, 0, 0, 0, 0, 'Sin/Obs'),
(14, 'HOSPITAL PATACAMAYA', '21-08-2020 1:01pm', 0, 2, 0, 0, 0, 0, 0, 'Sin/Obs'),
(15, 'HOSP GENERAL DE LOS YUNGAS COROICO', '21-08-2020 1:01pm', 0, 0, 5, 0, 0, 0, 0, ''),
(16, 'HOSPITAL MUNICIPAL VIACHA', '21-08-2020 1:52pm', 1, 2, 6, 0, 0, 0, 0, 'Sin/Obs'),
(17, 'HOSPITAL CHULUMANI', '21-08-2020 2:36pm', 0, 3, 1, 0, 0, 0, 0, 'Sin/Obs'),
(18, 'HOSPITAL MUNICIPAL LA MERCED', '21-08-2020 2:44pm', 2, 35, 2, 0, 0, 0, 0, 'Sin/Obs'),
(19, 'HOSPITAL HOLANDES', '21-08-2020 2:49pm', 2, 15, 10, 0, 0, 0, 0, 'Sin/Obs'),
(20, 'HOSPITAL HOLANDES', '21-08-2020 2:49pm', 0, 0, 0, 0, 0, 0, 0, 'Sin/Obs'),
(21, 'HOSPITAL DE ACHACACHI', '21-08-2020 5:05pm', 0, 21, 0, 0, 0, 0, 0, 'En espera de inauguración '),
(22, 'HOSPITAL DE ACHACACHI', '22-08-2020 12:32pm', 0, 21, 0, 0, 0, 0, 0, 'En espera de inauguración '),
(23, 'HOSPITAL CARANAVI', '22-08-2020 12:46pm', 0, 8, 2, 0, 0, 0, 0, 'aislamiento en el hotel elis contamos con 15 camas : 8 ocupada 7 disponibles '),
(24, 'HOSPITAL CHULUMANI', '22-08-2020 12:52pm', 0, 3, 1, 0, 0, 0, 0, 'Sin/Obs'),
(25, 'C.S.INTEGRAL SENKATA', '22-08-2020 12:56pm', 1, 20, 1, 1, 1, 0, 5, 'no tenemos médicos turno noche,motivo que  bajaron las internaciones '),
(26, 'HOSP GENERAL DE LOS YUNGAS COROICO', '22-08-2020 1:10pm', 1, 0, 5, 1, 0, 0, 1, 'Sin/Obs'),
(27, 'C.S.INTEGRAL SENKATA', '22-08-2020 12:56pm', 1, 20, 1, 1, 1, 0, 5, 'no tenemos medico turno noche x baja covid19'),
(28, 'HOSPITAL PATACAMAYA', '22-08-2020 1:27pm', 0, 2, 0, 0, 0, 0, 0, 'Sin/Obs'),
(29, 'HOSPITAL CHULUMANI', '23-08-2020 11:47am', 0, 3, 1, 0, 0, 0, 0, 'Sin/Obs'),
(30, 'HOSPITAL PATACAMAYA', '23-08-2020 1:01pm', 0, 2, 0, 0, 0, 0, 0, 'Sin/Obs'),
(31, 'HOSPITAL CARANAVI', '23-08-2020 1:06pm', 0, 8, 2, 0, 0, 0, 0, 'aislamiento en el hotel elis contamos con 15 camas : 8 ocupadas 7 disponibles'),
(32, 'C.S.INTEGRAL SENKATA', '23-08-2020 1:10pm', 1, 19, 1, 0, 0, 0, 3, 'no tenemos medico turno noche , motivo q bajaron las internaciones ,los especialista se encuentran con licencia '),
(33, 'C.S.INTEGRAL SENKATA', '23-08-2020 1:10pm', 1, 19, 0, 0, 0, 0, 3, 'con tenemos medico turno noche motivo q bajaron las internaciones '),
(34, 'HOSP GENERAL DE LOS YUNGAS COROICO', '23-08-2020 1:27pm', 0, 0, 5, 0, 0, 0, 0, 'Sin/Obs'),
(35, 'HOSPITAL MUNICIPAL LA MERCED', '23-08-2020 1:46pm', 1, 34, 3, 0, 0, 0, 0, 'Sin/Obs'),
(36, 'HOSPITAL DE ACHACACHI', '23-08-2020 1:52pm', 0, 21, 0, 0, 0, 0, 0, 'En espera de inauguración. Existe temor a la internación.'),
(37, 'HOSPITAL PATACAMAYA', '24-08-2020 12:07pm', 0, 2, 0, 0, 0, 0, 0, 'Sin/Obs'),
(38, 'HOSPITAL ESCOMA', '24-08-2020 12:22pm', 0, 2, 0, 0, 0, 0, 0, 'Sin/Obs'),
(39, 'HOSPITAL DE ACHACACHI', '24-08-2020 12:39pm', 0, 21, 0, 0, 0, 0, 0, 'En espera de inauguración. Existe temor a la internación.'),
(40, 'HOSP GENERAL DE LOS YUNGAS COROICO', '24-08-2020 12:53pm', 0, 0, 5, 0, 0, 0, 0, 'Sin/Obs'),
(41, 'C.S.INTEGRAL SENKATA', '24-08-2020 12:55pm', 1, 19, 1, 0, 0, 0, 1, 'Sin/Obs'),
(42, 'HOSPITAL CARANAVI', '24-08-2020 1:08pm', 0, 8, 2, 0, 0, 0, 0, 'AISLAMIENTO EN EL HOTEL ELIS 15 CAMAS : 4 OCUPADAS 11 DISPONIBLES 4 DE ALTAS'),
(43, 'HOSPITAL MUNICIPAL LA MERCED', '24-08-2020 1:06pm', 1, 33, 4, 0, 0, 0, 0, 'PACIENTE EN EMERGENCIAS 1'),
(44, 'HOSPITAL CHULUMANI', '24-08-2020 1:10pm', 1, 2, 2, 0, 0, 0, 0, 'Sin/Obs'),
(45, 'HOSPITAL MUNICIPAL LOS PINOS', '24-08-2020 1:16pm', 0, 39, 0, 0, 0, 0, 0, 'Sin/Obs'),
(46, 'HOSPITAL MUNICIPAL VIACHA', '24-08-2020 1:23pm', 0, 3, 5, 0, 0, 0, 0, 'Sin/Obs'),
(47, 'HOSPITAL MUNICIPAL VIACHA', '24-08-2020 1:23pm', 0, 3, 5, 0, 0, 0, 0, 'Sin/Obs'),
(48, 'HOSPITAL MUNICIPAL VIACHA', '24-08-2020 1:23pm', 0, 3, 5, 0, 0, 0, 0, 'Sin/Obs'),
(49, 'HOSPITAL MUNICIPAL VIACHA', '24-08-2020 1:23pm', 0, 3, 5, 0, 0, 0, 0, 'Sin/Obs'),
(50, 'HOSPITAL MUNICIPAL VIACHA', '24-08-2020 1:23pm', 0, 3, 5, 0, 0, 0, 0, 'Sin/Obs'),
(51, 'HOSPITAL MUNICIPAL VIACHA', '24-08-2020 1:23pm', 0, 3, 5, 0, 0, 0, 0, 'Sin/Obs'),
(52, 'HOSPITAL MUNICIPAL VIACHA', '24-08-2020 1:23pm', 0, 3, 5, 0, 0, 0, 0, 'Sin/Obs'),
(53, 'HOSPITAL MUNICIPAL VIACHA', '24-08-2020 1:23pm', 0, 3, 5, 0, 0, 0, 0, 'Sin/Obs'),
(54, 'HOSPITAL MUNICIPAL VIACHA', '24-08-2020 1:23pm', 0, 3, 5, 0, 0, 0, 0, 'Sin/Obs'),
(55, 'HOSPITAL MUNICIPAL VIACHA', '24-08-2020 1:23pm', 0, 3, 5, 0, 0, 0, 0, 'Sin/Obs'),
(56, 'HOSPITAL MUNICIPAL VIACHA', '24-08-2020 1:23pm', 0, 3, 5, 0, 0, 0, 0, 'Sin/Obs'),
(57, 'HOSPITAL DE LA MUJER', '24-08-2020 5:48pm', 0, 0, 0, 0, 0, 0, 0, 'Sin/Obs');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `confirm`
--

CREATE TABLE `confirm` (
  `cod_deuda2` int(11) NOT NULL,
  `nom_deudor` varchar(20) NOT NULL,
  `ape_deudor` varchar(20) NOT NULL,
  `monto_deudor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `confirm`
--

INSERT INTO `confirm` (`cod_deuda2`, `nom_deudor`, `ape_deudor`, `monto_deudor`) VALUES
(1, 'FEMENINO', 'CONFIRMADO', 10),
(2, 'MASCULINO', 'CONFIRMADO', 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `confirmados`
--

CREATE TABLE `confirmados` (
  `cod_deuda` int(11) NOT NULL,
  `nom_deudor` varchar(20) NOT NULL,
  `ape_deudor` varchar(20) NOT NULL,
  `monto_deudor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `confirmados`
--

INSERT INTO `confirmados` (`cod_deuda`, `nom_deudor`, `ape_deudor`, `monto_deudor`) VALUES
(0, 'FEMENINO', 'CONFIRMADO', 1),
(0, 'MASCULINO', 'CONFIRMADO', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `deudas`
--

CREATE TABLE `deudas` (
  `id` int(11) NOT NULL,
  `fecha` varchar(50) DEFAULT NULL,
  `municipio` varchar(50) DEFAULT NULL,
  `procedencia` varchar(100) DEFAULT NULL,
  `hosp` varchar(100) NOT NULL,
  `dispox` varchar(50) DEFAULT NULL,
  `nropac` varchar(50) NOT NULL,
  `saluti` varchar(50) DEFAULT NULL,
  `totdec` varchar(50) DEFAULT NULL,
  `totdecox` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `deudas`
--

INSERT INTO `deudas` (`id`, `fecha`, `municipio`, `procedencia`, `hosp`, `dispox`, `nropac`, `saluti`, `totdec`, `totdecox`) VALUES
(1, '20-08-2020 9:04am', 'ESCOMA', 'MUNICIPIO', 'HOSPITAL ESCOMA', 'SI', '6', '0', '0', '0'),
(2, '20-08-2020 11:32am', 'CARANAVI', 'MUNICIPIO', 'HOSPITAL CARANAVI', 'SI', '2', '0', '0', '0'),
(3, '20-08-2020 12:31pm', 'Patacamaya', 'GOBERNACION', 'HOSPITAL PATACAMAYA', 'SI', '0', '0', '0', '0'),
(4, '20-08-2020 12:41pm', 'La Paz', 'MUNICIPIO', 'HOSPITAL LA PAZ', 'SI', '3', '0', '0', '0'),
(5, '20-08-2020 12:57pm', 'COROICO', 'MUNICIPIO', 'HOSP GENERAL DE LOS YUNGAS COROICO', 'SI', '5', '0', '0', '0'),
(6, '20-08-2020 2:16pm', 'Chulumani ', 'MUNICIPIO', 'HOSPITAL CHULUMANI', 'SI', '12', '0', '0', '0'),
(7, '21-08-2020 12:04pm', 'CARANAVI', 'MUNICIPIO', 'HOSPITAL CARANAVI', 'SI', '2', '0', '0', '0'),
(8, '21-08-2020 12:54pm', 'ESCOMA', 'MUNICIPIO', 'HOSPITAL ESCOMA', 'SI', '6', '0', '0', '0'),
(9, '21-08-2020 12:56pm', 'La Paz', 'MUNICIPIO', 'HOSPITAL LA PAZ', 'SI', '3', '0', '0', '0'),
(10, '21-08-2020 1:03pm', 'COROICO', 'MUNICIPIO', 'HOSP GENERAL DE LOS YUNGAS COROICO', 'SI', '5', '0', '0', '0'),
(11, '21-08-2020 1:03pm', 'Patacamaya', 'GOBERNACION', 'HOSPITAL PATACAMAYA', 'SI', '0', '0', '0', '0'),
(12, '21-08-2020 2:57pm', 'EL ALTO', 'GOBERNACION', 'HOSPITAL HOLANDES', 'SI', '6', '1', '0', '0'),
(13, '22-08-2020 12:49pm', 'caranavi', 'MUNICIPIO', 'HOSPITAL CARANAVI', 'SI', '2', '0', '0', '0'),
(14, '22-08-2020 12:53pm', 'Chulumani ', 'MUNICIPIO', 'HOSPITAL CHULUMANI', 'SI', '1', '0', '0', '0'),
(15, '22-08-2020 1:12pm', 'Coroico', 'MUNICIPIO', 'HOSP GENERAL DE LOS YUNGAS COROICO', 'SI', '5', '0', '0', '0'),
(16, '22-08-2020 1:12pm', 'EL ALTO ', 'MUNICIPIO', 'C.S.INTEGRAL SENKATA', 'SI', '0', '0', '0', '0'),
(17, '22-08-2020 1:29pm', 'Patacamaya', 'GOBERNACION', 'HOSPITAL PATACAMAYA', 'SI', '0', '0', '0', '0'),
(18, '22-08-2020 2:48pm', 'La paz ', 'GOBERNACION', 'HOSPITAL MUNICIPAL LA MERCED', 'SI', '0', '0', '0', '0'),
(19, '23-08-2020 1:02pm', 'Patacamaya', 'GOBERNACION', 'HOSPITAL PATACAMAYA', 'SI', '0', '0', '0', '0'),
(20, '23-08-2020 1:09pm', 'CARANAVI', 'MUNICIPIO', 'HOSPITAL CARANAVI', 'SI', '2', '0', '0', '0'),
(21, '23-08-2020 1:29pm', 'Coroico', 'MUNICIPIO', 'HOSP GENERAL DE LOS YUNGAS COROICO', 'SI', '5', '0', '0', '0'),
(22, '24-08-2020 11:26am', 'La Paz', 'MUNICIPIO', 'HOSPITAL LA PAZ', 'SI', '3', '0', '0', '0'),
(23, '24-08-2020 12:08pm', 'Patacamaya', 'GOBERNACION', 'HOSPITAL PATACAMAYA', 'SI', '0', '0', '0', '0'),
(24, '24-08-2020 12:23pm', 'ESCOMA', 'MUNICIPIO', 'HOSPITAL ESCOMA', 'SI', '6', '0', '0', '0'),
(25, '24-08-2020 12:54pm', 'Coroico', 'GOBERNACION', 'HOSP GENERAL DE LOS YUNGAS COROICO', 'SI', '5', '0', '0', '0'),
(26, '24-08-2020 1:11pm', 'LA PAZ', 'GOBERNACION', 'HOSPITAL MUNICIPAL LA MERCED', 'SI', '6', '1', '0', '0'),
(27, '24-08-2020 1:13pm', 'CARANAVI', 'MUNICIPIO', 'HOSPITAL CARANAVI', 'SI', '2', '0', '0', '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `deudas2`
--

CREATE TABLE `deudas2` (
  `cod_deuda` int(11) NOT NULL,
  `nom_deudor` varchar(20) NOT NULL,
  `ape_deudor` varchar(20) NOT NULL,
  `monto_deudor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `deudas2`
--

INSERT INTO `deudas2` (`cod_deuda`, `nom_deudor`, `ape_deudor`, `monto_deudor`) VALUES
(0, 'FEMENINO', 'CONFIRMADO', 10),
(0, 'MASCULINO', 'CONFIRMADO', 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais`
--

CREATE TABLE `pais` (
  `id` int(5) NOT NULL,
  `pais` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pais`
--

INSERT INTO `pais` (`id`, `pais`) VALUES
(1, 'México'),
(2, 'Argentina'),
(3, 'Chile'),
(4, 'Ecuador'),
(5, 'Brasil'),
(6, 'Cuba'),
(7, 'Haiti'),
(8, 'Honduras'),
(9, 'Belice'),
(10, 'EUA'),
(11, 'Uruguay'),
(12, 'Colombia'),
(13, 'Guatemala');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal`
--

CREATE TABLE `personal` (
  `id` int(5) NOT NULL,
  `fecha` varchar(100) DEFAULT NULL,
  `hosp` varchar(200) DEFAULT NULL,
  `nroing` int(10) DEFAULT NULL,
  `totcamas` int(10) DEFAULT NULL,
  `ingresos` int(10) DEFAULT NULL,
  `egresos` int(10) DEFAULT NULL,
  `total` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `personal`
--

INSERT INTO `personal` (`id`, `fecha`, `hosp`, `nroing`, `totcamas`, `ingresos`, `egresos`, `total`) VALUES
(1, '20-08-2020 9:03am', 'HOSPITAL ESCOMA', 0, 13, 1, 0, 14),
(2, '20-08-2020 11:35am', 'HOSPITAL CARANAVI', 5, 25, 15, 4, 40),
(3, '20-08-2020 12:30pm', 'HOSPITAL PATACAMAYA', 1, 14, 2, 0, 16),
(4, '20-08-2020 12:36pm', 'HOSPITAL LA PAZ', 5, 21, 8, 0, 13),
(5, '20-08-2020 12:36pm', 'HOSPITAL LA PAZ', 5, 21, 8, 0, 13),
(6, '20-08-2020 12:56pm', 'HOSP GENERAL DE LOS YUNGAS COROICO', 0, 29, 6, 2, 35),
(7, '20-08-2020 2:07pm', 'HOSPITAL MUNICIPAL VIACHA', 1, 66, 1, 1, 67),
(8, '20-08-2020 2:15pm', 'HOSPITAL CHULUMANI', 5, 6, 5, 0, 12),
(9, '20-08-2020 2:22pm', 'HOSPITAL MUNICIPAL LOS PINOS', 0, 0, 1, 0, 0),
(10, '21-08-2020 11:56am', 'HOSPITAL CARANAVI', 1, 26, 14, 2, 40),
(11, '21-08-2020 12:54pm', 'HOSPITAL ESCOMA', 0, 14, 0, 1, 14),
(12, '21-08-2020 12:53pm', 'HOSPITAL LA PAZ', 15, 23, 21, 3, 2),
(13, '21-08-2020 1:02pm', 'HOSPITAL PATACAMAYA', 1, 15, 1, 0, 16),
(14, '21-08-2020 1:02pm', 'HOSPITAL PATACAMAYA', 0, 15, 1, 0, 16),
(15, '21-08-2020 1:02pm', 'HOSPITAL PATACAMAYA', 1, 15, 1, 0, 16),
(16, '21-08-2020 1:03pm', 'HOSP GENERAL DE LOS YUNGAS COROICO', 2, 29, 6, 2, 35),
(17, '21-08-2020 1:53pm', 'HOSPITAL MUNICIPAL VIACHA', 4, 62, 5, 0, 67),
(18, '21-08-2020 2:55pm', 'HOSPITAL HOLANDES', 0, 137, 39, 2, 98),
(19, '22-08-2020 12:48pm', 'HOSPITAL CARANAVI', 2, 27, 13, 3, 40),
(20, '22-08-2020 12:53pm', 'HOSPITAL CHULUMANI', 0, 10, 4, 0, 12),
(21, '22-08-2020 1:11pm', 'HOSP GENERAL DE LOS YUNGAS COROICO', 1, 29, 7, 0, 35),
(22, '22-08-2020 1:13pm', 'C.S.INTEGRAL SENKATA', 1, 20, 1, 1, 19),
(23, '22-08-2020 1:27pm', 'HOSPITAL PATACAMAYA', 0, 15, 1, 0, 16),
(24, '22-08-2020 2:49pm', 'HOSPITAL MUNICIPAL LA MERCED', 0, 36, 2, 0, 38),
(25, '23-08-2020 11:47am', 'HOSPITAL CHULUMANI', 2, 8, 4, 2, 12),
(26, '23-08-2020 1:01pm', 'HOSPITAL PATACAMAYA', 0, 16, 0, 1, 16),
(27, '23-08-2020 1:08pm', 'HOSPITAL CARANAVI', 1, 28, 12, 2, 40),
(28, '23-08-2020 1:28pm', 'HOSP GENERAL DE LOS YUNGAS COROICO', 0, 30, 5, 2, 35),
(29, '24-08-2020 11:24am', 'HOSPITAL LA PAZ', 15, 21, 21, 0, 0),
(30, '24-08-2020 12:08pm', 'HOSPITAL PATACAMAYA', 0, 16, 0, 0, 16),
(31, '24-08-2020 12:23pm', 'HOSPITAL ESCOMA', 0, 14, 0, 0, 14),
(32, '24-08-2020 12:54pm', 'HOSP GENERAL DE LOS YUNGAS COROICO', 0, 0, 5, 0, 0),
(33, '24-08-2020 1:10pm', 'HOSPITAL MUNICIPAL LA MERCED', 1, 33, 0, 0, 37),
(34, '24-08-2020 1:11pm', 'HOSPITAL CHULUMANI', 2, 8, 4, 2, 12),
(35, '24-08-2020 1:10pm', 'HOSPITAL CARANAVI', 2, 29, 11, 3, 40),
(36, '24-08-2020 1:17pm', 'HOSPITAL MUNICIPAL LOS PINOS', 0, 0, 1, 0, 0),
(37, '24-08-2020 1:30pm', 'HOSPITAL MUNICIPAL VIACHA', 1, 63, 4, 1, 67);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `place`
--

CREATE TABLE `place` (
  `id` int(11) NOT NULL,
  `codigo` varchar(10) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(100) NOT NULL,
  `lat` float(10,6) NOT NULL,
  `lng` float(10,6) NOT NULL,
  `zoom` int(255) NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `caso` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `place`
--

INSERT INTO `place` (`id`, `codigo`, `title`, `description`, `lat`, `lng`, `zoom`, `sexo`, `caso`) VALUES
(8, NULL, 'Chorolque 984, La Paz, Bolivia', '14 / abril / 2020', -16.490698, -68.148636, 35, 'MASCULINO', 'CONFIRMADO'),
(10, NULL, 'Chorolque 984, La Paz, Bolivia', '14 / abril / 2020', -16.497858, -68.145844, 58, 'FEMENINO', 'CONFIRMADO'),
(20, '8525565', 'Tarapaca 778, La Paz, Bolivia', '21 / abril / 2020', -16.497549, -68.145866, 52525, 'FEMENINO', 'SOSPECHOSO'),
(21, '3636363636', 'Tarapaca 778, La Paz, Bolivia', '21 / abril / 2020', -16.496914, -68.143715, 56, 'FEMENINO', 'SOSPECHOSO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_base`
--

CREATE TABLE `tbl_base` (
  `id` int(11) NOT NULL,
  `nro` int(10) DEFAULT NULL,
  `fechanot` varchar(50) NOT NULL,
  `semnot` varchar(50) NOT NULL,
  `codigo` varchar(50) DEFAULT NULL,
  `nomcompleto` varchar(200) DEFAULT NULL,
  `sexo` varchar(10) DEFAULT NULL,
  `edad` varchar(10) DEFAULT NULL,
  `dpto` varchar(50) DEFAULT NULL,
  `munnicipio` varchar(50) DEFAULT NULL,
  `direccion` varchar(150) DEFAULT NULL,
  `zona` varchar(100) DEFAULT NULL,
  `redomicilio` varchar(150) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `centronot` varchar(50) DEFAULT NULL,
  `rednot` varchar(50) DEFAULT NULL,
  `datosclinic` varchar(150) DEFAULT NULL,
  `finicio` varchar(20) DEFAULT NULL,
  `semepid` varchar(20) DEFAULT NULL,
  `internacion` varchar(100) DEFAULT NULL,
  `fechinternacion` varchar(50) DEFAULT NULL,
  `terapia` varchar(50) DEFAULT NULL,
  `ventilador` varchar(50) DEFAULT NULL,
  `fiebre` varchar(50) DEFAULT NULL,
  `disnea` varchar(50) DEFAULT NULL,
  `diarrea` varchar(50) DEFAULT NULL,
  `malestargral` varchar(50) DEFAULT NULL,
  `tos` varchar(50) DEFAULT NULL,
  `difresp` varchar(50) DEFAULT NULL,
  `tiraje` varchar(50) DEFAULT NULL,
  `vomito` varchar(50) DEFAULT NULL,
  `artrialgias` varchar(50) DEFAULT NULL,
  `evidenciaradio` varchar(50) DEFAULT NULL,
  `mialgias` varchar(50) DEFAULT NULL,
  `dolorgarg` varchar(50) DEFAULT NULL,
  `insufiresp` varchar(50) DEFAULT NULL,
  `dolorabdom` varchar(50) DEFAULT NULL,
  `cefalea` varchar(50) DEFAULT NULL,
  `inyeccionconj` varchar(50) DEFAULT NULL,
  `dolortorac` varchar(50) DEFAULT NULL,
  `irritabil` varchar(50) DEFAULT NULL,
  `convulciones` varchar(50) DEFAULT NULL,
  `coma` varchar(50) DEFAULT NULL,
  `enfbase` varchar(50) DEFAULT NULL,
  `base` varchar(50) DEFAULT NULL,
  `tto` varchar(50) DEFAULT NULL,
  `antivioticfech` varchar(50) DEFAULT NULL,
  `antiviralfech` varchar(50) DEFAULT NULL,
  `evolucion` varchar(50) DEFAULT NULL,
  `estadomom` varchar(50) DEFAULT NULL,
  `diagnostico` varchar(50) DEFAULT NULL,
  `ocupacion1` varchar(50) DEFAULT NULL,
  `antvacuna` varchar(50) DEFAULT NULL,
  `procedencia` varchar(100) DEFAULT NULL,
  `contacto` varchar(100) DEFAULT NULL,
  `acudioestb` varchar(50) DEFAULT NULL,
  `contactoanim` varchar(50) DEFAULT NULL,
  `contactopers` varchar(50) DEFAULT NULL,
  `contactocaso` varchar(50) DEFAULT NULL,
  `tipmuestra` varchar(50) DEFAULT NULL,
  `toma` varchar(50) DEFAULT NULL,
  `semtoma` varchar(100) DEFAULT NULL,
  `resultado` varchar(100) DEFAULT NULL,
  `resultadotr` varchar(100) DEFAULT NULL,
  `otroresultadotr` varchar(100) DEFAULT NULL,
  `inmunoflore` varchar(100) DEFAULT NULL,
  `fecharep` varchar(50) DEFAULT NULL,
  `semrep` varchar(50) DEFAULT NULL,
  `fallecido` varchar(50) DEFAULT NULL,
  `egreso` varchar(50) DEFAULT NULL,
  `fechegreso` varchar(50) DEFAULT NULL,
  `semfali` varchar(50) DEFAULT NULL,
  `codfalle` varchar(50) DEFAULT NULL,
  `lab` varchar(50) DEFAULT NULL,
  `seguimiento` varchar(50) DEFAULT NULL,
  `servicio` varchar(50) DEFAULT NULL,
  `fechatm1` varchar(50) DEFAULT NULL,
  `muestra1` varchar(50) DEFAULT NULL,
  `fecha1` varchar(50) DEFAULT NULL,
  `fechatm2` varchar(50) DEFAULT NULL,
  `muestra2` varchar(50) DEFAULT NULL,
  `fecha2` varchar(50) DEFAULT NULL,
  `fechatm3` varchar(50) DEFAULT NULL,
  `muestra3` varchar(50) DEFAULT NULL,
  `fecha3` varchar(50) DEFAULT NULL,
  `obs` varchar(50) DEFAULT NULL,
  `fechatm4` varchar(50) DEFAULT NULL,
  `muestra4` varchar(50) DEFAULT NULL,
  `fecha4` varchar(50) DEFAULT NULL,
  `codre` varchar(50) DEFAULT NULL,
  `fechatm5` varchar(50) DEFAULT NULL,
  `muestra5` varchar(50) DEFAULT NULL,
  `fecha5` varchar(50) DEFAULT NULL,
  `ocupacion` varchar(50) DEFAULT NULL,
  `condicion` varchar(50) DEFAULT NULL,
  `fecharespnal` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_base`
--

INSERT INTO `tbl_base` (`id`, `nro`, `fechanot`, `semnot`, `codigo`, `nomcompleto`, `sexo`, `edad`, `dpto`, `munnicipio`, `direccion`, `zona`, `redomicilio`, `telefono`, `centronot`, `rednot`, `datosclinic`, `finicio`, `semepid`, `internacion`, `fechinternacion`, `terapia`, `ventilador`, `fiebre`, `disnea`, `diarrea`, `malestargral`, `tos`, `difresp`, `tiraje`, `vomito`, `artrialgias`, `evidenciaradio`, `mialgias`, `dolorgarg`, `insufiresp`, `dolorabdom`, `cefalea`, `inyeccionconj`, `dolortorac`, `irritabil`, `convulciones`, `coma`, `enfbase`, `base`, `tto`, `antivioticfech`, `antiviralfech`, `evolucion`, `estadomom`, `diagnostico`, `ocupacion1`, `antvacuna`, `procedencia`, `contacto`, `acudioestb`, `contactoanim`, `contactopers`, `contactocaso`, `tipmuestra`, `toma`, `semtoma`, `resultado`, `resultadotr`, `otroresultadotr`, `inmunoflore`, `fecharep`, `semrep`, `fallecido`, `egreso`, `fechegreso`, `semfali`, `codfalle`, `lab`, `seguimiento`, `servicio`, `fechatm1`, `muestra1`, `fecha1`, `fechatm2`, `muestra2`, `fecha2`, `fechatm3`, `muestra3`, `fecha3`, `obs`, `fechatm4`, `muestra4`, `fecha4`, `codre`, `fechatm5`, `muestra5`, `fecha5`, `ocupacion`, `condicion`, `fecharespnal`) VALUES
(1, 12, '2020-07-12', 'wqw', 'wq', 'wwwwww', 'qwq', 'wq', 'wq', 'wqwqw', 'wqw', 'wq', 'wq', 'wqw', 'wqw', 'sa', 'sa', '2020-07-12', 'sas', 'sa', '2020-07-12', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 2121, '2020-07-19', 'qqwqw', 'wqwqw', 'wqwqwqwqwqwqw', 'wqwqw', 'wqwqw', 'qwqwqw', 'qwq', 'wqwq', 'wqwqw', 'qwqw', 'qwqw', 'qwqw', 'wwwwwwwww', 'wwwwwwwwww', '2020-07-13', 'wwwwwwwwwwww', 'wwwwwwww', '2020-07-14', '', 'ddddddddddd', 'ddddddddd', 'dddddddddd', 'dddddddddd', 'ddddd', 'ddddd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fullname` varchar(500) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `hospital` varchar(200) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `fullname`, `username`, `email`, `password`, `hospital`, `created_at`) VALUES
(6, 'SEDESLP', 'SEDESLP', 'sedes@gmail.com', 'Sdscovid19', 'SEDES LA PAZ', '0000-00-00 00:00:00'),
(13, 'HOSPITAL DE CLINICAS', 'HCLINICAS', 'hclinicas@gmail.com', 'Hclcovid19', 'HOSPITAL DE CLINICAS', '2020-08-10 01:17:46'),
(14, 'HOSPITAL DE LA MUJER', 'HMUJER', 'hmujer@gmail.com', 'Hmjcovid19', 'HOSPITAL DE LA MUJER', '2020-08-10 01:19:05'),
(15, 'HOSPITAL DEL TORAX', 'HTORAX', 'htorax@gmail.com', 'Htcovid19', 'HOSPITAL DEL TORAX', '2020-08-10 00:00:00'),
(16, 'INO', 'INO', 'ino@gmail.com', 'Inolp2020', 'INO', '2020-08-10 00:00:00'),
(17, 'HOSPITAL LA PORTADA', 'HPORTADA', 'HPROTADA@GMAIL.COM', 'Hpcovid19', 'HOSPITAL MUNICIPAL LA PORTADA', '2020-08-10 00:00:00'),
(18, 'HOSPITAL LA MERCED', 'HMERCED', 'hmerced@gmail.com', 'Hmcovid19', 'HOSPITAL MUNICIPAL LA MERCED', '2020-08-10 00:00:00'),
(19, 'HOSPITAL COTAHUMA', 'HCOTAHUMA', 'hcotahuma@gmail.com', 'Hcotcovid19', 'HOSPITAL MUNICIPAL COTAHUMA', '2020-08-10 00:00:00'),
(20, 'HOPSITAL LOS PINOS', 'HPINOS', 'hpinos@gmial.com', 'Hpincovid19', 'HOSPITAL MUNICIPAL LOS PINOS', '2020-08-10 00:00:00'),
(21, 'HOSPITAL DEL NORTE', 'HNORTE', 'hnee@gmail.com', 'Hnorcovid19', 'HOSPITAL DEL NORTE', '2020-08-10 00:00:00'),
(22, 'HOBRERO', 'HOBRERO', 'hob@gmail.com', 'Hobcovid19', 'HOSPITAL OBRERO', '2020-08-15 00:00:00'),
(23, 'HMATERNO', 'HMATERNO', 'H@GMAIL.COM', 'Hmatcovid19', 'HOSPITAL METERNO INFANTIL', '2020-08-15 00:00:00'),
(24, 'HLUO', 'HLUO', 'HLUO@GMAIL.COM', 'Hlucovid19', 'HOSPITAL LUO', '2020-08-15 00:00:00'),
(25, 'HANDES', 'HANDES', 'AN@GMSIL.COOM', 'Hancovid19', 'HOSPITAL LOS ANDES', '2020-08-15 00:00:00'),
(26, 'HCOREA', 'HCOREA', 'HCOREA@GMAIL.COM', 'Hccovid19', 'HOSPITAL COREA', '2020-08-15 00:00:00'),
(27, 'HHOLANDES', 'HHOLANDES', 'HHOLANDES@GMAIL.COM', 'Hhcovid19', 'HOSPITAL HOLANDES', '2020-08-15 00:00:00'),
(28, 'HLAPAZ', 'HLAPAZ', 'HLAPAZ@GMAIL.COM', 'Hlpcovid19', 'HOSPITAL LA PAZ', '2020-08-15 00:00:00'),
(29, 'HSUR', 'HSUR', 'HSUR@GMAIL.COM', 'Hsurcovid19', 'HOSPITAL SUR', '2020-08-15 00:00:00'),
(30, 'HCORDES', 'HCORDES', 'HCORDE@GMAIL.COM', 'Hcocovid19', 'HOSPITAL CORDES', '2020-08-15 00:00:00'),
(31, 'HCSBP', 'HCSBP', 'HCSBP@GMAIL.COM', 'Hcscovid19', 'HOSPITAL CSBP', '2020-08-15 00:00:00'),
(32, 'HCPS', 'HCPS', 'HOSPITAL CPS', 'Hcpcovid19', 'HOSPITAL CPS', '2020-08-15 00:00:00'),
(33, 'HCAMINOS', 'HCAMINOS', 'HOSPITAL CAMINOS', 'Hcamcovid19', 'HOSPITAL CAMINOS', '2020-08-15 00:00:00'),
(34, 'HBANCA', 'HBANCA', 'HO@GMAIL.COM', 'Hbacovid19', 'HOSPITAL BANCA ESTATAL', '2020-08-15 00:00:00'),
(35, 'HUNIV', 'HUNIV', 'HOSPIT@GMAIL.COM', 'Huncovid19', 'HOSPITAL UNIVERSITARIA', '2020-08-15 00:00:00'),
(36, 'HNINO', 'HNINO', 'HOSPITAL DEL NIÑO', 'Hnncovid19', 'HOSPITAL DEL NIÑO', '2020-08-15 00:00:00'),
(37, 'HGASTRO', 'HGASTRO', 'HOSPG@GMAIL.COM', 'Hgcovid19', 'HOSPITAL GASTROENTEROLÓGICO', '2020-08-15 00:00:00'),
(38, 'HSSU', 'HSSU', 'HOSPIsGMAIL.COM', 'Hsscovid19', 'HOSPITAL SSU', '2020-08-15 00:00:00'),
(39, 'HMILITAR', 'HMILITAR', 'HOSPITAL\"GMAIL.COM', 'Hmilcovid19', 'HOSPITAL MILITAR', '2020-08-15 00:00:00'),
(40, 'HOSPITAL SANTIAGO SEGUNDO', 'HSANTIAGO', 'SANT@GMAIL.COM', 'Hsscovid19', 'HOSPITAL SANTIAGO SEGUNDO', '2020-08-17 21:34:24'),
(41, 'Daniela Castro Canedo', 'CEMES', 'jefaturamedicacemes@gmail.com', 'cemesc19', 'CEMES', '2020-08-19 02:42:42'),
(42, 'Rosa Maria Valencia Castro', 'csmayo', 'v.c.rosa.maria@gmail.com', 'csmayocovid19', 'Clinica Señor de Mayo', '2020-08-19 19:48:06'),
(43, 'HOSPITAL DE ACHACACHI', 'HACHACACHI', 'HA@GMAIL.COM', 'Hachacachi2020', 'HOSPITAL DE ACHACACHI', '2020-08-19 22:51:17'),
(44, 'HOSPITAL PATACAMAYA', 'HPATACAMAYA', 'H@FGAMIL.COM', 'Hpatacamaya2020', 'HOSPITAL PATACAMAYA', '2020-08-19 22:52:25'),
(45, 'HOSPITAL CARANAVI', 'HCARANAVI', 'j@gmail.com', 'Hcaranavi2020', 'HOSPITAL CARANAVI', '2020-08-19 22:55:38'),
(46, 'HOSPITAL CHULUMANI', 'HCHULUMANI', 'AA@GMAIL.COM', 'Hchulumani2020', 'HOSPITAL CHULUMANI', '2020-08-19 22:59:24'),
(47, 'HOSPITAL ESCOMA', 'HESCOMA', 'dsd@gmail.com', 'Hescoma2020', 'HOSPITAL ESCOMA', '2020-08-19 23:00:01'),
(48, 'HOSP GENERAL DE LOS YUNGAS COROICO', 'HYUNGAS', 'aaj@gmail.com', 'Hyungas2020', 'HOSP GENERAL DE LOS YUNGAS COROICO', '2020-08-19 23:00:43'),
(49, 'HOSPITAL MUNICIPAL VIACHA', 'HVIACHA', 'sas@gmail.com', 'Hviacha2020', 'HOSPITAL MUNICIPAL VIACHA', '2020-08-19 23:01:18'),
(50, 'Miguel Angel Marañón Palza', 'c6agosto', 'mickysovsky@gmail.com', 'c6agosto', 'Clinica 6 de agosto', '2020-08-20 16:03:49'),
(52, 'C.S.INTEGRAL SENKATA', 'HSENKATA', 'hj@gmail.com', 'Hsenkata2019', 'C.S.INTEGRAL SENKATA', '2020-08-20 20:54:57'),
(54, 'Edwin Rivas', 'cadolfok', 'erivas@kolping.bo', 'cadolfok', 'Adolfo Kolping', '2020-08-24 20:35:20');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cargos`
--
ALTER TABLE `cargos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ccamas`
--
ALTER TABLE `ccamas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `deudas`
--
ALTER TABLE `deudas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pais`
--
ALTER TABLE `pais`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `place`
--
ALTER TABLE `place`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_base`
--
ALTER TABLE `tbl_base`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cargos`
--
ALTER TABLE `cargos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `ccamas`
--
ALTER TABLE `ccamas`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT de la tabla `deudas`
--
ALTER TABLE `deudas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `pais`
--
ALTER TABLE `pais`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `personal`
--
ALTER TABLE `personal`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT de la tabla `place`
--
ALTER TABLE `place`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `tbl_base`
--
ALTER TABLE `tbl_base`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
