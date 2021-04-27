-- --------------------------------------------------------
-- Servidor:                     localhost
-- Versão do servidor:           10.4.14-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para seven_imob
CREATE DATABASE IF NOT EXISTS `seven_imob` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `seven_imob`;

-- Copiando estrutura para tabela seven_imob.banners
CREATE TABLE IF NOT EXISTS `banners` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imagem` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `target_page` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `begin_date` datetime DEFAULT NULL,
  `end_date` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela seven_imob.banners: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `banners` DISABLE KEYS */;
INSERT INTO `banners` (`id`, `title`, `imagem`, `url`, `target_page`, `status`, `begin_date`, `end_date`, `created_at`, `updated_at`) VALUES
	(1, 'Banner 1', 'banner/photo_1619320937.png', NULL, 0, 1, '2021-04-25 03:22:18', NULL, '2021-04-25 03:22:18', '2021-04-25 03:22:18'),
	(2, 'banner 2', 'banner/photo_1619321013.png', NULL, 0, 1, '2021-04-25 03:23:34', NULL, '2021-04-25 03:23:34', '2021-04-25 03:23:34');
/*!40000 ALTER TABLE `banners` ENABLE KEYS */;

-- Copiando estrutura para tabela seven_imob.empresa
CREATE TABLE IF NOT EXISTS `empresa` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whatsapp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `endereco` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cidade` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela seven_imob.empresa: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `empresa` DISABLE KEYS */;
INSERT INTO `empresa` (`id`, `nome`, `email`, `whatsapp`, `endereco`, `cidade`, `instagram`, `facebook`, `created_at`, `updated_at`) VALUES
	(1, 'Seven Corretores Associados', 'contato@seven@sevencorretores.com.br', '(62) 98239-8118', 'Rua 259', 'Goiânia -  GO', 'https://www.instagram.com/sevencorretores/?hl=pt-br', 'https://www.facebook.com/sevencorretoresassociados', '2021-04-01 00:56:31', '2021-04-26 05:37:43');
/*!40000 ALTER TABLE `empresa` ENABLE KEYS */;

-- Copiando estrutura para tabela seven_imob.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela seven_imob.failed_jobs: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Copiando estrutura para tabela seven_imob.galleria_fotos
CREATE TABLE IF NOT EXISTS `galleria_fotos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_imovel` int(11) DEFAULT NULL,
  `imagem` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela seven_imob.galleria_fotos: ~22 rows (aproximadamente)
