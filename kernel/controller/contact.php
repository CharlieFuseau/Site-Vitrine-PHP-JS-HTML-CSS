<?php
// Charlie Fuseau 09/04/2020 
//CTRLcontact appel de l'index de contact
require_once(LIB.'controller.php');

class CTRLcontact extends controller 
{
	public function index() //fonctionne
	{
	$this->render('index');
	}
}
	
?>