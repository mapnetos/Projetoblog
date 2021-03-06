-- MySQL Script generated by MySQL Workbench
-- 11/10/14 12:40:32
-- Model: New Model    Version: 1.0
SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema blog
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `blog` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `blog` ;

-- -----------------------------------------------------
-- Table `blog`.`GRPUSUARIO`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `blog`.`GRPUSUARIO` (
  `cod_gpr` INT NOT NULL AUTO_INCREMENT,
  `desc_gpr` VARCHAR(45) NOT NULL,
  `img_pgr` VARCHAR(100) NULL,
  `sta_gpr` CHAR NOT NULL,
  `dathor_gpr` DATETIME NOT NULL,
  PRIMARY KEY (`cod_gpr`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `blog`.`USUARIO`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `blog`.`USUARIO` (
  `cod_usua` INT NOT NULL AUTO_INCREMENT,
  `desc_usua` VARCHAR(45) NOT NULL,
  `nom_usua` VARCHAR(45) NOT NULL,
  `senha_usua` VARCHAR(254) NOT NULL,
  `cod_grpusua` INT NOT NULL,
  `sta_usua` CHAR NULL,
  `dathrcad_usua` DATETIME NULL,
  `corpan_usua` VARCHAR(10) NULL,
  `img_usua` VARCHAR(100) NULL,
  `emai_usua` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`cod_usua`),
  INDEX `fk_USUARIO_GRPUSUARIO_idx` (`cod_grpusua` ASC),
  UNIQUE INDEX `nom_usua_UNIQUE` (`nom_usua` ASC),
  UNIQUE INDEX `senha_usua_UNIQUE` (`senha_usua` ASC),
  CONSTRAINT `fk_USUARIO_GRPUSUARIO`
    FOREIGN KEY (`cod_grpusua`)
    REFERENCES `blog`.`GRPUSUARIO` (`cod_gpr`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `blog`.`permicoes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `blog`.`permicoes` (
  `cod_perm` INT NOT NULL AUTO_INCREMENT,
  `desc_perm` VARCHAR(45) NOT NULL,
  `sta_perm` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`cod_perm`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `blog`.`permgrup`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `blog`.`permgrup` (
  `cod_permgrup` INT NOT NULL AUTO_INCREMENT,
  `cod_gpr` INT NOT NULL,
  `cod_perm` INT NOT NULL,
  INDEX `fk_GRPUSUARIO_has_permicoes_permicoes1_idx` (`cod_perm` ASC),
  INDEX `fk_GRPUSUARIO_has_permicoes_GRPUSUARIO1_idx` (`cod_gpr` ASC),
  PRIMARY KEY (`cod_permgrup`),
  CONSTRAINT `fk_GRPUSUARIO_has_permicoes_GRPUSUARIO1`
    FOREIGN KEY (`cod_gpr`)
    REFERENCES `blog`.`GRPUSUARIO` (`cod_gpr`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_GRPUSUARIO_has_permicoes_permicoes1`
    FOREIGN KEY (`cod_perm`)
    REFERENCES `blog`.`permicoes` (`cod_perm`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `blog`.`DOCUMENTO`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `blog`.`DOCUMENTO` (
  `cod_doc` INT NOT NULL AUTO_INCREMENT,
  `desc_doc` VARCHAR(45) NOT NULL,
  `datcria_doc` DATETIME NOT NULL,
  `datup_doc` VARCHAR(45) NOT NULL,
  `tam_doc` VARCHAR(10) NOT NULL,
  `local_doc` VARCHAR(45) NULL,
  `estenc_doc` VARCHAR(45) NULL,
  `cod_usua` VARCHAR(45) NULL,
  `qtddow_doc` VARCHAR(45) NULL,
  `icon_doc` VARCHAR(45) NULL,
  PRIMARY KEY (`cod_doc`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `blog`.`categoria`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `blog`.`categoria` (
  `cod_catg` INT NOT NULL,
  `nom_catg` VARCHAR(45) NULL,
  `obs_catg` VARCHAR(45) NULL,
  `sta_ctg` VARCHAR(45) NULL,
  `dathor_gtg` VARCHAR(45) NULL,
  PRIMARY KEY (`cod_catg`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `blog`.`biblioteca`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `blog`.`biblioteca` (
  `cod_bibl` INT NOT NULL,
  `desc_bibl` VARCHAR(45) NULL,
  `obs_bibl` VARCHAR(45) NULL,
  `tip_bibl` VARCHAR(45) NULL,
  `dathor_bibl` VARCHAR(45) NULL,
  `imgpa_bibl` VARCHAR(45) NULL,
  PRIMARY KEY (`cod_bibl`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `blog`.`bibldoc`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `blog`.`bibldoc` (
  `cod_bibldoc` VARCHAR(45) NOT NULL,
  `biblioteca_cod_bibl` INT NOT NULL,
  `DOCUMENTO_cod_doc` INT NOT NULL,
  INDEX `fk_biblioteca_has_DOCUMENTO_DOCUMENTO1_idx` (`DOCUMENTO_cod_doc` ASC),
  INDEX `fk_biblioteca_has_DOCUMENTO_biblioteca1_idx` (`biblioteca_cod_bibl` ASC),
  PRIMARY KEY (`cod_bibldoc`),
  CONSTRAINT `fk_biblioteca_has_DOCUMENTO_biblioteca1`
    FOREIGN KEY (`biblioteca_cod_bibl`)
    REFERENCES `blog`.`biblioteca` (`cod_bibl`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_biblioteca_has_DOCUMENTO_DOCUMENTO1`
    FOREIGN KEY (`DOCUMENTO_cod_doc`)
    REFERENCES `blog`.`DOCUMENTO` (`cod_doc`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `blog`.`POST`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `blog`.`POST` (
  `cod_post` INT NOT NULL AUTO_INCREMENT,
  `titulo_post` VARCHAR(45) NOT NULL,
  `descr_post` VARCHAR(45) NOT NULL,
  `tip_post` CHAR NOT NULL,
  `cod_doc` INT NOT NULL,
  `cod_bibldoc` INT NOT NULL,
  `cod_usua` INT NOT NULL,
  `dathor_post` DATETIME NULL,
  `cod_cate` INT NOT NULL,
  `sta_post` CHAR NULL,
  `reqconfi_post` CHAR NULL,
  `hierarq_post` CHAR NULL,
  `unic_post` CHAR NULL,
  `datexpir_post` DATETIME NULL,
  PRIMARY KEY (`cod_post`),
  INDEX `fk_POST_DOCUMENTO1_idx` (`cod_doc` ASC),
  INDEX `fk_POST_categoria1_idx` (`cod_cate` ASC),
  INDEX `fk_POST_bibldoc1_idx` (`cod_bibldoc` ASC),
  INDEX `fk_POST_USUARIO1_idx` (`cod_usua` ASC),
  UNIQUE INDEX `cod_post_UNIQUE` (`cod_post` ASC),
  CONSTRAINT `fk_POST_DOCUMENTO1`
    FOREIGN KEY (`cod_doc`)
    REFERENCES `blog`.`DOCUMENTO` (`cod_doc`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_POST_categoria1`
    FOREIGN KEY (`cod_cate`)
    REFERENCES `blog`.`categoria` (`cod_catg`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_POST_bibldoc1`
    FOREIGN KEY (`cod_bibldoc`)
    REFERENCES `blog`.`bibldoc` (`cod_bibldoc`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_POST_USUARIO1`
    FOREIGN KEY (`cod_usua`)
    REFERENCES `blog`.`USUARIO` (`cod_usua`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `blog`.`biblioteca`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `blog`.`biblioteca` (
  `cod_bibl` INT NOT NULL,
  `desc_bibl` VARCHAR(45) NULL,
  `obs_bibl` VARCHAR(45) NULL,
  `tip_bibl` VARCHAR(45) NULL,
  `dathor_bibl` VARCHAR(45) NULL,
  `imgpa_bibl` VARCHAR(45) NULL,
  PRIMARY KEY (`cod_bibl`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `blog`.`banner`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `blog`.`banner` (
  `cod_ban` INT NOT NULL,
  `nom_ban` VARCHAR(45) NOT NULL,
  `titulo_ban` VARCHAR(100) NULL,
  `text_ban` VARCHAR(120) NULL,
  `cod_doc` INT NOT NULL,
  `datinic_ban` DATE NULL,
  `datfim_ban` DATE NULL,
  `dathor_ban` DATETIME NOT NULL,
  PRIMARY KEY (`cod_ban`),
  INDEX `fk_banner_DOCUMENTO1_idx` (`cod_doc` ASC),
  CONSTRAINT `fk_banner_DOCUMENTO1`
    FOREIGN KEY (`cod_doc`)
    REFERENCES `blog`.`DOCUMENTO` (`cod_doc`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `blog`.`sistema`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `blog`.`sistema` (
  `cod_sis` INT NOT NULL,
  `nom_sis` VARCHAR(45) NOT NULL,
  `apel_sis` VARCHAR(45) NOT NULL,
  `ender_sis` VARCHAR(45) NULL,
  `cod_doc` VARCHAR(45) NULL,
  `corpad_sis` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`cod_sis`))
ENGINE = InnoDB;

USE `blog` ;

-- -----------------------------------------------------
-- Placeholder table for view `blog`.`view1`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `blog`.`view1` (`id` INT);

-- -----------------------------------------------------
-- View `blog`.`view1`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `blog`.`view1`;
USE `blog`;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
