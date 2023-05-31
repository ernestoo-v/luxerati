-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-05-2023 a las 12:52:14
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pfc`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `2_coches`
--

CREATE TABLE `2_coches` (
  `id` int(11) NOT NULL,
  `marca_coche` varchar(100) NOT NULL,
  `modelo_coche` varchar(100) NOT NULL,
  `ano_coche` int(11) NOT NULL,
  `precio_coche` int(11) NOT NULL,
  `color_coche` varchar(50) NOT NULL,
  `velocidad_coche` decimal(10,2) NOT NULL,
  `potencia_coche` int(11) NOT NULL,
  `consumo_coche` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `2_coches`
--

INSERT INTO `2_coches` (`id`, `marca_coche`, `modelo_coche`, `ano_coche`, `precio_coche`, `color_coche`, `velocidad_coche`, `potencia_coche`, `consumo_coche`) VALUES
(1, 'Ferrari', 'LaFerrari', 2013, 1300000, 'Red', '1.40', 963, '14.00'),
(2, 'Bugatti', 'Chiron', 2016, 249209, 'Blue', '2.40', 1500, '22.30'),
(3, 'Lamborghini', 'Aventador SVJ', 2018, 422290, 'Yellow', '2.80', 770, '19.60'),
(4, 'Rolls-Royce', 'Phantom V', 1961, 482878, 'Black', '5.90', 460, '22.80'),
(5, 'McLaren', 'Speedtail', 2018, 2011920, 'Orange', '3.00', 760, '15.60'),
(6, 'Porsche', '911 GT3 RS', 2022, 226208, 'Silver', '3.20', 521, '19.20'),
(7, 'Aston Martin', 'Valkyrie', 2022, 3234780, 'Green', '2.10', 1155, '21.40'),
(8, 'Bugatti', 'Centodieci', 2021, 8000000, 'White', '2.40', 1600, '17.00'),
(9, 'Koenigsegg', 'Jesko', 2020, 3190125, 'Silver', '2.50', 1622, '19.00'),
(10, 'Pagani', 'Huayra BC', 2016, 3000000, 'Blue', '3.30', 830, '20.00'),
(11, 'Pininfarina', 'Battista', 2020, 2200000, 'Black', '1.79', 1900, '16.00'),
(12, 'Rimac', 'C_Two', 2018, 1940868, 'Grey', '1.85', 1914, '18.40'),
(13, 'Mercedes-Benz', 'AMG One', 2022, 2500000, 'Silver', '2.90', 574, '8.70'),
(17, 'Lamborghini', 'Sian FKP 37', 2021, 3500000, 'Green', '2.00', 990, '3.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `2_eventos`
--

CREATE TABLE `2_eventos` (
  `id` int(11) NOT NULL,
  `nombre_evento` varchar(100) NOT NULL,
  `fecha_evento` varchar(150) NOT NULL,
  `descripcion_evento` varchar(300) NOT NULL,
  `href_evento` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `2_eventos`
--

INSERT INTO `2_eventos` (`id`, `nombre_evento`, `fecha_evento`, `descripcion_evento`, `href_evento`) VALUES
(4, 'F1 The Exhibition Madrid', 'From March 24, 2023, run until July 16, 2023.', 'Independently curated and with the support of the sport\'s most celebrated personalities the exhibition provides a unique portrayal of the sport\'s rich history, its present day dramas, and the future innovations that lie ahead.', 'https://f1exhibition.com'),
(6, 'Concorso d\' Eleganza d\'Este', 'From 19th to 21st May 2023', 'It is a prestigious international event that showcases some of the world\'s finest classic cars.', 'https://www.concorsodeleganzavilladeste.com'),
(7, 'Goodwood Motor Festival', 'From 13th to 16st July 2023', 'The world\'s greatest celebration of motorsport and car culture', 'https://www.goodwood.com/motorsport/festival-of-speed/');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `2_favoritos`
--

CREATE TABLE `2_favoritos` (
  `id_favorito` int(11) NOT NULL,
  `id_coche` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `2_noticias`
--

CREATE TABLE `2_noticias` (
  `id` int(11) NOT NULL,
  `nombre_noticias` varchar(300) NOT NULL,
  `href_noticia` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `2_noticias`
--

INSERT INTO `2_noticias` (`id`, `nombre_noticias`, `href_noticia`) VALUES
(1, 'Ferrari CEO welcomes European compromise on e-fuels', 'https://auto.economictimes.indiatimes.com/news/passenger-vehicle/ferrari-ceo-welcomes-european-compromise-on-e-fuels/99038501?redirect=1'),
(2, 'Tesla Wins Best Overall Luxury Brand Again, Kelley Blue Book', 'https://insideevs.com/news/661097/tesla-wins-best-overall-luxury-brand-kelley-blue-book/'),
(3, 'Japanese Luxury Cars We\'d Buy Over A Mercedes-Benz Any Day', 'https://www.hotcars.com/japanese-luxury-cars-wed-buy-over-mercedes-benz/'),
(4, 'Honda F1 partnership options assessed as MAJOR outfit linked', 'https://www.gpfans.com/en/f1-news/105903/honda-f1-power-unit-aston-martin-linked/'),
(5, 'Hyundai commits to $18 billion spend in shift to electric cars', 'https://gulfbusiness.com/hyundai-commits-to-18bn-spend/'),
(9, 'This 1989 Turbo R Custom Is How a 15-Year-Old Brunei Prince Saved Bentley Motors', 'https://www.autoevolution.com/news/this-1989-turbo-r-custom-is-how-a-15-year-old-brunei-prince-saved-bentley-motors-213259.html');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `2_sorteos`
--

CREATE TABLE `2_sorteos` (
  `id` int(11) NOT NULL,
  `nombre_sorteo` varchar(100) NOT NULL,
  `descripcion_sorteo` varchar(500) NOT NULL,
  `fecha_fin_sorteo` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `2_sorteos`
--

INSERT INTO `2_sorteos` (`id`, `nombre_sorteo`, `descripcion_sorteo`, `fecha_fin_sorteo`) VALUES
(12, 'Finca de los Arandinos', 'Es el primer proyecto enoturístico en La Rioja que integra bodega, hotel, restaurante y spa y ha nacido para inspirarte. Te invitamos a vivir una experiencia inolvidable en uno de los mejores hoteles – bodega en La Rioja donde la fusión de diseño, gastronomía, enoturismo y naturaleza te harán vivir una experiencia inolvidable.', 'Este sorteo finaliza el 24/02/2025'),
(13, 'Montblanc 1858 Iced Sea Automatic Date', 'El primer reloj de buceo deportivo de Montblanc, se caracteriza por el motivo de glaciar de la esfera, gracias al cual nos adentramos en las profundidades de esta masa de hielo. Esta esfera azul con motivo de glaciar se inspira en el Mer de Glace (mar de Hielo, en español), el principal glaciar del macizo del Mont Blanc.', 'Este sorteo finaliza el 31/12/2022');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `2_users`
--

CREATE TABLE `2_users` (
  `id` int(11) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `password` varchar(70) DEFAULT NULL,
  `rol_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `2_users`