/*!40000 ALTER TABLE `galleria_fotos` DISABLE KEYS */;
INSERT INTO `galleria_fotos` (`id`, `id_imovel`, `imagem`, `created_at`, `updated_at`) VALUES
	(11, 4, 'imovel/4/photo_1619412631880.jpeg', '2021-04-26 04:50:31', '2021-04-26 04:50:31'),
	(12, 4, 'imovel/4/photo_1619412631991.jpeg', '2021-04-26 04:50:32', '2021-04-26 04:50:32'),
	(13, 4, 'imovel/4/photo_161941263272.jpeg', '2021-04-26 04:50:32', '2021-04-26 04:50:32'),
	(14, 4, 'imovel/4/photo_1619412632243.jpeg', '2021-04-26 04:50:32', '2021-04-26 04:50:32'),
	(15, 4, 'imovel/4/photo_1619412632664.jpeg', '2021-04-26 04:50:32', '2021-04-26 04:50:32'),
	(16, 5, 'imovel/5/photo_1619413030690.jpeg', '2021-04-26 04:57:10', '2021-04-26 04:57:10'),
	(17, 5, 'imovel/5/photo_1619413030871.jpeg', '2021-04-26 04:57:10', '2021-04-26 04:57:10'),
	(18, 5, 'imovel/5/photo_1619413030582.jpeg', '2021-04-26 04:57:10', '2021-04-26 04:57:10'),
	(19, 5, 'imovel/5/photo_1619413030173.jpeg', '2021-04-26 04:57:10', '2021-04-26 04:57:10'),
	(20, 5, 'imovel/5/photo_161941303084.jpeg', '2021-04-26 04:57:10', '2021-04-26 04:57:10'),
	(21, 5, 'imovel/5/photo_1619413030445.jpeg', '2021-04-26 04:57:10', '2021-04-26 04:57:10'),
	(22, 5, 'imovel/5/photo_1619413030496.jpeg', '2021-04-26 04:57:10', '2021-04-26 04:57:10'),
	(23, 5, 'imovel/5/photo_1619413031227.jpeg', '2021-04-26 04:57:11', '2021-04-26 04:57:11'),
	(24, 9, 'imovel/9/photo_1619414380440.jpeg', '2021-04-26 05:19:40', '2021-04-26 05:19:40'),
	(25, 9, 'imovel/9/photo_1619414380981.jpeg', '2021-04-26 05:19:40', '2021-04-26 05:19:40'),
	(26, 9, 'imovel/9/photo_1619414381272.jpeg', '2021-04-26 05:19:41', '2021-04-26 05:19:41'),
	(27, 9, 'imovel/9/photo_1619414381963.jpeg', '2021-04-26 05:19:41', '2021-04-26 05:19:41'),
	(28, 9, 'imovel/9/photo_161941438124.jpeg', '2021-04-26 05:19:41', '2021-04-26 05:19:41'),
	(29, 9, 'imovel/9/photo_1619414381655.jpeg', '2021-04-26 05:19:41', '2021-04-26 05:19:41'),
	(30, 8, 'imovel/8/photo_1619414393700.jpeg', '2021-04-26 05:19:53', '2021-04-26 05:19:53'),
	(31, 8, 'imovel/8/photo_1619414393991.jpeg', '2021-04-26 05:19:53', '2021-04-26 05:19:53'),
	(32, 8, 'imovel/8/photo_1619414393952.jpeg', '2021-04-26 05:19:53', '2021-04-26 05:19:53'),
	(33, 7, 'imovel/7/photo_1619414407550.jpeg', '2021-04-26 05:20:07', '2021-04-26 05:20:07'),
	(34, 7, 'imovel/7/photo_1619414407831.jpeg', '2021-04-26 05:20:07', '2021-04-26 05:20:07'),
	(35, 7, 'imovel/7/photo_1619414407102.jpeg', '2021-04-26 05:20:07', '2021-04-26 05:20:07');
/*!40000 ALTER TABLE `galleria_fotos` ENABLE KEYS */;

-- Copiando estrutura para tabela seven_imob.galleria_instalacoes
CREATE TABLE IF NOT EXISTS `galleria_instalacoes` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `imagem` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela seven_imob.galleria_instalacoes: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `galleria_instalacoes` DISABLE KEYS */;
/*!40000 ALTER TABLE `galleria_instalacoes` ENABLE KEYS */;

