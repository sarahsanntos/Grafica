# Host: localhost  (Version: 5.6.12-log)
# Date: 2015-01-07 13:56:59
# Generator: MySQL-Front 5.3  (Build 4.187)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "material"
#

DROP TABLE IF EXISTS `material`;
CREATE TABLE `material` (
  `COD_MAT` int(11) NOT NULL AUTO_INCREMENT,
  `NOME` varchar(20) NOT NULL,
  `QUANTIDADE` int(4) NOT NULL,
  `TIPO` varchar(20) NOT NULL,
  `tipo_id` int(4) NOT NULL,
  `bloqueio` int(1) NOT NULL,
  `excluido` int(1) NOT NULL,
  PRIMARY KEY (`COD_MAT`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Data for table "material"
#


#
# Structure for table "usuario"
#

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario` (
  `matricula` varchar(20) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `sobrenome` varchar(40) NOT NULL,
  `cargo` varchar(20) NOT NULL,
  `senha` varchar(20) NOT NULL,
  `nivel` int(2) NOT NULL,
  `bloqueio` int(1) NOT NULL,
  `excluido` int(1) NOT NULL,
  PRIMARY KEY (`matricula`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Data for table "usuario"
#


#
# Structure for table "pedido"
#

DROP TABLE IF EXISTS `pedido`;
CREATE TABLE `pedido` (
  `COD_PED` int(11) NOT NULL AUTO_INCREMENT,
  `MATRICULA` varchar(20) DEFAULT NULL,
  `ASSUNTO` varchar(30) NOT NULL,
  `QUANTIDADE` int(4) NOT NULL,
  `OBSERVACAO` varchar(200) DEFAULT NULL,
  `DATA_PED` date DEFAULT NULL,
  `DATA_ENT` date DEFAULT NULL,
  `URGENCIA` varchar(10) DEFAULT NULL,
  `RESTRICAO` varchar(10) DEFAULT NULL,
  `FRENTE_VERSO` varchar(10) DEFAULT NULL,
  `ENCADERNACAO` varchar(10) DEFAULT NULL,
  `EFETUACAO` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`COD_PED`),
  KEY `fk` (`MATRICULA`),
  CONSTRAINT `fk` FOREIGN KEY (`MATRICULA`) REFERENCES `usuario` (`matricula`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Data for table "pedido"
#

