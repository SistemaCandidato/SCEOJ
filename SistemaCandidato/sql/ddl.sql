-- MySQL Script generated by MySQL Workbench
-- Sun Jun  3 16:46:21 2018
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE TABLE IF NOT EXISTS `Teste`.`administrador` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(60) NOT NULL,
  `username` VARCHAR(20) NOT NULL,
  `password` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `password` (`password` ASC),
  INDEX `nome` (`nome` ASC),
  INDEX `id` (`id` ASC),
  UNIQUE INDEX `username` (`username` ASC))
ENGINE = InnoDB;

SELECT vagas_has_candidatos.id, candidatos.id, candidatos.nome, candidatos.idade, candidatos.email, vagas.nome AS VG_nome, empresas.razao FROM vagas_has_candidatos INNER JOIN candidatos ON candidatos_id = candidatos.id INNER JOIN vagas ON vagas_has_candidatos.vagas_id = vagas.id INNER JOIN empresas WHERE vagas.id_empresa = empresas.id AND empresas.id = 1 AND vagas_has_candidatos.status = 'I'
CREATE TABLE IF NOT EXISTS `Teste`.`empresas` (
  `id` INT NOT NULL AUTO_INCREMENT,
   username varchar(50) not null,
   password varchar(50) not null,
   nomefantasia varchar(255) not null,
  `razao` VARCHAR(100) NOT NULL,
  `endereco` VARCHAR(100) NOT NULL,
  `bairro` VARCHAR(100) NOT NULL,
  `numero` VARCHAR(5) NULL,
  `cep` VARCHAR(9) NOT NULL,
  `complemento` VARCHAR(150) NULL,
  `cidade` VARCHAR(45) NOT NULL,
  `estado` VARCHAR(2) NOT NULL,
  `cnpj` VARCHAR(15) NOT NULL,
   email varchar(60) NOT NULL,
  `telefone` VARCHAR(16) NOT NULL,
   Comp int default 0,
   datainclusao datetime not null,
  PRIMARY KEY (`id`),
  INDEX `id` (`id` ASC),
  INDEX `razao` (`razao` ASC),
  UNIQUE INDEX `cnpj` (`cnpj` ASC)
  )
ENGINE = InnoDB;

drop table candidatos;
CREATE TABLE IF NOT EXISTS `Teste`.`candidatos` (
  `id` INT NOT NULL AUTO_INCREMENT,
`username` VARCHAR(20) NOT NULL,
  `password` VARCHAR(50) NOT NULL,
  `nome` VARCHAR(50) NOT NULL,
  `idade` INT NOT NULL,
  `endereco` VARCHAR(100) NOT NULL,
  `bairro` VARCHAR(45) NOT NULL,
  `numero` VARCHAR(5) NULL,
  `complemento` VARCHAR(150) NULL,
  `cidade` VARCHAR(45) NOT NULL,
  `estado` VARCHAR(2) NOT NULL,
  `email` VARCHAR(60) NOT NULL,
  `telefone` VARCHAR(16) NOT NULL,
  `rg` VARCHAR(15) NOT NULL,
  `cpf` VARCHAR(15) NOT NULL,
    Comp int default 0,
datainclusao datetime not null,
   PRIMARY KEY (`id`),
  INDEX `nome` (`nome` ASC),
  UNIQUE INDEX `username` (`username` ASC),
  UNIQUE INDEX `rg` (`rg` ASC),
  UNIQUE INDEX `cpf` (`cpf` ASC),
  UNIQUE INDEX `email` (`email` ASC))
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table `mydb`.`vagas`
-- -----------------------------------------------------
select * from vagas;
CREATE TABLE IF NOT EXISTS `Teste`.`vagas` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `datainicio` DATE NOT NULL,
  `datafinal` DATE NULL,
  `nome` VARCHAR(100) NOT NULL,
  `descricao` VARCHAR(255) NOT NULL,
  `salario` FLOAT NULL,
  `periodo` VARCHAR(30) NULL,
  `obs` VARCHAR(255) NULL,
  `valealimentacao` FLOAT NULL,
  `ajudadecusto` FLOAT NULL,
  `id_empresa` INT NOT NULL,
  `Areas_id` INT NOT NULL, 
  PRIMARY KEY (`id`),
  INDEX `nome` (`nome` ASC),
  INDEX `descricao` (`descricao` ASC),
  INDEX `obs` (`obs` ASC),
  CONSTRAINT `fk_empresas_vagas`
    FOREIGN KEY (`id_empresa`)
    REFERENCES `Teste`.`empresas` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
