create database  if not exists ejer15;

use ejer15;

create table personas (
  id int auto_increment,
  edad tinyint not null,
  nya varchar(100) not null,
  sexo ENUM('M', 'F') NOT NULL DEFAULT 'M',
  estado_civil ENUM('S', 'C') NOT NULL DEFAULT 'S',
  PRIMARY KEY (id)
);

INSERT INTO  personas (edad, nya, sexo, estado_civil) VALUES (15, 'Pepe', 'M', 'S');
INSERT INTO  personas (edad, nya, sexo, estado_civil) VALUES (30, 'Maria', 'F', 'C');
INSERT INTO  personas (edad, nya, sexo, estado_civil) VALUES (36, 'Gabriela', 'F', 'S');
INSERT INTO  personas (edad, nya, sexo, estado_civil) VALUES (26, 'Jorge', 'M', 'S');