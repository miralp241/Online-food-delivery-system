
Create table users (
	uid int(100) AUTO_INCREMENT primary key,
	pname varchar(100),
	email varchar(100),
	address varchar(100),
	pincode varchar(100),
	mobile varchar(100),
	password varchar(100),
	star int(1),
	verified int(1),
	hash varchar(500)
);

Create table deliver (
	uid int(100) AUTO_INCREMENT primary key,
	pname varchar(100),
	email varchar(100),
	address varchar(100),
	pincode varchar(100),
	mobile varchar(100),
	password varchar(100),
	verified int(1),
	hash varchar(500)
);

Create table admin (
	uid int(100) primary key,
	pname varchar(100),
	email varchar(100),
	password varchar(100),
	verified int(1),
	hash varchar(500)
);

INSERT INTO admin(uid,pname,email,password,verified,hash) VALUES ('1','jashwanth','jashwanthsvnit@gmail.com','$2y$10$uUD4XKGflntAif3kTP75xeH3z/31AKU9yh9G4dXzfuZhOFLDMQIW2','1','045117b0e0a11a242b9765e79cbf113f');

Create table products (
	uid int(100) AUTO_INCREMENT primary key,
	proname varchar(100),
	image varchar(255),
	price int(20)
);

Create table orders (
	oid int(100) AUTO_INCREMENT primary key,
	cid int(100),
	cname varchar(100),
	cmobile varchar(100),
	pid int(100),
	pname varchar(100),
	quantity int(20),
	price int(20),
	address varchar(100),
	pincode varchar(100),
	did int(100),
	dname varchar(100), 
	dmobile varchar(100),
	slot varchar(100),
	stage int(1),
	tdate DATE
);
