DROP DATABASE IF EXISTS comp220db;
CREATE DATABASE comp220db;
USE comp220db;

CREATE TABLE fontNames (fontName varchar(50), primary key (fontName));
INSERT INTO fontNames VALUES ('Arial');
INSERT INTO fontNames VALUES ('Brush Script MT');
INSERT INTO fontNames VALUES ('Comic Sans MS');
INSERT INTO fontNames VALUES ('Courier New');
INSERT INTO fontNames VALUES ('Verdana');

SELECT * from fontNames;