<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../CSS/template.css">
	<title>TDO 2018</title>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="footer, links, icons" />
	<title> TDO Accueil</title>
	<link rel="stylesheet" href="../CSS/style.css" >
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
	</head>
</head>

 				<header id="Menu">
         			<?php include("Header.php"); ?>
			 	</header>
		 	
			 	<nav >

  					<?php include("nav.php"); ?>

 			   	</nav>

<body>
	<div onclick="clickOutside(event)" id="dark-bg">
		<div class="photo-container">
			<img class="arrow" src="../images/GalleryPhotos/images/left-arrow.svg" onclick="changeToNextPhoto(false)">
			<img id="photo-zoom" src="#">
			<img class="arrow" src="../images/GalleryPhotos/images/right-arrow.svg" onclick="changeToNextPhoto(true)">
		</div>
	</div>
	<h1> TDO BAR TDO ATV 2017 </h1>
	<div id="gallery-container">
		<div class="first column"></div>
		<div class="second column"></div>
		<div class="third column"></div>
	</div>
</body>



       <footer class="footer-distributed">
			<?php include("footer.php"); ?>
	   </footer>

</html>
<script src="../JS/template3.js"></script>
</html>