<h1>Exercice 7</h1>

<p>Créer une fonction personalisée permettant de générer des cases à cocher. On pourra préciser dans 
    le tableau associatif si la case est cochée ou non.
</p>

<h2>Résultat</h2>

<!-- <form action="" method="get">
    <input type="radio" name="choix"> <label for="choix1">choix</label><br>
</form> -->

<?php

$elements = [
    "choix1",
    "choix2",
    "choix3"
];

function genererCheckbox($elements){

    $result = '<form action="" method="get">';

    foreach ($elements as $choix) {
        $result.='<input type="checkbox" name="'.$choix.'[]"> <label for="'.$choix.'">'.$choix.'</label><br>';
    }
    $result.="</form>";
    if(isset($_POST[$choix]))
    {
        foreach ($_POST[$choix] as $valeur) {
            echo $valeur ."<br>";
        }
    }



    return $result;
}

echo genererCheckbox($elements);