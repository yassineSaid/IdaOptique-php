<?php
include_once "../config.php";
class Visiteur
{
   private $ip,$country;

function __construct($ip,$country)
 {
		
        $this->ip=$ip;
        $this->country=$country;
      
        
    }
 public function get_ip_visit() 
    {
        return $this->ip;
    }   
    public function get_country_visit() 
    {
        return $this->country;
    }   
   
    
}










?>