// A tenir en compte que tots els noms és web: usuari, contrasenya i bbdd. 

// Entrar com a root a la base de dades mysql
mysql -u root -p

// creem la base de dades
CREATE DATABASE web;


// Creem usuari per administrar la bbdd
CREATE USER 'web'@'localhost' IDENTIFIED BY 'web';


// Donem permisos a l´usuari sobre la bbdd
GRANT ALL PRIVILEGES ON web.* TO 'web'@'localhost';


// Carreguem els permisos
FLUSH PRIVILEGES;


// Sortim de Mysql
EXIT


// Entrem com a usuari web i contrasenya web (per comprovar que tot està correcte)
mysql -u web -p


// Entrem a la base de dades 
USE WEB;


// Creem la taula USUARIS amb els camps
CREATE TABLE usuaris (nom varchar(15) not null, passw varchar(30) not null, ninot tinyint primary key, grup varchar(3));


// Crear la taula AVATAR 
CREATE TABLE avatar (cod varchar(2) not null primary key, nom varchar(15), cami varchar(30) not null, stat bit not null);

// Canviar valors per posar les taules d inici

DELETE FROM usuaris where ninot < 49;
UPDATE avatar SET stat=false where cod < 49;

//Copia de seguretat i restauració  de bbdd 

mysqldump -u web -p --opt web > bkp-db-web.sql
mysql -u web -p web < bkp-db-web.sql

hola alex