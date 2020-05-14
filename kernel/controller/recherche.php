<?php
// Charlie Fuseau 09/04/2020 
//CTRLrecherche appel de l'index de recherche
require_once(LIB.'controller.php');

class CTRLrecherche extends controller 
{
	public function index() //fonctionne
	{
	$this->render('index');
	}
}
	
?>