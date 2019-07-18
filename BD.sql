CREATE DATABASE bd_php;
USE bd_php;
CREATE TABLE users(
    id INT AUTO_INCREMENT,
    login VARCHAR(255),
    senha VARCHAR(30),

    PRIMARY KEY(id)
);

INSERT INTO users(login, senha) VALUES ('mateus', '123456');
INSERT INTO users(login, senha) VALUES ('carol', '123456');