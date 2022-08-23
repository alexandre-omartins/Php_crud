CREATE DATABASE IF NOT EXISTS `contatos_dados`; /*!40100 DEFAULT CHARACTER SET utf8 */
USE `contatos_dados`;

/* CREATE TABLE IF NOT EXISTS `comentarios` (
  `idcomentarios` int(11) NOT NULL AUTO_INCREMENT,
  `data` datetime DEFAULT NULL,
  `comentario` varchar(300) DEFAULT NULL,
  `contatos_idcontatos` int(11) NOT NULL,
  PRIMARY KEY (`idcomentarios`),
  KEY `fk_comentarios_contatos_idx` (`contatos_idcontatos`),
  CONSTRAINT `fk_comentarios_contatos` FOREIGN KEY (`contatos_idcontatos`) REFERENCES `contatos` (`idcontatos`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=167 DEFAULT CHARSET=utf8;
*/

CREATE TABLE IF NOT EXISTS `contatos` (
  `idcontatos` int(11) NOT NULL AUTO_INCREMENT,
  `foto` longblob,
  `nome` varchar(45) DEFAULT NULL,
  `sobrenome` varchar(45) DEFAULT NULL,
  `cargo` varchar(45) DEFAULT NULL,
  `empresa` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `pagweb` varchar(45) DEFAULT NULL,
  `telcomercial` varchar(45) DEFAULT NULL,
  `fax` varchar(45) DEFAULT NULL,
  `telresidencial` varchar(45) DEFAULT NULL,
  `celular` varchar(45) DEFAULT NULL,
  `endereco` varchar(45) DEFAULT NULL,
  `cidade` varchar(45) DEFAULT NULL,
  `estado` varchar(45) DEFAULT NULL,
  `cep` varchar(45) DEFAULT NULL,
  `pais` varchar(45) DEFAULT NULL,
  `anotacao` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idcontatos`)
) ENGINE=InnoDB AUTO_INCREMENT=1464 DEFAULT CHARSET=utf8;