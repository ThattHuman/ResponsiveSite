create database if not exists api_db;

create table AccountLoginData(
    ID int primary key auto_increment,
    Login varchar(20) not null unique,
    Password varchar(20) not null
);

create table AccountInfo(
    ID int primary key auto_increment,
    FullName varchar(30) not null,
    Nickname varchar(20) unique,
    LoginDataID int unique,
    RegistrationDate date not null,
    foreign key (LoginDataID) references AccountLoginData (ID)
);

create table Category(
    ID int primary key auto_increment,
    Name varchar(20) not null unique,
    Description text
);

create table Post(
    ID int primary key auto_increment,
    AuthorID int,
    CategoryID int,
    CreationDate datetime not null,
    UpdateDate datetime not null,
    Picture varchar(100),
    Content text not null,
    foreign key (AuthorID) references AccountInfo (ID),
    foreign key (CategoryID) references Category (ID)
);

create table Comment(
    ID int primary key auto_increment,
    AuthorID int,
    PostID int,
    CreationDate datetime not null,
    Content text not null,
    foreign key (AuthorID) references AccountInfo (ID),
    foreign key (PostID) references Post (ID)
);