CONSTRAINT `fk_areas_vagas`
    FOREIGN KEY (`Areas_id`)
    REFERENCES `Teste`.`areas` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`cursos`
-- -----------------------------------------------------
select * from cursos;
CREATE TABLE IF NOT EXISTS `Teste`.`cursos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(100) NOT NULL,
  `descricao` VARCHAR(255) NOT NULL,
  `datainicial` DATE NOT NULL,
  `datafinal` DATE NULL,
  `quantidadesemestres` INT NOT NULL,
  `quantidadesemestresfinalizados` INT NOT NULL,
  `status` CHAR(1) NOT NULL,
  `candidatos_id` INT NOT NULL,
  PRIMARY KEY (`id`, `candidatos_id`),
  INDEX `nome` (`nome` ASC),
  INDEX `descricao` (`descricao` ASC),
  INDEX `fk_candidatoscursos_candidatos1_idx` (`candidatos_id` ASC),
  CONSTRAINT `fk_candidatoscursos_candidatos1`
    FOREIGN KEY (`candidatos_id`)
    REFERENCES `Teste`.`candidatos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`conhecimentos`
-- -----------------------------------------------------
select * from conhecimentos;
CREATE TABLE IF NOT EXISTS `Teste`.`conhecimentos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(50) NOT NULL,
  `descricao` VARCHAR(255) NOT NULL,
  `datainicial` DATE NOT NULL,
  `datafinal` DATE NULL,
  `local` VARCHAR(100) NOT NULL,
  `status` CHAR(1) NOT NULL,
  `candidatos_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `nome` (`nome` ASC),
  INDEX `descricao` (`descricao` ASC),
  INDEX `fk_conhecimentos_candidatos1_idx` (`candidatos_id` ASC),
  CONSTRAINT `fk_conhecimentos_candidatos1`
    FOREIGN KEY (`candidatos_id`)
    REFERENCES `Teste`.`candidatos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`trabalhos`
-- -----------------------------------------------------
select * from trabalhos;
CREATE TABLE IF NOT EXISTS `Teste`.`trabalhos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(100) NOT NULL,
  `descricao` VARCHAR(255) NOT NULL,
  `dateinicial` DATE NOT NULL,
  `datafinal` DATE NULL,
  `setor` VARCHAR(45) NOT NULL,
  `funcao` VARCHAR(100) NOT NULL,
  `tarefas` VARCHAR(255) NOT NULL,
  `status` CHAR(1) NOT NULL,
  `candidatos_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `nome` (`nome` ASC),
  INDEX `descricao` (`descricao` ASC),
  INDEX `setor` (`setor` ASC),
  INDEX `funcao` (`funcao` ASC),
  INDEX `tarefas` (`tarefas` ASC),
  INDEX `fk_trabalhos_candidatos1_idx` (`candidatos_id` ASC),
  CONSTRAINT `fk_trabalhos_candidatos1`
    FOREIGN KEY (`candidatos_id`)
    REFERENCES `Teste`.`candidatos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table `mydb`.`vagas_has_candidatos`
-- -----------------------------------------------------
select * from vagas_has_candidatos;
CREATE TABLE IF NOT EXISTS `Teste`.`vagas_has_candidatos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `vagas_id` INT NOT NULL,
  `candidatos_id` INT NOT NULL,
`status` varchar(1) NOT NULL DEFAULT 'I',
  PRIMARY KEY (`id`),
  INDEX `fk_vagas_has_candidatos_candidatos1_idx` (`candidatos_id` ASC),
  INDEX `fk_vagas_has_candidatos_vagas1_idx` (`vagas_id` ASC),
  CONSTRAINT `fk_vagas_has_candidatos_vagas`
    FOREIGN KEY (`vagas_id`)
    REFERENCES `Teste`.`vagas` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_vagas_has_candidatos_candidatos`
    FOREIGN KEY (`candidatos_id`)
    REFERENCES `Teste`.`candidatos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table `mydb`.`entrevistas`
-- -----------------------------------------------------
select * from entrevistas;
CREATE TABLE IF NOT EXISTS `Teste`.`entrevistas` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `data` DATE NOT NULL,
  `hora` TIME NOT NULL,
  `status` varchar(45) NOT NULL,
  `obs` VARCHAR(255) NULL,
  `vagas_has_candidatos_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `data` (`data` ASC),
  INDEX `fk_entrevistas_vagas_has_candidatos1_idx` (`vagas_has_candidatos_id` ASC),
  CONSTRAINT `fk_entrevistas_vagas_has_candidatos1`
    FOREIGN KEY (`vagas_has_candidatos_id`)
    REFERENCES `Teste`.`vagas_has_candidatos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`areas`
-- -----------------------------------------------------
select * from areas;
CREATE TABLE IF NOT EXISTS `Teste`.`areas` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(60) NOT NULL,
  `descricao` VARCHAR(255) NOT NULL,
  `administrador_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `nome` (`nome` ASC),
  INDEX `descricao` (`descricao` ASC),
  INDEX `fk_areas_administrador1_idx` (`administrador_id` ASC),
  CONSTRAINT `fk_areas_administrador1`
    FOREIGN KEY (`administrador_id`)
    REFERENCES `Teste`.`administrador` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`areas_has_vagas`
