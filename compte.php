<?php include 'hf/header.php' ?>

<form id="cmpth"action="">
<h1 class="cmpti">Connexion</h1>
<input type="email" id="email" name="email" class="ecmpt" placeholder="Sophie@exemple.com" required><br>
<input type="password" name="password" id="password" class="passcmpt" placeholder="Mot de passe" pattern="[a-zA-Z]{8,20}" required><br>
<input type="submit" value="Envoyer" name="submit" class="envocmpt">
</form>
<?php include 'hf/footer.php' ?>