<h1>Exercice 10</h1>

<p>
    En utilisant l'ensemble des fonctions personalisées crées précedemment, créer un formulaire complet qui 
    contient les informations suivantes: champs de texte avec nom, prénom, adresse e-mail, ville, sexe et 
    une liste de choix parmi lesquels on pourra séléctionner un intitulé de formation : "Développeur Logiciel",
    "Designer web", "Intyegrateur" ou "Chef de projet". 
    
    Le formulaire devra également comporter un bouton permettant de le soumettre à un traitement de 
    validation(submit).
</p>

<h2>Résultat</h2>

<?php

function formT(){
    $result = '<form action="" method="get">';

    


    return $result;
}











//Tableau d'information
$nomsInput = [
    "Nom", 
    "Prénom", 
    "e-mail",
    "Ville"
];
    

//FUNCTION POUR AFFIVHER INFO
function afficherInput($nomsInput){
    $result = '<form action="" method="get">';

    foreach ($nomsInput as $key) {
        $result.='
                    <label for="'.$key.'">' .$key .'</label>
                    <input type="text" name="' .$key .'" size="20" maxlength="20"><br>';
    }

    $result.="</form>";


    return $result;
}

//TABLEAU
$elements = [
    "Monsieur",
    "Madame",
    "Mademoiselle"
];

//FUNCTION POUR AFFOCHER LE LISTE DEROULANT
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

//Tableau de 'choix'
$listeFormation = [
    "Développeur Logiciel"=> "",
    "Designer web"=> "checked",
    "Intégrateur"=> "",
    "Chef de projet"=> ""
];

function genererCheckbox($listeFormation){

    $result = '<form action="" method="get">
                <h4>Un Intitulé de formation</h4>';

    foreach ($listeFormation as $choix => $valeur) {
        $result.='<input type="checkbox" name="'.$choix.'" id = "scale" '.$valeur.' /> <label for="'.$choix.'">'.$choix.'</label><br>';
    }
    $result.="</form>";
    

    return $result;
}






echo afficherInput($nomsInput);
echo alimenterListeDeroulante($elements);
echo genererCheckbox($listeFormation);

