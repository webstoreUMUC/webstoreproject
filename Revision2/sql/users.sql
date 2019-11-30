USE gen3market;

CREATE TABLE IF NOT EXISTS customer (
  customerID int(11) NOT NULL AUTO_INCREMENT,
  first_name varchar(24) DEFAULT NULL,
  last_name varchar(24) DEFAULT NULL,
  city varchar(16) DEFAULT NULL,
  states varchar(16) DEFAULT NULL,
  zipcode int(5) DEFAULT NULL,
  phone_number varchar(16) DEFAULT NULL,
  email varchar(64) DEFAULT NULL,
  pass varchar(32) DEFAULT NULL,
  PRIMARY KEY (customerID)
);