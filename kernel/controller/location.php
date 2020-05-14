<?php
// Charlie Fuseau 09/04/2020 
//CTRLlocation appel de l'index de location
require_once(LIB.'controller.php');

class CTRLlocation extends controller 
{
	public function index() //fonctionne
	{
	$this->render('index');
	}
}
	
?>