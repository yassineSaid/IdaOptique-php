<?php
	include '../Core/ClientC.php';
	$ClientManage= new ClientManage();
	if ($_POST['telephone']=="")
	{
		$telephone=NULL;
	}
	else
	{
		$telephone=$_POST['telephone'];
	}
	if ($_POST['zip']=="")
	{
		$zip=NULL;
	}
	else
	{
		$zip=$_POST['zip'];
	}
	if ($_POST['fax']=="")
	{
		$fax=NULL;
	}
	else
	{
		$fax=$_POST['fax'];
	}
	$Client=new Client($_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['MotDePasse'],$_POST['pays'],$_POST['cite'],$zip,$telephone,$fax,$_POST['adresse'],$_POST['adresse2'],$_POST['pays']);

	$ClientManage->modifierClient($Client,$_POST['id']);
	
	//header('Location: afficher.php);
    													
?>

