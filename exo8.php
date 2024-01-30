<h1>Exercice 8</h1>

<p>Soit l'URL suivante : http://my.mobirise.com/data/userpic/764.jpg
    Créer une fonction personalisée permettant d'afficher l'image N fois à l'écran.
</p>

<h2>Résultat</h2>


<?php
$i = 0;
$url = 'http://my.mobirise.com/data/userpic/764.jpg';

function repeterImage($url, $n) {
    $result = "";
    for($i =0; $i<$n; $i++){
        $result .= '<img src="'.$url.'" alt="Un chien">';
    }
    

    return $result;
}

echo repeterImage($url, 4);