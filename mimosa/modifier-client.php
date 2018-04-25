<?php
	include '../Core/ClientC.php';
	$ClientManage= new ClientManage();
	$Client=new Client($_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['MotDePasse'],$_POST['pays'],$_POST['cite'],$_POST['telephone'],$_POST['fax'],$_POST['adresse'],$_POST['adresse2']);

	$ClientManage->modifierClient($Client,$_POST['id']);
	
	//header('Location: afficher.php);
    													
?>