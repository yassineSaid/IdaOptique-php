<?php
include_once "../config.php";
class Visiteur
{
   private $ip,$country,$date;

function __construct($ip,$country,$date)
 {
		//$this->id=$id;
        $this->ip=$ip;
        $this->country=$country;
        $this->date=$date;
      
        
    }
 public function get_ip_visit() 
    {
        return $this->ip;
    }   
    public function get_country_visit() 
    {
        return $this->country;
    }   
    public function get_date_visit() 
    {
        return $this->date;
    }   
    
    
}










?>