<?php session_start(); ?>
<!DOCTYPE html> 
<html>
<head>
<meta name="robots" content="noindex">
<meta charset="UTF-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Affiches solidaires</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">


</head>
	<?php require 'connexion.php'; ?>
<body>

<div id="openform-background"></div>

<header>
	<h1>Affiches vendues</h1>
	<div id="menu">
		<a class="main-btn" href="/affiches-solidaires/">Retour au stock</a>
	</div>
</header>


<section id="affiches">

	<?php 
		$PDO->query("SET NAMES 'utf8'");
		$results = $PDO->query("SELECT * FROM affiches_vendues");
		$results -> setFetchMode(PDO::FETCH_OBJ);
	 ?>

	 
	<table id="datatable-affiches" class="display">
		<thead>
			<tr>
				<th>ID</th>
				<th>Film</th>
				<th>Cinéma</th>
				<th>Réalisateur, date</th>
				<th>État</th>
				<th>Taille</th>
				<th>Prix</th>
                <th>Date de vente</th>
			</tr>
		</thead>
		<tbody>
			<?php while( $result = $results->fetch() ){ ?>
				<tr>
					<td><?php echo $result->id; ?></td>
					<td><?php echo $result->film; ?></td>
					<td><?php echo $result->cinema; ?></td>
					<td><?php echo $result->realisateur; ?></td>
					<td><?php echo $result->etat; ?></td>
					<td><?php echo $result->taille; ?></td>
					<td><?php echo $result->prix; ?></td>
					<td><?php echo $result->datedevente; ?></td>
				</tr>
			<?php } ?>

		</tbody>
	</table>
</section>

<footer>
</footer>


<script type='text/javascript' src='js/jquery.js'></script>
<script type='text/javascript' src='js/jquery-ui.js'></script>
<script type='text/javascript' src='js/main.js'></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
</body>
</html>
