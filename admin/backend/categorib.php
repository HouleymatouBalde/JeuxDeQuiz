<?php 

// FAIRE UN APPEL AU FICHIER db DANS CONFIG
require_once __DIR__ . "/../../config/db.php";


// FAIRE UNE FONCTION POUR AFFICHER LA LISTE DES CATEGORIES
function listeCategories(){
    // PREPARER LA RQUETR SQL
    $liste=connexiondb()->prepare("SELECT * FROM categorie");
    // EXECUTER LA LISTE
    $liste->execute();
    $resultat=$liste->fetchALL(PDO::FETCH_ASSOC);
    return $resultat;
}
