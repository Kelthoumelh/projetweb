
<?php require_once("inc/init.inc.php");?>
<?php include 'hf/header.php' ?>
<?php
// TRAITEMENTS PHP //
if(isset($_GET['action']) && $_GET['action'] == "deconnexion");
{
session_destroy();
}
if(internauteEstConnecte())
{
header("location:profil.php");
}
if($_POST)
{
// $contenu .= "pseudo : " . $_POST['pseudo'] . "<br>mdp : ". $_POST['mdp'] . "";
$résultat= executeRequete("SELECT * FROM membre WHERE pseudo='$_POST[pseudo]'");
if
($résultat->num_rows != 0)
{
// $contenu .= '<div style="background:green">pseudo connu!</div>';
$membre= $résultat->fetch_assoc();
if
($membre['mdp'] == $_POST['mdp'])
{
//$contenu .= '<div class="validation">mdp connu!</div>';
foreach
($membre as $indice => $element)
{
if($indice != 'mdp')
{
$_SESSION['membre'][$indice]= $element;
}
}
header("location:profil.php");
}
else 
{
$contenu .= '<div class="erreur">Erreur de MDP</div>';
}
}
else 
{
$contenu .= '<div class="erreur">Erreur de pseudo</div>';
}
}
?>
<form id="cmpth"action="">
<h1 class="cmpti">Connexion</h1>
<input type="text" id="pseudo" name="pseudo"><br>
<input type="text" id="mdp" name="mdp"><br><br>
<input type="submit" value="Se connecter" name="submit" class="envocmpt">
<a href="inscription.php">s'inscrire</a>
</form>

<?php include 'hf/footer.php' ?>