-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema DB_natue
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `DB_natue` DEFAULT CHARACTER SET utf8 ;
USE `DB_natue` ;

-- -----------------------------------------------------
-- Table `DB_natue`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `DB_natue`.`usuario` (
  `CI` INT NOT NULL,
  `nombre` VARCHAR(45) NULL,
  `direccion` VARCHAR(45) NULL,
  `celular` VARCHAR(45) NULL,
  `rol` VARCHAR(45) NULL,
  `estado` VARCHAR(45) NULL,
  PRIMARY KEY (`CI`))
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table `DB_natue`.`productos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `DB_natue`.`productos` (
  `idproductos` INT AUTO_INCREMENT NOT NULL,
  `codigo` INT NULL,
  `nombre` VARCHAR(45) NULL,
  `descripcion` VARCHAR(45) NULL,
  `precio` VARCHAR(45) NULL,
  `costo` VARCHAR(45) NULL,
  `stock` VARCHAR(45) NULL,
  PRIMARY KEY (`idproductos`))
ENGINE = InnoDB;

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;