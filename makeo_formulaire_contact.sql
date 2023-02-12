
-- Etape 1 : Créer une base de données appelée "makeo_formulaire_contact"
CREATE DATABASE makeo_formulaire_contact;

-- Etape 2 : Sélectionner la base de données
USE makeo_formulaire_contact;

-- Etape 3 : Créer la table pour stocker les données
CREATE TABLE envoi_formulaire (
                                  id INT AUTO_INCREMENT PRIMARY KEY,
                                  nomprenom VARCHAR(100) NOT NULL,
                                  email VARCHAR(100) NOT NULL,
                                  message TEXT NOT NULL
);

-- Etape 4 : Inserer des données de test
INSERT INTO envoi_formulaire (nomprenom, email, message)
VALUES
    ("John DOE", "toto@toto.com", "Bonjour, je suis ..."),
    ("Jane DOE", "tata@tata.com", "Un autre message ...");

