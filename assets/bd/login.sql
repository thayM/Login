DROP DATABASE IF EXISTS login;
create database login;
use Login;

create table usuario(
    email varchar(50) not null,
    senha varchar(50) not null,
    nome Varchar(50) not null,
    id int(11) primary key
);

insert into usuario(email, senha, nome, id) VALUES (123,123,"Neusa",0);

