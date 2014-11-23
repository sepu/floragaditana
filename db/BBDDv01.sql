SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `flora_gaditana` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci ;
USE `flora_gaditana` ;

-- -----------------------------------------------------
-- Table `flora_gaditana`.`color`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `flora_gaditana`.`color` ;

CREATE TABLE IF NOT EXISTS `flora_gaditana`.`color` (
  `idcolor` INT(11) NOT NULL,
  `nombrecolor` VARCHAR(45) CHARACTER SET 'utf8' COLLATE 'utf8_spanish_ci' NULL DEFAULT NULL,
  PRIMARY KEY (`idcolor`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_spanish_ci;


-- -----------------------------------------------------
-- Table `flora_gaditana`.`especie`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `flora_gaditana`.`especie` ;

CREATE TABLE IF NOT EXISTS `flora_gaditana`.`especie` (
  `idespecie` INT(11) NOT NULL,
  `nombreesp` VARCHAR(255) CHARACTER SET 'utf8' COLLATE 'utf8_spanish_ci' NOT NULL,
  `author` VARCHAR(100) NULL,
  `protegida` DECIMAL(10,0) NULL,
  `idsinonimo` INT(11) NULL,
  `hibrido` TINYINT(1) NOT NULL DEFAULT 0,
  `idpadre` INT(11) NULL,
  `idmadre` INT(11) NULL,
  PRIMARY KEY (`idespecie`, `idsinonimo`, `idpadre`, `idmadre`),
  INDEX `fk_especie_especie1_idx` (`idsinonimo` ASC),
  INDEX `fk_especie_especie2_idx` (`idpadre` ASC),
  INDEX `fk_especie_especie3_idx` (`idmadre` ASC),
  CONSTRAINT `fk_especie_especie1`
    FOREIGN KEY (`idsinonimo`)
    REFERENCES `flora_gaditana`.`especie` (`idespecie`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_especie_especie2`
    FOREIGN KEY (`idpadre`)
    REFERENCES `flora_gaditana`.`especie` (`idespecie`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_especie_especie3`
    FOREIGN KEY (`idmadre`)
    REFERENCES `flora_gaditana`.`especie` (`idespecie`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_spanish_ci;


-- -----------------------------------------------------
-- Table `flora_gaditana`.`familia`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `flora_gaditana`.`familia` ;

CREATE TABLE IF NOT EXISTS `flora_gaditana`.`familia` (
  `idfamilia` INT(11) NOT NULL,
  `nombrefam` VARCHAR(45) CHARACTER SET 'utf8' COLLATE 'utf8_spanish_ci' NOT NULL,
  PRIMARY KEY (`idfamilia`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_spanish_ci;


-- -----------------------------------------------------
-- Table `flora_gaditana`.`fotoesp`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `flora_gaditana`.`fotoesp` ;

CREATE TABLE IF NOT EXISTS `flora_gaditana`.`fotoesp` (
  `idfotosesp` INT(11) NOT NULL,
  `nombrefoto` VARCHAR(45) CHARACTER SET 'utf8' COLLATE 'utf8_spanish_ci' NULL DEFAULT NULL,
  `idespecie` INT(11) NOT NULL,
  PRIMARY KEY (`idfotosesp`, `idespecie`),
  INDEX `fk_fotoesp_especie1_idx` (`idespecie` ASC),
  CONSTRAINT `fk_fotoesp_especie1`
    FOREIGN KEY (`idespecie`)
    REFERENCES `flora_gaditana`.`especie` (`idespecie`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_spanish_ci;


-- -----------------------------------------------------
-- Table `flora_gaditana`.`genero`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `flora_gaditana`.`genero` ;

CREATE TABLE IF NOT EXISTS `flora_gaditana`.`genero` (
  `idgenero` INT(11) NOT NULL,
  `nombregen` VARCHAR(45) CHARACTER SET 'utf8' COLLATE 'utf8_spanish_ci' NOT NULL,
  `idfamilia` INT(11) NOT NULL,
  PRIMARY KEY (`idgenero`, `idfamilia`),
  INDEX `fk_genero_familia_idx` (`idfamilia` ASC),
  CONSTRAINT `fk_genero_familia`
    FOREIGN KEY (`idfamilia`)
    REFERENCES `flora_gaditana`.`familia` (`idfamilia`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_spanish_ci;


-- -----------------------------------------------------
-- Table `flora_gaditana`.`rel_gen_esp`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `flora_gaditana`.`rel_gen_esp` ;

CREATE TABLE IF NOT EXISTS `flora_gaditana`.`rel_gen_esp` (
  `idgenesp` INT NOT NULL,
  `idgenero` INT(11) NOT NULL,
  `idespecie` INT(11) NOT NULL,
  PRIMARY KEY (`idgenesp`, `idgenero`, `idespecie`),
  UNIQUE INDEX `idgenesp_UNIQUE` (`idgenesp` ASC),
  INDEX `fk_rel_gen_esp_genero1_idx` (`idgenero` ASC),
  INDEX `fk_rel_gen_esp_especie1_idx` (`idespecie` ASC),
  CONSTRAINT `fk_rel_gen_esp_genero1`
    FOREIGN KEY (`idgenero`)
    REFERENCES `flora_gaditana`.`genero` (`idgenero`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_rel_gen_esp_especie1`
    FOREIGN KEY (`idespecie`)
    REFERENCES `flora_gaditana`.`especie` (`idespecie`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `flora_gaditana`.`color_has_especie`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `flora_gaditana`.`color_has_especie` ;

CREATE TABLE IF NOT EXISTS `flora_gaditana`.`color_has_especie` (
  `idcolor` INT(11) NOT NULL,
  `idespecie` INT(11) NOT NULL,
  PRIMARY KEY (`idcolor`, `idespecie`),
  INDEX `fk_color_has_especie_especie1_idx` (`idespecie` ASC),
  INDEX `fk_color_has_especie_color1_idx` (`idcolor` ASC),
  CONSTRAINT `fk_color_has_especie_color1`
    FOREIGN KEY (`idcolor`)
    REFERENCES `flora_gaditana`.`color` (`idcolor`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_color_has_especie_especie1`
    FOREIGN KEY (`idespecie`)
    REFERENCES `flora_gaditana`.`especie` (`idespecie`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_spanish_ci;


-- -----------------------------------------------------
-- Table `flora_gaditana`.`user`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `flora_gaditana`.`user` ;

CREATE TABLE IF NOT EXISTS `flora_gaditana`.`user` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(255) NULL DEFAULT NULL,
  `password` VARCHAR(255) NULL DEFAULT NULL,
  `email` VARCHAR(255) NULL DEFAULT NULL,
  `created_at` DATETIME NULL DEFAULT NULL,
  `updated_at` DATETIME NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
