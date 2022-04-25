CREATE TABLE IF NOT EXISTS User_Ref(
  id serial PRIMARY KEY,
  Label VARCHAR(250) NOT NULL
);

CREATE TABLE IF NOT EXISTS user_hypnos(
  id serial PRIMARY KEY,
  name VARCHAR (250) NOT NULL,  
  firstname VARCHAR (250) NOT NULL,  
  mail VARCHAR (250) NOT NULL,  
  password VARCHAR (250) NOT NULL,  
  role INTEGER NOT NULL,
  FOREIGN KEY(role) REFERENCES User_Ref(id)
);

CREATE TABLE IF NOT EXISTS establishment(
  id serial PRIMARY KEY,
  address VARCHAR(250) NOT NULL,
  city VARCHAR(250) NOT NULL,
  name VARCHAR(250) NOT NULL,
  manager INTEGER NOT NULL,
  FOREIGN KEY(manager) REFERENCES User_hypnos(id)
);

CREATE TABLE IF NOT EXISTS Suite(
  id serial PRIMARY KEY,
  Title VARCHAR(250) NOT NULL,  
  establishment INTEGER NOT NULL,  
  Price DECIMAL NOT NULL,  
  IsOccupied BOOLEAN NOT NULL,  
  BookingLink VARCHAR(250) NOT NULL,  
  Description VARCHAR(1000) NOT NULL,  
  MainPic VARCHAR(250) NOT NULL,  
  Gallery VARCHAR(250) NOT NULL,
  Gallery2 VARCHAR(250) NOT NULL,
  Gallery3 VARCHAR(250) NOT NULL,
  FOREIGN KEY(establishment) REFERENCES establishment(id)  
);

CREATE TABLE IF NOT EXISTS SubjectMessage_Ref(
  id serial PRIMARY KEY,
  Label VARCHAR(250) NOT NULL
);

CREATE TABLE IF NOT EXISTS message(
  id serial PRIMARY KEY,
  name VARCHAR(250) NOT NULL,
  firstname VARCHAR(250) NOT NULL,
  mail VARCHAR(250) NOT NULL,
  MessageBody VARCHAR(1000) NOT NULL,
  Recipient INTEGER NOT NULL,
  Subject INTEGER NOT NULL,
  FOREIGN KEY(Recipient) REFERENCES User_hypnos(id), 
  FOREIGN KEY(Subject) REFERENCES SubjectMessage_Ref(id) 
);

CREATE TABLE IF NOT EXISTS Booking(
  id serial PRIMARY KEY,
  StartingDate DATE NOT NULL,
  EndingDate DATE NOT NULL,
  Suite INTEGER NOT NULL,
  Client INTEGER NOT NULL,
  FOREIGN KEY(Suite) REFERENCES Suite(id),
  FOREIGN KEY(Client) REFERENCES User_hypnos(id)
);