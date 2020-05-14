<!-- Charlie Fuseau 24/04/2020
index modele pour onglet annonce -->

<?php



//$i = 0;
//echo"<a href=\"".WEBROOT."vehicule/createForm\"><img class=\"iconban\" src=\"".IMG."icons8-créer-un-nouveau-64.png\"></a>";

if(isset($modele))
{
	echo "<table class=\"tableannonce\">";
	foreach ($modele as $k => $val)
	{
		extract($val);
		
		echo"<tr class=\"trannonce\">";
			echo '<td class=\"tdannonce\" ><a class="ahrefannonce" href='.WEBROOT."modele/read/$modele_id><img width=\"50%\" src='data:image/png;base64,".base64_encode($photo_image)."'/></a></td>";
			
		echo"</tr>";
		
		echo"<tr class=\"trannonce\">";
			echo "<td class=\"tdannonce\" ><a class='ahrefannonce' href=\"".WEBROOT."modele/read/$modele_id\">".$modele_libelle."</a></td>";
		echo"</tr>";
		
		echo"<tr class=\"trannonce\">";
			echo"<td class=\"tdannonce\" >A partir de ".$description_prix."€</td>";
		echo"</tr>";
		
		echo"<tr class=\"trannonce\">";
			echo"<td class=\"tdannonce\" ><a class='ahrefannonce' href=\"".WEBROOT."modele/read/$modele_id\">".$modele_description."</a></td>";
		echo"</tr>";
		
		
		// echo"<br><br>";
		
		//echo "<td><a href=\"".WEBROOT."vehicule/updateForm/$vehicule_id\"><img alt=\"Modifier\" class=\"icon\" src=\"".IMG."icons8-modifier-64.png\"></a></td>";
		//echo "<td><a href=\"".WEBROOT."vehicule/delete/$vehicule_id\"><img alt=\"Supprimer\" class=\"icon\" src=\"".IMG."icons8-effacer-50.png\"></a></td>";
		
		//$i++;
	}
	echo "</table>";
	//echo $i." Lignes";
}
else
{
	echo"BDD vide";
}
?>