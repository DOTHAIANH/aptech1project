
    - index.php
    - category.php
    - detail.php
    - cart.php
    - checkout.php
    - complete.php
    - contact.php
    - register/login.php


    Database:
 CREATE DATABASE Aptech1Project

 CREATE TABLE category (
	id int PRIMARY KEY AUTO_INCREMENT,
    name varchar(50)
)
---------------------------
CREATE TABLE admin (
	id int PRIMARY KEY AUTO_INCREMENT,
    username varchar(100),
    password varchar(100),
    admin_status int
)
INSERT INTO admin (username,password,admin_status) 
VALUES
('admin','admin123',0)
--------------------------------------------------------------------------
CREATE TABLE user (
	id int PRIMARY KEY AUTO_INCREMENT,
    fullname varchar(50),
    email varchar(100),
    password varchar(30),
  	created_at datetime
)

CREATE TABLE contact (
	id int PRIMARY KEY AUTO_INCREMENT,
    fullname varchar(50),
    email varchar(100),
    phone_number varchar(15),
    content longtext,
    created_at datetime
)
CREATE TABLE product (
	id int PRIMARY KEY AUTO_INCREMENT,
    product_name varchar(100),
    price varchar(50),
    amount int,
    thumbnail varchar(50),
    description text,
    status int,
    category_id int references category(id)
)

create Table infosite( 
    id int PRIMARY KEY AUTO_INCREMENT,
    address varchar(100),
    phone_number varchar(100),
    email varchar(100),
    title varchar(50),
    description text,
    facebook varchar(200),
    instagram varchar(200),
    youtube varchar(200),
    zalo varchar(200),
    logo varchar(100)
)

INSERT INTO infosite (address,phone_number,email,title,description,facebook,instagram,youtube,zalo,logo) 
VALUES('','','','','','','','','','')

CREATE TABLE gallery (
	id int PRIMARY KEY AUTO_INCREMENT,
    name_img varchar(200)
)
