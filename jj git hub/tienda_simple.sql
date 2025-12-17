CREATE DATABASE IF NOT EXISTS tienda_simple;
USE tienda_simple;

CREATE TABLE IF NOT EXISTS productos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    precio DECIMAL(10,2) NOT NULL
);

INSERT INTO productos (nombre, precio) VALUES
('Camiseta', 45000),
('Zapatos', 120000),
('Gorra', 25000);
