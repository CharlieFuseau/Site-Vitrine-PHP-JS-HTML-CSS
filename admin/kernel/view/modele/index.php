<!-- Charlie Fuseau 24/04/2020
index modele pour onglet annonce -->

<?php

require_once "php/loggedonly.php";
loggedonly();





echo"<a href=\"".WEBROOT."modele/createForm\"><img class=\"iconban\" src=\"".IMG."icons8-créer-un-nouveau-64.png\"></a>";

if(isset($modele))
{	
	
	
	foreach ($modele as $k => $val)
	{
		extract($val);
		
		echo "<table class=\"tableannonce\">";
		
		echo"<tr class=\"trannonce\">";
			echo '<td colspan="2" class=\"tdannonce\" ><a class="ahrefannonce" href='.WEBROOT."modele/read/$modele_id><img width=\"50%\" src='data:image/png;base64,".base64_encode($photo_image)."'/></a></td>";
			
		echo"</tr>";
		
		echo"<tr class=\"trannonce\">";
			echo "<td colspan='2' class=\"tdannonce\" ><a class='ahrefannonce' href=\"".WEBROOT."modele/read/$modele_id\">".$modele_libelle."</a></td>";
		echo"</tr>";
		
		echo"<tr class=\"trannonce\">";
			echo"<td colspan='2' class=\"tdannonce\" >A partir de ".$description_prix."€</td>";
		echo"</tr>";
		
		echo"<tr class=\"trannonce\">";
			echo"<td colspan='2' class=\"tdannonce\" ><a class='ahrefannonce' href=\"".WEBROOT."modele/read/$modele_id\">".$modele_description."</a></td>";
		echo"</tr>";
		
		
		echo"<tr class=\"trannonce\">";
		echo "<td><a href=\"".WEBROOT."modele/updateForm/$modele_id\"><img alt=\"Modifier\" class=\"icon\" src=\"".IMG."icons8-modifier-64.png\"></a></td>";
		echo "<td><a href=\"".WEBROOT."modele/delete/$modele_id\"><img alt=\"Supprimer\" class=\"icon\" src=\"".IMG."icons8-effacer-50.png\"></a></td>";
		echo"</tr>";
		
		echo "</table>";
		echo"<br><br>";
	}
	
	
	
	
}
else
{
	echo"BDD vide";
}
?>