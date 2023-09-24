-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-09-2023 a las 00:59:51
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


--
-- Base de datos: `local limpieza`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `Cliente` (
  `dni` int(8) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (dni)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `Pedido` (
  `num_pedido` int(11) NOT NULL,
  `dni_cliente` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `fecha_pedido` int(11) NOT NULL,
  PRIMARY KEY (num_pedido)
  FOREIGN KEY (dni_cliente) REFERENCES Cliente(dni)
  FOREIGN KEY (id_producto) REFERENCES Producto(id)

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `Producto` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `precio` float NOT NULL,
  `stock` int(11) NOT NULL,
  `sector` varchar(50) NOT NULL, 
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
COMMIT;

