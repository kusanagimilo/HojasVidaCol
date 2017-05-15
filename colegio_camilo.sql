-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 13, 2017 at 11:04 PM
-- Server version: 5.7.16
-- PHP Version: 7.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `colegio_camilo`
--

-- --------------------------------------------------------

--
-- Table structure for table `conocimientos_habilidades`
--

CREATE TABLE `conocimientos_habilidades` (
  `id_conocimientos_habilidades` int(11) NOT NULL,
  `id_hoja_vida` int(11) NOT NULL,
  `conocimiento_habilidad` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `docente`
--

CREATE TABLE `docente` (
  `id_docente` int(11) NOT NULL,
  `nombres` varchar(200) DEFAULT NULL,
  `apellidos` varchar(200) DEFAULT NULL,
  `tipo_identificacion` varchar(100) DEFAULT NULL,
  `identificacion` varchar(100) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `estado_civil` varchar(100) DEFAULT NULL,
  `telefono` varchar(100) DEFAULT NULL,
  `direccion` varchar(200) DEFAULT NULL,
  `correo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `docente`
--

INSERT INTO `docente` (`id_docente`, `nombres`, `apellidos`, `tipo_identificacion`, `identificacion`, `fecha_nacimiento`, `estado_civil`, `telefono`, `direccion`, `correo`) VALUES
(4, 'Juan Camilo', 'Cruz Franco', 'CÃ©dula de ciudadanÃ­a', '1019075739', '1992-10-31', 'Soltero(a)', '3006163077', 'Calle 139B #114', 'kusanagimilo@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `experiencia`
--

CREATE TABLE `experiencia` (
  `id_experiencia` int(11) NOT NULL,
  `id_hoja_vida` int(11) NOT NULL,
  `empresa` int(200) DEFAULT NULL,
  `cargo` int(200) DEFAULT NULL,
  `area` varchar(200) DEFAULT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `fecha_fin` date DEFAULT NULL,
  `funcion` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `formacion`
--

CREATE TABLE `formacion` (
  `id_formacion` int(11) NOT NULL,
  `id_hoja_vida` int(11) NOT NULL,
  `centro_educativo` varchar(200) DEFAULT NULL,
  `titulo_obtenido` varchar(200) DEFAULT NULL,
  `fecha_graduacion` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hoja_vida`
--

CREATE TABLE `hoja_vida` (
  `id_hoja_vida` int(11) NOT NULL,
  `id_docente` int(11) NOT NULL,
  `fecha_creacion_hoja_vida` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `cargo_hoja_vida` varchar(200) DEFAULT NULL,
  `descripcion_perfil_profesional` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nombres` varchar(200) NOT NULL,
  `apellidos` varchar(200) NOT NULL,
  `correo` varchar(200) NOT NULL,
  `telefono` varchar(100) NOT NULL,
  `rol` varchar(100) NOT NULL,
  `clave` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `conocimientos_habilidades`
--
ALTER TABLE `conocimientos_habilidades`
  ADD PRIMARY KEY (`id_conocimientos_habilidades`),
  ADD KEY `id_hoja_vida_con_idx` (`id_hoja_vida`);

--
-- Indexes for table `docente`
--
ALTER TABLE `docente`
  ADD PRIMARY KEY (`id_docente`);

--
-- Indexes for table `experiencia`
--
ALTER TABLE `experiencia`
  ADD PRIMARY KEY (`id_experiencia`),
  ADD KEY `id_hoja_vida_exp_idx` (`id_hoja_vida`);

--
-- Indexes for table `formacion`
--
ALTER TABLE `formacion`
  ADD PRIMARY KEY (`id_formacion`),
  ADD KEY `id_hoja_vida_idx` (`id_hoja_vida`);

--
-- Indexes for table `hoja_vida`
--
ALTER TABLE `hoja_vida`
  ADD PRIMARY KEY (`id_hoja_vida`),
  ADD KEY `id_docente_idx` (`id_docente`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `conocimientos_habilidades`
--
ALTER TABLE `conocimientos_habilidades`
  MODIFY `id_conocimientos_habilidades` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `docente`
--
ALTER TABLE `docente`
  MODIFY `id_docente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `experiencia`
--
ALTER TABLE `experiencia`
  MODIFY `id_experiencia` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `formacion`
--
ALTER TABLE `formacion`
  MODIFY `id_formacion` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hoja_vida`
--
ALTER TABLE `hoja_vida`
  MODIFY `id_hoja_vida` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `conocimientos_habilidades`
--
ALTER TABLE `conocimientos_habilidades`
  ADD CONSTRAINT `id_hoja_vida_con` FOREIGN KEY (`id_hoja_vida`) REFERENCES `hoja_vida` (`id_hoja_vida`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `experiencia`
--
ALTER TABLE `experiencia`
  ADD CONSTRAINT `id_hoja_vida_exp` FOREIGN KEY (`id_hoja_vida`) REFERENCES `hoja_vida` (`id_hoja_vida`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `formacion`
--
ALTER TABLE `formacion`
  ADD CONSTRAINT `id_hoja_vida` FOREIGN KEY (`id_hoja_vida`) REFERENCES `hoja_vida` (`id_hoja_vida`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hoja_vida`
--
ALTER TABLE `hoja_vida`
  ADD CONSTRAINT `id_docente` FOREIGN KEY (`id_docente`) REFERENCES `docente` (`id_docente`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
