<?php
	session_start();
	include '../core/panierC.php';
	$pan=new panierC();
	if (isset($_SESSION['id']))
		$pan->modifierPanier($_SESSION['id'],$_POST['id_produit'],$_POST['qte']);
	else 
		$pan->modifierPanierSession($_POST['id_produit'],$_POST['qte']);
	return true;
?>