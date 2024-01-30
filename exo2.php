<h1>Exercice 2</h1>

<p>Soit le tableau suivant : <code>$capitales = ["France"=>"Paris", "Allemagne"=>"Berlin",
    "USA"=>"Washington", "Italie"=>"Rome"];</code><br>
Réaliser un algorithme permettant d'afficher le tableau HTML suivant(notez que le nom du pays
s'affichera en majuscule et que le tableau est trié par ordre alphabétique du nom du pays) grâce
à une fonction personalisée.</p>

<h2>Résultat</h2>

<!-- <table> 
    <thead>
        <tr> 
            <th>Pays</th> 
            <th>Capitale</th> 
        </tr>
    </thead>

    <tr> 
        <td>France</td> 
        <td>Paris</td> 
    </tr>
</table> -->

<?php

$capitales = array(
    "France"=>"Paris",
    "Allemagne"=>"Berlin",
    "USA"=>"Washington",
    "Italie"=>"Rome"
);

function afficherTableHTML($capitales){
    ksort($capitales);
    $result = "<table border = 1> 
                    <thead>
                        <tr> 
                            <th>Pays</th> 
                            <th>Capitale</th> 
                        </tr>
                    </thead>";
    foreach ($capitales as $pays => $capitale) {
        $result .= "<tr> 
                        <td>".mb_strtoupper($pays)."</td> 
                        <td>".ucfirst($capitale)."</td> 
                    </tr>";
    }
    $result .= "</table>";
    
    return $result;
}

echo afficherTableHTML($capitales);