-- -----------------------------------------------------

select * from areas_has_vagas;
CREATE TABLE IF NOT EXISTS `Teste`.`areas_has_vagas` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `areas_id` INT NOT NULL,
  `vagas_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_areas_has_vagas_vagas1_idx` (`vagas_id` ASC),
  INDEX `fk_areas_has_vagas_areas1_idx` (`areas_id` ASC),
  CONSTRAINT `fk_areas_has_vagas_areas1`
    FOREIGN KEY (`areas_id`)
    REFERENCES `Teste`.`areas` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_areas_has_vagas_vagas1`
    FOREIGN KEY (`vagas_id`)
    REFERENCES `Teste`.`vagas` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`areas_has_candidatos`
-- -----------------------------------------------------
select * from areas_has_candidatos;
CREATE TABLE IF NOT EXISTS `Teste`.`areas_has_candidatos` (
  `id` INT NOT NULL,
  `areas_id` INT NOT NULL,
  `candidatos_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_areas_has_candidatos_candidatos1_idx` (`candidatos_id` ASC),
  INDEX `fk_areas_has_candidatos_areas1_idx` (`areas_id` ASC),
  CONSTRAINT `fk_areas_has_candidatos_areas1`
    FOREIGN KEY (`areas_id`)
    REFERENCES `Teste`.`areas` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_areas_has_candidatos_candidatos1`
    FOREIGN KEY (`candidatos_id`)
    REFERENCES `Teste`.`candidatos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


select * from vagas_has_candidatos;


update candidato set username='Octavio',password='tata',nome='Octavio',idade=19,cidade='Salvador',estado='BA' where id = 2
update candidato set username='Octavio',password='tata',nome='Octavio',idade=19,cidade='Tubarao',estado='SC' where id = 3 

insert into conhecimentos values (default, 'Octavio', 'Tecnico em Desenvolvimento de Sistemas', '2017/12/18', '18/12/2018', '2');
insert into cursos values (default, 'Octavio', 'Tecnico em Desenvolvimento de Sistemas', '2017/12/18', '2018/08/09', '3', '2', '2');
insert into trabalhos values (default, 'Octavio', 'Tecnico em Desenvolvimento de Sistemas', '2017/12/18', '2018/08/09', 'Computacao', 'Java', 'Implementar o codigo', '2');


select vagas.nome from vagas;
select * from candidato where id ='1';
insert into administrador values (default,'administrador','$123','$Vinicius');




insert into candidatos values (default,'octavio.n09','tata','Octavio',19,'Rua Julio Francisco Regis','Vila Moema','43','401','Tubarao','SC','octavionaspolinineto@gmail.com','996178590','454663','065717565-01',default)

insert into administrador values (default,'admin','admin1','123');


SELECT vagas_has_candidatos.id, candidatos.id, candidatos.nome, candidatos.idade, candidatos.email, vagas.nome AS VG_nome, empresas.razao FROM vagas_has_candidatos INNER JOIN candidatos ON vagas_has_candidatos.candidatos_id = candidatos.id INNER JOIN vagas ON vagas_has_candidatos.vagas_id = vagas.id INNER JOIN empresas WHERE vagas.id_empresa = empresas.id AND empresas.id = 1 AND vagas_has_candidatos.status = 'I';

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;