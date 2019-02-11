<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Creant base de dades</title>
<meta HTTP-EQUIV="REFRESH" content="2; url=index.html"> 
</head> 
<body> 
<?php
		$db = mysql_connect("localhost", "root", "");
		mysql_query("CREATE DATABASE Books;");
		mysql_query("USE Books;");
		mysql_query("create table Book(
					ISBN INT NOT NULL,
					Title varchar(50),
					Autor varchar(50),
					Editorial varchar(50),
					Price float,
					PRIMARY KEY (ISBN)
					);");
		mysql_query("create table Autor(
					Idautor INT NOT NULL,
					Nom varchar(50),
					PRIMARY KEY (Idautor)
					);");
		mysql_query("create table Editorial(
					Idedit INT NOT NULL,
					Nom varchar(50),
					PRIMARY KEY (Idedit)
					);");
		mysql_query("insert into Book (ISBN, Title, Autor, Editorial,Price) values (1,'Un mundo feliz','Aldous Huxley','Planeta',20.00);");			
		mysql_query("insert into Book (ISBN, Title, Autor, Editorial,Price) values (2,'La isla','Aldous Huxley','Agostini',20.00);");
		mysql_query("insert into Book (ISBN, Title, Autor, Editorial,Price) values (3,'Time Must Have a Stop','Aldous Huxley','Lubna',20.00);");
		mysql_query("insert into Book (ISBN, Title, Autor, Editorial,Price) values (4,'The Genius and the Goddess','Aldous Huxley','Gigamesh',20.00);");
		mysql_query("insert into Book (ISBN, Title, Autor, Editorial,Price) values (5,'Crome Yellow','Aldous Huxley','Planeta',20.00);");
		mysql_query("insert into Book (ISBN, Title, Autor, Editorial,Price) values (6,'Canço de gel i foc','George R. R. Martin','Gigamesh',10.50);");
		mysql_query("insert into Book (ISBN, Title, Autor, Editorial,Price) values (7,'Xoc de reis','George R. R. Martin','Gigamesh',12.50);");
		mysql_query("insert into Book (ISBN, Title, Autor, Editorial,Price) values (8,'Dança amb dracs','George R. R. Martin','Gigamesh',15.50);");
		mysql_query("insert into Book (ISBN, Title, Autor, Editorial,Price) values (9,'Tempesta d*espases','George R. R. Martin','Gigamesh',11.50);");
		mysql_query("insert into Book (ISBN, Title, Autor, Editorial,Price) values (10,'Muerte de la luz','George R. R. Martin','Lubna',9.50);");
		mysql_query("insert into Book (ISBN, Title, Autor, Editorial,Price) values (11,'Sueño del fevre','George R. R. Martin','Virtual',5.00);");
		
		mysql_query("insert into Autor (Idautor, Nom) values (1,'Aldous Huxley');");
		mysql_query("insert into Autor (Idautor, Nom) values (2,'George R. R. Martin');");
		
		mysql_query("insert into Editorial (Idedit, Nom) values (1,'Planeta');");
		mysql_query("insert into Editorial (Idedit, Nom) values (2,'Agostini');");
		mysql_query("insert into Editorial (Idedit, Nom) values (3,'Lubna');");
		mysql_query("insert into Editorial (Idedit, Nom) values (4,'Gigamesh');");
		mysql_query("insert into Editorial (Idedit, Nom) values (5,'Virtual');");
		
		?>
</body> 
</html>