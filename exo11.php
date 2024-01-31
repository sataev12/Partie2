

<h1>Exercice 11</h1>

<p>Ecrire une fonction personalisée qui affiche une date en français(en toutes lettre)
    à partir d'une chaîne de caractère représentant une date.
</p>

<h2>Résultat</h2>

<?php
phpinfo();
$dt = new DateTime('2018-02-23');

$formater = new IntlDateFormatter('fr_FR.utf8', IntlDateFormatter::FULL, IntlDateFormatter::NONE);
$formater->setPattern('d MMMM yyyy');

echo $formater->format($dt);