CREATE DATABASE IF NOT EXISTS hypnos_bdd;

CREATE TABLE IF NOT EXISTS User(
  ID INTEGER NOT NULL AUTO_INCREMENT,
  Name VARCHAR(250) NOT NULL,  
  Firstname VARCHAR(250) NOT NULL,  
  Mail VARCHAR(250) NOT NULL,  
  Password VARCHAR(250) NOT NULL,  
  Role INTEGER NOT NULL,
  FOREIGN KEY(Role) REFERENCES User_Ref(ID),
  PRIMARY KEY(ID)
);


CREATE TABLE IF NOT EXISTS Establishment(
  ID INTEGER NOT NULL AUTO_INCREMENT,
  Address VARCHAR(250) NOT NULL,
  City VARCHAR(250) NOT NULL,
  Name VARCHAR(250) NOT NULL,
  Manager INTEGER NOT NULL,
  FOREIGN KEY(Manager) REFERENCES User(ID),
  PRIMARY KEY(ID)
);

CREATE TABLE IF NOT EXISTS Suite(
  ID INTEGER NOT NULL AUTO_INCREMENT,
  Title VARCHAR(250) NOT NULL,  
  Establishment INTEGER NOT NULL,  
  Price DECIMAL NOT NULL,  
  IsOccupied BOOLEAN NOT NULL,  
  BookingLink VARCHAR(250) NOT NULL,  
  Description VARCHAR(1000) NOT NULL,  
  MainPic VARCHAR(250) NOT NULL,  
  Gallery VARCHAR(250) NOT NULL,
  FOREIGN KEY(Establishment) REFERENCES Establishment(ID),  
  PRIMARY KEY(ID)
);

CREATE TABLE IF NOT EXISTS Message(
  ID INTEGER NOT NULL AUTO_INCREMENT,
  Name VARCHAR(250) NOT NULL,
  Firstname VARCHAR(250) NOT NULL,
  Mail VARCHAR(250) NOT NULL,
  MessageBody VARCHAR(1000) NOT NULL,
  Recipient INTEGER NOT NULL,
  Subject INTEGER NOT NULL,
  FOREIGN KEY(Recipient) REFERENCES User(ID), 
  FOREIGN KEY(Subject) REFERENCES SubjectMessage_Ref(ID), 
  PRIMARY KEY(ID)
);

CREATE TABLE IF NOT EXISTS User_Ref(
  ID INTEGER NOT NULL AUTO_INCREMENT,
  Label VARCHAR(250) NOT NULL,
  PRIMARY KEY(ID)
);

CREATE TABLE IF NOT EXISTS Booking(
  ID INTEGER NOT NULL AUTO_INCREMENT,
  StartingDate DATE NOT NULL,
  EndingDate DATE NOT NULL,
  Suite INTEGER NOT NULL,
  Client INTEGER NOT NULL,
  FOREIGN KEY(Suite) REFERENCES Suite(ID),
  FOREIGN KEY(Client) REFERENCES User(ID),
  PRIMARY KEY(ID)
);

CREATE TABLE IF NOT EXISTS SubjectMessage_Ref(
  ID INTEGER NOT NULL AUTO_INCREMENT,
  Label VARCHAR(250) NOT NULL,
  PRIMARY KEY(ID)
);