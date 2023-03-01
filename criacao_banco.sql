create table trabalhopi.tb_usuario(
	id_usuario serial,
	nm_pessoa varchar(30) not null,
	sn_usuario varchar(10) not null
);
create table trabalhopi.tb_post(
	id_post serial,
	id_usuario integer not null,
	id_tipo integer not null,
	id_nicho integer not null,
	tt_post varchar(40) not null,
	ds_post varchar(300)
);
create table trabalhopi.tb_tipo(
	id_tipo serial,
	nm_tipo varchar(20) not null
);
create table trabalhopi.tb_nicho(
	id_nicho serial,
	nm_nicho varchar(20) not null
);

alter table trabalhopi.tb_usuario add constraint pk_usuario primary key (id_usuario);
alter table trabalhopi.tb_post add constraint pk_post primary key (id_post);
alter table trabalhopi.tb_tipo add constraint pk_tipo primary key (id_tipo);
alter table trabalhopi.tb_nicho add constraint pk_nicho primary key (id_nicho);

alter table trabalhopi.tb_post add constraint fk_usuario_post foreign key (id_usuario) references trabalhopi.tb_usuario;
alter table trabalhopi.tb_post add constraint fk_tipo_post foreign key (id_tipo) references trabalhopi.tb_tipo;
alter table trabalhopi.tb_post add constraint fk_nicho_post foreign key (id_nicho) references trabalhopi.tb_nicho;

insert into trabalhopi.tb_usuario values (default, 'Millena Santos', 'Millena', '123'), (default, 'João Pedro', 'João', '456'), (default, 'Maria Silva', 'Maria', '789');

--falta tipos, não salvei

insert into trabalhopi.tb_nicho values (default, 'Culinária'), (default, 'Dia a Dia'), (default, 'Cuidados'), (default, 'Artesanato'); 