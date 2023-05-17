CREATE DATABASE hayiri_quai_antique;
CREATE TABLE Category
    (id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(250),
    );

CREATE TABLE Dish
    (id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    price DECIMAL(10, 2),
    description TEXT NULL,
    );

CREATE TABLE Allergy 
    (id INT NOT NULL PRIMARY KEY, 
    aliment VARCHAR(255) NOT NULL,
    FOREIGN KEY (UserId) REFERENCES User (id),
    FOREIGN KEY (Reservationid) REFERENCES Reservation(id)
     );