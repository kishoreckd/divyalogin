CREATE DATABASE login;
USE login;
CREATE TABLE datas(
id int not null AUTO_INCREMENT,
    name varchar(255) NOT null,
    email varchar(255) NOT null,
    password varchar(255) NOT null,
    PRIMARY KEY(id)
    
);