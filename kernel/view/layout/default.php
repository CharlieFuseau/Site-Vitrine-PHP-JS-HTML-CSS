<html lang="fr"> 
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500&display=swap" rel="stylesheet">
<title>Garage Fortin</title>

<link rel="icon" href="<?php echo IMG.'auto-primofavicon.png';?>" />
<link rel="stylesheet"  href="<?php echo CSS.'style.css';?>"/>
</head>
<body>
	<div class="topnav">
		<?php /* echo"<a href=\"".WEBROOT."\"><img class=\"imgtopnav\"src=\"".IMG."\auto-primo.png\"></a>"; */?>
		<?php echo"<a class=\"aban none black bold\" href=\"".WEBROOT."\">Accueil</a>";?>
		<?php echo"<a class=\"aban none black bold\" href=\"".WEBROOT."modele\">Nos Véhicules Neufs</a>";?>
		<?php echo"<a class=\"aban none black bold\" href=\"https://www.leboncoin.fr/boutique/11802/sarl_garage_fortin.htm/\">Nos Véhicules D'occasion</a>";?>
		<?php echo"<a class=\"aban none black bold\" href=\"".WEBROOT."location\">Location</a>";?>
		<?php echo"<a class=\"aban none black bold\" href=\"".WEBROOT."recherche\">Recherche</a>";?>
		<?php echo"<a class=\"aban none black bold\" href=\"".WEBROOT."contact\">Nous Contacter</a>";?>
		<?php echo"<a class=\"aban none black bold\" href=\"".WEBROOT."localisation\">Localisation</a>";?>
		<a href="javascript:void(0);" class="icon" onclick="myFunction()">Menu</a>
	</div>
	
	<div class="content">
		<?php echo $content;?>
	</div>
	
	<div class="footer">
	<h5 class="white center " >Z.I. La Blauderie – La Flocellière - 85700 SEVREMONT - Tél. 02 51 91 85 58 - Mail : contact@garagefortin.fr <button class="none white" onclick="scrollToTop(600)">Haut de la page</button></h5>
	</div>
</body>
</html>
	<?php	
	echo"<script src=\"".JS."scrolltopnav.js\"></script>";	
	?>


