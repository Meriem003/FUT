-- Créer la base de données

CREATE DATABASE userdata;

-- Créer la table des flag

CREATE TABLE flag (
    id_flag INT PRIMARY KEY AUTO_INCREMENT,
    flag_name VARCHAR(50) NOT NULL,
    url_flag VARCHAR(255) NOT NULL
);

CREATE TABLE club (
    id_club INT PRIMARY KEY AUTO_INCREMENT,
    club_name VARCHAR(50) NOT NULL,
    url_club VARCHAR(255) NOT NULL
);

CREATE TABLE players (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(30) NOT NULL,
    photo VARCHAR(255) NOT NULL,
    position VARCHAR(20) NOT NULL,
    id_flag INT,
    id_club INT,
    rating INT NOT NULL,
    pace INT,
    shooting INT,
    passing INT,
    dribbling INT,
    defending INT,
    physical INT,
    diving INT,
    handling INT,
    kicking INT,
    reflexes INT,
    speed INT,
    positioning INT,
    FOREIGN KEY (id_flag) REFERENCES flag(id_flag),
    FOREIGN KEY (id_club) REFERENCES club(id_club)
);

INSERT INTO flag (flag_name, url_flag) 
VALUES
('Argentine', 'https://upload.wikimedia.org/wikipedia/commons/1/1a/Flag_of_Argentina.svg'),
('Portugal', 'https://upload.wikimedia.org/wikipedia/commons/5/5c/Flag_of_Portugal.svg'),
('France', 'https://upload.wikimedia.org/wikipedia/commons/c/c3/Flag_of_France.svg'),
('Brésil', 'https://upload.wikimedia.org/wikipedia/commons/0/05/Flag_of_Brazil.svg'),
('Norvège', 'https://upload.wikimedia.org/wikipedia/commons/d/d9/Flag_of_Norway.svg'),
('Maroc', 'https://upload.wikimedia.org/wikipedia/commons/2/2c/Flag_of_Morocco.svg'),
('Belgique', 'https://upload.wikimedia.org/wikipedia/commons/6/65/Flag_of_Belgium.svg'),
('Pologne', 'https://upload.wikimedia.org/wikipedia/commons/1/12/Flag_of_Poland.svg'),
('Égypte', 'https://upload.wikimedia.org/wikipedia/commons/f/fe/Flag_of_Egypt.svg'),
('Croatie', 'https://upload.wikimedia.org/wikipedia/commons/1/1b/Flag_of_Croatia.svg');

INSERT INTO club (club_name, url_club) 
VALUES
('Paris Saint-Germain', 'https://upload.wikimedia.org/wikipedia/en/a/a7/Paris_Saint-Germain_F.C..svg'),
('Real Madrid', 'https://upload.wikimedia.org/wikipedia/en/5/56/Real_Madrid_CF.svg'),
('FC Barcelona', 'https://upload.wikimedia.org/wikipedia/en/4/47/FC_Barcelona_%28crest%29.svg'),
('Manchester City', 'https://upload.wikimedia.org/wikipedia/en/e/e0/Manchester_City_FC_badge.svg'),
('Bayern Munich', 'https://upload.wikimedia.org/wikipedia/en/1/1f/FC_Bayern_München_logo_%282017%29.svg'),
('Juventus', 'https://upload.wikimedia.org/wikipedia/en/d/d2/Juventus_FC_2017_logo.svg'),
('Chelsea', 'https://upload.wikimedia.org/wikipedia/en/c/cc/Chelsea_FC.svg'),
('AC Milan', 'https://upload.wikimedia.org/wikipedia/commons/d/d0/Logo_of_AC_Milan.svg'),
('Liverpool', 'https://upload.wikimedia.org/wikipedia/en/0/0c/Liverpool_FC.svg'),
('Arsenal', 'https://upload.wikimedia.org/wikipedia/en/5/53/Arsenal_FC.svg');

INSERT INTO players (nom, photo, position, id_flag, id_club, rating, pace, shooting, passing, dribbling, defending, physical, diving, handling, kicking, reflexes, speed, positioning) 
VALUES
('Lionel Messi', 'https://upload.wikimedia.org/wikipedia/commons/a/ae/Lionel_Messi_2018.jpg', 'RW', 1, 2, 93, 85, 92, 91, 95, 40, 66, NULL, NULL, NULL, NULL, NULL, NULL),
('Cristiano Ronaldo', 'https://upload.wikimedia.org/wikipedia/commons/8/8c/Cristiano_Ronaldo_2018.jpg', 'ST', 2, 3, 91, 87, 94, 82, 88, 35, 78, NULL, NULL, NULL, NULL, NULL, NULL),
('Kylian Mbappé', 'https://upload.wikimedia.org/wikipedia/commons/3/3e/Kylian_Mbappé_2021.jpg', 'LW', 3, 1, 92, 97, 89, 84, 92, 40, 74, NULL, NULL, NULL, NULL, NULL, NULL),
('Neymar Jr', 'https://upload.wikimedia.org/wikipedia/commons/a/a0/Neymar_2018.jpg', 'LW', 4, 1, 91, 91, 83, 86, 94, 30, 62, NULL, NULL, NULL, NULL, NULL, NULL),
('Erling Haaland', 'https://upload.wikimedia.org/wikipedia/commons/a/ae/Erling_Haaland_2022.jpg', 'ST', 5, 4, 90, 89, 93, 75, 84, 35, 85, NULL, NULL, NULL, NULL, NULL, NULL),
('Achraf Hakimi', 'https://upload.wikimedia.org/wikipedia/commons/5/50/Achraf_Hakimi_2021.jpg', 'RB', 6, 1, 86, 94, 75, 78, 80, 78, 82, NULL, NULL, NULL, NULL, NULL, NULL),
('Kevin De Bruyne', 'https://upload.wikimedia.org/wikipedia/commons/d/da/Kevin_De_Bruyne_2021.jpg', 'CM', 7, 4, 91, 76, 86, 93, 86, 64, 74, NULL, NULL, NULL, NULL, NULL, NULL),
('Virgil van Dijk', 'https://upload.wikimedia.org/wikipedia/commons/1/13/Virgil_van_Dijk_2018.jpg', 'RCB', 7, 9, 89, 71, 60, 71, 72, 91, 86, NULL, NULL, NULL, NULL, NULL, NULL),
('Mohamed Salah', 'https://upload.wikimedia.org/wikipedia/commons/5/5f/Mohamed_Salah_2022.jpg', 'RW', 9, 9, 90, 93, 86, 81, 89, 45, 70, NULL, NULL, NULL, NULL, NULL, NULL),
('Alisson Becker', 'https://upload.wikimedia.org/wikipedia/commons/7/76/Alisson_Becker_2018.jpg', 'GK', 10, 9, 89, NULL, NULL, NULL, NULL, NULL, NULL, 89, 85, 88, 86, 50, 85);
