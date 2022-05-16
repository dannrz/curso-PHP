CREATE DATABASE notas_master;
use notas_master;

CREATE TABLE usuarios(
id			int(11) auto_increment not null,
nombre		varchar(20) not null,
apellidos	varchar(20) not null,
email		varchar(50) not null,
password	varchar(50) not null,
fecha		date not null,
constraint pk_usuarios PRIMARY KEY(id),
constraint uq_email unique(email)
) engine=InnoDB;


create table notas(
id			int(11) auto_increment not null,
usuario_id	int(11) not null,
titulo		varchar(70) not null,
descripcion mediumtext,
fecha		date not null,
constraint pk_notas primary key(id),
constraint fk_entrada_usuario foreign key(usuario_id) references usuarios(id)
);