<?php
	try{
		// $dsn = 'mysql:host=hugomaffljmain.mysql.db;dbname=hugomaffljmain;charset=utf8';
		// $user = 'hugomaffljmain';
		// $password = 'zZ021071996';
		$dsn = 'mysql:host=localhost;dbname=affiches-solidaires;charset=utf8';
		$user = 'root';
		$password = 'root';
		$PDO = new PDO($dsn, $user, $password);

	    $PDO->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
	    $PDO->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
	}catch(PDOException $e){
	    echo 'Connexion impossible';
	}