-- Copiando estrutura para tabela seven_imob.imoveis
CREATE TABLE IF NOT EXISTS `imoveis` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `codigo_imovel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `finalidade` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tipo_imovel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `endereco` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bairro` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cidade_estado` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `suites` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `valor` float DEFAULT NULL,
  `cep` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `area_util` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `area_terreno` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `area_comum` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `area_total` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `area_privativa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `area_construida` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imagem` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dormitorio` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vaga_garagem` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `begin_date` datetime DEFAULT NULL,
  `end_date` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela seven_imob.imoveis: ~6 rows (aproximadamente)
/*!40000 ALTER TABLE `imoveis` DISABLE KEYS */;
INSERT INTO `imoveis` (`id`, `codigo_imovel`, `finalidade`, `tipo_imovel`, `endereco`, `bairro`, `cidade_estado`, `suites`, `valor`, `cep`, `text`, `area_util`, `area_terreno`, `area_comum`, `area_total`, `area_privativa`, `area_construida`, `imagem`, `dormitorio`, `vaga_garagem`, `status`, `begin_date`, `end_date`, `created_at`, `updated_at`) VALUES
	(4, '5500', 'Aluguel', 'Apartamento', 'Alto areião R. 1033', 'St. Pedro Ludovico', 'Goiânia – GO', '1', 4500000, '74.823-190', '<div class="uagb-ifb-title-wrap">\r\n<h3 class="uagb-ifb-title">Diferenciais</h3>\r\n</div>\r\n<div class="uagb-ifb-text-wrap">\r\n<p class="uagb-ifb-desc">Lazer completo , ao lado do parque Arei&atilde;o, A 10 minutos do Shopping Goi&acirc;nia e 8 minutos do Flamboyant Shopping, entre outros.</p>\r\n</div>', NULL, '96m²', NULL, NULL, NULL, NULL, 'imovel/photo_1619412542.png', '1', '1', 1, '2021-04-26 01:49:02', NULL, '2021-04-26 01:49:02', '2021-04-26 23:17:34'),
	(5, '5506', 'Venda', 'Apartamento', 'Rua 1', 'Jardim Goiás', 'Goiânia – GO', NULL, 1000000, '74.000-000', '<div class="uagb-ifb-title-wrap">\r\n<h3 class="uagb-ifb-title">Descri&ccedil;&atilde;o</h3>\r\n</div>\r\n<div class="uagb-ifb-text-wrap">\r\n<p class="uagb-ifb-desc">4 Su&iacute;tes sendo a m&aacute;ster com hidro,<br />4 vagas de garagens paralelas,<br />2 escaninhos,<br />arm&aacute;rios planejados de primeira qualidade- form planejados,<br />cozinha e varanda gourmet com churrasqueira, porcelanato travertino polido/ italiano 1,00x 1,00.<br />Lazer completo<br />326m&sup2;</p>\r\n</div>', NULL, '326m²', NULL, NULL, NULL, NULL, 'imovel/photo_1619413017.png', '4', '4', 1, '2021-04-26 01:56:57', NULL, '2021-04-26 01:56:57', '2021-04-26 23:24:15'),
	(6, '5528', 'Venda', 'Apartamento', 'DUO SKY GARDEN', 'Parque Amazônia', 'Goiânia – GO', NULL, 500000, '74.000-00', '<div class="uagb-ifb-title-wrap">\r\n<h3 class="uagb-ifb-title">Diferenciais</h3>\r\n</div>\r\n<div class="uagb-ifb-text-wrap">\r\n<p class="uagb-ifb-desc">Viva a praticidade do Bueno com a tranquilidade do Parque Amaz&ocirc;nia. Praticidade e tranquilidade: tudo pertinho de casa. A melhor regi&atilde;o do Parque Amaz&ocirc;nia, entre a Pra&ccedil;a da Cemaco e a Pra&ccedil;a da Feira. Tudo f&aacute;cil, r&aacute;pido e perto da sua casa.</p>\r\n</div>', NULL, NULL, NULL, '73m²', NULL, NULL, 'imovel/photo_1619413612.png', NULL, NULL, 1, '2021-04-26 02:06:52', NULL, '2021-04-26 02:06:52', '2021-04-26 23:24:27'),
	(7, '5592', 'Venda', 'Apartamento', 'Parque Noron', 'Parque Lozandes', 'Goiânia – GO', NULL, 300000, NULL, '<div class="uagb-ifb-title-wrap">\r\n<h3 class="uagb-ifb-title">Diferenciais</h3>\r\n</div>\r\n<div class="uagb-ifb-text-wrap">\r\n<p class="uagb-ifb-desc">Lazer completo;<br />Parque privativo;<br />E toda comodidade que a regi&atilde;o oferece.</p>\r\n</div>', NULL, '121m²', NULL, '121m²', NULL, NULL, 'imovel/photo_1619413802.png', NULL, NULL, 1, '2021-04-26 02:10:03', NULL, '2021-04-26 02:10:03', '2021-04-26 23:24:40'),
	(8, '5589', 'Venda', 'Apartamento', 'Goiânia – GO', 'Alto da Glória', 'Goiânia – GO', NULL, 250000, NULL, '<div class="uagb-ifb-title-wrap">\r\n<h3 class="uagb-ifb-title">Diferenciais</h3>\r\n</div>\r\n<div class="uagb-ifb-text-wrap">\r\n<p class="uagb-ifb-desc">Torre Ibiza<br />3 quartos sendo 1 su&iacute;te;<br />Rico em arm&aacute;rios;<br />2 vagas de garagem<br />lazer completo.<br />83m&sup2;</p>\r\n</div>', NULL, NULL, NULL, NULL, NULL, NULL, 'imovel/photo_1619414232.png', '3', '2', 1, '2021-04-26 02:17:12', NULL, '2021-04-26 02:17:12', '2021-04-26 23:24:51'),
	(9, '5574', 'Venda', 'Apartamento', 'MUY BUENO', 'Jardim América', 'Goiânia – GO', '1', 150000, NULL, '<div class="uagb-ifb-title-wrap">\r\n<h3 class="uagb-ifb-title">Diferenciais</h3>\r\n</div>\r\n<div class="uagb-ifb-text-wrap">\r\n<p class="uagb-ifb-desc">Lazer completo , Localiza&ccedil;&atilde;o privilegiada &agrave; 3 quadras do Goi&acirc;nia Shopping, entre outros!</p>\r\n</div>', NULL, NULL, NULL, '110m²', NULL, NULL, 'imovel/photo_1619414368.png', '2', NULL, 1, '2021-04-26 02:19:28', NULL, '2021-04-26 02:19:28', '2021-04-26 23:25:04');
/*!40000 ALTER TABLE `imoveis` ENABLE KEYS */;

-- Copiando estrutura para tabela seven_imob.instalacoes
CREATE TABLE IF NOT EXISTS `instalacoes` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela seven_imob.instalacoes: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `instalacoes` DISABLE KEYS */;
/*!40000 ALTER TABLE `instalacoes` ENABLE KEYS */;

-- Copiando estrutura para tabela seven_imob.institucional
CREATE TABLE IF NOT EXISTS `institucional` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imagem` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela seven_imob.institucional: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `institucional` DISABLE KEYS */;
INSERT INTO `institucional` (`id`, `title`, `imagem`, `text`, `status`, `created_at`, `updated_at`) VALUES
	(1, 'Quem Somos', NULL, '<p>SOBRE N&Oacute;S<br />A Seven Corretores Associados &eacute; uma empresa jovem, moderna e din&acirc;mica, que nasceu para dar mais agilidade e seguran&ccedil;a nas transa&ccedil;&otilde;es imobili&aacute;rias, tanto para os clientes finais quanto para os corretores parceiros.<br />Seus s&oacute;cios possuem mais de 20 anos de experi&ecirc;ncia no mercado imobili&aacute;rio, e tem como objetivo principal eliminar as dores dos processos de compra, venda e loca&ccedil;&atilde;o de im&oacute;veis.<br />A empresa investe com frequ&ecirc;ncia em tecnologia e no processo de treinamento de seus colaboradores, tornando assim poss&iacute;vel que as negocia&ccedil;&otilde;es imobili&aacute;rias sejam cada vez mais f&aacute;ceis, r&aacute;pidas e principalmente seguras.<br />Principais valores da empresa:<br />&ndash; Gestores experientes.<br />&ndash; 100% segura.<br />&ndash; Excel&ecirc;ncia no atendimento ao cliente.<br />&ndash; Capacita&ccedil;&atilde;o e treinamento constantes.<br />A Seven Corretores Associados quer te ajudar a simplificar suas transa&ccedil;&otilde;es imobili&aacute;rias.<br />Vamos juntos?</p>', 1, '2021-04-01 00:56:31', '2021-04-25 03:14:18');
