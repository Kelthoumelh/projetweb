<?php


session_start();




if(!empty($_POST)){


 
   if(empty($_POST['name'])){
       $_SESSION['name_error'] = "Le nom est requis.";
   }else{
       $name = $_POST['name'];
   }
  
   if(empty($_POST['email'])){
       $_SESSION['email_error'] = "Email est requis.";
   }else if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
       $_SESSION['email_error'] = "Format d'email invalide.";
   }else{
       $email = $_POST['email'];
   }
    if(empty($_POST['message'])){
       $_SESSION['message_error'] = "Message est requis.";
   }else if(strlen($_POST['message']) < 10){
       $_SESSION['message_error'] = "Le message doit comporter au moins 10 caractères.";
   }else{
       $message = $_POST['message'];
   }
   header("Location: reservation.php");
}
?>
<?php
   // Vérifier si le formulaire est soumis 
   if ( isset( $_GET['submit'] ) ) {
     /* récupérer les données du formulaire en utilisant 
        la valeur des attributs name comme clé 
       */
     $nom = $_GET['nom']; 
     $email = $_GET['email']; 
     $message = $_GET['message'];
     // afficher le résultat
     echo '<h3>Informations récupérées en utilisant GET</h3>'; 
     echo 'Nom : ' . $nom . ' Email : ' . $email . ' message : ' . $adresse; 
     exit;
     header("Location: reservation.php");
  }
?>
