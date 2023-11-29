CREATE DATABASE IF NOT EXISTS nucleo;

USE nucleo;

CREATE TABLE IF NOT EXISTS area(
    id int not null auto_increment primary key,
    nome VARCHAR(100)
);

CREATE TABLE IF NOT EXISTS nucleo(
    codigo int not null auto_increment primary key,
    data_criacao DATE,
    nome VARCHAR(500),
    sigla VARCHAR(50),
    imagem VARCHAR(500),
    coordenador VARCHAR(500)
);

CREATE TABLE IF NOT EXISTS usuario(
    id int not null auto_increment primary key,
    usuario varchar(50) not null,
    senha char(40) not null,
);

insert into usuario (usuario, senha) values ("bruno", "123");