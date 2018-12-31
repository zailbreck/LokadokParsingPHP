CREATE DATABASE poco_queue;

CREATE TABLE users(
	id_users int(5) NOT NULL AUTO_INCREMENT,
	full_name varchar(100) NOT NULL,
	uname varchar(10) NOT NULL,
	passwd varchar(10) NOT NULL,
	category varchar(20) NOT NULL,
	specialist varchar(50) NOT NULL,
	n_ponsel varchar(15) NOT NULL,
	address text,
	level enum('admin','docter') NOT NULL,
	PRIMARY KEY(id_users)
);

INSERT INTO users (id_users,full_name,uname,passwd,category,specialist,n_ponsel,address,level) VALUES ('',"Muhammad Naufal","admin","admin123","STAFF IT","WEB DEVELOPER","082273726295","Jl Ahmad Yani No 22 LK.V","admin");