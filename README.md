# Print Form Generation Service
 
 Create DB
 
` CREATE SCHEMA pfs;`

 `CREATE TABLE pfs.forms
 (
     id INT PRIMARY KEY AUTO_INCREMENT,
     type VARCHAR(10) NOT NULL,
     tpl MEDIUMBLOB NOT NULL
 );
 CREATE UNIQUE INDEX forms_type_uindex ON pfs.forms (type);`