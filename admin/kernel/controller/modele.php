<?php
// Charlie Fuseau 08/04/2020 
//CTRLmodele
require_once(LIB.'controller.php');

class CTRLmodele extends controller 
{
	public function index() //fonctionne
	{
	$this->loadModel('modele');
	$this->modele->Find();
	$a = array('modele'=>$this->modele->Find("SELECT modele_libelle,modele_description,photo_image,modele_id, MIN(description_prix) AS description_prix 
											FROM GF_modele 
											JOIN GF_photo ON GF_photo.photo_modeleid = GF_modele.modele_id 
											JOIN GF_vehicule ON GF_vehicule.vehicule_idmodele = GF_modele.modele_id
											JOIN GF_description ON GF_vehicule.vehicule_id = GF_description.description_idvehicule
											GROUP BY GF_modele.modele_libelle ORDER BY GF_modele.modele_libelle")); 
	$this->set($a);
	$this->render('index');
	}
	
	
	
	public function read($id) //fonctionne
	{
	$this->loadModel('modele');
	$this->modele->Find();
	$a = array('description'=>$this->modele->Find("SELECT DISTINCT description_boite,modele_libelle, modele_description,description_prix,description_carrosserie,description_energie,
											description_finition,description_motorisation,description_portes, 
											description_puissance
											FROM GF_modele 
											JOIN GF_photo ON GF_photo.photo_modeleid = GF_modele.modele_id 
											JOIN GF_vehicule ON GF_vehicule.vehicule_idmodele = GF_modele.modele_id
											JOIN GF_description ON GF_vehicule.vehicule_id = GF_description.description_idvehicule
											WHERE modele_id = $id"));
											
	$b = array('photo'=>$this->modele->Find("SELECT GF_photo.photo_image 
											FROM GF_photo
											JOIN GF_modele
											ON GF_photo.photo_modeleid = GF_modele.modele_id
											WHERE GF_modele.modele_id = $id")); 									
	
	$this->set($a);
	$this->set($b);
	$this->render('read');
	}
	
	public function updateForm($id) //fonctionne
	{
	$this->loadModel('modele');
	$this->modele->Read($id);
	$a = array('modele' => $this->modele->Find("SELECT modele_libelle,modele_description
											FROM GF_modele 
											GROUP BY GF_modele.modele_libelle ORDER BY GF_modele.modele_libelle"));
	$this->set($a);
	$this->render('updateForm');
	}

	public function update() //fonctionne
	{
	$this->loadModel('modele');
	$this->modele->postToModel();
	$this->modele->Update();
	$a =array('modele'=>$this->modele->Find());
	$this->set($a);
	$this->render('index');
	}

	public function delete($id) //fonctionne
	{
	$this->loadModel('modele');
	$this->modele->del($id);
	$a = array('modele' => $this->modele->Find());
	$this->set($a);
	$this->render('index');
	}
	
	public function create() // fonctionne
	{
	$this->loadModel('modele');
	$this->modele->postToModel();
	$this->modele->Create();
	$a = array('modele' => $this->modele->Find());
	$this->set($a);
	$this->render('index');
	}
	
	public function createForm() //fonctionne
	{
	$this->loadModel('modele');
	$this->render('createForm');
	}
}
	
?>