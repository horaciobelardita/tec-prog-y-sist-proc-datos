create TABLE ejer17 (
  id SERIAL,
  descripcion VARCHAR(255),
  precio DECIMAL,
  entrada INT,
  salida int
);

INSERT into ejer17 (descripcion, precio, entrada, salida) VALUES ('Leche', 25.6, 150, 20);
INSERT into ejer17 (descripcion, precio, entrada, salida) VALUES ('Huevos', 45.6, 50, 20);
INSERT into ejer17 (descripcion, precio, entrada, salida) VALUES ('Milanesas', 156, 20, 10);
INSERT into ejer17 (descripcion, precio, entrada, salida) VALUES ('Tomate', 35.6, 130, 20);