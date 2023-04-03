<?php

require_once "connexionBDD.php";

// SELECT * FROM etudiants
function selectCateg() : array {
    $connexion = createConnection();
    $requeteSQL = "SELECT * FROM categ ";
    $requete = $connexion->prepare($requeteSQL);
    $requete->execute();
    $etudiants = $requete->fetchAll(PDO::FETCH_ASSOC);
    return $etudiants;
}
function selectProduit() : array {
    $connexion = createConnection();
    $requeteSQL = "SELECT * FROM produit ";
    $requete = $connexion->prepare($requeteSQL);
    $requete->execute();
    $etudiants = $requete->fetchAll(PDO::FETCH_ASSOC);
    return $etudiants;
}
