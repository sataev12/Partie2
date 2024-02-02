<h1>Exercice 4</h1>

<p>Ecrire un algorithme permettant de savoir si une phrase est palindrome.

<h2>Résultat</h2>

<p>Affichage :
</p> 

<?php

$phraseOri = "Engage le jeu que je le gagne";

$phrase1 = str_replace(" ","",strtolower($phraseOri));

$phrase2 = strrev($phrase1);

if ($phrase1 == $phrase2) {

    echo "La phrase \"$phraseOri\" est palindrome ";

}
else {

    echo "La phrase \"$phraseOri\" n'est pas palindrome ";

}

?>