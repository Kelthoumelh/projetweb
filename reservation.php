
<?php include 'hf/header.php' ?>
   <form class="formr" action="contact1.php" method="post">
    <h1 class="titrr">Réservations</h1>
       <input class="nom" pattern="[a-zA-Z]{2,10}" title=" Veuillez écrire un Nom valide" type="text" id="name" name="name" placeholder="Nom" required>
       <br>
       <input class="email" title=" Veuillez écrire une adresse email valide" type="email" id="email" name="email" placeholder="Sophie@exemple.com" required>
       <br>
       <textarea maxlength="50" minlength="3"  id="message" name="message" placeholder="Message" required></textarea>
       <br>
       <input class="submit" type="submit" value="Envoyer" name="submit">

   </form> 
<?php include 'hf/footer.php' ?>
 </body>
</html>