CREATE DATABASE Note;

CREATE TABlE IF NOT EXISTS notes_table (
ID int NOT NULL AUTO_INCREMENT,
Title varchar(40),
Text varchar(2000),
Author varchar(40),
Date DATETIME NOT NULL,
PRIMARY KEY (ID)
);