-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 28-Nov-2014 às 20:52
-- Versão do servidor: 5.6.12-log
-- versão do PHP: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `blog`
--
CREATE DATABASE IF NOT EXISTS `blog` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `blog`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `bibldoc`
--

CREATE TABLE IF NOT EXISTS `bibldoc` (
  `cod_bibldoc` varchar(45) NOT NULL,
  `biblioteca_cod_bibl` int(11) NOT NULL,
  `DOCUMENTO_cod_doc` int(11) NOT NULL,
  PRIMARY KEY (`cod_bibldoc`),
  KEY `fk_biblioteca_has_DOCUMENTO_DOCUMENTO1_idx` (`DOCUMENTO_cod_doc`),
  KEY `fk_biblioteca_has_DOCUMENTO_biblioteca1_idx` (`biblioteca_cod_bibl`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `biblioteca`
--

CREATE TABLE IF NOT EXISTS `biblioteca` (
  `cod_bibl` int(11) NOT NULL,
  `desc_bibl` varchar(45) DEFAULT NULL,
  `obs_bibl` varchar(45) DEFAULT NULL,
  `tip_bibl` varchar(45) DEFAULT NULL,
  `dathor_bibl` varchar(45) DEFAULT NULL,
  `imgpa_bibl` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`cod_bibl`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
  `cod_catg` int(11) NOT NULL,
  `nom_catg` varchar(45) DEFAULT NULL,
  `obs_catg` varchar(45) DEFAULT NULL,
  `sta_ctg` varchar(45) DEFAULT NULL,
  `dathor_gtg` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`cod_catg`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `documento`
--

CREATE TABLE IF NOT EXISTS `documento` (
  `cod_doc` int(11) NOT NULL AUTO_INCREMENT,
  `desc_doc` varchar(45) NOT NULL,
  `datcria_doc` datetime NOT NULL,
  `datup_doc` varchar(45) NOT NULL,
  `tam_doc` varchar(10) NOT NULL,
  `local_doc` varchar(45) DEFAULT NULL,
  `estenc_doc` varchar(45) DEFAULT NULL,
  `cod_usua` varchar(45) DEFAULT NULL,
  `qtddow_doc` varchar(45) DEFAULT NULL,
  `icon_doc` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`cod_doc`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `grpusuario`
--

CREATE TABLE IF NOT EXISTS `grpusuario` (
  `cod_gpr` int(11) NOT NULL AUTO_INCREMENT,
  `desc_gpr` varchar(45) NOT NULL,
  `img_pgr` varchar(100) DEFAULT NULL,
  `sta_gpr` char(1) NOT NULL,
  `dathor_gpr` datetime NOT NULL,
  PRIMARY KEY (`cod_gpr`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `grpusuario`
--

INSERT INTO `grpusuario` (`cod_gpr`, `desc_gpr`, `img_pgr`, `sta_gpr`, `dathor_gpr`) VALUES
(1, 'teste', NULL, '1', '2014-11-13 10:40:43');

-- --------------------------------------------------------

--
-- Estrutura da tabela `permgrup`
--

CREATE TABLE IF NOT EXISTS `permgrup` (
  `cod_permgrup` int(11) NOT NULL AUTO_INCREMENT,
  `cod_gpr` int(11) NOT NULL,
  `cod_perm` int(11) NOT NULL,
  PRIMARY KEY (`cod_permgrup`),
  KEY `fk_GRPUSUARIO_has_permicoes_permicoes1_idx` (`cod_perm`),
  KEY `fk_GRPUSUARIO_has_permicoes_GRPUSUARIO1_idx` (`cod_gpr`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `permicoes`
--

CREATE TABLE IF NOT EXISTS `permicoes` (
  `cod_perm` int(11) NOT NULL AUTO_INCREMENT,
  `desc_perm` varchar(45) NOT NULL,
  `sta_perm` varchar(45) NOT NULL,
  PRIMARY KEY (`cod_perm`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `cod_post` int(11) NOT NULL AUTO_INCREMENT,
  `titulo_post` varchar(45) NOT NULL,
  `descr_post` varchar(45) NOT NULL,
  `tip_post` char(45) NOT NULL,
  `cod_doc` int(11) NOT NULL,
  `cod_bibl` int(11) NOT NULL,
  `cod_usua` int(11) NOT NULL,
  `dathor_post` datetime NOT NULL,
  `cod_cate` int(11) NOT NULL,
  `sta_post` char(1) NOT NULL,
  `reqconfi_post` char(1) NOT NULL,
  `hierarq_post` char(1) NOT NULL,
  `unic_post` char(1) NOT NULL,
  `datexpir_post` datetime NOT NULL,
  PRIMARY KEY (`cod_post`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Extraindo dados da tabela `post`
--

INSERT INTO `post` (`cod_post`, `titulo_post`, `descr_post`, `tip_post`, `cod_doc`, `cod_bibl`, `cod_usua`, `dathor_post`, `cod_cate`, `sta_post`, `reqconfi_post`, `hierarq_post`, `unic_post`, `datexpir_post`) VALUES
(2, '', '', '', 0, 0, 0, '0000-00-00 00:00:00', 0, '', '', '', '', '0000-00-00 00:00:00'),
(3, '', '', '', 0, 0, 0, '0000-00-00 00:00:00', 0, '', '', '', '', '0000-00-00 00:00:00'),
(4, '', '', '', 0, 0, 0, '0000-00-00 00:00:00', 0, '', '', '', '', '0000-00-00 00:00:00'),
(5, '', '', '', 0, 0, 0, '0000-00-00 00:00:00', 0, '', '', '', '', '0000-00-00 00:00:00'),
(6, '', '', '', 0, 0, 0, '0000-00-00 00:00:00', 0, '', '', '', '', '0000-00-00 00:00:00'),
(7, 'teste', 'desc', 'V', 22, 2, 1, '2014-10-01 00:00:00', 9, '0', '0', '0', 'N', '0000-00-00 00:00:00'),
(8, 'teste', 'desc', 'V', 22, 2, 1, '2014-10-01 00:00:00', 9, '0', '0', '0', 'N', '0000-00-00 00:00:00'),
(9, 'Titulo', 'desc', 'V', 22, 2, 1, '2014-10-01 00:00:00', 9, '0', '0', '0', '0', '0000-00-00 00:00:00'),
(10, 'Titulo', 'desc', 'V', 22, 2, 1, '2014-10-01 00:00:00', 9, '0', '0', '0', '0', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `cod_usua` int(11) NOT NULL AUTO_INCREMENT,
  `desc_usua` varchar(45) NOT NULL,
  `nom_usua` varchar(45) NOT NULL,
  `senha_usua` varchar(254) NOT NULL,
  `cod_grpusua` int(11) NOT NULL,
  `sta_usua` char(1) DEFAULT NULL,
  `dathrcad_usua` datetime DEFAULT NULL,
  `corpan_usua` varchar(10) DEFAULT NULL,
  `img_usua` varchar(100) DEFAULT NULL,
  `emai_usua` varchar(45) NOT NULL,
  PRIMARY KEY (`cod_usua`),
  UNIQUE KEY `nom_usua_UNIQUE` (`nom_usua`),
  KEY `fk_USUARIO_GRPUSUARIO_idx` (`cod_grpusua`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`cod_usua`, `desc_usua`, `nom_usua`, `senha_usua`, `cod_grpusua`, `sta_usua`, `dathrcad_usua`, `corpan_usua`, `img_usua`, `emai_usua`) VALUES
(1, 'JosÃ© do Carmo Neto', 'Mapnepp', '4515230', 1, '', '0000-00-00 00:00:00', '#000', 'blog/img/usuario/10_mapnetos.jpg', 'mapnetos@hotmail.com');

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `bibldoc`
--
ALTER TABLE `bibldoc`
  ADD CONSTRAINT `fk_biblioteca_has_DOCUMENTO_biblioteca1` FOREIGN KEY (`biblioteca_cod_bibl`) REFERENCES `biblioteca` (`cod_bibl`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_biblioteca_has_DOCUMENTO_DOCUMENTO1` FOREIGN KEY (`DOCUMENTO_cod_doc`) REFERENCES `documento` (`cod_doc`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `permgrup`
--
ALTER TABLE `permgrup`
  ADD CONSTRAINT `fk_GRPUSUARIO_has_permicoes_GRPUSUARIO1` FOREIGN KEY (`cod_gpr`) REFERENCES `grpusuario` (`cod_gpr`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_GRPUSUARIO_has_permicoes_permicoes1` FOREIGN KEY (`cod_perm`) REFERENCES `permicoes` (`cod_perm`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_USUARIO_GRPUSUARIO` FOREIGN KEY (`cod_grpusua`) REFERENCES `grpusuario` (`cod_gpr`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
