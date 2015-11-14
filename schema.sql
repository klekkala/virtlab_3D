create table step(
sid INT NOT NULL AUTO_INCREMENT,
name varchar(20),
description varchar(500),
action varchar(500),
outcome varchar(500),
primary key(sid)
);

create table anim(
aid INT NOT NULL AUTO_INCREMENT,
sid int,
anim varchar(20),
primary key (aid)
);

create table object(
oid INT NOT NULL AUTO_INCREMENT,
sid int,
anim varchar(20),
primary key(oid)
);

create table constrain(
cid int not null auto_increment,
sid int,
cons varchar(20),
primary key(cid)

);
