-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-10-2020 a las 05:35:59
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `img` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `banner`
--

INSERT INTO `banner` (`id`, `img`, `fecha`) VALUES
(1, 'vistas/img/banner/banner01.jpg', '2020-10-15 06:50:39'),
(2, 'vistas/img/banner/banner02.jpg', '2020-10-15 06:50:39'),
(3, 'vistas/img/banner/banner03.jpg', '2020-10-15 06:50:52'),
(4, 'vistas/img/banner/banner04.jpg', '2020-10-15 06:50:52');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `categoria` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `categoria`, `fecha`) VALUES
(1, 'Ropa para niños', '2020-10-03 04:28:36'),
(2, 'Pantalones', '2020-09-22 19:58:03'),
(3, 'Abrigos', '2020-09-22 19:58:43'),
(4, 'Ropa Interior', '2020-09-22 19:58:52'),
(5, 'Vestidos', '2020-09-22 19:59:03'),
(6, 'Ternos', '2020-09-22 19:59:14'),
(7, 'Faldas', '2020-09-22 19:59:31'),
(8, 'Accesorios', '2020-09-22 19:59:45'),
(14, 'Leggins', '2020-09-22 20:01:49'),
(15, 'Polos', '2020-09-22 20:02:11'),
(16, 'Ropa de Baño', '2020-09-22 20:02:45'),
(17, 'Calzado', '2020-09-22 20:26:14'),
(18, 'jeans', '2020-09-28 20:34:53'),
(19, 'xddd', '2020-09-30 00:20:17'),
(20, 'Camisero', '2020-10-03 04:28:02'),
(21, 'Leggins', '2020-10-08 15:11:21');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `documento` int(11) NOT NULL,
  `email` text COLLATE utf8_spanish_ci NOT NULL,
  `telefono` text COLLATE utf8_spanish_ci NOT NULL,
  `direccion` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `compras` int(11) NOT NULL,
  `ultima_compra` datetime NOT NULL DEFAULT current_timestamp(),
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `nombre`, `documento`, `email`, `telefono`, `direccion`, `fecha_nacimiento`, `compras`, `ultima_compra`, `fecha`) VALUES
(1, 'Karl Lewis', 342342, 'hola11323@gmail.com', '(342) 343-243-241', 'Av. Los Conquistadores 12311', '2013-02-05', 36, '2020-10-16 10:50:20', '2020-10-16 15:50:20'),
(3, 'Yelena Isinbayev', 3123213, 'hola123@gmail.com', '(333) 275-654-645', 'Av. Los Conquistadores 123', '2000-12-01', 6, '2020-10-20 16:45:26', '2020-10-20 21:45:26'),
(5, 'Radomic Antic', 73347512, 'hola123@gmail.com', '(564) 654-564-564', 'Av. Los Jazmines', '2020-11-04', 11, '2020-10-20 16:42:03', '2020-10-20 21:42:03');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `codigo` text COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `imagen` text COLLATE utf8_spanish_ci NOT NULL,
  `stock` int(11) NOT NULL,
  `precio_compra` float NOT NULL,
  `precio_venta` float NOT NULL,
  `ventas` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `id_categoria`, `codigo`, `descripcion`, `imagen`, `stock`, `precio_compra`, `precio_venta`, `ventas`, `fecha`) VALUES
