create database qpromotor

use qpromotor

create table Usuario(
Rut varchar(30) NOT NULL,
Nombres varchar(30) NOT NULL,
Apellido_paterno varchar(30) NOT NULL,
Apellido_materno varchar (30) NOT NULL,
Dirección varchar(20) NOT NULL,
Teléfono varchar(20) NOT NULL,
Clave varchar(50)NOT NULL,
Tipo_Usuario varchar(20) NOT NULL,
PRIMARY KEY (RUT));

create table Perfil(
Código int NOT NULL,
Descripción varchar(50)NOT NULL references Tipo_Usuario);

 insert into Usuario (Rut,Nombres,Apellido_paterno,Apellido_materno,Dirección,Teléfono,Clave,Tipo_Usuario) values('21378543-5','Charley Dee','Schrodingger','Anojepo','Calle falsa #123','934688481','1234','Común'),
 ('18956432-1','Gerald Ostion','Sotero','Ahumada','Calle falsa #204','913024325','oemono12','Administrador'),
 ('23348890-6','Andres Diucolo','Villalobos','Carrasco','Calle falsa #244','999597061','1924','Común');
 
 
 Select * from Usuario;
 
 insert into Perfil (Código, Descripción) values(1000,'Común'),(1001,'Administrador'),(1002,'Común'); 
 
 Select * from Perfil;