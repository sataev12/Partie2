<h1>Exercice 5</h1>

<p>Ecrire un algorithme qui déclare une valeur en francs et qui la convertit en euros. 
Attention, la valeur générée devra être arrondie à 2 décimale
</p> 

<h2>Résultat</h2>

<?php
$montantFrancs = 75;
$conversionEuro = 0.1524;
$resultat = round($montantFrancs * $conversionEuro,2);

echo "Affichage :<br><br> Montant en francs : $montantFrancs<br>
$montantFrancs francs = $resultat €";
?>