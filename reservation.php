
<?php include 'hf/header.php' ?>
   <!-- <form class="formr" action="contact1.php" method="post">
    <h1 class="titrr">Réservations</h1>
       <input class="nom" pattern="[a-zA-Z]{2,10}" title=" Veuillez écrire un Nom valide" type="text" id="name" name="name" placeholder="Nom" required>
       <br>
       <input class="email" title=" Veuillez écrire une adresse email valide" type="email" id="email" name="email" placeholder="Sophie@exemple.com" required>
       <br>
       <textarea maxlength="50" minlength="3"  id="message" name="message" placeholder="Message" required></textarea>
       <br>
       <input class="submit" type="submit" value="Envoyer" name="submit">

   </form>  -->

   <h1 class="event">Evènements</h1>
   <div class="ccg">
<div>
   <img class="cornr" src="img/corne de gazelle.PNG" alt="">
   <p class="bapteme">Baptème</p>
</div>
<div>
   <img class="chebar"src="img/chebakkia.PNG" alt="">
   <p class="mariage" >Mariage</p>
</div>
<div>
   <img class="ghlibr" src="img/ghliba(600).png" alt="">
   <p class="autre">Autres</p>
</div>
</div>
<input class="devis" type="button" value="Faire un devis" onclick="masquer_div('a_masquer');" />
<div id="a_masquer" style="display:none">
<form  class="formdevis" action="">
   <input class="" type="text" placeholder="Nom Prénom">
   <input type="email" name="email" id="" placeholder="Email">
   <input type="date" name="" id="">
   <input type="tel" name="" id="" placeholder="Téléphone">
   <input type="text" placeholder="quantité et types de gateau">
   <textarea name="msgdevis" id="" cols="30" rows="10" placeholder="Message : indiquez-nous ici le nombre d'invités, le type de conditionnement,... ou toute information utile pour vous établir un devis !"></textarea>
   <input type="button" value="Envoyer" class="envodevis">
</form>

</div>
 

<?php include 'hf/footer.php' ?>
 </body>
</html>