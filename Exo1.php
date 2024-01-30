<h1>Exercice 1</h1>

<p>Créer une fonction personalisée 'convertirMajRouge()' permettant de transformer une chaine de 
    caractère passée en argument en majuscules et en rouge.

Vous devrez appeler la fonction comme suit : convertirMajRouge($texte);</p>

<h2>Résultat</h2>

<style>
    .red{
        color: red;
    }
</style>

<?php



$text = "Mon texte en papamètre";

function convertirMajRouge($text,$color) {
    echo "<p style='color:$color'>".mb_strtoupper($text)."</p>";
}

echo convertirMajRouge($text, 'red');