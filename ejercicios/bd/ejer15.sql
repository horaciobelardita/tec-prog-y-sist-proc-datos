
CREATE TYPE sexo AS ENUM ('M', 'F');
CREATE TYPE estado_civil AS ENUM ('S', 'C');

create table ejer15 (
  id serial,
  edad int not null,
  nya varchar(100) not null,
  sexo sexo,
  estado_civil estado_civil
);

INSERT INTO  ejer15 (edad, nya, sexo, estado_civil) VALUES (15, 'Pepe', 'M', 'S');
INSERT INTO  ejer15 (edad, nya, sexo, estado_civil) VALUES (30, 'Maria', 'F', 'C');
INSERT INTO  ejer15 (edad, nya, sexo, estado_civil) VALUES (36, 'Gabriela', 'F', 'S');
INSERT INTO  ejer15 (edad, nya, sexo, estado_civil) VALUES (26, 'Jorge', 'M', 'S');
INSERT INTO  ejer15 (edad, nya, sexo, estado_civil) VALUES (25, 'Marcelo', 'M', 'S');
INSERT INTO  ejer15 (edad, nya, sexo, estado_civil) VALUES (45, 'Mario', 'M', 'C');