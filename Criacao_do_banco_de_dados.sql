
-- Cria tabela de modalidades de empregos e insere duas modalidades logo abaixo
create table tb_modalidades(
	id int not null primary key auto_increment,
    modalidade varchar(25) not null
);
insert into tb_modalidades(modalidade)values('Home Office');
insert into tb_modalidades(modalidade)values('Presencial');
-------------------------------------------------------------------------------

-- Cria tabela de perfis de cadastro e insere duas opçoes, poderia ser outros...
create table tb_perfis(
	id int not null primary key auto_increment,
    perfil varchar(25) not null
);
insert into tb_perfis(perfil)values('Empresa');
insert into tb_perfis(perfil)values('Usuario');
-------------------------------------------------------------------------------

-- Cria a tabela de vagas cadastradas por empresas
create table tb_vagas(
	id int not null primary key auto_increment,
    id_modalidade int not null default 2,
    foreign key(id_modalidade) references tb_modalidades(id),
	titulo text not null,
	descricao text not null,
	salario int not null default 0,
	id_perfil int not null,
	foreign key(id_perfil) references tb_perfis(id),
	id_usuario int NOT NULL,
	foreign key(id_usuario) references tb_usuarios(id)
)
-------------------------------------------------------------------------------

-- Cria a tabela de Autenticação e adiciona 4 usuarios de teste
create table tb_usuarios(
	id int not null primary key auto_increment,
	email varchar(50) not null,
	senha varchar(25) not null default '1234',
	id_perfil int not null,
	foreign key(id_perfil) references tb_perfis(id),
	
);
insert into tb_usuarios(email,id_perfil)values('empresa1@teste.com.br',1);
insert into tb_usuarios(email,id_perfil)values('empresa2@teste.com.br',1);
insert into tb_usuarios(email,id_perfil)values('otavio@teste.com.br',2);
insert into tb_usuarios(email,id_perfil)values('matheus@teste.com.br',2);
-------------------------------------------------------------------------------

-- Cria a tabela da relação CANDIDO/VAGA
create table tb_candidaturas(
	id int not null primary key auto_increment,
    id_vaga int not null,
    foreign key(id_vaga) references tb_vagas(id),
	id_candidato int not null,
    foreign key(id_candidato) references tb_usuarios(id),
	id_cadastrou int not null,
    foreign key(id_cadastrou) references tb_usuarios(id)
)
-------------------------------------------------------------------------------