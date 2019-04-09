<?php 
require 'connexion.php';

$film = $_POST['film'];
$cinema = $_POST['cinema'];
$realisateur = $_POST['realisateur'];
$etat = $_POST['etat'];
$taille = $_POST['taille'];
$prix = $_POST['prix'];
$id = $_POST['id'];

var_dump($id);
var_dump($film);

if( isset($film) ){
    $req = $PDO->prepare("UPDATE affiches SET film = :film WHERE id = :id ;");
    $req->execute(
        array(
            "id" => $id,
            "film" => $film
        )
    );
}
if( isset($cinema) ){
    $req = $PDO->prepare("UPDATE affiches SET cinema = :cinema WHERE id = :id ;");
    $req->execute(
        array(
            "id" => $id,
            "cinema" => $cinema
        )
    );
}
if( isset($realisateur) ){
    $req = $PDO->prepare("UPDATE affiches SET realisateur = :realisateur WHERE id = :id ;");
    $req->execute(
        array(
            "id" => $id,
            "realisateur" => $realisateur
        )
    );
}
if( isset($etat) ){
    $req = $PDO->prepare("UPDATE affiches SET etat = :etat WHERE id = :id ;");
    $req->execute(
        array(
            "id" => $id,
            "etat" => $etat
        )
    );
}
if( isset($taille) ){
    $req = $PDO->prepare("UPDATE affiches SET taille = :taille WHERE id = :id ;");
    $req->execute(
        array(
            "id" => $id,
            "taille" => $taille
        )
    );
}
if( isset($prix) ){
    $req = $PDO->prepare("UPDATE affiches SET prix = :prix WHERE id = :id ;");
    $req->execute(
        array(
            "id" => $id,
            "prix" => $prix
        )
    );
}



header("Location: index.php");
exit;
