<h1>Exercice 9</h1>

<p>Créer une fonction personalisée permettant d'afficher des boutons radio avec un tableau de valeurs
    en paramètre ("Monsieur", "Madame", "Mademoiselle").
</p>

<h2>Résultat</h2>

<!-- <div>
    <input type="radio" id = masculin name = "masculin" value = "masculin"/>
    <label for = "masculin">Masculin</label>
</div> -->


</form>

<?php

$tableau = [
    "Masculin",
    "Fémenin",
    "Mademoiselle"
];


function afficherRadio($tableau){
    $result = '<form action="" method="get">';

    foreach ($tableau as $key) {
        $result.='<input type="radio" id = "'.$key.'" name = "'.$key.'" value = "'.$key.'"/>
                <label for = "'.$key.'">'.$key.'</label><br>';
    }
    
    $result.="</form>";


    return $result;
}

echo afficherRadio($tableau);