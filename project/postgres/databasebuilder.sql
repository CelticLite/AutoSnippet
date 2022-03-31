CREATE TABLE users (
  username VARCHAR(50),
  password VARCHAR(50),
  first_name VARCHAR(50),
  last_name VARCHAR(50),
  address VARCHAR(50),
  city VARCHAR(50),
  state VARCHAR(2), 
  zip integer,
  country VARCHAR(2),
  phone integer,
  email VARCHAR(255),
  PRIMARY KEY (username)
);

CREATE TABLE goals (
  title VARCHAR(50),
  description text,
  username VARCHAR(50),
  goalType VARCHAR(50),
  status VARCHAR(50),
  comment text[],
  tasks text[],
  PRIMARY KEY (title)
);

CREATE TABLE teams (
  teamName VARCHAR(50),
  manager VARCHAR(50),
  member1 VARCHAR(50),
  member2 VARCHAR(50),
  member3 VARCHAR(50),
  member4 VARCHAR(50),
  member5 VARCHAR(50),
  member6 VARCHAR(50),
  PRIMARY KEY (teamName)
);

CREATE TABLE comments (
  cid BIGINT NOT NULL AUTO_INCREMENT,
  uid VARCHAR(50),
  comment VARCHAR(50),
  PRIMARY KEY (uid));

COPY users
FROM 'users.csv'
DELIMITER ','
CSV HEADER;

COPY goals(title, description, username, goalType, status, comment, tasks )
FROM 'goals.csv'
DELIMITER ','
CSV HEADER;

COPY teams(teamName, manager, member1, member2, member3, member4, member5, member6 )
FROM 'teams.csv'
DELIMITER ','
CSV HEADER;

