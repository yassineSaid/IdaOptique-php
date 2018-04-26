<?php
require_once '../entities/tracking.php';
class PositionManage
{
	public function ajouter_Postion($position)
	{
		$db=config::getConnexion();
		$req="INSERT INTO tracking  VALUES (:id, :lat, :lng, now() );";
		$sql=$db->prepare($req);
		$sql->bindvalue(':id',$position->get_id());
		$sql->bindvalue(':lat',$position->get_lat());
		$sql->bindvalue(':lng',$position->get_lng());
		if($sql->execute())
			header('Location: ajouterPosition.php');
		else  {
				echo "echec";
			}	
		}

	public function afficher_Position($id)
	{
		$db=config::getConnexion();
		$req="SELECT * FROM tracking where id=$id";
		$sql=$db->query($req);
		return $sql;
	}
		
	}
	?>