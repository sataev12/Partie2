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
    "Masculin"=>"Monsieur",
    "Fémenin"=>"Madame",
    "Mademoiselle"=>"Atre"
];


function afficherRadio($tableau){
    $result = "<div>";

    foreach ($tableau as $key => $value) {
        $result.='<input type="radio" id = "'.$key.'" name = "'.$key.'" value = "'.$key.'"/>
                <label for = "'.$key.'">'.$key.'</label><br>';
    }
    
    $result.="</div>";


    return $result;
}

echo afficherRadio($tableau);