/*!40000 ALTER TABLE `institucional` ENABLE KEYS */;

-- Copiando estrutura para tabela seven_imob.logs
CREATE TABLE IF NOT EXISTS `logs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `usuario` int(11) DEFAULT NULL,
  `acao` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dado` int(11) DEFAULT NULL,
  `formulario` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela seven_imob.logs: ~39 rows (aproximadamente)
/*!40000 ALTER TABLE `logs` DISABLE KEYS */;
INSERT INTO `logs` (`id`, `usuario`, `acao`, `dado`, `formulario`, `ip`, `created_at`, `updated_at`) VALUES
	(1, 1, 'Cadastro', 1, 'Imovel', '127.0.0.1', '2021-03-31 21:59:24', '2021-03-31 21:59:24'),
	(2, 1, 'Alterar', 1, 'Imovel', '127.0.0.1', '2021-04-01 01:00:07', '2021-04-01 01:00:07'),
	(3, 1, 'Cadastro', 2, 'Imovel', '127.0.0.1', '2021-04-24 23:17:56', '2021-04-24 23:17:56'),
	(4, 1, 'Status', 2, 'Imovel', '127.0.0.1', '2021-04-25 02:19:42', '2021-04-25 02:19:42'),
	(5, 1, 'Status', 2, 'Imovel', '127.0.0.1', '2021-04-25 02:19:45', '2021-04-25 02:19:45'),
	(6, 1, 'Alterar', 2, 'Imovel', '127.0.0.1', '2021-04-25 02:51:01', '2021-04-25 02:51:01'),
	(7, 1, 'Alterar', 2, 'Imovel', '127.0.0.1', '2021-04-25 02:51:24', '2021-04-25 02:51:24'),
	(8, 1, 'Alterar', 2, 'Imovel', '127.0.0.1', '2021-04-25 02:52:27', '2021-04-25 02:52:27'),
	(9, 1, 'Alterar', 2, 'Imovel', '127.0.0.1', '2021-04-25 02:53:02', '2021-04-25 02:53:02'),
	(10, 1, 'Cadastro', 3, 'Imovel', '127.0.0.1', '2021-04-24 23:59:05', '2021-04-24 23:59:05'),
	(11, 1, 'Alterar', 3, 'Imovel', '127.0.0.1', '2021-04-25 03:04:07', '2021-04-25 03:04:07'),
	(12, 1, 'Status', 3, 'Imovel', '127.0.0.1', '2021-04-25 03:05:41', '2021-04-25 03:05:41'),
	(13, 1, 'Status', 3, 'Imovel', '127.0.0.1', '2021-04-25 03:05:46', '2021-04-25 03:05:46'),
	(14, 1, 'Alterar', 3, 'Imovel', '127.0.0.1', '2021-04-25 03:06:46', '2021-04-25 03:06:46'),
	(15, 1, 'Alterar', 3, 'Imovel', '127.0.0.1', '2021-04-25 03:08:36', '2021-04-25 03:08:36'),
	(16, 1, 'Status', 3, 'Imovel', '127.0.0.1', '2021-04-25 03:08:40', '2021-04-25 03:08:40'),
	(17, 1, 'Alterar', 1, 'Institucional', '127.0.0.1', '2021-04-25 03:14:18', '2021-04-25 03:14:18'),
	(18, 1, 'Adicionar', 1, 'Banner', '127.0.0.1', '2021-04-25 03:22:18', '2021-04-25 03:22:18'),
	(19, 1, 'Adicionar', 2, 'Banner', '127.0.0.1', '2021-04-25 03:23:34', '2021-04-25 03:23:34'),
	(20, 1, 'Alterar', 1, 'Empresa', '127.0.0.1', '2021-04-26 04:44:06', '2021-04-26 04:44:06'),
	(21, 1, 'Deletar', 3, 'Imovel', '127.0.0.1', '2021-04-26 04:44:22', '2021-04-26 04:44:22'),
	(22, 1, 'Deletar', 2, 'Imovel', '127.0.0.1', '2021-04-26 04:44:27', '2021-04-26 04:44:27'),
	(23, 1, 'Cadastro', 4, 'Imovel', '127.0.0.1', '2021-04-26 01:49:02', '2021-04-26 01:49:02'),
	(24, 1, 'Alterar', 4, 'Imovel', '127.0.0.1', '2021-04-26 04:50:37', '2021-04-26 04:50:37'),
	(25, 1, 'Alterar', 4, 'Imovel', '127.0.0.1', '2021-04-26 04:53:08', '2021-04-26 04:53:08'),
	(26, 1, 'Cadastro', 5, 'Imovel', '127.0.0.1', '2021-04-26 01:56:57', '2021-04-26 01:56:57'),
	(27, 1, 'Alterar', 5, 'Imovel', '127.0.0.1', '2021-04-26 04:57:14', '2021-04-26 04:57:14'),
	(28, 1, 'Cadastro', 6, 'Imovel', '127.0.0.1', '2021-04-26 02:06:52', '2021-04-26 02:06:52'),
	(29, 1, 'Cadastro', 7, 'Imovel', '127.0.0.1', '2021-04-26 02:10:03', '2021-04-26 02:10:03'),
	(30, 1, 'Cadastro', 8, 'Imovel', '127.0.0.1', '2021-04-26 02:17:12', '2021-04-26 02:17:12'),
	(31, 1, 'Cadastro', 9, 'Imovel', '127.0.0.1', '2021-04-26 02:19:28', '2021-04-26 02:19:28'),
	(32, 1, 'Alterar', 9, 'Imovel', '127.0.0.1', '2021-04-26 05:19:43', '2021-04-26 05:19:43'),
	(33, 1, 'Alterar', 8, 'Imovel', '127.0.0.1', '2021-04-26 05:19:54', '2021-04-26 05:19:54'),
	(34, 1, 'Alterar', 7, 'Imovel', '127.0.0.1', '2021-04-26 05:20:09', '2021-04-26 05:20:09'),
	(35, 1, 'Alterar', 4, 'Imovel', '127.0.0.1', '2021-04-26 05:36:50', '2021-04-26 05:36:50'),
	(36, 1, 'Alterar', 9, 'Imovel', '127.0.0.1', '2021-04-26 05:37:10', '2021-04-26 05:37:10'),
	(37, 1, 'Alterar', 1, 'Empresa', '127.0.0.1', '2021-04-26 05:37:43', '2021-04-26 05:37:43'),
	(38, 1, 'Alterar', 4, 'Imovel', '127.0.0.1', '2021-04-26 23:13:12', '2021-04-26 23:13:12'),
	(39, 1, 'Alterar', 4, 'Imovel', '127.0.0.1', '2021-04-26 23:13:32', '2021-04-26 23:13:32'),
	(40, 1, 'Alterar', 4, 'Imovel', '127.0.0.1', '2021-04-26 23:17:34', '2021-04-26 23:17:34'),
	(41, 1, 'Alterar', 5, 'Imovel', '127.0.0.1', '2021-04-26 23:24:15', '2021-04-26 23:24:15'),
	(42, 1, 'Alterar', 6, 'Imovel', '127.0.0.1', '2021-04-26 23:24:27', '2021-04-26 23:24:27'),
	(43, 1, 'Alterar', 7, 'Imovel', '127.0.0.1', '2021-04-26 23:24:40', '2021-04-26 23:24:40'),
	(44, 1, 'Alterar', 8, 'Imovel', '127.0.0.1', '2021-04-26 23:24:51', '2021-04-26 23:24:51'),
	(45, 1, 'Alterar', 9, 'Imovel', '127.0.0.1', '2021-04-26 23:25:04', '2021-04-26 23:25:04');
