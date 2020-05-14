<?php
//Charlie FUSEAU 15/01/2020 11:11
//class connexion
//permet de fournir la fonction connex a toute les fonctions read, delete,... 
//afin de centraliser les informations de connexion dans ce fichier 

class connexion
{
	public function connex()
	{
		$dbh = new PDO("mysql:dbname=GARAGEFORTIN;host=localhost","phpmyadmin","toor"); 
		return($dbh);
	}
}


?>