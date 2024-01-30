<h3>Exercice 3</h3>

<p>Afficher un lien hypertexte permettant d'accéder au site d'Elan Formation. Le lien devra s'ouvrir dans un nouvel onglet(_blank).</p>

<h2>Résultat</h2>

<?php

$urlLien = "https://elan-formation.fr/";

function lienHyperTexte($urlLien){
    $result = '<a href="' . $urlLien . '" target="_blank">Elan Formation</a>';

    return $result;
}

echo lienHyperTexte($urlLien);