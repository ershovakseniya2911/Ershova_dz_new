<?php
$hostname = 'localhost';
$username = 'Kseniya';
$password = '423543139Ksusha!';
$dbname = 'newmycity3';

$dbconnect = mysqli_connect($hostname, $username, $password) or die("-");
//var_dump($dbconnect);
mysqli_select_db($dbconnect, $dbname);
mysqli_set_charset($dbconnect, 'utf8');
//mysqli_query($dbconnect, "CREATE DATABASE $dbname");
//mysqli_query($dbconnect,"CREATE TABLE people (ID_person INT NOT NULL AUTO_INCREMENT, Name varchar (15), Surname varchar (15), Age int, PRIMARY KEY (ID_person))");
//mysqli_query($dbconnect, "INSERT INTO people (ID_person, Name, Surname, Age) VALUES (null, 'Tom', 'Tomson', 10)");
//mysqli_query($dbconnect, "INSERT INTO people (ID_person, Name, Surname, Age) VALUES (null, 'Bob', 'Bobson', 11)");
//mysqli_query($dbconnect, "INSERT INTO people (ID_person, Name, Surname, Age) VALUES (null, 'Sam', 'Samson', 12)");
//mysqli_query($dbconnect, "INSERT INTO people (ID_person, Name, Surname, Age) VALUES (null, 'Jac', 'Jacson', 13)");
//mysqli_query($dbconnect, "INSERT INTO people (ID_person, Name, Surname, Age) VALUES (null, 'Stiv', 'Stivson', 14)");

mysqli_query($dbconnect,"CREATE TABLE hobbies (ID_hobbies INT NOT NULL AUTO_INCREMENT, Name varchar (15), Description varchar (100), 
PRIMARY KEY (ID_hobbies)");
mysqli_query($dbconnect, "INSERT INTO hobbies (ID_hobbies, Name, Description) VALUES (null, 'Книг', 'Читать книги')");
mysqli_query($dbconnect, "INSERT INTO hobbies (ID_hobbies, Name, Description) VALUES (null, 'Плавание', 'Посещать бассейн')");
mysqli_query($dbconnect, "INSERT INTO hobbies (ID_hobbies, Name, Description) VALUES (null, 'Волейбол', 'Играть в волейбол')");
mysqli_query($dbconnect, "INSERT INTO hobbies (ID_hobbies, Name, Description) VALUES (null, 'Футбол', 'Играть в футбол')");
mysqli_query($dbconnect, "INSERT INTO hobbies (ID_hobbies, Name, Description) VALUES (null, 'Рыбалка', 'Ловить рыбу')");