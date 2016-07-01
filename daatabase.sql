CREATE DATABASE twitter;

CREATE TABLE user (
    id INT NOT NULL AUTO_INCREMENT,
    email VARCHAR(255) UNIQUE,
    hashed_password VARCHAR(255) NOT NULL,
    description TEXT,
    is_active INT,
    PRIMARY KEY(id)
);


