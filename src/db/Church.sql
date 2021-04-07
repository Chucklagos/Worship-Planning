-- church.ministerio definition

CREATE TABLE `ministerio` (
  `idMinisterio` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idMinisterio`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


-- church.usuario definition

CREATE TABLE `usuario` (
  `idUsuario` varchar(13) NOT NULL,
  `email` varchar(45) DEFAULT NULL,
  `contrasena` varchar(45) DEFAULT NULL,
  `estado` varchar(10) DEFAULT NULL,
  `primerNombre` varchar(45) DEFAULT NULL,
  `segundoNombre` varchar(45) DEFAULT NULL,
  `primerApellido` varchar(45) DEFAULT NULL,
  `segundoApellido` varchar(45) DEFAULT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `fechaNacimiento` date DEFAULT NULL,
  `estadoCivil` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`idUsuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


-- church.inventario definition

CREATE TABLE `inventario` (
  `idInventario` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(150) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `idMinisterio` int(11) NOT NULL,
  `idUsuario` varchar(13) DEFAULT NULL,
  PRIMARY KEY (`idInventario`),
  KEY `idMinisterio` (`idMinisterio`),
  KEY `idUsuario` (`idUsuario`),
  CONSTRAINT `inventario_ibfk_1` FOREIGN KEY (`idMinisterio`) REFERENCES `ministerio` (`idMinisterio`),
  CONSTRAINT `inventario_ibfk_2` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`idUsuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


-- church.movimiento definition

CREATE TABLE `movimiento` (
  `idMovimiento` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` date DEFAULT NULL,
  `concepto` varchar(45) DEFAULT NULL,
  `monto` float DEFAULT NULL,
  `tipoMovimiento` varchar(7) DEFAULT NULL,
  `idUsuario` varchar(13) DEFAULT NULL,
  PRIMARY KEY (`idMovimiento`),
  KEY `idUsuario` (`idUsuario`),
  CONSTRAINT `movimiento_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`idUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4;

--church Eventos


CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `start_event` datetime NOT NULL,
  `end_event` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



