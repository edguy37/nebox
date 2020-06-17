-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-05-2020 a las 05:31:44
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `nebox_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `cat_id` tinyint(12) NOT NULL,
  `categoria` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `imagen` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`cat_id`, `categoria`, `imagen`) VALUES
(1, 'dentista', 'https://www.nebox.com.mx/sl/categorias/dentista.jpg'),
(2, 'desayunos', 'https://www.nebox.com.mx/sl/categorias/desayunos.jpg'),
(3, 'logos', 'https://www.nebox.com.mx/sl/categorias/logos.jpg'),
(4, 'publicidad', 'https://www.nebox.com.mx/sl/categorias/lonas-publicitarias.jpg'),
(5, 'peinado', 'https://www.nebox.com.mx/sl/categorias/maquillaje-y-peinado.jpg'),
(6, 'micheladas', 'https://www.nebox.com.mx/sl/categorias/micheladas.jpg'),
(7, 'postres', 'https://www.nebox.com.mx/sl/categorias/postres.jpg'),
(8, 'comida', 'https://www.nebox.com.mx/sl/categorias/restaurantes.jpg'),
(9, 'uñas', 'https://www.nebox.com.mx/sl/categorias/unias.jpg'),
(10, 'viajes', 'https://www.nebox.com.mx/sl/categorias/viajes.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `negocios`
--

CREATE TABLE `negocios` (
  `nid` tinyint(12) NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` varchar(6000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `logo` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'http://www.upyapp.com/images/emptyview.png',
  `img1` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'http://www.upyapp.com/images/emptyview.png',
  `img2` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'http://www.upyapp.com/images/emptyview.png',
  `img3` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'http://www.upyapp.com/images/emptyview.png',
  `img4` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'http://www.upyapp.com/images/emptyview.png',
  `img5` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'http://www.upyapp.com/images/emptyview.png',
  `fecha_reg` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `correo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `num_tel` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `whats` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `direccion` varchar(100) COLLATE utf8_unicode_ci DEFAULT 'Sin direccion',
  `precio` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT '1',
  `promocion` int(40) NOT NULL DEFAULT '0',
  `facebook` VARCHAR(200) COLLATE utf8_unicode_ci DEFAULT NULL;
  `insta` VARCHAR(200) COLLATE utf8_unicode_ci DEFAULT NULL;
  `twitter` VARCHAR(200)COLLATE utf8_unicode_ci DEFAULT NULL;
  PRIMARY KEY (`promo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `negocios`
--

INSERT INTO `chicas` (`CH_ID`, `NOMBRE`, `DESCRIPCION`, `LOGO`, `IMG1`, `IMG2`, `IMG3`, `IMG4`, `IMG5`, `FECHA_REG`, `CORREO`, `NUM_TEL`, `CATEGORIAS`, `CATEGORIA`, `UBICACION`, `PRECIO`, `ACTIVO`, `PROMOCION`) VALUES
(68, 'Karyme', ' CURVAS DE INFARTO, CERO LONJA Y ESTRIAS, POR SI TIENES DUDAS LAS FOTOS ME LAS TOME EN UN MOTEL DE LA CIUDAD, POR TU SEGURIDAD Y LA MIA CUENTO CON MI REGISTRO DE SALUBRIDAD LEGAL................ Y VIP MARCAME YO TE LO ASEGURO ??', 'http://localhost/sexylove/girls/nalgona2.png', 'http://upyapp.com/sexylove/nalgona1.png', 'http://upyapp.com/sexylove/nalgona2.png', 'http://upyapp.com/sexylove/nalgona3.png', 'http://upyapp.com/sexylove/nalgona4.png', 'http://upyapp.com/sexylove/nalgona5.png', '2017-11-14 01:46:50', '', '0012356421', NULL, 'Nalgona', 'Cancún', '$2000', 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ubicaciones`
--

CREATE TABLE `ubicaciones` (
  `UBI_ID` tinyint(12) NOT NULL,
  `UBICACION` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `ubicaciones`
--

INSERT INTO `ubicaciones` (`UBI_ID`, `UBICACION`) VALUES
(1, 'Cancún'),
(2, 'Mérida Yucatán'),
(3, 'Ciudad del Carmen Campeche'),
(4, 'México DF'),
(5, 'Estado de México'),
(6, 'Cozumel'),
(7, 'Isla Mujeres'),
(8, 'Tulum'),
(9, 'Playa del Carmen');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`CAT_ID`);

--
-- Indices de la tabla `chicas`
--
ALTER TABLE `chicas`
  ADD PRIMARY KEY (`CH_ID`),
  ADD KEY `CATEGORIAS` (`CATEGORIAS`);

--
-- Indices de la tabla `ubicaciones`
--
ALTER TABLE `ubicaciones`
  ADD PRIMARY KEY (`UBI_ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `CAT_ID` tinyint(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT de la tabla `chicas`
--
ALTER TABLE `chicas`
  MODIFY `CH_ID` tinyint(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT de la tabla `ubicaciones`
--
ALTER TABLE `ubicaciones`
  MODIFY `UBI_ID` tinyint(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `chicas`
--
ALTER TABLE `chicas`
  ADD CONSTRAINT `chicas_ibfk_1` FOREIGN KEY (`CATEGORIAS`) REFERENCES `categorias` (`CAT_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- Horarios

CREATE TABLE horarios (
    negocio_id tinyint(12) NOT NULL,
    open_t TIME,
    close_t TIME,
    day int NOT NULL,
    CONSTRAINT fk_nid FOREIGN KEY(negocio_id) REFERENCES negocios(nid)
);
INSERT INTO horarios(negocio_id, open_t, close_t, day) VALUES (51, '07:00:00', '16:00:00', 0);


CREATE TABLE horario (
    negocio_id tinyint(12) NOT NULL,
    lunes VARCHAR(50),
    martes VARCHAR(50),
    miercoles VARCHAR(50),
    jueves VARCHAR(50),
    viernes VARCHAR(50),
    sabado VARCHAR(50),
    domingo VARCHAR(50),
    CONSTRAINT fk_negid FOREIGN KEY(negocio_id) REFERENCES negocios(nid)
);
INSERT INTO horario(negocio_id, lunes, martes, miercoles, jueves, viernes, sabado, domingo) VALUES (51, '07:00 - 16:00', '07:00 - 16:00', '07:00 - 16:00', '07:00 - 16:00','07:00 - 16:00','08:00 - 13:00', 'Cerrado');

CREATE TABLE extras (
    negocio_id tinyint(12) NOT NULL,
 	  tarjeta int(40) DEFAULT 0,
    alcohol int(40) DEFAULT 0,
    estacionamiento int(40) DEFAULT 0,
    est_bicis int(40) DEFAULT 0,
    CONSTRAINT fk_negocioid FOREIGN KEY(negocio_id) REFERENCES negocios(nid)
);
INSERT INTO extras(negocio_id, tarjeta, alcohol, estacionamiento, est_bicis) VALUES (51, 1, 1, 1, 1);

CREATE TABLE promociones (
    promoid tinyint(12) NOT NULL AUTO_INCREMENT,
    valor varchar(50) COLLATE utf8_unicode_520_ci,
    descripcion_promo varchar(250),
    img varchar(200) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'http://www.upyapp.com/images/emptyview.png',
    PRIMARY KEY (`promo_id`)
);
INSERT INTO promociones(valor, descripcion_promo) VALUES (20, 'maquillaje');

CREATE TABLE negocio_promos (
    negocio_id tinyint(12) NOT NULL,
    promo_id tinyint(12) NOT NULL,
    CONSTRAINT fk_negpromoid FOREIGN KEY(negocio_id) REFERENCES negocios(nid),
    CONSTRAINT fk_promoid FOREIGN KEY(promo_id) REFERENCES promociones(promo_id)
);
INSERT INTO negocio_promos(negocio_id, promo_id) VALUES (51, 0);
