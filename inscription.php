<?php require_once("inc/init.inc.php"); ?>
<?php include 'hf/header.php' ?>

 <h1 class="titrin"> Inscription </h1>
<form method="post" action="" class="formin">

<input type="text" id="pseudo" name="pseudo" maxlength="20" placeholder="Entrez votre pseudo" pattern="[a-zA-Z0-9-_.]{1,20}" title="caractères acceptés :
a-zA-Z0-9-_." required="required"><br><br>

<input type="password" id="mdp" name="mdp" placeholder="Crée un mot de passe" required="required"><br><br>

<input type="text" id="nom" name="nom" placeholder="Entrez votre nom"><br><br>

<input type="text" id="prenom" name="prenom" placeholder="Entrez votre prénom"><br><br>

<input type="email" id="email" name="email" placeholder="exemple@gmail.com"><br><br>

<input type="text" id="ville" name="ville" placeholder="Entrez le nom de votre ville" pattern="[a-zA-Z0-9-_.]{5,15}" title="caractères acceptés : a-zA-Z0-9-_."><br><br>

<input type="text" id="code_postal" name="code_postal" placeholder="Votre code postal" pattern="[0-9]{5}" title="5 chiffres requis : 0-9"><br><br>
<textarea id="adresse" name="adresse" placeholder="Votre adresse" pattern="[a-zA-Z0-9-_.]{5,15}" title="caractères acceptés : a-zA-Z0-9-
_."></textarea><br><br>

<input class="boutin" type="submit" name="inscription" value="S'inscrire">
</form>
<?php
if($_POST)
{
debug($_POST);
$verif_caractere = preg_match('#^[a-zA-Z0-9._-]+$#', $_POST['pseudo']);
if(!$verif_caractere && (strlen($_POST['pseudo']) < 1 || strlen($_POST['pseudo']) > 20) ) //
{
$contenu .= "<div class='erreur'>Le pseudo doit contenir entre 1 et 20 caractères. <br> Caractère accepté : Lettre de A à Z et chiffre de 0 à
9</div>";
}
else
{
$membre = executeRequete("SELECT * FROM membre WHERE pseudo='$_POST[pseudo]'");
if($membre->num_rows > 0)
{
$contenu .= "<div class='erreur'>Pseudo indisponible. Veuillez en choisir un autre svp.</div>";
}
else
{
// $_POST['mdp'] = md5($_POST['mdp']);
foreach($_POST as $indice => $valeur)
{
    $_POST[$indice] = htmlEntities(addSlashes($valeur));
    }
    executeRequete("INSERT INTO membre (pseudo, mdp, nom, prenom, email, civilite, ville, code_postal, adresse) VALUES ('$_POST[pseudo]',
    '$_POST[mdp]', '$_POST[nom]', '$_POST[prenom]', '$_POST[email]', '$_POST[civilite]', '$_POST[ville]', '$_POST[code_postal]', '$_POST[adresse]')");
    $contenu .= "<div class='validation'>Vous êtes inscrit à notre site web. <a href=\"connexion.php\"><u>Cliquez ici pour vous
    connecter</u></a></div>";
    }
    }
    }
    ?>
<?php include 'hf/footer.php' ?>