DROP DATABASE IF EXISTS MLR1;

CREATE DATABASE IF NOT EXISTS MLR1;
USE MLR1;
# -----------------------------------------------------------------------------
#       TABLE : LIEU
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS LIEU
 (
   LIEUID INT NOT NULL AUTO_INCREMENT ,
   VILID INT NOT NULL ,
   LIEUNOM CHAR(32) NULL  
   , PRIMARY KEY (LIEUID) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE LIEU
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_LIEU_COMMUNE
     ON LIEU (VILID ASC);

# -----------------------------------------------------------------------------
#       TABLE : CHAUFFEUR
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS CHAUFFEUR
 (
   CHFID INT NOT NULL AUTO_INCREMENT ,
   CHFNOM CHAR(32) NULL  ,
   CHFPRENOM CHAR(32) NULL  ,
   CHFTEL CHAR(32) NULL  ,
   CHFMAIL CHAR(32) NULL  ,
   CHFCOORDGPS CHAR(32) NULL  
   , PRIMARY KEY (CHFID) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : TOURNEE
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS TOURNEE
 (
   TRNNUM INT NOT NULL AUTO_INCREMENT ,
   VEHIMMAT CHAR(32) NOT NULL  ,
   CHFID INT NOT NULL ,
   TRNCOMMENTAIRE CHAR(32) NULL  ,
   TRNARCHAUFFEUR CHAR(32) NULL  
   , PRIMARY KEY (TRNNUM) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE TOURNEE
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_TOURNEE_VEHICULE
     ON TOURNEE (VEHIMMAT ASC);

CREATE  INDEX I_FK_TOURNEE_CHAUFFEUR
     ON TOURNEE (CHFID ASC);

# -----------------------------------------------------------------------------
#       TABLE : COMMUNE
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS COMMUNE
 (
   VILID INT NOT NULL AUTO_INCREMENT ,
   VILNOM CHAR(32) NULL  
   , PRIMARY KEY (VILID) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : PHOTO
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS PHOTO
 (
   PHOID INT NOT NULL AUTO_INCREMENT ,
   TRNNUM INT NOT NULL  ,
   ETPID CHAR(32) NOT NULL  ,
   PHOURL CHAR(32) NULL  
   , PRIMARY KEY (PHOID) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE PHOTO
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_PHOTO_ETAPE
     ON PHOTO (TRNNUM ASC,ETPID ASC);

# -----------------------------------------------------------------------------
#       TABLE : TYPEDOCUMENTATION
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS TYPEDOCUMENTATION
 (
   TYPDOCID INT NOT NULL AUTO_INCREMENT ,
   TYPDOCLIB CHAR(32) NULL  
   , PRIMARY KEY (TYPDOCID) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : VEHICULE
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS VEHICULE
 (
   VEHIMMAT CHAR(32) NOT NULL  ,
   VEHNOM CHAR(32) NULL  
   , PRIMARY KEY (VEHIMMAT) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : DOCUMENTATION
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS DOCUMENTATION
 (
   DOCID INT NOT NULL AUTO_INCREMENT ,
   TRNNUM INT NOT NULL,
   TYPDOCID CHAR(32) NOT NULL  ,
   DOCURL CHAR(32) NULL  
   , PRIMARY KEY (DOCID) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE DOCUMENTATION
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_DOCUMENTATION_TOURNEE
     ON DOCUMENTATION (TRNNUM ASC);

CREATE  INDEX I_FK_DOCUMENTATION_TYPEDOCUMENTATION
     ON DOCUMENTATION (TYPDOCID ASC);

# -----------------------------------------------------------------------------
#       TABLE : ETAPE
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS ETAPE
 (
   TRNNUM INT NOT NULL  ,
   ETPID INT NOT NULL AUTO_INCREMENT ,
   LIEUID INT NOT NULL  ,
   ETPHREMIN DATETIME NULL  ,
   ETPHREMAX DATETIME NULL  ,
   ETPHREDEBUT DATETIME NULL  ,
   ETPHREFIN DATETIME NULL  ,
   ETPNBPALLIV SMALLINT(6) NULL  ,
   ETPNBPALLIVEUR SMALLINT(6) NULL  ,
   ETPNBPALCHARG SMALLINT(6) NULL  ,
   ETPNBPALCHARGEUR SMALLINT(6) NULL  ,
   ETPNBPALRECU SMALLINT(6) NULL  ,
   ETPETATLIV CHAR(32) NULL  ,
   ETPCOMMENTAIRE CHAR(32) NULL  ,
   ETPVAL CHAR(32) NULL  ,
   ETPKM CHAR(32) NULL  
   , PRIMARY KEY (TRNNUM,ETPID) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE ETAPE
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_ETAPE_TOURNEE
     ON ETAPE (TRNNUM ASC);

CREATE  INDEX I_FK_ETAPE_LIEU
     ON ETAPE (LIEUID ASC);


# -----------------------------------------------------------------------------
#       CREATION DES REFERENCES DE TABLE
# -----------------------------------------------------------------------------


ALTER TABLE LIEU 
  ADD FOREIGN KEY FK_LIEU_COMMUNE (VILID)
      REFERENCES COMMUNE (VILID) ;


ALTER TABLE TOURNEE 
  ADD FOREIGN KEY FK_TOURNEE_VEHICULE (VEHIMMAT)
      REFERENCES VEHICULE (VEHIMMAT) ;


ALTER TABLE TOURNEE 
  ADD FOREIGN KEY FK_TOURNEE_CHAUFFEUR (CHFID)
      REFERENCES CHAUFFEUR (CHFID) ;


ALTER TABLE PHOTO 
  ADD FOREIGN KEY FK_PHOTO_ETAPE (TRNNUM,ETPID)
      REFERENCES ETAPE (TRNNUM,ETPID) ;


ALTER TABLE DOCUMENTATION 
  ADD FOREIGN KEY FK_DOCUMENTATION_TOURNEE (TRNNUM)
      REFERENCES TOURNEE (TRNNUM) ;


ALTER TABLE DOCUMENTATION 
  ADD FOREIGN KEY FK_DOCUMENTATION_TYPEDOCUMENTATION (TYPDOCID)
      REFERENCES TYPEDOCUMENTATION (TYPDOCID) ;


ALTER TABLE ETAPE 
  ADD FOREIGN KEY FK_ETAPE_TOURNEE (TRNNUM)
      REFERENCES TOURNEE (TRNNUM) ;


ALTER TABLE ETAPE 
  ADD FOREIGN KEY FK_ETAPE_LIEU (LIEUID)
      REFERENCES LIEU (LIEUID) ;

