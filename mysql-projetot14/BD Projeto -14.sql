create database T14_miniprojeto

use T14_miniprojeto

create table usuario
(
id_usuario int not null auto_increment primary key,
nome_usuario varchar(50) not null, 
login_usuario varchar(30) not null unique,
senha_usuario varchar(30) not null, 
data_usuario timestamp not null,
obs_usuario varchar(255) null, 
status_usuario varchar(20) not null default 'ATIVO'
)

select * from usuario

insert into usuario
(nome_usuario,login_usuario,senha_usuario)
values
('Adiministrador','admin','123')

drop table funcionario

create table funcionario
(
id_funcionario int not null auto_increment primary key,
nome_funcionario varchar(50) not null ,
nasc_funcionario date not null,
data_funcionario timestamp not null,
cpf_funcionario char(14) not null unique,
logradouro_funcionario varchar(50) not null,
numero_funcionario int not null,
comp_funcionario varchar(20) null,
cep_funcionario char(9) not null,
bairro_funcionario varchar(50) not null,
cidade_funcionario varchar(50) not null,
uf_funcionario char(2) not null,
telefone1_funcionario char(16) not null,
telefone2_funcionario char(16) null,
obs_funcionario varchar(200) null,
status_funcionario varchar(20) not null default 'ATIVO' 
)
select * from funcionario


create table produto
(
id_produto  int  not null  auto_increment  primary key,
nome_produto  varchar(30)  not null  unique,
data_produto  timestamp  not null,
qtde_produto  int  not null ,
vcusto_produto  decimal(10,2)  not null,
vvenda_produto  decimal(10,2)  not null,
obs_produto  varchar(200)  null,
status_produto  varchar(20)  not null  default 'ATIVO'  
)

drop table movi
create table movi
(
	id_mov int not null auto_increment primary key,
	id_produto_mov int not null  ,
	id_funcionario_mov int not null  ,
	qtde_mov int not null  ,
	data_mov timestamp not null  ,
	tipo_mov varchar(30) not null  ,
	obs_mov varchar(200) null  ,
	status_mov varchar(20) not null default 'ATIVO',
    
    constraint FK_id_produto_mov foreign key (id_produto_mov) references produto (id_produto),
    constraint FK_id_funcionario_mov foreign key (id_funcionario_mov) references funcionario (id_funcionario)
)

create table fornecedor
(
id_fornecedor int not null auto_increment primary key,
nome_fornecedor varchar(50) not null  ,
nasc_fornecedor date not null  ,
data_fornecedor timestamp not null , 
cnpj_fornecedor char(14) not null unique ,
logradouro_fornecedor varchar(50) not null  ,
numero_fornecedor int not null  ,
cep_fornecedor varchar(20) null  ,
bairro_fornecedor char(9) not null  ,
cidade_fornecedor varchar(50) not null  ,
uf_fornecedor varchar(50) not null  ,
telefone1_fornecedor char(2) not null  ,
telefone2_fornecedor char(16) not null  ,
telefone3_fornecedor char(16) null  ,
telefone4_fornecedor char(16) null  ,
contato_fornecedor char(16) null  ,
obs_fornecedor varchar(200) null  ,
status_fornecedor varchar(20) not null default 'ATIVO' 
)

create table os
(
id_os	int	not null auto_increment	primary key,
id_produto_os	int	not null,
data_os	timestamp	not null ,	
qtde_os	int	not null ,
obs_os varchar(200) null,
status_os varchar(20)	not null default 'ATIVO',	

	constraint FK_id_produto_os foreign key (id_produto_os) references produto (id_produto)
)

create table localesto
(
id_localesto int not null auto_increment primary key,
nome_localesto	varchar(50) not null ,
data_localesto	timestamp not null,	
obs_os	varchar(200) null ,
status_os varchar(20) not null	default 'ATIVO'	
)

create table itemesto
(
id_itemesto	int	not null auto_increment	primary key,
id_produto_itemesto	int	not null ,
id_localesto_itemesto	int	not null ,	
data_itemesto timestamp	not null ,
obs_itemesto varchar(200)	null ,
status_itemesto varchar(20) not null	default 'ATIVO'	,

    constraint FK_id_produto_itemesto foreign key (id_produto_itemesto) references produto (id_produto),
    constraint FK_localesto_itemesto foreign key (id_localesto_itemesto) references localesto (id_localesto)
)