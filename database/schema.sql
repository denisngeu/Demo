CREATE DATABASE IF NOT EXISTS ecommerce_demo;
USE ecommerce_demo;

CREATE TABLE users (
 id INT AUTO_INCREMENT PRIMARY KEY,
 name VARCHAR(100),
 email VARCHAR(100),
 password VARCHAR(255),
 role VARCHAR(20) DEFAULT 'client'
);

CREATE TABLE products (
 id INT AUTO_INCREMENT PRIMARY KEY,
 name VARCHAR(100),
 price INT
);

CREATE TABLE orders (
 id INT AUTO_INCREMENT PRIMARY KEY,
 user_name VARCHAR(100),
 total INT,
 created_at DATETIME
);

CREATE TABLE order_items (
 id INT AUTO_INCREMENT PRIMARY KEY,
 order_id INT,
 product_name VARCHAR(100),
 price INT
);

INSERT INTO users (name,email,password,role) VALUES
('Admin','admin@demo.tld','admin123','admin');

INSERT INTO products (name,price) VALUES
('Chaussures Nike',45000),
('Téléphone Samsung',180000),
('T-shirt',15000),
('Lampe LED',12000),
('Perceuse',60000);
