CREATE DATABASE shopcomputer;

use shopcomputer;

CREATE TABLE IF NOT EXISTS `contact` (
  `reference` int(11) NOT NULL AUTO_INCREMENT,
  `nom` text NOT NULL,
  `telephone` int(11) NOT NULL,
  `email` text NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`reference`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `utilisateur` (
  `user` int(11) NOT NULL AUTO_INCREMENT,
  `nomutilisateur` varchar(25) NOT NULL,
  `email` text NOT NULL,
  `motdepasse` text NOT NULL,
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `biographie` text NOT NULL,
  `telephone` int(20) NOT NULL,
  PRIMARY KEY (`user`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `notification` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `notif` text NOT NULL,
  `dateN` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `produit` (
  `reference` int(11) NOT NULL AUTO_INCREMENT,
  `designation` varchar(25) NOT NULL,
  `description` text NOT NULL,
  `prix` bigint(20) NOT NULL,
  `type` text NOT NULL,
  `image` text NOT NULL,
  PRIMARY KEY (`reference`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

CREATE TABLE achat(
   facture int(11) NOT NULL AUTO_INCREMENT,
   dateF VARCHAR(50),
   mail VARCHAR(50),
   reference VARCHAR(50),
   quantite INT,
   prix INT,
   somme INT,
   PRIMARY KEY(facture)
)ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

CREATE TABLE attente(
   facture int(11) NOT NULL AUTO_INCREMENT,
   dateF VARCHAR(50),
   mail VARCHAR(50),
   reference VARCHAR(50),
   quantite INT,
   prix INT,
   somme INT,
   PRIMARY KEY(facture)
)ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;


CREATE TABLE archive(
   facture int(11) NOT NULL AUTO_INCREMENT,
   dateF VARCHAR(50),
   mail VARCHAR(50),
   reference VARCHAR(50),
   quantite INT,
   prix INT,
   somme INT,
   PRIMARY KEY(facture)
)ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;