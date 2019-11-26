DROP DATABASE   IF     EXISTS empresas;
CREATE DATABASE IF NOT EXISTS empresas;
USE empresas;

CREATE TABLE `empresa` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(25) NOT NULL,
  `apellidos` varchar(80) NOT NULL,
  PRIMARY KEY (`id`)
);

INSERT INTO empresa (nombre, apellidos) 
    VALUES ('Ane','Lauzurika');
INSERT INTO empresa (nombre, apellidos) 
    VALUES ('Mikel','Aranzeta');
INSERT INTO empresa (nombre, apellidos) 
    VALUES ('Ainhoa','Loiu');
INSERT INTO empresa (nombre, apellidos) 
    VALUES ('Maite','Urrutia');
INSERT INTO empresa (nombre, apellidos) 
    VALUES ('Igor','Ugarte');