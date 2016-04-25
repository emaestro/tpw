-- --------------------------------------------------------
-- Host:                         localhost
-- Versión del servidor:         5.7.10-log - MySQL Community Server (GPL)
-- SO del servidor:              Win32
-- HeidiSQL Versión:             9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Volcando estructura de base de datos para programacion_web
CREATE DATABASE IF NOT EXISTS `programacion_web` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `programacion_web`;


-- Volcando estructura para tabla programacion_web.personas
CREATE TABLE IF NOT EXISTS `personas` (
  `personas_id` tinyint(3) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `paterno` varchar(30) NOT NULL,
  `materno` varchar(30) NOT NULL,
  `nombres` varchar(35) NOT NULL,
  `creado_en` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `actualizado_en` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`personas_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla programacion_web.personas: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `personas` DISABLE KEYS */;
INSERT INTO `personas` (`personas_id`, `paterno`, `materno`, `nombres`, `creado_en`, `actualizado_en`) VALUES
	(001, 'huayllapuma', 'santa cruz', 'alberto', '2016-05-11 17:09:56', '0000-00-00 00:00:00'),
	(002, 'achat', 'llanos', 'brayan', '2016-04-11 17:17:14', '0000-00-00 00:00:00'),
	(003, 'valeriano', 'quispe', 'wilson', '2016-04-11 17:17:41', '0000-00-00 00:00:00'),
	(004, 'nuñez', 'quispe', 'wilson', '2016-04-11 17:18:25', '0000-00-00 00:00:00'),
	(005, 'mmani', 'solorzano', 'jose', '2016-04-11 17:19:12', '0000-00-00 00:00:00');
/*!40000 ALTER TABLE `personas` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
