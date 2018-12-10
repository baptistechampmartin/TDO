<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="footer, links, icons" />
	<title> Inscrits Toi</title>
	<link rel="stylesheet" href="../CSS/style.css" >
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
	</head>

	



		 <header id="Menu">
         		<?php include("Header.php"); ?>
			 	</header>
		 	
			 	<nav>
  					<?php include("nav.php"); ?>

 			   	</nav>

	

	<body>
		
		<fieldset>
			<legend>Informations générales</legend>
			<p id="Form1">
				<label for="nom">Nom de famille</label><br/>
				<input type="text" name="nom" id="nom"><br/>

				<label for="prenom">Prénom</label><br/>
				<input type="text" name="prenom" id="prenom"><br/>

				<label>Date de naissance</label><br/>
				<input type="date"><br/>

				<label for="type">Homme / Femme</label><br/>
				<select>
					<option value="homme">Homme</option>
					<option option="femme">Femme</option>
				</select>
			</p>
		</fieldset>
    	</div>
		<fieldset>
			<legend>Informations matériel</legend>
			<p class="form2">
				<label for="ski/snow">-Ski / Snow :</label><br/>
				<input type="radio" name="ski/snow" id="ski"> <label for="ski">Ski</label><br/>
				<input type="radio" name="ski/snow" id="snow"> <label for="snow">Snow</label><br/>

				<label for="eco/sensa">-Eco = matériel normal, sensation = matériel haut de game :</label><br/>
				<input type="radio" name="eco/sensa" id="eco"> <label for="eco">Eco</label><br/>
				<input type="radio" name="eco/sensa" id="sensa"> <label for="sensa">Sensation</label><br/>

				<label for="option">Casque :</label>
				<select name="option" id="option">
					<option value=" "> </option>
					<option value="casque">Casque</option>
				</select>
				<br/>
			</p>
		</fieldset>

		<fieldset>
			<legend>Informations sanitaires</legend>
			<p class="form3">
				<label for="food">Regime alimentaire :</label>
				<select name="food" id="food">
					<option value="Sans proc">Sans porc</option>
					<option value="Sans gluten">Sans gluten</option>
					<option value="RAS">Rien de spécial</option>
				</select>
				<br/>

				<label for="commentaire">Commentaire particulier ?</label><br/>
				<textarea name="commentaire" id="commentaire" rows="10" cols="70">Alergie(s), indigestion, écris tout ce que tu penses être util pour nous ou pour toi</textarea>

				<br/>
				<input type="submit" value="Envoyer" />
				

			</p>
		</fieldset>



	</body>
  <footer class="footer-distributed">

		<?php include("footer.php"); ?>

		</footer>


</html>
</html>