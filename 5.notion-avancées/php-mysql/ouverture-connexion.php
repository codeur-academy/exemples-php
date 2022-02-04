<?php
   
   // Ouverture de la connexion à la base de données
   $dbhost = 'localhost:3306';
   $dbuser = 'root';
   $dbpass = 'admin';
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
   
 
if(! $conn ) {
   die('Could not connect: ' . mysql_error() );
}
 echo "Connected successfully";
?>

