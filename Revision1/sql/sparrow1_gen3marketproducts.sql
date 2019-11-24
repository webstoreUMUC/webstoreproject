CREATE DATABASE IF NOT EXISTS gen3marketproducts;

USE gen3marketproducts;

CREATE TABLE IF NOT EXISTS 	clothes (
  productID int(3) NOT NULL,
  productName varchar(24) DEFAULT NULL,
  productCategory varchar(12) DEFAULT NULL,
  productQty int(5) DEFAULT NULL,
  productSize int(5) DEFAULT NULL,
  description varchar(255) DEFAULT NULL,
  price int(5) DEFAULT NULL,
  PRIMARY KEY (productID)
);

INSERT INTO clothes (productID, productName, productCategory, productQty, productSize, description, price)
VALUES
	(101, 'Mens Pants', 'Men', 5, 32, 'Blue', 40),
	(102, 'Mens Shirt', 'Men', 5, 40, 'White', 15),
	(103, 'Mens Shoes', 'Men', 5, 10, 'Black', 60), 
	(104, 'Mens Sweatshirt', 'Men', 5, 31, 'Grey', 30),
	(105, 'Mens Shorts', 'Men', 5, 8, 'Black', 15),
	(201, 'Womens Pants', 'Women', 5, 8, 'Blue', 50),
	(202, 'Womans Shirt', 'Women', 5, 8, 'White', 20),
	(203, 'Womens Shoes','Women', 5, 8, 'Pink', 50),
	(204, 'Womens Dress', 'Women', 5, 8, 'Purple', 60),
	(205, 'Womens Skirts', 	'Women', 5, 8, 'Black', 30),
	(301, 'Childrens pants', 'Children', 5, 5, 'Blue', 12),
	(302, 'Childrens Shirts', 'Children', 5, 5, 'White', 10),
	(303, 'Childrens Shoes', 'Children', 5, 5, 'Black', 35),
	(304, 'Childrens Jacket', 'Children', 5, 5, 'Black', 30),
	(305, 'Childrens Longsleeve', 'Children', 5, 5, 'Red', 25);
	
CREATE TABLE IF NOT EXISTS 	food (
  productID int(3) NOT NULL,
  productName varchar(255) DEFAULT NULL,
  productCategory varchar(12) DEFAULT NULL,
  productQty int(5) DEFAULT NULL,
  productSize int(5) DEFAULT NULL,
  price int(5) DEFAULT NULL,
  PRIMARY KEY (productID)
);

INSERT INTO food (productID, productName, productCategory, productQty, productSize, price)
VALUES
	(101, 'Soup', 'Canned', 10, 19, 2), 
	(102, 'Fruit', 'Canned', 10, 19, 2), 
	(103, 'Vegetable', 'Canned', 10, 19, 2),
	(104, 'Fish', 'Canned', 10, 19, 2),
	(105, 'Bread', 'Canned', 10, 19, 2),
	(201, 'Spinach', 'Baby', 10, 3.5, 2)
	(202, 'Broccoli', 'Baby', 10, 3.5, 2),
	(203, 'Tomato', 'Baby', 10, 3.5, 2), 
	(204, 'Sweet Potato', 'Baby', 10, 3.5, 2),
	(205, 'Chicken', 'Baby', 10, 3.5, 2),
	(301, 'Skittles', 'Candy', 10, 2.17, 1),
	(302, 'Snickers', 'Candy', 10, 2.07, 1),
	(303, 'M&Ms', 'Candy', 10, 1.69, 1),
	(304, 'Starbursts', 'Candy', 10, 2.07, 1),
	(305, 'Trident Gum', 'Candy', 10, 14, 1);
	
CREATE TABLE IF NOT EXISTS 	beverages (
  productID int(3) NOT NULL,
  productName varchar(255) DEFAULT NULL,
  productCategory varchar(12) DEFAULT NULL,
  productQty int(5) DEFAULT NULL,
  productSize int(5) DEFAULT NULL,
  price int(5) DEFAULT NULL,
  PRIMARY KEY (productID)
);

INSERT INTO beverages (productID, productName, productCategory, productQty, productSize, price)
VALUES
	(101, 'Apple Juice', 'Juice', 10, 64, 2.15), 
	(102, 'Cranberry Juice', 'Juice', 10, 64, 2.50), 
	(103, 'Orange Juice', 'Juice', 10, 59, 4.89), 
	(201, 'Fruit Punch', 'Artificial', 10, 60, 1.62), 
	(202, 'Blueberry', 'Artificial', 10, 60, 1.62),
	(203, 'Cherry', 'Artificial', 10, 60, 1.62), 
	(301, 'Milk', 'Dairy', 10, 1, 2.99),
	(302, 'Chocolate Milk', 'Dairy', 10, 1, 2.69),
	(303, 'Almond Milk', 'Dairy', 10, .5, 2.97),
	(401, 'Coca Cola', 'Soda', 10, 2, 1.79),
	(402, 'Sprite', 'Soda', 10, 2, 1.79),
	(403, 'Ginger Ale', 'Soda', 10, 2, 1.79),
	(404, 'Pepsi', 'Soda', 10, 2, 1.79),
	(405, 'Dr. Pepsi', 'Soda', 10, 2, 1.79),
	(406, 'Mountain Dew', 'Soda', 10, 2, 1.79);

	
	
CREATE TABLE IF NOT EXISTS 	electronics (
  productID int(3) NOT NULL,
  productName varchar(255) DEFAULT NULL,
  productCategory varchar(12) DEFAULT NULL,
  productQty int(5) DEFAULT NULL,
  price int(5) DEFAULT NULL,
  PRIMARY KEY (productID)
);

INSERT INTO electronics (productID, productName, productCategory, productQty, price)
VALUES
	(101, 'iPhone 11', 'Phone', 3, 699), 
	(102, 'Samsung Galaxy S10', 'Phone', 3, 699), 
	(103, 'Google Pixel 3', 'Phone', 3, 499), 
	(104, 'Razer Phone 2', 'Phone', 3, 399), 
	(201, 'Phone Charger', 'Peripheral', 10, 10), 
	(202, 'Keyboard', 'Peripheral', 5, 45), 
	(203, 'Mouse', 'Peripheral', 5, 18),
	(204, 'Monitor','Peripheral', 5, 100),
	(205, 'Controller', 'Peripheral', 5, 40),
	(206, 'Headset', 'Peripheral', 5, 50),
	(207, 'Microphone', 'Peripheral', 5, 50),
	(208, 'Webcam', 'Peripheral', 5, 55),
	(301, 'Xbox', 'Console', 3, 289),
	(302, 'PS4', 'Console', 3, 299),
	(303, 'Switch', 'Console', 3, 299);