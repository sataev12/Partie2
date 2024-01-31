<h1>Exercice 12</h1>

<p>La fonction var_dump($variable) permet d'afficher les informations d'une variable.

A l'aide d'une boucle, afficher les informations des variables contenues dans le tableau.
</p>

<h2>Résultat</h2>

<?php

$tableauValeurs = [
    true,
    "texte",
    10,
    25.369,
    array("valeur1", "valeur2") 

];

foreach ($tableauValeurs as $element) {
    $type = var_dump($element);
    echo $type.'<br>';
}