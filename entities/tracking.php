<?php
require_once '../config.php';
class Position
{
	private $id,$lat,$lng;
	public function __construct($id,$lat,$lng)
	{
		$this->id=$id;
		$this->lat=$lat;
		
		$this->lng=$lng;
	}
	public function get_id(){return $this->id;}
	public function get_lat(){return $this->lat;}
	public function get_lng(){return $this->lng;}
}


?>