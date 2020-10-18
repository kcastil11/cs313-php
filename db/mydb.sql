--creating the data base--

 

CREATE TABLE Persons (

    PersonID int,

    LastName varchar(255),

    FirstName varchar(255),

    Address varchar(255),

    City varchar(255)

     PRIMARY KEY (PersonID)

     FOREIGN KEY (PersonID) REFERENCES Persons(PersonID)


);

 

INSERT INTO Persons (PersonID, LastName, FirstName, address, City)

VALUES (101, 'Perez', 'Paco', '1020 Kurt ave', 'San Andreas');

 

INSERT INTO Persons (PersonID, LastName, FirstName, address, City)

VALUES (102, 'Tucson', 'Mike', '55 El Camino Real', 'San Pedro');


INSERT INTO Persons (PersonID, LastName, FirstName, address, City)

VALUES (103, 'Mcfly', 'Marty', '200 morgan st', 'Hill Valley');
 

 CREATE TABLE Comics (

    ProductID int,
    
    Productname varchar,

    Genre varchar(255),

    Company varchar(255),

    Country varchar(255),

    Edition_year varchar(255)

        PRIMARY KEY (ProductID),

     FOREIGN KEY (ProductID) REFERENCES Persons(ProductID)

);

INSERT INTO Comics (ProductID, Productname, Genre, Company, Country, Edition_year)

VALUES (111, 'Superman', 'Heroes', 'DC Comics', 'USA', '1970');

INSERT INTO Comics (ProductID, Productname, Genre, Company, Country, Edition_year)

VALUES (121, 'Batman', 'Heroes', 'DC Comics', 'USA', '1980');

INSERT INTO Comics (ProductID, Productname, Genre, Company, Country, Edition_year)

VALUES (131, 'Alien', 'Sci-fi', 'Dark Horse', 'USA', '1975');



CREATE TABLE Creators (

    PublisherID int,
    
    Writter_name varchar,

    Artist varchar(255),

    Colorist varchar(255),

    Cover_artist varchar(255),

    Country varchar (225),


);


INSERT INTO Creators (PublisherID, Writter_name, Artist, Colorist, Cover_artist, Comic_house)

VALUES (001, 'Markus Keen', 'Renzo Luna', 'Lorenzo Cruz', 'Regina Bloom', 'Los del mar');