--

INSERT INTO `2_users` (`id`, `username`, `email`, `password`, `rol_id`) VALUES
(35, 'ser', 'sergio@makina.com', '$2y$10$DwJXEi0NGsBX/XvU9n39dOL2wjT2oxCAoczb4fdFW19F3dsi8K9W2', 2),
(36, 'ana', 'ana@gmail.com', '$2y$10$R4zY4iDkI/Pstu4VUdd1f.jRxk6x0vuY7reodkXHs.gmOoMcDjL.S', 1),
(37, 'er', 'evillarperez@gmail.com', '$2y$10$d1LxrVsTL5.uFokhqrWrYe9Jc7vZPRDhYgzlcZ4b95J8tUhvICviu', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `2_coches`
--
ALTER TABLE `2_coches`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `2_eventos`
--
ALTER TABLE `2_eventos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `2_favoritos`
--
ALTER TABLE `2_favoritos`
  ADD PRIMARY KEY (`id_favorito`);

--
-- Indices de la tabla `2_noticias`
--
ALTER TABLE `2_noticias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `2_sorteos`
--
ALTER TABLE `2_sorteos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `2_users`
--
ALTER TABLE `2_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `2_coches`
--
ALTER TABLE `2_coches`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `2_eventos`
--
ALTER TABLE `2_eventos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `2_favoritos`
--
ALTER TABLE `2_favoritos`
  MODIFY `id_favorito` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT de la tabla `2_noticias`
--
ALTER TABLE `2_noticias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `2_sorteos`
--
ALTER TABLE `2_sorteos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `2_users`
--
ALTER TABLE `2_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
