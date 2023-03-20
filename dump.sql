CREATE DATABASE BestModal;
USE BestModal;

create table pesquisa(
	id int not null primary key auto_increment,
	partida varchar(100) not null,
    objetivo varchar(100) not null,
    retirada date not null,
    entrega date not null,
    carga varchar(100) not null,
    peso decimal(10,2) not null,
    volume decimal(10,2) not null
)Engine = InnoDB;

create table anuncios(
    id int not null primary key auto_increment, 
	cnpj varchar(18) not null,
    valor decimal(10,2) not null,
    cidade varchar(100) not null,
    uf varchar(3) not null,
    cep varchar(8) not null,
    telefone varchar(10) not null,
    retirada date not null

)Engine = InnoDB;

create table endereco(
    cod int not null primary key auto_increment,
    cep integer not null,
    rua varchar(100) not null,
    uf varchar(3) not null,
    cidade varchar(100) not null,
    bairro varchar(100) not null,
    endereco varchar(100) not null,
    complemento varchar(100) not null,
    codigoIBGE int(7) not null
)Engine = InnoDB;

create table cliente(
	cpf varchar(11) not null primary key,
    email varchar(100) not null,
    nome varchar(100) not null,
    sobreNome varchar(100) not null,
    rua varchar(100) not null,
    bairro varchar(100) not null,
    numero varchar(4) not null,
    cep varchar(8) not null,
    telefone varchar(11) not null
    
)engine = InnoDB;

create table empresa(
	cnpj varchar(14) not null primary key,
    email varchar(100) not null,
    nome varchar(100) not null,
    rua varchar(100) not null,
    bairro varchar(100) not null,
    numero varchar(100) not null,
    cep varchar(8) not null,
    telefone varchar(11) not null
)Engine = InnoDB;