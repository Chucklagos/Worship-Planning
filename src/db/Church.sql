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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
