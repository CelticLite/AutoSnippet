CREATE TABLE users (
  username VARCHAR(50),
  password VARCHAR(50),
  fname VARCHAR(50),
  lname VARCHAR(50),
  address VARCHAR(50),
  city VARCHAR(50),
  state VARCHAR(2), 
  zip integer,
  country VARCHAR(2),
  phone VARCHAR(15),
  email VARCHAR(255),
  PRIMARY KEY (username)
);

CREATE TABLE comments (
  cid BIGINT NOT NULL AUTO_INCREMENT,
  uid VARCHAR(50),
  message VARCHAR(50),
  status VARCHAR(50),
  PRIMARY KEY (cid));


