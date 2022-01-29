<?php

//Connexion a la DB
require './connDB.php';

#------------------------------------------------------------
# Table: Editeurs
#------------------------------------------------------------
$db -> exec("CREATE TABLE Editeurs(
    ID_edit             Int  Auto_increment  NOT NULL ,
    nom_editeur         Varchar (255) NOT NULL ,
    date_edition        Date NOT NULL ,
    Jeux_le_plus_vendu  Varchar (255) NOT NULL,
    CONSTRAINT Editeurs_PK PRIMARY KEY (ID_edit)
)ENGINE=InnoDB;");

echo ' table editeurs created';

#------------------------------------------------------------
# Table: Jeux
#------------------------------------------------------------

$db->exec("CREATE TABLE Jeux(
    ID_jeux       Int  Auto_increment  NOT NULL ,
    nom_jeux      Varchar (255) NOT NULL ,
    date_parution Date NOT NULL ,
    ID_edit       Int NOT NULL,
    CONSTRAINT Jeux_PK PRIMARY KEY (ID_jeux),
    CONSTRAINT Jeux_Editeurs_FK FOREIGN KEY (ID_edit) REFERENCES Editeurs(ID_edit) ON DELETE NO ACTION ON UPDATE NO ACTION
)ENGINE=InnoDB;");

echo ' table jeux created ';
#------------------------------------------------------------
# Table: Plateforme
#------------------------------------------------------------
$db->exec("CREATE TABLE Plateforme(
    ID_plateforme  Int  Auto_increment  NOT NULL ,
    nom_plateforme Varchar (255) NOT NULL ,
    date_creation  Date NOT NULL,
    CONSTRAINT Plateforme_PK PRIMARY KEY (ID_plateforme)
)ENGINE=InnoDB;");
echo ' table platforme created ';


#------------------------------------------------------------
# Table: est_present
#------------------------------------------------------------
$db->exec("CREATE TABLE est_present(
    ID_jeux       Int NOT NULL ,
    ID_plateforme Int NOT NULL,
    CONSTRAINT est_present_PK PRIMARY KEY (ID_jeux,ID_plateforme),
    CONSTRAINT est_present_Jeux_FK 
        FOREIGN KEY (ID_jeux)
        REFERENCES Jeux(ID_jeux) 
        ON UPDATE CASCADE
        ON DELETE RESTRICT,
    CONSTRAINT est_present_Plateforme0_FK 
        FOREIGN KEY (ID_plateforme) 
        REFERENCES Plateforme(ID_plateforme) 
        ON UPDATE CASCADE
        ON DELETE RESTRICT
)ENGINE=InnoDB;");


echo ' Tables est_present created ! ';