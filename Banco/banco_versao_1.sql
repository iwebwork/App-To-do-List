-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.8-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para crud
CREATE DATABASE IF NOT EXISTS `crud` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `crud`;

-- Copiando estrutura para tabela crud.cards
CREATE TABLE IF NOT EXISTS `cards` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL DEFAULT 'Não informado',
  `id_user` int(100) unsigned NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `id_user` (`id_user`),
  CONSTRAINT `id_user` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela crud.cards: ~1 rows (aproximadamente)
DELETE FROM `cards`;
/*!40000 ALTER TABLE `cards` DISABLE KEYS */;
INSERT INTO `cards` (`id`, `nome`, `id_user`) VALUES
	(8, 'card1', 30),
	(9, 'card 2', 30),
	(10, 'Card 3', 30);
/*!40000 ALTER TABLE `cards` ENABLE KEYS */;

-- Copiando estrutura para tabela crud.tarefas
CREATE TABLE IF NOT EXISTS `tarefas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) CHARACTER SET utf8 DEFAULT 'Não informado',
  `id_card` int(50) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `id_card` (`id_card`),
  CONSTRAINT `id_card` FOREIGN KEY (`id_card`) REFERENCES `cards` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela crud.tarefas: ~4 rows (aproximadamente)
DELETE FROM `tarefas`;
/*!40000 ALTER TABLE `tarefas` DISABLE KEYS */;
INSERT INTO `tarefas` (`id`, `titulo`, `id_card`) VALUES
	(38, 'teste 1', 9),
	(39, 'cafe', 10),
	(41, 'teste', 9);
/*!40000 ALTER TABLE `tarefas` ENABLE KEYS */;

-- Copiando estrutura para tabela crud.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(100) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` char(200) NOT NULL,
  `token` char(200) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela crud.users: ~1 rows (aproximadamente)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `password`, `token`) VALUES
	(30, 'fulano', 'fulano@gmail.com', '3342949e2e99fc2f304de6fdd626a188', '$2y$10$LeYFfybBbbubpK106fjOteTJrilDeBzoesY/MN15SkwCfudDfLmg.');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
