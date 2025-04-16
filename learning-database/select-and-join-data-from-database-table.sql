-- select data from database table

SELECT username, email FROM users WHERE id = 3;

SELECT username, comment_text FROM comments WHERE id = 1;

SELECT username, comment_text FROM comments WHERE users_id = 3;

-- select all from table
SELECT * FROM comments WHERE users_id = 3;


-- join data from two different tables

SELECT * FROM users INNER JOIN comments ON users.id = comments.users_id;

-- join selected data from two tables
SELECT users.username , comments.comment_text, comments.created_at FROM users INNER JOIN comments ON users.id = comments.users_id;

-- LEFT JOIN

SELECT * FROM users LEFT JOIN comments ON users.id = comments.users_id;

-- RIGHT JOIN

SELECT * FROM users RIGHT JOIN comments ON users.id = comments.users_id;