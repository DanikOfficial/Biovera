

-- Criação da Base de Dados --
CREATE DATABASE biovera CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

-- Usa base de dados --
USE biovera;

CREATE TABLE `plantas` (
  `codigo` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(125) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `preco` decimal(10,2) NOT NULL,
  `descricao` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `dimensao` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipologia` int NOT NULL,
  PRIMARY KEY (`codigo`),
  UNIQUE KEY `uk_nome` (`nome`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `compartimentos` (
  `codigo_compartimento` int NOT NULL AUTO_INCREMENT,
  `nome_compartimento` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `dimensao_compartimento` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `codigo_planta` int NOT NULL,
  PRIMARY KEY (`codigo_compartimento`),
  KEY `fk_PlantaCompartimento` (`codigo_planta`),
  CONSTRAINT `fk_PlantaCompartimento` FOREIGN KEY (`codigo_planta`) REFERENCES `plantas` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `fotos` (
  `codigo_foto` int NOT NULL AUTO_INCREMENT,
  `foto_url` varchar(125) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `codigo_planta` int NOT NULL,
  PRIMARY KEY (`codigo_foto`),
  UNIQUE KEY `url` (`foto_url`),
  KEY `fk_FotoCompartimento` (`codigo_planta`),
  CONSTRAINT `fk_FotoCompartimento` FOREIGN KEY (`codigo_planta`) REFERENCES `plantas` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

SHOW tables;

-- Inserindo alguns dados para testar a base de dados --

INSERT INTO plantas(nome, preco, descricao, dimensao, tipologia) VALUES('Planta 1', 15000.50, 'Descrição da Planta 1', '40x25', 4);
INSERT INTO plantas(nome, preco, descricao, dimensao, tipologia) VALUES('Planta 2', 25000.50, 'Descrição da Planta 2', '70x35', 2);
INSERT INTO plantas(nome, preco, descricao, dimensao, tipologia) VALUES('Planta 3', 11000.50, 'Descrição da Planta 3', '30x15', 1);

INSERT INTO compartimentos(nome_compartimento, dimensao_compartimento, codigo_planta) VALUES('quarto', '200x100', 1);
INSERT INTO compartimentos(nome_compartimento, dimensao_compartimento, codigo_planta) VALUES('quarto', '150x200', 1);
INSERT INTO compartimentos(nome_compartimento, dimensao_compartimento, codigo_planta) VALUES('quarto', '170x200', 1);
INSERT INTO compartimentos(nome_compartimento, dimensao_compartimento, codigo_planta) VALUES('quarto', '153x210', 1);

INSERT INTO compartimentos(nome_compartimento, dimensao_compartimento, codigo_planta) VALUES('quarto', '200x100', 2);
INSERT INTO compartimentos(nome_compartimento, dimensao_compartimento, codigo_planta) VALUES('quarto', '150x200', 2);

INSERT INTO compartimentos(nome_compartimento, dimensao_compartimento, codigo_planta) VALUES('quarto', '200x100', 3);

INSERT INTO fotos(foto_url, codigo_planta) VALUES('URL 01 Planta 1', 1);
INSERT INTO fotos(foto_url, codigo_planta) VALUES('URL 02 Planta 1', 1);
INSERT INTO fotos(foto_url, codigo_planta) VALUES('URL 03 Planta 1', 1);

INSERT INTO fotos(foto_url, codigo_planta) VALUES('URL 01 Planta 2', 2);
INSERT INTO fotos(foto_url, codigo_planta) VALUES('URL 02 Planta 2', 2);
INSERT INTO fotos(foto_url, codigo_planta) VALUES('URL 03 Planta 2', 2);

INSERT INTO fotos(foto_url, codigo_planta) VALUES('URL 01 Planta 3', 3);
INSERT INTO fotos(foto_url, codigo_planta) VALUES('URL 03 Planta 3', 3);

show tables;

-- Fim --
