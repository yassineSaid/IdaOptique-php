<?php
	include '../Core/AdminM.php';
	$AdminManage= new AdminManage();
	$Admin=new Admin($_POST['nom'],$_POST['prenom'],$_POST['pseudo'],$_POST['email'],$_POST['MotDePasse']);

	$AdminManage->modifierAdmin($Admin,$_POST['id']);
	
	//header('Location: afficher.php);
    													
?>