/*!40000 ALTER TABLE `logs` ENABLE KEYS */;

-- Copiando estrutura para tabela seven_imob.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=134 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela seven_imob.migrations: ~13 rows (aproximadamente)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(102, '2021_03_11_214808_create_produtos_table', 1),
	(122, '2014_10_12_000000_create_users_table', 2),
	(123, '2014_10_12_100000_create_password_resets_table', 2),
	(124, '2019_08_19_000000_create_failed_jobs_table', 2),
	(125, '2021_03_10_233458_create_banners_table', 2),
	(126, '2021_03_11_214808_create_imoveis_table', 2),
	(127, '2021_03_13_002036_create_galleria_fotos_table', 2),
	(128, '2021_03_16_201816_create_institucional_table', 2),
	(129, '2021_03_17_171629_create_empresa_table', 2),
	(130, '2021_03_17_215451_create_telefones_table', 2),
	(131, '2021_03_17_225450_create_instalacoes_table', 2),
	(132, '2021_03_18_122730_create_galleria_instalacoes_table', 2),
	(133, '2021_03_18_140618_create_logs_table', 2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Copiando estrutura para tabela seven_imob.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela seven_imob.password_resets: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Copiando estrutura para tabela seven_imob.telefones
CREATE TABLE IF NOT EXISTS `telefones` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `telefone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela seven_imob.telefones: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `telefones` DISABLE KEYS */;
INSERT INTO `telefones` (`id`, `telefone`, `created_at`, `updated_at`) VALUES
	(1, '(62) 98239-8118', '2021-04-26 05:37:43', '2021-04-26 05:37:43');
/*!40000 ALTER TABLE `telefones` ENABLE KEYS */;

-- Copiando estrutura para tabela seven_imob.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagem` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nivel_acesso` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela seven_imob.users: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `imagem`, `nivel_acesso`, `status`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Daniel Gomes albernaz', 'usuarios/photo_1615924246.png', 2, 1, 'daniel@daniel', NULL, '$2y$10$dvRAJuMjhaGwmuE8WwZ0IOSX7FZAO7GM9LiAEXn.eeiMIdL6t0dR.', NULL, '2021-04-01 00:56:31', '2021-04-01 00:56:31');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
