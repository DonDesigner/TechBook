CREATE DATABASE IF NOT EXISTS `techbook`;
USE `techbook`;

CREATE TABLE IF NOT EXISTS `albuns`(
	`id` int(11) NOT NULL AUTO_INCREMENT, 
	`dono` int(11) DEFAULT NULL, 
	`titulo` varchar(80) DEFAULT NULL, 
	Primary KEY (`id`), 
	KEY `fk_dono_pessoa` (`dono`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1; 


CREATE TABLE IF NOT EXISTS `amigos`(
	`quempede` int(11) NOT NULL COMMENT 'quem pede a amizade', 
	`quemaprova` int(11) NOT NULL COMMENT 'para quem, logo essa pessoa que aprova o status para $',
	`status` char(1) DEFAULT NULL,
	PRIMARY KEY (`quempede`, `quemaprova`),
	KEY `fk_pessoa1` (`quempede`), 
	KEY `fk_pessoa2` (`quemaprova`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `amigos` VALUES (109, 102, 'N');


CREATE TABLE IF NOT EXISTS `comfotos` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`datahora` datetime DEFAULT NULL, 
	`foto` int(11) DEFAULT NULL,
	`autorcom` int(11) DEFAULT NULL,
	`comentario` text,
	PRIMARY KEY (`id`),
	KEY `fk_autorcom` (`autorcom`),
	KEY `fk_fotoalbum` (`foto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;

CREATE TABLE IF NOT EXISTS `fotos` (
	`id` int(11) NOT NULL, 
	`album` int(11) DEFAULT NULL, 
	`titulo` varchar(80) DEFAULT NULL, 
	`foto` varchar(45) DEFAULT NULL, 
	`ordemfoto` int(11) DEFAULT NULL COMMENT 'em que ordem isso fica no album',
	PRIMARY KEY (`id`),
	KEY `fk_album` (`album`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE IF NOT EXISTS `mensagens` (
	`id` int(11) NOT NULL AUTO_INCREMENT, 
	`dequem` int(11) DEFAULT NULL, 
	`paraquem` int(11) DEFAULT NULL,
	`datahora` datetime DEFAULT NULL, 
	`mensagem` text,
	`publico` char(1) DEFAULT NULL,
	PRIMARY KEY (`id`),
	KEY `fk_dequem` (`dequem`),
	KEY `fk_paraquem` (`paraquem`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=7;


INSERT INTO `mensagens` VALUES(4, 102, 108, '2012-05-06 15:59:35', 'Olah! Serah que chove hoje?', 'N');
INSERT INTO `mensagens` VALUES(5, 108, 102, '2012-05-06 15:59:35', 'Capaz! Estah soh meio nublado, mas naho chove naho. Sai a pescaria sahbado?', 'N');
INSERT INTO `mensagens` VALUES(6, 102, 109, '2012-05-06 16:56:44', 'Quer sair no sÃ¡bado a noite?', 'N');


CREATE TABLE IF NOT EXISTS `pessoas` (
	`id` int(11) NOT NULL AUTO_INCREMENT, 
	`nome` varchar(80) DEFAULT NULL,
	`email` varchar(80) DEFAULT NULL COMMENT 'o email é o login no sistema', 
	`senha` varchar(80) DEFAULT NULL COMMENT 'senha criptografada',
	`fotoperfil` varchar(45) DEFAULT NULL COMMENT 'upload e o caminho da foto aqui',
	`ativoem` datetime DEFAULT NULL COMMENT 'qual a ultima data que a pessoa esteve ativa no sistema, usado para decidir se mensagem ou chat entre os usuarios',
	PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=110;

INSERT INTO `pessoas` VALUES(102, 'Marcos Almeida', 'isso@terra.com.br', 'b9b9245e1c0df90fa0b0e04edf0c75709b46af3c', 'f522faa8deac97be0b3e5791f76ed131_26.jpg', '2012-04-12 15:22:16');
INSERT INTO `pessoas` VALUES(108, 'Arnoldo Coelhos', 'ar@nol.do', '7bfd0ae6f774e085ab11b2295411ef8d31891ab6', '72a6e09e8f1779bf2b6f76c0be6c251c_823.jpg', '2012-05-06 15:57:03');
INSERT INTO `pessoas` VALUES(109, 'Marta Santoro', 'martinha@hotmail.com', 'f1ef6098d030c1d085f5ab24168cc1a62a9b0e66', '8d4e450cdf2bf14a9c289de751f9e0b3_552.jpg', '2012-05-06 15:57:47');

ALTER TABLE `albuns`
  ADD CONSTRAINT `fk_dono_pessoa` FOREIGN KEY (`dono`) REFERENCES `pessoas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `amigos`
--
ALTER TABLE `amigos`
  ADD CONSTRAINT `fk_pessoa1` FOREIGN KEY (`quempede`) REFERENCES `pessoas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pessoa2` FOREIGN KEY (`quemaprova`) REFERENCES `pessoas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `comfotos`
--
ALTER TABLE `comfotos`
  ADD CONSTRAINT `fk_autorcom` FOREIGN KEY (`autorcom`) REFERENCES `pessoas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_fotoalbum` FOREIGN KEY (`foto`) REFERENCES `fotos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `fotos`
--
ALTER TABLE `fotos`
  ADD CONSTRAINT `fk_allbum` FOREIGN KEY (`album`) REFERENCES `albuns` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `mensagens`
--
ALTER TABLE `mensagens`
  ADD CONSTRAINT `fk_dequem` FOREIGN KEY (`dequem`) REFERENCES `pessoas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_paraquem` FOREIGN KEY (`paraquem`) REFERENCES `pessoas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

