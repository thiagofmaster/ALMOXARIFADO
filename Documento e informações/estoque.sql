create table estoque.usuario(
id int not null primary key auto_increment,
nome varchar(200) not null,
email varchar(200) not null,
cpf varchar(200) not null,
senha varchar (50) not null
);

create table estoque.niveisAcesso(
id int not null primary key auto_increment,
niveis varchar (100) not null,
id_usuario int, foreign key(id_usuario) references usuario(id)
);

create table estoque.solicitacao(
id int not null primary key auto_increment,
status int not null,
motivo varchar (100) not null,
data_solicitacao varchar (100) not null,
id_usuario int, foreign key(id_usuario) references usuario(id)
);

create table estoque.entrada_produtos(
id int not null primary key auto_increment,
codigo varchar(200) not null,
validade varchar(200) not null,
data_entrada varchar(200) not null,
fornecedor varchar (200) not null,
id_solicitacao int, foreign key(id_solicitacao) references solicitacao(id),
id_usuario int, foreign key(id_usuario) references usuario(id)
);

create table estoque.unidade(
id int not null primary key auto_increment,
nome_unidade varchar (100) not null,
status int not null,
id_usuario int, foreign key(id_usuario) references usuario(id)
);

create table estoque.setor(
id int not null primary key auto_increment,
nome_setor varchar (100) not null,
status int not null,
id_unidade int, foreign key(id_unidade) references unidade(id)
);

create table estoque.sala(
id int not null primary key auto_increment,
nome_sala varchar (100) not null,
status int not null,
id_setor int, foreign key(id_setor) references setor(id)
);