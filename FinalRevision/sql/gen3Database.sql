CREATE DATABASE IF NOT EXISTS gen3market;

USE gen3market;

CREATE TABLE IF NOT EXISTS 	clothes (
  productID int(3) NOT NULL,
  productName varchar(24) DEFAULT NULL,
  productCategory varchar(12) DEFAULT NULL,
  productQty int(5) DEFAULT NULL,
  productSize varchar(24) DEFAULT NULL,
  description varchar(255) DEFAULT NULL,
  price decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (productID)
);

INSERT INTO clothes (productID, productName, productCategory, productQty, productSize, description, price)
VALUES
	(101, 'Mens Pants', 'Men', 5, "M", 'Blue', 40),
	(102, 'Mens Shirt', 'Men', 5, "M", 'White', 15),
	(103, 'Mens Shoes', 'Men', 5, "M", 'Black', 60), 
	(104, 'Mens Sweatshirt', 'Men', 5, "M", 'Grey', 30),
	(105, 'Mens Shorts', 'Men', 5, "M", 'Black', 15),
	(201, 'Womens Pants', 'Women', 5, "M", 'Blue', 50),
	(202, 'Womans Shirt', 'Women', 5, "M", 'White', 20),
	(203, 'Womens Shoes','Women', 5, "M", 'Pink', 50),
	(204, 'Womens Dress', 'Women', 5, "M", 'Purple', 60),
	(205, 'Womens Skirts', 	'Women', 5, "M", 'Black', 30),
	(301, 'Childrens pants', 'Children', 5, "M", 'Blue', 12),
	(302, 'Childrens Shirts', 'Children', 5, "M", 'White', 10),
	(303, 'Childrens Shoes', 'Children', 5, "M", 'Black', 35),
	(304, 'Childrens Jacket', 'Children', 5, "M", 'Black', 30),
	(305, 'Childrens Longsleeve', 'Children', 5, "M", 'Red', 25);
	
CREATE TABLE IF NOT EXISTS 	food (
  productID int(3) NOT NULL,
  productName varchar(255) DEFAULT NULL,
  productCategory varchar(12) DEFAULT NULL,
  productQty int(5) DEFAULT NULL,
  productSize varchar(24) DEFAULT NULL,
  price decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (productID)
);

INSERT INTO food (productID, productName, productCategory, productQty, productSize, price)
VALUES
	(101, 'Soup', 'Canned', 10, '19 oz', 2), 
	(102, 'Fruit', 'Canned', 10, '19 oz', 2), 
	(103, 'Vegetable', 'Canned', 10, '19 oz', 2),
	(104, 'Fish', 'Canned', 10, '19 oz', 2),
	(201, 'Spinach', 'Baby', 10, '3.5 oz', 2),
	(202, 'Broccoli', 'Baby', 10, '3.5 oz', 2),
	(204, 'Sweet Potato', 'Baby', 10, '3.5 oz', 2),
	(205, 'Chicken', 'Baby', 10, '3.5 oz', 2),
	(301, 'Skittles', 'Candy', 10, '2.17 oz', 1),
	(302, 'Snickers', 'Candy', 10, '2.07 oz', 1),
	(303, 'M&Ms', 'Candy', 10, '1.69 oz', 1),
	(304, 'Starbursts', 'Candy', 10, '2.07 oz', 1),
	(305, 'Trident Gum', 'Candy', 10, '14 Pieces', 1);
	
CREATE TABLE IF NOT EXISTS 	beverages (
  productID int(3) NOT NULL,
  productName varchar(255) DEFAULT NULL,
  productCategory varchar(12) DEFAULT NULL,
  productQty int(5) DEFAULT NULL,
  productSize varchar(24) DEFAULT NULL,
  price decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (productID)
);

INSERT INTO beverages (productID, productName, productCategory, productQty, productSize, price)
VALUES
	(101, 'Apple Juice', 'Juice', 10, '64 oz', 2.15), 
	(102, 'Cranberry Juice', 'Juice', 10, '64 oz', 2.50), 
	(103, 'Orange Juice', 'Juice', 10, '59 oz', 4.89), 
	(201, 'Fruit Punch', 'Artificial', 10, '10 pack of 6 oz', 1.62), 
	(202, 'Blueberry', 'Artificial', 10, '10 pack of 6 oz', 1.62),
	(203, 'Cherry', 'Artificial', 10, '10 pack of 6 oz', 1.62), 
	(301, 'Milk', 'Dairy', 10, '1 Gallon', 2.99),
	(302, 'Chocolate Milk', 'Dairy', 10, '1 Gallon', 2.69),
	(303, 'Almond Milk', 'Dairy', 10, 'Half Gallon', 2.97),
	(401, 'Coca Cola', 'Soda', 10, '2 Liters', 1.79),
	(402, 'Sprite', 'Soda', 10, '2 Liters', 1.79),
	(403, 'Ginger Ale', 'Soda', 10, '2 Liters', 1.79),
	(404, 'Pepsi', 'Soda', 10, '2 Liters', 1.79),
	(405, 'Dr. Pepper', 'Soda', 10, '2 Liters', 1.79),
	(406, 'Mountain Dew', 'Soda', 10, '2 Liters', 1.79);

	
	
CREATE TABLE IF NOT EXISTS 	electronics (
  productID int(3) NOT NULL,
  productName varchar(255) DEFAULT NULL,
  productCategory varchar(12) DEFAULT NULL,
  productQty int(5) DEFAULT NULL,
  price decimal(10,2) DEFAULT NULL,
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
	(204, 'Monitor','Peripheral', 5, 100),
	(206, 'Headset', 'Peripheral', 5, 50),
	(301, 'Xbox', 'Console', 3, 289),
	(302, 'PS4', 'Console', 3, 299),
	(303, 'Switch', 'Console', 3, 299);