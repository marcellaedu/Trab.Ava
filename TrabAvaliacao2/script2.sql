CREATE TABLE tipo (
    id int AUTO_INCREMENT NOT NULL, 
    tipo varchar(25) NOT NULL,
    CONSTRAINT pk_tipo PRIMARY KEY (id) 
);

CREATE TABLE genero(
    id int AUTO_INCREMENT NOT NULL, 
    genero varchar(25) NOT NULL,
    id_tipo int NOT NULL,
    CONSTRAINT pk_genero PRIMARY KEY (id),
    FOREIGN KEY (id_tipo) REFERENCES tipo (id)
);

CREATE TABLE avaliacao (
    id int AUTO_INCREMENT NOT NULL, 
    nome_pessoa varchar(70) NOT NULL,
    nome_entretenimento varchar(70) NOT NULL,
    data_publicacao date NOT NULL,
    avaliacao varchar(300) NOT NULL,
    id_tipo int NOT NULL,
    id_genero int NOT NULL,
    CONSTRAINT pk_avaliacao PRIMARY KEY (id),
    FOREIGN KEY (id_tipo) REFERENCES tipo (id),
    FOREIGN KEY (id_genero) REFERENCES genero (id)

);

INSERT INTO tipo (tipo) VALUES ('Livros');
INSERT INTO tipo (tipo) VALUES ('Séries');
INSERT INTO tipo (tipo) VALUES ('Filmes');

INSERT INTO genero (genero, id_tipo) VALUES ('Ficção científica', 1);
INSERT INTO genero (genero, id_tipo) VALUES ('Quadrinhos', 1);
INSERT INTO genero (genero, id_tipo) VALUES ('Literatura nacional', 1);
INSERT INTO genero (genero, id_tipo) VALUES ('Outros', 1);

INSERT INTO genero (genero, id_tipo) VALUES ('Ação', 2);
INSERT INTO genero (genero, id_tipo) VALUES ('Documentário', 2);
INSERT INTO genero (genero, id_tipo) VALUES ('Suspense', 2);
INSERT INTO genero (genero, id_tipo) VALUES ('Outros', 2);

INSERT INTO genero (genero, id_tipo) VALUES ('Romance', 3);
INSERT INTO genero (genero, id_tipo) VALUES ('Comédia', 3);
INSERT INTO genero (genero, id_tipo) VALUES ('Terror', 3);
INSERT INTO genero (genero, id_tipo) VALUES ('Outros', 3);
