CREATE DATABASE IF NOT EXISTS MeteorDB;
USE MeteorDB;


##--------------------PRODUCTS-------------------------
CREATE TABLE IF NOT EXISTS products (
	product_id INT(10) NOT NULL AUTO_INCREMENT,
	product_name VARCHAR(100) NOT NULL,
	product_brand VARCHAR(40) NOT NULL,
	product_category VARCHAR(20) NOT NULL,
	model_year	INT(4) NOT NULL,
	product_specifications	TEXT NOT NULL,
	product_price DECIMAL(6,2) NOT NULL,
	stock INT(4),
	product_image VARCHAR(100) DEFAULT 'default_prod+0uct_image.png',
	PRIMARY KEY(product_id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;


##----------------SERVICES---------------------------
CREATE TABLE IF NOT EXISTS services(
	service_id INT(10) NOT NULL AUTO_INCREMENT,
	service_name VARCHAR(100) NOT NULL,
	service_price DECIMAL(6,2) NOT NULL,
	service_description TEXT,
	PRIMARY KEY(service_id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;



#-------------CART------------------------------
CREATE TABLE IF NOT EXISTS cart(
    product_id INT(10) NOT NULL,
    quantity INT(4) NOT NULL,
    FOREIGN KEY(product_id) REFERENCES products(product_id) 

)ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS contact(
	contact_id INT(10) NOT NULL AUTO_INCREMENT,
	enquiry VARCHAR(100) NOT NULL,
	model VARCHAR(100) NOT NULL,
	description TEXT NOT NULL,
	firstName VARCHAR(100) NOT NULL,
	lastName VARCHAR(100) NOT NULL,
	email VARCHAR(100) NOT NULL,
	phone INT(11) NOT NULL,
	PRIMARY KEY(contact_id);
	consent;
)

CREATE TABLE IF NOT EXISTS `about` (
  `id` int(10) NOT NULL,
  `title` varchar(100) NOT NULL,
  `message` text NOT NULL
  PRIMARY KEY(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;