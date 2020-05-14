<?php
// Charlie Fuseau 08/04/2020 
//CTRLmain appel de l'index de la page principale
require_once(LIB.'controller.php');

class CTRLmain extends controller 
{
	public function index() //fonctionne
	{
	$this->render('index');
	}
}
	
?>