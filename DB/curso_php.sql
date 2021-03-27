-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-03-2021 a las 04:47:54
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
-- Base de datos: `curso_php`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datospersonales`
--

CREATE TABLE `datospersonales` (
  `nif` varchar(5) DEFAULT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `edad` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `datospersonales`
--

INSERT INTO `datospersonales` (`nif`, `nombre`, `edad`) VALUES
('art45', 'jack', 24),
('art41', 'angely', 12),
('art43', 'maria', 29),
('..', '..', 0),
('jack', '24', 0),
('jack', '45', 0),
('jack', '24', 0),
('jack', '24', 0),
('angel', '50', 0),
('hty43', 'angely', 17),
('gty54', 'marco', 50);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `CÓDIGOARTÍCULO` varchar(4) NOT NULL,
  `SECCIÓN` varchar(10) DEFAULT NULL,
  `NOMBREARTÍCULO` varchar(19) DEFAULT NULL,
  `PRECIO` varchar(10) DEFAULT NULL,
  `FECHA` varchar(10) DEFAULT NULL,
  `IMPORTADO` varchar(9) DEFAULT NULL,
  `PAÍSDEORIGEN` varchar(9) DEFAULT NULL,
  `FOTO` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`CÓDIGOARTÍCULO`, `SECCIÓN`, `NOMBREARTÍCULO`, `PRECIO`, `FECHA`, `IMPORTADO`, `PAÍSDEORIGEN`, `FOTO`) VALUES
('', NULL, NULL, NULL, NULL, NULL, NULL, '1554591966_143306_1554592537_noticia_normal.jpg'),
('AR02', 'CONFECCIÓN', 'TRAJE CABALLERO', '284,58', '11/03/2002', 'VERDADERO', 'ALEMANIA', NULL),
('AR03', 'JUGUETERÍA', 'COCHE TELEDIRIGIDO', '159,45', '26/05/2002', 'VERDADERO', 'MARRUECOS', NULL),
('AR04', 'DEPORTES', 'RAQUETA TENIS', '93,47', '20/03/2000', 'VERDADERO', 'USA', NULL),
('AR06', 'DEPORTES', 'MANCUERNAS', '60,00', '13/09/2000', 'VERDADERO', 'USA', NULL),
('AR07', 'CONFECCIÓN', 'SERRUCHO', '30,20', '23/03/2001', 'VERDADERO', 'FRANCIA', NULL),
('AR08', 'JUGUETERÍA', 'CORREPASILLOS', '103,34', '11/04/2000', 'VERDADERO', 'JAPÓN', NULL),
('AR09', 'CONFECCIÓN', 'PANTALÓN SEÑORA', '174,23', '10/01/2000', 'VERDADERO', 'MARRUECOS', NULL),
('AR10', 'JUGUETERÍA', 'CONSOLA VIDEO', '442,54', '24/09/2002', 'VERDADERO', 'USA', NULL),
('AR11', 'CERÁMICA', 'TUBOS', '168,43', '04/02/2000', 'VERDADERO', 'CHINA', NULL),
('AR12', 'FERRETERÍA', 'LLAVE INGLESA', '24,40', '23/05/2001', 'VERDADERO', 'USA', NULL),
('AR13', 'CONFECCIÓN', 'CAMISA CABALLERO', '67,13', '11/08/2002', 'FALSO', 'ESPAÑA', NULL),
('AR14', 'JUGUETERÍA', 'TREN ELÉCTRICO', '1.505,38', '03/07/2001', 'VERDADERO', 'JAPÓN', NULL),
('AR15', 'CERÁMICA', 'PLATO DECORATIVO', '54,09', '07/06/2000', 'VERDADERO', 'CHINA', NULL),
('AR16', 'FERRETERÍA', 'ALICATES', '6,74', '17/04/2000', 'VERDADERO', 'ITALIA', NULL),
('AR17', 'JUGUETERÍA', 'MUÑECA ANDADORA', '105,06', '04/01/2001', 'FALSO', 'ESPAÑA', NULL),
('AR18', 'DEPORTES', 'PISTOLA OLÍMPICA', '46,73', '02/02/2001', 'VERDADERO', 'SUECIA', NULL),
('AR19', 'CONFECCIÓN', 'BLUSA SRA.', '101,06', '18/03/2000', 'VERDADERO', 'CHINA', NULL),
('AR20', 'CERÁMICA', 'JUEGO DE TE', '43,27', '15/01/2001', 'VERDADERO', 'CHINA', NULL),
('AR21', 'CERÁMICA', 'CENICERO', '19,75', '02/07/2001', 'VERDADERO', 'JAPÓN', NULL),
('AR22', 'FERRETERÍA', 'MARTILLO', '11,40', '04/09/2001', 'FALSO', 'ESPAÑA', NULL),
('AR23', 'CONFECCIÓN', 'CAZADORA PIEL', '522,69', '10/07/2001', 'VERDADERO', 'ITALIA', NULL),
('AR24', 'DEPORTES', 'BALÓN RUGBY', '111,64', '11/11/2000', 'VERDADERO', 'USA', NULL),
('AR25', 'DEPORTES', 'BALÓN BALONCESTO', '75,27', '25/06/2001', 'VERDADERO', 'JAPÓN', NULL),
('AR26', 'JUGUETERÍA', 'FUERTE DE SOLDADOS', '143,70', '25/11/2000', 'VERDADERO', 'JAPÓN', NULL),
('AR27', 'CONFECCIÓN', 'ABRIGO CABALLERO', '500.000,00', '05/04/2002', 'VERDADERO', 'ITALIA', NULL),
('AR28', 'DEPORTES', 'BALÓN FÚTBOL', '43,91', '04/07/2002', 'FALSO', 'ESPAÑA', NULL),
('AR29', 'CONFECCIÓN', 'ABRIGO SRA', '360,07', '03/05/2001', 'VERDADERO', 'MARRUECOS', NULL),
('AR30', 'FERRETERÍA', 'DESTORNILLADOR', '9,06', '20/02/2002', 'VERDADERO', 'FRANCIA', NULL),
('AR31', 'JUGUETERÍA', 'PISTOLA CON SONIDOS', '57,25', '15/04/2001', 'FALSO', 'ESPAÑA', NULL),
('AR32', 'DEPORTES', 'CRONÓMETRO', '439,18', '03/01/2002', 'VERDADERO', 'USA', NULL),
('AR33', 'CERÁMICA', 'MACETA', '29,04', '23/02/2000', 'FALSO', 'ESPAÑA', NULL),
('AR34', 'OFICINA', 'PIE DE LÁMPARA', '39,76', '27/05/2001', 'VERDADERO', 'TURQUÍA', NULL),
('AR35', 'FERRETERÍA', 'LIMA GRANDE', '22,07', '10/08/2002', 'FALSO', 'ESPAÑA', NULL),
('AR36', 'FERRETERÍA', 'JUEGO DE BROCAS', '15,10', '04/07/2002', 'VERDADERO', 'TAIWÁN', NULL),
('AR37', 'CONFECCIÓN', 'CINTURÓN DE PIEL', '4,33', '12/05/2002', 'FALSO', 'ESPAÑA', NULL),
('AR38', 'DEPORTES', 'CAÑA DE PESCA', '270,00', '14/02/2000', 'VERDADERO', 'USA', NULL),
('AR39', 'CERÁMICA', 'JARRA CHINA', '127,77', '02/09/2002', 'VERDADERO', 'CHINA', NULL),
('AR40', 'DEPORTES', 'BOTA ALPINISMO', '144,00', '05/05/2002', 'FALSO', 'ESPAÑA', NULL),
('AR41', 'DEPORTES', 'PALAS DE PING PONG', '21,60', '02/02/2002', 'FALSO', 'ESPAÑA', NULL),
('frt5', 'DEPORTES', 'PESA', '3400', '12/12/2021', 'TRUE', 'USA', NULL),
('frt6', 'DEPORTES', 'PESA', '3400', '12/12/2021', 'TRUE', 'USA', NULL),
('ft67', 'Suecia', 'prueba', NULL, NULL, NULL, 'CERÁMICA', NULL),
('gt32', 'DEPORTES', 'guantes ufc', '345', NULL, NULL, 'usa', NULL),
('gt65', 'CERAMICA', 'pared', '345', NULL, NULL, 'italia', NULL),
('gy6', 'Seleccione', 'Remo', NULL, NULL, NULL, 'Costa Ric', NULL),
('hy67', 'DEPORTES', 'MANCUERNA', '3400', NULL, NULL, 'Costa Ric', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `contraseña` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `usuario`, `contraseña`) VALUES
(1, 'jack2020', '$2y$10$YSfEwFYi3EdYftD9eiaNF.6q60j2t.YqJg5Bl16Q7y7l6J6mbggta'),
(2, 'prueba2020', '$2y$10$waIWwIlsJsrVYT3L6Mob1OuS5BVdcBMsQnvPz9xVUwtgc8cZVhOpu'),
(3, 'maria123', '$2y$10$/vB9fNtbZhmQw2hzNXjwru7012PzAYbbWfkj6SHwcowF37F7LlA7C'),
(5, 'jack1919', '$2y$10$dhx/Gx4bvEBglnuaSvrOD.op4.ZthvoDyVNPu4O1KuqkoQ6mEiqey');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`CÓDIGOARTÍCULO`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
