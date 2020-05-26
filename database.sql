CREATE TABLE subscribers (
		id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
		email VARCHAR (255) NOT NULL UNIQUE,
		username VARCHAR (255),
		password VARCHAR (255)
);

-- Learned from Khan Academy SQL tutorials
--This is the table/database created in MySQLi that is used to store subscribers
