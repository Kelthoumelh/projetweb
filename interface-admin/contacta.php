<?php 

include 'headera.php' ?>
<?php
// Partie connexion à la BDD
// 
// ?>
// <section class="tableaua">
//     <div class="titra">Contact</div>
//     <table class="tabla">
//         

<?php
$mysqli = new Mysqli('localhost', 'root', '', 'site');
$résultat = $mysqli->query("SELECT * FROM membre");
echo '<table border="5" class="tablac"> <tr>';

echo '<th>ID</th>';
echo '<th>Pseudo</th>';
echo '<th>Mdp</th>';
echo '<th>Nom</th>';
echo '<th>Prenom</th>';
echo '<th>Email</th>';
echo '<th>Civilite</th>';
echo '<th>Ville</th>';
echo '<th>Code_postal</th>';
echo '<th>Adresse</th>';

echo "</tr>";
while ($ligne = $résultat->fetch_assoc())
{
echo '<tr>';
foreach ($ligne as $indice => $information)
{
echo '<td>' . $information . '</td>';
}
 echo '<td rowspan=2><button class="boutsup">Supprimer</button></td>';
 echo '</tr>';
}
echo '</table>';
?>
   </table> 
</section>
<?php

// Affichage (SELECT) :
// $result = $mysqli->query("SELECT id_membre, pseudo, mdp, nom, prenom, email, civilite, ville, code_postal, adresse, statut* FROM membre");
// echo '<table border="5"> <tr>';
// while($colonne = $résultat->fetch_field())
 
// echo '<th>' . $colonne->nom . '</th>';
// }
// echo "</tr>";
// while ($ligne = $résultat->fetch_assoc())
// {
// echo '<tr>';
// foreach ($ligne as $indice => $information)
// {
// echo '<td>' . $information . '</td>';
// }
//  echo '</tr>';

// echo '</table>';
