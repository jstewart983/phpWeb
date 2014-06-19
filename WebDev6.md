Web Development Assignment 6: Database Connections

	Create a MySQL database on your web host named your first name and last name. Exclude any spaces; use one word such as “yourfirstnameyourlastname.” Create a table named “comments.” In the “comments” table, create the fields ID, name, title, comments, and comment date. Use the proper field types and allow comments to be over 100 characters. Comment date should be a timestamp field that is automatically updated with the current timestamp when a new record is inserted into the table. ID should be the primary key and auto increment.
	Develop a connection script that successfully connects to your database. It should use the MySQL_error() function appropriately to test whether a successful connection exists. Upon successful authentication to the tree page, a user should be given a new link to a new form. The form should have a name, title, and a comment field. Proper form validation should exist. Upon form submission, the name, title, and comment data should be inserted into the associated fields in the comments database table.
	Write an SQL select statement against the comments table in your database and display each row properly formatted on the main tree page. The most recent comment should be displayed first. All user comments should display under the tree like:
Name of the person who made the comment
Title
Date
Comments
	Write update and delete statements that allow comments to be updated and removed. Upon completion, comments can be added, updated, and removed from the database via the web page. 
Web Development Assignment 6 is due by 11:59 p.m. (ET) on Monday of Module/Week 6.
