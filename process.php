<?php
	require 'connexion.php';




	// Création d'un flux
	$opts = array(
	  'http'=>array(
	    'method'=>"GET",
	    'header'=>"Accept: application/json"
	  )
	);

	$context = stream_context_create($opts);
	$username = $_POST['username'];

	// Accès à un fichier HTTP avec les entêtes HTTP indiqués ci-dessus
	$data = file_get_contents('https://www.foaas.com/bucket/'.$username, false, $context);
	$data = json_decode($data);
	var_dump($data->message);

	$quotation = $data->message;

	$query = $PDO->prepare("INSERT INTO users (username, quotation) VALUES (:username, :quotation)");
	$params = array(
		':username'=>$username,
		':quotation'=>$quotation
	);
	$query->execute($params);







