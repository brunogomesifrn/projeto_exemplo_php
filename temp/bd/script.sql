CREATE DATABASE IF NOT EXISTS nucleos;

USE nucleos;

CREATE TABLE IF NOT EXISTS area(
    id int not null auto_increment primary key,
    nome VARCHAR(100) not null
);

CREATE TABLE IF NOT EXISTS publico(
    id int not null auto_increment primary key,
    nome VARCHAR(100) not null
);

CREATE TABLE IF NOT EXISTS nucleo(
    codigo int not null auto_increment primary key,
    nome VARCHAR(500) not null,
    sigla VARCHAR(50) not null,
    imagem VARCHAR(500) not null,
    data_criacao DATE not null,
    coordenador VARCHAR(500) not null,
    area_id int,
    FOREIGN KEY (area_id) REFERENCES area(id)
);

CREATE TABLE IF NOT EXISTS nucleo_publico(
    nucleo_codigo int,
    publico_id int,
    FOREIGN KEY (nucleo_codigo) REFERENCES nucleo(codigo),
    FOREIGN KEY (publico_id) REFERENCES publico(id),
    PRIMARY KEY(nucleo_codigo, publico_id)
);

CREATE TABLE IF NOT EXISTS usuario(
    id int not null auto_increment primary key,
    nome varchar(100) not null,
    usuario varchar(50) not null,
    senha char(40) not null
);

insert into usuario (usuario, senha) values ("bruno", "123");