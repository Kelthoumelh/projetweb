
<?php include 'hf/header.php' ?>

<p class="titre">Réservations*</p>
<form action="contact1.php" method="post"class="nem">
<input class="champ" type="text" name="nom" placeholder="Nom Prénom" method="post"/><br>
<input class="mail" type="email" name="email" placeholder="sophie@example.com"  method="post"/><br>
<textarea  type="text" name="message" id="id_champ" rows="10" cols="50" class="mess" placeholder="Message"  method="post"></textarea>
</div>
<input type="submit" name="submit" value="Envoyer" class="bouton">
<p class="rés" >*Réserver au moins une semaine à l’avance </p>
<?php
   if(isset($_SESSION['success'])){
       echo "<p style='color:green'>".$_SESSION['success']."</p>";
       session_unset();
   }
   if(isset($_SESSION['name_error'])){
       echo "<p style='color:red'>".$_SESSION['name_error']."</p>";
       session_unset();
   }
   if(isset($_SESSION['email_error'])){
       echo "<p style='color:red'>".$_SESSION['email_error']."</p>";
       session_unset();
   }
   if(isset($_SESSION['message_error'])){
       echo "<p style='color:red'>".$_SESSION['message_error']."</p>";
       session_unset();
   }
   if(isset($_SESSION['error'])){
       echo "<p style='color:red'>".$_SESSION['error']."</p>";
       session_unset();
   }
   ?> 

<?php include 'hf/footer.php' ?>
</form>
</body>
</html>