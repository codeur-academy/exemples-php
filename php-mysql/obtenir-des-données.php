<?php
   $dbhost = 'localhost:3306';
   $dbuser = 'root';
   $dbpass = 'admin';
   
   $mysqli = new mysqli($dbhost, $dbuser, $dbpass, "productsmanager");
   if ($mysqli->connect_errno) {
      echo "Échec lors de la connexion à MySQL : (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
   }

   $res = $mysqli->query("SELECT * FROM productsmanager.products");


   $res->data_seek(0);
   while ($row = $res->fetch_assoc()) {
      echo " id = " . $row['Id'] . "\n";
      echo " price = " . $row['Price'] . "\n";
      echo " title = " . $row['Title'] . "\n";
   }


?>