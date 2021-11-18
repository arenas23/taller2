-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-11-2021 a las 23:51:39
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `marana`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `marca` varchar(50) NOT NULL,
  `precio` int(11) NOT NULL,
  `foto` varchar(300) NOT NULL,
  `descripcion` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `nombre`, `marca`, `precio`, `foto`, `descripcion`) VALUES
(1, 'chapa 864', 'gato', 40000, 'https://http2.mlstatic.com/D_NQ_NP_780032-MCO43226748985_082020-O.jpg', 'cerradura dos machos sobreponer clasica, pestillo automatico picaporte que retrae desde exterior con llave y desde el interior con manija, 1 macho rectangular en zamac de 3 pasos.'),
(2, 'bombillo 30w', 'kaalpanik', 20000, 'https://http2.mlstatic.com/D_NQ_NP_741654-MCO44941144068_022021-V.jpg', 'bombillo que sirve para alumbrar mucho :)'),
(3, 'panel 18w redondo sobreponer', 'clark', 12000, 'https://cdn2.totalcode.net/homesentry/product-zoom/es/panel-clark-1798-led-18w-luz-blanca-23cm-redondo-sobreponer-2.jpg', 'panel led para sobre poner , 18w voltaje 110v o 220v'),
(4, 'reflector led 50w ', 'lexmana', 60000, 'https://lirp.cdn-website.com/f2af522d/dms3rep/multi/opt/SPOTSMD-50W-640w.jpg', 'reflector de 50w marca lexmana para exterior ip65'),
(5, 'enchufe ', 'codelca', 3500, 'https://http2.mlstatic.com/D_NQ_NP_784687-MCO41933371036_052020-O.jpg', 'enchufe aereo encauchetado sin polo a tierra 15A , 110v '),
(6, 'enchufe p/t', 'codelca', 4500, 'https://www.codelca.com/files/productos/HD/SKU%201797.jpg', 'enchufe aereo con polo a tierra encauchetado 15A '),
(8, 'toma aereo p/t', 'codelca', 5600, 'https://i.linio.com/p/c737b48986c46212434ad26c13333d94-product.jpg', 'toma aereo polo a tierra 15A 110v');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
