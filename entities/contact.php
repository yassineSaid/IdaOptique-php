<?php

include '../config.php';

class Contact
{
    private $nom,$email,$sujet,$message;

    function __construct($nom,$email,$sujet,$message) {
        $this->nom=$nom;
        $this->email=$email;
        $this->sujet=$sujet;
        $this->message=$message;
    } 
    public function get_nom() 
    {
        return $this->nom;
    }   
    public function get_email() 
    {
        return $this->email;
    }   
    public function get_sujet() 
    {
        return $this->sujet;
    }   
    public function get_message() 
    {
        return $this->message;
    }   
}

?>
