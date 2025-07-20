use bibliothéque;
create table Etudiant(
CodeEtudiant int Auto_increment Primary Key,
Nom varchar(20) not null,
Prenom varchar(20) not null,
Adresse varchar(30),
Classe varchar(10) not null
);
create table Livre(
CodeLivre int auto_increment primary key,
Titre varchar(30) not null,
Auteur varchar(30) not null,
DateEdition date not null
);
create table Emprunter(
CodeLivre int,
CodeEtudiant int,
dateEmrunter date not null,
constraint FK1 	foreign key (CodeLivre)
				REFERENCES Livre(CodeLivre)
                on update cascade
                on delete cascade ,
constraint FK2 	foreign key (CodeEtudiant)
				references Etudiant(CodeEtudiant)
                on update cascade
                on delete cascade,
constraint PK 	Primary key(CodeLivre, CodeEtudiant)
);
