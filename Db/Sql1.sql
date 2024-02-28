CREATE DATABASE IF NOT EXISTS mvc DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;

USE mvc;

CREATE TABLE IF NOT EXISTS Cliente (
    Cod_cliente INT AUTO_INCREMENT PRIMARY KEY,
    DNI_cliente VARCHAR(10),
    Nom_cliente VARCHAR(25),
    Ape_cliente VARCHAR(25),
    Cod_postal_cliente VARCHAR(25),
    Localidad_cliente VARCHAR(25),
    Provincia_cliente VARCHAR(25),
    Email_cliente VARCHAR(25),
    Tlf_cliente VARCHAR(25),
    Observaciones VARCHAR(25)
);