INSERT INTO plantas(nome, preco, descricao, dimensao_compartimento, tipologia) VALUES('Planta 1', 15000.50, 'Descrição da Planta 1', '40x25', 4);
INSERT INTO plantas(nome, preco, descricao, dimensao_compartimento, tipologia) VALUES('Planta 2', 25000.50, 'Descrição da Planta 2', '70x35', 2);
INSERT INTO plantas(nome, preco, descricao, dimensao_compartimento, tipologia) VALUES('Planta 3', 11000.50, 'Descrição da Planta 3', '30x15', 1);

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

