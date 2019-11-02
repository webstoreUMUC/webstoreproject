CREATE DATABASE IF NOT EXISTS foodbank;

USE foodbank;

CREATE TABLE IF NOT EXISTS customers (
  customerID int(11) NOT NULL AUTO_INCREMENT,
  firstName varchar(255) DEFAULT NULL,
  lastName varchar(255) DEFAULT NULL,
  phoneNumber varchar(10) DEFAULT NULL,
  PRIMARY KEY (customerID)
);

INSERT INTO customers (customerID, firstName, lastName, phoneNumber)
VALUES
	(1,'Kim','Miller','3015551212'),
	(2,'Vanessa','Rodgers','1230001234'),
	(3,'Jared','Lippert','2234235678'),
	(4,'Miguel','Liongson','1234567890'),
	(5,'Masih','Ahmadi', '4567890123'),
	(6,'Janak','Rajani','2025551234'),
	(7,'Susan','Smith','5050123448');

CREATE TABLE IF NOT EXISTS invoices (
  orderID int(11) NOT NULL,
  productID int(11) NOT NULL,
  orderAmount int(11) DEFAULT NULL,
  PRIMARY KEY (orderID,productID),
  KEY productID (productID)
);

INSERT INTO invoices (orderID, productID, orderAmount)
VALUES
	(1,3,2),
	(2,8,3),
	(3,1,2),
	(4,2,1),
	(5,6,3),
	(6,5,2);

CREATE TABLE IF NOT EXISTS orders (
  orderID int(11) NOT NULL AUTO_INCREMENT,
  customerID int(11) DEFAULT NULL,
  orderDate date DEFAULT NULL,
  orderTime time DEFAULT NULL,
  PRIMARY KEY (orderID),
  KEY customerID (customerID)
);


INSERT INTO orders (orderID, customerID, orderDate, orderTime)
VALUES
	(1,1,'2017-05-01','12:11:46'),
	(2,6,'2017-05-01','14:33:09'),
	(3,7,'2017-05-02','19:27:39'),
	(4,2,'2017-05-02','22:11:33'),
	(5,3,'2017-05-04','08:45:03'),
	(6,5,'2017-05-05','05:05:05');


CREATE TABLE IF NOT EXISTS products (
  productID int(11) NOT NULL AUTO_INCREMENT,
  productName varchar(255) DEFAULT NULL,
  productCategory varchar(2) DEFAULT NULL,
  productQty int(11) DEFAULT NULL,
  PRIMARY KEY (productID)
);


INSERT INTO products (productID, productName, productCategory, productQty)
VALUES
	(1,'Soups','CF',45),
	(2,'Vegetables','CF',40),
	(3,'Tomato Sauce','CF',20),
	(4,'Rice','DF',50),
	(5,'Peanut Butter','DF',50),
	(6,'Bottle Water','BV',100),
	(7,'Cereal','DF',50),
	(8,'Coffee','BV',45),
	(9,'Juice','BV',55);
