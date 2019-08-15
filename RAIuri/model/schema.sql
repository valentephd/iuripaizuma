-- Cria a base de dados
CREATE SCHEMA `base`;

-- Cria a tabela veiculo
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

-- Cria a tabela carro
CREATE TABLE `base`.`carro` (
  `idCarro` INT NOT NULL AUTO_INCREMENT,
  `idVeiculo` INT NOT NULL,
  `qntPassageiros` INT NULL,
  `numPortas` INT NULL,
  PRIMARY KEY (`idCarro`),
  INDEX `idVeiculo_idx` (`idVeiculo`),
  CONSTRAINT `idVeiculo`
    FOREIGN KEY (`idVeiculoCarro`)
    REFERENCES `base`.`veiculo` (`idVeiculo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
);

-- Cria a tabela onibus
CREATE TABLE `base`.`onibus` (
  `idOnibus` INT NOT NULL AUTO_INCREMENT,
  `idVeiculo` INT NOT NULL,
  `qtdPassageiro` INT NULL,
  `quantidadeEixo` INT NULL,
  PRIMARY KEY (`idOnibus`),
  INDEX `idVeiculo_idx` (`idVeiculo`),
  CONSTRAINT `idVeiculoOnibus`
    FOREIGN KEY (`idVeiculo`)
    REFERENCES `base`.`veiculo` (`idVeiculo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
);

-- Cria a tabela caminhao
CREATE TABLE `base`.`caminhao` (
  `idCaminhao` INT NOT NULL,
  `idVeiculo` INT NOT NULL,
  `pesoMaximo` INT NULL,
  `quantidadeEixo` INT NULL,
  PRIMARY KEY (`idCaminhao`),
  INDEX `idVeiculoCaminhao_idx` (`idVeiculo`),
  CONSTRAINT `idVeiculoCaminhao`
    FOREIGN KEY (`idVeiculo`)
    REFERENCES `base`.`veiculo` (`idVeiculo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
);