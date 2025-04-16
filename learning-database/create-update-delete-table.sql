
-- creating table using mysql

CREATE TABLE users (
	id INT(11) NOT NULL AUTO_INCREMENT,
    username VARCHAR(30) NOT NULL,
    pwd VARCHAR(255) NOT NULL,
    email VARCHAR(100) NOT NULL,
    created_at DATETIME NOT NULL DEFAULT CURRENT_TIME,
    PRIMARY KEY(id)
);

-- foreign key example

CREATE TABLE comments (
	id INT(11) NOT NULL AUTO_INCREMENT,
	username VARCHAR(30) NOT NULL,
	comment_text TEXT NOT NULL,
	created_at DATETIME NOT NULL DEFAULT CURRENT_TIME,
	users_id INT(11) ,
	PRIMARY KEY (id),
	FOREIGN KEY (users_id) REFERENCES users (id) ON DELETE SET NULL

);



-- inserting data in database using mysql
INSERT INTO users (username, pwd, email) VALUES ('Raja','Check123','raja@check.com');

INSERT INTO comments (username, comment_text, users_id) VALUES ('Raja','checking comments.', 3);

-- updating existing data
UPDATE users SET username = 'Bibek', pwd = 'Check123', email = 'bibek@gmail.com' WHERE id = 2;

-- deleting data from database
DELETE FROM users WHERE id = 1;