# MySql
- Create Db
``` SQL
drop database if exists bici;
create database bici;
use bici;

create table Login (
	id_credenziali int auto_increment,
	email varchar(60) not null,
	psw_sha512 char(128) not null,
	primary key(id_credenziali)
);

create table Utenti (
	id_utente int auto_increment,
	nome varchar(40) not null,
	cognome varchar(40) not null,
	id_credenziali int not null unique,
	foreign key (id_credenziali) references Login(id_credenziali)
	on delete cascade,
	primary key(id_utente)
);

create table Gare (
	id_gara int auto_increment,
	nome varchar(40) not null,
	maxConcorrenti int not null default -1,
	chiusa boolean not null default false,
	primary key(id_gara)
);

create table Organizzatori (
	id_gara int not null, 	-- pk
	id_utente int not null, -- pk
	foreign key (id_gara) references Gare (id_gara),
	foreign key (id_utente) references Utenti (id_utente),
	primary key (id_gara, id_utente)
);

create table Concorrenti (
	id_gara int not null, 	-- pk
	id_utente int not null, -- pk
	foreign key (id_gara) references Gare (id_gara),
	foreign key (id_utente) references Utenti (id_utente),
	primary key (id_gara, id_utente)
);
```
- Add addictional data

```SQL
insert into Login (email, psw_sha512)
values
("test@gmail.com", sha2('1234', 512)),
("tset@liamg.moc", sha2('4321', 512)),
("qwerty@gmail.com", sha2('8765', 512)),
("ciao@gmail.com", sha2('5678', 512));

insert into Utenti (nome, cognome, id_credenziali)
values
("pippo","grande",1),
("oppip","ednarg",2),
("poppo","qwerty",3),
("poppi","ytrewq",4);

insert into Gare (nome, maxConcorrenti)
values
("Gara Lunghissima", 275),
("Gara Media", 25),
("Gara Corta", 57);

insert into Organizzatori (id_gara, id_utente)
values
(1,1);

insert into Concorrenti (id_gara, id_utente)
values
(1,2);
```