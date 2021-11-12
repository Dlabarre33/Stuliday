DROP DATABASE IF EXISTS stuliday;
CREATE DATABASE stuliday CHARACTER SET utf8;
USE stuliday;

CREATE TABLE stuliday.user(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR (25) NOT NULL,
    password VARCHAR (512) NOT NULL
);

CREATE TABLE stuliday.post(
    post_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR (255) NOT NULL,
    description TEXT NOT NULL,
    image VARCHAR (512),
    date DATE
);

INSERT INTO stuliday.post(title, description, image, date) VALUES
('Joli appartement de T3', 'Appartement T3 situé derrière la mairie de Lormont dans une résidence sécurisée, avec arrêt de tram et entrée de rocade à proximité.', null,'2021-11-09'),
('Lovely appartement de T2', 'Appartement T2 situé derrière la mairie de Lormont dans une résidence sécurisée, avec arrêt de tram et entrée de rocade à proximité.', null,'2021-11-09'),
('Magnifique appartement de T5', 'Appartement T5 situé derrière la mairie de Lormont dans une résidence sécurisée, avec arrêt de tram et entrée de rocade à proximité.', null,'2021-11-09'),
('Bel appartement de T1', 'Appartement T1 situé derrière la mairie de Lormont dans une résidence sécurisée, avec arrêt de tram et entrée de rocade à proximité.', null,'2021-11-09'),
('Grand appartement de T4', 'Appartement T4 situé derrière la mairie de Lormont dans une résidence sécurisée, avec arrêt de tram et entrée de rocade à proximité.', null,'2021-11-09'),
('Superbe appartement de T3', 'Appartement T3 situé derrière la mairie de Lormont dans une résidence sécurisée, avec arrêt de tram et entrée de rocade à proximité.', null,'2021-11-09')