create database if not exists `banco`;
use `banco`;
create table if not exists `pedido`(
`id_pedido` int(10) not null primary key,
`id_cliente` int(10) not null,
`id_menu` int(10) not null,
`id_usuario` int(10) not null,
`data_cadastro` datetime,
`data_entrega` datetime,
`valor` double,
`status_pedido` bit(1),
primary key(id_pedido));

create table if not exists `cliente`(
id_cliente int(10) not null primary key,
nome varchar(50) not null,
rg varchar(12) not null,
cpf varchar(11) not null,
dataNasc date not null,
email varchar(50),
cep int(10),
num_casa int(10) not null,
complemento varchar(20),
telefone int(11) not null,
primary key(id_cliente));

create table if not exists `menu`(
id_menu int(10) not null primary key,
des_receita text not null,
tempo_preparo int(11) not null,
data_cadastro datetime not null,
primary key(id_menu));

create table if not exists `usuario`(
id_usuario int(10) not null primary key,
nome varchar(50) not null,
email varchar(50) not null,
senha varchar(20) not null,
primary key(id_usuario)
);

create table if not exists fornecedor(
id_fornecedor int(10) not null primary key,
nome varchar(50) not null,
rg varchar(12) not null,
cnpj varchar(18) not null,
cpf varchar(11) not null,
dataNasc date not null,
email varchar(50),
cep int(10),
num_casa int(10) not null,
complemento varchar(20),
telefone int(11) not null,
primary key(id_fornecedor));

create table if not exists produto(
id_produto int(10) not null primary key,
id_tipo_produto int(10) not null,
id_fornecedor int(10) not null,
des_produto varchar(50) not null,
marca varchar(50) not null,
preco double not null,
data_validade date,
data_compra date,
quantidade int(11),
primary key(id_produto));

create table if not exists tipo_produto(
id_tipo_produto int(10) not null primary key,
des_tipo_produto varchar(50),
primary key(id_tipo_produto));

