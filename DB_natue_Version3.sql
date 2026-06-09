-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema db_natue
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema db_natue
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `db_natue` DEFAULT CHARACTER SET utf8 ;
USE `db_natue` ;

-- -----------------------------------------------------
-- Table `db_natue`.`productos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_natue`.`productos` (
  `codigo` INT NOT NULL,
  `nombre` VARCHAR(45) NULL,
  `descripcion` VARCHAR(45) NULL,
  `precio` VARCHAR(45) NULL,
  `costo` VARCHAR(45) NULL,
  `stock` VARCHAR(45) NULL,
  PRIMARY KEY (`codigo`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_natue`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_natue`.`usuario` (
  `CI` INT NOT NULL,
  `nombre` VARCHAR(45) NULL,
  `direccion` VARCHAR(45) NULL,
  `celular` VARCHAR(45) NULL,
  `rol` VARCHAR(45) NULL,
  `estado` VARCHAR(45) NULL,
  PRIMARY KEY (`CI`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_natue`.`pedidos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_natue`.`pedidos` (
  `id` INT NOT NULL,
  `nombre` VARCHAR(45) NULL,
  `fecha` DATE NULL,
  `estado` VARCHAR(45) NULL,
  `vendedor` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_natue`.`carrito`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_natue`.`carrito` (
  `productos_codigo` INT NOT NULL,
  `pedidos_id` INT NOT NULL,
  `cantidad` INT NULL,
  `costototal` INT NULL,
  PRIMARY KEY (`productos_codigo`, `pedidos_id`),
  INDEX `fk_productos_has_pedidos_pedidos1_idx` (`pedidos_id` ASC) ,
  INDEX `fk_productos_has_pedidos_productos_idx` (`productos_codigo` ASC) ,
  CONSTRAINT `fk_productos_has_pedidos_productos`
    FOREIGN KEY (`productos_codigo`)
    REFERENCES `db_natue`.`productos` (`codigo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_productos_has_pedidos_pedidos1`
    FOREIGN KEY (`pedidos_id`)
    REFERENCES `db_natue`.`pedidos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;