<?php session_start(); ?>
<!DOCTYPE html> 
<html>
<head>
	<meta name="robots" content="noindex">
	<meta charset="UTF-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Affiches solidaires</title>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
</head>
	<?php require 'connexion.php'; ?>
<body>

<div id="openform-background"></div>

<header>
	<h1>Les affiches solidaires - connexion</h1>
	<div id="menu">
		<a class="main-btn" href="/affiches-solidaires/">Retour aux affiches</a>
	</div>
</header>

<div id="connexion-form">
	<div class="closeform" id="close-addform"><i class="fas fa-chevron-up"></i></div>
	<form action="./queries/user-connect.php" method="post">
		<p>Nom d'utilisateur :</p>
		<input type="text" name="username">
		<p>Mot de passe :</p>
		<input type="password" name="password">
		<input type="submit" value="Enregistrer">
	</form>
</div>


<footer>
</footer>


<script type='text/javascript' src='js/jquery.js'></script>
<script type='text/javascript' src='js/jquery-ui.js'></script>
<script type='text/javascript' src='js/main.js'></script>
</body>
</html>
