<h1>Exercice 6</h1>

<p>Créer une fonction personalisée permettant de remplir une liste déroulante à partir d'un tableau de valeurs</p>

<h2>Résultat</h2>

<!-- <form action="" method="get">
    <select name="sexe" id="sexe">
        <option value="Monsieur">Monsieur</option>
        <option value="Madame">Madame</option>
        <option value="Mademoiselle">Mademoiselle</option>
    </select>
</form> -->

<?php

$elements = [
    "Monsieur",
    "Madame",
    "Mademoiselle"
];

function alimenterListeDeroulante($elements) {
    $result = '<form action="" method="get">
                    <select name="sexe" id="sexe">';

     foreach ($elements as $sexe) {
        $result.='
                    <option value="'.$sexe .'">'.$sexe.'</option>';
     } 
     
     $result.='</select>
            </form>';




    return $result;

}

echo alimenterListeDeroulante($elements);

