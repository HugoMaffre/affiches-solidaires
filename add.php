<?php 
require 'connexion.php';

$film = $_POST['film'];
$cinema = $_POST['cinema'];
$realisateur = $_POST['realisateur'];
$etat = $_POST['etat'];
$taille = $_POST['taille'];
$prix = $_POST['prix'];

$req = $PDO->prepare("INSERT INTO affiches (film, cinema, realisateur, etat, taille, prix) VALUES (:film, :cinema, :realisateur, :etat, :taille, :prix)");
$req->execute(
    array(
        "film" => $film,
        "cinema" => $cinema,
        "realisateur" => $realisateur,
        "etat" => $etat,
        "taille" => $taille,
        "prix" => $prix,
    )
);

header("Location: index.php");
exit;
