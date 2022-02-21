<?php
  // Ce fichier sera appeler par plusieurs fichier PHP, pour ouvrir une connexion avec 
  // la base de données


  $connection = mysqli_connect('localhost', 'root', 'admin', 'GestionEmploye');

  // Vérifier l'ouverture de la connexion avec la base de données
  if(!$connection){
      echo 'Erreur de connexion: ' . mysqli_connect_error(); 
  }
?>