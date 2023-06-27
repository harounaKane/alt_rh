CREATE TABLE Categorie(
   libelle VARCHAR(50),
   PRIMARY KEY(libelle)
)ENGINE=InnoDB;

CREATE TABLE Auteur(
   id INT AUTO_INCREMENT,
   prenom VARCHAR(50),
   nom VARCHAR(50),
   PRIMARY KEY(id)
)ENGINE=InnoDB;

CREATE TABLE Article(
   id INT AUTO_INCREMENT,
   titre VARCHAR(50),
   contenu TEXT,
   date_creation DATETIME DEFAULT CURRENT_TIMESTAMP,
   auteur INT NOT NULL,
   categorie VARCHAR(50) NOT NULL,
   PRIMARY KEY(id),
   FOREIGN KEY(auteur) REFERENCES Auteur(id),
   FOREIGN KEY(categorie) REFERENCES Categorie(libelle)
)ENGINE=InnoDB;

CREATE TABLE commentaire(
   id INT AUTO_INCREMENT,
   pseudo VARCHAR(50),
   contenu TEXT,
   date_commentaire DATETIME DEFAULT CURRENT_TIMESTAMP,
   article INT NOT NULL,
   PRIMARY KEY(id),
   FOREIGN KEY(article) REFERENCES Article(id)
)ENGINE=InnoDB;
