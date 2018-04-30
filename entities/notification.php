<?php
class Notification
{
	private $titre;
	private $contenu;
	private $link;
	private $type;
	function __construct($titre,$contenu,$link,$type)
	{
		$this->titre=$titre;
		$this->contenu=$contenu;
		$this->link=$link;
		$this->type=$type;
	}
	
	function getTitre()
	{
		return $this->titre;
	}
	function getContenu()
	{
		return $this->id_client;
	}
	function getLink()
	{
		return $this->link;
	}
	function getType()
	{
		return $this->type;
	}

	function setTitre($titre)
	{
		$this->titre=$titre;
	}
	function setContenu($contenu)
	{
		$this->contenu=$contenu;
	}
	function setLink($link)
	{
		$this->link=$link;
	}
	function setType($type)
	{
		$this->type=$type;
	}
	
}
?>