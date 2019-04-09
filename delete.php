<?php 
require 'connexion.php';

$id = $_POST[id];

$req = $PDO->prepare("DELETE FROM affiches WHERE id =  :id");
$req->execute(
    array(
        "id" => $id
    )
);