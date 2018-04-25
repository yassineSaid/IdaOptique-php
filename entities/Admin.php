<?php
include "../light/connect.php";
class Admin
{
   private $nom,$prenom,$pseudo,$email,$motDePasse,$verifPass;

function __construct($nom,$prenom,$pseudo,$email,$motDePasse,$verifPass)
 {
		//$this->id=$id;
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->pseudo=$pseudo;
        $this->email=$email;
        $this->motDePasse=$motDePasse;
        $this->verifPass=$verifPass;
        
    }
 public function get_id() 
    {
        return $this->id;
    }   
    public function get_nom() 
    {
        return $this->nom;
    }   
    public function get_prenom() 
    {
        return $this->prenom;
    }   
    public function get_pseudo()
    {
        return $this->pseudo;
    }
    public function get_email() 
    {
        return $this->email;
    }   
     public function get_motDePasse() 
    {
        return $this->motDePasse;
    }   
     public function get_verifPass() 
    {
        return $this->verifPass;
    }   
     /*
    public function set_id($id) 
    {
         $this->id=$id;
    }   */
    public function set_nom($nom) 
    {
         $this->nom=$nom;
    }   
    public function set_prenom($prenom) 
    {
         $this->prenom=$prenom;
    }  
     public function set_pseudo($pseudo) 
    {
         $this->pseudo=$pseudo;
    }  
    public function set_email($email)  
    {
    	$this->email=$email;
    }
    public function set_motDePasse($motDePasse) 
    {
    	$this->motDePasse=$motDePasse;
    }
    public function set_verifPass($verifPass) 
    {
    	$this->verifPass=$verifPass;
    }
    
}










?>