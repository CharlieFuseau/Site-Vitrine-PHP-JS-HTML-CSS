<?php
// Charlie Fuseau 08/04/2020 
//CTRLlocalisation appel de l'index de localisation
require_once(LIB.'controller.php');

class CTRLlocalisation extends controller 
{
	public function index() //fonctionne
	{
	$this->render('index');
	}
}
	
?>