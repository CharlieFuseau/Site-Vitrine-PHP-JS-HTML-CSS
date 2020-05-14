<!-- Charlie Fuseau 13/04/2020 
index localisation -->
<?php
require_once "php/loggedonly.php";
loggedonly();
?>

<html>
	<head>
		<meta charset="utf-8">
		<script src="https://maps.google.com/maps/api/js?key=AIzaSyDv_DeKLQjrLUcTBzo3qpDN02rNg_Gi-s0" type="text/javascript"></script>
		<?php
		echo"<script src=\"".JS."maps.js\"></script>";
		?>
	</head>
	<body>
		<div id="map">
			<!-- Ici s'affichera la carte -->
		</div>
		
	</body>
</html>
