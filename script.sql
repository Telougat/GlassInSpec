#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: Responsable
#------------------------------------------------------------

CREATE TABLE Responsable(
        id         Int  Auto_increment  NOT NULL ,
        first_name Varchar (150) NOT NULL ,
        last_name  Varchar (150) NOT NULL ,
        status     Varchar (150) NOT NULL
	,CONSTRAINT Responsable_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Facture
#------------------------------------------------------------

CREATE TABLE Facture(
        id             Int  Auto_increment  NOT NULL ,
        salaried       Varchar (150) NOT NULL ,
        type           Bool NOT NULL ,
        amount         Float NOT NULL ,
        number         Float NOT NULL ,
        description    Text ,
        date           Date NOT NULL ,
        id_Responsable Int NOT NULL
	,CONSTRAINT Facture_PK PRIMARY KEY (id)

	,CONSTRAINT Facture_Responsable_FK FOREIGN KEY (id_Responsable) REFERENCES Responsable(id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Vente
#------------------------------------------------------------

CREATE TABLE Vente(
        id             Int  Auto_increment  NOT NULL ,
        number         Int NOT NULL ,
        amount         Float NOT NULL ,
        date           Date NOT NULL ,
        id_Responsable Int NOT NULL
	,CONSTRAINT Vente_PK PRIMARY KEY (id)

	,CONSTRAINT Vente_Responsable_FK FOREIGN KEY (id_Responsable) REFERENCES Responsable(id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Debit
#------------------------------------------------------------

CREATE TABLE Debit(
        id             Int  Auto_increment  NOT NULL ,
        amount         Float NOT NULL ,
        description    Text NOT NULL ,
        date           Date NOT NULL ,
        id_Responsable Int NOT NULL
	,CONSTRAINT Debit_PK PRIMARY KEY (id)

	,CONSTRAINT Debit_Responsable_FK FOREIGN KEY (id_Responsable) REFERENCES Responsable(id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Blacklist
#------------------------------------------------------------

CREATE TABLE Blacklist(
        id             Int  Auto_increment  NOT NULL ,
        first_name     Varchar (150) NOT NULL ,
        last_name      Varchar (150) NOT NULL ,
        date           Date NOT NULL ,
        id_Responsable Int NOT NULL
	,CONSTRAINT Blacklist_PK PRIMARY KEY (id)

	,CONSTRAINT Blacklist_Responsable_FK FOREIGN KEY (id_Responsable) REFERENCES Responsable(id)
)ENGINE=InnoDB;

