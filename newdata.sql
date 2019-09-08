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
	daddress varchar(100), 
	dmobile varchar(100),
	slot varchar(100),
	stage int(1),
	tdate DATE
);