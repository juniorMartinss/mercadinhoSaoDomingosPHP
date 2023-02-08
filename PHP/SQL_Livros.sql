create database phpLivrariaCrud;

use phpLivrariaCrud;

create table pessoa(
	cpf bigint not null primary key auto_increment,
    nome varchar(150) not null,
    telefone varchar(15) not null,
    dataNasc date not null,
    endereco int not null
)engine=innoDB;

create table login(
	usuario varchar(50) not null primary key,
    senha varchar(250) not null
)engine=innoDB;

create table estoque(
	codigo int not null auto_increment primary key,
	nomeProduto varchar(100) not null,
    quantidade int not null,
    valor double not null
)engine=innoDB;	

create table endereco(
	codigo int not null auto_increment primary key,
    logradouro varchar(150) not null,
    numero varchar(10) not null,
    complemento varchar(50) not null, 
    bairro varchar(70) not null,
    cidade varchar(100) not null,
    uf varchar(2) not null,
    pais varchar(30) not null,
    cep varchar(20)  not null
)engine=innoDB;

create table funcionario(
	matricula int not null primary key auto_increment,
    salario decimal(10,2) not null,
    cargo varchar(50) not null,
    endereco int
)engine=innoDB;


drop table funcionario;

select * from endereco;

drop table funcionario;

INSERT INTO login (usuario, senha) VALUES ('jr1986', 'sen@c');
