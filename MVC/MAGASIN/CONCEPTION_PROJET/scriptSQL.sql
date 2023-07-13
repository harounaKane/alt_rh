CREATE TABLE utilisateur(
   id INT AUTO_INCREMENT,
   sexe VARCHAR(6) NOT NULL,
   prenom VARCHAR(20) NOT NULL,
   nom VARCHAR(20) NOT NULL,
   login VARCHAR(10) NOT NULL,
   mdp VARCHAR(100) NOT NULL,
   tel VARCHAR(15) NOT NULL,
   email VARCHAR(30) NOT NULL,
   statut VARCHAR(10) NOT NULL,
   adresse VARCHAR(440),
   cp VARCHAR(5),
   ville VARCHAR(20),
   PRIMARY KEY(id),
   UNIQUE(login),
   UNIQUE(tel),
   UNIQUE(email)
)ENGINE=InnoDB;

CREATE TABLE article(
   id_article INT AUTO_INCREMENT,
   libelle VARCHAR(20) NOT NULL,
   prix DECIMAL(6,2) NOT NULL,
   quantite INT NOT NULL,
   `description` TEXT,
   image VARCHAR(50),
   categorie VARCHAR(50) NOT NULL,
   PRIMARY KEY(id_article)
)ENGINE=InnoDB;

CREATE TABLE commande(
   id_cmd INT AUTO_INCREMENT,
   date_cmd DATETIME,
   utilisateur INT NOT NULL,
   PRIMARY KEY(id_cmd),
   FOREIGN KEY(utilisateur) REFERENCES utilisateur(id)
)ENGINE=InnoDB;

CREATE TABLE panier(
   id_panier INT AUTO_INCREMENT,
   qunatite INT NOT NULL,
   utilisateur INT NOT NULL,
   PRIMARY KEY(id_panier),
   FOREIGN KEY(utilisateur) REFERENCES utilisateur(id)
)ENGINE=InnoDB;

CREATE TABLE avis(
   id_avis INT AUTO_INCREMENT,
   avis VARCHAR(100) NOT NULL,
   article INT NOT NULL,
   utilisateur INT NOT NULL,
   PRIMARY KEY(id_avis),
   FOREIGN KEY(article) REFERENCES article(id_article),
   FOREIGN KEY(utilisateur) REFERENCES utilisateur(id)
)ENGINE=InnoDB;

CREATE TABLE ligneDeCommande(
   id_article INT,
   id_cmd INT,
   quantite VARCHAR(50),
   PRIMARY KEY(id_article, id_cmd),
   FOREIGN KEY(id_article) REFERENCES article(id_article),
   FOREIGN KEY(id_cmd) REFERENCES commande(id_cmd)
)ENGINE=InnoDB;

CREATE TABLE reunir(
   id_article INT,
   id_panier INT,
   quantite INT,
   PRIMARY KEY(id_article, id_panier),
   FOREIGN KEY(id_article) REFERENCES article(id_article),
   FOREIGN KEY(id_panier) REFERENCES panier(id_panier)
)ENGINE=InnoDB;

