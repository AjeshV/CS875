-- CS 775/875 - Spring 2017 
-- Assignment #2 
-- Test Database - SQL Source File 
 
 
USE cs775; 

drop table reservation;
drop table schedule;
drop table passenger;
drop table crew;
drop table departure;
drop table tripinfo;
 

CREATE TABLE tripinfo 
(
   code                 CHAR(5),
   company		CHAR(15)  NOT NULL,
   tripnbr		INT   NOT NULL,
   segnbr		INT   NOT NULL,
   origin		CHAR(10), 
   destination   	CHAR(10), 
   duration		INT, 
   tripmiles	        INT, 
 
   PRIMARY KEY (code) 
); 
 
INSERT INTO tripinfo VALUES 
('g1','greyhound',73,1,'newyork','miami',15,1000), 
('g2','greyhound',73,2,'miami','tampa',3,300), 
('p1','peterpan',99,1,'washington','ny',4,200), 
('p2','peterpan',99,2,'ny','boston',5,200), 
('p3','peterpan',99,3,'boston','ogunquit',2,100), 
('f1','fungwah',120,1,'denver','lasvegas',10,700); 
 
 
CREATE TABLE departure 
( 
   code                 CHAR(5),
   date			DATE, 
   busnbr		CHAR(15), 
 
   PRIMARY KEY (code, date), 
   FOREIGN KEY (code) REFERENCES tripinfo (code) 
); 
 
INSERT INTO departure VALUES 
('g1','2017-5-19','XYZ123'), 
('g2','2017-5-19','XYZ123'), 
('p1','2017-4-30','ABC123'), 
('p2','2017-4-30','ABC123'), 
('p3','2017-4-30','ABC123'), 
('p1','2017-5-02','DEF456'), 
('p2','2017-5-02','DEF456'), 
('p3','2017-5-02','DEF456'), 
('f1','2017-6-01','GHI789'), 
('f1','2017-6-02','GHI789'), 
('f1','2017-6-03','GHI789'), 
('f1','2017-6-04','GHI789'), 
('f1','2017-6-05','GHI789'); 
 
CREATE TABLE passenger  
( 
   ssn		INT, 
   name		CHAR(30), 
   phone	CHAR(10), 
   earnedmiles	INT, 
 
   PRIMARY KEY (ssn) 
); 
 
INSERT INTO passenger VALUES 
(111,'john','8675309',1000), 
(333,'amy','5551234',10); 
 
CREATE TABLE crew 
( 
   ssn		INT, 
   name		CHAR(30), 
   phone	CHAR(10), 
   job		CHAR(16), 
   salary	INT, 
 
   PRIMARY KEY (ssn) 
); 
 
INSERT INTO crew VALUES 
(111,'john','8675309','driver', 65000), 
(222,'mary','3273931','driver', 86000), 
(444,'mark','4521879','mechanic', 53000); 
 
CREATE TABLE reservation 
( 
   ssn			INT, 
   code                 CHAR(5),
   date			DATE, 
   seat			CHAR(4), 
 
   PRIMARY KEY (ssn, code, date), 
   FOREIGN KEY (ssn) REFERENCES passenger (ssn), 
   FOREIGN KEY (code, date) REFERENCES departure (code, date) 
); 
 
INSERT INTO reservation VALUES 
(111,'g1','2017-5-19','2F'), 
(333,'p1','2017-4-30','1A'), 
(333,'p2','2017-4-30','1A'), 
(333,'p3','2017-4-30','1A'); 
 
CREATE TABLE schedule 
( 
   ssn			INT, 
   code                 CHAR(5),
   date			DATE, 
 
   PRIMARY KEY (ssn, code, date), 
   FOREIGN KEY (ssn) REFERENCES crew (ssn), 
   FOREIGN KEY (code, date) REFERENCES departure (code, date) 
); 
 
INSERT INTO schedule VALUES 
(222,'g1','2017-5-19'), 
(111,'p1','2017-4-30'), 
(111,'p2','2017-4-30'), 
(111,'p3','2017-5-02'), 
(222,'p1','2017-5-02'), 
(222,'p2','2017-5-02'), 
(222,'p3','2017-5-02'), 
(111,'f1','2017-6-01'), 
(111,'f1','2017-6-02'), 
(111,'f1','2017-6-03'), 
(111,'f1','2017-6-04'), 
(111,'f1','2017-6-05'), 
(444,'f1','2017-6-01'), 
(444,'f1','2017-6-02'), 
(444,'f1','2017-6-03'), 
(444,'f1','2017-6-04'), 
(444,'f1','2017-6-05'); 
 
SELECT * FROM tripinfo; 
SELECT * FROM departure; 
SELECT * FROM passenger; 
SELECT * FROM crew; 
SELECT * FROM reservation; 
SELECT * FROM schedule; 
 
