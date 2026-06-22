CREATE DATABASE dog_db;

USE dog_db;

CREATE TABLE dogs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    d_name VARCHAR(100),
    d_breed VARCHAR(100),
    d_age VARCHAR(50),
    d_add VARCHAR(150),
    d_color VARCHAR(50),
    d_height VARCHAR(50),
    d_weight VARCHAR(50)
);