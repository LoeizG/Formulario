
CREATE DATABASE laboratoriouno;
CREATE TABLE `laboratoriouno`.`usuario` ( 
  `id` INT NOT NULL AUTO_INCREMENT , 
  `nombre` VARCHAR(20) NOT NULL , 
  `apellido` VARCHAR(20) NOT NULL , 
  `cedula` VARCHAR(10) NOT NULL , 
  `sexo` CHAR(1) NOT NULL , 
  `fecha_nacimiento` DATE NOT NULL ,
  `direccion` VARCHAR(50) NOT NULL ,
  `correo` VARCHAR(20) NOT NULL , 
  `institucion` VARCHAR(15) NOT NULL ,
  `especialidad` VARCHAR(15) NOT NULL ,
  `telefono` VARCHAR(10) NOT NULL , 
  PRIMARY KEY (`id`)) 
ENGINE = InnoDB;
