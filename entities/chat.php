<?php
include '../config.php'
class chat
{
    private $sender_id,$receiver_id,$message,$pseudo;

    function __construct($sender_id,$receiver_id,$message,$pseudo) {
         $this->message=$message;
        $this->sender_id=$sender_id;
        $this->receiver_id=$receiver_id;
        
       
        $this->pseudo=$pseudo;
    } 
    public function get_sender_id() 
    {
        return $this->sender_id;
    }   
    public function get_receiver_id() 
    {
        return $this->receiver_id;
    }   
    public function get_message() 
    {
        return $this->message;
    }  
    public function get_pseudo() 
    {
        return $this->pseudo;
    }   
}
?>