a continuacion esta la creacion de la tabla para la base de datos en MySQL

CREATE DATABASE IF NOT EXISTS comercio;

USE comercio;

CREATE TABLE IF NOT EXISTS tiendas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre_usuario VARCHAR(255) NOT NULL,
    correo_usuario VARCHAR(255) NOT NULL,
    telefono VARCHAR(15),
    nombre_tienda VARCHAR(255) NOT NULL,
    pais VARCHAR(50) NOT NULL,
    direccion_tienda VARCHAR(255) NOT NULL
);