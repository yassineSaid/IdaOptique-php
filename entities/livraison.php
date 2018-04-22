<?php
require_once '../config.php';
class Livraison
{
	private $id_client,$id_commande,$nom,$prenom,$sosciete,$adresse1,$adresse2,$ville,$code_postal,$pays,$region,$email,$telephone,$note;
	public function __construct($id_client,$id_commande,$nom,$prenom,$sosciete,$adresse1,$adresse2,$ville,$code_postal,$pays,$region,$email,$telephone,$note)
	{
		$this->id_client=$id_client;
		$this->id_commande=$id_commande;
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->sosciete=$sosciete;
		$this->adresse1=$adresse1;
		$this->adresse2=$adresse2;
		$this->ville=$ville;
		$this->code_postal=$code_postal;
		$this->pays=$pays;
		$this->region=$region;
		$this->email=$email;
		$this->telephone=$telephone;
		$this->note=$note;
		//$this->statut=$statut;
		//$this->date_livraison=$date_livraison;
		//$this->heure_livraison=$heure_livraison;
	}
	public function get_id_client(){return $this->id_client;}
	public function get_id_commande(){return $this->id_commande;}
	public function get_nom(){return $this->nom;}
	public function get_prenom(){return $this->prenom;}
	public function get_sosciete(){return $this->sosciete;}
	public function get_adresse1(){return $this->adresse1;}
	public function get_adresse2(){return $this->adresse2;}
	public function get_ville(){return $this->ville;}
	public function get_code_postal(){return $this->code_postal;}
	public function get_pays(){return $this->pays;}
	public function get_region(){return $this->region;}
	public function get_email(){return $this->email;}
	public function get_telephone(){return $this->telephone;}
	public function get_note(){return $this->note;}
	//public function get_date_livraison(){return $this->date_livraison;}
	//public function get_statut(){return $this->statut;}
	
	public function set_id_client($val){$this->id_client=$val;}
	public function set_id_commande($val){$this->id_commande=$val;}
	public function set_adresse1($val){$this->adresse1=$val;}
	public function set_adresse2($val){$this->adresse2=$val;}
	public function set_code_postal($val){$this->code_postal=$val;}
	public function set_ville($val){$this->ville=$val;}
	public function set_pays($val){$this->pays=$val;}
	public function set_date_livraison($val){$this->date_livraison=$val;}
	public function set_heure_livraison($val){$this->heure_livraison=$val;}
}
class Livraison2
{
	private $id_client,$id_commande,$date_livraison,$statut;
	public function __construct($id_client,$id_commande,$date_livraison,$statut)
	{
		$this->id_client=$id_client;
		$this->id_commande=$id_commande;
		
		$this->statut=$statut;
		$this->date_livraison=$date_livraison;
		//$this->heure_livraison=$heure_livraison;
	}
	public function get_id_client(){return $this->id_client;}
	public function get_id_commande(){return $this->id_commande;}
	public function get_date_livraison(){return $this->date_livraison;}
	public function get_statut(){return $this->statut;}
}
?>