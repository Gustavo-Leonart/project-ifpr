-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema banco
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema banco
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `banco` DEFAULT CHARACTER SET latin1 ;
USE `banco` ;

-- -----------------------------------------------------
-- Table `banco`.`cliente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `banco`.`cliente` (
  `id_cliente` INT(10) NOT NULL,
  `nome` VARCHAR(50) NOT NULL,
  `rg` VARCHAR(12) NOT NULL,
  `cpf` VARCHAR(11) NOT NULL,
  `dataNasc` DATE NOT NULL,
  `email` VARCHAR(50) NULL DEFAULT NULL,
  `cep` INT(10) NULL DEFAULT NULL,
  `num_casa` INT(10) NOT NULL,
  `complemento` VARCHAR(20) NULL DEFAULT NULL,
  `telefone` INT(11) NOT NULL,
  PRIMARY KEY (`id_cliente`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `banco`.`fornecedor`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `banco`.`fornecedor` (
  `id_fornecedor` INT(10) NOT NULL,
  `nome` VARCHAR(50) NOT NULL,
  `rg` VARCHAR(12) NOT NULL,
  `cnpj` VARCHAR(18) NOT NULL,
  `cpf` VARCHAR(11) NOT NULL,
  `dataNasc` DATE NOT NULL,
  `email` VARCHAR(50) NULL DEFAULT NULL,
  `cep` INT(10) NULL DEFAULT NULL,
  `num_casa` INT(10) NOT NULL,
  `complemento` VARCHAR(20) NULL DEFAULT NULL,
  `telefone` INT(11) NOT NULL,
  PRIMARY KEY (`id_fornecedor`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `banco`.`menu`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `banco`.`menu` (
  `id_menu` INT(10) NOT NULL,
  `des_receita` TEXT NOT NULL,
  `tempo_preparo` INT(11) NOT NULL,
  `data_cadastro` DATETIME NOT NULL,
  PRIMARY KEY (`id_menu`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `banco`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `banco`.`usuario` (
  `id_usuario` INT(10) NOT NULL,
  `nome` VARCHAR(50) NOT NULL,
  `email` VARCHAR(50) NOT NULL,
  `senha` VARCHAR(20) NOT NULL,
  PRIMARY KEY (`id_usuario`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `banco`.`pedido`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `banco`.`pedido` (
  `id_pedido` INT(10) NOT NULL,
  `id_cliente` INT(10) NOT NULL,
  `id_menu` INT(10) NOT NULL,
  `id_usuario` INT(10) NOT NULL,
  `data_cadastro` DATETIME NULL DEFAULT NULL,
  `data_entrega` DATETIME NULL DEFAULT NULL,
  `valor` DOUBLE NULL DEFAULT NULL,
  `status_pedido` BIT(1) NULL DEFAULT NULL,
  PRIMARY KEY (`id_pedido`),
  INDEX `fk_pedido_cliente1_idx` (`id_cliente` ASC),
  INDEX `fk_pedido_menu1_idx` (`id_menu` ASC),
  INDEX `fk_pedido_usuario1_idx` (`id_usuario` ASC),
  CONSTRAINT `fk_pedido_cliente1`
    FOREIGN KEY (`id_cliente`)
    REFERENCES `banco`.`cliente` (`id_cliente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_pedido_menu1`
    FOREIGN KEY (`id_menu`)
    REFERENCES `banco`.`menu` (`id_menu`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_pedido_usuario1`
    FOREIGN KEY (`id_usuario`)
    REFERENCES `banco`.`usuario` (`id_usuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `banco`.`tipo_produto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `banco`.`tipo_produto` (
  `id_tipo_produto` INT(10) NOT NULL,
  `des_tipo_produto` VARCHAR(50) NULL DEFAULT NULL,
  PRIMARY KEY (`id_tipo_produto`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `banco`.`produto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `banco`.`produto` (
  `id_produto` INT(10) NOT NULL,
  `id_tipo_produto` INT(10) NOT NULL,
  `id_fornecedor` INT(10) NOT NULL,
  `des_produto` VARCHAR(50) NOT NULL,
  `marca` VARCHAR(50) NOT NULL,
  `preco` DOUBLE NOT NULL,
  `data_validade` DATE NULL DEFAULT NULL,
  `data_compra` DATE NULL DEFAULT NULL,
  `quantidade` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id_produto`),
  INDEX `fk_produto_fornecedor_idx` (`id_fornecedor` ASC),
  INDEX `fk_produto_tipo_produto1_idx` (`id_tipo_produto` ASC),
  CONSTRAINT `fk_produto_fornecedor`
    FOREIGN KEY (`id_fornecedor`)
    REFERENCES `banco`.`fornecedor` (`id_fornecedor`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_produto_tipo_produto1`
    FOREIGN KEY (`id_tipo_produto`)
    REFERENCES `banco`.`tipo_produto` (`id_tipo_produto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
