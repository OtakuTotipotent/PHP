create database GGCL;
USE GGCL;
create table users(
	id int not null AUTO_INCREMENT,
    username text not null,
    pwd text not null,
    email text not null,
    created_at datetime not null default CURRENT_TIME
);