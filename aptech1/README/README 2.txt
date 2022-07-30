
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

CREATE TABLE admin (
	id int PRIMARY KEY AUTO_INCREMENT,
    username varchar(100),
    password varchar(100),
    admin_status int
)

---
 CREATE TABLE role (
	id int PRIMARY KEY AUTO_INCREMENT,
    name varchar(10)
)