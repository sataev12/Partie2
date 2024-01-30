<h1>Exercice 5</h1>

<p>Crée une fonction personalisée permettant de créer un formulaire de champs de texte en précisant le nom 
    des champs associés.
</p>

<h2>Résultat</h2>

<!-- <form action="" method="get">
    <label for="nom">Nom</label>
    <input type="text" name="nom" id="nom" size="20" maxlength="20">

    <label for="prenom">Prenom</label>
    <input type="text" name="prenom" id="prenom" size="20" maxlength="20">

    <label for="ville">Ville</label>
    <input type="text" name="ville" id="ville" size="20" maxlength="20">
</form> -->

<?php

$nomsInput = [
    "Nom", 
    "Prénom", 
    "Ville"
];
    


function afficherInput($nomsInput){
    $result = '<form action="" method="get">';

    foreach ($nomsInput as $key) {
        $result.='
                    <label for="'.$key.'">' .$key .'</label>
                    <input type="text" name="' .$key .'" size="20" maxlength="20">';
    }

    $result.="</form>";


    return $result;
}

echo afficherInput($nomsInput);