(8, 2, '2001', 'Shampoo HyS', 'Vista/img/productos/2001/305.jpg', 10, 2, 1005, 6, '2020-10-03 04:04:41'),
(9, 1, '1001', 'Aceite Cocinero Botella 1 Lt', 'Vista/img/productos/1001/162.jpg', 8, 1.5, 2.1, 3, '2020-10-06 22:23:03'),
(10, 2, '2002', 'Pantalon de vestir blanco', 'Vista/img/productos/2002/392.jpg', 6, 40.5, 45, 6, '2020-10-03 04:14:41'),
(11, 14, '14001', 'leggins', 'Vista/img/productos/14001/347.png', 7, 2, 2.8, 3, '2020-10-20 21:45:26'),
(12, 2, '2003', 'cocacola', 'Vista/img/productos/default/example.jpg', 0, 2, 2.8, 11, '2020-10-13 14:49:39'),
(13, 15, '15001', 'Polo estampado FC Barcelonaa', 'Vista/img/productos/15001/385.png', 25, 10, 14, 5, '2020-10-03 04:04:41'),
(14, 1, '1002', 'chau', 'Vista/img/productos/1002/559.png', 40, 2, 3, 0, '2020-10-06 22:23:24'),
(15, 1, '1003', 'pañal', 'Vista/img/productos/default/example.jpg', 0, 1, 1.4, 1, '2020-10-16 15:50:20'),
(16, 14, '14002', 'leggins verdes', 'Vista/img/productos/default/example.jpg', 0, 2, 2.8, 1, '2020-10-16 15:50:20'),
(17, 19, '19001', 'Hola que tal', 'Vista/img/productos/default/example.jpg', 0, 7, 9.1, 1, '2020-10-20 21:35:16'),
(18, 7, '7492185894094', 'Pantalon de vestir rojo', 'Vista/img/productos/7492185894094/367.jpg', 0, 15, 18, 0, '2020-10-14 20:20:15'),
(20, 7, '7492185894094', 'Aceite Cocinero Botella 2 Lt', 'Vista/img/productos/default/example.jpg', 9, 6, 8.4, 1, '2020-10-16 15:50:20'),
(21, 2, '7754111663021', 'plumon', 'Vista/img/productos/7754111663021/466.jpg', 5, 1, 1.5, 15, '2020-10-20 21:45:26');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `rol` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `rol`, `fecha`) VALUES
(1, 'Administrador', '2020-09-18 22:09:10'),
(2, 'Especial', '2020-09-18 22:09:10'),
(3, 'Vendedor', '2020-09-18 22:09:15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tags`
--

CREATE TABLE `tags` (
  `id` int(11) NOT NULL,
  `tag` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `usuario` text COLLATE utf8_spanish_ci NOT NULL,
  `password` text COLLATE utf8_spanish_ci NOT NULL,
  `perfil` int(11) NOT NULL,
  `foto` text COLLATE utf8_spanish_ci NOT NULL,
  `estado` int(11) NOT NULL,
  `ultimo_login` datetime NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `usuario`, `password`, `perfil`, `foto`, `estado`, `ultimo_login`, `fecha`) VALUES
(16, 'Noé Joel Martínez Hancco', 'spainbarca', '$2a$07$usesomesillystringforey0Zu6Moy64lj3SDog2yASzqhUtEu44u', 1, 'Vista/img/usuarios/spainbarca/693.jpg', 1, '2020-10-17 01:17:45', '2020-10-21 00:21:32'),
(20, 'Maira Martinez Hancco xd', 'mairareina', '$2a$07$usesomesillystringforeUrfWGdTq.7AcSuMuljwOCAK4JvaebGS', 2, 'Vista/img/usuarios/mairareina/589.jpg', 0, '2020-10-04 22:21:55', '2020-10-21 00:17:11'),
(21, 'Keylor Navas', 'superkeylor', '$2a$07$usesomesillystringforesARcLdHAU0T7KIViB9wulX6c43JFwDC', 3, 'Vista/img/usuarios/superkeylor/879.png', 0, '2020-10-04 22:55:35', '2020-10-20 21:34:16'),
(25, 'pruebaAdmin', 'meliadmin', '$2a$07$usesomesillystringforegFOeQOp8RK/V8Yn0LZIZwSlh5IkndD.', 1, '', 1, '2020-10-20 19:21:19', '2020-10-21 00:21:19'),
(26, 'pruebaAlmacen', 'melialmacen', '$2a$07$usesomesillystringforePedwoWf0dOFqMNiSzSpMlpLPICxP45K', 2, '', 0, '0000-00-00 00:00:00', '2020-10-20 21:34:14'),
(27, 'pruebaVendedor', 'meliventas', '$2a$07$usesomesillystringfore4E7KmfaC0mVUyYmTfFn05Am7eud.xJ.', 3, '', 1, '0000-00-00 00:00:00', '2020-10-03 03:20:18'),
(29, 'prueba01', '123', '', 1, 'Vista/img/usuarios/123/253.jpg', 1, '0000-00-00 00:00:00', '2020-10-21 00:06:08');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id` int(11) NOT NULL,
  `codigo` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_vendedor` int(11) NOT NULL,
  `productos` text COLLATE utf8_spanish_ci NOT NULL,
  `impuesto` float NOT NULL,
  `neto` float NOT NULL,
  `total` float NOT NULL,
  `metodo_pago` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`id`, `codigo`, `id_cliente`, `id_vendedor`, `productos`, `impuesto`, `neto`, `total`, `metodo_pago`, `fecha`) VALUES
