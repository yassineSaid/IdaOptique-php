<?php
include_once "../config.php";
class Client
{
private $nom,$prenom,$email,$motDePasse,$pays,$cite,$zip,$telephone,$fax,$adresse,$adresse2;

function __construct($nom,$prenom,$email,$motDePasse,$pays,$cite,$zip,$telephone,$fax,$adresse,$adresse2)
    {
		
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->email=$email;
        $this->motDePasse=$motDePasse;
        $this->pays=$pays;
        $this->cite=$cite;
        $this->telephone=$telephone;
        $this->fax=$fax;
        $this->adresse=$adresse;
        $this->adresse2=$adresse2;
         $this->zip=$zip;
    }
 
    public function get_nom() 
    {
        return $this->nom;
    }   
    public function get_prenom() 
    {
        return $this->prenom;
    }   
     public function get_email() 
    {
        return $this->email;
    }   
     public function get_motDePasse() 
    {
        return $this->motDePasse;
    } 
       public function get_zip() 
    {
        return $this->zip;
    } 
    public function get_pays() 
    {
        return $this->pays;
    }   
     public function get_cite() 
    {
        return $this->cite;
    }   
     public function get_telephone() 
    {
        return $this->telephone;
    }   
     public function get_fax() 
    {
        return $this->fax;
    }   
     public function get_adresse() 
    {
        return $this->adresse;
    }  
     public function get_adresse2() 
    {
        return $this->adresse2;
    }    
    public function set_nom($nom) 
    {
         $this->nom=$nom;
    }   
    public function set_prenom($prenom) 
    {
         $this->prenom=$prenom;
    }  
    public function set_email($email)  
    {
    	$this->email=$email;
    }
    public function set_motDePasse($motDePasse) 
    {
    	$this->motDePasse=$motDePasse;
    }
   
    public function set_pays($pays) 
    {
    	$this->pays=$pays;
    }
    public function set_cite($cite) 
    {
    	$this->cite=$cite;
    }
    public function set_telephone($telephone) 
    {
    	$this->telephone=$telephone;
    }
     public function set_fax($fax) 
     {
     $this->fax=$fax;
     }
     public function set_adresse($adresse) 
     {
     $this->adresse=$adresse;
     }
     public function set_adresse2($adresse2) 
     {
     $this->adresse2=$adresse2;
     }
}








?>