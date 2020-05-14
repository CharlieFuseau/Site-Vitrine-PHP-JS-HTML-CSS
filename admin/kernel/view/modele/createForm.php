<?php

require_once "php/loggedonly.php";
loggedonly();

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

echo"<form action=\"".WEBROOT."vehicule/create\" method=\"post\">";

echo"<tr>";
echo "<td class=\"tdform\"><input type=\"hidden\" name=\"vehicule_id\"></td>";
echo "<td class=\"tdform\"><input type=\"text\" name=\"vehicule_immatriculation\"></td>";
echo "<td class=\"tdform\"><input type=\"text\" name=\"vehicule_dateachat\"></td>";
echo "<td class=\"tdform\"><input type=\"text\" name=\"vehicule_couleur\"></td>";
echo "<td class=\"tdform\"><input type=\"text\" name=\"vehicule_kilometrage\"></td>";
echo "<td class=\"tdform\"><input type=\"text\" name=\"vehicule_etat\"></td>";
echo "<td class=\"tdform\"><input type=\"text\" name=\"vehicule_idmodele\"></td>";
echo"</tr></table>";

echo"<input type=\"submit\" value=\"Ajouter\">";
echo"</form>";
?>