(13, 10001, 3, 16, '[{\"id\":\"8\",\"descripcion\":\"Shampoo HyS\",\"cantidad\":\"1\",\"stock\":\"13\",\"precio\":\"1005\",\"total\":\"1005\"},{\"id\":\"9\",\"descripcion\":\"Aceite Cocinero Botella 1 L\",\"cantidad\":\"2\",\"stock\":\"9\",\"precio\":\"2.1\",\"total\":\"4.2\"}]', 0, 1009.2, 1009.2, 'TC-87897897', '2020-10-02 23:09:49'),
(14, 10002, 1, 16, '[{\"id\":\"8\",\"descripcion\":\"Shampoo HyS\",\"cantidad\":\"3\",\"stock\":\"10\",\"precio\":\"1005\",\"total\":\"3015\"}]', 0, 2015, 2015, 'Efectivo', '2020-07-21 23:14:54'),
(15, 10003, 1, 16, '[{\"id\":\"8\",\"descripcion\":\"Shampoo HyS\",\"cantidad\":\"2\",\"stock\":\"8\",\"precio\":\"1005\",\"total\":\"2010\"}]', 0, 2010, 2010, 'Efectivo', '2020-09-21 23:19:44'),
(16, 10004, 1, 16, '[{\"id\":\"10\",\"descripcion\":\"Pantalon de vestir blanco\",\"cantidad\":\"1\",\"stock\":\"11\",\"precio\":\"45\",\"total\":\"45\"},{\"id\":\"9\",\"descripcion\":\"Aceite Cocinero Botella 1 L\",\"cantidad\":\"1\",\"stock\":\"10\",\"precio\":\"2.1\",\"total\":\"2.1\"}]', 0, 47.1, 47.1, 'Efectivo', '2020-10-02 23:07:34'),
(17, 10005, 1, 16, '[{\"id\":\"10\",\"descripcion\":\"Pantalon de vestir blanco\",\"cantidad\":\"3\",\"stock\":\"8\",\"precio\":\"45\",\"total\":\"135\"},{\"id\":\"13\",\"descripcion\":\"Polo estampado FC Barcelonaa\",\"cantidad\":\"5\",\"stock\":\"25\",\"precio\":\"14\",\"total\":\"70\"},{\"id\":\"9\",\"descripcion\":\"Aceite Cocinero Botella 1 L\",\"cantidad\":\"2\",\"stock\":\"8\",\"precio\":\"2.1\",\"total\":\"4.2\"},{\"id\":\"8\",\"descripcion\":\"Shampoo HyS\",\"cantidad\":\"3\",\"stock\":\"10\",\"precio\":\"1005\",\"total\":\"3015\"},{\"id\":\"12\",\"descripcion\":\"cocacola\",\"cantidad\":\"1\",\"stock\":\"-1\",\"precio\":\"2.8\",\"total\":\"2.8\"}]', 0, 3227, 3227, 'Efectivo', '2020-10-03 04:04:41'),
(18, 10006, 3, 21, '[{\"id\":\"10\",\"descripcion\":\"Pantalon de vestir blanco\",\"cantidad\":\"2\",\"stock\":\"6\",\"precio\":\"45\",\"total\":\"90\"}]', 0, 90, 90, 'Efectivo', '2020-10-03 04:14:41'),
(19, 10007, 1, 16, '[{\"id\":\"12\",\"descripcion\":\"cocacola\",\"cantidad\":\"10\",\"stock\":\"0\",\"precio\":\"2.8\",\"total\":\"28\"}]', 0.28, 28, 28.28, 'Efectivo', '2020-10-13 14:49:39'),
(21, 10008, 5, 25, '[{\"id\":\"17\",\"descripcion\":\"7492185894094\",\"cantidad\":\"1\",\"stock\":\"0\",\"precio\":\"9.1\",\"total\":\"9.1\"}]', 0, 9.1, 9.1, 'TC-43213213', '2020-10-14 20:29:41'),
(22, 10009, 1, 16, '[{\"id\":\"20\",\"descripcion\":\"Aceite Cocinero Botella 2 Lt\",\"cantidad\":\"1\",\"stock\":\"9\",\"precio\":\"8.4\",\"total\":\"8.4\"},{\"id\":\"16\",\"descripcion\":\"leggins verdes\",\"cantidad\":\"1\",\"stock\":\"0\",\"precio\":\"2.8\",\"total\":\"2.8\"},{\"id\":\"15\",\"descripcion\":\"pañal\",\"cantidad\":\"1\",\"stock\":\"0\",\"precio\":\"1.4\",\"total\":\"1.4\"}]', 0.126, 12.6, 12.726, 'TC-321321312', '2020-10-16 15:50:20'),
(23, 10010, 5, 16, '[{\"id\":\"21\",\"descripcion\":\"plumon\",\"cantidad\":\"10\",\"stock\":\"10\",\"precio\":\"1.5\",\"total\":\"15\"}]', 2.7, 15, 17.7, 'Efectivo', '2020-10-20 21:42:03'),
(24, 10011, 3, 16, '[{\"id\":\"11\",\"descripcion\":\"leggins\",\"cantidad\":\"3\",\"stock\":\"7\",\"precio\":\"2.8\",\"total\":\"8.4\"},{\"id\":\"21\",\"descripcion\":\"plumon\",\"cantidad\":\"5\",\"stock\":\"5\",\"precio\":\"1.5\",\"total\":\"7.5\"}]', 0, 15.9, 15.9, 'Efectivo', '2020-10-20 21:45:26');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
