CREATE DATABASE sexto_trabalho;

USE sexto_trabalho;

CREATE TABLE categorias(
    id_cate int not null PRIMARY KEY  AUTO_INCREMENT,
    nome VARCHAR (50)
);

CREATE TABLE fabricantes(
    id_fab int not null PRIMARY KEY  AUTO_INCREMENT,
    nome VARCHAR (50),
    cnpj VARCHAR (11)
);
