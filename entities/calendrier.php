<?php
include '../config.php';
class calendrier
{
    private $id,$start_event,$end_event,$color;

    function __construct($id,$start_event,$end_event,$color) {
         $this->id=$id;
        $this->start_event=$start_event;
        $this->end_event=$end_event;
        $this->color=$color;
    } 
    public function get_id() 
    {
        return $this->id;
    }   
    public function get_start_event() 
    {
        return $this->start_event;
    }   
    public function get_end_event() 
    {
        return $this->end_event;
    }  
    public function get_color() 
    {
        return $this->color;
    }   
}
?>