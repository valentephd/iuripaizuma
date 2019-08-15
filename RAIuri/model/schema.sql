CREATE SCHEMA `base`;

CREATE TABLE `base`.`veiculo` (
  `idVeiculo` INT NOT NULL AUTO_INCREMENT,
  `placa` VARCHAR(8) NULL,
  `numChassi` VARCHAR(90) NULL,
  `cor` VARCHAR(45) NULL,
  `ano` VARCHAR(4) NULL,
  `marca` VARCHAR(45) NULL,
  `modelo` VARCHAR(45) NULL,
  `pesoMaximo` INT NULL,
  `preco` FLOAT NULL,
  `numRodas` INT NULL,
  PRIMARY KEY (`idVeiculo`),
  UNIQUE INDEX `placa_UNIQUE` (`placa`),
  UNIQUE INDEX `numChassi_UNIQUE` (`numChassi`)
);
