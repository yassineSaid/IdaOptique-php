<?php
include_once "../config.php";
class Favoris
{
private $id_client,$id_produit;

function __construct($id_client,$id_produit)
    {
		$this->id_client=$id_client;
        $this->id_produit=$id_produit;

    }

   public function get_id_client() 
    {
        return $this->id_client;
    }   
    public function get_id_produit() 
    {
        return $this->id_produit;
    }   
     public function set_id_client($id_client) 
    {
         $this->id_client=$id_client;
    }   
    public function set_id_produit($id_produit) 
    {
         $this->id_produit=$id_produit;
    }   

}
?>