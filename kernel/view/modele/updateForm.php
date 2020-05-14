<?php

echo "<table>
<tr>
<th>id</th>
<th>Immatriculation</th>
<th>Date d'Achat</th>
<th>Couleur</th>
<th>Kilométrage</th>
<th>Etat</th>
<th>idmodele</th>
</tr>";
echo"<form action=\"".WEBROOT."vehicule/update\" method=\"post\">";

extract($vehicule);

echo"<tr>";
echo "<td class=\"tdform\"><input type=\"hidden\" name=\"vehicule_id\" value=".$vehicule_id.">".$vehicule_id."</td>";
echo "<td class=\"tdform\"><input type=\"text\" name=\"vehicule_immatriculation\" value=".$vehicule_immatriculation."></td>";
echo "<td class=\"tdform\"><input type=\"text\" name=\"vehicule_dateachat\" value=".$vehicule_dateachat."></td>";
echo "<td class=\"tdform\"><input type=\"text\" name=\"vehicule_couleur\" value=".$vehicule_couleur."></td>";

echo "<td class=\"tdform\"><input type=\"text\" name=\"vehicule_kilometrage\" value=".$vehicule_kilometrage."></td>";
echo "<td class=\"tdform\"><input type=\"text\" name=\"vehicule_etat\" value=".$vehicule_etat."></td>";
echo "<td class=\"tdform\"><input type=\"text\" name=\"vehicule_idmodele\" value=".$vehicule_idmodele."></td>";

echo"</tr></table>";

echo"<input type=\"submit\" value=\"Modifier\">";
echo"</form>";
?>