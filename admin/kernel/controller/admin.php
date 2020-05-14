<?php
// Charlie Fuseau 13/05/2020 
//CTRLcontact appel de l'index de admin
require_once(LIB.'controller.php');

class CTRLadmin extends controller 
{
	public function index() //fonctionne
	{
	$this->render('index');
	}
}
	
?>