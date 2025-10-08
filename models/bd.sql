CREATE DATABASE hotel_reservas;

CREATE TABLE users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    lastname VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL,
    phone INT NOT NULL,
    document_number INT NOT NULL,
    email VARCHAR(100) UNIQUE,
    roles_id int not null,
    status TINYINT(1) DEFAULT 1,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (roles_id) REFERENCES roles(id)
);

CREATE TABLE roles(
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    status TINYINT(1) DEFAULT 1
);

CREATE TABLE rooms(
    id INT PRIMARY KEY AUTO_INCREMENT,
    description TEXT NOT NULL,
    FOREIGN KEY (status_id) REFERENCES status_room
    FOREIGN KEY (type_id) REFERENCES type_rooms(id)
);

CREATE TABLE type_rooms(
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    status TINYINT(1) DEFAULT 1,
    max_people INT,
    precio INT NOT NULL
);

CREATE TABLE status_room(
    id INT PRIMARY KEY AUTO INCREMENT,
    name VARCHAR(50) NOT NULL,
);

CREATE TABLE reservations(
    id  INT PRIMARY KEY AUTO_INCREMENT,
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (room_id) REFERENCES rooms(id),
    date_reservation DATE NOT NULL,
    checkin DATE NOT NULL,
    checkout DATE NOT NULL,
    special_request TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    modified, 
    FOREIGN KEY (status_id) REFERENCES status_reservations(id)
);


CREATE TABLE status_reservations(
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50)

);

CREATE TABLE payments(
    id INT PRIMARY KEY AUTO_INCREMENT,
    FOREIGN KEY (reservation_id) REFERENCES reservations(id),
    amount INT,
    FOREIGN KEY (method_id) REFERENCES  payments_method(id),
    FOREIGN KEY (payment_status_id) REFERENCES status_payment(id)

);

CREATE TABLE payments_method(
    id INT PRIMARY KEY AUTO_INCREMENT,
    name varchar(25),
    status TINYINT(1) DEFAULT 1
);

CREATE TABLE status_payment(
    id INT PRIMARY KEY AUTO_INCREMENT,
    name varchar(25),
    status TINYINT(1) DEFAULT 1
);