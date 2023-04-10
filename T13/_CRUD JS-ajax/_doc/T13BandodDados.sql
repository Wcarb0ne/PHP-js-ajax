create database T13_CRUD;
use T13_CRUD;
create table Usuario
(
	id_Usuario int auto_increment not null primary key,
    nome_Usuario varchar(30) not null,
    login_Usuario varchar(15) not null unique,
    senha_Usuario varchar(15) not null,
    confirmarSenha_Usuario varchar(15) not null,
    email_Usuario varchar(30) not null,
    dataNasc_Usuario date not null,
    cpf_Usuario varchar(15) not null,
    genero_Usuario varchar(50) not null,
    telefone1_Usuario varchar(15) not null,
    telefone2_Usuario varchar(15) null,
    logradouro_Usuario varchar(50) not null,
    cidade_Usuario varchar(50) not null,
    uf_Usuario varchar(50) not null,
    cep_Usuario varchar(9) not null,
    cadastro_Usuario timestamp not null,
    status_Usuario varchar(20) not null,
    obs_Usuario varchar(255) null
);
drop table Usuario;
select * from Usuario;
create table Categoria
(
id_Categoria int auto_increment not null primary key,
cadastro_Categoria timestamp not null,
nome_Categoria varchar(30) not null,
status_Categoria varchar(20) not null,
descricao_Categoria varchar(255) not null,
obs_Categoria varchar(255) null
);
create table Produto
(
id_Produto int auto_increment not null primary key,
cadastro_Produto timestamp not null,
nome_Produto varchar(30) not null,
id_Categoria_Produto int not null,
status_Produto varchar(20) not null,
vcusto_Produto decimal not null,
vvenda_Produto decimal not null,
descricao_Produto varchar(255) not null,
obs_Produto varchar(255) null
);

ALTER TABLE Produto ADD CONSTRAINT id_Categoria_Produto FOREIGN KEY(id_Categoria_Produto) REFERENCES Categoria (id_Categoria);
describe Produto; /*apertar no raio I*/

insert into Usuario
(nome_Usuario,login_Usuario,senha_Usuario,confirmarSenha_Usuario,email_Usuario,dataNasc_Usuario,cpf_Usuario,genero_Usuario,telefone1_Usuario,telefone2_Usuario,logradouro_Usuario,cidade_Usuario,uf_Usuario,cep_Usuario,status_Usuario,obs_Usuario)
values
('administrador','adm','123','123','adm@gmail.com','2023-03-25','1122334455','Masculino','11983733531','','ferias','guarulhos','SP','07196255','Ativo','bora'),
('funciona pls','bug','aaa','aaa','adm@gmail.com','2023-05-25','1122334455','Masculino','11983733531','','ferias','guarulhos','SP','07196251','Ativo','merdaaaa')


