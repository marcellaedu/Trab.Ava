/* TABELA de Avaliações */
CREATE TABLE avaliacao ( 
    id int AUTO_INCREMENT NOT NULL, 
    nome_pessoa varchar(70) NOT NULL,
    nome_entretenimento varchar(70) NOT NULL,
    data_publicacao date NOT NULL,
    id_tipo int NOT NULL,
    id_genero int NOT NULL,
    avaliacao varchar(300) NOT NULL,
    CONSTRAINT pk_avaliacao PRIMARY KEY (id) 
);
/* TABELA de Tipos */
CREATE TABLE tipo (
    id int AUTO_INCREMENT NOT NULL, 
    tipo varchar(25) NOT NULL,
     CONSTRAINT pk_tipo PRIMARY KEY (id) 
);
/* TABELA de Generos */
CREATE TABLE genero(
    id int AUTO_INCREMENT NOT NULL, 
    genero varchar(25) NOT NULL,
     CONSTRAINT pk_genero PRIMARY KEY (id) 
);

INSERT INTO tipo (tipo) VALUES ('Livros');
INSERT INTO tipo (tipo) VALUES ('Séries');
INSERT INTO tipo (tipo) VALUES ('Filmes');

INSERT INTO genero (genero) VALUES ('Ação');
INSERT INTO genero (genero) VALUES ('Comédia');
INSERT INTO genero (genero) VALUES ('Drama');
INSERT INTO genero (genero) VALUES ('Romance');
INSERT INTO genero (genero) VALUES ('Fatos reais');
INSERT INTO genero (genero) VALUES ('Suspense');
INSERT INTO genero (genero) VALUES ('Terror');
INSERT INTO genero (genero) VALUES ('Ficção científica');
INSERT INTO genero (genero) VALUES ('Animação');

ALTER TABLE avaliacao ADD CONSTRAINT fk_tipo FOREIGN KEY (id_tipo) REFERENCES tipo (id);
ALTER TABLE avaliacao ADD CONSTRAINT fk_genero FOREIGN KEY (id_genero) REFERENCES genero (id);