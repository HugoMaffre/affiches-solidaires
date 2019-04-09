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
	<h1>Les affiches solidaires</h1>
	<div id="menu">
		<div class="main-btn" id="connexionform">
			Se connecter
		</div>
		<div class="main-btn" id="addnew">
			Ajouter une affiche
		</div>
		<a class="main-btn" id="sells-link" href="/affiches-solidaires/affiches_vendues.php">Affiches vendues</a>
	</div>
</header>

<div id="addnew-form">
	<div class="closeform" id="close-addform"><i class="fas fa-chevron-up"></i></div>
	<form action="./queries/add.php" method="post">
		<p>Film :</p>
		<input type="text" name="film">
		<p>Cinéma :</p>
		<input type="text" name="cinema">
		<p>Réalisateur, date :</p>
		<input type="text" name="realisateur">
		<p>État</p>
		<input type="text" name="etat">
		<p>Taille</p>
		<input type="text" name="taille">
		<p>Prix</p>
		<input type="text" name="prix">
		<input type="submit" value="Enregistrer">
	</form>
</div>
<div id="update-form">
	<div class="closeform" id="close-updateform"><i class="fas fa-chevron-up"></i></div>
	<p class="title">Modifier l'affiche n°<span id="update-id"></span></p>
	<form action="./queries/update.php" method="post">
		<p>Film :</p>
		<input type="text" name="film" id="update-film-field">
		<p>Cinéma :</p>
		<input type="text" name="cinema" id="update-cinema-field">
		<p>Réalisateur, date :</p>
		<input type="text" name="realisateur" id="update-real-field">
		<p>État</p>
		<input type="text" name="etat" id="update-etat-field">
		<p>Taille</p>
		<input type="text" name="taille" id="update-taille-field">
		<p>Prix</p>
		<input type="text" name="prix" id="update-prix-field">
		<input type="hidden" name="id" id="update-id-field">
		<input id="edit-submit" type="submit" value="Enregistrer">
	</form>
</div>



<section id="affiches">

	<?php 
		$PDO->query("SET NAMES 'utf8'");
		$results = $PDO->query("SELECT * FROM affiches");
		$results -> setFetchMode(PDO::FETCH_OBJ);
	 ?>

	 
	<table id="datatable-affiches" class="display">
		<thead>
			<tr>
				<th>ID</th>
				<th>Film</th>
				<!-- <th>Cinéma</th> -->
				<th>Réalisateur, date</th>
				<th>État</th>
				<th>Taille</th>
				<th>Prix</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
			<?php while( $result = $results->fetch() ){ ?>
				<tr>
					<td><?php echo $result->id; ?></td>
					<td><?php echo $result->film; ?></td>
					<!-- <td><?php //echo $result->cinema; ?></td> -->
					<td><?php echo $result->realisateur; ?></td>
					<td><?php echo $result->etat; ?></td>
					<td><?php echo $result->taille; ?></td>
					<td><?php echo $result->prix; ?></td>
					<td class="actions-td">
						<div data-affid="<?php echo $result->id; ?>" class="edit"><i class="far fa-edit"></i></div>
						<div data-affid="<?php echo $result->id; ?>" class="sell"><i class="fas fa-hand-holding-usd"></i></div>
						<div data-affid="<?php echo $result->id; ?>" class="suppr"><i class="far fa-times-circle"></i></div>
					</td>
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
