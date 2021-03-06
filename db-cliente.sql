-- MySQL Script generated by MySQL Workbench
-- Fri Apr 26 20:01:50 2019
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `CRUDCI` DEFAULT CHARACTER SET utf8 ;
USE `CRUDCI` ;

-- -----------------------------------------------------
-- Table `CRUDCI`.`Cliente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `CRUDCI`.`Cliente` (
  `idCliente` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `Nome` VARCHAR(50) NULL,
  `Sobrenome` VARCHAR(100) NULL,
  `CPF` VARCHAR(15) NULL,
  `Email` VARCHAR(255) NULL,
  `CEP` VARCHAR(9) NULL,
  `Logradouro` VARCHAR(70) NULL,
  `Numero` VARCHAR(10) NULL,
  `Complemento` VARCHAR(20) NULL,
  `Bairro` VARCHAR(45) NULL,
  `Cidade` VARCHAR(45) NULL,
  `Telefone` VARCHAR(15) NULL,
  `Celular` VARCHAR(15) NULL,
  `Imagem` VARCHAR(100) NULL,
  `DNasc` DATE NULL,
  PRIMARY KEY (`idCliente`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
