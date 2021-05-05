<?php
   
   // Ouverture de la connexion à la base de données
   $dbhost = 'localhost:3306';
   $dbuser = 'root';
   $dbpass = 'admin';
   $conn = new mysqli($dbhost, $dbuser, $dbpass);
   
// Check connection
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
 }
 echo "Connected successfully"
?>