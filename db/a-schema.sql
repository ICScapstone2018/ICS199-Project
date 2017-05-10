-- MySQL Script generated by MySQL Workbench
-- Tue May  9 18:26:46 2017
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema ICS199Team1DB
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema ICS199Team1DB
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `ICS199Team1DB` DEFAULT CHARACTER SET utf8 ;
USE `ICS199Team1DB` ;

-- -----------------------------------------------------
-- Table `ICS199Team1DB`.`customer`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ICS199Team1DB`.`customer` ;

CREATE TABLE IF NOT EXISTS `ICS199Team1DB`.`customer` (
  `cust_id` INT NOT NULL AUTO_INCREMENT COMMENT 'customer id',
  `first_name` VARCHAR(45) NULL,
  `last_name` VARCHAR(45) NULL,
  `email` VARCHAR(200) NULL,
  `password` VARCHAR(45) NULL,
  PRIMARY KEY (`cust_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ICS199Team1DB`.`product`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ICS199Team1DB`.`product` ;

CREATE TABLE IF NOT EXISTS `ICS199Team1DB`.`product` (
  `prod_id` INT NOT NULL AUTO_INCREMENT COMMENT 'customer id',
  `prod_name` VARCHAR(200) NOT NULL COMMENT 'product name',
  `prod_desc` MEDIUMTEXT NOT NULL COMMENT 'product description',
  `stock_amount` INT NOT NULL,
  `unit_price` VARCHAR(45) NOT NULL,
  `photo` VARCHAR(200) NOT NULL,
  PRIMARY KEY (`prod_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ICS199Team1DB`.`customer_order`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ICS199Team1DB`.`customer_order` ;

CREATE TABLE IF NOT EXISTS `ICS199Team1DB`.`customer_order` (
  `order_id` INT NOT NULL AUTO_INCREMENT COMMENT 'customer order id',
  `bill_addr` VARCHAR(200) NULL COMMENT 'billing street address',
  `bill_city` VARCHAR(45) NULL COMMENT 'billing city',
  `bill_pc` VARCHAR(45) NULL COMMENT 'billing postal code',
  `bill_country` VARCHAR(45) NULL COMMENT 'billing country',
  `ship_addr` VARCHAR(200) NULL COMMENT 'shipping street address',
  `ship_city` VARCHAR(45) NULL COMMENT 'shipping city',
  `ship_pc` VARCHAR(45) NULL COMMENT 'shipping postal code',
  `ship_country` VARCHAR(45) NULL COMMENT 'shipping country',
  `order_date` DATETIME NULL,
  `cust_id` INT NOT NULL COMMENT 'customer id',
  PRIMARY KEY (`order_id`),
  INDEX `fk_customer_order_customer_idx` (`cust_id` ASC),
  CONSTRAINT `fk_customer_order_customer`
    FOREIGN KEY (`cust_id`)
    REFERENCES `ICS199Team1DB`.`customer` (`cust_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ICS199Team1DB`.`order_product`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ICS199Team1DB`.`order_product` ;

CREATE TABLE IF NOT EXISTS `ICS199Team1DB`.`order_product` (
  `order_id` INT NOT NULL,
  `prod_id` INT NOT NULL,
  `qty` INT NULL,
  PRIMARY KEY (`order_id`, `prod_id`),
  INDEX `fk_product_has_customer_order_customer_order1_idx` (`order_id` ASC),
  INDEX `fk_product_has_customer_order_product1_idx` (`prod_id` ASC),
  CONSTRAINT `fk_product_has_customer_order_product1`
    FOREIGN KEY (`prod_id`)
    REFERENCES `ICS199Team1DB`.`product` (`prod_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_product_has_customer_order_customer_order1`
    FOREIGN KEY (`order_id`)
    REFERENCES `ICS199Team1DB`.`customer_order` (`order_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
