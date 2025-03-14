create database college;
use college;
create table result(rno int primary key, sname text, marks int);
show databases;
select * from result;
insert into result(rno, sname, marks)
values(1, "Faiz", 1000);