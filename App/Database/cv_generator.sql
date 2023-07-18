DROP DATABASE IF EXISTS cv_generator;

CREATE DATABASE IF NOT EXISTS cv_generator CHARSET=utf8;
USE cv_generator;

CREATE TABLE utilisateurs(
	id_utilisateur INT(11) NOT NULL AUTO_INCREMENT,
	nom_utilisateur VARCHAR(100),
	photo_profil VARCHAR(100),
	email VARCHAR(255) NOT NULL,
	mot_de_passe VARCHAR(255) NOT NULL,
	role VARCHAR(20) NOT NULL,
	CONSTRAINT UK_nom_utilisateur UNIQUE KEY (nom_utilisateur),
	CONSTRAINT UK_email UNIQUE KEY (email),
	CONSTRAINT PK_id_utilisateur PRIMARY KEY (id_utilisateur)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE administrateurs(
	id_administrateur INT(11) NOT NULL AUTO_INCREMENT,
	id_utilisateur INT(11) NOT NULL,
	CONSTRAINT PK_id_administrateur PRIMARY KEY (id_administrateur),
	CONSTRAINT FK_id_utilisateur FOREIGN KEY (id_utilisateur) REFERENCES utilisateurs(id_utilisateur)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE clients(
	id_client INT(11) NOT NULL AUTO_INCREMENT,
	prenom VARCHAR(100) NOT NULL,
	nom VARCHAR(100) NOT NULL,
	code_pays VARCHAR(6),
	telephone INT(15),
	id_utilisateur INT(11) NOT NULL,
	CONSTRAINT UK_telephone UNIQUE KEY (telephone),
	CONSTRAINT PK_id_client PRIMARY KEY (id_client),
	CONSTRAINT FK_id_utilisateur FOREIGN KEY (id_utilisateur) REFERENCES utilisateurs(id_utilisateur)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE modeles_cv(
	id_modele_cv INT(11) NOT NULL AUTO_INCREMENT,
	intitule VARCHAR(255) NOT NULL,
	categorie VARCHAR(50) NOT NULL,
	id_administrateur INT(11) NOT NULL,
	CONSTRAINT PK_id_modele_cv PRIMARY KEY (id_modele_cv),
	CONSTRAINT FK_id_administrateur FOREIGN KEY (id_administrateur) REFERENCES administrateurs(id_administrateur)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE cv(
	id_cv INT(11) NOT NULL AUTO_INCREMENT,
	titre VARCHAR(255) NOT NULL,
	id_modele_cv INT(11) NOT NULL,
	id_client INT(11) NOT NULL,
	CONSTRAINT PK_id_cv PRIMARY KEY (id_cv),
	CONSTRAINT FK_id_modele_cv FOREIGN KEY (id_modele_cv) REFERENCES modeles_cv(id_modele_cv),
	CONSTRAINT FK_id_client FOREIGN KEY (id_client) REFERENCES clients(id_client)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE informations_personnelles(
	id_informations_personnelles INT(11) NOT NULL AUTO_INCREMENT,
	prenom VARCHAR(100) NOT NULL,
	nom VARCHAR(100) NOT NULL,
	photo VARCHAR(100),
	date_naissance DATE,
	sexe VARCHAR(15),
	email VARCHAR(255) NOT NULL,
	code_pays VARCHAR(6) NOT NULL,
	telephone INT(15) NOT NULL,
	adresse VARCHAR(255) NOT NULL,
	nationnalite VARCHAR(100),
	situation_matrimoniale VARCHAR(15),
	nombre_enfant INT(3),
	andicape VARCHAR(100),
	id_cv INT(11) NOT NULL,
	CONSTRAINT PK_id_informations_personnelles PRIMARY KEY (id_informations_personnelles),
	CONSTRAINT FK_id_cv FOREIGN KEY (id_cv) REFERENCES cv(id_cv)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE competences(
	id_competence INT(11) NOT NULL AUTO_INCREMENT,
	intitule VARCHAR(255) NOT NULL,
	niveau VARCHAR(100) NOT NULL,
	id_cv INT(11) NOT NULL,
	CONSTRAINT PK_id_competence PRIMARY KEY (id_competence),
	CONSTRAINT FK_id_cv FOREIGN KEY (id_cv) REFERENCES cv(id_cv)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE experiences(
	id_experience INT(11) NOT NULL AUTO_INCREMENT,
	intitule VARCHAR(255) NOT NULL,
	nom_entreprise VARCHAR(255) NOT NULL,
	ville VARCHAR(100) NOT NULL,
	date_debut DATE NOT NULL,
	date_fin DATE NOT NULL,
	taches_effectuees TEXT,
	id_cv INT(11) NOT NULL,
	CONSTRAINT PK_id_experience PRIMARY KEY (id_experience),
	CONSTRAINT FK_id_cv FOREIGN KEY (id_cv) REFERENCES cv(id_cv)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE formations(
	id_formation INT(11) NOT NULL AUTO_INCREMENT,
	diplome VARCHAR(128) NOT NULL,
	nom_etablissement VARCHAR(255) NOT NULL,
	ville VARCHAR(100) NOT NULL,
	annee_obtention_diplome DATE NOT NULL,
	description TEXT,
	id_cv INT(11) NOT NULL,
	CONSTRAINT PK_id_formation PRIMARY KEY (id_formation),
	CONSTRAINT FK_id_cv FOREIGN KEY (id_cv) REFERENCES cv(id_cv)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE objectif(
	id_objectif INT(11) NOT NULL AUTO_INCREMENT,
	description TEXT NOT NULL,
	id_cv INT(11) NOT NULL,
	CONSTRAINT PK_id_objectif PRIMARY KEY (id_objectif),
	CONSTRAINT FK_id_cv FOREIGN KEY (id_cv) REFERENCES cv(id_cv)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE langues(
	id_langue INT(11) NOT NULL AUTO_INCREMENT,
	nom VARCHAR(100) NOT NULL,
	abreviation VARCHAR(3),
	id_cv INT(11) NOT NULL,
	CONSTRAINT PK_id_langue PRIMARY KEY (id_langue),
	CONSTRAINT FK_id_cv FOREIGN KEY (id_cv) REFERENCES cv(id_cv)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE centres_d_interet(
	id_centres_d_interet INT(11) NOT NULL AUTO_INCREMENT,
	intitule VARCHAR(100) NOT NULL,
	id_cv INT(11) NOT NULL,
	CONSTRAINT PK_id_centres_d_interet PRIMARY KEY (id_centres_d_interet),
	CONSTRAINT FK_id_cv FOREIGN KEY (id_cv) REFERENCES cv(id_cv)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE qualites(
	id_qualites INT(11) NOT NULL AUTO_INCREMENT,
	intitule VARCHAR(100) NOT NULL,
	id_cv INT(11) NOT NULL,
	CONSTRAINT PK_id_qualites PRIMARY KEY (id_qualites),
	CONSTRAINT FK_id_cv FOREIGN KEY (id_cv) REFERENCES cv(id_cv)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE realisations(
	id_objectif INT(11) NOT NULL AUTO_INCREMENT,
	description TEXT NOT NULL,
	lien TEXT,
	id_cv INT(11) NOT NULL,
	CONSTRAINT PK_id_objectif PRIMARY KEY (id_objectif),
	CONSTRAINT FK_id_cv FOREIGN KEY (id_cv) REFERENCES cv(id_cv)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO utilisateurs (nom_utilisateur, email, mot_de_passe, role) VALUES ('Admin', 'admin@gmail.com', SHA2('Admin@admin1', 256), 'admin');

INSERT INTO administrateurs (id_utilisateur) VALUES (1);