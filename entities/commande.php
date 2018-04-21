<?php
class Commande
{
	private $id_client;
	private $id_commande;
	private $total;
	private $nom;
	private $prenom;
	private $adresse;
	private $adresse2;
	private $ville;
	private $zip;
	function __construct($id_client,$total,$nom,$prenom,$adresse,$adresse2,$ville,$zip)
	{
		$this->id_client=$id_client;
		$this->total=$total;
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->adresse=$adresse;
		$this->adresse2=$adresse2;
		$this->ville=$ville;
		$this->zip=$zip;
	}
	
	function getId_commande()
	{
		return $this->id_commande;
	}
	function getId_client()
	{
		return $this->id_client;
	}
	function getTotal()
	{
		return $this->total;
	}
	function getNom()
	{
		return $this->nom;
	}
	function getPrenom()
	{
		return $this->prenom;
	}
	function getAdresse()
	{
		return $this->adresse;
	}
	function getAdresse2()
	{
		return $this->adresse2;
	}
	function getVille()
	{
		return $this->ville;
	}
	function getZip()
	{
		return $this->zip;
	}

	function setId_commande($id_commande)
	{
		$this->id_commande=$id_commande;
	}
	function setId_client($id_client)
	{
		$this->id_client;
	}
	function setTotal($total)
	{
		$this->total=$total;
	}
	
}
?>