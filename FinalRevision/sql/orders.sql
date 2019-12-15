USE gen3market;

CREATE TABLE IF NOT EXISTS orders (
  orderID int(11) NOT NULL AUTO_INCREMENT,
  fullName varchar(64) DEFAULT NULL,
  email varchar(64) DEFAULT NULL,
  address varchar(64) DEFAULT NULL,
  city varchar(16) DEFAULT NULL,
  states varchar(16) DEFAULT NULL,
  zipcode int(5) DEFAULT NULL,
  productName varchar(16) DEFAULT NULL,
  productID int(3) DEFAULT NULL,
  productQty int(5) DEFAULT NULL,
  price decimal(10,2) DEFAULT NULL,
  orderDate date DEFAULT NULL,
  orderTime time DEFAULT NULL,
  PRIMARY KEY (orderID)
);