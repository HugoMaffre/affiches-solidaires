<?php 
require 'connexion.php';

$id = $_POST[id];
$PDO->query("SET NAMES 'utf8'");

// récupération des données de l'affiche sélectionnée
$results = $PDO->prepare("SELECT * FROM affiches WHERE id =  :id");
$results->execute(
    array(
        "id" => $id
    )
);
$affiche = $results->fetch();

$film = $affiche->film;
$cinema = $affiche->cinema;
$realisateur = $affiche->realisateur;
$etat = $affiche->etat;
$taille = $affiche->taille;
$prix = $affiche->prix;
$id = $affiche->id;
$today = date("Y-m-d H:i:s");

// ajout dans la table affiches vendues
$req = $PDO->prepare("INSERT INTO affiches_vendues (film, cinema, realisateur, etat, taille, prix, datedevente) VALUES (:film, :cinema, :realisateur, :etat, :taille, :prix, :today)");
$req->execute(
    array(
        "film" => $film,
        "cinema" => $cinema,
        "realisateur" => $realisateur,
        "etat" => $etat,
        "taille" => $taille,
        "prix" => $prix,
        "today" => $today
    )
);

// suppression de la table affiches
$req2 = $PDO->prepare("DELETE FROM affiches WHERE id =  :id");
$req2->execute(
    array(
        "id" => $id
    )
);

