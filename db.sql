CREATE DATABASE search;

CREATE TABLE users (

    id MEDIUMINT(6) UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    first_name VARCHAR(100) NOT NULL,
    last_name VARCHAR(100) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    role_as TINYINT(1) NOT NULL UNSIGNED,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP

);

INSERT INTO users (first_name, last_name, email, password, role_as)
VALUES
    ('John', 'Doe', 'john.doe@example.com', 'password123', 1),
    ('Jane', 'Smith', 'jane.smith@example.com', 'securepass', 2),
    ('Alice', 'Johnson', 'alice.j@example.com', 'qwerty', 1),
    ('Bob', 'Williams', 'bob.w@example.com', 'pass123', 2),
    ('Eva', 'Clark', 'eva.c@example.com', 'mypassword', 1),
    ('Michael', 'Lee', 'michael.lee@example.com', 'securepassword', 2),
    ('Sophia', 'Martin', 'sophia.m@example.com', 'passphrase', 1),
    ('Daniel', 'Taylor', 'daniel.t@example.com', 'password456', 2),
    ('Olivia', 'Wright', 'olivia.w@example.com', 'letmein', 1),
    ('David', 'Harris', 'david.h@example.com', 'myp@ss', 2);


