create table step(

sid INT not null auto_increment, 
name varchar(20),
description varchar(500),
action varchar(500),
outcome varchar(500),
animation varchar(500),
PRIMARY KEY (sid)
);



create table object(
oid INT not null auto_increment,
sid INT,
name varchar(20),
PRIMARY KEY (oid),
foreign key (sid) REFERENCES step(sid)
);


create table constrain(

eid INT not null auto_increment,
sid INT,
cons varchar(20), 
PRIMARY KEY (eid),
foreign key (sid) REFERENCES step(sid)
);


create table variable(

vid INT not null auto_increment,
sid INT,
name varchar(20),
type varchar(20),
range varchar(20),
rtype varchar(20),
)


