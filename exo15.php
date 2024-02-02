<h1>Exercice 15</h1>

<p>En utilisant les ressources de la page http://php.net vérifier si une adresse e-mail a le bon format</p>

<h2>Réseltat</h2>

<?php

$emails = array(
    'elan@elan-formation.fr',
    'contact@elan'
);

foreach ($emails as $email) {
    echo (filter_var($email, FILTER_VALIDATE_EMAIL)) ? 
        "L'adresse '$email' est une adresse e-mail valide<br>" : 
        "L'adresse '$email' est une adresse e-mail valide<br>";
}