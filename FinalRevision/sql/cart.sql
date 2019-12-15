USE gen3market;

CREATE TABLE IF NOT EXISTS cart (
  cartID int(11) NOT NULL AUTO_INCREMENT,
  email varchar(64) DEFAULT NULL,
  productTable varchar(16) DEFAULT NULL,
  category varchar(16) DEFAULT NULL,
  name varchar(16) DEFAULT NULL,
  productID int(3) DEFAULT NULL,
  productQty int(5) DEFAULT NULL,
  price decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (cartID)
);