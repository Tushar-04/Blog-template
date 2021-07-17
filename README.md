# INTRO:
We have created a website which provides you articles on various topics like tech, sports, fashion,etc..To keep your knowledge up to date.
People who are intrested in writing you can submit your own article which upon approval will be up on our website and you can get a good amount of reach from here!

# TECHNOLOGIES USED:
HTML, CSS, Javascript, PHP

# DATABASE REQUIRED:
You need to create a database using xampp server for proper functioning of login, signup and contact page.
<br>You can use following Sql Commands:<br><br>
create database project;<br><br>
use project;<br><br>
create table users(uid int primary key not null AUTO_INCREMENT, first_name varchar(128) not null,<br>
last_name varchar(128) not null, username varchar(128) not null,email_id varchar(128) not null,
<br>phone varchar(10) not null, password varchar(128) not null);<br><br>
create table contact(cid int primary key not null AUTO_INCREMENT, first_name varchar(128) not null,<br>
last_name varchar(128) not null,email varchar(128) not null, subject varchar(128) not null,
<br> message text not null);
