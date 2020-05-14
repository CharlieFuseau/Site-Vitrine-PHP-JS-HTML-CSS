<?php
//Charlie FUSEAU   15/04/2020
// class modele 
require (LIB.'model.php');

class modele extends model
{
	protected $modele_libelle;
	protected $photo_image;
	protected $description_prix;
	
	public function __construct()
	{
		$this->modele_libelle='';
		$this->photo_image='';
		$this->description_prix='';
		
		
		parent::__construct("GF_vehicule","vehicule_id");
	}
	
	//GET/SET modele_libelle
	public function getModele_libelle()
	{
		return ($this->modele_libelle);
	}
	public function setModele_libelle($modele_libelle)
	{
		$this->$modele_libelle=modele_libelle;
	}
	//GET/SET photo_image
	public function getPhoto_image()
	{
		return ($this->photo_image);
	}
	
	public function setPhoto_image($photo_image)
	{
		$this->$photo_image=photo_image;
	}
	//GET/SET description_prix
	public function getDescription_prix()
	{
		return ($this->description_prix);
	}
	public function setDescription_prix($description_prix)
	{
		$this->$description_prix=description_prix;
	}
	//TOSTRING
	public function tostring()
	{
		$res = $this->modele_libelle.$this->photo_image.$this->description_prix;
		return($res);
	
	}
}
?>