<?php

require_once "php/loggedonly.php";
loggedonly();

echo"<table>";
echo"<form action=\"".WEBROOT."modele/update\" method=\"post\">";

extract($modele);

echo"<tr>";
echo "<td><input type=\"text\" name=\"modele_libelle\" value=".$modele_libelle.">$modele_libelle</td>";
echo "<td><input type=\"text\" name=\"modele_description\" value=".$modele_description.">$modele_description</td>";




echo"<input type=\"submit\" value=\"Modifier\">";
echo"</form>";
echo"</tr></table>";
?>