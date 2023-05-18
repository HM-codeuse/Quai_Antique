
-- Création des tables 

CREATE DATABASE hayiri_quai_antique;
CREATE TABLE allergy (
  id int(11) NOT NULL AUTO_INCREMENT,
  aliment varchar(255) DEFAULT NULL,
  PRIMARY KEY (id)
);
CREATE TABLE category (
  id int(11) NOT NULL AUTO_INCREMENT,
  name varchar(255) NOT NULL,
  PRIMARY KEY (id)
);
CREATE TABLE slot (
  id int(11) NOT NULL AUTO_INCREMENT,
  time time NOT NULL,
  PRIMARY KEY (id)
);
CREATE TABLE menu (
  id int(11) NOT NULL AUTO_INCREMENT,
  name varchar(255) NOT NULL,
  price double NOT NULL,
  description longtext NOT NULL,
  PRIMARY KEY (id)
);
CREATE TABLE opening_hours (
  id int(11) NOT NULL AUTO_INCREMENT,
  day_of_the_week varchar(255) NOT NULL,
  lunch_service varchar(255) NOT NULL,
  evening_service varchar(255) NOT NULL,
  PRIMARY KEY (id)
);
CREATE TABLE table (
  id int(11) NOT NULL AUTO_INCREMENT,
  status tinyint(1) NOT NULL,
  number_of_settings varchar(255) NOT NULL,
  PRIMARY KEY (id)
);
CREATE TABLE dish (
  id int(11) NOT NULL AUTO_INCREMENT,
  category_id int(11) DEFAULT NULL,
  name varchar(255) NOT NULL,
  price double NOT NULL,
  description longtext NOT NULL,
  file varchar(255) DEFAULT NULL,  
  PRIMARY KEY (id),
  FOREIGN KEY (category_id) REFERENCES category (id)
);

CREATE TABLE reservation (
  id int(11) NOT NULL AUTO_INCREMENT,
  user_id int(11) NOT NULL,
  slot_id int(11) NOT NULL,
  date date NOT NULL,
  email varchar(255) NOT NULL,
  table_id int(11) NOT NULL,
  PRIMARY KEY (id),

  FOREIGN KEY (slot_id) REFERENCES slot (id),
  FOREIGN KEY (user_id) REFERENCES user (id),
  FOREIGN KEY (table_id) REFERENCES table (id)
);

CREATE TABLE user (
  id int(11) NOT NULL AUTO_INCREMENT,
  username varchar(180) NOT NULL,
  roles longtext NOT NULL COMMENT '(DC2Type:json)',
  password varchar(255) NOT NULL,
  firstname varchar(255) NOT NULL,
  email varchar(255) NOT NULL,
  PRIMARY KEY (id),
  UNIQUE KEY (username)
)

ALTER TABLE dish DROP COLUMN file
ALTER TABLE dish ADD  image_name varchar(255) DEFAULT NULL,
ALTER TABLE dish ADD  image_size int(11) DEFAULT NULL,
ALTER TABLE dish ADD  updated_at datetime DEFAULT NULL,

-- Alimentation des tables 
INSERT INTO slot (time) VALUES
	 ('11:00:00'),
	 ('11:15:00'),
	 ('11:30:00'),
	 ('11:45:00'),
	 ('12:00:00'),
	 ('12:15:00'),
	 ('12:30:00'),
	 ('12:45:00'),
	 ('13:00:00'),
	 ('13:15:00');
	 ('13:30:00'),
	 ('19:00:00'),
	 ('19:15:00'),
	 ('19:30:00'),
	 ('19:45:00'),
	 ('20:00:00'),
	 ('20:15:00'),
	 ('20:30:00'),
	 ('20:45:00'),
	 ('21:00:00');
	 ('21:15:00'),
	 ('21:30:00');

INSERT INTO category (name) VALUES
   ('Les entrées'),
   ('Les plats chauds'),
   ('Les accompagnements'),
   ('Les desserts');

INSERT INTO dish (category_id,name,price,description) VALUES
	 (3,'Salade César',898.0,'Une salade légère aux saveurs provençales'),
	 (3,'Salade Terre',750.0,'Un salade fraiche et rustique'),
	 (3,'Toast Avocat',825.0,'Une tartine pleine de protéines'),
	 (3,'Salade chèvre_miel',910.0,'une entrée sucrée-salée comme on les aime'),
	 (4,'Bolo-gez',1450.0,'Une bolognaise revisitée avec des gésiers'),
	 (4,'Boeuf-carottes',1550.0,'Un plat réconfortant'),
	 (6,'Mousse au chocolat',650.0,'une mousse onctueuse dont vous vous souviendrez'),
	 (6,'Tarte au fruits rouges',700.0,'une carte colorée sucrée et acidulée'),
	 (6,'Choco-fraise',750.0,'parfait mariage entre la fraise et le chocolat'),
	 (6,'Crème brulée',600.0,'Un dessert aux saveurs de notre enfance');
	 (4,'Saumon aux céréales',1650.0,'Délicieux poisson avec ses céréales'),
	 (4,'Poulet aux légumes',1650.0,'Plat réconfortant'),
	 (4,'Boeuf bourguignon',1650.0,'Plat traditionnel'),
	 (4,'Dauphinois accompagné de son saumon',1450.0,'un plat compler');

  INSERT INTO menu (name,price,description) VALUES
	 ('Le menu du jour',16.95,'Entrée + plat chaud + dessert'),
	 ('Le choix du chef',18.0,'Entrée + Plat + dessert + jus d''oranges pressées'),
	 ('Les menus "P''tite faim"',12.5,'Entrée + Dessert'),
	 ('Les menus Kids tout mignons',10.0,'Hamburger + frites + brique de jus de fruits OU Nuggets + frites + brique de jus de fruits'),
	 ('Les menus gourmands et sucrés',12.5,'2 desserts au choix et un café');

INSERT INTO table (number_of_settings) VALUES
	 ('2 personnes'),
	 ('4 personnes'),
	 ('2 personnes'),
	 ('2 personnes'),
	 ('1personnes'),
	 ('6 personnes'),
	 ('4 personnes');

INSERT INTO user (username,roles,password,firstname,email) VALUES
	 ('DEF','["ROLE_USER"]','$2y$13$Sz4oFI6ff9sHhdDZmjtvGeeT5fUGi7vdaW0kuuqIdBKLFbeQ.2Yhu','Abc','abc@test.com'),
	 ('Doe','["ROLE_USER"]','$2y$13$Q5Z9eK5CnYVPnouBaS8SouxVPRIlmnzWaL8PYCZipue/U3S5TjNwq','Jane','jane@doe.com'),
	 ('Michant','["ROLE_ADMIN"]','$2y$13$kkNW/lt5CDhTekievqQNXe9Zn61U0X9mdBThetJzSQSPMZMd57Y.K','Arnaud','arnaudmichant@admin.com'),
	 ('CHEF','["ROLE_USER"]','$2y$13$8hqbYznV66J8nEzqJWOQGeJKpHBtyWUt6.3YClbqlD.1dXHltB32u','Dhoimir','dhoimir@chef.com');

INSERT INTO opening_hours (day_of_the_week,lunch_service,evening_service) VALUES
	 ('Lundi','11h - 14h30','19h00 - 22h30'),
	 ('Mardi','11h - 14h30','19h00 - 22h30'),
	 ('Mercredi','11h - 14h30','19h00 - 22h30'),
	 ('Jeudi','11h - 14h30','19h00 - 22h30'),
	 ('Vendredi','11h - 14h30','19h00 - 22h30'),
	 ('Samedi','11h - 14h30','19h00 - 22h30');