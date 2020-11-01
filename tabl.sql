create database if not exists eventos;
use eventos;

create table if not exists curso( 
	id_curso int primary key not null auto_increment,
	presencial varchar(30),
	nome varchar(200),
	tipo varchar(100),
	data_postagem date,
	hora_postagem time,
	data_curso date,
    hora_curso time,
	criador varchar(100),
	organizadores varchar(100),
	descricao text,
	link varchar(300),
	pais varchar(100),
	estado varchar(100),
	cidade varchar(100),
	bairro varchar(100),
	rua varchar (100),
	numero varchar(50),
	complemento varchar (50),
	cep varchar(50)
);

select * from curso;