<?php

if ( isset( $_POST['submit'] ) ) {
     /* récupérer les données du formulaire en utilisant 
        la valeur des attributs name comme clé 
       */ 
      $nom = $_POST['nom']; 
      if (!empty($nom)){
        echo $nom;
      }
     $email = $_POST['email']; 
     if (!empty($email)){
        echo $email;
      }
     $message = $_POST['message'];
     if (!empty($message)){
        echo $message;
      }
  }
?>